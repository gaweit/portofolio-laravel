@php
$siteInfo=App\Setting::first();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ config('app.name') }} | {{ Request::segment(2) }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="{{ asset($siteInfo->favicon) }}" sizes="16x16" href="{{ asset($siteInfo->favicon) }}">
    @yield('style')
    <!-- Custom Stylesheet -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/toastr.min.css') }}" rel="stylesheet">
   
</head>

<body>

    <!--*******************
        Preloader start
        ********************-->
        <div id="preloader">
            <div class="loader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>
    <!--*******************
        Preloader end
        ********************-->


    <!--**********************************
        Main wrapper start
        ***********************************-->
        <div id="main-wrapper">

        <!--**********************************
            Nav header start
            ***********************************-->
            <div class="nav-header">
                <div class="brand-logo">
                    <a href="{{ route('admin.dashboard') }}" class="text-white ">
                        <b class="logo-abbr text-left">{{ \Illuminate\Support\Str::limit(config('app.name'), 1,' ') }} </b>
                        <span class="logo-compact"> {{ \Illuminate\Support\Str::limit(config('app.name'), 1,' ') }}</span>
                        <span class="brand-title text-left">
                           {{ config('app.name') }}
                        </span>
                    </a>
                </div>
            </div>
        <!--**********************************
            Nav header end
            ***********************************-->

        <!--**********************************
            Header start
            ***********************************-->
            @include('layouts/backend/partials/header')
        <!--**********************************
            Header end ti-comment-alt
            ***********************************-->

        <!--**********************************
            Sidebar start
            ***********************************-->
            @include('layouts/backend/partials/sidebar')
        <!--**********************************
            Sidebar end
            ***********************************-->

        <!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">

                <div class="row page-titles mx-0">
                    <div class="col p-md-0">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a></li>
                         @if(Request::segment(2) != 'dashboard')   
                        <li class="breadcrumb-item active">{{ Request::segment(2) }}</li>
                        @endif
                        @if( Request::segment(3) != null)
                         <li class="breadcrumb-item active">{{ Request::segment(4) }}</li>
                         @endif
                        </ol>
                    </div>
                </div>
                <!-- row -->

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body"> @yield('content')</div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- #/ container -->
            </div>
        <!--**********************************
            Content body end
            ***********************************-->


        <!--**********************************
            Footer start
            ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>© {{ date('Y') }} {{ config('app.name') }} -  {{ __('v 2.0') }}</p>
                </div>
            </div>
        <!--**********************************
            Footer end
            ***********************************-->
        </div>
    <!--**********************************
        Main wrapper end
        ***********************************-->

    <!--**********************************
        Scripts
        ***********************************-->
        <script src="{{ asset('admin/plugins/common/common.min.js') }}"></script>
        <script src="{{ asset('admin/js/custom.min.js') }}"></script>
        <script src="{{ asset('admin/js/settings.js') }}"></script>
        <script src="{{ asset('admin/js/gleek.js') }}"></script>
        <script src="{{ asset('admin/js/styleSwitcher.js') }}"></script>
        <script src="{{ asset('admin/js/bootbox.min.js') }}"></script>
        <script src="{{ asset('admin/js/toastr.min.js') }}"></script>
        @yield('script')
        @if(Session::has('message'))
        <script>

          var type = "{{ Session::get('alert-type', 'info') }}";
          switch(type){
            case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

            case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

            case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

            case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
        }
    </script>
    @endif
</body>

</html>