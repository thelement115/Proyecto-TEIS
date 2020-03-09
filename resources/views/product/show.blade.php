@extends('layouts.app') 

@section("title", $data["title"]) 

@section('content')

<div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ route('product.index') }}">
        {{ 'Volver a lista de productos' }}
    </a>
    <div class="row justify-content-center">
        <div class="col-md-8 my-4">
            <div class="card">
                <div class="card-header">
                    {{ $data["product"]["name"] }}
                </div>
                <div class="card-body">
                    <b>Nombre:</b> {{ $data["product"]["name"] }}<br /> 
                    <b>Precio:</b> {{ $data["product"]["price"] }}<br /><br />
                    <b>Descripcción:</b> {{ $data["product"]["description"] }}<br /><br />
                </div>
            </div>
            {{-- <a href="{{ route('product.delete', $data["product"]["id"]) }}" class="btn btn-danger" onclick="
            return confirm('¿Seguro que desea eliminar este producto?')"
                ><span aria-hidden="true"></span>Borrar Producto</a> --}}
        </div>
    </div>
</div>
@endsection