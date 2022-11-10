@extends('layouts.app')
@section('content')
    <section class="show">
        <div class="personne">
            <h1>{{ $show->nom }}</h1>
            <h1>{{ $show->age }}</h1>
            <h1>{{ $show->email }}</h1>
            <h1>{{ $show->telephone }}</h1>
        </div>
    </section>
@endsection