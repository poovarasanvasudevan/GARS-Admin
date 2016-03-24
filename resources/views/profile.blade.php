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

            <div class="box box-widget widget-user-2">
                <div tiny-calendar events="events"></div>
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
                        <div class="slim-timeline">
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

                    </div>

                    <div class="tab-pane" id="messages">
                        <div class="row">
                            <div class="col-md-3 " style="position: relative; overflow: hidden; width: auto;">
                                <div class="search-inp" style="margin-bottom: 5px;">
                                    <div class="input-group">
                                        <input class="form-control" ng-model="search" placeholder="Search..."
                                               id="search" name="search" type="text">
                                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                    </div>

                                </div>
                                <div class="slim-div" style="padding-right: 15px;width: 330px;">
                                    <ul ng-repeat="user in users  | filter:search"
                                        class="products-list product-list-in-box ">
                                        <li class="item" style="border-bottom: 1px solid #ccc;">
                                            <a href="#">
                                                <div class="no-padding">
                                                    <div class="product-img">
                                                        <img src="[[user.image]]" class="img-circle"
                                                             alt="Product Image">
                                                    </div>
                                                    <div class="product-info">
                                        <span class="product-title">[[user.firstname]] [[user.lastname]]
                                            <span class="label bg-purple pull-right">[[user.abhyasiid | uppercase]]</span></span>
                                            <span class="product-description">
                                              [[user.email]]
                                            </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div style="padding-right: 15px;width: 330px;margin-top: 10px;" class="text-center">
                                        <p ng-show="(users | filter:search).length == 0" class="error-style"><b>No User
                                                found...</b></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="slim-message" style="border: 1px solid #ccc;">
                                    <div class="direct-chat-messages" style="padding: 10px;">
                                        <!-- Message. Default to the left -->
                                        <div class="direct-chat-msg">
                                            <div class="direct-chat-info clearfix">
                                                <span class="direct-chat-name pull-left">Alexander Pierce</span>
                                                <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                                            </div>
                                            <!-- /.direct-chat-info -->
                                            <img class="direct-chat-img" src="img/default.jpg" alt="message user image">
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                                Is this template really for free? That's unbelievable!
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->

                                        <!-- Message to the right -->
                                        <div class="direct-chat-msg right">
                                            <div class="direct-chat-info clearfix">
                                                <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                                <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                                            </div>
                                            <!-- /.direct-chat-info -->
                                            <img class="direct-chat-img" src="img/default.jpg" alt="message user image">
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                                You better believe it!
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->


                                    </div>
                                </div>

                                <div style="margin-top: 5px;">
                                    <div class="">
                                        <div class="col-md-12 no-padding">

                                            <div class="input-group">
                                                <span class="input-group-btn"><button ng-click="myclick()" class="btn btn-flat  bg-purple"><i
                                                                class="fa fa-smile-o"></i></button></span>
                                                <input class="form-control" placeholder="Email" type="email">
                                                  <span class="input-group-btn "><button class="btn btn-flat"><i
                                                                  class="fa fa-send-o"></i></button></span>
                                                 <span class="input-group-btn "><button class="btn btn-flat  bg-purple">
                                                         <i
                                                                 class="fa fa-file-image-o"></i></button></span>
                                                 <span class="input-group-btn"><button class="btn btn-flat  bg-purple">
                                                         <i
                                                                 class="fa fa-camera"></i></button></span>
                                                 <span class="input-group-btn"><button class="btn btn-flat  bg-purple">
                                                         <i
                                                                 class="fa fa-file-o"></i></button></span>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="tab-pane" id="notification">
                        <div class="col-md-12">
                        </div>

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

    <script type="text/ng-template" id="templateId">
        <center>
            <div class="col-md-6 box">
                <h1>Template heading</h1>
                <p>Content goes here</p>
            </div>
        </center>

    </script>
@endsection
