@extends('dashboard.master')

@section('content')

@include('dashboard.fragment._errors-form')

    <h1>Detalle del Post: {{$category->title}}</h1>

@endsection