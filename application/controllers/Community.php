<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Community extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		if ($this->session->userdata('logged')<>1) {
			redirect(site_url('auth'));
		}
		$this->load->model('User_model');
		$this->load->model('Setting_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data = array(
			'pageTitle' => 'Dashboard', 
			);

		$this->load->view('theme/backend_tpl_header',$data);
		$this->load->view('community/home', $data);		
		$this->load->view('theme/backend_tpl_footer');	
	}

	public function members()
	{
		$q = urldecode($this->input->get('q', TRUE));
		$start = intval($this->input->get('start'));

		if ($q <> '') {
			$config['base_url'] = base_url() . 'user/index.html?q=' . urlencode($q);
			$config['first_url'] = base_url() . 'user/index.html?q=' . urlencode($q);
		} else {
			$config['base_url'] = base_url() . 'user/index.html';
			$config['first_url'] = base_url() . 'user/index.html';
		}

		$config['per_page'] = 10;
		$config['group_per_page'] = 10;
		$config['page_query_string'] = TRUE;
		$config['total_rows'] = $this->User_model->total_rows($q);
		
		$user = $this->User_model->get_limit_data($config['per_page'], $start, $q);
		$group = $this->Setting_model->get_all();

		$this->load->library('pagination');
		$this->pagination->initialize($config);

		$data = array(
			'user_data' => $user,
			'group_data' => $group,
			'q' => $q,
			'pagination' => $this->pagination->create_links(),
			'total_rows' => $config['total_rows'],
			'start' => $start,
			'pageTitle' => 'Manage Members',
			'action' => site_url('user/access_action'),
			);

		$this->load->view('theme/backend_tpl_header',$data);
		$this->load->view('community/members', $data);		
		$this->load->view('theme/backend_tpl_footer');	        
	}

	public function groups()
	{
		$q = urldecode($this->input->get('q', TRUE));
		$start = intval($this->input->get('start'));

		if ($q <> '') {
			$config['base_url'] = base_url() . 'setting/index.html?q=' . urlencode($q);
			$config['first_url'] = base_url() . 'setting/index.html?q=' . urlencode($q);
		} else {
			$config['base_url'] = base_url() . 'setting/index.html';
			$config['first_url'] = base_url() . 'setting/index.html';
		}

		$config['per_page'] = 10;
		$config['page_query_string'] = TRUE;
		$config['total_rows'] = $this->Setting_model->total_rows($q);
		$setting = $this->Setting_model->get_limit_data($config['per_page'], $start, $q);

		$this->load->library('pagination');
		$this->pagination->initialize($config);

		$data = array(
			'setting_data' => $setting,
			'q' => $q,
			'pagination' => $this->pagination->create_links(),
			'total_rows' => $config['total_rows'],
			'start' => $start,
			'pageTitle' => 'Manage Setting',
			);
		$this->load->view('theme/backend_tpl_header',$data);
		$this->load->view('community/groups', $data);	
		$this->load->view('theme/backend_tpl_footer');          
	}	

	public function register() 
	{
		$data = array(
			'pageTitle' => 'Registrasi',
			'button' => 'Registrasi',
			'action' => site_url('community/register_action'),
			'id_user' => set_value('id_user'),
			'create_time' => set_value('create_time'),
			'update_time' => set_value('update_time'),
			'visit_time' => set_value('visit_time'),
			'fullname' => set_value('fullname'),
			'gender' => set_value('gender'),
			'birth' => set_value('birth'),
			'email' => set_value('email'),
			'username' => set_value('username'),
			'password' => set_value('password'),
			'level' => set_value('level'),
			'division' => set_value('division'),
			'image' => set_value('image'),
			'ipaddress' => set_value('ipaddress'),
			'active' => set_value('active'),
			'status' => set_value('status'),
			);
		$this->load->view('theme/backend_tpl_header',$data);
		$this->load->view('community/register',$data);
		$this->load->view('theme/backend_tpl_footer');	         
	}

	public function register_action() 
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->register();
		} else {

			$data = array(
				'create_time' => date('Y-m-d h:i:s'),
				'update_time' => date('Y-m-d h:i:s'),
				'visit_time' => date('Y-m-d h:i:s'),
				'fullname' => $this->input->post('fullname',TRUE),
				'gender' => $this->input->post('gender',TRUE),
				'birth' => date('Y-m-d'),
				'email' => $this->input->post('email',TRUE),
				'username' => $this->input->post('username',TRUE),
				'password' => md5($this->input->post('password',TRUE)),
				'level' => 3,
				'division' => 0,
				'image' => "avatar.png",
				'ipaddress' => 0,
				'active' => 0,
				'status' => 0,
				);

			$this->User_model->insert($data);
			redirect(site_url('community/members'));
		}

	}

	public function _rules() 
	{
		$this->form_validation->set_rules('fullname', 'fullname', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');

		$this->form_validation->set_rules('id_user', 'id_user', 'trim');
		$this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');
	}	


	// ADD GROUP

	public function group() 
	{
		$data = array(
			'pageTitle' => 'Add Setting',
			'button' => 'Submit',
			'action' => site_url('community/group_action'),
			'id_site' => set_value('id_site'),
			'name' => set_value('name'),
			'description' => set_value('description'),
			'keywords' => set_value('keywords'),
			'favicon' => "favicon.png",
			'logo' => "logo.png",
			'address' => set_value('address'),
			'phone' => set_value('phone'),
			'email' => set_value('email'),
			'facebook' => set_value('facebook'),
			'instagram' => set_value('instagram'),
			'twitter' => set_value('twitter'),
			'status' => 1,
			);
		
		$this->load->view('theme/backend_tpl_header',$data);
		$this->load->view('community/group', $data);
		$this->load->view('theme/backend_tpl_footer');          
	}

	// GROUP VALIDATION

	public function group_action() 
	{
		$this->_rules_group();

		if ($this->form_validation->run() == FALSE) {
			$this->group();
		} else {
			$data = array(
				'name' => $this->input->post('name',TRUE),
				'description' => $this->input->post('description',TRUE),
				'keywords' => $this->input->post('keywords',TRUE),
				'favicon' => "favicon.png",
				'logo' => "logo.png",
				'address' => $this->input->post('address',TRUE),
				'phone' => $this->input->post('phone',TRUE),
				'email' => $this->input->post('email',TRUE),
				'facebook' => $this->input->post('facebook',TRUE),
				'instagram' => $this->input->post('instagram',TRUE),
				'twitter' => $this->input->post('twitter',TRUE),
				'status' => 1,
				);

			$this->Setting_model->insert($data);
			$this->session->set_flashdata('message', 'Create Record Success');
			redirect(site_url('community/groups'));
		}
	}	


	public function _rules_group() 
	{
		$this->form_validation->set_rules('name', 'name', 'trim|required');
		$this->form_validation->set_rules('description', 'description', 'trim|required');
		// $this->form_validation->set_rules('keywords', 'keywords', 'trim|required');
		// $this->form_validation->set_rules('address', 'address', 'trim|required');
		// $this->form_validation->set_rules('logo', 'logo', 'trim|required');
		// $this->form_validation->set_rules('favicon', 'favicon', 'trim|required');
		// $this->form_validation->set_rules('phone', 'phone', 'trim|required');
		// $this->form_validation->set_rules('email', 'email', 'trim|required');
		// $this->form_validation->set_rules('facebook', 'facebook', 'trim|required');
		// $this->form_validation->set_rules('instagram', 'instagram', 'trim|required');
		// $this->form_validation->set_rules('twitter', 'twitter', 'trim|required');
		// $this->form_validation->set_rules('status', 'status', 'trim|required');
		$this->form_validation->set_rules('id_site', 'id_site', 'trim');
		$this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');
	}	

	public function groupView($id) 
	{
		$row = $this->Setting_model->get_by_id($id);
		if ($row) {
			$data = array(
				'id_site' => $row->id_site,
				'name' => $row->name,
				'description' => $row->description,
				'keywords' => $row->keywords,
				'favicon' => $row->favicon,
				'logo' => $row->logo,
				'address' => $row->address,
				'phone' => $row->phone,
				'email' => $row->email,
				'facebook' => $row->facebook,
				'instagram' => $row->instagram,
				'twitter' => $row->twitter,
				'status' => $this->User_model->status($row->status),
				);
			$data['pageTitle'] = 'Detail';
			$this->load->view('theme/backend_tpl_header',$data);
			$this->load->view('community/groupView', $data);
			$this->load->view('theme/backend_tpl_footer');    

		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('setting'));
		}
	}	

	public function groupEdit($id) 
	{
		$row = $this->Setting_model->get_by_id($id);

		if ($row) {
			$data = array(
				'pageTitle' => 'Edit Setting',
				'button' => 'Update',
				'action' => site_url('community/groupEdit_action'),
				'id_site' => set_value('id_site', $row->id_site),
				'name' => set_value('name', $row->name),
				'description' => set_value('description', $row->description),
				'keywords' => set_value('keywords', $row->keywords),
				'favicon' => set_value('favicon', $row->favicon),
				'logo' => set_value('logo', $row->logo),
				'address' => set_value('address', $row->address),
				'phone' => set_value('phone', $row->phone),
				'email' => set_value('email', $row->email),
				'facebook' => set_value('facebook', $row->facebook),
				'instagram' => set_value('instagram', $row->instagram),
				'twitter' => set_value('twitter', $row->twitter),
				'status' => set_value('status', $row->status),
				);

			$this->load->view('theme/backend_tpl_header',$data);
			$this->load->view('community/group', $data);
			$this->load->view('theme/backend_tpl_footer');  
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('community/groups'));
		}
	}

	public function groupEdit_action() 
	{
		$this->_rules_group();

		if ($this->form_validation->run() == FALSE) {
			$this->groupEdit($this->input->post('id_site', TRUE));
		} else {
			$data = array(
				'name' => $this->input->post('name',TRUE),
				'description' => $this->input->post('description',TRUE),
				'keywords' => $this->input->post('keywords',TRUE),
				'favicon' => $this->input->post('favicon',TRUE),
				'logo' => $this->input->post('logo',TRUE),
				'address' => $this->input->post('address',TRUE),
				'phone' => $this->input->post('phone',TRUE),
				'email' => $this->input->post('email',TRUE),
				'facebook' => $this->input->post('facebook',TRUE),
				'instagram' => $this->input->post('instagram',TRUE),
				'twitter' => $this->input->post('twitter',TRUE),
				'status' => $this->input->post('status',TRUE),
				);

			$this->Setting_model->update($this->input->post('id_site', TRUE), $data);
			$this->session->set_flashdata('message', 'Update Record Success');
			redirect(site_url('community/groupview/'.$row->id_site));
		}
	}	

	public function groupRemove($id) 
	{
		$row = $this->Setting_model->get_by_id($id);

		if ($row) {
			$this->Setting_model->delete($id);
			$this->session->set_flashdata('message', 'Delete Record Success');
			redirect(site_url('community/groups'));
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('community/groups'));
		}
	}	

	public function avatar() 
	{
		$row = $this->User_model->get_by_id($this->session->userdata('id'));

		if ($row) {
			$data = array(
				'pageTitle' => 'Edit Avatar',
				'button' => 'Edit Avatar',
				'action' => site_url('user/avatar_action'),
				'id_user' => set_value('id_user', $row->id_user),
				'image' => set_value('image', $row->image),
				);

			$this->load->view('theme/backend_tpl_header',$data);
			$this->load->view('user/user_form_avatar', $data);
			$this->load->view('theme/backend_tpl_footer');  

		} else {

			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('user/avatar'));

		}
	}

	function avatar_action()  
	{  
		if(isset($_FILES["image"]["name"]))  
		{  
			$config['upload_path'] = './assets/uploads/avatar/big/'; 
			$config['allowed_types'] = 'jpg|jpeg|png|gif';  
			$config['max_size'] = '262144';

			$new_name = $this->session->userdata('username');
			$config['file_name'] = $new_name;   
			$this->load->library('upload', $config);  
			$this->upload->overwrite = true;

			if(!$this->upload->do_upload('image'))  
			{  
				echo $this->upload->display_errors();  
			}  
			else  
			{  
				$data = $this->upload->data();  

				$config['image_library'] = 'gd2';  
				$config['source_image'] = './assets/uploads/avatar/big/'.$data["file_name"];  
				$config['create_thumb'] = FALSE;  
				$config['maintain_ratio'] = FALSE;  
				$config['quality'] = '40%';  
				$config['width'] = 200;  
				$config['height'] = 200;  
				$config['new_image'] = './assets/uploads/avatar/middle/'.$data["file_name"];  
				$this->load->library('image_lib', $config);  
				$this->image_lib->overwrite = true;
				$this->image_lib->resize();  


				$update = array(
					'image' => $data["file_name"],
					);

				$this->User_model->update($this->session->userdata('id'), $update);

				echo '<img src="'.base_url().'./assets/uploads/avatar/middle/'.$data["file_name"].'" class="img-thumbnail" />';  
			}  
		}  
	}  

}
