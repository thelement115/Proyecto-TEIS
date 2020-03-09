@extends('layouts.app')

@section("title", $data["title"])

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card-header">
                Crear Producto Nuevo
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
                @endif
                <form method="POST" action="{{ route('product.save') }}">
                    @csrf
                    <div class="form-group">  
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Producto:</label>
                                <input type="text" class="form-control" name="name" placeholder="Escriba el nombre del producto" value="{{ old('name') }}"/>
                            </div> 
                            <div class="form-group col-md-6">
                                <label for="price">Precio</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">$</div>
                                    </div>
                                    <input type="number" class="form-control" name="price" placeholder="Ingrese el precio del producto" value="{{ old('price') }}"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción del producto</label>
                            <textarea class="form-control" name="description" rows="2" placeholder="Escriba una breve descripción del producto a registar" value="{{ old('description') }}"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Crear producto</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection