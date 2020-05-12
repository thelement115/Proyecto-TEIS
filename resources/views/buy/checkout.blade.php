@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="card">
                <br><h2 align="center"><strong> @lang('messages.buyTitle') </strong></h2><br>
                <div class="row">
                    <div class="col-lg ml-5">
                        <h2>{{ $data["product"]->getName() }}</h5>
                        <h5> @lang("Price") {{ $data["product"]->getPrice() }} x unidad</h5>
                        <form method = "POST" action={{route('checkOut.save', $data["product"]->getId())}}>
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
            </div>
        </div>
    </div>
</div>
@endsection
