@extends('layouts.main')

@section('content')
    @include('public.includes.header')

    <body class="topics-listing-page" id="top">
        @include('public.includes.sideNAV')

        {{-- Sections --}}
        @include('public.includes.sections.details')
        @include('Mail.topics-details.NewsQuoting')
    @endsection
