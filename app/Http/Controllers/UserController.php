<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        User::create($input);

        return redirect()->route(
            'users.index'
        )->with('status', 'User created successfully!');
    }

    public function edit(User $user)
    {
        $user->load('profile');
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $input = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'exclude_if:password,null|string|min:8'
        ]);

        $user->fill($input);
        $user->save();

        return redirect()->route('users.index')->with('status', 'User updated successfully!');
    }

    public function updateProfile(User $user, Request $request)
    {
        $input = $request->validate([
            'type' => 'required',
            'address' => 'nullable',
        ]);

        UserProfile::updateOrCreate(
            ['user_id' => $user->id],
            [
                'type' => $input['type'],
                'address' => $input['address'] ?? null,
            ]
        );

        return redirect()->route('users.index')->with('status', 'User profile updated successfully!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('status', 'User deleted successfully!');
    }
}
