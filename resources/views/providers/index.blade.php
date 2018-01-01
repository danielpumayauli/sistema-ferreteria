@extends('layouts.app')

@section('title', 'Proveedores')

@section('body-class', 'product-page')

@section('proveedores-class', 'active')

@section('content')
<div class="header header-filter" style="background-color: #66bb6a">

</div>

<div class="main main-raised">
    <div class="container">
        @include('includes.buttons')

        <div class="section">
            <h2 class="title  text-center">Proveedores</h2>

            @if(session('status'))

            <div class="alert alert-success">
                {{session('status')}}
            </div>

            @endif
            <div class="row text-center">
                <div class="btn-group">
                    <a href="{{url('/providers/create')}}" class="btn btn-primary btn-round pull-right">Agregar Proveedor</a>
                </div>
            </div>
            
            
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Proveedor</th>
                        <th class="col-md-2">Dirección</th>
                        <th class="col-md-4">Descripción</th>
                        <th>Teléfono</th>
                        <th class="text-right">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($providers as $provider)
                    <tr>
                        <td class="text-center">{{ $provider->id }}</td>
                        <td>{{ $provider->name }}</td>
                        <td class="col-md-2">{{ $provider->address }}</td>
                        <td class="col-md-4">{{ $provider->description }}</td>
                        <td>{{ $provider->telephone }}</td>
                        <td class="td-actions text-right">

                            <form method="POST" action="{{route('providers.destroy', $provider->id)}}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <!-- <a href="" rel="tooltip" title="Ver Categoria" class="btn btn-info btn-simple btn-xs">
                                    <i class="fa fa-user"></i>
                                </a> -->
                                <a href="{{route('providers.edit', $provider->id)}}" rel="tooltip" title="Editar Proveedor" class="btn btn-success btn-simple btn-xs">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button type="submit" rel="tooltip" title="Eliminar Proveedor" class="btn btn-danger btn-simple btn-xs">
                                    <i class="fa fa-times"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


        </div>



    </div>

</div>
@include('includes.footer')
@endsection
