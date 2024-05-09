@extends('layouts.app')


@section('content')

<div class="container py-4">
    <div class="row row-cols-1 row-cols-sm-2 g-3">
        <div class="col">
            <img src="{{$post['cover_image']}}" alt="image of {{$post['title']}}">
        </div>
        <div class="col">
            <div class="card border-0">
                <div class="card-body">
                    <h2 class="card-title">
                        {{$post['title']}}
                    </h2>
                    <p class="card-text">
                        {!! $post['body'] !!}

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
