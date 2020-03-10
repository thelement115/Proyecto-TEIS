@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Inicio
                </div>
                <div class="card-body">
                  <div class="row">
                  <div class="col-6 " style="text-align:center;">
                    <form action="{{route('comment.create')}}"><input type="submit" class="btn btn-primary btn-sm" value="Crear Comentario" />
                    </form>
                  </div>
                  <div class="col-6" style="text-align:center;">
                    <form action="{{route('comment.show')}}"><input type="submit" class="btn btn-primary btn-sm" value="Ver Comentarios" />
                    </form>
                  </div>
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
