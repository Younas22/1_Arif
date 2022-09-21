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
								<li><a class="parent-item" href="">Extra</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Faqs</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Category: <?=$view_blog->category_title?></header>

									<a class="btn deepPink-bgcolor  btn-outline dropdown-toggle pull-right m-3" href="<?=base_url('admin/blogs')?>">back</a>

								</div>
								<div class="card-body">

									<div class="row p-b-20">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <!-- <div class="btn-group">
                                                <a href="<?=base_url('admin/add-blogs')?>" id="addRow" class="btn btn-info">
                                                    Add New <i class="fa fa-plus"></i>
                                                </a>
                                            </div> -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-6  d-none">
                                            <div class="btn-group pull-right">
                                                <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
                                                    href="<?=base_url('admin/blogs')?>">back
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

									<div class="panel-group accordion" id="accordion3">
									A:
									<?php if ($view_blog->title_a) { 
										$title_a = str_replace(" ","",$view_blog->title_a);
										$clean_title_a = str_replace("?","",$title_a);
										?>
										<div class="panel faq panel-default">
											<div class="panel-heading faq-heading panel-heading-gray">
												<h4 class="panel-title">
													<a class="accordion-toggle accordion-toggle-styled"
														data-toggle="collapse" data-parent="#accordion3"
														href="#<?=$clean_title_a?>"><?=$view_blog->title_a?></a>
												</h4>
											</div>
											<div id="<?=$clean_title_a?>" class="panel-collapse collapse">
												<div class="panel-body">
													<p><?=$view_blog->desc_a?></p>
													
												</div>
											</div>
										</div>
									<?php }else{echo "<span class='text-danger'>Not Found!</span><br>";} ?>

									B:
									<?php if ($view_blog->title_b) { 
										$title_b = str_replace(" ","",$view_blog->title_b);
										$clean_title_b = str_replace("?","",$title_b);
										?>
										<div class="panel faq panel-default">
											<div class="panel-heading faq-heading panel-heading-gray">
												<h4 class="panel-title">
													<a class="accordion-toggle accordion-toggle-styled"
														data-toggle="collapse" data-parent="#accordion3"
														href="#<?=$clean_title_b?>"><?=$view_blog->title_b?></a>
												</h4>
											</div>
											<div id="<?=$clean_title_b?>" class="panel-collapse collapse">
												<div class="panel-body">
													<p><?=$view_blog->desc_b?></p>
													
												</div>
											</div>
										</div>
									<?php }else{echo "<span class='text-danger'>Not Found!</span><br>";} ?>

									C:
									<?php if ($view_blog->title_c) { 
										$title_c = str_replace(" ","",$view_blog->title_c);
										$clean_title_c = str_replace("?","",$title_c);
										?>
										<div class="panel faq panel-default">
											<div class="panel-heading faq-heading panel-heading-gray">
												<h4 class="panel-title">
													<a class="accordion-toggle accordion-toggle-styled"
														data-toggle="collapse" data-parent="#accordion3"
														href="#<?=$clean_title_c?>"><?=$view_blog->title_d?></a>
												</h4>
											</div>
											<div id="<?=$clean_title_c?>" class="panel-collapse collapse">
												<div class="panel-body">
													<p><?=$view_blog->desc_d?></p>
													
												</div>
											</div>
										</div>
									<?php }else{echo "<span class='text-danger'>Not Found!</span><br>";} ?>

									D:
									<?php if ($view_blog->title_d) { 
										$title_d = str_replace(" ","",$view_blog->title_d);
										$clean_title_d = str_replace("?","",$title_d);
										?>
										<div class="panel faq panel-default">
											<div class="panel-heading faq-heading panel-heading-gray">
												<h4 class="panel-title">
													<a class="accordion-toggle accordion-toggle-styled"
														data-toggle="collapse" data-parent="#accordion3"
														href="#<?=$clean_title_d?>"><?=$view_blog->title_d?></a>
												</h4>
											</div>
											<div id="<?=$clean_title_d?>" class="panel-collapse collapse">
												<div class="panel-body">
													<p><?=$view_blog->desc_d?></p>
													
												</div>
											</div>
										</div>
									<?php }else{echo "<span class='text-danger'>Not Found!</span><br>";} ?>

									E:
									<?php if ($view_blog->title_e) { 
										$title_e = str_replace(" ","",$view_blog->title_e);
										$clean_title_e = str_replace("?","",$title_e);
										?>
										<div class="panel faq panel-default">
											<div class="panel-heading faq-heading panel-heading-gray">
												<h4 class="panel-title">
													<a class="accordion-toggle accordion-toggle-styled"
														data-toggle="collapse" data-parent="#accordion3"
														href="#<?=$clean_title_e?>"><?=$view_blog->title_e?></a>
												</h4>
											</div>
											<div id="<?=$clean_title_e?>" class="panel-collapse collapse">
												<div class="panel-body">
													<p><?=$view_blog->desc_e?></p>
													
												</div>
											</div>
										</div>
									<?php }else{echo "<span class='text-danger'>Not Found!</span><br>";} ?>

									F:
									<?php if ($view_blog->title_f) { 
										$title_f = str_replace(" ","",$view_blog->title_f);
										$clean_title_f = str_replace("?","",$title_f);
										?>
										<div class="panel faq panel-default">
											<div class="panel-heading faq-heading panel-heading-gray">
												<h4 class="panel-title">
													<a class="accordion-toggle accordion-toggle-styled"
														data-toggle="collapse" data-parent="#accordion3"
														href="#<?=$clean_title_f?>"><?=$view_blog->title_f?></a>
												</h4>
											</div>
											<div id="<?=$clean_title_f?>" class="panel-collapse collapse">
												<div class="panel-body">
													<p><?=$view_blog->desc_f?></p>
													
												</div>
											</div>
										</div>
									<?php }else{echo "<span class='text-danger'>Not Found!</span><br>";} ?>

									G:
									<?php if ($view_blog->title_g) { 
										$title_g = str_replace(" ","",$view_blog->title_g);
										$clean_title_g = str_replace("?","",$title_g);
										?>
										<div class="panel faq panel-default">
											<div class="panel-heading faq-heading panel-heading-gray">
												<h4 class="panel-title">
													<a class="accordion-toggle accordion-toggle-styled"
														data-toggle="collapse" data-parent="#accordion3"
														href="#<?=$clean_title_g?>"><?=$view_blog->title_g?></a>
												</h4>
											</div>
											<div id="<?=$clean_title_g?>" class="panel-collapse collapse">
												<div class="panel-body">
													<p><?=$view_blog->desc_g?></p>
													
												</div>
											</div>
										</div>
									<?php }else{echo "<span class='text-danger'>Not Found!</span><br>";} ?>

									H:
									<?php if ($view_blog->title_h) { 
										$title_h = str_replace(" ","",$view_blog->title_h);
										$clean_title_h = str_replace("?","",$title_h);
										?>
										<div class="panel faq panel-default">
											<div class="panel-heading faq-heading panel-heading-gray">
												<h4 class="panel-title">
													<a class="accordion-toggle accordion-toggle-styled"
														data-toggle="collapse" data-parent="#accordion3"
														href="#<?=$clean_title_h?>"><?=$view_blog->title_h?></a>
												</h4>
											</div>
											<div id="<?=$clean_title_h?>" class="panel-collapse collapse">
												<div class="panel-body">
													<p><?=$view_blog->desc_h?></p>
													
												</div>
											</div>
										</div>
									<?php }else{echo "<span class='text-danger'>Not Found!</span><br>";} ?>

									I:
									<?php if ($view_blog->title_i) { 
										$title_i = str_replace(" ","",$view_blog->title_i);
										$clean_title_i = str_replace("?","",$title_i);
										?>
										<div class="panel faq panel-default">
											<div class="panel-heading faq-heading panel-heading-gray">
												<h4 class="panel-title">
													<a class="accordion-toggle accordion-toggle-styled"
														data-toggle="collapse" data-parent="#accordion3"
														href="#<?=$clean_title_i?>"><?=$view_blog->title_i?></a>
												</h4>
											</div>
											<div id="<?=$clean_title_i?>" class="panel-collapse collapse">
												<div class="panel-body">
													<p><?=$view_blog->desc_i?></p>
													
												</div>
											</div>
										</div>
									<?php }else{echo "<span class='text-danger'>Not Found!</span><br>";} ?>

									J:
									<?php if ($view_blog->title_j) { 
										$title_j = str_replace(" ","",$view_blog->title_j);
										$clean_title_j = str_replace("?","",$title_j);
										?>
										<div class="panel faq panel-default">
											<div class="panel-heading faq-heading panel-heading-gray">
												<h4 class="panel-title">
													<a class="accordion-toggle accordion-toggle-styled"
														data-toggle="collapse" data-parent="#accordion3"
														href="#<?=$clean_title_j?>"><?=$view_blog->title_j?></a>
												</h4>
											</div>
											<div id="<?=$clean_title_j?>" class="panel-collapse collapse">
												<div class="panel-body">
													<p><?=$view_blog->desc_j?></p>
													
												</div>
											</div>
										</div>
									<?php }else{echo "<span class='text-danger'>Not Found!</span><br>";} ?>

									K:
									<?php if ($view_blog->title_k) { 
										$title_k = str_replace(" ","",$view_blog->title_k);
										$clean_title_k = str_replace("?","",$title_k);
										?>
										<div class="panel faq panel-default">
											<div class="panel-heading faq-heading panel-heading-gray">
												<h4 class="panel-title">
													<a class="accordion-toggle accordion-toggle-styled"
														data-toggle="collapse" data-parent="#accordion3"
														href="#<?=$clean_title_k?>"><?=$view_blog->title_k?></a>
												</h4>
											</div>
											<div id="<?=$clean_title_k?>" class="panel-collapse collapse">
												<div class="panel-body">
													<p><?=$view_blog->desc_k?></p>
													
												</div>
											</div>
										</div>
									<?php }else{echo "<span class='text-danger'>Not Found!</span><br>";} ?>

									L:
									<?php if ($view_blog->title_l) { 
										$title_l = str_replace(" ","",$view_blog->title_l);
										$clean_title_l = str_replace("?","",$title_l);
										?>
										<div class="panel faq panel-default">
											<div class="panel-heading faq-heading panel-heading-gray">
												<h4 class="panel-title">
													<a class="accordion-toggle accordion-toggle-styled"
														data-toggle="collapse" data-parent="#accordion3"
														href="#<?=$clean_title_l?>"><?=$view_blog->title_l?></a>
												</h4>
											</div>
											<div id="<?=$clean_title_l?>" class="panel-collapse collapse">
												<div class="panel-body">
													<p><?=$view_blog->desc_l?></p>
													
												</div>
											</div>
										</div>
									<?php }else{echo "<span class='text-danger'>Not Found!</span><br>";} ?>

									M:
									<?php if ($view_blog->title_m) { 
										$title_m = str_replace(" ","",$view_blog->title_m);
										$clean_title_m = str_replace("?","",$title_m);
										?>
										<div class="panel faq panel-default">
											<div class="panel-heading faq-heading panel-heading-gray">
												<h4 class="panel-title">
													<a class="accordion-toggle accordion-toggle-styled"
														data-toggle="collapse" data-parent="#accordion3"
														href="#<?=$clean_title_m?>"><?=$view_blog->title_m?></a>
												</h4>
											</div>
											<div id="<?=$clean_title_m?>" class="panel-collapse collapse">
												<div class="panel-body">
													<p><?=$view_blog->desc_m?></p>
													
												</div>
											</div>
										</div>
									<?php }else{echo "<span class='text-danger'>Not Found!</span><br>";} ?>

									N:
									<?php if ($view_blog->title_n) { 
										$title_n = str_replace(" ","",$view_blog->title_n);
										$clean_title_n = str_replace("?","",$title_n);
										?>
										<div class="panel faq panel-default">
											<div class="panel-heading faq-heading panel-heading-gray">
												<h4 class="panel-title">
													<a class="accordion-toggle accordion-toggle-styled"
														data-toggle="collapse" data-parent="#accordion3"
														href="#<?=$clean_title_n?>"><?=$view_blog->title_n?></a>
												</h4>
											</div>
											<div id="<?=$clean_title_n?>" class="panel-collapse collapse">
												<div class="panel-body">
													<p><?=$view_blog->desc_n?></p>
													
												</div>
											</div>
										</div>
									<?php }else{echo "<span class='text-danger'>Not Found!</span><br>";} ?>

									O:
									<?php if ($view_blog->title_o) { 
										$title_o = str_replace(" ","",$view_blog->title_o);
										$clean_title_o = str_replace("?","",$title_o);
										?>
										<div class="panel faq panel-default">
											<div class="panel-heading faq-heading panel-heading-gray">
												<h4 class="panel-title">
													<a class="accordion-toggle accordion-toggle-styled"
														data-toggle="collapse" data-parent="#accordion3"
														href="#<?=$clean_title_o?>"><?=$view_blog->title_o?></a>
												</h4>
											</div>
											<div id="<?=$clean_title_o?>" class="panel-collapse collapse">
												<div class="panel-body">
													<p><?=$view_blog->desc_o?></p>
													
												</div>
											</div>
										</div>
									<?php }else{echo "<span class='text-danger'>Not Found!</span><br>";} ?>

									P:
									<?php if ($view_blog->title_p) { 
										$title_p = str_replace(" ","",$view_blog->title_p);
										$clean_title_p = str_replace("?","",$title_p);
										?>
										<div class="panel faq panel-default">
											<div class="panel-heading faq-heading panel-heading-gray">
												<h4 class="panel-title">
													<a class="accordion-toggle accordion-toggle-styled"
														data-toggle="collapse" data-parent="#accordion3"
														href="#<?=$clean_title_p?>"><?=$view_blog->title_p?></a>
												</h4>
											</div>
											<div id="<?=$clean_title_p?>" class="panel-collapse collapse">
												<div class="panel-body">
													<p><?=$view_blog->desc_p?></p>
													
												</div>
											</div>
										</div>
									<?php }else{echo "<span class='text-danger'>Not Found!</span><br>";} ?>

									Q:
									<?php if ($view_blog->title_q) { 
										$title_q = str_replace(" ","",$view_blog->title_q);
										$clean_title_q = str_replace("?","",$title_q);
										?>
										<div class="panel faq panel-default">
											<div class="panel-heading faq-heading panel-heading-gray">
												<h4 class="panel-title">
													<a class="accordion-toggle accordion-toggle-styled"
														data-toggle="collapse" data-parent="#accordion3"
														href="#<?=$clean_title_q?>"><?=$view_blog->title_q?></a>
												</h4>
											</div>
											<div id="<?=$clean_title_q?>" class="panel-collapse collapse">
												<div class="panel-body">
													<p><?=$view_blog->desc_q?></p>
													
												</div>
											</div>
										</div>
									<?php }else{echo "<span class='text-danger'>Not Found!</span><br>";} ?>

									R:
									<?php if ($view_blog->title_r) { 
										$title_r = str_replace(" ","",$view_blog->title_r);
										$clean_title_r = str_replace("?","",$title_r);
										?>
										<div class="panel faq panel-default">
											<div class="panel-heading faq-heading panel-heading-gray">
												<h4 class="panel-title">
													<a class="accordion-toggle accordion-toggle-styled"
														data-toggle="collapse" data-parent="#accordion3"
														href="#<?=$clean_title_r?>"><?=$view_blog->title_r?></a>
												</h4>
											</div>
											<div id="<?=$clean_title_r?>" class="panel-collapse collapse">
												<div class="panel-body">
													<p><?=$view_blog->desc_r?></p>
													
												</div>
											</div>
										</div>
									<?php }else{echo "<span class='text-danger'>Not Found!</span><br>";} ?>

									S:
									<?php if ($view_blog->title_s) { 
										$title_s = str_replace(" ","",$view_blog->title_s);
										$clean_title_s = str_replace("?","",$title_s);
										?>
										<div class="panel faq panel-default">
											<div class="panel-heading faq-heading panel-heading-gray">
												<h4 class="panel-title">
													<a class="accordion-toggle accordion-toggle-styled"
														data-toggle="collapse" data-parent="#accordion3"
														href="#<?=$clean_title_s?>"><?=$view_blog->title_s?></a>
												</h4>
											</div>
											<div id="<?=$clean_title_s?>" class="panel-collapse collapse">
												<div class="panel-body">
													<p><?=$view_blog->desc_s?></p>
													
												</div>
											</div>
										</div>
									<?php }else{echo "<span class='text-danger'>Not Found!</span><br>";} ?>

									T:
									<?php if ($view_blog->title_t) { 
										$title_t = str_replace(" ","",$view_blog->title_t);
										$clean_title_t = str_replace("?","",$title_t);
										?>
										<div class="panel faq panel-default">
											<div class="panel-heading faq-heading panel-heading-gray">
												<h4 class="panel-title">
													<a class="accordion-toggle accordion-toggle-styled"
														data-toggle="collapse" data-parent="#accordion3"
														href="#<?=$clean_title_t?>"><?=$view_blog->title_t?></a>
												</h4>
											</div>
											<div id="<?=$clean_title_t?>" class="panel-collapse collapse">
												<div class="panel-body">
													<p><?=$view_blog->desc_t?></p>
													
												</div>
											</div>
										</div>
									<?php }else{echo "<span class='text-danger'>Not Found!</span><br>";} ?>



									</div>
								</div>
							</div>
						</div>
					</div>

				<div class="row">

					<?php if ($view_blog->img_a) { ?>
						<div class="col-lg-3 col-md-6 col-12 col-sm-6">
							<div class="blogThumb">
								<div class="thumb-center"><img class="img-responsive" alt="user"
										src="<?=base_url('assets/admin/img/blog/').$view_blog->img_a?>"></div>
								<div class="vehicle-name bg-b-pink">
									<div class="user-name">Image A</div>
								</div>
							</div>
						</div>
					<?php } ?>
					
					<?php if ($view_blog->img_b) { ?>
						<div class="col-lg-3 col-md-6 col-12 col-sm-6">
							<div class="blogThumb">
								<div class="thumb-center"><img class="img-responsive" alt="user"
										src="<?=base_url('assets/admin/img/blog/').$view_blog->img_b?>"></div>
								<div class="vehicle-name bg-b-pink">
									<div class="user-name">Image B</div>
								</div>
							</div>
						</div>
					<?php } ?>


					<?php if ($view_blog->video_a) { ?>
						<div class="col-lg-3 col-md-6 col-12 col-sm-6">
							<div class="blogThumb">
								<div class="thumb-center">
									<div class="hs-responsive-embed-youtube">

										<iframe src="<?=$view_blog->video_a?>"></iframe>

									</div>
									</div>
								<div class="vehicle-name bg-b-pink">
									<div class="user-name">Video A</div>
								</div>
							</div>
						</div>
					<?php } ?>

					<?php if ($view_blog->video_b) { ?>
						<div class="col-lg-3 col-md-6 col-12 col-sm-6">
							<div class="blogThumb">
								<div class="thumb-center">
									<div class="hs-responsive-embed-youtube">
										<iframe src="<?=$view_blog->video_b?>"></iframe>
									</div>
									</div>
								<div class="vehicle-name bg-b-pink">
									<div class="user-name">Video B</div>
								</div>
							</div>
						</div>
					<?php } ?>

				</div>


				</div>
			</div>
			<!-- end page content -->