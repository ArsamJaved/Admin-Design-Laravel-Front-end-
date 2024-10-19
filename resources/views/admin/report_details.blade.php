@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="report_details">
        <div class="p-md-4 p-3">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Page 1</a></li>
                    <li class="breadcrumb-item"><a href="#">Page 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
            </nav>
            <h2 class="my-4">Purchasers and sellers</h2>
            <div class="row g-3 justify-content-between mb-4">
                <div class="col-auto">
                    <div class="d-flex flex-wrap gap-2">
                        <button class="btn btn-primary">
                            <svg class="svg-inline--fa fa-envelope me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"></path>
                            </svg>Send mail
                        </button>
                        <button class="btn btn-outline-primary"><svg class="svg-inline--fa fa-pencil me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pencil" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                            </svg>Edit
                        </button>
                        <button class="btn btn-outline-secondary"><svg class="svg-inline--fa fa-file-export fs-9 me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-export" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V288H216c-13.3 0-24 10.7-24 24s10.7 24 24 24H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zM384 336V288H494.1l-39-39c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l80 80c9.4 9.4 9.4 24.6 0 33.9l-80 80c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l39-39H384zm0-208H256V0L384 128z"></path>
                            </svg>Export
                        </button>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="d-flex">
                        <div class="search-box me-2 d-none d-xl-block">
                            <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search by name" aria-label="Search">
                                <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                                </svg>
                            </form>
                        </div>
                        <button class="btn px-3 btn-outline-secondary me-2 d-xl-none">
                            <svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                            </svg>
                        </button>
                        <button class="btn px-3 btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#filterModal" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-filter" data-fa-transform="down-3" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="filter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.6875em;">
                                <g transform="translate(256 256)">
                                    <g transform="translate(0, 96)  scale(1, 1)  rotate(0 0 0)">
                                        <path fill="currentColor" d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z" transform="translate(-256 -256)"></path>
                                    </g>
                                </g>
                            </svg>
                        </button>
                        <div class="modal fade" id="filterModal" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content border border-translucent">
                                    <form id="addEventForm" autocomplete="off">
                                        <div class="modal-header justify-content-between border-translucent p-4">
                                            <h5 class="modal-title text-body-highlight fs-6 lh-sm">Filter</h5>
                                            <button class="btn p-1 text-danger" type="button" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-xmark fs-9" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="modal-body pt-4 pb-2 px-4">
                                            <div class="mb-3"><label class="fw-bold mb-2 text-body-highlight" for="leadStatus">Lead Status</label><select class="form-select" id="leadStatus">
                                                    <option value="newLead" selected="selected">New Lead</option>
                                                    <option value="coldLead">Cold Lead</option>
                                                    <option value="wonLead">Won Lead</option>
                                                    <option value="canceled">Canceled</option>
                                                </select>
                                            </div>
                                            <div class="mb-3"><label class="fw-bold mb-2 text-body-highlight" for="createDate">Create Date</label><select class="form-select" id="createDate">
                                                    <option value="today" selected="selected">Today</option>
                                                    <option value="last7Days">Last 7 Days</option>
                                                    <option value="last30Days">Last 30 Days</option>
                                                    <option value="chooseATimePeriod">Choose a time period</option>
                                                </select>
                                            </div>
                                            <div class="mb-3"><label class="fw-bold mb-2 text-body-highlight" for="designation">Designation</label><select class="form-select" id="designation">
                                                    <option value="VPAccounting" selected="selected">VP Accounting</option>
                                                    <option value="ceo">CEO</option>
                                                    <option value="creativeDirector">Creative Director</option>
                                                    <option value="accountant">Accountant</option>
                                                    <option value="executiveManager">Executive Manager</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-end align-items-center px-4 pb-4 border-0 pt-3">
                                            <button class="btn btn-outline-secondary px-4" type="submit"> <svg class="svg-inline--fa fa-arrows-rotate me-2 fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrows-rotate" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
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
            <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="echart-reports-details mb-5" style="height: 358px; width: 100%; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;" _echarts_instance_="ec_1720596782149">
                            <div style="position: relative; width: 319px; height: 358px; padding: 0px; margin: 0px; border-width: 0px; cursor: pointer;">
                                <canvas id="myLineChart"></canvas>
                            </div>
                            <div>
                                <div>
                                    <p class="mb-2 text-body-tertiary">
                                        Offering
                                    </p>
                                    <div class="ms-1">
                                        <h6 class=""><svg class="svg-inline--fa fa-circle me-1 fs-10" style="color: #85a9ff;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                            </svg>
                                            Revenue : 62
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive scrollbar">
                            <table class="reports-details-chart-table table table-sm fs-9 mb-0">
                                <thead>
                                    <tr>
                                        <th class="align-middle pe- text-body-tertiary fw-bold fs-10 text-uppercase text-nowrap ps-0" scope="col" style="width:35%;">Report stage</th>
                                        <th class="align-middle text-end ps-4 text-body-tertiary fw-bold fs-10 text-uppercase text-nowrap" scope="col" style="width:35%;">total count</th>
                                        <th class="align-middle text-end ps-4 text-body-tertiary fw-bold fs-10 text-uppercase" scope="col" style="width:30%;">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="report-data-body">
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="align-middle white-space-nowrap fw-semibold text-body-highlight py-2">Analysis</td>
                                        <td class="align-middle text-end white-space-nowrap fw-semibold text-body-highlight ps-4 py-2">03</td>
                                        <td class="align-middle text-end white-space-nowrap ps-4 fw-semibold text-body-highlight"><span class="badge badge-phoenix badge-phoenix-info">+15.21%</span></td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="align-middle white-space-nowrap fw-semibold text-body-highlight py-2">Statement</td>
                                        <td class="align-middle text-end white-space-nowrap fw-semibold text-body-highlight ps-4 py-2">01</td>
                                        <td class="align-middle text-end white-space-nowrap ps-4 fw-semibold text-body-highlight"><span class="badge badge-phoenix badge-phoenix-warning">+05.21%</span></td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="align-middle white-space-nowrap fw-semibold text-body-highlight py-2">Action</td>
                                        <td class="align-middle text-end white-space-nowrap fw-semibold text-body-highlight ps-4 py-2">02</td>
                                        <td class="align-middle text-end white-space-nowrap ps-4 fw-semibold text-body-highlight"><span class="badge badge-phoenix badge-phoenix-primary">+22.12%</span></td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="align-middle white-space-nowrap fw-semibold text-body-highlight py-2">Offering</td>
                                        <td class="align-middle text-end white-space-nowrap fw-semibold text-body-highlight ps-4 py-2">02</td>
                                        <td class="align-middle text-end white-space-nowrap ps-4 fw-semibold text-body-highlight"><span class="badge badge-phoenix badge-phoenix-danger">-14.21%</span></td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="align-middle white-space-nowrap fw-semibold text-body-highlight py-2">Interlocution</td>
                                        <td class="align-middle text-end white-space-nowrap fw-semibold text-body-highlight ps-4 py-2">02</td>
                                        <td class="align-middle text-end white-space-nowrap ps-4 fw-semibold text-body-highlight"><span class="badge badge-phoenix badge-phoenix-danger">-14.21%</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mt-md-5">
                <div class="border-top border-translucent">
                    <div id="purchasersSellersTable">
                        <div class="table-responsive scrollbar mx-n1 px-1">
                            <table class="table table-sm fs-9 leads-table">
                                <thead>
                                    <tr>
                                        <th class="white-space-nowrap fs-9 align-middle ps-0" style="max-width:20px; width:18px;">
                                            <div class="form-check mb-0 fs-8">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </th>
                                        <th class="sort align-middle ps-0 pe-5 text-uppercase text-nowrap" scope="col" data-sort="deals_name" style="min-width:120px;">Deal name</th>
                                        <th class="sort align-middle ps-4 pe-5 text-uppercase text-nowrap" scope="col" data-sort="deal_owner" style="min-width:50px;">Deal owner</th>
                                        <th class="sort align-middle ps-4 pe-5 text-uppercase text-nowrap" scope="col" data-sort="account_name" style="min-width:250px;">Account name</th>
                                        <th class="sort align-middle pe-5 text-uppercase text-nowrap" scope="col" data-sort="stage" style="min-width:160px;">Stage</th>
                                        <th class="sort align-middle ps-4 pe-5 text-uppercase text-nowrap" scope="col" data-sort="amount" style="min-width:50px;">Amount</th>
                                        <th class="sort text-end align-middle pe-0 ps-4" scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="purchasers-sellers-body">
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs-9 align-middle py-0">
                                            <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0">
                                            <a class="fw-bold text-primary" href="#!">Jo_Td01</a>
                                        </td>
                                        <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-m me-3">
                                                    <img class="rounded-circle avatar-placeholder img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img//team/35.webp" alt="">
                                                </div>
                                                <a class="text-body-highlight fw-bold stretched-link text-black" href="#!">Ally Aagaard</a>
                                            </div>
                                        </td>
                                        <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Themewagon</td>
                                        <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                                            <div class="d-flex align-items-center gap-3">
                                                <div style="--phoenix-circle-progress-bar:20"><svg class="circle-progress-svg" width="38" height="38" viewBox="0 0 125 125">
                                                        <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                                                        <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#3874FF" stroke-width="12"></circle>
                                                    </svg></div>
                                                <h6 class="mb-0 text-body">Analysis</h6>
                                            </div>
                                        </td>
                                        <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$140<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down ms-2 text-danger" style="min-height:8px; width:14px;">
                                                <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                                                <polyline points="17 18 23 18 23 12"></polyline>
                                            </svg></td>
                                        <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                                            <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                    </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs-9 align-middle py-0">
                                            <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;dealsName&quot;:&quot;Printing Dimensions&quot;,&quot;dealOwner&quot;:{&quot;avatar&quot;:&quot;/team/35.webp&quot;,&quot;name&quot;:&quot;Alex Abadi&quot;},&quot;accountName&quot;:&quot;Black Box&quot;,&quot;stage&quot;:{&quot;label&quot;:&quot;Statement&quot;,&quot;color&quot;:&quot;#0097EB&quot;,&quot;data&quot;:40},&quot;amount&quot;:{&quot;totalAmount&quot;:&quot;$214&quot;,&quot;icon&quot;:&quot;trending-up&quot;,&quot;color&quot;:&quot;text-success&quot;}}"></div>
                                        </td>
                                        <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0"><a class="fw-bold text-primary" href="#!">Printing Dimensions</a></td>
                                        <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-m me-3">
                                                    <img class="rounded-circle img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img//team/35.webp" alt=""></div><a class="text-body-highlight fw-bold stretched-link text-black" href="#!">Alex Abadi</a>
                                            </div>
                                        </td>
                                        <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Black Box</td>
                                        <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                                            <div class="d-flex align-items-center gap-3">
                                                <div style="--phoenix-circle-progress-bar:40"><svg class="circle-progress-svg" width="38" height="38" viewBox="0 0 125 125">
                                                        <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                                                        <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#0097EB" stroke-width="12"></circle>
                                                    </svg></div>
                                                <h6 class="mb-0 text-body">Statement</h6>
                                            </div>
                                        </td>
                                        <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$214<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up ms-2 text-success" style="min-height:8px; width:14px;">
                                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                                <polyline points="17 6 23 6 23 12"></polyline>
                                            </svg></td>
                                        <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                                            <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                    </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs-9 align-middle py-0">
                                            <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;dealsName&quot;:&quot;MM_TD_120&quot;,&quot;dealOwner&quot;:{&quot;avatar&quot;:&quot;/team/32.webp&quot;,&quot;name&quot;:&quot;Kylia Abbott&quot;},&quot;accountName&quot;:&quot;Hunter Leader&quot;,&quot;stage&quot;:{&quot;label&quot;:&quot;Action&quot;,&quot;color&quot;:&quot;#E5780B&quot;,&quot;data&quot;:50},&quot;amount&quot;:{&quot;totalAmount&quot;:&quot;$412&quot;,&quot;icon&quot;:&quot;trending-up&quot;,&quot;color&quot;:&quot;text-success&quot;}}"></div>
                                        </td>
                                        <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0"><a class="fw-bold text-primary" href="#!">MM_TD_120</a></td>
                                        <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-m me-3">
                                                    <img class="rounded-circle img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img//team/35.webp" alt=""></div><a class="text-body-highlight fw-bold stretched-link text-black" href="#!">Kylia Abbott</a>
                                            </div>
                                        </td>
                                        <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Hunter Leader</td>
                                        <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                                            <div class="d-flex align-items-center gap-3">
                                                <div style="--phoenix-circle-progress-bar:50"><svg class="circle-progress-svg" width="38" height="38" viewBox="0 0 125 125">
                                                        <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                                                        <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#E5780B" stroke-width="12"></circle>
                                                    </svg></div>
                                                <h6 class="mb-0 text-body">Action</h6>
                                            </div>
                                        </td>
                                        <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$412<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up ms-2 text-success" style="min-height:8px; width:14px;">
                                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                                <polyline points="17 6 23 6 23 12"></polyline>
                                            </svg></td>
                                        <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                                            <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                    </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs-9 align-middle py-0">
                                            <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;dealsName&quot;:&quot;Truhlar And Truhlar Attys&quot;,&quot;dealOwner&quot;:{&quot;avatar&quot;:&quot;/team/32.webp&quot;,&quot;name&quot;:&quot;Kylia Abbott&quot;},&quot;accountName&quot;:&quot;Eagle Eye&quot;,&quot;stage&quot;:{&quot;label&quot;:&quot;Offering&quot;,&quot;color&quot;:&quot;#6E7891&quot;,&quot;data&quot;:60},&quot;amount&quot;:{&quot;totalAmount&quot;:&quot;$110&quot;,&quot;icon&quot;:&quot;trending-up&quot;,&quot;color&quot;:&quot;text-success&quot;}}"></div>
                                        </td>
                                        <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0"><a class="fw-bold text-primary" href="#!">Truhlar And Truhlar Attys</a></td>
                                        <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-m me-3">
                                                    <img class="rounded-circle img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img//team/35.webp" alt=""></div><a class="text-body-highlight fw-bold stretched-link text-black" href="#!">Kylia Abbott</a>
                                            </div>
                                        </td>
                                        <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Eagle Eye</td>
                                        <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                                            <div class="d-flex align-items-center gap-3">
                                                <div style="--phoenix-circle-progress-bar:60"><svg class="circle-progress-svg" width="38" height="38" viewBox="0 0 125 125">
                                                        <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                                                        <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#6E7891" stroke-width="12"></circle>
                                                    </svg></div>
                                                <h6 class="mb-0 text-body">Offering</h6>
                                            </div>
                                        </td>
                                        <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$110<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up ms-2 text-success" style="min-height:8px; width:14px;">
                                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                                <polyline points="17 6 23 6 23 12"></polyline>
                                            </svg></td>
                                        <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                                            <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                    </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs-9 align-middle py-0">
                                            <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;dealsName&quot;:&quot;Morlong Associates&quot;,&quot;dealOwner&quot;:{&quot;avatar&quot;:&quot;/team/59.webp&quot;,&quot;name&quot;:&quot;Lyla Nicole&quot;},&quot;accountName&quot;:&quot;Black Box&quot;,&quot;stage&quot;:{&quot;label&quot;:&quot;Negotiation&quot;,&quot;color&quot;:&quot;#25B003&quot;,&quot;data&quot;:100},&quot;amount&quot;:{&quot;totalAmount&quot;:&quot;$325&quot;,&quot;icon&quot;:&quot;trending-down&quot;,&quot;color&quot;:&quot;text-danger&quot;}}"></div>
                                        </td>
                                        <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0"><a class="fw-bold text-primary" href="#!">Morlong Associates</a></td>
                                        <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-m me-3">
                                                    <img class="rounded-circle img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img//team/35.webp" alt=""></div><a class="text-body-highlight fw-bold stretched-link text-black" href="#!">Lyla Nicole</a>
                                            </div>
                                        </td>
                                        <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Black Box</td>
                                        <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                                            <div class="d-flex align-items-center gap-3">
                                                <div style="--phoenix-circle-progress-bar:100"><svg class="circle-progress-svg" width="38" height="38" viewBox="0 0 125 125">
                                                        <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                                                        <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#25B003" stroke-width="12"></circle>
                                                    </svg></div>
                                                <h6 class="mb-0 text-body">Negotiation</h6>
                                            </div>
                                        </td>
                                        <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$325<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down ms-2 text-danger" style="min-height:8px; width:14px;">
                                                <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                                                <polyline points="17 18 23 18 23 12"></polyline>
                                            </svg></td>
                                        <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                                            <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                    </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs-9 align-middle py-0">
                                            <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;dealsName&quot;:&quot;Product Order&quot;,&quot;dealOwner&quot;:{&quot;avatar&quot;:&quot;/team/18.webp&quot;,&quot;name&quot;:&quot;Hunter Leader&quot;},&quot;accountName&quot;:&quot;Themewagon&quot;,&quot;stage&quot;:{&quot;label&quot;:&quot;Negotiation&quot;,&quot;color&quot;:&quot;#25B003&quot;,&quot;data&quot;:100},&quot;amount&quot;:{&quot;totalAmount&quot;:&quot;$198&quot;,&quot;icon&quot;:&quot;trending-down&quot;,&quot;color&quot;:&quot;text-warning&quot;}}"></div>
                                        </td>
                                        <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0"><a class="fw-bold text-primary" href="#!">Product Order</a></td>
                                        <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-m me-3">
                                                    <img class="rounded-circle img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img//team/35.webp" alt=""></div><a class="text-body-highlight fw-bold stretched-link text-black" href="#!">Hunter Leader</a>
                                            </div>
                                        </td>
                                        <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Themewagon</td>
                                        <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                                            <div class="d-flex align-items-center gap-3">
                                                <div style="--phoenix-circle-progress-bar:100"><svg class="circle-progress-svg" width="38" height="38" viewBox="0 0 125 125">
                                                        <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                                                        <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#25B003" stroke-width="12"></circle>
                                                    </svg></div>
                                                <h6 class="mb-0 text-body">Negotiation</h6>
                                            </div>
                                        </td>
                                        <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$198<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down ms-2 text-warning" style="min-height:8px; width:14px;">
                                                <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                                                <polyline points="17 18 23 18 23 12"></polyline>
                                            </svg></td>
                                        <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                                            <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                    </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs-9 align-middle py-0">
                                            <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;dealsName&quot;:&quot;Feltz Printing Service&quot;,&quot;dealOwner&quot;:{&quot;avatar&quot;:&quot;/team/avatar.webp&quot;,&quot;name&quot;:&quot;Ally Aagaard&quot;,&quot;placeholder&quot;:true},&quot;accountName&quot;:&quot;Themewagon&quot;,&quot;stage&quot;:{&quot;label&quot;:&quot;Offering&quot;,&quot;color&quot;:&quot;#6E7891&quot;,&quot;data&quot;:80},&quot;amount&quot;:{&quot;totalAmount&quot;:&quot;$142&quot;,&quot;icon&quot;:&quot;trending-up&quot;,&quot;color&quot;:&quot;text-success&quot;}}"></div>
                                        </td>
                                        <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0"><a class="fw-bold text-primary" href="#!">Feltz Printing Service</a></td>
                                        <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-m me-3">
                                                    <img class="rounded-circle avatar-placeholder img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img//team/35.webp" alt=""></div><a class="text-body-highlight fw-bold stretched-link text-black" href="#!">Ally Aagaard</a>
                                            </div>
                                        </td>
                                        <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Themewagon</td>
                                        <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                                            <div class="d-flex align-items-center gap-3">
                                                <div style="--phoenix-circle-progress-bar:80"><svg class="circle-progress-svg" width="38" height="38" viewBox="0 0 125 125">
                                                        <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                                                        <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#6E7891" stroke-width="12"></circle>
                                                    </svg></div>
                                                <h6 class="mb-0 text-body">Offering</h6>
                                            </div>
                                        </td>
                                        <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$142<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up ms-2 text-success" style="min-height:8px; width:14px;">
                                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                                <polyline points="17 6 23 6 23 12"></polyline>
                                            </svg></td>
                                        <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                                            <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                    </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs-9 align-middle py-0">
                                            <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;dealsName&quot;:&quot;Flat Plate SP&quot;,&quot;dealOwner&quot;:{&quot;avatar&quot;:&quot;/team/avatar.webp&quot;,&quot;name&quot;:&quot;Ally Aagaard&quot;,&quot;placeholder&quot;:true},&quot;accountName&quot;:&quot;Eagle Eye&quot;,&quot;stage&quot;:{&quot;label&quot;:&quot;Offering&quot;,&quot;color&quot;:&quot;#6E7891&quot;,&quot;data&quot;:80},&quot;amount&quot;:{&quot;totalAmount&quot;:&quot;$457&quot;,&quot;icon&quot;:&quot;trending-up&quot;,&quot;color&quot;:&quot;text-success&quot;}}"></div>
                                        </td>
                                        <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0"><a class="fw-bold text-primary" href="#!">Flat Plate SP</a></td>
                                        <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-m me-3">
                                                    <img class="rounded-circle avatar-placeholder img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img//team/35.webp" alt=""></div><a class="text-body-highlight fw-bold stretched-link text-black" href="#!">Ally Aagaard</a>
                                            </div>
                                        </td>
                                        <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Eagle Eye</td>
                                        <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                                            <div class="d-flex align-items-center gap-3">
                                                <div style="--phoenix-circle-progress-bar:80"><svg class="circle-progress-svg" width="38" height="38" viewBox="0 0 125 125">
                                                        <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                                                        <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#6E7891" stroke-width="12"></circle>
                                                    </svg></div>
                                                <h6 class="mb-0 text-body">Offering</h6>
                                            </div>
                                        </td>
                                        <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$457<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up ms-2 text-success" style="min-height:8px; width:14px;">
                                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                                <polyline points="17 6 23 6 23 12"></polyline>
                                            </svg></td>
                                        <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                                            <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                    </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs-9 align-middle py-0">
                                            <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;dealsName&quot;:&quot;Evacuated Tube&quot;,&quot;dealOwner&quot;:{&quot;avatar&quot;:&quot;/team/avatar.webp&quot;,&quot;name&quot;:&quot;Ally Aagaard&quot;},&quot;accountName&quot;:&quot;Hunter Leader&quot;,&quot;stage&quot;:{&quot;label&quot;:&quot;Action&quot;,&quot;color&quot;:&quot;#E5780B&quot;,&quot;data&quot;:100},&quot;amount&quot;:{&quot;totalAmount&quot;:&quot;$120&quot;,&quot;icon&quot;:&quot;trending-down&quot;,&quot;color&quot;:&quot;text-warning&quot;}}"></div>
                                        </td>
                                        <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0"><a class="fw-bold text-primary" href="#!">Evacuated Tube</a></td>
                                        <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-m me-3">
                                                    <img class="rounded-circle img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img//team/35.webp" alt=""></div><a class="text-body-highlight fw-bold stretched-link text-black" href="#!">Ally Aagaard</a>
                                            </div>
                                        </td>
                                        <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Hunter Leader</td>
                                        <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                                            <div class="d-flex align-items-center gap-3">
                                                <div style="--phoenix-circle-progress-bar:100"><svg class="circle-progress-svg" width="38" height="38" viewBox="0 0 125 125">
                                                        <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                                                        <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#E5780B" stroke-width="12"></circle>
                                                    </svg></div>
                                                <h6 class="mb-0 text-body">Action</h6>
                                            </div>
                                        </td>
                                        <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$120<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down ms-2 text-warning" style="min-height:8px; width:14px;">
                                                <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                                                <polyline points="17 18 23 18 23 12"></polyline>
                                            </svg></td>
                                        <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                                            <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                    </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs-9 align-middle py-0">
                                            <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;dealsName&quot;:&quot;Product Delivery&quot;,&quot;dealOwner&quot;:{&quot;avatar&quot;:&quot;/team/35.webp&quot;,&quot;name&quot;:&quot;Alex Abadi&quot;},&quot;accountName&quot;:&quot;Themewagon&quot;,&quot;stage&quot;:{&quot;label&quot;:&quot;Analysis&quot;,&quot;color&quot;:&quot;#3874FF&quot;,&quot;data&quot;:100},&quot;amount&quot;:{&quot;totalAmount&quot;:&quot;$150&quot;,&quot;icon&quot;:&quot;trending-down&quot;,&quot;color&quot;:&quot;text-danger&quot;}}"></div>
                                        </td>
                                        <td class="deals_name align-middle white-space-nowrap fw-semibold text-body-highlight ps-0 py-0"><a class="fw-bold text-primary" href="#!">Product Delivery</a></td>
                                        <td class="deal_owner align-middle white-space-nowrap fw-semibold text-body-emphasis ps-4 py-0">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-m me-3">
                                                    <img class="rounded-circle img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img//team/35.webp" alt=""></div><a class="text-body-highlight fw-bold stretched-link text-black" href="#!">Alex Abadi</a>
                                            </div>
                                        </td>
                                        <td class="account_name align-middle white-space-nowrap ps-4 fw-semibold text-body py-0">Themewagon</td>
                                        <td class="stage align-middle white-space-nowrap fw-bold text-body py-2">
                                            <div class="d-flex align-items-center gap-3">
                                                <div style="--phoenix-circle-progress-bar:100"><svg class="circle-progress-svg" width="38" height="38" viewBox="0 0 125 125">
                                                        <circle class="progress-bar-rail" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke-width="15"></circle>
                                                        <circle class="progress-bar-top" cx="65" cy="45" r="54" fill="none" stroke-linecap="round" stroke="#3874FF" stroke-width="12"></circle>
                                                    </svg></div>
                                                <h6 class="mb-0 text-body">Analysis</h6>
                                            </div>
                                        </td>
                                        <td class="amount align-middle white-space-nowrap fw-bold ps-4 text-body py-0">$150<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down ms-2 text-danger" style="min-height:8px; width:14px;">
                                                <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                                                <polyline points="17 18 23 18 23 12"></polyline>
                                            </svg></td>
                                        <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
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
                        <div class="row align-items-center justify-content-between pe-0 fs-9">
                            <div class="col-auto d-flex">
                                <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info">1 to 10 <span class="text-body-tertiary"> Items of </span>15</p><a class="fw-semibold" href="#!" data-list-view="*">View all<svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5625em;">
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
                                    <li class="active"><button class="page" type="button" data-i="1" data-page="10">1</button></li>
                                    <li><button class="page" type="button" data-i="2" data-page="10">2</button></li>
                                </ul><button class="page-link pe-0" data-list-pagination="next"><svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                    </svg><!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
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