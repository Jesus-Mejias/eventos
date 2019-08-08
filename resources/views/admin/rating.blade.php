@extends('layouts.app')
@section('title','Rating')
@section('content')

  <head>

        <title>My Charts</title>

        {!! Charts::assets() !!}

    </head>

<h1>Event Rating</h1>

<h2>Web Conference</h2>

<div>
	{!! $chart->render()¡¡}
</div>


@endsection