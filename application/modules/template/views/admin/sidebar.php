      <!-- start sidebar menu -->
      <div class="sidebar-container">
        <div class="sidemenu-container navbar-collapse collapse fixed-menu">
          <div id="remove-scroll">
            <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true"
              data-slide-speed="200">
              <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                  <span></span>
                </div>
              </li>
              <li class="sidebar-user-panel">
                <div class="user-panel">
                  <div class="row">
                    <div class="sidebar-userpic">
                      <img src="<?=base_url()?>assets/admin/img/profile.png" class="img-responsive" alt=""> </div>
                  </div>
                  <div class="profile-usertitle">
                    <div class="sidebar-userpic-name"> <?=profile()->first_name.' '. profile()->last_name?> </div>
                    <!-- <div class="profile-usertitle-job"> Manager </div> -->
                  </div>
                </div>
              </li>


              <li class="nav-item">
                <a href="<?=base_url()?>" class="nav-link nav-toggle" target="_blank"> <i class="material-icons">search</i>
                  <span class="title">Web</span>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?=base_url('admin/profile')?>" class="nav-link nav-toggle"> <i class="material-icons">person_outline</i>
                  <span class="title">Profile</span>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?=base_url('admin/category')?>" class="nav-link nav-toggle"> <i class="material-icons">desktop_mac</i>
                  <span class="title">Category</span>
                </a>
              </li>


              <li class="nav-item">
                <a href="<?=base_url('admin/blogs')?>" class="nav-link nav-toggle"> <i class="material-icons">dvr</i>
                  <span class="title">Blogs</span>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?=base_url('admin/subscription')?>" class="nav-link nav-toggle"> <i class="material-icons">email</i>
                  <span class="title">Subscription</span>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?=base_url('admin/web-settings')?>" class="nav-link nav-toggle"> <i class="material-icons">web</i>
                  <span class="title">Settings</span>
                </a>
              </li>


            </ul>
          </div>
        </div>
      </div>
      <!-- end sidebar menu -->