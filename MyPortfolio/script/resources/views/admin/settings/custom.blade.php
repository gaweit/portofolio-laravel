@section('style')

@endsection
@extends('layouts.backend.app')

@section('content')

<form action="{{ route('admin.custom.store') }}" method="POST">
    @csrf
    <h4><b>{{ __('Header') }}</b></h4>
    <div class="form-group">
        <label for="css"></label>
        <textarea name="css" class="form-control" id="css">{{ $script->css }}</textarea>
    </div>  
    <h4><b>{{ __('Footer') }}</b></h4>
    <div class="form-group">
        <label for="js"></label>
        <textarea name="js" class="form-control" id="js">{{ $script->js }}</textarea>
    </div> 
    <div class="form-group">
        <button type="submit" class="btn btn-success">{{ __('Submit') }}</button>
    </div>
</form>

@endsection

@section('script')

@endsection