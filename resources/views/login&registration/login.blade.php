@extends('layouts.master') 
@section('title', 'Login Page')

@section('stylesheets')
<link rel="stylesheet" href="resources/assets/css/Login-Form-Clean.css">
<link rel="stylesheet" href="resources/assets/css/Login-Form-Dark-1.css">
<link rel="stylesheet" href="resources/assets/css/Login-Form-Dark.css">
@endsection

@section('content')

<div class="container text-start" style="background-image: url('resources/assets/img/intro-bg.jpg');height: 1000px;padding: 25px;margin: 0px;">
        <div class="row" style="margin: 6px;">
            <div class="col offset-lg-0">
                <h2 class="text-center">Why Log In?</h2><p class="text-center">If a user can log in and have an account, then you can be given the right resources, right connections according to your need.</p>
            </div>
        </div>
        <div class="row">
            <div class="col" style="padding: 0px;height: 96.6px;">
                <h4 class="text-center">Don't have an Account? Register Here</h4><p class="text-center"><a href="registration">Click here for registration</a></p>
            </div>
        </div>
        <section class="login-dark" style="height: 500px;padding: 0px;margin: 10px;">
            <form action="signin" method="POST" style="background: rgba(255,255,255,0.61);filter: grayscale(0%);">
            <input class="form-control" type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <h2 class="visually-hidden">Login Form</h2>
                <div class="illustration"><i class="fa fa-user" style="color: rgb(122,123,125);"></i></div>
                <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Username" style="font-family: Cabin, sans-serif;"/></div>
                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" style="font-family: Cabin, sans-serif;"/></div>
                <!-- <input type="submit" value="login"/> -->
                <div class="mb-3"><button class="btn btn-primary d-block w-100"	type="submit">Log In</button></div><a class="forgot" href="#">Forgot your email or password?</a>
            </form>
        </section>
</div>

@endsection

<!-- <form action="signin" method="POST">
	<input type="hidden" name="_token" value=" echo csrf_token()" />
	<h2>Login</h2>
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" /></td>
		</tr>

		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" /></td>
		</tr>

		<tr>
			<td colspan="2" align="center"><input type="submit" value="Login" />
			</td>
		</tr>
	</table>
</form>

<a href="registration">Register Here</a> -->