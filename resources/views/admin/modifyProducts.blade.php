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
                            @foreach($data["products"] as $product)
                            @if($product->getVisible())
                                <div class="card" style="width: 50rem;">
                                    <div class="row p-4">
                                        <div class="col-lg">
                                            <h5> @lang("Product") {{ $product->getName() }}</h5>
                                            <h5> @lang("Price") {{ $product->getPrice() }}</h5>
                                        </div>
                                        <div class="row p-5">
                                            <div class="col-lg">
                                                <img width="100" src="{{url($product->filename)}}"/>
                                            </div>
                                        </div>
                                        <div class = "row p-5">
                                            <form method="POST" action="{{ route('product.destroy', $product->getId()) }}">
                                                @csrf @method('DELETE')
                                                <button class="btn btn-danger">@lang("Delete product")</button>
                                            </form>
                                        </div>
                                    </div>
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
