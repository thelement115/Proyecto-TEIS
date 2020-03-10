@extends('layouts.master')
@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="padding-top=5px;">
            <div class="card">
                <div class="card-header">{{ $data["comment"]["username"] }}</div>
                <div class="card-body">
                    <b>Id:</b> {{ $data["comment"]["id"] }}<br />
                    <b>Nombre:</b> {{ $data["comment"]["username"] }}<br />
                    <b>Comentario</b> {{ $data["comment"]["comment"] }} <br />
                    <a href="{{ url('comment/erase/'.$data['comment']['id']) }}">
                    <button>Borrar de base de datos</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
