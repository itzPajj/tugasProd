<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }

    public function index()
    {

        $data['title'] = "My Profile";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['title'] = "Edit Profile";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            //image
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['upload_path'] = './assets/img/profile/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_img = $data['user']['image'];
                    if ($old_img != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile' . $old_img);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');


            $this->session->set_flashdata('massage', 'Your accound Successfull Update !');
            redirect('user');
        }
    }

    public function change()
    {

        $data['title'] = "Change Password";
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_pass', 'Curent Password', 'required|trim');
        $this->form_validation->set_rules('new_pass1', 'Password', 'required|trim|min_length[3]|matches[new_pass2]');
        $this->form_validation->set_rules('new_pass2', 'Password', 'required|trim|matches[new_pass1]');
        // $this->form_validation->set_rules('new_pass1', 'Password', 'required|trim|min_length[8]|matches[new_pass2]');
        // $this->form_validation->set_rules('new_pass2', 'Repeat Password', 'required|trim|matches[new_pass1]');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/change', $data);
            $this->load->view('templates/footer');

        } else {

            $current_pass = $this->input->post('current_pass');
            $new_pass = $this->input->post('new_pass1');

            if (!password_verify ($current_pass, $data['user']['password'])) {
                $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert"> Wrong Current Password ! </div>');
                redirect('user/change');

            } else {

                if ($current_pass == $new_pass) {
                    $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert"> New Password cant be the same as Current Password </div>');
                    redirect('user/change');
                }else{
                    $pass_hash = password_hash( $new_pass, PASSWORD_DEFAULT);

                    $this->db->set('password', $pass_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert"> Change password done ! </div>');
                    redirect('user/change');
                }
            }
        }
    }
}
