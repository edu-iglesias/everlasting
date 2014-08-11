@extends('layouts.login')

@section('content')
    <style type="text/css">
        body {
            background-color: #333333;
        }
    </style>
	<!-- Creates the form -->
    <?php phpinfo() ?>
    <?php
        session_start();
        $_SESSION['test'] = "okay";
        echo $_SESSION['test'];
    ?>
    {{ Form::open(array('class' => 'form-signin', 'role' => 'form')) }}
    	<!-- Adds the logo -->
    	{{ HTML::image('img/logo2.png', 'Tarlac Procurement Tracking System', array('id' => 'logo')) }}

    	<!-- Error Message -->
        @if ( Session::get('deactivated') )
            
            <div class="alert alert-danger">
                <p>Your account has been deactivated. Please consult authorized personnel.</p>
            </div>
        @endif
        
		@if ( Session::get('error') )
			
            <div class="alert alert-danger">
            	<p>User and password does not match. Please try again.</p>
            </div>
        @endif

        

        <!-- Notice Message -->
        @if ( Session::get('notice') )
            <div class="alert alert-warning">
            	{{{ Session::get('notice') }}}
        	</div>
        @endif

		{{ Form::text('username', null, array('class' => 'form-control', 'placeholder' => 'Username')) }}
		{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
		<br/>
		{{ Form::submit('Log in', array('class' => 'btn btn-lg btn-success btn-block')) }}
	{{ Form::close() }}
@stop