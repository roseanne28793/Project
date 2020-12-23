<?php
class nursemodel extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function getProvince(){
        $this->db->order_by('province_name', 'ASC');
        $query = $this->db->get('province');
        return $query->result();
    }

    public function getcity_query($province_id){
        $this->db->order_by('city_name', 'ASC');
        $query = $this->db->get_where('city', array('province_id' => $province_id));
        return $query->result();
    }

    public function getbarangay_query($city_id){
        $this->db->order_by('barangay_name', 'ASC');
        $query = $this->db->get_where('barangay', array('city_id' => $city_id));
        return $query->result();
    }
}
?>