<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getUsersLoginStats()
    {
        // get 10 users who logged in most recently,
        // their most recent login datetime, and how many times they've logged in in total.
        $users = User::withCount('logins')
            ->join('user_logins', 'users.id', '=', 'user_logins.user_id')
            ->select('users.id', 'users.name', DB::raw('MAX(user_logins.logged_at) as last_login_at'), DB::raw('COUNT(user_logins.id) as total_logins'))
            ->groupBy('users.id')
            ->orderBy('last_login_at', 'desc')
            ->take(10)
            ->get();

        //transform to match the json format
        $transformedUsers = $users->map(function ($user) {
            return [
                'id' => $user->id,
                'username' => $user->name,
                'lastLoginAt' => $user->last_login_at,
                'totalLogins' => $user->total_logins,
            ];
        });

        return response()->json($transformedUsers);
    }
}
