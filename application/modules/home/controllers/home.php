<?php
class Home extends CI_Controller
{
	function index()
	{
	$this->load->helper('file');
	$this->load->model("home_model");
	$data['get'] = $this->home_model->get();
	$data['container'] = $this->load->view("container");
	$this->load->view("home_view", $data);
	}
	
	function insert()
	{
	$this->load->model("home_model");
	$this->home_model->insert();
	redirect("/","refresh");
	}
}