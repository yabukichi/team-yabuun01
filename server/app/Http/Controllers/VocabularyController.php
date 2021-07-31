<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Word;
use App\Models\User;
use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use DateTime;

class VocabularyController extends Controller
{
    public function index(){
        $user = Auth::user();
        // dd($user);
        // $word = Words::get();
        // dd($word);
        return view('vocabularys.index');
    }

    public function create(Request $request){
        return view('vocabularys.create');
    }

    public function add(Request $request){
        $userId = Auth::id();
		// dd($userId);


        
        $notesParam = [
            'title' => $request->title,
            'user_id'=>$userId,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        $wordsParam =[
            'question' => $request->question,
            'answer' => $request->answer,
        ];
        // $notes = new Note();
        $notes->user_id = $userId;
        $notes->save();
        
        DB::table('notes')->insert($notesParam);
        DB::table('words')->insert($wordsParam);
        
        // $word = Words::all();
        // dd($word);

        return redirect('/Vocabularys/index');
    }

    public function show(Request $request){

        // DBから単語帳の中身を取り出してviewに送る
        return view('Vocabularys.show');
    }
}