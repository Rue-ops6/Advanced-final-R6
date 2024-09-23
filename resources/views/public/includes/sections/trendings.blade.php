<section class="featured-section">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($trendings as $trend)
                <div class="col-lg-6 col-12">
                    <div class="custom-block custom-block-overlay">
                        <div class="d-flex flex-column h-100">
                            <img src="{{ asset('assets/admin/images/topics/' . $trend->image) }}"
                                class="custom-block-image img-fluid" alt="">

                            <div class="custom-block-overlay-text d-flex">
                                <div>
                                    <h5 class="text-white mb-2">{{ $trend['topicTitle'] }}</h5>

                                    <p class="text-white">{{ Str::limit($trend['content'], 44, $end = ' ...') }}</p>

                                    <a href="{{ route('details', $trend['id']) }}"
                                        class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                </div>

                                <span class="badge bg-finance rounded-pill ms-auto">{{ $trend['views'] }}</span>
                            </div>

                            <div class="social-share d-flex">
                                <p class="text-white me-4">Share:</p>

                                <ul class="social-icon">
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-twitter"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-facebook"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-pinterest"></a>
                                    </li>
                                </ul>

                                <form action="{{ route('trendings', $trend['id']) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="custom-icon bi-bookmark ms-auto"></button>
                                </form>
                            </div>

                            <div class="section-overlay"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
