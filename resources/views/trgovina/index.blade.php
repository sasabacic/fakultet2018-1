@extends('adminlte::page')

@section('title', 'Sve trgovine')

{{-- This comment will not be present in the rendered HTML --}}

@section('content_header')
    <h1>Trgovine</h1>
@stop
@section('content')
<a href='{{url("/trgovine/create")}}'><span class="label label-success">Nova trgovina</span></a>
<hr>
<ul>
    @foreach ($trgovine as $t)
    
  
    
    <li> <a href='{{url("/trgovine/{$t->id}")}}'> {{$t->name }}</a>
<a href='{{url("/trgovine/{$t->id}/edit")}}'><span class="label label-info">Edit</span></a>
<form action='{{url("/trgovine/{$t->id}")}}' method='POST' style="display: inline">
@csrf
<input type='hidden' name='_method' value='DELETE'>
<button type='submit' name='delete_trgovina' value='delete' class="btn btn-warning"> delete</button>
</form>
</li>
    
    @endforeach
</ul>


@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop