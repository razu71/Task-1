<?php

namespace App\Http\Repositories;

use App\TodoList;

class TodoRepositories
{
    public function saveTodoList($data){
        $list = new TodoList();
        return [
            $list->level_id => $data->level_id,
            $list->title => $data->title,
            $list->description => $data->description,
            $list->date => $data->date
        ];
    }
}
