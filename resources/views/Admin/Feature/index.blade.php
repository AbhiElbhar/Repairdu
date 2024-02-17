@extends('layouts.admin.main')

@section('content')


<div class="container mt-4 mb-4 mr-6 ml-6 col-md-11 card p-3 bg-white">
    <a href="{{route('feature.create')}}"><button class="btn btn-primary d-inline-block m-2 float-right">Add Software Feature</button></a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th colspan="2"><center>Actions</center></th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($feature))
            @foreach($feature as $value)
            <tr>
                <td scope="row">{{$value->title}}</td>
                
                <td><img src="{{asset('Admin/images/'.$value->image)}}" class="rounded-cricle" width="50" height="50"/></td>
                
                <td><a href="{{route('feature.edit',$value->id)}}"><button class="btn btn-primary">Edit</button></td>
                    
                    <td><form action="{{route('feature.destroy',$value->id)}}" class= "action" method="POST"> @csrf  @method('DELETE') <button class="btn btn-danger">Delete</button></form></td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="4">There are no data.</td>
                </tr>
                @endif
            </tbody>
        </table>
        {!! $feature->links() !!}  
    </div>
    @endsection