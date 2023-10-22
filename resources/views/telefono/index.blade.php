@extends('dashboard')

@section('content')

<head>
    <link rel="icon" href="{{ asset('logo-telefono.png') }}" type="image/png">
</head>

<div class="row">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11"> 

        <h1>
            <img src="{{ asset('logo-telefono.png') }}" width= 150px; >
            CeluMundo
        </h1>
                
        <br><br>
        
        
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#create">
            Ingresar Nuevo
        </button>
        
        <div class="table-responsive">
            <br>
            <table class="table">
                <thead class='bg-warning text-black'>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Año</th>
                        <th scope="col">Color</th>
                        <th scope="col">Empresa de Telefonia</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Imagen</th>
                        <th >Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($telefonos as $telefono)
                    <tr class="">
                        <td scope="row">{{$telefono->id}}</td>
                        <td>{{$telefono->nombre}}</td>
                        <td>{{$telefono->marca}}</td>
                        <td>{{$telefono->modelo}}</td>
                        <td>{{$telefono->anio}}</td>
                        <td>{{$telefono->color}}</td>
                        <td>{{$telefono->telefonia}}</td>
                        <td>{{$telefono->tamaño}}</td>
                        <td>
                            <a href="{{$telefono->featured}}" target="_blank">
                                <img src="{{$telefono->featured}}" alt="{{$telefono->nombre}}" class="img-fluid" width="100">
                            </a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$telefono->id}}">
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$telefono->id}}">
                                Borrar
                            </button>
                        </td>
                    </tr>
                    @include('telefono.info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('telefono.create')

        <!-- Botón de cierre de sesión -->
        @auth
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Cerrar Sesión</button>
        </form>
        @endauth
        
    </div>
</div>
    <div class="col-md-2"></div>
</div>

@endsection
