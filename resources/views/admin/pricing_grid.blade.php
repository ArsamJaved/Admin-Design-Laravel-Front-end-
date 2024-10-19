@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="pricing-grid">
        <div class="p-md-4 p-3">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><small>Pricing-grid</small></li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-xl-12 col-xxl-9 mb-1">
                    <div class="tabs mb-7">
                        <ul class="nav nav-underline fs-9 mb-3" id="nav-tab" role="tablist">
                            <li class="nav-item" role="presentation"><button class="nav-link active" id="pills-year-tab" data-bs-toggle="pill" data-bs-target="#pills-year" type="button" role="tab" aria-controls="pills-year" aria-selected="true">Yearly</button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab" aria-controls="pills-month" aria-selected="false" tabindex="-1">Monthly</button></li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab">
                                <div class="row g-3">
                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                        <div class="h-100">
                                            <input class="card-form-check-input d-none" type="radio" name="pricingYearly" id="startupYearly" checked="checked">
                                            <div class="position-relative h-100">
                                                <label class="stretched-link" for="startupYearly"></label>
                                                <div class="card h-100 overflow-hidden cursor-pointer">
                                                    <div class="bg-holder d-dark-none" style="background-image:url(https://prium.github.io/phoenix/v1.18.0/assets/img/bg/8.png);background-position:left bottom;background-size:auto;bottom:-1px;"></div>
                                                    <div class="card-body d-flex flex-column justify-content-between position-relative">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                                                <div class="d-sm-flex align-items-center mb-3">
                                                                    <h3 class="mb-0">Startup</h3>
                                                                </div>
                                                                <p class="fs-9 text-body-tertiary">For individuals who are interested <br> in giving it a shot first.</p>
                                                                <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                                                    <h4 class="fw-bolder me-1">Free</h4>
                                                                    <h5 class="fs-9 fw-normal text-body-tertiary ms-1">Forever</h5>
                                                                </div>
                                                            </div>
                                                            <img class="d-dark-none" src="https://prium.github.io/phoenix/v1.18.0/assets/img/spot-illustrations/rocket.png" width="54" height="54" alt="">
                                                        </div>
                                                        <div class="row flex-1 justify-content-end">
                                                            <div class="col-sm-8 col-md-12">
                                                                <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                                                    <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-translucent">
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold">Up to 4 Members</span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold">3 Collaboration projects</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                        <div class="h-100">
                                            <input class="card-form-check-input d-none" type="radio" name="pricingYearly" id="standardYearly">
                                            <div class="position-relative h-100">
                                                <label class="stretched-link" for="standardYearly"></label>
                                                <div class="card h-100 overflow-hidden cursor-pointer">
                                                    <div class="bg-holder d-dark-none" style="background-image:url(https://prium.github.io/phoenix/v1.18.0/assets/img/bg/9.png);background-position:left bottom;background-size:auto;bottom:-1px;"></div>
                                                    <div class="card-body d-flex flex-column justify-content-between position-relative">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                                                <div class="d-sm-flex align-items-center mb-3">
                                                                    <h3 class="mb-0">Standard</h3>
                                                                </div>
                                                                <p class="fs-9 text-body-tertiary">For teams that need to create <br> project plans with confidence.</p>
                                                                <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                                                    <h4 class="fw-bolder me-1">$179.88</h4>
                                                                    <h5 class="fs-9 fw-normal text-body-tertiary ms-1">Per year</h5>
                                                                </div>
                                                            </div>
                                                            <img class="d-dark-none" src="https://prium.github.io/phoenix/v1.18.0/assets/img/spot-illustrations/bag-2.png" width="54" height="54" alt="">
                                                        </div>
                                                        <div class="row flex-1 justify-content-end">
                                                            <div class="col-sm-8 col-md-12">
                                                                <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                                                    <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-translucent">
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold">Up to 8 Members</span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold">Create &amp; Share libraries</span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold">10 Collaboration projects</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                        <div class="h-100">
                                            <input class="card-form-check-input d-none pricing-plan-recommended" type="radio" name="pricingYearly" id="businessPlusYearly">
                                            <div class="position-relative h-100">
                                                <label class="stretched-link" for="businessPlusYearly"></label>
                                                <div class="card h-100 overflow-hidden cursor-pointer bg-warning-subtle border-warning warning-boxshadow pricing-business-plus">
                                                    <div class="bg-holder d-dark-none" style="background-image:url(https://prium.github.io/phoenix/v1.18.0/assets/img/bg/bg-11.png);background-position:left bottom;background-size:auto;bottom:-1px;"></div>
                                                    <div class="bg-holder d-light-none" style="background-image:url(../../assets/img/bg/bg-11-dark.png);background-position:left bottom;background-size:auto;bottom:-1px;"></div>
                                                    <div class="card-body d-flex flex-column justify-content-between position-relative">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                                                <div class="d-sm-flex align-items-center mb-3">
                                                                    <h3 class="mb-0">Business Plus</h3><span class="badge ms-sm-3 text-uppercase fs-10 text-bg-warning">recommended</span>
                                                                </div>
                                                                <p class="fs-9 text-body-tertiary">For teams that need to manage <br> work across initiatives.</p>
                                                                <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                                                    <h4 class="fw-bolder me-1">$599.88</h4>
                                                                    <h5 class="fs-9 fw-normal text-body-tertiary ms-1">Per year</h5>
                                                                </div>
                                                            </div>
                                                            <img class="d-dark-none" src="https://prium.github.io/phoenix/v1.18.0/assets/img/spot-illustrations/star.png" width="54" height="54" alt="">
                                                        </div>
                                                        <div class="row flex-1 justify-content-end">
                                                            <div class="col-sm-8 col-md-12">
                                                                <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                                                    <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-translucent">
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold">Technical Supports</span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold">Up to 20 Members</span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold">Create &amp; Share libraries</span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold"><span class="fw-bold">Unlimited</span> Collaboration</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                        <div class="h-100">
                                            <input class="card-form-check-input d-none" type="radio" name="pricingYearly" id="enterpriseYearly">
                                            <div class="position-relative h-100">
                                                <label class="stretched-link" for="enterpriseYearly"></label>
                                                <div class="card h-100 overflow-hidden cursor-pointer">
                                                    <div class="bg-holder d-dark-none" style="background-image:url(https://prium.github.io/phoenix/v1.18.0/assets/img/bg/10.png);background-position:left bottom;background-size:auto;bottom:-1px;"></div>
                                                    <div class="card-body d-flex flex-column justify-content-between position-relative">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                                                <div class="d-sm-flex align-items-center mb-3">
                                                                    <h3 class="mb-0">Enterprise</h3>
                                                                </div>
                                                                <p class="fs-9 text-body-tertiary">For organizations that need <br> additional security and support.</p>
                                                                <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                                                    <h4 class="fw-bolder me-1">$1,799.88</h4>
                                                                    <h5 class="fs-9 fw-normal text-body-tertiary ms-1">Per year</h5>
                                                                </div>
                                                            </div>
                                                            <img class="d-dark-none" src="https://prium.github.io/phoenix/v1.18.0/assets/img/spot-illustrations/shield-2.png" width="54" height="54" alt="">
                                                        </div>
                                                        <div class="row flex-1 justify-content-end">
                                                            <div class="col-sm-8 col-md-12">
                                                                <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                                                    <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-translucent">
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold">24/7 VIP Support</span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold">Automated analytics</span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold"><span class="fw-bold">Unlimited</span> Members*</span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold">Create &amp; Share libraries</span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold">Centralized billing</span>
                                                                        </li>
                                                                    </ul>
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
                        </div>
                        <div class="tab-content" id="pills-tabContentYear">
                            <div class="tab-pane fade active show" id="pills-year" role="tabpanel" aria-labelledby="pills-year-tab">
                                <div class="row g-3">
                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                        <div class="h-100">
                                            <input class="card-form-check-input d-none" type="radio" name="pricingYearly" id="startupYearly2" checked="checked">
                                            <div class="position-relative h-100">
                                                <label class="stretched-link" for="startupYearly2"></label>
                                                <div class="card h-100 overflow-hidden cursor-pointer">
                                                    <div class="bg-holder d-dark-none" style="background-image:url(https://prium.github.io/phoenix/v1.18.0/assets/img/bg/8.png);background-position:left bottom;background-size:auto;bottom:-1px;"></div>
                                                    <div class="card-body d-flex flex-column justify-content-between position-relative">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                                                <div class="d-sm-flex align-items-center mb-3">
                                                                    <h3 class="mb-0">Startup</h3>
                                                                </div>
                                                                <p class="fs-9 text-body-tertiary">For individuals who are interested <br> in giving it a shot first.</p>
                                                                <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                                                    <h4 class="fw-bolder me-1">Free</h4>
                                                                    <h5 class="fs-9 fw-normal text-body-tertiary ms-1">Forever</h5>
                                                                </div>
                                                            </div>
                                                            <img class="d-dark-none" src="https://prium.github.io/phoenix/v1.18.0/assets/img/spot-illustrations/rocket.png" width="54" height="54" alt="">
                                                        </div>
                                                        <div class="row flex-1 justify-content-end">
                                                            <div class="col-sm-8 col-md-12">
                                                                <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                                                    <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-translucent">
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold">Up to 4 Members</span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold">3 Collaboration projects</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                        <div class="h-100">
                                            <input class="card-form-check-input d-none" type="radio" name="pricingYearly" id="standardYearly2">
                                            <div class="position-relative h-100">
                                                <label class="stretched-link" for="standardYearly2"></label>
                                                <div class="card h-100 overflow-hidden cursor-pointer">
                                                    <div class="bg-holder d-dark-none" style="background-image:url(https://prium.github.io/phoenix/v1.18.0/assets/img/bg/9.png);background-position:left bottom;background-size:auto;bottom:-1px;"></div>
                                                    <div class="card-body d-flex flex-column justify-content-between position-relative">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                                                <div class="d-sm-flex align-items-center mb-3">
                                                                    <h3 class="mb-0">Standard</h3>
                                                                </div>
                                                                <p class="fs-9 text-body-tertiary">For teams that need to create <br> project plans with confidence.</p>
                                                                <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                                                    <h4 class="fw-bolder me-1">$179.88</h4>
                                                                    <h5 class="fs-9 fw-normal text-body-tertiary ms-1">Per year</h5>
                                                                </div>
                                                            </div>
                                                            <img class="d-dark-none" src="https://prium.github.io/phoenix/v1.18.0/assets/img/spot-illustrations/bag-2.png" width="54" height="54" alt="">
                                                        </div>
                                                        <div class="row flex-1 justify-content-end">
                                                            <div class="col-sm-8 col-md-12">
                                                                <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                                                    <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-translucent">
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold">Up to 8 Members</span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold">Create &amp; Share libraries</span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold">10 Collaboration projects</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                        <div class="h-100">
                                            <input class="card-form-check-input d-none pricing-plan-recommended" type="radio" name="pricingYearly" id="businessPlusYearly2">
                                            <div class="position-relative h-100">
                                                <label class="stretched-link" for="businessPlusYearly2"></label>
                                                <div class="card h-100 overflow-hidden cursor-pointer bg-warning-subtle border-warning warning-boxshadow pricing-business-plus">
                                                    <div class="bg-holder d-dark-none" style="background-image:url(https://prium.github.io/phoenix/v1.18.0/assets/img/bg/bg-11.png);background-position:left bottom;background-size:auto;bottom:-1px;"></div>
                                                    <div class="bg-holder d-light-none" style="background-image:url(../../assets/img/bg/bg-11-dark.png);background-position:left bottom;background-size:auto;bottom:-1px;"></div>
                                                    <div class="card-body d-flex flex-column justify-content-between position-relative">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                                                <div class="d-sm-flex align-items-center mb-3">
                                                                    <h3 class="mb-0">Business Plus</h3><span class="badge ms-sm-3 text-uppercase fs-10 text-bg-warning">recommended</span>
                                                                </div>
                                                                <p class="fs-9 text-body-tertiary">For teams that need to manage <br> work across initiatives.</p>
                                                                <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                                                    <h4 class="fw-bolder me-1">$599.88</h4>
                                                                    <h5 class="fs-9 fw-normal text-body-tertiary ms-1">Per year</h5>
                                                                </div>
                                                            </div>
                                                            <img class="d-dark-none" src="https://prium.github.io/phoenix/v1.18.0/assets/img/spot-illustrations/star.png" width="54" height="54" alt="">
                                                        </div>
                                                        <div class="row flex-1 justify-content-end">
                                                            <div class="col-sm-8 col-md-12">
                                                                <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                                                    <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-translucent">
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold">Technical Supports</span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold">Up to 20 Members</span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold">Create &amp; Share libraries</span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold"><span class="fw-bold">Unlimited</span> Collaboration</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                        <div class="h-100">
                                            <input class="card-form-check-input d-none" type="radio" name="pricingYearly2" id="enterpriseYearly2">
                                            <div class="position-relative h-100">
                                                <label class="stretched-link" for="enterpriseYearly2"></label>
                                                <div class="card h-100 overflow-hidden cursor-pointer">
                                                    <div class="bg-holder d-dark-none" style="background-image:url(https://prium.github.io/phoenix/v1.18.0/assets/img/bg/10.png);background-position:left bottom;background-size:auto;bottom:-1px;"></div>
                                                    <div class="card-body d-flex flex-column justify-content-between position-relative">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                                                <div class="d-sm-flex align-items-center mb-3">
                                                                    <h3 class="mb-0">Enterprise</h3>
                                                                </div>
                                                                <p class="fs-9 text-body-tertiary">For organizations that need <br> additional security and support.</p>
                                                                <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                                                    <h4 class="fw-bolder me-1">$1,799.88</h4>
                                                                    <h5 class="fs-9 fw-normal text-body-tertiary ms-1">Per year</h5>
                                                                </div>
                                                            </div>
                                                            <img class="d-dark-none" src="https://prium.github.io/phoenix/v1.18.0/assets/img/spot-illustrations/shield-2.png" width="54" height="54" alt="">
                                                        </div>
                                                        <div class="row flex-1 justify-content-end">
                                                            <div class="col-sm-8 col-md-12">
                                                                <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                                                    <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-translucent">
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold">24/7 VIP Support</span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold">Automated analytics</span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold"><span class="fw-bold">Unlimited</span> Members*</span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold">Create &amp; Share libraries</span>
                                                                        </li>
                                                                        <li class="d-flex align-items-center">
                                                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                                <path fill="green" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8z" />
                                                                            </svg>
                                                                            <span class="text-body-tertiary fw-semibold">Centralized billing</span>
                                                                        </li>
                                                                    </ul>
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
                        </div>
                    </div>
                    <div class="mt-5">
                        <p class="mb-0">Business Starter, Business Standard, and Business Plus plans can be purchased for a maximum of 300 users. There is no <br class="d-none d-xl-block d-xxl-none">maximum user limit for Enterprise plans.</p>
                        <p class="fw-semibold">Phoenix customers may have access to additional features for a lidived <br class="d-none d-sm-block d-lg-none">promotional period.</p>
                        <div class="d-grid d-sm-flex">
                            <button class="btn btn-lg btn-primary d-sm-flex align-items-center mb-3 mb-sm-0 me-sm-3 px-sm-5">Subscribe Now<svg class="svg-inline--fa fa-angle-right ms-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                                </svg>
                            </button>
                            <button class="btn btn-lg btn-outline-primary px-sm-5">Start 7 days free Trial</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <h3 class="fw-semibold mb-3">Included in our all packages</h3>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="rounded-3 bg-white py-2 px-3 d-flex align-items-center mb-3">
                                <svg class="svg-inline--fa fa-check text-primary me-3 fs-9" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                </svg>
                                <p class="mb-0">Timeline</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="rounded-3 bg-white py-2 px-3 d-flex align-items-center mb-3">
                                <svg class="svg-inline--fa fa-check text-primary me-3 fs-9" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                </svg>
                                <p class="mb-0">Advanced Search</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="rounded-3 bg-white py-2 px-3 d-flex align-items-center mb-3">
                                <svg class="svg-inline--fa fa-check text-primary me-3 fs-9" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                </svg>
                                <p class="mb-0">Custom fields</p><span class="badge badge-phoenix badge-phoenix-primary ms-2">New</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="rounded-3 bg-white py-2 px-3 d-flex align-items-center mb-3">
                                <svg class="svg-inline--fa fa-check text-primary me-3 fs-9" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                </svg>
                                <p class="mb-0">Task dependencies</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="rounded-3 bg-white py-2 px-3 d-flex align-items-center mb-3">
                                <svg class="svg-inline--fa fa-check text-primary me-3 fs-9" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                </svg>
                                <p class="mb-0">20TB of additional space </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="rounded-3 bg-white py-2 px-3 d-flex align-items-center mb-3">
                                <svg class="svg-inline--fa fa-check text-primary me-3 fs-9" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                </svg>
                                <p class="mb-0">Bandwidth of Upto 1 Gbps</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="rounded-3 bg-white py-2 px-3 d-flex align-items-center mb-3">
                                <svg class="svg-inline--fa fa-check text-primary me-3 fs-9" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                </svg>
                                <p class="mb-0">Private teams &amp; projects</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="rounded-3 bg-white py-2 px-3 d-flex align-items-center mb-3">
                                <svg class="svg-inline--fa fa-check text-primary me-3 fs-9" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                </svg>
                                <p class="mb-0">Customer Support and Training</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection