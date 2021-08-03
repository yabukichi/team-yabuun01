<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Word;
use App\Models\User;
use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use DateTime;

class VocabularyController extends Controller
{
    public function index(){
        $user = Auth::user();
        $notes = Note::latest('id')->get();
        
        return view('vocabularys.index', compact('notes'));
    }

    public function create(Request $request){
        return view('vocabularys.create');
    }

    public function add(Request $request){
        $userId = Auth::id();
            
        $note = Note::create([
            'title'=>$request->title,
            'user_id'=>$userId
        ]);        

        // create.bladeから配列で受け取った値を変数に代入
        $questionItems = $request->question;
        $answerItems = $request->answer;
        
        // コールバック関数はないのでNull
        foreach (array_map(Null, $questionItems, $answerItems) as [$questionItem,$answerItem,]){

            $word = Word::create([
                'note_id'=> $note->id,
                'question' => $questionItem,
                'answer' => $answerItem,
            ]);
            Log::debug($word);
        };

        // $question_count = 1;
        // foreach ($request->all() as $key => $val){
        //     //送信されたキー（$key）に「food」を含むものを判定
        //     if(preg_match('/question/',$key)){
        //         $question = 'question'.$question_count; 
        //         $answer = 'answer'.$question_count;
        //         // Log::debug($question);
        //         // Log::debug($answer);
        //         $word = Word::create([
        //             'note_id'=> $note->id,
        //             'question' => $request->$question,
        //             'answer' => $request->$answer,
        //         ]);
        //         $question_count++;
        //         Log::debug($word);
        //     }
        // }



        
        // DB::table('notes')->insert($notesParam);
        // DB::table('words')->insert($wordsParam);
        

        return redirect('/Vocabularys/index');
    }

    // public function detail(Request $request, $id){
    //     $noteId = Note::find($id); 
    //     $wordId = Word::find($request->$noteId);

    // }

    public function show(Request $request, $id){
        // $noteId = Note::find($id); 
        // dd($noteId);
        $wordId = Note::find($request->id);
        // dd($wordId);
        $wordData = $wordId->word;	
        // dd($wordData);
        // DBから単語帳の中身を取り出してviewに送る
        return view('Vocabularys.show', compact('wordData'));
    }
}