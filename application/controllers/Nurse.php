<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Nurse extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('nursemodel');
        }

        function encode(){
            $data['province'] = $this->nursemodel->getProvince();
            $this->load->view('encode', $data);
        }

        function fetch_city(){
            // $province_id = $this->input->post('id',TRUE);
            // $data = $this.nursemodel->getCity($province_id)->result();
            // echo json_encode($data);
            if($this->input->post('province_id')){
                echo $this->dynamic_dependent_model->fetch_city($this->input->post('province_id'));
            }

            $this->Nursermodel->fetch_city($data);
        }

        function fetch_barangay(){
            if($this->input->post('city_id')){
                echo $this->dynamic_dependent_model->fetch_barangay($this->input->post('city_id'));
            }
        }
    }
?>