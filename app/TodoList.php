<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    protected $fillable = ['level_id','title','description','date'];

    public function level()
    {
        return $this->belongsTo('App\Level');
    }
}
