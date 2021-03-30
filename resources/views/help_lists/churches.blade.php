@extends('layouts.master')
@section('title', 'Churches - OperationRedemption')

@section('stylesheets')
<link rel="stylesheet" href="resources/assets/css/Team-Grid.css">
@endsection

@section('content')
<section class="align-items-md-center" style="margin-top: 90px;">
    <section class="team-grid" style="background: rgb(255, 255, 255);">
        <div class="container" style="padding: 50px;">
            <div class="intro">
                <h2 class="text-center">Churches</h2>
                <p class="text-center">In the city of Phoenix, there are many churches!<br><br>Sadly sometimes, people get afraid of going to churches.&nbsp;<br><br>Here are a list of churches that are filled with compassionate people!</p>
            </div>
            <div class="row justify-content-center people">
            	@foreach($churches as $key => $church)
                    <div class="col-md-4 col-lg-3 item" data-bss-hover-animate="pulse" style="padding: 25px;border-radius: 22px;border-style: solid;margin: 30px;background: #ffffff;box-shadow: 6px 6px 5px;">
                        <h4 style="text-align: center;">{{ $church['NAME'] }}</h4>
                        <p class="text-break">{{ $church['DESCRIPTION'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</section>
@endsection