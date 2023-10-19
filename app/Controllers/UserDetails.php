<?php

namespace App\Controllers;

class UserDetails extends BaseController
{
    public function show($userID)
    {
        // User details from Database
        $db = db_connect();
        $user = $db->table('users')->where('UserID', $userID)->get()->getRowArray();

        // Show user data
        echo view('user_details', ['user' => $user]);
    }
}
