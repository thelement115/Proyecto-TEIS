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
                    <img width="100" src="{{url($data["product"]->filename)}}"/>
                </div>
            </div>
            <br>
            <div class="card-header">
                   Comentarios
            </div>
            <br>
            @foreach($data["comments"] as $comment)
                <div class="card">

                <div class="card-header">
                   {{$comment->User()->get()[0]->getName()}}
                </div>
                <div class="card-body">
                   {{$comment->getText()}}
                </div>
            </div>
            @endforeach
            <br>

            <div class="row justify-content-center">
                <div class="col-md">
                    @include('util.messagecomment')
                    <div class="card">
                        <div class="card-header">
                            Agregar comentario
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('comment.save',$data["product"]->getId())}}">
                                @csrf
                                <br><br />
                                    <textarea rows="10" , cols="70" style="text-align:center;" type="text" placeholder="Ingrese comentario" name="text" value="{{old('text')}} "></textarea>
                                <input type="submit" value="Comentar" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "row">
              <div class = "col">
                <form method="POST" action="{{ route('product.destroy', $data["product"]->getId()) }}">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger">@lang("Delete product")</button>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
