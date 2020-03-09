@extends('layouts.master')
@section("title", $data["title"])
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      @include('util.message')
      <div class="card">
        <div class="card-header">
         Agregar comentario
        </div>
        <div class="card-body">
          <form method="POST" action="{{route('comment.save')}}">
            @csrf
            <input type="text" placeholder="Ingrese usuario" name="username" value="{{old('usarname')}}" />
            <br><br/>
            <textarea  rows="10", cols="70" style="text-align:center;" type="text" placeholder="Ingrese comentario"  name="comment"  value="{{old('comment')}} "></textarea>
            <input type="submit" value="Comentar" />
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
