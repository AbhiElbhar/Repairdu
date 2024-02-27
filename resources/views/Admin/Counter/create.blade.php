@extends('layouts.admin.main')

@section('content')

<div class="container mt-4 mb-4 mr-6 ml-6 col-md-11 card p-3 bg-white">
    <h1 class="text-center">Add counter</h1>
    <form action="{{route('counter.store')}}" class="action" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Enter title</label>
            <input type="text" name="title" id="" class="form-control" value="{{old('title')}}">
            <span class="text-danger">
                @error('title')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="counter1">Enter counter</label>
            <input type="text" name="counter" id="" class="form-control" value="{{old('counter')}}">
            <span class="text-danger">
                @error('counter')
                {{$message}}
                @enderror
            </span>
        </div>

        <center><button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button></center>
    </form>
</div>
@endsection