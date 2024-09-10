@extends('layouts.main')

@section('content')
@include('includes.indexNAV')
@include('includes.header')
@include('includes.searchbar')

{{-- Sections --}}
@include('includes.sections.trendings')
@include('includes.sections.topicsCategory')
@include('includes.sections.about')
@include('includes.sections.FAQs')
@include('includes.sections.testimonials')
@include('includes.sections.contact')

@endsection
