{{-- ici on précise qu'il etends de app.blade.php qui se trouve dans layouts --}}
@extends('layouts.app')

{{-- ici on ajoute notre section 0 --}}
    @section('content')
    <h1> {{$post -> content}} </h1>

@endsection