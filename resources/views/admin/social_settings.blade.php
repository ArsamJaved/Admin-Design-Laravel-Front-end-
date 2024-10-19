@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div class="social-settings">
        <div class="p-md-4 p-3">
            <div class="row g-6">
                <div class="col-12 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-header hover-actions-trigger position-relative mb-5" style="min-height: 130px; ">
                            <div class="bg-holder rounded-top" style="background-image: linear-gradient(0deg, #000000 -3%, rgba(0, 0, 0, 0) 83%), url(https://prium.github.io/phoenix/v1.18.0/assets/img/generic/59.png)"><input class="d-none" id="upload-settings-cover-image" type="file"><label class="cover-image-file-input" for="upload-settings-cover-image"></label>
                                <div class="hover-actions position-absolute end-0 bottom-0 pe-1 pb-2 text-white dark__text-gray-1100"><svg class="svg-inline--fa fa-camera me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="camera" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M149.1 64.8L138.7 96H64C28.7 96 0 124.7 0 160V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H373.3L362.9 64.8C356.4 45.2 338.1 32 317.4 32H194.6c-20.7 0-39 13.2-45.5 32.8zM256 192a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"></path>
                                    </svg><!-- <span class="fa-solid fa-camera me-2"></span> Font Awesome fontawesome.com --></div>
                            </div>
                            <input class="d-none" id="upload-settings-porfile-picture" type="file">
                            <label class="avatar avatar-4xl status-online feed-avatar-profile cursor-pointer" for="upload-settings-porfile-picture">
                                <img class="rounded-circle img-thumbnail shadow-sm border-0" src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/20.webp" width="200" alt="">
                            </label>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex flex-wrap mb-2 align-items-center">
                                        <h3 class="me-2">Ansolo Lazinatov</h3><span class="fw-normal fs-8">u/hansolo</span>
                                    </div>
                                    <div class="d-flex d-xl-block d-xxl-flex align-items-center">
                                        <div class="d-flex mb-xl-2 mb-xxl-0"><svg class="svg-inline--fa fa-user-group fs-10 me-2 me-lg-1 me-xl-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-group" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"></path>
                                            </svg><!-- <span class="fa-solid fa-user-group fs-10 me-2 me-lg-1 me-xl-2"></span> Font Awesome fontawesome.com -->
                                            <h6 class="d-inline-block mb-0">1297<span class="fw-semibold ms-1 me-4">Followers</span></h6>
                                        </div>
                                        <div class="d-flex"><svg class="svg-inline--fa fa-user-check fs-10 me-2 me-lg-1 me-xl-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM625 177L497 305c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L591 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                                            </svg><!-- <span class="fa-solid fa-user-check fs-10 me-2 me-lg-1 me-xl-2"></span> Font Awesome fontawesome.com -->
                                            <h6 class="d-block d-xl-inline-block mb-0">3971<span class="fw-semibold ms-1">Following</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom border-translucent border-dashed pb-3 mb-4">
                        <h5 class="text-body mb-3">Who will be able to see your profile?</h5>
                        <div class="form-check"><input class="form-check-input" id="onlyMe" type="radio" checked="checked" name="profiileVisibility"><label class="form-check-label fs-8" for="onlyMe">Only me</label></div>
                        <div class="form-check"><input class="form-check-input" id="myFollowers" type="radio" name="profiileVisibility"><label class="form-check-label fs-8" for="myFollowers">My followers</label></div>
                        <div class="form-check"><input class="form-check-input" id="everyone" type="radio" name="profiileVisibility"><label class="form-check-label fs-8" for="everyone">Everyone</label></div>
                    </div>
                    <div class="border-bottom border-translucent border-dashed pb-3 mb-4">
                        <h5 class="text-body mb-3">Who can tag you?</h5>
                        <div class="form-check"><input class="form-check-input" id="tagGroupMembers" type="radio" checked="checked" name="tagPermission"><label class="form-check-label fs-8" for="tagGroupMembers">Group Members</label></div>
                        <div class="form-check"><input class="form-check-input" id="tagEveryone" type="radio" name="tagPermission"><label class="form-check-label fs-8" for="tagEveryone">Everyone</label></div>
                    </div>
                    <div class="border-bottom border-translucent border-dashed pb-3 mb-4">
                        <div class="form-check"><input class="form-check-input" id="showEmail" type="checkbox" name="showEmail"><label class="form-check-label fs-8" for="showEmail">Allow users to show your email</label></div>
                        <div class="form-check"><input class="form-check-input" id="showExperiences" type="checkbox" name="showExperiences"><label class="form-check-label fs-8" for="showExperiences">Allow users to show your experiences</label></div>
                        <div class="form-check"><input class="form-check-input" id="showFollowers" type="checkbox" checked="checked" name="showFollowers"><label class="form-check-label fs-8" for="showFollowers">Allow users to show your followers</label></div>
                    </div>
                    <div class="mb-4">
                        <div class="form-check form-switch"><input class="form-check-input" id="showPhone" type="checkbox" checked="checked" name="showPhone"><label class="form-check-label fs-8" for="showPhone">Show your phone number</label></div>
                        <div class="form-check form-switch"><input class="form-check-input" id="permitFollow" type="checkbox" checked="checked" name="permitFollow"><label class="form-check-label fs-8" for="permitFollow">Permit users to follow you.</label></div>
                    </div>
                </div>
                <div class="col-12 col-xl-8">
                    <div class="border-bottom mb-4">
                        <div class="mb-5">
                            <h4 class="mb-4">Personal Information</h4>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <div class="form-icon-container">
                                        <div class="form-floating"><input class="form-control form-icon-input" id="firstName" type="text" placeholder="First Name"><label class="text-body-tertiary form-icon-label" for="firstName">FIRST NAME</label></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-icon-container">
                                        <div class="form-floating"><input class="form-control form-icon-input" id="lastName" type="text" placeholder="Last Name"><label class="text-body-tertiary form-icon-label" for="lastName">LAST NAME</label></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-icon-container">
                                        <div class="form-floating"><input class="form-control form-icon-input" id="emailSocial" type="email" placeholder="Email"><label class="text-body-tertiary form-icon-label" for="emailSocial">ENTER YOUR EMAIL</label></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-icon-container">
                                        <div class="form-floating"><input class="form-control form-icon-input" id="phone" type="tel" placeholder="Phone"><label class="text-body-tertiary form-icon-label" for="phone">ENTER YOUR PHONE</label></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-icon-container">
                                        <div class="form-floating"><textarea class="form-control form-icon-input" id="info" style="height: 115px;" placeholder="Info"></textarea><label class="text-body-tertiary form-icon-label" for="info">Info</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-3 mb-5 gy-6 gy-sm-3">
                            <div class="col-12 col-sm-6">
                                <h4 class="mb-4">Company Info</h4>
                                <div class="form-icon-container mb-3">
                                    <div class="form-floating"><input class="form-control form-icon-input" id="companyName" type="text" placeholder="Company Name"><label class="text-body-tertiary form-icon-label" for="companyName">COMPANY NAME</label></div>
                                </div>
                                <div class="form-icon-container">
                                    <div class="form-floating"><input class="form-control form-icon-input" id="website" type="text" placeholder="Website"><label class="text-body-tertiary form-icon-label" for="website">Website</label></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <h4 class="mb-4">Change Password</h4>
                                <div class="form-icon-container mb-3">
                                    <div class="form-floating"><input class="form-control form-icon-input" id="oldPassword" type="password" placeholder="Old password">
                                    <label class="text-body-tertiary form-icon-label" for="oldPassword">Old Password</label></div>
                                </div>
                                <div class="form-icon-container mb-3">
                                    <div class="form-floating"><input class="form-control form-icon-input" id="newPassword" type="password" placeholder="New password"><label class="text-body-tertiary form-icon-label" for="newPassword">New Password</label></div>
                                </div>
                                <div class="form-icon-container">
                                    <div class="form-floating"><input class="form-control form-icon-input" id="newPassword2" type="password" placeholder="Confirm New password"><label class="text-body-tertiary form-icon-label" for="newPassword2">Confirm New Password</label></div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <h4 class="mb-4">Social</h4>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <div class="form-icon-container">
                                        <div class="form-floating"><input class="form-control form-icon-input" id="facebook" type="text" placeholder="Facebook"><label class="text-body-tertiary form-icon-label" for="facebook">Facebook</label></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-icon-container">
                                        <div class="form-floating"><input class="form-control form-icon-input" id="twitter" type="text" placeholder="Twitter"><label class="text-body-tertiary form-icon-label" for="twitter">Twitter</label></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-icon-container">
                                        <div class="form-floating"><input class="form-control form-icon-input" id="linkedin" type="text" placeholder="Linkedin"><label class="text-body-tertiary form-icon-label" for="linkedin">linkedin</label></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-icon-container">
                                        <div class="form-floating"><input class="form-control form-icon-input" id="youtube" type="text" placeholder="youtube"><label class="text-body-tertiary form-icon-label" for="youtube">youtube</label></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-icon-container">
                                        <div class="form-floating"><input class="form-control form-icon-input" id="artstation" type="text" placeholder="artstation"><label class="text-body-tertiary form-icon-label" for="artstation">artstation</label></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-icon-container">
                                        <div class="form-floating"><input class="form-control form-icon-input" id="behance" type="text" placeholder="behance"><label class="text-body-tertiary form-icon-label" for="behance">behance</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end mb-5">
                            <div><button class="btn btn-outline-secondary me-2">Cancel Changes</button><button class="btn btn-outline-primary">Save Information</button></div>
                        </div>
                    </div>
                    <div class="row gy-5">
                        <div class="col-12 col-md-6">
                            <h4 class="text-body-emphasis">Transfer Ownership</h4>
                            <p class="text-body-tertiary">Transfer this account to another person or to a company repository.</p><button class="btn btn-outline-warning">Transfer</button>
                        </div>
                        <div class="col-12 col-md-6">
                            <h4 class="text-body-emphasis">Account Deletion</h4>
                            <p class="text-body-tertiary">Transfer this account to another person or to a company repository.</p><button class="btn btn-outline-danger">Delete account</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection