@extends('layouts.master')
@section('title', 'Home')

@section('content')
	<h1>Welcome to Operation Redemption !</h1>
	<br>
		
	<br>
	
	@if(!Session::get('principal'))
	<a href="login">Login Here</a>
	<br>
	<a href="registration">Register Here</a>
	@endif
@endsection