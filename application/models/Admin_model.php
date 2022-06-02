<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

    function __construct() {
        parent :: __construct();
    }

    function getdata($table_name, $where_clause=array(), $order_by=''){

        $this->db->select('*');

        $this->db->from($table_name);
        if(count($where_clause) > 0){
            $this->db->where($where_clause);
        }
        if(strlen($order_by) > 0){
          $this->db->order_by($order_by);
        }
        $query = $this->db->get();
        return $query->result();

    }

    function getdataInArray($table_name,$column='',$where_clause=array()){
        $selectColumns = '*';
        if(!empty($column)) {
            $selectColumns = $column;
        }
        $this->db->select($selectColumns);
        $this->db->from($table_name);
        if(count($where_clause) > 0){
            $this->db->where($where_clause);
        }
        $query = $this->db->get();
        return json_decode(json_encode($query->result()), true);
    }

    function get_dropdown_value($table,$field1,$field2,$condition = ''){

        $value = array();
        $sql = 'Select '.$field1.', '.$field2.' From '.$table;
        $sql .= (strlen($condition) > 0) ? ' where '.$condition : '';
        $data = $this->db->query($sql);
        if($data->num_rows() > 0){
            foreach($data->result_array() as $r){
                $value[$r[$field1]] = $r[$field2];
            }
        }
      return $value;
    }

    function insert($table_name,$data){

        $this->db->insert($table_name,$data);
        $insertid = $this->db->insert_id();
        return $insertid;
    }

    function update($table_name,$data,$where_clause=array()){

        if(count($where_clause) > 0){
            $this->db->where($where_clause);
        }
        $this->db->update($table_name, $data);
    }

    function delete($table_name,$where_clause=array()){
        if(count($where_clause) > 0){
            $this->db->where($where_clause);
        }
        $this->db->delete($table_name);
    }

    function dateFormat($format='d-m-Y h:ia', $givenDate=null){
        return date($format, strtotime($givenDate));
    }

    function ingetdata($table_name,$column_name='',$where_clause=array()){

        $this->db->select('*');
        $this->db->from($table_name);
        if(count($where_clause) > 0){
            $this->db->where_in($column_name,$where_clause);
        }
        $query = $this->db->get();
        return $query->result();

    }

    function getsingledata($table_name,$where_clause=array()){

        $this->db->select('*');
        $this->db->from($table_name);
        if(count($where_clause) > 0){
            $this->db->where($where_clause);
        }
        // if(strlen($order_by) > 0){
        //   $this->db->order_by($order_by);
        // }
        $query = $this->db->get();
        $data = $query->result_array();
        return $data[0];

    }

    function get_details($user_details){

        $arr=array();
        if(count($user_details) > 0){
            foreach ($user_details as $key => $row) {
                // $user_details_id = $aauth_users[$key];
                $user_details1[] = array('Name' => $row );
            }
        } else{
            $user_details1 = array();
        }
        $arr = array_filter($user_details1);
        return $arr;

    }

    function getDataIfRecordsExistInTbl($tableName, $whereClause) {
        $this->db->select('*');
        $this->db->from($tableName);
        $this->db->where($whereClause);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
          return $query->result();
        } else {
          return false;
        }
    }
}
