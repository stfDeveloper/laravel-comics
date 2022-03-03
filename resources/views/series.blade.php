@extends('layouts.app')

@section('content')
    @foreach ($comics as $element => $card)
        <div class="comic">
            <img src="{{$card['thumb']}}">
            <p>{{$card['title']}}</p>
        </div>
    @endforeach