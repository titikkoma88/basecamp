<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use Auth;

class HomeController extends Controller
{
    public function Dashboard()
    {
        $checkouts = Checkout::with('Camp')->whereUserId(Auth::id())->get();
        // $checkouts = Checkout::with('Camp')->where(user_id, Auth::id())->get();

        return view('user.dashboard', [
            'checkouts' => $checkouts
        ]);
    }
}
