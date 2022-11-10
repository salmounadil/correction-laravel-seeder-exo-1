@extends('layouts.app')
@section('content')
    <section class="d-flex flex-column gap-5">
        <h1 class="text-center">Personnes</h1>
        <form action="/deleteAll" method="POST">
            @csrf
            @method('DELETE')
        <button type="submit" class="btn btn-danger">Tous supprimer</button>
    </form>
        {{-- <a href="/delete" class="btn btn-danger">Tous supprimer</a> --}}
        <div class="personnes d-flex flex-column align-items-center gap-5  text-white m-3">
            @foreach ($personnes as $personne )
                <div class="personne bg-danger">
                    <h1>{{ $personne->nom }}</h1>
                    <h1>{{ $personne->age }}</h1>
                    <h1>{{ $personne->mail }}</h1>
                    <h1>{{ $personne->telephone }}</h1>
                    <a href="/show/{{ $personne->id }}" class="btn btn-primary">Fiche complete</a>
                    <form action="/delete/{{ $personne->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/edit/{{ $personne->id }}" class="btn btn-warning">Edit</a>
                </div>
            @endforeach
        </div>
    </section>
@endsection