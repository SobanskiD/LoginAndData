<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index(): string
    {
        echo '<h2>Strona próbna</h2>';
    }

    public function strona(): string
    {
        return view('strona');
    }
    

}
