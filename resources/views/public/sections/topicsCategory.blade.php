<section class="explore-section section-padding" id="section_2">
    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2 class="mb-4">Browse Topics</h1>
            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @foreach ($categories as $cat)
                    <li class="nav-item" role="presentation">
                        {{-- data-bs-target="#design-tab-pane"= button/href is a cat id for each topic: data-bs-target="#tab-{{$cat->id}}"  or data-bs-target="#{{$cat->catName}}" any unique link!!!!
                        and being called in a topic id like this id="design-tab-pane" with no # --}}
                        <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="design-tab" data-bs-toggle="tab"
                            data-bs-target="#tab-{{ $cat->id }}" type="button" role="tab"
                            aria-controls="design-tab-pane" aria-selected="true">{{ $cat->catName }}</button>
                        {{-- We also active what we are standing on through @if ($loop->first) active @endif" --}}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="myTabContent">
                    @foreach ($categories as $cat)
                        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="tab-{{ $cat->id }}"
                            role="tabpanel" aria-labelledby="tab-{{ $cat->id }}" tabindex="0">
                            {{--  We now set the top topics related to each cat using the cat's "AS" foreach as it is a part of the same endforeach
                            , as they are in a relation = they can call each other's data --}}
                            <div class="row">
                                {{-- in reverse $cat calling thru relation "topics in its model" the topic table --}}
                                @foreach ($cat->topics as $topic)
                                    {{-- Dynamic Column Widths layout depending on number of topics on how many topics included --}}
                                    @if ($cat->topics->count() == 1)
                                        <!-- Full width if 1 topic -->
                                        <div class="col-12 mb-4">
                                        @elseif ($cat->topics->count() == 2)
                                            <!-- Half width if 2 topics -->
                                            <div class="col-lg-6 col-12 mb-4">
                                            @else
                                                <!-- One-third width if 3 or more topics -->
                                                <div class="col-lg-4 col-md-6 col-12 mb-4">
                                    @endif
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="{{ route('details', $topic['id']) }}">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2">{{ $topic->topicTitle }}</h5>

                                                    <p class="mb-0">
                                                        {{ Str::limit($topic['content'], 44, ' ...') }}
                                                    </p>
                                                </div>

                                                <span
                                                    class="badge bg-advertising rounded-pill ms-auto">{{ $topic->views }}</span>
                                            </div>

                                            <img src="{{ asset('assets/admin/images/topics/' . $topic->image) }}"
                                                class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                            </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>
    </div>
</section>
