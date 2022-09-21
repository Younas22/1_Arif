<?php

if ($contant_view == 'account/signin') {
	$this->load->view($contant_view);
}else{
	// $this->load->view('side_bar');
	$this->load->view('header');
	$this->load->view($contant_view);
	$this->load->view('footer');
}