<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title"><?=$title?></div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right d-none">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                    href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li><a class="parent-item" href="">Booking</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active"><?=$title?></li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <?php if (!empty($this->session->flashdata('del'))) { ?>
        <div class="alert label-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"
            aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?= $this->session->flashdata('del'); ?>
        </div>
        <?php } ?>
        <?php if (!empty($this->session->flashdata('msg'))) { ?>
        <div class="alert label-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"
            aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?= $this->session->flashdata('msg'); ?>
        </div>
        <?php } ?>
        
        <div class="card card-box">
            <div class="card-head">
            <header><?=$title?></header>
            <div class="tools">
                <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
            </div>
        </div>
        <div class="card-body">
            <div class="row p-b-20">
                <div class="col-md-6 col-sm-6 col-6">
                    <div class="btn-group">
                        <a href="<?=base_url('admin/add-blogs')?>" id="addRow" class="btn btn-info">
                            Add New <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-6 d-none">
                    <div class="btn-group pull-right">
                        <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
                            data-toggle="dropdown">Tools
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="javascript:;">
                                <i class="fa fa-print"></i> Print </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="table-scrollable">
                <table class="table table-hover table-checkable order-column full-width"
                    id="example4">
                    <thead>
                        <tr>
                            <th class="center"> # </th>
                            <th class="center"> Category </th>
                            <th class="center"> Title A </th>
                            <th class="center"> Desc A </th>
                            <th class="center"> Img A </th>
                            <th class="center">  Title B </th>
                            <th class="center">  Desc B </th>
                            <th class="center">  Img B </th>
                            <th class="center"> Main </th>
                            <th class="center"> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1; foreach ($blog as $key) { ?>
                        <tr class="odd gradeX">
                            <td class="center"><?=$count?></td>
                            <td class="center"><?= $key->category_title ?></td>
                            <td class="center"><?= character_limiter($key->title_a, 10)?></td>
                            <td class="center"><?= character_limiter($key->desc_a, 10)?></td>
                            <td class="user-circle-img center">
                                <img width="50" height="50" src="<?=base_url('assets/admin/img/blog/').$key->img_a?>" alt="">
                            </td>
                            <td class="center"><?= character_limiter($key->title_b, 10)?></td>
                            <td class="center"><?= character_limiter($key->desc_b, 10)?></td>
                            <td class="user-circle-img center">
                                <img width="50" height="50" src="<?=base_url('assets/admin/img/blog/').$key->img_b?>" alt="">
                            </td>
                            <td class="center text-center">
                                <?php
                                if ($key->main == 'a') {
                                $main_title = 'B';
                                }else{
                                $main_title = 'A';
                                }
                                ?>
                                <a class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored margin-right-10" onclick="return confirm('Are you sure , you want to make (<?=$main_title?>) to main title?')" href="<?=base_url('admin/main-blogs/').$key->id.'/'.$main_title?>">
                                    <?=$key->main?>
                                </a>
                            </td>
                            <td class="center">
                                <a href="<?=base_url('admin/view-blogs/').$key->id?>" class="btn btn-tbl-edit btn-xs bg-primary">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="<?=base_url('admin/edit-blogs/').$key->id?>" class="btn btn-tbl-edit btn-xs" onclick="return confirm('Are you sure , you want to view blog?')">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a class="btn btn-tbl-delete btn-xs" onclick="return confirm('Are you sure , you want to delete blog?')" href="<?=base_url('admin/delete-blogs/').$key->id?>">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
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