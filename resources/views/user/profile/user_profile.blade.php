@extends('user.layouts.template')
@section('main-content')
<h2>user profile : {{ Auth::user()->name }}</h2>
<h2>user email : {{ Auth::user()->email }}</h2>
<h2>user created_at : {{ Auth::user()->created_at }}</h2>
<h2>user updated_at : {{ Auth::user()->updated_at }}</h2>
@endsection