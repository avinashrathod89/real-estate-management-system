<?php

namespace App\Controllers;
use App\Models\CommonModel;

class Staff extends BaseController
{
    protected $commonModel;

    public function __construct()
    {
        $this->commonModel = new CommonModel();
    }

    public function index()
    {
        $data['staff'] = $this->commonModel->getData('tbl_staff');
        return view('admin/manage-staff', $data);
    }

    public function add()
    {
        return view('admin/add-staff');
    }

    public function insert()
    {
        $file = $this->request->getFile('photo');
        $photoName = '';

        if ($file && $file->isValid()) {
            $photoName = $file->getRandomName();
            $file->move('uploads/staff', $photoName);
        }

        $insertData = [
            'fullname' => $this->request->getPost('fullname'),
            'email' => $this->request->getPost('email'),
            'mobile' => $this->request->getPost('mobile'),
            'join_date' => $this->request->getPost('join_date'),
            'about' => $this->request->getPost('about'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'photo' => $photoName
        ];

        $this->commonModel->insertData('tbl_staff', $insertData);
        return redirect()->to(base_url('staff'))->with('success', 'Staff added successfully.');
    }

    public function edit($id)
    {
        $data['staff'] = $this->commonModel->getDataWhere('tbl_staff', 'staff_id', $id)[0];
        return view('admin/update-staff', $data);
    }

    public function update($id)
    {
        $staff = $this->commonModel->getDataWhere('tbl_staff', 'staff_id', $id)[0];
        $file = $this->request->getFile('photo');
        $photoName = $staff->photo;

        if ($file && $file->isValid()) {
            if ($photoName && file_exists('uploads/staff/' . $photoName)) {
                unlink('uploads/staff/' . $photoName);
            }
            $photoName = $file->getRandomName();
            $file->move('uploads/staff', $photoName);
        }

        $updateData = [
            'fullname' => $this->request->getPost('fullname'),
            'email' => $this->request->getPost('email'),
            'mobile' => $this->request->getPost('mobile'),
            'join_date' => $this->request->getPost('join_date'),
            'about' => $this->request->getPost('about'),
            'photo' => $photoName
        ];

        $password = $this->request->getPost('password');
        if (!empty($password)) {
            $updateData['password'] = password_hash($password, PASSWORD_DEFAULT);
        }

        $this->commonModel->updateData('tbl_staff', 'staff_id', $id, $updateData);
        return redirect()->to(base_url('staff'))->with('success', 'Staff updated successfully.');
    }

    public function delete($id)
    {
        $staff = $this->commonModel->getDataWhere('tbl_staff', 'staff_id', $id)[0];
        if ($staff->photo && file_exists('uploads/staff/' . $staff->photo)) {
            unlink('uploads/staff/' . $staff->photo);
        }

        $this->commonModel->deleteData('tbl_staff', 'staff_id', $id);
        return redirect()->to(base_url('staff'))->with('success', 'Staff deleted successfully.');
    }
}
