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
              <div class="d-flex align-items-center justify-content-between border-bottom">
              <div>
                        <h4>Customer Details</h4>
                    </div>
                    <div><a href="crm-customer.php" class="btn btn-primary text-white me-10 d-flex"><i class="mdi mdi-arrow-left"></i> Back</a></div>
              </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                     
                    <div class="row">
                      
                    <div class="col-sm-3 d-flex flex-column ">
                    <div class="row flex-grow">
                    <div class="col-12 ">
          <div class="card card-rounded">
                              <div class="card-body">
                                <div class="text-center prof-card">
                                
                              <img src="images/faces/face24.jpg" alt="image">
                              <i class="comn btn-edit"><img src="images/activity/edit.svg" alt="image"></i>
                                <h3>Arul Prakash</h3>
                                <h6 class="text-muted">
                                CEO.ComerceNxt
</h6>
<div class=" title-border"></div>
<ul class="custom">
  <li><i class="comn btn-green"><img src="images/activity/calls.svg" alt="image"></i>97653 09876</li>
  <li><i class="comn btn-blue"><img src="images/activity/email.svg" alt="image"></i>john@cnxt.com</li>
</ul>
<div class=" title-border"></div>
<button class="btn btn-primary btn-lg btn-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">About this Contact</button>
                      </div>
                              </div>
          </div></div>
          </div>
          </div>
                      <div class="col-lg-9 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12">
                            <div class="card card-rounded overviewtop">
                              <div class="card-body overview">
                              <div class="scroller scroller-left float-left mt-2"><i class="fa fa-chevron-left"></i></div>
        <div class="scroller scroller-right float-right mt-2"><i class="fa fa-chevron-right"></i></div>
        <div class="wrapper-nav">
                              <ul class="nav nav-tabs nav-activity" id="myTab" role="tablist">
  <li class="nav-item text-center txt_purple" role="presentation">
  
    <button class="nav-link co active btn-purple" id="new-tab" data-bs-toggle="tab" data-bs-target="#new" type="button" role="tab" aria-controls="home" aria-selected="true">
    <i><img src="images/activity/activity.svg" alt="image"></i>
    Activity
    </button>
  </li>
  <li class="nav-item text-center txt_blue" role="presentation">
  
    <button class="nav-link co btn-blue" id="inp-tab" data-bs-toggle="tab" data-bs-target="#inp" type="button" role="tab" aria-controls="profile" aria-selected="false">
    <i><img src="images/activity/comments.svg" alt="image"></i>
    Comments
    </button>
  </li>
  <li class="nav-item text-center txt_red" role="presentation">
  
    <button class="nav-link co btn-red" id="quotes-tab" data-bs-toggle="tab" data-bs-target="#quotes" type="button" role="tab" aria-controls="contact" aria-selected="false">
    <i><img src="images/activity/email.svg" alt="image"></i>
    Email
    </button>
  </li>
  <li class="nav-item text-center txt_green" role="presentation">
  
    <button class="nav-link co btn-green" id="won-tab" data-bs-toggle="tab" data-bs-target="#won" type="button" role="tab" aria-controls="contact" aria-selected="false">
    <i><img src="images/activity/quote.svg" alt="image"></i>
    Quotes
    </button>
  </li>
  <li class="nav-item  text-center txt_orange" role="presentation">
  
    <button class="nav-link co btn-orange" id="lost-tab" data-bs-toggle="tab" data-bs-target="#lost" type="button" role="tab" aria-controls="contact" aria-selected="false">
    <i><img src="images/activity/orders.svg" alt="image"></i>
    Orders
    </button>
  </li>
  <li class="nav-item  text-center txt_blue" role="presentation">
  
    <button class="nav-link co btn-blue" id="lost-tab" data-bs-toggle="tab" data-bs-target="#lost" type="button" role="tab" aria-controls="contact" aria-selected="false">
    <i><img src="images/activity/invoice.svg" alt="image"></i>
    Invoice
    </button>
  </li>
  <li class="nav-item  text-center txt_purple" role="presentation">
  
    <button class="nav-link co btn-purple" id="lost-tab" data-bs-toggle="tab" data-bs-target="#lost" type="button" role="tab" aria-controls="contact" aria-selected="false">
    <i><img src="images/activity/calls.svg" alt="image"></i>
    Calls
    </button>
  </li>
  <li class="nav-item text-center dropdown txt_d_blue" role="presentation">
  
    <button class="nav-link co btn-d-blue" id="lost-tab" data-bs-toggle="tab" data-bs-target="#lost" type="button" role="tab" aria-controls="contact" aria-selected="false">
    <i><img src="images/activity/sms.svg" alt="image"></i>
    SMS
    </button>
  </li>
  <li class="nav-item text-center dropdown txt_d_green" role="presentation">
  
    <button class="nav-link co btn-d-green" id="lost-tab" data-bs-toggle="tab" data-bs-target="#lost" type="button" role="tab" aria-controls="contact" aria-selected="false">
    <i><img src="images/activity/whatsapp.svg" alt="image"></i>
    Whatsapp
    </button>
  </li>
  <li class="nav-item text-center dropdown txt_yellow" role="presentation">
  
    <button class="nav-link co btn-d-yellow" id="lost-tab" data-bs-toggle="tab" data-bs-target="#lost" type="button" role="tab" aria-controls="contact" aria-selected="false">
    <i><img src="images/activity/event.svg" alt="image"></i>
    Event
    </button>
  </li>
</ul></div></div></div>
<div class="card card-rounded">
                              <div class="card-body">
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="new-tab">
  
  <!-- Timeline Starts -->
  <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div>
                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                        <i class="icon_timeline btn-d-yellow"><img src="images/activity/email.svg" alt="image"></i>
                                                        </span>
                                                        <div class="vertical-timeline-element-content bounce-in">
                                                            <h4 class="timeline-title">Meeting with client</h4>
                                                            <p>Meeting with USA Client, today at <a href="javascript:void(0);" data-abc="true">12:00 PM</a></p>
                                                            <span class="vertical-timeline-element-date">9:30 AM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div>
                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                        <i class="icon_timeline btn-blue"><img src="images/activity/email.svg" alt="image"></i>
                                                        
                                                        </span>
                                                        <div class="vertical-timeline-element-content bounce-in">
                                                            <p>Another meeting with UK client today, at <b class="text-danger">3:00 PM</b></p>
                                                            <p>Yet another one, at <span class="text-success">5:00 PM</span></p>
                                                            <span class="vertical-timeline-element-date">12:25 PM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div>
                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                            <i class="icon_timeline btn-red"><img src="images/activity/email.svg" alt="image"></i>
                                                        </span>
                                                        <div class="vertical-timeline-element-content bounce-in">
                                                            <h4 class="timeline-title">Discussion with team about new product launch</h4>
                                                            <p>meeting with team mates about the launch of new product. and tell them about new features</p>
                                                            <span class="vertical-timeline-element-date">6:00 PM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div>
                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                        <i class="icon_timeline btn-orange"><img src="images/activity/email.svg" alt="image"></i>
                                                        </span>
                                                        <div class="vertical-timeline-element-content bounce-in">
                                                            <h4 class="timeline-title text-success">Discussion with marketing team</h4>
                                                            <p>Discussion with marketing team about the popularity of last product</p>
                                                            <span class="vertical-timeline-element-date">9:00 AM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div>
                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                        <i class="icon_timeline btn-purple"><img src="images/activity/email.svg" alt="image"></i>
                                                        </span>
                                                        <div class="vertical-timeline-element-content bounce-in">
                                                            <h4 class="timeline-title">Purchase new hosting plan</h4>
                                                            <p>Purchase new hosting plan as discussed with development team, today at <a href="javascript:void(0);" data-abc="true">10:00 AM</a></p>
                                                            <span class="vertical-timeline-element-date">10:30 PM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div>
                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                        <i class="icon_timeline btn-green"><img src="images/activity/email.svg" alt="image"></i>
                                                        </span>
                                                        <div class="vertical-timeline-element-content bounce-in">
                                                            <p>Another conference call today, at <b class="text-danger">11:00 AM</b></p>
                                                            <p>Yet another one, at <span class="text-success">1:00 PM</span></p>
                                                            <span class="vertical-timeline-element-date">12:25 PM</span>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div>
                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                        <i class="icon_timeline btn-orange"><img src="images/activity/email.svg" alt="image"></i>
                                                        </span>
                                                        <div class="vertical-timeline-element-content bounce-in">
                                                            <p>Another meeting with UK client today, at <b class="text-danger">3:00 PM</b></p>
                                                            <p>Yet another one, at <span class="text-success">5:00 PM</span></p>
                                                            <span class="vertical-timeline-element-date">12:25 PM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div>
                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                        <i class="icon_timeline btn-red"><img src="images/activity/email.svg" alt="image"></i>
                                                        </span>
                                                        <div class="vertical-timeline-element-content bounce-in">
                                                            <h4 class="timeline-title">Discussion with team about new product launch</h4>
                                                            <p>meeting with team mates about the launch of new product. and tell them about new features</p>
                                                            <span class="vertical-timeline-element-date">6:00 PM</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                
                                                   
                                                
                                            </div>
  <!-- Timeline Ends -->

  </div>
  <div class="tab-pane fade" id="inp" role="tabpanel" aria-labelledby="inp-tab">two</div>
  <div class="tab-pane fade" id="quotes" role="tabpanel" aria-labelledby="quotes-tab">three</div>
  <div class="tab-pane fade" id="won" role="tabpanel" aria-labelledby="won-tab">two</div>
  <div class="tab-pane fade" id="lost" role="tabpanel" aria-labelledby="lost-tab">three</div>
</div>
</div></div>
                              
                              
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
        <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Customer Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="row g-3">
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">First Name</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-4">
    <label for="inputPassword4" class="form-label">Last Name</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-4">
    <label for="inputPassword4" class="form-label">Mobile No</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-4">
    <label for="inputPassword4" class="form-label">Designation</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-4">
    <label for="inputPassword4" class="form-label">Company Name</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">About the Deal</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Status</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Industry</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">No.of Employees</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Lead Source</label>
    <input type="text" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Street</label>
    <input type="text" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <input type="text" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Country</label>
    <input type="text" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Deal Value</label>
    <input type="text" class="form-control" id="inputPassword4">
  </div>

</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </div>
    </div>
  </div>
</div>

<script>
        var hidWidth;
        var scrollBarWidths = 40;

        var widthOfList = function() {
            var itemsWidth = 0;
            $('.list a').each(function() {
                var itemWidth = $(this).outerWidth();
                itemsWidth += itemWidth;
            });
            return itemsWidth;
        };

        var widthOfHidden = function(){
            var ww = 0 - $('.wrapper-nav').outerWidth();

            var hw = (($('.wrapper-nav').outerWidth()) - widthOfList() - getLeftPosi()) - scrollBarWidths;

            var rp = $(document).width() - ($('.nav-item.nav-link').last().offset().left + $('.nav-item.nav-link').last().outerWidth());

            if (ww > hw) {
                //return ww;
                return (rp > ww ? rp : ww);
            }
            else {
                //return hw;
                return (rp > hw ? rp : hw);
            }
        };

        var getLeftPosi = function(){
            
            var ww = 0 - $('.wrapper-nav').outerWidth();
            var lp = $('.list').position().left;
            
            if (ww > lp) {
                return ww;
            }
            else {
                return lp;
            }
        };

        var reAdjust = function(){
            // check right pos of last nav item
            var rp = $(document).width() - ($('.nav-item.nav-link').last().offset().left + $('.nav-item.nav-link').last().outerWidth());
  
            if (($('.wrapper-nav').outerWidth()) < widthOfList() && (rp < 0)) {
                $('.scroller-right').show().css('display', 'flex');
            }
            else {
                $('.scroller-right').hide();
            }
            
            if (getLeftPosi() < 0) {
                $('.scroller-left').show().css('display', 'flex');
            }
            else {
                $('.scroller-left').hide();
            }
        }

        reAdjust();

        $(window).on('resize',function(e){
            reAdjust();
        });

        $('.scroller-right').click(function() {
            $('.scroller-left').fadeIn('slow');
            $('.scroller-right').fadeOut('slow');

            $('.list').animate({ left: `+=${widthOfHidden()}px` }, 'slow', function() {
                reAdjust();
            });
        });

        $('.scroller-left').click(function() {
        
            $('.scroller-right').fadeIn('slow');
            $('.scroller-left').fadeOut('slow');

            $('.list').animate({ left: `-=${getLeftPosi()}px` }, 'slow', function() {
                reAdjust();
            });
        });
    </script>
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
  <script src="js/custom.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

