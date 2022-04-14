<!doctype html>
<html @if($settings->lang == 'custom') lang="{{ str_replace('_', '-', app()->getLocale()) }}" @else
lang="{{ $settings->lang }}" @endif 
 >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset($settings->favicon) }}" type="image/ico" sizes="16x16">
    {!! SEO::generate() !!}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset($settings->favicon) }}">

    <!-- css here -->
    
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate-heading.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/default.css') }}">
    @if($settings->ui==1)
    <link rel="stylesheet" href="{{ asset('frontend/css/dark.css') }}">
    @else
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    @endif

    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

    {!! App\Script::first()->css !!}
    
</head>
<body>
   <!-- preloader area start -->
   <div class="loading"></div>
   <!-- preloader area end -->
   <!-- headear area start -->
   <div id="app">
    <header id="home">
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 align-items-center">
                        <div class="logo">
                            <a href="{{ url('/') }}"><img src="{{ asset($settings->logo) }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                      @php
                      $hire=App\Lang::where('key','hire_link')->select($settings->lang)->first();
                      $lang=$settings->lang;
                      @endphp

                      <div class="header-btn f-right">
                            <a target="_blank" href="{{ $settings->hire_link }}" class="btn">{{ $hire->$lang }}</a>
                        </div>
                        <div class="main-menu f-right">
                            <nav id="mobile-menu">
                                <ul>
                                    @foreach(\App\Menu::all() as $key =>  $menu)
                                    <li @if($key==0) class="active" @endif><a href="{{ $menu->target }}">{{ $menu->name }}</a></li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- headear area end -->
   
    <!-- hero area start -->
    <section>
        <div class="hero-area" style="background-image: url({{ asset($settings->home_img)}})">
            <div id="particles-js"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <div class="hero-content text-center">
                                <div class="typing-head">
                                    @php
                                    $e=App\Lang::where('key','i_am')->select($settings->lang)->first();
                                    $lang=$settings->lang;
                                    @endphp
                                    <h3>{{ $e->$lang }}</h3>
                                </div>
                                <div class="hero-loading-content">
                                    <h1 class="cd-headline clip is-full-width">
                                        <span class="cd-words-wrapper">
                                            
                                            @foreach(App\Tagline::latest()->get() as $key =>  $tagline)
                                    
                                            <b @if($key == 0) class="is-visible" @endif>{{ $tagline->tag_line }}</b>
                                            
                                            @endforeach
                                        </span>
                                    </h1>
                                </div>
                                <div class="hero-social-link">

                                 @foreach(App\Social::latest()->get() as $social)   
                                 <a href="{{ $social->link }}" target="_blank"><i class="{{ $social->icon }}"></i></a>
                                 @endforeach
                             </div>
                         </div>
                         <a href="#about">
                            <div class="animation-mouse">
                                <div class="mouse"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- hero area end -->

<!-- about area start -->
<section id="about">
    <div class="about-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 valign">
                    <div class="content mb-50">
                        <div class="section-head text-left mb-30">
                            @php
                            $about=App\Lang::where('key','about_me')->select($settings->lang)->first();
                            $lang=$settings->lang;
                            @endphp
                            <h1>{{ $about->$lang }}</h1>
                            <span class="span"></span>
                        </div>
                        <p>{{ App\About::first()->description }}</p>
                        @php
                        $cv=App\Lang::where('key','cv')->select($settings->lang)->first();
                        $lang=$settings->lang;
                        @endphp
                        <a href="{{ App\About::first()->cv }}" class="btn mt-30">{{ $cv->$lang }}</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-hero-img">
                        <img data-tilt class="img-fluid lazy" src="{{ asset('uploads/loader.gif') }}"  data-src="{{ asset(App\About::first()->image) }}" alt="{{ App\About::first()->image }}" >
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="content mb-50">
                        <div class="skills-head-type">
                             @php
                            $skilltr=App\Lang::where('key','skill')->select($settings->lang)->first();
                            $lang=$settings->lang;
                            @endphp
                            <h1>{{ $skilltr->$lang }}</h1>
                        </div>
                        <div class="skills-progress-bar">
                            @foreach(App\Skill::all() as $skill)
                            <div class="single-progress-bar">
                                <div class="progressbar-label">
                                    <h5>{{ $skill->name }} <span class="f-right">{{ $skill->percent }}%</span></h5>
                                    <div class="progress">
                                        <div class="progress-bar w-{{ $skill->percent }}" role="progressbar" aria-valuenow="{{ $skill->percent }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about area end -->

<!-- resume area start -->
<section>
    <div class="resume-area">
        <div class="resume-head-title text-center mb-40 pt-100">
            <div class="col-lg-6 mx-auto">
               @php
               $experince=App\Lang::where('key','experince')->select($settings->lang)->first();
               $lang=$settings->lang;
               @endphp
               <h1>{{ $experince->$lang }}</h1>

           </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach(App\Exeperince::latest()->get() as $exeperince)
                <div class="col-lg-6 mb-30">
                    <div class="single-resume">
                        <div class="single-resume-card">
                            <h3>{{ $exeperince->title }}</h3>
                            <div class="expreience-band">
                                <i class="{{ $exeperince->icon }}"></i>
                                <span>{{ $exeperince->date }}</span>
                            </div>
                            <p>{{ $exeperince->description }}</p>
                        </div>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    </div>
</section>
<!-- resume area end -->

<!-- service area start -->
<section  id="service" class="pt-100">
    <div class="service-area">
        <div class="service-head-title text-center mb-40 pt-100">
            <div class="col-lg-6 mx-auto">
                 @php
               $service=App\Lang::where('key','service')->select($settings->lang)->first();
               $lang=$settings->lang;
               @endphp
               <h1>{{ $service->$lang }}</h1>

              <p>{{ $settings->service_description }}</p>
            </div>
        </div>
        <div class="service-main-content pb-70">
            <div class="container">
                <div class="row">
                    @foreach(App\Service::latest()->get() as $service)
                    <div class="col-lg-4">
                        <div class="single-service text-center">
                            <div class="service-border">
                                <div class="service-img">
                                    <img class="img-fluid lazy"  src="{{ asset('uploads/loader.gif') }}" data-src="{{ asset($service->icon) }}" alt="{{ $service->icon }}">
                                </div>
                                <div class="service-content">
                                    <h4>{{ $service->title }}</h4>
                                    <p>{{ $service->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service area end -->

<!-- portfolio area start -->
<section id="portfolio">
    <div class="portfolio-area pt-100">
        <div class="portfolio-head-title text-center mb-40">
            <div class="col-lg-6 mx-auto">
               @php
               $my_work=App\Lang::where('key','work')->select($settings->lang)->first();
               $lang=$settings->lang;
               @endphp
               <h1>{{ $my_work->$lang }}</h1>
               <p>{{ $settings->portfolio_description }}</p>
           </div>
       </div>
       <div class="portfolio-main-area">
           <div class="container">
               <div class="">
                   <div class="text-center mx-auto mb-40">
                    <div class="portfolio-category">
                        <nav>
                            <ul>
                                <li class="active"><a href="#" data-filter="*">All</a></li>
                                @foreach(App\Category::all() as $category)
                                <li><a href="#" data-filter=".cat{{ $category->id }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="row grid portfolio-item">
                    @foreach(App\Portfolio::latest()->get() as $portfolio )
                    <div class="col-lg-4 grid-item cat{{ $portfolio->cat_id }} mb-30">
                        <div class="portfolio">
                         <div class="portfolio-img">
                            <img class="lazy"  src="{{ asset('uploads/loader.gif') }}" data-src="{{ asset($portfolio->image) }}" alt="{{ $portfolio->image }}">
                        </div>
                        <div class="overlay">
                            <div class="hover-effect">
                                <div class="icon-hover">
                                    <span><a class="popup" href="{{ $portfolio->image }}"><i class="fas fa-plus-circle"></i></a></span>
                                </div>
                                <div class="hover-content">

                                    <h1>{!! $portfolio->title !!}</h1>
                                </div>
                            </div>
                        </div>
                    </div>         
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
</div>
</section>
<!-- portfolio area end -->

<!-- testimonials area start -->
<section id="testimonials" class="pt-65">
    <div class="testimonials-area">
        <div class="container">
            <div class="row owl-carousel">
                @foreach(App\Testimonial::latest()->get() as $testimonial)
                <div class="col-lg-10 mx-auto pt-100 pb-100">
                    <div class="testimonials-main-content text-center">
                        <div class="testi-description">
                            <p>{{ $testimonial->review }}</p>
                        </div>
                        <div class="testi-profile">
                            <img class="lazy" src="{{ asset('uploads/loader.gif') }}" data-src="{{ asset($testimonial->avatar) }}" alt="{{ $testimonial->avatar }}">
                        </div>
                        <div class="testi-author-name">
                            <h4>{{ $testimonial->name }}</h4>
                            <small>{{ $testimonial->position }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- testimonials area end -->





<!-- contact area start -->
<section id="contact">
    <div class="contact-area pt-100">
        <div class="contact-head-title text-center mb-40">
            <div class="col-lg-6 mx-auto">
                 @php
               $my_contact=App\Lang::where('key','contact')->select($settings->lang)->first();
               $lang=$settings->lang;
               @endphp
               <h1>{{ $my_contact->$lang }}</h1>
               
               <p>{{ $settings->contact_description }}</p>
           </div>
       </div>
       <div class="container">
           <div class="row mt-5">
               <div class="col-lg-4">
                <div class="text-center">
                    <div class="single-contact-info">
                        <i class="fas fa-mobile-alt"></i>
                        <div class="info mt-3">
                           @php
                           $phone=App\Lang::where('key','phone')->select($settings->lang)->first();
                           $lang=$settings->lang;
                           @endphp
                           <h5>{{ $phone->$lang }}</h5>
                            
                            <p>{{ App\Contact::first()->phone }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-center">
                    <div class="single-contact-info">
                        <i class="far fa-envelope"></i>
                        <div class="info mt-3">
                           @php
                           $email=App\Lang::where('key','email')->select($settings->lang)->first();

                           $lang=$settings->lang;
                           @endphp
                           <h5>{{ $email->$lang }}</h5>

                           <p>{{ App\Contact::first()->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-center">
                    <div class="single-contact-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info mt-3">
                            @php
                           $address=App\Lang::where('key','office')->select($settings->lang)->first();
                           $lang=$settings->lang;
                           @endphp
                           <h5>{{ $address->$lang }}</h5>
                            <p>{{ App\Contact::first()->address }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
           <div class="col-lg-12">
            <p class="contact-msg text-center"></p>
            <div class="contact-form">
                <form action="{{ route('contact.store') }}" method="POST" id="contact">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" id="name" class="form-control" placeholder="Name*" name="name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" id="email" class="form-control" placeholder="Email*" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" id="subject" class="form-control" placeholder=" Subject..*" name="subject">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="message" placeholder="Message.."></textarea>
                            </div>
                        </div>
                    </div>
                    @php
                    $sendmsg=App\Lang::where('key','sendmsg')->select($settings->lang)->first();
                    $lang=$settings->lang;
                    @endphp

                    <button type="submit" class="btn f-right">{{ $sendmsg->$lang }}</button>
                </form>
                <div class="ajax-response"></div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<!-- contact area end -->
<!-- subscriber area start -->
<section id="subscriber" class="pt-100">
    <div class="subscriber-area">
        <div class="container pb-100 pt-100">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="subscriber-logo">
                        <span><i class="far fa-envelope-open"></i></span>
                    </div>
                    <div class="subscriber-content">
                       @php
                       $my_email=App\Lang::where('key','subs_email')->select($settings->lang)->first();
                       $lang=$settings->lang;
                       @endphp
                       <h1>{{ $my_email->$lang }}</h1>
                       
                       <p>{{ $settings->subscribe_description }}</p>
                   </div>
               </div>
                <div class="col-lg-6 offset-lg-3">
                    <div class="subscriber-form">
                        <form id="subscribe">
                            <div class="input-form">
                                <input type="text" name="email" id="subemail" placeholder="Enter your email here...">
                                
                                    <div class="input-group-append">
                                        @php
                                        $subscibe=App\Lang::where('key','subscibe')->select($settings->lang)->first();
                                        $lang=$settings->lang;
                                        @endphp

                                        <button class="btn" type="submit">{{ $subscibe->$lang }}</button>
                                    </div>
                               
                            </div>
                        </form>
                        <p class="text-success text-center" id="response"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscriber area end -->
<!-- footer area start -->
<footer>
    <div class="footer-area">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12">
                    <div class="social-link">
                        <nav>
                            <ul>
                               @foreach(App\Social::latest()->get() as $social)   
                               <li><a href="{{ $social->link }}" target="_blank"><i class="{{ $social->icon }}"></i></a></li>
                               @endforeach
                           </ul>
                       </nav>
                   </div>
                   <div class="footer-copyright">
                    <p>{{ date('Y') }} ©  <a  href="{{ url('/') }}">{{ env('APP_NAME') }} {{ __('All Rights Reserved') }}</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>
<!-- footer area end -->


</div>


<!-- back to top -->
<a href="#home" class="back_top"> <i class="fas fa-angle-up"></i> </a>

<!-- js here -->
<script src="{{ asset('frontend/js/lazyload.min.js') }}"></script>
<script src="{{ asset('frontend/js/vendor/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/animate-heading.js') }}"></script>
<script src="{{ asset('frontend/js/particles.js') }}"></script>
<script src="{{ asset('frontend/js/particles-custom.js') }}"></script>
<script src="{{ asset('frontend/js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.nav.min.js') }}"></script>
<script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>

<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.smoothscroll.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>

<script>
    var lazyLoadInstance = new LazyLoad({
        elements_selector: ".lazy"
    });
 (function ($) {
    "use strict"
   
    $('#subscribe').on('submit',function(){    
      event.preventDefault();  

      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      $.ajax({
          type: "POST",
          url: "{{ route('subscibed') }}",
          data:{
            email: $('#subemail').val()
        },
        success: function(data)
        {
            // show response from the php script.
            $('#response').html("Thanks For Subscribed Me");
                    }
        })
      .fail(function(error) {
          preloader.style.display = 'none';
          var err="<p class='text-white'>Please Enter Valid Url</p>";
          $('#response').html(err);
      })
  });

     
    // Contact Message send 
    $('#contact').on('submit',function(){
         event.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var subject = $('#subject').val();
        var message = $('#message').val();

       $.ajaxSetup({
         headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
      });
     $.ajax({
       type: "POST",
       url: "{{ route('contact.store') }}",
          data:{
            name: name,
            email:email,
            subject:subject,
            message:message,
            },
            success: function(data)
            {
              $('#name').val("");
              $('#email').val("");
              $('#subject').val("");
              $('#message').val("");
              // show response from the php script.
              $('.contact-msg').html(data);
                
                }
        })
        }); 
    })(jQuery);


</script>
{!! App\Script::first()->js !!}
</body>
</html>
