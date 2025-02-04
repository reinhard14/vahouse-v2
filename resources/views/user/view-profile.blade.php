@extends('layouts.va.va-layout')

@section('content')

<div class="container-fluid">
    <div class="row profile-header">
        <div class="col m-4 p-3"></div>
    </div>
    <div class="row border-bottom justify-content-center text-center">
        <div class="col-md-6">
            <img src="{{asset('dist/img/user_default.png')}}" alt="va-avatar" class="overlap-image">
        </div>
    </div>
    <div class="row border-bottom justify-content-center text-center pt-5" style="background-color: white;">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-1 offset-md-11">
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-orange-flat form-control">Edit</a>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <span class="d-block mt-5 pt-5"> {{ $user->name }} {{ $user->middlename }} {{ $user->lastname }} </span>
                    <span class="badge badge-pill badge-success span-normal-text">Active</span>
                    <h5> Quality Assurance, Web Developer </h5>
                    <span class="text-orange"><i class="bi bi-patch-check-fill"></i> </span> <small class=""> Tier 1 VA </small>
                    <span class="text-orange pl-3"><i class="bi bi-shield-fill-check"></i></span><small> HR Unverified</small>
                </div>
            </div>
        </div>
    </div>

    <!--MAIN ROW START HERE -->
    <div class="row mt-4">
        <div class="col-md-5 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-muted mb-4">Overview</h5>
                    <div class="row mb-2">
                        <div class="col-md-1">
                            <span class="badge badge-pill medium-icon p-2"><i class="bi bi-briefcase"></i></span>
                        </div>
                        <div class="col text-muted">
                            Looking for <strong> full-time, night shift work</strong> for <strong>40 hours</strong> per week. <strong>35,000</strong> Pesos monthly salary.
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-1">
                            <span class="badge badge-pill medium-icon p-2"><i class="bi bi-mortarboard"></i></span>
                        </div>
                        <div class="col text-muted">
                            <strong>
                                Bachelor of Science in Information Technology
                            </strong>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-1">
                            <span class="badge badge-pill medium-icon p-2"><i class="bi bi-person"></i></span>
                        </div>
                        <div class="col text-muted">
                            <small class="d-block font-weight-bold d-flex align-end">
                                Profile Created
                            </small>
                            <small class="d-flex align-start">
                                Janaury 01, 2025
                            </small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="text-muted mb-4">Profile Description</h5>

                    <p class="">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi doloribus odit nobis a, impedit laboriosam dignissimos deleniti quidem! Sit aliquid sapiente enim quidem. Fuga voluptatibus deserunt impedit vitae nostrum commodi hic quam, eum consequatur ullam!
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="text-muted">Technical Skills</h5>

                    <div class="mb-3">
                        <span class="badge badge-pill badge span-orange">
                            Web development
                        </span>
                        <span class="badge badge-pill badge span-orange">
                            Web management
                        </span>
                    </div>

                    <h5 class="text-muted">Other Skills</h5>

                    <div class="mb-3">
                        <span class="badge badge-pill badge span-orange">
                            Communication Skills
                        </span>
                    </div>

                    <h5 class="text-muted">Tools, Websites, and Apps Used</h5>

                    <div class="mb-3">
                        <span class="badge badge-pill badge span-orange">
                            VS Code
                        </span>
                        <span class="badge badge-pill badge span-orange">
                            Github
                        </span>
                        <span class="badge badge-pill badge span-orange">
                            WAMP Server
                        </span>
                        <span class="badge badge-pill badge span-orange">
                            Postman
                        </span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="text-muted mb-3">Employment History</h5>

                    <div class="card p-4">
                        <small class="text-muted">
                            January 01, 2020 - January 02, 2020
                        </small>
                        <h6 class="text-muted">
                            Developer
                        </h6>
                        <p class="text-muted">
                            Company Name, Company Place
                        </p>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat praesentium esse, quidem blanditiis autem rerum nostrum aliquid, quaerat architecto numquam distinctio adipisci veniam culpa sit sed reiciendis. Unde, alias nisi.
                        </p>
                    </div>

                    <div class="card p-4">
                        <small class="text-muted">
                            February 01, 2021 - January 02, 2022
                        </small>
                        <h6 class="text-muted">
                            Developer 2
                        </h6>
                        <p class="text-muted">
                            Company Name, Company Place
                        </p>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat praesentium esse, quidem blanditiis autem rerum nostrum aliquid, quaerat architecto numquam distinctio adipisci veniam culpa sit sed reiciendis. Unde, alias nisi.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-muted mb-3">VA Information</h5>

                    <small class="text-muted">Age</small>
                    <p class="text-muted font-weight-bold">
                        20
                    </p>

                    <small class="text-muted">Gender</small>
                    <p class="text-muted font-weight-bold">
                        Male
                    </p>

                    <small class="text-muted">Address</small>
                    <p class="text-muted font-weight-bold">
                        440 Rizal St., Padada, Davao del Sur
                    </p>

                    <div class="row mb-3">
                        <div class="col">
                            <small class="text-muted d-block">Files:</small>
                            <span class="d-block text-muted font-weight-bold">Portfolio</span>
                            <small class="font-weight-bold text-orange">
                                https://www.youtube.com/watch?v=dQw4w9WgXcQ
                            </small>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <span class="d-block text-muted font-weight-bold">DISC</span>
                            <small class="font-weight-bold text-orange">
                                Adil.pdf
                            </small>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <span class="d-block text-muted font-weight-bold">Intro Video</span>
                            <small class="font-weight-bold text-orange">
                                https://www.youtube.com/watch?v=dQw4w9WgXcQ
                            </small>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <span class="d-block text-muted font-weight-bold">Mock Call</span>
                            <small class="font-weight-bold text-orange">
                                Inbound.mp3
                            </small>
                            <small class="font-weight-bold text-orange">
                                Outbound.mp3
                            </small>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <span class="d-block text-muted font-weight-bold">Valid ID</span>
                            <small class="font-weight-bold text-orange">
                                AdilID.pdf
                            </small>
                        </div>
                    </div>

                    <small class="text-muted">Contacts</small>
                    <span class="d-block text-muted font-weight-bold">
                        Skype
                    </span>
                    <small class="text-muted">reinhardangcan</small>

                    <span class="d-block text-muted font-weight-bold">
                        Email
                    </span>
                    <small class="text-muted">dwc.fs.dummy@gmail.com</small>

                    <span class="d-block text-muted font-weight-bold">
                        Phone Number
                    </span>
                    <small class="text-muted">09200930930</small>

                    <small class="d-block text-muted mt-4">Bank Account</small>
                    <span class="d-block text-muted font-weight-bold">
                        UnionBank of the Philippines
                    </span>
                    <small class="text-muted">9900930930</small>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="text-muted">Emergency Contact Information</h5>

                    <small class="text-muted d-block">
                        Incase of Emergency
                    </small>
                    <p class="text-muted font-weight-bold">
                        Henry Sy
                    </p>
                    <small class="text-muted d-block font-weight-bold">
                        Father
                    </small>
                    <small class="text-muted d-block font-weight-bold">
                        09200920920
                    </small>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-10 mb-5 pb-5">
            <div class="row my-4">
                <div class="col">
                    <h3>View Profile</h3>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            @include('includes.messages')
                            View
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> --}}

</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{ asset('dist/js/pages/user-end/edit-profile.js') }}"></script>

@endsection
