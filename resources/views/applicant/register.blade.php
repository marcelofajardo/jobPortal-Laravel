@extends('layouts.app')

@section('title', 'Applicant Registration')
@section('assets')
<link href="{{ asset('css/home_style.css') }}" rel="stylesheet" id="bootstrap-css">@endsection
@section('content')
    <div class="container-fluid register main-content">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                <h3>Welcome</h3>
                <p>You are just few steps away from being part of our team</p>
                <a href="login"><input type="submit" name="applicant_login" value="Applicant Login" /></a><br />
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="applicant-tab" data-toggle="tab" href="{{ URL::route('applicant.register') }}"
                            role="tab" aria-controls="applicant" aria-selected="true">Applicant</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="hirer-tab" data-toggle="tab" href="{{ URL::route('employer.register') }}" role="tab"
                            aria-controls="hirer" aria-selected="false">Employer</a>
                    </li>
                </ul>
                <form action="applicant_registration" method="POST">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                
                            <h3 class="register-heading">Apply as an Employee
                                <small><?php echo @$error; ?></small>
                            </h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="first_name" placeholder="First Name *"
                                            value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="last_name" placeholder="Last Name *"
                                            value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="age" placeholder="Age *"
                                            value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email *"
                                            value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password *"
                                            value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password *"
                                            value="" />
                                            <?php echo @$password_error; ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="10" maxlength="10" name="phone" class="form-control"
                                            placeholder="Your Phone *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="m" checked>
                                                <span> Male </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="f">
                                                <span>Female </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                        <input type="text" class="form-control" name="address1" placeholder="Address Line 1 *"
                                            value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="address2" placeholder="Address Line 2 *"
                                            value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="city" placeholder="City *"
                                            value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="state" placeholder="State *"
                                            value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="country" placeholder="Country *"
                                            value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="pincode" placeholder="Pincode *"
                                            value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="edu_qualification" placeholder="Educational Qualification *"
                                            value="" />
                                    </div>
                                    <input type="submit" class="btnRegister" value="Register" name="register"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection