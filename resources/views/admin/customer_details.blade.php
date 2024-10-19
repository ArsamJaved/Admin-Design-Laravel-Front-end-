@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div>
        <div class="p-md-4 p-3">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Page 1</a></li>
                    <li class="breadcrumb-item"><a href="#">Page 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
            </nav>
            <div class="row align-items-center justify-content-between g-3 mb-4">
                <div class="col-auto">
                    <h2 class="mb-0">Customer details</h2>
                </div>
                <div class="col-auto">
                    <div class="row g-3">
                        <div class="col-auto">
                            <button class="btn btn-outline-danger"><svg class="svg-inline--fa fa-trash-can me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash-can" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z"></path>
                                </svg>
                                Delete customer
                            </button>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-outline-secondary"><svg class="svg-inline--fa fa-key me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="key" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z"></path>
                                </svg>
                                Reset password
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 h-100">
                <div class="col-12 col-md-7 col-xxl-12">
                    <div class="card h-100 h-xxl-auto">
                        <div class="card-body d-flex flex-column justify-content-between pb-3">
                            <div class="row align-items-center g-5 mb-3 text-center text-sm-start">
                                <div class="col-12 col-sm-auto mb-sm-2">
                                    <div class="avatar avatar-5xl">
                                        <img class="rounded-circle img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/15.webp" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-auto flex-1">
                                    <h3>Ansolo Lazinatov</h3>
                                    <p class="text-body-secondary">Joined 3 months ago</p>
                                    <div><a class="me-2" href="#!"><svg class="svg-inline--fa fa-linkedin-in text-body-quaternary text-opacity-75 text-primary-hover" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                                            </svg><!-- <span class="fab fa-linkedin-in text-body-quaternary text-opacity-75 text-primary-hover"></span> Font Awesome fontawesome.com --></a><a class="me-2" href="#!"><svg class="svg-inline--fa fa-facebook text-body-quaternary text-opacity-75 text-primary-hover" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"></path>
                                            </svg><!-- <span class="fab fa-facebook text-body-quaternary text-opacity-75 text-primary-hover"></span> Font Awesome fontawesome.com --></a><a href="#!"><svg class="svg-inline--fa fa-twitter text-body-quaternary text-opacity-75 text-primary-hover" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                                            </svg><!-- <span class="fab fa-twitter text-body-quaternary text-opacity-75 text-primary-hover"></span> Font Awesome fontawesome.com --></a></div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between border-top border-dashed pt-4">
                                <div>
                                    <h6>Following</h6>
                                    <p class="fs-7 text-body-secondary mb-0">297</p>
                                </div>
                                <div>
                                    <h6>Projects</h6>
                                    <p class="fs-7 text-body-secondary mb-0">56</p>
                                </div>
                                <div>
                                    <h6>Completion</h6>
                                    <p class="fs-7 text-body-secondary mb-0">97</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-xxl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="me-1">Default Address</h3>
                                <button class="btn btn-link p-0">
                                    <svg class="svg-inline--fa fa-pen fs-8 ms-3 text-body-quaternary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>
                                    </svg>
                                </button>
                            </div>
                            <h5 class="text-body-secondary">Address</h5>
                            <p class="text-body-secondary">Shatinon Mekalan<br>Vancouver, British Columbia<br>Canada</p>
                            <div class="mb-3">
                                <h5 class="text-body-secondary">Email</h5><a href="mailto:shatinon@jeemail.com">shatinon@jeemail.com</a>
                            </div>
                            <h5 class="text-body-secondary">Phone</h5><a class="text-body-secondary" href="tel:+1234567890">+1234567890</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-4">Notes on Customer</h3>
                            <textarea class="form-control mb-3" rows="4"></textarea>
                            <button class="btn btn-outline-secondary w-100 mb-4">Add Note</button>
                            <div class="fs-9 fw-semibold pb-4 mb-4 border-bottom border-dashed">
                                <p class="text-body-highlight mb-1">Gave us a nice feedback</p>
                                <div class="text-end">
                                    <p class="text-body-tertiary text-opacity-85 mb-0">12 Nov, 2020</p>
                                </div>
                            </div>
                            <div class="fs-9 fw-semibold pb-4 mb-4 border-bottom border-dashed">
                                <p class="text-body-highlight mb-1">Customer added product to cart and then forgot to checkout. Later knocked the customer support to ask about update on shipping. Later, settled on “One day Shipping” though “Free delivery” was preferred. Overall good behavior.</p>
                                <div class="text-end">
                                    <p class="text-body-tertiary text-opacity-85 mb-0">23 Dec, 2019</p>
                                </div>
                            </div>
                            <div class="fs-9 fw-semibold pb-4 mb-4 border-bottom border-dashed">
                                <p class="text-body-highlight mb-1">User of this support ticket won a 100% off coupon and received top-notch service from the technical support engineer. Along with providing a good review, user highly appreciated the team.</p>
                                <div class="text-end">
                                    <p class="text-body-tertiary text-opacity-85 mb-0">2 Oct, 2019</p>
                                </div>
                            </div>
                            <div class="fs-9 fw-semibold">
                                <p class="text-body-highlight mb-1">Customer returned and bought 2 related items, which is currently being shipped. Customer chose “One day Shipping”. Additional notes were added regarding customised wrapping. Customer submitted positive review.</p>
                                <div class="text-end">
                                    <p class="text-body-tertiary text-opacity-85 mb-0">26 Apr, 2019</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="products">
            <div class="px-4 px-lg-6 bg-white border-top border-bottom border-translucent position-relative top-1">
                <div class="table-responsive scrollbar px-1">
                    <table class="table fs-9 mb-0">
                        <thead>
                            <tr>
                                <th class="white-space-nowrap fs-9 align-middle ps-0" style="max-width:20px; width:18px;">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" id="checkbox-bulk-products-select" type="checkbox" data-bulk-select="{&quot;body&quot;:&quot;products-table-body&quot;}"></div>
                                </th>
                                <th class="sort white-space-nowrap align-middle fs-10" scope="col" style="width:70px;"></th>
                                <th class="sort white-space-nowrap align-middle ps-4 text-nowrap" scope="col" style="width:350px;" data-sort="product">PRODUCT NAME</th>
                                <th class="sort align-middle text-end ps-4 text-nowrap" scope="col" data-sort="price" style="width:150px;">PRICE</th>
                                <th class="sort align-middle ps-4 text-nowrap" scope="col" data-sort="category" style="width:150px;">CATEGORY</th>
                                <th class="sort align-middle ps-3" scope="col" data-sort="tags" style="width:250px;">TAGS</th>
                                <th class="sort align-middle fs-8 text-center ps-4 text-nowrap" scope="col" style="width:125px;"></th>
                                <th class="sort align-middle ps-4 text-nowrap" scope="col" data-sort="vendor" style="width:200px;">VENDOR</th>
                                <th class="sort align-middle ps-4 text-nowrap" scope="col" data-sort="time" style="width:50px;">PUBLISHED ON</th>
                                <th class="sort text-end align-middle pe-0 ps-4 text-nowrap" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="list" id="products-table-body">
                            <tr class="position-static">
                                <td class="fs-9 align-middle">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;product&quot;:&quot;Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature Trends, Carbon/Graphite, One Size (S &amp; L Bands...&quot;,&quot;productImage&quot;:&quot;/products/1.png&quot;,&quot;price&quot;:&quot;$39&quot;,&quot;category&quot;:&quot;Plants&quot;,&quot;tags&quot;:[&quot;Health&quot;,&quot;Exercise&quot;,&quot;Discipline&quot;,&quot;Lifestyle&quot;,&quot;Fitness&quot;],&quot;star&quot;:false,&quot;vendor&quot;:&quot;Blue Olive Plant sellers. Inc&quot;,&quot;publishedOn&quot;:&quot;Nov 12, 10:45 PM&quot;}"></div>
                                </td>
                                <td class="align-middle white-space-nowrap py-0">

                                    <a class="d-block border border-translucent rounded-2" href="../../../apps/e-commerce/landing/product-details.html">
                                        <img src="https://prium.github.io/phoenix/v1.18.0/assets/img//products/1.png" alt="" width="53"></a>
                                </td>
                                <td class="product align-middle ps-4">

                                    <a class="fw-semibold line-clamp-3 mb-0" href="../../../apps/e-commerce/landing/product-details.html">Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature Trends, Carbon/Graphite, One Size (S &amp; ...</a>
                                </td>
                                <td class="price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4">$39</td>
                                <td class="category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold">Plants</td>
                                <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;">

                                    <a class="text-decoration-none" href="#!">

                                        <span class="badge badge-tag me-2 mb-2">Health</span>
                                    </a>

                                    <a class="text-decoration-none" href="#!">

                                        <span class="badge badge-tag me-2 mb-2">Exercise</span>
                                    </a>

                                    <a class="text-decoration-none" href="#!">

                                        <span class="badge badge-tag me-2 mb-2">Discipline</span>
                                    </a>

                                    <a class="text-decoration-none" href="#!">

                                        <span class="badge badge-tag me-2 mb-2">Lifestyle</span>
                                    </a>

                                    <a class="text-decoration-none" href="#!">

                                        <span class="badge badge-tag me-2 mb-2">Fitness</span>
                                    </a>
                                </td>
                                <td class="align-middle review fs-8 text-center ps-4">
                                    <div class="d-toggle-container">
                                        <div class="d-block-hover"><svg class="svg-inline--fa fa-star text-warning" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                            </svg>
                                        </div>
                                        <div class="d-none-hover"><svg class="svg-inline--fa fa-star text-warning" aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td class="vendor align-middle text-start fw-semibold ps-4"><a href="#!">Blue Olive Plant sellers. Inc</a></td>
                                <td class="time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4">Nov 12, 10:45 PM</td>
                                <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                    <div class="btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end py-2">

                                            <a class="dropdown-item" href="#!">View</a>

                                            <a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div>

                                            <a class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="position-static">
                                <td class="fs-9 align-middle">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;product&quot;:&quot;iPhone 13 pro max-Pacific Blue-128GB storage&quot;,&quot;productImage&quot;:&quot;/products/2.png&quot;,&quot;price&quot;:&quot;$87&quot;,&quot;category&quot;:&quot;Furniture&quot;,&quot;tags&quot;:[&quot;Class&quot;,&quot;Camera&quot;,&quot;Discipline&quot;,&quot;invincible&quot;,&quot;Pro&quot;,&quot;Swag&quot;],&quot;star&quot;:true,&quot;vendor&quot;:&quot;Beatrice Furnitures&quot;,&quot;publishedOn&quot;:&quot;Nov 11, 7:36 PM&quot;}"></div>
                                </td>
                                <td class="align-middle white-space-nowrap py-0">
                                    <a class="d-block border border-translucent rounded-2" href="../../../apps/e-commerce/landing/product-details.html">
                                        <img src="https://prium.github.io/phoenix/v1.18.0/assets/img//products/2.png" alt="" width="53"></a>
                                </td>
                                <td class="product align-middle ps-4">
                                    <a class="fw-semibold line-clamp-3 mb-0" href="../../../apps/e-commerce/landing/product-details.html">iPhone 13 pro max-Pacific Blue-128GB storage</a>
                                </td>
                                <td class="price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4">$87</td>
                                <td class="category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold">Furniture</td>
                                <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;">
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Class</span></a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Camera</span></a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Discipline</span></a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">invincible</span></a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Pro</span></a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Swag</span></a>
                                </td>
                                <td class="align-middle review fs-8 text-center ps-4"><svg class="svg-inline--fa fa-star text-warning" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                    </svg><!-- <span class="fas fa-star text-warning"></span> Font Awesome fontawesome.com --></td>
                                <td class="vendor align-middle text-start fw-semibold ps-4"><a href="#!">Beatrice Furnitures</a></td>
                                <td class="time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4">Nov 11, 7:36 PM</td>
                                <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                    <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                            <a class="dropdown-item" href="#!">View</a>
                                            <a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="position-static">
                                <td class="fs-9 align-middle">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;product&quot;:&quot;Apple MacBook Pro 13 inch-M1-8/256GB-space&quot;,&quot;productImage&quot;:&quot;/products/3.png&quot;,&quot;price&quot;:&quot;$9&quot;,&quot;category&quot;:&quot;Plants&quot;,&quot;tags&quot;:[&quot;Efficiency&quot;,&quot;Handy&quot;,&quot;Apple&quot;,&quot;Creativity&quot;,&quot;Gray&quot;],&quot;star&quot;:false,&quot;vendor&quot;:&quot;PlantPlanet&quot;,&quot;publishedOn&quot;:&quot;Nov 11, 8:16 AM&quot;}"></div>
                                </td>
                                <td class="align-middle white-space-nowrap py-0">
                                    <a class="d-block border border-translucent rounded-2" href="../../../apps/e-commerce/landing/product-details.html">
                                        <img src="https://prium.github.io/phoenix/v1.18.0/assets/img//products/3.png" alt="" width="53"></a>
                                </td>
                                <td class="product align-middle ps-4">
                                    <a class="fw-semibold line-clamp-3 mb-0" href="../../../apps/e-commerce/landing/product-details.html">Apple MacBook Pro 13 inch-M1-8/256GB-space</a>
                                </td>
                                <td class="price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4">$9</td>
                                <td class="category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold">Plants</td>
                                <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;">
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Efficiency</span>
                                    </a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Handy</span>
                                    </a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Apple</span>
                                    </a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Creativity</span>
                                    </a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Gray</span>
                                    </a>
                                </td>
                                <td class="align-middle review fs-8 text-center ps-4">
                                    <div class="d-toggle-container">
                                        <div class="d-block-hover"><svg class="svg-inline--fa fa-star text-warning" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                            </svg><!-- <span class="fas fa-star text-warning"></span> Font Awesome fontawesome.com --></div>
                                        <div class="d-none-hover"><svg class="svg-inline--fa fa-star text-warning" aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"></path>
                                            </svg><!-- <span class="far fa-star text-warning"></span> Font Awesome fontawesome.com --></div>
                                    </div>
                                </td>
                                <td class="vendor align-middle text-start fw-semibold ps-4"><a href="#!">PlantPlanet</a></td>
                                <td class="time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4">Nov 11, 8:16 AM</td>
                                <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                    <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                            <a class="dropdown-item" href="#!">View</a>
                                            <a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="position-static">
                                <td class="fs-9 align-middle">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;product&quot;:&quot;Apple iMac 24\&quot; 4K Retina Display M1 8 Core CPU...&quot;,&quot;productImage&quot;:&quot;/products/4.png&quot;,&quot;price&quot;:&quot;$8 - $58&quot;,&quot;category&quot;:&quot;Toys&quot;,&quot;tags&quot;:[&quot;Color&quot;,&quot;Stunning&quot;,&quot;Retina&quot;,&quot;Green&quot;,&quot;PC killer&quot;],&quot;star&quot;:false,&quot;vendor&quot;:&quot;Kizzstore&quot;,&quot;publishedOn&quot;:&quot;Nov 8, 6:39 PM&quot;}"></div>
                                </td>
                                <td class="align-middle white-space-nowrap py-0">
                                    <a class="d-block border border-translucent rounded-2" href="../../../apps/e-commerce/landing/product-details.html">
                                        <img src="https://prium.github.io/phoenix/v1.18.0/assets/img//products/4.png" alt="" width="53"></a>
                                </td>
                                <td class="product align-middle ps-4">
                                    <a class="fw-semibold line-clamp-3 mb-0" href="../../../apps/e-commerce/landing/product-details.html">Apple iMac 24" 4K Retina Display M1 8 Core CPU...</a>
                                </td>
                                <td class="price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4">$8 - $58</td>
                                <td class="category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold">Toys</td>
                                <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;">
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Color</span></a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Stunning</span></a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Retina</span></a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Green</span></a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">PC killer</span></a>
                                </td>
                                <td class="align-middle review fs-8 text-center ps-4">
                                    <div class="d-toggle-container">
                                        <div class="d-block-hover"><svg class="svg-inline--fa fa-star text-warning" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                            </svg><!-- <span class="fas fa-star text-warning"></span> Font Awesome fontawesome.com --></div>
                                        <div class="d-none-hover"><svg class="svg-inline--fa fa-star text-warning" aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"></path>
                                            </svg><!-- <span class="far fa-star text-warning"></span> Font Awesome fontawesome.com --></div>
                                    </div>
                                </td>
                                <td class="vendor align-middle text-start fw-semibold ps-4"><a href="#!">Kizzstore</a></td>
                                <td class="time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4">Nov 8, 6:39 PM</td>
                                <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                    <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                            <a class="dropdown-item" href="#!">View</a>
                                            <a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="position-static">
                                <td class="fs-9 align-middle">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;product&quot;:&quot;Razer Kraken v3 x Wired 7.1 Surroung Sound Gaming headset&quot;,&quot;productImage&quot;:&quot;/products/5.png&quot;,&quot;price&quot;:&quot;$120&quot;,&quot;category&quot;:&quot;Fashion&quot;,&quot;tags&quot;:[&quot;Music&quot;,&quot;Audio&quot;,&quot;Meeting&quot;,&quot;Record&quot;,&quot;Sound&quot;],&quot;star&quot;:false,&quot;vendor&quot;:&quot;Inertia Fashion&quot;,&quot;publishedOn&quot;:&quot;Nov 8, 5:32 PM&quot;}"></div>
                                </td>
                                <td class="align-middle white-space-nowrap py-0">
                                    <a class="d-block border border-translucent rounded-2" href="../../../apps/e-commerce/landing/product-details.html">
                                        <img src="https://prium.github.io/phoenix/v1.18.0/assets/img//products/5.png" alt="" width="53"></a>
                                </td>
                                <td class="product align-middle ps-4">
                                    <a class="fw-semibold line-clamp-3 mb-0" href="../../../apps/e-commerce/landing/product-details.html">Razer Kraken v3 x Wired 7.1 Surroung Sound Gaming headset</a>
                                </td>
                                <td class="price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4">$120</td>
                                <td class="category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold">Fashion</td>
                                <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;">
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Music</span></a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Audio</span></a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Meeting</span></a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Record</span></a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Sound</span></a>
                                </td>
                                <td class="align-middle review fs-8 text-center ps-4">
                                    <div class="d-toggle-container">
                                        <div class="d-block-hover"><svg class="svg-inline--fa fa-star text-warning" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                            </svg><!-- <span class="fas fa-star text-warning"></span> Font Awesome fontawesome.com --></div>
                                        <div class="d-none-hover"><svg class="svg-inline--fa fa-star text-warning" aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"></path>
                                            </svg><!-- <span class="far fa-star text-warning"></span> Font Awesome fontawesome.com --></div>
                                    </div>
                                </td>
                                <td class="vendor align-middle text-start fw-semibold ps-4"><a href="#!">Inertia Fashion</a></td>
                                <td class="time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4">Nov 8, 5:32 PM</td>
                                <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                    <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                            <a class="dropdown-item" href="#!">View</a>
                                            <a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="position-static">
                                <td class="fs-9 align-middle">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;product&quot;:&quot;PlayStation 5 DualSense Wireless Controller&quot;,&quot;productImage&quot;:&quot;/products/6.png&quot;,&quot;price&quot;:&quot;$239&quot;,&quot;category&quot;:&quot;Gadgets&quot;,&quot;tags&quot;:[&quot;Game&quot;,&quot;Control&quot;,&quot;Nav&quot;,&quot;Playstation&quot;,&quot;Wireless&quot;],&quot;star&quot;:false,&quot;vendor&quot;:&quot;FutureTech Inc&quot;,&quot;publishedOn&quot;:&quot;Nov 6, 11:34 PM&quot;}"></div>
                                </td>
                                <td class="align-middle white-space-nowrap py-0">
                                    <a class="d-block border border-translucent rounded-2" href="../../../apps/e-commerce/landing/product-details.html">
                                        <img src="https://prium.github.io/phoenix/v1.18.0/assets/img//products/10.png" alt="" width="53"></a>
                                </td>
                                <td class="product align-middle ps-4">
                                    <a class="fw-semibold line-clamp-3 mb-0" href="../../../apps/e-commerce/landing/product-details.html">PlayStation 5 DualSense Wireless Controller</a>
                                </td>
                                <td class="price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4">$239</td>
                                <td class="category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold">Gadgets</td>
                                <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;">
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Game</span></a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Control</span></a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Nav</span></a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Playstation</span></a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Wireless</span></a>
                                </td>
                                <td class="align-middle review fs-8 text-center ps-4">
                                    <div class="d-toggle-container">
                                        <div class="d-block-hover"><svg class="svg-inline--fa fa-star text-warning" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                            </svg><!-- <span class="fas fa-star text-warning"></span> Font Awesome fontawesome.com --></div>
                                        <div class="d-none-hover"><svg class="svg-inline--fa fa-star text-warning" aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"></path>
                                            </svg><!-- <span class="far fa-star text-warning"></span> Font Awesome fontawesome.com --></div>
                                    </div>
                                </td>
                                <td class="vendor align-middle text-start fw-semibold ps-4"><a href="#!">FutureTech Inc</a></td>
                                <td class="time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4">Nov 6, 11:34 PM</td>
                                <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                    <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                            <a class="dropdown-item" href="#!">View</a>
                                            <a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="position-static">
                                <td class="fs-9 align-middle">
                                    <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;product&quot;:&quot;2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) - Space Gray&quot;,&quot;productImage&quot;:&quot;/products/7.png&quot;,&quot;price&quot;:&quot;$4&quot;,&quot;category&quot;:&quot;Food&quot;,&quot;tags&quot;:[&quot;Ipad&quot;,&quot;Pro&quot;,&quot;Creativity&quot;,&quot;Thunderbolt&quot;,&quot;Space&quot;],&quot;star&quot;:false,&quot;vendor&quot;:&quot;Maimuna’s Bakery&quot;,&quot;publishedOn&quot;:&quot;Nov 1, 7:45 AM&quot;}"></div>
                                </td>
                                <td class="align-middle white-space-nowrap py-0">
                                    <a class="d-block border border-translucent rounded-2" href="../../../apps/e-commerce/landing/product-details.html">
                                        <img src="https://prium.github.io/phoenix/v1.18.0/assets/img//products/12.png" alt="" width="53"></a>
                                </td>
                                <td class="product align-middle ps-4">
                                    <a class="fw-semibold line-clamp-3 mb-0" href="../../../apps/e-commerce/landing/product-details.html">2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) - Space Gray</a>
                                </td>
                                <td class="price align-middle white-space-nowrap text-end fw-bold text-body-tertiary ps-4">$4</td>
                                <td class="category align-middle white-space-nowrap text-body-quaternary fs-9 ps-4 fw-semibold">Food</td>
                                <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;">
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Ipad</span></a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Pro</span></a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Creativity</span></a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Thunderbolt</span></a>
                                    <a class="text-decoration-none" href="#!">
                                        <span class="badge badge-tag me-2 mb-2">Space</span></a>
                                </td>
                                <td class="align-middle review fs-8 text-center ps-4">
                                    <div class="d-toggle-container">
                                        <div class="d-block-hover"><svg class="svg-inline--fa fa-star text-warning" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                            </svg><!-- <span class="fas fa-star text-warning"></span> Font Awesome fontawesome.com --></div>
                                        <div class="d-none-hover"><svg class="svg-inline--fa fa-star text-warning" aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"></path>
                                            </svg><!-- <span class="far fa-star text-warning"></span> Font Awesome fontawesome.com --></div>
                                    </div>
                                </td>
                                <td class="vendor align-middle text-start fw-semibold ps-4"><a href="#!">Maimuna’s Bakery</a></td>
                                <td class="time align-middle white-space-nowrap text-body-tertiary text-opacity-85 ps-4">Nov 1, 7:45 AM</td>
                                <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                    <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                            <a class="dropdown-item" href="#!">View</a>
                                            <a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#!">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                    <div class="col-auto d-flex">
                        <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info">1 to 10 <span class="text-body-tertiary"> Items of </span>16</p>
                        <a class="fw-semibold" href="#!" data-list-view="*">View all<svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5625em;">
                                <g transform="translate(160 256)">
                                    <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                                        <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" transform="translate(-160 -256)"></path>
                                    </g>
                                </g>
                            </svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a>
                        <a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5625em;">
                                <g transform="translate(160 256)">
                                    <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                                        <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" transform="translate(-160 -256)"></path>
                                    </g>
                                </g>
                            </svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a>
                    </div>
                    <div class="col-auto d-flex table-bottom mb-2">
                        <button class="page-link disabled" data-list-pagination="prev" disabled=""><svg class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"></path>
                            </svg>
                        </button>
                        <ul class="mb-0 pagination px-2">
                            <li class="active px-1">
                                <button class="page" type="button" data-i="1" data-page="10">1</button>
                            </li>
                            <li class="px-1">
                                <button class="page" type="button" data-i="2" data-page="10">2</button>
                            </li>
                        </ul>
                        <button class="page-link pe-0" data-list-pagination="next">
                            <svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection