<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        // return response()->json($users);
        return 1;
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required' //optional if you want this to be required
        ]);
        $user = User::create($request->all());
        return response()->json(['message'=> 'user created',
        'user' => $user]);
    }

    public function show(User $user)
    {
        return $user;
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required' //optional if you want this to be required
        ]);
       $user->update($request->all());
        
        return response()->json([
            'message' => 'user updated!',
            'user' => $user
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json([
            'message' => 'user deleted'
        ]);
        
    }
}
