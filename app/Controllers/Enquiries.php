<?php

namespace App\Controllers;

use App\Models\CommonModel;

class Enquiries extends BaseController
{
    public function index()
    {
        $model = new CommonModel();
        $data['enquiries'] = $model->getData('tbl_enquiries');
        return view('admin/manage-enquiry', $data);
    }
}