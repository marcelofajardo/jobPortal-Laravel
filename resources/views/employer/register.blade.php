@extends('layouts.app')

@section('title', 'Employer Registration')
@section('assets')
<link href="{{ asset('css/home_style.css') }}" rel="stylesheet" id="bootstrap-css">@endsection
@section('content')
    <div class="container-fluid register main-content">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                <h3>Welcome</h3>
                <p>You are just few steps away from being part of our team</p>
                <a href="login"><input type="submit" name="employer_login" value="Employer Login" /></a><br />
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="applicant-tab" data-toggle="tab" href="{{ URL::route('applicant.register') }}"
                            role="tab" aria-controls="applicant" aria-selected="false">Applicant</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="hirer-tab" data-toggle="tab" href="{{ URL::route('employer.register') }}"
                            role="tab" aria-controls="hirer" aria-selected="true">Employer</a>
                    </li>
                </ul>
                <form action="employer_registration" method="POST">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Register as an Employer
                        <small><?php echo @$error; ?></small> 
                        </h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Name of Employer *"
                                        value="" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email Address *"
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
                                <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="uploadLogo" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Upload Logo *</label>
                                    </div>&nbsp;
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="location" placeholder="Location *"
                                        value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text"  name="phone" class="form-control" placeholder="Your Phone *" value="" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="About the organization... *"
                                        name="about"></textarea>
                                </div>
                                <input type="submit" class="btnRegister" name="register" value="Register" />
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>

@endsection