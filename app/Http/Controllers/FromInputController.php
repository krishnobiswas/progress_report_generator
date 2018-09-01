<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Session;
use DB;

class FromInputController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function SaveStuInfo(Request $request) {
//        echo '<pre>';
//        print_r($request->all());
//        exit();
        $data = array();
        $data['stu_name'] = $request->stu_name;
        $data['stu_fa_name'] = $request->stu_fa_name;
        $data['stu_fath_numb'] = $request->stu_fath_numb;
        $data['stu_mo_name'] = $request->stu_mo_name;
        $data['stu_roll'] = $request->stu_roll;
        $data['stu_reg'] = $request->stu_reg;
        $data['stu_add'] = $request->stu_add;
        $data['stu_birthday'] = $request->stu_birthday;
        $data['stu_add_year'] = $request->stu_add_year;
        $data['stu_gro'] = $request->stu_gro;
        $data['status'] = $request->status;
        
        $stu_id= DB::table('tbl_stu_info')
                ->insertGetId($data);

        if ($stu_id) {
            Session::put('stu_id',$stu_id);
            Session::put('stu_info', 'Save sutudent info');
            return Redirect::to('/sub-num');
        }
    }

    public function SaveStuNum(Request $request) {
//        echo '<pre>';
//        print_r($request->all());
//        exit();
        $data = array();
        $data['stu_id'] = $request->stu_id;
        $data['semester'] = $request->semester;  //1st semesters 
        $ban = $data['sub_ban_one'] = $request->sub_ban_one;
        $bano = $data['sub_ban_two'] = $request->sub_ban_two;
        $eng = $data['sub_eng_one'] = $request->sub_eng_one;
        $engo = $data['sub_eng_two'] = $request->sub_eng_two;
        $mat = $data['sub_mat'] = $request->sub_mat;
        $phy = $data['sub_phy'] = $request->sub_phy; //science start
        $bio = $data['sub_bio'] = $request->sub_bio;
        $h_mat = $data['sub_hig_mat'] = $request->sub_hig_mat;
        $che = $data['sub_che'] = $request->sub_che; //science end
        $eco = $data['sub_eco'] = $request->sub_eco; //manobik
        $geo = $data['sub_geo'] = $request->sub_geo;
        $his = $data['sub_his'] = $request->sub_his; //manobik end
        $rel = $data['sub_rel'] = $request->sub_rel;
        $com = $data['sub_com'] = $request->sub_com;
        
        $all=$ban+$bano+$eng+$engo+$mat+$phy+$bio+$bio+$h_mat+$che+$eco+$geo+$his+$rel+$com;
        $data['sub_all_num'] = $all;
        
        DB::table('tbl_stu_sub')->insert($data);
        Session::put('message', 'Save student and student number ');
        return Redirect::to('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rEsutaDd() {
        $data = array();
        $data['stu_id'] = $request->stu_id;
        $data['semester'] = $request->semester;  //1st semesters 
        $ban = $data['sub_ban_one'] = $request->sub_ban_one;
        $bano = $data['sub_ban_two'] = $request->sub_ban_two;
        $eng = $data['sub_eng_one'] = $request->sub_eng_one;
        $engo = $data['sub_eng_two'] = $request->sub_eng_two;
        $mat = $data['sub_mat'] = $request->sub_mat;
        $phy = $data['sub_phy'] = $request->sub_phy; //science start
        $bio = $data['sub_bio'] = $request->sub_bio;
        $h_mat = $data['sub_hig_mat'] = $request->sub_hig_mat;
        $che = $data['sub_che'] = $request->sub_che; //science end
        $eco = $data['sub_eco'] = $request->sub_eco; //manobik
        $geo = $data['sub_geo'] = $request->sub_geo;
        $his = $data['sub_his'] = $request->sub_his; //manobik end
        $rel = $data['sub_rel'] = $request->sub_rel;
        $com = $data['sub_com'] = $request->sub_com;
        
        $all=$ban+$bano+$eng+$engo+$mat+$phy+$bio+$bio+$h_mat+$che+$eco+$geo+$his+$rel+$com;
        $data['sub_all_num'] = $all;
        
        DB::table('tbl_stu_sub')->insert($data);
        Session::put('message', 'Save student and student number ');
        return Redirect::to('/');
    }

    public function Update_student(Request $request){
        
        
//       echo '<pre>';
//        print_r($request->all());
//        exit();
        $data = array();
        $data['stu_name'] = $request->stu_name;
        $data['stu_fa_name'] = $request->stu_fa_name;
        $data['stu_fath_numb'] = $request->stu_fath_numb;
        $data['stu_mo_name'] = $request->stu_mo_name;
        $data['stu_roll'] = $request->stu_roll;
        $data['stu_reg'] = $request->stu_reg;
        $data['stu_add'] = $request->stu_add;
        $data['stu_birthday'] = $request->stu_birthday;
        $data['stu_add_year'] = $request->stu_add_year;
        $data['stu_gro'] = $request->stu_gro;
        $data['status'] = $request->status;
        $id=$request->stu_id;
        
        DB::table('tbl_stu_info')
                ->where('stu_id', $id)
                ->update($data);

            Session::put('stu_info', 'Update sutudent info');
            return Redirect::to('/edit-student/'.$id);
        }
    }
    
