@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Carrito</div>
                <div class="card-body">
                  <form method="POST" action="{{ route('cart.save') }}">
                    @csrf
                  </form>
                <br /><br />
                <ul>
                    @if($data["products"])
                        @foreach($data["products"] as $product)
                        <li>
                        <h5> @lang("Product") {{ $product->getName() }}</h5>
                        <h5> @lang("Price") {{ $product->getPrice() }}</h5></li>


                </ul>
                <form method="POST" action="{{ route('cart.erase', $product->getId()) }}">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger">@lang("Delete item carrito")</button>
                    </form>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
