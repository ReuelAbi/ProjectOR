@extends('layouts.master')
@section('title', 'Survey - OperationRedemption')

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/css/Survey.css') }}">
@endpush

@section('content')
<form action="viewFlowPlan" method="POST">
<input type="hidden" name = "_token" value = "{{ csrf_token() }}">
    <div>
        <div class="carousel slide" data-bs-ride="carousel" id="carousel-1" style="margin-top: 90px;">
        	<ol class="carousel-indicators">
        		@foreach($surveys as $survey)
        			<li data-bs-target="#carousel-1" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
        		@endforeach
        <!--         <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li> -->
        <!--         <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li> -->
            </ol>
            <div class="carousel-inner">
                
                	@foreach($surveys as $survey)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}" style="margin-top: 10px;margin-right: 0px;background: url(&quot;resources/assets/img/intro-bg.jpg&quot;);background-size: cover;">
                        <div class="row justify-content-center align-items-center" style="height: 615px;margin-right: 75px;margin-left: 75px;">
                            <div class="col-auto align-self-center" style="width: 951px;height: 500px;padding: 50px;margin: 30px;">
                                <h1 style="margin-top: 25px;padding: 10px;margin-left: 30px;">{{ $survey['QUESTION'] }}</h1>
                        		@if($survey['FIRST_OPTION'])
                        			<div style="font-size: 18px;margin: 10px;padding: 15px;margin-left: 30px;"><input type="checkbox" name="ques{{ $loop->index }}One">{{ $survey['FIRST_OPTION'] }}</div>
                        		@endif
                        		@if($survey['SECOND_OPTION'])
                        			<div style="font-size: 18px;margin: 10px;padding: 15px;margin-left: 30px;"><input type="checkbox" name="ques{{ $loop->index }}Two">{{ $survey['SECOND_OPTION'] }}</div>
                        		@endif
                        		@if($survey['THIRD_OPTION'])
                        			<div style="font-size: 18px;margin: 10px;padding: 15px;margin-left: 30px;"><input type="checkbox" name="ques{{ $loop->index }}Three">{{ $survey['THIRD_OPTION'] }}</div>
                        		@endif
                        		@if($survey['FOURTH_OPTION'])
                        			<div style="font-size: 18px;margin: 10px;padding: 15px;margin-left: 30px;"><input type="checkbox" name="ques{{ $loop->index }}Four">{{ $survey['FOURTH_OPTION'] }}</div>
                        		@endif
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
            <div>
            	<a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev" style="margin-top: 10px;"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a>
            	<a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next" style="margin-top: 10px;"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a>
            </div>
        </div>
    </div>
    <div class="text-center" style="margin: 10px;padding: 5px;"><button class="btn btn-primary shadow-lg" type="submit" style="font-family: Cabin, sans-serif;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;background: var(--bs-blue);color: var(--light);border-color: rgb(0,0,0);">Submit</button></div>
</form>
@endsection

@push('scripts')

@endpush