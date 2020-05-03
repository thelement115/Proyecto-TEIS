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
                    <b>@lang("Product")</b> {{ $data["product"]->getName() }}<br />
                    <b>@lang("Price")</b> {{ $data["product"]->getPrice() }}<br /><br />
                    <b>@lang("Description")</b> {{ $data["product"]->getDescription() }}<br /><br />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
