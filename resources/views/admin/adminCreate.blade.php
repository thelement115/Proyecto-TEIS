@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row ">
        <div class="col d-flex justify-content-center">
            <a class="text-primary" href="{{ route('admin')}}">@lang('pagination.return')</a>
        </div>
    </div>
    {{$data['message'] ?? ''}}
    <div class="row ">
        <div class="col d-flex justify-content-center">
            <form method="POST" action="{{route('admin.save')}}">
                @csrf
                <div class="row  mt-2">
                    <input type="text" placeholder="Nombre" name="name" required value="{{ old('name') }}" class="form-control input-lg" ></input>
                </div>
                <div class="row  mt-2">
                    <input type="text" placeholder="Email" name="email" required value="{{ old('email') }}" class="form-control input-lg"></input>
                </div>
                <div class="row  mt-2">
                    <input type="password" placeholder="Password" name="password" required value="{{ old('password') }}" class="form-control input-lg"></input>
                </div>
                <div class="row  mt-2 d-flex justify-content-center">
                    <input type="submit" value="Crear" class ="btn btn-primary"/>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
