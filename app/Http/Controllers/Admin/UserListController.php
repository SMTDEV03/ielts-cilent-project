<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Carbon;
use DataTables;


class UserListController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="'.route('admin_user_edit',['id'=>$row->id]).'" class="edit btn btn-success btn-sm">Edit</a> <a href="'.route('admin_user_delete',['id'=>$row->id]).'" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->editColumn('created_at', function($data){ $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('d-M-Y'); return $formatedDate; })
                ->editColumn('updated_at', function($data){ $formatedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('d-M-Y'); return $formatedDate; })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.user.index');
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|max:155',
            'lname' => 'required|max:155',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'role_id' => 1,
            'password' => bcrypt($request->password),
        ]);

        if($user){
            return back()->with('success','User Created Successfully');
        }
        return back()->withErrors(['error' => 'Something went wrong']);
    } 


    public function show($id)
    {
 
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit',compact('user'));
    }


    public function update(Request $request)
    {
        $request->validate([
            'fname' => 'required|max:155',
            'lname' => 'required|max:155',
            'email' => 'required|unique:users|max:255',
            'password' => 'min:6',
        ]);

        $user= User::find($request->id);
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        if($request->password){
            $user->password = bcrypt($request->password);
        }
        $user->save();

        if($user){
            return back()->with('success','User Updated Successfully');
        }
        return back()->withErrors(['error' => 'Something went wrong']);
    }

    public function destroy($id)
    {
        $user = User::destroy($id);
        if($user){
            return back()->with('success','User Deleted Successfully');
        }
        return back()->withErrors(['error' => 'Something went wrong']);
    }

}
