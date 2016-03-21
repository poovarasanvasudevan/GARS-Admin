@extends('layout.layout')

@section('toolbar')

    @include('layout.toolbar')

@endsection


@section('content')

    <div class="col-xs-12">
        <div ng-controller="forgetpassword" class="col-md-8 col-md-offset-2">
            <wizard>
                <wz-step wz-title="Starting" class="wizard-cls">
                    <div class="wizardbody">
                        <center><h2>Enter your Account Details</h2></center>
                        <div class="col-md-4 col-md-offset-4" style="margin-top: 30px">
                            <div class="center-block">
                                <label for="abhyasiid">Adhyasi Id</label>
                                <input type="text" name="abhyasiid" id='abhyasiid' ng-model="abhyasiid"
                                       class="form-control">
                                <label class="error-style pull-right">[[aerror]]</label>
                            </div>

                            <br/>

                            <div class="center-block">
                                <label for="abhyasiid">Email&nbsp;<i class="fa fa-info-circle" tooltips
                                                                     tooltip-template="{{trans('login.forgetemail')}}"></i></label>
                                <input type="email" name="email" class="form-control">
                            </div>

                            <div class="center-block margin">
                                <input type="checkbox" ng-model="terms">
                                <label tooltips tooltip-template="{{trans('login.conditiontip')}}">Agree terms and
                                    condition</label><label class="error-style pull-right">[[cerror]]</label>
                            </div>

                            <center><label class="error-style">[[net]]</label></center>

                        </div>

                    </div>
                    <div class="row step-footer">

                        <div class="pull-right">
                            <button ng-click="processFirst(abhyasiid,terms)" class="btn btn-flat  bg-purple">Next&nbsp;&nbsp;<i
                                        class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </wz-step>
                <wz-step wz-title="Confirm" class="wizard-cls">
                    <div class="wizardbody">
                        <center><h2>Confirm your Account</h2></center>
                        <br/>
                        <div class="col-md-4 col-md-offset-4">
                            <div class="box box-danger">
                                <div class="box-body box-profile">
                                    <img class="profile-user-img img-responsive img-circle"
                                         src="[[forgetimage]]" alt="User profile picture">

                                    <h3 class="profile-username text-center">[[forgetname]]</h3>

                                    <p class="text-muted text-center">[[forgetid]]</p>

                                    <ul class="list-group list-group-unbordered">
                                        <li class="list-group-item">
                                            <b>Abhyasi Id </b> <a class="pull-right">[[forgetid]]</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Email</b> <a class="pull-right">[[forgetemail]]</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Mobile Number</b> <a class="pull-right">[[forgetmobile]]</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>
                    <div class="row step-footer">

                        <div class="pull-left">
                            <button wz-previous class="btn btn-flat  bg-purple"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Not
                                me
                            </button>
                        </div>

                        <div class="pull-right">
                            <button wz-next class="btn btn-flat  bg-purple">Confirm&nbsp;&nbsp;<i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </wz-step>
                <wz-step wz-title="Reset Options" class="wizard-cls">
                    <div class="wizardbody">
                        <center><h2>Choose Password reset Option</h2></center>
                        <br/>
                        <br/>
                        <br/>
                        <div class="col-md-4 col-md-offset-4">
                            <div>
                                <input type="radio" name="passwordresetoptions"  value="admin" ng-model="pwd">&nbsp;
                                <label>Using Admin Reset</label>
                                <p>This option sends the notification to admin to reset password this is slow methods
                                    that can responds only when admin sees your notification and reset password</p>
                            </div>
                            <br/>
                            <div ng-hide="hideemail">
                                <input type="radio" name="passwordresetoptions"   value="email" ng-model="pwd">&nbsp;
                                <label>Using Email Verification <italic>(recommended)</italic></label>
                                <p>This option sends the verification code to your email using that versification you
                                    can reset the password in next step</p>
                            </div>

                            <br/>
                            <br/>
                            <center><label class="error-style">[[verror]]</label></center>
                        </div>
                    </div>
                    <div class="row step-footer">

                        <div class="pull-right">
                            <button ng-click="verifiyMethod(pwd)" class="btn btn-flat  bg-purple">Next&nbsp;&nbsp;<i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </wz-step>

                <wz-step wz-title="Verification" class="wizard-cls" wz-disabled="[[disabled]]">
                    <div class="wizardbody">
                        <center><h2>Enter Verification Code</h2></center>
                        <p>Even more steps!!</p>

                    </div>
                    <div class="row step-footer">

                        <div class="pull-right">
                            <button wz-next class="btn btn-flat  bg-purple">Next&nbsp;&nbsp;<i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </wz-step>

                <wz-step wz-title="New Password" class="wizard-cls" wz-disabled="[[disabled]]">
                    <div class="wizardbody">
                        <center><h2>Enter your New Password</h2></center>
                        <p>Even more steps!!</p>
                    </div>
                    <div class="row step-footer">

                        <div class="pull-right">
                            <button wz-next class="btn btn-flat bg-purple">Next&nbsp;&nbsp;<i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </wz-step>


                <wz-step wz-title="Finish" class="wizard-cls">
                    <div class="wizardbody">
                        <center><h2>Success</h2>
                            <div>
                                <i class="fa fa-check text-primary fa-big"></i>
                            </div>
                            <h5>Your password is reset Immediately if you choosed Email verification method <br/>(or)
                                <br/>it takes some time if you choosed Admin request menthod to reset</h5>
                        </center>
                    </div>
                    <div class="row step-footer">

                        <div class="pull-right">
                            <a class="btn btn-flat bg-purple" href="{{URL::to('')}}">Login Now&nbsp;&nbsp;<i
                                        class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </wz-step>
            </wizard>
        </div>
    </div>
@endsection