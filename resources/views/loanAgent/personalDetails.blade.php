@extends('layouts.selfapply')
@push('css')
<link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" type="text/css" />
<style>
.accordion-button {
    background-color: transparent !important;
}

.accordion-button:focus {
    box-shadow: none !important;
}

.txt-block h2 {
    margin-bottom: 0px !important;
}

.bg-custom-blue-100 {
    background-color: #EAF2FF;
}
</style>
@endpush

@section('content')
<section id="contacts" class="bg-custom-blue-100 bg--fixed pb-80 personal-details-form d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-4 col-12 order-md-1 order-2 mt-md-0 mt-20">
                <div class="txt-block left-column gr--white r-28 bg-white p-3">
                    <div class="accordion accordion-flush mb-0" id="accordionFlushExample">
                        <div class="accordion-item bg-transparent">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button text-uppercase" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="true"
                                    aria-controls="flush-collapseOne">
                                    User Details
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body p-2">
                                    <div
                                        class="d-flex justify-content-between  details-main px-3 py-3 bg--white-300 r-14 mb-2 border">
                                        <p class="s-12 text-grey m-0">Mobile :</p>
                                        <p class="s-14 text-black m-0">{{ Cookie::get('user_mobile') }}</p>

                                    </div>
                                    <div
                                        class="d-flex justify-content-between  details-main px-3 py-3 bg--white-300 r-14 border">
                                        <p class="s-12 text-grey m-0">Loan Amount :</p>
                                        <p class="s-14 text-black m-0">
                                            &#8377;{{ formatePriceIndia(Cookie::get('loan_amount')) }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <p class="s-12 mt-10 mb-10 text-uppercase">Application Process </p>

                        <div class="cbox-12 process-step">
                            <div class="ico-wrap">
                                <div class="cbox-12-ico text-white bg--green-300 border border-green">
                                    <span class="fbox-ico ico-9 lh-1"> <span
                                            class="flaticon-check ms-0 color--white lh-1"></span></span>
                                </div>
                            </div>
                            <div class="cbox-12-txt">
                                <p class="s-11 w-600">Loan Details</p>
                            </div>
                        </div>
                        <div class="cbox-12 process-step">
                            <div class="ico-wrap">
                                <div class="cbox-12-ico cbox-12-ico bg--blue-400"><span class="fbox-ico ico-9 lh-1">
                                        <span class="flaticon-right-arrow ms-0 color--white lh-1"></span></span></div>
                            </div>
                            <div class="cbox-12-txt">
                                <p class="s-11 w-600">Personal Details</p>
                            </div>
                        </div>
                        <div class="cbox-12 process-step">
                            <div class="ico-wrap">
                                <div class="cbox-12-ico border"><span class="fbox-ico ico-9 lh-1"> <span
                                            class="flaticon-right-arrow ms-0 color--black lh-1"></span></span></div>
                            </div>
                            <div class="cbox-12-txt">
                                <p class="s-11">Unlock Offers</p>
                            </div>
                        </div>
                        <div class="cbox-12 process-step">
                            <div class="ico-wrap">
                                <div class="cbox-12-ico border"><span class="fbox-ico ico-9 lh-1"> <span
                                            class="flaticon-right-arrow ms-0 color--black lh-1"></span></span></div>
                            </div>
                            <div class="cbox-12-txt">
                                <p class="s-11">Purchase Plan</p>
                            </div>
                        </div>
                        <div class="cbox-12 process-step">
                            <div class="ico-wrap">
                                <div class="cbox-12-ico border"><span class="fbox-ico ico-9 lh-1"> <span
                                            class="flaticon-right-arrow ms-0 color--black lh-1"></span></span></div>
                            </div>
                            <div class="cbox-12-txt">
                                <p class="s-11">Personalized Offers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-8 col-12 mt-md-0 mt-20 order-md-2 order-1">
                <div class="r-28 bg-white p-4">
                    <form action="{{ route('loan.agent.personal.details.store') }}" id="personalDetailForm"
                        class="contact-form save-form-4" novalidate="novalidate" method="post" accept-charset="utf-8">
                        <div class="card-body">
                            <div
                                class="fbox-7 fb-1 r-18 border-0  d-flex align-items-center justify-content-between p-0 mb-0">

                                <div class="fbox-ico d-flex align-items-start justify-content-start mb-3">
                                    <div>
                                        <div
                                            class="fbox-image d-flex align-items-center justify-content-center r-16 ico-20 details-icon bg--blue-400">
                                            <span class="flaticon-briefcase text-white lh-1"></span>
                                        </div>
                                    </div>
                                    <div class="fbox-txt ms-3">
                                        <h4 class="mb-0 w-700 d-block">Personal Details
                                        </h4>
                                        <p class="mt-0 color--grey">For Our Experts To Analyze Your Loan Requirements.
                                        </p>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-2">
                                     <label for="firstname"
                                        class="position-static p-0 text-uppercase s-14 mb-1 fw-normal color--grey">First
                                        Name *</label>
                                    <div class="form-group form-floating">
                                        <input id="firstname" name="firstname" type="text"
                                            class="form-control name mb-0 py-0 r-12 border" placeholder=""
                                            value="{{ old('firstname') }}">
                                       
                                    </div>
                                    @component('components.ajax-error',['field'=>'firstname'])@endcomponent
                                </div>
                                <div class="col-md-6 col-sm-12 mb-2">
                                    <label for="lastname"
                                        class="position-static p-0 text-uppercase s-14 mb-1 fw-normal color--grey">Last
                                        Name *</label>
                                    <div class="form-group form-floating">
                                        <input id="lastname" name="lastname" type="text" class="form-control name mb-0 py-0 r-12 border"
                                            placeholder="" value="{{ old('lastname') }}">
                                  
                                    </div>
                                    @component('components.ajax-error',['field'=>'lastname'])@endcomponent
                                </div>
                                <div class="col-md-6 col-sm-12 mb-2">
                                    <label for="email"
                                        class="position-static p-0 text-uppercase s-14 mb-1 fw-normal color--grey">Email
                                        *</label>
                                    <div class="form-group form-floating">
                                        <input id="email" name="email" type="email" class="form-control name mb-0 py-0 r-12 border"
                                            placeholder="" value="{{ old('email') }}">
                                     
                                    </div>
                                    @component('components.ajax-error',['field'=>'email'])@endcomponent
                                </div>
                                <div class="col-md-6 col-sm-12 mb-2">
                                        <label for="pincode"
                                        class="position-static p-0 text-uppercase s-14 mb-1 fw-normal color--grey">Pincode
                                        *</label>
                                    <div class="form-group form-floating">
                                        <input id="pincode" name="pincode" type="text"
                                            class="form-control name numeric-input mb-0 py-0 r-12 border" placeholder=""
                                            value="{{ old('pincode') }}" maxlength="6" minlength="6"
                                            inputmode="numeric">
                                   
                                    </div>
                                    @component('components.ajax-error',['field'=>'pincode'])@endcomponent
                                </div>
                                <div id="loader" style="display:none;">
                                    Loading...
                                </div>
                                <div class="col-md-6 col-sm-12 mb-2">
                                     <label for="city"
                                        class="position-static p-0 text-uppercase s-14 mb-1 fw-normal color--grey">City
                                        *</label>
                                    <div class="form-group form-floating">
                                        <input id="city" name="city" type="text" class="form-control mb-0 py-0 r-12 border"
                                            placeholder="" value="{{ old('city') }}">
                                   
                                    </div>
                                    @component('components.ajax-error',['field'=>'city'])@endcomponent
                                </div>
                                <div class="col-md-6 col-sm-12 mb-2">
                                   <label for="state"
                                        class="position-static p-0 text-uppercase s-14 mb-1 fw-normal color--grey">State
                                        *</label>
                                    <div class="form-group form-floating">
                                        <!--<input id="state" name="state" type="text" class="form-control mb-0" placeholder="" value="{{ old('state') }}">-->
                                        <select id="state" name="state" class="form-control mb-0 py-0 r-12 border"
                                            style="font-size:16px!important;">
                                            <option value="">Select State</option>
                                            {!! getStateOption(old('state')) !!}
                                        </select>
                                       
                                    </div>
                                    @component('components.ajax-error',['field'=>'state'])@endcomponent
                                </div>
                                <div class="text-start">
                                    <button type="submit" class="custom-btn text-center submit w-100" id="submit-btn">
                                        <span class="btn-text fw-semibold">Continue</span>
                                        <span class="btn-icon"> → </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('#pancard').on('input', function() {
        $(this).val($(this).val().toUpperCase());
    });
    $('.save-form-4').submit(function(event) {
        var status = document.activeElement.innerHTML;
        event.preventDefault();
        if (status) {
            $('.ajax-error').html('');
            var data = new FormData(this);
            $.ajax({
                url: $(this).attr("action"),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                data: data,
                processData: false,
                contentType: false,
                success: function(result) {
                    $(this).attr("disabled", false);
                    if (result.type === 'SUCCESS') {
                        window.location.href = `{{ route('loan.agent.get.offers') }}`;
                    } else {
                        toastr.error(result.message);
                    }
                },
                error: function(error) {
                    $(this).attr("disabled", false);
                    let errors = error.responseJSON.errors,
                        errorsHtml = '';
                    $.each(errors, function(key, value) {
                        errorsHtml = '<strong>' + value[0] + '</strong>';
                        $('.' + key).html(errorsHtml);
                    });
                }
            });
        }
    });
    /* get postal data like city and state */
    $('#pincode').on('input', function() {
        var pincode = $(this).val();

        // Only make request if pincode is of 6 digits
        if (pincode.length === 6) {
            $('#loader').show(); // Show loader
            $.ajax({
                url: `{{ route('loan.agent.postal.details') }}`, // Route to the Laravel controller
                type: 'POST',
                data: {
                    pincode: pincode
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content') // Pass CSRF token
                },
                success: function(response) {
                    $('#loader').hide(); // Hide loader
                    if (response.status === 'success') {
                        // Populate District and State fields
                        $('#city').val(response.district);
                        $('#state').val(response.state);
                    } else {
                        alert(response.message);
                        $('#district').val('');
                        $('#state').val('');
                    }
                },
                error: function() {
                    $('#loader').hide(); // Hide loader on error
                    alert('An error occurred while fetching the details.');
                }
            });
        } else {
            // Clear the fields if pincode length is not 6 digits
            $('#city').val('');
            $('#state').val('');
        }
    });
})
</script>
@endpush