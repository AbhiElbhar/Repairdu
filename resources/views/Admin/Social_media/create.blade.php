@extends('layouts.admin.main')

@section('content')

<div class="container mt-4 mb-4 mr-6 ml-6 col-md-11 card p-3 bg-white">
    <h1 class="text-center">Add Social Media links</h1>
    <form action="{{route('social_media.store')}}" class="action" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="facebook">Enter Fackbook URL</label>
            <input type="url" name="facebook" id="" class="form-control" value="{{old('facebook')}}">
            <span class="text-danger">
                @error('facebook')
                {{$message}}
                @enderror
            </span>
        </div>
        
        <div class="form-group">
            <label for="twitter">Enter Twitter URL</label>
            <input type="url" name="twitter" id="" class="form-control" value="{{old('twitter')}}">
            <span class="text-danger">
                @error('twitter')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="linkedin">Enter Linkedin URL</label>
            <input type="url" name="linkedin" id="" class="form-control" value="{{old('linkedin')}}">
            <span class="text-danger">
                @error('linkedin')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="instagram">Enter Instagram URL</label>
            <input type="url" name="instagram" id="" class="form-control" value="{{old('instagram')}}">
            <span class="text-danger">
                @error('instagram')
                {{$message}}
                @enderror
            </span>
        </div>
             
        <center><button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button></center>
    </form>
</div>
@endsection