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
									<button id="panel-button"
										class="mdl-button mdl-js-button mdl-button--icon pull-right d-none"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
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

								<form action="<?= base_url('admin/category-added') ?>" enctype="multipart/form-data" method="POST">
								<div class="card-body row">
									<div class="col-lg-6 p-t-20 offset-lg-3">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtRoomNo" name="category_title">
											<label class="mdl-textfield__label">Blog Category</label>
										</div>
									</div>
									<div class="col-lg-12 p-t-20 text-center">
										<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
										<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default d-none">Cancel</button>
									</div>
								</div>
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->