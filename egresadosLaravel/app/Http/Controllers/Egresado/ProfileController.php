<?php

namespace App\Http\Controllers\Egresado;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
    public function show($id)
    {
        //show an specific egresado user
        // dd('funciona!');
        $user = User::findOrFail($id);
        return view('egresado.profile.show')->with('user',$user);
    }
    


    public function edit($user)
    {
        $userI = User::findOrFail($user);
        // dd($userI);
        return view('egresado.profile.edit')->with('userI', $userI);
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);
        
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->dni = $request->dni;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->mediapath = $request->mediapath;

        // pendientes datos por guardar: genero... 

        $user->password = Hash::make($request->password);
        $user->update();
        return redirect()->route('egresado.profile.show', $user);
    }


}
