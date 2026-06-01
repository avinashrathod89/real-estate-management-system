<?php

namespace App\Controllers;

use App\Models\CommonModel;

class Brokers extends BaseController
{
     public function __construct()
    {
        $this->CommonModel = new CommonModel(); //create object
    }

    public function add()
    {
        if($this->request->getPost()){

            $dataArray = $this->request->getPost();

            $photo = $this->request->getFile('photo');

            if ($photo->isValid() && ! $photo->hasMoved()) {
                    $newName = $photo->getRandomName();
                    $photo->move(ROOTPATH . 'uploads', $newName);
            }

            $dataArray += ['photo'=>$newName];

            if($this->CommonModel->insertData('tbl_brokers', $dataArray)){
                return redirect()->to('brokers');
            }
        }
        return view('admin/add-broker');
    }

    public function manage()
    {
        $data['brokers'] = $this->CommonModel->getData('tbl_brokers');
        
        return view('admin/manage-broker', $data);
    }

    public function update($broker_id)
    {

        if($this->request->getPost()){

            $dataArray = $this->request->getPost();

            $photo = $this->request->getFile('photo');

            if ($photo->isValid() && ! $photo->hasMoved()) {
                    $newName = $photo->getRandomName();
                    $photo->move(ROOTPATH . 'uploads', $newName);
            }else{
                $newName = $this->request->getPost('oldphoto');
            }

            unset($dataArray['oldphoto']);
            $dataArray += ['photo'=>$newName];

            if($this->CommonModel->updateData('tbl_brokers', 'broker_id', $broker_id, $dataArray)==True){
                echo 'Success';
                return redirect()->to('brokers');
            }

        }

        $data['broker'] = $this->CommonModel->getDataWhere('tbl_brokers', 'broker_id', $broker_id);

        return view('admin/update-broker', $data);
    }

    public function delete($broker_id)
    {
        if($this->CommonModel->deleteData('tbl_brokers', 'broker_id', $broker_id)==True){
                echo 'Success';
                return redirect()->to('brokers');
        }
    }

}
