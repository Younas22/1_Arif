            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">User Profile</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right d-none">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                        href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="">Extra</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">User Profile</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <div class="card card-topline-aqua">
                                    <div class="card-body no-padding height-9">
                                        <div class="row">
                                            <div class="profile-userpic">
                                                <img src="<?=base_url('assets/admin/img/profile.png')?>" class="img-responsive" alt=""> </div>
                                        </div>
                                        <div class="profile-usertitle">
                                            <div class="profile-usertitle-name"> <?=$admin_profile->first_name.' '.$admin_profile->last_name?> </div>
                                        </div>
                                        <ul class="list-group list-group-unbordered">
                                            <li class="list-group-item">
                                                <b>First Name</b> <a class="pull-right"><?=$admin_profile->first_name?></a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Last Name</b> <a class="pull-right"><?=$admin_profile->last_name?></a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Email</b> <a class="pull-right"><?=$admin_profile->user_email?></a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Password</b> <a class="pull-right"><?=$admin_profile->decript_password?></a>
                                            </li>
                                        </ul>
                                        <!-- END SIDEBAR USER TITLE -->

                                    </div>
                                </div>
                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="white-box">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active fontawesome-demo" id="tab1">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="card-head">
                                                            <header>Update Profile</header>
                                                        </div>
                                                        <div class="card-body " id="bar-parent1">
                                                            <form action="<?=base_url('admin/update_profile')?>" method="POST">
                                                                <div class="form-group">
                                                                    <label for="simpleFormEmail">First Name</label>
                                                                    <input type="text" name="first_name" class="form-control" value="<?=$admin_profile->first_name?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="simpleFormEmail">Last Name</label>
                                                                    <input type="text" name="last_name" class="form-control" value="<?=$admin_profile->last_name?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="simpleFormEmail">Email</label>
                                                                    <input type="email" name="user_email" class="form-control" value="<?=$admin_profile->user_email?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="simpleFormEmail">Password</label>
                                                                    <input type="text" name="decript_password" class="form-control" value="<?=$admin_profile->decript_password?>">
                                                                </div>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
                        </div>
                    </div>
                </div>
                <!-- end page content -->
            </div>
            <!-- end page container -->