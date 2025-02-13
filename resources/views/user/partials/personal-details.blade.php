<div class="row mb-4">
    <div class="col">
        <label for="photo_id" class="custom-label">2x2 Formal Photo</label>
        <input type="file" id="photo_id" name="photo_id" class="form-control" accept=".jpeg, .jpg, .png" required>
    </div>
</div>

<div class="row mb-2">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name" class="custom-label">{{ __('First Name') }} <span class="text-danger">*</span> </label>

            <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name ?? '' }}" required>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="middlename" class="custom-label">Middle Name:</label>

            <input type="text" id="middlename" name="middlename" class="form-control" value="{{ $user->middlename ?? '' }}" required>
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col-md-6">
        <div class="form-group">
            <label for="lastname" class="custom-label">{{ __('Last name') }} <span class="text-danger">*</span></label>

            <input id="lastname" type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" value="{{ $user->lastname ?? '' }}" required>

            @error('lastname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="suffix" class="custom-label">Suffix </label>

            <input id="suffix" type="text" name="suffix" class="form-control @error('name') is-invalid @enderror" value="{{ $user->suffix ?? '' }}" required>

            @error('suffix')
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
            <label for="birthdate" class="custom-label">{{ __('Birthdate') }} <span class="text-danger">*</span></label>

            <input id="birthdate" type="date" name="birthdate" class="form-control">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="gender" class="custom-label">Gender </label>

            <select name="gender" class="form-control">
                <option value="Male" {{ old('gender', $user->gender ?? '') == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ old('gender', $user->gender ?? '') == 'Female' ? 'selected' : '' }} >Female</option>
                <option value="Transgender" {{ old('gender', $user->gender ?? '') == 'Transgender' ? 'selected' : '' }} >Transgender</option>
                <option value="Non binary" {{ old('gender', $user->gender ?? '') == 'Non binary' ? 'selected' : '' }} >Non-Binary/Non-Conforming</option>
                <option value="Prefer not to respond" {{ old('gender', $user->gender ?? '') == 'Prefer not to respond' ? 'selected' : '' }} >Prefer not to respond</option>
            </select>
        </div>
    </div>
</div>

<div class="row mb-3 border-bottom">
    <div class="col-md-6">
        <div class="form-group">
            <label for="nationality" class="custom-label">Nationality <span class="text-danger">*</span></label>

            <input id="nationality" type="text" name="nationality" class="form-control">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="status" class="custom-label">Civil Status </label>

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
            <label for="contactnumber" class="custom-label">Mobile Number <span class="text-danger">*</span> </label>

            <input id="contactnumber" type="text" name="contactnumber" class="form-control" value="{{ $user->contactnumber ?? '' }}" required>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="email" class="custom-label">Email Address <span class="text-danger">*</span> </label>

            <input type="text" id="email" name="email" class="form-control" value="{{ $user->email ?? '' }}" required>
        </div>
    </div>
</div>

<div class="row mb-3 border-bottom">
    <div class="col-md-6">
        <div class="form-group">
            <label for="skype" class="custom-label">Skype <span class="text-danger">*</span> </label>

            <input id="skype" type="text" name="skype" class="form-control @error('skype') is-invalid @enderror" value="{{ old('skype') }}" required>
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
            <label class="custom-label">Parent/Guardian Name <span class="text-danger">*</span> </label>

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
            <label class="custom-label">Contact Number <span class="text-danger">*</span> </label>

            <input type="text" id="middlename" name="middlename" class="form-control" value="{{ old('middlename') }}" required>
        </div>
    </div>
</div>

<div class="row mb-3 border-bottom">
    <div class="col-md-6">
        <div class="form-group">
            <label class="custom-label">Relationship <span class="text-danger">*</span> </label>

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
            <label class="custom-label">UnionBank Account Name <span class="text-danger">*</span> </label>

            <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" required>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label class="custom-label">UnionBank Account Number <span class="text-danger">*</span> </label>

            <input type="text" id="middlename" name="middlename" class="form-control" required>
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
            <label class="custom-label">Highest Education Attainment <span class="text-danger">*</span> </label>

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
            <label class="custom-label">Degree <span class="text-danger">*</span> </label>

            <input type="text" id="middlename" name="middlename" class="form-control" value="{{ old('middlename') }}" required>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col">
        <a href="{{ route('user.dashboard') }}" class="btn btn-secondary">Previous</a>
    </div>
    <div class="col text-right">
        <button class="btn btn-orange-flat">Next Step</button>
    </div>
</div>
