@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="order_details">
        <div class="p-md-4 p-3">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Page 1</a></li>
                    <li class="breadcrumb-item"><a href="#">Page 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
            </nav>
            <h2 class="mb-0">Order #349</h2>
            <div class="d-flex justify-content-between flex-wrap mb-3">
                <p class="customer-id mb-0 mt-2 mt-sm-0">Customer ID : <a class="fw-bold" href="#!"> 2364847</a></p>
                <div class="d-flex">
                    <button class="btn btn-outline-secondary px-3 mx-1 text-body">
                        <svg class="svg-inline--fa fa-print me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="print" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M128 0C92.7 0 64 28.7 64 64v96h64V64H354.7L384 93.3V160h64V93.3c0-17-6.7-33.3-18.7-45.3L400 18.7C388 6.7 371.7 0 354.7 0H128zM384 352v32 64H128V384 368 352H384zm64 32h32c17.7 0 32-14.3 32-32V256c0-35.3-28.7-64-64-64H64c-35.3 0-64 28.7-64 64v96c0 17.7 14.3 32 32 32H64v64c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V384zM432 248a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"></path>
                        </svg>
                        Print
                    </button>
                    <button class="btn btn-outline-secondary px-3 mx-1 text-body">
                        <svg class="svg-inline--fa fa-arrow-rotate-left me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-rotate-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M125.7 160H176c17.7 0 32 14.3 32 32s-14.3 32-32 32H48c-17.7 0-32-14.3-32-32V64c0-17.7 14.3-32 32-32s32 14.3 32 32v51.2L97.6 97.6c87.5-87.5 229.3-87.5 316.8 0s87.5 229.3 0 316.8s-229.3 87.5-316.8 0c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0c62.5 62.5 163.8 62.5 226.3 0s62.5-163.8 0-226.3s-163.8-62.5-226.3 0L125.7 160z"></path>
                        </svg>
                        Refund
                    </button>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary text-body dropdown-toggle px-3 mx-1 " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            More action
                            <svg class="svg-inline--fa fa-chevron-down ms-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"></path>
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
            <div class="row">
                <div class="col-xl-8 col-12">
                    <div id="orderTable">
                        <div class="table-responsive scrollbar">
                            <table class="table fs-9 mb-0 border-top border-translucent">
                                <thead>
                                    <tr>
                                        <th class="sort white-space-nowrap align-middle fs-10" scope="col"></th>
                                        <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:400px;" data-sort="products">PRODUCTS</th>
                                        <th class="sort align-middle ps-4" scope="col" data-sort="color" style="width:150px;">COLOR</th>
                                        <th class="sort align-middle ps-4" scope="col" data-sort="size" style="width:300px;">SIZE</th>
                                        <th class="sort align-middle text-end ps-4" scope="col" data-sort="price" style="width:150px;">PRICE</th>
                                        <th class="sort align-middle text-end ps-4" scope="col" data-sort="quantity" style="width:200px;">QUANTITY</th>
                                        <th class="sort align-middle text-end ps-4" scope="col" data-sort="total" style="width:250px;">TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="order-table-body">
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="align-middle white-space-nowrap py-2"><a class="d-block border border-translucent rounded-2" href="../../../apps/e-commerce/landing/product-details.html"><img src="https://prium.github.io/phoenix/v1.18.0/assets/img//products/1.png" alt="" width="53"></a></td>
                                        <td class="products align-middle py-0"><a class="fw-semibold line-clamp-2 mb-0" href="../../../apps/e-commerce/landing/product-details.html">Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature Trends, Carbon/Graphite, One Size (S &amp; L Bands)</a></td>
                                        <td class="color align-middle white-space-nowrap text-body py-0 ps-4">Pure matte black</td>
                                        <td class="size align-middle white-space-nowrap text-body-tertiary fw-semibold py-0 ps-4">42</td>
                                        <td class="price align-middle text-body fw-semibold text-end py-0 ps-4">$57</td>
                                        <td class="quantity align-middle text-end py-0 ps-4 text-body-tertiary">4</td>
                                        <td class="total align-middle fw-bold text-body-highlight text-end py-0 ps-4">$228</td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="align-middle white-space-nowrap py-2"><a class="d-block border border-translucent rounded-2" href="../../../apps/e-commerce/landing/product-details.html"><img src="https://prium.github.io/phoenix/v1.18.0/assets/img//products/2.png" alt="" width="53"></a></td>
                                        <td class="products align-middle py-0"><a class="fw-semibold line-clamp-2 mb-0" href="../../../apps/e-commerce/landing/product-details.html">iPhone 13 pro max-Pacific Blue-128GB storage</a></td>
                                        <td class="color align-middle white-space-nowrap text-body py-0 ps-4">Glossy black</td>
                                        <td class="size align-middle white-space-nowrap text-body-tertiary fw-semibold py-0 ps-4">XL</td>
                                        <td class="price align-middle text-body fw-semibold text-end py-0 ps-4">$199</td>
                                        <td class="quantity align-middle text-end py-0 ps-4 text-body-tertiary">2</td>
                                        <td class="total align-middle fw-bold text-body-highlight text-end py-0 ps-4">$398</td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="align-middle white-space-nowrap py-2"><a class="d-block border border-translucent rounded-2" href="../../../apps/e-commerce/landing/product-details.html"><img src="https://prium.github.io/phoenix/v1.18.0/assets/img//products/3.png" alt="" width="53"></a></td>
                                        <td class="products align-middle py-0"><a class="fw-semibold line-clamp-2 mb-0" href="../../../apps/e-commerce/landing/product-details.html">Apple MacBook Pro 13 inch-M1-8/256GB-space</a></td>
                                        <td class="color align-middle white-space-nowrap text-body py-0 ps-4">Glossy black</td>
                                        <td class="size align-middle white-space-nowrap text-body-tertiary fw-semibold py-0 ps-4">L</td>
                                        <td class="price align-middle text-body fw-semibold text-end py-0 ps-4">$600</td>
                                        <td class="quantity align-middle text-end py-0 ps-4 text-body-tertiary">1</td>
                                        <td class="total align-middle fw-bold text-body-highlight text-end py-0 ps-4">$600</td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="align-middle white-space-nowrap py-2"><a class="d-block border border-translucent rounded-2" href="../../../apps/e-commerce/landing/product-details.html"><img src="https://prium.github.io/phoenix/v1.18.0/assets/img//products/4.png" alt="" width="53"></a></td>
                                        <td class="products align-middle py-0"><a class="fw-semibold line-clamp-2 mb-0" href="../../../apps/e-commerce/landing/product-details.html">Apple iMac 24" 4K Retina Display M1 8 Core CPU, 7 Core GPU, 256GB SSD, Green (MJV83ZP/A) 2021</a></td>
                                        <td class="color align-middle white-space-nowrap text-body py-0 ps-4">Gray</td>
                                        <td class="size align-middle white-space-nowrap text-body-tertiary fw-semibold py-0 ps-4">22</td>
                                        <td class="price align-middle text-body fw-semibold text-end py-0 ps-4">$250</td>
                                        <td class="quantity align-middle text-end py-0 ps-4 text-body-tertiary">2</td>
                                        <td class="total align-middle fw-bold text-body-highlight text-end py-0 ps-4">$500</td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="align-middle white-space-nowrap py-2"><a class="d-block border border-translucent rounded-2" href="../../../apps/e-commerce/landing/product-details.html"><img src="https://prium.github.io/phoenix/v1.18.0/assets/img//products/5.png" alt="" width="53"></a></td>
                                        <td class="products align-middle py-0"><a class="fw-semibold line-clamp-2 mb-0" href="../../../apps/e-commerce/landing/product-details.html">Razer Kraken v3 x Wired 7.1 Surroung Sound Gaming headset</a></td>
                                        <td class="color align-middle white-space-nowrap text-body py-0 ps-4">Black</td>
                                        <td class="size align-middle white-space-nowrap text-body-tertiary fw-semibold py-0 ps-4">L</td>
                                        <td class="price align-middle text-body fw-semibold text-end py-0 ps-4">$49</td>
                                        <td class="quantity align-middle text-end py-0 ps-4 text-body-tertiary">3</td>
                                        <td class="total align-middle fw-bold text-body-highlight text-end py-0 ps-4">$147</td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="align-middle white-space-nowrap py-2"><a class="d-block border border-translucent rounded-2" href="../../../apps/e-commerce/landing/product-details.html"><img src="https://prium.github.io/phoenix/v1.18.0/assets/img//products/6.png" alt="" width="53"></a></td>
                                        <td class="products align-middle py-0"><a class="fw-semibold line-clamp-2 mb-0" href="../../../apps/e-commerce/landing/product-details.html">PlayStation 5 DualSense Wireless Controller</a></td>
                                        <td class="color align-middle white-space-nowrap text-body py-0 ps-4">Green Golden</td>
                                        <td class="size align-middle white-space-nowrap text-body-tertiary fw-semibold py-0 ps-4">Regular</td>
                                        <td class="price align-middle text-body fw-semibold text-end py-0 ps-4">$65</td>
                                        <td class="quantity align-middle text-end py-0 ps-4 text-body-tertiary">2</td>
                                        <td class="total align-middle fw-bold text-body-highlight text-end py-0 ps-4">$130</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mt-2 gx-4 gy-6 g-xl-7 justify-content-sm-center justify-content-xl-start">
                        <div class="col-12 col-sm-6 mt-4">
                            <h4 class="mb-5">Billing details</h4>
                            <div class="row g-4 flex-sm-column">
                                <div class="col-6 col-sm-12">
                                    <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user me-2" style="stroke-width:2.5;">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <h6 class="mb-0">Customer</h6>
                                    </div><a class="d-block fs-9 ms-4" href="#!">Shatinon Mekalan</a>
                                </div>
                                <div class="col-6 col-sm-12">
                                    <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail me-2" style="stroke-width:2.5;">
                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <h6 class="mb-0">Email</h6>
                                    </div><a class="d-block fs-9 ms-4" href="mailto:shatinon@jeemail.com:">shatinon@jeemail.com</a>
                                </div>
                                <div class="col-6 col-sm-12 order-sm-1">
                                    <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home me-2" style="stroke-width:2.5;">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg>
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-body-secondary mb-0 fs-9">Shatinon Mekalan</p>
                                        <p class="text-body-secondary mb-0 fs-9">Vancouver, British Columbia,<br class="d-none d-sm-block">Canada</p>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-12">
                                    <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone me-2" style="stroke-width:2.5;">
                                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                        </svg>
                                        <h6 class="mb-0">Phone</h6>
                                    </div><a class="d-block fs-9 ms-4" href="tel:+1234567890">+1234567890</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 mt-4">
                            <h4 class="mb-5">Shipping details</h4>
                            <div class="row g-4 flex-sm-column">
                                <div class="col-6 col-sm-12">
                                    <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail me-2" style="stroke-width:2.5;">
                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <h6 class="mb-0">Email</h6>
                                    </div><a class="d-block fs-9 ms-4" href="mailto:shatinon@jeemail.com:">shatinon@jeemail.com</a>
                                </div>
                                <div class="col-6 col-sm-12">
                                    <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone me-2" style="stroke-width:2.5;">
                                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                        </svg>
                                        <h6 class="mb-0">Phone</h6>
                                    </div><a class="d-block fs-9 ms-4" href="tel:+1234567890">+1234567890</a>
                                </div>
                                <div class="col-6 col-sm-12 order-sm-1">
                                    <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home me-2" style="stroke-width:2.5;">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg>
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-body-secondary mb-0 fs-9">Shatinon Mekalan</p>
                                        <p class="text-body-secondary mb-0 fs-9">Vancouver, British Columbia <br>Canada</p>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-12">
                                    <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar me-2" style="stroke-width:2.5;">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg>
                                        <h6 class="mb-0">Shipping Date</h6>
                                    </div>
                                    <p class="mb-0 text-body-secondary fs-9 ms-4">12 Nov, 2021</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 mt-4">
                            <h4 class="mb-5">Other details</h4>
                            <div class="row g-4 flex-sm-column">
                                <div class="col-6 col-sm-12">
                                    <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag me-2" style="stroke-width:2.5;">
                                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                            <line x1="3" y1="6" x2="21" y2="6"></line>
                                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                                        </svg>
                                        <h6 class="mb-0">Gift order</h6>
                                    </div>
                                    <p class="mb-0 text-body-secondary fs-9 ms-4">Yes</p>
                                </div>
                                <div class="col-6 col-sm-12">
                                    <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package me-2" style="stroke-width:2.5;">
                                            <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
                                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                        </svg>
                                        <h6 class="mb-0">Wraping</h6>
                                    </div>
                                    <p class="mb-0 text-body-secondary fs-9 ms-4">Magic wrapper</p>
                                </div>
                                <div class="col-6 col-sm-12">
                                    <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text me-2" style="stroke-width:2.5;">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" y1="13" x2="8" y2="13"></line>
                                            <line x1="16" y1="17" x2="8" y2="17"></line>
                                            <polyline points="10 9 9 9 8 9"></polyline>
                                        </svg>
                                        <h6 class="mb-0">Recipient</h6>
                                    </div>
                                    <p class="mb-0 text-body-secondary fs-9 ms-4">Monjito Shiniga</p>
                                </div>
                                <div class="col-6 col-sm-12">
                                    <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail me-2" style="stroke-width:2.5;">
                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <h6 class="mb-0">Gift Meaasge</h6>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-body-secondary fs-9 mb-0">Happy Birthday Shiniga <br>Lots of Love Buga Buga!!</p>
                                        <p class="mb-0 text-body-secondary fs-9">Yours, <br>Mekalan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-12">
                <div class="row">
                <div class="col-12">
                  <div class="card mb-3">
                    <div class="card-body">
                      <h3 class="card-title mb-4">Summary</h3>
                      <div>
                        <div class="d-flex justify-content-between">
                          <p class="text-body fw-semibold">Items subtotal :</p>
                          <p class="text-body-emphasis fw-semibold">$691</p>
                        </div>
                        <div class="d-flex justify-content-between">
                          <p class="text-body fw-semibold">Discount :</p>
                          <p class="text-danger fw-semibold">-$59</p>
                        </div>
                        <div class="d-flex justify-content-between">
                          <p class="text-body fw-semibold">Tax :</p>
                          <p class="text-body-emphasis fw-semibold">$126.20</p>
                        </div>
                        <div class="d-flex justify-content-between">
                          <p class="text-body fw-semibold">Subtotal :</p>
                          <p class="text-body-emphasis fw-semibold">$665</p>
                        </div>
                        <div class="d-flex justify-content-between">
                          <p class="text-body fw-semibold">Shipping Cost :</p>
                          <p class="text-body-emphasis fw-semibold">$30</p>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between border-top border-translucent border-dashed pt-4">
                        <h4 class="mb-0">Total :</h4>
                        <h4 class="mb-0">$695.20</h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h3 class="card-title mb-4">Order Status</h3>
                      <h6 class="mb-2">Payment status</h6><select class="form-select mb-4" aria-label="delivery type">
                        <option value="cod">Processing</option>
                        <option value="card">Canceled</option>
                        <option value="paypal">Completed</option>
                      </select>
                      <h6 class="mb-2">Fulfillment status</h6><select class="form-select" aria-label="delivery type">
                        <option value="cod">Unfulfilled</option>
                        <option value="card">Fulfilled</option>
                        <option value="paypal">Pending</option>
                      </select>
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