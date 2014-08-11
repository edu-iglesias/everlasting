@extends('layouts.dashboard')

@section('content')
{{Session::put('backTo','purchaseRequest/view');}}

<h1 class="pull-left">List of Active Purchase Requests</h1>
    
    @if ( Entrust::hasRole('Administrator') || Entrust::hasRole('Procurement Personnel'))
      <div class="pull-right options">
            <a href="{{ URL::to('purchaseRequest/create') }}" class="btn btn-success">Create New</a>
      </div>
    @endif

    <hr class="clear" />
<div id="pr_form">
    <form action="submitForm/" id="new_form" method="post" id="confirm">
</div>

<div class="modal fade" id="confirmDelete" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><b>Cancel Purchase Request</b></h4>
                </div>
                <div class="modal-body">
                    <p>Reason for cancelling purchase request:</p>
                    <textarea id="reason" class="form-control" rows="3" maxlength="255", style="resize:vertical"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success" onClick="submitForm()">Submit</button>
                    
                </div>
            
            </div>
        </div>
    </div>
</form>
@if(Session::get('notice'))
    <div class="alert alert-success"> {{ Session::get('notice') }}</div> 
@endif
    
    <!-- START OF SEARCH BOX -->
    <form method="POST" action="">
        <div align="left" class="col-md-6" id="noOfResult"></div>   
        <div class="col-md-3" style="">
            <select id="searchBy" name="searchBy" class="form-control" onchange="changeSearch(this.value)">
                <option value="0" <?php if($searchBy == '0'){ echo "selected";} ?> >Search by</option>
                <option value="controlNo" <?php if($searchBy == 'controlNo'){ echo "selected";} ?> >Control No.</option>
                <option value="projectPurpose" <?php if($searchBy == 'projectPurpose'){ echo "selected";} ?> >Project/Purpose</option>
                <option value="1" <?php if($searchBy == '1'){ echo "selected";} ?> >Mode-SVP Below 50k</option>
                <option value="2" <?php if($searchBy == '2'){ echo "selected";} ?> >Mode-SVP Above 50k Below 499k</option>
                <option value="3" <?php if($searchBy == '3'){ echo "selected";} ?> >Mode-Bidding</option>
                <option value="4" <?php if($searchBy == '4'){ echo "selected";} ?> >Mode-Pakyaw</option>
                <option value="5" <?php if($searchBy == '5'){ echo "selected";} ?> >Mode-Direct Contracting</option>
                <option value="amount" <?php if($searchBy == 'amount'){ echo "selected";} ?>>Amount</option>
                <option value="dateReceived" <?php if($searchBy == 'dateReceived'){ echo "selected";} ?>>Date Received</option>
            </select>
        </div>   
        <div class="input-group">
          <div class="input-group-btn">
            <button type="submit" class="btn btn-default" name="searchButton" id="searchButton"><span class="glyphicon glyphicon-search"></span></button>
          </div>
          <input id="searchTerm" name="searchTerm" type="text" class="form-control" placeholder="Enter search keywords">
        </div>
    <br/>
    </form>    
    <!-- END OF SEARCH BOX -->
    
    <table class="table table-striped display">
        <thead>
            <tr>
                <th>Control No.</th>
                <th>Project/Purpose</th>
                <th>Mode</th>
                <th style="text-align: center">Amount</th>
                <th>Date Received</th>
                @if(!Entrust::hasRole('Requisitioner'))
                    <th>Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($requests as $request)
                <tr id="content"
                    <?php
                        $useroffice=Auth::user()->office_id;
                        $doc = new Document; 
                        $doc = DB::table('document')->where('pr_id', $request->id)->first();  
                        $doc_id= $doc->id;
                        $userx= Auth::User()->id;
                        $counter=0;
                        $counter=Count::where('user_id', $userx)->where('doc_id', $doc_id)->count();
                        
                        if ($counter!=0)
                            echo "class ='success'";
                    ?>
                >
                    <td width="10%"><?php echo str_pad($request->controlNo, 5, '0', STR_PAD_LEFT); ?></td>
                    <td width="27%">
                        @if(Entrust::hasRole('Administrator')||Entrust::hasRole('Procurement Personnel'))
                            <a data-toggle="tooltip" data-placement="top" class="purpose" href="{{ URL::to('purchaseRequest/vieweach/'. $request->id) }}" title="View Project Details">
                                {{ $request->projectPurpose; }}
                            </a>
                        @else
                            {{ $request->projectPurpose; }}
                        @endif
                    </td>
                    <?php 
                        $doc = new Purchase; 
                        $doc = DB::table('document')->where('pr_id', $request->id)->get(); 
                    ?>
                    <td width="18%">
                        @foreach ($doc as $docs) 
                            <?php  
                                $workflow = Workflow::find($docs->work_id)->workFlowName; 
                                if($workflow == "Small Value Procurement (Below P50,000)")
                                    echo "SVP (Below P50,000)";
                                else if($workflow == "Small Value Procurement (Above P50,000 Below P500,000)")
                                    echo "SVP (Above P50,000 Below P500,000)";
                                else
                                    echo $workflow = Workflow::find($docs->work_id)->workFlowName;
                                if($request->otherType != "")
                                        echo "<br> <i>$request->otherType</i>";
                            ?>
                        @endforeach
                    </td>
                    <td align="right" width="12%"> {{{ $request->amount }}} </td>
                    <td align="center" width="20%">{{{ $request->dateReceived }}}</td>
                    @if(!Entrust::hasRole('Requisitioner'))
                        @if(Entrust::hasRole('Procurement Personnel'))
                            @if(Auth::user()->id == $request->created_by)
                                <td width="13%">
                                    <a data-toggle="tooltip" data-placement="top" class='iframe btn btn-success' href='edit/{{$request->id}}' title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                    <form method="POST" action="delete" id="myForm_{{ $request->id }}" name="myForm" style="display: -webkit-inline-box;">
                                       <input type="hidden" name="del_pr" value="{{ $request->id }}">
                                       <center> <a href="changeForm/{{ $request->id }}" class="btn ajax btn-danger" data-method="post" data-replace="#pr_form" data-toggle="modal" data-target="#confirmDelete" data-toggle="tooltip" title="Cancel"><span class="glyphicon glyphicon-remove"></span></a></center>
                                   </form>
                                </td>
                            @else
                                <td width="13%"></td>
                            @endif
                        @else
                            <td width="13%">
                                <a data-toggle="tooltip" data-placement="top" class='iframe btn btn-success' href='edit/{{$request->id}}' title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                <form method="POST" action="delete" id="myForm_{{ $request->id }}" name="myForm" style="display: -webkit-inline-box;">
                                   <input type="hidden" name="del_pr" value="{{ $request->id }}">
                                   <center> <a href="changeForm/{{ $request->id }}" class="btn ajax btn-danger" data-method="post" data-replace="#pr_form" data-toggle="modal" data-target="#confirmDelete" data-toggle="tooltip" title="Cancel"><span class="glyphicon glyphicon-remove"></span></a></center>
                               </form>
                            </td>
                        @endif
                    @endif
                </tr>
            @endforeach
        </tbody>
    <table>
    <div id="pages" align="center">
        @if($pageCounter != 0)
            <center></center>
        @else
            <p><i>No data available</i></p>
        @endif
    </div>
 
{{Session::forget('notice'); }}
{{Session::forget('main_error'); }}
{{Session::forget('imgerror'); }}
{{Session::forget('imgsuccess'); }}
{{Session::forget('error_projectPurpose');}}
{{Session::forget('error_sourceOfFund');}}
{{Session::forget('error_office');}}
{{Session::forget('error_requisitioner');}}
{{Session::forget('error_dateRequested');}}
{{Session::forget('error_modeOfProcurement');}}
{{Session::forget('imgerror'); }}

@stop

@section('footer')
    {{ HTML::script('js/bootstrap-ajax.js');}}


@stop
 <script type="text/javascript">
        // START *code for search box
        window.onload = function()
        {
            if(document.getElementById('searchBy').value == '0')
            {
                document.getElementById('searchTerm').disabled = true;
                document.getElementById('searchButton').disabled = true;
            }
        }

        function changeSearch(value)
        {
            if(value == '0')
            {
                document.getElementById('searchTerm').disabled = true;
                document.getElementById('searchButton').disabled = true;
            }
            else
            {
                document.getElementById('searchTerm').disabled = false;
                document.getElementById('searchButton').disabled = false;    
            }
        }

        $('input.filter').on('keyup', function() 
        {
            var rex = new RegExp($(this).val(), 'i');
            var div_noOfResult = document.getElementById('noOfResult');

            if(rex == '/(?:)/i')
            {
                document.getElementById('table_id2').style.display = 'table';
                $('.searchable tr').hide();
                $('.searchable tr').filter(function() {
                    return rex.test($(this).text());
                }).show();
                document.getElementById('table_id').style.display = 'table';
                document.getElementById('pages').style.display = 'block';
                document.getElementById('table_id2').style.display = 'none';
                document.getElementById('table_id3').style.display = 'none';

                // No of Result
                var page = getQueryVariable('page');
                var countPR = document.getElementById('countPR').value;

                if(page == 'false'|| page == 1)
                {
                    if(countPR <= 10)
                        var displayResult = countPR + ' of ' + countPR;
                    else
                        var displayResult = "10 of " + countPR;
                }
                else
                {
                    var lastPR = 10 * page;
                    var firstPR = lastPR - 9;
                   
                    if(firstPR >=  countPR)
                    {
                         displayResult = firstPR + " - " + lastPR + " of " + countPR;
                    }
                    else
                    {
                        var remainingPR = countPR - firstPR;
                        lastPR = firstPR + remainingPR;
                        var lastPR2 = page * 10;

                        if(remainingPR == 0)
                            var displayResult = firstPR + " of " + countPR;
                        else if(remainingPR >= 10)
                            var displayResult = firstPR + " - " + lastPR2 + " of " + countPR; 
                        else
                            var displayResult = firstPR + " - " + lastPR + " of " + countPR;
                    }
                }

                document.getElementById('noOfResult').innerHTML = displayResult;

            }
            else
            {
                document.getElementById('table_id2').style.display = 'table';
                $('.searchable tr').hide();
                $('.searchable tr').filter(function() {
                    return rex.test($(this).text());
                }).show();

                var rowNum = $('#table_id2 tr:visible ').length;
                if(rowNum == 1)
                {
                    document.getElementById('table_id').style.display = 'none';
                    document.getElementById('pages').style.display = 'none';
                    document.getElementById('table_id2').style.display = 'none';
                    document.getElementById('table_id3').style.display = 'block';
                }
                else
                {
                    document.getElementById('table_id').style.display = 'none';
                    document.getElementById('pages').style.display = 'none';
                    document.getElementById('table_id2').style.display = 'table';
                    document.getElementById('table_id3').style.display = 'none';
                }
                    var noOfSearched = rowNum - 1; 
                    document.getElementById('noOfResult').innerHTML =  noOfSearched+ " result(s) ";
                
            }
            
        });
       
        // END

        $('#confirmDelete').on('show.bs.modal', function (e) {
            $message = $(e.relatedTarget).attr('data-message');
            $(this).find('.modal-body p').text($message);

            $title = $(e.relatedTarget).attr('data-title');
            $(this).find('.modal-title').text($title);

            var form = $(e.relatedTarget).closest('form');

            $(this).find('.modal-footer #confirm').data('form', form);
        });

        $('#confirmDelete').find('.modal-footer #confirm').on('click', function(){
            //$(this).data('form').submit();
            var name = "myForm_" + window.my_id; 
            document.getElementById(name).submit();
            //alert(name);
        });
        function hello(pass_id)
        {
            window.my_id = pass_id;
           // alert(window.my_id);
        }

        function submitForm()
        {
            var reason = document.getElementById('reason').value;
            document.getElementById('hide_reason').value = reason;
            //alert(reason);
            document.getElementById("form").submit();
        }

        function getQueryVariable(variable)
        {
               var query = window.location.search.substring(1);
               var vars = query.split("&");
               for (var i=0;i<vars.length;i++) {
                       var pair = vars[i].split("=");
                       if(pair[0] == variable){return pair[1];}
               }
               return(1);
        }
        
    </script>