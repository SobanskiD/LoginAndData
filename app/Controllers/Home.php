<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function userpage()
    {
        echo view('userpage'); 
    }
    public function rules()
    {
        echo view('rulespage'); 
    }
    public function show()
    {
        echo view('rulespage'); 
    }
    
}
