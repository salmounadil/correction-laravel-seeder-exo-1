@extends('layouts.app')
@section('content')
    <h1>Edit</h1>
    <div class="form">
        <form action="/update/{{ $edit->id }}" method="POST">
            @csrf
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="" value="{{ $edit->nom }}">
            <label for="age">age</label>
            <input type="text" name="age" id="" value="{{ $edit->age }}">
            <label for="telephone">telephone</label>
            <input type="text" name="telephone" id="" value="{{ $edit->telephone }}">
            <label for="email">email</label>
            <input type="text" name="email" id="" value="{{ $edit->email }}">
            <button type="submit" class="btn btn-success">Update</button>
           
        </form>
    </div>
@endsection