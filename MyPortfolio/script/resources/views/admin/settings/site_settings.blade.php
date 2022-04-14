@section('style')

@endsection
@extends('layouts.backend.app')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<h4 class="text-primary">{{ __('General Settings') }}</h4>
<form action="{{ route('admin.settings.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="logo">{{ __('logo') }}</label>
       <input type="file" id="logo" name="logo" class="form-control">
    </div>
    <div class="form-group">
        <label for="favicon">{{ __('Favicon') }}</label>
       <input type="file" id="favicon" name="favicon" class="form-control">
    </div>

    <div class="form-group">
        <label for="favicon">{{ __('Hero Image') }}</label>
       <input type="file" id="favicon" name="home_img" class="form-control">
    </div>

    <div class="form-group">
        <label for="site_name">{{ __('Site Name') }}</label>
        <input type="text" name="site_name" id="site_name" class="form-control"  placeholder="Site Name" value="{{ $info->site_name }}"> 
    </div>
    <div class="form-group">
        <label for="hire_link">{{ __('Hire Me Url') }}</label>
        <input type="text" name="hire_link" id="hire_link" class="form-control"  placeholder="Hire Link" value="{{ $info->hire_link }}"> 
    </div>
    <div class="form-group">
        <label for="lang">{{ __('Set Default Language') }}</label>
        @php
            $setting=App\Setting::first();
        @endphp
        <select class="form-control" id="lang" name="lang">
            <option value="en" @if($setting->lang=='en') selected="" @endif>English</option>
            <option value="bn" @if($setting->lang=='bn') selected="" @endif>Bangla</option>
            <option value="pt" @if($setting->lang=='pt') selected="" @endif>Portuguese</option>
            <option value="hi" @if($setting->lang=='hi') selected="" @endif>Hindi</option>
            <option value="ml" @if($setting->lang=='ml') selected="" @endif>Malayalam</option>
            <option value="custom" @if($setting->lang=='custom') selected="" @endif>Custom</option>
        </select>
    </div>

	<div class="form-group">
        <label for="mailchimp_api_key">{{ __('MailChimp Api Key') }}</label>
        <input type="text" name="mailchimp_api_key" id="mailchimp_api_key" class="form-control"  placeholder="MailChimp API Key" value="{{ $info->mailchimp_api_key }}"> 
    </div>
    <div class="form-group">
        <label for="mailchimp_list_id">{{ __('MailChimp List Id') }}</label>
        <input type="text" name="mailchimp_list_id" id="mailchimp_list_id" class="form-control"  placeholder="MailChimp List Id" value="{{ $info->mailchimp_list_id }}"> 
    </div>
    
    

    <div class="form-group">
        <label for="service_description">{{ __('Service description') }}</label>
        <textarea  name="service_description" id="service_description" class="form-control"   >{{ $info->service_description }} </textarea>
     </div>
     <div class="form-group">
        <label for="portfolio_description">{{ __('Portfolio Description') }}</label>
        <textarea  name="portfolio_description" id="portfolio_description" class="form-control"   >{{ $info->portfolio_description }} </textarea>
     </div>
     <div class="form-group">
        <label for="subscribe_description">{{ __('Subscribe Description') }}</label>
        <textarea  name="subscribe_description" id="subscribe_description" class="form-control"   >{{ $info->subscribe_description }} </textarea>
     </div>
     <div class="form-group">
        <label for="contact_description">{{ __('Contact Description') }}</label>
        <textarea  name="contact_description" id="subscribe_description" class="form-control"   >{{ $info->contact_description }} </textarea>
     </div>

    


  
    <div class="form-group">
        <button type="submit" class="btn btn-info">{{ __('Update') }}</button>
    </div>
</form>



<h4 class="text-primary">{{ __('Contact Details') }}</h4>
<form method="post" action="{{ route('admin.contact.store') }}">
      @csrf
    <div class="form-group">
        <label for="mobile">{{ __('Mobile No') }}</label>
        <input type="text" name="phone" id="mobile" class="form-control"  placeholder="Phone Number" value="{{ $contact->phone }}"> 
    </div>
    <div class="form-group">
        <label for="email">{{ __('Email Address') }}</label>
        <input type="text" name="email" id="email" class="form-control"  placeholder="Phone Number" value="{{ $contact->email }}"> 
    </div>
    <div class="form-group">
        <label for="address">{{ __('Address') }}</label>
        <input type="text" name="address" id="address" class="form-control"  placeholder="Address" value="{{ $contact->address }}"> 
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">{{ __('Update') }}</button>
    </div>
</form>

@endsection

@section('script')

@endsection