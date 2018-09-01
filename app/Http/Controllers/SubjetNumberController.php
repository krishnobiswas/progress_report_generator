<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Session;
use DB;

class SubjetNumberController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function SubNum() {

        $stu_id = Session::get('stu_id');

        $stu_gro = DB::table('tbl_stu_info')
                ->where('stu_id', $stu_id)
                ->first();

        $sub_num = view('pages.subject_number')
                ->with('stu_gro', $stu_gro);
        return view('master')
                        ->with('mani_contant', $sub_num)
                        ->with('page_title', 'Add Subject Number');
    }

}
