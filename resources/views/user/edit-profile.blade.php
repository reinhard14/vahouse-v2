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

                            <div class="row mb-4">
                                <p class="pl-3">2x2 Formal Photo</p>
                                <input type="file" id="photo_id" name="photo_id" class="form-control" accept=".jpeg, .jpg, .png" required>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>{{ __('First Name') }} <span class="text-danger">*</span> </p>

                                        <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>Middle Name:</p>

                                        <input type="text" id="middlename" name="middlename" class="form-control" value="{{ old('middlename') }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>{{ __('Last name') }} <span class="text-danger">*</span></p>

                                        <input id="lastname" type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" value="{{ old('lastname') }}" required autocomplete="lastname">

                                        @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>Suffix </p>

                                        <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>{{ __('Birthdate') }} <span class="text-danger">*</span></p>

                                        <input id="birthdate" type="date" name="birthdate" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>Gender </p>

                                        <select name="gender" class="form-control">
                                            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }} >Male</option>
                                            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }} >Female</option>
                                            <option value="Transgender" {{ old('gender') == 'Transgender' ? 'selected' : '' }} >Transgender</option>
                                            <option value="Non binary" {{ old('gender') == 'Non binary' ? 'selected' : '' }} >Non-Binary/Non-Conforming</option>
                                            <option value="Prefer not to respond" {{ old('gender') == 'Prefer not to respond' ? 'selected' : '' }} >Prefer not to respond</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3 border-bottom">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>Nationality <span class="text-danger">*</span></p>

                                        <input id="lastname" type="text" name="lastname" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>Civil Status </p>

                                        <select name="status" class="form-control">
                                            <option value="Single" {{ old('status') == 'Single' ? 'selected' : '' }} >Single</option>
                                            <option value="Married" {{ old('status') == 'Married' ? 'selected' : '' }} >Married</option>
                                            <option value="Widowed" {{ old('status') == 'Widowed' ? 'selected' : '' }} >Widowed</option>
                                            <option value="Separated" {{ old('status') == 'Separated' ? 'selected' : '' }} >Separated</option>
                                            <option value="Divorced" {{ old('status') == 'Divorced' ? 'selected' : '' }} >Divorced</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <h5>Contact Information</h5>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>Mobile Number <span class="text-danger">*</span> </p>

                                        <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>Email Address <span class="text-danger">*</span> </p>

                                        <input type="text" id="middlename" name="middlename" class="form-control" value="{{ old('middlename') }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3 border-bottom">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>Skype <span class="text-danger">*</span> </p>

                                        <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        <small class="text-muted">Find your Skype ID next to "Skype Name". It's under the "Profile" header.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <h5>Emergency Contact Information</h5>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>Parent/Guardian Name <span class="text-danger">*</span> </p>

                                        <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>Contact Number <span class="text-danger">*</span> </p>

                                        <input type="text" id="middlename" name="middlename" class="form-control" value="{{ old('middlename') }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3 border-bottom">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>Relationship <span class="text-danger">*</span> </p>

                                        <input type="text" id="middlename" name="middlename" class="form-control" value="{{ old('middlename') }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <h5>Disbursement Information</h5>
                                </div>
                            </div>

                            <div class="row mb-3 border-bottom">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>UnionBank Account Name <span class="text-danger">*</span> </p>

                                        <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>UnionBank Account Number <span class="text-danger">*</span> </p>

                                        <input type="text" id="middlename" name="middlename" class="form-control" value="{{ old('middlename') }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <h5>Education</h5>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>Highest Education Attainment <span class="text-danger">*</span> </p>

                                        <select name="education" class="form-control">
                                            <option value="High School" {{ old('education') == 'High School' ? 'selected' : '' }} >High School</option>
                                            <option value="Senior High School" {{ old('education') == 'Senior High School' ? 'selected' : '' }} >Senior High School</option>
                                            <option value="College Undergrad" {{ old('education') == 'College Undergrad' ? 'selected' : '' }} >College Undergrad</option>
                                            <option value="College Degree" {{ old('education') == 'College Degree' ? 'selected' : '' }} >College Degree</option>
                                            <option value="Master's Degree" {{ old('education') == 'Master\'s Degree' ? 'selected' : '' }} >Master's Degree</option>
                                            <option value="Professional Degree" {{ old('education') == 'Professional Degree' ? 'selected' : '' }} >Professional Degree</option>
                                            <option value="Doctorate Degree" {{ old('education') == 'Doctorate Degree' ? 'selected' : '' }} >Doctorate Degree</option>
                                            <option value="Vocational" {{ old('education') == 'Vocational' ? 'selected' : '' }} >Vocational</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>Degree <span class="text-danger">*</span> </p>

                                        <input type="text" id="middlename" name="middlename" class="form-control" value="{{ old('middlename') }}" required>
                                    </div>
                                </div>
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
