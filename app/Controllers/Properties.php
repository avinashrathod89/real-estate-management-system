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

            // Handle all 4 property photo fields the same way
            foreach (['photo_main', 'photo2', 'photo3', 'photo4'] as $field) {
                $photo = $this->request->getFile($field);

                if ($photo && $photo->isValid() && !$photo->hasMoved()) {
                    $newName = $photo->getRandomName();
                    $photo->move(ROOTPATH . 'uploads', $newName);
                    $dataArray[$field] = $newName;
                } else {
                    // No file selected for this slot; don't try to save an empty upload
                    unset($dataArray[$field]);
                }
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

            // Handle all 4 property photo fields the same way.
            // Each has a matching hidden "oldphoto_<field>" so we can keep
            // the existing image when no new file is uploaded for that slot.
            foreach (['photo_main', 'photo2', 'photo3', 'photo4'] as $field) {
                $photo = $this->request->getFile($field);
                $oldphoto = $this->request->getPost('old' . $field);

                if ($photo && $photo->isValid() && !$photo->hasMoved()) {
                    $newName = $photo->getRandomName();
                    $photo->move(ROOTPATH . 'uploads', $newName);
                } else {
                    $newName = $oldphoto ?? null;
                }

                unset($dataArray['old' . $field]);

                if ($newName !== null) {
                    $dataArray[$field] = $newName;
                }
            }

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