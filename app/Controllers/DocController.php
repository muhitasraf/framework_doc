<?php

namespace App\Controllers;

use App\Models\DashBoard;
use Core\DB;

class DocController extends Controller{
    public $dashboard;
    public function __construct(){
        $this->dashboard = new DashBoard();
    }
    public function index(){
        $title = 'Introduction';
        $category = DB::table('category')->fetchAll();
        return view('doc/index',compact('title','category'));
    }

    public function create(){
        $title = 'Create U';
        return view('doc/create',compact('title'));
    }

    public function show($request){
        $details = ""; 
        $title = "";
        $category = DB::table('category')->fetchAll();
        $id = $request['id'];
        $details = DB::table('description')->where('cat_id',$id)->fetch();

        if(!empty($details['title'])){
            $title = $details['title'];
        }
       
        return view('doc/show',compact('title','details','category'));
    }

}