<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="mdi mdi-view-dashboard menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Inventory Analysis</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="IA_stockoverview.php">Stock overview</a></li>
                <li class="nav-item"> <a class="nav-link" href="IA_categoryanalysis.php">Category Analysis</a></li>
                <li class="nav-item"> <a class="nav-link" href="IA_productondeals.php">Product On Deals</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="IA_totalnooforders.php">Total no of Orders</a></li> -->
                <li class="nav-item"> <a class="nav-link" href="IA_pdtstobereordered.php">Products to be re-ordered</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="IA_createorder.php">Create Order</a></li> -->
                <!-- <li class="nav-item"> <a class="nav-link" href="IA_totalsales.php">Total Sales</a></li> -->
                <!-- <li class="nav-item"> <a class="nav-link" href="IA_totalsales&credit.php">Credit given & Payment status</a></li> -->
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-CRM" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-vector-combine"></i>
              <span class="menu-title">CRM</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-CRM">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="crm-customer.php">Customer</a></li>
                <li class="nav-item"> <a class="nav-link" href="crm-company.php">Company</a></li>
                <li class="nav-item"> <a class="nav-link" href="crm-quotes-list.php">Quotes</a></li>
                <li class="nav-item"> <a class="nav-link" href="crm-invoice.php">Invoice</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-purchase" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-cart-outline"></i>
              <span class="menu-title">Purchase</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-purchase">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="p_vendorlist.php">Vendors</a></li>
                <li class="nav-item"> <a class="nav-link" href="p_purchaseorder.php">Purchase Order</a></li>
                <li class="nav-item"> <a class="nav-link" href="p_newpayment.php">Payments</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-sales" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Sales Analysis</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-sales">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="SA_outforsale.php">Out For Sale</a></li>
                <li class="nav-item"> <a class="nav-link" href="SA_salestracker.php">Sales Tracker</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="UM_userlist.php">
              <i class="mdi mdi-account-circle-outline menu-icon"></i>
              <span class="menu-title">User Management</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="RM_roleslist.php">
              <i class="mdi mdi-account-key menu-icon"></i>
              <span class="menu-title">Roles & Permission</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="mdi mdi-wifi menu-icon"></i>
              <span class="menu-title">Feed</span>
            </a>
          </li>
          
                  </ul>
      </nav>