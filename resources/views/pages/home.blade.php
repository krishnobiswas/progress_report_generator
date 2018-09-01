@extends('master')
@section('main_content')

<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->   
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN THEME CUSTOMIZER-->
            <div id="theme-change" class="hidden-phone">
                <i class="icon-cogs"></i>
                <span class="settings">
                    <span class="text">Theme Color:</span>
                    <span class="colors">
                        <span class="color-default" data-style="default"></span>
                        <span class="color-green" data-style="green"></span>
                        <span class="color-gray" data-style="gray"></span>
                        <span class="color-purple" data-style="purple"></span>
                        <span class="color-red" data-style="red"></span>
                    </span>
                </span>
            </div>
            <!-- END THEME CUSTOMIZER-->
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">
                Dashboard
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="{{URL::to('/')}}">Home</a>
                    <span class="divider">/</span>
                </li>
                <li class="active">
                    Dashboard
                </li>
                <li class="pull-right search-wrap">
                    {!! Form::open(['url' => '/home-search','method' => 'post']) !!}

                    <div class="input-append search-input-area">
                        <input class="" id="appendedInputButton" name="info" placeholder="Search Student Name" type="text">
                        <button class="btn btn-success" type="submit"> <i class="icon-search"></i>  </button>
                    </div>

                    {!! Form::close() !!}
                </li>
            </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->

    <h2 style="color:greenyellow" align="center"><b>
            <?php
            $message = Session::get('message');
            if ($message) {
                echo $message;
                Session::put('message', '');
            }
            ?>
        </b>
    </h2>



    <!-- BEGIN PAGE CONTENT-->
    <div class="row-fluid">
        <!--BEGIN METRO STATES-->
        <div class="metro-nav">

            <div class="metro-nav-block nav-block-green double">
                <a data-original-title="" href="{{URL::to('/add')}}">
                    <i class="icon-user"></i>
                    <div class="info"><?php echo $student_info; ?></div>
                    <div class="status">Add Student</div>
                </a>
            </div>


            <div class="metro-nav-block nav-olive">
                <a data-original-title="" href="{{URL::to('/view-student')}}">
                    <i class="icon-eye-open"></i>
                    <div class="info"></div>
                    <div class="status">View Student</div>
                </a>
            </div>

            
            <div class="metro-nav-block nav-block-orange">
                <a data-original-title="" href="{{URL::to('/add')}}">
                    <i class="icon-user"></i>
                    <div class="info"><?php echo $student_info; ?></div>
                    <div class="status">Add Student</div>
                </a>
            </div>

            <div class="metro-nav-block nav-block-red">
                <a data-original-title="" href="{{URL::to('/total_users')}}">
                    <i class="icon-user"></i>
                    <div class="info"></div>
                    <div class="status">Total Users</div>
                </a>
            </div>
        </div>
    </div>
    <div class="space10">

    </div>
    <!--END METRO STATES-->
</div>

<!-- END PAGE CONTAINER-->
@endsection
