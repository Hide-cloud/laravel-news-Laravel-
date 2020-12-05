<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment_data extends Model
{
    //
    public $timestamps = false;

    //テーブル名
    protected $table = 'comment_datas';

    //可変項目（保存したい値）
    protected $fillable =
    [
        'comment',
        'article_id'
    ];
}
