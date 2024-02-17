@extends('layouts.admin.main')

@section('content')

<div class="container mt-4 mb-4 mr-6 ml-6 col-md-11 card p-3 bg-white">
    <h1 class="text-center">Edit Industry</h1>
    <form action="{{route('industry.update',$industry->id)}}" class="action" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Enter Title</label>
            <input type="text" name="title" id="" class="form-control" value="{{$industry->title}}">
            <span class="text-danger">
                @error('title')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="category_id">Enter Category</label>
            <select name="category_id" id="" class="form-control">
                @foreach ($category as $value)
                @if ($value->id == $industry->category_id)
                <option value="{{$industry->category_id}}"> {{$value->name}}</option>
                @endif
                @endforeach
                @foreach ($category as $value)
                @if ($value->id == $industry->category_id)
                @continue
                @endif
                <option value="{{$value->id}}"> {{$value->name}} </option>
                @endforeach
            </select>
            <span class="text-danger">
                @error('category_id')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="old_image">Old Image</label><br>
            <img src="{{asset('Admin/images/'.$industry->image)}}" class="rounded-cricle" width="250" height="250">
            <input type="hidden" name="old_image" id="" class="form-control" value="{{$industry->image}}">
            <span class="text-danger">
                @error('old_image')
                {{$message}}
                @enderror
            </span>
        </div> 
             
        <div class="form-group">
            <label for="image">Enter New Image</label>
            <input type="file" name="image" id="" class="form-control">
            <span class="text-danger">
                @error('image')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="description">Description</label><br>
            <textarea name="description" id="" cols="14" rows="5" class="form-control summernote">{{$industry->description}}</textarea>
            <span class="text-danger">
                @error('description')
                {{$message}}
                @enderror
            </span>
        </div>

        <h4>SEO Section</h4>
        <div class="form-group">
            <label for="meta_title">Meta Title</label>
            <input type="text" name="meta_title" id="" class="form-control" value="{{$industry->meta_title}}">
            <span class="text-danger">
                @error('meta_title')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="meta_keyword">Meta Keyword</label>
            <input type="text" name="meta_keyword" id="" class="form-control" value="{{$industry->meta_keyword}}">
            <span class="text-danger">
                @error('meta_keyword')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="meta_description">Meta Description</label><br>
            <textarea name="meta_description" id="" cols="14" rows="5" class="form-control summernote">{{$industry->meta_description}}</textarea>
            <span class="text-danger">
                @error('meta_description')
                {{$message}}
                @enderror
            </span>
        </div>

        <center><button type="submit" class="btn btn-primary">Update</button></center>
    </form>
</div>

@endsection