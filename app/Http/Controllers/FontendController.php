<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    public function index()
    {
        $tasks = Task::paginate(3);
        return view('task', compact('tasks'));
    }
}
