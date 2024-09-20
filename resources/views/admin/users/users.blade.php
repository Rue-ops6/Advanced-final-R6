@extends('layouts.admin')
@section('content')
    @push('pageTitle')
        Users
    @endpush
    @push('newElement')
        href="{{ route('users.add') }}"
    @endpush
    @include('admin.includes.pageTitle')

    {{-- Sections --}}
    @include('admin.users.sections.user')
@endsection
