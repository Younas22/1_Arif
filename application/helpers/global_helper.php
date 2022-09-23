<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 /*/////////////dd///////////*/
if (!function_exists('dd')){
      function dd($data){
         echo "<pre>";
         print_r($data);
         exit();
       }
}


/*////////////get_recent_blog//////////*/
if (!function_exists('get_recent_blog')){
      function get_recent_blog(){
         $CI =& get_instance();

        $home_blog_arr = array();
        $home_blog = $CI->db->select('blog.*,blog_category.category_title, blog_category.id as category_id')->order_by('created_at','desc')->limit(3)->from('blog')->join('blog_category', 'blog.  blog_cat_id = blog_category.id')->get()->result();
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
        return $home_blog_arr;

     }
}


/*////////////recent_category_blog//////////*/
if (!function_exists('recent_category_blog')){
      function recent_category_blog($category){
         $CI =& get_instance();
        $category = str_replace("-"," ",$category);
        $category_data_arr = array();
        $category_data = $CI->db->where('category_title',$category)->get('blog_category')->row();
        $category_blog = $CI->db->select('blog.*,blog_category.category_title, blog_category.id as category_id')->where('blog.blog_cat_id',$category_data->id)->order_by('created_at','desc')->limit(3)->from('blog')->join('blog_category', 'blog.  blog_cat_id = blog_category.id')->get()->result();

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


        return $category_data_arr;
     }
}

/*////////////blog_category//////////*/
if (!function_exists('blog_category')){
      function blog_category(){
         $CI =& get_instance();
         return $CI->db->get('blog_category')->result();
     }
}



/*////////////top_articles//////////*/
if (!function_exists('top_articles')){
      function top_articles(){
         $CI =& get_instance();
        $category_data_arr = array();
        $blog_category = $CI->db->get('blog_category')->result();

        // dd($blog_category);
        foreach ($blog_category as $key) {
            $top_articles = $CI->db->select('blog.*,blog_category.category_title, blog_category.id as category_id')->where('blog.blog_cat_id',$key->id)->order_by('created_at','desc')->from('blog')->join('blog_category', 'blog.  blog_cat_id = blog_category.id')->get()->row();

            
            if ($top_articles->main == 'a') {
                array_push($category_data_arr, array(
                    'cat_id'=> $top_articles->id,
                    'category_title'=> $top_articles->category_title,
                    'title'=> $top_articles->title_a,
                    'desc'=> $top_articles->desc_a,
                    'img'=> $top_articles->img_a,
                    'author'=> $top_articles->author,
                    'created_at'=> $top_articles->created_at
                ));
            }

            if ($top_articles->main == 'b') {
                array_push($category_data_arr, array(
                    'cat_id'=> $top_articles->id,
                    'category_title'=> $top_articles->category_title,
                    'title'=> $top_articles->title_b,
                    'desc'=> $top_articles->desc_b,
                    'img'=> $top_articles->img_b,
                    'author'=> $top_articles->author,
                    'created_at'=> $top_articles->created_at
                ));
            }

        }

        return $category_data_arr;
     }
}



/*////////////top_resources//////////*/
if (!function_exists('top_resources')){
      function top_resources(){
         $CI =& get_instance();
        $category_data_arr = array();
        $blog_category = $CI->db->order_by('id','desc')->get('blog_category')->result();
        // dd($blog_category);
        foreach ($blog_category as $key) {
            $top_resources = $CI->db->select('blog.*,blog_category.category_title, blog_category.id as category_id')->where('blog.blog_cat_id',$key->id)->order_by('created_at','desc')->from('blog')->join('blog_category', 'blog.  blog_cat_id = blog_category.id')->get()->row();
            
            if ($top_resources->main == 'a') {
                array_push($category_data_arr, array(
                    'cat_id'=> $top_resources->id,
                    'category_title'=> $top_resources->category_title,
                    'title'=> $top_resources->title_a,
                    'desc'=> $top_resources->desc_a,
                    'img'=> $top_resources->img_a,
                    'author'=> $top_resources->author,
                    'created_at'=> $top_resources->created_at
                ));
            }

            if ($top_resources->main == 'b') {
                array_push($category_data_arr, array(
                    'cat_id'=> $top_resources->id,
                    'category_title'=> $top_resources->category_title,
                    'title'=> $top_resources->title_b,
                    'desc'=> $top_resources->desc_b,
                    'img'=> $top_resources->img_b,
                    'author'=> $top_resources->author,
                    'created_at'=> $top_resources->created_at
                ));
            }

        }

        return $category_data_arr;
     }
}

//meta details
/*////////////meta_data//////////*/
if (!function_exists('meta_data')){
      function meta_data(){
         $CI =& get_instance();
         $segment = $CI->uri->segment(2);
         if (empty($segment)) {
            $home_meta_arr = array();
            $home_data = $CI->db->order_by('created_at','desc')->where('blog_cat_id',0)->get('blog')->row();

              if ($home_data->main == 'b') {
                  array_push($home_meta_arr, array(
                    'title'=>$home_data->title_b,
                    'desc'=>$home_data->desc_b,
                    'img'=>$home_data->img_b
                  ));
              }

              if ($home_data->main == 'a') {
                  array_push($home_meta_arr, array(
                    'title'=>$home_data->title_a,
                    'desc'=>$home_data->desc_a,
                    'img'=>$home_data->img_a
                  ));
              }

              return $home_meta_arr;

         }

         if ($segment == 'category') {
            $category = $CI->uri->segment(3);
            $category_meta_arr = array();
            $category_data = $CI->db->where('category_title',$category)->get('blog_category')->row();
            $category_blog = $CI->db->select('blog.*,blog_category.category_title, blog_category.id as category_id')->where('blog.blog_cat_id',$category_data->id)->order_by('created_at','desc')->from('blog')->join('blog_category', 'blog.blog_cat_id = blog_category.id')->get()->row();
            
              if ($category_blog->main == 'b') {
                  array_push($category_meta_arr, array(
                    'title'=>$category_blog->title_b,
                    'desc'=>$category_blog->desc_b,
                    'img'=>$category_blog->img_b
                  ));
              }

              if ($category_blog->main == 'a') {
                  array_push($category_meta_arr, array(
                    'title'=>$category_blog->title_a,
                    'desc'=>$category_blog->desc_a,
                    'img'=>$category_blog->img_a
                  ));
              }

              return $category_meta_arr;
         }

          if ($segment == 'details') {
              $title = $CI->uri->segment(3);
              $blog_meta_arr = array();
              $blog_title_ = str_replace("-"," ",$title);
              $CI->db->select('blog.*,blog_category.category_title, blog_category.id as category_id');
              $CI->db->from('blog');
              $CI->db->group_start();
              $CI->db->like('blog.title_a', $blog_title_);
              $CI->db->or_like('blog.title_b', $blog_title_);
              $CI->db->group_end();
              $CI->db->join('blog_category', 'blog.blog_cat_id = blog_category.id');
              $blog_details_data = $CI->db->get()->row();
              if ($blog_details_data->main == 'b') {
                  array_push($blog_meta_arr, array(
                    'title'=>$blog_details_data->title_b,
                    'desc'=>$blog_details_data->desc_b,
                    'img'=>$blog_details_data->img_b
                  ));
              }

              if ($blog_details_data->main == 'a') {
                  array_push($blog_meta_arr, array(
                    'title'=>$blog_details_data->title_a,
                    'desc'=>$blog_details_data->desc_a,
                    'img'=>$blog_details_data->img_a
                  ));
              }

              return $blog_meta_arr;
         }
         
     }
}

/*////////////web_details//////////*/
if (!function_exists('web_details')){
      function web_details(){
         $CI =& get_instance();
         $CI =& get_instance();
         $CI->db->where('blog_cat_id', 0);
         $query = $CI->db->get('blog')->row();
         return $query;
       }
}

/*////////////profile//////////*/
if (!function_exists('profile')){
      function profile(){
         $CI =& get_instance();
         $profile_id = $CI->session->userdata('logged_in')->id;
         $CI =& get_instance();
         $CI->db->where('id', $profile_id);
         $query = $CI->db->get('users')->row();
         return $query;
       }
}