@extends('layouts/layout')


@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth
        </div>
    @endif

    <div class="content">
        <img src="/img/pizza.jpg" alt="pizza house logo" height="300px">
        <div class="title m-b-md">
            The North's Best Pizzas
        </div>
        <p class="message">{{ session('mssg' )}}</p>
        <a href="/pizzas/create">Order a pizza</a>
    </div>
</div>
@endsection
