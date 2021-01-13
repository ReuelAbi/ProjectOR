@extends('layouts.master')
@section('title', 'Login Page')

@section('content')
		<form action = "login" method = "POST">
			<input type = "hidden" name = "_token" value = "<?php echo csrf_token()?>"/>
			<h2>Login</h2>
			<table>
				<tr>
					<td>Username: </td>
					<td><input type = "text" name = "username" /></td>
				</tr>
				
				<tr>
					<td>Password: </td>
					<td><input type = "password" name = "password" /></td>
				</tr>
				
				<tr>
					<td colspan = "2" align = "center">
						<input type = "submit" value = "Login" />
					</td>
				</tr>
			</table>
		</form>
		
		<a href="registration">Register Here</a>
@endsection