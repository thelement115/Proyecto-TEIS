@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($data["users"] as $user)
        <div class = "row border-bottom border-dark text-primary font-weight-bold">
            <div class = "col-md-auto">
                {{$user->getName()}}
            </div>
            <div class = "col-md-auto ">
                {{$user->getEmail()}}
            </div>
            <div class = "col d-flex flex-row-reverse">
                <a>@lang('messages.ban')</a>
            </div>
        </div>
    @endforeach
</div>
@endsection
