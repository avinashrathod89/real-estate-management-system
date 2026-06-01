<?php

namespace App\Models;

use CodeIgniter\Model;

class CommonModel extends Model
{
    //insert record
    function InsertData($table, $dataArray){
        return $this->db->table($table)->insert($dataArray);
    }

    //get record
    function getData($table){
        return $this->db->table($table)->get()->getResult();
    }

    //delete
    function deleteData($table, $column, $value){
        return $this->db->table($table)->where($column, $value)->delete();
    }

    //get data where
    function getDataWhere($table, $column, $value){

        if ($table=='tbl_property') {
            return $this->db->table($table)
            ->join('tbl_brokers', 'tbl_brokers.broker_id=tbl_property.broker_id', 'left')
            ->where($column, $value)->get()->getResult();

        }

        else if ($table=='tbl_enquiries') {
            return $this->db->table($table)
            ->join('tbl_property','tbl_property.property_id=tbl_enquiries.property_id')
            ->where($column, $value)->get()->getResult();

        }else {
          return $this->db->table($table)->where($column, $value)->get()->getResult();
        }
    }

    function searchWhere ($table, $keyword) {
        return $this->db->table($table)->like('title', $keyword)->get()->getResult();
    }


    //check user login
    function checkWhere($table, $dataArray){
        return $this->db->table($table)->where($dataArray)->get()->getResult();
    }

    //update record
    function updateData($table, $column, $value, $dataArray){
        return $this->db->table($table)->where($column, $value)->update($dataArray);
    }

}

