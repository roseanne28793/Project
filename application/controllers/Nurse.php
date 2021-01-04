<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Nurse extends CI_Controller{

        public function __construct(){
            parent::__construct();
            if($this->session->userdata('logged_in') !== TRUE){
                redirect('Login');
            }
            $this->load->model('nursemodel');
        }

        public function encode(){
            if($this->session->userdata('level')==='2'){
                $data['refprovince'] = $this->nursemodel->getProvince();
                $data['status'] = $this->nursemodel->getstatus();
                $data['suffix'] = $this->nursemodel->getsuffix();
                $data['membership'] = $this->nursemodel->getmembership();
                $data['surgeon'] = $this->nursemodel->getsurgeon();
                $data['scrubstaff'] = $this->nursemodel->getscrubstaff();
                $data['circulating_staff'] = $this->nursemodel->getcirculatingstaff();
                $data['anesthesiologist'] = $this->nursemodel->getanesthesiologist();

                $this->load->view('encode', $data);
                $this->load->view('include/footer');
            }
            else{
                echo "Access Denied";
            }
        }

        public function getcity(){
            $provCode = $this->input->post('provCode');
            $refcitymun = $this->nursemodel->getcity_query($provCode);
            if(count($refcitymun)>0){
                $pro_select_box = '';
                $pro_select_box .= '<option value="">Select City/Municipality</option>';
                foreach ($refcitymun as $row){
                    $pro_select_box .='<option value="'.$row->citymunCode.'">'.$row->citymunDesc.'</option>';
                }
                echo json_encode($pro_select_box);
            }
        }

        public function getbarangay(){
            $citymunCode = $this->input->post('citymunCode');
            $refbrgy = $this->nursemodel->getbarangay_query($citymunCode);
            if(count($refbrgy)>0){
                $pro_select_box = '';
                $pro_select_box .= '<option value="">Select Barangay</option>';
                foreach ($refbrgy as $row){
                    $pro_select_box .='<option value="'.$row->brgyCode.'">'.$row->brgyDesc.'</option>';
                }
                echo json_encode($pro_select_box);
            }
        }

        public function addpatient(){

            $this->form_validation->set_rules('case_no', 'Case No.', 'required');
            $this->form_validation->set_rules('room_no', 'Room No.', 'required');
            $this->form_validation->set_rules('case_date', 'Date', 'required');
            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('textbirthdate', 'Birthday', 'required');
            $this->form_validation->set_rules('lblage', 'Age', 'required');
            $this->form_validation->set_rules('sex', 'Sex', 'required');
            $this->form_validation->set_rules('status', 'Status', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('province', 'Province', 'required');
            $this->form_validation->set_rules('city', 'City', 'required');
            $this->form_validation->set_rules('barangay', 'Barangay', 'required');
            $this->form_validation->set_rules('membership', 'Membership', 'required');

            if($this->form_validation->run() == TRUE){
                echo 'form is validated';

                $this->nursemodel->savepatient();
                redirect('Nurse/encode');
            }
            else{
                $this->session->set_flashdata('form', '<div class="alert alert-success">Patient Information Submission Successful.</div>');
                $this->load->view('encode');
            }
        }

        public function ortech(){
            $data['patient_info'] = $this->nursemodel->getPatient();
            $data['orcategory'] = $this->nursemodel->getorcategory();

            $this->load->view('ortech', $data);
        }

        public function getsubcategory(){
            $category_id = $this->input->post('category_id');
            $orsub_category = $this->nursemodel->getorsubcategory($category_id);
            if(count($orsub_category)>0){
                $pro_select_box = '';
                $pro_select_box .= '<option value="">Select OR Sub-Category</option>';
                foreach ($orsub_category as $row){
                    $pro_select_box .='<option value="'.$row->subcategory_id.'">'.$row->sub_categoryname.'</option>';
                }
                echo json_encode($pro_select_box);
            }
        }

        public function getparagraphfirst(){
            $subcategory_id = $this->input->post('subcategory_id');
            $chole_ioc= $this->nursemodel->getparagraph_query($subcategory_id);
            if(count($chole_ioc)>0){
                $pro_select_box_first = '';
                foreach ($chole_ioc as $row){
                    $pro_select_box_first .= $row->first_paragraph;
                }
                echo json_encode($pro_select_box_first);
            }
        }

        public function getparagraphsecond(){
            $subcategory_id = $this->input->post('subcategory_id');
            $chole_ioc= $this->nursemodel->getparagraph_query($subcategory_id);
            if(count($chole_ioc)>0){
                $pro_select_box_second = '';
                foreach ($chole_ioc as $row){
                    $pro_select_box_second .= $row->second_paragraph;
                }
                echo json_encode($pro_select_box_second);
            }
        }

        public function getparagraphthird(){
            $subcategory_id = $this->input->post('subcategory_id');
            $chole_ioc= $this->nursemodel->getparagraph_query($subcategory_id);
            if(count($chole_ioc)>0){
                $pro_select_box_third = '';
                foreach ($chole_ioc as $row){
                    $pro_select_box_third .= $row->third_paragraph;
                }
                echo json_encode($pro_select_box_third);
            }
        }

        public function getparagraphfourth(){
            $subcategory_id = $this->input->post('subcategory_id');
            $chole_ioc= $this->nursemodel->getparagraph_query($subcategory_id);
            if(count($chole_ioc)>0){
                $pro_select_box_fourth = '';
                foreach ($chole_ioc as $row){
                    $pro_select_box_fourth .= $row->fourth_paragraph;
                }
                echo json_encode($pro_select_box_fourth);
            }
        }

        public function addortech(){
            $this->nursemodel->savepatientortech();
            redirect('Nurse/ortech');
        }

        public function previewortech(){
            // $this->nursemodel->previewortech();
            // red
        }
    }
?>