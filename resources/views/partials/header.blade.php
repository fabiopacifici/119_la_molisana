<header class="text-center">

    <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="">
    <nav class="nav justify-content-center">
        <a class="nav-link {{Route::currentRouteName() === 'home' ? 'nav-active' :''}}" href="{{route('home')}}" aria-current="page">Home</a>
        <a class="nav-link {{Route::currentRouteName() === 'products' ? 'nav-active' :''}}" href="{{route('products')}}">Products</a>
        <a class="nav-link {{Route::currentRouteName() === 'blog' ? 'nav-active' :''}}" href="{{route('blog')}}">Blog</a>
    </nav>

</header>
