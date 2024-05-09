@extends('layouts.app')


@section('content')

<div class="container py-4">
    <div class="row row-cols-1 row-cols-sm-2 g-3">
        <div class="col">
            <img src="{{$product['src']}}" alt="image of {{$product['titolo']}}">
        </div>
        <div class="col">
            <div class="card border-0">
                <div class="card-body">
                    <h2 class="card-title">
                        {{$product['titolo']}}
                    </h2>
                    <p class="card-text">
                        {!! $product['descrizione'] !!}

                    </p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <span><strong>type: </strong>{{$product['tipo']}}</span>
                    <span><strong>cooking time: </strong>{{$product['cottura']}}</span>
                    <span><strong>weight: </strong>{{$product['peso']}}</span>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
