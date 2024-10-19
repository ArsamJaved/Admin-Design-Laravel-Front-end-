@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="project_detail">
        <div class="p-md-4 p-3">
            <div class="mb-5">
                <div class="d-flex justify-content-between">
                    <h2 class="text-body-emphasis fw-bolder mb-2">Retrieving Old Repos to Redirect to a new URL</h2>
                    <div class="btn-reveal-trigger">
                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                            </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end py-2">
                            <a class="dropdown-item" href="#!">Edit</a>
                            <a class="dropdown-item text-danger" href="#!">Delete</a>
                            <a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a>
                        </div>
                    </div>
                </div>
                <span class="badge badge-phoenix badge-phoenix-primary p-2">Ongoing
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M153.59 110.46A21.41 21.41 0 0 0 152.48 79A62.67 62.67 0 0 0 112 64l-3.27.09h-.48C74.4 66.15 48 95.55 48.07 131c0 19 8 29.06 14.32 37.11a20.6 20.6 0 0 0 14.7 7.8c.26 0 .7.05 2 .05a19.06 19.06 0 0 0 13.75-5.89Zm250.2-46.35l-3.27-.1H400a62.67 62.67 0 0 0-40.52 15a21.41 21.41 0 0 0-1.11 31.44l60.77 59.65a19.06 19.06 0 0 0 13.79 5.9c1.28 0 1.72 0 2-.05a20.6 20.6 0 0 0 14.69-7.8c6.36-8.05 14.28-18.08 14.32-37.11c.06-35.49-26.34-64.89-60.15-66.93" />
                        <path fill="currentColor" d="M256.07 96c-97 0-176 78.95-176 176a175.23 175.23 0 0 0 40.81 112.56l-36.12 36.13a16 16 0 1 0 22.63 22.62l36.12-36.12a175.63 175.63 0 0 0 225.12 0l36.13 36.12a16 16 0 1 0 22.63-22.62l-36.13-36.13A175.17 175.17 0 0 0 432.07 272c0-97-78.95-176-176-176m16 176a16 16 0 0 1-16 16h-80a16 16 0 0 1 0-32h64v-96a16 16 0 0 1 32 0Z" />
                    </svg>
                </span>
            </div>
            <div class="row gx-0 gx-sm-5 gy-5">
                <div class="col-12 col-lg-3">
                    <div class="mb-4 mb-xl-5">
                        <div class="row gx-0 gx-sm-5">
                            <div class="col-12 col-sm-auto">
                                <table class="lh-sm mb-4 mb-sm-0 mb-xl-4">
                                    <tbody>
                                        <tr>
                                            <td class="py-1" colspan="2">
                                                <div class="d-flex align-items-center">
                                                    <svg class="svg-inline--fa fa-earth-americas me-2 fs-9" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="earth-americas" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M57.7 193l9.4 16.4c8.3 14.5 21.9 25.2 38 29.8L163 255.7c17.2 4.9 29 20.6 29 38.5v39.9c0 11 6.2 21 16 25.9s16 14.9 16 25.9v39c0 15.6 14.9 26.9 29.9 22.6c16.1-4.6 28.6-17.5 32.7-33.8l2.8-11.2c4.2-16.9 15.2-31.4 30.3-40l8.1-4.6c15-8.5 24.2-24.5 24.2-41.7v-8.3c0-12.7-5.1-24.9-14.1-33.9l-3.9-3.9c-9-9-21.2-14.1-33.9-14.1H257c-11.1 0-22.1-2.9-31.8-8.4l-34.5-19.7c-4.3-2.5-7.6-6.5-9.2-11.2c-3.2-9.6 1.1-20 10.2-24.5l5.9-3c6.6-3.3 14.3-3.9 21.3-1.5l23.2 7.7c8.2 2.7 17.2-.4 21.9-7.5c4.7-7 4.2-16.3-1.2-22.8l-13.6-16.3c-10-12-9.9-29.5 .3-41.3l15.7-18.3c8.8-10.3 10.2-25 3.5-36.7l-2.4-4.2c-3.5-.2-6.9-.3-10.4-.3C163.1 48 84.4 108.9 57.7 193zM464 256c0-36.8-9.6-71.4-26.4-101.5L412 164.8c-15.7 6.3-23.8 23.8-18.5 39.8l16.9 50.7c3.5 10.4 12 18.3 22.6 20.9l29.1 7.3c1.2-9 1.8-18.2 1.8-27.5zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                                    </svg>
                                                    <h5 class="text-body mb-0">Public project</h5>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-top py-1">
                                                <div class="d-flex align-items-center">
                                                    <svg class="svg-inline--fa fa-user me-2 fs-9" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path>
                                                    </svg>
                                                    <h5 class="text-body mb-0 text-nowrap">Client :</h5>
                                                </div>
                                            </td>
                                            <td class="ps-1 py-1">
                                                <a class="fw-semibold d-block lh-sm" href="#!">Gobble the Bleep Inc</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-top py-1">
                                                <div class="d-flex align-items-center">
                                                    <svg class="svg-inline--fa fa-credit-card me-2 fs-9" aria-hidden="true" focusable="false" data-prefix="far" data-icon="credit-card" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path>
                                                    </svg>
                                                    <h5 class="text-body mb-0 text-nowrap">Budget : </h5>
                                                </div>
                                            </td>
                                            <td class="fw-bold ps-1 py-1 text-body-highlight">$8,742</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12 col-sm-auto">
                                <table class="lh-sm">
                                    <tbody>
                                        <tr>
                                            <td class="align-top py-1 text-body text-nowrap fw-bold">Started : </td>
                                            <td class="text-opacity-85 fw-semibold ps-3">17th Nov, 2020</td>
                                        </tr>
                                        <tr>
                                            <td class="align-top py-1 text-body text-nowrap fw-bold">Deadline :</td>
                                            <td class="text-opacity-85 fw-semibold ps-3">21st May, 2028</td>
                                        </tr>
                                        <tr>
                                            <td class="align-top py-1 text-body text-nowrap fw-bold">Progress :</td>
                                            <td class="text-warning fw-semibold ps-3">80%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex align-items-center mt-5">
                            <svg class="svg-inline--fa fa-list-check me-2 fs-9" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                            </svg>
                            <p class="text-body-emphasis mb-0 me-2">
                                91
                                <span class="text-body fw-normal ms-2">tasks</span>
                            </p>
                            <a class="fw-bold fs-9 mt-1" href="#!">See tasks <svg class="svg-inline--fa fa-chevron-right me-2 fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="row justify-content-between mb-3 g-3">
                        <div class="col-auto">
                            <h4>Task completed over time</h4>
                            <p class="mb-0">Hard works done across all projects</p>
                        </div>
                        <div class="col-8 col-sm-4">
                            <select class="form-select form-select-sm">
                                <option>Mar 1 - 31, 2022</option>
                                <option>April 1 - 30, 2022</option>
                                <option>May 1 - 31, 2022</option>
                            </select>
                        </div>
                    </div>
                    <div id="line-chart" style="min-width: 100px; height: 270px;"></div>
                </div>
                <div class="col-lg-3 col-12 mt-0">
                    <div class="mb-5">
                        <h4>Work loads</h4>
                        <h6 class="text-body-tertiary">Last 7 days</h6>
                    </div>
                    <div id="main" style="width: 200px; height: 350px;"></div>

                </div>
                <div class="col-lg-5 col-12 mt-0">
                    <h4 class="mb-4">Team members</h4>
                    <div class="avatar-group">
                        <a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-m  rounded-circle">
                                <img class="rounded-circle img-fluid " src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt="">
                            </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                            <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url('https://prium.github.io/phoenix/v1.18.0/assets/img/bg/bg-32.png');background-size: auto;"></div>
                                <div class="p-3">
                                    <div class="text-end">
                                        <button class="btn p-0 me-2">
                                            <svg class="svg-inline--fa fa-user-plus text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"></path>
                                            </svg>
                                        </button>
                                        <button class="btn p-0">
                                            <svg class="svg-inline--fa fa-ellipsis text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                            <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt="">
                                        </div>
                                        <h6 class="text-white">Jean Renoir</h6>
                                        <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                        <div class="d-flex flex-center mb-3">
                                            <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                <g transform="translate(256 256)">
                                                    <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                        <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                    </g>
                                                </g>
                                            </svg><!-- <span class="fa-solid fa-circle mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
                                            <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <button class="btn btn-outline-secondary btn-icon btn-icon-lg me-2">
                                                <svg class="svg-inline--fa fa-phone" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                                </svg>
                                            </button>
                                            <button class="btn btn-outline-secondary btn-icon btn-icon-lg me-2">
                                                <svg class="svg-inline--fa fa-message" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="message" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h96v80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64z"></path>
                                                </svg>
                                            </button>
                                            <button class="btn btn-outline-secondary btn-icon btn-icon-lg">
                                                <svg class="svg-inline--fa fa-video" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="video" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M0 128C0 92.7 28.7 64 64 64H320c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2V384c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1V320 192 174.9l14.2-9.5 96-64c9.8-6.5 22.4-7.2 32.9-1.6z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <button class="btn btn-outline-primary">
                                            <svg class="svg-inline--fa fa-envelope me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"></path>
                                            </svg>
                                            Send Email
                                        </button>
                                    </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                    <li class="nav-item">
                                        <a class="nav-link px-3 d-flex justify-content-between" href="#!">
                                            <div><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard me-2 text-body d-inline-block">
                                                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                                </svg>
                                                <span class="text-body-highlight flex-1">Assigned Projects</span>
                                            </div>
                                            <svg class="svg-inline--fa fa-chevron-right fs-11" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-3 d-flex justify-content-between" href="#!">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart me-2 text-body">
                                                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                                    <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                                                </svg>
                                                <span class="text-body-highlight flex-1">View activiy</span>
                                            </div>
                                            <svg class="svg-inline--fa fa-chevron-right fs-11" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div>
                        <a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-m  rounded-circle">
                                <img class="rounded-circle img-fluid " src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/59.webp" alt="">
                            </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px; position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(550px, 350.667px, 0px);" data-popper-placement="bottom-start" data-popper-reference-hidden="" data-popper-escaped="">
                            <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url('https://prium.github.io/phoenix/v1.18.0/assets/img/bg/bg-32.png');background-size: auto;"></div>
                                <div class="p-3">
                                    <div class="text-end">
                                        <button class="btn p-0 me-2">
                                            <svg class="svg-inline--fa fa-user-plus text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"></path>
                                            </svg>
                                        </button>
                                        <button class="btn p-0">
                                            <svg class="svg-inline--fa fa-ellipsis text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                            <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt="">
                                        </div>
                                        <h6 class="text-white">Jean Renoir</h6>
                                        <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                        <div class="d-flex flex-center mb-3">
                                            <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                <g transform="translate(256 256)">
                                                    <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                        <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                    </g>
                                                </g>
                                            </svg><!-- <span class="fa-solid fa-circle mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
                                            <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <button class="btn btn-outline-secondary btn-icon btn-icon-lg me-2">
                                                <svg class="svg-inline--fa fa-phone" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                                </svg>
                                            </button>
                                            <button class="btn btn-outline-secondary btn-icon btn-icon-lg me-2">
                                                <svg class="svg-inline--fa fa-message" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="message" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h96v80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64z"></path>
                                                </svg>
                                            </button>
                                            <button class="btn btn-outline-secondary btn-icon btn-icon-lg">
                                                <svg class="svg-inline--fa fa-video" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="video" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M0 128C0 92.7 28.7 64 64 64H320c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2V384c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1V320 192 174.9l14.2-9.5 96-64c9.8-6.5 22.4-7.2 32.9-1.6z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <button class="btn btn-outline-primary">
                                            <svg class="svg-inline--fa fa-envelope me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"></path>
                                            </svg>
                                            Send Email
                                        </button>
                                    </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                    <li class="nav-item">
                                        <a class="nav-link px-3 d-flex justify-content-between" href="#!">
                                            <div><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard me-2 text-body d-inline-block">
                                                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                                </svg>
                                                <span class="text-body-highlight flex-1">Assigned Projects</span>
                                            </div>
                                            <svg class="svg-inline--fa fa-chevron-right fs-11" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-3 d-flex justify-content-between" href="#!">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart me-2 text-body">
                                                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                                    <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                                                </svg>
                                                <span class="text-body-highlight flex-1">View activiy</span>
                                            </div>
                                            <svg class="svg-inline--fa fa-chevron-right fs-11" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div>
                        <a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-m  rounded-circle">
                                <img class="rounded-circle img-fluid " src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/35.webp" alt="">
                            </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px; position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(550px, 350.667px, 0px);" data-popper-placement="bottom-start" data-popper-reference-hidden="" data-popper-escaped="">
                            <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url('https://prium.github.io/phoenix/v1.18.0/assets/img/bg/bg-32.png');background-size: auto;"></div>
                                <div class="p-3">
                                    <div class="text-end">
                                        <button class="btn p-0 me-2">
                                            <svg class="svg-inline--fa fa-user-plus text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"></path>
                                            </svg>
                                        </button>
                                        <button class="btn p-0">
                                            <svg class="svg-inline--fa fa-ellipsis text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                            <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt="">
                                        </div>
                                        <h6 class="text-white">Jean Renoir</h6>
                                        <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                        <div class="d-flex flex-center mb-3">
                                            <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                <g transform="translate(256 256)">
                                                    <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                        <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                    </g>
                                                </g>
                                            </svg><!-- <span class="fa-solid fa-circle mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
                                            <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <button class="btn btn-outline-secondary btn-icon btn-icon-lg me-2">
                                                <svg class="svg-inline--fa fa-phone" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                                </svg>
                                            </button>
                                            <button class="btn btn-outline-secondary btn-icon btn-icon-lg me-2">
                                                <svg class="svg-inline--fa fa-message" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="message" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h96v80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64z"></path>
                                                </svg>
                                            </button>
                                            <button class="btn btn-outline-secondary btn-icon btn-icon-lg">
                                                <svg class="svg-inline--fa fa-video" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="video" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M0 128C0 92.7 28.7 64 64 64H320c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2V384c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1V320 192 174.9l14.2-9.5 96-64c9.8-6.5 22.4-7.2 32.9-1.6z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <button class="btn btn-outline-primary">
                                            <svg class="svg-inline--fa fa-envelope me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"></path>
                                            </svg>
                                            Send Email
                                        </button>
                                    </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                    <li class="nav-item">
                                        <a class="nav-link px-3 d-flex justify-content-between" href="#!">
                                            <div><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard me-2 text-body d-inline-block">
                                                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                                </svg>
                                                <span class="text-body-highlight flex-1">Assigned Projects</span>
                                            </div>
                                            <svg class="svg-inline--fa fa-chevron-right fs-11" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-3 d-flex justify-content-between" href="#!">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart me-2 text-body">
                                                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                                    <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                                                </svg>
                                                <span class="text-body-highlight flex-1">View activiy</span>
                                            </div>
                                            <svg class="svg-inline--fa fa-chevron-right fs-11" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div>
                        <a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <div class="avatar avatar-m  rounded-circle">
                                <img class="rounded-circle img-fluid " src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/58.webp" alt="">
                            </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px; position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(550px, 350.667px, 0px);" data-popper-placement="bottom-start" data-popper-reference-hidden="" data-popper-escaped="">
                            <div class="position-relative">
                                <div class="bg-holder z-n1" style="background-image:url('https://prium.github.io/phoenix/v1.18.0/assets/img/bg/bg-32.png');background-size: auto;"></div>
                                <div class="p-3">
                                    <div class="text-end">
                                        <button class="btn p-0 me-2">
                                            <svg class="svg-inline--fa fa-user-plus text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"></path>
                                            </svg>
                                        </button>
                                        <button class="btn p-0">
                                            <svg class="svg-inline--fa fa-ellipsis text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                            <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt="">
                                        </div>
                                        <h6 class="text-white">Jean Renoir</h6>
                                        <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                        <div class="d-flex flex-center mb-3">
                                            <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                <g transform="translate(256 256)">
                                                    <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                        <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                    </g>
                                                </g>
                                            </svg><!-- <span class="fa-solid fa-circle mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
                                            <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-body-emphasis">
                                <div class="p-3 border-bottom border-translucent">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <button class="btn btn-outline-secondary btn-icon btn-icon-lg me-2">
                                                <svg class="svg-inline--fa fa-phone" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                                </svg>
                                            </button>
                                            <button class="btn btn-outline-secondary btn-icon btn-icon-lg me-2">
                                                <svg class="svg-inline--fa fa-message" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="message" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h96v80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64z"></path>
                                                </svg>
                                            </button>
                                            <button class="btn btn-outline-secondary btn-icon btn-icon-lg">
                                                <svg class="svg-inline--fa fa-video" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="video" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M0 128C0 92.7 28.7 64 64 64H320c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2V384c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1V320 192 174.9l14.2-9.5 96-64c9.8-6.5 22.4-7.2 32.9-1.6z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <button class="btn btn-outline-primary">
                                            <svg class="svg-inline--fa fa-envelope me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"></path>
                                            </svg>
                                            Send Email
                                        </button>
                                    </div>
                                </div>
                                <ul class="nav d-flex flex-column py-3 border-bottom">
                                    <li class="nav-item">
                                        <a class="nav-link px-3 d-flex justify-content-between" href="#!">
                                            <div><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard me-2 text-body d-inline-block">
                                                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                                </svg>
                                                <span class="text-body-highlight flex-1">Assigned Projects</span>
                                            </div>
                                            <svg class="svg-inline--fa fa-chevron-right fs-11" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-3 d-flex justify-content-between" href="#!">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart me-2 text-body">
                                                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                                    <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                                                </svg>
                                                <span class="text-body-highlight flex-1">View activiy</span>
                                            </div>
                                            <svg class="svg-inline--fa fa-chevron-right fs-11" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-3 d-flex justify-content-between">
                                <a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a>
                                <a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-body-emphasis mb-4">Tags</h4><span class="badge badge-tag me-2 mb-1">Unused_brain</span><span class="badge badge-tag me-2 mb-1">Machine</span><span class="badge badge-tag me-2 mb-1">Coding</span><span class="badge badge-tag me-2 mb-1">Meseeks</span><span class="badge badge-tag me-2 mb-1">Smithpeople</span><span class="badge badge-tag me-2 mb-1">Rick</span><span class="badge badge-tag me-2 mb-1">Biology</span><span class="badge badge-tag me-2 mb-1">Neurology</span><span class="badge badge-tag me-2 mb-1">Brainlessness</span><span class="badge badge-tag me-2 mb-1">Stupidity</span><span class="badge badge-tag me-2 mb-1">Jerry</span><span class="badge badge-tag me-2 mb-1">Not _the_mouse</span>
                </div>
            </div>
            <div class="project-detail-texts">
                <h3 class="mb-4">Project overview</h3>
                <p class="mb-4">The new redirection team is happy to announce that we’ve fixed all our unresponsive URLs and redirected them to new URLs. The tremendous assistance from our support team and the dev team, as well as that of the team lead’s, this team has made an impossible possible within a week. They didn’t stop for a moment, and we got our pages working again for all the valuable users. </p>
                <p class="mb-0">Join us in celebrating the massive success of data transferring and getting us a huge revenue by eating out. Free public viewing and a buffet is offered for the great team as well as for the other teams working with us. We’ll be checking out places for the best option available at hands and we’ll let you know the schedule once we decide on one.
                    <a class="fw-semibold" href="#!">read more </a>
                </p>
            </div> 
        </div>
        <div class="p-4 p-lg-6 border-top">
                <h3 class="text-body-highlight mb-4 fw-bold">Recent activity</h3>
                <div class="timeline-vertical timeline-with-details">
                  <div class="timeline-item position-relative">
                    <div class="row g-md-3">
                      <div class="col-12 col-md-auto d-flex">
                        <div class="timeline-item-date order-1 order-md-0 me-md-4">
                          <p class="fs-10 fw-semibold text-opacity-85 text-end">01 DEC, 2023
                            <br class="d-none d-md-block"> 10:30 AM</p>
                        </div>
                        <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                          <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle">
                            <svg class="svg-inline--fa fa-chess text-primary-dark fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chess" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M144 16c0-8.8-7.2-16-16-16s-16 7.2-16 16V32H96c-8.8 0-16 7.2-16 16s7.2 16 16 16h16V96H60.2C49.1 96 40 105.1 40 116.2c0 2.5 .5 4.9 1.3 7.3L73.8 208H72c-13.3 0-24 10.7-24 24s10.7 24 24 24h4L60 384H196L180 256h4c13.3 0 24-10.7 24-24s-10.7-24-24-24h-1.8l32.5-84.5c.9-2.3 1.3-4.8 1.3-7.3c0-11.2-9.1-20.2-20.2-20.2H144V64h16c8.8 0 16-7.2 16-16s-7.2-16-16-16H144V16zM48 416L4.8 473.6C1.7 477.8 0 482.8 0 488c0 13.3 10.7 24 24 24H232c13.3 0 24-10.7 24-24c0-5.2-1.7-10.2-4.8-14.4L208 416H48zm288 0l-43.2 57.6c-3.1 4.2-4.8 9.2-4.8 14.4c0 13.3 10.7 24 24 24H488c13.3 0 24-10.7 24-24c0-5.2-1.7-10.2-4.8-14.4L464 416H336zM304 208v51.9c0 7.8 2.8 15.3 8 21.1L339.2 312 337 384H462.5l-3.3-72 28.3-30.8c5.4-5.9 8.5-13.6 8.5-21.7V208c0-8.8-7.2-16-16-16H464c-8.8 0-16 7.2-16 16v16H424V208c0-8.8-7.2-16-16-16H392c-8.8 0-16 7.2-16 16v16H352V208c0-8.8-7.2-16-16-16H320c-8.8 0-16 7.2-16 16zm80 96c0-8.8 7.2-16 16-16s16 7.2 16 16v32H384V304z"></path></svg>
                        </div>
                          <span class="timeline-bar border-end border-dashed  d-md-block d-none"></span>
                        </div>
                      </div>
                      <div class="col">
                        <div class="timeline-item-content ps-5 ps-md-3">
                          <h5 class="fs-9 lh-sm">Phoenix Template: Unleashing Creative Possibilities</h5>
                          <p class="fs-9">by <a class="fw-semibold" href="#!">Shantinon Mekalan</a></p>
                          <p class="fs-9 text-body-secondary mb-5">Discover limitless creativity with the Phoenix template! Our latest update offers an array of innovative features and design options.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="timeline-item position-relative">
                    <div class="row g-md-3">
                      <div class="col-12 col-md-auto d-flex">
                        <div class="timeline-item-date order-1 order-md-0 me-md-4">
                          <p class="fs-10 fw-semibold text-opacity-85 text-end">05 DEC, 2023<br class="d-none d-md-block"> 12:30 AM</p>
                        </div>
                        <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                          <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle"><svg class="svg-inline--fa fa-dove text-primary-dark fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dove" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M160.8 96.5c14 17 31 30.9 49.5 42.2c25.9 15.8 53.7 25.9 77.7 31.6V138.8C265.8 108.5 250 71.5 248.6 28c-.4-11.3-7.5-21.5-18.4-24.4c-7.6-2-15.8-.2-21 5.8c-13.3 15.4-32.7 44.6-48.4 87.2zM320 144v30.6l0 0v1.3l0 0 0 32.1c-60.8-5.1-185-43.8-219.3-157.2C97.4 40 87.9 32 76.6 32c-7.9 0-15.3 3.9-18.8 11C46.8 65.9 32 112.1 32 176c0 116.9 80.1 180.5 118.4 202.8L11.8 416.6C6.7 418 2.6 421.8 .9 426.8s-.8 10.6 2.3 14.8C21.7 466.2 77.3 512 160 512c3.6 0 7.2-1.2 10-3.5L245.6 448H320c88.4 0 160-71.6 160-160V128l29.9-44.9c1.3-2 2.1-4.4 2.1-6.8c0-6.8-5.5-12.3-12.3-12.3H400c-44.2 0-80 35.8-80 80zm80-16a16 16 0 1 1 0 32 16 16 0 1 1 0-32z"></path></svg>
                        </div>
                        <span class="timeline-bar border-end border-dashed d-md-block d-none"></span>
                        </div>
                      </div>
                      <div class="col">
                        <div class="timeline-item-content ps-6 ps-md-3">
                          <h5 class="fs-9 lh-sm">Empower Your Digital Presence: The Phoenix Template Unveiled</h5>
                          <p class="fs-9">by <a class="fw-semibold" href="#!">Bookworm22</a></p>
                          <p class="fs-9 text-body-secondary mb-5">Unveiling the Phoenix template, a game-changer for your digital presence. With its powerful features and sleek design,</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="timeline-item position-relative">
                    <div class="row g-md-3">
                      <div class="col-12 col-md-auto d-flex">
                        <div class="timeline-item-date order-1 order-md-0 me-md-4">
                          <p class="fs-10 fw-semibold text-opacity-85 text-end">15 DEC, 2023<br class="d-none d-md-block"> 2:30 AM</p>
                        </div>
                        <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                          <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle"><svg class="svg-inline--fa fa-dungeon text-primary-dark fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dungeon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M336.6 156.5c1.3 1.1 2.7 2.2 3.9 3.3c9.3 8.2 23 10.5 33.4 3.6l67.6-45.1c11.4-7.6 14.2-23.2 5.1-33.4C430 66.6 410.9 50.6 389.7 37.6c-11.9-7.3-26.9-1.4-32.1 11.6l-30.5 76.2c-4.5 11.1 .2 23.6 9.5 31.2zM328 36.8c5.1-12.8-1.6-27.4-15-30.5C294.7 2.2 275.6 0 256 0s-38.7 2.2-57 6.4C185.5 9.4 178.8 24 184 36.8l30.3 75.8c4.5 11.3 16.8 17.2 29 16c4.2-.4 8.4-.6 12.7-.6s8.6 .2 12.7 .6c12.1 1.2 24.4-4.7 29-16L328 36.8zM65.5 85c-9.1 10.2-6.3 25.8 5.1 33.4l67.6 45.1c10.3 6.9 24.1 4.6 33.4-3.6c1.3-1.1 2.6-2.3 4-3.3c9.3-7.5 13.9-20.1 9.5-31.2L154.4 49.2c-5.2-12.9-20.3-18.8-32.1-11.6C101.1 50.6 82 66.6 65.5 85zm314 137.1c.9 3.3 1.7 6.6 2.3 10c2.5 13 13 23.9 26.2 23.9h80c13.3 0 24.1-10.8 22.9-24c-2.5-27.2-9.3-53.2-19.7-77.3c-5.5-12.9-21.4-16.6-33.1-8.9l-68.6 45.7c-9.8 6.5-13.2 19.2-10 30.5zM53.9 145.8c-11.6-7.8-27.6-4-33.1 8.9C10.4 178.8 3.6 204.8 1.1 232c-1.2 13.2 9.6 24 22.9 24h80c13.3 0 23.8-10.8 26.2-23.9c.6-3.4 1.4-6.7 2.3-10c3.1-11.4-.2-24-10-30.5L53.9 145.8zM104 288H24c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V312c0-13.3-10.7-24-24-24zm304 0c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V312c0-13.3-10.7-24-24-24H408zM24 416c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V440c0-13.3-10.7-24-24-24H24zm384 0c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V440c0-13.3-10.7-24-24-24H408zM272 192c0-8.8-7.2-16-16-16s-16 7.2-16 16V464c0 8.8 7.2 16 16 16s16-7.2 16-16V192zm-64 32c0-8.8-7.2-16-16-16s-16 7.2-16 16V464c0 8.8 7.2 16 16 16s16-7.2 16-16V224zm128 0c0-8.8-7.2-16-16-16s-16 7.2-16 16V464c0 8.8 7.2 16 16 16s16-7.2 16-16V224z"></path></svg><!-- <span class="fa-solid fa-dungeon text-primary-dark fs-10"></span> Font Awesome fontawesome.com --></div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="timeline-item-content ps-6 ps-md-3">
                          <h5 class="fs-9 lh-sm">Phoenix Template: Simplified Design, Maximum Impact</h5>
                          <p class="fs-9">by <a class="fw-semibold" href="#!">Sharuka Nijibum</a></p>
                          <p class="fs-9 text-body-secondary mb-0">Introducing the Phoenix template, where simplified design meets maximum impact. Elevate your digital presence with its sleek and intuitive features.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    </div>
</div>

@endsection