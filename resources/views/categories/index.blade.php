@extends('layouts.app')

@section('title', 'Categorías')

@section('body-class', 'product-page')

@section('categorias-class', 'active')

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">

</div>

<div class="main main-raised">
    <div class="container">

        <div class="section">
            <h2 class="title  text-center">Categorías</h2>

            @if(session('status'))

            <div class="alert alert-success">
                {{session('status')}}
            </div>

            @endif
            <a href="{{url('/categories/create')}}" class="btn btn-primary btn-round pull-right">Agregar Categoría</a>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Categoría</th>
                        <th>Descripción</th>
                        <th class="text-right">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $categorie)
                    <tr>
                        <td class="text-center">{{ $categorie->id }}</td>
                        <td>{{ $categorie->name }}</td>
                        <td>{{ $categorie->description }}</td>
                        <td class="td-actions text-right">

                            <form method="POST" action="{{route('categories.destroy', $categorie->id)}}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <!-- <a href="" rel="tooltip" title="Ver Categoria" class="btn btn-info btn-simple btn-xs">
                                    <i class="fa fa-user"></i>
                                </a> -->
                                <a href="{{route('categories.edit', $categorie->id)}}" rel="tooltip" title="Editar Categoria" class="btn btn-success btn-simple btn-xs">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button type="submit" rel="tooltip" title="Eliminar Categoria" class="btn btn-danger btn-simple btn-xs">
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
