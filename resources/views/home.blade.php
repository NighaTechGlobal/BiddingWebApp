@extends('layouts.backend')

@section('content')
    <!-- Bootstrap 5 CSS -->
    {{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">--}}
    <style>
        .verify-btn {
            min-width: 100px;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #0d6efd;
        }

        .submit-btn {
            background: linear-gradient(to right, #0d6efd, #6610f2);
            border: none;
        }

        .submit-btn:hover {
            background: linear-gradient(to right, #0b5ed7, #520dc2);
        }

        .green {
            color: green;
        }

        .red {
            color: red;
        }
    </style>
    <style>
        .form-control {
            margin-bottom: 1rem;
            padding: 0.75rem;
            border-radius: 6px;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #0d6efd;
        }

        .verify-btn {
            background-color: #0d6efd;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 6px;
        }

        .submit-btn {
            background-color: #0d6efd;
            color: white;
            border: none;
            padding: 1rem;
            border-radius: 6px;
            width: 100%;
        }

        .submit-btn:hover, .verify-btn:hover {
            background-color: #0b5ed7;
        }

        .otp-section {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .pincode-district {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
        }
    </style>




    <!-- new code : start  -->


    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Dashboard</h1>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    @if($user_info->email_verify_status == 1 && $user_info->mobile_verify_status == 1)
        <div class="content">
            <div class="row items-push">
                <div class="col-md-6 col-xl-6 col-lg-6">
                    <div class="block block-rounded h-100 mb-0">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">
                                Hello , {{!empty(auth()->user()->name) ? auth()->user()->name : ''}}
                            </h3>
                        </div>
                        <div class="block-content">
                            <p>
                                Welcome to getbid.in  - Tender & Auction Portal
                            </p>
                            <p>

                            </p>
                            <p class="fw-semibold">
                                Wish you all the best!
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endif
    <!-- END Page Content -->


    <!-- new code : end -->





    @if($user_info->email_verify_status == 1 && $user_info->mobile_verify_status == 1)
        {{--        <div class="container">--}}
        {{--            <div class="row justify-content-center">--}}
        {{--                <div class="col-md-4">--}}
        {{--                    <div class="card">--}}
        {{--                        <div class="card-header">{{ __('Dashboard') }}</div>--}}

        {{--                        <div class="card-body">--}}
        {{--                            @if (session('status'))--}}
        {{--                                <div class="alert alert-success" role="alert">--}}
        {{--                                    {{ session('status') }}--}}
        {{--                                </div>--}}
        {{--                            @endif--}}

        {{--                            {{ __('You are logged in!') }}--}}

        {{--                            @if (session('message_user_info'))--}}
        {{--                                <br/> <span class="green">--}}
        {{--                                        <strong> {{ session('message_user_info') }} </strong>--}}
        {{--                                    </span>--}}
        {{--                            @endif--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    @endif

    {{--    <div class="container">--}}
    {{--        <div class="row justify-content-center min-vh-100 align-items-center">--}}

    <div class="content">
        <div class="row items-push">
            <div class="col-12 col-md-6 col-lg-6">
            @php $compy_sunmit_btn =0; @endphp

            @if(!empty($user_info))
                @if($user_info->email_verify_status == 1 && $user_info->mobile_verify_status == 1)



                    @if($user_info->company == 'company' )

                        <!-- GST : start -->
                            @if($user_info->gst_verify_status == 0 )


                                <h4>GST Verification</h4>

                                <form id="gst-form">
                                    <div class="otp-section">
                                        {{--                                        <label for="gst">GST Number:</label>--}}
                                        <input type="text" id="gst" name="gst" name="aadhaar" maxlength="15"
                                               class="form-control mb-0" placeholder="GST Number">
                                        <button type="button" id="gst-verify-btn" class="verify-btn">Verify
                                        </button>
                                    </div>
                                </form>

                                <div id="otp-section">
                                    <form id="gst-otp-form " class="">
                                        {{--                                        <div class="otp-gst-section " style="display: none;">--}}
                                        <div class="otp-section otp-gst-section" style="display: none;">
                                            {{--                                            <label for="otp">OTP:</label>--}}
                                            <input type="text" id="otp" name="otp" class="form-control mb-0"
                                                   placeholder="OTP" required>
                                            <button type="button" id="otp-verify-btn-gst" class="verify-btn">
                                                Verify
                                                OTP
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            @elseif($user_info->gst_verify_status == 1 )
{{--                                @php $compy_sunmit_btn =1; @endphp--}}
{{--                                <span class="green"> <strong> GST Number Verified &#x2705;</strong></span>--}}
{{--                                <br>--}}
                            @endif
                        <!-- GST : End-->

                        @elseif($user_info->company == 'individual' )

                        <!-- Address for : start -->


                            <!-- Aadhaar  : start -->
                            @if($user_info->aadhaar_verify_status == 0 )
                                <div class="card border-0 shadow-sm p-4">


                                    <!-- Aadhar Verification -->

                                    <!-- Aadhar Verification -->

                                    <form id="aadhaar-form">
                                        <h4>Aadhaar Verification</h4>
                                        <div class="otp-section">
                                            {{--                                        <label for="aadhaar">Aadhaar:</label>--}}
                                            <input type="text" id="aadhaar" name="aadhaar" maxlength="12"
                                                   class="form-control mb-0" placeholder="Aadhaar">
                                            <button type="button" id="aadhaar-verify-btn" class="verify-btn">Verify
                                            </button>
                                        </div>
                                    </form>

                                    <div id="otp-section" style="display: none;">
                                        <form id="otp-form">
                                            <div class="otp-section">
                                                {{--                                            <label for="otp">OTP:</label>--}}
                                                <input type="text" id="otp" name="otp" maxlength="6"
                                                       class="form-control mb-0" placeholder="OTP" required>
                                                <button type="button" id="otp-verify-btn" class="verify-btn">Verify
                                                    OTP
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @elseif($user_info->aadhaar_verify_status == 1 )
                                {{--                                    @php $compy_sunmit_btn =1; @endphp--}}
                                {{--                                    <span class="green"> <strong> Aadhar Number Verified &#x2705;</strong></span>--}}
                                {{--                                    <br>--}}
                            @endif
                        <!-- Aadhaar  : end -->


                        @endif

                    <!-- Personal Info & Company info : start-->

                        @if(!empty($user_info->name1) && !empty($user_info->address1))
                        @else
                            <form method="POST" action="{{route('userinfostore')}}">
                                @csrf

                                <h4> @if($user_info->company == 'company' ) Company Info @else Personal
                                    Info @endif</h4>
                                <!-- Personal Info -->
                                <input type="text" class="form-control" placeholder="Name" name="name" required
                                       value="{{old('name')}}">

                                <!-- Address -->
                                <input type="text" class="form-control" placeholder="Address 1" name="address1"
                                       required>
                                <input type="text" class="form-control" placeholder="Address 2" name="address2">



                                <!-- State -->

                                <select id="state" onchange="updateCities()"  class="form-control form-select   " placeholder="State" name="state"
                                        required>
                                    <option value="">Select State</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="West Bengal">West Bengal</option>
                                    <!-- Add more states as needed -->
                                </select>

                                <!-- District and Pincode -->
                                <div class="pincode-district">

                                    <select id="city" class="form-control form-select"  name="district" placeholder="District" required>
                                        <option value="">Select City</option>
                                    </select>
{{--                                    <input type="text" class="form-control mb-0" placeholder="District"--}}
{{--                                           name="district"--}}
{{--                                           required>--}}
                                    <input type="text" class="form-control " placeholder="Pincode"
                                           name="pincode"
                                           maxlength="6"
                                           required>
                                </div>
{{--                                <input type="text" class="form-control" placeholder="State" name="state"--}}
{{--                                       required>--}}

                                <!-- Contact Info -->
                                <input type="tel" class="form-control" placeholder="Phone Number"
                                       name="phone_number"
                                       maxlength="10"
                                       required>
                                <input type="email" class="form-control" placeholder="Email ID" name="email"
                                       required>

                                <!-- Submit Button  -->
                                {{--                                        {{ $compy_sunmit_btn == 1 ? ' ' : 'disabled' }}--}}
                                <button type="submit"
                                        class="submit-btn">
                                    Submit
                                </button>
                            </form>
                        @endif
                    <!-- Personal Info & Company info : end-->
                        <!-- Address for : start -->

                    @else
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <h4 class="text-center mb-1">Signup</h4>
                                <p class="text-center text-muted small mb-4">Just some details to get you in!</p>


                                <!-- Mobile OTP Field -->
                                <div class="mb-3">
                                    <form method="POST" action="{{route('verifymobile')}}" id="frmmb">
                                        @csrf
                                        <div class="input-group">
                                            @if(!empty($user_info))
                                                @if($user_info->mobile_verify_status == 0 )

                                                    <input type="text" class="form-control mb-0" name="otp"
                                                           value="{{old('otp')}}"
                                                           placeholder="Mobile Number OTP" required>
                                                    <button class="btn btn-primary verify-btn" type="submit">Verify
                                                    </button>
                                                @elseif($user_info->mobile_verify_status == 1 )
                                                    {{--                                                        <span--}}
                                                    {{--                                                            class="green"> <strong> Mobile Number Verified &#x2705;</strong></span>--}}
                                                @endif
                                            @endif
                                        </div>
                                    </form>
                                </div>

                                <!-- Email OTP Field -->
                                <div class="mb-4">
                                    <form method="POST" action="{{route('verifyemail')}}">
                                        @csrf
                                        <div class="input-group">
                                            @if(!empty($user_info))
                                                @if($user_info->email_verify_status == 0 )
                                                    <input type="text" class="form-control mb-0"
                                                           placeholder="Email OTP"
                                                           name="otp"
                                                           required
                                                           value="{{old('otp')}}">
                                                    <button class="btn btn-primary verify-btn" type="submit">Verify
                                                    </button>
                                                @elseif($user_info->email_verify_status == 1 )
                                                    {{--                                                        <span--}}
                                                    {{--                                                            class="green"> <strong> Email Verified &#x2705;</strong></span>--}}
                                                @endif
                                            @endif
                                        </div>
                                    </form>
                                </div>

                                <!-- Submit Button -->
                                <div class="d-grid">
                                    {{--                                        <button type="button" class="btn btn-primary submit-btn py-2">Submit</button>--}}
                                </div>

                            </div>
                        </div>
                    @endif
                @endif


            </div>
        </div>
    </div>

@endsection

