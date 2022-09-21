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
								<li><a class="parent-item" href="">Rooms</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active"><?=$title?></li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header><?=$title?></header>
									<a class="btn deepPink-bgcolor  btn-outline dropdown-toggle pull-right m-3" href="<?=base_url('admin/blogs')?>">back</a>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect d-none"
										data-mdl-for="panel-button">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
											here</li>
									</ul>
								</div>


							<form action="<?= base_url('admin/blog-added') ?>" enctype="multipart/form-data" method="POST">
								<div class="card-body row">
									<div class="col-lg-12 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<select class="mdl-textfield__input" type="text" name="category_id" required="">
												<option value="1">Select Category</option>
											<?php foreach ($blog_category as $key) { ?>
												<option value="<?=$key->id?>"><?=$key->category_title?></option>
											<?php } ?>
											</select>
										<label for="list3" class="mdl-textfield__label">Blog Category</label>
										</div>
									</div>
									<div class="col-lg-4 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="text8" name="title_a" required="">
											<label class="mdl-textfield__label" for="text8">Title A</label>
											<span class="mdl-textfield__error">Title A required!</span>
										</div>
									</div>
									<div class="col-lg-4 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<textarea class="mdl-textfield__input" rows="1" name="desc_a" required=""></textarea>
											<label for="sample2" class="mdl-textfield__label">Desc A</label>
											<span class="mdl-textfield__error">Desc A required!</span>
										</div>
									</div>
									<div class="col-lg-4 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
										<input class="mdl-textfield__input" type="file" name="img_a" required="">
											<!-- <label for="sample2" class="mdl-textfield__label">Meal</label> -->
											<span class="mdl-textfield__error">Image A required!</span>
										</div>
									</div>

<!-- A SEO -->
<!-- <div class="col-lg-6 p-t-20">
	<div
		class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
		<input class="mdl-textfield__input" type="text" id="text8" name="title_a_seo" required="">
		<label class="mdl-textfield__label" for="text8">Title A SEO</label>
		<span class="mdl-textfield__error">Title A required!</span>
	</div>
</div>
<div class="col-lg-6 p-t-20">
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
		<textarea class="mdl-textfield__input" rows="1" name="desc_a_seo" required=""></textarea>
		<label for="sample2" class="mdl-textfield__label">Desc A SEO</label>
		<span class="mdl-textfield__error">Desc A required!</span>
	</div>
</div> -->
<!-- END A SEO -->


									<div class="col-lg-4 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="text8" name="title_b" required="">
											<label class="mdl-textfield__label" for="text8">Title B</label>
											<span class="mdl-textfield__error">Title B required!</span>
										</div>
									</div>
									<div class="col-lg-4 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<textarea class="mdl-textfield__input" rows="1" name="desc_b" required=""></textarea>
											<label for="sample2" class="mdl-textfield__label">Desc B</label>
											<span class="mdl-textfield__error">Desc B required!</span>
										</div>
									</div>
									<div class="col-lg-4 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
									<input class="mdl-textfield__input" type="file" name="img_b" required="">
									<span class="mdl-textfield__error">Image B required!</span>
										</div>
									</div>

<!-- B SEO -->
<!-- <div class="col-lg-6 p-t-20">
	<div
		class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
		<input class="mdl-textfield__input" type="text" id="text8" name="title_b_seo" required="">
		<label class="mdl-textfield__label" for="text8">Title B SEO</label>
		<span class="mdl-textfield__error">Title B required!</span>
	</div>
</div>
<div class="col-lg-6 p-t-20">
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
		<textarea class="mdl-textfield__input" rows="1" name="desc_b_seo" required=""></textarea>
		<label for="sample2" class="mdl-textfield__label">Desc B SEO</label>
		<span class="mdl-textfield__error">Desc B required!</span>
	</div>
</div> -->
<!-- END B SEO -->
									
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="text8" required name="title_c">
											<label class="mdl-textfield__label" for="text8">Title C</label>
											<span class="mdl-textfield__error">Title C required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<textarea class="mdl-textfield__input" rows="1" name="desc_c" required></textarea>
											<label for="sample2" class="mdl-textfield__label">Desc C</label>
											<span class="mdl-textfield__error">Desc C required!</span>
										</div>
									</div>


									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="text8" required name="title_d">
											<label class="mdl-textfield__label" for="text8">Title D</label>
											<span class="mdl-textfield__error">Title D required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<textarea class="mdl-textfield__input" rows="1" name="desc_d" required></textarea>
											<label for="sample2" class="mdl-textfield__label">Desc D</label>
											<span class="mdl-textfield__error">Desc D required!</span>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="text8" required name="title_e">
											<label class="mdl-textfield__label" for="text8">Title E</label>
											<span class="mdl-textfield__error">Title E required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<textarea class="mdl-textfield__input" rows="1" name="desc_e" required></textarea>
											<label for="sample2" class="mdl-textfield__label">Desc E</label>
											<span class="mdl-textfield__error">Desc E required!</span>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="text8" required name="title_f">
											<label class="mdl-textfield__label" for="text8">Title F</label>
											<span class="mdl-textfield__error">Title F required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<textarea class="mdl-textfield__input" rows="1" name="desc_f" required></textarea>
											<label for="sample2" class="mdl-textfield__label">Desc F</label>
											<span class="mdl-textfield__error">Desc F required!</span>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="text8" required name="title_g">
											<label class="mdl-textfield__label" for="text8">Title G</label>
											<span class="mdl-textfield__error">Title G required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<textarea class="mdl-textfield__input" rows="1" name="desc_g" required></textarea>
											<label for="sample2" class="mdl-textfield__label">Desc G</label>
											<span class="mdl-textfield__error">Desc G required!</span>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="text8" required name="title_h">
											<label class="mdl-textfield__label" for="text8">Title H</label>
											<span class="mdl-textfield__error">Title H required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<textarea class="mdl-textfield__input" rows="1" name="desc_h" required></textarea>
											<label for="sample2" class="mdl-textfield__label">Desc H</label>
											<span class="mdl-textfield__error">Desc H required!</span>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="text8" required name="title_i">
											<label class="mdl-textfield__label" for="text8">Title I</label>
											<span class="mdl-textfield__error">Title I required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<textarea class="mdl-textfield__input" rows="1" name="desc_i" required></textarea>
											<label for="sample2" class="mdl-textfield__label">Desc I</label>
											<span class="mdl-textfield__error">Desc I required!</span>
										</div>
									</div>


									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="text8" required name="title_j">
											<label class="mdl-textfield__label" for="text8">Title J</label>
											<span class="mdl-textfield__error">Title J required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<textarea class="mdl-textfield__input" rows="1" name="desc_j" required></textarea>
											<label for="sample2" class="mdl-textfield__label">Desc J</label>
											<span class="mdl-textfield__error">Desc J required!</span>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="text8" required name="title_k">
											<label class="mdl-textfield__label" for="text8">Title K</label>
											<span class="mdl-textfield__error">Title K required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<textarea class="mdl-textfield__input" rows="1" name="desc_k" required></textarea>
											<label for="sample2" class="mdl-textfield__label">Desc K</label>
											<span class="mdl-textfield__error">Desc K required!</span>
										</div>
									</div>


									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="text8" required name="title_l">
											<label class="mdl-textfield__label" for="text8">Title L</label>
											<span class="mdl-textfield__error">Title L required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<textarea class="mdl-textfield__input" rows="1" name="desc_l" required></textarea>
											<label for="sample2" class="mdl-textfield__label">Desc L</label>
											<span class="mdl-textfield__error">Desc L required!</span>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="text8" required name="title_m">
											<label class="mdl-textfield__label" for="text8">Title M</label>
											<span class="mdl-textfield__error">Title M required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<textarea class="mdl-textfield__input" rows="1" name="desc_m" required></textarea>
											<label for="sample2" class="mdl-textfield__label">Desc M</label>
											<span class="mdl-textfield__error">Desc M required!</span>
										</div>
									</div>


									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="text8" name="title_n">
											<label class="mdl-textfield__label" for="text8">Title N</label>
											<span class="mdl-textfield__error">Number required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<textarea class="mdl-textfield__input" rows="1" name="desc_n"></textarea>
											<label for="sample2" class="mdl-textfield__label">Desc N</label>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="text8" name="title_o">
											<label class="mdl-textfield__label" for="text8">Title O</label>
											<span class="mdl-textfield__error">Number required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<textarea class="mdl-textfield__input" rows="1" name="desc_o"></textarea>
											<label for="sample2" class="mdl-textfield__label">Desc O</label>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="text8" name="title_p">
											<label class="mdl-textfield__label" for="text8">Title P</label>
											<span class="mdl-textfield__error">Number required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<textarea class="mdl-textfield__input" rows="1" name="desc_p"></textarea>
											<label for="sample2" class="mdl-textfield__label">Desc P</label>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="text8" name="title_q">
											<label class="mdl-textfield__label" for="text8">Title Q</label>
											<span class="mdl-textfield__error">Number required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<textarea class="mdl-textfield__input" rows="1" name="desc_q"></textarea>
											<label for="sample2" class="mdl-textfield__label">Desc Q</label>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="text8" name="title_r">
											<label class="mdl-textfield__label" for="text8">Title R</label>
											<span class="mdl-textfield__error">Number required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<textarea class="mdl-textfield__input" rows="1" name="desc_r"></textarea>
											<label for="sample2" class="mdl-textfield__label">Desc R</label>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="text8" name="title_s">
											<label class="mdl-textfield__label" for="text8">Title S</label>
											<span class="mdl-textfield__error">Number required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<textarea class="mdl-textfield__input" rows="1" name="desc_s"></textarea>
											<label for="sample2" class="mdl-textfield__label">Desc S</label>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="text8" name="title_t">
											<label class="mdl-textfield__label" for="text8">Title T</label>
											<span class="mdl-textfield__error">Number required!</span>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
											<textarea class="mdl-textfield__input" rows="1" name="desc_t"></textarea>
											<label for="sample2" class="mdl-textfield__label">Desc T</label>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="text8" name="video_a_title">
											<label class="mdl-textfield__label" for="text8">Video A Title</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="text8" name="video_a">
											<label class="mdl-textfield__label" for="text8">Video A</label>
										</div>
									</div>


									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="text8" name="video_b_title">
											<label class="mdl-textfield__label" for="text8">Video B Title</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="text8" name="video_b">
											<label class="mdl-textfield__label" for="text8">Video B</label>
										</div>
									</div>

									<div class="col-lg-12 p-t-20 text-center">
										<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
										<!-- <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button> -->
									</div>
								</div>
							</form>



							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->