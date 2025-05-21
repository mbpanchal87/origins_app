<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TaskController extends Controller
{
    public function create_task(Request $request)
	{
		$uid = auth()->id();
		$request->validate([
		'title' => 'required',
		'description' => 'required',
		'due_date' => 'required|date',
		'status' => 'required'
		]);
		
		Task::create([
		'title' => $request->title,
		'description' => $request->description,
		'due_date' => $request->due_date,
		'status' => $request->status,
		'uid' => $uid
		]);
		
		return redirect()->back()->with('success','Task is created.');
	}
	public function task_list(Request $request)
	{
		$userid = Auth::id();
		
		$tasks = Task::where('uid',$userid)->latest()->get();
		
		return view('tasklist', compact('tasks'));
	}
	public function edit($id)
	{
		$userid = Auth::id();
		$task = Task::where('id',$id)->where('uid',$userid)->FirstOrFail();
		
		return view('edittask', compact('task'));
	}
	public function update(Request $request,$id)
	{
		
		$request->validate([
		'title' => 'required',
		'description' => 'required',
		'due_date' => 'required|date',
		'status' => 'required'
		]);
		$userid = Auth::id();
		$task = Task::where('id',$id)->where('uid',$userid)->FirstOrFail();
		
		$task->update($request->only(['title','description','due_date','status']));
		
		return redirect()->route('task_list');
	}
	public function delete($id)
	{
		$userid = Auth::id();
		$task = Task::where('id',$id)->where('uid',$userid)->FirstOrFail();
		$task->delete();
		
		return redirect()->route('task_list');
	}
}
