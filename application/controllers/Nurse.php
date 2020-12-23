<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Nurse extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('nursemodel');
        }

        public function encode(){
            $data['province'] = $this->nursemodel->getProvince();
            $this->load->view('encode', $data);
        }

        public function getcity(){
            $province_id = $this->input->post('province_id');
            $city = $this->nursemodel->getcity_query($province_id);
            if(count($city)>0){
                $pro_select_box = '';
                $pro_select_box .= '<option value="">Select City</option>';
                foreach ($city as $row){
                    $pro_select_box .='<option value="'.$row->city_id.'">'.$row->city_name.'</option>';
                }
                echo json_encode($pro_select_box);
            }
        }

        public function getbarangay(){
            $city_id = $this->input->post('city_id');
            $barangay = $this->nursemodel->getbarangay_query($city_id);
            if(count($barangay)>0){
                $pro_select_box = '';
                $pro_select_box .= '<option value="">Select Barangay</option>';
                foreach ($barangay as $row){
                    $pro_select_box .='<option value="'.$row->barangay_id.'">'.$row->barangay_name.'</option>';
                }
                echo json_encode($pro_select_box);
            }
        }
    }
?>