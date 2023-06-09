@extends('frontend.layouts.main')
@section('content')
<div role="main" class="main">

    <div class="custom-wrapper-1 p-relative">
        <div class="container p-relative z-index-9">
            <div class="row justify-content-between align-items-center min-vh-100">
                <div class="col-xxl-5 text-center text-xxl-start custom-col-1 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                    <h3 class="text-12">Best Strategies to Get the Real Best Digital Marketing <mark
                            class="bg-transparent p-0 mark mark-gradient mark-gradient-primary">Results.</mark>
                    </h3>
                    <p class="text-4 line-height-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Proin eget eleifend dolor, et maximus enim.</p>
                    <a href="#"
                        class="btn btn-modern btn-secondary box-shadow-6 border-0 text-transform-none btn-dash mt-2 py-3 px-5">Our
                        Services</a>
                </div>
                <div class="col-xxl-5 align-self-end pb-4">
                    <div class="card border-radius bg-color-light border-0 box-shadow-1 mb-5 appear-animation"
                        data-appear-animation="fadeIn" data-appear-animation-delay="700">
                        <div class="card-body p-5 m-2 text-center">
                            <h4 class="card-title mb-2 text-6">Book Discovery Call!</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                            <form class="contact-form"
                                action="https://www.okler.net/previews/porto/9.9.2/php/contact-form.php" method="POST">
                                <div class="contact-form-success alert alert-success d-none mt-4">
                                    <strong>Success!</strong> Your message has been sent to us.
                                </div>

                                <div class="contact-form-error alert alert-danger d-none mt-4">
                                    <strong>Error!</strong> There was an error sending your message.
                                    <span class="mail-error-message text-1 d-block"></span>
                                </div>

                                <div class="row">
                                    <div class="form-group col text-start">
                                        <input type="text" value="" placeholder="Your Name *"
                                            data-msg-required="Please enter your name." maxlength="100"
                                            class="form-control text-2-5 p-3" name="name" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col text-start">
                                        <input type="text" value="" placeholder="Your Phone *"
                                            data-msg-required="Please enter your phone" maxlength="100"
                                            class="form-control text-2-5 p-3" name="phone" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <div class="d-grid gap-2">
                                            <input type="submit" value="Get Started"
                                                class="btn border-0 btn-tertiary bg-hover-primary text-color-hover-light text-color-primary text-3-5 p-3"
                                                data-loading-text="Loading...">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col pt-4">
                                        <div class="hstack gap-3">
                                            <div class="ms-auto">
                                                <i class="icons icon-envelope text-4 p-relative top-5 me-2"></i>
                                                <a href="https://www.okler.net/cdn-cgi/l/email-protection#91e8fee4d1f5fefcf0f8ffbff2fefc"
                                                    class="text-decoration-none text-2 text-dark text-color-hover-primary ws-nowrap font-weight-semi-bold"><span
                                                        class="__cf_email__"
                                                        data-cfemail="3949564b4d56795d5654585057175a5654">[email&#160;protected]</span></a>
                                            </div>
                                            <div class="vr"></div>
                                            <div class="me-auto">
                                                <i class="icons icon-phone text-4 p-relative top-5 me-2"></i>
                                                <a href="tel:+1234567890"
                                                    class="text-decoration-none text-2 text-dark text-color-hover-primary ws-nowrap font-weight-semi-bold">888
                                                    123 4567</a>
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

        <div class="hero d-none d-lg-block text-center pt-5">
            <div class="pt-4 mt-2 z-index-8 p-relative appear-animation" data-appear-animation="fadeIn"
                data-appear-animation-delay="500">
                <img class="img-fluid mt-5"
                    src="{{ asset('frontend/img/demos/business-consulting-5/backgrounds/background-3.jpg') }}" alt="" />
            </div>
            <div class="p-absolute custom-el-pos-1 d-none z-index-8 d-xl-block appear-animation"
                data-appear-animation="fadeIn" data-appear-animation-delay="500">
                <div data-plugin-float-element
                    data-plugin-options="{'startPos': 'bottom', 'speed': 1.8, 'transition': true, 'transitionDuration': 1000}">
                    <img class="img-fluid"
                        src="{{ asset('frontend/img/demos/business-consulting-5/backgrounds/background-4.png') }}"
                        alt="" />
                </div>
            </div>
            <div class="p-absolute custom-el-pos-2 d-none z-index-8 d-xl-block appear-animation"
                data-appear-animation="fadeIn" data-appear-animation-delay="500">
                <div data-plugin-float-element
                    data-plugin-options="{'startPos': 'bottom', 'speed': 1.2, 'transition': true, 'transitionDuration': 1000}">
                    <img class="img-fluid"
                        src="{{ asset('frontend/img/demos/business-consulting-5/backgrounds/background-5.png') }}"
                        alt="" />
                </div>
            </div>

            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                <div class="p-absolute z-index-6 top-0 right-0">
                    <img width="1100" height="770"
                        src="{{ asset('frontend/img/demos/business-consulting-5/svg/hero-bg-1.svg') }}" alt="" data-icon
                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-quaternary'}" />
                </div>

                <div class="p-absolute z-index-5 top-0 right-0">
                    <img width="1100" height="770"
                        src="{{ asset('frontend/img/demos/business-consulting-5/svg/hero-bg-2.svg') }}" alt="" data-icon
                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-tertiary'}" />
                </div>

                <div class="p-absolute z-index-4 top-0 right-0">
                    <img width="1100" height="770"
                        src="{{ asset('frontend/img/demos/business-consulting-5/svg/hero-bg-3.svg') }}" alt="" data-icon
                        data-plugin-options="{'onlySVG': true, 'extraClass': ''}" />
                </div>

                <div class="p-absolute z-index-3 top-0 right-0">
                    <img width="1100" height="770"
                        src="{{ asset('frontend/img/demos/business-consulting-5/svg/hero-bg-4.svg') }}" alt="" data-icon
                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                </div>

                <div class="p-absolute z-index-2 top-0 right-0">
                    <img width="1100" height="770"
                        src="{{ asset('frontend/img/demos/business-consulting-5/svg/hero-bg-5.svg') }}" alt="" data-icon
                        data-plugin-options="{'onlySVG': true, 'extraClass': ''}" />
                </div>

                <div class="p-absolute z-index-1 top-0 right-0">
                    <img width="1100" height="770"
                        src="{{ asset('frontend/img/demos/business-consulting-5/svg/hero-bg-6.svg') }}" alt="" data-icon
                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary'}" />
                </div>
            </div>

        </div>

        <div class="marquee custom-marquee p-absolute" data-duration="120000" data-gap="10" data-duplicated="true"
            data-startVisible="true">
            <p class="m-0 py-2 custom-outline-text-style-1">MARKETING BUSINESS CONSULTING</p>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-around mt-5">
            <div class="col-lg-5 text-end p-relative pt-5 max-width-custom-1">
                <div class="p-absolute right-0">
                    <div data-plugin-float-element
                        data-plugin-options="{'startPos': 'top', 'speed': 10.0, 'transition': true, 'transitionDuration': 1000}">
                        <img width="470" height="451"
                            src="{{ asset('frontend/img/demos/business-consulting-5/svg/icon-bg-1.svg') }}" alt=""
                            data-icon data-plugin-options="{'onlySVG': true, 'extraClass': ''}" />
                    </div>
                </div>
                <div data-plugin-float-element
                    data-plugin-options="{'startPos': 'bottom', 'speed': 10.0, 'transition': true, 'transitionDuration': 1000}">
                    <img width="376" height="350"
                        src="{{ asset('frontend/img/demos/business-consulting-5/svg/icon-1.svg') }}" alt="" data-icon
                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary mt-5 pt-5'}" />
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-start">
                <h3 class="mt-5 pt-4">Improving Your <br />Content Marketing</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget eleifend dolor, et
                    maximus enim. Donec metus tellus, ornare in fermentum in, vulputate ut lorem.</p>
                <a href="#"
                    class="btn btn-modern btn-primary box-shadow-6 border-0 text-transform-none btn-dash mt-2 py-3 px-5">Learn
                    More</a>
            </div>
        </div>
        <div class="row align-items-center justify-content-around mt-5">
            <div class="col-lg-4 text-center text-lg-start">
                <h3 class="mt-5 pt-4">Ongoing analysis of your<br>industry competitors</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget eleifend dolor, et
                    maximus enim. Donec metus tellus, ornare in fermentum in, vulputate ut lorem.</p>
                <a href="#"
                    class="btn btn-modern btn-secondary box-shadow-6 border-0 text-transform-none btn-dash mt-2 py-3 px-5">Learn
                    More</a>
            </div>
            <div class="col-lg-5 p-relative pt-5 max-width-custom-1">
                <div class="p-absolute left-0">
                    <div data-plugin-float-element
                        data-plugin-options="{'startPos': 'top', 'speed': 10.0, 'transition': true, 'transitionDuration': 1000}">
                        <img width="470" height="451"
                            src="{{ asset('frontend/img/demos/business-consulting-5/svg/icon-bg-2.svg') }}" alt=""
                            data-icon data-plugin-options="{'onlySVG': true, 'extraClass': ''}" />
                    </div>
                </div>
                <div data-plugin-float-element
                    data-plugin-options="{'startPos': 'bottom', 'speed': 10.0, 'transition': true, 'transitionDuration': 1000}">
                    <img width="376" height="350"
                        src="{{ asset('frontend/img/demos/business-consulting-5/svg/icon-2.svg') }}" alt="" data-icon
                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary mt-5 pt-5'}" />
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <h3 class="mt-5 pt-4">A Few of the Companies We've Helped Grow...</h3>
            </div>
        </div>
        <div class="row align-items-center text-center my-5">
            <div class="col-sm-4 col-xl-2 mb-5 mb-xl-0">
                <img src="{{ asset('frontend/img/logos/logo-8.png') }}" alt class="img-fluid"
                    style="max-width: 90px;" />
            </div>
            <div class="col-sm-4 col-xl-2 mb-5 mb-xl-0">
                <img src="{{ asset('frontend/img/logos/logo-9.png') }}" alt class="img-fluid"
                    style="max-width: 140px; " />
            </div>
            <div class="col-sm-4 col-xl-2 mb-5 mb-xl-0">
                <img src="{{ asset('frontend/img/logos/logo-10.png') }}" alt class="img-fluid"
                    style="max-width: 140px; " />
            </div>
            <div class="col-sm-4 col-xl-2 mb-5 mb-lg-0">
                <img src="{{ asset('frontend/img/logos/logo-11.png') }}" alt class="img-fluid"
                    style="max-width: 140px; " />
            </div>
            <div class="col-sm-4 col-xl-2 mb-5 mb-lg-0">
                <img src="{{ asset('frontend/img/logos/logo-12.png') }}" alt class="img-fluid"
                    style="max-width: 100px; " />
            </div>
            <div class="col-sm-4 col-xl-2">
                <img src="{{ asset('frontend/img/logos/logo-13.png') }}" alt class="img-fluid"
                    style="max-width: 100px; " />
            </div>
        </div>
    </div>

    <div class="container-fluid my-5 py-5">
        <div class="row px-5 mb-4">
            <div class="col-md-6 col-xl-1-5 mb-4 mb-xl-0">

                <div data-plugin-float-element
                    data-plugin-options="{'startPos': 'bottom', 'speed': 10.0, 'transition': true, 'transitionDuration': 1000}">
                    <div class="card border-radius-0 bg-color-light border-0 box-shadow-1">
                        <div class="card-body py-3 px-2">
                            <div class="testimonial testimonial-style-4 border-0 box-shadow-none m-0 p-0">
                                <div class="testimonial-author pb-3">
                                    <div class="testimonial-author-thumbnail">
                                        <img src="{{ asset('frontend/img/clients/client-1.jpg"
                                            class="img-fluid rounded-circle') }}" alt="">
                                    </div>
                                    <p><strong class="font-weight-bold">John Smith</strong><span>CEO & Founder -
                                            Okler</span></p>
                                </div>
                                <div class="px-4 mx-2 pt-2 pb-3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit
                                        vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.</p>
                                    <p class="mb-0"><i class="fas fa-star text-color-primary text-2"></i><i
                                            class="fas fa-star text-color-primary text-2"></i><i
                                            class="fas fa-star text-color-primary text-2"></i><i
                                            class="fas fa-star text-color-primary text-2"></i><i
                                            class="fas fa-star text-color-primary text-2"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-xl-1-5 mb-4 mb-xl-0">

                <div data-plugin-float-element
                    data-plugin-options="{'startPos': 'top', 'speed': 10.0, 'transition': true, 'transitionDuration': 1000}">
                    <div class="card border-radius-0 bg-color-light border-0 box-shadow-1">
                        <div class="card-body py-3 px-2">
                            <div class="testimonial testimonial-style-4 border-0 box-shadow-none m-0 p-0">
                                <div class="testimonial-author pb-3">
                                    <div class="testimonial-author-thumbnail">
                                        <img src="{{ asset('frontend/img/clients/client-2.jpg"
                                            class="img-fluid rounded-circle') }}" alt="">
                                    </div>
                                    <p><strong class="font-weight-bold">John Smith</strong><span>CEO & Founder -
                                            Okler</span></p>
                                </div>
                                <div class="px-4 mx-2 pt-2 pb-3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit
                                        vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.</p>
                                    <p class="mb-0"><i class="fas fa-star text-color-primary text-2"></i><i
                                            class="fas fa-star text-color-primary text-2"></i><i
                                            class="fas fa-star text-color-primary text-2"></i><i
                                            class="fas fa-star text-color-primary text-2"></i><i
                                            class="fas fa-star text-color-primary text-2"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-xl-1-5 mb-4 mb-xl-0">

                <div data-plugin-float-element
                    data-plugin-options="{'startPos': 'bottom', 'speed': 10.0, 'transition': true, 'transitionDuration': 1000}">
                    <div class="card border-radius-0 bg-color-light border-0 box-shadow-1">
                        <div class="card-body py-3 px-2">
                            <div class="testimonial testimonial-style-4 border-0 box-shadow-none m-0 p-0">
                                <div class="testimonial-author pb-3">
                                    <div class="testimonial-author-thumbnail">
                                        <img src="{{ asset('frontend/img/clients/client-3.jpg"
                                            class="img-fluid rounded-circle') }}" alt="">
                                    </div>
                                    <p><strong class="font-weight-bold">John Smith</strong><span>CEO & Founder -
                                            Okler</span></p>
                                </div>
                                <div class="px-4 mx-2 pt-2 pb-3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit
                                        vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.</p>
                                    <p class="mb-0"><i class="fas fa-star text-color-primary text-2"></i><i
                                            class="fas fa-star text-color-primary text-2"></i><i
                                            class="fas fa-star text-color-primary text-2"></i><i
                                            class="fas fa-star text-color-primary text-2"></i><i
                                            class="fas fa-star text-color-primary text-2"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-xl-1-5 mb-4 mb-xl-0">

                <div data-plugin-float-element
                    data-plugin-options="{'startPos': 'top', 'speed': 10.0, 'transition': true, 'transitionDuration': 1000}">
                    <div class="card border-radius-0 bg-color-light border-0 box-shadow-1">
                        <div class="card-body py-3 px-2">
                            <div class="testimonial testimonial-style-4 border-0 box-shadow-none m-0 p-0">
                                <div class="testimonial-author pb-3">
                                    <div class="testimonial-author-thumbnail">
                                        <img src="{{ asset('frontend/img/clients/client-4.jpg"
                                            class="img-fluid rounded-circle') }}" alt="">
                                    </div>
                                    <p><strong class="font-weight-bold">John Smith</strong><span>CEO & Founder -
                                            Okler</span></p>
                                </div>
                                <div class="px-4 mx-2 pt-2 pb-3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit
                                        vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.</p>
                                    <p class="mb-0"><i class="fas fa-star text-color-primary text-2"></i><i
                                            class="fas fa-star text-color-primary text-2"></i><i
                                            class="fas fa-star text-color-primary text-2"></i><i
                                            class="fas fa-star text-color-primary text-2"></i><i
                                            class="fas fa-star text-color-primary text-2"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-xl-1-5 mb-4 mb-xl-0">

                <div data-plugin-float-element
                    data-plugin-options="{'startPos': 'bottom', 'speed': 10.0, 'transition': true, 'transitionDuration': 1000}">
                    <div class="card border-radius-0 bg-color-light border-0 box-shadow-1">
                        <div class="card-body py-3 px-2">
                            <div class="testimonial testimonial-style-4 border-0 box-shadow-none m-0 p-0">
                                <div class="testimonial-author pb-3">
                                    <div class="testimonial-author-thumbnail">
                                        <img src="{{ asset('frontend/img/clients/client-2.jpg"
                                            class="img-fluid rounded-circle') }}" alt="">
                                    </div>
                                    <p><strong class="font-weight-bold">John Smith</strong><span>CEO & Founder -
                                            Okler</span></p>
                                </div>
                                <div class="px-4 mx-2 pt-2 pb-3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit
                                        vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.</p>
                                    <p class="mb-0"><i class="fas fa-star text-color-primary text-2"></i><i
                                            class="fas fa-star text-color-primary text-2"></i><i
                                            class="fas fa-star text-color-primary text-2"></i><i
                                            class="fas fa-star text-color-primary text-2"></i><i
                                            class="fas fa-star text-color-primary text-2"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="section border-0 bg-quaternary p-relative my-5">

        <div class="parallax m-0 p-absolute top-0 left-0 w-100 h-100" data-plugin-parallax
            data-plugin-options="{'speed': 1.5, 'parallaxHeight': '100%', 'parallaxScale': true}"
            data-image-src="{{ asset('frontend/img/demos/business-consulting-5/backgrounds/background-1.jpg') }}"
            style="max-width: 700px; max-height: 640px;">
        </div>

        <div class="container mt-5">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <h3 class="my-5 ps-lg-5 ms-lg-4">Improving Your<br>Content Marketing</h3>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-lg-11 bg-color-light border-radius">

                    <div class="p-5 my-4">
                        <div class="row justify-content-between">
                            <div class="col-lg-4">
                                <div
                                    class="tabs tabs-vertical tabs-right tabs-navigation tabs-navigation-simple tabs-navigation-custom">
                                    <ul class="nav nav-tabs col-sm-3">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#tabsNavigationVertSimple1"
                                                data-bs-toggle="tab">Analytics Insights</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#tabsNavigationVertSimple2"
                                                data-bs-toggle="tab">Technology Transformation</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#tabsNavigationVertSimple3"
                                                data-bs-toggle="tab">Data Stewardship</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#tabsNavigationVertSimple4"
                                                data-bs-toggle="tab">Campaign Optimization</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#tabsNavigationVertSimple5"
                                                data-bs-toggle="tab">Lead Management</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="tab-pane tab-pane-navigation active" id="tabsNavigationVertSimple1">
                                    <p>Lorem ipsum dolor sit amet, adipiscing elit. Proin eget eleifend dolor,
                                        et maximus enim. Donec metus tellus, ornare in fermentum in, vulputate
                                        ut lorem, donec metus tellus, ornare in fermentum in, vulputate ut
                                        lorem.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget
                                        eleifend dolor, et maximus enim.</p>
                                    <a href="#"
                                        class="btn btn-modern btn-secondary box-shadow-6 border-0 text-transform-none btn-dash mt-2 py-3 px-5">Learn
                                        More</a>
                                </div>
                                <div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple2">
                                    <p>Do Lorem ipsum dolor sit amet, consectetur elit. Proin eget eleifend
                                        dolor, et maximus enim. Donec metus tellus, ornare in fermentum in,
                                        vulputate ut lorem, donec metus tellus, ornare in fermentum in,
                                        vulputate ut lorem.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget
                                        eleifend dolor, et maximus enim.</p>
                                    <a href="#"
                                        class="btn btn-modern btn-secondary box-shadow-6 border-0 text-transform-none btn-dash mt-2 py-3 px-5">Learn
                                        More</a>
                                </div>
                                <div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple3">
                                    <p>Ipsum dolor sit amet, consectetur adipiscing elit. Proin eget eleifend
                                        dolor, et maximus enim. Donec metus tellus, ornare in fermentum in,
                                        vulputate ut lorem, donec metus tellus, ornare in fermentum in,
                                        vulputate ut lorem.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget
                                        eleifend dolor, et maximus enim.</p>
                                    <a href="#"
                                        class="btn btn-modern btn-secondary box-shadow-6 border-0 text-transform-none btn-dash mt-2 py-3 px-5">Learn
                                        More</a>
                                </div>
                                <div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple4">
                                    <p>Dolor sit amet, consectetur adipiscing elit. Proin eget eleifend dolor,
                                        et maximus enim. Donec metus tellus, ornare in fermentum in, vulputate
                                        ut lorem, donec metus tellus, ornare in fermentum in, vulputate ut
                                        lorem.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget
                                        eleifend dolor, et maximus enim.</p>
                                    <a href="#"
                                        class="btn btn-modern btn-secondary box-shadow-6 border-0 text-transform-none btn-dash mt-2 py-3 px-5">Learn
                                        More</a>
                                </div>
                                <div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple5">
                                    <p>Sit amet, consectetur adipiscing elit. Proin eget eleifend dolor, et
                                        maximus enim. Donec metus tellus, ornare in fermentum in, vulputate ut
                                        lorem, donec metus tellus, ornare in fermentum in, vulputate ut lorem.
                                    </p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget
                                        eleifend dolor, et maximus enim.</p>
                                    <a href="#"
                                        class="btn btn-modern btn-secondary box-shadow-6 border-0 text-transform-none btn-dash mt-2 py-3 px-5">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="row justify-content-end pt-5 pb-4">
                <div class="col-lg-11">
                    <div class="row">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('frontend/img/demos/business-consulting-5/icons/icon-1.png') }}"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h4 class="text-4">Lead Management</h4>
                                    <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Proin eget eleifend dolor, et maximus enim.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('frontend/img/demos/business-consulting-5/icons/icon-2.png') }}"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h4 class="text-4">Conversion Optimization</h4>
                                    <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Proin eget eleifend dolor, et maximus enim.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container my-5 py-5">
        <div class="row">
            <div class="col text-center">
                <h3>Awards</h3>
            </div>
        </div>
        <div class="row text-center mt-4">
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <img src="{{ asset('frontend/img/demos/business-consulting-5/icons/icon-3.png') }}"
                    class="img-fluid mb-3" alt="">
                <h4 class="mb-1">Top Seo 2023</h4>
                <p>Porto Awards 2023</p>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <img src="{{ asset('frontend/img/demos/business-consulting-5/icons/icon-4.png') }}"
                    class="img-fluid mb-3" alt="">
                <h4 class="mb-1">Top Seo 2023</h4>
                <p>Porto Awards 2023</p>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <img src="{{ asset('frontend/img/demos/business-consulting-5/icons/icon-5.png') }}"
                    class="img-fluid mb-3" alt="">
                <h4 class="mb-1">Top Seo 2023</h4>
                <p>Porto Awards 2023</p>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <img src="{{ asset('frontend/img/demos/business-consulting-5/icons/icon-6.png') }}"
                    class="img-fluid mb-3" alt="">
                <h4 class="mb-1">Top Seo 2023</h4>
                <p>Porto Awards 2023</p>
            </div>
        </div>
    </div>

    <section class="section section-default border-0 p-0" data-inviewport-style
        data-plugin-options="{'style': {'background-color': '#FFFFFF'}, 'styleIn': {'background-color': '#393159'}, 'styleOut': {'background-color': '#FFFFFF'}, 'classIn': 'inner-text-light', 'modTop': '-300px', 'modBottom': '-300px'}">
        <div class="container">
            <div class="row justify-content-center min-vh-100 align-items-center">
                <div class="col-lg-4 text-center">
                    <h3 class="text-color-light">Be the #1 on <mark
                            class="text-color-light bg-transparent p-0 mark mark-gradient mark-gradient-primary">Google</mark>
                        with Competitive Keywords.</h3>
                    <p class="text-4 text-light line-height-4 opacity-6">Lorem ipsum dolor sit amet, consectetur
                        lorem ipsum aipiscing anc vivita.</p>
                    <a href="#"
                        class="btn btn-modern btn-light text-color-primary text-3 box-shadow-6 border-0 text-transform-none btn-dash mt-2 py-3 px-5">Our
                        Services</a>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-5 pt-5 mb-5">
        <div class="row align-items-end">
            <div class="col-lg-3 mb-4 mb-lg-0 text-center text-lg-start">
                <h3 class="m-0">Our Most Popular Articles and Posts</h3>
            </div>
            <div class="col-lg-9 text-center text-lg-end">
                <a href="#"
                    class="btn btn-modern btn-primary box-shadow-6 border-0 text-transform-none btn-dash m-0 py-3 px-5">Visit
                    Our Blog</a>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col">

                <div class="thumb-info-container-full-img">
                    <div class="owl-carousel p-relative owl-theme full-width m-0"
                        data-plugin-options="{'items': 4, 'loop': false, 'nav': true, 'dots': false}">
                        <div>
                            <a href="#">
                                <span
                                    class="thumb-info p-relative z-index-1 thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-dark-linear bg-transparent"
                                    data-full-width-img-src="{{ asset('frontend/img/demos/business-consulting-5/blog/blog-1-large.jpg') }}">
                                    <span
                                        class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content">
                                        <img src="{{ asset('frontend/img/demos/business-consulting-5/blog/blog-1-small.jpg') }}"
                                            class="img-fluid" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 text-5 pb-4 ps-4">This
                                                is the Blog Post</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <span
                                    class="thumb-info p-relative z-index-1 thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-dark-linear bg-transparent"
                                    data-full-width-img-src="{{ asset('frontend/img/demos/business-consulting-5/blog/blog-2-large.jpg') }}">
                                    <span
                                        class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content">
                                        <img src="{{ asset('frontend/img/demos/business-consulting-5/blog/blog-2-small.jpg') }}"
                                            class="img-fluid" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 text-5 pb-4 ps-4">This
                                                is the Blog Post</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <span
                                    class="thumb-info p-relative z-index-1 thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-dark-linear bg-transparent"
                                    data-full-width-img-src="{{ asset('frontend/img/demos/business-consulting-5/blog/blog-3-large.jpg') }}">
                                    <span
                                        class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content">
                                        <img src="{{ asset('frontend/img/demos/business-consulting-5/blog/blog-3-small.jpg') }}"
                                            class="img-fluid" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 text-5 pb-4 ps-4">This
                                                is the Blog Post</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <span
                                    class="thumb-info p-relative z-index-1 thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-dark-linear bg-transparent"
                                    data-full-width-img-src="{{ asset('frontend/img/demos/business-consulting-5/blog/blog-4-large.jpg') }}">
                                    <span
                                        class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content">
                                        <img src="{{ asset('frontend/img/demos/business-consulting-5/blog/blog-4-small.jpg') }}"
                                            class="img-fluid" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 text-5 pb-4 ps-4">This
                                                is the Blog Post</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <span
                                    class="thumb-info p-relative z-index-1 thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-dark-linear bg-transparent"
                                    data-full-width-img-src="{{ asset('frontend/img/demos/business-consulting-5/blog/blog-2-large.jpg') }}">
                                    <span
                                        class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content">
                                        <img src="{{ asset('frontend/img/demos/business-consulting-5/blog/blog-2-small.jpg') }}"
                                            class="img-fluid" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 text-5 pb-4 ps-4">This
                                                is the Blog Post</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="section bg-dark m-0 border-0">
        <div class="container py-5">
            <div class="row justify-content-between align-items-center py-5">
                <div class="col-lg-6 text-center text-lg-start py-5">
                    <h3 class="mb-4 text-color-light">Ready To Transform Your Small Business Marketing?</h3>
                    <p class="text-4 text-light line-height-4 opacity-6 mb-4">Lorem ipsum dolor sit amet,
                        consectetur lorem ipsum aipiscing anc vivita consectetur lorem ipsum aipiscing anc
                        vivita consectetur lorem ipsum aipiscing anc vivita.</p>

                    <i class="icons icon-phone text-8 text-color-primary me-2"></i>
                    <a href="tel:+1234567890"
                        class="text-decoration-none text-5 p-relative bottom-9 font-weight-semi-bold text-light text-color-hover-primary">888
                        123 4567</a>

                </div>
                <div class="col-lg-5 py-5">
                    <div class="card border-radius bg-color-light border-0 box-shadow-3">
                        <div class="card-body p-5 m-2 text-center">
                            <h4 class="card-title mb-2 text-6">Book Discovery Call!</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                            <form class="contact-form"
                                action="https://www.okler.net/previews/porto/9.9.2/php/contact-form.php" method="POST">
                                <div class="contact-form-success alert alert-success d-none mt-4">
                                    <strong>Success!</strong> Your message has been sent to us.
                                </div>

                                <div class="contact-form-error alert alert-danger d-none mt-4">
                                    <strong>Error!</strong> There was an error sending your message.
                                    <span class="mail-error-message text-1 d-block"></span>
                                </div>

                                <div class="row">
                                    <div class="form-group col text-start">
                                        <input type="text" value="" placeholder="Your Name *"
                                            data-msg-required="Please enter your name." maxlength="100"
                                            class="form-control text-2-5 p-3" name="name" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col text-start">
                                        <input type="text" value="" placeholder="Your Phone *"
                                            data-msg-required="Please enter your phone" maxlength="100"
                                            class="form-control text-2-5 p-3" name="phone" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <div class="d-grid gap-2">
                                            <input type="submit" value="Get Started"
                                                class="btn border-0 btn-tertiary bg-hover-primary text-color-hover-light text-color-primary text-3-5 p-3"
                                                data-loading-text="Loading...">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col pt-4">
                                        <div class="hstack gap-3">
                                            <div class="ms-auto">
                                                <i class="icons icon-envelope text-4 p-relative top-5 me-2"></i>
                                                <a href="https://www.okler.net/cdn-cgi/l/email-protection#7e07110b3e1a11131f1710501d1113"
                                                    class="text-decoration-none text-2 text-dark text-color-hover-primary ws-nowrap font-weight-semi-bold"><span
                                                        class="__cf_email__"
                                                        data-cfemail="30405f42445f70545f5d51595e1e535f5d">[email&#160;protected]</span></a>
                                            </div>
                                            <div class="vr"></div>
                                            <div class="me-auto">
                                                <i class="icons icon-phone text-4 p-relative top-5 me-2"></i>
                                                <a href="tel:+1234567890"
                                                    class="text-decoration-none text-2 text-dark text-color-hover-primary ws-nowrap font-weight-semi-bold">888
                                                    123 4567</a>
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

</div>
@endsection