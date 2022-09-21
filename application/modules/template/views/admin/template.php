<?php
	if ($contant_view == 'admin/sitemap') {
		$this->load->view($contant_view);
	}else{
		$this->load->view('admin/header');
		$this->load->view($contant_view);
		$this->load->view('admin/footer');	
	}

