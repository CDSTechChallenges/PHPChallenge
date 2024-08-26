<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todos;

class TodosController extends Controller
{
    public function index(){

    }
    
    public function store(Request $request){

    }
    
    public function delete($id){

    }

    public function edit($id){
        $todo=todos::find($id);
        $data=compact('todo');
        return view("update")->with($data);
    }

    public function updateData(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'work'=>'required',
                'duedate'=>'required'
            ]
        );
        $id = $request['id'];

    }
}
