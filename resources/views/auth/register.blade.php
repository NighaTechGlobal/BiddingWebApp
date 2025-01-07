@extends('auth.app')

@section('content')
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">{{ __('Register') }}</div>--}}

{{--                    <div class="card-body">--}}
{{--                        <form method="POST" action="{{ route('register') }}">--}}
{{--                            @csrf--}}

{{--                            <div class="row mb-3">--}}
{{--                                <label for="name"--}}
{{--                                       class="col-md-4 col-form-label text-md-end">{{ __('Full Name') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="name" type="text"--}}
{{--                                           class="form-control @error('name') is-invalid @enderror" name="name"--}}
{{--                                           value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                    @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-3">--}}
{{--                                <label for="phone_number"--}}
{{--                                       class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="phone_number" type="text"--}}
{{--                                           class="form-control @error('phone_number') is-invalid @enderror"--}}
{{--                                           name="phone_number"--}}
{{--                                           value="{{ old('phone_number') }}" required autocomplete="phone_number"--}}
{{--                                           autofocus>--}}

{{--                                    @error('phone_number')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-3">--}}
{{--                                <label for="email"--}}
{{--                                       class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="email" type="email"--}}
{{--                                           class="form-control @error('email') is-invalid @enderror" name="email"--}}
{{--                                           value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                    @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}


{{--                            <div class="row mb-3">--}}
{{--                                <label for="username"--}}
{{--                                       class="col-md-4 col-form-label text-md-end">{{ __(' User Name') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="username" type="text"--}}
{{--                                           class="form-control @error('username') is-invalid @enderror" name="username"--}}
{{--                                           value="{{ old('username') }}" required autocomplete="username" autofocus>--}}

{{--                                    @error('username')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-3">--}}
{{--                                <label for="password"--}}
{{--                                       class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="password" type="password"--}}
{{--                                           class="form-control @error('password') is-invalid @enderror" name="password"--}}
{{--                                           required autocomplete="new-password">--}}

{{--                                    @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-3">--}}
{{--                                <label for="password-confirm"--}}
{{--                                       class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="password-confirm" type="password" class="form-control"--}}
{{--                                           name="password_confirmation" required autocomplete="new-password">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-3">--}}
{{--                                <label for="type"--}}
{{--                                       class="col-md-4 col-form-label text-md-end">{{ __('Type') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    --}}{{--                                    <input id="username" type="text"--}}
{{--                                    --}}{{--                                           class="form-control @error('username') is-invalid @enderror" name="username"--}}
{{--                                    --}}{{--                                           value="{{ old('name') }}" required autocomplete="username" autofocus>--}}
{{--                                    <select id="type" class="form-control" name="type" required>--}}
{{--                                        <option value="">Select Type</option>--}}
{{--                                        <option value="company">Company</option>--}}
{{--                                        <option value="individual">Individual</option>--}}
{{--                                    </select>--}}
{{--                                    @error('type')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-0">--}}
{{--                                <div class="col-md-6 offset-md-4">--}}
{{--                                    <button type="submit" class="btn btn-primary">--}}
{{--                                        {{ __('Register') }}--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}




<style>
    span.invalid-feedback{
        display: block;
    }
</style>
    <div class="bg-image" style="background-image: url('assets/media/photos/photo12@2x.jpg');">
        <div class="row g-0 justify-content-center bg-black-75">
            <!-- Main Section -->
            <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
                <div class="p-3 w-100">
                    <!-- Header -->
                    <div class="mb-3 text-center">
{{--                        <a class="link-fx fw-bold fs-1" href="index.html">--}}
{{--                            <span class="text-dark">Dash</span><span class="text-primary">mix</span>--}}
{{--                        </a>--}}

                        <a class="mb-2" href="{{url('/')}}">
                            <img src="{{url('logo.png')}}">
                        </a>
                        <p class="text-uppercase fw-bold fs-sm text-muted mt-4">Create New Account</p>
                    </div>
                    <!-- END Header -->

                    <!-- Sign Up Form -->
                    <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js) -->
                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <div class="row g-0 justify-content-center">
                        <div class="col-sm-8 col-xl-6">
                            {{--                            <form class="js-validation-signup" action="be_pages_auth_all.html" method="POST">--}}
                            <form class="js-validation-signup" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="py-3">
                                    <div class="mb-4">
                                        <input type="text" class="form-control form-control-lg form-control-alt"
                                               value="{{ old('name') }}"    id="name" name="name" placeholder="Full Name" required>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="mb-4">
                                        <input type="text" class="form-control form-control-lg form-control-alt"
                                               value="{{ old('phone_number') }}"    required   id="phone_number" name="phone_number" placeholder="Phone Number">
                                        @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <div class="mb-4">
                                        <input type="text" class="form-control form-control-lg form-control-alt"
                                               value="{{ old('username') }}"    required   id="signup-username" name="username" placeholder="Username">
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <input type="email" class="form-control form-control-lg form-control-alt"
                                               value="{{ old('email') }}"   required   id="signup-email" name="email" placeholder="Email">
                                    </div>
                                    <div class="mb-4">
                                        <input type="password" class="form-control form-control-lg form-control-alt"
                                               required   id="signup-password" name="password" placeholder="Password">
                                    </div>

                                    <div class="mb-4">
                                        <input type="password" class="form-control form-control-lg form-control-alt"
                                                 required   id="signup-password-confirm" name="password_confirmation"
                                               placeholder="Password Confirm">
                                    </div>

                                    <div class="mb-4">
                                        <select id="type" class="form-control form-control-lg form-control-alt form-select  " name="type" required>
                                            <option value="">Select Type</option>
                                            <option value="company">Company</option>
                                            <option value="individual">Individual</option>
                                        </select>
                                        @error('type')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>

{{--                                    <div class="mb-4">--}}
{{--                                        <div class="form-check">--}}
{{--                                            <input type="checkbox" class="form-check-input" id="signup-terms"--}}
{{--                                                   name="signup-terms">--}}
{{--                                            <label class="form-check-label" for="signup-terms">I agree to Terms &amp;--}}
{{--                                                Conditions</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                                <div class="mb-4">
                                    <button type="submit" class="btn w-100 btn-lg btn-hero btn-primary">
                                        <i class="fa fa-fw fa-plus opacity-50 me-1"></i> Sign Up
                                    </button>
                                    <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                          <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1"
                                           href="{{url('login')}}">
{{--                                            <i class="fa fa-sign-in-alt opacity-50 me-1"></i> --}}
                                              Already Registered ? Sign In
                                        </a>
{{--                                        <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="#"--}}
{{--                                           data-bs-toggle="modal" data-bs-target="#modal-terms">--}}
{{--                                            <i class="fa fa-book opacity-50 me-1"></i> Read Terms--}}
{{--                                        </a>--}}
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Sign Up Form -->
                </div>
            </div>
            <!-- END Main Section -->
        </div>

        <!-- Terms Modal -->
        <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Terms &amp; Conditions</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-bs-dismiss="modal"
                                        aria-label="Close">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet
                                adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut
                                metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis
                                purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet
                                adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut
                                metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis
                                purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet
                                adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut
                                metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis
                                purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet
                                adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut
                                metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis
                                purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet
                                adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut
                                metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis
                                purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        </div>
                        <div class="block-content block-content-full text-end bg-body">
                            <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Done</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Terms Modal -->
    </div>

@endsection
