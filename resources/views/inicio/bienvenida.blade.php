@extends('layouts/basica')

@section('contenido')
<h1>
    Hola {{ $nombre }} {{ $apellido }}
</h1>
<p>
    {{ $nombreM }}
</p>
@endsection