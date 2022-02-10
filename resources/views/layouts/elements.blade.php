<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="css/apps.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fonts.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
</head>
<body>
    <!-- <header id="main-header" class="absolute hidden bg-transparent top-0 w-full" style="display: none">
        <nav class="lg-nav w-full mx-auto max-w-[1250px] px-8 py-5 flex flex-row justify-between">
            <div>Logo Div</div>
            <ul id="nav-ul" class="flex flex-row uppercase font-semibold">
                <li>
                    <a href="{{ url('/') }}">
                        home 
                    </a>
                </li>
                <li class="expand about">
                    <a href="{{ url('/about') }}">
                        about 
                    </a>
                    <i class="bi bi-chevron-down font-bold"></i>
                    <div id="about" class="hidden expansion">1</div>
                </li>
                <li class="expand cause">
                    <a href="{{ url('/cause') }}">
                        our cause 
                        <i class="bi bi-chevron-down font-bold"></i>
                    </a>
                    <div id="cause" class="hidden expansion">2</div>
                </li>
                <li>
                    <a href="{{ url('/donate') }}">
                        donate
                    </a>
                </li>
                <li>
                    <a href="{{ url('/campaign') }}">
                        campaign
                    </a>
                </li>
                <li>
                    <a href="{{ url('/contact') }}">
                        contact-us
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="bi bi-search font-bold"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </header> -->
    <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap" style="height: 0px;">
            <nav class="rd-navbar rd-navbar-minimal rd-navbar-minimal-wide rd-navbar-original rd-navbar-static" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-fixed" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle toggle-original" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                        <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="index.html"> <img src="images/logo-default-190x37.png" alt="" width="190" height="37"></a>
                    </div>
                    <div class="rd-navbar-main-element">
                        <div class="rd-navbar-nav-wrap toggle-original-elements">
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li class="rd-nav-item active"><a class="rd-nav-link" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="rd-nav-item rd-navbar--has-dropdown rd-navbar-submenu"><a class="rd-nav-link" href="javascript:void(0)">About</a>
                            <!-- RD Navbar Dropdown-->
                            <ul class="rd-menu rd-navbar-dropdown rd-navbar-open-right" style="">
                                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{url('/about')}}">About Us</a></li>
                                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{url('/about#our-history')}}">Background History</a></li>
                                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{url('/political')}}">Political History</a></li>
                                <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{url('/end-sars')}}">End SARS</a></li>
                            </ul>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('/donate')}}">Donate</a></li>
                            <li class="rd-nav-item rd-navbar--has-dropdown rd-navbar-submenu">
                                <a class="rd-nav-link" href="javascript:void(0)">Our Cause</a>
                                
                                <ul class="rd-menu rd-navbar-dropdown rd-navbar-open-right" style="">
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{url('/cause')}}">Our Cause</a></li>
                                    <!-- <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{url('/join')}}">Join Us</a></li> -->
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{url('/volunteer')}}">Volunteer</a></li>
                                </ul>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('/campaign')}}">Campaign</a></li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('/contact')}}">Contact Us</a>
                            </li>
                        </ul>
                        </div>
                        <!-- RD Navbar Search-->
                        <!-- <div class="rd-navbar-search toggle-original-elements" id="rd-navbar-search-1">
                        <button class="rd-navbar-search-toggle rd-navbar-fixed-element-2 toggle-original" data-rd-navbar-toggle="#rd-navbar-search-1"><span></span></button>
                        <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live-1" method="GET">
                            <div class="form-wrap">
                            <label class="form-label rd-input-label" for="rd-navbar-search-form-input-1">Search...</label>
                            <input class="form-input rd-navbar-search-form-input" id="rd-navbar-search-form-input-1" type="text" name="s" autocomplete="off">
                            <div class="rd-search-results-live" id="rd-search-results-live-1"></div>
                            </div>
                            <button class="rd-search-form-submit fa-search" type="submit"></button>
                        </form>
                        </div> -->
                    </div>
                    </div>
                </div>
            </nav>
        </div>
      </header>
    <main class="lg:py-16">
        @yield('content')
    </main>
    <footer class="section footer-linked bg-secondary-dark">
        <div class="footer-linked-main">
          <div class="container">
            <div class="row row-50">
              <div class="col-lg-8">
                <h4>Quick Links</h4>
                <hr class="offset-right-1">
                <div class="row row-20">
                  <div class="col-6 col-sm-3">
                    <ul class="list list-xs">
                      <!-- <li><a href="projects.html">Projects</a></li> -->
                      <!-- <li><a href="single-project.html">Single Project</a></li> -->
                      <li><a href="{{url('/contact')}}">Contacts</a></li>
                      <!-- <li><a href="testimonials.html">Testimonials</a></li>
                      <li><a href="privacy-policy.html">Terms of Use</a></li> -->
                    </ul>
                  </div>
                  <div class="col-6 col-sm-3">
                    <ul class="list list-xs">
                      <!-- <li><a href="grid-blog.html">Blog</a></li> -->
                      <li><a href="{{url('/about')}}">About Us</a></li>
                      <!-- <li><a href="about-me.html">About Me</a></li> -->
                      <!-- <li><a href="single-event.html">Single Event</a></li>
                      <li><a href="single-job.html">Single Job</a></li> -->
                    </ul>
                  </div>
                  <!-- <div class="col-6 col-sm-3">
                    <ul class="list list-xs">
                      <li><a href="careers.html">Careers</a></li>
                      <li><a href="grid-layout.html">Portfolio</a></li>
                      <li><a href="#">Registration</a></li>
                      <li><a href="#">Our History</a></li>
                      <li><a href="#">Login</a></li>
                    </ul>
                  </div> -->
                  <div class="col-6 col-sm-3">
                    <ul class="list list-xs">
                      <li><a href="https://www.facebook.com/voniru" target="blank">Facebook</a></li>
                      <li><a href="https://twitter.com/hrh_bankeoniru" target="blank">Twitter</a></li>
                      <li><a href="https://www.instagram.com/banke_oniru_2023/" target="blank">Instagram</a></li>
                      <!-- <li><a href="#">LinkedIn</a></li>
                      <li><a href="#">Pinterest</a></li> -->
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-4">
                <h4>Contact Information</h4>
                <hr>
                <ul class="list-sm">
                  <li class="object-inline"><span class="icon icon-md mdi mdi-map-marker text-primary"></span><a class="link-default" href="#">Lagos Central Senatorial District</a></li>
                  <li class="object-inline"><span class="icon icon-md mdi mdi-phone text-primary"></span>
                    <ul class="list-0">
                      <li><a class="link-default" href="tel:+2347057537777">0705-753-7777</a></li>
                    </ul>
                  </li>
                  <li class="object-inline"><span class="icon icon-md mdi mdi-email text-primary"></span><a class="link-default" href="mailto:bankeoniru@gmail.com">bankeoniru@gmail.com</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-linked-aside">
          <div class="container">
            <!-- Rights-->
            <p class="rights"><span>©&nbsp;</span><span class="copyright-year">{{date('Y')}}</span><span>&nbsp;</span><span>All Rights Reserved.</span><span>&nbsp;</span><br class="d-sm-none"><a href="#">Terms of Use</a><span> and</span><span>&nbsp;</span><a href="privacy-policy.html">Privacy Policy</a><span>. Built by <a href="https://www.hoffenheimtechnologies.com/" target="blank">Hoffenheim Technologies</a>.</span></p>
          </div>
        </div>
      </footer>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script> -->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>