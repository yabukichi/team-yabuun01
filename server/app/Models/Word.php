<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;
    protected $fillable = [
        'note_id',
        'question',
        'answer',
    ];

    // 初期値がidカラムを参照しているので$primaryKeyを指定してあげて参照場所を別のカラムにしてあげる
    protected $primaryKey = "id";
    //hasmanyの子テーブルになるのでbelongsToの設定をする
    public function note()
    {
        return $this->belongsTo('App\Models\Note');
    }
}