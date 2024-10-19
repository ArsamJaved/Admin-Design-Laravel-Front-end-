@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="pricing_column">
        <div class="p-md-4 p-3">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><small>Pricing</small></li>
                </ol>
            </nav>
            <div class="row g-3 mb-4">
                <div class="col-auto">
                    <h2 class="mb-0">Pricing</h2>
                </div>
            </div>
            <div class="row g-5 g-lg-5 mb-7">
                <div class="col-12 col-sm-6 col-xxl-3">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                            <img class="mb-4" src="https://prium.github.io/phoenix/v1.18.0/assets/img/spot-illustrations/dark_13.png" alt="" width="120" height="96">
                            <div class="mb-sm-5">
                                <h3 class="mb-2">Learner</h3>
                                <p class="text-body-secondary mb-0 pe-3">For individuals who are interested in giving it a shot first.</p>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="display-3 fw-bolder">Free</h3>
                            </div><button class="btn btn-lg w-100 mb-5 btn-outline-primary">Buy</button>
                            <h5 class="mb-4">What’s included</h5>
                            <ul>
                               
                                <li class="mb-2">
                                    <span class="fa-li me-2 stack-icon-item">
                                        <span class="fa-stack fs-11">
                                            <svg class="inner-svg fa-circle tick-icon text-body-quaternary text-opacity-50" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                            </svg>
                                            <svg class="inner-svg fa-xmark cross-icon fa-inverse text-body-tertiary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
                                            </svg>
                                        </span>
                                    </span>Advanced Search
                                </li>
                                <li class="mb-2">
                                    <span class="fa-li me-2 stack-icon-item">
                                        <span class="fa-stack fs-11">
                                            <svg class="inner-svg fa-circle tick-icon text-body-quaternary text-opacity-50" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                            </svg>
                                            <svg class="inner-svg fa-xmark cross-icon fa-inverse text-body-tertiary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
                                            </svg>
                                        </span>
                                    </span>Custom fields
                                </li>
                                <li class="mb-2">
                                    <span class="fa-li me-2 stack-icon-item">
                                        <span class="fa-stack fs-11">
                                            <svg class="inner-svg fa-circle tick-icon text-body-quaternary text-opacity-50" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                            </svg>
                                            <svg class="inner-svg fa-xmark cross-icon fa-inverse text-body-tertiary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
                                            </svg>
                                        </span>
                                    </span>Task dependencies
                                </li>
                                <li class="mb-2">
                                    <span class="fa-li me-2 stack-icon-item">
                                        <span class="fa-stack fs-11">
                                            <svg class="inner-svg fa-circle tick-icon text-body-quaternary text-opacity-50" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                            </svg>
                                            <svg class="inner-svg fa-xmark cross-icon fa-inverse text-body-tertiary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
                                            </svg>
                                        </span>
                                    </span>Private teams &amp; projects
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xxl-3">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                            <img class="mb-4 d-dark-none" src="https://prium.github.io/phoenix/v1.18.0/assets/img/spot-illustrations/14.png" alt="" width="120" height="96">
                            <div class="mb-sm-5">
                                <h3 class="mb-2">Starter</h3>
                                <p class="text-body-secondary mb-0 pe-3">For teams that need to create project plans with confidence.</p>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="display-3 fw-bolder">$14.99</h3>
                                <h5 class="fs-8 fw-normal ms-1">/ month</h5>
                            </div><button class="btn btn-lg w-100 mb-5 btn-outline-primary">Buy</button>
                            <h5 class="mb-4">What’s included</h5>
                            <ul>
                               
                                <li class="mb-2 text-body"><span class="fa-li me-2 stack-icon-item">
                                        <span class="fa-stack fs-11">
                                            <svg class="inner-svg fa-circle tick-icon text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                            </svg>
                                            <svg class="inner-svg fa-check cross-icon fa-inverse text-white dark__text-dark" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                            </svg>
                                        </span>
                                    </span>Advanced Search</li>
                                <li class="mb-2">
                                    <span class="fa-li me-2 stack-icon-item">
                                        <span class="fa-stack fs-11">
                                            <svg class="inner-svg fa-circle tick-icon text-body-quaternary text-opacity-50" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                            </svg>
                                            <svg class="inner-svg fa-xmark cross-icon fa-inverse text-body-tertiary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
                                            </svg>
                                        </span>
                                    </span>Custom fields
                                </li>
                                <li class="mb-2">
                                    <span class="fa-li me-2 stack-icon-item">
                                        <span class="fa-stack fs-11">
                                            <svg class="inner-svg fa-circle tick-icon text-body-quaternary text-opacity-50" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                            </svg>
                                            <svg class="inner-svg fa-xmark cross-icon fa-inverse text-body-tertiary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
                                            </svg>
                                        </span>
                                    </span>Task dependencies
                                </li>
                                <li class="mb-2">
                                    <span class="fa-li me-2 stack-icon-item">
                                        <span class="fa-stack fs-11">
                                            <svg class="inner-svg fa-circle tick-icon text-body-quaternary text-opacity-50" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                            </svg>
                                            <svg class="inner-svg fa-xmark cross-icon fa-inverse text-body-tertiary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
                                            </svg>
                                        </span>
                                    </span>Private teams &amp; projects
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xxl-3">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div><img class="mb-4 d-dark-none" src="https://prium.github.io/phoenix/v1.18.0/assets/img/spot-illustrations/15.png" alt="" width="120" height="96">
                            <div class="mb-sm-5">
                                <h3 class="mb-2">Team</h3>
                                <p class="text-body-secondary mb-0 pe-3">For teams that need to manage work across initiatives.</p>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="display-3 fw-bolder">$49.99</h3>
                                <h5 class="fs-8 fw-normal ms-1">/ month</h5>
                            </div>
                            <button class="btn btn-lg w-100 mb-5 btn-primary">Buy</button>
                            <h5 class="mb-4">What’s included</h5>
                            <ul>
                               
                                <li class="mb-2 text-body"><span class="fa-li me-2 stack-icon-item">
                                        <span class="fa-stack fs-11">
                                            <svg class="inner-svg fa-circle tick-icon text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                            </svg>
                                            <svg class="inner-svg fa-check cross-icon fa-inverse text-white dark__text-dark" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                            </svg>
                                        </span>
                                    </span>Advanced Search</li>
                                <li class="mb-2 text-body"><span class="fa-li me-2 stack-icon-item">
                                        <span class="fa-stack fs-11">
                                            <svg class="inner-svg fa-circle tick-icon text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                            </svg>
                                            <svg class="inner-svg fa-check cross-icon fa-inverse text-white dark__text-dark" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                            </svg>
                                        </span>
                                    </span>Custom fields<span class="badge badge-phoenix badge-phoenix-primary ms-2 fs-10">New</span></li>
                                <li class="mb-2">
                                    <span class="fa-li me-2 stack-icon-item">
                                        <span class="fa-stack fs-11">
                                            <svg class="inner-svg fa-circle tick-icon text-body-quaternary text-opacity-50" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                            </svg>
                                            <svg class="inner-svg fa-xmark cross-icon fa-inverse text-body-tertiary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
                                            </svg>
                                        </span>
                                    </span>Task dependencies
                                </li>
                                <li class="mb-2">
                                    <span class="fa-li me-2 stack-icon-item">
                                        <span class="fa-stack fs-11">
                                            <svg class="inner-svg fa-circle tick-icon text-body-quaternary text-opacity-50" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                            </svg>
                                            <svg class="inner-svg fa-xmark cross-icon fa-inverse text-body-tertiary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
                                            </svg>
                                        </span>
                                    </span>Private teams &amp; projects
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xxl-3">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                            <img class="mb-4 d-dark-none" src="https://prium.github.io/phoenix/v1.18.0/assets/img/spot-illustrations/16.png" alt="" width="120" height="96">
                            <div class="mb-sm-5">
                                <h3 class="mb-2">Industry</h3>
                                <p class="text-body-secondary mb-0 pe-3">For organizations that need additional security and support.</p>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center mb-4">
                                <h3 class="display-3 fw-bolder">$149.99</h3>
                                <h5 class="fs-8 fw-normal ms-1">/ month</h5>
                            </div><button class="btn btn-lg w-100 mb-5 btn-outline-primary">Buy</button>
                            <h5 class="mb-4">What’s included</h5>
                            <ul>
                               
                                <li class="mb-2 text-body"><span class="fa-li me-2 stack-icon-item">
                                        <span class="fa-stack fs-11">
                                            <svg class="inner-svg fa-circle tick-icon text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                            </svg>
                                            <svg class="inner-svg fa-check cross-icon fa-inverse text-white dark__text-dark" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                            </svg>
                                        </span>
                                    </span>Advanced Search</li>
                                <li class="mb-2 text-body"><span class="fa-li me-2 stack-icon-item">
                                        <span class="fa-stack fs-11">
                                            <svg class="inner-svg fa-circle tick-icon text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                            </svg>
                                            <svg class="inner-svg fa-check cross-icon fa-inverse text-white dark__text-dark" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                            </svg>
                                        </span>
                                    </span>
                                    Custom fields
                                    <span class="badge badge-phoenix badge-phoenix-primary ms-2 fs-10">New</span></li>
                                <li class="mb-2 text-body"><span class="fa-li me-2 stack-icon-item">
                                        <span class="fa-stack fs-11">
                                            <svg class="inner-svg fa-circle tick-icon text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                            </svg>
                                            <svg class="inner-svg fa-check cross-icon fa-inverse text-white dark__text-dark" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                            </svg>
                                        </span>
                                    </span>Task dependencies</li>
                                <li class="mb-2 text-body"><span class="fa-li me-2 stack-icon-item">
                                        <span class="fa-stack fs-11">
                                            <svg class="inner-svg fa-circle tick-icon text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                            </svg>
                                            <svg class="inner-svg fa-check cross-icon fa-inverse text-white dark__text-dark" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                            </svg>
                                        </span>
                                    </span>Private teams &amp; projects</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection