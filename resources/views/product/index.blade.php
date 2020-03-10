@extends('layouts.app')

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Productos</div>
                <div class="card-body">
                    Productos
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


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
                            @foreach($data["products"] as $product)
                            <div class="card" style="width: 50rem;">


                                <div class="row p-4">
                                    <div class="col-lg">
                                        <h6>{{ "Id: ". $product->getId() }} </h6>
                                        <h5> @lang("Product") {{ $product->getName() }}</h5>
                                        <h5> @lang("Price") {{ $product->getPrice() }}</h5>
                                        <a href="{{ route('product.show', $product->getId()) }}" > @lang("View more details")</a>
                                    </div>

                                    </div>
                                    <div class="row p-5">
                                        <div class="col-lg">
                                            <img src="" alt="imagen_producto" />
                                        </div>
                                    </div>
                                      <form method="POST" action="{{route('cart.save')}}">
                                        @csrf
                                  <input type="submit" value="Agregar a carrito"/>
                                </form>
                                </div>
                            </div>
                            <br>
                            @endforeach
                        </ul>
                    </div>
                    {{-- <div class="col-sm">
                        <ul id="errors">
                            @foreach($data["products"] as $product)
                                <div class="row p-5">
                                    <div class="col-lg">
                                        <img src="" alt="imagen_producto" />
                                    </div>
                                </div>
                            @endforeach
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
