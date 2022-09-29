<?php //dd(meta_data()); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?=meta_data()[0]['desc']?>" />


    <!-- MEDA FOR SEARCH ENGINES AND SOCIAL PLATFORMS -->
    <meta property="og:title" content="<?=meta_data()[0]['title']?>"/>
    <meta property="og:site_name" content="<?=web_details()->site_name?>"/>
    <meta property="og:description" content="<?=meta_data()[0]['desc']?>"/>
    <meta property="og:image" content="<?=base_url('assets/admin/img/blog/').meta_data()[0]['img']?>"/>
    <meta property="og:url" content="<?=base_url()?>"/>
    <meta property="og:publisher" content="<?=web_details()->publisher?>"/>

    <!-- TWITTER CARD -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@<?=web_details()->publisher?> | <?=meta_data()[0]['title']?>" />
    <meta name="twitter:title" content="<?=meta_data()[0]['title']?>" />
    <meta name="twitter:description" content="<?=meta_data()[0]['desc']?>" />
    <meta name="twitter:image" content="<?=base_url('assets/admin/img/blog/').meta_data()[0]['img']?>" />

    <link rel="icon" href="<?=base_url('assets/admin/img/blog/').web_details()->favicon?>">
    <link rel="canonical" href="<?=current_url();?>" />
    <title><?=meta_data()[0]['title']?></title>
        <!-- font-awesome.min.css -->

    <link href="<?=base_url()?>assets/web/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/web/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/web/css/demo_blog.css" rel="stylesheet" type="text/css"/>

  </head>

  <body>


  <div class="container-fluid">
    <div class="row text-center">
      <div class="col-lg-12">
        <div class="m-4">
          <a href="<?= base_url() ?>">
          <img src="<?=base_url('assets/admin/img/blog/').web_details()->logo?>" class="img-fluid" alt="logo" width="200" height="200"></a>
        </div>
      </div>
    </div>
  </div>


    <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
      <div class="container-fluid">
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav m-auto">

            
            <li class="nav-item <?php if (empty($this->uri->segment(1))) { echo "active"; }else{ } ?>"><a href="<?=base_url()?>" class="nav-link">Home</a></li>

            <?php foreach (blog_category() as $key) { ?>
              <li class="nav-item <?php if (ucfirst($this->uri->segment(3)) == $key->category_title) { echo "active"; }else{ } ?>"><a href="<?=base_url('blog/category/').str_replace(" ","-",strtolower($key->category_title))?>" class="nav-link"><?=$key->category_title?></a></li>
            <?php } ?>

            <li class="nav-item dropdown <?php if ($this->uri->segment(1) == 'about-us' || $this->uri->segment(1) == 'terms' || $this->uri->segment(1) == 'privacy' || $this->uri->segment(1) == 'contact') { echo "active"; }else{ } ?>">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Page</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="<?=base_url('about-us')?>">About Us</a>
                <a class="dropdown-item" href="<?=base_url('terms')?>">Terms</a>
                <a class="dropdown-item" href="<?=base_url('privacy')?>">Privacy</a>
                <a class="dropdown-item" href="<?=base_url('contact')?>">Contact</a>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </nav>
