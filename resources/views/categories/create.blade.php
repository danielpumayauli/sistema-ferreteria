@extends('layouts.app')

@section('title', 'Agregar Categoría')

@section('body-class', 'product-page')

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">

</div>

<div class="main main-raised">
    <div class="container">


        <div class="section">
            <h2 class="title  text-center">Registrar nueva Categoría</h2>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{route('categories.store')}}" >
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre de la Categoría</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name')}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Descripción de la categoría</label>
                            <input type="text" step="0.01" class="form-control" name="description" value="{{ old('description')}}">
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Registrar Categoría</button>
                <a href="{{ url('/categories') }}" class="btn btn-default">Volver</a>

            </form>

        </div>



    </div>

</div>

@include('includes.footer')
@endsection
