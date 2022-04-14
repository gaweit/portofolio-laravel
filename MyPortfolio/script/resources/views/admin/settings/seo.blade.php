@section('style')

@endsection
@extends('layouts.backend.app')

@section('content')

<form action="{{ route('admin.seo.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">{{ __('Meta Title') }}</label>
        <input type="text" name="meta_title" id="name" class="form-control" required placeholder="Meta Title" value="{{ $info->meta_title }}"> 
    </div>
    <div class="form-group">
        <label for="author">{{ __('Author') }}</label>
        <input type="text" name="author" id="author" class="form-control" required placeholder="author" value="{{ $info->author }}"> 
    </div>
    <div class="form-group">
        <label for="meta_tags">{{ __('Meta Tags') }}</label>
        <textarea name="meta_tags" id="meta_tags" class="form-control" required placeholder="Meta Tags">{{ $info->meta_tags }} </textarea>
    </div>
    <div class="form-group">
        <label for="meta_description">{{ __('Meta Description') }}</label>
        <textarea name="meta_description" id="meta_description" class="form-control" required placeholder="Meta Description">{{ $info->meta_description }} </textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">{{ __('Submit') }}</button>
    </div>
</form>

@endsection

@section('script')

@endsection