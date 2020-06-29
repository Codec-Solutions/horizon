@php

if () {}
$toto = $titi;

@endphp

@extends('main-template')

@section('title', $page->title)

@section('sidebar')
@parent

<p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<h1>Ma page de login</h1>
<p>This is my body content.</p>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique incidunt vitae illo aspernatur ipsa praesentium
    consequuntur obcaecati fugiat voluptas qui iusto veritatis expedita reiciendis animi molestias dicta recusandae, cum
    minima?</p>
@endsection

@section('message-test')
{!! $message == "Loic" ? $message : "Mauvais" !!}
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('login.css') }}">
<link rel="stylesheet" href="{{ asset('login.css') }}">
<link rel="stylesheet" href="{{ asset('login.css') }}">
@endsection

@section('script')
<script src="{{ asset("js/login.js") }}"></script>
<script src="{{ asset("js/login.js") }}"></script>
<script src="{{ asset("js/login.js") }}"></script>
<script src="{{ asset("js/login.js") }}"></script>
@endsection