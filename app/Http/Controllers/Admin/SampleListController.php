<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\user;
use App\Models\sample;
use App\Models\meta_sample;
use DataTables;

class SampleListController extends Controller
{
    public function index(Request $request)
    {
        $type = $request->type;
        if ($request->ajax()) {
          
            $data = meta_sample::where('sample_id',$type)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="'.route('admin_sample_edit',['id'=>$row->id]).'" class="edit btn btn-success btn-sm">Edit</a> <a href="'.route('admin_sample_delete',['id'=>$row->id]).'" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->editColumn('created_at', function($data){ $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('d-M-Y'); return $formatedDate; })
                ->editColumn('updated_at', function($data){ $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('d-M-Y'); return $formatedDate; })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.samples.index',compact('type'));
    }

    public function create(Request $request)
    {
        return view('admin.samples.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'answer' => 'required',
            'type' => 'required'
        ]);


        $sample = meta_sample::create([
            'question' => $request->title,
            'answer' => $request->answer,
            'sample_id' => $request->type,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if($sample){
            return back()->with('success','Sample Created Successfully');
        }
        return back()->withErrors(['error' => 'Something went wrong']);
    } 


    public function show($id)
    {
 
    }


    public function edit($id)
    {
        $sample = meta_sample::findOrFail($id);
        return view('admin.samples.edit',compact('sample'));
    }


    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'answer' => 'required',
            'type' => 'required'
        ]);

        $sample= meta_sample::find($request->id);
        $sample->question = $request->title;
        $sample->answer = $request->answer;
        $sample->sample_id = $request->type;
        $sample->save();

        if($sample){
            return back()->with('success','Sample Updated Successfully');
        }
        return back()->withErrors(['error' => 'Something went wrong']);
    }

    public function destroy($id)
    {
        $user = meta_sample::destroy($id);
        if($user){
            return back()->with('success','User Deleted Successfully');
        }
        return back()->withErrors(['error' => 'Something went wrong']);
    }
}
