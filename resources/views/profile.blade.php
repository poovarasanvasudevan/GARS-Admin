@extends("layout.layout")

@section("toolbar")
    @include("layout.maintoolbar",['sidebar'=>false])
@endsection

@section("footer")
    @include("layout.footer")
@endsection

@section("content")

    <div class="" style="margin-top: 20px;">
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
                        <li><a href="#"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;Home <span class="pull-right badge bg-blue">31</span></a></li>
                        <li><a href="#"><i class="fa fa-comment-o"></i>&nbsp;&nbsp;&nbsp;Messages <span class="pull-right badge bg-aqua">5</span></a></li>
                        <li><a href="#"><i class="fa fa-bell-o"></i>&nbsp;&nbsp;&nbsp;Notification <span class="pull-right badge bg-green">12</span></a></li>
                        <li><a href="#"><i class="fa fa-user-secret"></i>&nbsp;&nbsp;&nbsp;Account Settings <span class="pull-right badge bg-green">12</span></a></li>
                        <li><a href="#"><i class="fa fa-cog"></i>&nbsp;&nbsp;&nbsp;Settings <span class="pull-right badge bg-red">842</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- /.widget-user -->

        </div>
    </div>
@endsection
