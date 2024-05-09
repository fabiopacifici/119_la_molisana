@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @forelse ($products as $index => $product)
        <div class="col">

            <a href="{{route('guests.products.index', ['id'=> $index])}}">

                <div class="card border-0">

                    <img class="card-img-top" src="{{$product['src']}}" alt="image describing the following product {{$product['titolo']}}">
                    <div class="card-body">
                        {{$product['titolo']}}
                    </div>
                </div>
            </a>
        </div>
        @empty
        <div class="col">
            <p>No products here to show</p>
        </div>
        @endforelse
    </div>
</div>



@endsection
