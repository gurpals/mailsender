@extends('layouts.frontend.frontend_layout')
@section('content')
@section('title')
<title>Get a quote - Active Expert</title>
@endsection

<div class="breadcrumbs overlay">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Get A Quote</h1>
                    <p>Please let us know if you have a question, want to leave a comment, or would like further information about Active Expert or it’s companies.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<section id="contact-us" class="contact-us section">
    <div class="container">
         @if (session('message'))
                <h6 class="alert alert-success">{{ session('message') }}</h6>
            @endif
        <div class="contact-head">
            <div class="inner-content">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-12">
                        <div class="alert " id="contact-alert" style="display: none">
                            <strong>Success!</strong> Indicates a successful or positive action.
                          </div>
                        <div class="form-main">
                            <h3 class="inner-title left">Quote Form</h3>
                           <form method="post" id="quote" onsubmit="return submitUserForms();"action="{{url('/get-a-quote')}}" enctype="multipart/form-data" novalidate class="form">
                                            @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="fullName"  type="text" placeholder="Your Full Name" required="required">
                                             @if ($errors->has('fullName'))
                                       <span class="text-danger">
                                       <strong>{{ $errors->first('fullName') }}</strong>
                                       </span>
                                       @endif
                                        </div>
                                         
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="email" type="email" placeholder="Your Email" required="required">
                                             
                                        @if ($errors->has('email'))
                                       <span class="text-danger">
                                       <strong>{{ $errors->first('email') }}</strong>
                                       </span>
                                       @endif

                                        </div>
                                    </div>
                                   

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <select id="reasonOfContact" name="reasonOfContact">
                                                <option value="Reason For contact" selected disabled>Reason For Contact</option>
                                                <option value=" Consulting Request"> Consulting Request</option>
                                                <option value=" Quote Request"> Quote Request</option>
                                                <option value=" Training Request">Training Request</option>
                                                <option value=" Partner Request"> Partner Request</option>
                                                <option value=" Media Request"> Media Request</option>
                                                <option value=" General Inquiry"> General Inquiry</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <select id="areaOfInterest" name="areaOfInterest">
                                                <option value="Area Of Interest" selected   disabled> Area Of Interest</option>
                                                <option value="Wireless Site Surveys">Wireless Site Surveys</option>
                                                <option value="Enterprise Consulting">Enterprise Consulting</option>
                                                <option value=" Professional Services"> Professional Services</option>
                                                <option value="Mentored Consulting">Mentored Consulting</option>
                                                <option value="Training and Development">Training and Development</option>
                                            </select>
                                        </div>
                                     </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                        <input type="text" name="subject"  id="subject" placeholder="Subject" >
                                        
                                        @if ($errors->has('subject'))
                                       <span class="text-danger">
                                       <strong>{{ $errors->first('subject') }}</strong>
                                       </span>
                                       @endif
 


                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group message">
                                            <textarea id="message" name="message" placeholder="Message"></textarea>
                                            
                                              @if ($errors->has('message'))
                                       <span class="text-danger">
                                       <strong>{{ $errors->first('message') }}</strong>
                                       </span>
                                       @endif

                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}" data-callback="verifyCaptcha"></div>
                                        <div id="g-recaptcha-error"></div>
                                    </div>
                                    <br>
                                    
                                        
                                    <div class="col-12">
                                        <div class="form-group button">
                                            <button type="submit" id="submit" class="btn mt-3" >Submit Message</button>
                                        </div>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 ">
                        <div class="contact-info ">
                            <div class="single-head ">
                                <h3 class="inner-title ">Contact Info</h3>
                                <div class="single-info ">
                                    <i class="lni lni-map "></i>
                                   
                                </div>
                                <div class="single-info ">
                                    <i class="lni lni-phone "></i>
                                    <ul>
                                        <span>Call Us</span>
                                        <li><a href="tel:+1 254 31 33300">+1 254 31 33300 </a></li>
                                        <li><a href="tel:+1 844 99 80211">+1 844 99 80211</a></li>

                                    </ul>
                                </div>
                              
                                <div class="single-info ">
                                    <i class="lni lni-map "></i>
                                    <ul>
                                        <span>Office Hour</span>
                                        <li>Monday–Friday: 9:00AM–5:00PM</li>
                                        <li> Saturday, Sunday: CLOSED</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
      .error {
      color: red;

   }
</style>
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="{{asset('admin/css/js/validations.js')}}"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
   
@endsection


