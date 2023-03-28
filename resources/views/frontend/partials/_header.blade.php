<header id="header" class="header-transparent"
data-plugin-options="{'stickyScrollUp': true, 'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 42, 'stickyHeaderContainerHeight': 70}">
<div class="header-body header-body-bottom-border border-top-0 h-auto">
    <div class="header-container container p-static">
        <div class="header-row">
            <div class="header-column">
                <div class="header-row">
                    <div class="header-logo">
                        <a href="/">
                            <img src="{{ asset('frontend/img/demos/business-consulting-5/logo.png') }}"
                                class="img-fluid" width="123" height="33" alt="" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="header-column justify-content-end">
                <div class="header-row">
                    <div
                        class="header-nav header-nav-line header-nav-bottom-line header-nav-bottom-line-effect-1">
                        <div
                            class="header-nav-main header-nav-main-text-capitalize header-nav-main-square header-nav-main-arrows header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                            @include('frontend.partials.navigation.main-menu')
                        </div>
                    </div>

                    <ul class="header-extra-info d-none d-xxl-block mt-2 mx-3">
                        <li class="d-none d-sm-inline-flex ms-0 font-weight-semibold">
                            <div class="d-flex align-items-center">
                                <i class="icons icon-phone text-8 text-color-primary me-2"></i>
                                <a href="tel:+1234567890"
                                    class="text-decoration-none text-3 text-dark text-color-hover-primary">888
                                    123 4567</a>
                            </div>
                        </li>
                    </ul>

                    <a href="#"
                        class="btn btn-modern btn-primary box-shadow-6 border-0 text-transform-none btn-dash ms-3 d-none d-xl-inline-block">Get
                        Proposal</a>

                    <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                        data-bs-target=".header-nav-main nav">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</header>