<?php include('common/head.php'); ?>
  <div class="container-scroller">    
    <!-- partial:partials/_navbar.html -->
    <?php include('common/header.php'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <!-- <div id="settings-trigger"><i class="ti-settings"></i></div> -->
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
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
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
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
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
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
                <div class="d-sm-flex align-items-center justify-content-space-between border-bottom">
                    <div>
                        <h4>Out Of Stock</h4>
                    </div>
                  <div>
                  </div>
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <!-- <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between dashbrd flex-sm-row flex-column">
                          <div class="card card-rounded">
                            <div class="card-body">
                            <div class="d-flex align-items-center mb-2 mb-sm-0">
                                <div class="icon_home one">
                                    <icon class="mdi mdi-cart"></icon>
                                </div>
                                <div>
                                    <h3 class="rate-percentage">32.53%</h3>
                                  <p class="text-small mb-2">Total Orders</p>
                                  
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="card card-rounded">
                            <div class="card-body">
                            <div class="d-flex align-items-center mb-2 mb-sm-0">
                                <div class="icon_home two">
                                    <icon class="mdi mdi-file-document-box"></icon>
                                </div>
                                <div>
                                    <h3 class="rate-percentage">32.53%</h3>
                                  <p class="text-small mb-2">Avg. Inventory Size</p>
                                  
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="card card-rounded">
                            <div class="card-body">
                            <div class="d-flex align-items-center mb-2 mb-sm-0">
                                <div class="icon_home three">
                                    <icon class="mdi mdi mdi-chart-bar"></icon>
                                </div>
                                <div>
                                    <h3 class="rate-percentage">32.53%</h3>
                                  <p class="text-small mb-2">Total Sales</p>
                                  
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="card card-rounded">
                            <div class="card-body">
                            <div class="d-flex align-items-center mb-2 mb-sm-0">
                                <div class="icon_home four">
                                    <icon class="mdi mdi-cash-usd"></icon>
                                </div>
                                <div>
                                    <h3 class="rate-percentage">32.53%</h3>
                                  <p class="text-small mb-2">Payment Received</p>
                                  
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="card card-rounded">
                            <div class="card-body">
                            <div class="d-flex align-items-center mb-2 mb-sm-0">
                                <div class="icon_home five">
                                    <icon class="mdi mdi-credit-card"></icon>
                                </div>
                                <div>
                                    <h3 class="rate-percentage">32.53%</h3>
                                  <p class="text-small mb-2">Credit Given</p>
                                  
                                </div>
                              </div>
                            </div>
                        </div>
                        </div>
                      </div> -->
                    </div> 
                    <!-- <div class="row">
                      <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="card-title card-title-dash">Profit Overview</h4>
                                   
                                  </div>
                                  <div id="performance-line-legend"></div>
                                </div>
                                <div class="chartjs-wrapper mt-5">
                                  <canvas id="performaneLine"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body pb-0">
                                
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                      <h4 class="card-title card-title-dash">Geography Orders</h4>
                                    </div>
                                    <canvas class="my-auto" id="doughnutChart" height="200"></canvas>
                                    <div id="doughnut-chart-legend" class="mt-2 text-center mb-2"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <h4 class="card-title card-title-dash mb-4">Waiting for Approval</h4>
                                <div class="row">
                                  <div class="col-sm-6">
                                    <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                                      <div class="circle-progress-width">
                                        <div id="totalVisitors" class="progressbar-js-circle pr-2"></div>
                                      </div>
                                      <div>
                                        <p class="text-small mb-2">Quotation</p>
                                        <h4 class="mb-0 fw-bold">20</h4>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="circle-progress-width">
                                        <div id="visitperday" class="progressbar-js-circle pr-2"></div>
                                      </div>
                                      <div>
                                        <p class="text-small mb-2">Invoice</p>
                                        <h4 class="mb-0 fw-bold">35</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> -->
                        </div>
                      </div>
                    </div> 
                    <div class="row">
                      <div class="col-lg-6 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Top Selling Categories</h4>
                                   
                                  </div>

                                </div>
                                <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                  <div class="d-sm-flex align-items-center mt-4 justify-content-between">
                                    <h2 class="me-2 fw-bold">$36,2531.00</h2>
                                    <h4 class="me-2">GBP</h4><h4 class="text-success">(+1.37%)</h4>
                                </div>
                                  <div class="me-3"><div id="marketing-overview-legend">

                                  </div>
                                </div>
                                </div>
                                <div class="chartjs-bar-wrapper mt-3">
                                  <canvas id="marketingOverview"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                      <div class="col-lg-6 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Categories On Offer</h4>
                                   
                                  </div>

                                </div>
                                <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                  <div class="d-sm-flex align-items-center mt-4 justify-content-between"><h2 class="me-2 fw-bold">$36,2531.00</h2><h4 class="me-2">GBP</h4><h4 class="text-success">(+1.37%)</h4></div>
                                  <div class="me-3"><div id="marketing-overview-legend"></div></div>
                                </div>
                                <div class="chartjs-bar-wrapper mt-3">
                                  <canvas id="marketingOverview"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                      
                    </div>

                    <div class="table_wrapper">
                    <div class="table_header">
                <h4 class="card-title">Out Of Stock</h4>
                <div class="cv-right">
                  <div class="fo-search">
                    <div class="form-group">
                      <input type="text" placeholder="Search">
                      <span><img class="icon-font" src="images/search.svg"></span>
                    </div>
                  </div>
                  <div class="btn-group">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Export to CSV</button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item">Go back</a>
                              <a class="dropdown-item">Delete</a>
                              <a class="dropdown-item">Swap</a>
                            </div>                          
                          </div>

                          <button type="button" class="btn btn-primary btn-icon-text">
                          
                          Export
                          <span><img class="icon-size" src="images/export.svg"></span>
                        </button>
                </div>

                
                </div>
                    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card card-rounded">

                <div class="card-body">

                
                  
                  <!-- <p class="card-description">
                    Add class <code>.table-striped</code>
                  </p> -->
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                        <th>
                            Category
                          </th>
                          <th>
                            Product name
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Sale end date
                          </th>
                          
                          
                        </tr>
                        
                      </thead>
                      <tbody>
                        <tr>
                        <td>
                          Category 1
                          </td>
                          <td >
                          boAt Wave Neo with 1.69 inch , 2.5D Curved Display & Multiple 
Sports Modes Smartwatch  (Black Strap, Free Size)
                          </td>
                          
                          <td>
                          <span class="st_green">Enable</span>
                          </td>
                          <td>
                          12th October, 2020  |  11:35 PM
                          </td>
                        </tr>

                        <tr>
                        <td>
                          Category 1
                          </td>
                          <td >
                          boAt Wave Neo with 1.69 inch , 2.5D Curved Display & Multiple 
Sports Modes Smartwatch  (Black Strap, Free Size)
                          </td>
                          
                          <td>
                          <span class="st_danger">Disable</span>
                          </td>
                          <td>
                          12th October, 2020  |  11:35 PM
                          </td>
                        </tr>

                        <tr>
                        <td>
                          Category 1
                          </td>
                          <td >
                          boAt Wave Neo with 1.69 inch , 2.5D Curved Display & Multiple 
Sports Modes Smartwatch  (Black Strap, Free Size)
                          </td>
                          
                          <td>
                          <span class="st_danger">Disable</span>
                          </td>
                          <td>
                          12th October, 2020  |  11:35 PM
                          </td>
                        </tr>
                        
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
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

