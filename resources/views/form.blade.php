{{-- ici on précise qu'il etends de app.blade.php qui se trouve dans layouts --}}
@extends('layouts.app')

{{-- ici on ajoute notre section 0 --}}
    @section('content')
    <h1> Créer un post  </h1>

    <form action=" {{route('posts.store')}} " method="POST">
        @csrf
        <input type="text" name="title"> <br>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <button type="submit">Créer </button>
    </form>

@endsection