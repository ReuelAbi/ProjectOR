@extends('layouts.master')
@section('title', 'Registration Page')

@push('styles')
<link rel="stylesheet" href="resources/assets/css/Login-Form-Clean.css">
<link rel="stylesheet" href="resources/assets/css/Login-Form-Dark-1.css">
<link rel="stylesheet" href="resources/assets/css/Login-Form-Dark.css">
@endpush

@section('content')
<section style="height: 730px;width: auto;margin-top: 90px;background: url(&quot;resources/assets/img/mountain_bg.jpg&quot;);padding: 0px;">
    <div class="row justify-content-center align-items-center" style="height: 700px;">
        <div class="col" style="min-width: 280px;height: 690px;">
            <section class="text-center login-dark" style="height: 685px;padding: 0px;margin: 0px;">
                <h1>Registration Form</h1>
                <form action="register" method="POST" style="background: rgba(255,255,255,0.61);filter: grayscale(0%);height: 619px;margin-top: 20px;padding-top: 25px;">
                <input class="form-control" type="hidden" name = "_token" value = "{{ csrf_token() }}">
                    <div class="illustration"><i class="fa fa-user" style="color: rgb(122,123,125);"></i></div>
                    <div class="mb-3"><input class="form-control" type="text" name="firstname" placeholder="First Name" style="font-family: Cabin, sans-serif;"></div>
                    <div class="mb-3"><input class="form-control" type="text" name="lastname" placeholder="Last Name" style="font-family: Cabin, sans-serif;"></div>
                    <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Username" style="font-family: Cabin, sans-serif;"></div>
                    <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" style="font-family: Cabin, sans-serif;"></div>
                    <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" style="font-family: Cabin, sans-serif;"></div>
                    <div class="mb-3"><input class="form-control" type="tel" name="phone" placeholder="Phone" style="font-family: Cabin, sans-serif;"></div>
                    <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Register</button></div>
                </form>
            </section>
        </div>
    </div>
</section>
@endsection