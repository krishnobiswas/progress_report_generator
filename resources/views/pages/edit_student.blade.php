@extends('master')
@section('main_content')
<br/>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <h3>Add Student</h3>
            <ul class="breadcrumb">
                <li>
                    <a href="{{URL::to('/')}}">Home</a>
                    <span class="divider">/</span>
                </li>

                <li class="active">Edit Student</li>

            </ul>
        </div>

        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN SAMPLE FORMPORTLET-->
                <div class="widget green">
                    <div class="widget-title">
                        <h3 align='center' style="color:wheat"><marquee><b>EDIT STUDENT</b></marquee></h3>
                        <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
                        </span>
                    </div>
                    <div class="widget-body">
                        <!-- BEGIN FORM-->
                        {!! Form::open(['url' => '/edit_student_info','method' => 'post','name'=>'edit_post']) !!}

                        <h2 style="color:greenyellow" align="center"><b>
                                <?php
                                $message = Session::get('stu_info');
                                if ($message) {
                                    echo $message;
                                    Session::put('stu_info', '');
                                }
                                ?>
                            </b>
                        </h2>
                        <hr/>
                        <br/>

                        <div class="row-fluid">
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label" >Student</label>
                                    <div class="controls controls-row">
                                        <input type="text" required="name" value="{{$student->stu_name}}" class="input-block-level" placeholder="Enter Student Name"  name="stu_name">
                                        <input type="hidden" value="{{$student->stu_id}}"  name="stu_id">
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label" >Student Address</label>
                                    <div class="controls controls-row">
                                        <input type="text" required="name" value="{{$student->stu_add}}" class="input-block-level" placeholder="Enter Student Address"  name="stu_add">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label" >Student Father's Name</label>
                                    <div class="controls controls-row">
                                        <input type="text"  class="input-block-level" value="{{$student->stu_fa_name}}" placeholder="Enter Student Father's Name"  name="stu_fa_name">
                                    </div>
                                </div>
                            </div>
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label" >Student Mother's Name</label>
                                    <div class="controls controls-row">
                                        <input type="text"  class="input-block-level" value="{{$student->stu_mo_name}}" placeholder="Enter Student Mother's Name"  name="stu_mo_name">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">          
                                <div class="span12">
                                    <div class="control-group">
                                        <label class="control-label" >Student Father's Mobile Number</label>
                                        <div class="controls controls-row">
                                            <input type="number"  class="input-block-level" placeholder="Enter Student Father's Mobile Number " value="{{$student->stu_fath_numb}}"  name="stu_fath_numb" maxlength="14">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label" >Student Roll</label>
                                    <div class="controls controls-row">
                                        <input type="text"  class="input-block-level" value="{{$student->stu_roll}}" placeholder="Enter Student Roll"  name="stu_roll">
                                    </div>
                                </div>
                            </div>
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label" >Student Reg</label>
                                    <div class="controls controls-row">
                                        <input type="text"  class="input-block-level" value="{{$student->stu_reg}}" placeholder="Enter Student Reg"  name="stu_reg">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row-fluid">
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label" >Student Date of Birth</label>
                                    <div class="controls controls-row">
                                        <input type="date"  value="{{$student->stu_birthday}}" class="input-block-level" placeholder="Student Date of Birth"  name="stu_birthday">
                                    </div>
                                </div>
                            </div>
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label" >Student Admission Year</label>
                                    <div class="controls controls-row">
                                        <input type="date" value="{{$student->stu_add_year}}" class="input-block-level" placeholder="Enter Student Admission Year"  name="stu_add_year">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label" >Student Group</label>
                                    <div class="controls controls-row">
                                        <select class="span12" data-placeholder="Student Group" name="stu_gro" tabindex="1" required="select your option !!">
                                            <option value="">Select Student Group</option>
                                            <option value="1">--Science--</option>
                                            <option value="0">--Humanities--</option>
                                        </select>
                                    </div>
                                </div>
                            </div>      
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label" >Student Status</label>
                                    <div class="controls controls-row">
                                        <select class="span12" data-placeholder="Choose a Category" name="status" tabindex="1" required="select your option !!">
                                            <option value="">Select Student Status</option>
                                            <option value="1">--Regular--</option>
                                            <option value="0">--E-Regular--</option>
                                        </select>
                                    </div>
                                </div>
                            </div>      
                        </div>

                        <div class="form-actions">
                            <div class="row-fluid">
                                <div class="span6">
                                    <a href="{{URL::to('/view-student')}}" button type="button" class="btn btn-block">Cancel</a>
                                </div>
                                <div class="span6">
                                    <a href="{{}}"> <button type="submit" class="btn btn-success btn-block">Update</button>
                                </div>
                            </div>
                            {!! Form::close() !!}

                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    document.forms['edit_post'].elements['stu_gro'].value = '<?php echo $student->stu_gro ?>';
    document.forms['edit_post'].elements['status'].value = '<?php echo $student->status ?>';

</script>
    @endsection