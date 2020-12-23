<?php
class nursemodel extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function getProvince(){
        $this->db->order_by('provDesc', 'ASC');
        $query = $this->db->get('refprovince');
        return $query->result();
    }

    public function getcity_query($provCode){
        $this->db->order_by('citymunDesc', 'ASC');
        $query = $this->db->get_where('refcitymun', array('provCode' => $provCode));
        return $query->result();
    }

    public function getbarangay_query($citymunCode){
        $this->db->order_by('brgyDesc', 'ASC');
        $query = $this->db->get_where('refbrgy', array('citymunCode' => $citymunCode));
        return $query->result();
    }
}
?>