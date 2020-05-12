@extends('layouts.app')

@section('content')
<div class="container ">
    @foreach($data["res"] as $item)
    <div class="card" style="width: 50rem;">
        <h5>Tipo: {{$item->type}} </h5>
        <h5>Raza: {{$item->breed}} </h5>
        <h5>Fecha de nacimiento: {{$item->birthDate}} </h5>
        @if ($item->vaccinated == 1)
            <h5> Vacunado: Si </h5>
        @else
            <h5> Vacunado: No </h5>
        @endif
        @if ($item->adopted == 1)
            <h5> Adoptado: Si </h5>
        @else
            <h5> Adoptado: No </h5>
        @endif
    </div>
    <br>
    @endforeach

    <div class = "row">
        <div class = "col">
            <a href = "http://ec2-52-91-77-71.compute-1.amazonaws.com/login"> Si quieres saber mas visita su pagina </a>
        </div>
    </div>
</div>
@endsection
