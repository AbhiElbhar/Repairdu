@extends('layouts.admin.main')

@section('content')

<div class="container mt-4 mb-4 mr-6 ml-6 col-md-11 card p-3 bg-white">
    <h1 class="text-center">Edit Counter</h1>
    <form action="{{route('counter.update',$counter->id)}}" class="action" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Enter Title</label>
            <input type="text" name="title" id="" class="form-control" value="{{$counter->title}}">
            <span class="text-danger">
                @error('title')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="counter">Enter Counter</label>
            <input type="text" name="counter" id="" class="form-control" value="{{$counter->counter}}">
            <span class="text-danger">
                @error('counter')
                {{$message}}
                @enderror
            </span>
        </div>       

        <center><button type="submit" class="btn btn-primary">Update</button></center>
    </form>
</div>

@endsection