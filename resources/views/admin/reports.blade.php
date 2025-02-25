@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="reports">
        <div class="p-md-4 p-3">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Page 1</a></li>
                    <li class="breadcrumb-item"><a href="#">Page 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
            </nav>
            <h2 class="my-4">Reports</h2>
            <div>
                <div class="row g-3 justify-content-between mb-2">
                    <div class="col-12">
                        <div class="d-md-flex justify-content-between">
                            <div class="mb-3"><button class="btn btn-primary me-4"><svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                    </svg>Create Report</button><button class="btn btn-link text-body px-0"><svg class="svg-inline--fa fa-file-export fs-9 me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-export" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V288H216c-13.3 0-24 10.7-24 24s10.7 24 24 24H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zM384 336V288H494.1l-39-39c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l80 80c9.4 9.4 9.4 24.6 0 33.9l-80 80c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l39-39H384zm0-208H256V0L384 128z"></path>
                                    </svg>Export </button></div>
                            <div class="d-flex mb-3">
                                <div class="search-box me-2">
                                    <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search by name" aria-label="Search">
                                        <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                                        </svg>
                                    </form>
                                </div><button class="btn px-3 border" type="button" data-bs-toggle="modal" data-bs-target="#reportsFilterModal" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-filter text-primary" data-fa-transform="down-3" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="filter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.6875em;">
                                        <g transform="translate(256 256)">
                                            <g transform="translate(0, 96)  scale(1, 1)  rotate(0 0 0)">
                                                <path fill="currentColor" d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z" transform="translate(-256 -256)"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </button>
                                <div class="modal fade" id="reportsFilterModal" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content border border-translucent">
                                            <form id="addEventForm" autocomplete="off">
                                                <div class="modal-header justify-content-between border-translucent p-4">
                                                    <h5 class="modal-title text-body-highlight fs-6 lh-sm">Filter</h5><button class="btn p-1 text-danger" type="button" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-xmark fs-9" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="modal-body pt-4 pb-2 px-4">
                                                    <div class="mb-3"><label class="fw-bold mb-2 text-body-highlight" for="priority">Priority</label><select class="form-select" id="priority">
                                                            <option value="urgent" selected="selected">Urgent</option>
                                                            <option value="medium">Medium </option>
                                                            <option value="high">High</option>
                                                            <option value="low">Low</option>
                                                        </select></div>
                                                    <div class="mb-3"><label class="fw-bold mb-2 text-body-highlight" for="createDate">Create Date</label><select class="form-select" id="createDate">
                                                            <option value="today" selected="selected">Today</option>
                                                            <option value="last7Days">Last 7 Days</option>
                                                            <option value="last30Days">Last 30 Days</option>
                                                            <option value="chooseATimePeriod">Choose a time period</option>
                                                        </select></div>
                                                    <div class="mb-3"><label class="fw-bold mb-2 text-body-highlight" for="category">Category</label><select class="form-select" id="category">
                                                            <option value="salesReports" selected="selected">Sales Reports</option>
                                                            <option value="hrReports">HR Reports</option>
                                                            <option value="marketingReports">Marketing Reports</option>
                                                            <option value="administrativeReports">Administrative Reports</option>
                                                        </select></div>
                                                </div>
                                                <div class="modal-footer d-flex justify-content-end align-items-center px-4 pb-4 border-0 pt-3">
                                                    <button class="btn btn-outline-secondary px-4" type="submit">
                                                        <svg class="svg-inline--fa fa-arrows-rotate me-2 fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrows-rotate" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M105.1 202.6c7.7-21.8 20.2-42.3 37.8-59.8c62.5-62.5 163.8-62.5 226.3 0L386.3 160H352c-17.7 0-32 14.3-32 32s14.3 32 32 32H463.5c0 0 0 0 0 0h.4c17.7 0 32-14.3 32-32V80c0-17.7-14.3-32-32-32s-32 14.3-32 32v35.2L414.4 97.6c-87.5-87.5-229.3-87.5-316.8 0C73.2 122 55.6 150.7 44.8 181.4c-5.9 16.7 2.9 34.9 19.5 40.8s34.9-2.9 40.8-19.5zM39 289.3c-5 1.5-9.8 4.2-13.7 8.2c-4 4-6.7 8.8-8.1 14c-.3 1.2-.6 2.5-.8 3.8c-.3 1.7-.4 3.4-.4 5.1V432c0 17.7 14.3 32 32 32s32-14.3 32-32V396.9l17.6 17.5 0 0c87.5 87.4 229.3 87.4 316.7 0c24.4-24.4 42.1-53.1 52.9-83.7c5.9-16.7-2.9-34.9-19.5-40.8s-34.9 2.9-40.8 19.5c-7.7 21.8-20.2 42.3-37.8 59.8c-62.5 62.5-163.8 62.5-226.3 0l-.1-.1L125.6 352H160c17.7 0 32-14.3 32-32s-14.3-32-32-32H48.4c-1.6 0-3.2 .1-4.8 .3s-3.1 .5-4.6 1z"></path>
                                                        </svg>
                                                        Reset
                                                    </button>
                                                    <button class="btn btn-primary px-5" type="submit">Done</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 list" id="reportsList">
                    <div class="col-12 col-xl-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="border-bottom border-translucent">
                                    <div class="d-flex align-items-start mb-1">
                                        <div class="form-check mb-0"><input class="form-check-input" type="checkbox"></div>
                                        <div class="d-sm-flex align-items-center ps-2">
                                            <a class="fw-bold fs-7 lh-sm title line-clamp-1 me-sm-4" href="#">Purchasers and sellers</a>
                                            <div class="d-flex align-items-center"><svg class="svg-inline--fa fa-circle me-1 text-danger" data-fa-transform="shrink-6 up-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.4375em;">
                                                    <g transform="translate(256 256)">
                                                        <g transform="translate(0, -32)  scale(0.625, 0.625)  rotate(0 0 0)">
                                                            <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <span class="fw-bold fs-9 text-body lh-2">Urgent</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="fs-9 fw-semibold text-body ms-4 text mb-4 ps-2">Purchasing-Related Vendors</p>
                                </div>
                                <div class="row g-1 g-sm-3 mt-2 lh-1">
                                    <div class="col-12 col-sm-auto flex-1 text-truncate">
                                        <a class="fw-semibold fs-9" href="#!">
                                            <svg class="svg-inline--fa fa-folder me-2 reportsby" aria-hidden="true" focusable="false" data-prefix="far" data-icon="folder" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H196.1c19.1 0 37.4 7.6 50.9 21.1L289.9 96H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V160c0-8.8-7.2-16-16-16H286.6c-10.6 0-20.8-4.2-28.3-11.7L213.1 87c-4.5-4.5-10.6-7-17-7H64z"></path>
                                            </svg>sReports by email</a>
                                    </div>
                                    <div class="col-12 col-sm-auto">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid me-2" style="stroke-width:2;">
                                                <rect x="3" y="3" width="7" height="7"></rect>
                                                <rect x="14" y="3" width="7" height="7"></rect>
                                                <rect x="14" y="14" width="7" height="7"></rect>
                                                <rect x="3" y="14" width="7" height="7"></rect>
                                            </svg>
                                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Sales Reports</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-auto">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock me-2" style="stroke-width:2;">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 30, 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="border-bottom border-translucent">
                                    <div class="d-flex align-items-start mb-1">
                                        <div class="form-check mb-0"><input class="form-check-input" type="checkbox"></div>
                                        <div class="d-sm-flex align-items-center ps-2"><a class="fw-bold fs-7 lh-sm title line-clamp-1 me-sm-4" href="#">Useful Solutions</a>
                                            <div class="d-flex align-items-center"><svg class="svg-inline--fa fa-circle me-1 text-danger" data-fa-transform="shrink-6 up-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.4375em;">
                                                    <g transform="translate(256 256)">
                                                        <g transform="translate(0, -32)  scale(0.625, 0.625)  rotate(0 0 0)">
                                                            <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <span class="fw-bold fs-9 text-body lh-2">Urgent</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="fs-9 fw-semibold text-body ms-4 text mb-4 ps-2">Obtaining leads today</p>
                                </div>
                                <div class="row g-1 g-sm-3 mt-2 lh-1">
                                    <div class="col-12 col-sm-auto flex-1 text-truncate"><a class="fw-semibold fs-9" href="#!"><svg class="svg-inline--fa fa-folder me-2 reportsby" aria-hidden="true" focusable="false" data-prefix="far" data-icon="folder" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H196.1c19.1 0 37.4 7.6 50.9 21.1L289.9 96H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V160c0-8.8-7.2-16-16-16H286.6c-10.6 0-20.8-4.2-28.3-11.7L213.1 87c-4.5-4.5-10.6-7-17-7H64z"></path>
                                            </svg>
                                            Reports by email</a></div>
                                    <div class="col-12 col-sm-auto">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid me-2" style="stroke-width:2;">
                                                <rect x="3" y="3" width="7" height="7"></rect>
                                                <rect x="14" y="3" width="7" height="7"></rect>
                                                <rect x="14" y="14" width="7" height="7"></rect>
                                                <rect x="3" y="14" width="7" height="7"></rect>
                                            </svg>
                                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">HR Reports</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-auto">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock me-2" style="stroke-width:2;">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 20, 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="border-bottom border-translucent">
                                    <div class="d-flex align-items-start mb-1">
                                        <div class="form-check mb-0"><input class="form-check-input" type="checkbox"></div>
                                        <div class="d-sm-flex align-items-center ps-2"><a class="fw-bold fs-7 lh-sm title line-clamp-1 me-sm-4" href="#">Category Products</a>
                                            <div class="d-flex align-items-center"><svg class="svg-inline--fa fa-circle me-1 text-success" data-fa-transform="shrink-6 up-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.4375em;">
                                                    <g transform="translate(256 256)">
                                                        <g transform="translate(0, -32)  scale(0.625, 0.625)  rotate(0 0 0)">
                                                            <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <span class="fw-bold fs-9 text-body lh-2">Medium</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="fs-9 fw-semibold text-body ms-4 text mb-4 ps-2">Based on the percentage of recipients</p>
                                </div>
                                <div class="row g-1 g-sm-3 mt-2 lh-1">
                                    <div class="col-12 col-sm-auto flex-1 text-truncate"><a class="fw-semibold fs-9" href="#!"><svg class="svg-inline--fa fa-folder me-2 reportsby" aria-hidden="true" focusable="false" data-prefix="far" data-icon="folder" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H196.1c19.1 0 37.4 7.6 50.9 21.1L289.9 96H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V160c0-8.8-7.2-16-16-16H286.6c-10.6 0-20.8-4.2-28.3-11.7L213.1 87c-4.5-4.5-10.6-7-17-7H64z"></path>
                                            </svg>
                                            Reports on Sales Orders</a></div>
                                    <div class="col-12 col-sm-auto">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid me-2" style="stroke-width:2;">
                                                <rect x="3" y="3" width="7" height="7"></rect>
                                                <rect x="14" y="3" width="7" height="7"></rect>
                                                <rect x="14" y="14" width="7" height="7"></rect>
                                                <rect x="3" y="14" width="7" height="7"></rect>
                                            </svg>
                                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Marketing Reports</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-auto">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock me-2" style="stroke-width:2;">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 28, 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="border-bottom border-translucent">
                                    <div class="d-flex align-items-start mb-1">
                                        <div class="form-check mb-0"><input class="form-check-input" type="checkbox"></div>
                                        <div class="d-sm-flex align-items-center ps-2"><a class="fw-bold fs-7 lh-sm title line-clamp-1 me-sm-4" href="#">Current Deals</a>
                                            <div class="d-flex align-items-center"><svg class="svg-inline--fa fa-circle me-1 text-success" data-fa-transform="shrink-6 up-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.4375em;">
                                                    <g transform="translate(256 256)">
                                                        <g transform="translate(0, -32)  scale(0.625, 0.625)  rotate(0 0 0)">
                                                            <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <span class="fw-bold fs-9 text-body lh-2">Medium</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="fs-9 fw-semibold text-body ms-4 text mb-4 ps-2">Sales for Today</p>
                                </div>
                                <div class="row g-1 g-sm-3 mt-2 lh-1">
                                    <div class="col-12 col-sm-auto flex-1 text-truncate"><a class="fw-semibold fs-9" href="#!"><svg class="svg-inline--fa fa-folder me-2 reportsby" aria-hidden="true" focusable="false" data-prefix="far" data-icon="folder" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H196.1c19.1 0 37.4 7.6 50.9 21.1L289.9 96H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V160c0-8.8-7.2-16-16-16H286.6c-10.6 0-20.8-4.2-28.3-11.7L213.1 87c-4.5-4.5-10.6-7-17-7H64z"></path>
                                            </svg>
                                            Reviews of Products</a></div>
                                    <div class="col-12 col-sm-auto">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid me-2" style="stroke-width:2;">
                                                <rect x="3" y="3" width="7" height="7"></rect>
                                                <rect x="14" y="3" width="7" height="7"></rect>
                                                <rect x="14" y="14" width="7" height="7"></rect>
                                                <rect x="3" y="14" width="7" height="7"></rect>
                                            </svg>
                                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Sales Reports</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-auto">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock me-2" style="stroke-width:2;">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 28, 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="border-bottom border-translucent">
                                    <div class="d-flex align-items-start mb-1">
                                        <div class="form-check mb-0"><input class="form-check-input" type="checkbox"></div>
                                        <div class="d-sm-flex align-items-center ps-2"><a class="fw-bold fs-7 lh-sm title line-clamp-1 me-sm-4" href="#">Useful Solutions</a>
                                            <div class="d-flex align-items-center"><svg class="svg-inline--fa fa-circle me-1 text-info" data-fa-transform="shrink-6 up-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.4375em;">
                                                    <g transform="translate(256 256)">
                                                        <g transform="translate(0, -32)  scale(0.625, 0.625)  rotate(0 0 0)">
                                                            <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <span class="fw-bold fs-9 text-body lh-2">Low</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="fs-9 fw-semibold text-body ms-4 text mb-4 ps-2">Obtaining leads today</p>
                                </div>
                                <div class="row g-1 g-sm-3 mt-2 lh-1">
                                    <div class="col-12 col-sm-auto flex-1 text-truncate"><a class="fw-semibold fs-9" href="#!"><svg class="svg-inline--fa fa-folder me-2 reportsby" aria-hidden="true" focusable="false" data-prefix="far" data-icon="folder" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H196.1c19.1 0 37.4 7.6 50.9 21.1L289.9 96H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V160c0-8.8-7.2-16-16-16H286.6c-10.6 0-20.8-4.2-28.3-11.7L213.1 87c-4.5-4.5-10.6-7-17-7H64z"></path>
                                            </svg>
                                            Reports by email</a></div>
                                    <div class="col-12 col-sm-auto">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid me-2" style="stroke-width:2;">
                                                <rect x="3" y="3" width="7" height="7"></rect>
                                                <rect x="14" y="3" width="7" height="7"></rect>
                                                <rect x="14" y="14" width="7" height="7"></rect>
                                                <rect x="3" y="14" width="7" height="7"></rect>
                                            </svg>
                                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">HR Reports</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-auto">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock me-2" style="stroke-width:2;">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 27, 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="border-bottom border-translucent">
                                    <div class="d-flex align-items-start mb-1">
                                        <div class="form-check mb-0"><input class="form-check-input" type="checkbox"></div>
                                        <div class="d-sm-flex align-items-center ps-2"><a class="fw-bold fs-7 lh-sm title line-clamp-1 me-sm-4" href="#">Current Deals</a>
                                            <div class="d-flex align-items-center"><svg class="svg-inline--fa fa-circle me-1 text-info" data-fa-transform="shrink-6 up-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.4375em;">
                                                    <g transform="translate(256 256)">
                                                        <g transform="translate(0, -32)  scale(0.625, 0.625)  rotate(0 0 0)">
                                                            <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <span class="fw-bold fs-9 text-body lh-2">Low</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="fs-9 fw-semibold text-body ms-4 text mb-4 ps-2">Sums up the many existing businesses.</p>
                                </div>
                                <div class="row g-1 g-sm-3 mt-2 lh-1">
                                    <div class="col-12 col-sm-auto flex-1 text-truncate"><a class="fw-semibold fs-9" href="#!"><svg class="svg-inline--fa fa-folder me-2 reportsby" aria-hidden="true" focusable="false" data-prefix="far" data-icon="folder" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H196.1c19.1 0 37.4 7.6 50.9 21.1L289.9 96H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V160c0-8.8-7.2-16-16-16H286.6c-10.6 0-20.8-4.2-28.3-11.7L213.1 87c-4.5-4.5-10.6-7-17-7H64z"></path>
                                            </svg>
                                            Reports by email</a></div>
                                    <div class="col-12 col-sm-auto">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid me-2" style="stroke-width:2;">
                                                <rect x="3" y="3" width="7" height="7"></rect>
                                                <rect x="14" y="3" width="7" height="7"></rect>
                                                <rect x="14" y="14" width="7" height="7"></rect>
                                                <rect x="3" y="14" width="7" height="7"></rect>
                                            </svg>
                                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Service Reports</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-auto">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock me-2" style="stroke-width:2;">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 26, 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="border-bottom border-translucent">
                                    <div class="d-flex align-items-start mb-1">
                                        <div class="form-check mb-0"><input class="form-check-input" type="checkbox"></div>
                                        <div class="d-sm-flex align-items-center ps-2"><a class="fw-bold fs-7 lh-sm title line-clamp-1 me-sm-4" href="#">Lost of Deals</a>
                                            <div class="d-flex align-items-center"><svg class="svg-inline--fa fa-circle me-1 text-warning" data-fa-transform="shrink-6 up-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.4375em;">
                                                    <g transform="translate(256 256)">
                                                        <g transform="translate(0, -32)  scale(0.625, 0.625)  rotate(0 0 0)">
                                                            <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <span class="fw-bold fs-9 text-body lh-2">High</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="fs-9 fw-semibold text-body ms-4 text mb-4 ps-2">Emails sent by users to all records,</p>
                                </div>
                                <div class="row g-1 g-sm-3 mt-2 lh-1">
                                    <div class="col-12 col-sm-auto flex-1 text-truncate"><a class="fw-semibold fs-9" href="#!"><svg class="svg-inline--fa fa-folder me-2 reportsby" aria-hidden="true" focusable="false" data-prefix="far" data-icon="folder" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H196.1c19.1 0 37.4 7.6 50.9 21.1L289.9 96H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V160c0-8.8-7.2-16-16-16H286.6c-10.6 0-20.8-4.2-28.3-11.7L213.1 87c-4.5-4.5-10.6-7-17-7H64z"></path>
                                            </svg>
                                            Reports on Deals</a></div>
                                    <div class="col-12 col-sm-auto">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid me-2" style="stroke-width:2;">
                                                <rect x="3" y="3" width="7" height="7"></rect>
                                                <rect x="14" y="3" width="7" height="7"></rect>
                                                <rect x="14" y="14" width="7" height="7"></rect>
                                                <rect x="3" y="14" width="7" height="7"></rect>
                                            </svg>
                                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Sales Reports</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-auto">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock me-2" style="stroke-width:2;">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 25, 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="border-bottom border-translucent">
                                    <div class="d-flex align-items-start mb-1">
                                        <div class="form-check mb-0"><input class="form-check-input" type="checkbox"></div>
                                        <div class="d-sm-flex align-items-center ps-2"><a class="fw-bold fs-7 lh-sm title line-clamp-1 me-sm-4" href="#">Important Accounts</a>
                                            <div class="d-flex align-items-center"><svg class="svg-inline--fa fa-circle me-1 text-info" data-fa-transform="shrink-6 up-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.4375em;">
                                                    <g transform="translate(256 256)">
                                                        <g transform="translate(0, -32)  scale(0.625, 0.625)  rotate(0 0 0)">
                                                            <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <span class="fw-bold fs-9 text-body lh-2">Low</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="fs-9 fw-semibold text-body ms-4 text mb-4 ps-2">Contracts closed by a salesman</p>
                                </div>
                                <div class="row g-1 g-sm-3 mt-2 lh-1">
                                    <div class="col-12 col-sm-auto flex-1 text-truncate"><a class="fw-semibold fs-9" href="#!"><svg class="svg-inline--fa fa-folder me-2 reportsby" aria-hidden="true" focusable="false" data-prefix="far" data-icon="folder" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H196.1c19.1 0 37.4 7.6 50.9 21.1L289.9 96H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V160c0-8.8-7.2-16-16-16H286.6c-10.6 0-20.8-4.2-28.3-11.7L213.1 87c-4.5-4.5-10.6-7-17-7H64z"></path>
                                            </svg>
                                            Reports on Deals</a></div>
                                    <div class="col-12 col-sm-auto">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid me-2" style="stroke-width:2;">
                                                <rect x="3" y="3" width="7" height="7"></rect>
                                                <rect x="14" y="3" width="7" height="7"></rect>
                                                <rect x="14" y="14" width="7" height="7"></rect>
                                                <rect x="3" y="14" width="7" height="7"></rect>
                                            </svg>
                                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Marketing Reports</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-auto">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock me-2" style="stroke-width:2;">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 25, 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="border-bottom border-translucent">
                                    <div class="d-flex align-items-start mb-1">
                                        <div class="form-check mb-0"><input class="form-check-input" type="checkbox"></div>
                                        <div class="d-sm-flex align-items-center ps-2"><a class="fw-bold fs-7 lh-sm title line-clamp-1 me-sm-4" href="#">Analytics for Email</a>
                                            <div class="d-flex align-items-center"><svg class="svg-inline--fa fa-circle me-1 text-success" data-fa-transform="shrink-6 up-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.4375em;">
                                                    <g transform="translate(256 256)">
                                                        <g transform="translate(0, -32)  scale(0.625, 0.625)  rotate(0 0 0)">
                                                            <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <span class="fw-bold fs-9 text-body lh-2">Medium</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="fs-9 fw-semibold text-body ms-4 text mb-4 ps-2">Based on Status Sales Orders</p>
                                </div>
                                <div class="row g-1 g-sm-3 mt-2 lh-1">
                                    <div class="col-12 col-sm-auto flex-1 text-truncate"><a class="fw-semibold fs-9" href="#!"><svg class="svg-inline--fa fa-folder me-2 reportsby" aria-hidden="true" focusable="false" data-prefix="far" data-icon="folder" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H196.1c19.1 0 37.4 7.6 50.9 21.1L289.9 96H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V160c0-8.8-7.2-16-16-16H286.6c-10.6 0-20.8-4.2-28.3-11.7L213.1 87c-4.5-4.5-10.6-7-17-7H64z"></path>
                                            </svg>
                                            Reviews of Products</a></div>
                                    <div class="col-12 col-sm-auto">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid me-2" style="stroke-width:2;">
                                                <rect x="3" y="3" width="7" height="7"></rect>
                                                <rect x="14" y="3" width="7" height="7"></rect>
                                                <rect x="14" y="14" width="7" height="7"></rect>
                                                <rect x="3" y="14" width="7" height="7"></rect>
                                            </svg>
                                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Sales Reports</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-auto">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock me-2" style="stroke-width:2;">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 24, 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="border-bottom border-translucent">
                                    <div class="d-flex align-items-start mb-1">
                                        <div class="form-check mb-0"><input class="form-check-input" type="checkbox"></div>
                                        <div class="d-sm-flex align-items-center ps-2"><a class="fw-bold fs-7 lh-sm title line-clamp-1 me-sm-4" href="#">Types of Deals</a>
                                            <div class="d-flex align-items-center"><svg class="svg-inline--fa fa-circle me-1 text-success" data-fa-transform="shrink-6 up-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.4375em;">
                                                    <g transform="translate(256 256)">
                                                        <g transform="translate(0, -32)  scale(0.625, 0.625)  rotate(0 0 0)">
                                                            <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <span class="fw-bold fs-9 text-body lh-2">Medium</span>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="fs-9 fw-semibold text-body ms-4 text mb-4 ps-2">Products support will stop this month</p>
                                </div>
                                <div class="row g-1 g-sm-3 mt-2 lh-1">
                                    <div class="col-12 col-sm-auto flex-1 text-truncate"><a class="fw-semibold fs-9" href="#!"><svg class="svg-inline--fa fa-folder me-2 reportsby" aria-hidden="true" focusable="false" data-prefix="far" data-icon="folder" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H196.1c19.1 0 37.4 7.6 50.9 21.1L289.9 96H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V160c0-8.8-7.2-16-16-16H286.6c-10.6 0-20.8-4.2-28.3-11.7L213.1 87c-4.5-4.5-10.6-7-17-7H64z"></path>
                                            </svg>
                                            Reports by email</a></div>
                                    <div class="col-12 col-sm-auto">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid me-2" style="stroke-width:2;">
                                                <rect x="3" y="3" width="7" height="7"></rect>
                                                <rect x="14" y="3" width="7" height="7"></rect>
                                                <rect x="14" y="14" width="7" height="7"></rect>
                                                <rect x="3" y="14" width="7" height="7"></rect>
                                            </svg>
                                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary reports">Marketing Reports</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-auto">
                                        <div class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock me-2" style="stroke-width:2;">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                            <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">Dec 23, 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between py-2 pe-0 fs-9 mt-2">
                    <div class="col-auto d-flex">
                        <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info">1 to 10 <span class="text-body-tertiary"> Items of </span>14</p><a class="fw-semibold" href="#!" data-list-view="*">View all<svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5625em;">
                                <g transform="translate(160 256)">
                                    <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                                        <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" transform="translate(-160 -256)"></path>
                                    </g>
                                </g>
                            </svg>
                        </a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5625em;">
                                <g transform="translate(160 256)">
                                    <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                                        <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" transform="translate(-160 -256)"></path>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-flex"><button class="page-link disabled" data-list-pagination="prev" disabled=""><svg class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"></path>
                            </svg>
                        </button>
                        <ul class="mb-0 pagination">
                            <li class="active"><button class="page" type="button" data-i="1" data-page="10">1</button></li>
                            <li><button class="page" type="button" data-i="2" data-page="10">2</button></li>
                        </ul><button class="page-link pe-0" data-list-pagination="next"><svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection