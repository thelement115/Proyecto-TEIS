@extends('layouts.app')

@section('content')

<div class="container">
    <div class = "row">
        <div class = "col d-flex justify-content-center">
            <h1 class="font-weight-bold">@lang('messages.success')</h1>
        </div>
        <br><br>
    </div>
    <div class = "row">
        <div class = "col d-flex justify-content-center">
            <a href= {{route('home')}}>Volver al inicio</a>
        </div>
    </div>
</div>
@endsection
