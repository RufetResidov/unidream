@extends('frontend.layouts.main')
@section('content')
<div role="main" class="main">

    <section class="page-header page-header-modern bg-transparent">
        <div class="container pt-5 mt-5">
            <div class="row py-5">
                <div class="col text-center">
                    <h1 class="text-color-dark text-8 font-weight-bold">Services</h1>
                </div>
            </div>
        </div>
    </section>

    <aside class="nav-secondary bg-light pt-2 pb-0" id="navSecondary" data-plugin-sticky
        data-plugin-options="{'minWidth': 991, 'padding': {'top': 0}}">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabs tabs-bottom tabs-center tabs-simple m-0">
                        <ul class="nav nav-tabs nav-fill m-0">
                            <li class="nav-item m-0"><a class="nav-link" data-hash data-hash-offset="0"
                                    data-hash-offset-lg="100" href="#first">Web Marketing</a></li>
                            <li class="nav-item m-0"><a class="nav-link" data-hash data-hash-offset="0"
                                    data-hash-offset-lg="100" href="#second">Branding Services</a></li>
                            <li class="nav-item m-0"><a class="nav-link" data-hash data-hash-offset="0"
                                    data-hash-offset-lg="100" href="#third">Social Ads</a></li>
                            <li class="nav-item m-0"><a class="nav-link" data-hash data-hash-offset="0"
                                    data-hash-offset-lg="100" href="#forth">CRM and Sales</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <div class="container pt-4 pb-5 mb-5">
        <div class="row justify-content-center">
            <div class="col">
                <div id="first">
                    <div class="row align-items-center justify-content-around mt-0 mb-5">
                        <div class="col-lg-5 text-end p-relative pt-5 max-width-custom-1">
                            <div class="p-absolute right-0">
                                <div data-plugin-float-element
                                    data-plugin-options="{'startPos': 'top', 'speed': 10.0, 'transition': true, 'transitionDuration': 1000}">
                                    <img width="470" height="451"
                                        src="img/demos/business-consulting-5/svg/icon-bg-1.svg" alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': ''}" />
                                </div>
                            </div>
                            <div data-plugin-float-element
                                data-plugin-options="{'startPos': 'bottom', 'speed': 10.0, 'transition': true, 'transitionDuration': 1000}">
                                <img width="376" height="350" src="img/demos/business-consulting-5/svg/icon-1.svg"
                                    alt="" data-icon
                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary mt-5 pt-5'}" />
                            </div>
                        </div>
                        <div class="col-lg-4 text-center text-lg-start">
                            <h3 class="mt-5 pt-4">Improving Your <br />Web Marketing</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget eleifend dolor, et
                                maximus enim. Donec metus tellus, ornare in fermentum in, vulputate ut lorem.</p>
                            <a href="#"
                                class="btn btn-modern btn-primary box-shadow-6 border-0 text-transform-none btn-dash mt-2 py-3 px-5">Contact
                                Us</a>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-10 text-center">
                            <p class="pt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum eleifend
                                eros a pharetra. Cras aliquam vestibulum vehicula. Sed sed lectus risus. Vestibulum
                                maximus ac purus in euismod. In venenatis tellus ante, id porta risus semper quis.
                                Aenean vel posuere urna, sit amet placerat massa. Quisque efficitur interdum libero, sed
                                dictum lorem euismod sed.</p>
                        </div>
                    </div>

                </div>
                <div class="pt-5">
                    <hr class="my-5">
                </div>
                <div id="second">

                    <div class="row align-items-center justify-content-around mt-0 mb-5">
                        <div class="col-lg-4 text-center text-lg-start">
                            <h3 class="mt-5 pt-4">Ongoing analysis of your<br>Branding Services</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget eleifend dolor, et
                                maximus enim. Donec metus tellus, ornare in fermentum in, vulputate ut lorem.</p>
                            <a href="#"
                                class="btn btn-modern btn-secondary box-shadow-6 border-0 text-transform-none btn-dash mt-2 py-3 px-5">Contact
                                Us</a>
                        </div>
                        <div class="col-lg-5 p-relative pt-5 max-width-custom-1">
                            <div class="p-absolute left-0">
                                <div data-plugin-float-element
                                    data-plugin-options="{'startPos': 'top', 'speed': 10.0, 'transition': true, 'transitionDuration': 1000}">
                                    <img width="470" height="451"
                                        src="img/demos/business-consulting-5/svg/icon-bg-2.svg" alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': ''}" />
                                </div>
                            </div>
                            <div data-plugin-float-element
                                data-plugin-options="{'startPos': 'bottom', 'speed': 10.0, 'transition': true, 'transitionDuration': 1000}">
                                <img width="376" height="350" src="img/demos/business-consulting-5/svg/icon-2.svg"
                                    alt="" data-icon
                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary mt-5 pt-5'}" />
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-10 text-center">
                            <p class="pt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum eleifend
                                eros a pharetra. Cras aliquam vestibulum vehicula. Sed sed lectus risus. Vestibulum
                                maximus ac purus in euismod. In venenatis tellus ante, id porta risus semper quis.
                                Aenean vel posuere urna, sit amet placerat massa. Quisque efficitur interdum libero, sed
                                dictum lorem euismod sed.</p>
                        </div>
                    </div>
                </div>
                <div class="pt-5">
                    <hr class="my-5">
                </div>
                <div id="third">
                    <div class="row align-items-center justify-content-around mt-0 mb-5">
                        <div class="col-lg-5 text-end p-relative pt-5 max-width-custom-1">
                            <div class="p-absolute right-0">
                                <div data-plugin-float-element
                                    data-plugin-options="{'startPos': 'top', 'speed': 10.0, 'transition': true, 'transitionDuration': 1000}">
                                    <img width="470" height="451"
                                        src="img/demos/business-consulting-5/svg/icon-bg-1.svg" alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': ''}" />
                                </div>
                            </div>
                            <div data-plugin-float-element
                                data-plugin-options="{'startPos': 'bottom', 'speed': 10.0, 'transition': true, 'transitionDuration': 1000}">
                                <img width="376" height="350" src="img/demos/business-consulting-5/svg/icon-1.svg"
                                    alt="" data-icon
                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary mt-5 pt-5'}" />
                            </div>
                        </div>
                        <div class="col-lg-4 text-center text-lg-start">
                            <h3 class="mt-5 pt-4">Get Better <br />Social Ads</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget eleifend dolor, et
                                maximus enim. Donec metus tellus, ornare in fermentum in, vulputate ut lorem.</p>
                            <a href="#"
                                class="btn btn-modern btn-primary box-shadow-6 border-0 text-transform-none btn-dash mt-2 py-3 px-5">Contact
                                Us</a>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-10 text-center">
                            <p class="pt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum eleifend
                                eros a pharetra. Cras aliquam vestibulum vehicula. Sed sed lectus risus. Vestibulum
                                maximus ac purus in euismod. In venenatis tellus ante, id porta risus semper quis.
                                Aenean vel posuere urna, sit amet placerat massa. Quisque efficitur interdum libero, sed
                                dictum lorem euismod sed.</p>
                        </div>
                    </div>

                </div>
                <div class="pt-5">
                    <hr class="my-5">
                </div>
                <div id="forth">

                    <div class="row align-items-center justify-content-around mt-0 mb-5">
                        <div class="col-lg-4 text-center text-lg-start">
                            <h3 class="mt-5 pt-4">Smart ways for<br>CRM and Sales</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget eleifend dolor, et
                                maximus enim. Donec metus tellus, ornare in fermentum in, vulputate ut lorem.</p>
                            <a href="#"
                                class="btn btn-modern btn-secondary box-shadow-6 border-0 text-transform-none btn-dash mt-2 py-3 px-5">Contact
                                Us</a>
                        </div>
                        <div class="col-lg-5 p-relative pt-5 max-width-custom-1">
                            <div class="p-absolute left-0">
                                <div data-plugin-float-element
                                    data-plugin-options="{'startPos': 'top', 'speed': 10.0, 'transition': true, 'transitionDuration': 1000}">
                                    <img width="470" height="451"
                                        src="img/demos/business-consulting-5/svg/icon-bg-2.svg" alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': ''}" />
                                </div>
                            </div>
                            <div data-plugin-float-element
                                data-plugin-options="{'startPos': 'bottom', 'speed': 10.0, 'transition': true, 'transitionDuration': 1000}">
                                <img width="376" height="350" src="img/demos/business-consulting-5/svg/icon-2.svg"
                                    alt="" data-icon
                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary mt-5 pt-5'}" />
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-10 text-center">
                            <p class="pt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum eleifend
                                eros a pharetra. Cras aliquam vestibulum vehicula. Sed sed lectus risus. Vestibulum
                                maximus ac purus in euismod. In venenatis tellus ante, id porta risus semper quis.
                                Aenean vel posuere urna, sit amet placerat massa. Quisque efficitur interdum libero, sed
                                dictum lorem euismod sed.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="pt-5">
            <hr class="my-5">
        </div>

        <div class="row justify-content-end pt-5 pb-4">
            <div class="col-lg-11">
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="img/demos/business-consulting-5/icons/icon-1.png" class="img-fluid" alt="">
                            </div>
                            <div class="flex-grow-1 ms-4">
                                <h4 class="text-4">Lead Management</h4>
                                <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget
                                    eleifend dolor, et maximus enim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="img/demos/business-consulting-5/icons/icon-2.png" class="img-fluid" alt="">
                            </div>
                            <div class="flex-grow-1 ms-4">
                                <h4 class="text-4">Conversion Optimization</h4>
                                <p class="text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget
                                    eleifend dolor, et maximus enim.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section bg-dark m-0 border-0">
        <div class="container py-5">
            <div class="row py-5 justify-content-center">
                <div class="col-lg-6 text-center py-5">
                    <h3 class="mb-4 text-color-light">Ready To Transform Your Small Business Marketing?</h3>
                    <p class="text-4 text-light line-height-4 opacity-6 mb-4">Lorem ipsum dolor sit amet, consectetur
                        lorem ipsum aipiscing anc vivita consectetur lorem ipsum aipiscing anc vivita consectetur lorem
                        ipsum aipiscing anc vivita.</p>

                    <div class="hstack d-block d-lg-flex gap-3">
                        <div class="ms-auto">
                            <i class="icons icon-envelope text-color-primary text-8 p-relative top-12 me-2"></i>
                            <a href="https://www.okler.net/cdn-cgi/l/email-protection#5c2533291c3833313d3532723f3331"
                                class="text-decoration-none text-5 text-primary text-color-hover-light ws-nowrap font-weight-semi-bold"><span
                                    class="__cf_email__"
                                    data-cfemail="0676697472694662696b676f682865696b">[email&#160;protected]</span></a>
                        </div>
                        <div class="vr mx-4 p-relative top-10 d-none d-lg-inline-block"></div>
                        <div class="me-auto mt-3 mt-lg-0">
                            <i class="icons icon-phone text-color-primary text-8 p-relative top-10 me-2"></i>
                            <a href="tel:+1234567890"
                                class="text-decoration-none text-5 text-primary text-color-hover-light ws-nowrap font-weight-semi-bold">888
                                123 4567</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</div>
@endsection