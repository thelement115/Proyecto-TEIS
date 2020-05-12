@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Carrito</div>
                <div class="card-body">
                    <br /><br />
                        @if($data["products"])
                            @foreach($data["products"] as $product)
                                
                            <div class="card">
                                <div class="card-header">
                                 @lang("Product") 
                                </div>
                                <div class="card-body">
                                    Nombre: <h5>{{ $product->getName() }}</h5>
                                    Precio: <h5>{{ $product->getPrice() }}</h5>
                                    Descripcion: <h5>{{ $product->getDescription() }}</h5>
                                </div> 
                            </div>
                            <br /><br />
                            @endforeach

                            <div class ="card">
                                <div class="card-header">
                                    Total compra
                                </div>
                                <div class="card-body">
                                    
                                </div> 
                            </div>
                            <br /><br />
                                <form method="POST" action="{{ route('cart.delete')}}">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger">@lang("Borrar carrito")</button>
                                </form>
                                <br /><br />
                            
                         @endif
                </div>
                
            </div>
        </div>
    </div>

</div>
@endsection
