@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="lead-details">
        <div class="p-md-4 p-3">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Page 1</a></li>
                    <li class="breadcrumb-item"><a href="#">Page 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
            </nav>
            <div class="row align-items-center justify-content-between g-3 mb-3">
                <div class="col-12 col-md-auto">
                    <h2 class="mb-0">Lead details</h2>
                </div>
                <div class="col-12 col-md-auto">
                    <div class="d-flex me-md-4">
                        <button class="btn btn-primary px-3 mx-1">
                            <svg class="svg-inline--fa fa-envelope me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"></path>
                            </svg>
                            <span>Send an email</span>
                        </button>
                        <button class="btn btn-outline-secondary px-3 mx-1"><svg class="svg-inline--fa fa-thumbtack me-sm-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="thumbtack" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M32 32C32 14.3 46.3 0 64 0H320c17.7 0 32 14.3 32 32s-14.3 32-32 32H290.5l11.4 148.2c36.7 19.9 65.7 53.2 79.5 94.7l1 3c3.3 9.8 1.6 20.5-4.4 28.8s-15.7 13.3-26 13.3H32c-10.3 0-19.9-4.9-26-13.3s-7.7-19.1-4.4-28.8l1-3c13.8-41.5 42.8-74.8 79.5-94.7L93.5 64H64C46.3 64 32 49.7 32 32zM160 384h64v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V384z"></path>
                            </svg>
                            <span class="d-none d-sm-inline">Shortlist</span>
                        </button>
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle px-3 mx-1 " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                </svg>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0 g-md-4 g-xl-6">
                <div class="col-md-5 col-lg-5 col-xl-4">
                    <div class="sticky-leads-sidebar">
                        <div class="lead-details-offcanvas scrollbar phoenix-offcanvas phoenix-offcanvas-fixed" id="productFilterColumn">
                            <div class="d-flex justify-content-between align-items-center mb-2 d-md-none">
                                <h3 class="mb-0">Lead Details</h3>
                                <button class="btn p-0" data-phoenix-dismiss="offcanvas">
                                    <span class="uil uil-times fs-7"></span>
                                </button>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row align-items-center justify-content-center g-3 text-center text-lg-start">
                                        <div class="col-12 col-lg-auto">
                                            <div class="avatar avatar-5xl">
                                                <img class="rounded-circle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/33.webp" alt="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-auto d-flex flex-column align-items-center">
                                            <h3 class="fw-bolder mb-2">Ansolo Lazinatov</h3>
                                            <p class="mb-0">Chief tech officer,</p><a class="fw-bold" href="#!">Blue Beetles</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-5">
                                        <h3>About lead</h3><button class="btn btn-link px-3" type="button">Edit</button>
                                    </div>
                                    <div class="mb-4">
                                        <div class="d-flex align-items-center mb-1">
                                            <span class="me-2 uil uil-envelope-alt"> </span>
                                            <h5 class="mb-0">Email</h5>
                                        </div><a href="mailto:shatinon@jeemail.com:">ansolo5@jeemail.com</a>
                                    </div>
                                    <div class="mb-4">
                                        <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-phone"> </span>
                                            <h5 class="mb-0">Phone</h5>
                                        </div><a href="tel:+1234567890">+1234567890 </a>
                                    </div>
                                    <div class="mb-4">
                                        <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-globe"></span>
                                            <h5 class="mb-0">Website</h5>
                                        </div><a href="#!">www.bb.ru.com </a>
                                    </div>
                                    <div class="mb-4">
                                        <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-building"></span>
                                            <h5 class="mb-0">Industry</h5>
                                        </div>
                                        <p class="mb-0">Large Enterprise</p>
                                    </div>
                                    <div class="mb-4">
                                        <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-postcard"></span>
                                            <h5 class="mb-0">Number of employees</h5>
                                        </div>
                                        <p class="mb-0">126</p>
                                    </div>
                                    <div class="mb-4">
                                        <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-dollar-alt"></span>
                                            <h5 class="mb-0">Annual Revenue</h5>
                                        </div>
                                        <p class="mb-0">$12000 </p>
                                    </div>
                                    <div class="mb-4">
                                        <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-clock"></span>
                                            <h5 class="mb-0">Last contacted</h5>
                                        </div>
                                        <p class="mb-0">12 November 2021, 10:54 AM</p>
                                    </div>
                                    <div class="mb-4">
                                        <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-file-check-alt"></span>
                                            <h5 class="mb-0">Lead source</h5>
                                        </div>
                                        <p class="mb-0">Advertisement</p>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center mb-1"><span class="me-2 uil uil-check-circle"></span>
                                            <h5 class="mb-0">Lead status</h5>
                                        </div><span class="badge badge-phoenix badge-phoenix-primary">New Lead</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-5">
                                        <h3>Address</h3><button class="btn btn-link" type="button">Edit</button>
                                    </div>
                                    <div class="mb-4">
                                        <div class="d-flex align-items-center mb-1"><span class="me-2"></span>
                                            <h5 class="mb-0">Street</h5>
                                        </div>
                                        <p class="mb-0">38/2 Penelope street</p>
                                    </div>
                                    <div class="mb-4">
                                        <div class="d-flex align-items-center mb-1"><span class="me-2"></span>
                                            <h5 class="mb-0 >Zip code</h5>
                                        </div>
                                        <p class=" mb-0">1425</p>
                                        </div>
                                        <div class="mb-4">
                                            <div class="d-flex align-items-center mb-1"><span class="me-2"></span>
                                                <h5 class="mb-0 >City</h5>
                                        </div>
                                        <p class=" mb-0">Qualimando</p>
                                            </div>
                                            <div>
                                                <div class="d-flex align-items-center mb-1"><span class="me-2"></span>
                                                    <h5 class="mb-0 >Country</h5>
                                        </div>
                                        <p class=" mb-0">United Empire of Brekania</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="phoenix-offcanvas-backdrop d-lg-none top-0" data-phoenix-backdrop="data-phoenix-backdrop"></div>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-7 col-xl-8">
                                <div class="lead-details-container">
                                    <nav class="navbar pb-4 px-0 nav-underline" id="navbar-deals-detail">
                                        <ul class="nav nav-underline fs-9">
                                            <li class="nav-item">
                                                <a class="nav-link me-2" href="#scrollspyTask">Tasks</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link me-2" href="#scrollspyDeals">Deals</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link me-2" href="#scrollspyEmails">Emails</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#scrollspyAttachments">Attachments </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="scrollspy-example rounded-2" data-bs-spy="scroll" data-bs-offset="0" data-bs-smooth-scroll="true" tabindex="0">
                                        <div class="mb-8">
                                            <h2 class="mb-4" id="scrollspyTask">Tasks</h2>
                                            <div class="row align-items-center g-0 justify-content-start mb-3">
                                                <div class="col-12 col-sm-auto">
                                                    <div class="search-box w-100 mb-2 mb-sm-0" style="max-width:30rem;">
                                                        <form class="position-relative">
                                                            <input class="form-control search-input search" type="search" placeholder="Search tasks" aria-label="Search">
                                                            <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                                                            </svg>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-auto d-flex">
                                                    <p class="mb-0 ms-sm-3 fs-9 fw-bold">
                                                        <svg class="svg-inline--fa fa-filter me-1 fw-extra-bold fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="filter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z"></path>
                                                        </svg>
                                                        23 tasks
                                                    </p>
                                                    <button class="btn btn-link p-0 ms-3 fs-9 text-primary fw-bold">
                                                        <svg class="svg-inline--fa fa-sort me-1 fw-extra-bold fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"></path>
                                                        </svg>
                                                        Sorting
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                                                <div class="col-12 col-lg-auto flex-1">
                                                    <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-1">
                                                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-0"><label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-0">Platforms for data administration</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-auto">
                                                    <div class="d-flex ms-4 lh-1 align-items-center">
                                                        <p class="fs-10 mb-md-0 me-2 me-lg-3 mb-0">19 Nov, 2022</p>
                                                        <div class="hover-lg-hide">
                                                            <p class="fs-10 ps-lg-3 border-start-lg fw-bold mb-md-0 mb-0">11:56 PM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                                                <div class="col-12 col-lg-auto flex-1">
                                                    <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-2">
                                                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                                                            <input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-1">
                                                            <label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-1">
                                                                Make wiser business choices.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-auto">
                                                    <div class="d-flex ms-4 lh-1 align-items-center">
                                                        <p class="fs-10 mb-md-0 me-2 me-lg-3 mb-0">05 Nov, 2022</p>
                                                        <div class="hover-lg-hide">
                                                            <p class="fs-10 ps-lg-3 border-start-lg fw-bold mb-md-0 mb-0">09:30 PM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                                                <div class="col-12 col-lg-auto flex-1">
                                                    <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-3">
                                                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                                                            <input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-2"><label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-2">Market and consumer insights</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-auto">
                                                    <div class="d-flex ms-4 lh-1 align-items-center">
                                                        <p class="fs-10 mb-md-0 me-2 me-lg-3 mb-0">02 Nov, 2022</p>
                                                        <div class="hover-lg-hide">
                                                            <p class="fs-10 ps-lg-3 border-start-lg fw-bold mb-md-0 mb-0">05:25 AM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                                                <div class="col-12 col-lg-auto flex-1">
                                                    <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-4">
                                                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                                                            <input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-3"><label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-3">Dashboards for business insights</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-auto">
                                                    <div class="d-flex ms-4 lh-1 align-items-center">
                                                        <p class="fs-10 mb-md-0 me-2 me-lg-3 mb-0">29 Oct, 2022</p>
                                                        <div class="hover-lg-hide">
                                                            <p class="fs-10 ps-lg-3 border-start-lg fw-bold mb-md-0 mb-0">08:21 PM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                                                <div class="col-12 col-lg-auto flex-1">
                                                    <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-5">
                                                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-4" checked="checked"><label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-4">Analytics and consultancy for data</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-auto">
                                                    <div class="d-flex ms-4 lh-1 align-items-center">
                                                        <p class="fs-10 mb-md-0 me-2 me-lg-3 mb-0">21 Oct, 2022</p>
                                                        <div class="hover-lg-hide">
                                                            <p class="fs-10 ps-lg-3 border-start-lg fw-bold mb-md-0 mb-0">03:45 PM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                                                <div class="col-12 col-lg-auto flex-1">
                                                    <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-6">
                                                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-5" checked="checked"><label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-5">Planning your locations Customer data platform</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-auto">
                                                    <div class="d-flex ms-4 lh-1 align-items-center">
                                                        <p class="fs-10 mb-md-0 me-2 me-lg-3 mb-0">14 Oct, 2022</p>
                                                        <div class="hover-lg-hide">
                                                            <p class="fs-10 ps-lg-3 border-start-lg fw-bold mb-md-0 mb-0">10:00 PM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                                                <div class="col-12 col-lg-auto flex-1">
                                                    <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-7">
                                                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-6" checked="checked"><label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-6">Promotion of technology</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-auto">
                                                    <div class="d-flex ms-4 lh-1 align-items-center">
                                                        <p class="fs-10 mb-md-0 me-2 me-lg-3 mb-0">12 Oct, 2022</p>
                                                        <div class="hover-lg-hide">
                                                            <p class="fs-10 ps-lg-3 border-start-lg fw-bold mb-md-0 mb-0">02:00 AM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="fw-bold fs-9 mt-4" href="#!"><svg class="svg-inline--fa fa-plus me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                                </svg>
                                                Add new task
                                            </a>
                                        </div>
                                        <div class="mb-8">
                                            <div class="d-flex justify-content-between align-items-center mb-4" id="scrollspyDeals">
                                                <h2 class="mb-0">Deals</h2>
                                                <button class="btn btn-primary btn-sm">
                                                    <svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                                    </svg>
                                                    Add Deals
                                                </button>
                                            </div>
                                            <div class="border-top border-bottom border-translucent" id="leadDetailsTable" data-list="{&quot;valueNames&quot;:[&quot;dealName&quot;,&quot;amount&quot;,&quot;stage&quot;,&quot;probability&quot;,&quot;date&quot;,&quot;type&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
                                                <div class="table-responsive scrollbar mx-n1 px-1">
                                                    <table class="table fs-9 mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th class="white-space-nowrap fs-9 align-middle ps-0" style="width:26px;">
                                                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select="{&quot;body&quot;:&quot;lead-details-table-body&quot;}"></div>
                                                                </th>
                                                                <th class="sort white-space-nowrap align-middle pe-3 ps-0 text-uppercase" scope="col" data-sort="dealName" style="width:15%; min-width:200px">Deal name</th>
                                                                <th class="sort align-middle pe-6 text-uppercase text-end" scope="col" data-sort="amount" style="width:15%; min-width:100px">Amount</th>
                                                                <th class="sort align-middle text-start text-uppercase" scope="col" data-sort="stage" style="width:20%; min-width:200px">Stage</th>
                                                                <th class="sort align-middle text-start text-uppercase" scope="col" data-sort="probability" style="width:20%; min-width:100px">Probability</th>
                                                                <th class="sort align-middle ps-0 text-end text-uppercase" scope="col" data-sort="date" style="width:15%; min-width:120px">Closing Date</th>
                                                                <th class="sort align-middle text-end text-uppercase" scope="col" data-sort="type" style="width:15%; min-width:140px">Type</th>
                                                                <th class="align-middle pe-0 text-end" scope="col" style="width:15%;"> </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="list" id="lead-details-table-body">
                                                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                <td class="fs-9 align-middle px-0 py-3">
                                                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;dealName&quot;:&quot;Mocking Bird&quot;,&quot;active&quot;:true,&quot;amount&quot;:&quot;$6,800,000&quot;,&quot;stage_status&quot;:{&quot;label&quot;:&quot;won deal&quot;,&quot;type&quot;:&quot;badge-phoenix-success&quot;},&quot;progress&quot;:{&quot;min&quot;:&quot;67&quot;,&quot;max&quot;:&quot;145&quot;,&quot;color&quot;:&quot;bg-info&quot;},&quot;date&quot;:&quot;Dec 29, 2021&quot;,&quot;type_status&quot;:{&quot;label&quot;:&quot;warm&quot;,&quot;type&quot;:&quot;badge-phoenix-info&quot;}}"></div>
                                                                </td>
                                                                <td class="dealName align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">Mocking Bird</a></td>
                                                                <td class="amount align-middle white-space-nowrap text-start fw-bold py-2 text-end pe-6">$6,800,000</td>
                                                                <td class="stage align-middle white-space-nowrap text-body py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-success">won deal</span></td>
                                                                <td class="probability align-middle white-space-nowrap">
                                                                    <p class="text-body-secondary fs-10 mb-0">67%</p>
                                                                    <div class="progress bg-primary-subtle" style="height:3px;" role="progressbar">
                                                                        <div class="progress-bar bg-info" style="width: 46.206896551724135%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="date align-middle text-center py-2">Dec 29, 2021</td>
                                                                <td class="type align-middle fw-semibold py-2 text-end"><span class="badge badge-phoenix fs-10 badge-phoenix-info">warm</span></td>
                                                                <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                                                                    <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                                            </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                <td class="fs-9 align-middle px-0 py-3">
                                                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;dealName&quot;:&quot;Airbender&quot;,&quot;active&quot;:true,&quot;amount&quot;:&quot;$89,090,000&quot;,&quot;stage_status&quot;:{&quot;label&quot;:&quot;new Deal&quot;,&quot;type&quot;:&quot;badge-phoenix-primary&quot;},&quot;progress&quot;:{&quot;min&quot;:&quot;34&quot;,&quot;max&quot;:&quot;145&quot;,&quot;color&quot;:&quot;bg-warning&quot;},&quot;date&quot;:&quot;Mar 27, 2021&quot;,&quot;type_status&quot;:{&quot;label&quot;:&quot;hot&quot;,&quot;type&quot;:&quot;badge-phoenix-danger&quot;}}"></div>
                                                                </td>
                                                                <td class="dealName align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">Airbender</a></td>
                                                                <td class="amount align-middle white-space-nowrap text-start fw-bold py-2 text-end pe-6">$89,090,000</td>
                                                                <td class="stage align-middle white-space-nowrap text-body py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-primary">new Deal</span></td>
                                                                <td class="probability align-middle white-space-nowrap">
                                                                    <p class="text-body-secondary fs-10 mb-0">34%</p>
                                                                    <div class="progress bg-primary-subtle" style="height:3px;" role="progressbar">
                                                                        <div class="progress-bar bg-warning" style="width: 23.448275862068964%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="date align-middle text-center py-2">Mar 27, 2021</td>
                                                                <td class="type align-middle fw-semibold py-2 text-end"><span class="badge badge-phoenix fs-10 badge-phoenix-danger">hot</span></td>
                                                                <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                                                                    <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                                            </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                <td class="fs-9 align-middle px-0 py-3">
                                                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;dealName&quot;:&quot;Showmen&quot;,&quot;active&quot;:true,&quot;amount&quot;:&quot;$78,650,000&quot;,&quot;stage_status&quot;:{&quot;label&quot;:&quot;Canceled&quot;,&quot;type&quot;:&quot;badge-phoenix-secondary&quot;},&quot;progress&quot;:{&quot;min&quot;:&quot;89&quot;,&quot;max&quot;:&quot;145&quot;,&quot;color&quot;:&quot;bg-success&quot;},&quot;date&quot;:&quot;Jun 24, 2021&quot;,&quot;type_status&quot;:{&quot;label&quot;:&quot;cold&quot;,&quot;type&quot;:&quot;badge-phoenix-warning&quot;}}"></div>
                                                                </td>
                                                                <td class="dealName align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">Showmen</a></td>
                                                                <td class="amount align-middle white-space-nowrap text-start fw-bold py-2 text-end pe-6">$78,650,000</td>
                                                                <td class="stage align-middle white-space-nowrap text-body py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-secondary">Canceled</span></td>
                                                                <td class="probability align-middle white-space-nowrap">
                                                                    <p class="text-body-secondary fs-10 mb-0">89%</p>
                                                                    <div class="progress bg-primary-subtle" style="height:3px;" role="progressbar">
                                                                        <div class="progress-bar bg-success" style="width: 61.37931034482759%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="date align-middle text-center py-2">Jun 24, 2021</td>
                                                                <td class="type align-middle fw-semibold py-2 text-end"><span class="badge badge-phoenix fs-10 badge-phoenix-warning">cold</span></td>
                                                                <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                                                                    <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                                            </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                <td class="fs-9 align-middle px-0 py-3">
                                                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;dealName&quot;:&quot;Tarakihi&quot;,&quot;active&quot;:true,&quot;amount&quot;:&quot;$1,200,000&quot;,&quot;stage_status&quot;:{&quot;label&quot;:&quot;In Progress&quot;,&quot;type&quot;:&quot;badge-phoenix-info&quot;},&quot;progress&quot;:{&quot;min&quot;:&quot;90&quot;,&quot;max&quot;:&quot;145&quot;,&quot;color&quot;:&quot;bg-success&quot;},&quot;date&quot;:&quot;May 19, 2024&quot;,&quot;type_status&quot;:{&quot;label&quot;:&quot;hot&quot;,&quot;type&quot;:&quot;badge-phoenix-danger&quot;}}"></div>
                                                                </td>
                                                                <td class="dealName align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">Tarakihi</a></td>
                                                                <td class="amount align-middle white-space-nowrap text-start fw-bold py-2 text-end pe-6">$1,200,000</td>
                                                                <td class="stage align-middle white-space-nowrap text-body py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-info">In Progress</span></td>
                                                                <td class="probability align-middle white-space-nowrap">
                                                                    <p class="text-body-secondary fs-10 mb-0">90%</p>
                                                                    <div class="progress bg-primary-subtle" style="height:3px;" role="progressbar">
                                                                        <div class="progress-bar bg-success" style="width: 62.06896551724138%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="date align-middle text-center py-2">May 19, 2024</td>
                                                                <td class="type align-middle fw-semibold py-2 text-end"><span class="badge badge-phoenix fs-10 badge-phoenix-danger">hot</span></td>
                                                                <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                                                                    <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                                            </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                <td class="fs-9 align-middle px-0 py-3">
                                                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;dealName&quot;:&quot;Ponce d’leon&quot;,&quot;active&quot;:true,&quot;amount&quot;:&quot;$46,000&quot;,&quot;stage_status&quot;:{&quot;label&quot;:&quot;won Deal&quot;,&quot;type&quot;:&quot;badge-phoenix-success&quot;},&quot;progress&quot;:{&quot;min&quot;:&quot;97&quot;,&quot;max&quot;:&quot;145&quot;,&quot;color&quot;:&quot;bg-success&quot;},&quot;date&quot;:&quot;Aug 19, 2024&quot;,&quot;type_status&quot;:{&quot;label&quot;:&quot;cold&quot;,&quot;type&quot;:&quot;badge-phoenix-warning&quot;}}"></div>
                                                                </td>
                                                                <td class="dealName align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">Ponce d’leon</a></td>
                                                                <td class="amount align-middle white-space-nowrap text-start fw-bold py-2 text-end pe-6">$46,000</td>
                                                                <td class="stage align-middle white-space-nowrap text-body py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-success">won Deal</span></td>
                                                                <td class="probability align-middle white-space-nowrap">
                                                                    <p class="text-body-secondary fs-10 mb-0">97%</p>
                                                                    <div class="progress bg-primary-subtle" style="height:3px;" role="progressbar">
                                                                        <div class="progress-bar bg-success" style="width: 66.89655172413794%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td class="date align-middle text-center py-2">Aug 19, 2024</td>
                                                                <td class="type align-middle fw-semibold py-2 text-end"><span class="badge badge-phoenix fs-10 badge-phoenix-warning">cold</span></td>
                                                                <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                                                                    <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                                            </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                                                    <div class="col-auto d-flex">
                                                        <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info">1 to 5 <span class="text-body-tertiary"> Items of </span>6</p><a class="fw-semibold" href="#!" data-list-view="*">View all<svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5625em;">
                                                                <g transform="translate(160 256)">
                                                                    <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                                                                        <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" transform="translate(-160 -256)"></path>
                                                                    </g>
                                                                </g>
                                                            </svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5625em;">
                                                                <g transform="translate(160 256)">
                                                                    <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                                                                        <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" transform="translate(-160 -256)"></path>
                                                                    </g>
                                                                </g>
                                                            </svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a>
                                                    </div>
                                                    <div class="col-auto d-flex"><button class="page-link disabled" data-list-pagination="prev" disabled=""><svg class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"></path>
                                                            </svg><!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
                                                        <ul class="mb-0 pagination">
                                                            <li class="active"><button class="page" type="button" data-i="1" data-page="5">1</button></li>
                                                            <li><button class="page" type="button" data-i="2" data-page="5">2</button></li>
                                                        </ul><button class="page-link pe-0" data-list-pagination="next"><svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                                            </svg><!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-8">
                                            <h2 class="mb-2" id="scrollspyEmails">Emails</h2>
                                            <div>
                                                <div class="scrollbar">
                                                    <ul class="nav nav-underline fs-9 flex-nowrap mb-1" id="emailTab" role="tablist">
                                                        <li class="nav-item me-3" role="presentation"><a class="nav-link text-nowrap border-0 active" id="mail-tab" data-bs-toggle="tab" href="#tab-mail" aria-controls="mail-tab" role="tab" aria-selected="true">Mails (68)<span class="fw-normal"></span></a></li>
                                                        <li class="nav-item me-3" role="presentation"><a class="nav-link text-nowrap border-0" id="drafts-tab" data-bs-toggle="tab" href="#tab-drafts" aria-controls="drafts-tab" role="tab" aria-selected="false" tabindex="-1">Drafts (6)<span class="fw-normal"></span></a></li>
                                                        <li class="nav-item me-3" role="presentation"><a class="nav-link text-nowrap border-0" id="schedule-tab" data-bs-toggle="tab" href="#tab-schedule" aria-controls="schedule-tab" role="tab" aria-selected="false" tabindex="-1">Scheduled (17)</a></li>
                                                    </ul>
                                                </div>
                                                <div class="search-box w-100 mb-3">
                                                    <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search..." aria-label="Search">
                                                        <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                                                        </svg><!-- <span class="fas fa-search search-box-icon"></span> Font Awesome fontawesome.com -->
                                                    </form>
                                                </div>
                                                <div class="tab-content" id="profileTabContent">
                                                    <div class="tab-pane fade show active" id="tab-mail" role="tabpanel" aria-labelledby="mail-tab">
                                                        <div class="border-top border-bottom border-translucent" id="allEmailsTable" data-list="{&quot;valueNames&quot;:[&quot;subject&quot;,&quot;sent&quot;,&quot;date&quot;,&quot;source&quot;,&quot;status&quot;],&quot;page&quot;:7,&quot;pagination&quot;:true}">
                                                            <div class="table-responsive scrollbar mx-n1 px-1">
                                                                <table class="table fs-9 mb-0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="white-space-nowrap fs-9 align-middle ps-0" style="width:26px;">
                                                                                <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select="{&quot;body&quot;:&quot;all-email-table-body&quot;}"></div>
                                                                            </th>
                                                                            <th class="sort white-space-nowrap align-middle pe-3 ps-0 text-uppercase" scope="col" data-sort="subject" style="width:31%; min-width:350px">Subject</th>
                                                                            <th class="sort align-middle pe-3 text-uppercase" scope="col" data-sort="sent" style="width:15%; min-width:130px">Sent by</th>
                                                                            <th class="sort align-middle text-start text-uppercase" scope="col" data-sort="date" style="min-width:165px">Date</th>
                                                                            <th class="sort align-middle pe-0 text-uppercase" scope="col" style="width:15%; min-width:100px">Action</th>
                                                                            <th class="sort align-middle text-end text-uppercase" scope="col" data-sort="status" style="width:15%; min-width:100px">Status</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="list" id="all-email-table-body">
                                                                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                            <td class="fs-9 align-middle px-0 py-3">
                                                                                <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;mail&quot;:{&quot;subject&quot;:&quot;Quary about purchased soccer socks&quot;,&quot;email&quot;:&quot;jackson@mail.com&quot;},&quot;active&quot;:true,&quot;sent&quot;:&quot;Jackson Pollock&quot;,&quot;date&quot;:&quot;Dec 29, 2021 10:23 am&quot;,&quot;source&quot;:&quot;Call&quot;,&quot;type_status&quot;:{&quot;label&quot;:&quot;sent&quot;,&quot;type&quot;:&quot;badge-phoenix-success&quot;}}"></div>
                                                                            </td>
                                                                            <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">Quary about purchased soccer socks</a>
                                                                                <div class="fs-10 d-block">jackson@mail.com</div>
                                                                            </td>
                                                                            <td class="sent align-middle white-space-nowrap text-start fw-bold py-2">Jackson Pollock</td>
                                                                            <td class="date align-middle white-space-nowrap text-body py-2">Dec 29, 2021 10:23 am</td>
                                                                            <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><svg class="svg-inline--fa fa-phone text-primary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                                        <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                                                                    </svg><!-- <span class="fa-solid fa-phone text-primary me-2"></span> Font Awesome fontawesome.com -->Call</a></td>
                                                                            <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-success">sent</span></td>
                                                                        </tr>
                                                                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                            <td class="fs-9 align-middle px-0 py-3">
                                                                                <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;mail&quot;:{&quot;subject&quot;:&quot;How to take the headache out of Order&quot;,&quot;email&quot;:&quot;ansolo45@mail.com&quot;},&quot;active&quot;:true,&quot;sent&quot;:&quot;Ansolo Lazinatov&quot;,&quot;date&quot;:&quot;Dec 27, 2021 3:27 pm&quot;,&quot;source&quot;:&quot;Call&quot;,&quot;type_status&quot;:{&quot;label&quot;:&quot;delivered&quot;,&quot;type&quot;:&quot;badge-phoenix-info&quot;}}"></div>
                                                                            </td>
                                                                            <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">How to take the headache out of Order</a>
                                                                                <div class="fs-10 d-block">ansolo45@mail.com</div>
                                                                            </td>
                                                                            <td class="sent align-middle white-space-nowrap text-start fw-bold py-2">Ansolo Lazinatov</td>
                                                                            <td class="date align-middle white-space-nowrap text-body py-2">Dec 27, 2021 3:27 pm</td>
                                                                            <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><svg class="svg-inline--fa fa-phone text-primary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                                        <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                                                                    </svg><!-- <span class="fa-solid fa-phone text-primary me-2"></span> Font Awesome fontawesome.com -->Call</a></td>
                                                                            <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-info">delivered</span></td>
                                                                        </tr>
                                                                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                            <td class="fs-9 align-middle px-0 py-3">
                                                                                <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;mail&quot;:{&quot;subject&quot;:&quot;The Arnold Schwarzenegger of Order&quot;,&quot;email&quot;:&quot;ansolo45@mail.com&quot;},&quot;active&quot;:true,&quot;sent&quot;:&quot;Ansolo Lazinatov&quot;,&quot;date&quot;:&quot;Dec 24, 2021 10:44 am&quot;,&quot;source&quot;:&quot;Call&quot;,&quot;type_status&quot;:{&quot;label&quot;:&quot;Bounce&quot;,&quot;type&quot;:&quot;badge-phoenix-warning&quot;}}"></div>
                                                                            </td>
                                                                            <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">The Arnold Schwarzenegger of Order</a>
                                                                                <div class="fs-10 d-block">ansolo45@mail.com</div>
                                                                            </td>
                                                                            <td class="sent align-middle white-space-nowrap text-start fw-bold py-2">Ansolo Lazinatov</td>
                                                                            <td class="date align-middle white-space-nowrap text-body py-2">Dec 24, 2021 10:44 am</td>
                                                                            <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><svg class="svg-inline--fa fa-phone text-primary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                                        <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                                                                    </svg><!-- <span class="fa-solid fa-phone text-primary me-2"></span> Font Awesome fontawesome.com -->Call</a></td>
                                                                            <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-warning">Bounce</span></td>
                                                                        </tr>
                                                                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                            <td class="fs-9 align-middle px-0 py-3">
                                                                                <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;mail&quot;:{&quot;subject&quot;:&quot;My order is not being taken&quot;,&quot;email&quot;:&quot;jackson@mail.com&quot;},&quot;active&quot;:true,&quot;sent&quot;:&quot;Jackson Pollock&quot;,&quot;date&quot;:&quot;Dec 19, 2021 4:55 pm&quot;,&quot;source&quot;:&quot;Call&quot;,&quot;type_status&quot;:{&quot;label&quot;:&quot;Spam&quot;,&quot;type&quot;:&quot;badge-phoenix-danger&quot;}}"></div>
                                                                            </td>
                                                                            <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">My order is not being taken</a>
                                                                                <div class="fs-10 d-block">jackson@mail.com</div>
                                                                            </td>
                                                                            <td class="sent align-middle white-space-nowrap text-start fw-bold py-2">Jackson Pollock</td>
                                                                            <td class="date align-middle white-space-nowrap text-body py-2">Dec 19, 2021 4:55 pm</td>
                                                                            <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><svg class="svg-inline--fa fa-phone text-primary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                                        <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                                                                    </svg><!-- <span class="fa-solid fa-phone text-primary me-2"></span> Font Awesome fontawesome.com -->Call</a></td>
                                                                            <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-danger">Spam</span></td>
                                                                        </tr>
                                                                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                            <td class="fs-9 align-middle px-0 py-3">
                                                                                <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;mail&quot;:{&quot;subject&quot;:&quot;Shipment is missing&quot;,&quot;email&quot;:&quot;jackson@mail.com&quot;},&quot;active&quot;:true,&quot;sent&quot;:&quot;Jackson Pollock&quot;,&quot;date&quot;:&quot;Dec 19, 2021 2:43 pm&quot;,&quot;source&quot;:&quot;Call&quot;,&quot;type_status&quot;:{&quot;label&quot;:&quot;sent&quot;,&quot;type&quot;:&quot;badge-phoenix-success&quot;}}"></div>
                                                                            </td>
                                                                            <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">Shipment is missing</a>
                                                                                <div class="fs-10 d-block">jackson@mail.com</div>
                                                                            </td>
                                                                            <td class="sent align-middle white-space-nowrap text-start fw-bold py-2">Jackson Pollock</td>
                                                                            <td class="date align-middle white-space-nowrap text-body py-2">Dec 19, 2021 2:43 pm</td>
                                                                            <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><svg class="svg-inline--fa fa-phone text-primary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                                        <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                                                                    </svg><!-- <span class="fa-solid fa-phone text-primary me-2"></span> Font Awesome fontawesome.com -->Call</a></td>
                                                                            <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-success">sent</span></td>
                                                                        </tr>
                                                                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                            <td class="fs-9 align-middle px-0 py-3">
                                                                                <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;mail&quot;:{&quot;subject&quot;:&quot;How can I order something urgently?&quot;,&quot;email&quot;:&quot;ansolo45@mail.com&quot;},&quot;active&quot;:true,&quot;sent&quot;:&quot;Jackson Pollock&quot;,&quot;date&quot;:&quot;Dec 19, 2021 2:43 pm&quot;,&quot;source&quot;:&quot;Call&quot;,&quot;type_status&quot;:{&quot;label&quot;:&quot;Delivered&quot;,&quot;type&quot;:&quot;badge-phoenix-info&quot;}}"></div>
                                                                            </td>
                                                                            <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">How can I order something urgently?</a>
                                                                                <div class="fs-10 d-block">ansolo45@mail.com</div>
                                                                            </td>
                                                                            <td class="sent align-middle white-space-nowrap text-start fw-bold py-2">Jackson Pollock</td>
                                                                            <td class="date align-middle white-space-nowrap text-body py-2">Dec 19, 2021 2:43 pm</td>
                                                                            <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><svg class="svg-inline--fa fa-phone text-primary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                                        <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                                                                    </svg><!-- <span class="fa-solid fa-phone text-primary me-2"></span> Font Awesome fontawesome.com -->Call</a></td>
                                                                            <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-info">Delivered</span></td>
                                                                        </tr>
                                                                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                            <td class="fs-9 align-middle px-0 py-3">
                                                                                <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;mail&quot;:{&quot;subject&quot;:&quot;How the delicacy of the products will be handled?&quot;,&quot;email&quot;:&quot;ansolo45@mail.com&quot;},&quot;active&quot;:true,&quot;sent&quot;:&quot;Ansolo Lazinatov&quot;,&quot;date&quot;:&quot;Dec 16, 2021 5:18 pm&quot;,&quot;source&quot;:&quot;Call&quot;,&quot;type_status&quot;:{&quot;label&quot;:&quot;bounced&quot;,&quot;type&quot;:&quot;badge-phoenix-warning&quot;}}"></div>
                                                                            </td>
                                                                            <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">How the delicacy of the products will be handled?</a>
                                                                                <div class="fs-10 d-block">ansolo45@mail.com</div>
                                                                            </td>
                                                                            <td class="sent align-middle white-space-nowrap text-start fw-bold py-2">Ansolo Lazinatov</td>
                                                                            <td class="date align-middle white-space-nowrap text-body py-2">Dec 16, 2021 5:18 pm</td>
                                                                            <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><svg class="svg-inline--fa fa-phone text-primary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                                        <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                                                                    </svg><!-- <span class="fa-solid fa-phone text-primary me-2"></span> Font Awesome fontawesome.com -->Call</a></td>
                                                                            <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-warning">bounced</span></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                                                                <div class="col-auto d-flex">
                                                                    <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info">1 to 7 <span class="text-body-tertiary"> Items of </span>7</p><a class="fw-semibold" href="#!" data-list-view="*">View all<svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5625em;">
                                                                            <g transform="translate(160 256)">
                                                                                <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                                                                                    <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" transform="translate(-160 -256)"></path>
                                                                                </g>
                                                                            </g>
                                                                        </svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5625em;">
                                                                            <g transform="translate(160 256)">
                                                                                <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                                                                                    <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" transform="translate(-160 -256)"></path>
                                                                                </g>
                                                                            </g>
                                                                        </svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a>
                                                                </div>
                                                                <div class="col-auto d-flex"><button class="page-link disabled" data-list-pagination="prev" disabled=""><svg class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                                                            <path fill="currentColor" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"></path>
                                                                        </svg><!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
                                                                    <ul class="mb-0 pagination">
                                                                        <li class="active"><button class="page" type="button" data-i="1" data-page="7">1</button></li>
                                                                    </ul><button class="page-link pe-0 disabled" data-list-pagination="next" disabled=""><svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                                                            <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                                                        </svg><!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab-drafts" role="tabpanel" aria-labelledby="drafts-tab">
                                                        <div class="border-top border-bottom border-translucent" id="draftsEmailsTable" data-list="{&quot;valueNames&quot;:[&quot;subject&quot;,&quot;sent&quot;,&quot;date&quot;,&quot;source&quot;,&quot;status&quot;],&quot;page&quot;:7,&quot;pagination&quot;:true}">
                                                            <div class="table-responsive scrollbar mx-n1 px-1">
                                                                <table class="table fs-9 mb-0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="white-space-nowrap fs-9 align-middle ps-0" style="width:26px;">
                                                                                <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select="{&quot;body&quot;:&quot;drafts-email-table-body&quot;}"></div>
                                                                            </th>
                                                                            <th class="sort white-space-nowrap align-middle pe-3 ps-0 text-uppercase" scope="col" data-sort="subject" style="width:31%; min-width:350px">Subject</th>
                                                                            <th class="sort align-middle pe-3 text-uppercase" scope="col" data-sort="sent" style="width:15%; min-width:130px">Sent by</th>
                                                                            <th class="sort align-middle text-start text-uppercase" scope="col" data-sort="date" style="min-width:165px">Date</th>
                                                                            <th class="sort align-middle pe-0 text-uppercase" scope="col" style="width:15%; min-width:100px">Action</th>
                                                                            <th class="sort align-middle text-end text-uppercase" scope="col" data-sort="status" style="width:15%; min-width:100px">Status</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="list" id="drafts-email-table-body">
                                                                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                            <td class="fs-9 align-middle px-0 py-3">
                                                                                <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;mail&quot;:{&quot;subject&quot;:&quot;Quary about purchased soccer socks&quot;,&quot;email&quot;:&quot;jackson@mail.com&quot;},&quot;active&quot;:true,&quot;sent&quot;:&quot;Jackson Pollock&quot;,&quot;date&quot;:&quot;Dec 29, 2021 10:23 am&quot;,&quot;source&quot;:&quot;Call&quot;,&quot;type_status&quot;:{&quot;label&quot;:&quot;sent&quot;,&quot;type&quot;:&quot;badge-phoenix-success&quot;}}"></div>
                                                                            </td>
                                                                            <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">Quary about purchased soccer socks</a>
                                                                                <div class="fs-10 d-block">jackson@mail.com</div>
                                                                            </td>
                                                                            <td class="sent align-middle white-space-nowrap text-start fw-bold py-2">Jackson Pollock</td>
                                                                            <td class="date align-middle white-space-nowrap text-body py-2">Dec 29, 2021 10:23 am</td>
                                                                            <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><svg class="svg-inline--fa fa-phone text-primary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                                        <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                                                                    </svg><!-- <span class="fa-solid fa-phone text-primary me-2"></span> Font Awesome fontawesome.com -->Call</a></td>
                                                                            <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-success">sent</span></td>
                                                                        </tr>
                                                                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                            <td class="fs-9 align-middle px-0 py-3">
                                                                                <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;mail&quot;:{&quot;subject&quot;:&quot;How to take the headache out of Order&quot;,&quot;email&quot;:&quot;ansolo45@mail.com&quot;},&quot;active&quot;:true,&quot;sent&quot;:&quot;Ansolo Lazinatov&quot;,&quot;date&quot;:&quot;Dec 27, 2021 3:27 pm&quot;,&quot;source&quot;:&quot;Call&quot;,&quot;type_status&quot;:{&quot;label&quot;:&quot;delivered&quot;,&quot;type&quot;:&quot;badge-phoenix-info&quot;}}"></div>
                                                                            </td>
                                                                            <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">How to take the headache out of Order</a>
                                                                                <div class="fs-10 d-block">ansolo45@mail.com</div>
                                                                            </td>
                                                                            <td class="sent align-middle white-space-nowrap text-start fw-bold py-2">Ansolo Lazinatov</td>
                                                                            <td class="date align-middle white-space-nowrap text-body py-2">Dec 27, 2021 3:27 pm</td>
                                                                            <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><svg class="svg-inline--fa fa-phone text-primary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                                        <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                                                                    </svg><!-- <span class="fa-solid fa-phone text-primary me-2"></span> Font Awesome fontawesome.com -->Call</a></td>
                                                                            <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-info">delivered</span></td>
                                                                        </tr>
                                                                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                            <td class="fs-9 align-middle px-0 py-3">
                                                                                <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;mail&quot;:{&quot;subject&quot;:&quot;The Arnold Schwarzenegger of Order&quot;,&quot;email&quot;:&quot;ansolo45@mail.com&quot;},&quot;active&quot;:true,&quot;sent&quot;:&quot;Ansolo Lazinatov&quot;,&quot;date&quot;:&quot;Dec 24, 2021 10:44 am&quot;,&quot;source&quot;:&quot;Call&quot;,&quot;type_status&quot;:{&quot;label&quot;:&quot;Bounce&quot;,&quot;type&quot;:&quot;badge-phoenix-warning&quot;}}"></div>
                                                                            </td>
                                                                            <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">The Arnold Schwarzenegger of Order</a>
                                                                                <div class="fs-10 d-block">ansolo45@mail.com</div>
                                                                            </td>
                                                                            <td class="sent align-middle white-space-nowrap text-start fw-bold py-2">Ansolo Lazinatov</td>
                                                                            <td class="date align-middle white-space-nowrap text-body py-2">Dec 24, 2021 10:44 am</td>
                                                                            <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><svg class="svg-inline--fa fa-phone text-primary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                                        <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                                                                    </svg><!-- <span class="fa-solid fa-phone text-primary me-2"></span> Font Awesome fontawesome.com -->Call</a></td>
                                                                            <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-warning">Bounce</span></td>
                                                                        </tr>
                                                                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                            <td class="fs-9 align-middle px-0 py-3">
                                                                                <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;mail&quot;:{&quot;subject&quot;:&quot;My order is not being taken&quot;,&quot;email&quot;:&quot;jackson@mail.com&quot;},&quot;active&quot;:true,&quot;sent&quot;:&quot;Jackson Pollock&quot;,&quot;date&quot;:&quot;Dec 19, 2021 4:55 pm&quot;,&quot;source&quot;:&quot;Call&quot;,&quot;type_status&quot;:{&quot;label&quot;:&quot;Spam&quot;,&quot;type&quot;:&quot;badge-phoenix-danger&quot;}}"></div>
                                                                            </td>
                                                                            <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">My order is not being taken</a>
                                                                                <div class="fs-10 d-block">jackson@mail.com</div>
                                                                            </td>
                                                                            <td class="sent align-middle white-space-nowrap text-start fw-bold py-2">Jackson Pollock</td>
                                                                            <td class="date align-middle white-space-nowrap text-body py-2">Dec 19, 2021 4:55 pm</td>
                                                                            <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><svg class="svg-inline--fa fa-phone text-primary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                                        <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                                                                    </svg><!-- <span class="fa-solid fa-phone text-primary me-2"></span> Font Awesome fontawesome.com -->Call</a></td>
                                                                            <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-danger">Spam</span></td>
                                                                        </tr>
                                                                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                            <td class="fs-9 align-middle px-0 py-3">
                                                                                <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;mail&quot;:{&quot;subject&quot;:&quot;Shipment is missing&quot;,&quot;email&quot;:&quot;jackson@mail.com&quot;},&quot;active&quot;:true,&quot;sent&quot;:&quot;Jackson Pollock&quot;,&quot;date&quot;:&quot;Dec 19, 2021 2:43 pm&quot;,&quot;source&quot;:&quot;Call&quot;,&quot;type_status&quot;:{&quot;label&quot;:&quot;sent&quot;,&quot;type&quot;:&quot;badge-phoenix-success&quot;}}"></div>
                                                                            </td>
                                                                            <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">Shipment is missing</a>
                                                                                <div class="fs-10 d-block">jackson@mail.com</div>
                                                                            </td>
                                                                            <td class="sent align-middle white-space-nowrap text-start fw-bold py-2">Jackson Pollock</td>
                                                                            <td class="date align-middle white-space-nowrap text-body py-2">Dec 19, 2021 2:43 pm</td>
                                                                            <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><svg class="svg-inline--fa fa-phone text-primary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                                        <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                                                                    </svg><!-- <span class="fa-solid fa-phone text-primary me-2"></span> Font Awesome fontawesome.com -->Call</a></td>
                                                                            <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-success">sent</span></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                                                                <div class="col-auto d-flex">
                                                                    <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info">1 to 5 <span class="text-body-tertiary"> Items of </span>5</p><a class="fw-semibold" href="#!" data-list-view="*">View all<svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5625em;">
                                                                            <g transform="translate(160 256)">
                                                                                <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                                                                                    <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" transform="translate(-160 -256)"></path>
                                                                                </g>
                                                                            </g>
                                                                        </svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5625em;">
                                                                            <g transform="translate(160 256)">
                                                                                <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                                                                                    <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" transform="translate(-160 -256)"></path>
                                                                                </g>
                                                                            </g>
                                                                        </svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a>
                                                                </div>
                                                                <div class="col-auto d-flex"><button class="page-link disabled" data-list-pagination="prev" disabled=""><svg class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                                                            <path fill="currentColor" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"></path>
                                                                        </svg><!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
                                                                    <ul class="mb-0 pagination">
                                                                        <li class="active"><button class="page" type="button" data-i="1" data-page="7">1</button></li>
                                                                    </ul><button class="page-link pe-0 disabled" data-list-pagination="next" disabled=""><svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                                                            <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                                                        </svg><!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab-schedule" role="tabpanel" aria-labelledby="schedule-tab">
                                                        <div class="border-top border-bottom border-translucent" id="scheduledEmailsTable" data-list="{&quot;valueNames&quot;:[&quot;subject&quot;,&quot;sent&quot;,&quot;date&quot;,&quot;source&quot;,&quot;status&quot;],&quot;page&quot;:7,&quot;pagination&quot;:true}">
                                                            <div class="table-responsive scrollbar mx-n1 px-1">
                                                                <table class="table fs-9 mb-0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="white-space-nowrap fs-9 align-middle ps-0" style="width:26px;">
                                                                                <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select="{&quot;body&quot;:&quot;scheduled-email-table-body&quot;}"></div>
                                                                            </th>
                                                                            <th class="sort white-space-nowrap align-middle pe-3 ps-0 text-uppercase" scope="col" data-sort="subject" style="width:31%; min-width:350px">Subject</th>
                                                                            <th class="sort align-middle pe-3 text-uppercase" scope="col" data-sort="sent" style="width:15%; min-width:130px">Sent by</th>
                                                                            <th class="sort align-middle text-start text-uppercase" scope="col" data-sort="date" style="min-width:165px">Date</th>
                                                                            <th class="sort align-middle pe-0 text-uppercase" scope="col" style="width:15%; min-width:100px">Action</th>
                                                                            <th class="sort align-middle text-end text-uppercase" scope="col" data-sort="status" style="width:15%; min-width:100px">Status</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="list" id="scheduled-email-table-body">
                                                                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                            <td class="fs-9 align-middle px-0 py-3">
                                                                                <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;mail&quot;:{&quot;subject&quot;:&quot;Quary about purchased soccer socks&quot;,&quot;email&quot;:&quot;jackson@mail.com&quot;},&quot;active&quot;:true,&quot;sent&quot;:&quot;Jackson Pollock&quot;,&quot;date&quot;:&quot;Dec 29, 2021 10:23 am&quot;,&quot;source&quot;:&quot;Call&quot;,&quot;type_status&quot;:{&quot;label&quot;:&quot;sent&quot;,&quot;type&quot;:&quot;badge-phoenix-success&quot;}}"></div>
                                                                            </td>
                                                                            <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">Quary about purchased soccer socks</a>
                                                                                <div class="fs-10 d-block">jackson@mail.com</div>
                                                                            </td>
                                                                            <td class="sent align-middle white-space-nowrap text-start fw-bold py-2">Jackson Pollock</td>
                                                                            <td class="date align-middle white-space-nowrap text-body py-2">Dec 29, 2021 10:23 am</td>
                                                                            <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><svg class="svg-inline--fa fa-phone text-primary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                                        <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                                                                    </svg><!-- <span class="fa-solid fa-phone text-primary me-2"></span> Font Awesome fontawesome.com -->Call</a></td>
                                                                            <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-success">sent</span></td>
                                                                        </tr>
                                                                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                            <td class="fs-9 align-middle px-0 py-3">
                                                                                <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;mail&quot;:{&quot;subject&quot;:&quot;How to take the headache out of Order&quot;,&quot;email&quot;:&quot;ansolo45@mail.com&quot;},&quot;active&quot;:true,&quot;sent&quot;:&quot;Ansolo Lazinatov&quot;,&quot;date&quot;:&quot;Dec 27, 2021 3:27 pm&quot;,&quot;source&quot;:&quot;Call&quot;,&quot;type_status&quot;:{&quot;label&quot;:&quot;delivered&quot;,&quot;type&quot;:&quot;badge-phoenix-info&quot;}}"></div>
                                                                            </td>
                                                                            <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">How to take the headache out of Order</a>
                                                                                <div class="fs-10 d-block">ansolo45@mail.com</div>
                                                                            </td>
                                                                            <td class="sent align-middle white-space-nowrap text-start fw-bold py-2">Ansolo Lazinatov</td>
                                                                            <td class="date align-middle white-space-nowrap text-body py-2">Dec 27, 2021 3:27 pm</td>
                                                                            <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><svg class="svg-inline--fa fa-phone text-primary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                                        <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                                                                    </svg><!-- <span class="fa-solid fa-phone text-primary me-2"></span> Font Awesome fontawesome.com -->Call</a></td>
                                                                            <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-info">delivered</span></td>
                                                                        </tr>
                                                                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                            <td class="fs-9 align-middle px-0 py-3">
                                                                                <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;mail&quot;:{&quot;subject&quot;:&quot;The Arnold Schwarzenegger of Order&quot;,&quot;email&quot;:&quot;ansolo45@mail.com&quot;},&quot;active&quot;:true,&quot;sent&quot;:&quot;Ansolo Lazinatov&quot;,&quot;date&quot;:&quot;Dec 24, 2021 10:44 am&quot;,&quot;source&quot;:&quot;Call&quot;,&quot;type_status&quot;:{&quot;label&quot;:&quot;Bounce&quot;,&quot;type&quot;:&quot;badge-phoenix-warning&quot;}}"></div>
                                                                            </td>
                                                                            <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">The Arnold Schwarzenegger of Order</a>
                                                                                <div class="fs-10 d-block">ansolo45@mail.com</div>
                                                                            </td>
                                                                            <td class="sent align-middle white-space-nowrap text-start fw-bold py-2">Ansolo Lazinatov</td>
                                                                            <td class="date align-middle white-space-nowrap text-body py-2">Dec 24, 2021 10:44 am</td>
                                                                            <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><svg class="svg-inline--fa fa-phone text-primary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                                        <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                                                                    </svg><!-- <span class="fa-solid fa-phone text-primary me-2"></span> Font Awesome fontawesome.com -->Call</a></td>
                                                                            <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-warning">Bounce</span></td>
                                                                        </tr>
                                                                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                            <td class="fs-9 align-middle px-0 py-3">
                                                                                <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;mail&quot;:{&quot;subject&quot;:&quot;My order is not being taken&quot;,&quot;email&quot;:&quot;jackson@mail.com&quot;},&quot;active&quot;:true,&quot;sent&quot;:&quot;Jackson Pollock&quot;,&quot;date&quot;:&quot;Dec 19, 2021 4:55 pm&quot;,&quot;source&quot;:&quot;Call&quot;,&quot;type_status&quot;:{&quot;label&quot;:&quot;Spam&quot;,&quot;type&quot;:&quot;badge-phoenix-danger&quot;}}"></div>
                                                                            </td>
                                                                            <td class="subject order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">My order is not being taken</a>
                                                                                <div class="fs-10 d-block">jackson@mail.com</div>
                                                                            </td>
                                                                            <td class="sent align-middle white-space-nowrap text-start fw-bold py-2">Jackson Pollock</td>
                                                                            <td class="date align-middle white-space-nowrap text-body py-2">Dec 19, 2021 4:55 pm</td>
                                                                            <td class="align-middle white-space-nowrap ps-3"><a class="text-body" href="#!"><svg class="svg-inline--fa fa-phone text-primary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                                        <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                                                                    </svg><!-- <span class="fa-solid fa-phone text-primary me-2"></span> Font Awesome fontawesome.com -->Call</a></td>
                                                                            <td class="status align-middle fw-semibold text-end py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-danger">Spam</span></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                                                                <div class="col-auto d-flex">
                                                                    <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info">1 to 4 <span class="text-body-tertiary"> Items of </span>4</p><a class="fw-semibold" href="#!" data-list-view="*">View all<svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5625em;">
                                                                            <g transform="translate(160 256)">
                                                                                <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                                                                                    <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" transform="translate(-160 -256)"></path>
                                                                                </g>
                                                                            </g>
                                                                        </svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5625em;">
                                                                            <g transform="translate(160 256)">
                                                                                <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                                                                                    <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" transform="translate(-160 -256)"></path>
                                                                                </g>
                                                                            </g>
                                                                        </svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a>
                                                                </div>
                                                                <div class="col-auto d-flex"><button class="page-link disabled" data-list-pagination="prev" disabled=""><svg class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                                                            <path fill="currentColor" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"></path>
                                                                        </svg><!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
                                                                    <ul class="mb-0 pagination">
                                                                        <li class="active"><button class="page" type="button" data-i="1" data-page="7">1</button></li>
                                                                    </ul><button class="page-link pe-0 disabled" data-list-pagination="next" disabled=""><svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                                                            <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                                                        </svg><!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <h2 class="mb-4" id="scrollspyAttachments">Attachments</h2>
                                            <div class="border-top border-dashed pt-3 pb-4">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex mb-1"><svg class="svg-inline--fa fa-image me-2 fs-9" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="image" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM323.8 202.5c-4.5-6.6-11.9-10.5-19.8-10.5s-15.4 3.9-19.8 10.5l-87 127.6L170.7 297c-4.6-5.7-11.5-9-18.7-9s-14.2 3.3-18.7 9l-64 80c-5.8 7.2-6.9 17.1-2.9 25.4s12.4 13.6 21.6 13.6h96 32H424c8.9 0 17.1-4.9 21.2-12.8s3.6-17.4-1.4-24.7l-120-176zM112 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z"></path>
                                                        </svg><!-- <span class="fa-solid fa-image me-2 fs-9"></span> Font Awesome fontawesome.com -->
                                                        <p class="mb-0 lh-1">Silly_sight_1.png</p>
                                                    </div>
                                                    <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                            </svg><!-- <span class="fas fa-ellipsis-h"></span> Font Awesome fontawesome.com --></button>
                                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                                    </div>
                                                </div>
                                                <p class="fs-9 mb-3">
                                                    <span>768kB</span>
                                                    <span class="text-body-quaternary mx-1">| </span>
                                                    <a href="#!">Shantinan Mekalan </a>
                                                    <span class="text-body-quaternary mx-1">| </span>
                                                    <span class="text-nowrap">21st Dec, 12:56 PM</span>
                                                </p>
                                                <img class="rounded-2" src="https://prium.github.io/phoenix/v1.18.0/assets/img/generic/40.png" alt="">
                                            </div>
                                            <div class="border-top border-dashed py-4">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <div class="d-flex align-items-center mb-1"><svg class="svg-inline--fa fa-image me-2 fs-9 text-body-tertiary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="image" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM323.8 202.5c-4.5-6.6-11.9-10.5-19.8-10.5s-15.4 3.9-19.8 10.5l-87 127.6L170.7 297c-4.6-5.7-11.5-9-18.7-9s-14.2 3.3-18.7 9l-64 80c-5.8 7.2-6.9 17.1-2.9 25.4s12.4 13.6 21.6 13.6h96 32H424c8.9 0 17.1-4.9 21.2-12.8s3.6-17.4-1.4-24.7l-120-176zM112 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z"></path>
                                                            </svg><!-- <span class="fa-solid fa-image me-2 fs-9 text-body-tertiary"></span> Font Awesome fontawesome.com -->
                                                            <p class="mb-0 lh-1">All_images.zip</p>
                                                        </div>
                                                        <p class="fs-9 mb-0"><span>12.8 mB</span><span class="text-body-quaternary mx-1">|</span><a href="#!">Yves Tanguy </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">19th Dec, 08:56 PM</span></p>
                                                    </div>
                                                    <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                            </svg><!-- <span class="fas fa-ellipsis-h"></span> Font Awesome fontawesome.com --></button>
                                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-top border-dashed py-4">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <div class="d-flex align-items-center mb-1"><svg class="svg-inline--fa fa-file-lines me-2 fs-9 text-body-tertiary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-lines" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM112 256H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                                                            </svg><!-- <span class="fa-solid fa-file-lines me-2 fs-9 text-body-tertiary"></span> Font Awesome fontawesome.com -->
                                                            <p class="mb-0 lh-1">Project.txt</p>
                                                        </div>
                                                        <p class="fs-9 mb-0"><span>123 kB</span><span class="text-body-quaternary mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">12th Dec, 12:56 PM</span></p>
                                                    </div>
                                                    <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                            </svg><!-- <span class="fas fa-ellipsis-h"></span> Font Awesome fontawesome.com --></button>
                                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse </a></div>
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

                @endsection