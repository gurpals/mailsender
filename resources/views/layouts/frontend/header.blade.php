<header class="header">
    <div class="top-header-one top-bar">
        <div class="container">
            <div class="top-bar-inner row justify-content-lg-between">
                <div class="top-left col-md-9 col-12">
                    <ul>
                        <li>Phone: <a href="tel:+1 844 99 80211">+1 844 99 80211</a></li>
                        
                    </ul>
                </div>
                <div class="top-right col-md-3 col-12 m-auto">
                 <ul class="top-social">
                   
                      <li><a href="https://www.facebook.com/activeexpertTX" target="_blank"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="http://www.twitter.com/active_expert" target="_blank"><i class="lni lni-twitter-filled"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/active-expert-llc/" target="_blank"
                            class="social-linkedin">
                             <i class="fa fa-linkedin"></i>
                         </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-inner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{url('/')}}"><img src="frontend/css/images/logo/logo2.png" alt="#"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="lni lni-menu open"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item"  >

                                    <a class="nav-link" href="{{url('/')}}" >Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/about-us')}}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/services')}}">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/contact')}}">Support</a>
                                </li>
                            </ul>
                            <div class="button">
                                <a href="{{url('/contact')}}" class="btn">Contact Us</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
    $(function(){
        $('a').each(function(){
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('active'); $(this).parents('li').addClass('active');
            }
        });
    });
</script>

