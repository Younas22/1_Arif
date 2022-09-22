<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
 

		function __construct()
	{
		parent:: __construct();
		// $this->load->model('Admin_dashboard_M','admin_dash');
	} 
	

	public function index()
	{
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'home/home';

		$home_blog_arr = array();
		$home_blog = $this->db->select('blog.*,blog_category.category_title, blog_category.id as category_id')->from('blog')->order_by('created_at','desc')->join('blog_category', 'blog.blog_cat_id = blog_category.id')->get()->result();
		foreach ($home_blog as $key) {
			if ($key->main == 'a') {
				array_push($home_blog_arr, array(
					'cat_id'=> $key->id,
					'title'=> $key->title_a,
					'desc'=> $key->desc_a,
					'img'=> $key->img_a,
					'author'=> $key->author,
					'created_at'=> $key->created_at
				));
			}

			if ($key->main == 'b') {
				array_push($home_blog_arr, array(
					'cat_id'=> $key->id,
					'title'=> $key->title_b,
					'desc'=> $key->desc_b,
					'img'=> $key->img_b,
					'author'=> $key->author,
					'created_at'=> $key->created_at
				));
			}

		}
		$data['home_blog'] = $home_blog_arr;
		$this->template->template($data);
	}


	public function blog()
	{
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'home/home';

		$home_blog_arr = array();
		$home_blog = $this->db->select('blog.*,blog_category.category_title, blog_category.id as category_id')->from('blog')->order_by('created_at','desc')->join('blog_category', 'blog.blog_cat_id = blog_category.id')->get()->result();
		foreach ($home_blog as $key) {
			if ($key->main == 'a') {
				array_push($home_blog_arr, array(
					'cat_id'=> $key->id,
					'title'=> $key->title_a,
					'desc'=> $key->desc_a,
					'img'=> $key->img_a,
					'author'=> $key->author,
					'created_at'=> $key->created_at
				));
			}

			if ($key->main == 'b') {
				array_push($home_blog_arr, array(
					'cat_id'=> $key->id,
					'title'=> $key->title_b,
					'desc'=> $key->desc_b,
					'img'=> $key->img_b,
					'author'=> $key->author,
					'created_at'=> $key->created_at
				));
			}

		}
		$data['home_blog'] = $home_blog_arr;
		$this->template->template($data);
	}



	public function category($category)
	{
		$category_name = str_replace("-"," ",$category);
	    $category_data = $this->db->where('category_title',$category_name)->get('blog_category')->row();
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'home/category';

		$category_data_arr = array();
		$category_blog = $this->db->select('blog.*,blog_category.category_title, blog_category.id as category_id')->where('blog.blog_cat_id',$category_data->id)->order_by('created_at','desc')->from('blog')->join('blog_category', 'blog.blog_cat_id = blog_category.id')->get()->result();


		foreach ($category_blog as $key) {
			if ($key->main == 'a') {
				array_push($category_data_arr, array(
					'cat_id'=> $key->id,
					'title'=> $key->title_a,
					'desc'=> $key->desc_a,
					'img'=> $key->img_a,
					'author'=> $key->author,
					'created_at'=> $key->created_at
				));
			}

			if ($key->main == 'b') {
				array_push($category_data_arr, array(
					'cat_id'=> $key->id,
					'title'=> $key->title_b,
					'desc'=> $key->desc_b,
					'img'=> $key->img_b,
					'author'=> $key->author,
					'created_at'=> $key->created_at
				));
			}

		}

		// dd($category_data_arr);

		$data['category_data_arr'] =  $category_data_arr;
		$this->template->template($data);
	}


	public function blog_details($blog_title)
	{
		$admin_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'home/blog_details';
		$blog_title_ = str_replace("-"," ",$blog_title);

		if ($blog_title == 'faq') {
			$this->db->select();
			$this->db->from('blog');
	        $this->db->group_start();
	        $this->db->like('blog.title_a', 'Can a blog have multiple topics?');
	        $this->db->or_like('blog.title_b', $blog_title_);
	        $this->db->group_end();
			$data['blog_details'] = $this->db->get()->row();

			// dd($blog_title_);
		}else{
			$this->db->select('blog.*,blog_category.category_title, blog_category.id as category_id');
			$this->db->from('blog');
	        $this->db->group_start();
	        $this->db->like('blog.title_a', $blog_title_);
	        $this->db->or_like('blog.title_b', $blog_title_);
	        $this->db->group_end();
			$this->db->join('blog_category', 'blog.blog_cat_id = blog_category.id');
			$data['blog_details'] = $this->db->get()->row();
		}

		$this->template->template($data);
	}

	public function terms()
	{
		$admin_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'home/page';
		$this->template->template($data);
	}

		public function privacy()
	{
		$admin_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'home/page';
		$this->template->template($data);
	}

		public function about_us()
	{
		$admin_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'home/page';
		$this->template->template($data);
	}

		public function contact()
	{
		$admin_id = $this->session->userdata('logged_in')->id;
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'home/page';
		$this->template->template($data);
	}
	

	/*update profile*/
	public function subscription()
	{
		$email = $this->input->post('subscription');
        $subscription = $this->db->insert('subscription', array('email'=>$email));
        if ($subscription) {
        	redirect('home');
        }
	}
}