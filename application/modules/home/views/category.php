<div class="blog-header mt-5">
    <div class="container">
        <div class=""><i class="fa fa-home text-info"></i>
            <a href="<?=base_url()?>" class="text-secondary text-decoration-none">Home</a><a href="<?=base_url('blog/category/').strtolower($this->uri->segment(3))?>" class="text-secondary text-decoration-none">/Category/<?=ucfirst($this->uri->segment(3))?></a>
        </div>
        <h1 class="blog-title mt-2 font-weight-bold"><?=str_replace("-"," ",ucfirst($this->uri->segment(3)))?></h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 blog-main">
            <div class="row">
                <?php if (!empty($category_data_arr)) {
                    foreach ($category_data_arr as $key => $value) { ?>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 blog-main content">
                    <div class="card flex_">
                        <!-- <img class="card-img img-responsive" src="<?=base_url('assets/admin/img/blog/').$value['img']?>" alt="Bologna"> -->
                        <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                            <div class="views"><i class="fa fa-user text-info"></i> <?=$value['author']?></div>
                            <div class="stats">
                                <i class="fa fa-clock-o text-info"></i> <?=date("d M Y", strtotime($value['created_at']));?>
                            </div>
                        </div>
                        <div class="card-body home-blog-h2">
                            <h2 class="card-title"><a href="<?=base_url('blog/details/').str_replace(" ","-",$value['title'])?>"><?=$value['title']?></a></h2>
                            <p class="card-text text-l"><?=character_limiter($value['desc'],200)?></p>
                            <a href="<?=base_url('blog/details/').str_replace(" ","-",$value['title'])?>" class="btn_warning_ btn btn-warning btn-lg btn_grad_blgr w-25 text-truncate mt-auto">Read More</a>
                        </div>
                        
                    </div>
                </div>
                <?php } }else{echo "Data Not Found!";}?>
            </div>
            
          <div class="text-center mt-3 mb-3">
            <a class="btn_warning_ btn btn-warning btn-lg btn_grad_blgr w-25 text-truncate mt-auto border" id="loadMore">Load More</a>
          </div>

            <!-- <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center mb-3">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav> -->
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