@extends('layouts.main')

@section('content')
@include('public.includes.header')
    <body class="topics-listing-page" id="top">
@include('public.includes.sideNAV')

@push('pageTitle')
Topics' Details
@endpush
@include('public.includes.pageTitle')


{{-- Sections --}}
@include('public.includes.sections.details')
@include('public.includes.sections.Newsletter')
@endsection
