      <!-- start page content -->
      <div class="page-content-wrapper">
        <div class="page-content">
          <div class="page-bar">
            <div class="page-title-breadcrumb">
              <div class=" pull-left">
                <div class="page-title">Dashboard</div>
              </div>
              <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                    href="<?=base_url('admin/dashboard')?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Dashboard</li>
              </ol>
            </div>
          </div>
          <!-- start widget -->
          <div class="state-overview">
            <div class="row">
              <div class="col-xl-3 col-md-6 col-12">
                <div class="info-box bg-blue">
                  <span class="info-box-icon push-bottom">
                    <i class="material-icons">desktop_mac</i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Category</span>
                    <span class="info-box-number"><?=$category_count?></span>
                    <!-- <div class="progress">
                      <div class="progress-bar width-60"></div>
                    </div>
                    <span class="progress-description">
                      60% Increase in 28 Days
                    </span> -->
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-xl-3 col-md-6 col-12">
                <div class="info-box bg-orange">
                  <span class="info-box-icon push-bottom">
                    <i class="material-icons">dvr</i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Total Blogs</span>
                    <span class="info-box-number"><?=$blog_count?></span>
                    <!-- <div class="progress">
                      <div class="progress-bar width-40"></div>
                    </div>
                    <span class="progress-description">
                      40% Increase in 28 Days
                    </span> -->
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-xl-3 col-md-6 col-12">
                <div class="info-box bg-purple">
                  <span class="info-box-icon push-bottom"><i
                      class="material-icons">email</i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Subscriber</span>
                    <span class="info-box-number"><?=$subscription_count?></span>
                    <!-- <div class="progress">
                      <div class="progress-bar width-80"></div>
                    </div>
                    <span class="progress-description">
                      80% Increase in 28 Days
                    </span> -->
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-xl-3 col-md-6 col-12">
                <div class="info-box bg-success">
                  <span class="info-box-icon push-bottom"><i
                      class="material-icons">link</i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Sitemap</span>
                    <span class="info-box-number"><?=$blog_count+5+$category_count?></span><span></span>
                    <!-- <div class="progress">
                      <div class="progress-bar width-60"></div>
                    </div>
                    <span class="progress-description">
                      60% Increase in 28 Days
                    </span> -->
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
            </div>
          </div>
          <!-- end widget -->

          <!-- start Payment Details -->
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="card  card-box">
                <div class="card-head">
                  <header>Subscription Details</header>
                  <div class="tools">
                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                  </div>
                </div>
                <div class="card-body ">
                  <div class="table-wrap">
                    <div class="table-responsive">
                      <table class="table display product-overview mb-30" id="support_table5">
                        <thead>
                          <tr>
                            <th class="center">No</th>
                            <th class="center">Email</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $count=1; foreach ($subscription as $key) { ?>
                          <tr class="odd gradeX">
                              <td class="center"><?=$count?></td>
                              <td class="center"><?=$key->email?></td>
                          </tr>
                          <?php $count++; } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- end page content -->