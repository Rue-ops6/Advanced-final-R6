<header class="site-header d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-lg-5 col-12 mb-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Homepage</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Topics' Details</li>
                    </ol>
                </nav>


                <h2 class="text-white">{{ $details['topicTitle'] }}</h2>
                <div class="d-flex align-items-center mt-5">
                    <a href="#topics-detail" class="btn custom-btn custom-border-btn smoothscroll me-4">Read
                        More</a>

                    <form action="{{ route('trendings', $details['id']) }}" method="POST">
                        @csrf
                        <button type="submit" class="custom-icon bi-bookmark smoothscroll"></button>
                        <span class="badge bg-design rounded-pill ms-auto">{{ $details['views'] }}</span>

                    </form>
                </div>
            </div>

            <div class="col-lg-5 col-12">
                <div class="topics-detail-block bg-white shadow-lg">
                    <img src="{{ asset('assets/admin/images/topics/' . $details['image']) }}"
                        class="topics-detail-block-image img-fluid">
                </div>
            </div>

        </div>
    </div>
</header>

<section class="topics-detail-section section-padding" id="topics-detail">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 m-auto">
                <h3 class="mb-4">{{ $details['topicTitle'] }}</h3>

                <p>{{ $details['content'] }}</p>
            </div>

        </div>
    </div>
</section>
