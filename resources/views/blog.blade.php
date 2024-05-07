@extends('layouts.app')

@section('content')


<section class="py-5">
    <div class="container">
        <h2>Blog page</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @forelse ($posts as $post )
            <div class="col">
                <div class="card">
                    <img class="card-img-top" src="{{$post['cover_image']}}" alt="">
                    <div class="card-body">
                        {{$post['title']}}
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p>Nothing to show here, sorry 😢</p>
            </div>

            @endforelse
        </div>
    </div>
</section>


@endsection
