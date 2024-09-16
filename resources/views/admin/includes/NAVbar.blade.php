<nav class="navbar navbar-expand-md bg-white border-bottom">
    <div class="container justify-content-md-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('users') ? 'active' : '' }}" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        USERS
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('users') }}">All users</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="{{ route('add_user') }}">Add user</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('topics') ? 'active' : '' }}"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        TOPICS
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('topics') }}">All topics</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="{{ route('add_topic') }}">Add topic</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('categories') ? 'active' : '' }}"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        CATEGORIES
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('categories') }}">All categories</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="{{ route('add_category') }}">Add category</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('testimonials') ? 'active' : '' }}"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        TESTIMONIALS
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('testimonials') }}">All testimonials</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="{{ route('add_testimonial') }}">Add testimonial</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a class="nav-item nav-link {{ request()->routeIs('messages') ? 'active' : '' }}"
                        href="{{ route('messages') }}">
                        MESSAGES
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
