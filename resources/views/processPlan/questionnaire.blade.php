@extends('layouts.master') @section('title', 'Survey') @section('content')
<h1>Welcome to Operation Redemption</h1>
<br>

<p></p>
<ol>
	<form action="flowplan" method="POST">
	<input type = "hidden" name = "_token" value = "{{ csrf_token() }}"/>
	@foreach($surveys as $key => $survey)
	<li>
		<h3>{{ $survey['QUESTION'] }}</h3><br>
		<p><input type="checkbox" name="option{{$key}}One"/>{{ $survey['FIRST_OPTION'] }}</p>
		<p><input type="checkbox" name="option{{$key}}Two"/>{{ $survey['SECOND_OPTION'] }}</p>
		@if($survey['THIRD_OPTION'] != null)
		<p><input type="checkbox" name="option{{$key}}Three"/>{{ $survey['THIRD_OPTION'] }}</p>
		<p><input type="checkbox" name="option{{$key}}Four"/>{{ $survey['FOURTH_OPTION'] }}</p>
		@endif
		
		<!-- <p>1. {{ $survey['FIRST_OPTION'] }}</p><br>
		<p>2. {{ $survey['SECOND_OPTION'] }}</p>
		<p>3. {{ $survey['THIRD_OPTION'] }}</p>
		<p>4. {{ $survey['FOURTH_OPTION'] }}</p> -->
	</li>
	@endforeach
	<button type="submit">Submit</button>
	</form>

</ol>
<br>
<a href="login">Login Here</a>
<br>
<a href="registration">Register Here</a>
@endsection
