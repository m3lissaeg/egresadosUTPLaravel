<?php

namespace App\Http\Controllers\Egresado;

use App\Http\Controllers\Controller;
use App\User;
use App\Tag;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    
   
    public function edit(User $user)
    {
        //
        $tags = Tag::all();
        return view('egresado.interest.edit')->with('tags', $tags);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user)
    {
        //
        // dd($request);
        $u = User::findOrFail($user);
        $u->interest = $request->interest;
        $u->update();
        return redirect()->route('home');
    }

    
}
