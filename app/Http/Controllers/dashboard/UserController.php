<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('dashboard.users.index', compact('users'));
    }


    public function create()
    {
        return view('dashboard.users.create');
    }


    public function store(Request $request)
    {
        // info validation
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'required',
            'email' => 'required',
        ]);
        // encrypt password
        $request_data = $request->except('password');
        $request_data['password'] = bcrypt ($request->password);
        User::create($request_data);
        session()->flash('success' , __('site.added_successfully'));
        return redirect()->route('dashboard.users.index');

    }


    public function show(User $user)
    {
        //
    }


    public function edit(User $user)
    {
        //
    }


    public function update(Request $request, User $user)
    {
        //
    }


    public function destroy(User $user)
    {
        User::destroy($user->id);
        session()->flash('success' , __('site.deleted_successfully'));

        return redirect()->route('dashboard.users.index');
    }
}
