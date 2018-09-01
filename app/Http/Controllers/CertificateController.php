<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use PDF;
use DB;

class CertificateController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CerTiFicaTE($semester, $stu_id) {

        $student_info = DB::table('tbl_stu_info')
                ->where('tbl_stu_info.stu_id', $stu_id)
                ->first();

        $student_result = DB::table('tbl_stu_sub')
                ->where('tbl_stu_sub.stu_id', $stu_id)
                ->where('tbl_stu_sub.semester', $semester)
                ->first();
        
         $html = view('pages.cretificate',['student_info'=>$student_info,'student_result'=>$student_result]);
        //$pdf->loadHTML('<h1>Test</h1>');
        return PDF::loadHtml($html)->stream();

//        $certificate = view('pages.cretificate')
//                ->with('student_info', $student_info)
//                ->with('student_result', $student_result);
//        return view('master')
//                        ->with('main_content', $certificate)
//                        ->with('page_title', 'Create Certificate');
    }

//    public function pdf($semester, $stu_id) {
//        
//        $student_info = DB::table('tbl_stu_info')
//                ->where('tbl_stu_info.stu_id', $stu_id)
//                ->first();
//
//        $student_result = DB::table('tbl_stu_sub')
//                ->where('tbl_stu_sub.stu_id', $stu_id)
//                ->where('tbl_stu_sub.semester', $semester)
//                ->first();
//        
//         $file_name=$stu_id."certificate.pdf";
//         $pdf=PDF::loadView('pages.cretificate',['student_info'=>$student_info,'student_result'=>$student_result]);
//          return $pdf->download($file_name);
//     }
//   

}
