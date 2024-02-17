@extends('layouts.admin.main')

@section('content')

<div class="container mt-4 mb-4 mr-6 ml-6 col-md-11 card p-3 bg-white">
    <h1 class="text-center">Add Tester</h1>
    <form action="{{route('tester.store')}}" class="action" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Enter Name</label>
            <input type="text" name="name" id="" class="form-control" value="{{old('name')}}">
            <span class="text-danger">
                @error('name')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="position">Enter Position</label>
            <input type="text" name="position" id="" class="form-control" value="{{old('position')}}">
            <span class="text-danger">
                @error('position')
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
             
        <center><button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button></center>
    </form>
</div>
@endsection