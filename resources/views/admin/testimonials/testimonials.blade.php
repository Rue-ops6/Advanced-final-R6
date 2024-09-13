@extends('layouts.admin')
@section('content')

@push('pageTitle')
Testimonials
@endpush
@push('newElement')
href="{{route('add_testimonial')}}"
@endpush
@include('admin.includes.pageTitle')

{{-- Sections --}}
@include('admin.testimonials.sections.test')
@endsection
