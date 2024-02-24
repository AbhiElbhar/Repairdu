@extends('layouts.admin.main')

@section('content')


<div class="container mt-4 mb-4 mr-6 ml-6 col-md-11 card p-3 bg-white">
    <a href="{{route('time.create')}}"><button class="btn btn-primary d-inline-block m-2 float-right">Add Package Time</button></a>
    <table class="table">
        <thead>
            <tr>
                <th>Package Time</th>
                <th colspan="2"><center>Actions</center></th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($time))
            @foreach($time as $value)
            <tr>
                <td scope="row">{{$value->time}}</td>
                
                <td><a href="{{route('time.edit',$value->id)}}"><button class="btn btn-primary">Edit</button></a></td>
                
                <td><form action="{{route('time.destroy',$value->id)}}" class= "action" method="POST"> @csrf  @method('DELETE') <button class="btn btn-danger">Delete</button></form></td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="3">There are no data.</td>
            </tr>
            @endif
        </tbody>
    </table>
    {!! $time->links() !!}  
</div>
@endsection