<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

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

    public function update(User $user){

        $attributes = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user)],
            'email' => ['required', 'string', 'max:255', 'email', Rule::unique('users')->ignore($user)],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
             'avatar' => 'file'
            ]);

        $user = User::find(current_user()->id);
        
        $user->name = $attributes['name'];
        $user->username = $attributes['username'];
        $user->email = $attributes['email'];
        $user->password = Hash::make($attributes['password']);

        if(request()->has('avatar')){
        $user->avatar = $attributes['avatar']->store('avatars');
        }

        $user->save();

        return redirect($user->path());

        


    }
}
