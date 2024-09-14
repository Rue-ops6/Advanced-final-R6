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
                    <a class="nav-link click-scroll" href="{{ route('index') }}#section_1">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="{{ route('index') }}#section_2">Browse Topics</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="{{ route('index') }}#section_3">How it works</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="{{ route('index') }}#section_4">FAQs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="{{ route('index') }}#section_5">Testimonials</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="{{ route('index') }}#section_6">Contact</a>
                </li>
                <li class="border"></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('contactus') }}">Contact Us</a></li>
                        <li><a class="dropdown-item" href="{{ route('allTestimonials') }}">Our Client Says</a></li>
                        <li><a class="dropdown-item" href="{{ route('listings') }}">Topics Listing</a></li>
                        <li><a class="dropdown-item" href="{{ route('details') }}">Topics details</a></li>
                    </ul>
                </li>
            </ul>

            <div class="d-none d-lg-block">
                <a href="{{ route('edit_topic') }}" class="navbar-icon bi-person smoothscroll"></a>
            </div>
        </div>
    </div>
</nav>
