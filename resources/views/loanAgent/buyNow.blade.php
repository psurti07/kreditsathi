@extends('layouts.selfapply')
@push('css')
    <link rel="stylesheet" href="{{ asset('front/css/radiocards.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/custom.css') }}">
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

        .cbox-1.ico-15 span {
            top: 5px !important;
        }

        a#failed-btn {
            background: #dc3545;
            border: 1px solid #dc3545;
        }

        a#failed-btn:hover {
            background: #bb2d3b !important;
            color: #fff !important;
        }

        .card:hover .radio:checked {
            border-color: transparent !important;
        }

        .bg-custom-blue-100 {
            background-color: #EAF2FF;
        }
    </style>
@endpush

@section('content')
    <section id="contacts"
        class="bg-custom-blue-100 personal-details-form inner-page-hero contacts-section division min-vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center mb-35">
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
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body p-2">
                                        <div
                                            class="d-flex justify-content-between  details-main px-3 py-3 bg--white-300 r-14 mb-2 border">
                                            <p class="s-12 text-grey m-0">Fullname :</p>
                                            <p class="s-14 text-black m-0">{{ Cookie::get('fullname') }}</p>
                                        </div>
                                        <div
                                            class="d-flex justify-content-between  details-main px-3 py-3 bg--white-300 r-14 mb-2 border">
                                            <p class="s-12 text-grey m-0">Mobile :</p>
                                            <p class="s-14 text-black m-0">{{ Cookie::get('user_mobile') }}</p>

                                        </div>
                                        <div
                                            class="d-flex justify-content-between  details-main px-3 py-3 bg--white-300 r-14 border">
                                            <p class="s-12 text-grey m-0">Amount :</p>
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
                                    <p class="s-11 w-600">Income Details</p>
                                </div>
                            </div>
                            <div class="cbox-12 process-step">
                                <div class="ico-wrap">
                                    <div class="cbox-12-ico text-white bg--green-300 border border-green"><span
                                            class="fbox-ico ico-9 lh-1">
                                            <span class="flaticon-check ms-0 color--white lh-1"></span></span></div>
                                </div>
                                <div class="cbox-12-txt">
                                    <p class="s-11 w-600">Personal Details</p>
                                </div>
                            </div>
                            <div class="cbox-12 process-step">
                                <div class="ico-wrap">
                                    <div class="cbox-12-ico  text-white bg--green-300 border border-green"><span
                                            class="fbox-ico ico-9 lh-1"> <span
                                                class="flaticon-check ms-0 color--white lh-1"></span></span></div>
                                </div>
                                <div class="cbox-12-txt">
                                    <p class="s-11 w-600">Unlock Offers</p>
                                </div>
                            </div>
                            <div class="cbox-12 process-step">
                                <div class="ico-wrap">
                                    <div class="cbox-12-ico bg--blue-400"><span class="fbox-ico ico-9 lh-1"> <span
                                                class="flaticon-right-arrow ms-0 color--white lh-1"></span></span></div>
                                </div>
                                <div class="cbox-12-txt">
                                    <p class="s-11 w-600">Purchase Plan</p>
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
                        <div class="card-body">
                            <div class="mb-3">
                                <h4 class="mb-0 w-700 d-block">Premium Subscription Offer
                                </h4>
                                <p class="mt-0 color--grey">Your pre-approved loan is waiting. Purchase a subscription to
                                    proceed. <span class="text-danger">- Offer Valid till 12 am only!</span>
                                </p>

                            </div>

                            <form method="post" class="buyNowForm" action="{{ route('loan.agent.checkout') }}">
                                @csrf
                                <input type="hidden" class="form-control" name="order_amount" id="order_amount"
                                    value="">
                                <div class="row gx-3 gy-3">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <label class="card border-0">
                                            <input name="plan" value="2" class="radio d-none" type="radio" checked
                                                data-plan="Loan-Agent">
                                            <div class="plan-details p-0 r-24 overflow-auto border">

                                                <!--
                                                <div class="corner-ribbon"
                                                    data-offer="{{ calPercentage($hireAgent->amount, $hireAgent->offeramount) }} OFF">
                                                </div> -->
                                                <p
                                                    class="mb-0 text-center fs-12 fw-bold btn--yellow-500 px-2 py-0 mt-0 text-white">
                                                    77%
                                                    OFF
                                                </p>
                                                <div class="p-4 plan-details-card">
                                                    <h5 class="fw-bolder s-16 plan-type mb-10">Hire Agent Plan</h5>
                                                    <div class="price my-2">
                                                        <!-- Monthly Price -->
                                                        <div class="price2">
                                                            <sup class="color--black">₹</sup>
                                                            <sup
                                                                class="coins color--red-300"><strike>{{ intval($hireAgent->amount) }}</strike></sup>
                                                            <span
                                                                class="color--black">{{ intval($hireAgent->offeramount) }}</span>
                                                        </div>
                                                    </div>

                                                    <div class="order-summary">
                                                        <div class="order-row order-header">
                                                            <span>Items</span>
                                                            <span>Price</span>
                                                        </div>

                                                        <div class="order-row">
                                                            <span>Price</span>
                                                            <span>{{ formatePriceIndia($hireAgent->amount) }}</span>
                                                        </div>

                                                        <div class="order-row order-discount">
                                                            <span>Discount</span>
                                                            <span>-
                                                                {{ formatePriceIndia($hireAgent->amount - $hireAgent->offeramount) }}</span>
                                                        </div>

                                                        <div class="order-row">
                                                            <span>Offer Amount</span>
                                                            <span>{{ formatePriceIndia($hireAgent->offeramount) }}</span>
                                                        </div>

                                                        <div class="order-row">
                                                            <span>GST</span>
                                                            <span>+
                                                                {{ formatePriceIndia($hireAgent->offeramount * 0.18) }}</span>
                                                        </div>

                                                        <div class="order-divider"></div>

                                                        <div class="order-row order-total">
                                                            <h5>Total</h5>
                                                            <h5>₹
                                                                {{ formatePriceIndia($hireAgent->offeramount + $hireAgent->offeramount * 0.18) }}
                                                            </h5>
                                                        </div>
                                                    </div>

                                                    <div class="text-center ">
                                                        <button type="submit" class="custom-btn w-100 text-center"
                                                            id="submit-btn">
                                                            <span class="btn-text fw-semibold">Buy Now</span>
                                                            <span class="btn-icon"> → </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="p-4 bg--white-200 border r-24 subscription-benefits plan-details-card">
                                            <div class="card-body">
                                                <p class="fw-bold mt-0">Subscription Benefits: : </p>

                                                <div class="cbox-1 ico-10">
                                                    <div class="ico-wrap ms-0">
                                                        <div class="cbox-1-ico bg--green-300 rounded-pill">
                                                            <span class="flaticon-check end-0 text-white"></span>
                                                        </div>
                                                    </div>
                                                    <div class="cbox-1-txt ms-2">
                                                        <p class="s-14 mt-0"> Loan Process in Multiple NBFCs</p>
                                                    </div>
                                                </div>
                                                <div class="cbox-1 ico-10">
                                                    <div class="ico-wrap ms-0">
                                                        <div class="cbox-1-ico bg--green-300 rounded-pill">
                                                            <span class="flaticon-check end-0 text-white"></span>
                                                        </div>
                                                    </div>
                                                    <div class="cbox-1-txt ms-2">
                                                        <p class="s-14 mt-0"> 100% Online Financial Consultation</p>
                                                    </div>
                                                </div>
                                                <div class="cbox-1 ico-10">
                                                    <div class="ico-wrap ms-0">
                                                        <div class="cbox-1-ico bg--green-300 rounded-pill">
                                                            <span class="flaticon-check end-0 text-white"></span>
                                                        </div>
                                                    </div>
                                                    <div class="cbox-1-txt ms-2">
                                                        <p class="s-14 mt-0"> Access Personalized Tracking Portal</p>
                                                    </div>
                                                </div>
                                                <div class="cbox-1 ico-10">
                                                    <div class="ico-wrap ms-0">
                                                        <div class="cbox-1-ico bg--green-300 rounded-pill">
                                                            <span class="flaticon-check end-0 text-white"></span>
                                                        </div>
                                                    </div>
                                                    <div class="cbox-1-txt ms-2">
                                                        <p class="s-14 mt-0"> Dedicated Loan Expert Assigned</p>
                                                    </div>
                                                </div>
                                                <div class="cbox-1 ico-10">
                                                    <div class="ico-wrap ms-0">
                                                        <div class="cbox-1-ico bg--green-300 rounded-pill">
                                                            <span class="flaticon-check end-0 text-white"></span>
                                                        </div>
                                                    </div>
                                                    <div class="cbox-1-txt ms-2">
                                                        <p class="s-14 mt-0"> Loan Processing Time: 48 Hours</p>
                                                    </div>
                                                </div>

                                                <div class="pt-3">
                                                    <div id="rb-1-2" class="rbox-1">
                                                        <!-- Brand Logo -->
                                                        <div class="rbox-1-img">
                                                            <img class="img-fluid"
                                                                src="{{ asset('front/images/google.webp') }}"
                                                                alt="feature-image">
                                                        </div>

                                                        <!-- Rating Stars -->
                                                        <div class="star-rating ico-10 bg--white-100 r-100 clearfix">
                                                            <span class="flaticon-star"></span>
                                                            <span class="flaticon-star"></span>
                                                            <span class="flaticon-star"></span>
                                                            <span class="flaticon-star"></span>
                                                            <span class="flaticon-star mr-5"></span>
                                                            &nbsp; 4.95/5
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
            // Set initial value based on the checked radio button
            updateOrderAmount();

            // Listen for the change event on the radio buttons with the class .plan-card
            $('input[name="plan"]').change(function() {
                updateOrderAmount();
            });

            // Function to update the order amount based on the selected radio button
            function updateOrderAmount() {
                // Get the value of the selected radio button
                var selectedPlan = $('input[name="plan"]:checked').val();

                // Determine the base price of the selected plan
                var baseAmount = 0;
                if (selectedPlan == "1") {
                    baseAmount = {
                        {
                            $selfApply - > inOffer ? $selfApply - > offeramount : $selfApply - > amount
                        }
                    }; // Set price for Super Saver
                } else if (selectedPlan == "2") {
                    baseAmount = {
                        {
                            $hireAgent - > inOffer ? $hireAgent - > offeramount : $hireAgent - > amount
                        }
                    }; // Set price for Standard
                }

                // Calculate the total amount including 18% GST
                var gst = 0.18;
                var totalAmount = baseAmount + (baseAmount * gst);

                // Use Math.floor to round down the total amount
                var finalAmount = totalAmount;
                $('#submit-btn').text('Purchase Plan: ₹' + Math.floor(baseAmount));
                // Update the hidden input field with the final amount
                $('#order_amount').val(finalAmount);
            }
        });
        var owl = $('.buyNow-carousel');
        owl.owlCarousel({
            items: 5,
            loop: true,
            autoplay: true,
            navBy: 1,
            nav: false,
            autoplayTimeout: 4000,
            autoplayHoverPause: false,
            smartSpeed: 2000,
            responsive: {
                0: {
                    items: 4
                },
                550: {
                    items: 4
                },
                767: {
                    items: 5
                },
                768: {
                    items: 5
                },
                991: {
                    items: 5
                },
                1000: {
                    items: 5
                }
            }
        });
    </script>
@endpush
