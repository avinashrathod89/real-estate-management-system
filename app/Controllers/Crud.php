<?php

namespace App\Controllers;

use App\Models\CommonModel;

class Crud extends BaseController
{
     public function __construct()
    {
        $this->CommonModel = new CommonModel(); //create object
    }

    public function create()
    {
        if($this->request->getPost()){

            $dataArray = $this->request->getPost();

            $photo = $this->request->getFile('photo');

            if ($photo->isValid() && ! $photo->hasMoved()) {
                    $newName = $photo->getRandomName();
                    $photo->move(ROOTPATH . 'uploads', $newName);
            }

            $dataArray += ['photo'=>$newName];

            if($this->CommonModel->InsertData('tbl_users', $dataArray)==True){
                echo 'Success';
                return redirect()->to('read');
            }

        }
        return view('crud/create');
    }

    public function read()
    {
        $data['users'] = $this->CommonModel->getData('tbl_users');
        return view('crud/read',$data);
    }

    public function update($user_id)
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

            if($this->CommonModel->updateData('tbl_users', 'user_id', $user_id, $dataArray)==True){
                echo 'Success';
                return redirect()->to('read');
            }

        }

        $data['user'] = $this->CommonModel->getDataWhere('tbl_users', 'user_id', $user_id);
        return view('crud/update', $data);
    }

    public function delete($user_id)
    {
        if($this->CommonModel->deleteData('tbl_users', 'user_id', $user_id)==True){
                echo 'Success';
                return redirect()->to('read');
        }
    }

}
