@extends('layouts.va.va-layout')

@section('content')

<div class="container">
    <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-10 mb-5 pb-5">
            <div class="row my-4">
                <div class="col">
                    <h3>Edit Profile</h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            @include('includes.messages')

                            <div class="row">
                                <div class="col">
                                    <label for="photo_id">2x2 Formal Photo</label>
                                </div>

                                <input type="file" id="photo_id" name="photo_id" class="form-control" accept=".jpeg, .jpg, .png, .pdf" required>
                            </div>

                            <div class="row">

                            </div>

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
<script src="{{ asset('dist/js/pages/user-end/index.js') }}"></script>

@endsection
