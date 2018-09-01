@extends('master')
@section('main_content')
<br/>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <h3>Add Student Subject Number</h3>
            <ul class="breadcrumb">
                <li>
                    <a href="{{URL::to('/')}}">Home</a>
                    <span class="divider">/</span>
                </li>
                <li>
                    <a href="{{URL::to('/dashboard')}}">Dashboard</a>
                    <span class="divider">/</span>
                </li>
                <li class="active">Add Student Subject Number</li>

            </ul>
        </div>

        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN SAMPLE FORMPORTLET-->
                <div class="widget green">
                    <div class="widget-title">
                        <h3 align='center' style="color:wheat"><marquee><b>ADD STUDENT SUBJECT NUMBER</b></marquee></h3>
                        <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
                        </span>
                    </div>
                    <div class="widget-body">
                        <!-- BEGIN FORM-->
                        {!! Form::open(['url' => '/save-student-number','method' => 'post']) !!}

                        <br/>
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
                                    <label class="control-label" >Bangla 1st</label>
                                    <div class="controls controls-row">
                                        <input type="number" required="" class="input-block-level" placeholder="Enter Sbject Number" maxlength="2"  name="sub_ban_one">
                                        <input type="hidden" value="<?php echo Session::get('stu_id'); ?>" name="stu_id">
                                    </div>
                                </div>
                            </div>
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label" >Bangla 2nd</label>
                                    <div class="controls controls-row">
                                        <input type="number" required="name" class="input-block-level" placeholder="Enter Suject Number" maxlength="2" name="sub_ban_two">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label" >English 1st</label>
                                    <div class="controls controls-row">
                                        <input type="number" required="number" class="input-block-level" placeholder="Enter Sbject Number" maxlength="2"  name="sub_eng_one">
                                    </div>
                                </div>
                            </div>
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label" >English 2nd</label>
                                    <div class="controls controls-row">
                                        <input type="number" required="name" class="input-block-level" placeholder="Enter Suject Number" maxlength="2" name="sub_eng_two">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label" > Mathematica </label>
                                    <div class="controls controls-row">
                                        <input type="number"  class="input-block-level" placeholder="Enter Subject Number" maxlength="2" name="sub_mat">
                                    </div>
                                </div>
                            </div>
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label" >Religion</label>
                                    <div class="controls controls-row">
                                        <input type="number"  class="input-block-level" placeholder="Enter Subject Number" maxlength="2" name="sub_rel">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php if ($stu_gro->stu_gro == 1) { ?>

                            <div class="row-fluid">
                                <div class="span6">
                                    <div class="control-group">
                                        <label class="control-label" >Physics</label>
                                        <div class="controls controls-row">
                                            <input type="number"  class="input-block-level" placeholder="Enter Subject Number"  name="sub_phy">
                                        </div>
                                    </div>
                                </div>
                                <div class="span6">
                                    <div class="control-group">
                                        <label class="control-label" >Biology</label>
                                        <div class="controls controls-row">
                                            <input type="number"  class="input-block-level" placeholder="Enter Subject Number"  name="sub_bio">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row-fluid">
                                <div class="span6">
                                    <div class="control-group">
                                        <label class="control-label" >Higher Mathematica</label>
                                        <div class="controls controls-row">
                                            <input type="number"  class="input-block-level" placeholder="Student Subject Number" maxlength="2" name="sub_hig_mat">
                                        </div>
                                    </div>
                                </div>
                                <div class="span6">
                                    <div class="control-group">
                                        <label class="control-label" >Chemistry</label>
                                        <div class="controls controls-row">
                                            <input type="number"  class="input-block-level" placeholder="Enter Subject Number" maxlength="2"  name="sub_che">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } else { ?>

                            <div class="row-fluid">
                                <div class="span6">
                                    <div class="control-group">
                                        <label class="control-label" >Economy</label>
                                        <div class="controls controls-row">
                                            <input type="number"  class="input-block-level" placeholder="Enter Subject Number"  name="sub_eco">
                                        </div>
                                    </div>
                                </div>
                                <div class="span6">
                                    <div class="control-group">
                                        <label class="control-label" >Geography</label>
                                        <div class="controls controls-row">
                                            <input type="number"  class="input-block-level" placeholder="Enter Subject Number"  name="sub_geo">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row-fluid">
                                <div class="span6">
                                    <div class="control-group">
                                        <label class="control-label" >History</label>
                                        <div class="controls controls-row">
                                            <input type="number"  class="input-block-level" placeholder="Student Subject Number" maxlength="2" name="sub_his">
                                        </div>
                                    </div>
                                </div>
                                <div class="span6">
                                    <div class="control-group">
                                        <label class="control-label">Science</label>
                                        <div class="controls controls-row">
                                            <input type="number"  class="input-block-level" placeholder="Enter Subject Number" maxlength="2"  name="sub_sci">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>

                        <div class="row-fluid">
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label" >semester</label>
                                    <div class="controls controls-row">
                                        <select class="span12" data-placeholder="Student Group" name="semester" tabindex="1" required="select your option !!">
                                            <option value="">----Select semester----</option>
                                            <option value="1">--1st semester--</option>
                                            <option value="2">--2nd semester--</option>
                                            <option value="3">--3rd semester--</option>
                                        </select>
                                    </div>
                                </div>
                            </div>      
                            <div class="span6">
                                <div class="control-group">
                                    <label class="control-label" >Computer</label>
                                    <div class="controls controls-row">
                                        <input type="number"  class="input-block-level" placeholder="Enter Subject Number" maxlength="2" name="sub_com">
                                    </div>
                                </div>
                            </div>      
                        </div>


                        <div class="form-actions">
                            <div class="row-fluid">
                                <div class="span6">
                                    <a href="{{URL::to('/')}}" button type="button" class="btn btn-block">Cancel</a>
                                </div>
                                <div class="span6">
                                    <button type="submit" class="btn btn-success btn-block">Save</button>
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
@endsection
