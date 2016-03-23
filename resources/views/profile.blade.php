@extends("layout.layout")

@section("toolbar")
    @include("layout.maintoolbar",['sidebar'=>false])
@endsection

@section("footer")
    @include("layout.footer")
@endsection

@section("content")

    <div class="" style="margin-top: 20px;" ng-controller="profilecontroller">
        <div class="col-md-3">

            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-purple">
                    <div class="widget-user-image">
                        <img class="img-circle" src="{{Auth::user()->image}}" alt="User Avatar">
                    </div>
                    <!-- /.widget-user-image -->
                    <h3 class="widget-user-username">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</h3>
                    <h5 class="widget-user-desc">{{Auth::user()->abhyasiid}}</h5>
                    <h5 class="widget-user-desc">{{Auth::user()->email}}</h5>
                </div>
                <div class="box-footer no-padding">
                    <ul class="nav nav-stacked">
                        <li><a href="#"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;Home <span
                                        class="pull-right badge bg-blue">31</span></a></li>
                        <li><a href="#"><i class="fa fa-comment-o"></i>&nbsp;&nbsp;&nbsp;Messages <span
                                        class="pull-right badge bg-aqua">5</span></a></li>
                        <li><a href="#"><i class="fa fa-bell-o"></i>&nbsp;&nbsp;&nbsp;Notification <span
                                        class="pull-right badge bg-green">12</span></a></li>
                        <li><a href="#"><i class="fa fa-user-secret"></i>&nbsp;&nbsp;&nbsp;Account Settings <span
                                        class="pull-right badge bg-green">12</span></a></li>
                        <li><a href="#"><i class="fa fa-cog"></i>&nbsp;&nbsp;&nbsp;Settings <span
                                        class="pull-right badge bg-red">842</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- /.widget-user -->

        </div>

        <div class="col-md-9">


            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a aria-expanded="true" href="#activity" data-toggle="tab">Activity</a></li>
                    <li class=""><a aria-expanded="false" href="#timeline" data-toggle="tab">Timeline</a></li>
                    <li class=""><a aria-expanded="false" href="#messages" data-toggle="tab">Messages</a></li>
                    <li class=""><a aria-expanded="false" href="#notification" data-toggle="tab">Notifications</a></li>
                    <li class=""><a aria-expanded="false" href="#accounts" data-toggle="tab">Accounts</a></li>
                    <li class=""><a aria-expanded="false" href="#settings" data-toggle="tab">System Settings</a></li>
                    <li class=""><a aria-expanded="false" href="#mailsetting" data-toggle="tab">Email</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="activity">

                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="timeline">
                        <ul class="timeline timeline-inverse" ng-repeat="act in activity">
                            <li class="time-label">
                                <span class="bg-red">
                                  [[act.date]]
                                </span>
                            </li>

                            <li>
                                <i class="fa fa-users bg-blue"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> [[act.time]]</span>

                                    <h3 class="timeline-header"><a href="#">[[act.name]]</a></h3>

                                    <div class="timeline-body">
                                        [[act.desc]]
                                    </div>
                                    <div class="timeline-footer">
                                        <a class="btn btn-primary btn-xs">Read more</a>
                                        <a class="btn btn-danger btn-xs">Delete</a>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>

                    <div class="tab-pane" id="messages">


                        <div class="">
                            <div class="col-md-3  no-margin no-padding slim-div " style="position: relative; overflow: hidden; width: auto;">
                                <ul ng-repeat="user in users" class="products-list product-list-in-box ">
                                    <li class="item" style="border-bottom: 1px solid #ccc;">
                                        <a href="#">
                                            <div class="no-padding">
                                                <div class="product-img">
                                                    <img src="[[user.image]]" alt="Product Image">
                                                </div>
                                                <div class="product-info">
                                        <span class="product-title">[[user.firstname]] [[user.lastname]]
                                            <span class="label label-warning pull-right">[[user.abhyasiid]]</span></span>
                                            <span class="product-description">
                                              [[user.email]]
                                            </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-9">


                            </div>

                        </div>


                    </div>

                    <div class="tab-pane" id="notification">

                    </div>

                    <div class="tab-pane" id="accounts">

                    </div>
                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="settings">

                    </div>
                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="mailsettings">

                    </div>
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->

        </div>
    </div>
@endsection
