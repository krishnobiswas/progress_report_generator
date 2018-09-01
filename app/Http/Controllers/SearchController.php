<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Session;
use DB;

class SearchController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function SearchInfO(Request $request) {
        $data = $request->info;

        $search_info = DB::table('tbl_stu_info')
                ->where('stu_roll', $data)
                ->get();

        $search = view('pages.search')
                ->with('search_info', $search_info);
        return view('master')
                        ->with('main_content', $search)
                        ->with('page_title', 'Search');
    }
    
    public function SearchhoME(Request $request) {
        $data = $request->info;

        $search_info = DB::table('tbl_stu_info')
                ->where('stu_name','like', '%'.$data.'%')
                ->get();

        $search = view('pages.search')
                ->with('search_info', $search_info);
        return view('master')
                        ->with('main_content', $search)
                        ->with('page_title', 'Search');
    }

}
