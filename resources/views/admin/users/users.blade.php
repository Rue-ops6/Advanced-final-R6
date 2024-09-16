@extends('layouts.admin')
@section('content')
    @push('pageTitle')
        Users
    @endpush
    @push('newElement')
        href="{{ route('add_user') }}"
    @endpush
    @include('admin.includes.pageTitle')

    {{-- Sections --}}
    @include('admin.users.sections.user')
@endsection
