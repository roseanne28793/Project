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
            'case_date' => $this->input->post('case_date'),
            'room_no' => $this->input->post('room_no'),
            'patient_fname' => $this->input->post('fname'),
            'patient_mname' => $this->input->post('mname'),
            'patient_lname' => $this->input->post('lname'),
            'patient_suffixname' => $this->input->post('suffix_name'),
            'patient_address' => $this->input->post('address'),
            'patient_province' => $this->input->post('province'),
            'patient_city/mun' => $this->input->post('city'),
            'patient_brgy' => $this->input->post('barangay'),
            'membership' => $this->input->post('membership'),
            'patient_age' => $this->input->post('lblage'),
            'patient_bday' => $this->input->post('textbirthdate'),
            'patient_sex' => $this->input->post('sex'),
            'patient_status' => $this->input->post('status'),
            'patient_trans_in' => $this->input->post('transin'),
            'patient_trans_out' => $this->input->post('transout')
        );
        $this->db->insert('patient_info', $data);

        $data = array(
            'case_no' => $this->input->post('case_no'),
            'opstaff_surgeon' => $this->input->post('surgeon'),
            'opstaff_asstsurgeon' => $this->input->post('asst_surgeon'),
            'opstaff_anes' => $this->input->post('anest'),
            'opstaff_scrubstaff' => $this->input->post('scrubstaff'),
            'opstaff_cstaff' => $this->input->post('cstaff'),
            'opstaff_otherpersonnel' => $this->input->post('otherpersonnel')
        );
        $this->db->insert('operation_staff', $data);

        $data = array(
            'inv_caseno' => $this->input->post('case_no'),
            'inv_sponges_preop' => $this->input->post('sponges_preop'),
            'inv_kellys_preop' => $this->input->post('kellys_preop'),
            'inv_needles_preop' => $this->input->post('needles_preop'),
            'inv_needles_postop' => $this->input->post('needles_postop'),
            'inv_sponges_postop' => $this->input->post('sponges_postop'),
            'inv_kellys_postop' => $this->input->post('kellys_postop')
        );
        $this->db->insert('inventory', $data);

        $data = array(
            'anes_caseno' => $this->input->post('case_no'),
            'anes_typeused' => $this->input->post('typeofanes'),
            'anes_began' => $this->input->post('anes_began'),
            'anes_ended' => $this->input->post('anes_ended')
        );
        $this->db->insert('anesthesia', $data);

        $data = array(
            'op_caseno' => $this->input->post('case_no'),
            'date_of_operation' => $this->input->post('dateoperation'),
            'op_started' => $this->input->post('op_started'),
            'op_ended' => $this->input->post('op_ended')
        );
        $this->db->insert('operation', $data);

        $data = array(
            'baby_caseno' => $this->input->post('case_no'),
            'baby_out' => $this->input->post('baby_out'),
            'baby_apgar' => $this->input->post('apgar'),
            'baby_sex' => $this->input->post('baby_sex')
        );
        $this->db->insert('baby', $data);

        $data = array(
            'diag_caseno' => $this->input->post('case_no'),
            'diag_preop' => $this->input->post('preop_diag'),
            'diag_postop' => $this->input->post('postop_diag'),
            'diag_op_performed' => $this->input->post('operative_performed'),
            'diag_specimens' => $this->input->post('specimen')
        );
        $this->db->insert('diagnosis', $data);
    }

    public function getPatient(){
        $this->db->order_by('patient_fname', 'ASC');
        $query = $this->db->get('patient_info');
        return $query->result();
    }

    public function getorcategory(){
        $query = $this->db->get('orcategory');
        return $query->result();
    }

    public function getorsubcategory($category_id){
        $query = $this->db->get_where('orsub_category', array('category_id' => $category_id));
        return $query->result();
    }

    // public function getparagraph_query($subcategory_id){
    //     $query = $this->db->get_where('chole_ioc_t-tube', array('subcategory_id' => $subcategory_id));
    //     return $query->result();
    // }

    // public function getorparagraph(){
    //     $query = $this->db->get('chole_ioc_t_tube');
    //     return $query->result();
    // }

    // public function getparagraph_query($category_id){
    //     $data = $this->db->get_where('chole_ioc_t-tube', array('subcategory_id' => $subcategory_id));
    //     if(num_rows($data)>0){
    //         return $data->result();
    //     }
    //     else{
    //         return false;
    //     }
    // }

    // public function getparagraph_query($category_id){
    //     $query = $this->db->get_where('chole_ioc_t_tube', array('subcategory_id' => $subcategory_id));
    // }

    // public function getparagraph_query($subcategory_id){
    //     $this->db->select(['chole_ioc_t_tube.first_paragraph']);
    //     $this->db->from('chole_ioc_t_tube');
    //     $paragraph = $this->db->get();
    //     return $paragraph->row();
    // }

    public function getparagraph_query($subcategory_id){
        $query = $this->db->get_where('chole_ioc_t_tube', ['subcategory_id' => $subcategory_id]);
        return $query->row();
    }
}
?>