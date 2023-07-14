<?php

namespace App\Http\Controllers;

use finfo;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function __construct(Request $request)
    {
        // if($request->is('categories')){
        //     echo '<h3>Xin chào unicode</h3>';
        // }
    }

    public function index(Request $request){

        // if(isset($_GET['id'])){
        //     echo $_GET['id'];
        // }

        // $path = $request->path();
        // echo  $path;

        //$url = $request->url();

        //$fulUrl = $request->fullUrl();

        //$method = $request->method();

        //echo $method;

        //$ip = $request->ip();

        //echo 'IP là: '.$ip;
        // if($request->isMethod('GET')){
        //     echo 'Phương thức GET';
        // }

        // $serve = $request->server();
        // dd($serve['REQUEST_URI']);

        //$header = $request->header('user-agent');

        // $id = $request->input('id');
        // echo $id;


        $id = $request->input('id.1.email');
        dd($id);
        return view('clients/categories/list');
    }

    //lấy ra 1 chuyên mục
    public function getCategory($id){
        return view('clients/categories/edit');
    }

    //cập nhật một chuyên mục (Phương thức POST)
    public function updateCategory($id){
        return 'Submit sửa chuyên mục: '.$id;
    }

    //Show form thêm dữ liệu
    public function addCategory(Request $request){

        // $path = $request->path();
        // echo  $path;
        //$cateName = $request->old('category_name');

        return view('clients/categories/add');
    }

    //thêm một chuyên mục (Phương thức POST)
    public function handleAddCategory(Request $request){
        // $allData = $request->all();
        // dd($allData);

        // if($request->isMethod('POST')){
        //     echo 'Phương thức POST';
        // }

        //return redirect(route('categories.add'));
        //return 'Submit thêm chuyên mục';

        //$cateName = $request->query();

        if($request->has('category_name')){
            $cateName = $request->category_name;
            $request->flash();  //set session flash
            return redirect(route('categories.add'));
            //dd($cateName);
        }else{
            return 'Không có category_name';
        }
        
    }

    //xóa chuyên mục (Phương thức delete)
    public function deleteCategory($id){
        return 'Submit xóa chuyên mục: '.$id;
    }

    public function getFile(){
        return view('clients/categories/file');
    }

    //Xử lý file
    public function handleFile(Request $request){
        //$file = $request->file('photo');
        //$file = $request->photo;
        if($request->hasFile('photo')){
            if ($request->photo->isValid()){
                $file = $request->photo;
                // $path = $file->path();
                // $ext = $file->extension();
                //$path = $request->photo->store('images','local');
                //$path = $file->storeAs('file-txt','thuctap.txt');

                $filename = $file->getClientOriginalName();
                dd($filename);
            } else{
                return 'Upload không thành công';
            }
        } else{
            return 'Vui lòng chọn file';
        }
    }

}
