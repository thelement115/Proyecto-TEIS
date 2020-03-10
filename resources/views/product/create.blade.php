@extends('layouts.app')

@section("title", $data["title"])

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card-header">
                @lang('Create new product')
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
                @endif
                <form method="POST" action="{{ route('product.save') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">@lang("Product")</label>
                                <input type="text" class="form-control" name="name" placeholder="Escriba el nombre del producto" value="{{ old('name') }}"/>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="price">@lang("Price")</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">$</div>
                                    </div>
                                    <input type="number" class="form-control" name="price" placeholder="Ingrese el precio del producto" value="{{ old('price') }}"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">@lang("Description")</label>
                            <textarea class="form-control" name="description" rows="2" placeholder="Escriba una breve descripción del producto a registar" value="{{ old('description') }}"></textarea>
                        </div>
                        <label>@lang("Image")</label>

                        <input type="file" name="productImage" />
                    </div>
                    <button type="submit" class="btn btn-primary">@lang("Create product")</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
