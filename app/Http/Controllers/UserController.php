<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function create()
    {
        return view('pages.auth.signform');
    }

    public function store(Request $request)
    {
        $request->validate([
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
            'firstname' => 'required|string|max:20|min:3|regex:/^[a-zA-Z\s]+$/',
            'lastname' => 'required|string|max:20|min:3|regex:/^[a-zA-Z\s]+$/',
            'username' => 'required|string|max:20|min:5|unique:users,username',
            'email' => 'required|email|max:255|string|unique:users,email',
            'number' => 'required|digits:10|regex:/^[6-9][0-9]{9}$/',
            'password' => 'required|min:4|max:8|confirmed',
        ]);

        try {

            if ($request->hasFile('picture')) {
                // dd($request->firstname);
                // Store the uploaded file
                $imagePath = $request->file('picture')->store('uploads/UserImage', 'public');
                // Create user record
                User::create([
                    'picture' => $imagePath,
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'username' => $request->username,
                    'email' => $request->email,
                    'number' => $request->number,
                    'password' => bcrypt($request->password),
                ]);

                session()->flash('success', 'User Created Successfully');
                return redirect()->route('login');
            } else {
                session()->flash('error', 'User Not Created');
                return redirect()->route('user.create');
            }
        } catch (\Throwable $th) {
            session()->flash('error', 'An unexpected error occurred.');
            return redirect()->route('user.create');
        }
    }
}
