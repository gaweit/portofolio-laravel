@section('style')

@endsection
@extends('layouts.backend.app')

@section('content')
<div class="row">
    <div class="col-lg-3 col-sm-6">
        <div class="card gradient-1">
            <div class="card-body">
                <h3 class="card-title text-white">{{ __('Total Subscribers') }}</h3>
                <div class="d-inline-block">
                    <h2 class="text-white">{{ App\Subscriber::count() }}</h2>

                </div>
                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card gradient-2">
            <div class="card-body">
                <h3 class="card-title text-white">{{ __('Total Skills') }}</h3>
                <div class="d-inline-block">
                    <h2 class="text-white">{{ App\Skill::count() }}</h2>

                </div>
                <span class="float-right display-5 opacity-5"><i class="fa fa-sliders"></i></span>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card gradient-3">
            <div class="card-body">
                <h3 class="card-title text-white">{{ __('Total Testimonials') }}</h3>
                <div class="d-inline-block">
                    <h2 class="text-white">{{ App\Testimonial::count() }}</h2>

                </div>
                <span class="float-right display-5 opacity-5"><i class="fa fa-comment"></i></span>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card gradient-4">
            <div class="card-body">
                <h3 class="card-title text-white">{{ __('Total Services') }}</h3>
                <div class="d-inline-block">
                    <h2 class="text-white">{{ App\Service::count() }}</h2>

                </div>
                <span class="float-right display-5 opacity-5"><i class="fa fa-wrench"></i></span>
            </div>
        </div>
    </div>
    @php
    $siteInfo=App\Setting::first();
    @endphp
    <div class="col-md-6">
        <form method="post" action="{{ route('admin.settings.update',$siteInfo->id) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="ui" value="2">
            <center><button class="btn btn-primary col-md-10 mb-1" @if($siteInfo->ui==2) type="button" @else  type="submit"  @endif> @if($siteInfo->ui==2) Active <i class="fa fa-check"></i> @else Select @endif </button> </center>
            <center><img src="{{ asset('uploads/light.png') }}" class="dash_img">
            </form>
        </div>
        <div class="col-md-6">
            <form method="post" action="{{ route('admin.settings.update',$siteInfo->id) }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="ui" value="1">
                <center><button class="btn btn-primary col-md-10 mb-1" @if($siteInfo->ui==1) type="button" @else   type="submit" @endif> @if($siteInfo->ui==1) Active <i class="fa fa-check"></i> @else Select @endif </button> </center>
                <center><img src="{{ asset('uploads/dark.png') }}" class="dash_img"></center>
            </form>

        </div>

    </div>

    @endsection

    @section('script')

    @endsection