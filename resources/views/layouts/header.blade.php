<div class="container-fluid bg-light-sky-blue px-0">
    <div class="row gx-0">
        <div class="col-lg-3 bg-light-sky-blue d-none d-lg-block">
            <a href="{{ route('home') }}"
               class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <h1 class="m-0 text-white text-uppercase">Star Hotel</h1>
            </a>
        </div>
        <div class="col-lg-9">
            <div class="row gx-0 bg-white d-none d-lg-flex">
                <div class="col-lg-7 px-5 text-start">
                    <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                        <i class="fa fa-envelope text-dark me-2"></i>
                        <p class="mb-0 text-dark">info@example.com</p>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center py-2">
                        <i class="fa fa-phone-alt text-dark me-2"></i>
                        <p class="mb-0 text-dark">+1514 345 6789</p>
                    </div>
                </div>
                <div class="col-lg-5 px-5 text-end">
                    <div class="d-inline-flex align-items-center py-2">
                        <a class="me-3" href=""><i class="fab fa-facebook-f text-dark"></i></a>
                        <a class="me-3" href=""><i class="fab fa-twitter text-dark"></i></a>
                        <a class="me-3" href=""><i class="fab fa-linkedin-in text-dark"></i></a>
                        <a class="me-3" href=""><i class="fab fa-instagram text-dark"></i></a>
                        <a class="" href=""><i class="fab fa-youtube text-dark"></i></a>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg bg-light-sky-blue navbar-dark p-3 p-lg-0">
                <a href="{{ route('home') }}" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 text-primary text-uppercase">Star Hotel</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                           href="{{ route('home') }}">Home</a>
                        <a class="nav-item nav-link {{ request()->routeIs('rooms.index') ? 'active' : '' }}"
                           href="{{ route('rooms.index') }}">Rooms</a>
                        @guest()
                            <a class="nav-item nav-link {{ request()->routeIs('login') ? 'active' : '' }}"
                               href="{{ route('login') }}">Login</a>
                            <a class="nav-item nav-link {{ request()->routeIs('register') ? 'active' : '' }}"
                               href="{{ route('register') }}">Register</a>
                        @else
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                    {{ Auth::user()->name }}</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="{{ route('orders.index') }}" class="dropdown-item">My Bookings</a>
                                    <a href="{{ route('profile') }}" class="dropdown-item">My Profile</a>
                                    <form method="post" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="btn btn-link dropdown-item">Logout</button>
                                    </form>
                                </div>
                            </div>
                            @if(Auth::user()->is_admin)
                                <a href="{{ route('admin.index') }}" class="nav-item nav-link">Admin Page</a>
                            @endif
                        @endguest
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<!-- Tambahkan CSS untuk memastikan warna tetap aktif -->
<style>
    /* Warna dasar Light Sky Blue */
    .bg-light-sky-blue {
        background-color: #87CEFA !important;
    }

    /* Gaya default untuk navbar link */
    .navbar-nav .nav-link {
        color: white !important; /* Warna dasar putih */
        transition: color 0.3s ease; /* Animasi perubahan warna */
    }

    /* Ubah warna saat hover */
    .navbar-nav .nav-link:hover {
        color: #483D8B !important; /* Dark Slate Blue */
    }

    /* Ubah warna untuk link yang aktif */
    .navbar-nav .nav-link.active {
        color: #483D8B !important; /* Dark Slate Blue */
        font-weight: bold; /* Tambahkan gaya bold untuk membedakan */
    }
</style>
