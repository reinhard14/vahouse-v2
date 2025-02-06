@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card my-5">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row text-center mb-3">
                        <div class="col mb-3">
                            <img src="{{asset('dist/img/nav-logo.png')}}" width="150px" height="60px">
                        </div>

                        <h3>Create an Account</h3>
                        <p class="text-muted">2 of 3: Account details</p>
                    </div>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-2">
                            <div class="col">
                                <label for="firstname">Email <span class="text-danger">*</span> </label>

                                <input id="firstname" type="email" class="form-control @error('email') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col">
                                <label for="firstname">Password <span class="text-danger">*</span> </label>

                                <input id="firstname" type="email" class="form-control @error('email') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="firstname">Confirm Password <span class="text-danger">*</span> </label>

                                <input id="firstname" type="email" class="form-control @error('email') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col captcha text-center">
                                <span id="captcha-img">{!! captcha_img() !!}</span>
                            </div>
                            <div class="col text-right">
                                <a href="javascript:void(0)" onclick="refreshCaptcha()" class="bi bi-arrow-clockwise">Refresh</a>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col">
                                <label for="captcha">Enter Captcha here <span class="text-danger">*</span></label>

                                <input type="text" id="captcha" name="captcha" class="form-control" required>
                                @if ($errors->has('captcha'))
                                    <span class="text-danger">{{ $errors->first('captcha') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col">
                                <button type="submit" class="btn btn-orange form-control">
                                    {{ __('Next') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="row text-center">
                        <div class="col">
                            <p class="text-muted">Already have an account? <a href="{{ route('login') }}" class="text-orange">Log in</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    function refreshCaptcha() {
        $.ajax({
            url: '{{ route('refresh.captcha') }}',
            method: 'GET',
            success: function(response) {
                $('#captcha-img').html(response.captcha);
            },
            error: function(xhr, status, error) {
                console.error('Failed to refresh captcha:', xhr.responseText);
                alert('Failed to refresh captcha: ' + error);
            }
        });
    }

</script>

@endsection
