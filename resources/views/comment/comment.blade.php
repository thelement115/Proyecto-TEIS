@extends('layouts.app')
@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="padding-top=5px;">
            <div class="card">
                <div class="card-header">Andres</div>
                <div class="card-body">
                    <b>@lang("Id"):</b> {{ $data["comments"]->getId()}}<br />
                    <b>@lang("Comentario"):</b> {{ $data["comments"]->getText() }} <br />
                    <form method="POST" action="{{ route('comment.erase', $data["comments"]->getId()) }}">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger">@lang("Borrar comentario")</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
