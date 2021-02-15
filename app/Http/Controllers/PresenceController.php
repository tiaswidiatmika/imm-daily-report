<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Formation;
use Illuminate\Http\Request;

class PresenceController extends Controller
{
    public function index ()
    {
        $users = User::all();
        $retrievedUserId = $users->pluck('id');
        return $retrievedUserId;
    }    
}
