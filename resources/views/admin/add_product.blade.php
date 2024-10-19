@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')


<div>
    <div class="p-md-4 p-3">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Page 1</a></li>
                <li class="breadcrumb-item"><a href="#">Page 2</a></li>
                <li class="breadcrumb-item active" aria-current="page">Default</li>
            </ol>
        </nav>
        <form>
            <div class="row g-3 justify-content-between mb-5">
                <div class="col-auto">
                    <h2 class="mb-2 fw-bold">Add a product</h2>
                    <h6 class="text-body-tertiary fw-semibold">Orders placed across your store</h6>
                </div>
                <div class="col-auto">
                    <button type="button" class="btn btn-outline-secondary">Discord</button>
                    <button type="button" class="btn btn-outline-secondary">Save Draft</button>
                    <button type="button" class="btn btn-primary">Publish Product</button>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-xl-8 col-12">
                    <h5 class="mb-3">Product Title</h5>
                    <input class="form-control mb-5" type="text" placeholder="Write title here...">
                    <h5 class="mb-3">Product Description</h5>
                    <div id="summernote">
                        <p>Hello Summernote</p>
                    </div>
                    <h5 class="my-3">Display images</h5>
                    <div class="border rounded-2 d-flex flex-column justify-content-center align-items-center">
                        <div class="p-5 d-flex flex-column align-items-center">
                            <div>Drag your photo here<span class="text-body-secondary px-1">or</span>
                                <button class="btn btn-link p-0" type="button">Browse from device</button>
                            </div>
                            <img class="mt-3 me-2" src="https://prium.github.io/phoenix/v1.18.0/assets/img/icons/image-icon.png" width="40" alt="">
                        </div>
                    </div>
                    <h5 class="my-3">Inventory</h5>
                    <div class="row g-0 border-top border-bottom">
                        <div class="col-sm-4">
                            <div class="nav flex-sm-column fs-9 vertical-tab h-100 justify-content-between" role="tablist" aria-orientation="vertical">
                                <a class="nav-link border-end border-end-sm-0 border-bottom text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center active" id="pricingTab" data-bs-toggle="tab" data-bs-target="#pricingTabContent" role="tab" aria-controls="pricingTabContent" aria-selected="true"> <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag me-sm-2 fs-4 nav-icons">
                                        <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                        <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                    </svg><span class="d-none d-sm-inline">Pricing</span></a>
                                <a class="nav-link border-end border-end-sm-0 border-bottom text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="restockTab" data-bs-toggle="tab" data-bs-target="#restockTabContent" role="tab" aria-controls="restockTabContent" aria-selected="false" tabindex="-1"> <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package me-sm-2 fs-4 nav-icons">
                                        <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
                                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                        <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                    </svg><span class="d-none d-sm-inline">Restock</span></a>
                                <a class="nav-link border-end border-end-sm-0 border-bottom text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="shippingTab" data-bs-toggle="tab" data-bs-target="#shippingTabContent" role="tab" aria-controls="shippingTabContent" aria-selected="false" tabindex="-1"> <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-truck me-sm-2 fs-4 nav-icons">
                                        <rect x="1" y="3" width="15" height="13"></rect>
                                        <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                                        <circle cx="5.5" cy="18.5" r="2.5"></circle>
                                        <circle cx="18.5" cy="18.5" r="2.5"></circle>
                                    </svg><span class="d-none d-sm-inline">Shipping</span></a>
                                <a class="nav-link border-end border-end-sm-0 border-bottom text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="productsTab" data-bs-toggle="tab" data-bs-target="#productsTabContent" role="tab" aria-controls="productsTabContent" aria-selected="false" tabindex="-1"> <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-sm-2 fs-4 nav-icons">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="2" y1="12" x2="22" y2="12"></line>
                                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                    </svg><span class="d-none d-sm-inline">Global Delivery</span></a>
                                <a class="nav-link border-end border-end-sm-0 border-bottom text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="attributesTab" data-bs-toggle="tab" data-bs-target="#attributesTabContent" role="tab" aria-controls="attributesTabContent" aria-selected="false" tabindex="-1"> <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sliders me-sm-2 fs-4 nav-icons">
                                        <line x1="4" y1="21" x2="4" y2="14"></line>
                                        <line x1="4" y1="10" x2="4" y2="3"></line>
                                        <line x1="12" y1="21" x2="12" y2="12"></line>
                                        <line x1="12" y1="8" x2="12" y2="3"></line>
                                        <line x1="20" y1="21" x2="20" y2="16"></line>
                                        <line x1="20" y1="12" x2="20" y2="3"></line>
                                        <line x1="1" y1="14" x2="7" y2="14"></line>
                                        <line x1="9" y1="8" x2="15" y2="8"></line>
                                        <line x1="17" y1="16" x2="23" y2="16"></line>
                                    </svg><span class="d-none d-sm-inline">Attributes</span></a>
                                <a class="nav-link border-end border-end-sm-0 border-bottom text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="advancedTab" data-bs-toggle="tab" data-bs-target="#advancedTabContent" role="tab" aria-controls="advancedTabContent" aria-selected="false" tabindex="-1"> <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock me-sm-2 fs-4 nav-icons">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg><span class="d-none d-sm-inline">Advanced</span></a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="tab-content py-3 ps-sm-4 h-100">
                                <div class="tab-pane fade active show" id="pricingTabContent" role="tabpanel" aria-labelledby="pricingTab">
                                    <h5 class="mb-3 d-sm-none">Pricing</h5>
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-6">
                                            <h5 class="mb-2 text-body-highlight">Regular price</h5><input class="form-control" type="text" placeholder="$$$">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <h5 class="mb-2 text-body-highlight">Sale price</h5><input class="form-control" type="text" placeholder="$$$">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade h-100" id="restockTabContent" role="tabpanel" aria-labelledby="restockTab">
                                    <h5 class="mb-3 d-sm-none">Pricing</h5>
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-6">
                                            <h5 class="mb-2 text-body-highlight">Regular price</h5><input class="form-control" type="text" placeholder="$$$">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <h5 class="mb-2 text-body-highlight">Sale price</h5><input class="form-control" type="text" placeholder="$$$">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade h-100" id="shippingTabContent" role="tabpanel" aria-labelledby="shippingTab">
                                    <h5 class="mb-3 d-sm-none">Pricing</h5>
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-6">
                                            <h5 class="mb-2 text-body-highlight">Regular price</h5><input class="form-control" type="text" placeholder="$$$">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <h5 class="mb-2 text-body-highlight">Sale price</h5><input class="form-control" type="text" placeholder="$$$">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="productsTabContent" role="tabpanel" aria-labelledby="productsTab">
                                    <h5 class="mb-3 d-sm-none">Pricing</h5>
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-6">
                                            <h5 class="mb-2 text-body-highlight">Regular price</h5><input class="form-control" type="text" placeholder="$$$">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <h5 class="mb-2 text-body-highlight">Sale price</h5><input class="form-control" type="text" placeholder="$$$">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="attributesTabContent" role="tabpanel" aria-labelledby="attributesTab">
                                    <h5 class="mb-3 d-sm-none">Pricing</h5>
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-6">
                                            <h5 class="mb-2 text-body-highlight">Regular price</h5><input class="form-control" type="text" placeholder="$$$">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <h5 class="mb-2 text-body-highlight">Sale price</h5><input class="form-control" type="text" placeholder="$$$">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="advancedTabContent" role="tabpanel" aria-labelledby="advancedTab">
                                    <h5 class="mb-3 d-sm-none">Pricing</h5>
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-6">
                                            <h5 class="mb-2 text-body-highlight">Regular price</h5><input class="form-control" type="text" placeholder="$$$">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <h5 class="mb-2 text-body-highlight">Sale price</h5><input class="form-control" type="text" placeholder="$$$">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-12">
                    <div class="organize-card">
                        <h5>Organize</h5>
                        <div class="form-group">
                            <label for="category">Category <a href="#">Add new category</a></label>
                            <select class="form-select mt-2" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="vendor">Vendor <a href="#">Add new vendor</a></label>
                            <select class="form-select mt-2" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="collection">Collection</label>
                            <input type="text" class="form-control" id="collection" placeholder="Collection">
                        </div>
                        <div class="form-group">
                            <label for="tags">Tags <a href="#">View all tags</a></label>
                            <select class="form-select mt-2" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="variants-card mt-3">
                        <h5>Variants</h5>
                        <div class="option-group">
                            <div class="d-flex justify-content-between">
                                <span>Option 1</span>
                                <a href="#" class="text-danger">Remove</a>
                            </div>
                            <div class="form-group">
                                <select class="form-select mt-2" aria-label="Default select example">
                                    <option selected>Size</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control enter-value">
                                    <option></option>
                                    <option>Enter Value 1</option>
                                    <option>Enter Value 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="option-group">
                            <div class="d-flex justify-content-between">
                                <span>Option 2</span>
                                <a href="#" class="text-danger">Remove</a>
                            </div>
                            <div class="form-group">
                                <select class="form-select mt-2" aria-label="Default select example">
                                    <option selected>Size</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control enter-value">
                                    <option></option>
                                    <option>Enter Value 1</option>
                                    <option>Enter Value 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <button type="button" class="btn btn-outline-secondary add-option-btn w-100">Add another option</button>

                        </div>
                    </div>
                </div>
            </div>



        </form>
    </div>
</div>
@endsection