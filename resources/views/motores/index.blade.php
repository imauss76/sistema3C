@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3>Listagem de Motores:</h3>
        </div>
        <div class="col-md-8">
            <a href="{{route('motor.create')}}" class="btn btn-primary">Incluir Motor</a>
        </div>

        <div>{{ $motores->links() }}</div>

    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Tag</th>
                    <th>Potencia</th>
                    <th>Polos</th>
                    <th>Carcaça</th>
                    <th>Fabricante</th>

                </tr>
            </thead>
            <tbody>
            @foreach($motores as $motor)
                <tr>
                    <td>{{ $motor->id }}</td>
                    <td>{{ $motor->tag }}</td>
                    <td>{{ $motor->potencia }}</td>
                    <td>{{ $motor->polos }}</td>
                    <td>{{ $motor->carcaça }}</td>
                    <td>{{ $motor->fabricante }}</td>

                    <td>
                        <ul class="list-inline">
                            <li>
                            <a href="{{route('motor.edit', ['motor' => $motor])}}">Editar</a>
                            </li>
                            <li>
                            <a href="{{route('motor.delete', ['motor' => $motor])}}">Deletar</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection