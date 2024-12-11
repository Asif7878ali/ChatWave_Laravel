<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FuncnalityController extends Controller
{
    public function searchuser(Request $request)
    {
        $serchterm = $request->usersearch;
        $userdata = User::where('firstname', 'like', "$serchterm%")->orWhere('username', 'like', "$serchterm%")->paginate(6);
        // dd($userdata);
        // $userdata = 'aass';
        return view('pages.chat.subpages.empty_container.Empty', compact('userdata'));  
    }
}
