<section class="section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center">
                <h3 class="mb-4">Popular Topics</h3>
            </div>

            <div class="col-lg-8 col-12 mt-3 mx-auto">
                @foreach ($topics as $topic)
                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                        <div class="d-flex">
                            <img src="{{ asset('assets/admin/images/topics/' . $topic->image) }}"
                                class="custom-block-image img-fluid" alt="">

                            <div class="custom-block-topics-listing-info d-flex">
                                <div>
                                    <h5 class="mb-2">{{ $topic->topicTitle }}</h5>

                                    <p class="mb-0">{{ Str::limit($topic['content'], 44, $end = ' ...') }}</p>

                                    <a href="{{ route('details', $topic->id) }}"
                                        class="btn custom-btn mt-3 mt-lg-4">Learn More</a>
                                </div>

                                <span class="badge bg-music rounded-pill ms-auto">{{ $topic['views'] }}</span>
                                {{-- yellow --}}
                                {{-- <span class="badge bg-advertising rounded-pill ms-auto">{{ $topic->views }}</span> --}} {{-- red --}}
                                {{-- <span class="badge bg-design rounded-pill ms-auto">{{ $details['views'] }}</span> --}} {{-- blue --}}
                                {{-- <span class="badge bg-finance rounded-pill ms-auto">{{ $trend['views'] }}</span> --}} {{-- dark-blue --}}

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- This will display the pagination controls, for page numbering --}}
            <div class="col-lg-12 col-12">
                {{ $topics->links() }}
                {{-- <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mb-0">
                        @if ($topic->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link" aria-hidden="true">Prev</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $topic->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true">Prev</span>
                                </a>
                            </li>
                        @endif

                        @for ($i = 1; $i <= $topic->lastPage(); $i++)
                            <li class="page-item active {{ $topic->currentPage() == $i ? 'active' : '' }}"
                                aria-current="page">
                                <a class="page-link" href="{{ $topic->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor

                        @if ($topic->hasMorePages())
                            <li class="page-item">
                                <a class="page-link " href="{{ $trendings->nextPageUrl() }}" aria-label="Next">
                                    <span aria-hidden="true">Next</span>
                                </a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <span class="page-link" aria-hidden="true">Next</span>
                            </li>
                        @endif
                    </ul>
                </nav> --}}

            </div>
        </div>
    </div>
</section>
