@extends('layouts.main')

@section('content')
    @include('public.includes.indexNAV')
    @include('public.includes.header')
    @include('public.includes.searchbar')

    {{-- Sections --}}
    @include('public.includes.sections.trendings')
    @include('public.includes.sections.topicsCategory')
    @include('public.includes.sections.about')
    @include('public.includes.sections.FAQs')
    @include('public.includes.sections.testimonials')
    @include('public.includes.sections.contact')
@endsection
