@extends('home')
@section('title', $message->title)
@section('content')
    <h4>{{ $message->title }}</h4>
    <p>{{ $message->content }}</p>
    <p></p>
@endsection()