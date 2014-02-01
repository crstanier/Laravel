@extends('default')

@section('content')
	

	<h1>Users List</h1>

	@foreach($data['users'] as $user)

		<b>{{ $user->email }}</b> <em>&nbsp;({{ $user->first_name }} {{ $user->last_name }} )</em><br />

	@endforeach
	

@stop