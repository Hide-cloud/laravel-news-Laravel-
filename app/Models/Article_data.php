<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article_data extends Model
{   
    public $timestamps = false;

    //テーブル名
    protected $table = 'article_datas';

    //可変項目（保存したい値）
    protected $fillable =
    [
        'title',
        'content'
    ];
}
