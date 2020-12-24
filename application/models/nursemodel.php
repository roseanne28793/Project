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

    public function getstatus(){
        $query1 = $this->db->get('status');
        return $query1->result();
    }

    public function getsuffix(){
        $query2 = $this->db->get('suffix');
        return $query2->result();
    }

    public function getmembership(){
        $query3 = $this->db->get('membership');
        return $query3->result();
    }

    public function getsurgeon(){
        $query4 = $this->db->get('surgeon');
        return $query4->result();
    }

    public function getscrubstaff(){
        $query5 = $this->db->get('scrubstaff');
        return $query5->result();
    }

    public function getcirculatingstaff(){
        $query6 = $this->db->get('circulating_staff');
        return $query6->result();
    }

    public function getanesthesiologist(){
        $query7 = $this->db->get('anesthesiologist');
        return $query7->result();
    }

    function savepatient(){
        $data = array(
            'case_no' => $this->input->post('case_no'),
            'room_no' => $this->input->post('room_no'),
            'case_date' => $this->input->post('case_date'),
            'first_name' => $this->input->post('fname'),
            'middle_name' => $this->input->post('mname'),
            'last_name' => $this->input->post('lname'),
            'suffix_name' => $this->input->post('suffix_name'),
            'birthday' => $this->input->post('textbirthdate'),
            'age' => $this->input->post('lblage'),
            'sex' => $this->input->post('sex'),
            'status' => $this->input->post('status'),
            'address' => $this->input->post('address')
        );
        $this->db->insert('patient_info', $data);
    }
}
?>