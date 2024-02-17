@extends('layouts.admin.main')

@section('content')

<div class="container mt-4 mb-4 mr-6 ml-6 col-md-11 card p-3 bg-white">
    <h1 class="text-center">Add Software Features</h1>
    <form action="{{route('feature.store')}}" class="action" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Enter Title</label>
            <input type="text" name="title" id="" class="form-control" value="{{old('title')}}">
            <span class="text-danger">
                @error('title')
                {{$message}}
                @enderror
            </span>
        </div>
        
        <div class="form-group">
            <label for="heading">Enter Heading</label>
            <input type="text" name="heading" id="" class="form-control" value="{{old('heading')}}">
            <span class="text-danger">
                @error('heading')
                {{$message}}
                @enderror
            </span>
        </div>
        
        <div class="form-group">
            <label for="image">Enter Image</label>
            <input type="file" name="image" id="" class="form-control" value="{{old('image')}}" >
            <span class="text-danger">
                @error('image')
                {{$message}}
                @enderror
            </span>
        </div>
        
        <div class="form-group">
            <label for="description">Description</label><br>
            <textarea name="description" id="" cols="14" rows="5" class="form-control summernote">{{old('description')}}</textarea>
            <span class="text-danger">
                @error('description')
                {{$message}}
                @enderror
            </span>
        </div>
        
        <h4>SEO Section</h4>
        <div class="form-group">
            <label for="meta_title">Meta title</label>
            <input type="text" name="meta_title" id="" class="form-control" value="{{old('meta_title')}}">
            <span class="text-danger">
                @error('meta_title')
                {{$message}}
                @enderror
            </span>
        </div>
        
        <div class="form-group">
            <label for="meta_keyword">Meta keyword</label>
            <input type="text" name="meta_keyword" id="" class="form-control" value="{{old('meta_keyword')}}">
            <span class="text-danger">
                @error('meta_keyword')
                {{$message}}
                @enderror
            </span>
        </div>
        
        <div class="form-group">
            <label for="meta_description">Meta Description</label><br>
            <textarea name="meta_description" id="" cols="14" rows="5" class="form-control summernote">{{old('meta_description')}}</textarea>
            <span class="text-danger">
                @error('meta_description')
                {{$message}}
                @enderror
            </span>
        </div>
        
        <center><button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button></center>
    </form>
</div>
@endsection