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
                    <li class="breadcrumb-item active" aria-current="page">Room Listing</li>
                </ol>
            </nav>
            <div class="mb-7">
                <h2>Room Listing</h2>
                <div data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;beds&quot;,&quot;guest&quot;,&quot;bathRooms&quot;,&quot;amenities&quot;,&quot;totalRooms&quot;],&quot;page&quot;:8}">
                    <div class="d-md-flex mt-5 mb-4"><button class="btn btn-primary me-4"><svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                            </svg><!-- <span class="fas fa-plus me-2"></span> Font Awesome fontawesome.com -->Create Listing</button><button class="btn btn-link text-body me-4 px-0"><svg class="svg-inline--fa fa-file-export fs-9 me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-export" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V288H216c-13.3 0-24 10.7-24 24s10.7 24 24 24H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zM384 336V288H494.1l-39-39c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l80 80c9.4 9.4 9.4 24.6 0 33.9l-80 80c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l39-39H384zm0-208H256V0L384 128z"></path>
                            </svg><!-- <span class="fa-solid fa-file-export fs-9 me-2"></span> Font Awesome fontawesome.com -->Export</button>
                        <div class="d-flex gap-2 ms-md-auto mt-3 mt-md-0">
                            <div class="search-box">
                                <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search products" aria-label="Search">
                                    <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                                    </svg><!-- <span class="fas fa-search search-box-icon"></span> Font Awesome fontawesome.com -->
                                </form>
                            </div><button class="btn btn-phoenix-primary px-3"><svg class="svg-inline--fa fa-filter" data-fa-transform="down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="filter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.625em;">
                                    <g transform="translate(256 256)">
                                        <g transform="translate(0, 64)  scale(1, 1)  rotate(0 0 0)">
                                            <path fill="currentColor" d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z" transform="translate(-256 -256)"></path>
                                        </g>
                                    </g>
                                </svg><!-- <span class="fa-solid fa-filter" data-fa-transform="down-2"></span> Font Awesome fontawesome.com --></button>
                        </div>
                    </div>
                    <div class="table-responsive scrollbar mx-n1 px-1">
                        <table class="table fs-9 mb-0">
                            <thead>
                                <tr>
                                    <th class="white-space-nowrap fs-9 align-middle ps-0" style="max-width:20px; width:18px;">
                                        <div class="form-check mb-0 "><input class="form-check-input" id="checkbox-bulk-products-select" type="checkbox" data-bulk-select="{&quot;body&quot;:&quot;room-listing-table-body&quot;}"></div>
                                    </th>
                                    <th class="sort text-body-tertiary align-middle white-space-nowrap" scope="col" data-sort="name" style="width:300px;">ROOM INFORMATION</th>
                                    <th class="sort text-body-tertiary align-middle px-4" scope="col" style="width:200px;" data-sort="beds">NO. OF BEDS</th>
                                    <th class="sort text-body-tertiary align-middle px-4" scope="col" data-sort="guest" style="width:200px;">NO. OF GUESTS</th>
                                    <th class="sort text-body-tertiary align-middle px-4" scope="col" data-sort="bathRooms" style="width:140px;">BATHROOM</th>
                                    <th class="text-body-tertiary align-middle ps-4" scope="col" data-sort="amenities" style="min-width:450px;">AMENITIES</th>
                                    <th class="sort text-body-tertiary align-middle ps-4 text-end" scope="col" data-sort="totalRooms" style="width:180px;">TOTAL ROOM</th>
                                    <th class="sort text-body-tertiary text-end align-middle pe-0 ps-4" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list" id="room-listing-table-body">
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                    <td class="fs-9 align-middle ps-0">
                                        <div class="form-check mb-0 "><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;name&quot;:&quot;Bunk Bed&quot;,&quot;category&quot;:&quot;Standard Room&quot;,&quot;price&quot;:332.67,&quot;img&quot;:&quot;/img/hotels/17.png&quot;,&quot;bedRooms&quot;:&quot;01&quot;,&quot;beds&quot;:&quot;02&quot;,&quot;guest&quot;:&quot;02&quot;,&quot;child&quot;:&quot;01&quot;,&quot;bathRooms&quot;:&quot;01&quot;,&quot;totalRooms&quot;:65,&quot;amenities&quot;:[&quot;wifi&quot;,&quot;tv&quot;,&quot;common area&quot;,&quot;bathtub&quot;,&quot;Heating&quot;,&quot;Telephone&quot;,&quot;Television&quot;,&quot;common area&quot;,&quot;Kettle&quot;,&quot;iron&quot;,&quot;Coffee maker&quot;,&quot;refrigerator&quot;,&quot;Room service&quot;,&quot;Coffee maker&quot;,&quot;refrigerator&quot;,&quot;Room service&quot;,&quot;common area&quot;,&quot;bathtub&quot;,&quot;Heating&quot;,&quot;Telephone&quot;]}"></div>
                                    </td>
                                    <td class="align-middle py-4 name">
                                        <div class="d-flex align-items-center gap-3"><a href="#!"> <img class="rounded-1 border border-translucent" src="../../../../assets/img/hotels/17.png" alt="" width="80"></a>
                                            <div> <a class=" fw-bolder text-body-emphasis text-nowrap" href="#!">Bunk Bed</a>
                                                <h6 class="fw-seibold text-body text-nowrap mt-1 mb-2"><svg class="svg-inline--fa fa-border-all me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="border-all" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M384 96V224H256V96H384zm0 192V416H256V288H384zM192 224H64V96H192V224zM64 288H192V416H64V288zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"></path>
                                                    </svg><!-- <span class="fa-solid fa-border-all me-2"></span> Font Awesome fontawesome.com -->Standard Room</h6>
                                                <h4 class="fw-bolder mb-0">$332.67</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle px-4 beds">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center justify-content-center bg-primary-subtle rounded me-2" style="height:24px; width: 24px"><svg class="svg-inline--fa fa-person-shelter text-primary-darker" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="person-shelter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M271.9 4.2c-9.8-5.6-21.9-5.6-31.8 0l-224 128C6.2 137.9 0 148.5 0 160V480c0 17.7 14.3 32 32 32s32-14.3 32-32V178.6L256 68.9 448 178.6V480c0 17.7 14.3 32 32 32s32-14.3 32-32V160c0-11.5-6.2-22.1-16.1-27.8l-224-128zM256 208a40 40 0 1 0 0-80 40 40 0 1 0 0 80zm-8 280V400h16v88c0 13.3 10.7 24 24 24s24-10.7 24-24V313.5l26.9 49.9c6.3 11.7 20.8 16 32.5 9.8s16-20.8 9.8-32.5l-37.9-70.3c-15.3-28.5-45.1-46.3-77.5-46.3H246.2c-32.4 0-62.1 17.8-77.5 46.3l-37.9 70.3c-6.3 11.7-1.9 26.2 9.8 32.5s26.2 1.9 32.5-9.8L200 313.5V488c0 13.3 10.7 24 24 24s24-10.7 24-24z"></path>
                                                </svg><!-- <span class="fa-solid fa-person-shelter text-primary-darker"></span> Font Awesome fontawesome.com --></div>
                                            <h5 class="text-body-emphasis fw-semibold mb-0 me-3">01</h5>
                                            <div class="d-flex align-items-center justify-content-center bg-success-subtle rounded me-2" style="height:24px; width: 24px"><svg class="svg-inline--fa fa-bed text-success-darker" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bed" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M32 32c17.7 0 32 14.3 32 32V320H288V160c0-17.7 14.3-32 32-32H544c53 0 96 43 96 96V448c0 17.7-14.3 32-32 32s-32-14.3-32-32V416H352 320 64v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V64C0 46.3 14.3 32 32 32zm144 96a80 80 0 1 1 0 160 80 80 0 1 1 0-160z"></path>
                                                </svg><!-- <span class="fa-solid fa-bed text-success-darker"></span> Font Awesome fontawesome.com --></div>
                                            <h5 class="text-body-emphasis fw-semibold mb-0">02</h5>
                                        </div>
                                    </td>
                                    <td class="align-middle px-4 guest">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center justify-content-center bg-warning-subtle rounded me-2" style="height:24px; width: 24px"><svg class="svg-inline--fa fa-user text-warning-darker" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path>
                                                </svg><!-- <span class="fa-solid fa-user text-warning-darker"></span> Font Awesome fontawesome.com --></div>
                                            <h5 class="text-body-emphasis fw-semibold mb-0 me-3">02</h5>
                                            <div class="d-flex align-items-center justify-content-center bg-info-subtle rounded me-2" style="height:24px; width: 24px"><svg class="svg-inline--fa fa-baby text-info-darker" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="baby" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M152 88a72 72 0 1 1 144 0A72 72 0 1 1 152 88zM39.7 144.5c13-17.9 38-21.8 55.9-8.8L131.8 162c26.8 19.5 59.1 30 92.2 30s65.4-10.5 92.2-30l36.2-26.4c17.9-13 42.9-9 55.9 8.8s9 42.9-8.8 55.9l-36.2 26.4c-13.6 9.9-28.1 18.2-43.3 25V288H128V251.7c-15.2-6.7-29.7-15.1-43.3-25L48.5 200.3c-17.9-13-21.8-38-8.8-55.9zm89.8 184.8l60.6 53-26 37.2 24.3 24.3c15.6 15.6 15.6 40.9 0 56.6s-40.9 15.6-56.6 0l-48-48C70 438.6 68.1 417 79.2 401.1l50.2-71.8zm128.5 53l60.6-53 50.2 71.8c11.1 15.9 9.2 37.5-4.5 51.2l-48 48c-15.6 15.6-40.9 15.6-56.6 0s-15.6-40.9 0-56.6L284 419.4l-26-37.2z"></path>
                                                </svg><!-- <span class="fa-solid fa-baby text-info-darker"></span> Font Awesome fontawesome.com --></div>
                                            <h5 class="text-body-emphasis fw-semibold mb-0">01</h5>
                                        </div>
                                    </td>
                                    <td class="align-middle px-4 bathRooms">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center justify-content-center bg-danger-subtle rounded me-2" style="height:24px; width: 24px"><svg class="svg-inline--fa fa-bath text-danger-darker" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bath" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M96 77.3c0-7.3 5.9-13.3 13.3-13.3c3.5 0 6.9 1.4 9.4 3.9l14.9 14.9C130 91.8 128 101.7 128 112c0 19.9 7.2 38 19.2 52c-5.3 9.2-4 21.1 3.8 29c9.4 9.4 24.6 9.4 33.9 0L289 89c9.4-9.4 9.4-24.6 0-33.9c-7.9-7.9-19.8-9.1-29-3.8C246 39.2 227.9 32 208 32c-10.3 0-20.2 2-29.2 5.5L163.9 22.6C149.4 8.1 129.7 0 109.3 0C66.6 0 32 34.6 32 77.3V256c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H96V77.3zM32 352v16c0 28.4 12.4 54 32 71.6V480c0 17.7 14.3 32 32 32s32-14.3 32-32V464H384v16c0 17.7 14.3 32 32 32s32-14.3 32-32V439.6c19.6-17.6 32-43.1 32-71.6V352H32z"></path>
                                                </svg><!-- <span class="fa-solid fa-bath text-danger-darker"></span> Font Awesome fontawesome.com --></div>
                                            <h5 class="text-body-emphasis fw-semibold mb-0 me-3">01</h5>
                                        </div>
                                    </td>
                                    <td class="align-middle ps-4 amenities">
                                        <div class="d-flex flex-wrap gap-2"><span class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 text-black">wifi</span><span class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 text-black">tv</span><span class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 text-black">common area</span><span class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 text-black">bathtub</span><span class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 text-black">Heating</span><span class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 text-black">Telephone</span><span class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 text-black">Television</span><span class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 text-black">common area</span><span class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 text-black">Kettle</span><span class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 text-black">iron</span><span class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 text-black">Coffee maker</span><span class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 text-black">refrigerator</span><span class="badge badge-phoenix bg-primary-subtle text-body-highlight py-1 fs-10 text-black">Room service</span><a class="fw-bold fs-9" href="#!">+7 More</a></div>
                                    </td>
                                    <td class="align-middle text-end ps-4 totalRooms">
                                        <h2 class="text-body-secondary">65</h2>
                                    </td>
                                    <td class="align-middle ps-4">
                                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
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
                    <div class="row align-items-center py-2 g-0">
                        <div class="pagination d-none"></div>
                        <div class="col d-flex fs-9">
                            <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info">1 to 8 <span class="text-body-tertiary"> Items of </span>10</p><a class="fw-semibold" href="#!" data-list-view="*">View all<svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5625em;">
                                    <g transform="translate(160 256)">
                                        <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                                            <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" transform="translate(-160 -256)"></path>
                                        </g>
                                    </g>
                                </svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less</a>
                        </div>
                        <div class="col-auto d-flex">
                            <button class="btn btn-link px-1 me-1 disabled" type="button" title="Previous" data-list-pagination="prev" disabled=""><svg class="svg-inline--fa fa-chevron-left me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"></path>
                                </svg><!-- <span class="fas fa-chevron-left me-2"></span> Font Awesome fontawesome.com -->Previous</button><button class="btn btn-link px-1 ms-1" type="button" title="Next" data-list-pagination="next">Next<svg class="svg-inline--fa fa-chevron-right ms-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                </svg><!-- <span class="fas fa-chevron-right ms-2"></span> Font Awesome fontawesome.com --></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection