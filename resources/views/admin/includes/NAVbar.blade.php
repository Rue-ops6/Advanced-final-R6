<nav class="navbar navbar-expand-md bg-white border-bottom">
    <div class="container justify-content-md-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('users.list') || request()->routeIs('users.add') || request()->routeIs('users.edit') || request()->routeIs('users.list') ? 'active' : '' }}"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        USERS
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('users.list') }}">All users</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="{{ route('users.add') }}">Add user</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('topics.list') || request()->routeIs('topics.details') || request()->routeIs('topics.add') || request()->routeIs('topics.edit') || request()->routeIs('topics.list') ? 'active' : '' }}"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        TOPICS
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('topics.list') }}">All topics</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="{{ route('topics.add') }}">Add topic</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('categories.list') || request()->routeIs('categories.add') || request()->routeIs('categories.edit') || request()->routeIs('categories.list') ? 'active' : '' }}"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        CATEGORIES
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('categories.list') }}">All categories</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="{{ route('categories.add') }}">Add category</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('testimonials.list') || request()->routeIs('testimonials.add') || request()->routeIs('testimonials.edit') || request()->routeIs('testimonials.list') ? 'active' : '' }}"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        TESTIMONIALS
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('testimonials.list') }}">All testimonials</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="{{ route('testimonials.add') }}">Add testimonial</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a class="nav-item nav-link {{ request()->routeIs('messages.list') || request()->routeIs('messages.details') || request()->routeIs('messages.list') ? 'active' : '' }}"
                        href="{{ route('messages.list') }}">
                        MESSAGES
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
