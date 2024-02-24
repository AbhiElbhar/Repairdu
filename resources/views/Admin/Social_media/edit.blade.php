@extends('layouts.admin.main')

@section('content')
@foreach ($social_medias as $social_media)

<div class="container mt-4 mb-4 mr-6 ml-6 col-md-11 card p-3 bg-white">
    <h1 class="text-center">Edit Social Media Links</h1>
    <form action="{{route('social_media.update',$social_media->id)}}" class="action" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="facebook">Enter Facebook URL</label>
            <input type="url" name="facebook" id="" class="form-control" value="{{$social_media->facebook}}">
            <span class="text-danger">
                @error('facebook')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="twitter">Enter Twitter URL</label>
            <input type="url" name="twitter" id="" class="form-control" value="{{$social_media->twitter}}">
            <span class="text-danger">
                @error('twitter')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="linkedin">Enter Linkedin URL</label>
            <input type="url" name="linkedin" id="" class="form-control" value="{{$social_media->linkedin}}">
            <span class="text-danger">
                @error('linkedin')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="instagram">Enter Instagram URL</label>
            <input type="url" name="instagram" id="" class="form-control" value="{{$social_media->instagram}}">
            <span class="text-danger">
                @error('instagram')
                {{$message}}
                @enderror
            </span>
        </div>

        <center><button type="submit" class="btn btn-primary">Update</button></center>
    </form>
</div>

@endforeach
@endsection