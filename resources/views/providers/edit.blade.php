@extends('layouts.app')

@section('title', 'Agregar Proveedor')

@section('body-class', 'product-page')

@section('content')
<div class="header header-filter" style="background-color: #66bb6a">

</div>

<div class="main main-raised">
    <div class="container">
        @include('includes.buttons')
        <div class="section">
            <h2 class="title  text-center">Editar Proveedor</h2>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{route('providers.update', $provider->id)}}" >
                {{ csrf_field() }}
                {{method_field('PATCH')}}

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre de la Categoría</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name', $provider->name)}}">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group label-floating">
                            <label class="control-label">Dirección</label>
                            <input type="text" class="form-control" name="address" value="{{ old('address', $provider->address)}}">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group label-floating">
                            <label class="control-label">Teléfono</label>
                            <input type="text" class="form-control" name="telephone" value="{{ old('telephone', $provider->telephone)}}">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group label-floating">
                            <label class="control-label">Descripción</label>
                            <input type="text" step="0.01" class="form-control" name="description" value="{{ old('description', $provider->description)}}">
                        </div>
                    </div>
                </div>
                <div class="row text-center">                  
                    <div class="btn-group" role="group">
                        <button type="submit" class="btn btn-primary">Actualizar Proveedor</button>
                        <a href="{{ url('/providers') }}" class="btn btn-default">Volver</a>
                    </div>
                </div>
                
                



                

            </form>

        </div>



    </div>

</div>

@include('includes.footer')
@endsection
