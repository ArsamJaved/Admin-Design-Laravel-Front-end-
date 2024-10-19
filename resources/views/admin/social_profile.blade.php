@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div class="social-profile">
        <div class="p-md-4 p-3">
            <div class="pb-9">
                <div class="card mb-5">
                    <div class="card-header d-flex justify-content-center align-items-end position-relative mb-5" style="min-height: 214px; ">
                        <div class="hover-actions-trigger position-static">
                            <div class="bg-holder rounded-top" style="background-image:url(https://prium.github.io/phoenix/v1.18.0/assets/img/generic/cover-photo.png);"></div><input class="d-none" id="upload-cover-image" type="file"><label class="cover-image-file-input" for="upload-cover-image"></label>
                            <div class="hover-actions end-0 bottom-0 pe-1 pb-2 text-white"><svg class="svg-inline--fa fa-camera me-2 overlay-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="camera" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M149.1 64.8L138.7 96H64C28.7 96 0 124.7 0 160V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H373.3L362.9 64.8C356.4 45.2 338.1 32 317.4 32H194.6c-20.7 0-39 13.2-45.5 32.8zM256 192a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"></path>
                                </svg>
                            </div>
                        </div>
                        <input class="d-none" id="upload-porfile-picture" type="file">
                        <div class="hoverbox feed-profile" style="width: 150px; height: 150px">
                            <div class="hoverbox-content rounded-circle img-fluidd-flex align-items-center justify-content-center z-1">
                                <svg class="svg-inline--fa fa-camera fs-3 text-light" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="camera" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M149.1 64.8L138.7 96H64C28.7 96 0 124.7 0 160V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H373.3L362.9 64.8C356.4 45.2 338.1 32 317.4 32H194.6c-20.7 0-39 13.2-45.5 32.8zM256 192a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"></path>
                                </svg>

                            </div>
                            <div class="position-relative bg-body-quaternary rounded-circle img-fluidcursor-pointer d-flex align-items-center mb-xxl-7">
                                <div class="avatar avatar-5xl"><img class="rounded-circle img-fluid rounded-circle img-fluid img-thumbnail shadow-sm border-0" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/9.webp" alt="">
                                </div><label class="w-100 h-100 position-absolute z-1" for="upload-porfile-picture"></label>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-xl-between">
                            <div class="col-auto">
                                <div class="d-flex flex-wrap mb-3 align-items-center">
                                    <h2 class="me-2">Erza Bridgest</h2><span class="fw-semibold fs-7 text-body-emphasis">u/hansolo</span>
                                </div>
                                <div class="mb-5">
                                    <div class="d-md-flex align-items-center">
                                        <div class="d-flex align-items-center"><svg class="svg-inline--fa fa-user-group fs-9 text-body-tertiary me-2 me-lg-1 me-xl-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-group" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"></path>
                                            </svg>
                                            <a class="text-body-emphasis" href="#!"><span class="fs-7 fw-bold text-body-tertiary text-opacity-85 text-body-emphasis-hover">1297 <span class="fw-semibold ms-1 me-4">Followers</span></span></a>
                                        </div>
                                        <div class="d-flex align-items-center"><svg class="svg-inline--fa fa-user-check fs-9 text-body-tertiary me-2 me-lg-1 me-xl-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM625 177L497 305c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L591 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                                            </svg>
                                            <a class="text-body-emphasis" href="#!"><span class="fs-7 fw-bold text-body-tertiary text-opacity-85 text-body-emphasis-hover">3971 <span class="fw-semibold ms-1 me-4">Following</span></span></a>
                                        </div>
                                        <div class="d-flex align-items-center"><svg class="svg-inline--fa fa-location-dot fs-9 text-body-tertiary me-2 me-lg-1 me-xl-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path>
                                            </svg>
                                            <a class="text-body-emphasis" href="#!"><span class="fs-7 fw-semibold text-body-tertiary text-opacity-85 text-body-emphasis-hover">Vancouver, Lothal</span></a>
                                        </div>
                                    </div>
                                </div>
                                <p class="fs-6 text-body-secondary">“Whenever you find yourself on the side of the majority, it is time to pause and reflect.”</p>
                            </div>
                            <div class="col-auto">
                                <div class="row g-2">
                                    <div class="col-auto order-xxl-2"><button class="btn btn-primary lh-1"><svg class="svg-inline--fa fa-user-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"></path>
                                            </svg>Follow Request</button></div>
                                    <div class="col-auto order-xxl-1"><button class="btn btn-outline-primary lh-1"><svg class="svg-inline--fa fa-message me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="message" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h96v80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64z"></path>
                                            </svg>Send Message</button></div>
                                    <div class="col-auto">
                                        <div class="position-static">
                                            <button class="btn btn-outline-secondary lh-1" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-chevron-down me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"></path>
                                                </svg>
                                                More
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item d-xl-none" href="#!">
                                                    <svg class="svg-inline--fa fa-user-group text-body-secondary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-group" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"></path>
                                                    </svg>
                                                    <span>Followers</span></a><a class="dropdown-item d-xl-none" href="#!">
                                                    <svg class="svg-inline--fa fa-users text-body-secondary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="users" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"></path>
                                                    </svg>
                                                    <span>Communities</span></a><a class="dropdown-item d-xl-none" href="#!"><svg class="svg-inline--fa fa-photo-film text-body-secondary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="photo-film" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M256 0H576c35.3 0 64 28.7 64 64V288c0 35.3-28.7 64-64 64H256c-35.3 0-64-28.7-64-64V64c0-35.3 28.7-64 64-64zM476 106.7C471.5 100 464 96 456 96s-15.5 4-20 10.7l-56 84L362.7 169c-4.6-5.7-11.5-9-18.7-9s-14.2 3.3-18.7 9l-64 80c-5.8 7.2-6.9 17.1-2.9 25.4s12.4 13.6 21.6 13.6h80 48H552c8.9 0 17-4.9 21.2-12.7s3.7-17.3-1.2-24.6l-96-144zM336 96a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM64 128h96V384v32c0 17.7 14.3 32 32 32H320c17.7 0 32-14.3 32-32V384H512v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V192c0-35.3 28.7-64 64-64zm8 64c-8.8 0-16 7.2-16 16v16c0 8.8 7.2 16 16 16H88c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H72zm0 104c-8.8 0-16 7.2-16 16v16c0 8.8 7.2 16 16 16H88c8.8 0 16-7.2 16-16V312c0-8.8-7.2-16-16-16H72zm0 104c-8.8 0-16 7.2-16 16v16c0 8.8 7.2 16 16 16H88c8.8 0 16-7.2 16-16V416c0-8.8-7.2-16-16-16H72zm336 16v16c0 8.8 7.2 16 16 16h16c8.8 0 16-7.2 16-16V416c0-8.8-7.2-16-16-16H424c-8.8 0-16 7.2-16 16z"></path>
                                                    </svg>
                                                    <span>Media Files</span></a><a class="dropdown-item d-xl-none" href="#!"><svg class="svg-inline--fa fa-calendar-days fs-8 text-body-secondary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar-days" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"></path>
                                                    </svg>
                                                    <span> Events</span></a><a class="dropdown-item d-xl-none" href="#!"><svg class="svg-inline--fa fa-dice text-body-secondary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dice" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M274.9 34.3c-28.1-28.1-73.7-28.1-101.8 0L34.3 173.1c-28.1 28.1-28.1 73.7 0 101.8L173.1 413.7c28.1 28.1 73.7 28.1 101.8 0L413.7 274.9c28.1-28.1 28.1-73.7 0-101.8L274.9 34.3zM200 224a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zM96 200a24 24 0 1 1 0 48 24 24 0 1 1 0-48zM224 376a24 24 0 1 1 0-48 24 24 0 1 1 0 48zM352 200a24 24 0 1 1 0 48 24 24 0 1 1 0-48zM224 120a24 24 0 1 1 0-48 24 24 0 1 1 0 48zm96 328c0 35.3 28.7 64 64 64H576c35.3 0 64-28.7 64-64V256c0-35.3-28.7-64-64-64H461.7c11.6 36 3.1 77-25.4 105.5L320 413.8V448zM480 328a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"></path>
                                                    </svg>
                                                    <span>Games</span></a><a class="dropdown-item d-xl-none" href="#!"><svg class="svg-inline--fa fa-user-gear text-body-secondary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-gear" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M224 0a128 128 0 1 1 0 256A128 128 0 1 1 224 0zM178.3 304h91.4c11.8 0 23.4 1.2 34.5 3.3c-2.1 18.5 7.4 35.6 21.8 44.8c-16.6 10.6-26.7 31.6-20 53.3c4 12.9 9.4 25.5 16.4 37.6s15.2 23.1 24.4 33c15.7 16.9 39.6 18.4 57.2 8.7v.9c0 9.2 2.7 18.5 7.9 26.3H29.7C13.3 512 0 498.7 0 482.3C0 383.8 79.8 304 178.3 304zM436 218.2c0-7 4.5-13.3 11.3-14.8c10.5-2.4 21.5-3.7 32.7-3.7s22.2 1.3 32.7 3.7c6.8 1.5 11.3 7.8 11.3 14.8v17.7c0 7.8 4.8 14.8 11.6 18.7c6.8 3.9 15.1 4.5 21.8 .6l13.8-7.9c6.1-3.5 13.7-2.7 18.5 2.4c7.6 8.1 14.3 17.2 20.1 27.2s10.3 20.4 13.5 31c2.1 6.7-1.1 13.7-7.2 17.2l-14.4 8.3c-6.5 3.7-10 10.9-10 18.4s3.5 14.7 10 18.4l14.4 8.3c6.1 3.5 9.2 10.5 7.2 17.2c-3.3 10.6-7.8 21-13.5 31s-12.5 19.1-20.1 27.2c-4.8 5.1-12.5 5.9-18.5 2.4l-13.8-7.9c-6.7-3.9-15.1-3.3-21.8 .6c-6.8 3.9-11.6 10.9-11.6 18.7v17.7c0 7-4.5 13.3-11.3 14.8c-10.5 2.4-21.5 3.7-32.7 3.7s-22.2-1.3-32.7-3.7c-6.8-1.5-11.3-7.8-11.3-14.8V467.8c0-7.9-4.9-14.9-11.7-18.9c-6.8-3.9-15.2-4.5-22-.6l-13.5 7.8c-6.1 3.5-13.7 2.7-18.5-2.4c-7.6-8.1-14.3-17.2-20.1-27.2s-10.3-20.4-13.5-31c-2.1-6.7 1.1-13.7 7.2-17.2l14-8.1c6.5-3.8 10.1-11.1 10.1-18.6s-3.5-14.8-10.1-18.6l-14-8.1c-6.1-3.5-9.2-10.5-7.2-17.2c3.3-10.6 7.7-21 13.5-31s12.5-19.1 20.1-27.2c4.8-5.1 12.4-5.9 18.5-2.4l13.6 7.8c6.8 3.9 15.2 3.3 22-.6c6.9-3.9 11.7-11 11.7-18.9V218.2zm92.1 133.5a48.1 48.1 0 1 0 -96.1 0 48.1 48.1 0 1 0 96.1 0z"></path>
                                                    </svg>
                                                    <span>Settings</span></a><a class="dropdown-item" href="#!"><svg class="svg-inline--fa fa-bell-slash text-body-secondary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bell-slash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7l-90.2-70.7c.2-.4 .4-.9 .6-1.3c5.2-11.5 3.1-25-5.3-34.4l-7.4-8.3C497.3 319.2 480 273.9 480 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32s-32 14.3-32 32V51.2c-42.6 8.6-79 34.2-102 69.3L38.8 5.1zM406.2 416L160 222.1v4.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S115.4 416 128 416H406.2zm-40.9 77.3c12-12 18.7-28.3 18.7-45.3H320 256c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z"></path>
                                                    </svg>
                                                    <span>Mute Conversation</span></a><a class="dropdown-item" href="#!"><svg class="svg-inline--fa fa-gear text-body-secondary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gear" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"></path>
                                                    </svg>
                                                    <span>Manage Settings</span></a><a class="dropdown-item" href="#!"><svg class="svg-inline--fa fa-hand-holding-heart text-body-secondary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="hand-holding-heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M163.9 136.9c-29.4-29.8-29.4-78.2 0-108s77-29.8 106.4 0l17.7 18 17.7-18c29.4-29.8 77-29.8 106.4 0s29.4 78.2 0 108L310.5 240.1c-6.2 6.3-14.3 9.4-22.5 9.4s-16.3-3.1-22.5-9.4L163.9 136.9zM568.2 336.3c13.1 17.8 9.3 42.8-8.5 55.9L433.1 485.5c-23.4 17.2-51.6 26.5-80.7 26.5H192 32c-17.7 0-32-14.3-32-32V416c0-17.7 14.3-32 32-32H68.8l44.9-36c22.7-18.2 50.9-28 80-28H272h16 64c17.7 0 32 14.3 32 32s-14.3 32-32 32H288 272c-8.8 0-16 7.2-16 16s7.2 16 16 16H392.6l119.7-88.2c17.8-13.1 42.8-9.3 55.9 8.5zM193.6 384l0 0-.9 0c.3 0 .6 0 .9 0z"></path>
                                                    </svg>
                                                    <span>Get help</span></a><a class="dropdown-item" href="#!"><svg class="svg-inline--fa fa-flag text-body-secondary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="flag" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M64 32C64 14.3 49.7 0 32 0S0 14.3 0 32V64 368 480c0 17.7 14.3 32 32 32s32-14.3 32-32V352l64.3-16.1c41.1-10.3 84.6-5.5 122.5 13.4c44.2 22.1 95.5 24.8 141.7 7.4l34.7-13c12.5-4.7 20.8-16.6 20.8-30V66.1c0-23-24.2-38-44.8-27.7l-9.6 4.8c-46.3 23.2-100.8 23.2-147.1 0c-35.1-17.6-75.4-22-113.5-12.5L64 48V32z"></path>
                                                    </svg>
                                                    <span>Report Account</span></a><a class="dropdown-item" href="#!"><svg class="svg-inline--fa fa-ban text-body-secondary me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ban" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M367.2 412.5L99.5 144.8C77.1 176.1 64 214.5 64 256c0 106 86 192 192 192c41.5 0 79.9-13.1 111.2-35.5zm45.3-45.3C434.9 335.9 448 297.5 448 256c0-106-86-192-192-192c-41.5 0-79.9 13.1-111.2 35.5L412.5 367.2zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                                    </svg>
                                                    <span>Block Account</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gy-3 gx-5 gx-xxl-6">
                    <div class="col-xl-4 d-none d-xl-block">
                        <div class="mb-5">
                            <div class="row g-0">
                                <div class="col-6 border-1 border-bottom border-end py-2"> <a class="btn btn-link ps-2 fs-8 text-body-secondary text-primary-hover fw-semibold d-flex flex-column d-xxl-inline-block" href="#!"><svg class="svg-inline--fa fa-user-group me-2 mb-2 mb-xxl-0" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-group" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"></path>
                                        </svg>
                                        Followers</a></div>
                                <div class="col-6 border-1 border-bottom py-2"><a class="btn btn-link fs-8 text-body-secondary text-primary-hover fw-semibold d-flex flex-column d-xxl-inline-block" href="#!"><svg class="svg-inline--fa fa-users me-2 mb-2 mb-xxl-0" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="users" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"></path>
                                        </svg>
                                        Communities</a></div>
                                <div class="col-6 border-1 border-bottom border-end py-2"><a class="btn btn-link ps-2 fs-8 text-body-secondary text-primary-hover fw-semibold d-flex flex-column d-xxl-inline-block" href="#!"><svg class="svg-inline--fa fa-photo-film me-2 mb-2 mb-xxl-0" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="photo-film" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M256 0H576c35.3 0 64 28.7 64 64V288c0 35.3-28.7 64-64 64H256c-35.3 0-64-28.7-64-64V64c0-35.3 28.7-64 64-64zM476 106.7C471.5 100 464 96 456 96s-15.5 4-20 10.7l-56 84L362.7 169c-4.6-5.7-11.5-9-18.7-9s-14.2 3.3-18.7 9l-64 80c-5.8 7.2-6.9 17.1-2.9 25.4s12.4 13.6 21.6 13.6h80 48H552c8.9 0 17-4.9 21.2-12.7s3.7-17.3-1.2-24.6l-96-144zM336 96a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM64 128h96V384v32c0 17.7 14.3 32 32 32H320c17.7 0 32-14.3 32-32V384H512v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V192c0-35.3 28.7-64 64-64zm8 64c-8.8 0-16 7.2-16 16v16c0 8.8 7.2 16 16 16H88c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H72zm0 104c-8.8 0-16 7.2-16 16v16c0 8.8 7.2 16 16 16H88c8.8 0 16-7.2 16-16V312c0-8.8-7.2-16-16-16H72zm0 104c-8.8 0-16 7.2-16 16v16c0 8.8 7.2 16 16 16H88c8.8 0 16-7.2 16-16V416c0-8.8-7.2-16-16-16H72zm336 16v16c0 8.8 7.2 16 16 16h16c8.8 0 16-7.2 16-16V416c0-8.8-7.2-16-16-16H424c-8.8 0-16 7.2-16 16z"></path>
                                        </svg>
                                        Media Files</a></div>
                                <div class="col-6 border-1 border-bottom py-2"><a class="btn btn-link fs-8 text-body-secondary text-primary-hover fw-semibold d-flex flex-column d-xxl-inline-block" href="#!"><svg class="svg-inline--fa fa-calendar-days me-2 mb-2 mb-xxl-0" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar-days" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"></path>
                                        </svg>
                                        Events</a></div>
                                <div class="col-6 border-1 border-end py-2"><a class="btn btn-link ps-2 fs-8 text-body-secondary text-primary-hover fw-semibold d-flex flex-column d-xxl-inline-block" href="#!"><svg class="svg-inline--fa fa-dice me-2 mb-2 mb-xxl-0" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dice" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M274.9 34.3c-28.1-28.1-73.7-28.1-101.8 0L34.3 173.1c-28.1 28.1-28.1 73.7 0 101.8L173.1 413.7c28.1 28.1 73.7 28.1 101.8 0L413.7 274.9c28.1-28.1 28.1-73.7 0-101.8L274.9 34.3zM200 224a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zM96 200a24 24 0 1 1 0 48 24 24 0 1 1 0-48zM224 376a24 24 0 1 1 0-48 24 24 0 1 1 0 48zM352 200a24 24 0 1 1 0 48 24 24 0 1 1 0-48zM224 120a24 24 0 1 1 0-48 24 24 0 1 1 0 48zm96 328c0 35.3 28.7 64 64 64H576c35.3 0 64-28.7 64-64V256c0-35.3-28.7-64-64-64H461.7c11.6 36 3.1 77-25.4 105.5L320 413.8V448zM480 328a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"></path>
                                        </svg>
                                        Games</a></div>
                                <div class="col-6 border-1 py-2"><a class="btn btn-link fs-8 text-body-secondary text-primary-hover fw-semibold d-flex flex-column d-xxl-inline-block" href="#!"><svg class="svg-inline--fa fa-user-gear me-2 mb-2 mb-xxl-0" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-gear" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M224 0a128 128 0 1 1 0 256A128 128 0 1 1 224 0zM178.3 304h91.4c11.8 0 23.4 1.2 34.5 3.3c-2.1 18.5 7.4 35.6 21.8 44.8c-16.6 10.6-26.7 31.6-20 53.3c4 12.9 9.4 25.5 16.4 37.6s15.2 23.1 24.4 33c15.7 16.9 39.6 18.4 57.2 8.7v.9c0 9.2 2.7 18.5 7.9 26.3H29.7C13.3 512 0 498.7 0 482.3C0 383.8 79.8 304 178.3 304zM436 218.2c0-7 4.5-13.3 11.3-14.8c10.5-2.4 21.5-3.7 32.7-3.7s22.2 1.3 32.7 3.7c6.8 1.5 11.3 7.8 11.3 14.8v17.7c0 7.8 4.8 14.8 11.6 18.7c6.8 3.9 15.1 4.5 21.8 .6l13.8-7.9c6.1-3.5 13.7-2.7 18.5 2.4c7.6 8.1 14.3 17.2 20.1 27.2s10.3 20.4 13.5 31c2.1 6.7-1.1 13.7-7.2 17.2l-14.4 8.3c-6.5 3.7-10 10.9-10 18.4s3.5 14.7 10 18.4l14.4 8.3c6.1 3.5 9.2 10.5 7.2 17.2c-3.3 10.6-7.8 21-13.5 31s-12.5 19.1-20.1 27.2c-4.8 5.1-12.5 5.9-18.5 2.4l-13.8-7.9c-6.7-3.9-15.1-3.3-21.8 .6c-6.8 3.9-11.6 10.9-11.6 18.7v17.7c0 7-4.5 13.3-11.3 14.8c-10.5 2.4-21.5 3.7-32.7 3.7s-22.2-1.3-32.7-3.7c-6.8-1.5-11.3-7.8-11.3-14.8V467.8c0-7.9-4.9-14.9-11.7-18.9c-6.8-3.9-15.2-4.5-22-.6l-13.5 7.8c-6.1 3.5-13.7 2.7-18.5-2.4c-7.6-8.1-14.3-17.2-20.1-27.2s-10.3-20.4-13.5-31c-2.1-6.7 1.1-13.7 7.2-17.2l14-8.1c6.5-3.8 10.1-11.1 10.1-18.6s-3.5-14.8-10.1-18.6l-14-8.1c-6.1-3.5-9.2-10.5-7.2-17.2c3.3-10.6 7.7-21 13.5-31s12.5-19.1 20.1-27.2c4.8-5.1 12.4-5.9 18.5-2.4l13.6 7.8c6.8 3.9 15.2 3.3 22-.6c6.9-3.9 11.7-11 11.7-18.9V218.2zm92.1 133.5a48.1 48.1 0 1 0 -96.1 0 48.1 48.1 0 1 0 96.1 0z"></path>
                                        </svg>
                                        Settings </a></div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="d-flex pb-4 align-items-end justify-content-between">
                                <h3 class="flex-1 mb-0">Photos</h3><a class="fw-bold fs-9 me-4" href="#!">Albums</a><a class="fw-bold fs-9" href="#!">See all</a>
                            </div>
                            <div class="row g-3">
                                <div class="col-4"><a href="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/11.png" data-gallery="gallery-photos"><img class="w-100 rounded-3" src="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/11.png" alt=""></a></div>
                                <div class="col-4"><a href="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/12.png" data-gallery="gallery-photos"><img class="w-100 rounded-3" src="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/12.png" alt=""></a></div>
                                <div class="col-4"><a href="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/13.png" data-gallery="gallery-photos"><img class="w-100 rounded-3" src="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/13.png" alt=""></a></div>
                                <div class="col-4"><a href="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/14.png" data-gallery="gallery-photos"><img class="w-100 rounded-3" src="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/14.png" alt=""></a></div>
                                <div class="col-4"><a href="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/15.png" data-gallery="gallery-photos"><img class="w-100 rounded-3" src="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/15.png" alt=""></a></div>
                                <div class="col-4"><a href="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/16.png" data-gallery="gallery-photos"><img class="w-100 rounded-3" src="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/16.png" alt=""></a></div>
                            </div>
                        </div>
                        <div class="d-flex pb-4 align-items-end border-bottom justify-content-between border-dashed">
                            <h3 class="flex-1 mb-0">You and Erza</h3><a class="fw-bold fs-9" href="#!">See details</a>
                        </div>
                        <div class="row g-0 mb-5 mb-lg-0">
                            <div class="col-12 border-1 border-bottom py-2"><a class="btn btn-link px-0 fs-8 text-body-secondary text-primary-hover fw-semibold d-flex" href="#!"><svg class="svg-inline--fa fa-user-group me-2 mb-2 mb-xxl-0" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-group" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"></path>
                                    </svg>
                                    432 Common Followers</a></div>
                            <div class="col-12 border-1 border-bottom py-2"><a class="btn btn-link px-0 fs-8 text-body-secondary text-primary-hover fw-semibold d-flex" href="#!"><svg class="svg-inline--fa fa-users me-2 mb-2 mb-xxl-0" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="users" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"></path>
                                    </svg>
                                    21 Communities</a></div>
                            <div class="col-12 border-1 border-bottom py-2"><a class="btn btn-link px-0 fs-8 text-body-secondary text-primary-hover fw-semibold d-flex" href="#!"><svg class="svg-inline--fa fa-tags me-2 mb-2 mb-xxl-0" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="tags" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M345 39.1L472.8 168.4c52.4 53 52.4 138.2 0 191.2L360.8 472.9c-9.3 9.4-24.5 9.5-33.9 .2s-9.5-24.5-.2-33.9L438.6 325.9c33.9-34.3 33.9-89.4 0-123.7L310.9 72.9c-9.3-9.4-9.2-24.6 .2-33.9s24.6-9.2 33.9 .2zM0 229.5V80C0 53.5 21.5 32 48 32H197.5c17 0 33.3 6.7 45.3 18.7l168 168c25 25 25 65.5 0 90.5L277.3 442.7c-25 25-65.5 25-90.5 0l-168-168C6.7 262.7 0 246.5 0 229.5zM144 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"></path>
                                    </svg>
                                    12 Tagged Images</a></div>
                            <div class="col-12 border-1 border-bottom py-2"><a class="btn btn-link px-0 fs-8 text-body-secondary text-primary-hover fw-semibold d-flex" href="#!"><svg class="svg-inline--fa fa-calendar-days me-2 mb-2 mb-xxl-0" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar-days" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"></path>
                                    </svg>
                                    3 Common Events</a></div>
                            <div class="col-12 border-1 border-bottom py-2"><a class="btn btn-link px-0 fs-8 text-body-secondary text-primary-hover fw-semibold d-flex" href="#!"><svg class="svg-inline--fa fa-location-dot me-2 mb-2 mb-xxl-0" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path>
                                    </svg>
                                    45 Common Check-ins</a></div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-8">
                        <div class="mb-9">
                            <div class="mb-5">
                                <div class="card mb-4">
                                    <div class="card-body p-3 p-sm-4">
                                        <div class="border-bottom mb-3">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="d-flex align-items-center">
                                                    <a href="../../apps/social/profile.html">
                                                        <div class="avatar avatar-xl  me-2">
                                                            <img class="rounded-circle img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img//team/9.webp" alt="">
                                                        </div>
                                                    </a>
                                                    <div class="flex-1"><a class="fw-bold mb-0 text-body-emphasis" href="../../apps/social/profile.html">Erza Bridgest</a>
                                                        <p class="fs-10 mb-0 text-body-tertiary text-opacity-85 fw-semibold">35 mins ago
                                                            Mustafar, British Columbia
                                                            <svg class="svg-inline--fa fa-earth-americas text-body" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="earth-americas" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M57.7 193l9.4 16.4c8.3 14.5 21.9 25.2 38 29.8L163 255.7c17.2 4.9 29 20.6 29 38.5v39.9c0 11 6.2 21 16 25.9s16 14.9 16 25.9v39c0 15.6 14.9 26.9 29.9 22.6c16.1-4.6 28.6-17.5 32.7-33.8l2.8-11.2c4.2-16.9 15.2-31.4 30.3-40l8.1-4.6c15-8.5 24.2-24.5 24.2-41.7v-8.3c0-12.7-5.1-24.9-14.1-33.9l-3.9-3.9c-9-9-21.2-14.1-33.9-14.1H257c-11.1 0-22.1-2.9-31.8-8.4l-34.5-19.7c-4.3-2.5-7.6-6.5-9.2-11.2c-3.2-9.6 1.1-20 10.2-24.5l5.9-3c6.6-3.3 14.3-3.9 21.3-1.5l23.2 7.7c8.2 2.7 17.2-.4 21.9-7.5c4.7-7 4.2-16.3-1.2-22.8l-13.6-16.3c-10-12-9.9-29.5 .3-41.3l15.7-18.3c8.8-10.3 10.2-25 3.5-36.7l-2.4-4.2c-3.5-.2-6.9-.3-10.4-.3C163.1 48 84.4 108.9 57.7 193zM464 256c0-36.8-9.6-71.4-26.4-101.5L412 164.8c-15.7 6.3-23.8 23.8-18.5 39.8l16.9 50.7c3.5 10.4 12 18.3 22.6 20.9l29.1 7.3c1.2-9 1.8-18.2 1.8-27.5zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                                            </svg>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                                </div>
                                            </div>
                                            <p class="text-body-secondary">Melancholy is sadness that has taken on lightness.</p>
                                            <div class="row g-1 mb-5">
                                                <div class="col-3"><a href="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/22.png" data-gallery="gallery-posts-0"><img class="rounded h-100 w-100" src="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/22.png" alt="..."></a></div>
                                                <div class="col-3"><a href="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/23.png" data-gallery="gallery-posts-0"><img class="rounded h-100 w-100" src="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/23.png" alt="..."></a></div>
                                                <div class="col-6"><a href="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/24.png" data-gallery="gallery-posts-0"><img class="rounded h-100 w-100" src="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/24.png" alt="..."></a></div>
                                            </div>
                                        </div>
                                        <div class="d-flex"><button class="btn btn-link p-0 me-3 fs-10 fw-bolder" type="button"><svg class="svg-inline--fa fa-heart me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"></path>
                                                </svg>
                                                345 Likes</button><button class="btn btn-link text-body p-0 fs-10 me-3 fw-bolder" type="button"><svg class="svg-inline--fa fa-comment me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comment" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M512 240c0 114.9-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6C73.6 471.1 44.7 480 16 480c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4l0 0 0 0 0 0 0 0 .3-.3c.3-.3 .7-.7 1.3-1.4c1.1-1.2 2.8-3.1 4.9-5.7c4.1-5 9.6-12.4 15.2-21.6c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208z"></path>
                                                </svg>
                                                45 Comments</button><button class="btn btn-link text-body p-0 fs-10 me-2 fw-bolder" type="button"><svg class="svg-inline--fa fa-share me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M307 34.8c-11.5 5.1-19 16.6-19 29.2v64H176C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96h96v64c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z"></path>
                                                </svg>
                                                56 shares</button></div>
                                    </div>
                                    <div class="bg-body-highlight border-top p-3 p-sm-4">
                                        <div class="d-flex align-items-start"><a href="../../apps/social/profile.html">
                                                <div class="avatar avatar-m  me-2">
                                                    <img class="rounded-circle img-fluid" src="../../assets/img//team/30.webp" alt="">
                                                </div>
                                            </a>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center"><a class="fw-bold mb-0 text-body-emphasis" href="../../apps/social/profile.html">Mamur Fechetti</a><span class="text-body-tertiary text-opacity-85 fw-semibold fs-10 ms-2">35 mins ago</span></div>
                                                <p class="mb-0">How long did it take to create this? It appears that you quickly produced the second one.</p><button class="btn btn-link p-0 text-body fw-bolder mb-2" type="button"><svg class="svg-inline--fa fa-reply fs-10 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="reply" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M205 34.8c11.5 5.1 19 16.6 19 29.2v64H336c97.2 0 176 78.8 176 176c0 113.3-81.5 163.9-100.2 174.1c-2.5 1.4-5.3 1.9-8.1 1.9c-10.9 0-19.7-8.9-19.7-19.7c0-7.5 4.3-14.4 9.8-19.5c9.4-8.8 22.2-26.4 22.2-56.7c0-53-43-96-96-96H224v64c0 12.6-7.4 24.1-19 29.2s-25 3-34.4-5.4l-160-144C3.9 225.7 0 217.1 0 208s3.9-17.7 10.6-23.8l160-144c9.4-8.5 22.9-10.6 34.4-5.4z"></path>
                                                    </svg>
                                                    <span class="fw-bold fs-10">Reply</span></button>
                                                <div class="d-flex align-items-start mb-3"><a href="../../apps/social/profile.html">
                                                        <div class="avatar avatar-m  me-2">
                                                            <img class="rounded-circle img-fluid" src="../../assets/img//team/62.webp" alt="">
                                                        </div>
                                                    </a>
                                                    <div class="flex-1">
                                                        <div class="d-flex align-items-center"><a class="fw-bold mb-0 text-body-emphasis" href="../../apps/social/profile.html">Zingko Kudobum</a><span class="text-body-tertiary text-opacity-85 fw-semibold fs-10 ms-2">5 mins ago</span></div>
                                                        <p class="mb-0">I am so clever that sometimes I don't understand a single word of what I am saying.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center"><a href="../../apps/social/profile.html">
                                                <div class="avatar avatar-m  me-2">
                                                    <img class="rounded-circle img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img//team/9.webp" alt="">
                                                </div>
                                            </a>
                                            <div class="flex-1"><input class="form-control" type="text" placeholder="Add comment"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <div class="card mb-4">
                                    <div class="card-body p-3 p-sm-4">
                                        <div class="border-bottom mb-3">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="d-flex align-items-center">
                                                    <a href="../../apps/social/profile.html">
                                                        <div class="avatar avatar-xl  me-2">
                                                            <img class="rounded-circle img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img//team/9.webp" alt="">
                                                        </div>
                                                    </a>
                                                    <div class="flex-1"><a class="fw-bold mb-0 text-body-emphasis" href="../../apps/social/profile.html">Erza Bridgest</a>
                                                        <p class="fs-10 mb-0 text-body-tertiary text-opacity-85 fw-semibold">35 mins ago
                                                            Mustafar, British Columbia
                                                            <svg class="svg-inline--fa fa-earth-americas text-body" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="earth-americas" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M57.7 193l9.4 16.4c8.3 14.5 21.9 25.2 38 29.8L163 255.7c17.2 4.9 29 20.6 29 38.5v39.9c0 11 6.2 21 16 25.9s16 14.9 16 25.9v39c0 15.6 14.9 26.9 29.9 22.6c16.1-4.6 28.6-17.5 32.7-33.8l2.8-11.2c4.2-16.9 15.2-31.4 30.3-40l8.1-4.6c15-8.5 24.2-24.5 24.2-41.7v-8.3c0-12.7-5.1-24.9-14.1-33.9l-3.9-3.9c-9-9-21.2-14.1-33.9-14.1H257c-11.1 0-22.1-2.9-31.8-8.4l-34.5-19.7c-4.3-2.5-7.6-6.5-9.2-11.2c-3.2-9.6 1.1-20 10.2-24.5l5.9-3c6.6-3.3 14.3-3.9 21.3-1.5l23.2 7.7c8.2 2.7 17.2-.4 21.9-7.5c4.7-7 4.2-16.3-1.2-22.8l-13.6-16.3c-10-12-9.9-29.5 .3-41.3l15.7-18.3c8.8-10.3 10.2-25 3.5-36.7l-2.4-4.2c-3.5-.2-6.9-.3-10.4-.3C163.1 48 84.4 108.9 57.7 193zM464 256c0-36.8-9.6-71.4-26.4-101.5L412 164.8c-15.7 6.3-23.8 23.8-18.5 39.8l16.9 50.7c3.5 10.4 12 18.3 22.6 20.9l29.1 7.3c1.2-9 1.8-18.2 1.8-27.5zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                                            </svg>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                                </div>
                                            </div>
                                            <p class="text-body-secondary">A guy enters a bakery while carrying a 25-pound haddock.
                                                He asks the baker if he makes fish cakes. The rather perplexed baker responds in the negative.
                                                The guy responds "That's unfortunate.Today is his birthday"</p>
                                        </div>
                                        <div class="d-flex"><button class="btn btn-link p-0 me-3 fs-10 fw-bolder" type="button"><svg class="svg-inline--fa fa-heart me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"></path>
                                                </svg>
                                                23 Likes</button><button class="btn btn-link text-body p-0 fs-10 me-3 fw-bolder" type="button"><svg class="svg-inline--fa fa-comment me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comment" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M512 240c0 114.9-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6C73.6 471.1 44.7 480 16 480c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4l0 0 0 0 0 0 0 0 .3-.3c.3-.3 .7-.7 1.3-1.4c1.1-1.2 2.8-3.1 4.9-5.7c4.1-5 9.6-12.4 15.2-21.6c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208z"></path>
                                                </svg>
                                                9 Comments</button><button class="btn btn-link text-body p-0 fs-10 me-2 fw-bolder" type="button"><svg class="svg-inline--fa fa-share me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M307 34.8c-11.5 5.1-19 16.6-19 29.2v64H176C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96h96v64c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z"></path>
                                                </svg>
                                                3 shares</button></div>
                                    </div>
                                    <div class="bg-body-highlight border-top p-3 p-sm-4">
                                        <div class="d-flex align-items-center"><a href="../../apps/social/profile.html">
                                                <div class="avatar avatar-m  me-2">
                                                    <img class="rounded-circle img-fluid" src="../../assets/img//team/20.webp" alt="">
                                                </div>
                                            </a>
                                            <div class="flex-1"><input class="form-control" type="text" placeholder="Add comment"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <div class="card mb-4">
                                    <div class="card-body p-3 p-sm-4">
                                        <div class="border-bottom mb-3">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="d-flex align-items-center">
                                                    <a href="../../apps/social/profile.html">
                                                        <div class="avatar avatar-xl  me-2">
                                                            <img class="rounded-circle img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img//team/9.webp" alt="">
                                                        </div>
                                                    </a>
                                                    <div class="flex-1"><a class="fw-bold mb-0 text-body-emphasis" href="../../apps/social/profile.html">Erza Bridgest</a>
                                                        <p class="fs-10 mb-0 text-body-tertiary text-opacity-85 fw-semibold">35 mins ago
                                                            Mustafar, British Columbia
                                                            <svg class="svg-inline--fa fa-earth-americas text-body" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="earth-americas" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                                <path fill="currentColor" d="M57.7 193l9.4 16.4c8.3 14.5 21.9 25.2 38 29.8L163 255.7c17.2 4.9 29 20.6 29 38.5v39.9c0 11 6.2 21 16 25.9s16 14.9 16 25.9v39c0 15.6 14.9 26.9 29.9 22.6c16.1-4.6 28.6-17.5 32.7-33.8l2.8-11.2c4.2-16.9 15.2-31.4 30.3-40l8.1-4.6c15-8.5 24.2-24.5 24.2-41.7v-8.3c0-12.7-5.1-24.9-14.1-33.9l-3.9-3.9c-9-9-21.2-14.1-33.9-14.1H257c-11.1 0-22.1-2.9-31.8-8.4l-34.5-19.7c-4.3-2.5-7.6-6.5-9.2-11.2c-3.2-9.6 1.1-20 10.2-24.5l5.9-3c6.6-3.3 14.3-3.9 21.3-1.5l23.2 7.7c8.2 2.7 17.2-.4 21.9-7.5c4.7-7 4.2-16.3-1.2-22.8l-13.6-16.3c-10-12-9.9-29.5 .3-41.3l15.7-18.3c8.8-10.3 10.2-25 3.5-36.7l-2.4-4.2c-3.5-.2-6.9-.3-10.4-.3C163.1 48 84.4 108.9 57.7 193zM464 256c0-36.8-9.6-71.4-26.4-101.5L412 164.8c-15.7 6.3-23.8 23.8-18.5 39.8l16.9 50.7c3.5 10.4 12 18.3 22.6 20.9l29.1 7.3c1.2-9 1.8-18.2 1.8-27.5zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"></path>
                                                            </svg>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                            <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                                </div>
                                            </div>
                                            <p class="text-body-secondary">Fear can hold you prisoner. Hope can set you free. - King</p>
                                            <div class="row g-1 mb-5">
                                                <div class="col-3"><a href="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/25.png" data-gallery="gallery-posts-2"><img class="rounded h-100 w-100" src="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/25.png" alt="..."></a></div>
                                                <div class="col-3"><a href="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/26.png" data-gallery="gallery-posts-2"><img class="rounded h-100 w-100" src="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/26.png" alt="..."></a></div>
                                            </div>
                                        </div>
                                        <div class="d-flex"><button class="btn btn-link p-0 me-3 fs-10 fw-bolder" type="button"><svg class="svg-inline--fa fa-heart me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"></path>
                                                </svg>
                                                345 Likes</button><button class="btn btn-link text-body p-0 fs-10 me-3 fw-bolder" type="button"><svg class="svg-inline--fa fa-comment me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comment" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M512 240c0 114.9-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6C73.6 471.1 44.7 480 16 480c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4l0 0 0 0 0 0 0 0 .3-.3c.3-.3 .7-.7 1.3-1.4c1.1-1.2 2.8-3.1 4.9-5.7c4.1-5 9.6-12.4 15.2-21.6c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208z"></path>
                                                </svg>
                                                45 Comments</button><button class="btn btn-link text-body p-0 fs-10 me-2 fw-bolder" type="button"><svg class="svg-inline--fa fa-share me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M307 34.8c-11.5 5.1-19 16.6-19 29.2v64H176C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96h96v64c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z"></path>
                                                </svg>
                                                56 shares</button></div>
                                    </div>
                                    <div class="bg-body-highlight border-top p-3 p-sm-4">
                                        <div class="d-flex align-items-start"><a href="../../apps/social/profile.html">
                                                <div class="avatar avatar-m  me-2">
                                                    <img class="rounded-circle img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img//team/14.webp" alt="">
                                                </div>
                                            </a>
                                            <div class="flex-1">
                                                <div class="d-flex align-items-center"><a class="fw-bold mb-0 text-body-emphasis" href="../../apps/social/profile.html">Sutanuka Gomez</a><span class="text-body-tertiary text-opacity-85 fw-semibold fs-10 ms-2">35 mins ago</span></div>
                                                <p class="mb-0">Time is the best teacher; Unfortunately it kills all its students!</p><button class="btn btn-link p-0 text-body fw-bolder mb-2" type="button"><svg class="svg-inline--fa fa-reply fs-10 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="reply" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                        <path fill="currentColor" d="M205 34.8c11.5 5.1 19 16.6 19 29.2v64H336c97.2 0 176 78.8 176 176c0 113.3-81.5 163.9-100.2 174.1c-2.5 1.4-5.3 1.9-8.1 1.9c-10.9 0-19.7-8.9-19.7-19.7c0-7.5 4.3-14.4 9.8-19.5c9.4-8.8 22.2-26.4 22.2-56.7c0-53-43-96-96-96H224v64c0 12.6-7.4 24.1-19 29.2s-25 3-34.4-5.4l-160-144C3.9 225.7 0 217.1 0 208s3.9-17.7 10.6-23.8l160-144c9.4-8.5 22.9-10.6 34.4-5.4z"></path>
                                                    </svg>
                                                    <span class="fw-bold fs-10">Reply</span></button>
                                                <div class="d-flex align-items-start mb-3"><a href="../../apps/social/profile.html">
                                                        <div class="avatar avatar-m  me-2">
                                                            <img class="rounded-circle img-fluid" src="../../assets/img//team/27.webp" alt="">
                                                        </div>
                                                    </a>
                                                    <div class="flex-1">
                                                        <div class="d-flex align-items-center"><a class="fw-bold mb-0 text-body-emphasis" href="../../apps/social/profile.html">Zingko Kudobum</a><span class="text-body-tertiary text-opacity-85 fw-semibold fs-10 ms-2">5 mins ago</span></div>
                                                        <p class="mb-0">If you’re too open-minded, your brains will fall out.!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="https://prium.github.io/phoenix/v1.18.0/assets/img//team/14.webp">
                                                <div class="avatar avatar-m  me-2">
                                                    <img class="rounded-circle img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img//team/14.webp" alt="">
                                                </div>
                                            </a>
                                            <div class="flex-1">
                                                <input class="form-control" type="text" placeholder="Add comment">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center"><a class="btn btn-link fs-8 p-0" href="#!">Load more</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection