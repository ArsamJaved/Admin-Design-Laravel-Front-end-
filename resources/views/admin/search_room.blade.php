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
                    <li class="breadcrumb-item active" aria-current="page">Search Room</li>
                </ol>
            </nav>
            <div class="row align-items-center mb-5 gy-3">
                <div class="col" style="max-width: 290px">
                    <h3 class="fw-bold">Rooms</h3>
                </div>
                <div class="col-xl">
                    <div class="row gx-2 gx-xl-3 gy-3">
                        <div class="col-sm-auto order-1 order-sm-0 me-sm-2 d-xl-none"><button class="btn btn-lg btn-outline-secondary text-body-tertiary w-100" data-phoenix-toggle="offcanvas" data-phoenix-target="#roomFilterColumn"> <svg class="svg-inline--fa fa-filter me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="filter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z"></path>
                                </svg>Filter</button></div>
                        <div class="col col-sm-5 col-xxl-3">
                            <div class="mb-3">
                                <input type="date" class="form-control py-2" id="exampleFormControlInput1" placeholder="11/09/1024">
                            </div>
                        </div>
                        <div class="col col-sm-auto flex-grow-0">
                            <button class="btn btn-lg btn-outline-primary px-xxl-6 text-nowrap"><span class="d-none d-xl-inline-block">Update </span><svg class="svg-inline--fa fa-magnifying-glass fs-9 ms-xl-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="col col-sm-auto ms-auto flex-grow-0">
                            <button class="btn btn-lg btn-outline-secondary ms-auto text-nowrap"><span class="d-none d-xl-inline-block">Refresh </span><svg class="svg-inline--fa fa-rotate fs-9 ms-xl-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="rotate" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M142.9 142.9c62.2-62.2 162.7-62.5 225.3-1L327 183c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8H463.5c0 0 0 0 0 0H472c13.3 0 24-10.7 24-24V72c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2L413.4 96.6c-87.6-86.5-228.7-86.2-315.8 1C73.2 122 55.6 150.7 44.8 181.4c-5.9 16.7 2.9 34.9 19.5 40.8s34.9-2.9 40.8-19.5c7.7-21.8 20.2-42.3 37.8-59.8zM16 312v7.6 .7V440c0 9.7 5.8 18.5 14.8 22.2s19.3 1.7 26.2-5.2l41.6-41.6c87.6 86.5 228.7 86.2 315.8-1c24.4-24.4 42.1-53.1 52.9-83.7c5.9-16.7-2.9-34.9-19.5-40.8s-34.9 2.9-40.8 19.5c-7.7 21.8-20.2 42.3-37.8 59.8c-62.2 62.2-162.7 62.5-225.3 1L185 329c6.9-6.9 8.9-17.2 5.2-26.2s-12.5-14.8-22.2-14.8H48.4h-.7H40c-13.3 0-24 10.7-24 24z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="phoenix-offcanvas-filter-xl phoenix-offcanvas phoenix-offcanvas-fixed scrollbar overflow-x-hidden" id="roomFilterColumn">
                        <div class="pe-1" data-collapse-all="data-collapse-all">
                            <div class="d-flex align-items-center">
                                <h3 class="text-body-highlight">Filters</h3><button class="btn btn-phoenix-secondary px-3 ms-auto me-2 me-xl-0" data-btn-collapse-all="data-btn-collapse-all">Collapse all</button><button class="btn d-xl-none p-0" data-phoenix-dismiss="offcanvas"><span class="uil uil-times fs-8"></span></button>
                            </div><a class="btn collapse-indicator px-0 py-2 d-flex align-items-center mt-3" data-bs-toggle="collapse" href="#collapsePriceRange" role="button" aria-expanded="true" aria-controls="collapsePriceRange"><svg class="svg-inline--fa fa-caret-down toggle-icon text-body me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"></path>
                                </svg><!-- <span class="fa-solid fa-caret-down toggle-icon text-body me-2"></span> Font Awesome fontawesome.com -->
                                <h5 class="text-body-highlight">Price Range</h5>
                            </a>
                            <div class="collapse show" id="collapsePriceRange">
                                <div class="border-bottom pb-4 pt-1">
                                    <div class="noUi-target-primary noUi-handle-primary noUi-slider-slim noUi-handle-circle bg-primary-subtle px-2 mb-3 noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" data-nouislider="{&quot;range&quot;:{&quot;min&quot;:500,&quot;max&quot;:2000},&quot;start&quot;:[699,1299],&quot;connect&quot;:true}">
                                        <div class="noUi-base">
                                            <div class="noUi-connects">
                                                <div class="noUi-connect" style="transform: translate(13.2667%, 0px) scale(0.4, 1);"></div>
                                            </div>
                                            <div class="noUi-origin" style="transform: translate(-86.7333%, 0px); z-index: 5;">
                                                <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="500.0" aria-valuemax="1299.0" aria-valuenow="699.0" aria-valuetext="699.00">
                                                    <div class="noUi-touch-area"></div>
                                                    <div class="noUi-tooltip">699.00</div>
                                                </div>
                                            </div>
                                            <div class="noUi-origin" style="transform: translate(-46.7333%, 0px); z-index: 4;">
                                                <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="699.0" aria-valuemax="2000.0" aria-valuenow="1299.0" aria-valuetext="1299.00">
                                                    <div class="noUi-touch-area"></div>
                                                    <div class="noUi-tooltip">1299.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <div class="form-floating"><input class="form-control input-spin-none" type="number" name="price-range-min" id="price-range-min" placeholder="Min" value="699"><label for="price-range-min">Min</label></div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating"><input class="form-control input-spin-none" type="number" name="price-range-max" id="price-range-max" placeholder="Max" value="1299"><label for="price-range-max">Max</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><a class="btn collapse-indicator px-0 py-2 d-flex align-items-center mt-3" data-bs-toggle="collapse" href="#collapseAdult" role="button" aria-expanded="true" aria-controls="collapseAdult"><svg class="svg-inline--fa fa-caret-down toggle-icon text-body me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"></path>
                                </svg><!-- <span class="fa-solid fa-caret-down toggle-icon text-body me-2"></span> Font Awesome fontawesome.com -->
                                <h5 class="text-body-highlight">Adult</h5>
                            </a>
                            <div class="collapse show" id="collapseAdult">
                                <div class="border-bottom pb-4">
                                    <div class="input-group gap-2" data-quantity="data-quantity"><button class="btn btn-phoenix-primary px-3 rounded" data-type="minus"><svg class="svg-inline--fa fa-minus px-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="minus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"></path>
                                            </svg><!-- <span class="fa-solid fa-minus px-1"></span> Font Awesome fontawesome.com --></button><input class="form-control form-control-lg border-translucent input-spin-none text-center rounded" id="adult" type="number" value="2"><button class="btn btn-phoenix-primary px-3 rounded" data-type="plus"><svg class="svg-inline--fa fa-plus px-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                            </svg><!-- <span class="fa-solid fa-plus px-1"></span> Font Awesome fontawesome.com --></button></div>
                                </div>
                            </div><a class="btn collapse-indicator px-0 py-2 d-flex align-items-center mt-3" data-bs-toggle="collapse" href="#collapseChild" role="button" aria-expanded="true" aria-controls="collapseChild"><svg class="svg-inline--fa fa-caret-down toggle-icon text-body me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"></path>
                                </svg><!-- <span class="fa-solid fa-caret-down toggle-icon text-body me-2"></span> Font Awesome fontawesome.com -->
                                <h5 class="text-body-highlight">Child</h5>
                            </a>
                            <div class="collapse show" id="collapseChild">
                                <div class="border-bottom pb-4">
                                    <div class="input-group gap-2" data-quantity="data-quantity"><button class="btn btn-phoenix-primary px-3 rounded" data-type="minus"><svg class="svg-inline--fa fa-minus px-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="minus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"></path>
                                            </svg><!-- <span class="fa-solid fa-minus px-1"></span> Font Awesome fontawesome.com --></button><input class="form-control form-control-lg border-translucent input-spin-none text-center rounded" id="child" type="number" value="2"><button class="btn btn-phoenix-primary px-3 rounded" data-type="plus"><svg class="svg-inline--fa fa-plus px-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                            </svg><!-- <span class="fa-solid fa-plus px-1"></span> Font Awesome fontawesome.com --></button></div>
                                </div>
                            </div><a class="btn collapse-indicator px-0 py-2 d-flex align-items-center mt-3" data-bs-toggle="collapse" href="#collapseBedroom" role="button" aria-expanded="true" aria-controls="collapseBedroom"><svg class="svg-inline--fa fa-caret-down toggle-icon text-body me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"></path>
                                </svg><!-- <span class="fa-solid fa-caret-down toggle-icon text-body me-2"></span> Font Awesome fontawesome.com -->
                                <h5 class="text-body-highlight">Bedroom</h5>
                            </a>
                            <div class="collapse show" id="collapseBedroom">
                                <div class="border-bottom pb-4">
                                    <div class="input-group gap-2" data-quantity="data-quantity"><button class="btn btn-phoenix-primary px-3 rounded" data-type="minus"><svg class="svg-inline--fa fa-minus px-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="minus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"></path>
                                            </svg><!-- <span class="fa-solid fa-minus px-1"></span> Font Awesome fontawesome.com --></button><input class="form-control form-control-lg border-translucent input-spin-none text-center rounded" id="bedroom" type="number" value="2"><button class="btn btn-phoenix-primary px-3 rounded" data-type="plus"><svg class="svg-inline--fa fa-plus px-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                            </svg><!-- <span class="fa-solid fa-plus px-1"></span> Font Awesome fontawesome.com --></button></div>
                                </div>
                            </div><a class="btn collapse-indicator px-0 py-2 d-flex align-items-center mt-3" data-bs-toggle="collapse" href="#collapseNumOfBed" role="button" aria-expanded="true" aria-controls="collapseNumOfBed"><svg class="svg-inline--fa fa-caret-down toggle-icon text-body me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"></path>
                                </svg><!-- <span class="fa-solid fa-caret-down toggle-icon text-body me-2"></span> Font Awesome fontawesome.com -->
                                <h5 class="text-body-highlight">Number of Bed</h5>
                            </a>
                            <div class="collapse show" id="collapseNumOfBed">
                                <div class="border-bottom pb-4">
                                    <div class="input-group gap-2" data-quantity="data-quantity"><button class="btn btn-phoenix-primary px-3 rounded" data-type="minus"><svg class="svg-inline--fa fa-minus px-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="minus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"></path>
                                            </svg><!-- <span class="fa-solid fa-minus px-1"></span> Font Awesome fontawesome.com --></button><input class="form-control form-control-lg border-translucent input-spin-none text-center rounded" id="numberOfBed" type="number" value="2"><button class="btn btn-phoenix-primary px-3 rounded" data-type="plus"><svg class="svg-inline--fa fa-plus px-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                            </svg><!-- <span class="fa-solid fa-plus px-1"></span> Font Awesome fontawesome.com --></button></div>
                                </div>
                            </div><a class="btn collapse-indicator px-0 py-2 d-flex align-items-center mt-3" data-bs-toggle="collapse" href="#collapseBathroom" role="button" aria-expanded="true" aria-controls="collapseBathroom"><svg class="svg-inline--fa fa-caret-down toggle-icon text-body me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"></path>
                                </svg><!-- <span class="fa-solid fa-caret-down toggle-icon text-body me-2"></span> Font Awesome fontawesome.com -->
                                <h5 class="text-body-highlight">Bathroom</h5>
                            </a>
                            <div class="collapse show" id="collapseBathroom">
                                <div class="border-bottom pb-4">
                                    <div class="input-group gap-2" data-quantity="data-quantity"><button class="btn btn-phoenix-primary px-3 rounded" data-type="minus"><svg class="svg-inline--fa fa-minus px-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="minus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"></path>
                                            </svg><!-- <span class="fa-solid fa-minus px-1"></span> Font Awesome fontawesome.com --></button><input class="form-control form-control-lg border-translucent input-spin-none text-center rounded" id="bathroom" type="number" value="2"><button class="btn btn-phoenix-primary px-3 rounded" data-type="plus"><svg class="svg-inline--fa fa-plus px-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                            </svg><!-- <span class="fa-solid fa-plus px-1"></span> Font Awesome fontawesome.com --></button></div>
                                </div>
                            </div><a class="btn collapse-indicator px-0 py-2 d-flex align-items-center mt-3 collapsed" data-bs-toggle="collapse" href="#collapseRoomCategory" role="button" aria-expanded="false" aria-controls="collapseRoomCategory"><svg class="svg-inline--fa fa-caret-down toggle-icon text-body me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"></path>
                                </svg><!-- <span class="fa-solid fa-caret-down toggle-icon text-body me-2"></span> Font Awesome fontawesome.com -->
                                <h5 class="text-body-highlight">Room Category</h5>
                            </a>
                            <div class="collapse" id="collapseRoomCategory">
                                <div class="border-bottom pb-4" data-list="{&quot;valueNames&quot;:[&quot;room&quot;]}">
                                    <div class="search-box w-100">
                                        <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search Room" aria-label="Search">
                                            <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                                            </svg><!-- <span class="fas fa-search search-box-icon"></span> Font Awesome fontawesome.com -->
                                        </form>
                                    </div>
                                    <div class="list">
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="Any"><label class="form-check-label fs-8 text-body-highlight room" for="Any">Any</label></div>
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="Deluxe-King-Room"><label class="form-check-label fs-8 text-body-highlight room" for="Deluxe-King-Room">Deluxe King Room</label></div>
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="Deluxe-Twin-Room"><label class="form-check-label fs-8 text-body-highlight room" for="Deluxe-Twin-Room">Deluxe Twin Room</label></div>
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="Junior-King-Suite"><label class="form-check-label fs-8 text-body-highlight room" for="Junior-King-Suite">Junior King Suite</label></div>
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="One-Bedroom-Deluxe-Suite"><label class="form-check-label fs-8 text-body-highlight room" for="One-Bedroom-Deluxe-Suite">One-Bedroom Deluxe Suite</label></div>
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="One-Bedroom-Executive-Suite"><label class="form-check-label fs-8 text-body-highlight room" for="One-Bedroom-Executive-Suite">One-Bedroom Executive Suite</label></div>
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="Presidential-Suite"><label class="form-check-label fs-8 text-body-highlight room" for="Presidential-Suite">Presidential Suite</label></div>
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="Club-King-Room"><label class="form-check-label fs-8 text-body-highlight room" for="Club-King-Room">Club King Room</label></div>
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="Twin-Room"><label class="form-check-label fs-8 text-body-highlight room" for="Twin-Room">Twin Room</label></div>
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="Club-Twin-Room"><label class="form-check-label fs-8 text-body-highlight room" for="Club-Twin-Room">Club Twin Room</label></div>
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="Premium-King-Room"><label class="form-check-label fs-8 text-body-highlight room" for="Premium-King-Room">Premium King Room</label></div>
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="Deluxe-King-Suite"><label class="form-check-label fs-8 text-body-highlight room" for="Deluxe-King-Suite">Deluxe King Suite</label></div>
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="Executive-King-Suite"><label class="form-check-label fs-8 text-body-highlight room" for="Executive-King-Suite">Executive King Suite</label></div>
                                    </div><a class="mt-2 fw-bold d-inline-block" href="#!">Show more items</a>
                                </div>
                            </div><a class="btn collapse-indicator px-0 py-2 d-flex align-items-center mt-3 collapsed" data-bs-toggle="collapse" href="#collapseBedType" role="button" aria-expanded="false" aria-controls="collapseBedType"><svg class="svg-inline--fa fa-caret-down toggle-icon text-body me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"></path>
                                </svg><!-- <span class="fa-solid fa-caret-down toggle-icon text-body me-2"></span> Font Awesome fontawesome.com -->
                                <h5 class="text-body-highlight">Bed Type</h5>
                            </a>
                            <div class="collapse" id="collapseBedType">
                                <div class="border-bottom pb-4" data-list="{&quot;valueNames&quot;:[&quot;bed&quot;]}">
                                    <div class="search-box w-100">
                                        <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search Room" aria-label="Search">
                                            <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                                            </svg><!-- <span class="fas fa-search search-box-icon"></span> Font Awesome fontawesome.com -->
                                        </form>
                                    </div>
                                    <div class="list">
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="Cribs"><label class="form-check-label fs-8 text-body-highlight bed" for="Cribs">Cribs</label></div>
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="Double-beds"><label class="form-check-label fs-8 text-body-highlight bed" for="Double-beds">Double beds</label></div>
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="King-bed"><label class="form-check-label fs-8 text-body-highlight bed" for="King-bed">King bed</label></div>
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="Queen-bed"><label class="form-check-label fs-8 text-body-highlight bed" for="Queen-bed">Queen bed</label></div>
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="Rollaway-bed"><label class="form-check-label fs-8 text-body-highlight bed" for="Rollaway-bed">Rollaway bed</label></div>
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="Sofa-bed"><label class="form-check-label fs-8 text-body-highlight bed" for="Sofa-bed">Sofa bed</label></div>
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="Twin-bed"><label class="form-check-label fs-8 text-body-highlight bed" for="Twin-bed">Twin bed</label></div>
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="Futon"><label class="form-check-label fs-8 text-body-highlight bed" for="Futon">Futon</label></div>
                                    </div><a class="mt-2 fw-bold d-inline-block" href="#!">Show more items</a>
                                </div>
                            </div><a class="btn collapse-indicator px-0 py-2 d-flex align-items-center mt-3 collapsed" data-bs-toggle="collapse" href="#collapseAmenities" role="button" aria-expanded="false" aria-controls="collapseAmenities"><svg class="svg-inline--fa fa-caret-down toggle-icon text-body me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"></path>
                                </svg><!-- <span class="fa-solid fa-caret-down toggle-icon text-body me-2"></span> Font Awesome fontawesome.com -->
                                <h5 class="text-body-highlight">Amenities</h5>
                            </a>
                            <div class="collapse" id="collapseAmenities">
                                <div data-list="{&quot;valueNames&quot;:[&quot;amenities&quot;]}">
                                    <div class="search-box w-100">
                                        <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search Room" aria-label="Search">
                                            <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                                            </svg><!-- <span class="fas fa-search search-box-icon"></span> Font Awesome fontawesome.com -->
                                        </form>
                                    </div>
                                    <div class="list">
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="Wifi"><label class="form-check-label fs-8 text-body-highlight amenities" for="Wifi">Wifi</label></div>
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="Washer"><label class="form-check-label fs-8 text-body-highlight amenities" for="Washer">Washer</label></div>
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="Kitchen"><label class="form-check-label fs-8 text-body-highlight amenities" for="Kitchen">Kitchen</label></div>
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="Dryer"><label class="form-check-label fs-8 text-body-highlight amenities" for="Dryer">Dryer</label></div>
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="Air-conditioning"><label class="form-check-label fs-8 text-body-highlight amenities" for="Air-conditioning">Air conditioning</label></div>
                                        <div class="form-check mt-3"><input class="form-check-input" type="checkbox" value="" id="Heating"><label class="form-check-label fs-8 text-body-highlight amenities" for="Heating">Heating</label></div>
                                    </div><a class="mt-2 fw-bold d-inline-block" href="#!">Show more items</a>
                                </div>
                            </div>
                            <div class="sticky-bottom bg-body pt-4 pb-4 pb-xl-0"><button class="btn btn-phoenix-secondary me-2">Reset</button><button class="btn btn-primary px-7">Apply</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row gx-4 justify-content-between">
                                <div class="col-auto mb-4">
                                    <div class="d-flex gap-3"><a href="#!"> <img class="rounded-1 border border-translucent" src="../../../../assets/img/hotels/70.png" alt="" width="108"></a>
                                        <div> <a class="fs-8 fw-bolder text-body-emphasis text-nowrap" href="#!">Double Bed</a>
                                            <h6 class="fw-semibold text-body text-nowrap mt-1 mb-2"><svg class="svg-inline--fa fa-border-all me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="border-all" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M384 96V224H256V96H384zm0 192V416H256V288H384zM192 224H64V96H192V224zM64 288H192V416H64V288zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"></path>
                                                </svg><!-- <span class="fa-solid fa-border-all me-2"></span> Font Awesome fontawesome.com -->Presidential Suite</h6>
                                            <div class="d-flex align-items-baseline gap-1 mb-3">
                                                <h6 class="mb-0 fw-semibold">Available:</h6>
                                                <h4 class="text-warning-dark fw-bolder mb-0">20<span class="fs-9 text-body-tertiary fw-bold"> / 100</span></h4>
                                            </div>
                                            <h4 class="fw-bolder mb-0">$699.67</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-auto d-flex gap-5 gap-md-6 order-1 order-xxl-0 mb-4">
                                    <div>
                                        <h6 class="mb-3 fw-bolder text-body-tertiary text-uppercase"> <span class="d-none d-sm-inline-block">No. of </span> Beds</h6>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="d-sm-flex align-items-center gap-2">
                                                <div class="d-flex align-items-center justify-content-center bg-primary-subtle rounded mb-2 mb-sm-0" style="height:24px; width: 24px"><svg class="svg-inline--fa fa-person-shelter text-primary-darker" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="person-shelter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M271.9 4.2c-9.8-5.6-21.9-5.6-31.8 0l-224 128C6.2 137.9 0 148.5 0 160V480c0 17.7 14.3 32 32 32s32-14.3 32-32V178.6L256 68.9 448 178.6V480c0 17.7 14.3 32 32 32s32-14.3 32-32V160c0-11.5-6.2-22.1-16.1-27.8l-224-128zM256 208a40 40 0 1 0 0-80 40 40 0 1 0 0 80zm-8 280V400h16v88c0 13.3 10.7 24 24 24s24-10.7 24-24V313.5l26.9 49.9c6.3 11.7 20.8 16 32.5 9.8s16-20.8 9.8-32.5l-37.9-70.3c-15.3-28.5-45.1-46.3-77.5-46.3H246.2c-32.4 0-62.1 17.8-77.5 46.3l-37.9 70.3c-6.3 11.7-1.9 26.2 9.8 32.5s26.2 1.9 32.5-9.8L200 313.5V488c0 13.3 10.7 24 24 24s24-10.7 24-24z"></path>
                                                    </svg><!-- <span class="fa-solid fa-person-shelter text-primary-darker"></span> Font Awesome fontawesome.com --></div>
                                                <h5 class="text-body fw-semibold mb-0">01</h5>
                                            </div>
                                            <div class="d-sm-flex align-items-center gap-2">
                                                <div class="d-flex align-items-center justify-content-center bg-success-subtle rounded mb-2 mb-sm-0" style="height:24px; width: 24px"><svg class="svg-inline--fa fa-bed text-success-darker" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bed" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M32 32c17.7 0 32 14.3 32 32V320H288V160c0-17.7 14.3-32 32-32H544c53 0 96 43 96 96V448c0 17.7-14.3 32-32 32s-32-14.3-32-32V416H352 320 64v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V64C0 46.3 14.3 32 32 32zm144 96a80 80 0 1 1 0 160 80 80 0 1 1 0-160z"></path>
                                                    </svg><!-- <span class="fa-solid fa-bed text-success-darker"></span> Font Awesome fontawesome.com --></div>
                                                <h5 class="text-body fw-semibold mb-0">02</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="mb-3 fw-bolder text-body-tertiary text-uppercase"><span class="d-none d-sm-inline-block">No. of </span> guests</h6>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="d-sm-flex align-items-center gap-2">
                                                <div class="d-flex align-items-center justify-content-center bg-warning-subtle rounded mb-2 mb-sm-0" style="height:24px; width: 24px"><svg class="svg-inline--fa fa-user text-warning-darker" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path>
                                                    </svg><!-- <span class="fa-solid fa-user text-warning-darker"></span> Font Awesome fontawesome.com --></div>
                                                <h5 class="text-body fw-semibold mb-0">02</h5>
                                            </div>
                                            <div class="d-sm-flex align-items-center gap-2">
                                                <div class="d-flex align-items-center justify-content-center bg-info-subtle rounded mb-2 mb-sm-0" style="height:24px; width: 24px"><svg class="svg-inline--fa fa-baby text-info-darker" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="baby" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M152 88a72 72 0 1 1 144 0A72 72 0 1 1 152 88zM39.7 144.5c13-17.9 38-21.8 55.9-8.8L131.8 162c26.8 19.5 59.1 30 92.2 30s65.4-10.5 92.2-30l36.2-26.4c17.9-13 42.9-9 55.9 8.8s9 42.9-8.8 55.9l-36.2 26.4c-13.6 9.9-28.1 18.2-43.3 25V288H128V251.7c-15.2-6.7-29.7-15.1-43.3-25L48.5 200.3c-17.9-13-21.8-38-8.8-55.9zm89.8 184.8l60.6 53-26 37.2 24.3 24.3c15.6 15.6 15.6 40.9 0 56.6s-40.9 15.6-56.6 0l-48-48C70 438.6 68.1 417 79.2 401.1l50.2-71.8zm128.5 53l60.6-53 50.2 71.8c11.1 15.9 9.2 37.5-4.5 51.2l-48 48c-15.6 15.6-40.9 15.6-56.6 0s-15.6-40.9 0-56.6L284 419.4l-26-37.2z"></path>
                                                    </svg><!-- <span class="fa-solid fa-baby text-info-darker"></span> Font Awesome fontawesome.com --></div>
                                                <h5 class="text-body fw-semibold mb-0">01</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="mb-3 fw-bolder text-body-tertiary text-uppercase">Bathroom</h6>
                                        <div class="d-sm-flex align-items-center gap-2">
                                            <div class="d-flex align-items-center justify-content-center bg-danger-subtle rounded mb-2 mb-sm-0" style="height:24px; width: 24px"><svg class="svg-inline--fa fa-bath text-danger-darker" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bath" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M96 77.3c0-7.3 5.9-13.3 13.3-13.3c3.5 0 6.9 1.4 9.4 3.9l14.9 14.9C130 91.8 128 101.7 128 112c0 19.9 7.2 38 19.2 52c-5.3 9.2-4 21.1 3.8 29c9.4 9.4 24.6 9.4 33.9 0L289 89c9.4-9.4 9.4-24.6 0-33.9c-7.9-7.9-19.8-9.1-29-3.8C246 39.2 227.9 32 208 32c-10.3 0-20.2 2-29.2 5.5L163.9 22.6C149.4 8.1 129.7 0 109.3 0C66.6 0 32 34.6 32 77.3V256c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H96V77.3zM32 352v16c0 28.4 12.4 54 32 71.6V480c0 17.7 14.3 32 32 32s32-14.3 32-32V464H384v16c0 17.7 14.3 32 32 32s32-14.3 32-32V439.6c19.6-17.6 32-43.1 32-71.6V352H32z"></path>
                                                </svg><!-- <span class="fa-solid fa-bath text-danger-darker"></span> Font Awesome fontawesome.com --></div>
                                            <h5 class="text-body fw-semibold mb-0 me-3">01</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-auto mb-4"><a class="btn btn-phoenix-info btn-collapse me-2 px-3 d-xxl-block mb-xxl-2" data-bs-toggle="collapse" href="#collapseRoomAvailableOnDates-0" role="button" aria-expanded="true" aria-controls="collapseRoomAvailableOnDates-0"><svg class="svg-inline--fa fa-calendar me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M96 32V64H48C21.5 64 0 85.5 0 112v48H448V112c0-26.5-21.5-48-48-48H352V32c0-17.7-14.3-32-32-32s-32 14.3-32 32V64H160V32c0-17.7-14.3-32-32-32S96 14.3 96 32zM448 192H0V464c0 26.5 21.5 48 48 48H400c26.5 0 48-21.5 48-48V192z"></path>
                                        </svg><!-- <span class="fa-solid fa-calendar me-2"></span> Font Awesome fontawesome.com --><span class="collapse-show">Show Dates</span><span class="collapse-hide">Hide Dates</span></a><a class="btn btn-primary px-5 px-md-7 px-xxl-5 flex-1" href="#!">Book now</a></div>
                                <div class="col-12">
                                </div>
                            </div>
                        </div>
                        <div class="p-3 border border-translucent rounded"><a class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 me-2 text-black" href="#!">wifi</a><a class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 me-2 text-black" href="#!">tv</a><a class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 me-2 text-black" href="#!">common area</a><a class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 me-2 text-black" href="#!">bathtub</a><a class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 me-2 text-black" href="#!">Heating</a><a class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 me-2 text-black" href="#!">Telephone</a><a class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 me-2 text-black" href="#!">Television</a><a class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 me-2 text-black" href="#!">common area</a><a class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 me-2 text-black" href="#!">Kettle</a><a class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 me-2 text-black" href="#!">iron</a><a class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 me-2 text-black" href="#!">Coffee maker</a><a class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 me-2 text-black" href="#!">refrigerator</a><a class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 me-2 text-black" href="#!">Room service</a><a class="fw-bold pe-0 fs-9 text-nowrap" href="#!">+ 7 more</a></div>
                    </div>
                    <div class="border p-3 rounded-3 mt-5 d-flex justify-content-end gap-3 gap-sm-6 flex-wrap">
                <h2 class="text-body mb-0"><span class="fs-9 text-body-tertiary fw-bold me-2">Total :</span>04</h2>
                <a class="btn btn-primary px-sm-7" type="button" style="height:fit-content">Confirm Booking<svg class="svg-inline--fa fa-chevron-right ms-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path></svg><!-- <span class="fa-solid fa-chevron-right ms-2"></span> Font Awesome fontawesome.com --></a>
              </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection