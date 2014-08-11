@extends('layouts.default')
@section('content')
<style type="text/css">
	th,td {
		text-align: center;
		font-size: 12px;
	}

	@media print /*FOR PRINT LAYOUT*/
    {    
        .no-print, .no-print *
        {
            display: none !important;
        }
            
        table, tr, td, th, p, h1, h2, h3, h4, h5
        {
            border-collapse: collapse !important;
            padding : 0px !important;
            font-size : 86% !important;
            height : 4px !important;
        }

        .panel, .panel-heading
        {
            margin: 0px !important;
            /*padding : 5px !important;*/
        }

        table {
        	margin-top: 20px;
        }
    }
</style>
	<br/>
	<br/>
	<div class="btn-group pull-left col-md-6 no-print">
        <button class="btn btn-info no-print" onclick="window.print()">
            <span class="glyphicon glyphicon-print"></span>&nbsp;&nbsp;Print
        </button>
		<button type="button" class="btn btn-default no-print" onclick="window.location.href='{{ URL::to('back') }}'">
			<span class="glyphicon glyphicon-step-backward"></span>&nbsp;Back
		</button>		
	</div>
	<div class="col-md-3 no-print">
		<?php $searchBy = 0; ?> <!-- REMOVE THIS EVENTUALLY -->            
			<select id="searchBy" name="searchBy" class="form-control" onchange="changeSearch(this.value)">
                <option value="0" <?php if($searchBy == '0'){ echo "selected";} ?> >Search by</option>
                <option value="all" <?php if($searchBy == 'all'){ echo "selected";} ?> >Display All</option>
                <option value="controlNo" <?php if($searchBy == 'controlNo'){ echo "selected";} ?> >Control No.</option>
                <option value="projectPurpose" <?php if($searchBy == 'projectPurpose'){ echo "selected";} ?> >Project/Purpose</option>
                <option value="1" <?php if($searchBy == '1'){ echo "selected";} ?> >Mode-SVP Below 50k</option>
                <option value="2" <?php if($searchBy == '2'){ echo "selected";} ?> >Mode-SVP Above 50k,Below 500k</option>
                <option value="3" <?php if($searchBy == '3'){ echo "selected";} ?> >Mode-Bidding</option>
                <option value="4" <?php if($searchBy == '4'){ echo "selected";} ?> >Mode-Pakyaw</option>
                <option value="5" <?php if($searchBy == '5'){ echo "selected";} ?> >Mode-Direct Contracting</option>
                <option value="Shopping" <?php if($searchBy == 'Shopping'){ echo "selected";} ?> >Mode-Shopping</option>
                <option value="amount" <?php if($searchBy == 'amount'){ echo "selected";} ?>>Amount</option>
                <option value="dateReceived" <?php if($searchBy == 'dateReceived'){ echo "selected";} ?>>Date Received</option>
            </select>
        </div>   
	<div class="input-group col-md-3 no-print" id="searchBox">
      <input onkeyup="disableButton()"id="searchTerm" name="searchTerm" placeholder="Enter search keywords" type="text" class="form-control" onchange="detectInput()">
      <span class="input-group-btn">
        <button class="btn btn-primary" name="searchButton" id="searchButton" type="submit">Search</button>
      </span>
    </div>
<div style="margin-top: 30px">
	<table class="table table-striped display" border="1">
		<thead>
			<th width="9.09%"> DATE </th>
			<th width="9.09%"> BAC NO </th>
			<th width="9.09%"> DEPT </th>
			<th width="9.09%"> PARTICULARS </th>
			<th width="9.09%"> BUDGET </th>
			<th width="9.09%"> SOURCE OF FUNDING </th>
			<th width="9.09%"> PR AMOUNT </th>
			<th width="9.09%"> DATE APPROVED </th>
			<th width="9.09%"> MOP </th>
			<th width="9.09%"> SUPPLIER </th>
			<th width="9.09%"> REMARKS </th>
		</thead>
		<tbody>
			@foreach($requests as $request)
				<tr>
					<td>
						<?php $prDate = DB::table('purchase_request')->where('controlNo', '=', $request->controlNo)->first(); ?>
						{{{(new \DateTime($prDate->dateReceived))->format('Y-m-d')}}}
					</td>
					<td>{{{str_pad($request->controlNo, 5, '0', STR_PAD_LEFT)}}}</td>
					<td>{{{$request->officeName}}}</td>
					<td>{{{$request->projectPurpose}}}</td>
					<td>
						@if($request->dateFinished == '0000-00-00 00:00:00')
							<font color="grey">N/A</font>
						@else
							{{{(new \DateTime($request->dateFinished))->format('Y-m-d')}}}
						@endif
					</td>
					<td>{{{$request->sourceOfFund}}}</td>
					<td>{{{number_format($request->amount)}}}</td>
					<td>
						<?php
							$dateApproved = DB::table('purchase_request')
							->join('document', 'purchase_request.id', '=', 'document.pr_id')
							->join('taskdetails', 'taskdetails.doc_id', '=', 'document.id')
							->join('tasks', 'tasks.id', '=', 'taskdetails.task_id')->where('tasks.taskName', '=', 'Date Signed by Gov:')->where('tasks.section_id', '=', '1')->where('purchase_request.status', '=', 'Active')->where('purchase_request.controlNo', '=', $request->controlNo)->first();
						?>
						@if($dateApproved->custom1 == "")
							<font color="grey">N/A</font>
						@else
							{{{ $dateApproved->custom1 }}}			
						@endif
					</td>
                    <td>
                    	<?php 
		                    $doc = new Purchase; 
	                        $doc = DB::table('document')->where('pr_id', $request->id)->get(); 
                    	?>
                        @foreach ($doc as $docs) 
                            <?php  
                                $workflow = Workflow::find($docs->work_id)->workFlowName; 
                                if($workflow == "Small Value Procurement (Below P50,000)")
                                    // echo "SVP (Below P50,000)";
                                    echo "SVP";
                                else if($workflow == "Small Value Procurement (Above P50,000 Below P500,000)")
                                    // echo "SVP (Above P50,000 Below P500,000)";
                                    echo "SVP";
                                else if($workflow == "Bidding (Above P500,000)")
                                	echo "BIDDING";
                                    // echo $workflow = Workflow::find($docs->work_id)->workFlowName;
                                if($request->otherType != "Pakyaw" || $request->otherType != "Direct Contracting"){}
                                else if($request->otherType != "")
                                        echo "<br> <i>$request->otherType</i>";
                            ?>
                        @endforeach
                    </td>
					<td>
						<?php
							$supplier = DB::table('purchase_request')
							->join('document', 'purchase_request.id', '=', 'document.pr_id')
							->join('taskdetails', 'taskdetails.doc_id', '=', 'document.id')
							->join('tasks', 'tasks.id', '=', 'taskdetails.task_id')->where('tasks.taskName', '=', 'LCRB / HRB / SUPPLIER')->where('purchase_request.status', '=', 'Active')->where('purchase_request.controlNo', '=', $request->controlNo)->first();
						?>
						@if($supplier->custom1 == "")
							<font color="grey">N/A</font>
						@else
							{{{ $supplier->custom1 }}}			
						@endif
					</td>
					<td>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div id="pages" align="center" class="no-print">
    @if($pageCounter != 0)
        <center>{{ $requests->links(); }}</center>
    @else
        <p><i>No data available</i></p>
    @endif
</div>
@stop