<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use Session;
use DB;


class StudentinfoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {
        $student_info = DB::table('tbl_stu_info')
                ->get()
                ->count();
        $home = view('pages.home')
                ->with('student_info', $student_info);
        return view('master')
                        ->with('main_content', $home)
                        ->with('page_title', 'Auto Certificate');
    }

    public function addStudeNT() {
        $add_student = view('pages.add_student');
        return view('master')
                        ->with('main_content', $add_student)
                        ->with('page_title', 'Add Student');
    }

    public function viEwstudeNT() {

        $student_info = DB::table('tbl_stu_info')
                ->get();

        $page = DB::table('tbl_stu_info')->paginate(2);


        $view_student = view('pages.view_student')
                ->with('student_info', $student_info)
                ->with('page', $page);
        return view('master')
                        ->with('main_content', $view_student)
                        ->with('page_title', 'View Student');
    }

    public function DeleTEclient($stu_id) {
        DB::table('tbl_stu_info')
                ->where('stu_id', $stu_id)
                ->delete();
        Session::put('message', 'Delete Student');
        Redirect::to('/view-student');
    }

    public function EditStudent($id) {
        
        $student = DB::table('tbl_stu_info')
                ->where('stu_id', $id)
                ->first();

        $edit_student = view('pages.edit_student')
                ->with('student',$student);
        return view('master')
                        ->with('main_content', $edit_student)
                        ->with('page_title', 'Edit Student');
    }

    public function AdminauthCheck() {
        $id = Session::get('id');

        if ($id) {
            return Redirect::to('/')
                            ->send();
        } else {
            return Redirect::to('/abc');
        }
    }

}
