<nav class="navbar navbar-expand-lg navbar-dark bg-light">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <img src="{{ asset('logo.PNG') }}" alt="SportEase Logo" height="50px;">
        </a>
        <!-- Toggler for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Home Link -->
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/">Home</a>
                </li>
                <!-- Search Link -->
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Search</a>
                </li>

                <!-- Bookings Link -->
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">My Bookings</a>
                </li>
            </ul>
            <!-- Search Bar -->
            <form class="d-flex ms-3" action="#" method="GET">
                <input class="form-control me-2" type="search" placeholder="Search for facilities" name="searchQuery" aria-label="Search">
                <button class="btn btn-outline-light text-dark" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
