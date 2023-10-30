<?php

namespace App\Http\Controllers;
use App\Models\fithawkUser;
use Illuminate\Http\Request;

class fithawkUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = fithawkUser::all();

        return view('users.index', compact('users'));
    }
    public function indexApi()
    {
        $users = fithawkUser::all();

        return response()->json(['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request

        $user = new fithawkUser();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        // Set other user properties as needed

        $user->save();

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(fithawkUser $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(fithawkUser $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, fithawkUser $user)
    {
        // Validate the request

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // Update other user properties as needed

        $user->save();

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fithawkUser $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
