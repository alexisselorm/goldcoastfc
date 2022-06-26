<!-- Mini nav bar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light bgcolor">
        <div class="container-fluid">
            <a class="navbar-brand topname" href="/">GOLDCOAST FC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav navbar-nav ms-auto mt-2 mt-lg-0">
                    <li id="nav-item">
                        {{-- <form class="d-flex" method="GET" action="#">
              <input class="form-control search" type="search" name="search"placeholder="Search" aria-label="Search">
              <button class="btn inside" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg></button>
            </form> --}}
                        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                            <form method="GET" action="#">
                                <input type="text" name="search" placeholder="Search here"
                                    class="bg-transparent placeholder-grey font-semibold text-sm">
                            </form>
                        </div>
                    </li>
                    <li class="nav-item signin ms-2 ">
                        <button type="button" class="btn inside" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Sign In
                        </button>
                    </li>
                    <li class="nav-item singout ms-2">
                        @auth
                            {{-- When the user is logged --}}
                            <span class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}</span>
                            <form method="POST" action="/logout" class="text-xs font-semibold text-blue-500 ml-6">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        @else
                            {{-- When the user is logged out. ie. The guest session --}}
                            <a href="/login" class="text-xs font-bold uppercase">Login</a>
                            <a href="/register" class="ml-6 text-xs font-bold uppercase">Register</a>
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </nav>
