<?php 
    class Tanza extends CI_Controller{
        function __Construct(){
            parent ::__Construct();
            $this->load->library('session');
            $this->load->model('Tanza_model');

        }

        public function doctors(){
            $data['title'] = 'Doctors';
            $data['doctor']= $this->Tanza_model->get_doctors();

            $this->load->view('web/header');
            $this->load->view('web/doctors', $data);
            $this->load->view('web/footer');


        }

        public function dr_profile(){
            $data['title'] = 'Personal profile';
            $id = $this->uri->segment(3);
           $data['prof'] = $this->load->Tanza_model->get_dr_profile($id);

            $this->load->view('web/header');
            $this->load->view('web/dr_profile', $data);
            $this->load->view('web/footer');
        }

        public function articles(){
            $data['title'] = 'Posted articles';

            $data['articles'] = $this->Tanza_model->get_articles();

            $this->load->view('web/header');
            $this->load->view('web/articles', $data);
            $this->load->view('web/footer');
    

        }
        public function hospitals(){
            $data['title'] = "Registered hospitals";

            $data['hospitals'] = $this->Tanza_model->get_hospitals();
            $this->load->view('web/header');
            $this->load->view('web/hospitals', $data);
            $this->load->view('web/footer');
        }

        public function schools(){
            $data['title'] = "Registered schools";

            $data['schools'] = $this->Tanza_model->get_schools();
            $this->load->view('web/header');
            $this->load->view('web/schools', $data);
            $this->load->view('web/footer');
        }

        public function job(){
            $data['title'] = 'Job opportunity advertised';
            $data['jobs'] = $this->Tanza_model->get_job();

            $this->load->view('web/header');
            $this->load->view('web/job', $data);
            $this->load->view('web/footer');
        }
    }