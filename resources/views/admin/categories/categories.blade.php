@extends('layouts.admin')
@section('content')

@push('pageTitle')
Categories
@endpush
@push('newElement')
href="{{route('add_category')}}"
@endpush
@include('admin.includes.pageTitle')

{{-- Sections --}}
@include('admin.categories.sections.cat')
@endsection

