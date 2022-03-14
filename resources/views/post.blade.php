@extends('layouts.app')


@section('content')
    <h1>Post Page </h1>
    @foreach($results as $post)
        <div>
            <h1>{{$post->title}}</h1>
            <p>{{$post->content}}</p>
        </div>
    @endforeach
@endsection
