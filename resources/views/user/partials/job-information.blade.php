<form action="{{ route('user.update-job-information', $user->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row border-bottom mr-3">
        <div class="col">
            <h6>Positions Applying for</h6>
            <p class="">
                You can choose one or multiple options
            </p>
        </div>
        <div class="col mb-4">
            <div class="row">
                <div class="col">
                    <input type="checkbox" id="position1" name="positions[]" class="formCheckInput" value="General Virtual Assistant">
                    <label for="position1" class="custom-label"> General VA</label>
                </div>
                <div class="col">
                    <input type="checkbox" id="position2" name="positions[]" class="formCheckInput" value="Social Media Manager">
                    <label for="position2" class="custom-label"> Social Media Manager</label>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="checkbox" id="position3" name="positions[]" class="formCheckInput" value="Callers">
                    <label for="position3" class="custom-label"> Callers</label>
                </div>
                <div class="col">
                    <input type="checkbox" id="position4" name="positions[]" class="formCheckInput" value="Web Developers">
                    <label for="position4" class="custom-label"> Web Developers</label>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="checkbox" id="position5" name="positions[]" class="formCheckInput" value="Tech VAs">
                    <label for="position5" class="custom-label"> Tech VAs</label>
                </div>
                <div class="col">
                    <input type="checkbox" id="position6" name="positions[]" class="formCheckInput" value="Project Manager">
                    <label for="position6" class="custom-label"> Project Manager</label>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="checkbox" id="position7" name="positions[]" class="formCheckInput" value="Others">
                    <label for="position7" class="custom-label"> Others</label>
                </div>
                <div class="col">
                    <input type="text" id="specify" name="" class="formCheckInput" placeholder="Type if any">
                </div>
            </div>
        </div>
    </div>

    <div class="row border-bottom mr-3">
        <div class="col mt-4">
            <h6>Employment Type</h6>
            <p class="">
                You can choose one or multiple options
            </p>
        </div>
        <div class="col my-4">
            <div class="row">
                <div class="col">
                    <input type="checkbox" id="parttime" name="work_status[]" class="formCheckInput" value="Part-Time">
                    <label for="parttime" class="custom-label"> Part-Time</label>
                </div>
                <div class="col">
                    <input type="checkbox" id="fulltime" name="work_status[]" class="formCheckInput" value="Full-Time">
                    <label for="fulltime" class="custom-label"> Full-Time</label>
                </div>
            </div>

            <div class="row" id="callersRow">
                <div class="col">
                    <input type="checkbox" id="negotiable" name="work_status[]" class="formCheckInput" value="Negotiable">
                    <label for="negotiable" class="custom-label"> Negotiable</label>
                </div>
            </div>
        </div>
    </div>

    <div class="row border-bottom mr-3">
        <div class="col mt-4">
            <h6>Work Schedule</h6>
            <p class="">
                You can choose one or multiple options
            </p>
        </div>
        <div class="col my-4">
            <div class="row mb-3">
                <label for="availability" class="custom-label">Days Availability</label>

                <select id="availability" name="availability[]" class="select2" multiple>
                    <option value="Monday">Monday</option>
                    <option value="Tueday">Tueday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                </select>
            </div>

            <div class="row">
                <label class="custom-label">Preferred Time</label>
                <div class="input-group mb-3">
                    <input type="time" name="preferred_start" class="form-control" required>
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="bi bi-arrow-right-short"></i></span>
                    </div>
                    <input type="time" name="preferred_end" class="form-control" required>
                    {{-- <div class="input-group-append">
                        <span class="input-group-text"><i class="bi bi-clock"></i></span>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="row border-bottom mr-3">
        <div class="col mt-4">
            <h6>Salary</h6>
            <label class="custom-label">
                Choose how your Happy rate in Peso
            </label>
        </div>
        <div class="col pt-3 my-4">
            <div class="row">
                <input type="text" id="position1" name="rate" class="form-control" value="{{ $user->information->rate ?? '' }}" required>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <input type="checkbox" id="position3" name="negotiable" class="formCheckInput">
                    <label for="position3" class="custom-label">  Salary is negotiable? <span class="text-muted">(Check if yes)</span></label>
                </div>
            </div>
        </div>
    </div>

    <div class="row border-bottom mr-3">
        <div class="col mt-4">
            <h6>Your Job Profile Description</h6>
            <p class="">
                Add your profile description to help attract your potential clients
            </p>
        </div>
        <div class="col my-4">
            <div class="row">
                <textarea class="form-control" placeholder="Please enter description here..."></textarea>
            </div>
        </div>
    </div>

    <div class="row mr-3">
        <div class="col mt-4">
            <h6>Add your Technical Skills</h6>
            <p class="">
                Add your Technical skills to help attract your potential clients
            </p>
        </div>

        @php
            $applicantSkills = [];

            if (isset($user->skillsets->skill) && !is_null($user->skillsets->skill)) {
                $applicantSkills = json_decode($user->skillsets->skill, true);
            }

            $availableSkills = array_diff($skills, $applicantSkills);

        @endphp

        <div class="col my-4">
            <div class="row mb-3">
                <select id="skills" name="skills[]" class="select2" multiple>
                    @if (!empty($applicantSkills) && is_array($applicantSkills))
                        @foreach ($applicantSkills as $skill)
                            <option value="{{ $skill }}" selected>{{ $skill }}</option>
                        @endforeach

                        @foreach ($availableSkills as $skillOption)
                            <option value="{{ $skillOption }}">{{ $skillOption }}</option>
                        @endforeach

                    @else
                        @foreach ($skills as $skillOption)
                            <option value="{{ $skillOption }}">{{ $skillOption }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
    </div>

    <div class="row mr-3">
        <div class="col mt-4">
            <h6>Other Skills</h6>
            <p class="">
                Add your soft skills
            </p>
        </div>
        <div class="col my-4">
            <div class="row mb-3">
                <select id="softskills" name="availability[]" class="select2" multiple>
                    <option value="Monday">Monday</option>
                    <option value="Tueday">Tueday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row border-bottom mr-3">
        <div class="col mt-4">
            <h6>Tools, Websites Used</h6>
            <p class="">
                Add tools and websites used
            </p>
        </div>
        <div class="col my-4">
            <div class="row mb-3">
                <select id="tools" name="availability[]" class="select2" multiple>
                    <option value="Monday">Monday</option>
                    <option value="Tueday">Tueday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row mr-3">
        <div class="col mt-4">
            <h6>Employment History</h6>
            <p class="">
                Add your employment history
            </p>
        </div>
        <div class="col my-4">
            <div class="row text-right mb-3">
                <div class="col">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#create-details-modal" class="btn btn-vah-orange btn-sm">Add New </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <a href="{{ route('user.dashboard') }}" class="btn btn-secondary">Previous</a>
        </div>
        <div class="col text-right">
            <button type="submit" class="btn btn-orange-flat">Next Step</button>
        </div>
    </div>
</form>


<x-applicant.details />
