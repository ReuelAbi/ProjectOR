@extends('layouts.master')
@section('title', 'Resources - OperationRedemption')

@section('stylesheets')
<link rel="stylesheet" href="resources/assets/css/Team-Grid.css">
@endsection

@section('content')
<section class="align-items-md-center" style="margin-top: 90px;">
    <section class="team-grid" style="background: rgb(255, 255, 255);">
        <div class="container" style="padding: 50px;">
            <div class="intro">
                <h2 class="text-center">Resources</h2>
                <p class="text-center">In the city of Phoenix, there are many resources!<br><br>Sadly, people who need these resources end up not knowing about them.&nbsp;<br><br>This application bridges the gap!</p>
            </div>
            <div class="row justify-content-center people">
            	@foreach($resources as $key => $resource)
                    <div class="col-md-4 col-lg-3 item" data-bss-hover-animate="pulse" style="padding: 25px;border-radius: 22px;border-style: solid;margin: 30px;background: #ffffff;box-shadow: 6px 6px 5px;">
                        <h4 style="text-align: center;">{{ $resource['NAME'] }}</h4>
                        <p class="text-break">{{ $resource['DESCRIPTION'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</section>
@endsection