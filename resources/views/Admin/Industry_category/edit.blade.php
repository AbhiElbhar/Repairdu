@extends('layouts.admin.main')

@section('content')

<div class="container mt-4 mb-4 mr-6 ml-6 col-md-11 card p-3 bg-white">
    <h1 class="text-center">Edit Industry Category </h1>
    <form action="{{route('industry_category.update',$industry_category->id)}}" class="action" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Enter Name</label>
            <input type="text" name="name" id="" class="form-control" value="{{$industry_category->name}}">
            <span class="text-danger">
                @error('name')
                {{$message}}
                @enderror
            </span>
        </div>

        <center><button type="submit" class="btn btn-primary">Update</button></center>
    </form>
</div>

@endsection