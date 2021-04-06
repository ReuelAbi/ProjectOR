@extends('layouts.master')
@section('title', 'Org Profile - OperationRedemption')

@section('stylesheets')
<!-- <link rel="stylesheet" href="resources/assets/css/LinkedIn-like-Profile-Box.css"> -->
<link rel="stylesheet" href="{{ asset('resources/assets/css/LinkedIn-like-Profile-Box.css') }}">
@endsection


@section('content')
<section style="margin: 20px;">
    <div style="padding-top: 60px;padding-bottom: 30px;">
        <div class="container" style="padding-bottom: 10px;">
            <div class="text-center">
                <h4 style="font-size: 45px;margin-top: 15px;font-family: Poppins, sans-serif;"><strong>Profile - {{ $org->getName() }}&nbsp;</strong></h4>
                <hr style="border-color: rgb(0,0,0);width: 121px;">
            </div>
            <div class="row justify-content-center align-items-center" style="margin-top: 44px;background: #ffffff;border-radius: 40px;border-style: solid;border-color: rgb(0,0,0);margin-right: 0px;margin-left: 0px;padding: 40px;">
                <div class="col-md-6 col-lg-5 order-2" style="width: 202.831px;margin: 10px;padding: 10px;">
                    <h2 class="h4" style="margin-top: 35px;color: #00b5a8;border-color: #23295f;"><i class="fa fa-user" style="color: #00b5a8;"></i>&nbsp;Contact</h2>
                    <div style="padding-top: 10px;color: rgb(0,0,0);"><span><strong>E-Mail Address</strong></span></div>
                    <div style="color: rgb(0,0,0);"><span>{{ $org->getName() }}@email.com</span></div>
                    <div style="padding-top: 10px;color: rgb(0,0,0);"><span><strong>Type</strong><br><span>{{ $org->getType() }}<br></span></span></div>
                </div>
                <div class="col-md-4 col-lg-3 item" data-bss-hover-animate="pulse" style="padding: 25px;border-radius: 40px;margin: 10px;background: #ffffff;box-shadow: 6px 6px 5px;border-style: solid;border-color: rgb(0,0,0);height: 390px;width: 549.4px;">
                    <h4 style="text-align: center;color: rgb(0,0,0);">{{ $org->getName() }}</h4>
                    <p class="text-break" style="color: rgb(0,0,0);">@if($userInfo['ROLE'] == 0)Admin@else{User}@endif</p>
                    <p class="text-break" style="color: rgb(0,0,0);">{{ $org->getDesc() }}</p>	
                </div>
            </div>
        </div>
    </div>
</section>
@endsection