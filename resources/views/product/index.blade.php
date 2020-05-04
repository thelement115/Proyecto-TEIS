@extends('layouts.app')

@section("title", $data["title"])

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="card">
                <br><h2 align="center"><strong> @lang('Product list') </strong></h2><br>
                <div class="row">
                    <div class="col-sm" >
                        <ul id="errors">
                            {{$data['message'] ?? ''}}
                            @foreach($data["products"] as $product)
                            <div class="card" style="width: 50rem;">
                                <div class="row p-4">
                                    <div class="col-lg">
                                        <h6>{{ "Id: ". $product->getId() }} </h6>
                                        <h5> @lang("Product") {{ $product->getName() }}</h5>
                                        <h5> @lang("Price") {{ $product->getPrice() }}</h5>
                                        <a href="{{ route('product.show', $product->getId()) }}" > @lang("View more details")</a>
                                    </div>
                                    <div class = "col">
                                        <img src="https://www.kamchatkatoys.com/imagenes/poridentidad?identidad=39f1cf89-e1d2-4c4b-862c-65c6074458f5&ancho=900&alto=" style="height:15vh">
                                    </div>
                                </div>
                                <div class = "row">
                                    <div class = "col d-flex justify-content-center">
                                        <form action={{route('checkOut.index',['id' => $product->getId()])}}>
                                            @csrf
                                            <button class="btn btn-primary">@lang('messages.buyProduct')</button>
                                        </form>
                                    </div>
                                </div>
                                <form action="{{ route('cart.add',$product->getId())}}"  class="btn">
                                    <input class="btn btn-primary" type="submit" value="Agregar al carrito">
                                </form>
                             
                            </div>
                            <br>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
