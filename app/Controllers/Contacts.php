<?php

namespace App\Controllers;

use App\Models\CommonModel;

class Contacts extends BaseController
{
    protected $CommonModel;

    public function __construct()
    {
        $this->CommonModel = new CommonModel();
    }

    public function manage()
    {
        $data['contacts'] = $this->CommonModel->getData('tbl_contacts');
        return view('admin/manage-contact', $data);
    }
}
