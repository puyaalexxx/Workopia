@extends('layout')

@section('content')
    @section('title')
        Create Job
    @endsection
    
    <form action="/jobs" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title"/>
        <input type="text" name="description" placeholder="Description"/>
        <button type="submit">Submit</button>
    </form>
@endsection
