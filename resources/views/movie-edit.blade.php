@extends('layouts.app')

@section('content')

  <form  action="{{route('movies.update', $movie-> id)}}" method="post">
    @csrf
    @method('PUT')
    <label for="title">title</label>
    <input type="text" name="title" value="{{$movie-> title}}">
    <label for="year">year</label>
    <input type="text" name="year" value="{{$movie-> year}}">
    <label for="overview">overview</label>
    <input type="text" name="overview" value="{{$movie-> overview}}">
    <input type="submit" name="submit" value="Update">

  </form>


@endsection
