<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoListRequest;
use App\TodoList;

class TodoController extends Controller
{
    /*show all todo list*/
    public function index(){
        $todo = TodoList::get();
        return response()->json($todo);
    }
    /*store a new todo list*/
    public function todoStore(TodoListRequest $request){
        $validated = $request->validated();
        if (!$validated){
            return response()->json(['error' => 'Something went wrong']);
        }
        else{
            $data = [
                'level_id' => $request->level_id,
                'title' => $request->title,
                'description' => $request->description,
                'date' => $request->date,
            ];
            TodoList::create($data);
            return response()->json(['success' => 'Successfuly added a todo list']);
        }
    }

    /*update or edit a existing todo list from the todo list*/
    public function todoEdit(TodoListRequest $request, $id){
        $validated = $request->validated();
        if (!$validated){
            return response()->json(['error' => 'Something went wrong']);
        }
        else {
            $data = [
                'level_id' => $request->level_id,
                'title' => $request->title,
                'description' => $request->description,
                'date' => $request->date,
            ];
        }
        TodoList::where(['id' => $id])->update($data);
        return response()->json(['success' => 'Todo List updated successfully']);
    }

/*Delete a list from todo list*/
    public function todoDelete($id){
        $list = TodoList::find($id);
        $list->delete();
         return response()->json(['success' => 'Todo List Deleted successfully']);
    }
}
