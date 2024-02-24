@extends('layouts.admin.main')

@section('content')


<div class="container mt-4 mb-4 mr-6 ml-6 col-md-11 card p-3 bg-white">
<h4>name:{{$contact->name}}</h4>
<h4>email:{{$contact->email}}</h4>
<h4>subject:{{$contact->subject}}</h4>
<h4>description:{{$contact->description}}</h4>
</div>
@endsection