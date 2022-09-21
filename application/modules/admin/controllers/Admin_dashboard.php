<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends MY_Controller {
 

		function __construct()
	{
		parent:: __construct();
		$this->load->model('Admin_dashboard_M','admin_dash');
		if(empty($this->session->userdata('logged_in')))
		{
		return redirect(base_url() . 'login');
		}
	} 
	

	public function index()
	{
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'admin/dashboard';
		$data['subscription'] = $this->db->order_by('id','desc')->limit(10)->get('subscription')->result();
		/*home email*/
		$data['category_count'] = $this->admin_dash->category_count();
		$data['blog_count'] = $this->admin_dash->blog_count();
		$data['subscription_count'] = $this->admin_dash->subscription_count();
		$this->template->admin_template($data);
	}


// category
	public function category()
	{
		$admin_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['blog_category'] = $this->db->get('blog_category')->result();
		$data['title'] = 'Blog Category';
		$data['contant_view'] = 'admin/category';
		$this->template->admin_template($data);
	}

	public function add_category()
	{
		$admin_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'Add Blog Category';
		$data['contant_view'] = 'admin/add_category';
		$this->template->admin_template($data);
	}

	public function category_added()
	{
		$this->db->insert('blog_category',$this->input->post());
		return redirect('admin/category');
	}

	public function edit_category($cat_id)
	{
		$admin_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['edit_category'] = $this->db->where('id',$cat_id)->get('blog_category')->row();
		$data['title'] = 'Edit Category';
		$data['contant_view'] = 'admin/edit_category';
		$this->template->admin_template($data);
	}


	public function update_category()
	{
		$cat_id = $this->input->post('cat_id');
		$category_title = $this->input->post('category_title');
        $updated = $this->db->where('id',$cat_id)->update('blog_category',array('category_title'=>$category_title));
        if ($updated) {
        	$this->session->set_flashdata('msg', 'blog Category updated!');
        	return redirect('admin/category');
        }
	}

	
	public function delete_category($cat_id)
	{
		 $deleted = $this->db->where('id',$cat_id)->delete('blog_category');
        if ($deleted) { 
        	$this->session->set_flashdata('del', 'blog Category deleted!');
        	return redirect('admin/category'); 
        }
	}


// blogs_data
	public function blogs_data()
	{
		$admin_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['blog'] = $this->db->select('blog.*,blog_category.category_title, blog_category.id as category_id')->from('blog')->join('blog_category', 'blog.	blog_cat_id = blog_category.id')->get()->result();
		$data['title'] = 'Blog';
		$data['contant_view'] = 'admin/blogs_data';
		$this->template->admin_template($data);
	}


// blogs
	public function blogs()
	{
		$admin_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['blog'] = $this->db->select('blog.*,blog_category.category_title, blog_category.id as category_id')->from('blog')->join('blog_category', 'blog.	blog_cat_id = blog_category.id')->order_by('id','desc')->get()->result();		
		$data['title'] = 'Blog';
		$data['contant_view'] = 'admin/blogs';
		$this->template->admin_template($data);
	}

	public function add_blogs()
	{
		$admin_id = $this->session->userdata('logged_in')->id;
		$data['blog_category'] = $this->db->get('blog_category')->result();
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'Add Blog';
		$data['contant_view'] = 'admin/add_blogs';
		$this->template->admin_template($data);
	}

	public function blogs_added()
	{

        $config['upload_path'] = './assets/admin/img/blog';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 51200;
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('img_a')) {
        	$file_data = $this->upload->data();
        	$img_a = $file_data['file_name'];
        }

    	if ($this->upload->do_upload('img_b')) {
        	$file_data = $this->upload->data();
        	$img_b = $file_data['file_name'];
        }


    	$blog_data =  [
    		'blog_cat_id'=>$this->input->post('category_id'),
    		'title_a'=>$this->input->post('title_a'),
    		'desc_a'=>$this->input->post('desc_a'),
    		'img_a'=> $img_a,
    		'title_b'=>$this->input->post('title_b'),
    		'desc_b'=>$this->input->post('desc_b'),
    		'img_b'=> $img_b,
    		'title_c'=>$this->input->post('title_c'),
    		'desc_c'=>$this->input->post('desc_c'),
    		'title_d'=>$this->input->post('title_d'),
    		'desc_d'=>$this->input->post('desc_d'),
    		'title_e'=>$this->input->post('title_e'),
    		'desc_e'=>$this->input->post('desc_e'),
    		'title_f'=>$this->input->post('title_f'),
    		'desc_f'=>$this->input->post('desc_f'),
    		'title_g'=>$this->input->post('title_g'),
    		'desc_g'=>$this->input->post('desc_g'),
    		'title_h'=>$this->input->post('title_h'),
    		'desc_h'=>$this->input->post('desc_h'),
    		'title_i'=>$this->input->post('title_i'),
    		'desc_i'=>$this->input->post('desc_i'),
    		'title_j'=>$this->input->post('title_j'),
    		'desc_j'=>$this->input->post('desc_j'),
    		'title_k'=>$this->input->post('title_k'),
    		'desc_k'=>$this->input->post('desc_k'),
    		'title_l'=>$this->input->post('title_l'),
    		'desc_l'=>$this->input->post('desc_l'),
    		'title_m'=>$this->input->post('title_m'),
    		'desc_m'=>$this->input->post('desc_m'),
    		'title_n'=>$this->input->post('title_n'),
    		'desc_n'=>$this->input->post('desc_n'),
    		'title_o'=>$this->input->post('title_o'),
    		'desc_o'=>$this->input->post('desc_o'),
    		'title_p'=>$this->input->post('title_p'),
    		'desc_p'=>$this->input->post('desc_p'),
    		'title_q'=>$this->input->post('title_q'),
    		'desc_q'=>$this->input->post('desc_q'),
    		'title_r'=>$this->input->post('title_r'),
    		'desc_r'=>$this->input->post('desc_r'),
    		'title_s'=>$this->input->post('title_s'),
    		'desc_s'=>$this->input->post('desc_s'),
    		'title_t'=>$this->input->post('title_t'),
    		'desc_t'=>$this->input->post('desc_t'),
    		'video_a_title'=>$this->input->post('video_a_title'),
    		'video_a'=>$this->input->post('video_a'),
    		'video_b_title'=>$this->input->post('video_b_title'),
    		'video_b'=>$this->input->post('video_b')
    	];

        $added = $this->db->insert('blog',$blog_data);
        if ($added) {
        	$this->session->set_flashdata('msg', 'blog added!');
        	return redirect('admin/blogs');
        }

	}


	public function view_blogs($id)
	{
		$admin_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['view_blog'] = $this->db->select('blog.*,blog_category.category_title, blog_category.id as category_id')->from('blog')->where('blog.id',$id)
		->join('blog_category', 'blog.	blog_cat_id = blog_category.id')->get()->row();

		// dd($data['view_blog']);

		$data['blog_category'] = $this->db->get('blog_category')->result();
		$data['url_title'] = 'sign in';
		$data['title'] = 'View Blog';
		$data['contant_view'] = 'admin/view_blog';
		$this->template->admin_template($data);
	}


	public function delete_blogs($blog_id)
	{
        $deleted = $this->db->where('id',$blog_id)->delete('blog');
        if ($deleted) { 
        	$this->session->set_flashdata('del', 'blog deleted!');
        	return redirect('admin/blogs'); 
        }
	}


	public function main_blogs($blog_id,$main)
	{
        $main_blogs = $this->db->where('id',$blog_id)->update('blog',array('main'=>strtolower($main)));
        if ($main_blogs) { 
        	$this->session->set_flashdata('msg', 'main title updated!');
        	return redirect('admin/blogs'); 
        }
	}


	public function edit_blogs($id)
	{
		$admin_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['edit_blog'] = $this->db->select('blog.*,blog_category.category_title, blog_category.id as category_id')->from('blog')->where('blog.id',$id)
		->join('blog_category', 'blog.	blog_cat_id = blog_category.id')->get()->row();

		// dd($data['edit_blog']);

		$data['blog_category'] = $this->db->get('blog_category')->result();
		$data['url_title'] = 'sign in';
		$data['title'] = 'Edit Blog';
		$data['contant_view'] = 'admin/edit_blogs';
		$this->template->admin_template($data);
	}


	public function update_blogs()
	{

        $config['upload_path'] = './assets/admin/img/blog';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 51200;
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('img_a')) {
        	$file_data = $this->upload->data();
        	$img_a = $file_data['file_name'];
        }else{
    		$img_a = $this->input->post('old_img_a');
    	}

    	if ($this->upload->do_upload('img_b')) {
        	$file_data = $this->upload->data();
        	$img_b = $file_data['file_name'];
        }else{
    		$img_b = $this->input->post('old_img_b');
    	}


    	$blog_data =  [
    		'blog_cat_id'=>$this->input->post('category_id'),
    		'title_a'=>$this->input->post('title_a'),
    		'desc_a'=>$this->input->post('desc_a'),
    		'img_a'=> $img_a,
    		'title_b'=>$this->input->post('title_b'),
    		'desc_b'=>$this->input->post('desc_b'),
    		'img_b'=> $img_b,
    		'title_c'=>$this->input->post('title_c'),
    		'desc_c'=>$this->input->post('desc_c'),
    		'title_d'=>$this->input->post('title_d'),
    		'desc_d'=>$this->input->post('desc_d'),
    		'title_e'=>$this->input->post('title_e'),
    		'desc_e'=>$this->input->post('desc_e'),
    		'title_f'=>$this->input->post('title_f'),
    		'desc_f'=>$this->input->post('desc_f'),
    		'title_g'=>$this->input->post('title_g'),
    		'desc_g'=>$this->input->post('desc_g'),
    		'title_h'=>$this->input->post('title_h'),
    		'desc_h'=>$this->input->post('desc_h'),
    		'title_i'=>$this->input->post('title_i'),
    		'desc_i'=>$this->input->post('desc_i'),
    		'title_j'=>$this->input->post('title_j'),
    		'desc_j'=>$this->input->post('desc_j'),
    		'title_k'=>$this->input->post('title_k'),
    		'desc_k'=>$this->input->post('desc_k'),
    		'title_l'=>$this->input->post('title_l'),
    		'desc_l'=>$this->input->post('desc_l'),
    		'title_m'=>$this->input->post('title_m'),
    		'desc_m'=>$this->input->post('desc_m'),
    		'title_n'=>$this->input->post('title_n'),
    		'desc_n'=>$this->input->post('desc_n'),
    		'title_o'=>$this->input->post('title_o'),
    		'desc_o'=>$this->input->post('desc_o'),
    		'title_p'=>$this->input->post('title_p'),
    		'desc_p'=>$this->input->post('desc_p'),
    		'title_q'=>$this->input->post('title_q'),
    		'desc_q'=>$this->input->post('desc_q'),
    		'title_r'=>$this->input->post('title_r'),
    		'desc_r'=>$this->input->post('desc_r'),
    		'title_s'=>$this->input->post('title_s'),
    		'desc_s'=>$this->input->post('desc_s'),
    		'title_t'=>$this->input->post('title_t'),
    		'desc_t'=>$this->input->post('desc_t'),
    		'video_a_title'=>$this->input->post('video_a_title'),
    		'video_a'=>$this->input->post('video_a'),
    		'video_b_title'=>$this->input->post('video_b_title'),
    		'video_b'=>$this->input->post('video_b')
    	];

    	$blog_id = $this->input->post('blog_id');
        $this->db->where('id',$blog_id);
        $updated = $this->db->update('blog',$blog_data);
        if ($updated) {
        	$this->session->set_flashdata('msg', 'blog updated!');
        	return redirect('admin/blogs');
        }
	}

// subscription
	public function subscription()
	{ 
		$admin_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'Subscription';
		$data['subscription'] = $this->db->get('subscription')->result();
		$data['title'] = 'Subscription';
		$data['contant_view'] = 'admin/subscription';
		$this->template->admin_template($data);
	}



	/*update setting*/
	public function web_setting()
	{
		$admin_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'web setting';
		$data['web_setting'] = $this->db->where('blog_cat_id',0)->get('blog')->row();
		$data['title'] = 'web setting';
		$data['contant_view'] = 'admin/web_setting';
		$this->template->admin_template($data);
	}


	/*update_web_setting*/
	public function update_web_setting()
	{

        $config['upload_path'] = './assets/admin/img/blog';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 51200;
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('logo')) {
        	$file_data = $this->upload->data();
        	$logo = $file_data['file_name'];
        }else{
    		$logo = $this->input->post('old_logo');
    	}

    	if ($this->upload->do_upload('favicon')) {
        	$file_data = $this->upload->data();
        	$favicon = $file_data['file_name'];
        }else{
    		$favicon = $this->input->post('old_favicon');
    	}

    	if ($this->upload->do_upload('main_img')) {
        	$file_data = $this->upload->data();
        	$main_img = $file_data['file_name'];
        }else{
    		$main_img = $this->input->post('old_img_a');
    	}


    	$profile_data =  [
    		'title_a'=>$this->input->post('title'),
    		'site_name'=>$this->input->post('site_name'),
    		'publisher'=>$this->input->post('publisher'),
    		'desc_a'=> $this->input->post('desc'),
    		'img_a'=>  $main_img,
    		'logo'=>  $logo,
    		'home_heading'=>$this->input->post('home_heading'),
    		'home_sub_heading'=>$this->input->post('home_sub_heading'),
    		'favicon'=>  $favicon
    	];

    	// dd($profile_data);


        $this->db->where('blog_cat_id',0);
        $updated = $this->db->update('blog',$profile_data);
        if ($updated) {
        	redirect('admin/web-settings');
        }
	}



	/*update profile*/
	public function admin_profile()
	{
		$admin_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'Subscription';
		$data['admin_profile'] = $this->db->get('users')->row();
		$data['title'] = 'Subscription';
		$data['contant_view'] = 'admin/admin_profile';
		$this->template->admin_template($data);
	}


	/*update profile*/
	public function update_profile()
	{

		$admin_id = $this->session->userdata('logged_in')->id;
//      if (!empty($_FILES['profile_img']['name'])) {
//       $config['upload_path'] = './assets/img/profile';
//       $config['allowed_types'] = 'gif|jpg|png|jpeg';
//       $profile_img = time() . str_replace(str_split(' ()\\/,:*?"<>|'), '', 
//   	 $_FILES['profile_img']['name']);
//       $config['file_name'] = $profile_img;
//       $this->load->library('upload', $config);
//       $this->upload->do_upload('profile_img');
//   	}else{$profile_img = $this->input->post('old_profile_img');}
    	$profile_data =  [
    		'first_name'=>$this->input->post('first_name'),
    		'last_name'=>$this->input->post('last_name'),
    		'user_email'=>$this->input->post('user_email'),
    		'password'=> sha1($this->input->post('decript_password')),
    		'decript_password'=>  $this->input->post('decript_password')
    	];

        $this->db->where('id',$admin_id);
        $updated = $this->db->update('users',$profile_data);
        if ($updated) {
        	redirect('admin/profile');
        }
	}



}
