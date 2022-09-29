            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">All Subscription</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right d-none">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                        href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="">Subscription</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">All Subscription</li>
                            </ol>
                        </div>
                    </div>


                    <?php if ($this->session->flashdata('message')) { ?>
                        <div class="alert alert-success p-2">
                          <?= $this->session->flashdata('message'); ?>
                        </div>
                    <?php  } $this->session->unset_userdata ('message'); ?>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <!-- <a href='<?= base_url() ?>export-email-list'>Export</a> -->

                                    <header>All Subscription</header>
                                    <div class="tools">
                                        <a href='<?= base_url() ?>export-email-list' class="btn-sm btn-info">Export</a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="table-scrollable">
                                        <table class="table table-hover table-checkable order-column full-width"
                                            id="example4">
                                            <thead>
                                                <tr>
                                                    <th class="center"> # </th>
                                                    <th class="right"> Email </th>
                                                    <th class="center"> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php $count=1; foreach ($subscription as $key) { ?>
                                                <tr class="odd gradeX">
                                                    <td class="center"><?=$count?></td>
                                                    <td class="right"><?=$key->email?></td>
                                                    <td class="center"><a href='<?= base_url('email-delate/').$key->id ?>' class="btn-sm btn-danger" onclick="return confirm('Are you sure want to delete this?');">Delete</a></td>
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
            <!-- end page content -->