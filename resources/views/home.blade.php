<!-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->
<!doctype html>
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
<title>Degym-Home</title>
<!--meta info-->
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="author" content="">
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="stylesheet" href="{{asset('asset/css/style.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('asset/css/bootstrap.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('asset/css/font-awesome.css')}}" type="text/css">
<!--[if !IE 9]><!-->
<link rel="stylesheet" href="{{asset('asset/css/effect.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('asset/css/animation.css')}}" type="text/css">
<!--<![endif]-->
<link rel="stylesheet" href="{{asset('asset/css/masterslider.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('asset/css/ms-fullscreen.css')}}" type="text/css">
<link rel="stylesheet" type="text/css" media="all" href="{{asset('asset/css/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" media="all" href="{{asset('asset/css/owl.transitions.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/color.css')}}" type="text/css">
</head> 
<body id="page-top" class="" data-offset="90" data-target=".navbar-custom" data-spy="scroll">
    <div class="wrapper hide-main-content"> 
	    <section  class="page one-page">
        <!--Menu Mobile-->
        <!--End Menu Mobile-->
        	<div class="content-wrapper">				
				<div id="home">
                	<!--Header-->
                        <header id="header" class="header header-container alt reveal navbar-custom navbar navbar-fixed-top">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2 col-sm-3 col-xs-3 logo">
                                        <a href="index.html"><img src="asset/img/logo.png" alt=""/></a>
                                    </div>
                                    <div class="col-md-10 nav-container">
                                        <nav class="megamenu collapse navbar-collapse navbar-main-collapse navbar-right mainnav col-md-10" role="navigation">
                                            <ul class="nav-menu navbar-nav">
                                                <li class="selected active"><a class="link-menu" href="#home">Home</a></li>
                                                <li><a class="link-menu" href="#location">Gym Location</a></li>
                                                <li><a class="link-menu" href="#class">Our Class</a></li>
                                                <li><a class="link-menu" href="#contact">Contact us</a></li>
                                            </ul>
                                        </nav>							
                                    </div>
                                    <button class="menu-button" id="open-button"></button>
                                </div>
                            </div>
                        </header>
					<!--End Header-->

                    <!--Banner-->
                        <section class="slide-container to-top">
                            <div class="ms-fullscreen-template" id="slider1-wrapper">
                                <!-- masterslider -->
                                <div class="master-slider ms-skin-default" id="masterslider-index">
                                    <div class="ms-slide slide-1" data-delay="0">
                                        <div class="slide-pattern"></div>
                                        <img src="images/blank.gif" data-src="asset/img/bg1.jpeg" alt="lorem ipsum dolor sit"/>
                                        <h3 class="ms-layer hps-title1" style="left:95px"
                                            data-type="text"
                                            data-ease="easeOutExpo"
                                            data-delay="1000"
                                            data-duration="0"
                                            data-effect="skewleft(30,80)"
                                        >
                                            DE GYM FITNESS CLUB
                                        </h3>																												
                                        <h3 class="ms-layer hps-title3" style="left:91px"
                                            data-type="text"
                                            data-delay="1900"
                                            data-duration="0"
                                            data-effect="rotate3dtop(-100,0,0,40,t)"
                                            data-ease="easeOutExpo"
                                        >
                                            We Sculpt Your Body
                                        </h3>
                                        
                                        <h3 class="ms-layer hps-title4" style="left:95px"
                                            data-type="text"
                                            data-delay="2500"
                                            data-duration="0"
                                            data-effect="rotate3dtop(-100,0,0,18,t)"
                                            data-ease="easeOutExpo"
                                        >
                                            Join Now!
                                        </h3>
                                    </div>
                                </div>
                                <!-- end of masterslider -->
                                <div class="to-bottom" id="to-bottom"><i class="fa fa-angle-down"></i></div>
                            </div>
                        </section>
					<!--End Banner-->

                    <div class="contents-main" id="contents-main">
                        <!--About-->
                            <section id="about" class="about">
                                <div class="about-top">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="title-page title-about">
                                                    <h3>About De Gym</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et felis et urna laoreet laoreet. Ut mauris magna, dignissim a dolor ut, molestie malesuada lacus. Ut pulvinar, elit quis aliquam imperdiet, velit eros pharetra mi, id dignissim tortor purus sed purus. Suspendisse eget accumsan nulla. Aliquam erat volutpat. Nullam et neque aliquam sem accumsan vestibulum. Quisque fringilla ipsum lorem, et scelerisque dui convallis a. Morbi dictum mauris nec cursus consequat. Phasellus id nibh non magna tincidunt blandit. Vestibulum facilisis et lacus eu luctus. </p>
                                                </div>
                                            </div>						
                                        </div>
                                    </div>
                                </div>
                            </section>
						<!--End About-->

                        <!--location-->
                            <section id="location" class="man-girl">
                                <div class="container">
                                    <div class="row">									
                                        <div class="content-main content-main-left col-md-6 col-sm-6 col-xs-12">
                                            <div class="img-class img-class-left">
                                                <img src="asset/img/renon.png" alt="">
                                            </div>
                                            <div class="class-content class-content-left">
                                                <div class="title">
                                                    <h3 class="title-men">De Gym Renon</h3>
                                                </div>
                                                <div class="class-content-text">
                                                    <p class="desc-content ">Lorem ipsum dolor sit amet, consectetur adi sollicitudin. Suspendisse pulvinar, 
                                                    velit nec pharetra interdum, ante tellus ornare mi, et mollis tellus neque vitae elit</p>
                                                    <div class="join">Location  : Renon</div>
                                                    <div class="join">Telp      : 085472938485</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-main content-main-right col-md-6 col-sm-6 col-xs-12 ">
                                            <div class="img-class img-class-right">
                                                <a href="{{url('/class')}}"><img src="{{asset('asset/img/kerobokan.png')}}" alt=""></a>
                                            </div>
                                            <div class="class-content class-content-right">
                                                <div class="title">
                                                    <h3 class="title-men"><a href="{{url('/class')}}">De Gym Kerobokan</a></h3>
                                                </div>
                                                <div class="class-content-text">
                                                    <p class="desc-content ">Lorem ipsum dolor sit amet, consectetur adi sollicitudin. Suspendisse pulvinar, 
                                                    velit nec pharetra interdum, ante tellus ornare mi, et mollis tellus neque vitae elit</p>
                                                    <div class="join">Location  : Renon</div>
                                                    <div class="join">Telp      : 085472938485</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
						<!--End location-->

                        
                    </div>
                </div>
            </div>
        </section>
    </div>




    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
	<script type="text/javascript" src="{{asset('asset/js/jquery-2.1.0.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/shortcode-frontend.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/jquery.mixitup.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/classie.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/jquery.easing.1.3.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/parallax/jquery.parallax-1.1.3.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/parallax/jquery.transform2d.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/parallax/script.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/parallax/parallax.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/jquery.scrollTo.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/wow.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/waypoints.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/masterslider.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/banner.js')}}"></script>	
	<script type="text/javascript" src="{{asset('asset/js/isotope.pkgd.min.js')}}"></script>	
	<script type="text/javascript" src="{{asset('asset/js/filtering.js')}}"></script>		
	<script type="text/javascript" src="{{asset('asset/js/home.map.js')}}"></script>			
	<script type="text/javascript" src="{{asset('asset/js/template.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/dropdown.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/theme.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/custom.js')}}"></script>
	
	<script type="text/javascript" src="{{asset('asset/js/main.js')}}"></script>
</body>
</html>