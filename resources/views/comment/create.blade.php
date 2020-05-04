@extends('layouts.app')
@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.messagecomment')
            <div class="card">
                <div class="card-header">
                    Agregar comentario
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('comment.save')}}">
                        @csrf
                        
                        <div class="row  mt-2">
                            <input type="text" placeholder="producto" name="product_id" required value="{{ old('product_id') }}" class="form-control input-lg" ></input>
                        </div>
                        <br><br />
                            <textarea rows="10" , cols="70" style="text-align:center;" type="text" placeholder="Ingrese comentario" name="text" value="{{old('text')}} "></textarea>
                        <input type="submit" value="Comentar" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
