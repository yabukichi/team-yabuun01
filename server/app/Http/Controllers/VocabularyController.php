<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VocabularyController extends Controller
{
    public function index(){
        return view('vocabularys.index');
    }

    public function create(Request $request){
        return view('vocabularys.create');
    }

    public function add(Request $request){
        return redirect('vocabularys/index');
    }

    public function show(Request $request){

        // DBから単語帳の中身を取り出してviewに送る
        return view('Vocabularys.show');
    }
}