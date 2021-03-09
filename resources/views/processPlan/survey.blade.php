@extends('layouts.master') @section('title', 'Survey') @section('content')
<h1>Welcome to Operation Redemption</h1>
<br>

<p></p>
<ol>
	
	@foreach($surveys as $key => $survey)
	<li>
		<h3>{{ $survey['QUESTION'] }}</h3><br>
		<p>1. {{ $survey['FIRST_OPTION'] }}</p><br>
		<p>2. {{ $survey['SECOND_OPTION'] }}</p>
		<p>3. {{ $survey['THIRD_OPTION'] }}</p>
		<p>4. {{ $survey['FOURTH_OPTION'] }}</p>
	</li>
	@endforeach

</ol>
<br>
<a href="login">Login Here</a>
<br>
<a href="registration">Register Here</a>
@endsection
