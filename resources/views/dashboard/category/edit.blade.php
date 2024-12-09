@extends('dashboard.master')

@section('content')

@include('dashboard.fragment._errors-form')

<h1>Editando Post : {{$category->title}}</h1>

    <form action="{{ route('category.update',$category->id) }}" method="post">

        @method('PATCH')
        @include('dashboard.category._form',['task'=>'edit']);
    </form>
    
@endsection