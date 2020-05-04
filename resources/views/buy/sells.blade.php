@extends('layouts.app')

@section('content')

<div class="container">
    @foreach($data["items"] as $item)
        <div class="card" style="width: 50rem;">
            <div class="row p-4">
                <div class="col-lg">
                    <h5> @lang("Product") {{ $item->product()->get()[0]->getName() }}</h5>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
