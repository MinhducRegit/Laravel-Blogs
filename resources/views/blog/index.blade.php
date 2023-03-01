@extends('layout.main')

@section('css')

@endsection

@section('content')
<h1>Đây là phần {{ $title }}</h1>
<button type="login" name="login" class="">
  <a href="{{route('login')}}" class=" ">Login</a>
</button>
@endsection
