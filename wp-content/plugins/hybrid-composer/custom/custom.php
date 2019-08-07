<?php
// =============================================================================
// FRON-FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Variouse functions for the front-end.
// =============================================================================

function hc_set_theme_skin_multiple($skin) {

    $HC_SITE_FONTS = 'body, .adv-img p, .caption-bottom p, .adv-circle .caption p, .advs-box p, .list-blog p {
    font-family: [FONT-1], sans-serif;
    line-height: 23px;
    color: #757575;
    letter-spacing: .3px;
    font-size: 18px;
}';


    //SKIN: MINIMAL
    $minimal = 'footer .social-group i, .dropdown-menu > li > a:before, .navbar-nav > li.dropdown > a:after, .fa-li, i.icon, .counter-inverse .icon-box-cell p, .comment-list .name span, a.collapse-button:hover,
.list-items .list-item span, .timeline > li > .timeline-label p, .btn:hover i, .progress-circle .inner-circle .main, .bootgrid-table a.btn, .mega-menu .fa-ul .fa-li, li.panel-item .fa-li,
.fullpage-menu li.active i, .fullpage-menu li.active span, .fullpage-menu li:hover i, .fullpage-menu li:hover span, .icon-list .list-item i, .side-menu > li.active > a > i {
    color: ' . hc_get_setting('main-color') . ';
}

.adv-img-classic-box .caption-inner p.sub-text, .nav-tabs > li:hover > a, .nav-tabs > li:hover > a i, .nav-tabs > li.active > a, .nav-tabs > li.active > a i, .list-group-item:not(.active):hover,
.icon-menu .navbar-collapse ul.nav > li > a:hover i, header .btn-search:hover, .nav.ms-minimal > li.active > a, .icon-background.boxed-inverse:not(.bg-color) .i-background, .icon-box-cell > i,
 .dropdown.btn-group .active > a, .bootgrid-header .dropdown-item:hover, .navbar-default .navbar-nav > li > a:hover, .white .box-side-icon-small .icon-box i,
.side-menu .active > a, .sidebar-nav a:hover, .sidebar-nav a:focus, .sidebar-nav a:active, .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover,
.advs-box-top-icon .icon, .adv-img-full-content i.main-icon, .advs-box-multiple.boxed div i, div.call-action-box a,.woocommerce div.product p.price, .woocommerce div.product span.price,
div.call-action-box a.btn, .text-color,  .tag-row i, .btn-text:hover, .btn-text:hover i, .pagination > .active > a, .pagination > li > a:hover,
.datepicker-panel > ul > li:hover, .adv-img-button-content .caption i, .social-line .social-group i.circle:hover {
    color: ' . hc_get_setting('main-color') . ' !important;
}

[class*="col-md-"].boxed, .bg-color, .fa-angle-up.scroll-top, .niche-box-post.boxed .block-infos, .call-action-box, .white .img-box.adv-img-half-content .caption, .header-bootstrap,
.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt {
    background-color: ' . hc_get_setting('main-color') . ' !important;
}

i.circle, i.square, .social-group i.circle, .social-button i.circle, .header-base:not(.bg-cover), .timeline > li:hover > .timeline-badge, ul.side-menu li.active:before, #twosides-menu, .subline-bar,
.accordion-list .list-group-item:before, .section-bg-color .table > tbody > tr, .advs-box-multiple div.circle, .advs-box.boxed .advs-box-content, .advs-box.boxed, .box-social-page,
.advs-box-top-icon-img .icon,.woocommerce .product span.onsale {
    background-color: ' . hc_get_setting('main-color') . ';
}

    .section-bg-color .table > tbody > tr:hover, .section-bg-color .table-striped > tbody > tr:nth-of-type(odd), .popup-banner.full-width-top, .popup-banner.full-width-bottom,
.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover {
        background-color: ' . hc_get_setting('hover-color') . ' !important;
    }

.btn:hover, div.adv-img-side-content .btn:hover, div.adv-img-side-content .btn:hover i, .extra-content, .load-more-maso:hover, .nav.inner.ms-rounded li a:hover,
.nav.inner.ms-rounded li.active a, .datepicker-panel > ul > li.picked, .datepicker-panel > ul > li.picked:hover {
    border-color: ' . hc_get_setting('main-color') . ' !important;
    color: ' . hc_get_setting('main-color') . ' !important;
}

.navbar-nav > li > .dropdown-menu, .tab-box > .panel, .tab-box > .panel-box > .panel, .niche-box-team .content-box hr, hr.e, .datepicker-top-left, .datepicker-top-right {
    border-top-color: ' . hc_get_setting('main-color') . ' !important;
}

.tab-box.right .panel-box {
    border-right-color: ' . hc_get_setting('main-color') . ' !important;
}

.tab-box.left .nav-tabs, .mi-menu .sidebar-nav, .tab-box.left .panel-box {
    border-left-color: ' . hc_get_setting('main-color') . ' !important;
}

.accordion-list .list-group-item:hover, .list-items .list-item:hover, .mega-menu .nav-tabs li.active, .title-modern h2, .tab-box.inverse .panel {
    border-bottom-color: ' . hc_get_setting('main-color') . ' !important;
}

.section-bg-color .table > tbody > tr > td, .social-button i.circle,.title-modern h3 {
    border-color: ' . hc_get_setting('hover-color') . ' !important;
}

.white .quote-author, .white .icon-list .list-item i {
    color: ' . hc_get_setting('color-3') . ';
}

.white .pagination > li > a:hover, .white .pagination > .active > a, .white .btn:hover, .white .btn:hover i, .advs-box.boxed a.btn:hover, .white.advs-box-blog .tag-row i, .subline-bar ul li a:hover,
.white.advs-box-blog .tag-row span:after, .white.niche-box-post .tag-row i, .white.niche-box-post .tag-row span:after, header.bg-transparent .navbar-default .navbar-nav > li.active > a,
div.adv-img-side-content p {
    color: ' . hc_get_setting('color-3') . ' !important;
}

.white .btn:hover, .niche-box-post.boxed .block-infos {
    border-color: ' . hc_get_setting('color-3') . ' !important;
}

.white .load-more-maso:hover {
    color: ' . hc_get_setting('color-3') . ' !important;
    border-color: ' . hc_get_setting('color-3') . ' !important;
}

.header-slider .flex-control-paging li a.flex-active, .header-slider .flex-control-paging li a:hover {
    background-color: ' . hc_get_setting('color-3') . ' !important;
}

@media (max-width: 992px) {
    header.bg-transparent .navbar-default .navbar-nav > li.active > a {
        color: ' . hc_get_setting('hover-color') . ' !important;
    }
}';

    //SKIN: CONSTRUCTION
    $construction = '
    .btn,.album-box .caption, header .btn-default,.woocommerce .product span.onsale, .img-box.i-center i, .list-items .list-item span, .advs-box-side-img hr, .accordion-list .list-group-item:before, .block-infos .block-data, .pricing-table .pricing-price, .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus, .white.btn, .white .btn, .circle-button, .btn.circle-button, .header-bootstrap, .popup-banner .panel-body, .pagination > li > a, .pagination > li > span, .pagination > .disabled > a, .pagination > .disabled > a:focus, .header-title hr, .nav.inner.ms-rounded > li > a, .btn-default, .advs-box.boxed, .panel-default > .panel-heading, .panel-default .panel-footer, .advs-box-top-icon .icon, i.circle, .advs-box-multiple div.circle, .advs-box-side-img hr, .call-action-box, .title-base hr, .white .title-base hr, .header-video.white .title-base hr, .header-slider.white .title-base hr, .header-animation.white .title-base hr, .header-title.white .title-base hr, .nav.inner, .nav.inner.ms-mini, .popover-title, .bg-color, .title-base .scroll-top, .btn-default, .title-modern .scroll-top, i.square, .header-base, .popup-banner.full-width-top, .popup-banner.full-width-bottom, .progress-bar, .tagbox span {
        background-color: ' . hc_get_setting('main-color') . ';
    }

    .call-action-box, .pricing-table .pricing-name, .social-line .social-group i.circle,header .btn-default.btn, .bg-color,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt {
        background-color: ' . hc_get_setting('main-color') . ' !important;
    }

   .btn:hover, header .btn-default:hover, .btn-primary:active:hover, .btn-primary.active:hover, .open > .dropdown-toggle.btn-primary:hover,header .btn-default.btn:hover, .btn-primary:active:focus, .btn-primary.active:focus, .open > .dropdown-toggle.btn-primary:focus, .btn-primary:active.focus, .btn-primary.active.focus, .open > .dropdown-toggle.btn-primary.focus, .btn-primary:focus, .btn-primary.focus, .btn-primary.btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default, .pagination > li > a:focus, .circle-button:hover, .btn.circle-button:hover, .pagination > .active > a:hover, .pagination > .disabled > a:hover, .pagination > li > a:hover, .btn-default:hover, .nav.inner:not(.ms-minimal) > li:hover > a, .nav.inner > li.active > a, .nav.inner:not(.ms-minimal) .dropdown-menu, .nav.inner.ms-rounded li.active a, .minisocial-group.circle i:hover, .pagination > .active > a {
        background-color: ' . hc_get_setting('hover-color') . ';
        border-color: ' . hc_get_setting('hover-color') . ';
    }

    .btn-primary:focus, .btn-primary.focus, .slimScrollBar, .white.circle-button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover {
        background-color: ' . hc_get_setting('hover-color') . ' !important;
    }

    i.icon, .fullpage-menu .active i, .datepicker-panel > ul > li.picked, .datepicker-panel > ul > li.picked:hover, .navbar-nav.subheader-bootstrap .sub, footer h4, .quote-author, .box-menu-inner .icon-box i,
    .caption-bottom p, div.adv-img .caption-bottom p, .mi-menu li .fa, .advs-box-top-icon.boxed .icon, .fullpage-arrow.arrow-circle .arrow i, .btn-group.social-group i, .text-color,
    .accordion-list .list-group-item > a i .adv-img h2, .adv-img-classic-box h2, .mega-menu .fa-ul .fa-li, .adv-circle.adv-circle-center i, .mi-menu a > .fa,
    li.panel-item .fa-li, header .social-group a i, .icon-menu .navbar-collapse ul.nav i, .side-menu i, .side-menu i, .side-menu ul a i, .bs-menu li:hover > a, .bs-menu li.active > a,
    .hamburger-button:hover, .img-box.adv-circle i, .advs-box-side .icon, .advs-box-side-icon i, .tag-row i, .tag-row a i.circle, .social-group i.circle, .social-button i.circle,
    .niche-box-testimonails h5, .pricing-table .pricing-price, .pricing-table h3, .title-icon i, i, .fullpage-menu.white li.active a i, ul.list-texts li b, .timeline > li > .timeline-label h4,
    .footer-center .footer-title, .accordion-list .list-group-item > a.active, header .social-group a i.fa {
        color: ' . hc_get_setting('main-color') . ';
    }

    .footer-minimal .footer-title, .advs-box-top-icon.boxed .btn,.woocommerce div.product p.price, .woocommerce div.product span.price, .advs-box-top-icon.boxed .circle-button, div.call-action-box a, div.call-action-box a.btn, .text-color, .boxed .circle-button:hover i, .boxed .btn:hover i, .boxed .circle-button, .boxed .btn, .adv-img h2 {
        color: ' . hc_get_setting('main-color') . ' !important;
    }

    .half-side.left, .mi-menu .side-menu li.active, .tab-box.right .nav-tabs > li.active > a, .bs-menu li:hover > a, .bs-menu li.active > a, .side-menu.ms-minimal li:hover > a, .side-menu.ms-minimal li:hover > span, .adv-circle.adv-circle-center-2 .caption p, .side-menu.ms-simple li.active {
        border-right-color: ' . hc_get_setting('main-color') . ' !important;
    }

    .half-side.right, .tab-box.left .nav-tabs > li.active > a, .tab-box.left .nav-tabs > li.active > a:hover, .tab-box.left .nav-tabs > li.active > a:focus, .bs-menu.menu-left li:hover > a, .bs-menu.menu-left li.active > a, .bs-callout {
        border-left-color: ' . hc_get_setting('main-color') . ' !important;
    }

    .datepicker-top-left, .datepicker-top-right, .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus, .mi-menu .sidebar-nav {
        border-top-color: ' . hc_get_setting('main-color') . ' !important;
    }

        .tab-box.inverse .nav-tabs li.active a, .datepicker-top-left:before, .datepicker-top-right:before, .nav.ms-minimal > li.active > a, .nav.ms-minimal li a:hover, .popover.bottom > .arrow:after, .title-modern h1, .title-modern h2, .title-modern h3, .nav.ms-minimal > li:hover > a, .nav.ms-minimal > li.active > a {
            border-bottom-color: ' . hc_get_setting('main-color') . ' !important;
        }

    .twoside-open hr, header .input-group input, header .btn-default, .social-line .social-group i.circle, hr.e, div.call-action-box, .white.btn, .white .btn, .circle-button, .btn.circle-button, .advs-box.boxed, .pagination > .active > a:hover, .pagination > li.disabled > a:hover, .pagination > li > a:hover, .pagination > li > a:focus, .pagination > li > a, .pagination > li > span, .pagination > li.disabled > a, .nav.inner.ms-rounded li a, .btn-default, .btn, .advs-box.boxed .advs-box-content, .bs-panel, .block-infos .block-data, .tag-row i.circle, .niche-box-team .content-box hr, .call-action-box, .pagination > .active > a, .inner .dropdown-menu, .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus, .accordion-list .list-group-item > a.active, .social-group i.circle, .social-button i.circle, .accordion-list .list-group-item > a.active:hover {
        border-color: ' . hc_get_setting('main-color') . ';
    }';

    //SKIN: CREATIVE
    $creative = '
    .mega-menu h5, .title-base h1, .title-icon h2, .title-icon h1, .title-base.title-small h2, .title-modern h1, .title-modern h2, .title-modern h3, .list-items .list-item h3,
    .timeline-title, footer h4, footer h5, footer h6, .advs-box h2, .advs-box h3, .advs-box h4, h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h1 a, h2 a, h3 a,
    .advs-box.boxed-inverse .block-infos p.bd-day, .advs-box.boxed-inverse .block-infos p.bd-month, .adv-img-down-text h2 a, i.square, .advs-box-side .icon.circle, .advs-box-side .icon.square,
    .ms-minimal .dropdown-toggle i.caret, .caption-bottom p, div.adv-img .caption-bottom p, .inner-circle .main, .mi-menu li .fa, .advs-box-top-icon.boxed .icon, .fullpage-arrow.arrow-circle .arrow i,
    .title-icon-bg h2, .btn-group.social-group i, .accordion-list .list-group-item > a i, .text-color, i.circle,
    .mega-menu .fa-ul .fa-li, .fullpage-varrow.varrow-circle .arrow i, li.panel-item .fa-li, .side-menu i, i.icon,
    .side-menu ul a i, .list-blog h5, .bs-menu li:hover > a, .bs-menu li.active > a, .hamburger-button:hover, .advs-box-side .icon, .advs-box-side-icon i,
    .tag-row i, .tag-row a i.circle, .social-group i.circle, .social-button i.circle, .niche-box-testimonails h5, .pricing-table .pricing-price, .pricing-table h3, .title-icon i, i,
    .fullpage-menu.white li.active a i, .list-items .list-item span, ul.list-texts li b, .timeline > li > .timeline-label h4, .footer-center .footer-title, header .social-group a i.fa, .icon-box-cell label {
        color: ' . hc_get_setting('color-3') . ';
    }

        .footer-minimal .btn-group.social-group i, .datepicker-panel > ul > li.picked, .datepicker-panel > ul > li.picked:hover, h4 a, h5 a, .list-group-item.active, .list-group-item.active:hover, .list-group-item.active:focus, .form-box p, .icon-box-cell label, .advs-box.boxed-inverse, i.circle {
            color: ' . hc_get_setting('main-color') . ';
        }

    .full-width-menu .nav.inner > li > a, .full-width-menu .dropdown-menu > li > a, .advs-box-top-icon .icon, .advs-box-top-icon-img .icon,
    .footer-minimal, .footer-minimal p.footer-title {
        color: ' . hc_get_setting('main-color') . ' !important;
    }

    .full-width-menu .nav, .full-width-menu .nav.inner .dropdown-menu, .white .title-base hr, header .navbar-big,
    header .btn-default, .navbar-mini .navbar-form .btn-default, .search-box, .search-box input, .dropdown-menu,
    .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus, .white.btn, .white .btn, .circle-button,
    .btn.circle-button, .header-bootstrap, .popup-banner .panel-body, .box-menu-inner > .row, .pagination > li > a, .pagination > li > span,
    .pagination > .disabled > a, .header-title hr, .block-infos .block-comment, .nav.inner.ms-rounded > li > a, .btn-default, .advs-box.boxed,
    .panel-default > .panel-heading, .panel-default .panel-footer, .advs-box-multiple div.circle,.woocommerce .product span.onsale,
    .advs-box-side-img hr, .call-action-box, .title-base hr, .white .title-base hr, .header-video.white .title-base hr, .header-slider.white .title-base hr,
    .header-animation.white .title-base hr, .header-title.white .title-base hr, .nav.inner, .nav.inner.ms-mini, .popover-title, .input-group button, .btn,
    .bg-color, .title-base .scroll-top, .title-modern .scroll-top, i.square, .header-base, .popup-banner.full-width-top, .popup-banner.full-width-bottom,
    .popup-banner.full-width-top, .progress-bar, .tagbox span {
        background-color: ' . hc_get_setting('main-color') . ';
    }

        header .tab-box .nav-tabs li.active, .dropdown-menu .divider, .timeline > li > .timeline-badge, footer.footer-center, .navbar-default .navbar-toggle:hover,
        .navbar-default .navbar-toggle:focus, .nav.inner, .full-width-menu, .navbar-main, .side-menu-fixed, .navbar-inner .navbar-toggle, .navbar-inner .navbar-toggle:hover,
        .full-width-menu .dropdown-menu, .full-width-menu .nav.inner > li:hover > a, .full-width-menu .nav.inner > li.active > a, header .navbar-default .navbar-nav > .active > a,
        header .navbar-default .navbar-nav > li > a:hover,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt {
            background-color: ' . hc_get_setting('main-color') . ' !important;
        }

        .dropdown-submenu > .dropdown-menu, header .navbar, .btn-primary:focus, .btn-primary.focus, .advs-box-multiple div.circle, .slimScrollBar, .white.circle-button:hover, .white .btn:hover {
            background-color: ' . hc_get_setting('color-4') . ' !important;
        }

        .caption .btn, .caption .btn:hover, .pagination > .active > a, header .btn-default:hover, header .circle-button:hover, .box-menu-inner > .row, .btn-primary:active:hover, .btn-primary.active:hover, .open > .dropdown-toggle.btn-primary:hover, .btn-primary:active:focus, .btn-primary.active:focus, .open > .dropdown-toggle.btn-primary:focus, .btn-primary:active.focus, .btn-primary.active.focus, .open > .dropdown-toggle.btn-primary.focus, .btn-primary:focus, .btn-primary.focus, .btn-primary.btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default, .pagination > li > a:focus, .btn:hover, .pagination > .active > a:hover, .pagination > .disabled > a:hover, .pagination > li > a:hover, .btn-default:hover, .nav.inner:not(.ms-minimal) > li:hover > a, .nav.inner > li.active > a, .nav.inner:not(.ms-minimal) .dropdown-menu, .nav.inner.ms-rounded li.active a, .minisocial-group.circle i:hover, .pagination > .active > a {
            background-color: ' . hc_get_setting('hover-color') . ' !important;
            border-color: ' . hc_get_setting('hover-color') . ' !important;
        }

        .block-infos .block-data, .btn-default:hover, .side-menu-fixed .side-menu ul, .side-menu-fixed .panel, .side-menu-fixed .side-menu .active, header btn-default, header .navbar-form .input-group > .form-control,
        header .input-group input, header .navbar-mini, .header-base:not(.bg-cover), .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .inner .navbar-nav li:hover, .dropdown.btn-group .active > a, .dropdown.btn-group li:hover > a, .dropdown.btn-group .active > label, .dropdown.btn-group li:hover > label, .subline-bar, .dropdown-menu > li > a:focus, .menu-transparent:not(.scroll-css) li.dropdown:hover, .bg-transparent li.dropdown ul li:hover, header.bg-transparent .dropdown-menu {
            background-color: ' . hc_get_setting('hover-color') . ' !important;
        }

    .bs-menu li:hover > a, .bs-menu li.active > a, .side-menu.ms-minimal li:hover > a, .side-menu.ms-minimal li:hover > span, .adv-circle.adv-circle-center-2 .caption p {
        border-right-color: ' . hc_get_setting('main-color') . ' !important;
    }

    .bs-menu.menu-left li:hover > a, .bs-menu.menu-left li.active > a, .bs-callout {
        border-left-color: ' . hc_get_setting('main-color') . ' !important;
    }

    .datepicker-top-left:before, .datepicker-top-right:before, .popover.bottom > .arrow:after, .title-modern h1, .title-modern h2, .title-modern h3, .nav.ms-minimal > li:hover > a, .nav.ms-minimal > li.active > a, .advs-box-top-icon-img .img-box, .advs-box-multiple .img-box, .advs-box-top-icon-img .flexslider .slides > li, .advs-box-multiple .flexslider {
        border-bottom-color: ' . hc_get_setting('main-color') . ' !important;
    }

    .adv-img.boxed-inverse .caption-bottom, .datepicker-top-left, .datepicker-top-right {
        border-top-color: ' . hc_get_setting('main-color') . ' !important;
    }

    .input-group-addon, header .navbar, i.square, .side-menu-lateral .side-menu > li:not(.panel-item) ul, .adv-img.boxed-inverse, i.circle, .boxed-inverse .block-data, .advs-box.boxed-inverse,
    .advs-box-top-icon .icon, .form-control, header .minisocial-group i, .navbar-default .navbar-collapse, .navbar-default .navbar-form, .side-menu-fixed,
    .side-menu-fixed .panel, .side-menu.over li:hover > ul, .side-menu.over li.active > ul, .side-menu.over li:hover > ul.collapse, .advs-box.boxed a, .call-action-box .anima-button.circle-button,
    .boxed .social-group i.circle, .white.btn, .white .btn, .circle-button, .btn.circle-button, .advs-box.boxed, .box-menu-inner > .row, .pagination > .active > a:hover, .pagination > li.disabled > a:hover,
    .pagination > li > a:hover, .pagination > li > a:focus, .pagination > li > a, .pagination > li > span, .pagination > li.disabled > a, .nav.inner.ms-rounded li a, .btn-default,
    .btn, .advs-box.boxed .advs-box-content, .bs-panel, .block-infos .block-data, .tag-row i.circle, .niche-box-team .content-box hr, .call-action-box, .inner .dropdown-menu,
    .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus, .social-group i.circle, .social-button i.circle {
        border-color: ' . hc_get_setting('main-color') . ';
    }';

    //SKIN: ELEGANCE
    $elegance = '
    .icon-menu .navbar-collapse ul.nav > li:hover > a i, .icon-menu .navbar-collapse ul.nav > li.active > a i, .box-price h2, .text-color, .caption-bottom p,
    div.adv-img .caption-bottom p, .inner-circle .main, .mi-menu li .fa, .advs-box-top-icon.boxed .icon, .fullpage-arrow.arrow-circle .arrow i,
    .btn-group.social-group i, .accordion-list .list-group-item > a i, .adv-img h2, .adv-img-classic-box h2,.woocommerce .product span.onsale,
    .mega-menu .fa-ul .fa-li, .fullpage-varrow.varrow-circle .arrow i, .adv-circle.adv-circle-center i, .mi-menu a > .fa, li.panel-item .fa-li, header .social-group a i,
    .icon-menu .navbar-collapse ul.nav i, .side-menu i, .side-menu i, .side-menu ul a i, .list-blog h5, .bs-menu li:hover > a, .bs-menu li.active > a, .hamburger-button:hover,
    .advs-box-side .icon, .advs-box-side-icon i, .tag-row i, .tag-row a i.circle, .social-group i.circle, .social-button i.circle, .niche-box-testimonails h5, .pricing-table .pricing-price,
    .pricing-table h3, .title-icon i, i, .fullpage-menu.white li.active a i, .list-items .list-item span, ul.list-texts li b, .timeline > li > .timeline-label h4, .footer-center .footer-title,
    .accordion-list .list-group-item > a.active, header .social-group a i.fa, i.icon, .advs-box-top-icon .icon, .advs-box-top-icon-img .icon, h2.box-price {
        color: ' . hc_get_setting('main-color') . ';
    }

    .adv-circle.adv-circle-half i, .adv-circle.adv-circle-bottom i, .datepicker-panel > ul > li.picked, .text-color, .datepicker-panel > ul > li.picked:hover,.woocommerce div.product p.price, .woocommerce div.product span.price {
        color: ' . hc_get_setting('main-color') . ' !important;
    }

    .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus, .white.btn, .white .btn, .circle-button,
    .btn.circle-button, .header-bootstrap, .popup-banner .panel-body, .box-menu-inner > .row, .pagination > li > a, .pagination > li > span,
    .pagination > .disabled > a, .header-title hr, .nav.inner.ms-rounded > li > a, .btn-default, .advs-box.boxed, .section-slider .flexslider,
    .panel-default > .panel-heading, .panel-default .panel-footer, .advs-box-top-icon .icon.circle, i.circle, .advs-box-multiple div.circle,
    .call-action-box, .title-base hr, .white .title-base hr, .header-video.white .title-base hr, .header-slider.white .title-base hr,.btn,
    .header-animation.white .title-base hr, .header-title.white .title-base hr, .nav.inner, .nav.inner.ms-mini, .popover-title, .niche-box-testimonails-cloud p,
    .bg-color, .title-base .scroll-top, .title-modern .scroll-top, i.square, .header-base, .popup-banner.full-width-top, .popup-banner.full-width-bottom, .progress-bar, .tagbox span {
        background-color: ' . hc_get_setting('main-color') . ';
    }

        .btn-primary:active:hover, .btn-primary.active:hover, .open > .dropdown-toggle.btn-primary:hover, .btn-primary:active:focus, .btn-primary.active:focus, .open > .dropdown-toggle.btn-primary:focus, .btn-primary:active.focus, .btn-primary.active.focus, .open > .dropdown-toggle.btn-primary.focus, .btn-primary:focus, .btn-primary.focus, .btn-primary.btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default, .pagination > li > a:focus, .circle-button:hover, .btn.circle-button:hover, .pagination > .active > a:hover, .pagination > .disabled > a:hover, .pagination > li > a:hover, .btn-default:hover, .nav.inner:not(.ms-minimal) > li:hover > a, .nav.inner > li.active > a, .nav.inner:not(.ms-minimal) .dropdown-menu, .nav.inner.ms-rounded li.active a, .minisocial-group.circle i:hover, .pagination > .active > a {
            background-color: ' . hc_get_setting('hover-color') . ';
            border-color: ' . hc_get_setting('hover-color') . ';
        }

    .advs-box-top-icon .icon.circle,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt {
        background-color: ' . hc_get_setting('main-color') . ' !important;
    }

    .btn-primary:focus, .btn-primary.focus, .advs-box-multiple div.circle, .slimScrollBar, .white.circle-button:hover, .white .circle-button:hover, .boxed .circle-button:hover,
    .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover {
        background-color: ' . hc_get_setting('hover-color') . ' !important;
    }


    .tab-box.right .nav-tabs > li.active > a, .tab-box.right .nav-tabs > li.active > a:hover, .tab-box.right .nav-tabs > li.active > a:focus, .bs-menu li:hover > a, .bs-menu li.active > a, .side-menu.ms-minimal li:hover > a, .side-menu.ms-minimal li:hover > span {
        border-right-color: ' . hc_get_setting('main-color') . ' !important;
    }

    .tab-box.left .nav-tabs > li.active > a, .tab-box.left .nav-tabs > li.active > a:hover, .tab-box.left .nav-tabs > li.active > a:focus, .bs-menu.menu-left li:hover > a, .bs-menu.menu-left li.active > a, .bs-callout {
        border-left-color: ' . hc_get_setting('main-color') . ' !important;
    }

    .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus, .tab-box.inverse .nav-tabs li.active a,
    .nav-tabs.nav-justified > .active > a, .nav-tabs.nav-justified > .active > a:hover, .nav-tabs.nav-justified > .active > a:focus, .menu-top-logo .navbar-default .navbar-nav > .active > a,
    .datepicker-top-left:before, .datepicker-top-right:before, .title-modern h1, .title-modern h2, .title-modern h3, .nav.ms-minimal > li:hover > a, .nav.ms-minimal > li.active > a, .datepicker-top-left:before, .datepicker-top-right:before {
        border-bottom-color: ' . hc_get_setting('main-color') . ' !important;
    }

    .datepicker-top-left, .datepicker-top-right {
        border-top-color: ' . hc_get_setting('main-color') . ' !important;
    }

    hr.e, .white.btn, .white .btn, .circle-button, .btn.circle-button, .advs-box.boxed, .box-menu-inner > .row, .pagination > .active > a:hover, .pagination > li.disabled > a:hover, .pagination > li > a:hover, .pagination > li > a:focus, .pagination > li > a, .pagination > li > span, .pagination > li.disabled > a, .nav.inner.ms-rounded li a, .btn-default, .btn, .advs-box.boxed .advs-box-content, .bs-panel, .tag-row i.circle, .niche-box-team .content-box hr, .call-action-box, .pagination > .active > a, .inner .dropdown-menu, .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus, .social-group i.circle, .social-button i.circle, .accordion-list .list-group-item > a.active:hover {
        border-color: ' . hc_get_setting('main-color') . ';
    }

    .form-control:focus {
        border-color: ' . hc_get_setting('color-3') . ';
    }

    .adv-circle.adv-circle-half i.fa-star, .secondary-color, .secondary-color p, p.secondary-color, .secondary-color i, .img-box.adv-circle i, .adv-img-full-content h2,
    .adv-img-classic-box h2 {
        color: ' . hc_get_setting('color-3') . ' !important;
    }

    .white .title-base hr {
        background-color: ' . hc_get_setting('color-3') . ';
    }

    .white hr.e, .adv-circle.adv-circle-center-2 .caption p, .twoside-open hr, .half-side.left {
        border-color: ' . hc_get_setting('color-3') . ';
    }';

    //SKIN: MODERN
    $modern = '
    .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus, .white.btn, .white .btn, .circle-button,
    .btn.circle-button, .header-bootstrap, .popup-banner .panel-body, .box-menu-inner > .row, .pagination > li > a, .pagination > li > span,
    .pagination > .disabled > a, .pagination > .disabled > a:focus, .header-title hr, .block-infos .block-comment, .nav.inner.ms-rounded > li > a, .btn-default, .advs-box.boxed,
    .panel-default > .panel-heading, .panel-default .panel-footer, i.circle, .advs-box-multiple div.circle,.woocommerce .product span.onsale,
    .advs-box-side-img hr, .call-action-box, .title-base hr, .white .title-base hr, .header-video.white .title-base hr, .header-slider.white .title-base hr, .footer-base,
    .header-animation.white .title-base hr, .header-title.white .title-base hr, .nav.inner, .nav.inner.ms-mini, .popover-title, .icon-box:hover i.circle:not(.cover),
    .bg-color, .title-base .scroll-top, .title-modern .scroll-top, .btn, i.square, .header-base, .popup-banner.full-width-top, .popup-banner.full-width-bottom, .popup-banner.full-width-top, .progress-bar, .tagbox span {
        background-color: ' . hc_get_setting('main-color') . ';
    }

        .btn-primary:focus, .btn-primary.focus, .advs-box-multiple div.circle, .slimScrollBar, .white.circle-button:hover, .white .circle-button:hover, .boxed .circle-button:hover,
        .btn-primary:active:hover, .btn-primary.active:hover, .open > .dropdown-toggle.btn-primary:hover, .btn-primary:active:focus, .btn-primary.active:focus, .btn:hover,
        .open > .dropdown-toggle.btn-primary:focus, .btn-primary:active.focus, .btn-primary.active.focus, .open > .dropdown-toggle.btn-primary.focus, .btn-primary:focus,
        .btn-primary.focus, .btn-primary.btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default, .pagination > li > a:focus, .circle-button:hover,
        .btn.circle-button:hover, .pagination > .active > a:hover, .pagination > .disabled > a:hover, .pagination > li > a:hover, .btn-default:hover, .nav.inner:not(.ms-minimal) > li:hover > a,
        .nav.inner > li.active > a, .nav.inner:not(.ms-minimal) .dropdown-menu, .nav.inner.ms-rounded li.active a, .minisocial-group.circle i:hover, .pagination > .active > a {
            background-color: ' . hc_get_setting('hover-color') . ';
            border-color: ' . hc_get_setting('hover-color') . ';
        }
        .woocommerce div.product p.price, .woocommerce div.product span.price {
            color: ' . hc_get_setting('main-color') . ' !important;
        }
        .advs-box-top-icon.boxed .icon, .advs-box-top-icon.boxed-inverse .icon, .advs-box-top-icon-img i.icon, .adv-img-button-content .caption i, .advs-box-top-icon .icon, .fullpage-menu .active i,
        .inner-circle .main, .mi-menu li .fa, .advs-box-top-icon.boxed .icon, .fullpage-arrow.arrow-circle .arrow i, .title-icon-bg h2, .btn-group.social-group i, .accordion-list .list-group-item > a i,
        .advs-box .block-data p, .advs-box.boxed .block-data p, .adv-img h2, .text-color, .adv-img-classic-box h2, .mega-menu .fa-ul .fa-li, .fullpage-varrow.varrow-circle .arrow i, .text-color,
        .adv-circle.adv-circle-center i, li.panel-item .fa-li, header .social-group a i, .icon-menu .navbar-collapse ul.nav i, .side-menu i, .side-menu ul a i, .list-blog h5, .bs-menu li:hover > a,
        .bs-menu li.active > a, .hamburger-button:hover, .img-box.adv-circle i, .adv-img-full-content i.main-icon, .advs-box-side .icon, .advs-box-side-icon i, .tag-row i, .tag-row a i.circle,
        .social-group i.circle, .social-button i.circle, .niche-box-testimonails h5, .pricing-table .pricing-price, .pricing-table h3, .title-icon i, i, .fullpage-menu.white li.active a i, i.icon,
        .list-items .list-item span, ul.list-texts li b, .timeline > li > .timeline-label h4, .footer-center .footer-title, .accordion-list .list-group-item > a.active, header .social-group a i.fa {
            color: ' . hc_get_setting('main-color') . ';
        }

    .bs-menu li:hover > a, .bs-menu li.active > a, .side-menu.ms-minimal li:hover > a, .side-menu.ms-minimal li:hover > span, .adv-circle.adv-circle-center-2 .caption p {
        border-right-color: ' . hc_get_setting('main-color') . ' !important;
    }

    .bs-menu.menu-left li:hover > a, .bs-menu.menu-left li.active > a, .bs-callout {
        border-left-color: ' . hc_get_setting('main-color') . ' !important;
    }

    .popover.bottom > .arrow:after, .title-modern h1, .title-modern h2, .title-modern h3, .accordion-list .list-group-item:last-child, .nav.ms-minimal > li:hover > a, .nav.ms-minimal > li.active > a {
        border-bottom-color: ' . hc_get_setting('main-color') . ';
    }

    .icon-box i.circle:not(.cover), .list-item i.circle:not(.cover), header .social-group i, hr.e, .white.btn, .white .btn, .circle-button, .btn.circle-button, .advs-box.boxed, .box-menu-inner > .row, .pagination > .active > a:hover, .pagination > li.disabled > a:hover, .pagination > li > a:hover, .pagination > li > a:focus, .pagination > li > a, .pagination > li > span, .pagination > li.disabled > a, .nav.inner.ms-rounded li a, .btn-default, .btn, .advs-box.boxed .advs-box-content, .bs-panel, .block-infos .block-data, .tag-row i.circle, .niche-box-team .content-box hr, .call-action-box, .pagination > .active > a, .inner .dropdown-menu, .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus, .accordion-list .list-group-item, .accordion-list .list-group-item > a.active, .social-group i.circle, .social-button i.circle, .accordion-list .list-group-item > a.active:hover {
        border-color: ' . hc_get_setting('main-color') . ';
    }';

    //SKIN: DARK
    $dark = '
    .mi-menu ul li > a:before, .sidebar-nav .panel-item > span:before, .bs-menu li:hover > a, .bs-menu li.active > a, i.icon, .block-infos .bd-day, .mega-menu h5, .title-base h1, .title-icon h2,
    .title-icon h1, .title-base.title-small h2, .title-modern h1, .title-modern h2, .list-items .list-item h3, .timeline-title, footer h4, footer h5, footer h6,.woocommerce .product span.onsale,
    .advs-box h2, .advs-box h3, .advs-box h4, .advs-box .block-data p.bd-day, .advs-box.boxed-inverse .block-infos p.bd-day, .advs-box.boxed-inverse .block-infos p.bd-month,
    .adv-img-down-text h2 a, i.square, .advs-box-side .icon.circle, .advs-box-side .icon.square, .ms-minimal .dropdown-toggle i.caret, .inner-circle .main, .mi-menu li .fa,
    .advs-box-top-icon.boxed .icon, .fullpage-arrow.arrow-circle .arrow i, .title-icon-bg h2, .btn-group.social-group i, .accordion-list .list-group-item > a i, h5 a, h5,
    .advs-box .block-data p, .advs-box.boxed .block-data p, .adv-img h2, .text-color, .adv-img-classic-box h2, .mega-menu .fa-ul .fa-li, .fullpage-varrow.varrow-circle .arrow i,
    .adv-circle.adv-circle-center i, li.panel-item .fa-li, header .social-group a i, .side-menu i, .side-menu ul a i, .list-blog h5, .bs-menu li:hover > a, .bs-menu li.active > a,
    .hamburger-button:hover, .img-box.adv-circle i, .adv-img-full-content i.main-icon, .advs-box-side .icon, .advs-box-side-icon i, .tag-row i, .tag-row a i.circle, .social-group i.circle,
    .social-button i.circle, .niche-box-testimonails h5, .pricing-table .pricing-price, .pricing-table h3, .title-icon i, i, .fullpage-menu.white li.active a i, ul.list-texts li b,
    .timeline > li > .timeline-label h4, .footer-center .footer-title, header .social-group a i.fa, .icon-box-cell label, footer .btn-group.social-group i, .advs-box-top-icon .icon,
    .title-base p, .title-icon p, .list-items .list-item span, .social-group i {
        color: ' . hc_get_setting('main-color') . ';
    }

    .full-width-menu .nav.inner > li > a, .full-width-menu .dropdown-menu > li > a, .advs-box-top-icon-img .icon, .advs-box-top-icon.boxed .icon,.woocommerce div.product p.price, .woocommerce div.product span.price  {
        color: ' . hc_get_setting('main-color') . ' !important;
    }

    .timeline > li > .timeline-badge {
        border-color: ' . hc_get_setting('main-color') . ';
    }

    .title-modern h3 {
        border-bottom-color: ' . hc_get_setting('main-color') . ';
    }

    .fullpage-menu .active a i {
        color: ' . hc_get_setting('hover-color') . ';
    }';

    //SKIN: CUSTOM
    $custom = '
    .album-box .caption, header .btn-default, .advs-box-side-img hr, .accordion-list .list-group-item:before,.woocommerce .product span.onsale, .block-infos .block-data, .pricing-table .pricing-price, .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus, .white.btn, .white .btn, .circle-button, .btn.circle-button, .header-bootstrap, .popup-banner .panel-body, .pagination > li > a, .pagination > li > span, .pagination > .disabled > a, .pagination > .disabled > a:focus, .header-title hr, .nav.inner.ms-rounded > li > a, .btn-default, .advs-box.boxed, .panel-default > .panel-heading, .panel-default .panel-footer, .advs-box-top-icon .icon, .advs-box-top-icon-img .icon, i.circle, .advs-box-multiple div.circle, .advs-box-side-img hr, .call-action-box, .title-base hr, .white .title-base hr, .header-video.white .title-base hr, .header-slider.white .title-base hr, .header-animation.white .title-base hr, .header-title.white .title-base hr, .nav.inner, .nav.inner.ms-mini, .bg-color, .title-base .scroll-top, .btn-default, .title-modern .scroll-top, i.square, .header-base, .popup-banner.full-width-top, .popup-banner.full-width-bottom, .progress-bar, .tagbox span {
        background-color: ' . hc_get_setting('main-color') . ';
    }

    .call-action-box, .pricing-table .pricing-name, .social-line .social-group i.circle, .bg-color,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt {
        background-color: ' . hc_get_setting('main-color') . ' !important;
    }

    header .btn-default:hover, .btn-primary:active:hover, .btn-primary.active:hover, .open > .dropdown-toggle.btn-primary:hover, .btn-primary:active:focus, .btn-primary.active:focus, .open > .dropdown-toggle.btn-primary:focus, .btn-primary:active.focus, .btn-primary.active.focus, .open > .dropdown-toggle.btn-primary.focus, .btn-primary:focus, .btn-primary.focus, .btn-primary.btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default, .pagination > li > a:focus, .circle-button:hover, .btn.circle-button:hover, .pagination > .active > a:hover, .pagination > .disabled > a:hover, .pagination > li > a:hover, .btn-default:hover, .minisocial-group.circle i:hover, .pagination > .active > a {
        background-color: ' . hc_get_setting('hover-color') . ';
        border-color: ' . hc_get_setting('hover-color') . ';
    }

    .btn-primary:focus, .btn-primary.focus, .slimScrollBar, .white.circle-button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover {
        background-color: ' . hc_get_setting('hover-color') . ' !important;
    }

    i.icon, .fullpage-menu .active i, .datepicker-panel > ul > li.picked, .datepicker-panel > ul > li.picked:hover, .navbar-nav.subheader-bootstrap .sub, footer h4, .quote-author, .box-menu-inner .icon-box i,
    .caption-bottom p, div.adv-img .caption-bottom p, .mi-menu li .fa, .advs-box-top-icon.boxed .icon, .fullpage-arrow.arrow-circle .arrow i, .btn-group.social-group i, .text-color,
    .accordion-list .list-group-item > a i, .mega-menu .fa-ul .fa-li, .adv-circle.adv-circle-center i, .mi-menu a > .fa,
    li.panel-item .fa-li, header .social-group a i, .icon-menu .navbar-collapse ul.nav i, .side-menu i, .side-menu i, .side-menu ul a i, .bs-menu li:hover > a, .bs-menu li.active > a,
    .hamburger-button:hover, .img-box.adv-circle i, .advs-box-side .icon, .advs-box-side-icon i, .tag-row i, .tag-row a i.circle, .social-group i.circle, .social-button i.circle,
    .niche-box-testimonails h5, .title-icon i, i, .fullpage-menu.white li.active a i, ul.list-texts li b, .timeline > li > .timeline-label h4,
    .footer-center .footer-title, .accordion-list .list-group-item > a.active, header .social-group a i.fa {
        color: ' . hc_get_setting('main-color') . ';
    }

    .footer-minimal .footer-title, .advs-box-top-icon.boxed .btn, .advs-box-top-icon.boxed .circle-button,.woocommerce div.product p.price, .woocommerce div.product span.price, .text-color, .boxed .circle-button:hover i, .boxed .btn:hover i, .boxed .circle-button, .boxed .btn {
        color: ' . hc_get_setting('main-color') . ' !important;
    }

    .half-side.left, .mi-menu .side-menu li.active, .tab-box.right .nav-tabs > li.active > a, .bs-menu li:hover > a, .bs-menu li.active > a, .side-menu.ms-minimal li:hover > a, .side-menu.ms-minimal li:hover > span, .adv-circle.adv-circle-center-2 .caption p, .side-menu.ms-simple li.active {
        border-right-color: ' . hc_get_setting('main-color') . ' !important;
    }

    .half-side.right, .tab-box.left .nav-tabs > li.active > a, .tab-box.left .nav-tabs > li.active > a:hover, .tab-box.left .nav-tabs > li.active > a:focus, .bs-menu.menu-left li:hover > a, .bs-menu.menu-left li.active > a, .bs-callout {
        border-left-color: ' . hc_get_setting('main-color') . ' !important;
    }

    .datepicker-top-left, .datepicker-top-right, .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus, .mi-menu .sidebar-nav {
        border-top-color: ' . hc_get_setting('main-color') . ' !important;
    }

        .tab-box.inverse .nav-tabs li.active a, .datepicker-top-left:before, .datepicker-top-right:before, .nav.ms-minimal > li.active > a, .nav.ms-minimal li a:hover, .popover.bottom > .arrow:after, .title-modern h1, .title-modern h2, .title-modern h3, .nav.ms-minimal > li:hover > a, .nav.ms-minimal > li.active > a {
            border-bottom-color: ' . hc_get_setting('main-color') . ' !important;
        }

    .twoside-open hr, header .input-group input, header .btn-default, .social-line .social-group i.circle, hr.e, div.call-action-box, .white.btn, .white .btn, .circle-button, .btn.circle-button, .advs-box.boxed, .pagination > .active > a:hover, .pagination > li.disabled > a:hover, .pagination > li > a:hover, .pagination > li > a:focus, .pagination > li > a, .pagination > li > span, .pagination > li.disabled > a, .nav.inner.ms-rounded li a, .btn-default, .btn, .advs-box.boxed .advs-box-content, .bs-panel, .block-infos .block-data, .tag-row i.circle, .niche-box-team .content-box hr, .call-action-box, .pagination > .active > a, .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus, .accordion-list .list-group-item > a.active, .social-group i.circle, .social-button i.circle, .accordion-list .list-group-item > a.active:hover {
        border-color: ' . hc_get_setting('main-color') . ';
    }';

    $css = "";
    if ($skin == "minimal") $css = $minimal;
    if ($skin == "construction")  $css =  $construction;
    if ($skin == "creative")  $css =  $creative;
    if ($skin == "elegance")  $css =  $elegance;
    if ($skin == "modern")  $css =  $modern;
    if ($skin == "dark")  $css =  $dark;
    if ($skin == "custom")  $css =  $custom;
    if ($css != "" && hc_is_setted("font-family"))  $css .= " " . str_replace("[FONT-1]", str_replace("+"," ",hc_get_setting('font-family')), $HC_SITE_FONTS);
    return $css;
}
?>
