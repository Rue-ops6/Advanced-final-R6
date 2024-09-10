@extends('layouts.main')

@section('content')
@include('includes.header')
    <body class="topics-listing-page" id="top">
@include('includes.sideNAV')

@push('pageTitle')
Topics Listing
@endpush
@include('includes.pageTitle')


{{-- Sections --}}
@include('includes.sections.details')
@include('includes.sections.Newsletter')
@endsection
