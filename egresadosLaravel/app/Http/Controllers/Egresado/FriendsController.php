<?php

namespace App\Http\Controllers\Egresado;

use App\Friend;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class FriendsController extends Controller
{
   
    public function index()
    {
        //
        $roleName='egresado';

        $egresados = User::whereHas('roles', function ($query) use ($roleName) {
           $query->where('name', $roleName);
       })->get();

        return view('egresado.friends.index')->with('egresados',$egresados);
    }


    public function store(Request $request)
    {
        //
        // dd($request->id);
        $friend = new Friend();
        $friend->friend_id = $request->id; //en $id viene el id del amigo
        $friend->user_id = auth()->id() ; 
        $friend->save();
        
        
        return redirect()->route('egresado.friends.show', auth()->id() );

    }

    
    public function show( $user)
    {
        //
        $amigos= Friend::where('user_id', auth()->id())->get();
        // dd($amigos);

        $arrayAmigos = array();

        foreach ($amigos as $amigo) {

            $user = User:: find($amigo->friend_id );
            array_push($arrayAmigos, $user);
        }

        // dd($arrayAmigos);
        return view('egresado.friends.show')->with('arrayAmigos',$arrayAmigos);
    }
    
    
    public function update(Request $request, User $user)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
        //
        // dd($user);
        $userDelete = Friend::where('friend_id',$user)->get();
        // dd($userDelete);
        foreach ($userDelete as $userD) {
            $userD->user_id = 0;
            $userD->update();
            
        }
        return redirect()->route('egresado.friends.index');
    }
}
