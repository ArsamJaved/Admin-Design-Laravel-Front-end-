<div class="sidebar border-end d-lg-block d-none">
  <div>
    <ul class="nav flex-column">
      <span class="pt-2 px-3">Apps</span>
      <li class="nav-item crm">
        <a class="nav-link main-links-for-submenu" data-bs-toggle="collapse" href="#sidebar-crm" role="button" aria-expanded="false" aria-controls="collapseExample">
          <div class="sidebar-links-bg rounded-2 d-flex align-items-center py-1 px-3">
            <span class="dropdown-indicator-icon-wrapper">
              <svg class="svg-inline--fa fa-caret-right dropdown-indicator-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                <path fill="currentColor" d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"></path>
              </svg>
            </span>

            <div class="nav-link-icon px-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                <circle cx="9" cy="21" r="1"></circle>
                <circle cx="20" cy="21" r="1"></circle>
                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
              </svg>
            </div>
            <span class="nav-link-text">CRM</span>
          </div>
        </a>
        <div class="collapse sidebar-inner-content" id="sidebar-crm">
          <ul class="nav flex-column mx-3">
            <li class="nav-item ">
              <a href="{{url('add_product')}}" class=" d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Add Product</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('product')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Products</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('customers')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Customers</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('customer_details')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Customer Details</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Orders</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('order_details')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Orders Details</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('order_tracking')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Orders Tracking</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('lead_details')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Lead Details</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('add_new_property')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Add New Property</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('add_room')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Add Room</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('room_listing')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Room Listing</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('search_room')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Search Room</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="crm-dropdown border rounded-4 d-none">
          <ul class="navbar-nav">
            <li class="nav-item-wrapper">
              <a class="nav-link px-4 pt-3" href="#">
                <div class="d-flex align-items-center">
                  CRM
                </div>
              </a>
              <hr>
              <div class="parent-wrapper label-1 mb-2">
                <ul class="nav flex-column">
                  <li class="nav-item sidebar-dropdown-links-bg">
                    <a class="nav-link px-4" href="apps/crm/analytics.html">Analytics</a>
                  </li>
                  <li class="nav-item sidebar-dropdown-links-bg">
                    <a class="nav-link px-4" href="apps/crm/deals.html">Deals</a>
                  </li>
                  <li class="nav-item sidebar-dropdown-links-bg">
                    <a class="nav-link px-4" href="apps/crm/deal-details.html">Deal details</a>
                  </li>
                  <li class="nav-item sidebar-dropdown-links-bg">
                    <a class="nav-link px-4" href="apps/crm/leads.html">Leads</a>
                  </li>
                  <li class="nav-item sidebar-dropdown-links-bg">
                    <a class="nav-link px-4" href="apps/crm/lead-details.html">Lead details</a>
                  </li>
                  <li class="nav-item sidebar-dropdown-links-bg">
                    <a class="nav-link px-4" href="apps/crm/reports.html">Reports</a>
                  </li>
                  <li class="nav-item sidebar-dropdown-links-bg">
                    <a class="nav-link px-4" href="apps/crm/report-details.html">Report details</a>
                  </li>
                  <li class="nav-item sidebar-dropdown-links-bg">
                    <a class="nav-link px-4" href="apps/crm/add-contact.html">Add contact</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </li>
      <!-- ____________________________________________________  -->

      <li class="nav-item mail">
        <a class="nav-link main-links-for-submenu" data-bs-toggle="collapse" href="#sidebar-mail" role="button" aria-expanded="false" aria-controls="collapseExample">
          <div class="sidebar-links-bg rounded-2 d-flex align-items-center py-1 px-3">
            <span class="dropdown-indicator-icon-wrapper">
              <svg class="svg-inline--fa fa-caret-right dropdown-indicator-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                <path fill="currentColor" d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"></path>
              </svg>
            </span>
            <div class="nav-link-icon px-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24">
                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                  <path d="M8 5H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h5.697M18 14v4h4m-4-7V7a2 2 0 0 0-2-2h-2" />
                  <path d="M8 5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v0a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2m6 13a4 4 0 1 0 8 0a4 4 0 1 0-8 0m-6-7h4m-4 4h3" />
                </g>
              </svg>
            </div>
            <span class="nav-link-text">Reports</span>
          </div>
        </a>
        <div class="collapse sidebar-inner-content" id="sidebar-mail">
          <ul class="nav flex-column mx-3">
            <li class="nav-item">
              <a href="{{url('reports')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Reports</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('report_details')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Report Details</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('add_contact')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Add Contact</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="mail-dropdown border rounded-4 d-none">
          <ul class="navbar-nav">
            <li class="nav-item-wrapper">
              <a class="nav-link px-4 pt-3" href="#">
                <div class="d-flex align-items-center">
                  MAIL
                </div>
              </a>
              <hr>
              <div class="parent-wrapper label-1 mb-2">
                <ul class="nav flex-column">
                  <li class="nav-item sidebar-dropdown-links-bg">
                    <a class="nav-link px-4" href="apps/crm/report-details.html">Report details</a>
                  </li>
                  <li class="nav-item sidebar-dropdown-links-bg">
                    <a class="nav-link px-4" href="apps/crm/add-contact.html">Add contact</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </li>
      <!-- ____________________________________________________  -->
      <li class="nav-item">
        <a class="nav-link main-links-for-submenu" data-bs-toggle="collapse" href="#sidebar-faq" role="button" aria-expanded="false" aria-controls="collapseExample">
          <div class="sidebar-links-bg rounded-2 d-flex align-items-center py-1 px-3">
            <span class="dropdown-indicator-icon-wrapper">
              <svg class="svg-inline--fa fa-caret-right dropdown-indicator-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                <path fill="currentColor" d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"></path>
              </svg>
            </span>
            <div class="nav-link-icon px-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard">
                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
              </svg>
            </div>
            <span class="nav-link-text">Project Management</span>
          </div>
        </a>
        <div class="collapse sidebar-inner-content" id="sidebar-faq">
          <ul class="nav flex-column mx-3">
            <li class="nav-item">
              <a href="{{url('create_new')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Create new</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('project_list_view')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Project list view</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('project_card_view')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Project card view</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('project_board_view')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Project board view</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('project_todo_list')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Todo list</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('project_detail')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Project details</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- ____________________________________________________  -->
      <li class="nav-item landing">
        <a class="nav-link main-links-for-submenu" data-bs-toggle="collapse" href="#sidebar-landing" role="button" aria-expanded="false" aria-controls="collapseExample">
          <div class="sidebar-links-bg rounded-2 d-flex align-items-center py-1 px-3">
            <span class="dropdown-indicator-icon-wrapper">
              <svg class="svg-inline--fa fa-caret-right dropdown-indicator-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                <path fill="currentColor" d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"></path>
              </svg>
            </span>
            <div class="nav-link-icon px-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24">
                <path fill="currentColor" d="M7 6a1 1 0 1 0 1 1a1 1 0 0 0-1-1m14.71 5.78l-9.48-9.46A1 1 0 0 0 11.5 2h-6a1 1 0 0 0-.71.29l-2.5 2.49a1 1 0 0 0-.29.71v6a1.05 1.05 0 0 0 .29.71l9.49 9.5a1.05 1.05 0 0 0 .71.29a1 1 0 0 0 .71-.29l8.51-8.51a1 1 0 0 0 .29-.71a1.05 1.05 0 0 0-.29-.7m-9.22 7.81L4 11.09V5.9L5.9 4h5.18l8.5 8.49Z" />
              </svg>
            </div>
            <span class="nav-link-text">Pricing</span>
          </div>
        </a>
        <div class="collapse sidebar-inner-content" id="sidebar-landing">
          <ul class="nav flex-column mx-3">
            <li class="nav-item">
              <a href="{{url('pricing_column')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Pricing column</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('pricing_grid')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Pricing grid</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="landing-dropdown border rounded-4 d-none">
          <ul class="navbar-nav">
            <li class="nav-item-wrapper">
              <a class="nav-link px-4 pt-3" href="#">
                <div class="d-flex align-items-center">
                  Landing
                </div>
              </a>
              <hr>
              <div class="parent-wrapper label-1 mb-2">
                <ul class="nav flex-column">
                  <li class="nav-item sidebar-dropdown-links-bg"><a class="nav-link px-4" href="apps/crm/analytics.html">Analytics</a>
                  </li>
                  <li class="nav-item sidebar-dropdown-links-bg"><a class="nav-link px-4" href="apps/crm/deals.html">Deals</a>
                  </li>
                  <li class="nav-item sidebar-dropdown-links-bg"><a class="nav-link px-4" href="apps/crm/deal-details.html">Deal details</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </li>
      <!-- ____________________________________________________  -->
      <li class="nav-item landing">
        <a class="nav-link main-links-for-submenu" data-bs-toggle="collapse" href="#events" role="button" aria-expanded="false" aria-controls="collapseExample">
          <div class="sidebar-links-bg rounded-2 d-flex align-items-center py-1 px-3">
            <span class="dropdown-indicator-icon-wrapper">
              <svg class="svg-inline--fa fa-caret-right dropdown-indicator-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                <path fill="currentColor" d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"></path>
              </svg>
            </span>
            <div class="nav-link-icon px-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24">
                <g fill="none" fill-rule="evenodd">
                  <path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                  <path fill="currentColor" d="M4 5a3 3 0 0 1 3-3h10a3 3 0 0 1 3 3v16.028c0 1.22-1.38 1.93-2.372 1.221L12 18.229l-5.628 4.02c-.993.71-2.372 0-2.372-1.22zm3-1a1 1 0 0 0-1 1v15.057l5.128-3.663a1.5 1.5 0 0 1 1.744 0L18 20.057V5a1 1 0 0 0-1-1z" />
                </g>
              </svg>
            </div>
            <span class="nav-link-text">Events</span>
          </div>
        </a>
        <div class="collapse sidebar-inner-content" id="events">
          <ul class="nav flex-column mx-3">
            <li class="nav-item">
              <a href="{{url('create_event')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Create an Event</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('event_detail')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Event Detail</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item landing">
        <a class="nav-link main-links-for-submenu" data-bs-toggle="collapse" href="#social" role="button" aria-expanded="false" aria-controls="collapseExample">
          <div class="sidebar-links-bg rounded-2 d-flex align-items-center py-1 px-3">
            <span class="dropdown-indicator-icon-wrapper">
              <svg class="svg-inline--fa fa-caret-right dropdown-indicator-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                <path fill="currentColor" d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"></path>
              </svg>
            </span>
            <div class="nav-link-icon px-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 20 20">
                <path fill="currentColor" d="M15.815 0C17.575 0 19 1.45 19 3.235s-1.424 3.234-3.185 3.234a3.16 3.16 0 0 1-2.378-1.084l-6.284 3.44c.14.364.216.76.216 1.175c0 .542-.13 1.052-.363 1.501l6.008 3.725a3.18 3.18 0 0 1 2.801-1.695c1.76 0 3.185 1.45 3.185 3.234S17.576 20 15.815 20c-1.76 0-3.184-1.45-3.184-3.235l.003-.138l-6.53-4.046a3.14 3.14 0 0 1-1.92.654C2.425 13.235 1 11.785 1 10s1.424-3.235 3.185-3.235c.852 0 1.626.34 2.197.893l6.382-3.493a3.3 3.3 0 0 1-.133-.93C12.63 1.45 14.055 0 15.815 0m0 14.926c-.992 0-1.8.822-1.8 1.84c0 1.017.808 1.839 1.8 1.839c.993 0 1.8-.822 1.8-1.84c0-1.017-.807-1.839-1.8-1.839M4.185 8.161c-.993 0-1.8.822-1.8 1.839s.807 1.84 1.8 1.84c.992 0 1.8-.823 1.8-1.84s-.808-1.84-1.8-1.84m11.63-6.766c-.992 0-1.8.822-1.8 1.84c0 1.017.808 1.839 1.8 1.839c.993 0 1.8-.822 1.8-1.84c0-1.017-.807-1.839-1.8-1.839" />
              </svg>
            </div>
            <span class="nav-link-text">Social</span>
          </div>
        </a>
        <div class="collapse sidebar-inner-content" id="social">
          <ul class="nav flex-column mx-3">
            <li class="nav-item">
              <a href="{{url('social_profile')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('social_settings')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Settings</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item landing">
        <a class="nav-link main-links-for-submenu" data-bs-toggle="collapse" href="#faq" role="button" aria-expanded="false" aria-controls="collapseExample">
          <div class="sidebar-links-bg rounded-2 d-flex align-items-center py-1 px-3">
            <span class="dropdown-indicator-icon-wrapper">
              <svg class="svg-inline--fa fa-caret-right dropdown-indicator-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                <path fill="currentColor" d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"></path>
              </svg>
            </span>
            <div class="nav-link-icon px-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24">
                <path fill="currentColor" d="M10.97 8.265a1.45 1.45 0 0 0-.487.57a.75.75 0 0 1-1.341-.67c.2-.402.513-.826.997-1.148C10.627 6.69 11.244 6.5 12 6.5c.658 0 1.369.195 1.934.619a2.45 2.45 0 0 1 1.004 2.006c0 1.033-.513 1.72-1.027 2.215c-.19.183-.399.358-.579.508l-.147.123a4 4 0 0 0-.435.409v1.37a.75.75 0 1 1-1.5 0v-1.473c0-.237.067-.504.247-.736c.22-.28.486-.517.718-.714l.183-.153l.001-.001c.172-.143.324-.27.47-.412c.368-.355.569-.676.569-1.136a.95.95 0 0 0-.404-.806C12.766 8.118 12.384 8 12 8c-.494 0-.814.121-1.03.265M13 17a1 1 0 1 1-2 0a1 1 0 0 1 2 0" />
                <path fill="currentColor" d="M12 1c6.075 0 11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12S5.925 1 12 1M2.5 12a9.5 9.5 0 0 0 9.5 9.5a9.5 9.5 0 0 0 9.5-9.5A9.5 9.5 0 0 0 12 2.5A9.5 9.5 0 0 0 2.5 12" />
              </svg>
            </div>
            <span class="nav-link-text">Faq</span>
          </div>
        </a>
        <div class="collapse sidebar-inner-content" id="faq">
          <ul class="nav flex-column mx-3">
            <li class="nav-item">
              <a href="{{url('faq_accordions')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Faq accordions</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('faq_tab')}}" class="d-flex align-items-center justify-content-start text-start nav-link sidebar-sub-links-bg rounded-2 px-5" href="#">
                <span class="ms-lg-5">Faq tab</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <span class="pt-2 px-3">Pages</span>
      <li class="nav-item">
        <a href="{{url('notifications')}}" class="nav-link main-links-for-submenu" role="button">
          <div class="sidebar-links-bg rounded-2 d-flex align-items-center py-1 px-3">
            <div class="nav-link-icon px-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 512 512">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M427.68 351.43C402 320 383.87 304 383.87 217.35C383.87 138 343.35 109.73 310 96c-4.43-1.82-8.6-6-9.95-10.55C294.2 65.54 277.8 48 256 48s-38.21 17.55-44 37.47c-1.35 4.6-5.52 8.71-9.95 10.53c-33.39 13.75-73.87 41.92-73.87 121.35C128.13 304 110 320 84.32 351.43C73.68 364.45 83 384 101.61 384h308.88c18.51 0 27.77-19.61 17.19-32.57M320 384v16a64 64 0 0 1-128 0v-16" />
              </svg>
            </div>
            <span class="nav-link-text">Notifications</span>
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{url('chat')}}" class="nav-link main-links-for-submenu" role="button">
          <div class="sidebar-links-bg rounded-2 d-flex align-items-center py-1 px-3">
            <div class="nav-link-icon px-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256">
                <path fill="currentColor" d="M216 48H40a16 16 0 0 0-16 16v160a15.84 15.84 0 0 0 9.25 14.5A16.05 16.05 0 0 0 40 240a15.9 15.9 0 0 0 10.25-3.78l.09-.07L83 208h133a16 16 0 0 0 16-16V64a16 16 0 0 0-16-16m0 144H80a8 8 0 0 0-5.23 1.95L40 224V64h176Z" />
              </svg>
            </div>
            <span class="nav-link-text">Chat</span>
          </div>
        </a>
      </li>
    </ul>
  </div>
  <div class="sidebar-footer border-end border-top toggle-button p-3" id="toggleSidebar">
    <div class="sidebar-collapse-button">
      <svg class="sidebar-back-icon" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16">
        <path fill="currentColor" d="M5.854 2.146a.5.5 0 0 1 0 .708L3.707 5h2.336c1.468 0 2.905 0 4.226.396c1.365.41 2.585 1.234 3.647 2.827a.5.5 0 0 1-.832.554c-.938-1.407-1.968-2.083-3.103-2.423C8.815 6.004 7.517 6 6 6H3.707l2.147 2.146a.5.5 0 1 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0M8 14a2 2 0 1 0 0-4a2 2 0 0 0 0 4m0-1a1 1 0 1 1 0-2a1 1 0 0 1 0 2" />
      </svg>
      <span class="ms-lg-5">Collapsed View</span>
    </div>
    <svg class="sidebar-forward-icon" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
      <path fill="currentColor" d="m19.587 9.5l-2.963-2.963a.75.75 0 0 1 .977-1.133l.084.073l4.243 4.242a.75.75 0 0 1 .072.977l-.073.084l-4.242 4.243a.75.75 0 0 1-1.133-.977l.072-.084L19.587 11h-5.69a7.75 7.75 0 0 1-7.746-7.504l-.004-.246a.75.75 0 1 1 1.5 0a6.25 6.25 0 0 0 6.021 6.246l.23.004zM5.317 12h4.828a.5.5 0 0 1 .436.745L8.751 16h1.495a.75.75 0 0 1 .564 1.244l-4.823 5.508c-.505.576-1.443.085-1.258-.657L5.5 19H2.498a.5.5 0 0 1-.453-.713l2.82-6A.5.5 0 0 1 5.318 12" />
    </svg>

  </div>
</div>