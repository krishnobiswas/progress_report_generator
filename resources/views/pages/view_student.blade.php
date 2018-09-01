@extends('master')
@section('main_content')

<br/>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <h3>View Student</h3>
            <ul class="breadcrumb">
                <li>
                    <a href="{{URL::to('/')}}">Home</a>
                    <span class="divider">/</span>
                </li>
                <li>
                    <a href="{{URL::to('/dashboard')}}">Dashboard</a>
                    <span class="divider">/</span>
                </li>
                <li class="pull-right search-wrap">
                    {!! Form::open(['url' => '/search','method' => 'post']) !!}

                    <div class="input-append search-input-area">
                        <input class="" id="appendedInputButton" name="info" placeholder="Search Student Roll" type="text">
                        <button class="btn btn-success" type="submit"> <i class="icon-search"></i>  </button>
                    </div>

                    {!! Form::close() !!}
                </li>
                <li class="active">Student info</li>
            </ul>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN SAMPLE FORMPORTLET-->
                <div class="widget red">
                    <div class="widget-title">
                        <h3 align='center' style="color:wheat"><b><i></i>Student Info</b></h3>
                        <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
                        </span>
                    </div>

                    <h2 align='center' style="color:green"><b>
                            <?php
                            $message = Session::get('message');
                            if ($message) {
                                echo $message;
                                Session::put('message', '');
                            }
                            ?>
                        </b></h2>
                    <br/>
                    <div class="widget-body">
                        <table id="" class="table table-striped table-bordered table-advance table-hover">
                            <thead>
                                <tr>
                                    <th><i class="icon-user"></i>Student ID</th>
                                    <th><i class="icon-bookmark"></i>Student Name</th>
                                    <th><i class="icon-email"></i>Student Father's Name</th>
                                    <th><i class="icon-email"></i>Student Mother's Name</th>
                                    <th><i class="icon-email"></i>Student Roll</th>
                                    <th><i class="icon-email"></i>Student Reg</th>
                                    <th colspan="3"><i class="icon-edit-sign"></i>Setting</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($student_info as $info) { ?>
                                    <tr>

                                        <th><i class="icon-user"></i>  {{$info->stu_id}}</th>
                                        <th>{{$info->stu_name}}</th>
                                        <th>{{$info->stu_fa_name}}</th>
                                        <th>{{$info->stu_mo_name}}</th>
                                        <th>{{$info->stu_roll}}</th>
                                        <th>{{$info->stu_reg}}</th>
                                        <th><a href="{{URL::to('/edit-student/'.$info->stu_id)}}" class="btn btn-success" >Edit</a></th>
                                        <th>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#clientModal{{$info->stu_id}}">
                                                view
                                            </button>
                                            <div class="modal fade" id="clientModal{{$info->stu_id}}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Student Information</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <table class="table table-striped">
                                                                <tr>
                                                                    <td colspan="2"><b><i class="icon-user"></i> Student Name  :</b></td>
                                                                    <td colspan="2">{{$info->stu_name}}</td>

                                                                </tr>
                                                                <tr>
                                                                    <th colspan="2">Student Father's Name  :</th>
                                                                    <td colspan="2"><p>{{$info->stu_fa_name}}</p></td>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="2">Student Mother's Name :</th>
                                                                    <td colspan="2"><p>{{$info->stu_mo_name}}</p></td>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="2">Student Father's Number :</th>
                                                                    <td colspan="2"><p>{{$info->stu_fath_numb}}</p></td>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="2">Student Group :</th>
                                                                    <?php if ($info->stu_gro == 1) { ?>
                                                                        <td colspan="2">Science</td>
                                                                    <?php } else { ?>
                                                                        <td colspan="2">Humanities</td>
                                                                    <?php } ?>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="2">Student Roll :</th>
                                                                    <td colspan="2">{{$info->stu_roll}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="2">Student Reg :</th>
                                                                    <td colspan="2">{{$info->stu_reg}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="2">Student Date of Birth :</th>
                                                                    <td colspan="2">{{$info->stu_birthday}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="2">Student Admission Year :</th>
                                                                    <td colspan="2">{{$info->stu_add_year}}</td>
                                                                </tr>
                                                            </table>

                                                        </div>

                                                        <!-- Modal footer -->

                                                        <div class="modal-footer">
                                                            <div class="row">
                                                                <div class="span4">
                                                                    <a href="{{URL::to('/Student-result/'.$info->stu_id)}}"><button type="button" class="btn btn-info" style="float: left; margin-left:20px; " >Student Result</button></a>
                                                                </div>
                                                                <div class="span8">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal" >Close</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </th>
                                        <th><a href="{{URL::to('/delete-client/'.$info->stu_id)}}" class="btn btn-danger" onclick="return CheckDelete()" >Delete</a></th>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div class="pagination">
                            {{$page->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection