@extends('layouts.app')

@section('content')


@foreach ($products as $key => $productsType )
<section class="py-4">
    <div class="container">
        <h2>
            {{$key}}
        </h2>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($productsType as $product )
            <div class="col">
                <div class="card border-0">
                    <img class="card-img-top" src="{{$product['src']}}" alt="image describing the following product {{$product['titolo']}}">
                    <div class="card-body">
                        {{$product['titolo']}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endforeach


@endsection
