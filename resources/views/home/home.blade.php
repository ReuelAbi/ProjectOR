@extends('layouts.master')
@section('title', 'Home - OperationRedemption')

@section('content')    
    <header class="masthead" style="background-image:url('assets/img/intro-bg.jpg');">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto" style="border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;">
                        <h1 class="brand-heading">Operation Redemption</h1>
                        <div>
                            <p class="intro-text">Project engaging in society's pain<br>To help in the process of redemption</p>
                            <form action="survey" method="POST">
                            <input type = "hidden" name = "_token" value = "{{ csrf_token() }}"/>
                            <button class="btn btn-primary" type="submit" style="font-family: Cabin, sans-serif;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;background: rgb(0,0,0);color: var(--light);border-color: rgb(0,0,0);">Start</button>
                            </form>
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
                    <p>Grayscale is a free Bootstrap theme. It can be yours right now, simply download the template on&nbsp;<a href="#">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="content-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Contact</h2>
                    <p>Feel free to leave us a comment on the<a href="#">&nbsp;Grayscale template overview page</a>&nbsp;to give some feedback about this theme!</p>
                    <ul class="list-inline banner-social-buttons">
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-google-plus fa-fw"></i><span class="network-name">&nbsp; Google+</span></button></li>
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-twitter fa-fw"></i><span class="network-name">&nbsp;Twitter</span></button></li>
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-github fa-fw"></i><span class="network-name">&nbsp;github</span></button></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="map-clean"><iframe allowfullscreen="" frameborder="0" src="https://cdn.bootstrapstudio.io/placeholders/map.html" width="100%" height="450"></iframe></div>
    <footer>
        <div class="container text-center">
            <p>Copyright ©&nbsp;OperationRedemption 2021</p>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/grayscale.js"></script>
