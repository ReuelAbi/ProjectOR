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
                        <form action="org-profile" method="POST">
                        <input type = "hidden" name = "_token" value = "{{ csrf_token() }}"/>
                            <input type = "hidden" name = "orgId" value = "{{ $resource['RESOURCE_ID'] }}">
                            <input type = "hidden" name = "orgName" value = "{{ $resource['NAME'] }}">
                            <input type = "hidden" name = "orgDesc" value = "{{ $resource['DESCRIPTION'] }}">
                            <input type = "hidden" name = "orgType" value = "{{ $resource['TYPE'] }}">
                        	<button class="btn btn-primary" type="submit" value="{{ $resource['RESOURCE_ID'] }}" style="font-family: Cabin, sans-serif;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;background: rgb(0,0,0);color: var(--bs-white);border-color: rgb(0,0,0);">more</button>
                        </form>                    	
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</section>
@endsection