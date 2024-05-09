@extends('layouts.app')

@section('content')


<section class="py-5">
    <div class="container">
        <h2>Blog page</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @forelse ($posts as $index => $post )
            <div class="col">
                <a href="{{route('guests.posts.show', ['id'=> $index])}}">
                    <div class="card">
                        <img class="card-img-top" src="{{$post['cover_image']}}" alt="">
                        <div class="card-body">
                            {{$post['title']}}
                        </div>
                    </div>
                </a>
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
