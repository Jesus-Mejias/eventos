@extends('layouts.app')
@section('title','Rating')
@section('content')

<h1>Event Rating</h1>

<h2>Web Conference</h2>

{!! $chart->container() !!}

@endsection

{!! $chart->script() !!}