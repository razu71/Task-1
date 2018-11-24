<?php

namespace App\Http\Controllers;

use App\TodoList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function index(){
        $todo = TodoList::get();
        return view('todo')->with(['todo' => $todo]);
    }
    public function todoStore(Request $request){
//        dd($request->all());
        $rules = [
            'title' => 'required',
            'level' => 'required',
            'date' => 'required|date'
        ];
        $messages = [
            'title.required' => 'Title must be required',
            'level.required' => 'Level must be required',
            'date.required' => 'Date must be required',
            'date.date' => 'Must be a date'
        ];
        $validation = Validator::make($request->all(),$rules,$messages);
        if ($validation->fails()){
//            return response()->json(['error' => 'Some thing went wrong']);
            return redirect()->back()->with(['error' => 'Some thing went wrong']);
        }
        else{
            $data = [
                'level_id' => $request->level,
                'title' => $request->title,
                'description' => $request->description,
                'date' => $request->date,
            ];
            TodoList::create($data);
//            return response()->json(['success' => 'Successfuly added a todo list']);
            return redirect()->back()->with(['success' => 'Successfuly added a todo list']);
        }
    }
    public function todoEdit($id){
        $data['list'] = TodoList::where('id', $id)->first();
        return response()->json(['success' => 'Todo List updated successfully']);
    }
    public function todoDelete($id){
        $list = TodoList::find($id);
        $list->delete();
        // return response()->json(['success' => 'Todo List Deleted successfully']);
        return back()->with('success', 'Todo List Deleted successfully');
    }
}
