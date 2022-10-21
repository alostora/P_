<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Foundations\Admins\Admin\AdminCreateCollection;
use App\Http\Foundations\Admins\Admin\AdminUpdateCollection;
use App\Http\Requests\Admin\AdminCreateRequest;
use App\Http\Requests\Admin\AdminUpdateRequest;
use App\Http\Resources\Admins\AdminResource;
use App\Models\User;

class AdminController extends Controller
{
   
    public function index()
    {
        $users = User::where('type',0)->get();

        $users = AdminResource::collection($users);
        
        return view('Admin.Admins.index',compact('users'));
    }
    
    public function show(User $user)
    {
        return $user;
    }

    public function create()
    {
        return view('Admin.Admins.create');
    }
    
    public function store(AdminCreateRequest $request)
    {

        AdminCreateCollection::createAdmin($request);

        session()->flash('success','admin created successfully');
        return redirect(url('admin/admins'));

    }
    
    public function edit(User $user)
    {
        $users = new AdminResource($user);
        return view('Admin.Admins.edit',compact('user'));
    }

    public function update(AdminUpdateRequest $request,User $user)
    {
        AdminUpdateCollection::updateAdmin($request ,$user);
        session()->flash('success','admin updated successfully');
        return redirect(url('admin/admins'));
        
    }
   
    public function destroy(User $user)
    {
        $user->delete();
        session()->flash('success','admin deleted successfully');
        return back();
    }
}
