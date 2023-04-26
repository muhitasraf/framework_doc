<?php

namespace App\Controllers;

use App\Models\Description;
use Core\DB;

class DescriptionController extends Controller{

    public $description;
    public function __construct(){
        $this->description = new Description();
    }

    public function index(){
        $title = 'Description List';
        $description = Description::table('description')->fetchAll();
        return view('description/index',compact('title','description'));
    }

    public function create(){
        $title = 'Create New Description';
        $category = Description::table('category')->fetchAll();
        return view('description/create',compact('title','category'));
    }

    public function store(){

        if(!empty($_POST['title'])){
            $description_data = [
                'title' => $_POST['title'],
                'title_slug' => slug($_POST['title']),
                'cat_id' => $_POST['category'],
                'details' => str_replace("'","\'",$_POST['description'])
            ];
            $result = Description::table('description')->insert($description_data);
            if($result){
                notification(['type'=>'success', 'message'=>'Create Successfully']);
                return redirect('description');
            }else{
                notification(['type'=>'error', 'message'=>'Failed To Cteate']);
                return redirect('description');
            }
        }else{
            notification(['type'=>'error', 'message'=>'There is no data!']);
            return redirect('description');
        }
    }

    public function show($request){
        $id = $request['id'];
        $title = 'Description Info';
        $sql = "SELECT * FROM description WHERE id = $id";
        $description_data = Description::query($sql)->fetch();
        return view('description/show',compact('title','description_data'));
    }

    public function edit($request){
        $id = $request['id'];
        $title = 'Edit Description';
        $category = Description::table('category')->fetchAll();
        $sql = "SELECT * FROM description WHERE id = $id";
        $description = Description::query($sql)->fetch();
        return view('description/edit',compact('title','description','category'));
    }

    public function update(){

        if(!empty($_POST['title'])){
            $description_data = [
                'title' => $_POST['title'],
                'title_slug' => slug($_POST['title']),
                'cat_id' => $_POST['category'],
                'details' => str_replace("'","\'",$_POST['description']) ?? '',
            ];
            $result = Description::table('description')->where('id',$_POST['description_id'])->update($description_data);
            if($result){
                notification(['type'=>'success', 'message'=>'Updated Successfully']);
                return redirect('description');
            }
        }else{
            notification(['type'=>'success', 'message'=>'There is no data!']);
            return redirect('description');
        }
    }

    public function destroy($request){

        $id = $request['id'];
        $result = Description::table('description')->where('id',$id)->delete();
        if($result){
            notification(['type'=>'success', 'message'=>'Delete Successfully']);
            return redirect('description');
        }else{
            notification(['type'=>'success', 'message'=>'Failed To Delete !']);
            return redirect('description');
        }
    }
}