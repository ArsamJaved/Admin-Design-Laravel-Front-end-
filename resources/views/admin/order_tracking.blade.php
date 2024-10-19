@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="order-tracking">
        <div class="p-md-4 p-3">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Page 1</a></li>
                    <li class="breadcrumb-item"><a href="#">Page 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
            </nav>
            <div class="d-flex flex-wrap justify-content-between align-items-end mb-5">
                <div>
                    <h2>Order #234 Status</h2>
                    <p class="text-body-secondary mb-0">Payment Via <a class="fw-bold" href="#!">Cash on delivery</a>
                        <br class="d-sm-none">
                        <span class="ms-sm-1">Nov 12, 2021, 8:54AM.</span>
                    </p>
                </div>
                <button class="btn btn-outline-primary mt-3"><svg class="svg-inline--fa fa-phone me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                    </svg>
                    Call Support
                </button>
            </div>
            <div class="row gy-9 gx-5">
                <div class="col-md-6 col-12">
                    <div style="width: 100%">
                        <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps tracker sport</a></iframe></div>
                </div>
                <div class="col-lg-6 col-12 d-flex justify-content-center">
                    <div class="timeline-vertical">
                        <div class="timeline-item">
                            <div class="row g-md-3 align-items-center mb-8 mb-lg-10">
                                <div class="col-12 col-md-auto d-flex">
                                    <div class="timeline-item-date text-end order-1 order-md-0 me-md-4">
                                        <p class="fs-10 fw-semibold text-body-tertiary mb-0">23 August, 2023<br class="d-none d-md-block"> 10:30 AM</p>
                                    </div>
                                    <div class="timeline-item-bar position-relative me-3 me-md-0">
                                        <div class="icon-item icon-item-sm bg-success" data-bs-theme="light"><svg class="svg-inline--fa fa-check text-white fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                            </svg><!-- <span class="fa-solid fa-check text-white fs-10"></span> Font Awesome fontawesome.com --></div><span class="timeline-bar border-end border-success"></span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="timeline-item-content ps-6 ps-md-3">
                                        <h4>Order is processing</h4>
                                        <p class="fs-9 text-body-secondary mb-0">Your package is ready for the seller to prepare.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row g-md-3 align-items-center mb-8 mb-lg-10">
                                <div class="col-12 col-md-auto d-flex">
                                    <div class="timeline-item-date text-end order-1 order-md-0 me-md-4">
                                        <p class="fs-10 fw-semibold text-body-tertiary mb-0">25 August, 2023<br class="d-none d-md-block"> 11:30 AM</p>
                                    </div>
                                    <div class="timeline-item-bar position-relative me-3 me-md-0">
                                        <div class="icon-item icon-item-sm bg-success" data-bs-theme="light"><svg class="svg-inline--fa fa-check text-white fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                            </svg><!-- <span class="fa-solid fa-check text-white fs-10"></span> Font Awesome fontawesome.com --></div><span class="timeline-bar border-end border-warning"></span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="timeline-item-content ps-6 ps-md-3">
                                        <h4>Picked Up</h4>
                                        <p class="fs-9 text-body-secondary mb-0">Your package has been picked up from the seller.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row g-md-3 align-items-center mb-8 mb-lg-10">
                                <div class="col-12 col-md-auto d-flex">
                                    <div class="timeline-item-date text-end order-1 order-md-0 me-md-4">
                                        <p class="fs-10 fw-semibold text-body-tertiary mb-0">27 August, 2023<br class="d-none d-md-block"> 6:30 AM</p>
                                    </div>
                                    <div class="timeline-item-bar position-relative me-3 me-md-0">
                                        <div class="icon-item icon-item-sm bg-warning" data-bs-theme="light"><svg class="svg-inline--fa fa-truck-ramp-box text-white fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="truck-ramp-box" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M640 0V400c0 61.9-50.1 112-112 112c-61 0-110.5-48.7-112-109.3L48.4 502.9c-17.1 4.6-34.6-5.4-39.3-22.5s5.4-34.6 22.5-39.3L352 353.8V64c0-35.3 28.7-64 64-64H640zM576 400a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM23.1 207.7c-4.6-17.1 5.6-34.6 22.6-39.2l46.4-12.4 20.7 77.3c2.3 8.5 11.1 13.6 19.6 11.3l30.9-8.3c8.5-2.3 13.6-11.1 11.3-19.6l-20.7-77.3 46.4-12.4c17.1-4.6 34.6 5.6 39.2 22.6l41.4 154.5c4.6 17.1-5.6 34.6-22.6 39.2L103.7 384.9c-17.1 4.6-34.6-5.6-39.2-22.6L23.1 207.7z"></path>
                                            </svg><!-- <span class="fa-solid fa-truck-ramp-box text-white fs-10"></span> Font Awesome fontawesome.com --></div><span class="timeline-bar border-end border-dashed"></span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="timeline-item-content ps-6 ps-md-3">
                                        <h4>Ready to Ship</h4>
                                        <p class="fs-9 text-body-secondary mb-0">Your package is now ready to be shipped.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row g-md-3 align-items-center mb-8 mb-lg-10">
                                <div class="col-12 col-md-auto d-flex">
                                    <div class="timeline-item-date text-end order-1 order-md-0 me-md-4">
                                        <p class="fs-10 fw-semibold text-body-tertiary mb-0">Estimated time<br class="d-none d-md-block"> 29 August, 2023</p>
                                    </div>
                                    <div class="timeline-item-bar position-relative me-3 me-md-0">
                                        <div class="icon-item icon-item-sm bg-secondary-subtle" data-bs-theme="light"><svg class="svg-inline--fa fa-truck text-white fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="truck" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M48 0C21.5 0 0 21.5 0 48V368c0 26.5 21.5 48 48 48H64c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H48zM416 160h50.7L544 237.3V256H416V160zM112 416a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm368-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                            </svg><!-- <span class="fa-solid fa-truck text-white fs-10"></span> Font Awesome fontawesome.com --></div><span class="timeline-bar border-end border-dashed"></span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="timeline-item-content ps-6 ps-md-3">
                                        <h4>Shipped</h4>
                                        <p class="fs-9 text-body-secondary mb-0">Pending</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="row g-md-3 align-items-center">
                                <div class="col-12 col-md-auto d-flex">
                                    <div class="timeline-item-date text-end order-1 order-md-0 me-md-4">
                                        <p class="fs-10 fw-semibold text-body-tertiary mb-0">Estimated time<br class="d-none d-md-block"> 30 August, 2023</p>
                                    </div>
                                    <div class="timeline-item-bar position-relative me-3 me-md-0">
                                        <div class="icon-item icon-item-sm bg-secondary-subtle" data-bs-theme="light"><svg class="svg-inline--fa fa-truck-fast text-white fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="truck-fast" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M112 0C85.5 0 64 21.5 64 48V96H16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 272c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 48c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 240c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 208c8.8 0 16 7.2 16 16s-7.2 16-16 16H64V416c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H112zM544 237.3V256H416V160h50.7L544 237.3zM160 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm272 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0z"></path>
                                            </svg><!-- <span class="fa-solid fa-truck-fast text-white fs-10"></span> Font Awesome fontawesome.com --></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="timeline-item-content ps-6 ps-md-3">
                                        <h4>Delivered</h4>
                                        <p class="fs-9 text-body-secondary mb-0">Pending</p>
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