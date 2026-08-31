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

body {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
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
                                        <p class="s-14 text-black mt-0">{{ Cookie::get('fullname') }}</p>
                                    </div>
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
                                <div class="cbox-12-ico text-white bg--green-300 border border-green"><span
                                        class="fbox-ico ico-9 lh-1">
                                        <span class="flaticon-right-arrow ms-0 color--white lh-1"></span></span></div>
                            </div>
                            <div class="cbox-12-txt">
                                <p class="s-11 w-600">Personal Details</p>
                            </div>
                        </div>
                        <div class="cbox-12 process-step">
                            <div class="ico-wrap">
                                <div class="cbox-12-ico bg--blue-400"><span class="fbox-ico ico-9 lh-1"> <span
                                            class="flaticon-right-arrow ms-0 color--white lh-1"></span></span></div>
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
                                    <h4 class="mb-0 w-700 d-block">You’re Eligible For Loan Offers.
                                    </h4>
                                    <p class="mt-0 color--grey">Unlock Offers with Our Expert Consultation!
                                    </p>
                                </div>
                            </div>
                        </div>


                        <form action="{{ route('loan.agent.buyNow') }}" id="unlockOffersForm"
                            class="contact-form save-form-5" novalidate="novalidate" method="post"
                            accept-charset="utf-8">
                            @csrf
                            <div class="integrations-1-wrapper">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <span class="badge badge-success w-100 text-start"
                                            style="border-radius: 12px 12px 0 0;">Most Recommended Offer*</span>
                                        <div id="fb-12-3" class="fbox-12 bg--white-100 block-shadow r-12 mb-20">
                                            <!-- Icon -->
                                            <div class="fbox-ico">
                                                <div class="shape-ico">
                                                    <img class="p-0"
                                                        src="https://manage.kreditsathi.com/public/upload/banks/{{ $offersData[0]['bank_image'] }}"
                                                        alt="bank" width="160">
                                                </div>
                                            </div> <!-- End Icon -->

                                            <!-- Text -->
                                            <div class="fbox-txt">
                                                <h6 class="s-12">Loan Amount</h6>
                                                <p class="s-14 text-black">&#8377;
                                                    {{ formatePriceIndia($offersData[0]['loanAmount']) }}</p>
                                                <hr class="custm-HR" />

                                                <h6 class="s-12">Max Tenure</h6>
                                                <p class="s-14 text-black">{{ $offersData[0]['tenures'] }} Months</p>
                                                {{-- <hr class="custm-HR" />

                                                <h6 class="s-12">Best Rate</h6>
                                                <p class="s-14 text-black">{{ $offersData[0]['roi'] }}% P.A</p> --}}
                                            </div>
                                        </div>
                                    </div>

                                    @foreach($offersData as $index => $item)
                                    @if($index == 1)
                                    @continue
                                    @endif

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <span class="badge badge-success w-100 text-start"
                                            style="border-radius: 12px 12px 0 0;">Most Recommended Offer*</span>
                                        <div class="lock-icon">
                                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M5.25 10.0546V8C5.25 4.27208 8.27208 1.25 12 1.25C15.7279 1.25 18.75 4.27208 18.75 8V10.0546C19.8648 10.1379 20.5907 10.348 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.40931 10.348 4.13525 10.1379 5.25 10.0546ZM6.75 8C6.75 5.10051 9.10051 2.75 12 2.75C14.8995 2.75 17.25 5.10051 17.25 8V10.0036C16.867 10 16.4515 10 16 10H8C7.54849 10 7.13301 10 6.75 10.0036V8ZM8 17C8.55228 17 9 16.5523 9 16C9 15.4477 8.55228 15 8 15C7.44772 15 7 15.4477 7 16C7 16.5523 7.44772 17 8 17ZM12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17ZM17 16C17 16.5523 16.5523 17 16 17C15.4477 17 15 16.5523 15 16C15 15.4477 15.4477 15 16 15C16.5523 15 17 15.4477 17 16Z"
                                                    fill="#1C274C" />
                                            </svg>
                                        </div>

                                        <div id="fb-12-3"
                                            class="fbox-12 bg--white-100 block-shadow r-12 mb-20 lockoffers">
                                            <!-- Icon -->
                                            <div class="fbox-ico">
                                                <div class="shape-ico">
                                                    <img class="p-0"
                                                        src="https://manage.kreditsathi.com/public/upload/banks/{{ $item['bank_image'] }}"
                                                        alt="bank" width="160">
                                                </div>
                                            </div> <!-- End Icon -->

                                            <!-- Text -->
                                            <div class="fbox-txt">
                                                <h6 class="s-12">Loan Amount</h6>
                                                <p class="s-14 text-black">&#8377;
                                                    {{ formatePriceIndia($item['loanAmount']) }}</p>
                                                <hr class="custm-HR" />

                                                <h6 class="s-12">Max Tenure</h6>
                                                <p class="s-14 text-black">-- Months</p>
                                                {{-- <hr class="custm-HR" />

                                                <h6 class="s-12">Best Rate</h6>
                                                <p class="s-14 text-black">-.--% P.M</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-12 form-btn mt-4">
                                <button type="submit" class="custom-btn text-center submit unlockBtn w-100">
                                    <span class="btn-text fw-semibold">Unlock Your Offers!</span>
                                    <span class="btn-icon"> → </span>
                                </button>
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
    $('.unlockBtn').click(function() {
        var btn = $(this);
        btn.html(
            '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Unlock Your Offers!'
        ).prop('disabled', true);
        setTimeout(function() {
            window.location.href = `{{ route('loan.agent.buyNow') }}`;
        }, 2000); // Delay of 3 seconds (3000 milliseconds)
    });

    function toggleAccordion() {
        if ($(window).width() <= 767) {
            $("#flush-collapseOne").removeClass("show"); // Collapse for small screens
        } else {
            $("#flush-collapseOne").addClass("show"); // Open for larger screens
        }
    }

    toggleAccordion(); // Call on page load
    $(window).resize(toggleAccordion); // Call on window resize
})
</script>
@endpush