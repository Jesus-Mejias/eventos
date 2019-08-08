@extends('layouts.app')
@section('title','Registro')
@section('content')


<h1>Events at Kazan Expo</h1>
<h4>Filter by date</h4> <input type="date" name="">

<div>


<!--{{ route('newEvent') }}-->
    <a href="{{ route('register') }}">Go to registratio</a>
</div>

<div class="my">
	<a href="{{ route('myEvents') }}">My events</a>
</div>



@endsection