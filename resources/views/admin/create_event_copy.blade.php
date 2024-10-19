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
                    <li class="breadcrumb-item active" aria-current="page">Create Event</li>
                </ol>
            </nav>
            <form class="mb-9">
                <div class="row justify-content-between align-items-end g-3 mb-5">
                    <div class="col-12 col-sm-auto col-xl-8">
                        <h2 class="mb-0">Create an Event</h2>
                    </div>
                    <div class="col-12 col-sm-auto col-xl-4">
                        <div class="d-flex">
                            <button class="btn btn-outline-secondary px-4 me-2">
                                Save
                            </button>
                            <a class="btn btn-primary px-5 text-nowrap" href="../../apps/events/event-detail.html">
                                Publish event
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-xl-8">
                        <div class="row gx-3 gy-4">
                            <h4 class="fs-7 mb-0">Event Details</h4>
                            <div class="col-sm-6 col-md-12">
                                <div class="form-floating"><input class="form-control" id="floatingEventInput" type="text" placeholder="Event title"><label for="floatingEventInput">Event title</label></div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-floating"><select class="form-select" id="floatingSelectTask">
                                        <option selected="selected">Select event type</option>
                                        <option value="1">technical</option>
                                        <option value="2">external</option>
                                        <option value="3">organizational</option>
                                    </select><label for="floatingSelectTask">type</label></div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-floating"><select class="form-select" id="floatingSelectPrivacy">
                                        <option selected="selected">Select topic</option>
                                        <option value="1">Data select topic One</option>
                                        <option value="2">Data select topic Two</option>
                                        <option value="3">Data select topic Three</option>
                                    </select><label for="floatingSelectPrivacy">topic</label></div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="form-check form-check-inline"><input class="form-check-input" id="inlineRadio1" type="radio" name="inlineRadioOptions" value="option1" checked="checked"><label class="form-check-label" for="inlineRadio1">Online</label></div>
                                <div class="form-check form-check-inline"><input class="form-check-input" id="inlineRadio2" type="radio" name="inlineRadioOptions" value="option2"><label class="form-check-label" for="inlineRadio2">Offline</label></div>
                                <div class="form-check form-check-inline"><input class="form-check-input" id="inlineRadio3" type="radio" name="inlineRadioOptions" value="option3"><label class="form-check-label" for="inlineRadio3">Both</label></div>
                            </div>
                            <div class="col-sm-6 col-md-12 mt-md-0 mt-lg-1">
                                <div class="form-floating"><input class="form-control" id="floatingVenueInput" type="text" placeholder="Venue"><label for="floatingVenueInput">Venue</label></div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-floating"><select class="form-select" id="floatingSelectCountry">
                                        <option selected="selected">Select Country</option>
                                        <option value="1">Country One</option>
                                        <option value="2">Country Two</option>
                                        <option value="3">Country Three</option>
                                    </select><label for="floatingSelectCountry">Country</label></div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-floating"><select class="form-select" id="floatingSelectState">
                                        <option selected="selected">Select State </option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select><label for="floatingSelectState"> State</label></div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-floating"><select class="form-select" id="floatingSelectCity">
                                        <option selected="selected">Select city</option>
                                        <option value="1">Data Privacy One</option>
                                        <option value="2">Data Privacy Two</option>
                                        <option value="3">Data Privacy Three</option>
                                    </select><label for="floatingSelectCity">City</label></div>
                            </div>
                            <h4 class="fs-7 mt-7">Schedule</h4>
                            <div class="col-sm-6">
                                <div class="flatpickr-input-container">
                                    <div class="form-floating"><input class="form-control datetimepicker flatpickr-input" id="startDatepicker" type="text" placeholder="start date" data-options="{&quot;disableMobile&quot;:true}" readonly="readonly"><span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span><label class="ps-6" for="startDatepicker">Start date</label></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating"><input class="form-control datetimepicker flatpickr-input" id="timepickerEvent" type="text" placeholder="H:i" data-options="{&quot;enableTime&quot;:true,&quot;noCalendar&quot;:true,&quot;dateFormat&quot;:&quot;H:i&quot;,&quot;disableMobile&quot;:true}" readonly="readonly"><label for="timepickerEvent">Start Time</label></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="flatpickr-input-container">
                                    <div class="form-floating"><input class="form-control datetimepicker flatpickr-input" id="endDatepicker" type="text" placeholder="end date" data-options="{&quot;disableMobile&quot;:true}" readonly="readonly"><span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span><label class="ps-6" for="endDatepicker">End date</label></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating"><input class="form-control datetimepicker flatpickr-input" id="timepickerEvent2" type="text" placeholder="H:i" data-options="{&quot;enableTime&quot;:true,&quot;noCalendar&quot;:true,&quot;dateFormat&quot;:&quot;H:i&quot;,&quot;disableMobile&quot;:true}" readonly="readonly"><label for="timepickerEvent2">End Time</label></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating"><select class="form-select" id="floatingSelectTimeZone">
                                        <option selected="selected">Select time zone</option>
                                        <option value="1">Data Privacy One</option>
                                        <option value="2">Data Privacy Two</option>
                                        <option value="3">Data Privacy Three</option>
                                    </select><label for="floatingSelectTimeZone">Time zone</label></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="flatpickr-input-container">
                                    <div class="form-floating"><input class="form-control datetimepicker flatpickr-input" id="datepicker" type="text" placeholder="registration deadline" data-options="{&quot;disableMobile&quot;:true}" readonly="readonly"><label for="datepicker">Registration deadline</label></div>
                                </div>
                            </div>
                            <div class="col-12 gy-6">
                                <div class="form-floating"><textarea class="form-control" id="floatingProjectDescription" placeholder="Leave a comment here" style="height: 128px"></textarea><label for="floatingProjectDescription">Description</label></div>
                            </div>
                            <div class="col-sm-6 gy-6">
                                <div class="form-floating"><input class="form-control" id="floatingOrganizersInput" type="text" placeholder="ORGANIZERS"><label for="floatingOrganizersInput">ORGANIZERS</label></div>
                            </div>
                            <div class="col-sm-6 gy-6">
                                <div class="form-floating"><input class="form-control" id="floatingSponsorsInput" type="text" placeholder="SPONSORS"><label for="floatingSponsorsInput">SPONSORS</label></div>
                            </div>
                            <div class="col-12 gy-6">
                                <div class="dropzone dropzone-multiple p-0 dz-clickable" id="my-awesome-dropzone" data-dropzone="data-dropzone">

                                    <div class="dz-preview d-flex flex-wrap"></div>
                                    <div class="dz-message text-body-tertiary text-center" data-dz-message="data-dz-message"> Drag your photo here
                                        <span class="text-body-secondary">or </span>
                                        <button class="btn btn-link p-0" type="button">Browse from device </button>
                                        <br><img class="mt-3 me-2" src="https://prium.github.io/phoenix/v1.18.0/assets/img/icons/image-icon.png" width="40" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 gy-6">
                                <select class="my-select" multiple="multiple" style="width:200px !important">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="NY">New York</option>
                                    <option value="CA">California</option>
                                    <option value="TX">Texas</option>
                                    <option value="FL">Florida</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="border-bottom border-translucent pb-4">
                            <h4 class="fs-7 mb-4">Privacy</h4>
                            <div class="form-check mb-2"><input class="form-check-input" id="exampleRadios1" type="radio" name="exampleRadios" value="option1" checked="checked"><label class="form-check-label fw-normal" for="exampleRadios1">On Phoenix, our distribution partners, and search engines,<br>anybody can find the event </label></div>
                            <div class="form-check mb-0"><input class="form-check-input" id="exampleRadios2" type="radio" name="exampleRadios" value="option2"><label class="form-check-label fw-normal" for="exampleRadios2">Only the individuals you select have access to it.</label></div>
                        </div>
                        <div class="border-bottom">
                            <div class="form-check my-4">
                                <input class="form-check-input" id="flexChecked" type="checkbox" checked="checked">
                                <label class="form-check-label fw-bold fs-8" for="flexChecked">Show the number of available tickets</label>
                            </div>
                        </div>
                        <h4 class="fs-7 my-4">Ticket pricing</h4>
                        <div class="form-check form-check-inline"><input class="form-check-input" id="freeTicket" type="radio" name="ticketPricing" value="freeTicket" checked="checked"><label class="form-check-label" for="freeTicket">Free</label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" id="paidTicket" type="radio" name="ticketPricing" value="paidTicket"><label class="form-check-label" for="paidTicket">Paid</label></div>
                        <div class="row g-3 mb-7 mt-1 border-bottom border-translucent pb-5">
                            <div class="col-6 col col-xl-7">
                                <h4 class="fs-9">Option</h4>
                            </div>
                            <div class="col-6 col-xl-5">
                                <h4 class="fs-9">Price</h4>
                            </div>
                            <div class="col-6 col-xl-7"><input class="form-control" type="text" placeholder="Top Gallery"></div>
                            <div class="col-6 col-xl-5"><input class="form-control" type="number" placeholder="$0.0"></div>
                            <div class="col-6 col-xl-7"><input class="form-control" type="text" placeholder="VIP"></div>
                            <div class="col-6 col-xl-5"><input class="form-control" type="number" placeholder="$0.0"></div>
                            <div class="col-6 col-xl-7"><input class="form-control" type="text" placeholder="Front row"></div>
                            <div class="col-6 col-xl-5"><input class="form-control" type="number" placeholder="$0.0"></div>
                            <div class="col-12"><button class="btn btn-link p-0" type="button"><svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                    </svg><!-- <span class="fa-solid fa-plus me-2"></span> Font Awesome fontawesome.com -->Add an option </button></div>
                        </div>
                        <h4 class="fs-7 my-4">Custom fields</h4>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6 col-lg-12 col-xl-6"><label class="form-label" for="inputName">Name</label><input class="form-control" id="inputName" type="text" placeholder="Item name (e.g. Special T-shirt)"></div>
                            <div class="col-md-6 col-lg-12 col-xl-6"><label class="form-label" for="inputState1">Type</label><select class="form-select" id="inputState1">
                                    <option value="">Choose...</option>
                                    <option value="">Type One</option>
                                    <option value="">Type Two</option>
                                </select></div>
                            <div class="col-12"><label class="form-label" for="filedOptions">Field options</label><textarea class="form-control" id="filedOptions" placeholder="Description" rows="6"></textarea></div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6 col-lg-12 col-xl-6"><label class="form-label" for="inputName2">Name</label><input class="form-control" id="inputName2" type="text" placeholder="Item name (e.g. Special T-shirt)"></div>
                            <div class="col-md-6 col-lg-12 col-xl-6"><label class="form-label" for="inputState2">Type</label><select class="form-select" id="inputState2">
                                    <option value="">Choose...</option>
                                    <option value="">Type Three</option>
                                    <option value="">Type Four</option>
                                </select></div>
                            <div class="col-12"><label class="form-label" for="filedOptions2">Field options</label><textarea class="form-control" id="filedOptions2" placeholder="Description" rows="6"></textarea></div>
                            <div class="col-12"><button class="btn btn-link p-0" type="button"><svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                                    </svg><!-- <span class="fa-solid fa-plus me-2"></span> Font Awesome fontawesome.com -->Add an item</button></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection