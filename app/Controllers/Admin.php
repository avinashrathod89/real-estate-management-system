<?php
namespace App\Controllers;

use App\Models\CommonModel;

class Admin extends BaseController
{
    protected $session;
    protected $CommonModel;

    public function __construct()
    {
        $this->CommonModel = new CommonModel();
        $this->session = \Config\Services::session();
        $this->session->start();
    }

    // Agar koi index call kare to login dikhe
    public function index()
    {
        return $this->login();
    }

    public function login()
    {
        if ($this->request->getPost()) {
            $dataArray = [
                'email' => $this->request->getPost('email'),
                'password' => md5($this->request->getPost('password'))
            ];

            $result = $this->CommonModel->checkWhere('tbl_users', $dataArray);

            if (count($result) > 0) {
                $user = $result[0];
                $sessionData = [
                    'user_id'   => $user->user_id,
                    'fullname'  => $user->fullname,
                    'email'     => $user->email,
                    'logged_in' => true
                ];
                $this->session->set($sessionData);
                return redirect()->to('dashboard');
            } else {
                return redirect()->back()->with('error', 'Invalid Email or Password');
            }
        }

        return view('admin/login');
    }

    public function dashboard()
    {
        $model = new \App\Models\CommonModel();

        $data['total_brokers']     = count($model->getData('tbl_brokers'));
        $data['total_properties']  = count($model->getData('tbl_property'));
        $data['total_enquiries']   = count($model->getData('tbl_enquiries'));
        $data['total_contacts']    = count($model->getData('tbl_contacts'));
        $data['total_staff']       = count($model->getData('tbl_staff'));
        $data['total_appointments']= count($model->getData('tbl_appointments'));

        return view('admin/dashboard', $data);
    }
}
