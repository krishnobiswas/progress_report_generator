<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

class ResultController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function StuResT($id) {

        $student=DB::table('tbl_stu_info')
                ->where('tbl_stu_info.stu_id',$id)
                ->first();
        
        $all_info = DB::table('tbl_stu_sub')
                ->select('tbl_stu_sub.*', 'tbl_stu_info.stu_name', 'tbl_stu_info.stu_fa_name', 'tbl_stu_info.stu_mo_name', 'tbl_stu_info.stu_roll', 'tbl_stu_info.stu_reg', 'tbl_stu_info.stu_gro', 'tbl_stu_info.stu_birthday')
                ->join('tbl_stu_info', 'tbl_stu_info.stu_id', '=', 'tbl_stu_sub.stu_id')
                ->where('tbl_stu_sub.stu_id', $id)
                ->get();

      
        $student_result = view('pages.result')
                ->with('all_info', $all_info)
                ->with('student',$student);
        return view('master')
                        ->with('main_content', $student_result)
                        ->with('page_title', 'Student Result');
    }

    public function AddNum($sub_stu_id) {
        $all_info = DB::table('tbl_stu_sub')
                ->where('stu_id', $sub_stu_id)
                ->first();

        $stu_info = DB::table('tbl_stu_info')
                ->where('stu_id', $sub_stu_id)
                ->first();

        $add_num = view('pages.add_number')
                ->with('all_info', $all_info)
                ->with('stu_info', $stu_info);
        return view('master')
                        ->with('main_content', $add_num)
                        ->with('page_title', 'Add Student Number');
    }

}
