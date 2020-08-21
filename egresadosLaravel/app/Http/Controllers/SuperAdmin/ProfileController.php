<?php

namespace App\Http\Controllers\SuperAdmin;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
        //
        $user = User::find(1);  //returns God user 
        
        return view('superadmin.profile.index')->with('user', $user);
    }



    public function edit($id)
    {   
        //
        $user = User::find($id);  //returns God user 
        return view('superadmin.profile.edit')->with('user', $user);
    }
    
    
    
    public function update(Request $request, $id)
    {
        //Actualizar los datos ingresados por el SuperAdmin
        // dd($request);
        
        $user = User::find($id);  //returns God user 
        
        $requestData= $request->all();
        // dd($requestData['password']); // debug
        $newPassword = $requestData['password'];

        $requestData['password'] = Hash::make($newPassword);
        $user->update($requestData);   
        return redirect()->route('superadmin.profile.index')->with('user', $user);
    }


    protected function validateSuperAdmin($request){
        return $request->validate([
            'name'=>'required|max:100',
            'email'=>'required|max:100',
            'password'=>'required|max:200',
            ]);
        }

}
