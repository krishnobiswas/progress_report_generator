<div style="margin-top:200px;">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div style="width:650px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
                    <div style="width:600px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
                        <span style="font-size:50px; font-weight:bold">Taraganj Pilot High School</span>
                        <br><hr/><br>
                        <span style="font-size:20px"><i>This is to certify that</i></span>
                        <br><br>
                        <span style="font-size:25px"><b><?php echo $student_info->stu_name; ?></b></span>
                        <br/><br/>
                        <span style="font-size:20px">Roll ON : <b><?php echo $student_info->stu_roll; ?></b></span>
                        <br/><br/>
                        <span style="font-size:20px">Father's Name : <b><?php echo $student_info->stu_fa_name; ?></b></span><br/><br/><br/>
                        <br/><br/>
                        <span style="font-size:20px"><i>has completed the <?php
                                if ($student_result->semester == 1) {
                                    echo "1st Semester";
                                } elseif ($student_result->semester == 2) {
                                    echo "2nd Semester";
                                } else {
                                    echo "3rd Semeste";
                                }
                                ?></i></span> <br/><br/>

                        <span style="font-size:20px">with score of grade<b><?php $num = $student_result->sub_all_num; ?>

                                <?php if ($num >= 1100) { ?>
                                    "A+"
                                <?php } elseif ($num >= 880) { ?>
                                    "A"
                                <?php } elseif ($num >= 660) { ?>
                                    "A-"
                                <?php } elseif ($num >= 440) { ?>
                                    "B"
                                <?php } elseif ($num >= 440) { ?>
                                    "C"
                                <?php } elseif ($num >= 363) { ?>
                                    "D"
                                <?php } else { ?>
                                    "Fell"
                                <?php } ?></b></span> <br/><br/><br/><br/>

                        <span style="font-size:25px"><i>Date of Birth</i></span><br>
                        <br/>
                        {{$student_info->stu_birthday}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>