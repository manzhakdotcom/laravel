@extends('home')
@section('title', 'List of messages')
@section('content')
    <form action="/create" method="post">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="content" placeholder="Content">
        {{ csrf_field() }}
        <button type="submit">Save</button>
    </form>
    @foreach($messages as $message)
        <h4>{{ $message->title }}</h4>
        <p>{{  $message->content }}</p>
        <i>{{  $message->created_at->diffForHumans() }}</i>
        <p><a href="/msg/{{ $message->id }}">View</a></p>
        <hr>
    @endforeach
@endsection