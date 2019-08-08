@extends('layouts.app')
@section('title','Events')
@section('content')
<div class="header">
    Events
    <a id="add-event" href="{{ route('newEvent') }}">Add event</a>
</div>

<div class="content">
    <table border="1">
        <thead>
            <tr>
                <th>Event</th>
                <th>Date</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="event">
                <td class="event-title">
                Title
                </td>
                <td class="event-date">Date</td>
                <td class="event-price">Price</td>
                <td class="event-actions">
                    <a class="event-participants" href="{{ route('attendeeList') }}">Attendee list</a>
                    <a class="event-ratings" href="{{ route('rating') }}">Rating diagram</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection