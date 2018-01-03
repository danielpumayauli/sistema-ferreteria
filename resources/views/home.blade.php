@extends('layouts.app')

@section('title', 'Bienvenido')

@section('body-class', 'product-page')

@section('inicio-class', 'active')

@section('content')
<div class="header header-filter" style="background-color: #66bb6a">

</div>

<div class="main main-raised">
    <div class="container">
        <div class="pull-left">
            <h3>Bienvenido {{ auth()->user()->name}}</h3>
        </div>
        @include('includes.buttons')
        
        <div class="section">
            <h2 class="title  text-center">Dashboard</h2>

            

            @if(session('status'))

            <div class="alert alert-success">
                {{session('status')}}
            </div>

            @endif

            <!-- <ul class="nav nav-pills nav-pills-primary" role="tablist">
                <li class="active">
                    <a href="#dashboard" role="tab" data-toggle="tab">
                        <i class="material-icons">dashboard</i>
                        Carrito de compras
                    </a>
                </li>
                
                <li>
                    <a href="#tasks" role="tab" data-toggle="tab">
                        <i class="material-icons">list</i>
                        Pedidos realizados
                    </a>
                </li>
            </ul> -->
            
                    

            <!-- Tabs with icons on Card -->
            <div class="card card-nav-tabs">
                <div class="header header-success">
                    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="active">
                                    <a href="#profile" data-toggle="tab">
                                        <i class="material-icons">face</i>
                                        Stock
                                    </a>
                                </li>
                                <li>
                                    <a href="#messages" data-toggle="tab">
                                        <i class="material-icons">chat</i>
                                        Ventas
                                    </a>
                                </li>
                                <li>
                                    <a href="#settings" data-toggle="tab">
                                        <i class="material-icons">build</i>
                                        Compras
                                    </a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="tab-content text-center">
                        <div class="tab-pane active" id="profile">
                            <div class="container">
                                <p class="pull-left">Se presentan los siguientes productos acumulados disponibles en inventarios al día de hoy: <span class="label label-info" style="font-size: 1em">{{ $now }}</span></p>
                            </div>
                            
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="col-md-2 text-center">Nombre</th>
                                        <th class="col-md-5 text-center">Descripción</th>
                                        <th class="text-center">Stock</th>
                                        <th class="text-center">Valuación</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                    <tr>
                                        <td class="text-center">{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td class="text-center">{{ $category->stock }} Unidades</td>
                                        <td class="text-center">S/. {{ $category->amount }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$categories->links()}}
                            
                        </div>
                        <div class="tab-pane" id="messages">
                            <p> I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
                        </div>
                        <div class="tab-pane" id="settings">
                            <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Tabs with icons on Card -->



        </div>



    </div>

</div>

@include('includes.footer')
@endsection
