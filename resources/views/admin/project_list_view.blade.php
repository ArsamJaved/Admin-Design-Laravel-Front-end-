@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="project_list_view">
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
                        <a href="{{url('project_list_view')}}" title="List View" class="btn btn-outline-secondary px-3 me-1 border-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="List view">

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
                        <a href="{{url('project_card_view')}}" title="Card View" class="btn btn-outline-secondary px-3" href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Card view">
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
            <div class="table-responsive scrollbar">
                <table class="table fs-9 mb-0 border-top border-translucent">
                    <thead>
                        <tr>
                            <th class="sort text-nowrap align-middle ps-0" scope="col" data-sort="projectName" style="width:30%;">PROJECT NAME</th>
                            <th class="sort align-middle ps-3" scope="col" data-sort="assignees" style="width:10%;">ASSIGNEES</th>
                            <th class="sort align-middle ps-3" scope="col" data-sort="start" style="width:10%;">START DATE</th>
                            <th class="sort align-middle ps-3" scope="col" data-sort="deadline" style="width:15%;">DEADLINE</th>
                            <th class="sort align-middle ps-3" scope="col" data-sort="task" style="width:12%;">TASK</th>
                            <th class="sort align-middle ps-3" scope="col" data-sort="projectprogress" style="width:5%;">PROGRESS</th>
                            <th class="sort align-middle text-end" scope="col" data-sort="statuses" style="width:10%;">STATUS</th>
                            <th class="sort align-middle text-end" scope="col" style="width:10%;"></th>
                        </tr>
                    </thead>
                    <tbody class="list" id="project-list-table-body">
                        <tr class="position-static">
                            <td class="align-middle time text-nowrap ps-0 projectName py-4">
                                <a class="fw-bold fs-8" href="#">Project Doughnut Dungeon</a>
                            </td>
                            <td class="align-middle text-nowrap assignees ps-3 py-4">
                                <div class="avatar-group avatar-group-dense">
                                    <a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        <div class="avatar avatar-s  rounded-circle">
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
                                        <div class="avatar avatar-s  rounded-circle">
                                            <img class="rounded-circle img-fluid " src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/59.webp" alt="">
                                        </div>
                                    </a>
                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                                        <div class="position-relative">
                                            <div class="bg-holder z-n1" style="background-image:url('https://prium.github.io/phoenix/v1.18.0/assets/img/bg/bg-32.png');background-size: auto;"></div>
                                            <div class="p-3">
                                                <div class="text-end"><button class="btn p-0 me-2"><svg class="svg-inline--fa fa-user-plus text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="btn p-0"><svg class="svg-inline--fa fa-ellipsis text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/59.webp" alt=""></div>
                                                    <h6 class="text-white">Katerina Karenin</h6>
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
                                                    <div class="d-flex"><button class="btn btn-outline-secondary btn-icon btn-icon-lg me-2"><svg class="svg-inline--fa fa-phone" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                                            </svg>
                                                        </button><button class="btn btn-outline-secondary btn-icon btn-icon-lg me-2"><svg class="svg-inline--fa fa-message" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="message" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h96v80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64z"></path>
                                                            </svg><!-- <span class="fa-solid fa-message"></span> Font Awesome fontawesome.com --></button><button class="btn btn-outline-secondary btn-icon btn-icon-lg"><svg class="svg-inline--fa fa-video" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="video" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M0 128C0 92.7 28.7 64 64 64H320c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2V384c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1V320 192 174.9l14.2-9.5 96-64c9.8-6.5 22.4-7.2 32.9-1.6z"></path>
                                                            </svg><!-- <span class="fa-solid fa-video"></span> Font Awesome fontawesome.com --></button></div><button class="btn btn-outline-primary"><svg class="svg-inline--fa fa-envelope me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"></path>
                                                        </svg><!-- <span class="fa-solid fa-envelope me-2"></span> Font Awesome fontawesome.com -->Send Email</button>
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
                                                        </svg><!-- <span class="fa-solid fa-chevron-right fs-11"></span> Font Awesome fontawesome.com -->
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
                                                        </svg><!-- <span class="fa-solid fa-chevron-right fs-11"></span> Font Awesome fontawesome.com -->
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                                    </div>
                                    <a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        <div class="avatar avatar-s  rounded-circle">
                                            <img class="rounded-circle img-fluid " src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/35.webp" alt="">
                                        </div>
                                    </a>
                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                                        <div class="position-relative">
                                            <div class="bg-holder z-n1" style="background-image:url('https://prium.github.io/phoenix/v1.18.0/assets/img/bg/bg-32.png');background-size: auto;"></div>
                                            <div class="p-3">
                                                <div class="text-end"><button class="btn p-0 me-2"><svg class="svg-inline--fa fa-user-plus text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"></path>
                                                        </svg><!-- <span class="fa-solid fa-user-plus text-white"></span> Font Awesome fontawesome.com --></button><button class="btn p-0"><svg class="svg-inline--fa fa-ellipsis text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                        </svg><!-- <span class="fa-solid fa-ellipsis text-white"></span> Font Awesome fontawesome.com --></button></div>
                                                <div class="d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/35.webp" alt=""></div>
                                                    <h6 class="text-white">Stanly Drinkwater</h6>
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
                                                    <div class="d-flex"><button class="btn btn-outline-secondary btn-icon btn-icon-lg me-2"><svg class="svg-inline--fa fa-phone" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                                            </svg>
                                                        </button><button class="btn btn-outline-secondary btn-icon btn-icon-lg me-2"><svg class="svg-inline--fa fa-message" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="message" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h96v80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64z"></path>
                                                            </svg><!-- <span class="fa-solid fa-message"></span> Font Awesome fontawesome.com --></button><button class="btn btn-outline-secondary btn-icon btn-icon-lg"><svg class="svg-inline--fa fa-video" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="video" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M0 128C0 92.7 28.7 64 64 64H320c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2V384c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1V320 192 174.9l14.2-9.5 96-64c9.8-6.5 22.4-7.2 32.9-1.6z"></path>
                                                            </svg><!-- <span class="fa-solid fa-video"></span> Font Awesome fontawesome.com --></button></div><button class="btn btn-outline-primary"><svg class="svg-inline--fa fa-envelope me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"></path>
                                                        </svg><!-- <span class="fa-solid fa-envelope me-2"></span> Font Awesome fontawesome.com -->Send Email</button>
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
                                                        </svg><!-- <span class="fa-solid fa-chevron-right fs-11"></span> Font Awesome fontawesome.com -->
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
                                                        </svg><!-- <span class="fa-solid fa-chevron-right fs-11"></span> Font Awesome fontawesome.com -->
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                                    </div>
                                    <a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        <div class="avatar avatar-s  rounded-circle">
                                            <img class="rounded-circle img-fluid " src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/58.webp" alt="">
                                        </div>
                                    </a>
                                    <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                                        <div class="position-relative">
                                            <div class="bg-holder z-n1" style="background-image:url('https://prium.github.io/phoenix/v1.18.0/assets/img/bg/bg-32.png');background-size: auto;"></div>
                                            <!--/.bg-holder-->
                                            <div class="p-3">
                                                <div class="text-end"><button class="btn p-0 me-2"><svg class="svg-inline--fa fa-user-plus text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"></path>
                                                        </svg><!-- <span class="fa-solid fa-user-plus text-white"></span> Font Awesome fontawesome.com --></button><button class="btn p-0"><svg class="svg-inline--fa fa-ellipsis text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                        </svg><!-- <span class="fa-solid fa-ellipsis text-white"></span> Font Awesome fontawesome.com --></button></div>
                                                <div class="d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle img-fluid border border-light-subtle" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/58.webp" alt=""></div>
                                                    <h6 class="text-white">Igor Borvibson</h6>
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
                                                    <div class="d-flex"><button class="btn btn-outline-secondary btn-icon btn-icon-lg me-2"><svg class="svg-inline--fa fa-phone" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                                            </svg>
                                                        </button><button class="btn btn-outline-secondary btn-icon btn-icon-lg me-2"><svg class="svg-inline--fa fa-message" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="message" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h96v80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64z"></path>
                                                            </svg><!-- <span class="fa-solid fa-message"></span> Font Awesome fontawesome.com --></button><button class="btn btn-outline-secondary btn-icon btn-icon-lg"><svg class="svg-inline--fa fa-video" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="video" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M0 128C0 92.7 28.7 64 64 64H320c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2V384c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1V320 192 174.9l14.2-9.5 96-64c9.8-6.5 22.4-7.2 32.9-1.6z"></path>
                                                            </svg><!-- <span class="fa-solid fa-video"></span> Font Awesome fontawesome.com --></button></div><button class="btn btn-outline-primary"><svg class="svg-inline--fa fa-envelope me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"></path>
                                                        </svg><!-- <span class="fa-solid fa-envelope me-2"></span> Font Awesome fontawesome.com -->Send Email</button>
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
                                                        </svg><!-- <span class="fa-solid fa-chevron-right fs-11"></span> Font Awesome fontawesome.com -->
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
                                                        </svg><!-- <span class="fa-solid fa-chevron-right fs-11"></span> Font Awesome fontawesome.com -->
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle text-nowrap start ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">Nov 17, 2020</p>
                            </td>
                            <td class="align-middle text-nowrap deadline ps-3 py-4">
                                <p class="mb-0 fs-9 text-body">May 21, 2028</p>
                            </td>
                            <td class="align-middle text-nowrap task ps-3 py-4">
                                <p class="fw-bo text-body fs-9 mb-0">287</p>
                            </td>
                            <td class="align-middle text-nowrap ps-3 projectprogress">
                                <p class="text-body-secondary fs-10 mb-0">145 / 145</p>
                                <div class="progress" style="height:3px;">
                                    <div class="progress-bar bg-success" style="width: 100%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td class="align-middle text-nowrap text-end statuses"><span class="badge badge-phoenix fs-10 badge-phoenix-success">completed</span></td>
                            <td class="align-middle text-end text-nowrap pe-0 action">
                                <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                        </svg><!-- <span class="fas fa-ellipsis-h fs-10"></span> Font Awesome fontawesome.com --></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2" style=""><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#!">Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection