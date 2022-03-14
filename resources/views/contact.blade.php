@extends('layouts.app')


@section('content')
    <h1>Contact Page</h1>
    <ul>
    @if(count($people))
        @foreach( $people as $person)
            <li class="contact-card">{{$person->name}} is {{$person->age}} years old</li>
        @endforeach
    @endif
    </ul>
@endsection

@section('footer')
    <script>alert('Hello Guest')</script>
@endsection
