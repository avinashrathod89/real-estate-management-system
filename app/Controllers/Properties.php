<?php

namespace App\Controllers;

use App\Models\CommonModel;

class Properties extends BaseController
{
    protected $CommonModel;

    public function __construct()
    {
        $this->CommonModel = new CommonModel(); // create object
    }

    public function add()
    {
        if ($this->request->getPost()) {
            $dataArray = $this->request->getPost();

            $photo = $this->request->getFile('photo_main');

            if ($photo && $photo->isValid() && !$photo->hasMoved()) {
                $newName = $photo->getRandomName();
                $photo->move(ROOTPATH . 'uploads', $newName);
                $dataArray['photo_main'] = $newName;
            }

            if ($this->CommonModel->insertData('tbl_property', $dataArray)) {
                return redirect()->to('properties');
            }
        }

        return view('admin/add-property');
    }

    public function manage()
    {
        $data['properties'] = $this->CommonModel->getData('tbl_property');
        return view('admin/manage-property', $data);
    }

    public function update($property_id)
    {
        if ($this->request->getPost()) {
            $dataArray = $this->request->getPost();

            $photo = $this->request->getFile('photo_main');
            $oldphoto = $this->request->getPost('oldphoto');

            if ($photo && $photo->isValid() && !$photo->hasMoved()) {
                $newName = $photo->getRandomName();
                $photo->move(ROOTPATH . 'uploads', $newName);
            } else {
                $newName = $oldphoto ?? 'default.jpg';
            }

            unset($dataArray['oldphoto']);
            $dataArray['photo_main'] = $newName;

            if ($this->CommonModel->updateData('tbl_property', 'property_id', $property_id, $dataArray)) {
                return redirect()->to('properties');
            }
        }

        $data['property'] = $this->CommonModel->getDataWhere('tbl_property', 'property_id', $property_id);
        return view('admin/update-property', $data);
    }

    public function delete($property_id)
    {
        if ($this->CommonModel->deleteData('tbl_property', 'property_id', $property_id)) {
            return redirect()->to('properties');
        }
    }
}
