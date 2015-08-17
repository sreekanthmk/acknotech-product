@extends('master')

@section('content')

<style>
    #company{
    display: none;
    }
</style>

	<h1>Register</h1>


	{!! Form::open(['url' => '/auth/register',  'id' => 'registration_form']) !!}



		<div class="form-group">
			{!! Form::label('username', 'Username:') !!}
			{!! Form::text('username', null, ['class' => 'form-control']) !!}

		</div>

		<div class="form-group">
        	{!! Form::label('firstname', 'First name:') !!}
        	{!! Form::text('firstname', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">
        	{!! Form::label('lastname', 'Last name:') !!}
        	{!! Form::text('lastname', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">
              {!! Form::label('email', 'Email:') !!}
              {!! Form::email('email', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">
               {!! Form::label('password', 'Password:') !!}
               {!! Form::password('password', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">
               {!! Form::label('password_confirmation', 'Retype Password:') !!}
               {!! Form::password('password_confirmation', null, ['class' => 'form-control']) !!}

        </div>



		<div class="form-group">
             {!! Form::label('reg_role', 'Select Your Role:') !!}
             {!! Form::select('reg_role[]', $regrole, null, ['class' => 'form-control', 'multiple']) !!}

        </div>

        <div class="form-group">
             {!! Form::label('user_type', 'User Type:') !!}<br>
             {!! Form::radio('user_type', 'Company', array('class'=>'user-rad')) !!}Company<br>
             {!! Form::radio('user_type', 'Individual', array('id'=>'user-rad')) !!}Individual

        </div>

        <div class="form-group" id="company">
             {!! Form::label('company_title', 'Company Title::') !!}
             {!! Form::text('company_title', null, ['class' => 'form-control']) !!}

        </div>


		<div class="form-group">

			{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

		</div>

	{!! Form::close() !!}

	<!-- {{ var_dump($errors) }} -->
	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

	<script>
	    $(document).ready(function(){
            $(":radio").click(function(){
//            alert($("input[name='user_type']:checked").val())
                if ($("input[name='user_type']:checked").val() == 'Company'){
                    $("#company").css("display", "block");
                }
                else{
                    $("#company").css("display", "none");
                }
            });
        });
	</script>

@stop