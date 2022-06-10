<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">

                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link{{ url()->current() == route('home') ? ' active' : null }}" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link{{ url()->current() == route('users.index') ? ' active' : null }}" href="{{ route('users.index') }}">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ url()->current() == route('coa.index') ? ' active' : null }}" href="{{ route('coa.index') }}">Maklumat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                    @endauth
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>
</header>
