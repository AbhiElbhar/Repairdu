@extends('layouts.admin.main')

@section('content')

<div class="container mt-4 mb-4 mr-6 ml-6 col-md-11 card p-3 bg-white">
    <h1 class="text-center">Add Privacy Policy & Terms.</h1>
    <form action="{{route('policy.store')}}" class="action" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="policy">Privacy Policy</label><br>
            <textarea name="policy" id="" cols="14" rows="5" class="form-control summernote">{{old('policy')}}</textarea>
            <span class="text-danger">
                @error('policy')
                {{$message}}
                @enderror
            </span>
        </div>
        
        <div class="form-group">
            <label for="terms">Terms & Condition</label><br>
            <textarea name="terms" id="" cols="14" rows="5" class="form-control summernote">{{old('terms')}}</textarea>
            <span class="text-danger">
                @error('terms')
                {{$message}}
                @enderror
            </span>
        </div>
             
        <center><button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button></center>
    </form>
</div>
@endsection