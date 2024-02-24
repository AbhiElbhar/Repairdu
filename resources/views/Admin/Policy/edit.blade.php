@extends('layouts.admin.main')

@section('content')
@foreach($policies as $policy)

<div class="container mt-4 mb-4 mr-6 ml-6 col-md-11 card p-3 bg-white">
    <h1 class="text-center">Edit Privacy policy & Terms.</h1>
    <form action="{{route('policy.update',$policy->id)}}" class="action" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="policy">Privacy policy</label><br>
            <textarea name="policy" id="" cols="14" rows="5" class="form-control summernote">{{$policy->policy}}</textarea>
            <span class="text-danger">
                @error('policy')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="terms">Terms & Condition</label><br>
            <textarea name="terms" id="" cols="14" rows="5" class="form-control summernote">{{$policy->terms}}</textarea>
            <span class="text-danger">
                @error('terms')
                {{$message}}
                @enderror
            </span>
        </div>

        <center><button type="submit" class="btn btn-primary">Update</button></center>
    </form>
</div>
    
@endforeach
@endsection