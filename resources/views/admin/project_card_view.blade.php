@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="project_card_view">
        <div class="p-md-4 p-3">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Page 1</a></li>
                    <li class="breadcrumb-item"><a href="#">Page 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
            </nav>
            <div class="row gx-6 gy-3 mb-4 align-items-center">
                <div class="col-auto">
                    <h2 class="mb-0">Projects
                        (32)
                    </h2>
                </div>
                <div class="col-auto">
                    <a href="{{url('create_new')}}" class="btn btn-primary px-4">

                        <svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                        </svg>
                        Add new project
                    </a>
                </div>
            </div>
            <div class="row justify-content-between align-items-end mb-4 g-3">
                <div class="col-12 col-sm-auto">
                    <ul class="nav nav-links mx-n2">
                        <li class="nav-item">
                            <a class="nav-link px-2 py-1 active" aria-current="page" href="#">
                                <span>All</span>
                                <span class="fw-semibold">(32)</span>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link px-2 py-1" href="#">
                                <span>Ongoing</span>
                                <span class="fw-semibold">(14)</span>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link px-2 py-1" href="#">
                                <span>Cancelled</span>
                                <span class="fw-semibold">(2)</span>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link px-2 py-1" href="#">
                                <span>Finished</span>
                                <span class="fw-semibold">(14)</span>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link px-2 py-1" href="#">
                                <span>Postponed</span>
                                <span class="fw-semibold">(2)</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-sm-auto">
                <div class="d-flex align-items-center">
                        <div class="search-box me-3">
                            <form class="position-relative">
                                <input class="form-control search-input search" type="search" placeholder="Search projects" aria-label="Search">

                                <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                                </svg>
                            </form>
                        </div>
                        <a href="{{url('project_list_view')}}" title="List View" class="btn btn-outline-secondary px-3 me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="List view">

                            <svg class="svg-inline--fa fa-list fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"></path>
                            </svg>
                        </a>
                        <a href="{{url('project_board_view')}}" title="Board View" class="btn btn-outline-secondary px-3 me-1 text-body" href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Board view">
                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0.5C0 0.223857 0.223858 0 0.5 0H1.83333C2.10948 0 2.33333 0.223858 2.33333 0.5V1.83333C2.33333 2.10948 2.10948 2.33333 1.83333 2.33333H0.5C0.223857 2.33333 0 2.10948 0 1.83333V0.5Z" fill="currentColor"></path>
                                <path d="M3.33333 0.5C3.33333 0.223857 3.55719 0 3.83333 0H5.16667C5.44281 0 5.66667 0.223858 5.66667 0.5V1.83333C5.66667 2.10948 5.44281 2.33333 5.16667 2.33333H4.83333C3.55719 2.33333 3.33333 2.10948 3.33333 1.83333V0.5Z" fill="currentColor"></path>
                                <path d="M6.66667 0.5C6.66667 0.223857 6.89052 0 7.16667 0H8.5C8.77614 0 9 0.223858 9 0.5V1.83333C9 2.10948 8.77614 2.33333 8.5 2.33333H7.16667C6.89052 2.33333 6.66667 2.10948 6.66667 1.83333V0.5Z" fill="currentColor"></path>
                                <path d="M0 3.83333C0 3.55719 0.223858 3.33333 0.5 3.33333H1.83333C2.10948 3.33333 2.33333 3.55719 2.33333 3.83333V5.16667C2.33333 5.44281 2.10948 5.66667 1.83333 5.66667H0.5C0.223857 5.66667 0 5.44281 0 5.16667V3.83333Z" fill="currentColor"></path>
                                <path d="M3.33333 3.83333C3.33333 3.55719 3.55719 3.33333 3.83333 3.33333H5.16667C5.44281 3.33333 5.66667 3.55719 5.66667 3.83333V5.16667C5.66667 5.44281 5.44281 5.66667 5.16667 5.66667H4.83333C3.55719 5.66667 3.33333 5.44281 3.33333 5.16667V3.83333Z" fill="currentColor"></path>
                                <path d="M6.66667 3.83333C6.66667 3.55719 6.89052 3.33333 7.16667 3.33333H8.5C8.77614 3.33333 9 3.55719 9 3.83333V5.16667C9 5.44281 8.77614 5.66667 8.5 5.66667H7.16667C6.89052 5.66667 6.66667 5.44281 6.66667 5.16667V3.83333Z" fill="currentColor"></path>
                                <path d="M0 7.16667C0 6.89052 0.223858 6.66667 0.5 6.66667H1.83333C2.10948 6.66667 2.33333 6.89052 2.33333 7.16667V8.5C2.33333 8.77614 2.10948 9 1.83333 9H0.5C0.223857 9 0 8.77614 0 8.5V7.16667Z" fill="currentColor"></path>
                                <path d="M3.33333 7.16667C3.33333 6.89052 3.55719 6.66667 3.83333 6.66667H5.16667C5.44281 6.66667 5.66667 6.89052 5.66667 7.16667V8.5C5.66667 8.77614 5.44281 9 5.16667 9H4.83333C3.55719 9 3.33333 8.77614 3.33333 8.5V7.16667Z" fill="currentColor"></path>
                                <path d="M6.66667 7.16667C6.66667 6.89052 6.89052 6.66667 7.16667 6.66667H8.5C8.77614 6.66667 9 6.89052 9 7.16667V8.5C9 8.77614 8.77614 9 8.5 9H7.16667C6.89052 9 6.66667 8.77614 6.66667 8.5V7.16667Z" fill="currentColor"></path>
                            </svg>
                        </a>
                        <a href="{{url('project_card_view')}}" title="Card View" class="btn btn-outline-secondary px-3 border-0" href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Card view">
                            <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0.5C0 0.223858 0.223858 0 0.5 0H4.5C3.77614 0 4 0.223858 4 0.5V3.5C4 3.77614 3.77614 4 3.5 4H0.5C0.223858 4 0 3.77614 0 3.5V0.5Z" fill="currentColor"></path>
                                <path d="M0 5.5C0 5.22386 0.223858 5 0.5 5H4.5C3.77614 5 4 5.22386 4 5.5V8.5C4 8.77614 3.77614 9 3.5 9H0.5C0.223858 9 0 8.77614 0 8.5V5.5Z" fill="currentColor"></path>
                                <path d="M5 0.5C5 0.223858 5.22386 0 5.5 0H8.5C8.77614 0 9 0.223858 9 0.5V3.5C9 3.77614 8.77614 4 8.5 4H5.5C5.22386 4 5 3.77614 5 3.5V0.5Z" fill="currentColor"></path>
                                <path d="M5 5.5C5 5.22386 5.22386 5 5.5 5H8.5C8.77614 5 9 5.22386 9 5.5V8.5C9 8.77614 8.77614 9 8.5 9H5.5C5.22386 9 5 8.77614 5 8.5V5.5Z" fill="currentColor"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 row-cols-xxl-4 g-3 mb-9">
                <div class="col">
                    <div class="card h-100 hover-actions-trigger">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-2">Project Doughnut Dungeon</h4>
                                <div class="hover-actions top-0 end-0 me-2">
                                    <button class="btn btn-primary btn-icon flex-shrink-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div><span class="badge badge-phoenix fs-10 mb-4 badge-phoenix-success">completed</span>
                            <div class="d-flex align-items-center mb-2"><svg class="svg-inline--fa fa-user me-2 text-body-tertiary fs-9 fw-extra-bold" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path>
                                </svg>

                                <p class="fw-bold mb-0 text-truncate lh-1">Client : <span class="fw-semibold text-primary ms-1"> Gusteau’s Restaurant</span></p>
                            </div>
                            <div class="d-flex align-items-center mb-4"><svg class="svg-inline--fa fa-credit-card me-2 text-body-tertiary fs-9 fw-extra-bold" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="credit-card" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96v32H576V96c0-35.3-28.7-64-64-64H64zM576 224H0V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V224zM112 352h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16z"></path>
                                </svg>

                                <p class="fw-bold mb-0 lh-1">Budget : <span class="ms-1 text-body-emphasis">8,742$</span></p>
                            </div>
                            <div class="d-flex justify-content-between text-body-tertiary fw-semibold">
                                <p class="mb-2"> Progress</p>
                                <p class="mb-2 text-body-emphasis">100%</p>
                            </div>
                            <div class="progress bg-success-subtle">
                                <div class="progress-bar rounded bg-success" role="progressbar" aria-label="Success example" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0 fw-bold fs-9">Started :<span class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 17th Nov. 2020</span></p>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <p class="mb-0 fw-bold fs-9">Deadline : <span class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 21st May 2028</span></p>
                            </div>
                            <div class="d-flex d-lg-block d-xl-flex justify-content-between align-items-center mt-3">
                                <div class="avatar-group">
                                    <a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        <div class="avatar avatar-m  rounded-circle">
                                            <img class="rounded-circle img-fluid " src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt="">
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg><!-- <span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg><!-- <span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg><!-- <span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg><!-- <span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
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
                                </div>
                                <div class="mt-lg-3 mt-xl-0"> <svg class="svg-inline--fa fa-list-check me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                    </svg>
                                    <p class="d-inline-block fw-bold mb-0">287<span class="fw-normal"> Task</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 hover-actions-trigger">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-2">Water resistant mosquito killer gun</h4>
                                <div class="hover-actions top-0 end-0 me-2">
                                    <button class="btn btn-primary btn-icon flex-shrink-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div><span class="badge badge-phoenix fs-10 mb-4 badge-phoenix-warning">inactive</span>
                            <div class="d-flex align-items-center mb-2"><svg class="svg-inline--fa fa-user me-2 text-body-tertiary fs-9 fw-extra-bold" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path>
                                </svg>

                                <p class="fw-bold mb-0 text-truncate lh-1">Client : <span class="fw-semibold text-primary ms-1"> Gusteau’s Restaurant</span></p>
                            </div>
                            <div class="d-flex align-items-center mb-4"><svg class="svg-inline--fa fa-credit-card me-2 text-body-tertiary fs-9 fw-extra-bold" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="credit-card" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96v32H576V96c0-35.3-28.7-64-64-64H64zM576 224H0V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V224zM112 352h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16z"></path>
                                </svg>

                                <p class="fw-bold mb-0 lh-1">Budget : <span class="ms-1 text-body-emphasis">8,742$</span></p>
                            </div>
                            <div class="d-flex justify-content-between text-body-tertiary fw-semibold">
                                <p class="mb-2"> Progress</p>
                                <p class="mb-2 text-body-emphasis">100%</p>
                            </div>
                            <div class="progress bg-success-subtle">
                                <div class="progress-bar rounded bg-danger" role="progressbar" aria-label="Success example" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0 fw-bold fs-9">Started :<span class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 17th Nov. 2020</span></p>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <p class="mb-0 fw-bold fs-9">Deadline : <span class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 21st May 2028</span></p>
                            </div>
                            <div class="d-flex d-lg-block d-xl-flex justify-content-between align-items-center mt-3">
                                <div class="avatar-group">
                                    <a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        <div class="avatar avatar-m  rounded-circle">
                                            <img class="rounded-circle img-fluid " src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt="">
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg><!-- <span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg><!-- <span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg><!-- <span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg><!-- <span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
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
                                </div>
                                <div class="mt-lg-3 mt-xl-0"> <svg class="svg-inline--fa fa-list-check me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                    </svg>
                                    <p class="d-inline-block fw-bold mb-0">287<span class="fw-normal"> Task</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 hover-actions-trigger">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-2">Execution of Micky the foul mouse</h4>
                                <div class="hover-actions top-0 end-0 me-2">
                                    <button class="btn btn-primary btn-icon flex-shrink-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div><span class="badge badge-phoenix fs-10 mb-4 badge-phoenix-primary">ongoing</span>
                            <div class="d-flex align-items-center mb-2"><svg class="svg-inline--fa fa-user me-2 text-body-tertiary fs-9 fw-extra-bold" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path>
                                </svg>

                                <p class="fw-bold mb-0 text-truncate lh-1">Client : <span class="fw-semibold text-primary ms-1"> Gusteau’s Restaurant</span></p>
                            </div>
                            <div class="d-flex align-items-center mb-4"><svg class="svg-inline--fa fa-credit-card me-2 text-body-tertiary fs-9 fw-extra-bold" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="credit-card" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96v32H576V96c0-35.3-28.7-64-64-64H64zM576 224H0V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V224zM112 352h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16z"></path>
                                </svg>

                                <p class="fw-bold mb-0 lh-1">Budget : <span class="ms-1 text-body-emphasis">8,742$</span></p>
                            </div>
                            <div class="d-flex justify-content-between text-body-tertiary fw-semibold">
                                <p class="mb-2"> Progress</p>
                                <p class="mb-2 text-body-emphasis">100%</p>
                            </div>
                            <div class="progress bg-success-subtle">
                                <div class="progress-bar rounded bg-primary" role="progressbar" aria-label="Success example" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0 fw-bold fs-9">Started :<span class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 17th Nov. 2020</span></p>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <p class="mb-0 fw-bold fs-9">Deadline : <span class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 21st May 2028</span></p>
                            </div>
                            <div class="d-flex d-lg-block d-xl-flex justify-content-between align-items-center mt-3">
                                <div class="avatar-group">
                                    <a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        <div class="avatar avatar-m  rounded-circle">
                                            <img class="rounded-circle img-fluid " src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt="">
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg><!-- <span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg><!-- <span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg><!-- <span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
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
                                </div>
                                <div class="mt-lg-3 mt-xl-0"> <svg class="svg-inline--fa fa-list-check me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                    </svg>
                                    <p class="d-inline-block fw-bold mb-0">287<span class="fw-normal"> Task</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 hover-actions-trigger">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-2">Project Doughnut Dungeon</h4>
                                <div class="hover-actions top-0 end-0 me-2">
                                    <button class="btn btn-primary btn-icon flex-shrink-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div><span class="badge badge-phoenix fs-10 mb-4 badge-phoenix-success">completed</span>
                            <div class="d-flex align-items-center mb-2"><svg class="svg-inline--fa fa-user me-2 text-body-tertiary fs-9 fw-extra-bold" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path>
                                </svg>

                                <p class="fw-bold mb-0 text-truncate lh-1">Client : <span class="fw-semibold text-primary ms-1"> Gusteau’s Restaurant</span></p>
                            </div>
                            <div class="d-flex align-items-center mb-4"><svg class="svg-inline--fa fa-credit-card me-2 text-body-tertiary fs-9 fw-extra-bold" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="credit-card" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96v32H576V96c0-35.3-28.7-64-64-64H64zM576 224H0V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V224zM112 352h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16z"></path>
                                </svg>

                                <p class="fw-bold mb-0 lh-1">Budget : <span class="ms-1 text-body-emphasis">8,742$</span></p>
                            </div>
                            <div class="d-flex justify-content-between text-body-tertiary fw-semibold">
                                <p class="mb-2"> Progress</p>
                                <p class="mb-2 text-body-emphasis">100%</p>
                            </div>
                            <div class="progress bg-success-subtle">
                                <div class="progress-bar rounded bg-success" role="progressbar" aria-label="Success example" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0 fw-bold fs-9">Started :<span class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 17th Nov. 2020</span></p>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <p class="mb-0 fw-bold fs-9">Deadline : <span class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 21st May 2028</span></p>
                            </div>
                            <div class="d-flex d-lg-block d-xl-flex justify-content-between align-items-center mt-3">
                                <div class="avatar-group">
                                    <a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        <div class="avatar avatar-m  rounded-circle">
                                            <img class="rounded-circle img-fluid " src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt="">
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg><!-- <span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg><!-- <span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg><!-- <span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg><!-- <span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
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
                                </div>
                                <div class="mt-lg-3 mt-xl-0"> <svg class="svg-inline--fa fa-list-check me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                    </svg>
                                    <p class="d-inline-block fw-bold mb-0">287<span class="fw-normal"> Task</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 hover-actions-trigger">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-2">Water resistant mosquito killer gun</h4>
                                <div class="hover-actions top-0 end-0 me-2">
                                    <button class="btn btn-primary btn-icon flex-shrink-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div><span class="badge badge-phoenix fs-10 mb-4 badge-phoenix-warning">inactive</span>
                            <div class="d-flex align-items-center mb-2"><svg class="svg-inline--fa fa-user me-2 text-body-tertiary fs-9 fw-extra-bold" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path>
                                </svg>

                                <p class="fw-bold mb-0 text-truncate lh-1">Client : <span class="fw-semibold text-primary ms-1"> Gusteau’s Restaurant</span></p>
                            </div>
                            <div class="d-flex align-items-center mb-4"><svg class="svg-inline--fa fa-credit-card me-2 text-body-tertiary fs-9 fw-extra-bold" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="credit-card" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96v32H576V96c0-35.3-28.7-64-64-64H64zM576 224H0V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V224zM112 352h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16z"></path>
                                </svg>

                                <p class="fw-bold mb-0 lh-1">Budget : <span class="ms-1 text-body-emphasis">8,742$</span></p>
                            </div>
                            <div class="d-flex justify-content-between text-body-tertiary fw-semibold">
                                <p class="mb-2"> Progress</p>
                                <p class="mb-2 text-body-emphasis">100%</p>
                            </div>
                            <div class="progress bg-success-subtle">
                                <div class="progress-bar rounded bg-danger" role="progressbar" aria-label="Success example" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0 fw-bold fs-9">Started :<span class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 17th Nov. 2020</span></p>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <p class="mb-0 fw-bold fs-9">Deadline : <span class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 21st May 2028</span></p>
                            </div>
                            <div class="d-flex d-lg-block d-xl-flex justify-content-between align-items-center mt-3">
                                <div class="avatar-group">
                                    <a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        <div class="avatar avatar-m  rounded-circle">
                                            <img class="rounded-circle img-fluid " src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt="">
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg><!-- <span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg><!-- <span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg><!-- <span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg><!-- <span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
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
                                </div>
                                <div class="mt-lg-3 mt-xl-0"> <svg class="svg-inline--fa fa-list-check me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                    </svg>
                                    <p class="d-inline-block fw-bold mb-0">287<span class="fw-normal"> Task</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 hover-actions-trigger">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-2">Execution of Micky the foul mouse</h4>
                                <div class="hover-actions top-0 end-0 me-2">
                                    <button class="btn btn-primary btn-icon flex-shrink-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div><span class="badge badge-phoenix fs-10 mb-4 badge-phoenix-primary">ongoing</span>
                            <div class="d-flex align-items-center mb-2"><svg class="svg-inline--fa fa-user me-2 text-body-tertiary fs-9 fw-extra-bold" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path>
                                </svg>

                                <p class="fw-bold mb-0 text-truncate lh-1">Client : <span class="fw-semibold text-primary ms-1"> Gusteau’s Restaurant</span></p>
                            </div>
                            <div class="d-flex align-items-center mb-4"><svg class="svg-inline--fa fa-credit-card me-2 text-body-tertiary fs-9 fw-extra-bold" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="credit-card" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96v32H576V96c0-35.3-28.7-64-64-64H64zM576 224H0V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V224zM112 352h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16z"></path>
                                </svg>

                                <p class="fw-bold mb-0 lh-1">Budget : <span class="ms-1 text-body-emphasis">8,742$</span></p>
                            </div>
                            <div class="d-flex justify-content-between text-body-tertiary fw-semibold">
                                <p class="mb-2"> Progress</p>
                                <p class="mb-2 text-body-emphasis">100%</p>
                            </div>
                            <div class="progress bg-success-subtle">
                                <div class="progress-bar rounded bg-primary" role="progressbar" aria-label="Success example" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0 fw-bold fs-9">Started :<span class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 17th Nov. 2020</span></p>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <p class="mb-0 fw-bold fs-9">Deadline : <span class="fw-semibold text-body-tertiary text-opactity-85 ms-1"> 21st May 2028</span></p>
                            </div>
                            <div class="d-flex d-lg-block d-xl-flex justify-content-between align-items-center mt-3">
                                <div class="avatar-group">
                                    <a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        <div class="avatar avatar-m  rounded-circle">
                                            <img class="rounded-circle img-fluid " src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt="">
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg><!-- <span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg><!-- <span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg><!-- <span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span> Font Awesome fontawesome.com -->
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
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
                                </div>
                                <div class="mt-lg-3 mt-xl-0"> <svg class="svg-inline--fa fa-list-check me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                    </svg>
                                    <p class="d-inline-block fw-bold mb-0">287<span class="fw-normal"> Task</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade project_card_modal" id="exampleModal" tabindex="-1" aria-labelledby="projectcardview" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content overflow-hidden">
            <div class="modal-header position-relative p-0">
                <input class="d-none" id="projectCoverInput" type="file">
                <label class="position-absolute top-0 start-0" for="projectCoverInput">
                    <span class="project-modal-btn d-inline-block bg-body-emphasis dark__text-gray-100 rounded-2 py-2 px-3 fs-9 fw-bolder mt-3 ms-3 cursor-pointer"><svg class="svg-inline--fa fa-image me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="image" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM323.8 202.5c-4.5-6.6-11.9-10.5-19.8-10.5s-15.4 3.9-19.8 10.5l-87 127.6L170.7 297c-4.6-5.7-11.5-9-18.7-9s-14.2 3.3-18.7 9l-64 80c-5.8 7.2-6.9 17.1-2.9 25.4s12.4 13.6 21.6 13.6h96 32H424c8.9 0 17.1-4.9 21.2-12.8s3.6-17.4-1.4-24.7l-120-176zM112 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z"></path>
                        </svg>
                        Change</span>
                    </label>
                    <button class="btn btn-circle project-modal-btn position-absolute end-0 top-0 mt-3 me-3 bg-body-emphasis" data-bs-dismiss="modal"><svg class="svg-inline--fa fa-xmark text-body dark__text-gray-100" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                        <path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
                    </svg>
                </button>
                    <img class="w-100" src="https://prium.github.io/phoenix/v1.18.0/assets/img/generic/43.png" alt="" style="max-height: 200px;min-height: 150px;"></div>
            <div class="modal-body p-5 px-md-6">
                <div class="row g-5">
                    <div class="col-12 col-md-9">
                        <div class="mb-4">
                            <h3 class="fw-bolder lh-sm">It was popularised in the 1960s with the release of Letraset</h3>
                            <p class="text-body-highlight fw-semibold mb-0">In list<a class="ms-1 fw-bold" href="#!">Review </a></p>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <p class="text-body-highlight fw-700 mb-0 me-2">64%</p>
                            <div class="progress flex-1 w-100">
                                <div class="progress-bar rounded-3" role="progressbar" style="width: 64%"></div>
                            </div>
                        </div>
                        <h6 class="text-body-secondary mb-2">Due date</h6>
                        <div class="flatpickr-input-container flatpickr-input-sm w-50 mb-3"><input class="form-control form-control-sm ps-6 datetimepicker flatpickr-input" id="datepicker" type="text" data-options="{&quot;dateFormat&quot;:&quot;M j, Y&quot;,&quot;disableMobile&quot;:true,&quot;defaultDate&quot;:&quot;Mar 1, 2022&quot;}" readonly="readonly"><span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary mt-1"></span></div>
                        <div class="mb-3">
                            <h6 class="text-body-secondary mb-2">Assignees</h6>
                            <div class="d-flex">
                                <div class="dropdown">
                                    <a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        <div class="avatar avatar-m  me-1">
                                            <img class="rounded-circle img-fluid " src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/60.webp" alt="">
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
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
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        <div class="avatar avatar-m  me-1">
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
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
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        <div class="avatar avatar-m  me-1">
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
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
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        <div class="avatar avatar-m  me-1">
                                            <img class="rounded-circle img-fluid " src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt="">
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
                                                        <img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/34.webp" alt=""></div>
                                                    <h6 class="text-white">Jean Renoir</h6>
                                                    <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                                    <div class="d-flex flex-center mb-3">
                                                        <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><svg class="svg-inline--fa fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.375em;">
                                                            <g transform="translate(256 256)">
                                                                <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                                                    <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
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
                                </div>
                                <button class="btn btn-sm btn-phoenix-secondary btn-circle"><svg class="svg-inline--fa fa-plus" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                    </svg><!-- <span class="fa-solid fa-plus"></span> Font Awesome fontawesome.com --></button>
                            </div>
                        </div>
                        <div class="mb-5">
                            <h6 class="text-body-secondary mb-2">Labels</h6>
                            <div class="d-flex align-items-center"><span class="badge badge-phoenix badge-phoenix-info fs-10 me-2">INFO</span><span class="badge badge-phoenix badge-phoenix-warning fs-10 me-2">URGENT</span><span class="badge badge-phoenix badge-phoenix-success fs-10 me-2">DONE</span><a class="text-body fw-bolder fs-9 lh-1 text-decoration-none" href="#!"> <svg class="svg-inline--fa fa-plus me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                    </svg><!-- <span class="fa-solid fa-plus me-1"></span> Font Awesome fontawesome.com -->Add another</a></div>
                        </div>
                        <div class="mb-6">
                            <div class="d-flex align-items-center mb-2">
                                <h4 class="me-3">Description</h4><button class="btn btn-link p-0"><svg class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>
                                    </svg><!-- <span class="fa-solid fa-pen"></span> Font Awesome fontawesome.com --></button>
                            </div>
                            <p class="text-body-highlight">The female circus horse-rider is a recurring subject in Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus. They visited Paris’s historic Cirque d’Hiver Bouglione together; Vollard lent Chagall his private box seats. Chagall completed 19 gouaches...<a class="fw-semibold" href="#!">see more </a></p>
                        </div>
                        <div class="bg-secondary-subtle rounded-2 p-4 mb-3">
                            <div class="row justify-contnet-between border-bottom border-translucent g-0 gy-2 pb-3">
                                <div class="col-12 col-sm">
                                    <p class="fs-9 text-body-secondary mb-2"><a class="fw-semibold" href="#!">Anthony Van Dyck </a>uploaded a file </p>
                                    <img class="rounded-2 mb-2" src="https://prium.github.io/phoenix/v1.18.0/assets/img/generic/42.png" alt="" width="220">
                                    <p class="text-body-highlight fw-semibold fs-9 mb-0">Fruit blast</p>
                                </div>
                                <div class="col-12 col-sm-auto">
                                    <p class="text-body-secondary fw-semibold fs-10 mb-0">Oct 3 at 4:38 pm</p>
                                </div>
                            </div>
                            <div class="row justify-contnet-between border-bottom border-translucent g-0 gy-1 py-3 align-items-center">
                                <div class="col-12 col-sm">
                                    <p class="fs-9 text-body-secondary mb-0"><span class="text-body-highlight fw-semibold me-1">You</span>created this task</p>
                                </div>
                                <div class="col-12 col-sm-auto">
                                    <p class="text-body-secondary fw-semibold fs-10 mb-0">Oct 4 at 12:18 pm</p>
                                </div>
                            </div>
                            <div class="row justify-contnet-between border-bottom border-translucent g-0 gy-1 py-3 align-items-center">
                                <div class="col-12 col-sm">
                                    <p class="fs-9 text-body-secondary mb-1"><a class="fw-semibold" href="#!">Kazimir Malevich </a>added a subtask</p>
                                    <div class="d-flex">
                                        <p class="mb-0 fs-9 fw-semibold text-body-highlight"><svg class="svg-inline--fa fa-circle text-primary" data-fa-transform="shrink-8" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;">
                                                <g transform="translate(256 256)">
                                                    <g transform="translate(0, 0)  scale(0.5, 0.5)  rotate(0 0 0)">
                                                        <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                    </g>
                                                </g>
                                            </svg><!-- <span class="fa-solid fa-circle text-primary" data-fa-transform="shrink-8"> </span> Font Awesome fontawesome.com -->Doing</p><span class="text-body-secondary fs-9 mx-2">to</span>
                                        <p class="mb-0 fs-9 fw-semibold text-body-highlight"><svg class="svg-inline--fa fa-circle text-primary" data-fa-transform="shrink-8" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;">
                                                <g transform="translate(256 256)">
                                                    <g transform="translate(0, 0)  scale(0.5, 0.5)  rotate(0 0 0)">
                                                        <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" transform="translate(-256 -256)"></path>
                                                    </g>
                                                </g>
                                            </svg><!-- <span class="fa-solid fa-circle text-primary" data-fa-transform="shrink-8"> </span> Font Awesome fontawesome.com -->Review</p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-auto">
                                    <p class="text-body-secondary fw-semibold fs-10 mb-0">Oct 5 at 9:59 am</p>
                                </div>
                            </div>
                            <div class="row justify-contnet-between gx-2 align-items-center pt-3">
                                <div class="col col-auto">
                                    <div class="avatar avatar-m status-online ">
                                        <img class="rounded-circle img-fluid " src="https://prium.github.io/phoenix/v1.18.0/assets/img//team/30.webp" alt="">
                                    </div>
                                </div>
                                <div class="col col-auto flex-1">
                                    <p class="fs-9 text-body-secondary mb-0"><a class="fw-semibold" href="#!">Peter Paul Rubens </a>commented</p>
                                </div>
                                <div class="col-12 col-sm-auto order-1 order-sm-0">
                                    <p class="text-body-secondary fw-semibold fs-10 mb-0">Oct 5 at 9:59 am</p>
                                </div>
                                <div class="col-sm-11">
                                    <p class="text-body fs-9 mb-0 ms-6">Great job on the Phoenix template! The overall design and layout are visually appealing and user-friendly.</p>
                                </div>
                            </div>
                        </div><textarea class="form-control form-control mb-3" rows="3" placeholder="Add comment"></textarea>
                        <div class="d-flex justify-content-between pb-3 border-bottom border-translucent mb-6">
                            <div class="d-flex"><button class="btn btn-sm ps-0 pe-2 py-0"><svg class="svg-inline--fa fa-image fs-8" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="image" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM323.8 202.5c-4.5-6.6-11.9-10.5-19.8-10.5s-15.4 3.9-19.8 10.5l-87 127.6L170.7 297c-4.6-5.7-11.5-9-18.7-9s-14.2 3.3-18.7 9l-64 80c-5.8 7.2-6.9 17.1-2.9 25.4s12.4 13.6 21.6 13.6h96 32H424c8.9 0 17.1-4.9 21.2-12.8s3.6-17.4-1.4-24.7l-120-176zM112 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z"></path>
                                    </svg><!-- <span class="fa-solid fa-image fs-8"></span> Font Awesome fontawesome.com --></button><button class="btn btn-sm px-2 py-0"><svg class="svg-inline--fa fa-calendar-days fs-8" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar-days" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"></path>
                                    </svg><!-- <span class="fa-solid fa-calendar-days fs-8"></span> Font Awesome fontawesome.com --></button><button class="btn btn-sm px-2 py-0"><svg class="svg-inline--fa fa-location-dot fs-8" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path>
                                    </svg><!-- <span class="fa-solid fa-location-dot fs-8"></span> Font Awesome fontawesome.com --></button><button class="btn btn-sm px-2 py-0"><svg class="svg-inline--fa fa-tag fs-8" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="tag" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M0 80V229.5c0 17 6.7 33.3 18.7 45.3l176 176c25 25 65.5 25 90.5 0L418.7 317.3c25-25 25-65.5 0-90.5l-176-176c-12-12-28.3-18.7-45.3-18.7H48C21.5 32 0 53.5 0 80zm112 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                                    </svg><!-- <span class="fa-solid fa-tag fs-8"></span> Font Awesome fontawesome.com --></button></div><button class="btn btn-sm btn-primary px-6">Comment</button>
                        </div>
                        <div class="mb-6">
                            <div class="mb-7">
                                <h4 class="mb-4">To do list <span class="text-body-tertiary fw-normal fs-6">(23)</span></h4>
                                <div class="row align-items-center g-0 justify-content-between mb-3">
                                    <div class="col-12 col-sm-auto">
                                        <div class="search-box w-100 mb-2 mb-sm-0" style="max-width:30rem;">
                                            <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search tasks" aria-label="Search">
                                                <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                                                </svg><!-- <span class="fas fa-search search-box-icon"></span> Font Awesome fontawesome.com -->
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-auto d-flex">
                                        <p class="mb-0 ms-sm-3 fs-9 text-body-tertiary fw-bold"><svg class="svg-inline--fa fa-filter me-1 fw-extra-bold fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="filter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z"></path>
                                            </svg><!-- <span class="fas fa-filter me-1 fw-extra-bold fs-10"></span> Font Awesome fontawesome.com -->23 tasks</p><button class="btn btn-link p-0 ms-3 fs-9 text-primary fw-bold"><svg class="svg-inline--fa fa-sort me-1 fw-extra-bold fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"></path>
                                            </svg><!-- <span class="fas fa-sort me-1 fw-extra-bold fs-10"></span> Font Awesome fontawesome.com -->Sorting</button>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                                        <div class="col-12">
                                            <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-1">
                                                <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-0"><label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-0">Designing the dungeon</label><span class="badge badge-phoenix fs-10 ms-auto badge-phoenix-primary">DRAFT</span></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex ms-4 lh-1 align-items-center"><button class="btn p-0 text-body-tertiary fs-10 me-2"><svg class="svg-inline--fa fa-paperclip me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paperclip" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M364.2 83.8c-24.4-24.4-64-24.4-88.4 0l-184 184c-42.1 42.1-42.1 110.3 0 152.4s110.3 42.1 152.4 0l152-152c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-152 152c-64 64-167.6 64-231.6 0s-64-167.6 0-231.6l184-184c46.3-46.3 121.3-46.3 167.6 0s46.3 121.3 0 167.6l-176 176c-28.6 28.6-75 28.6-103.6 0s-28.6-75 0-103.6l144-144c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-144 144c-6.7 6.7-6.7 17.7 0 24.4s17.7 6.7 24.4 0l176-176c24.4-24.4 24.4-64 0-88.4z"></path>
                                                    </svg><!-- <span class="fas fa-paperclip me-1"></span> Font Awesome fontawesome.com -->2</button>
                                                <p class="text-body-tertiary fs-10 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                                                <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0">12:00 PM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                                        <div class="col-12">
                                            <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-2">
                                                <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-1"><label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-1">Hiring a motion graphic designer</label><span class="badge badge-phoenix fs-10 ms-auto badge-phoenix-warning">URGENT</span></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex ms-4 lh-1 align-items-center"><button class="btn p-0 text-body-tertiary fs-10 me-2"><svg class="svg-inline--fa fa-paperclip me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paperclip" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M364.2 83.8c-24.4-24.4-64-24.4-88.4 0l-184 184c-42.1 42.1-42.1 110.3 0 152.4s110.3 42.1 152.4 0l152-152c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-152 152c-64 64-167.6 64-231.6 0s-64-167.6 0-231.6l184-184c46.3-46.3 121.3-46.3 167.6 0s46.3 121.3 0 167.6l-176 176c-28.6 28.6-75 28.6-103.6 0s-28.6-75 0-103.6l144-144c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-144 144c-6.7 6.7-6.7 17.7 0 24.4s17.7 6.7 24.4 0l176-176c24.4-24.4 24.4-64 0-88.4z"></path>
                                                    </svg><!-- <span class="fas fa-paperclip me-1"></span> Font Awesome fontawesome.com -->2</button><button class="btn p-0 text-warning fs-10 me-2"><svg class="svg-inline--fa fa-list-check me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                                                    </svg><!-- <span class="fas fa-tasks me-1"></span> Font Awesome fontawesome.com -->3</button>
                                                <p class="text-body-tertiary fs-10 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                                                <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0">12:00 PM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                                        <div class="col-12">
                                            <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-3">
                                                <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-2"><label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-2">Daily Meetings Purpose, participants</label><span class="badge badge-phoenix fs-10 ms-auto badge-phoenix-info">ON PROCESS</span></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex ms-4 lh-1 align-items-center"><button class="btn p-0 text-body-tertiary fs-10 me-2"><svg class="svg-inline--fa fa-paperclip me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paperclip" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M364.2 83.8c-24.4-24.4-64-24.4-88.4 0l-184 184c-42.1 42.1-42.1 110.3 0 152.4s110.3 42.1 152.4 0l152-152c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-152 152c-64 64-167.6 64-231.6 0s-64-167.6 0-231.6l184-184c46.3-46.3 121.3-46.3 167.6 0s46.3 121.3 0 167.6l-176 176c-28.6 28.6-75 28.6-103.6 0s-28.6-75 0-103.6l144-144c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-144 144c-6.7 6.7-6.7 17.7 0 24.4s17.7 6.7 24.4 0l176-176c24.4-24.4 24.4-64 0-88.4z"></path>
                                                    </svg><!-- <span class="fas fa-paperclip me-1"></span> Font Awesome fontawesome.com -->4</button>
                                                <p class="text-body-tertiary fs-10 mb-md-0 me-2 mb-0">12 Dec, 2021</p>
                                                <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0">05:00 AM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                                        <div class="col-12">
                                            <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-4">
                                                <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-3"><label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-3">Finalizing the geometric shapes</label></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex ms-4 lh-1 align-items-center"><button class="btn p-0 text-body-tertiary fs-10 me-2"><svg class="svg-inline--fa fa-paperclip me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paperclip" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M364.2 83.8c-24.4-24.4-64-24.4-88.4 0l-184 184c-42.1 42.1-42.1 110.3 0 152.4s110.3 42.1 152.4 0l152-152c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-152 152c-64 64-167.6 64-231.6 0s-64-167.6 0-231.6l184-184c46.3-46.3 121.3-46.3 167.6 0s46.3 121.3 0 167.6l-176 176c-28.6 28.6-75 28.6-103.6 0s-28.6-75 0-103.6l144-144c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-144 144c-6.7 6.7-6.7 17.7 0 24.4s17.7 6.7 24.4 0l176-176c24.4-24.4 24.4-64 0-88.4z"></path>
                                                    </svg><!-- <span class="fas fa-paperclip me-1"></span> Font Awesome fontawesome.com -->3</button>
                                                <p class="text-body-tertiary fs-10 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                                                <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0">12:00 PM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                                        <div class="col-12">
                                            <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-5">
                                                <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-4"><label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-4">Daily meeting with team members</label></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex ms-4 lh-1 align-items-center">
                                                <p class="text-body-tertiary fs-10 mb-md-0 me-2 mb-0">1 Nov, 2021</p>
                                                <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0">12:00 PM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                                        <div class="col-12">
                                            <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-6">
                                                <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-5"><label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-5">Daily Standup Meetings</label></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex ms-4 lh-1 align-items-center">
                                                <p class="text-body-tertiary fs-10 mb-md-0 me-2 mb-0">13 Nov, 2021</p>
                                                <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0">10:00 PM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                                        <div class="col-12">
                                            <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-7">
                                                <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-6"><label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-6">Procrastinate for a month</label><span class="badge badge-phoenix fs-10 ms-auto badge-phoenix-info">ON PROCESS</span></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex ms-4 lh-1 align-items-center"><button class="btn p-0 text-body-tertiary fs-10 me-2"><svg class="svg-inline--fa fa-paperclip me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paperclip" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M364.2 83.8c-24.4-24.4-64-24.4-88.4 0l-184 184c-42.1 42.1-42.1 110.3 0 152.4s110.3 42.1 152.4 0l152-152c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-152 152c-64 64-167.6 64-231.6 0s-64-167.6 0-231.6l184-184c46.3-46.3 121.3-46.3 167.6 0s46.3 121.3 0 167.6l-176 176c-28.6 28.6-75 28.6-103.6 0s-28.6-75 0-103.6l144-144c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-144 144c-6.7 6.7-6.7 17.7 0 24.4s17.7 6.7 24.4 0l176-176c24.4-24.4 24.4-64 0-88.4z"></path>
                                                    </svg><!-- <span class="fas fa-paperclip me-1"></span> Font Awesome fontawesome.com -->3</button>
                                                <p class="text-body-tertiary fs-10 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                                                <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0">12:00 PM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                                        <div class="col-12">
                                            <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-8">
                                                <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-7"><label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-7">warming up</label><span class="badge badge-phoenix fs-10 ms-auto badge-phoenix-info">CLOSE</span></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex ms-4 lh-1 align-items-center"><button class="btn p-0 text-body-tertiary fs-10 me-2"><svg class="svg-inline--fa fa-paperclip me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paperclip" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M364.2 83.8c-24.4-24.4-64-24.4-88.4 0l-184 184c-42.1 42.1-42.1 110.3 0 152.4s110.3 42.1 152.4 0l152-152c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-152 152c-64 64-167.6 64-231.6 0s-64-167.6 0-231.6l184-184c46.3-46.3 121.3-46.3 167.6 0s46.3 121.3 0 167.6l-176 176c-28.6 28.6-75 28.6-103.6 0s-28.6-75 0-103.6l144-144c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-144 144c-6.7 6.7-6.7 17.7 0 24.4s17.7 6.7 24.4 0l176-176c24.4-24.4 24.4-64 0-88.4z"></path>
                                                    </svg><!-- <span class="fas fa-paperclip me-1"></span> Font Awesome fontawesome.com -->3</button>
                                                <p class="text-body-tertiary fs-10 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                                                <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0">12:00 PM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top border-bottom">
                                        <div class="col-12">
                                            <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-9">
                                                <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-8"><label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-8">Make ready for release</label></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex ms-4 lh-1 align-items-center"><button class="btn p-0 text-body-tertiary fs-10 me-2"><svg class="svg-inline--fa fa-paperclip me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paperclip" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M364.2 83.8c-24.4-24.4-64-24.4-88.4 0l-184 184c-42.1 42.1-42.1 110.3 0 152.4s110.3 42.1 152.4 0l152-152c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-152 152c-64 64-167.6 64-231.6 0s-64-167.6 0-231.6l184-184c46.3-46.3 121.3-46.3 167.6 0s46.3 121.3 0 167.6l-176 176c-28.6 28.6-75 28.6-103.6 0s-28.6-75 0-103.6l144-144c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-144 144c-6.7 6.7-6.7 17.7 0 24.4s17.7 6.7 24.4 0l176-176c24.4-24.4 24.4-64 0-88.4z"></path>
                                                    </svg><!-- <span class="fas fa-paperclip me-1"></span> Font Awesome fontawesome.com -->2</button>
                                                <p class="text-body-tertiary fs-10 mb-md-0 me-2 mb-0">2o Nov, 2021</p>
                                                <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0">1:00 AM</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><a class="fw-bold fs-9 mt-4" href="#!"><svg class="svg-inline--fa fa-plus me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                    </svg><!-- <span class="fas fa-plus me-1"></span> Font Awesome fontawesome.com -->Add new task</a>
                            </div>
                        </div>
                        <h4 class="mb-3">Files</h4>
                        <div class="border-top pt-3 pb-4">
                            <div class="me-n3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex mb-1"><svg class="svg-inline--fa fa-image me-2 text-body-tertiary fs-9" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="image" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM323.8 202.5c-4.5-6.6-11.9-10.5-19.8-10.5s-15.4 3.9-19.8 10.5l-87 127.6L170.7 297c-4.6-5.7-11.5-9-18.7-9s-14.2 3.3-18.7 9l-64 80c-5.8 7.2-6.9 17.1-2.9 25.4s12.4 13.6 21.6 13.6h96 32H424c8.9 0 17.1-4.9 21.2-12.8s3.6-17.4-1.4-24.7l-120-176zM112 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z"></path>
                                        </svg><!-- <span class="fa-solid fa-image me-2 text-body-tertiary fs-9"></span> Font Awesome fontawesome.com -->
                                        <p class="text-body-highlight mb-0 lh-1">Silly_sight_1.png</p>
                                    </div><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                        </svg><!-- <span class="fas fa-ellipsis-h"></span> Font Awesome fontawesome.com --></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                </div>
                                <p class="fs-9 text-body-tertiary mb-2"><span>768 kb</span><span class="text-body-quaternary mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">21st Dec, 12:56 PM</span></p>
                                <img class="rounded-2" src="https://prium.github.io/phoenix/v1.18.0/assets/img/generic/40.png" alt="">
                            </div>
                        </div>
                        <div class="border-top py-3">
                            <div class="me-n3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex mb-1"><svg class="svg-inline--fa fa-image me-2 text-body-tertiary fs-9" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="image" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM323.8 202.5c-4.5-6.6-11.9-10.5-19.8-10.5s-15.4 3.9-19.8 10.5l-87 127.6L170.7 297c-4.6-5.7-11.5-9-18.7-9s-14.2 3.3-18.7 9l-64 80c-5.8 7.2-6.9 17.1-2.9 25.4s12.4 13.6 21.6 13.6h96 32H424c8.9 0 17.1-4.9 21.2-12.8s3.6-17.4-1.4-24.7l-120-176zM112 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z"></path>
                                        </svg><!-- <span class="fa-solid fa-image me-2 text-body-tertiary fs-9"></span> Font Awesome fontawesome.com -->
                                        <p class="text-body-highlight mb-0 lh-1">Silly_sight_1.png</p>
                                    </div><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                        </svg><!-- <span class="fas fa-ellipsis-h"></span> Font Awesome fontawesome.com --></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                </div>
                                <p class="fs-9 text-body-tertiary mb-1"><span>12.8 mb</span><span class="text-body-quaternary mx-1">| </span><a href="#!">Yves Tanguy </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">19th Dec, 08:56 PM</span></p>
                            </div>
                        </div>
                        <div class="border-top border-bottom py-3 mb-3">
                            <div class="me-n3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center mb-1"><svg class="svg-inline--fa fa-file-lines me-2 fs-9 text-body-tertiary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-lines" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM112 256H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                                        </svg><!-- <span class="fa-solid fa-file-lines me-2 fs-9 text-body-tertiary"></span> Font Awesome fontawesome.com -->
                                        <p class="text-body-highlight mb-0 lh-1">Project.txt</p>
                                    </div><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                        </svg><!-- <span class="fas fa-ellipsis-h"></span> Font Awesome fontawesome.com --></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                </div>
                                <p class="fs-9 text-body-tertiary mb-1"><span>123 kb</span><span class="text-body-quaternary mx-1">|</span><a href="#!">Shantinan Mekalan</a><span class="text-body-quaternary mx-1">|</span><span class="text-nowrap">12th Dec, 12:56 PM</span></p>
                            </div>
                        </div><label class="btn btn-link p-0" for="customFile"><svg class="svg-inline--fa fa-plus me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                            </svg><!-- <span class="fas fa-plus me-1"></span> Font Awesome fontawesome.com -->Add file(s)</label><input class="d-none" id="customFile" type="file">
                    </div>
                    <div class="col-12 col-md-3">
                        <h5 class="text-body-secondary mb-3">Add to card</h5>
                        <div class="mb-6"><button class="btn btn-sm btn-outline-secondary rounded-3 mb-2 d-flex align-items-center w-100"><svg class="svg-inline--fa fa-user-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"></path>
                                </svg><!-- <span class="me-2 fa-solid fa-user-plus"></span> Font Awesome fontawesome.com -->Assignee</button><button class="btn btn-sm btn-outline-secondary rounded-3 mb-2 d-flex align-items-center w-100"><svg class="svg-inline--fa fa-tag me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="tag" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M0 80V229.5c0 17 6.7 33.3 18.7 45.3l176 176c25 25 65.5 25 90.5 0L418.7 317.3c25-25 25-65.5 0-90.5l-176-176c-12-12-28.3-18.7-45.3-18.7H48C21.5 32 0 53.5 0 80zm112 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                                </svg><!-- <span class="me-2 fa-solid fa-tag"></span> Font Awesome fontawesome.com -->Labels</button><button class="btn btn-sm btn-outline-secondary rounded-3 mb-2 d-flex align-items-center w-100"><svg class="svg-inline--fa fa-paperclip me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paperclip" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M364.2 83.8c-24.4-24.4-64-24.4-88.4 0l-184 184c-42.1 42.1-42.1 110.3 0 152.4s110.3 42.1 152.4 0l152-152c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-152 152c-64 64-167.6 64-231.6 0s-64-167.6 0-231.6l184-184c46.3-46.3 121.3-46.3 167.6 0s46.3 121.3 0 167.6l-176 176c-28.6 28.6-75 28.6-103.6 0s-28.6-75 0-103.6l144-144c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-144 144c-6.7 6.7-6.7 17.7 0 24.4s17.7 6.7 24.4 0l176-176c24.4-24.4 24.4-64 0-88.4z"></path>
                                </svg><!-- <span class="me-2 fa-solid fa-paperclip"></span> Font Awesome fontawesome.com -->Attachments</button><button class="btn btn-sm btn-outline-secondary rounded-3 mb-2 d-flex align-items-center w-100"><svg class="svg-inline--fa fa-square-check me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                                </svg><!-- <span class="me-2 fa-solid fa-square-check"></span> Font Awesome fontawesome.com -->Checklist</button><button class="btn btn-sm btn-outline-secondary rounded-3 mb-2 d-flex align-items-center w-100"><svg class="svg-inline--fa fa-calendar-days me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar-days" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"></path>
                                </svg><!-- <span class="me-2 fa-solid fa-calendar-days"></span> Font Awesome fontawesome.com -->Dates</button></div>
                        <h5 class="text-body-secondary mb-3">Actions</h5>
                        <div class="mb-6"><button class="btn btn-sm btn-outline-secondary rounded-3 mb-2 d-flex align-items-center w-100"><svg class="svg-inline--fa fa-arrow-right me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path>
                                </svg><!-- <span class="me-2 fa-solid fa-arrow-right"></span> Font Awesome fontawesome.com -->Move</button><button class="btn btn-sm btn-outline-secondary rounded-3 mb-2 d-flex align-items-center w-100"><svg class="svg-inline--fa fa-copy me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="copy" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M208 0H332.1c12.7 0 24.9 5.1 33.9 14.1l67.9 67.9c9 9 14.1 21.2 14.1 33.9V336c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V48c0-26.5 21.5-48 48-48zM48 128h80v64H64V448H256V416h64v48c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V176c0-26.5 21.5-48 48-48z"></path>
                                </svg><!-- <span class="me-2 fa-solid fa-copy"></span> Font Awesome fontawesome.com -->Copy</button><button class="btn btn-sm btn-outline-secondary rounded-3 mb-2 d-flex align-items-center w-100"><svg class="svg-inline--fa fa-trash me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                                </svg><!-- <span class="me-2 fa-solid fa-trash"></span> Font Awesome fontawesome.com -->Remove</button><button class="btn btn-sm btn-outline-secondary rounded-3 mb-2 d-flex align-items-center w-100"><svg class="svg-inline--fa fa-box-archive me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>
                                </svg><!-- <span class="me-2 fa-solid fa-box-archive"></span> Font Awesome fontawesome.com -->Archive</button><button class="btn btn-sm btn-outline-secondary rounded-3 mb-2 d-flex align-items-center w-100"><svg class="svg-inline--fa fa-share-nodes me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-nodes" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M352 224c53 0 96-43 96-96s-43-96-96-96s-96 43-96 96c0 4 .2 8 .7 11.9l-94.1 47C145.4 170.2 121.9 160 96 160c-53 0-96 43-96 96s43 96 96 96c25.9 0 49.4-10.2 66.6-26.9l94.1 47c-.5 3.9-.7 7.8-.7 11.9c0 53 43 96 96 96s96-43 96-96s-43-96-96-96c-25.9 0-49.4 10.2-66.6 26.9l-94.1-47c.5-3.9 .7-7.8 .7-11.9s-.2-8-.7-11.9l94.1-47C302.6 213.8 326.1 224 352 224z"></path>
                                </svg><!-- <span class="me-2 fa-solid fa-share-nodes"></span> Font Awesome fontawesome.com -->Share</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection