<?php

namespace App\Controllers;

use App\Models\Category;
use Core\Request;

class CategoryController extends Controller{
    public $type;
    public function __construct(){
        $this->type = new Category();
    }
    public function index(){
        $title = 'Medicine Type List';
        $category = Category::table('category')->fetchAll();
        return view('category/index',compact('title','category'));
    }

    public function create(){
        $title = 'Create New Medicine Type';
        return view('category/create',compact('title'));
    }

    public function store(){

        if(!empty($_POST['cat_name'])){
            $type_data = [
                'name' => $_POST['cat_name'],
                'slug' => slug($_POST['cat_name']),
                'status' => $_POST['status']
            ];
            $result = Category::table('category')->insert($type_data);
            if($result){
                notification(['type'=>'success', 'message'=>'Create Successfully']);
                return redirect('category');
            }else{
                notification(['type'=>'error', 'message'=>'Failed To Cteate']);
                return redirect('category');
            }
        }else{
            notification(['type'=>'error', 'message'=>'There is no data!']);
            return redirect('category');
        }
    }

    public function show($request){
        $id = $request['id'];
        $title = 'Medicine Type';
        $type_name = Category::table('type')->where('id',$id)->fetch();
        return view('type/show',compact('title','type_name'));
    }

    public function edit($request){
        $id = $request['id'];
        $title = 'Category Edit';
        $category_name = Category::table('category')->where('id',$id)->fetch();
        return view('category/edit',compact('title','category_name'));
    }

    public function update(){

        if(!empty($_POST['cat_name'])){
            $category_data = [
                'name' => $_POST['cat_name'],
                'slug' => slug($_POST['cat_name']),
                'status' => $_POST['status']
            ];
            $result = Category::table('category')->where('id', $_POST['cat_id'])->update($category_data);
            if($result){
                notification(['type'=>'success', 'message'=>'Updated Successfully']);
                return redirect('category');
            }
        }else{
            notification(['type'=>'success', 'message'=>'There is no data!']);
            return redirect('category');
        }
    }

    public function destroy($request){
        $id = $request['id'];
        $result = Category::table('type')->where('id',$id)->delete();
        if($result){
            return redirect('medicine_type');
        }
    }
}

