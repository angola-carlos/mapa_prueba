@extends('layouts.app')

@section('content')
    <h1>Subir plano</h1>

    <form action="/subir-plano" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="plano" required>
        <button type="submit">Subir</button>
    </form>
@endsection
