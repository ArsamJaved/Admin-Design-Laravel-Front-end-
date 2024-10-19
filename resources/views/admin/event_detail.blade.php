@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div class="create-event">
        <div class="p-md-4 p-3">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Page 1</a></li>
                    <li class="breadcrumb-item"><a href="#">Page 2</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Detail</li>
                </ol>
            </nav>
            <div class="pb-9">
                <h2 class="mb-4 mb-lg-6">Event details</h2>
                <img class="rounded w-100 object-fit-cover mb-5 mb-md-6 mb-xl-8" src="https://prium.github.io/phoenix/v1.18.0/assets/img/generic/34.png" alt="" style="min-height: 250px;">
                <div class="row gx-lg-9">
                    <div class="col-xl-8 border-end">
                        <div class="card mb-9">
                            <div class="card-body">
                                <h1 class="lh-sm fs-6 fs-xxl-4 mb-2">Brandmyth presents- Shironamhin 25 years celebration with symphony orchestra</h1>
                                <p class="fs-8 mb-4 text-body-tertiary">Tavern on the Greend, New York</p>
                                <div class="card mb-5 mb-xxl-7">
                                    <div class="card-body">
                                        <div class="row gy-5">
                                            <div class="col-md-6 d-flex justify-content-between">
                                                <div>
                                                    <div class="mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="px-2 py-1 bg-info-subtle rounded"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin text-info">
                                                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                                                    <circle cx="12" cy="10" r="3"></circle>
                                                                </svg></div>
                                                            <h5 class="ms-2 text-body-emphasis mb-0">Location</h5>
                                                        </div>
                                                    </div>
                                                    <p class="lh-sm mb-0 text-body-tertiary">36/4A, James Tiberius Auditorium,<br>Vancouver, British Columbia, Canada </p>
                                                </div>
                                                <div class="my-4 mx-3 border-start border-translucent d-none d-md-block"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="px-2 py-1 bg-primary-subtle rounded"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock text-primary">
                                                                <circle cx="12" cy="12" r="10"></circle>
                                                                <polyline points="12 6 12 12 16 14"></polyline>
                                                            </svg></div>
                                                        <h5 class="ms-2 mb-0">Date &amp; Time</h5>
                                                    </div>
                                                </div>
                                                <p class="lh-sm mb-0 text-body-tertiary">28th June - 2nd July 2022,<br>10 am - 4 pm Eastern Daylight Time</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-12 col-md-auto flex-md-grow-1"><button class="btn btn-primary w-100" type="button">Get Tickets</button></div>
                                    <div class="col-12 col-sm-auto flex-sm-grow-1 flex-md-grow-0">
                                        <button class="btn btn-outline-secondary w-100" type="button">
                                            <svg class="svg-inline--fa fa-calendar-plus me-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="calendar-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192zm176 40c-13.3 0-24 10.7-24 24v48H152c-13.3 0-24 10.7-24 24s10.7 24 24 24h48v48c0 13.3 10.7 24 24 24s24-10.7 24-24V352h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H248V256c0-13.3-10.7-24-24-24z"></path>
                                            </svg>
                                            Add to Calendar
                                        </button>
                                    </div>
                                    <div class="col-6 col-sm-auto">
                                        <button class="btn btn-outline-secondary w-100" type="button">
                                            <svg class="svg-inline--fa fa-heart me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"></path>
                                            </svg>
                                            3677
                                        </button>
                                    </div>
                                    <div class="col-6 col-sm-auto">
                                        <button class="btn btn-outline-secondary w-100" type="button">
                                            <svg class="svg-inline--fa fa-share-nodes me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-nodes" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M352 224c53 0 96-43 96-96s-43-96-96-96s-96 43-96 96c0 4 .2 8 .7 11.9l-94.1 47C145.4 170.2 121.9 160 96 160c-53 0-96 43-96 96s43 96 96 96c25.9 0 49.4-10.2 66.6-26.9l94.1 47c-.5 3.9-.7 7.8-.7 11.9c0 53 43 96 96 96s96-43 96-96s-43-96-96-96c-25.9 0-49.4 10.2-66.6 26.9l-94.1-47c.5-3.9 .7-7.8 .7-11.9s-.2-8-.7-11.9l94.1-47C302.6 213.8 326.1 224 352 224z"></path>
                                            </svg>
                                            4467
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="mb-3">About this event</h2>
                        <p class="text-justify text-body-secondary mb-6 mb-xxl-8">The Festival Season hopes to continue its rescheduled events in 2023 during the spring block. This will be a continuation of the tradition for the loyal fanbase to watch a jam-packed day full of exciting top-notch performances. With a unique lineup, you’ll know what to expect and get ready to embrace the festivity. Moreover, we’ve added a detailed list of the performers, with details of dates, lineups and prospective entry requirements. We will keep you posted with necessary updates regarding the event.</p>
                        <h4 class="mb-3 fw-bold text-body-highlight fs-xxl-6">Singers:</h4>
                        <p>To join the festival, you’ll need to register through <a href="mailto:register@event.com">register@event.com </a>after confirming the payment, you’ll be provided with a unique ID number that you’ll need to show before the authority to get the tickets.</p>
                        <p>The ID number will be unique to all members, so it’s requested that you don’t share it with anyone. Any damage regarding a misused ID will not be ours to compensate or refund.Enjoy!</p>
                        <div class="row g-1 g-sm-2 mb-7 mb-xxl-8">
                            <div class="col-3">
                                <a href="#" data-gallery="gallery-posts-undefined">
                                    <img class="rounded h-100 w-100 object-fit-cover" src="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/19.jpg" alt="...">
                                </a>
                            </div>
                            <div class="col-3"><a href="@" data-gallery="gallery-posts-undefined">
                                    <img class="rounded h-100 w-100 object-fit-cover" src="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/20.jpg" alt="..."></a></div>
                            <div class="col-6">
                                <a href="#" data-gallery="gallery-posts-undefined">
                                    <img class="rounded h-100 w-100 object-fit-cover" src="https://prium.github.io/phoenix/v1.18.0/assets/img/gallery/21.jpg" alt="...">
                                </a>
                            </div>
                        </div>
                        <h4 class="mb-3 text-body-highlight fs-xxl-6">Topic To Be Covered:</h4>
                        <ul class="mb-6 ps-4">
                            <li>Latest Update With Bitcoin</li>
                            <li>Blockchain Vs Bitcoin</li>
                            <li>Why Do We Need CryptoCurrency?</li>
                            <li>Bitcoin History</li>
                            <li>Bitcoin Vs Ethereum</li>
                            <li>How Big Is Cryptocurrency Right Now?</li>
                            <li>Crypto Scams &amp; How To Identify Them</li>
                            <li>Is it Worth Buying To Keep?</li>
                        </ul>
                        <h4 class="mb-3 text-body-highlight fs-xxl-6">Refund Policy:</h4>
                        <ul class="mb-6 ps-4">
                            <li>Contact the organizer to request a refund.</li>
                            <li>Eventbrite's fee is nonrefundable.</li>
                        </ul>
                        <h3 class="mb-3 fw-bold text-body-highlight fs-7 fs-xxl-6">Responses:</h3>
                        <div class="d-flex mb-6">
                            <div class="me-3">
                                <p class="mb-2 text-body-secondary">Going</p>
                                <h3 class="text-body-secondary">4,569</h3>
                            </div>
                            <div class="my-3 mx-2 mx-sm-3 border-start"></div>
                            <div class="mx-3">
                                <p class="mb-2 text-body-secondary">Interested</p>
                                <h3 class="text-body-secondary">15,652</h3>
                            </div>
                            <div class="my-3 mx-2 mx-sm-3 border-start"></div>
                            <div class="ms-3">
                                <p class="mb-2 text-body-secondary">Share</p>
                                <h3 class="text-body-secondary">11,236</h3>
                            </div>
                        </div>
                        <h3 class="mb-3 fw-bold text-body-highlight fs-7">Share with Friends:</h3>
                        <div class="d-flex mb-5"><button class="btn btn-outline-secondary btn-icon me-2"><svg class="svg-inline--fa fa-facebook text-facebbok" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"></path>
                                </svg><!-- <span class="fa-brands fa-facebook text-facebbok"></span> Font Awesome fontawesome.com --></button><button class="btn btn-outline-secondary btn-icon me-2"><svg class="svg-inline--fa fa-facebook-messenger" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-messenger" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M256.55 8C116.52 8 8 110.34 8 248.57c0 72.3 29.71 134.78 78.07 177.94 8.35 7.51 6.63 11.86 8.05 58.23A19.92 19.92 0 0 0 122 502.31c52.91-23.3 53.59-25.14 62.56-22.7C337.85 521.8 504 423.7 504 248.57 504 110.34 396.59 8 256.55 8zm149.24 185.13l-73 115.57a37.37 37.37 0 0 1-53.91 9.93l-58.08-43.47a15 15 0 0 0-18 0l-78.37 59.44c-10.46 7.93-24.16-4.6-17.11-15.67l73-115.57a37.36 37.36 0 0 1 53.91-9.93l58.06 43.46a15 15 0 0 0 18 0l78.41-59.38c10.44-7.98 24.14 4.54 17.09 15.62z"></path>
                                </svg><!-- <span class="fa-brands fa-facebook-messenger"></span> Font Awesome fontawesome.com --></button><button class="btn btn-outline-secondary btn-icon me-2"><svg class="svg-inline--fa fa-twitter text-info" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                                </svg><!-- <span class="fa-brands fa-twitter text-info"></span> Font Awesome fontawesome.com --></button><button class="btn btn-outline-secondary btn-icon me-2"><svg class="svg-inline--fa fa-envelope text-danger" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"></path>
                                </svg><!-- <span class="fa-solid fa-envelope text-danger"></span> Font Awesome fontawesome.com --></button><button class="btn btn-outline-secondary btn-icon me-2"><svg class="svg-inline--fa fa-linkedin-in text-info" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                                </svg><!-- <span class="fa-brands fa-linkedin-in text-info"></span> Font Awesome fontawesome.com --></button></div><button class="btn btn-outline-secondary w-100 mb-5 mb-xl-0" type="button">Load more</button>
                    </div>
                    <div class="col-xl-4">
                        <h3 class="mb-5 mb-xl-4">Organized by</h3>
                        <div class="row g-2 mb-6 align-items-center">
                            <div class="col-auto"><img class="rounded img-fluid" src="https://prium.github.io/phoenix/v1.18.0/assets/img/brand2/b.png" alt="..." width="40" height="40"></div>
                            <div class="col-sm-auto flex-1"><a class="mb-0 text-primary fw-semibold lh-sm" href="#!">Bass Events, Inc.</a></div>
                            <div class="col-sm-auto col-xl-12 col-xxl-auto"><button class="btn btn-link text-body p-0 me-2" type="button">10k Followers </button><button class="btn btn-outline-secondary px-3" type="button"><svg class="svg-inline--fa fa-user-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"></path>
                                    </svg><!-- <span class="fa-solid fa-user-plus me-2"></span> Font Awesome fontawesome.com -->Follow</button></div>
                        </div>
                        <div class="mb-8">
                            <h3 class="mb-5 mb-xl-4">Location </h3>
                            <div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=english%20table%20bahria%20town%20phase%207%20islamabad+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps tracker sport</a></iframe></div>
                            <div class="row flex-between-center g-0 gy-3">
                                <div class="col-12 col-sm-auto me-1">
                                    <div class="d-flex">
                                        <h3 class="fw-bold text-body-highlight fs-8 me-2 mb-0 my-4">James Tiberius Auditorium</h3>
                                        <p class="mb-0 text-body-highlight fs-9">Vancouver</p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-auto col-xl-12"><button class="btn btn-outline-secondary w-100" type="button"><svg class="svg-inline--fa fa-route me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="route" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M512 96c0 50.2-59.1 125.1-84.6 155c-3.8 4.4-9.4 6.1-14.5 5H320c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c53 0 96 43 96 96s-43 96-96 96H139.6c8.7-9.9 19.3-22.6 30-36.8c6.3-8.4 12.8-17.6 19-27.2H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320c-53 0-96-43-96-96s43-96 96-96h39.8c-21-31.5-39.8-67.7-39.8-96c0-53 43-96 96-96s96 43 96 96zM117.1 489.1c-3.8 4.3-7.2 8.1-10.1 11.3l-1.8 2-.2-.2c-6 4.6-14.6 4-20-1.8C59.8 473 0 402.5 0 352c0-53 43-96 96-96s96 43 96 96c0 30-21.1 67-43.5 97.9c-10.7 14.7-21.7 28-30.8 38.5l-.6 .7zM128 352a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM416 128a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"></path>
                                        </svg><!-- <span class="fa-solid fa-route me-2"></span> Font Awesome fontawesome.com -->Get directions</button></div>
                            </div>
                        </div>
                        <h3 class="my-4">Tags</h3>
                        <div class="d-flex flex-wrap pb-7 border-bottom border-translucent"><span class="badge badge-tag me-2 mb-2">Music</span><span class="badge badge-tag me-2 mb-2">CONCERT</span><span class="badge badge-tag mb-2">Greatest show on earth</span></div>
                        <div class="row g-0 py-3 border-bottom border-dashed align-items-end justify-content-between">
                            <div class="col-auto">
                                <h3 class="flex-1 mb-0 text-nowrap me-3">Upcoming events</h3>
                            </div>
                            <div class="col-auto"><a class="fw-bold fs-9" href="#!">See more</a></div>
                        </div>
                        <div class="py-3 border-bottom border-translucent border-dashed">
                            <div class="d-flex flex-between-center">
                                <p class="text-warning fs-10 mb-0 fw-bold mb-1">MON, FEB 21- MARCH 23</p>
                                <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                        </svg><!-- <span class="fas fa-ellipsis-h"></span> Font Awesome fontawesome.com --></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                </div>
                            </div><a class="text-primary-hover text-body-highlight fw-bold mb-2 line-clamp-1 me-5 lh-base" href="#!">Master Class on FILM Studies THESIS on Makers</a>
                            <p class="text-body-secondary fs-9 mb-2">Organized by <br><a class="fw-bold text-primary" href="#!">IAFM- International Academy of Film and Media</a></p>
                            <p class="fs-10 text-body-tertiary text-opacity-85">64 people going</p>
                            <p class="fs-9 text-body-tertiary fw-bold mb-1"><svg class="svg-inline--fa fa-clock text-body-secondary me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"></path>
                                </svg><!-- <span class="fa-solid fa-clock text-body-secondary me-1"></span> Font Awesome fontawesome.com -->12.30PM - 10PM</p>
                            <p class="fs-9 text-body-tertiary fw-bold mb-0"><svg class="svg-inline--fa fa-location-dot text-body-secondary me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path>
                                </svg><!-- <span class="fa-solid fa-map-marker-alt text-body-secondary me-1"></span> Font Awesome fontawesome.com -->Tavern on the Greend, New York</p>
                        </div>
                        <div class="py-3 border-bottom border-translucent border-dashed">
                            <div class="d-flex flex-between-center">
                                <p class="text-warning fs-10 mb-0 fw-bold mb-1">MON, FEB 21- MARCH 23</p>
                                <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                        </svg><!-- <span class="fas fa-ellipsis-h"></span> Font Awesome fontawesome.com --></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                </div>
                            </div><a class="text-primary-hover text-body-highlight fw-bold mb-2 line-clamp-1 me-5 lh-base" href="#!">Master Class on FILM Studies 'ANALYSIS of Cinema'</a>
                            <p class="text-body-secondary fs-9 mb-2">Organized by <br><a class="fw-bold text-primary" href="#!">IAFM- International Academy of Film and Media</a></p>
                            <p class="fs-10 text-body-tertiary text-opacity-85">64 people going</p>
                            <p class="fs-9 text-body-tertiary fw-bold mb-1"><svg class="svg-inline--fa fa-clock text-body-secondary me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"></path>
                                </svg><!-- <span class="fa-solid fa-clock text-body-secondary me-1"></span> Font Awesome fontawesome.com -->12.30PM - 10PM</p>
                            <p class="fs-9 text-body-tertiary fw-bold mb-0"><svg class="svg-inline--fa fa-location-dot text-body-secondary me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path>
                                </svg><!-- <span class="fa-solid fa-map-marker-alt text-body-secondary me-1"></span> Font Awesome fontawesome.com -->Tavern on the Greend, New York</p>
                        </div>
                        <div class="py-3 border-bottom border-translucent border-dashed">
                            <div class="d-flex flex-between-center">
                                <p class="text-warning fs-10 mb-0 fw-bold mb-1">MON, FEB 21- MARCH 23</p>
                                <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none d-flex btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                        </svg><!-- <span class="fas fa-ellipsis-h"></span> Font Awesome fontawesome.com --></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                                </div>
                            </div><a class="text-primary-hover text-body-highlight fw-bold mb-2 line-clamp-1 me-5 lh-base" href="#!">Witnessing History in Making Photographs</a>
                            <p class="text-body-secondary fs-9 mb-2">Organized by <br><a class="fw-bold text-primary" href="#!">IAFM- International Academy of Film and Media</a></p>
                            <p class="fs-10 text-body-tertiary text-opacity-85">64 people going</p>
                            <p class="fs-9 text-body-tertiary fw-bold mb-1"><svg class="svg-inline--fa fa-clock text-body-secondary me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"></path>
                                </svg><!-- <span class="fa-solid fa-clock text-body-secondary me-1"></span> Font Awesome fontawesome.com -->12.30PM - 10PM</p>
                            <p class="fs-9 text-body-tertiary fw-bold mb-0"><svg class="svg-inline--fa fa-location-dot text-body-secondary me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path>
                                </svg><!-- <span class="fa-solid fa-map-marker-alt text-body-secondary me-1"></span> Font Awesome fontawesome.com -->Tavern on the Greend, New York</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection