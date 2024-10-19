@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div class="faq-accordions">
        <div class="p-md-4 p-3">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Faq</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Accordions</li>
                </ol>
            </nav>
            <h2 class="mb-3 fw-bold">FAQ</h2>
            <h6 class="fw-bold">How can we help?</h6>
            <p class="text-body-tertiary">Search for the topic you need help with or <a href="#!">contact our support</a></p>
            <div class="search-box mb-5 w-100" style="max-width:25rem;">
                <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search" aria-label="Search">
                    <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                    </svg>
                </form>
            </div>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item border-top">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">What’s your return policy?</button>
                    </h2>
                    <div class="accordion-collapse collapse" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#faqAccordion" style="">
                        <div class="accordion-body pt-0">At the time of shipment, we assure that your product will be free of defects in materials and workmanship and will conform to the specifications outlined on the lot-specific datasheet included with the product. Please contact our technical support services if you have a technical issue with a product :<a href="mailto:phoenix@email.com">Email: phoenix@support.com.</a>If the team concludes that the product does not adhere to the requirements mentioned on the datasheet, we will provide a free replacement or a full refund of the product's invoice price.</div>
                    </div>
                </div>
                <div class="accordion-item border-top">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">I ordered the wrong product. <br class="d-sm-none">What should I do?</button>
                    </h2>
                    <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion" style="">
                        <div class="accordion-body pt-0">We would consider accepting the return of the merchandise, subject to an 20% restocking fee plus any shipping and handling fees. The customer is liable for shipping costs for both the returned product and the new replacement product, both to and from our facility. All returns require prior authorisation from us and must be mailed back to us within seven business days of receiving the goods. Products must be returned in the same or equivalent packing (i.e., cold and insulated) in which they were shipped (i.e., cold and insulated). Once we get the item, we will ship out the replacement item.</div>
                    </div>
                </div>
                <div class="accordion-item border-top">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseOne">How do I cancel my order?</button>
                    </h2>
                    <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body pt-0">If you must cancel your order, please call <a href="tel:+871406-7509">(871) 406-7509</a> Please note that we attempt to process and dispatch orders the same day (if received before 1pm PST), and once your product has shipped, our return policy will apply.</div>
                    </div>
                </div>
                <div class="accordion-item border-top">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseOne">What are your shipping &amp; <br class="d-sm-none">handling charges?</button>
                    </h2>
                    <div class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                        <div class="accordion-body pt-0">Our handling fee is a flat rate of $20. The shipping costs vary depending on your location and the items you've purchased. For an exact shipping cost estimate, please proceed through the checkout process and enter your items and address.</div>
                    </div>
                </div>
                <div class="accordion-item border-top">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseOne">Do you accept purchase orders?</button>
                    </h2>
                    <div class="accordion-collapse collapse" id="collapseFive" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                        <div class="accordion-body pt-0">Yes. Please include your purchase order number at online checkout, or clearly label it on a faxed or emailed purchase order. Please give the relevant email or mailing address for your accounts payable department so that the invoice can be sent to the appropriate location.</div>
                    </div>
                </div>
            </div>
            <div class="text-center py-5">
          <h3 class="fw-bold">Still can’t find your answer?</h3>
          <p class="text-body">We are happy to help</p>
          <button class="btn btn-sm btn-outline-primary btn-support-chat px-3 py-2"><svg class="svg-inline--fa fa-comment me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comment" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M512 240c0 114.9-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6C73.6 471.1 44.7 480 16 480c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4l0 0 0 0 0 0 0 0 .3-.3c.3-.3 .7-.7 1.3-1.4c1.1-1.2 2.8-3.1 4.9-5.7c4.1-5 9.6-12.4 15.2-21.6c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208z"></path></svg><!-- <span class="fas fa-comment me-2"></span> Font Awesome fontawesome.com -->Chat with us</button>
        </div>
        </div>
    </div>
</div>
@endsection