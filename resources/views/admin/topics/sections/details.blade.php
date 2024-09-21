<div class="row justify-content-between mb-2 pb-2">
    <h2 class="fw-bold fs-2 col-auto">Topic Details</h2>
    <a href="{{ route('topics.add') }}" class="btn btn-link  link-dark fw-semibold col-auto me-3">➕Add More
        Topics</a>
</div>

<div class="p-5">
    <div class="container-fluid g-0 pt-3 pb-5 px-lg-5 px-md-3 px-1">
        <div class="img-wrapper">
            <img src="{{ asset('assets/admin/images/topics/colleagues-working-cozy-office-medium-shot.png') }}"
                class="rounded image-center border-5 rounded-4" alt="DEI-header-img" />
        </div>
        <!-- article -->
        <div class="mx-auto pt-4" style="max-width: 1225px">
            <article class="mx-md-4 ">
                <h2 class="fs-1 py-4">{{ $details['topicTitle'] }}</h2>
                <p>
                    {{ $details['content'] }}
                </p>
                <div class="text-md-end">
                    <a class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5"
                        href="{{ route('topics.list') }}">
                        Back to All topics
                    </a>
                </div>
            </article>
        </div>
    </div>
</div>
</div>
