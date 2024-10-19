@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
  <div id="notifications">
    <div class="p-md-4 p-3">
      <div class="d-flex justify-content-between">
        <h2 class="mb-5">Notifications</h2>
        <span type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightNotification" aria-controls="offcanvasRightNotification">
          <svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
            <g fill="none" stroke="currentColor" stroke-linecap="round">
              <path d="M5 12V4m14 16v-3M5 20v-4m14-3V4m-7 3V4m0 16v-9" />
              <circle cx="5" cy="14" r="2" />
              <circle cx="12" cy="9" r="2" />
              <circle cx="19" cy="15" r="2" />
            </g>
          </svg>
        </span>
      </div>
      <h5 class="mb-3">Today</h5>
    </div>
    <div class="mx-n4 mx-lg-n6 mb-9 border-bottom">

      <div class="d-flex align-items-center justify-content-between py-3 px-lg-6 px-4 notification-card border-top unread">
        <div class="d-flex">
          <div class="avatar avatar-xl me-3">
            <img class="rounded-circle img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/30.webp" alt="">
          </div>
          <div class="me-3 flex-1 mt-2">
            <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
            <p class="fs-9 text-body-highlight"><span class="me-1">💬</span>Mentioned you in a comment<span class="fw-bold"> "This is too good to be true!"</span><span class="ms-2 text-body-tertiary text-opacity-85 fw-bold fs-10"></span></p>
            <p class="text-body-secondary fs-9 mb-0"><svg class="svg-inline--fa fa-clock me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"></path>
              </svg>
              <span class="fw-bold">9:11 AM </span>August 7,2021
            </p>
          </div>
        </div>
        <div class="dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10 text-body" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
              <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
            </svg>
          </button>
          <div class="dropdown-menu dropdown-menu-end py-2">
            <a class="dropdown-item" href="#!">Mark as unread</a>
          </div>
        </div>
      </div>
      <div class="d-flex align-items-center justify-content-between py-3 px-lg-6 px-4 notification-card border-top unread">
        <div class="d-flex">
          <div class="avatar avatar-xl me-3">
            <img class="rounded-circle img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/30.webp" alt="">
          </div>
          <div class="me-3 flex-1 mt-2">
            <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
            <p class="fs-9 text-body-highlight"><span class="me-1">👤</span>Tagged you in a<span class="fw-bold"> post</span><span class="ms-2 text-body-tertiary text-opacity-85 fw-bold fs-10"></span></p>
            <p class="text-body-secondary fs-9 mb-0"><svg class="svg-inline--fa fa-clock me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"></path>
              </svg>
              <span class="fw-bold">10:58 PM </span>August 7,2021
            </p>
          </div>
        </div>
        <div class="dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10 text-body" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
              <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
            </svg>
          </button>
          <div class="dropdown-menu dropdown-menu-end py-2">
            <a class="dropdown-item" href="#!">Mark as unread</a>
          </div>
        </div>
      </div>
      <div class="d-flex align-items-center justify-content-between py-3 px-lg-6 px-4 notification-card border-top read">
        <div class="d-flex">
          <div class="avatar avatar-xl me-3">
            <img class="rounded-circle img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/30.webp" alt="">
          </div>
          <div class="me-3 flex-1 mt-2">
            <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
            <p class="fs-9 text-body-highlight"><span class="me-1">👍</span>Liked your comment<span class="fw-bold"> "Welcome to the team️"</span><span class="ms-2 text-body-tertiary text-opacity-85 fw-bold fs-10"></span></p>
            <p class="text-body-secondary fs-9 mb-0"><svg class="svg-inline--fa fa-clock me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"></path>
              </svg>
              <span class="fw-bold">10:18 AM </span>August 7,2021
            </p>
          </div>
        </div>
        <div class="dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10 text-body" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
              <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
            </svg>
          </button>
          <div class="dropdown-menu dropdown-menu-end py-2">
            <a class="dropdown-item" href="#!">Mark as unread</a>
          </div>
        </div>
      </div>
      <div class="d-flex align-items-center justify-content-between py-3 px-lg-6 px-4 notification-card border-top read">
        <div class="d-flex">
          <div class="avatar avatar-xl me-3">
            <img class="rounded-circle img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/30.webp" alt="">
          </div>
          <div class="me-3 flex-1 mt-2">
            <h4 class="fs-9 text-body-emphasis">Aron Paul</h4>
            <p class="fs-9 text-body-highlight"><span class="me-1">📷</span>Tagged you in a<span class="fw-bold"> photo</span><span class="ms-2 text-body-tertiary text-opacity-85 fw-bold fs-10"></span></p>
            <p class="text-body-secondary fs-9 mb-0"><svg class="svg-inline--fa fa-clock me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"></path>
              </svg>
              <span class="fw-bold">9:53 AM </span>August 7,2021
            </p>
          </div>
        </div>
        <div class="dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10 text-body" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
              <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
            </svg>
          </button>
          <div class="dropdown-menu dropdown-menu-end py-2">
            <a class="dropdown-item" href="#!">Mark as unread</a>
          </div>
        </div>
      </div>
      <div class="d-flex align-items-center justify-content-between py-3 px-lg-6 px-4 notification-card border-top read">
        <div class="d-flex">
          <div class="avatar avatar-xl me-3">
            <img class="rounded-circle img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/30.webp" alt="">
          </div>
          <div class="me-3 flex-1 mt-2">
            <h4 class="fs-9 text-body-emphasis">Rick Sanchez</h4>
            <p class="fs-9 text-body-highlight"><span class="me-1">💬</span>Mentioned you in a comment<span class="fw-bold"> "You need to see these amazing photos️"</span><span class="ms-2 text-body-tertiary text-opacity-85 fw-bold fs-10"></span></p>
            <p class="text-body-secondary fs-9 mb-0"><svg class="svg-inline--fa fa-clock me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"></path>
              </svg>
              <span class="fw-bold">9:45 AM </span>August 7,2021
            </p>
          </div>
        </div>
        <div class="dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10 text-body" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
              <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
            </svg>
          </button>
          <div class="dropdown-menu dropdown-menu-end py-2">
            <a class="dropdown-item" href="#!">Mark as unread</a>
          </div>
        </div>
      </div>
    </div>
    <!-- off canvas  -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRightNotification" aria-labelledby="offcanvasRightNotificationLabel">
      <div class="offcanvas-header py-md-4">
        <h5 class="offcanvas-title" id="offcanvasRightNotificationLabel">Filters</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <!-- <input type="radio" class="btn-check" name="options-base" id="option5" autocomplete="off" checked>
        <label class="btn" for="option5">All</label>

        <input type="radio" class="btn-check" name="options-base" id="option6" autocomplete="off">
        <label class="btn" for="option6">Unread</label> -->
        <button type="button" class="btn btn-secondary">All</button>
        <button type="button" class="btn btn-outline-secondary">Unread</button>

        <form class="row g-3 mb-6 mt-2">
          <div class="col-sm-12">
            <div class="form-floating">
              <input class="form-control offcanvas-inputs" id="floatingInputGrid" type="text" placeholder="Name"><label for="floatingInputGrid">Name</label>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="flatpickr-input-container">
              <div class="form-floating">
                <input class="form-control offcanvas-inputs datetimepicker flatpickr-input" id="floatingInputStartDate" type="text" placeholder="end date" data-options="{&quot;disableMobile&quot;:true}" readonly="readonly"><label class="ps-6" for="floatingInputStartDate">Start date</label><span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="flatpickr-input-container">
              <div class="form-floating">
                <input class="form-control offcanvas-inputs datetimepicker flatpickr-input" id="floatingInputDeadline" type="text" placeholder="deadline" data-options="{&quot;disableMobile&quot;:true}" readonly="readonly"><label class="ps-6" for="floatingInputDeadline">Deadline</label><span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-12 gy-6">
            <div class="form-floating ">
              <select class="form-select offcanvas-inputs" id="floatingSelectClient">
                <option selected="selected">Select client</option>
                <option value="1">Client One</option>
                <option value="2">Client Two</option>
                <option value="3">Client Three</option>
              </select>
              <label for="floatingSelectClient">client</label></div>
          </div>
          <div class="col-12 gy-5">
            <div class="row g-3 justify-content-end">
              <div class="col-6">
                <button class="btn btn-outline-secondary px-4 py-md-2 w-100" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
              </div>
              <div class="col-6">
                <button class="btn btn-primary px-5 py-md-2 w-100">Search</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection