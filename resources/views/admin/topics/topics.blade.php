@extends('layouts.admin')
@section('content')
    @push('pageTitle')
        Topics
    @endpush
    @push('newElement')
        href="{{ route('topics.add') }}"
    @endpush
    @include('admin.includes.pageTitle')

    {{-- Sections --}}
    @include('admin.topics.sections.topic')
@endsection
