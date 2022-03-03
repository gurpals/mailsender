@extends('layouts.frontend.frontend_layout')
@section('content')
@section('title')
<title>Services - Active Expert</title>
@endsection
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Services</h1>
                    <p class="wow fadeInUp" data-wow-delay=".4s">Many vendors intertwine consulting and professional services, however, we look at these as two very different service offerings and here’s why.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="services style3 section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <span class="wow fadeInDown" data-wow-delay=".2s">Services</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Services we offer for you</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Active Expert is a international consulting firm working with the best clients in the world to solve complex challenges through the use of technology & education. We specialize in Life-Cycle services for Wireless Networks, Enterprise Security Consulting, and continuous education for our clients.</p>
                </div>
            </div>
        </div>

        <div class="top-header-one top-bar consultation">
        <div class="container">
            <div class="top-bar-inner row justify-content-lg-between p-10">
                <div class="top-left col-md-9 col-12">
                   <h4 class="text-white">Consultation Request</h4>
                </div>
                <div class="col-md-3 col-12">
                    <div class="button float-r">
                                <a href="/contact" class="btn request-btn">Contact Us</a>
                            </div>

                </div>
            </div>
        </div>
    </div>


        <div class="single-head">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service wow fadeInUp" data-wow-delay=".2s">
                        <span class="serial">01</span>
                        <h2><a href="{{url('/wireless-surveys')}}">Wireless Site Surveys</a></h2>
                        <p>Execution is the single most important part of the whole process.
                        </p>
                        <div class="button">
                            <a href="{{url('/wireless-surveys')}}" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service wow fadeInUp" data-wow-delay=".2s">
                        <span class="serial">02</span>
                        <h2><a href="{{url('/index')}}">Enterprise Consulting</a></h2>
                        <p>Many vendors intertwine consulting and professional services
                        </p>
                        <div class="button">
                            <a href="{{url('/enterprise-consulting')}}" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service wow fadeInUp" data-wow-delay=".4s">
                        <span class="serial">03</span>
                        <h2><a href="{{url('/pro-services')}}"> Professional Services</a></h2>
                        <p>Professional Services designed to connect and secure the enterprise.
                        </p>
                        <div class="button">
                            <a href="{{url('/pro-services')}}" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service wow fadeInUp" data-wow-delay=".6s">
                        <span class="serial">04</span>
                        <h2><a href="{{url('/mentored-consulting')}}">Mentored Consulting</a></h2>
                        <p>We work with our clients and do a deep analysis of their business.
                        </p>
                        <div class="button">
                            <a href="{{url('/mentored-consulting')}}" class="btn">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service wow fadeInUp" data-wow-delay=".4s">
                        <span class="serial">05</span>
                        <h2><a href="{{url('/traning-development')}}">Training and Development</a></h3>
                        <p>Considering the millions of dollars companies spend on technology its
                        </p>
                        <div class="button">
                            <a href="{{url('/traning-development')}}" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
