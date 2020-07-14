<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Khill\Lavacharts\Laravel\LavachartsFacade;
use Khill\Lavacharts\Lavacharts;

class ShowHomePage extends Controller
{
    public function __invoke()
    {
        $users = User::with(['phones', 'contacts', 'sms', 'accounts', 'images'])->get();

        return view('welcome', compact('users'));
    }
}
