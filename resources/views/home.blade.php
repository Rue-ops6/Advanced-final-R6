@extends('layouts.app')
@include('auth.includes.header')

<body class="registeration-wrapper"
    style="background-image: linear-gradient(rgba(255, 255, 255, 0.735), rgba(0, 0, 0, 0.5))">
    <div class="container my-5 bg-white rounded-3">
        <div class="row">

            @section('content')
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ __('Dashboard') }}</div>

                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    {{ __('You are logged in!') }}
                                    <a href="{{ route('topics') }}"
                                        class="fw-semibold fs-6 text-decoration-none text-primary">{{ __('Take me to the articles platform..') }}
                                    </a>
                                    <style>
                                        .custom-link:hover {
                                            text-decoration: underline;
                                            /* Adds an underline on hover */
                                            color: darkblue;
                                            /* Changes the link color on hover */
                                        }
                                    </style>
                                    <img href="{{ route('topics') }}"
                                        src= "{{ asset('assets/admin/images/arrow-sm-right-svgrepo-com.svg') }}"
                                        alt="">

                                    </a>
                                    <img src="{{ asset('assets/admin/images/rear-view-young-college-student.jpg') }}"
                                        alt="" class="img-fluid" style="max-width: 450px; max-height: 450px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
