@extends('layouts.main')

@section('content')
    @include('public.includes.header')

    <body class="topics-listing-page" id="top">
        @include('public.includes.sideNAV')

        @push('pageTitle')
            Topics' Listings
        @endpush
        @include('public.includes.pageTitle')


        {{-- Sections --}}
        @include('public.sections.listings')
        {{-- <section class="section-padding section-bg">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <h3 class="mb-4">Trending Topics</h3>
                    </div>
        @include('public.includes.sections.trendings') --}}
        @include('public.sections.topTopics')

        </div>
        </div>
        </section>
    @endsection
