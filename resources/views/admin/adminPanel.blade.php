@extends('layouts.app')

@section('content')
<div class="container">
    <div class = "row">
        <div class = "col">
            <h1>@lang('messages.adminHeader')</h1>
        </div>
    </div>
    <div class = "row border-bottom border-dark mt-2 mb-2 text-primary font-weight-bold">
        <div class = "col mb-2">
            <a href="{{ route('admin.create')}}">@lang('messages.createAdmin')</a>
        </div>
    </div>
    <div class = "row border-bottom border-dark mt-2 mb-2 text-primary font-weight-bold">
        <div class = "col-4 mb-2">
            <a>@lang('messages.goUsers')</a>
        </div>
        <div class = "col-5">
        </div>
        <div class = "col-md-auto">
            <a>@lang('messages.add')</a>
        </div>
        <div class = "col-md-auto">
            <a>@lang('messages.change')</a>
        </div>
    </div>
    <div class = "row border-bottom border-dark mt-2 mb-2 text-primary font-weight-bold">
        <div class = "col-4 mb-2">
            <a>@lang('messages.goProducts')</a>
        </div>
        <div class = "col-5">
        </div>
        <div class = "col-md-auto">
            <a>@lang('messages.add')</a>
        </div>
        <div class = "col-md-auto">
            <a>@lang('messages.change')</a>
        </div>
    </div>
</div>
@endsection
