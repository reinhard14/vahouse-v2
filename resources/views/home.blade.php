@extends('layouts.va.va-layout')

@section('content')

<div class="container">
    <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-12 mb-5 pb-5">
            <div class="row my-4">
                <div class="col">
                    <h3>Dashboard</h3>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    @include('includes.messages')

                    <div class="row">
                        <div class="col-md-4 border-right">
                            <p class="">
                                Completing your profile will allow us to better understand your qualifications and ensure a smooth evaluation
                                of your application. This is an essential step before we can consider you for any opportunities.
                            </p>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <a class="nav-link" href="#" role="button">
                                        <i class="bi bi-check-circle-fill"></i> <span>Sign up to a VA House Applicant System</span>
                                    </a>

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <a class="nav-link" href="#" role="button">
                                        <i class="bi bi-check-circle-fill"></i> <span class="">Email Verification</span>
                                    </a>

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <a class="nav-link" href="#" role="button">
                                        <i class="bi bi-check-circle"></i> <span>Complete Profile</span>
                                    </a>

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <a class="nav-link" href="#" role="button">
                                        <i class="bi bi-check-circle"></i> <span>HR Verification</span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{ asset('dist/js/pages/user-end/index.js') }}"></script>

@endsection
