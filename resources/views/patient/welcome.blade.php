@extends('homepage.homepage_after_login.layout_homepage')
@section('content')
@section('title','Doctor Information')

hello, {{Session::get('name')}}

@endsection