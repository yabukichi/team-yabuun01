<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;

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

        $noteId = 1;
        $items = Word::where('note_id',$noteId)->get();
        return view('Vocabularys.show',compact('items'));
    }
}