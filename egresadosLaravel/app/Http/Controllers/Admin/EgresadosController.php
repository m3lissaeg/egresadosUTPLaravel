<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
use App\User;
use App\Role;
use Illuminate\Http\Request;

class EgresadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $roleName='egresado';

        $egresados = User::whereHas('roles', function ($query) use ($roleName) {
           $query->where('name', $roleName);
       })->get();

        return view('admin.egresados.index')->with('egresados',$egresados);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show an specific egresado user
        $user = User::findOrFail($id);
        return view('admin.egresados.show')->with('user',$user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->roles()->detach();
        $user->delete();
        
        return redirect()->route('admin.egresados.index');

        //se ejecuta desde la vista show
    }
}
