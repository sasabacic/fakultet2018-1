@extends('master')

@section('title', 'Mobitel detalji')
{{-- linkovi za mobitel --}}
@section('sidebar')
@parent

<p>Ovo su linkovi za mobitel:</p>
<a href="/mobitels">Svi mobiteli</a>

@endsection

{{-- This comment will not be present in the rendered HTML --}}

@section('content')

<?php
//dd($mobit);
?>
<h3>Lista mobitela:</h3>
<ul>
    @foreach ($mobitels as $m)
    
    {{-- <li> <a href="/mobitels/{{$m->id}}"> {{$m->producer }}</a></li> --}}
    
    <li> <a href="{{url("/mobitels/{$m->id}")}}"> {{$m->producer }}</a></li>
    
    @endforeach
</ul>


{{--
    Trenutna cijena je <span style="font-weight: bold; color: #e3342f">{{ $mobitel->price }} </span><br>
Model je: {{ $mobitel->model }}, veličina ekrana je {{ $mobitel->screen }} 
--}}


@endsection

