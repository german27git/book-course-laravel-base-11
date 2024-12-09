@extends('dashboard.master')

@section('content')

@include('dashboard.fragment._errors-form')

    <h1>Detalle del Post: {{$post->title}}</h1>

    <span> {{$post->posted}} </span>
    <span>{{$post->category->title}} </span>

    <div>
        {{$post->description}}
    </div>

    <div>
        {{$post->content}}
    </div>

    <img src="/uploads/posts/{{$post->image}}" style="width: 250px" alt="{{$post->title}}">

    
@endsection