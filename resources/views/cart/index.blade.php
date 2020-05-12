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
                                @lang('messages.name') <h5>{{ $product->getName() }}</h5>
                                @lang('messages.price') <h5>{{ $product->getPrice() }}</h5>
                                @lang('messages.description')<h5>{{ $product->getDescription() }}</h5>
                                </div> 
                            </div>
                            <br /><br />
                            @endforeach

                            <div class ="card">
                                <div class="card-header">
                                @lang('messages.totalbuy'): {{ $product->getPrice()}}
                                </div>
                                <div class="card-body">
                                <form method = "POST" action={{route('cart.buy')}}>
                                    @csrf
                                    @lang('messages.method') <select id="Method" name="Method">
                                        <option value="Contraentrega">Contra entrega</option>
                                        <option value="Paypal">Paypal</option>
                                        <option value="TarjetaCredito">Tarjeta De Credito</option>
                                    </select>&nbsp;
                                    @lang('messages.quantity') <input type = "number" id= "quantity" name= "quantity" value="1"><br><br>
                                    <button class="btn btn-primary">@lang('messages.buyProduct')</button>
                                    <br><br>
                                </form>
                                </div> 
                                
                            </div>
                            <br /><br />
                                <form method="POST" action="{{ route('cart.delete')}}">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger">@lang('messages.deletecart')</button>
                                </form>
                                <br /><br />
                            
                         @endif
                </div>
                
            </div>
        </div>
    </div>

</div>
@endsection
