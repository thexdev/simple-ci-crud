<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('member_model', 'member');
	}

	// Show all data member
	public function index()
	{
		$data['list_member'] = $this->member->view();

		$this->load->view('list_member', $data);
	}

	// Page to add new member
	public function add()
	{
		$this->load->view('add_member');
	}

	// Page to update member
	public function edit($id)
	{
		$data['member'] = $this->member->view($id);

		$this->load->view('edit_member', $data);
	}
	
	// Insert new data member to database
	public function insert()
	{
		$data['username'] = $this->input->post('username');
		$data['address']  = $this->input->post('address');
		$data['email']    = $this->input->post('email');

		$this->member->add($data);
	}

	public function update($id)
	{
		$data['username'] = $this->input->post('username');
		$data['email'] = $this->input->post('email');
		$data['address'] = $this->input->post('address');

		if ($this->member->update($id, $data)) {
			redirect(base_url());
		}
		else {
			redirect(base_url());
		}
	}

	// Delete exist data member in database
	public function delete( $id )
	{
		$data['id']     = $id;
		$data['result'] = $this->member->delete($data['id']);

		if ($data['result']) {
			redirect(base_url());
		}
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/Members.php */