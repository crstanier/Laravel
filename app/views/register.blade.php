@extends('default')

@section('content')
	

	<h1>Registration</h1>

	{{ Form::open(['route' => 'users.store']) }}
		
		<div>
		{{ Form::label('email','Email Address:') }}
		{{ Form::email('email') }}
		{{ $errors->first('email') }}
		</div>

		{{ Form::label('password','Password:') }}
		{{ Form::password('password') }}
		{{ $errors->first('password') }}
		</div>

		<div>
		{{ Form::label('passwordVerify','Confirm your password:') }}
		{{ Form::password('password') }}
		{{ $errors->first('passwordVerify','You must confirm your password') }}
		</div>
		
		<div>

		{{ Form::label('firstname','First Name:') }}
		{{ Form::text('firstname') }}
		{{ $errors->first('firstname') }}
		</div>
		
		<div>

		{{ Form::label('lastname','Last Name:') }}
		{{ Form::text('lastname') }}
		{{ $errors->first('lastname') }}	
		</div>

		{{ Form::submit('Register') }}	

	{{ Form::close() }}
	

@stop