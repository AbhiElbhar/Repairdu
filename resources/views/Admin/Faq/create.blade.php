@extends('layouts.admin.main')

@section('content')

<div class="container mt-4 mb-4 mr-6 ml-6 col-md-11 card p-3 bg-white">
    <h1 class="text-center">Add FAQ</h1>
    <form action="{{route('faq.store')}}" class="action" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="question">Enter Question</label>
            <input type="text" name="question" id="" class="form-control" value="{{old('question')}}">
            <span class="text-danger">
                @error('question')
                {{$message}}
                @enderror
            </span>
        </div>
        
        <div class="form-group">
            <label for="answer">Enter Answer</label>
            <input type="text" name="answer" id="" class="form-control" value="{{old('answer')}}">
            <span class="text-danger">
                @error('answer')
                {{$message}}
                @enderror
            </span>
        </div>

        <center><button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button></center>
    </form>
</div>
@endsection