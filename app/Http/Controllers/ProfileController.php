<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user){
        // return view('profiles.show', compact('user'));
        return view('profiles.show', ['user'=>$user]);

    }

    public function follow(User $user){

        current_user()->toggle_follow($user);
            
        return redirect()->back();
    }

    public function edit(User $user){

        // authorization in controller. but we did already in web.php
        // $this->authorize('edit', $user);

        return view('profiles.edit', ['user'=>$user]);            

    }
}
