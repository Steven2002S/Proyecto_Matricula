@extends('layout.base')
@section('titulo', 'Estado')


@section('content')
<div class="row mt-5">
    <div class="col-sm-12 mt-5">
        <h1 class="mt-5">
            Estado
        </h1>
        <hr>

        <a href="{{route('estado.create')}}">
            <button class="btn btn-primary mb-5">Agregar</button>
        </a>
    </div>
</div>

<div class="row">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
             
             <th>Nombre</th>
                <th>Matricula</th>
                
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $item)
    <tr>
        <td>{{ $item->nombre }}</td>
        <td>{{ $item->matricula->nombre }}</td>
        <td>
            <form action="{{ route('estado.edit', $item->id) }}" method="POST">
                @csrf
                <button class="btn btn-warning btn-sm">
                    <span class="fas fa-user-edit"></span>
                </button>
            </form>
        </td>
        <td>
            <form action="{{ route('estado.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm"
                    onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?')">
                    <span class="fas fa-user-times"></span>
                </button>
            </form>
        </td>
    </tr>
@endforeach

        
        </tbody>
        {{-- <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Créditos</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </tfoot> --}}
    </table>
</div>

@endsection
