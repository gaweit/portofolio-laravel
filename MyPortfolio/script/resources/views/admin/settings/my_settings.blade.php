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
          <form method="post" action="{{ route('admin.users.genupdate') }}" enctype="multipart/form-data">
            @csrf
            <h4><b>{{ __('Edit Genaral Settings') }} </b></h4>
            <div class="form-group">
                <label for="name">{{ __('Name') }}</label>
                <input type="text" name="name" id="name" class="form-control" required placeholder="Enter User's  Name" value="{{ $info->name }}"> 
            </div>
            <div class="form-group">
                <label for="email">{{ __('Email') }}</label>
                <input type="text" name="email" id="email" class="form-control" required placeholder="Enter Email"  value="{{ $info->email }}"> 
            </div>
            <div class="form-group">
                <label for="file">{{ __('Avatar') }}</label>
                <input type="file" name="file" id="file" class="form-control"  accept="image/*"> 
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info">{{ __('Update') }}</button>
            </div>
        </form>

        <form method="post" action="{{ route('admin.users.passup') }}">
            @csrf
            <h4><b>{{ __('Change Password') }}</b></h4>
            <div class="form-group">
                <label for="oldpassword">{{ __('Old Password') }}</label>
                <input type="password" name="current" id="oldpassword" class="form-control"  placeholder="Enter Old Password" required> 
            </div>
            <div class="form-group">
                <label for="password">{{ __('New Password') }}</label>
                <input type="password" name="password" id="password" class="form-control"  placeholder="Enter New Password" required> 
            </div>
            <div class="form-group">
                <label for="password">{{ __('Enter Again Password') }}</label>
                <input type="password" name="password_confirmation" id="password" class="form-control"  placeholder="Enter Again" required> 
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">{{ __('Change') }}</button>
            </div>
        </form>

@endsection

@section('script')

@endsection