@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div class="faq-tab">
        <div class="mx-n4 mx-lg-n6 mt-n5 position-relative mb-md-9" style="height:208px">
            <div class="bg-holder bg-card d-dark-none" style="background-image:url('https://prium.github.io/phoenix/v1.18.0/assets/img/bg/bg-40.png');background-size:cover;"></div>
            <div class="bg-holder bg-card d-light-none" style="background-image:url(../../assets/img/bg/bg-dark-40.png);background-size:cover;"></div>
            <div class="faq-title-box position-relative border border-translucent p-5 rounded-3 text-center mx-auto">
                <h1 class="fw-bold">How can we help?</h1>
                <p class="my-3">Search for the topic you need help with or <a href="#!">contact our support</a></p>
                <div class="search-box w-100">
                    <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" aria-label="Search"><svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                        </svg>
                    </form>
                </div>
            </div>
        </div>
        <div class="p-md-4 p-3">
            <div class="row mt-5">
                <div class="col-md-12 mt-sm-0 mt-5">
                    <ul class="nav nav-tabs mt-md-0 mt-5" style="display:flex; flex-wrap:nowrap">
                        <li class="nav-item px-md-2 text-nowrap">
                            <a class="nav-link" data-bs-toggle="tab" href="#popularCategories">Popular Categories</a>
                        </li>
                        <li class="nav-item px-md-2 text-nowrap">
                            <a class="nav-link active" data-bs-toggle="tab" href="#allCategories">All Categories</a>
                        </li>
                    </ul>

                    <div class="tab-content mt-3">
                        <div class="tab-pane fade" id="popularCategories">
                            <p>Content for Popular Categories goes here.</p>
                        </div>
                        <div class="tab-pane fade show active" id="allCategories">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-sales-tab" data-bs-toggle="pill" href="#v-pills-sales" role="tab" aria-controls="v-pills-sales" aria-selected="true">
                                            <div class="tab-icon">&#128202;</div>
                                            <h5>Sales</h5>
                                            <p>Answer the most frequently asked questions about your products & services here.</p>
                                        </a>
                                        <a class="nav-link mt-3" id="v-pills-customize-tab" data-bs-toggle="pill" href="#v-pills-customize" role="tab" aria-controls="v-pills-customize" aria-selected="false">
                                            <div class="tab-icon">&#9881;</div>
                                            <h5>Customize</h5>
                                            <p>Answer customization related questions here for simple and easy assistance.</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-sales" role="tabpanel" aria-labelledby="v-pills-sales-tab">
                                            <h5>How can I purchase your services?</h5>
                                            <p>You can mail us at info@phoenix.template or go to our services page to directly choose and pay to buy the services we provide.</p>
                                            <h5>How much do your service cost?</h5>
                                            <p>Our services can be availed at a minimum cost. Please visit info.phoenix-tw.com to get insights into the better purchase plans.</p>
                                            <h5>Do you offer any money-back guarantee?</h5>
                                            <p>We offer refunds to customers who are eligible to get one under our terms and conditions, as well as our policies.</p>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-customize" role="tabpanel" aria-labelledby="v-pills-customize-tab">
                                            <h5>How do I customize my service?</h5>
                                            <p>You can customize your service by visiting our customization page or contacting our support team for assistance.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>
</div>
@endsection