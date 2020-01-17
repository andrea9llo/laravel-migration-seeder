@extends('layouts.app')

@section('content')

  <form  action="{{route('movies.store')}}" method="post">
    @csrf
    @method('POST')
    <label for="title">title</label>
    <input type="text" name="title" value="">
    <label for="year">year</label>
    <input type="text" name="year" value="">
    <label for="overview">overview</label>
    <input type="text" name="overview" value="">
    <input type="submit" name="submit" value="Save">

  </form>


@endsection
