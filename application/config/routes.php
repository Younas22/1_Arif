<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'home/index';
  
// account routes
$route['login'] = 'account/Account';
$route['doLogin'] = 'account/Account/doLogin';
$route['logout'] = 'account/Account/logout';
$route['sitemap\.xml'] = "admin/Sitemap/index";
// admin routes
$route['admin/dashboard'] = 'admin/Admin_dashboard';
$route['admin/sub-admin'] = 'admin/Admin_dashboard/sub_admin';

//category
$route['admin/category'] = 'admin/Admin_dashboard/category';
$route['admin/add-category'] = 'admin/Admin_dashboard/add_category';
$route['admin/category-added'] = 'admin/Admin_dashboard/category_added';
$route['admin/edit-category/(:num)'] = 'admin/Admin_dashboard/edit_category/$1';
$route['admin/delete-category/(:num)'] = 'admin/Admin_dashboard/delete_category/$1';
$route['admin/category-updated'] = 'admin/Admin_dashboard/update_category';

//blog
$route['admin/blogs_data'] = 'admin/Admin_dashboard/blogs_data';
$route['admin/blogs'] = 'admin/Admin_dashboard/blogs';
$route['admin/add-blogs'] = 'admin/Admin_dashboard/add_blogs';
$route['admin/blog-added'] = 'admin/Admin_dashboard/blogs_added';
$route['admin/edit-blogs/(:num)'] = 'admin/Admin_dashboard/edit_blogs/$1';
$route['admin/view-blogs/(:num)'] = 'admin/Admin_dashboard/view_blogs/$1';
$route['admin/delete-blogs/(:num)'] = 'admin/Admin_dashboard/delete_blogs/$1';
$route['admin/main-blogs/(:num)/(:any)'] = 'admin/Admin_dashboard/main_blogs/$1/$2';
$route['admin/blog-updated'] = 'admin/Admin_dashboard/update_blogs';

$route['admin/subscription'] = 'admin/Admin_dashboard/subscription';
$route['admin/profile'] = 'admin/Admin_dashboard/admin_profile';
$route['admin/update_profile'] = 'admin/Admin_dashboard/update_profile';
$route['admin/web-settings'] = 'admin/Admin_dashboard/web_setting';
$route['admin/web-settings/update'] = 'admin/Admin_dashboard/update_web_setting';

// home routes
$route['/'] = 'home/index';
$route['blog'] = 'home/blog';
$route['blog/category/(:any)'] = 'home/category/$1';
$route['blog/details/(:any)'] = 'home/blog_details/$1';

$route['terms'] = 'home/terms';
$route['privacy'] = 'home/privacy';
$route['about-us'] = 'home/about_us';
$route['contact'] = 'home/contact';
$route['home/subscription'] = 'home/subscription';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;