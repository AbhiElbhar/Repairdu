@extends('layouts.admin.main')

@section('content')


<div class="container mt-4 mb-4 mr-6 ml-6 col-md-11 card p-3 bg-white">
    <h4>New Register</h4> 
    <table class="table">
        <thead>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>Phone number</th>
                <th>package</th>
                <th>package Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($register))
            @foreach($register as $value)
            <tr>
                <td scope="row">{{$value->name}}</td>
                <td scope="row">{{$value->email}}</td>
                <td scope="row">{{$value->mobile_no}}</td>
                <td scope="row">{{$value->package}}</td>
                <td scope="row">{{$value->package_type}}</td>

                <td><form action="{{route('register.destroy',$value->id)}}" class= "action" method="POST"> @csrf  @method('DELETE') <button class="btn btn-danger">Delete</button></form></td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="6">There are no data.</td>
            </tr>
            @endif
        </tbody>
    </table>
    {!! $register->links() !!}  
</div>


@endsection