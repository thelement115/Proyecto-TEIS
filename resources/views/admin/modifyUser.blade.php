@extends('layouts.app')

@section('content')
<div class="row ">
    <div class="col d-flex justify-content-center">
        <a class="text-primary" href="{{ route('admin')}}">@lang('pagination.return')</a>
    </div>
</div>
<div class="container">
    @include('util.message')
    @foreach($data["users"] as $user)
    @if($user->getBanned())
    <div class="row">
        <div class="col">

        </div>
    </div>
    @else
    <div class="row border-bottom border-dark text-primary font-weight-bold">
        <div class="col-md-auto">
            {{$user->getName()}}
        </div>
        <div class="col-md-auto ">
            {{$user->getEmail()}}
        </div>
        <div class="col d-flex flex-row-reverse">
            <form method="POST" action="{{route('admin.ban',['id' => $user->getId()])}}">
                @csrf @method('PATCH')
                <input type="submit" class="" value="banear" />
            </form>
        </div>
    </div>
    @endif
    @endforeach
</div>
@endsection
