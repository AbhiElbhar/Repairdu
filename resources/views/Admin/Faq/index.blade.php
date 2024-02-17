@extends('layouts.admin.main')

@section('content')


<div class="container mt-4 mb-4 mr-6 ml-6 col-md-11 card p-3 bg-white">
    <a href="{{route('faq.create')}}"><button class="btn btn-primary d-inline-block m-2 float-right">Add FQA</button></a>
    <table class="table">
        <thead>
            <tr>
                <th>Question</th>
                <th>Answer</th>
                <th colspan="2"><center>Actions</center></th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($faq))
            @foreach($faq as $value)
            <tr>
                <td scope="row">{{$value->question}}</td>
                
                <td> {{$value->answer}} </td>
                
                <td><a href="{{route('faq.edit',$value->id)}}"><button class="btn btn-primary">Edit</button></td>
                    
                    <td><form action="{{route('faq.destroy',$value->id)}}" class= "action" method="POST"> @csrf  @method('DELETE') <button class="btn btn-danger">Delete</button></form></td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="4">There are no data.</td>
                </tr>
                @endif
            </tbody>
        </table>
        {!! $faq->links() !!}  
    </div>
    @endsection