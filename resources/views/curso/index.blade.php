@extends('layout.app')

@section('header')
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
@endsection

@section('contenido')
    <form action="{{ route('guardar') }}" method="post">
        @csrf
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <input type="number" name="edad" id="edad" placeholder="Edad">
        <input type="number" name="telefono" id="telefono" placeholder="Teléfono">
        <input type="submit" value="Crear">
        "id_jefe"
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Teléfono</th>
            <th>Fecha de creación</th>
            <th>Fecha de actualización</th>
            <th></th>
        </tr>
        @foreach ($integrantes as $integrante)
                <tr>
                    <form action="{{ route('actualizar', ['id' => $integrante->id]) }}" method="post">
                    <td>
                        @csrf
                        @method('put')
                        {{ $integrante->id }}</td>
                    <td><input type="text" name="nombre" id="nombre" placeholder="Nombre"
                            value="{{ $integrante->nombre }}"></td>
                    <td><input type="number" name="edad" id="edad" placeholder="Edad"
                            value="{{ $integrante->edad }}"></td>
                    <td><input type="number" name="telefono" id="telefono" placeholder="Teléfono"
                            value="{{ $integrante->telefono }}"></td>
                    <td>{{ $integrante->created_at }}</td>
                    <td>{{ $integrante->updated_at }}</td>
                    <td><input type="submit" value="Actualizar"></td>
                </form>
                <form action="{{route('eliminar', ["id" => $integrante->id])}}" method="post">
                    <td>
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar">
                    </td>
                </form>
                </tr>
        @endforeach
    </table>
@endsection
