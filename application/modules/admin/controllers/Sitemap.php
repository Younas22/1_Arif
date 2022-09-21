<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Sitemap extends MY_Controller {


    /**
     * Index Page for this controller.
     *
     */
    public function index()
    {	
        $data['blog_category'] = $this->db->get('blog_category')->result();
		$blog_details_data = $this->db->where('blog_cat_id !=',0)->get('blog')->result();
		$blog_meta_arr = array();
		foreach ($blog_details_data as $key) {
			if ($key->main == 'b') {
			  array_push($blog_meta_arr, array(
			    'title'=>$key->title_b,
			    'desc'=>$key->desc_b,
			    'img'=>$key->img_b
			  ));
			}

			if ($key->main == 'a') {
			  array_push($blog_meta_arr, array(
			    'title'=>$key->title_a,
			    'desc'=>$key->desc_a,
			    'img'=>$key->img_a
			  ));
			}
		}


		$data['blog_details'] = $blog_meta_arr;
		$data['contant_view'] = 'admin/sitemap';
		header("Content-Type: text/xml;charset=iso-8859-1");
		$this->template->admin_template($data);
    }
}