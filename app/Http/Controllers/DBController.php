<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::select('select * from users');

        foreach ($users as $user) {
            echo $user->id;
            echo $user->name;
            echo $user->age;
        }

        return view('home', ['users' => $users]);
    }
}
