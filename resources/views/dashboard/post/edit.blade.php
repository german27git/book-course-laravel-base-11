@extends('dashboard.master')

@section('content')

@include('dashboard.fragment._errors-form')

<h1>Editando Post : {{$post->title}}</h1>

    <form action="{{ route('post.update',$post->id) }}" method="post" enctype="multipart/form-data">

        @method('PATCH')
        @include('dashboard.post._form',['task'=>'edit']);
    </form>
    
@endsection