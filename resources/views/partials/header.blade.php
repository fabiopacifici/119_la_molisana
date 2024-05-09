<header class="text-center">

    <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="">
    <nav class="nav justify-content-center">
        <a class="nav-link {{Route::currentRouteName() === 'guests.home' ? 'nav-active' :''}}" href="{{route('guests.home')}}" aria-current="page">Home</a>
        <a class="nav-link {{Route::currentRouteName() === 'guests.products.index' ? 'nav-active' :''}}" href="{{route('guests.products.index')}}">Products</a>
        <a class="nav-link {{Route::currentRouteName() === 'guests.posts.index' ? 'nav-active' :''}}" href="{{route('guests.posts.index')}}">Blog</a>
    </nav>

</header>
