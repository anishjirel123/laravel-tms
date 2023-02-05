<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks= new Task;
        $tasks=$tasks->paginate(5);
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
     return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tasks = new Task;
        $validate_data = $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
                'img' => 'required',
                ]
            );
            
            // image ko lagi ho         
        $fileName = $request->id . "-" . time() . '.' . $request->img->extension();
        $request->img->move(public_path('uploads'), $fileName);

        $tasks->title = $request->title;    
        $tasks->description = $request->description;
        $tasks->img = $fileName;

        $tasks->save();
        notify()->success('Task is added successfully👍💖👌😃');
        return redirect('task');
        
  
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tasks = new Task;
        $tasks = $tasks->where('id', $id)->first();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tasks = new Task;
        $tasks = $tasks->where('id', $id)->first();
        
        notify()->success('Task is edit successfully👍💖👌😃');
        return view('tasks.edit', compact('tasks'));
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tasks = new Task;
        $tasks = $tasks->where('id', $id)->first();
        $tasks->title = $request->title;
        $tasks->description = $request->description;
        $tasks->update();

        notify()->success('Task is update successfully✔🤞😃');

        return redirect('task');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tasks = new Task;
        $tasks = $tasks->where('id', $id)->first();
        $tasks->delete();

        notify()->success('Task is delete successfully💥💔😃');
        return redirect('task');
    }
}