@extends('layouts.master')

@section('title', 'Error Page')
@section('content')
	<div>
		<p>Common Error.</p>
		
		<br>
		<?php echo $message; ?>
		
		<a href="login">Login</a>
	</div>
@endsection