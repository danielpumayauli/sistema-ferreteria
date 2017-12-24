@extends('layouts.app')

@section('title', 'Agregar Categoría')

@section('body-class', 'product-page')

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">

</div>

<div class="main main-raised">
    <div class="container">


        <div class="section">
            <h2 class="title  text-center">Editar Categoría</h2>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{route('categories.update', $category->id)}}" >
                {{ csrf_field() }}
                {{method_field('PATCH')}}

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre de la Categoría</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name', $category->name)}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Descripción de la categoría</label>
                            <input type="text" step="0.01" class="form-control" name="description" value="{{ old('description', $category->description)}}">
                        </div>
                    </div>
                </div>
                <div class="row text-center">                  
                    <div class="btn-group" role="group">
                        <button type="submit" class="btn btn-primary">Actualizar Categoría</button>
                        <a href="{{ url('/categories') }}" class="btn btn-default">Volver</a>
                    </div>
                </div>
                
                



                

            </form>

        </div>



    </div>

</div>

@include('includes.footer')
@endsection
