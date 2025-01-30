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
    <div class="row border-bottom justify-content-center text-center mt-5">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-1 offset-md-11">
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-orange-flat form-control">Edit</a>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <p class="mt-5 pt-5"> {{ $user->name }} {{ $user->middlename }} {{ $user->lastname }} </p>
                    <h5> Jobs List here </h5>
                    <span class="text-orange"><i class="bi bi-patch-check-fill"></i> </span> <small class=""> Tier 1 VA </small>
                    <span class="text-orange"><i class="bi bi-shield-fill-check"></i></span><small> HR Unverified</small>
                </div>
            </div>
        </div>
    </div>

    <!--MAIN ROW START HERE -->
    <div class="row mt-4">
        <div class="col-md-5 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-muted">Overview</h5>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ullam minima dolorum ea vero obcaecati, beatae deleniti odio officia culpa debitis voluptatum quos adipisci saepe! Sequi, sapiente maiores hic suscipit voluptas eveniet, aliquam aperiam consequatur autem, et provident eaque totam!</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="text-muted">Profile Description</h5>

                    <p class="">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi doloribus odit nobis a, impedit laboriosam dignissimos deleniti quidem! Sit aliquid sapiente enim quidem. Fuga voluptatibus deserunt impedit vitae nostrum commodi hic quam, eum consequatur ullam!
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="text-muted">Technical Skills</h5>

                    <p class="">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt, cumque!
                    </p>

                    <h5 class="text-muted">Other Skills</h5>

                    <p class="">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt, cumque!
                    </p>

                    <h5 class="text-muted">Tools, Websites, and Apps Used</h5>

                    <p class="">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt, cumque!
                    </p>
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
                    <h5 class="text-muted">VA Information</h5>

                    <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad suscipit repellendus architecto quo nisi? Laudantium libero sit placeat sed quaerat distinctio quidem consequuntur quas voluptas minus ut odit nobis eius rerum adipisci nesciunt, recusandae qui similique eligendi alias asperiores veritatis nisi aliquam saepe? Doloremque ab aut aperiam, saepe quam quae cumque! Laudantium nesciunt unde, rerum reprehenderit ipsum sapiente sequi omnis error eveniet cupiditate aliquid eius aliquam beatae provident voluptatum qui culpa inventore accusamus possimus explicabo rem dolorem nulla iure voluptates. Obcaecati maxime fugit, ad quis ab iure inventore minima vero suscipit doloremque facere eum praesentium culpa quibusdam nam excepturi error delectus saepe. Placeat ut doloribus velit aliquid aspernatur sint ad, nesciunt quidem mollitia ratione facilis. Iste illo quaerat fugit id temporibus quos hic perspiciatis provident. Nostrum doloremque, possimus quibusdam deleniti totam unde? Sit possimus iste deleniti rem voluptatibus similique culpa, sunt cumque veniam, deserunt obcaecati ratione magnam esse reiciendis quibusdam?</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="text-muted">Emergency Contact Information</h5>

                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil corrupti molestias dignissimos, odit autem voluptatum inventore magni perferendis quis exercitationem quo facilis veniam esse corporis, cum ut repellat eius eveniet.
                    </p>
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
