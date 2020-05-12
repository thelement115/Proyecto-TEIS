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
                            @if($product->getVisible())
                                <div class="card" style="width: 50rem;">
                                    <div class="row p-4">
                                        <div class="col-lg">
                                            <h5> @lang("Product") {{ $product->getName() }}</h5>
                                            <h5> @lang("Price") {{ $product->getPrice() }}</h5>
                                            <a href="{{ route('product.show', $product->getId()) }}" > @lang("View more details")</a>
                                        </div>
                                        <div class = "col">
                                            <img width="100" src="{{url($product->filename)}}"/>
                                        </div>
                                    </div>
                                <br>
                                <div class = "row">
                                    <div class = "col d-flex justify-content-center">
                                        <form action={{route('checkOut.index',['id' => $product->getId()])}}>
                                            @csrf
                                            <button class="btn btn-primary">@lang('messages.buyProduct')</button>
                                        </form>
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('cart.add',$product->getId())}}"  class="btn">
                                {{ csrf_field() }}
                                    <input class="btn btn-primary" type="submit" value="Agregar al carrito">
                                </form>
                             
                            </div>
                            <br>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
