<?php include('common/head.php'); ?>
	<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
		<?php include('common/header.php'); ?>
			<!-- partial -->
			<div class="container-fluid page-body-wrapper">
				<!-- partial:partials/_settings-panel.html -->
				<div class="theme-setting-wrapper">
					<!-- <div id="settings-trigger"><i class="ti-settings"></i></div> -->
					<div id="theme-settings" class="settings-panel"> <i class="settings-close ti-close"></i>
						<p class="settings-heading">SIDEBAR SKINS</p>
						<div class="sidebar-bg-options selected" id="sidebar-light-theme">
							<div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
						<div class="sidebar-bg-options" id="sidebar-dark-theme">
							<div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
						<p class="settings-heading mt-2">HEADER SKINS</p>
						<div class="color-tiles mx-0 px-4">
							<div class="tiles success"></div>
							<div class="tiles warning"></div>
							<div class="tiles danger"></div>
							<div class="tiles info"></div>
							<div class="tiles dark"></div>
							<div class="tiles default"></div>
						</div>
					</div>
				</div>
				<div id="right-sidebar" class="settings-panel"> <i class="settings-close ti-close"></i>
					<ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
						<li class="nav-item"> <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a> </li>
						<li class="nav-item"> <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a> </li>
					</ul>
					<div class="tab-content" id="setting-content">
						<div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
							<div class="add-items d-flex px-3 mb-0">
								<form class="form w-100">
									<div class="form-group d-flex">
										<input type="text" class="form-control todo-list-input" placeholder="Add To-do">
										<button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
									</div>
								</form>
							</div>
							<div class="list-wrapper px-3">
								<ul class="d-flex flex-column-reverse todo-list">
									<li>
										<div class="form-check">
											<label class="form-check-label">
												<input class="checkbox" type="checkbox"> Team review meeting at 3.00 PM </label>
										</div> <i class="remove ti-close"></i> </li>
									<li>
										<div class="form-check">
											<label class="form-check-label">
												<input class="checkbox" type="checkbox"> Prepare for presentation </label>
										</div> <i class="remove ti-close"></i> </li>
									<li>
										<div class="form-check">
											<label class="form-check-label">
												<input class="checkbox" type="checkbox"> Resolve all the low priority tickets due today </label>
										</div> <i class="remove ti-close"></i> </li>
									<li class="completed">
										<div class="form-check">
											<label class="form-check-label">
												<input class="checkbox" type="checkbox" checked> Schedule meeting for next week </label>
										</div> <i class="remove ti-close"></i> </li>
									<li class="completed">
										<div class="form-check">
											<label class="form-check-label">
												<input class="checkbox" type="checkbox" checked> Project review </label>
										</div> <i class="remove ti-close"></i> </li>
								</ul>
							</div>
							<h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
							<div class="events pt-4 px-3">
								<div class="wrapper d-flex mb-2"> <i class="ti-control-record text-primary me-2"></i> <span>Feb 11 2018</span> </div>
								<p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
								<p class="text-gray mb-0">The total number of sessions</p>
							</div>
							<div class="events pt-4 px-3">
								<div class="wrapper d-flex mb-2"> <i class="ti-control-record text-primary me-2"></i> <span>Feb 7 2018</span> </div>
								<p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
								<p class="text-gray mb-0 ">Call Sarah Graves</p>
							</div>
						</div>
						<!-- To do section tab ends -->
						<div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
							<div class="d-flex align-items-center justify-content-between border-bottom">
								<p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p> <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small> </div>
							<ul class="chat-list">
								<li class="list active">
									<div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
									<div class="info">
										<p>Thomas Douglas</p>
										<p>Available</p>
									</div> <small class="text-muted my-auto">19 min</small> </li>
								<li class="list">
									<div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
									<div class="info">
										<div class="wrapper d-flex">
											<p>Catherine</p>
										</div>
										<p>Away</p>
									</div>
									<div class="badge badge-success badge-pill my-auto mx-2">4</div> <small class="text-muted my-auto">23 min</small> </li>
								<li class="list">
									<div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
									<div class="info">
										<p>Daniel Russell</p>
										<p>Available</p>
									</div> <small class="text-muted my-auto">14 min</small> </li>
								<li class="list">
									<div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
									<div class="info">
										<p>James Richardson</p>
										<p>Away</p>
									</div> <small class="text-muted my-auto">2 min</small> </li>
								<li class="list">
									<div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
									<div class="info">
										<p>Madeline Kennedy</p>
										<p>Available</p>
									</div> <small class="text-muted my-auto">5 min</small> </li>
								<li class="list">
									<div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
									<div class="info">
										<p>Sarah Graves</p>
										<p>Available</p>
									</div> <small class="text-muted my-auto">47 min</small> </li>
							</ul>
						</div>
						<!-- chat tab ends -->
					</div>
				</div>
				<!-- partial -->
				<!-- partial:partials/_sidebar.html -->
				<?php include('common/sidebar.php'); ?>
					<!-- partial -->
					<div class="main-panel">
						<div class="content-wrapper">
							<div class="row">
								<div class="col-sm-12">
									<div class="home-tab">
										<div class="d-flex align-items-center justify-content-between mb-2">
											<div>
												<h4>Customer Status Overview</h4> </div>
											<div class="d-flex">
												<div class="btn-wrapper mright-10"> <a href="#" class="btn btn-primary text-white me-10 d-flex"><i class="icon-plus"></i> Add</a> </div>
												<div class="input-group">
													<input class="form-control border-end-0 border" type="search" value="search" id="example-search-input"> <span class="input-group-append">
                    <button class="bg-white border-start-0 border-bottom-0 border ms-n5 btn-search" type="button">
                    <icon class="mdi mdi-magnify"></icon>
                    </button>
                </span> </div>
											</div>
										</div>
										<div class="tab-content tab-content-basic">
											<div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
												<div class="row">
													<div class="col-lg-12 d-flex flex-column">
														<div class="row flex-grow">
															<div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
																<div class="card card-rounded">
																	<div class="card-body">
																		<ul class="nav nav-tabs" id="myTab" role="tablist">
																			<li class="nav-item txt_orange" role="presentation">
																				<button class="nav-link active" id="new-tab" data-bs-toggle="tab" data-bs-target="#new" type="button" role="tab" aria-controls="home" aria-selected="true">
																					<icon class="mdi mdi-star-outline"></icon> New </button>
																			</li>
																			<li class="nav-item txt_blue" role="presentation">
																				<button class="nav-link" id="inp-tab" data-bs-toggle="tab" data-bs-target="#inp" type="button" role="tab" aria-controls="profile" aria-selected="false">
																					<icon class="mdi mdi-av-timer"></icon> In Prgress </button>
																			</li>
																			<li class="nav-item txt_green" role="presentation">
																				<button class="nav-link" id="quotes-tab" data-bs-toggle="tab" data-bs-target="#quotes" type="button" role="tab" aria-controls="contact" aria-selected="false">
																					<icon class="mdi mdi-comment-text-outline"></icon> Quotes </button>
																			</li>
																			<li class="nav-item txt_purple" role="presentation">
																				<button class="nav-link" id="won-tab" data-bs-toggle="tab" data-bs-target="#won" type="button" role="tab" aria-controls="contact" aria-selected="false">
																					<icon class="mdi mdi-shield-outline"></icon> Won </button>
																			</li>
																			<li class="nav-item  txt_grey" role="presentation">
																				<button class="nav-link" id="lost-tab" data-bs-toggle="tab" data-bs-target="#lost" type="button" role="tab" aria-controls="contact" aria-selected="false">
																					<icon class="mdi mdi-close-circle-outline "></icon> Lost </button>
																			</li>
																		</ul>
																		<div class="tab-content" id="myTabContent">
																			<div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="new-tab">
																				<div class="table-responsive">
																					<table class="table table-striped">
																						<thead>
																							<tr>
																								<th> User </th>
																								<th> Name </th>
																								<th> Designation </th>
																								<th> Email </th>
																								<th> Phone </th>
																								<th> Country </th>
																								<th> Created On </th>
																							</tr>
																						</thead>
																						<tbody>
																							<tr>
																								<td class="py-1"> <img src="images/faces/face1.jpg" alt="image" /> </td>
																								<td> <a href="crm-customer-view.php"> Herman Beck</a> </td>
																								<td> CEO </td>
																								<td> test@test.com </td>
																								<td> 99448 65376 </td>
																								<td> UK </td>
																								<td> June 24, 2022 </td>
																							</tr>
																							<tr>
																								<td class="py-1"> <img src="images/faces/face2.jpg" alt="image" /> </td>
																								<td> Messsy Adam </td>
																								<td> Sales Executive </td>
																								<td> test@test.com </td>
																								<td> 99448 65376 </td>
																								<td> UK </td>
																								<td> June 24, 2022 </td>
																							</tr>
																							<tr>
																								<td class="py-1"> <img src="images/faces/face3.jpg" alt="image" /> </td>
																								<td> John Richards </td>
																								<td> Operation Manager </td>
																								<td> test@test.com </td>
																								<td> 99448 65376 </td>
																								<td> UK </td>
																								<td> June 24, 2022 </td>
																							</tr>
																							<tr>
																								<td class="py-1"> <img src="images/faces/face4.jpg" alt="image" /> </td>
																								<td> Peter Meggik </td>
																								<td> COO </td>
																								<td> test@test.com </td>
																								<td> 99448 65376 </td>
																								<td> UK </td>
																								<td> June 24, 2022 </td>
																							</tr>
																							<tr>
																								<td class="py-1"> <img src="images/faces/face5.jpg" alt="image" /> </td>
																								<td> Edward </td>
																								<td> CEO </td>
																								<td> test@test.com </td>
																								<td> 99448 65376 </td>
																								<td> UK </td>
																								<td> June 24, 2022 </td>
																							</tr>
																							<tr>
																								<td class="py-1"> <img src="images/faces/face6.jpg" alt="image" /> </td>
																								<td> John Doe </td>
																								<td> Sales Executive </td>
																								<td> test@test.com </td>
																								<td> 99448 65376 </td>
																								<td> UK </td>
																								<td> June 24, 2022 </td>
																							</tr>
																							<tr>
																								<td class="py-1"> <img src="images/faces/face7.jpg" alt="image" /> </td>
																								<td> Henry Tom </td>
																								<td> Operation Manager </td>
																								<td> test@test.com </td>
																								<td> 99448 65376 </td>
																								<td> UK </td>
																								<td> June 24, 2022 </td>
																							</tr>
																						</tbody>
																					</table>
																				</div>
																			</div>
																			<div class="tab-pane fade" id="inp" role="tabpanel" aria-labelledby="inp-tab"> </div>
																			<div class="tab-pane fade" id="quotes" role="tabpanel" aria-labelledby="quotes-tab">three</div>
																			<div class="tab-pane fade" id="won" role="tabpanel" aria-labelledby="won-tab">1</div>
																			<div class="tab-pane fade" id="lost" role="tabpanel" aria-labelledby="lost-tab">three</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- content-wrapper ends -->
						<!-- partial:partials/_footer.html -->
						<?php include('common/footer.php'); ?>
							<!-- partial -->
					</div>
					<!-- main-panel ends -->
			</div>
			<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<script src="vendors/js/vendor.bundle.base.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<script src="vendors/chart.js/Chart.min.js"></script>
	<script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
	<script src="vendors/progressbar.js/progressbar.min.js"></script>
	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="js/off-canvas.js"></script>
	<script src="js/hoverable-collapse.js"></script>
	<script src="js/template.js"></script>
	<script src="js/settings.js"></script>
	<script src="js/todolist.js"></script>
	<!-- endinject -->
	<!-- Custom js for this page-->
	<script src="js/jquery.cookie.js" type="text/javascript"></script>
	<script src="js/dashboard.js"></script>
	<script src="js/Chart.roundedBarCharts.js"></script>
	<!-- End custom js for this page-->
	</body>

	</html>