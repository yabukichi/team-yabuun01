<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    //今回は1つの投稿に対して複数の応募がくるので(1対多)hasManyの設定をする
    public function word()
    {
        return $this->hasMany('App\Models\Word');
    }
}