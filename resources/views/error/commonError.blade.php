@extends('layouts.master')

@section('title', 'Error Page')
@section('content')
	<div>
		<p>Common Error.</p>
		
		<br>
		<?php echo $message; ?>
		
		<a href="welcome">Login</a>
	</div>
@endsection