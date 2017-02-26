<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'comment',
        'user_id',
        'article_id'
    ];


    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function articles()
    {
        return $this->belongsTo('\App\Article');
    }


}