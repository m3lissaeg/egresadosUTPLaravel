<?php

namespace App\Http\Controllers\SuperAdmin;

use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function index()
    {

        $roleName = 'admin';// variable para definir los usuarios que tengan rol admin
        $users = User::whereHas('roles', function ($query) use ($roleName) {
            $query->where('name', $roleName);
        })->get();

        return view('superadmin.admins.index')->with('users', $users);
    }
    
    public function create(){
        return view('superadmin.admins.create');
    }
    
    
    public function store(Request $request)
    {
        //dd($request);    //debug
        $adminRole = Role::where('name', 'admin')->first();
        $request['password'] = Hash::make($request['password']);
        User::create($this->validateUser($request))->roles()->attach($adminRole);     
        return redirect(route('superadmin.admins.index'))->with('users', $this->getUsersbyRole('admin'));
    }
    
         
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('superadmin.admins.edit')->with('user',$user);
    }

    
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return redirect(route('superadmin.admins.index'))->with('users', $this->getUsersbyRole('admin'));
    }


    public function destroy($id)
    {
        //
        $user = User::findOrFail($id);
        $user->roles()->detach();
        $user->delete();
        return redirect(route('superadmin.admins.index'));
    }

    
    protected function validateUser($request){
        return $request->validate([
            'name'=>'required|max:100',
            'lastname'=>'required|max:100',
            'email'=>'required|max:100',
            'phone'=>'required|max:100',
            'address'=>'required|max:200',
            'password'=>'required|max:200',
            'dni'=>'required|max:20'
            ]);
        }

    protected function getUsersbyRole(string $roleName){
        return User::whereHas('roles', function ($query) use ($roleName) {
            $query->where('name', $roleName);
        })->get();

    }
}
