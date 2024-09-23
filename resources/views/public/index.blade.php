@extends('layouts.main')

@section('content')
    @include('public.includes.indexNAV')
    @include('public.includes.header')
    @include('public.includes.searchbar')

    {{-- Sections --}}
    @include('public.sections.trendings')
    @include('public.sections.topicsCategory')
    @include('public.sections.about')
    @include('public.sections.FAQs')
    @include('public.sections.testimonials')
    @include('public.sections.contact')
@endsection
