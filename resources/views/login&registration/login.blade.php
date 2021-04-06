@extends('layouts.master') 
@section('title', 'Login Page')

@section('stylesheets')
<link rel="stylesheet" href="resources/assets/css/Login-Form-Clean.css">
<link rel="stylesheet" href="resources/assets/css/Login-Form-Dark-1.css">
<link rel="stylesheet" href="resources/assets/css/Login-Form-Dark.css">
@endsection

@section('content')

<section style="height: 730px;width: auto;margin-top: 90px;background: url(&quot;resources/assets/img/mountain_bg.jpg&quot;);padding: 30px;">
    <div class="row justify-content-center align-items-center">
        <div class="col" style="min-width: 280px;">
            <section class="login-dark" style="height: 500px;padding: 0px;margin: 10px;">
                <form action="signin" method="POST" style="background: rgba(255,255,255,0.61);filter: grayscale(0%);">
                <input class="form-control" type="hidden" name = "_token" value = "{{ csrf_token() }}">
                    <h2 class="visually-hidden">Login Form</h2>
                    <div class="illustration"><i class="fa fa-user" style="color: rgb(122,123,125);"></i></div>
                    <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Username" style="font-family: Cabin, sans-serif;"></div>
                    <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" style="font-family: Cabin, sans-serif;"></div>
                    <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Log In</button></div>
                </form>
            </section>
        </div>
        <div class="col" style="height: 175px;">
            <div class="container" style="padding: 25px;height: 175px;">
                <h4 style="width: auto;text-align: center;">New to Operation REdemption?</h4>
                <p class="text-center" style="width: auto;"><a href="registration">Click Here to Register!</a></p>
            </div>
        </div>
    </div>
</section>

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