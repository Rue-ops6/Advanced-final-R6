<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">
            <i class="bi-back"></i>
            <span>Topic</span>
        </a>

        <div class="d-lg-none ms-auto me-4">
            <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-5 me-lg-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}"
                        href="{{ route('index') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contactus') ? 'active' : '' }}"
                        href="{{ route('contactus') }}">Contact Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('allTestimonials') ? 'active' : '' }}"
                        href="{{ route('allTestimonials') }}">Our Client Says</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('listings') ? 'active' : '' }}"
                        href="{{ route('listings') }}">Topics' Listing</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('details') ? 'active' : '' }}"
                        href="{{ route('details') }}">Topics' Details</a>
                </li>
            </ul>

            <div class="d-none d-lg-block">
                <a href="{{ route('register') }}" class="navbar-icon bi-person smoothscroll"></a>
            </div>
        </div>
    </div>
</nav>
