@extends('layouts.selfapply')
@push('css')
    {{-- write or link your css file and styles tag here --}}
    <link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .accordion-button {
            background-color: transparent !important;
        }

        .accordion-button:focus {
            box-shadow: none !important;
        }

        .contact-form .form-select {
            margin-bottom: 0px !important;
        }

        @media screen and (max-width: 767px) {
            .hero-section {
                padding-top: 10px !important;
            }
        }

        .input-group-text {
            color: #666;
            border: none;
            background-color: #f5f6f8;
            line-height: 1.3;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            border-top-right-radius: 0px;
            border-bottom-right-radius: 0px;
        }

        /*@media screen and (max-width:991px){
                    .input-group-text{ padding:1.06rem 1.06rem; }
                }
                @media screen and (min-width:992px) and (max-width:1199px){
                    .input-group-text{ padding:1rem 1rem;margin-top:1px; }
                }*/
        .bg-custom-blue-100 {
            background-color: #EAF2FF;
        }
    </style>
@endpush
@section('content')
    <!-- main section starts -->
    <section class="bg-custom-blue-100 bg--fixed pb-80 personal-details-form d-flex align-items-center">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-5 col-lg-4 col-12 order-md-1 order-2 mt-md-0 mt-20">
                    <div class="txt-block left-column gr--white r-28 bg-white p-3">
                        <div class="accordion accordion-flush mb-0" id="accordionFlushExample">
                            <div class="accordion-item bg-transparent">
                                <h2 class="accordion-header mb-0" id="flush-headingOne">
                                    <button class="accordion-button text-uppercase" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="true"
                                        aria-controls="flush-collapseOne">
                                        User Details
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body p-2">
                                        <div
                                            class="d-flex justify-content-between  details-main px-3 py-3 bg--white-300 r-14 mb-0 border">
                                            <p class="s-12 text-grey m-0">Mobile :</p>
                                            <p class="s-14 text-black m-0">{{ Cookie::get('user_mobile') }}</p>
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
                <div class="col-md-7 col-lg-8 col-12 mt-md-0 mt-20 order-md-2 order-1  self-apply-form">
                    <div id="hero-8-form" class="r-28 bg-white p-4">
                        <div class=" d-flex align-items-center justify-content-between">
                            <div>
                                <h4 class="mb-0 w-700 d-block">Enter Following Details
                                </h4>
                                <p class="mt-0 color--grey">Kindly enter your details for personalized offers.
                                </p>
                            </div>

                            <div>
                                <div class="img-block">
                                    <img src="{{ asset('front/images/right-img.png') }}" alt="kreditsathi"
                                        class="img-fluid p-0 m-auto">

                                </div>
                            </div>
                        </div>

                        <form method="post" action="{{ route('self.apply.loan.details.store') }}"
                            class="request-form contact-form-1 save-form-3 needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-12 range">
                                    <div class="range__value form-group-range r-10 w-100">
                                        <div class="form-group-range w-100 r-10">
                                            <span class="w-100 text-center color--green-500 py-1 border r-12"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="range mt-2 d-block">
                                    <div class="d-flex justify-content-between required-amount mt-4">
                                        <span class="text-uppercase s-12 mb-2 fw-normal color--grey">enter required
                                            amount</span>
                                        <span class="text-uppercase s-14 mb-2 fw-normal color--grey">₹50K – ₹10L</span>
                                    </div>
                                    <div class="form-group range__slider">
                                        <input type="range" step="10000">
                                        <input type="hidden" id="loanAmount" value="" name="loan_amount">
                                    </div>
                                    <div class="d-flex justify-content-between required-price">
                                        <span class="text-uppercase s-12 mb-2 mt-2 fw-normal color--grey">₹50,000</span>
                                        <span class="text-uppercase s-14 mb-2 mt-2 fw-normal color--grey">₹10,00,000</span>
                                    </div>

                                </div>
                                <!-- <div class="col-md-12 mt-4 mb-2 contact-form">
                                            <select class="form-select subject valid" aria-label="Default select example" aria-invalid="false" name="monthly_income">
                                                <option value="">Monthly Income (&#8377;)</option>
                                                <option value="0-15000">&#8377; 0 - 15,000</option>
                                                <option value="15000-30000">&#8377; 15,000 - 30,000</option>
                                                <option value="30000-45000">&#8377; 30,000 - 45,000</option>
                                                <option value="45000-55000">&#8377; 45,000 - 55,000</option>
                                                <option value="55000-70000">&#8377; 55,000 - 70,000</option>
                                                <option value="70000-85000">&#8377; 70,000 - 85,000</option>
                                                <option value="85000-100000">&#8377; 85,000 - 1,00,000</option>
                                                <option value="100000">&#8377; 1,00,000 +</option>
                                            </select>

                                        </div> -->
                                <div class="col-md-12 mt-4 mb-2">
                                    <label for="form_mobile"
                                        class="position-static p-0 text-uppercase s-14 mb-2 color--grey text-start d-block">enter
                                        monthly income</label>
                                    <div class="input-group border r-12">
                                        <div class="input-group-prepend border-start">
                                            <span class="input-group-text h-100" id="basic-addon1">&#8377;</span>
                                        </div>
                                        <input type="text" name="monthly_income" id="monthly_income"
                                            class="numeric-input form-control"
                                            placeholder="Enter Monthly Income (&#8377;)" autocomplete="off"
                                            inputmode="numeric">
                                    </div>
                                    @component('components.ajax-error', ['field' => 'monthly_income'])
                                    @endcomponent
                                </div>

                                <div class="col-md-12 mb-2">
                                    <label for="form_mobile"
                                        class="position-static p-0 text-uppercase s-14 mb-2 color--grey text-start d-block">enter
                                        current emi (if any)</label>
                                    <div class="input-group border r-12">
                                        <div class="input-group-prepend border-start">
                                            <span class="input-group-text h-100" id="basic-addon1">&#8377;</span>
                                        </div>
                                        <input type="text" name="current_emi" id="current_emi" value=""
                                            class="numeric-input form-control"
                                            placeholder="Enter Current EMI (&#8377;) (If Any)" autocomplete="off"
                                            inputmode="numeric">
                                    </div>
                                </div>

                                <div class="col-md-12 form-btn text-center mt-3">
                                    <button type="submit" class="custom-btn text-center submit processNowBtn w-100"
                                        id="processNowBtn"
                                        onclick="_tfa.push({notify: 'event', name: 'self_lead', id: 1776413})">
                                        <span class="btn-text fw-semibold">Process Now</span>
                                        <span class="btn-icon"> → </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 gr--smoke">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="form-holder">
                        <div class="contact-form-notice">
                            <p class="s-14">
                                Kredit Sathi Private Limited is not a lender or financial institution. We do not provide
                                loans or make credit decisions. All loan approvals, interest rates, fees, and disbursal are
                                handled by third-party lenders such as banks and NBFCs. We do not guarantee loan approval,
                                disbursal, or specific loan terms. Users are advised to verify all details and read the
                                terms and conditions of the respective lender before proceeding.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.save-form-3').submit(function(event) {
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
                        beforeSend: function() {
                            $('#processNowBtn').html(
                                '<span class="spinner-border spinner-border-sm"></span> Process Now'
                            );
                            $('#processNowBtn').attr('disabled', true);
                        },
                        success: function(result) {
                            $(this).attr("disabled", false);
                            console.log(result);
                            if (result.type === 'SUCCESS') {
                                resetProcessButton();
                                window.location.href =
                                    `{{ route('self.apply.personal.details') }}`;
                            } else {
                                toastr.error(result.message);
                                $('#processNowBtn').html('Process Now');
                                $('#processNowBtn').attr('disabled', false);
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
                            $('#processNowBtn').html('Process Now');
                            $('#processNowBtn').attr('disabled', false);
                        }
                    });
                }
            });
        })

        function resetProcessButton() {
            let $btn = $('#processNowBtn');
            $btn.prop('disabled', false);
            $btn.html('Process Now');
        }
    </script>
@endpush
