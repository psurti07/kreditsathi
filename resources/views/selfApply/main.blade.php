@extends('layouts.selfapply')
@push('css')
{{-- write or link your css file and styles tag here --}}
<link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" type="text/css" />
<style>
.resend-otp-div a.disabled {
    pointer-events: none;
    cursor: not-allowed;
}

.bank-crousel {
    display: block !important;
}

.radio:checked {
    background: #52ba7a;
    border-color: #52ba7a;
}


.testimonials-carousel .owl-item img {
    width: 100% !important;
}

@media screen and (max-width: 767px) {
    .hero-section {
        padding-top: 10px !important;
    }
}

.input-group-text {
    color: #666;
    border: none;
    background-color: #E6EAF4 !important;
    line-height: 1.3;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;
}

.request-form .form-control:focus {
    background-color: #f5f6f8;
    border-color: #f5f6f8;
    border: none;
}

@media screen and (max-width:991px) {
    .input-group-text {
        padding: 1.06rem 1.06rem;
    }
}

@media screen and (min-width:992px) and (max-width:1199px) {
    .input-group-text {
        padding: 1rem 1rem;
        margin-top: 1px;
    }
}
</style>
@endpush
@section('content')
<section id="hero-201" class="bg--fixed bg-gredient-img">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 align-items-center m-auto self-apply-form mb-xl-0 mb-3">
                <div id="hero-8-form" class="r-24 mb-50">
                    <div class="d-flex justify-content-between align-items-center mb-20">
                        <div>
                            <h4 class="s-20 w-700 mb-0">Start Your Loan Journey
                            </h4>
                            <p class="s-16 m-0">Explore available loan options.</p>
                        </div>
                    </div>
                    <form method="post" action="{{ route('self.apply.send.otp') }}"
                        class="request-form save-form-1 needs-validation" novalidate>
                        <div class="row g-2">
                            <input type="hidden" name="loan_type" value="1">
                            <input type="hidden" name="acc_type" value="1" id="acc_type">
                            <input type="hidden" name="user_type" value="1">
                            {{-- <div class="col-md-12">
                                <div class="form-check ps-0">
                                    <div class="row gx-2">
                                        <div class="col-md-6 col-lg-6 col-sm-6 mb-2">
                                            <fieldset class="picker1">
                                                <label class="card" for="personalloan">
                                                    <input type="radio" name="loan_type" id="personalloan" value="1"
                                                        class="radio" checked>
                                                    <span class="plan-details">
                                                        <span class="plan-type color--green-500">Personal Loan</span>
                                                    </span>
                                                </label>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 mb-2">
                                            <fieldset class="picker1">
                                                <label class="card" for="businessloan">
                                                    <input type="radio" name="loan_type" id="businessloan" value="2"
                                                        class="radio">
                                                    <span class="plan-details">
                                                        <span class="plan-type color--green-500">Business Loan</span>
                                                    </span>
                                                </label>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group form-floating">
                                    <input type="hidden" name="acc_type" value="1" id="acc_type">

                                    <div class="mb-2">
                                        <select name="user_type" id="user_type" class="form-control form-select">
                                         
                                            <option value="1" data-loan="personal">Salaried</option>
                                            <option value="2" data-loan="personal">Self Employed</option>

                                           
                                            <option value="3" data-loan="business" style="display:none;">Small
                                                Business
                                            </option>
                                            <option value="4" data-loan="business" style="display:none;">Audited
                                                Report
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>  --}}
                            <div class="col-md-12">
                                <div class="input-group border r-12">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+91</span>
                                    </div>
                                    <input type="text" name="mobile" id="mobile" class="numeric-input form-control name"
                                        placeholder="Enter Your Mobile*" autocomplete="off" required maxlength="10"
                                        minlength="10" inputmode="numeric">
                                </div>
                                @component('components.ajax-error', ['field' => 'mobile'])
                                @endcomponent
                            </div>
                            <div class="col-md-12 form-btn">
                                <button type="submit" class="custom-btn text-center submit w-100" id="checkmodal">
                                    <span class="btn-text fw-semibold">Apply Now</span>
                                    <span class="btn-icon"> → </span>
                                </button>
                            </div>
                            <div class="col-md-12"><span class="text-danger" id="usererrormsg"></span></div>
                        </div>

                        <p class="mb-0 s-14 text-start text-dark d-flex align-items-start">
                            <input type="checkbox" name="promotion" id="promotion" class="custom-control-input mt-1"
                                value="1" required checked><label class="ms-1">I agree to the
                            <a href="{{ route('front.terms.conditions') }}" target="_blank"
                                class="text-dark text-decoration-none">Terms of Use</a> and <a
                                href="{{ route('front.privacy.policy') }}" class="text-dark text-decoration-none"
                                target="_blank">Privacy Policy</a> <a href="{{ route('front.home') }}"
                                class="text-dark text-decoration-none" target="_blank">Kreditsathi.com.</label></a>
                        </p>
                        <p class="mb-0 s-14 text-start text-dark d-flex align-items-start">
                            <input type="checkbox" name="promotion" id="promotion" class="custom-control-input mt-1"
                                value="1" required checked><label class="ms-1">I agree to receive promotional & informational
                            communications from Fintopcorporate through Emails, calls or SMS, RCS Services.</label>
                        </p>
                    </form>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-12 m-auto mb-0">
                <div class="img-block">
                    <img src="{{ asset('front/images/self-apply-img-01.png') }}" alt="kreditsathi"
                        class="img-fluid p-0 m-auto">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-80 ct-02 content-section division" id="company">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-5 col-md-6 col-12 text-center  mb-md-0 mb-4">
                <img src="{{ asset('front/images/self-loan-image.png') }}" alt="kreditsathi"
                    class="img-fluid p-0 m-auto">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="txt-block">
                    <span class="color--green-500 text-uppercase d-block">Three simple steps</span>
                    <h2 class="s-36 mb-5">From Details to Decision</h2>
                    <p class="">Share a few details, explore available options, and continue with the one that
                        suits
                        your requirements.
                    </p><a href="{{ route('self.apply.main') }}"
                        class="btn r-13 btn--green-400 hover--tra-black last-link mt-0">Check eligibility
                        <span class="fbox-ico ico-10"> <span
                                class="flaticon-right-arrow  ico-20 ms-1"></span></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Affiliate NBFCs section starts -->
<section id="integrations-2" class="py-80 integrations-section partner-section">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-5 col-md-6 col-12">
                <div class="txt-block">
                    {{-- <span class="text-uppercase color--yellow-500">Our Partners</span> --}}
                    <h2 class="s-28 mb-5 color--white">Meet Our Lending Network </h2>
                    <p class="s-16 color--white mt-0">Compare available options from multiple lending partners in one
                        place.</p>
                </div>
            </div>
            @php
            $lists = nbfcsList();
            @endphp
            <div class="col-lg-6 col-md-6 col-12">
                <div class="bank-crousel">
                    <div class="row">
                        <div class="col text-center">
                            <div class="owl-carousel brands-carousel-main emi-carousel mb-0">
                                {!! $lists['carousel'] !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Affiliate NBFCs section ends -->

<section id="features-6" class="py-80 features-section division features-card">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-40">
                    <h2 class="s-28 mb-5">Making Loan Choices Simpler</h2>
                    <p class="s-16 color--grey mt-0">Here's what sets us apart.</p>
                </div>
            </div>
        </div>
        <div class="fbox-wrapper text-center">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 gy-4">
                <div class="col">
                    <div class="fbox-8 fb-1 border mb-md-0 mb-2 p-0 card-img-1">
                        <div class="fbox-txt text-start p-4">
                            <h4 class="s-18 w-700 mb-2">Multiple Lending Partners</h4>
                            <p class="color--grey">Explore loan options available through our network of lending
                                partners.</p>
                        </div>
                        <div class="fbox-ico text-end mb-0">
                            <div class="img-block text-end">
                                <img src="{{ asset('front/images/card-1.png') }}" alt="kreditsathi"
                                    class="img-fluid p-0 mb-0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="fbox-8 fb-2  border mb-md-0 mb-2 card-img-2 p-0">
                        <div class="fbox-txt text-start p-4">
                            <h4 class="s-18 w-700 mb-2">Flexible Loan Options</h4>
                            <p class="color--grey">Compare available loan options and repayment plans based on
                                eligibility.</p>
                        </div>
                        <div class="fbox-ico text-end mb-0">
                            <div class="img-block text-end">
                                <img src="{{ asset('front/images/card-2.png') }}" alt="kreditsathi"
                                    class="img-fluid p-0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="fbox-8 fb-2 border mb-md-0 mb-2 card-img-3 p-0">
                        <div class="fbox-txt text-start p-4">
                            <h4 class="s-18 w-700 mb-2">Clear Loan Information</h4>
                            <p class="color--grey">Review applicable charges, repayment details, and key terms before
                                proceeding.</p>
                        </div>
                        <div class="fbox-ico text-end mb-0">
                            <div class="img-block text-end">
                                <img src="{{ asset('front/images/card-3.png') }}" alt="kreditsathi"
                                    class="img-fluid p-0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="fbox-8 fb-3 border mb-md-0 mb-2 card-img-4 p-0">
                        <div class="fbox-txt text-start p-4">
                            <h4 class="s-18 w-700 mb-2">Simple Online Process</h4>
                            <p class="color--grey">Check eligibility and explore available loan options through a
                                convenient online process.
                            </p>
                        </div>
                        <div class="fbox-ico text-end mb-0">
                            <div class="img-block text-end">
                                <img src="{{ asset('front/images/card-4.png') }}" alt="kreditsathi"
                                    class="img-fluid p-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="features-6" class="py-80 features-section division bg--blue-100 features-card">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-40">
                    <h2 class="s-28 mb-5">Why KreditSathi?</h2>
                    <p class="s-16 color--grey mt-0">Built around your convenience.</p>
                </div>
            </div>
        </div>
        <div class="fbox-wrapper text-center">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 gy-4">
                <div class="col">
                    <div class="fbox-8 fbox--hover fb-1 border shadow mb-md-0 mb-2 h-100 bg--yellow-500">
                        <div class="fbox-ico">
                            <div class="fbox-image r-14 ico-20">
                                <span class="flaticon-layers-1 lh-1 color--blue-500"></span>
                            </div>
                        </div>
                        <div class="fbox-txt text-start">
                            <h4 class="s-18 w-700 mb-2">Lending Partner Network</h4>
                            <p>Explore loan options available through our network of lending partners.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="fbox-8 fbox--hover fb-2  border shadow mb-md-0 mb-2 h-100 bg--yellow-500">
                        <div class="fbox-ico">
                            <div class="fbox-image r-14 ico-20">
                                <span class="flaticon-computer-1 lh-1 color--blue-500"></span>
                            </div>
                        </div>
                        <div class="fbox-txt text-start">
                            <h4 class="s-18 w-700 mb-2">Online Application Process</h4>
                            <p>Complete key application steps online at your convenience.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="fbox-8 fbox--hover fb-2 border shadow mb-md-0 mb-2 h-100 bg--yellow-500">
                        <div class="fbox-ico">
                            <div class="fbox-image r-14 ico-20">
                                <span class="flaticon-click-1 lh-1 color--blue-500"></span>
                            </div>
                        </div>
                        <div class="fbox-txt text-start">
                            <h4 class="s-18 w-700 mb-2">Self-Apply Feature</h4>
                            <p>Check eligibility and continue your application independently.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="fbox-8 fbox--hover fb-3 border shadow mb-md-0 mb-2 h-100 bg--yellow-500">
                        <div class="fbox-ico">
                            <div class="fbox-image r-14 ico-20">
                                <span class="flaticon-tech-support lh-1 color--blue-500"></span>
                            </div>
                        </div>
                        <div class="fbox-txt text-start">
                            <h4 class="s-18 w-700 mb-2">Hire Loan Agent</h4>
                            <p>Get assistance with application steps and documentation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="full-banner w-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
                <a href="{{ route('self.apply.main') }}"><img class="w-100 h-auto d-block"
    src="{{ asset('front/images/lending-page-middle.png') }}" alt="Banner"></a>
</div>
</div>
</div>
</section> --}}

<!-- Testimonioals section starts -->
<section id="reviews-1" class="py-80 shape--06 reviews-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
                <div class="section-title mb-40 text-start">
                    <h2 class="s-28 mb-5">What Our <span class="color--green-500">Customer Says</span></h2>
                    <p class="s-16 color--grey mt-0">Hear directly from our customers about their experiences with us.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Testimonials carousel start  -->
            @include('partials.front.testimonials')
            <!-- Testimonials carousel end  -->
        </div>
    </div>
</section>
<!-- Testimonioals section ends -->


<section id="statistic-1" class="pt-lg-0 pb-lg-0 pt-5 pb-md-5 statistic-section division bg--yellow-500">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-7 col-12">
                <div class="txt-block mb-10">

                    <h2 class="s-28 mb-5">Growing With Our Customers </h2>
                    <p class="s-16 mt-0">Helping customers explore loan options through a simple online platform.</p>
                </div>
                <div class="statistic-1-wrapper mt-25">
                    <div class="row justify-content-md-center row-cols-1 row-cols-sm-3 row-cols-md-3">
                        <div class="col">
                            <div id="sb-1-1" class="wow fadeInUp">
                                <div class="statistic-block d-block bg-transparent">
                                    <div class="statistic-block-digit text-sm-start text-center">
                                        <h3 class="statistic-number w-500"><span class="count-element">40</span>Million+
                                        </h3>
                                    </div>
                                    <div class="statistic-block-txt text-sm-start text-center">
                                        <p class="p-sm text-uppercase mt-0">Happy Users</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div id="sb-1-2" class="wow fadeInUp">
                                <div class="statistic-block d-block bg-transparent">
                                    <div class="statistic-block-digit text-sm-start text-center">
                                        <h3 class="statistic-number w-500"><span class="count-element">12000</span>Cr+
                                        </h3>
                                    </div>
                                    <div class="statistic-block-txt text-sm-start text-center">
                                        <p class="p-sm text-uppercase mt-0">Loans Disbursed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div id="sb-1-3" class="wow fadeInUp">
                                <div class="statistic-block d-block bg-transparent">
                                    <div class="statistic-block-digit text-sm-start text-center">
                                        <h3 class="statistic-number w-500"><span class="count-element">49000</span>+
                                        </h3>
                                    </div>
                                    <div class="statistic-block-txt text-sm-start text-center">
                                        <p class="p-sm text-uppercase mt-0">Pincodes Served</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-12">
                <div class="img-block">
                    <img src="{{ asset('front/images/customers-img.png') }}" alt="kreditsathi"
                        class="img-fluid p-0 m-auto">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-80 ct-02 content-section-main division">
    <div class="container">
        <div class="background-overlay p-md-5 p-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="txt-block">
                        <h2 class="s-28 mb-5 color--white">Explore Personal Loan Options Online</h2>
                        <p class="color--white"> Check eligibility and explore available loan options from
                            participating
                            lending
                            partners.
                        </p>
                        <a href="{{ route('self.apply.main') }}"
                            class="btn btn--yellow-400 r-13 hover--tra-black last-link">Apply Now
                            <span class="fbox-ico ico-10"> <span
                                    class="flaticon-right-arrow  ico-20 ms-1"></span></span></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="column-right">
                        <div class="cbox-1 ico-15 p-3 mb-2">
                            <div class="ico-wrap color--theme mt-1">
                                <div class="cbox-1-ico bg--yellow-500 rounded-pill"><span class="flaticon-check"></span>
                                </div>
                            </div>
                            <div class="cbox-1-txt ms-2">
                                <p class="my-0 color--white">Online Application Process</p>
                            </div>
                        </div>
                        <div class="cbox-1 ico-15 p-3 mb-2">
                            <div class="ico-wrap color--theme mt-1">
                                <div class="cbox-1-ico bg--yellow-500 rounded-pill"><span class="flaticon-check"></span>
                                </div>
                            </div>
                            <div class="cbox-1-txt ms-2">
                                <p class="my-0 color--white">Flexible Repayment Options</p>
                            </div>
                        </div>
                        <div class="cbox-1 ico-15 p-3 mb-2">
                            <div class="ico-wrap color--theme mt-1">
                                <div class="cbox-1-ico bg--yellow-500 rounded-pill"><span class="flaticon-check"></span>
                                </div>
                            </div>
                            <div class="cbox-1-txt ms-2">
                                <p class="my-0 color--white">Convenient Online Journey</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="faqs-3" class="pt-0 pb-80 faqs-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-40">
                    {{-- <span class="color--green-500 text-uppercase">Faq</span> --}}
                    <h2 class="s-28 mb-5">Frequently Asked Questions</span></h2>
                    <p class="s-16 color--grey mt-0">Checking your eligibility takes about 5 minutes. Once your
                        documents are verified by the lending partner, disbursal is usually completed within 24–48
                        working hours.
                    </p>
                </div>
            </div>
        </div>
        <div class="faqs-3-questions">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-xl-12">
                    <div class="accordion-wrapper">
                        <ul class="accordion">
                            <li class="accordion-item mb-0">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-600">Who is eligible to apply for a personal loan?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>Eligibility depends on factors like income, employment type, and credit
                                                profile, and is finally assessed by our lending partners based on their
                                                own criteria.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-0">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-600">Does KreditSathi lend money directly?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>No. KreditSathi is not a lender. We help you compare and apply to loan
                                                options offered by our partner NBFCs and lenders.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-0">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-600">What documents do I need to keep ready?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>Typically ID proof, address proof, income proof, and bank statements —
                                                the exact list may vary by lending partner.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item mb-0">
                                <div class="accordion-thumb">
                                    <h6 class="s-16 w-600">Is there any charge to check my eligibility?</h6>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-panel-item">
                                        <div class="faqs-2-answer">
                                            <p>Checking your eligibility on KreditSathi is free. Any applicable service
                                                charges are shared upfront before you proceed.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-60 shape--06 gr--smoke disclamair-section">
    <div class="container">
        <div class="row gx-10">
            <div class="col-md-6 col-lg-6 col-12">
                <div class="form-holder">
                    <div class="contact-form-notice">
                        <div class="d-flex">

                            <div>
                                <div class="fbox-ico">
                                    <div class="fbox-image r-14 ico-10 lh-1">
                                        <span class="flaticon-file lh-1 color--white"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="s-14 mb-3 ms-3">
                                <h6 class="color--white mb-1">Important Note</h6>
                                <p class="mt-0 color--white s-12">We ask our customers to make payments ONLY on our
                                    website
                                    kreditsathi.com and NOT through any other source, directly or indirectly.</p>
                            </div>
                        </div>
                        <div class="d-flex">

                            <div>
                                <div class="fbox-ico">
                                    <div class="fbox-image r-14 ico-10 lh-1">
                                        <i class="fas fa-exclamation-triangle color--white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="s-14 mb-3 ms-3">
                                <h6 class="color--white mb-1">Disclaimer </h6>
                                <p class="mt-0 color--white s-12">Kredit Sathi Private Limited is not a lender or
                                    financial
                                    institution. We do not provide loans or make credit decisions. All loan approvals,
                                    interest
                                    rates, fees, and disbursal are handled by third-party lenders/NBFCs. We do not
                                    guarantee
                                    loan approval, disbursal, or specific loan terms. The amount paid is only for the
                                    service
                                    charge. We are not lenders and do not guarantee any loan approval. Loan approval,
                                    disbursement/sanction is entirely dependent on NBFC criteria.</p>
                            </div>
                        </div>
                        <div class="d-flex">

                            <div>
                                <div class="fbox-ico">
                                    <div class="fbox-image r-14 ico-10 lh-1">
                                        <span class="flaticon-file lh-1 color--white"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="s-14 mb-3 ms-3">
                                <h6 class="color--white mb-1">Pre-Application Note </h6>
                                <p class="mt-0 color--white s-12">Users are advised to read our terms and conditions
                                    and policies before proceeding/applying/registration.</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div>
                                <div class="fbox-ico">
                                    <div class="fbox-image r-14 ico-10 lh-1">
                                        <span class="flaticon-file lh-1 color--white"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="s-14 mb-3 ms-3">
                                <h6 class="color--white mb-1">Disclosure </h6>
                                <p class="mt-0 color--white s-12">Loan tenure minimum 6 months & maximum 60 months; Maximum APR: 34% p.a.; processing fee: up to 2%. Representative example: ₹1,00,000 at 11.5% for 60 months with ₹2,000 processing fee — EMI ₹2,301, total interest ₹38,059, total repayment ₹1,38,059, indicative APR 14.41%.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-12">
                <div class="footer-links fl-4">
                    <div class="footer-info">
                        <img class="footer-logo" src="{{ asset('front/images/logo/logo-w.png') }}"
                            alt="{{ env('APP_NAME') }}" width="140" height="50" />
                    </div>
                    <!-- Title -->
                    <div class="d-flex mb-3">
                        <div>
                            <div class="fbox-ico">
                                <div class="fbox-image r-14 ico-10 lh-1">
                                    <i class="fas fa-map-pin color--white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h6 class="s-14 w-700 mt-0 kbz-h6 text-light" style="margin-bottom:5px!important;">
                                Registered
                                Office Address</h6>
                            <p class="footer-mail-link ico-25">
                            <p class="text-light">{{ env('COMPANY_ADDRESS') }}</p>
                            </p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div>
                            <div class="fbox-ico">
                                <div class="fbox-image r-14 ico-10 lh-1">
                                    <i class="fas fa-phone-volume color--white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h6 class="s-14 w-700 mt-0 kbz-h6 text-light" style="margin-bottom:5px!important;">
                                Phone</h6>
                            <p class="footer-mail-link ico-25">
                                <a href="tel:{{ str_ireplace(' ', '', env('COMPANY_MOBILE')) }}"
                                    class="text-light">{{ env('COMPANY_MOBILE') }}</a>
                            </p>
                        </div>
                    </div>
                    <!-- Mail Link -->
                    <div class="d-flex mb-3">
                        <div>
                            <div class="fbox-ico">
                                <div class="fbox-image r-14 ico-10 lh-1">
                                    <i class="fas fa-envelope color--white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h6 class="s-14 w-700 kbz-h6 text-light" style="margin-bottom:5px!important;">Email</h6>
                            <p class="footer-mail-link ico-25">
                                <a href="mailto:{{ env('INFO_EMAIL') }}" class="text-light">{{ env('INFO_EMAIL') }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!-- otp modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content p-30 r-24">
            <form action="{{ route('self.apply.verify.otp') }}" method="post"
                class="request-form save-form-2 needs-validation" novalidate>
                <div class="modal-body">
                    <div class="row">
                        <h6 class="s-26 w-600 mb-5">Verify your mobile</h6>
                        <p class="s-16 mb-3">We've sent a 4 digit OTP to
                            <span class="text-success w-600">+91 <span class="text-success w-600"
                                    id="mobileNumber"></span>
                                <a href="javascript:;" class="edit-phoneNumber" title="Edit Phone number">
                                    <svg width="40px" height="18px" viewBox="0 0 24.00 24.00" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" stroke="#949494">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0" />
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"
                                            stroke="#CCCCCC" stroke-width="0.43200000000000005" />
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M15.4998 5.50067L18.3282 8.3291M13 21H21M3 21.0004L3.04745 20.6683C3.21536 19.4929 3.29932 18.9052 3.49029 18.3565C3.65975 17.8697 3.89124 17.4067 4.17906 16.979C4.50341 16.497 4.92319 16.0772 5.76274 15.2377L17.4107 3.58969C18.1918 2.80865 19.4581 2.80864 20.2392 3.58969C21.0202 4.37074 21.0202 5.63707 20.2392 6.41812L8.37744 18.2798C7.61579 19.0415 7.23497 19.4223 6.8012 19.7252C6.41618 19.994 6.00093 20.2167 5.56398 20.3887C5.07171 20.5824 4.54375 20.6889 3.48793 20.902L3 21.0004Z"
                                                stroke="#949494" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>
                                    </svg>
                                </a>
                            </span>
                        </p>
                        <div class="otp-form text-start">
                            <label for="firstname"
                                class="position-static p-0 text-uppercase s-14 mb-2 color--grey text-start d-block">Enter
                                OTP</label>
                            <div class="otp-container">
                                <input type="text" class="otp-input" pattern="\d" maxlength="1" inputmode="numeric">
                                <input type="text" class="otp-input" pattern="\d" maxlength="1" disabled
                                    inputmode="numeric">
                                <input type="text" class="otp-input" pattern="\d" maxlength="1" disabled
                                    inputmode="numeric">
                                <input type="text" class="otp-input" pattern="\d" maxlength="1" disabled
                                    inputmode="numeric">
                                {{-- <input type="text" class="otp-input" pattern="\d" maxlength="1" disabled>
                                    <input type="text" class="otp-input" pattern="\d" maxlength="1" disabled> --}}
                            </div>
                        </div>
                        <span class="mt-2 s-12 text-success" id="msg">
                            <input type="hidden" id="verificationCode" name="otp" readonly>
                            <input type="hidden" id="acc_type" name="acc_type" readonly value="1">
                            <input type="hidden" id="loan_type" name="loan_type" readonly value="1">
                            <input class="form-check-input" value="1" type="hidden" id="flexCheckDefault1" checked
                                name="allow_sms" />
                            <input class="form-check-input" value="1" type="hidden" id="flexCheckDefault" checked
                                name="accept_tnc" />
                            <span class="text-danger f-w-400" id="invalidOtp" style="font-size:14px"></span>
                            @component('components.ajax-error', ['field' => 'otp'])
                            @endcomponent
                    </div>
                    <div class="row color--black resend-otp-div">
                        <div class="col-lg-6">
                            <p class="s-12 mt-0">Didn’t receive the code? <a href="javascript:;" id="resendOtp"
                                    class="text-success">Resend OTP</a>&nbsp;<span id="timer"
                                    class="text-success">(00:15)</span></p>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group form-floating">
                                <div class="d-flex align-items-center justify-content-end">
                                    <div class="color--theme">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                    <div class="title-text color--theme">
                                        <p class="fw-bold mb-0 ms-1 mt-0 color--theme s-14">Encrypted</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="custom-btn text-center submit w-100 text-black" id="otpBtn">
                    <span class="btn-text fw-semibold">Verify OTP</span>
                    <span class="btn-icon"> → </span>
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function() {
    const personalLoan = document.getElementById("personalloan");
    const businessLoan = document.getElementById("businessloan");

    const userTypeSelect = document.getElementById("user_type");
    const options = userTypeSelect.querySelectorAll("option");

    function toggleUserTypeOptions() {
        let type = "personal";
        if (businessLoan && businessLoan.checked) type = "business";

        // Show/Hide options based on loan type
        options.forEach(option => {
            if (option.dataset.loan === type) {
                option.style.display = "block";
            } else {
                option.style.display = "none";
            }
        });

        // If current selected option is hidden, select first visible one
        const selectedOption = userTypeSelect.options[userTypeSelect.selectedIndex];
        if (selectedOption.style.display === "none") {
            const firstVisible = [...options].find(opt => opt.style.display !== "none");
            if (firstVisible) userTypeSelect.value = firstVisible.value;
        }
    }

    // Run on load
    toggleUserTypeOptions();

    // Run on change
    if (personalLoan) personalLoan.addEventListener("change", toggleUserTypeOptions);
    if (businessLoan) businessLoan.addEventListener("change", toggleUserTypeOptions);
});
</script>

<script>
const sendOtpUrl = @json(route('self.apply.send.otp'));
</script>
<!-- write or link your script file and script tag here -->
<script src="{{ asset('front/js/selfApply.js') }}"></script>
<script>
window.onscroll = function() {
    const btn = document.getElementById("goTopBtn");
    btn.style.display = (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) ? "block" :
        "none";
};

// Scroll to top smoothly
function goToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}
</script>
@endpush