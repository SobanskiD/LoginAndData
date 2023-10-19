<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        //Login Form
        echo view('login_form'); 
    }

    public function process()
    {
        // Login request
        if ($this->request->getMethod() === 'post') {
            $firstname = $this->request->getPost('firstname');
            $lastname = $this->request->getPost('lastname');

            $db = db_connect();

            // SQL Question
            $query = $db->table('users')->where(['FirstName' => $firstname, 'LastName' => $lastname])->get();

            // if user exist
            if ($query->getNumRows() > 0) {
                // go to userpage
                $user = $query->getRow();

                // Session
                session()->set([
                    'user_id' => $user->UserID, 
                    'user_firstname' => $user->FirstName,
                    'user_lastname' => $user->LastName,
                    'user_type' => $user->UserType
                ]);

                return redirect()->to('userpage');
            } else {
                // If don't exist- error
                echo "Nie ma takiego użytkownika w bazie.";
            }
        }
    }
    public function assigned_users()
{
    // Session
    if (!session('user_id')) {
        return redirect()->to('login'); 
    }

    //Type of user
    $userType = session('user_type');

    // If PH or Regio- show assigned users
    if ($userType === 'PH' || $userType === 'Regio') {
        $db = db_connect();

        // Assigned User Info
        $query = $db->table('users')
            ->select('UserID, FirstName, LastName')
            ->where('AssignedToUserID', session('user_id')) 
            ->get()
            ->getResultArray();

        if (empty($query)) {
            echo "Nie masz przypisanych użytkowników.";
        } else {
            $data['assigned_users'] = $query;

            // Show users
            echo view('assigned_users', $data);
        }
    } else {
        echo "Nie masz dostępu do tej funkcji.";
    }
}




    
    public function logout()
    {
        // Delete session
        session()->destroy(); 

        // Redirect to loginpage
        return redirect()->to('login');
    }

}


