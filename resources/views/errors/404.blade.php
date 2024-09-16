@extends('errors::minimal')
@extends('layouts.main')
@section('content')
    @include('public.includes.header')
    @include('public.includes.indexNAV')

    {{-- Sections --}}
    @include('errors.sections.404')
@endsection
