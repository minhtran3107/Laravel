<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    //
    public function index(){
        $title = 'Học lập trình web tại Unicode';

        $content = 'Học lập trình Laravel 8.x tại Unicode';

        // $dataView = [
        //     'titleData' => $title,
        //     'contentData' => $content
        // ];
        //return view('home',$dataView);

        return view('home',compact('title','content'));

        //return view('home')->with(['title' => $title,'content' => $content]);

       // return View::make('home',compact('title','content'));

       // return View::make('home')->with(['title' => $title,'content' => $content]);

    //    $contentView = view('home');
    //    $contentView = $contentView->render();
    //    dd($contentView);
       //return $contentView;
    }

    public function getProductDetail($id){
        return view('clients.products.detail',compact('id'));
    }
}
