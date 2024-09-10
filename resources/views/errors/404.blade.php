@extends('errors::minimal')
@extends('layouts.main')
@section('content')
@include('includes.header')
@include('includes.indexNAV')

{{-- Sections --}}
@include('includes.sections.404')
@endsection
