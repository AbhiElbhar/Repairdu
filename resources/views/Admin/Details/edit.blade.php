@extends('layouts.admin.main')

@section('content')

@foreach ($details as $detail)

<div class="container mt-4 mb-4 mr-6 ml-6 col-md-11 card p-3 bg-white">
    <h1 class="text-center">Edit Details</h1>
    <form action="{{route('detail.update',$detail->id)}}" class="action" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="email">Enter Email</label>
            <input type="text" name="email" id="" class="form-control" value="{{$detail->email}}">
            <span class="text-danger">
                @error('email')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="mobile_no">Enter mobile Number</label>
            <input type="text" name="mobile_no" id="" class="form-control" value="{{$detail->mobile_no}}">
            <span class="text-danger">
                @error('mobile_no')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="address">Address</label><br>
            <textarea name="address" id="" cols="14" rows="5" class="form-control summernote">{{$detail->address}}</textarea>
            <span class="text-danger">
                @error('address')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="old_logo">Old logo</label><br>
            <img src="{{asset('Admin/images/'.$detail->logo)}}" class="rounded-cricle" width="250" height="250">
            <input type="hidden" name="old_logo" id="" class="form-control" value="{{$detail->logo}}">
            <span class="text-danger">
                @error('old_logo')
                {{$message}}
                @enderror
            </span>
        </div>
              
        <div class="form-group">
            <label for="logo">Enter New logo</label>
            <input type="file" name="logo" id="" class="form-control">
            <span class="text-danger">
                @error('logo')
                {{$message}}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="old_favicon">Old Favicon</label><br>
            <img src="{{asset('Admin/images/'.$detail->favicon)}}" class="rounded-cricle" width="250" height="250">
            <input type="hidden" name="old_favicon" id="" class="form-control" value="{{$detail->favicon}}">
            <span class="text-danger">
                @error('old_favicon')
                {{$message}}
                @enderror
            </span>
        </div>
              
        <div class="form-group">
            <label for="favicon">Enter New Favicon</label>
            <input type="file" name="favicon" id="" class="form-control">
            <span class="text-danger">
                @error('favicon')
                {{$message}}
                @enderror
            </span>
        </div>

        <center><button type="submit" class="btn btn-primary">Update</button></center>
    </form>
</div>
    
@endforeach

@endsection