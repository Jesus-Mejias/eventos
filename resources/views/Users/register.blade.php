@extends('layouts.app')
@section('title','Register of event')
@section('content')

<h1>Register of " "</h1>

<div>
	<label>Registration type</label>
	<select>
		<option>-select type of ticket</option>
		<option>Early Bird (15% off of regular price)</option>
		<option>Standard</option>
		<option>VIP (pay and get 20% more)</option>
		
	</select>

</div>

<div>
<label>You pay</label>
<input type="text" name="">
<button>Registration of event </button>
	
</div>
@endsection