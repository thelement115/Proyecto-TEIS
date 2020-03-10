@extends('layouts.app')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
      @foreach($data["comments"] as $indexKey => $comment)
        <div class="col-md-8" style="padding-top=5px;">
            <div class="card">
                <div class="card-header">{{$comment->getUsername() }}</div>
                <div class="card-body">
                @if($indexKey<2)
                <a href="{{route('comment/comment/'.$comment->getId())}}"> Ver más del usuario <b>{{ $comment->getId() }}</b></a>
                @else
                <a href="{{route('comment/comment/'.$comment->getId())}}"> Ver más del usuario {{ $comment->getId() }}</a>
                @endif
                </div>
            </div>
        </div>

    @endforeach
    </div>
</div>
@endsection
