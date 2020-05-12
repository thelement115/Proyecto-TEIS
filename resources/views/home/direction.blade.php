@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card" style="width: 50rem;">
        <div class="row p-4">
            <div class="col-lg">
                <h5> @lang("messages.deparment") {{ $data["user"]->getDepartment() }}</h5>
                <h5> @lang('messages.city') {{$data["user"]->getCity()}}</h5>
                <h5> @lang('messages.direction') {{$data["user"]->getAddress()}}</h5>
                <h2>Cambiar Dirección</h2>
                <form method = "POST" action= "{{ route('direction.change') }}">
                    @csrf
                    @lang("messages.deparment")<select id="deparment" name="deparment">
                    @foreach ($data["deparments"] as $item)
                        <option value={{$item}}>{{$item}}</option>
                    @endforeach
                    </select><br><br>
                    @lang("messages.city")<input type="text" name="city" id = "city" list="cityname">
                    <datalist id="cityname">
                        @foreach ($data["cities"] as $item)
                            <option value={{$item}}>{{$item}}</option>
                        @endforeach
                    </datalist><br><br>
                    @lang('messages.direction')<input type = "text" id = "address" name = "address"><br><br>
                    <button class="btn btn-primary">@lang('messages.change')</button>
                    <br><br>
                </form>
            </div>
        </div>
    </div>
    <br>
</div>
@endsection
