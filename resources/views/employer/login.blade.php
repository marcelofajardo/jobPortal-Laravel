@extends('layouts.app')
@section('title', 'Employer Login')
@section('assets')
<link href="{{ asset('css/home_style.css') }}" rel="stylesheet" id="bootstrap-css">@endsection
@section('content')  
    <div class="container-fluid register main-content">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                <h3>Welcome</h3>
                <p></p>
                <a href="register"><input type="submit" name="employee_registration" value="Employer Registration" /></a><br />
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="applicant-tab" data-toggle="tab" href="{{ URL::route('applicant.login') }}" role="tab"
                            aria-controls="applicant" aria-selected="false">Applicant</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="hirer-tab" data-toggle="tab" href="{{ URL::route('employer.login') }}" role="tab"
                            aria-controls="hirer" aria-selected="true">Employer</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form method="POST" action="employer_login">    
                    <h3 class="register-heading">Login as a Employer</h3>
                    <small><?php echo @$error; ?></small>
                        <div class="row register-form">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email *"
                                        value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password *"
                                        value="" />
                                </div>
                                <input type="submit" name="login" class="btnRegister" value="Login" />
                            </div>
                        </div>
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection