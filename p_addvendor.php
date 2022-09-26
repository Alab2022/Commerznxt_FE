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
                
                  </div>
                </div>
                
                    <div class="table_wrapper">
                    <div class="table_header mb-4">
                <h4 class="card-title">All Vendors <span class="count_indicator">02</span></h4>
                

                
                </div>
                    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card card-rounded">

                <div class="card-body">
                  <div class="form_wrapper vendors">
                  <div class="form-group">
                    <label>Primary contact</label>
                    <select class="js-example-basic-single w-100">
                      <option value="AL">Alabama</option>
                      <option value="WY">Wyoming</option>
                      <option value="AM">America</option>
                      <option value="CA">Canada</option>
                      <option value="RU">Russia</option>
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputUsername1">First name</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="First name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Last name</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Last name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Company name</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Company name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Branch name/iD</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Branch name/id">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Email</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Phone</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Phone">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Mobile</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Mobile">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Website</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Website">
                    </div>
                    
                  </div>


                </div>

                
              </div>
              
              

            </div>

            
            <div class="card card-rounded">
              <div class="card-body vendors">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item txt_orange" role="presentation">
    <button class="nav-link active" id="new-tab" data-bs-toggle="tab" data-bs-target="#new" type="button" role="tab" aria-controls="home" aria-selected="true">
    <icon class="mdi mdi-note"></icon>  
    Other details
    </button>
  </li>
  <li class="nav-item txt_blue" role="presentation">
    <button class="nav-link" id="inp-tab" data-bs-toggle="tab" data-bs-target="#inp" type="button" role="tab" aria-controls="profile" aria-selected="false">
    <icon class="mdi mdi-crosshairs-gps"></icon>
    Address
    </button>
  </li>
  <li class="nav-item txt_green" role="presentation">
    <button class="nav-link" id="quotes-tab" data-bs-toggle="tab" data-bs-target="#quotes" type="button" role="tab" aria-controls="contact" aria-selected="false">
    <icon class="mdi mdi-account"></icon>
    Contact person
    </button>
  </li>
  <li class="nav-item txt_purple" role="presentation">
    <button class="nav-link" id="won-tab" data-bs-toggle="tab" data-bs-target="#won" type="button" role="tab" aria-controls="contact" aria-selected="false">
    <icon class="mdi mdi-check-circle-outline"></icon>
    Remark
    </button>
  </li>
 
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="new-tab">
 
  <div class="form_wrapper vendors">
                  
                  <div class="form-group">
                      <label for="exampleInputUsername1">Pan</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Pan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Opening balance</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Opening balance">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Payment terms</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Payment terms">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Tax %</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Tax %">
                    </div>
                    
                    
                  </div>


  </div>






  <div class="tab-pane fade" id="inp" role="tabpanel" aria-labelledby="inp-tab">



  <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <span><img class="icon-acc" src="images/billing.svg" alt=""></span> Billing address
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="form_wrapper vendors">
                  
                  <div class="form-group">
                      <label for="exampleInputUsername1">Attention</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                    <label>Country</label>
                    <select class="js-example-basic-single w-100">
                      <option value="AL">Alabama</option>
                      <option value="WY">Wyoming</option>
                      <option value="AM">America</option>
                      <option value="CA">Canada</option>
                      <option value="RU">Russia</option>
                    </select>
                  </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">City</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">State</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group ad-width">
                      <label for="exampleInputUsername1">Address</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Zip code</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Phone</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Fax</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    
                    
                  </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      <span><img class="icon-acc" src="images/shipping.svg" alt=""></span> Shipping address
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="form_wrapper vendors">
                  
                  <div class="form-group">
                      <label for="exampleInputUsername1">Attention</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                    <label>Country</label>
                    <select class="js-example-basic-single w-100">
                      <option value="AL">Alabama</option>
                      <option value="WY">Wyoming</option>
                      <option value="AM">America</option>
                      <option value="CA">Canada</option>
                      <option value="RU">Russia</option>
                    </select>
                  </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">City</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">State</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group ad-width">
                      <label for="exampleInputUsername1">Address</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Zip code</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Phone</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Fax</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    
                    
                  </div>
      </div>
    </div>
  </div>
  
</div>



  </div>









  <div class="tab-pane fade" id="quotes" role="tabpanel" aria-labelledby="quotes-tab">




<div class="table-inner-header d-flex mb-3">
                <div class="row g-3 align-items-center">
                <h4 class="card-title">Contact person</h4>
  

</div>
<div class="mini-buttons">
<div class="btn-group" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-secondary gr2">
                            <i class="mdi mdi-plus"></i>
                          </button>
                          <button type="button" class="btn btn-secondary bl1">
                            <i class="mdi mdi-delete"></i>
                          </button>
                          
                        </div>
</div>
</div>
                
                  
                  <!-- <p class="card-description">
                    Add class <code>.table-striped</code>
                  </p> -->
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                           Salutation
                          </th>
                          <th>
                            First name
                          </th>
                          <th>
                            Last name
                          </th>
                          <th>
                          Email
                          </th>
                          <th>Phone</th>
                          <th>Mobile</th>
                          <th>Primary</th>
                          
                        </tr>
                        
                      </thead>
                      <tbody>
                        <tr>
                          <td><div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        
                      </label>
                    </div></td>
                    <td>Product 1</td>
                    <td>Adam</td>
                    <td>Pinto</td>
                    <td><a href="">test@gmail.com</a></td>
                    <td>87545 66354</td>
                    <td>-</td>
                    <td>Primary</td>

                        </tr>

                        <tr>
                          <td><div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        
                      </label>
                    </div></td>
                    <td>Product 1</td>
                    <td>Adam</td>
                    <td>Pinto</td>
                    <td><a href="">test@gmail.com</a></td>
                    <td>87545 66354</td>
                    <td>-</td>
                    <td>Primary</td>

                        </tr>

                        <tr>
                          <td><div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        
                      </label>
                    </div></td>
                    <td>Product 1</td>
                    <td>Adam</td>
                    <td>Pinto</td>
                    <td><a href="">test@gmail.com</a></td>
                    <td>87545 66354</td>
                    <td>-</td>
                    <td>Primary</td>

                        </tr>

                        <tr>
                          <td><div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        
                      </label>
                    </div></td>
                    <td>Product 1</td>
                    <td>Adam</td>
                    <td>Pinto</td>
                    <td><a href="">test@gmail.com</a></td>
                    <td>87545 66354</td>
                    <td>-</td>
                    <td>Primary</td>

                        </tr>
                      </tbody>
                    </table>

                    
                  </div>

                
                  </div>
                  <div class="tab-pane fade" id="won" role="tabpanel" aria-labelledby="won-tab">
                  <div class="form-group remark">
                      <label for="exampleInputUsername1">Remark</label>
                      <textarea type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
  
</div>

                </div>
                
              </div>
              
            </div>


         

  </div>
  <div  class="d-flex text-right vendors">
                    <div class="btn-wrapper me-10">
                    
                    <a href="#" class="btn btn-outline btn-lg btn-white btn-pad">Cancel</a>
                    
                    <a href="#" class="btn btn-primary btn-lg btn-white btn-pad">Save</a>
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

