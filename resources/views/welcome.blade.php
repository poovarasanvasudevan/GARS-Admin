@extends('layout.layout')

@section('toolbar')

    @include('layout.toolbar')

@endsection


@section('content')



    <div class="login-box" ng-controller="logincontroller">
        <div class="login-logo">
            <a href=""><b>{{trans('login.firstplaceholder')}}</b>{{trans('login.lastplaceholder')}}</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">{{trans('login.signinplaceholder')}}</p>

            <form action="" method="post">
                <div class="form-group has-feedback">
                    <input class="form-control" ng-model="username" placeholder="{{trans('login.usernameplaceholder')}}" type="text">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input class="form-control" ng-model="password" placeholder="{{trans('login.passwordplaceholder')}}" type="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">

                    <!-- /.col -->
                    <div class="col-xs-4 col-xs-offset-8">
                        <button type="button" ng-click="login()" class="btn bg-purple btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


            <!-- /.social-auth-links -->

            <a href="{{URL::to('forget')}}">I forgot my password</a><br>

            <br/>
            <br/>
            <center><label class="error-style">[[error]]</label></center>
        </div>
    </div>
    <!-- /.login-box-body -->


@endsection