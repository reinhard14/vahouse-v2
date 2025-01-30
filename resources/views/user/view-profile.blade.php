@extends('layouts.va.va-layout')

@section('content')

<div class="container">
    <div class="row justify-content-center mb-5 pb-5">
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
    </div>

    <div class="row mb-5">
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{ asset('dist/js/pages/user-end/edit-profile.js') }}"></script>

@endsection
