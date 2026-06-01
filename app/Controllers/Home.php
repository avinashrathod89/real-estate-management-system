<?php

namespace App\Controllers;

use App\Models\CommonModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->CommonModel = new CommonModel(); //create object
        $this->session = \Config\Services::session();
        $this->session->start();
    }

    public function index()
    {
        $data['properties'] = $this->CommonModel->getData('tbl_property'); //new
        return view('home/index', $data);
    }

    public function search()
    {
        $data['properties'] = $this->CommonModel->searchWhere('tbl_property', $this->request->getGet('keyword'));
        return view('home/result', $data);
    }

    public function detailList()
    {
        // Saare properties fetch karo
        $data['properties'] = $this->CommonModel->getData('tbl_property');

        // Properties list ka view load karo (Manage Property wala view use kar sakte ho)
        return view('home/property_list', $data);
    }

    public function detail($property_id = null)
    {
    $session = session();

    if ($property_id === null) {
        return redirect()->to(base_url()); // or show 404
    }


    // If enquiry form is submitted
    if ($this->request->getPost('fullname')) {
        $dataArray = $this->request->getPost();

        // Add logged in user id
        $dataArray['user_id'] = $session->get('user_id');

        // Add current date
        $dataArray['date'] = date('Y-m-d H:i:s');

        // Insert enquiry
        if ($this->CommonModel->InsertData('tbl_enquiries', $dataArray) == true) {
            return redirect()->to(base_url('home/detail/' . $property_id))
                             ->with('success', 'Enquiry sent successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to send enquiry.');
        }
    }

    // Load property details
    $data['property'] = $this->CommonModel->getDataWhere('tbl_property', 'property_id', $property_id);

    // ✅ Prevent error if no data found
    if (empty($data['property'])) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Property not found.');
    }

    return view('home/detail', $data);
}


    public function about(): string
    {
        return view('home/about');
    }

    public function contact(): string
    {
        if ($this->request->getPost()) {
            $dataArray = $this->request->getPost();

            if ($this->CommonModel->InsertData('tbl_contacts', $dataArray) == true) {
                // success
            }
        }
        return view('home/contact');
    }

    public function login()
    {
        if ($this->request->getPost()) {
            $dataArray = $this->request->getPost();
            $newpass = md5($this->request->getPost('password'));

            unset($dataArray['password']);
            $dataArray += ['password' => $newpass];
        
            $result = $this->CommonModel->checkWhere('tbl_users', $dataArray);
            if (count($result) > 0) {
                $newdata = [
                    'user_id'  => $result[0]->user_id,
                    'fullname'  => $result[0]->fullname,
                    'email'     => $result[0]->email,
                    'mobile'     => $result[0]->mobile,
                    'logged_in' => TRUE
                ];

                $this->session->set($newdata);
                return redirect()->to('welcome');
            }
        }

        return view('home/login');
    }

    public function welcome()
    {
        if ($this->request->getPost('fullname')) { //to update profile
            $dataArray = $this->request->getPost();
            unset($dataArray['password']);
            $dataArray += ['password' => $newpass];

            if ($this->CommonModel->updateData('tbl_users', 'user_id', $_SESSION['user_id'], $dataArray) == true) {
                // updated
            }
        }

        if ($this->request->getPost('oldpassword')) { //to change password
            $passArray = [
                'email' => $_SESSION['email'],
                'password'  => md5($this->request->getPost('oldpassword'))
            ];

            $result = $this->CommonModel->checkWhere('tbl_users', $passArray);
            
            if (count($result) > 0) {
                $newpass = md5($this->request->getPost('newpassword'));
                if ($this->CommonModel->updateData('tbl_users', 'user_id', $_SESSION['user_id'], ['password' => $newpass]) == true) {
                    // password updated
                }
            }
        }

        if (!isset($_SESSION['user_id'])) {
        return redirect()->to(base_url('login'));
        }

        $data['enquiries'] = $this->CommonModel->getDataWhere('tbl_enquiries', 'user_id', $_SESSION['user_id']);
        $data['profile'] = $this->CommonModel->getDataWhere('tbl_users', 'user_id', $_SESSION['user_id']);
        return view('home/welcome', $data);
    }

    function signout()
    {
        $this->session->destroy();
        return redirect()->to('login');
    }

    public function register()
    {
        if ($this->request->getPost()) {
            $dataArray = $this->request->getPost();
            $newpass = md5($this->request->getPost('password'));

            unset($dataArray['password']);
            $dataArray += ['password' => $newpass];
        
            if ($this->CommonModel->InsertData('tbl_users', $dataArray) == true) {
                $loginArray = [
                    'email' => $this->request->getPost('email'), 
                    'password' => md5($this->request->getPost('password'))
                ];

                $result = $this->CommonModel->checkWhere('tbl_users', $loginArray);
                if (count($result) > 0) {
                    $newdata = [
                        'user_id'  => $result[0]->user_id,
                        'fullname'  => $result[0]->fullname,
                        'email'     => $result[0]->email,
                        'mobile'     => $result[0]->mobile,
                        'logged_in' => TRUE
                    ];

                    $this->session->set($newdata);
                    return redirect()->to('welcome');
                }
            }
        }

        return view('home/register');
    }
}
