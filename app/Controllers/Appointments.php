<?php

namespace App\Controllers;

use App\Models\CommonModel;

class Appointments extends BaseController
{
    protected $CommonModel;

    public function __construct()
    {
        $this->CommonModel = new CommonModel();
    }

    public function index()
    {
        $data['appointments'] = $this->CommonModel->getData('tbl_appointments');
        return view('admin/manage-appointment', $data);
    }

    public function add()
    {
        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->CommonModel->insertData('tbl_appointments', $data);
            return redirect()->to('appointments');
        }

        return view('admin/add-appointment');
    }

    public function edit($id)
    {
        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->CommonModel->updateData('tbl_appointments', 'appointment_id', $id, $data);
            return redirect()->to('appointments');
        }

        $result = $this->CommonModel->getDataWhere('tbl_appointments', 'appointment_id', $id);
        $data['appointment'] = (array)$result[0]; // convert stdClass to array
        return view('admin/update-appointment', $data);
    }

    public function delete($id)
    {
        $this->CommonModel->deleteData('tbl_appointments', 'appointment_id', $id);
        return redirect()->to('appointments');
    }
}
