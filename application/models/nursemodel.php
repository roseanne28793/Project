<?php
class nursemodel extends CI_Model{
    function getProvince(){
        $this->db->order_by('province_name', 'ASC');
        $query = $this->db->get('province');
        return $query->result();
    }

    function fetch_city($province_id){
        // $query = $this->db->get_where('city', array('province_id' => $province_id));
        // return $query;
        $this->db->where('province_id', $province_id);
        $this->db->order_by('city_name', 'ASC');
        $query = $this->db->get('city');
        $output = '<option value="">Select City</option>';
        foreach($query->result() as $row)
        {
        $output .= '<option value="'.$row->city_id.'">'.$row->city_name.'</option>';
        }
        return $output;
    }

    function fetch_barangay($city_id){
        $this->db->where('city_id', $city_id);
        $this->db->order_by('barangay_name', 'ASC');
        $query = $this->db->get('barangay');
        $output = '<option value="">Select Barangay</option>';
        foreach($query->result() as $row)
        {
        $output .= '<option value="'.$row->barangay_id.'">'.$row->barangay_name.'</option>';
        }
        return $output;
    }
}
?>