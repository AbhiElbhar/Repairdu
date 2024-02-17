@extends('layouts.admin.main')

@section('content')


<div class="container mt-4 mb-4 mr-6 ml-6 col-md-11 card p-3 bg-white">
    <a href="{{route('knowledge-base.create')}}"><button class="btn btn-primary d-inline-block m-2 float-right">Add Knowledge Base</button></a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th colspan="2"><center>Actions</center></th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($base))
            @foreach($base as $value)
            <tr>
                <td scope="row">{{$value->title}}</td>
                
                <td class="col-md-8">{{$value->description}}</td>
                
                <td><a href="{{route('knowledge-base.edit',$value->id)}}"><button class="btn btn-primary">Edit</button></td>
                    
                    <td><form action="{{route('knowledge-base.destroy',$value->id)}}" class= "action" method="POST"> @csrf  @method('DELETE') <button class="btn btn-danger">Delete</button></form></td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="4">There are no data.</td>
                </tr>
                @endif
            </tbody>
        </table>
        {!! $base->links() !!}  
    </div>
    @endsection