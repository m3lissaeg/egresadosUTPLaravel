<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

// profile ocntroller para admin

class ProfileController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show an specific egresado user
        // dd('funciona!');
        $user = User::findOrFail($id);
        return view('admin.profile.show')->with('user',$user);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.profile.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->dni = $request->dni;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;

        $user->password = Hash::make($request->password);
        $user->update();
        return redirect()->route('admin.profile.show', $id);
    }

}
