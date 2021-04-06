@extends('layouts.master')
@section('title', 'Home - OperationRedemption')

@section('content')    
    <header class="masthead" style="background-image: url('resources/assets/img/intro-bg.jpg');">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto" style="border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;">
                        <h1 class="brand-heading">Operation Redemption</h1>
                        <div>
                            <p class="intro-text">Project engaging in society's pain<br>To help in the process of redemption</p>
                            @if(Session::get('principal'))
                            <form action="survey" method="POST">
                                <input type = "hidden" name = "_token" value = "{{ csrf_token() }}"/>
                                <button class="btn btn-primary" type="submit" style="font-family: Cabin, sans-serif;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;background: rgb(0,0,0);color: var(--light);border-color: rgb(0,0,0);">Start</button>
                            </form>
                            @else
                            <form action="login" method="GET">
                                <input type = "hidden" name = "_token" value = "{{ csrf_token() }}"/>
                                <button class="btn btn-primary" type="submit" style="font-family: Cabin, sans-serif;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;background: rgb(0,0,0);color: var(--light);border-color: rgb(0,0,0);">Start</button>
                            </form>
                            @endif
                        </div><a class="btn btn-link btn-circle" role="button" href="#about"><i class="fa fa-angle-double-down animated"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="about" class="content-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>About Operation Redemption</h2>
                    <p>This project started off in hope that the helpless in the city of Phoenix may receive help by first connecting with existing resources, then with local churches, and even with the City of Phoenix's programs.</p>
                    <p>If you are homeless, foster, fresh out of foster care, widow, previously jailed or prisoned and want to be redeemed, please go through the website. This is dedicated for you.</p>
                    <p>If interested in this project, my contact is right below. Just click 'Contact' on the navbar or just scroll to the bottom on this Home Page.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="content-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Contact</h2>
                    <p>Check out my Portfolio and GitHub by clicking on the links and you can contact me for any projects or employment!</p>
                    <ul class="list-inline banner-social-buttons">  
                        <li class="list-inline-item">&nbsp;
                            <form action="https://www.notion.so/Reuel-Maddela-s-Portfolio-7d709b8c601d4f739cdcf333ed95c0af" target="__blank">
                            	<button class="btn btn-primary btn-lg btn-default" type="submit"><i class="fa fa-google-plus fa-fw"></i><span class="network-name">&nbsp; Portfolio</span></button>
                        	</form>
                    	</li>
                        <li class="list-inline-item">&nbsp;
                        	<form action="https://www.linkedin.com/in/reuel-maddela-847bba148/" target="__blank">
                            	<button class="btn btn-primary btn-lg btn-default" type="submit"><i class="fa fa-twitter fa-fw"></i><span class="network-name">&nbsp;LinkedIn</span></button>
                        	</form>
                        </li>
                        <li class="list-inline-item">&nbsp;
                        	<form action="https://github.com/ReuelAbi" target="__blank">
                        		<button class="btn btn-primary btn-lg btn-default" type="submit"><i class="fa fa-github fa-fw"></i><span class="network-name">&nbsp;GitHub</span></button>
                    		</form>
                    	</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
