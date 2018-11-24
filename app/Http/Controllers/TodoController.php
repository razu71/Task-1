<?php

namespace App\Http\Controllers;

use App\TodoList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function index(){
        return view('todo');
    }
    public function todoStore(Request $request){
//        dd($request->all());
        $rules = [
            'title' => 'required'
        ];
        $messages = [
            'title.required' => 'Title must be required'
        ];
        $validation = Validator::make($request->all(),$rules,$messages);
        if ($validation->fails()){
//            return response()->json(['error' => 'Some thing went wrong']);
            return redirect()->back()->with(['error' => 'Some thing went wrong']);
        }
        else{
            $data = [
                'title' => $request->title,
            ];
            TodoList::create($data);
//            return response()->json(['success' => 'Successfuly added a todo list']);
            return redirect()->back()->with(['success' => 'Successfuly added a todo list']);
        }
    }
}
