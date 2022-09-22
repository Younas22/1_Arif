<div class="blog-header mt-5"> 
  <div class="container">
    <div class=""><i class="fa fa-home text-info"></i>
      <a href="#" class="text-secondary text-decoration-none">home</a><a href="#" class="text-secondary text-decoration-none"></a>
    </div>
    <h1 class="blog-title mt-2 font-weight-bold" style="font-family: 'Roboto', sans-serif;"><?=web_details()->home_heading?></h1>
    <p class="lead blog-description"><?=web_details()->home_sub_heading?>
</div>
<div class="container">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-8 blog-main blog-main">
      <div class="row">
        <!-- <div> -->
        
        <?php foreach ($home_blog as $key => $value) { ?>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 blog-main content mb-4">
          <div class="card  h-100">
            <span class="shiny">
              <img class="card-img" src="<?=base_url('assets/admin/img/blog/').$value['img']?>" alt="<?=$value['title']?>">
              <div class="shine_fx"></div>
            </span>
            <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
              <div class="views"><i class="fa fa-user text-info"></i> <?=$value['author']?></div>
              <div class="stats">
                <i class="fa fa-clock-o text-info"></i> <?=date("d M Y", strtotime($value['created_at']));?>
              </div>
            </div>
            <!-- <div class="card-body home-blog-h2">
              <h2 class="card-title"><a href="<?=base_url('blog/details/').str_replace(" ","-",$value['title'])?>"><?=$value['title']?></a></h2>
              <p class="card-text text-l"><?=character_limiter($value['desc'],250)?></p>
            </div> -->
            <div class="card-body home-blog-h2">
              <h2 class="card-title"><a href="<?=base_url('blog/details/').str_replace(" ","-",$value['title'])?>"><?=$value['title']?></a></h2>
              <p class="card-text"><?=character_limiter($value['desc'],250)?></p>
            </div>
            <a href="<?=base_url('blog/details/').str_replace(" ","-",$value['title'])?>" class="btn btn-warning btn_warning_ btn-lg btn_grad_blgr w-50 text-truncate mt-auto">read more</a>
          </div>
        </div>
        <?php } ?>
        <!-- </div> -->
      </div>
      <div class="text-center mt-3 mb-3">
        <a href="#" class="btn btn-warning btn_warning_ btn-lg btn_grad_blgr w-25 text-truncate mt-auto border" id="loadMore">Load More</a>
      </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
      <div class="sidebar widget">
        <h3 style="font-family: 'Roboto', sans-serif;">Recent Post</h3><hr>
        <?php $this->load->view('recent_post'); ?>
      </div>
      <div class="sidebar widget mt-5">
        <h3 style="font-family: 'Roboto', sans-serif;">Categories</h3>
        <?php $this->load->view('categories_manue'); ?>
      </div>
    </div>
    </div><!-- /.row -->
    </div><!-- /.container -->