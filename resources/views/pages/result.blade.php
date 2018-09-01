@extends('master')
@section('main_content')

<br/>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <h3>Result Set</h3>
            <ul class="breadcrumb">
                <li>
                    <a href="{{URL::to('/')}}">Home</a>
                    <span class="divider">/</span>
                </li>
                <li>
                    <a href="{{URL::to('/')}}">Dashboard</a>
                    <span class="divider">/</span>
                </li>

                <li class="active">Student</li>
            </ul>
        </div>

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="space12">

                    <div class="row">
                        <div class="span12">
                            <h3 align="center"><i class="icon-user"></i><b> Student Name :</b> {{$student->stu_name}}</h3>
                        </div>
                        <div class="row">
                            <div class="span6">
                                <h3 align="center"><i class="icon-user"></i><b> Student Father'S Name :</b> {{$student->stu_fa_name}}</h3> 
                            </div>
                            <div class="span6">
                                <h3 align="center"><i class="icon-user"></i><b> Student Mother'S Name :</b> {{$student->stu_mo_name}}</h3> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="span6">
                                <h3 align="center"><b> * Student Roll :</b> {{$student->stu_roll}}</h3> 
                            </div>
                            <div class="span6">
                                <h3 align="center"><b> * Student Reg :</b> {{$student->stu_reg}}</h3> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="span12"> 
                                <h3 align="center"><b> * Student Father's Mobile :</b> {{$student->stu_fath_numb}}</h3> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br/>
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN SAMPLE FORMPORTLET-->
                <div class="widget red">
                    <div class="widget-title">
                        <h3 align='center' style="color:wheat"><b>Student Result</b></h3>
                        <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>

                        </span>

                    </div>


                    <div class="widget-body">
                        <table id="" class="table table-striped table-bordered table-advance table-hover">

                            <thead>

                                <tr>
                                    <th><small>Semester</small></th>
                                    <th><small>English</small></th>
                                    <th><small>English 2nd</small></th>
                                    <th><small>Bangla</small></th>
                                    <th><small>Bangla 2nd</small></th>
                                    <th><small>Mathematic</small></th>

                                    <?php if ($student->stu_gro == 1) { ?>

                                        <th><small>Physics</small></th>
                                        <th><small>Chemistry</small></th>
                                        <th><small>Biology</small></th>
                                        <th><small>Higher Mathematic</small></th>

                                    <?php } else { ?>

                                        <th><small>Economy</small></th>
                                        <th><small>Geography</small></th>
                                        <th><small>History</small></th>
                                        <th><small>Science</small></th>

                                    <?php } ?>

                                    <th><small>Computer</small></th>
                                    <th><small>Religion</small></th>
                                    <th><small>point</small></th>
                                    <th><small>Add Student Number</small></th>
                                    <th><small>Certificate</small></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($all_info as $info) { ?>
                                    <tr>
 
                                        <td>{{$info->semester}} Semester</td>
                                       
                                        <td>{{$info->sub_eng_one}}</td>
                                        <td>{{$info->sub_eng_two}}</td>
                                        <td>{{$info->sub_ban_one}}</td>
                                        <td>{{$info->sub_ban_two}}</td>
                                        <td>{{$info->sub_mat}}</td>

                                        <?php if ($info->stu_gro == 1) { ?>

                                            <td>{{$info->sub_phy}}</td>
                                            <td>{{$info->sub_che}}</td>
                                            <td>{{$info->sub_bio}}</td>
                                            <td>{{$info->sub_hig_mat}}</td>

                                        <?php } else { ?>

                                            <td>{{$info->sub_eco}}</td>
                                            <td>{{$info->sub_geo}}</td>
                                            <td>{{$info->sub_his}}</td>
                                            <td>{{$info->sub_sci}}</td>

                                        <?php } ?>

                                        <td>{{$info->sub_com}}</td>
                                        <td>{{$info->sub_rel}}</td> 

                                        <?php $num = $info->sub_all_num; ?>

                                        <?php if ($num >= 1100) { ?>
                                            <td>A+</td>
                                        <?php } elseif ($num >= 880) { ?>
                                            <td>A</td>
                                        <?php } elseif ($num >= 660) { ?>
                                            <td>A-</td>
                                        <?php } elseif ($num >= 440) { ?>
                                            <td>B</td>
                                        <?php } elseif ($num >= 440) { ?>
                                            <td>C</td>
                                        <?php } elseif ($num >= 363) { ?>
                                            <td>D</td>
                                        <?php } else { ?>
                                            <td style="color: red;">Fell</td>
                                        <?php } ?>
                                            
                                        <?php if ($info->semester < 3) { ?>
                                            <th><a href="{{URL::to('/add-num/'.$info->stu_id)}}" class="btn btn-success" >Add Number</a></th>
                                        <?php } else { ?>
                                            <th><a href="{{URL::to('/')}}" class="btn btn-success" >Home</a></th>
                                        <?php } ?>
                                            
                                        <th><a href="{{URL::to('/create-cerificate/'.$info->semester.'/'.$info->stu_id)}}" type="btn" class="btn btn-primary">Certificate</a></th>
                                       
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
