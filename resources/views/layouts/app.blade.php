<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VeggieStore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">VeggieStore</a>
            {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> --}}
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @endguest

                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('cart.index') }}">Cart</a> --}}
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('orders.index') }}">Orders</a>
                        </li> --}}
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="nav-link btn btn-link" style="border: none; background: none;">
                                    Logout
                                </button>
                            </form>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.profile') }}">Profile</a>
                        </li> --}}
                      
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('cart.index') }}">My Cart</a> --}}
                        </li>
                          {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('cart.checkout') }}">checkOut</a>
                        </li>  --}}
                         <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                        </li> 
                    @endauth

                    @auth('admin')
                        <!-- Admin Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.products.index') }}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.categories.index') }}">Categories</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="nav-link btn btn-link" style="border: none; background: none;">
                                    Logout
                                </button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    
    {{-- @include('layouts.navbar') --}}

    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
