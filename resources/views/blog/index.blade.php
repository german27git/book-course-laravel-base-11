@extends('blog.master')

@section('content')
    <x-blog.post.index :posts='$posts'>
        Post list

        @slot('footer')
            footer
        @endslot

        
    </x-blog.post.index>    
@endsection
    
