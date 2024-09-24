<section class="featured-section">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($trendings as $trends)
                <div class="col-lg-6 col-12">
                    <div class="custom-block custom-block-overlay">
                        <div class="d-flex flex-column h-100">
                            <img src="{{ asset('assets/admin/images/topics/' . $trends->image) }}"
                                class="custom-block-image img-fluid" alt="">

                            <div class="custom-block-overlay-text d-flex">
                                <div>
                                    <h5 class="text-white mb-2">{{ $trends['topicTitle'] }}</h5>

                                    <p class="text-white">{{ Str::limit($trends['content'], 44, $end = ' ...') }}</p>

                                    <a href="{{ route('details', $trends['id']) }}"
                                        class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                </div>

                                <span class="badge bg-finance rounded-pill ms-auto">{{ $trends['views'] }}</span>
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

                                <form action="{{ route('trendings', $trends['id']) }}" method="POST">
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
