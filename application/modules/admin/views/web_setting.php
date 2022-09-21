            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Web Logo and Meta Settings</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Web Settings</header>
                                </div>
                                <div class="card-body " id="bar-parent2">
                                    <form action="<?=base_url('admin/web-settings/update')?>" id="form_sample_1" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                    <div class="row mb-5">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <div class="form-group">
                                                <label>Logo</label>
                                                <input type="file" class="form-control" name="logo">
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <img alt="" class="img-circle_" src="<?=base_url()?>assets/admin/img/blog/<?=$web_setting->logo?>" width="auto" height="200" />
                                        </div>
                                        <input type="hidden" class="form-control" name="old_logo" value="<?=$web_setting->logo?>">
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <div class="form-group">
                                                <label>Favicon</label>
                                                <input type="file" class="form-control" name="favicon">
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <img alt="" class="img-circle_" src="<?=base_url()?>assets/admin/img/blog/<?=$web_setting->favicon?>" width="100" height="100" />
                                            <input type="hidden" class="form-control" name="old_favicon" value="<?=$web_setting->favicon?>">
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <div class="form-group">
                                                <label>Main Image</label>
                                                <input type="file" class="form-control" name="main_img">
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <img alt="" class="img-fluid" src="<?=base_url()?>assets/admin/img/blog/<?=$web_setting->img_a?>" width="1600" height="500" />
                                            <input type="hidden" class="form-control" name="old_img_a" value="<?=$web_setting->img_a?>">
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" placeholder="Title ..." name="title" value="<?=$web_setting->title_a?>">
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <p><?=$web_setting->title_a?></p>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <div class="form-group">
                                                <label>Site Name</label>
                                                <input type="text" class="form-control" placeholder="Site Name ..." name="site_name" value="<?=$web_setting->site_name?>">
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <p><?=$web_setting->site_name?></p>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <div class="form-group">
                                                <label>Publisher</label>
                                                <input type="text" class="form-control" placeholder="Publisher ..." name="publisher" value="<?=$web_setting->publisher?>">
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <p><?=$web_setting->publisher?></p>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <div class="form-group">
                                                <label>Desc</label>
                                                <textarea type="text" class="form-control" placeholder="Desc ..." name="desc"><?=$web_setting->desc_a?></textarea>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <p><?=$web_setting->desc_a?></p>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <div class="form-group">
                                                <label>Home Heading</label>
                                                <textarea type="text" class="form-control" placeholder="Home Heading ..." name="home_heading"><?=$web_setting->home_heading?></textarea>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <p><?=$web_setting->home_heading?></p>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <div class="form-group">
                                                <label>Attractive line</label>
                                                <textarea type="text" class="form-control" placeholder="Attractive line ..." name="home_sub_heading"><?=$web_setting->home_sub_heading?></textarea>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <p><?=$web_setting->home_sub_heading?></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <div class="offset-md-3 col-md-9">
                                                <button type="submit" class="btn btn-info">Submit</button>
                                                <!-- <button type="button" class="btn btn-default">Cancel</button> -->
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page content -->
            </div>
            <!-- end page container -->