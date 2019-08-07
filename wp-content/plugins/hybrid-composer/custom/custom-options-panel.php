<?php

/*
=============================================================================
CUSTOM SETTINGS FOR THE THEME OPTIONS PANEL
=============================================================================

Add new settings to the theme options panel here.
Every array item is a new setting.

Available values for "type" setting: checkbox,select,text,textarea,color,image_upload
Available values for "label" setting: main,layout,menu,footer,lists,titles,customizations,social

$HC_CUSTOM_PANEL
name : Theme's name
version : Theme's version
colors : Theme's panel colors

Documentation: wordpress.framework-y.com/advanced-api-documentation/#custom-theme

 */

global $HC_CUSTOM_THEME_OPTIONS;
global $HC_CUSTOM_PANEL;

$HC_CUSTOM_PANEL = array(
	'name'    => 'Y Theme',
	'version' => '1.4.6',
    'colors'  => array("#513d6f","#6F5499"),
    'demos' => array(
array('id' => 'minimal','name' => 'Minimal - Main demo'),
array('id' => 'minimal-one-page-1','name' => 'Minimal - One page 1'),
array('id' => 'minimal-one-page-2','name' => 'Minimal - One page 2'),
array('id' => 'minimal-full-page-1','name' => 'Minimal - Full page 1'),
array('id' => 'minimal-full-page-2','name' => 'Minimal - Full page 2'),
array('id' => 'minimal-two-sides','name' => 'Minimal - Two sides'),
array('id' => 'creative','name' => 'Creative - Main demo'),
array('id' => 'creative-magazine','name' => 'Creative - Magazine'),
array('id' => 'creative-business','name' => 'Creative - Business skriller'),
array('id' => 'creative-fashion','name' => 'Creative - Fashion shop'),
array('id' => 'creative-restaurant','name' => 'Creative - Restaurant'),
array('id' => 'construction','name' => 'Construction - Main demo'),
array('id' => 'construction-nature','name' => 'Construction - Nature'),
array('id' => 'construction-architect','name' => 'Construction - Architect'),
array('id' => 'construction-landing-page','name' => 'Construction - Landing Page'),
array('id' => 'construction-app','name' => 'Construction - App'),
array('id' => 'elegance','name' => 'Elegance - Main demo'),
array('id' => 'elegance-venice','name' => 'Elegance - Venice Hotel'),
array('id' => 'elegance-travel','name' => 'Elegance - Travel Hotel'),
array('id' => 'elegance-richmond','name' => 'Elegance - Richmond Hotel'),
array('id' => 'elegance-apartment','name' => 'Elegance - Apartment'),
array('id' => 'modern','name' => 'Modern - Main demo'),
array('id' => 'modern-hosting','name' => 'Modern - Hosting'),
array('id' => 'modern-app','name' => 'Modern - App'),
array('id' => 'modern-wavex','name' => 'Modern - Wavex'),
array('id' => 'modern-product','name' => 'Modern - Innova product'),
array('id' => 'dark','name' => 'Dark - Main demo'),
array('id' => 'dark-club','name' => 'Dark - Club'),
array('id' => 'dark-disco','name' => 'Dark - Disco'),
array('id' => 'dark-music','name' => 'Dark - Music'),
array('id' => 'dark-agency','name' => 'Dark - Agency'),
),
    'demos_url' => 'http://themes.framework-y.com/demo-import/y-theme/'
);
$HC_CUSTOM_THEME_OPTIONS = array(
array(
	'id'    => 'skin',
	'name' => 'Skin',
	'description'  => 'The skin is the main design of your website.',
    'type'  => 'select',
    'label' => 'main',
    'value' =>'minimal|construction|creative|elegance|modern|dark|custom'
));

$HC_SITE_FONTS = 'body, .adv-img p, .caption-bottom p, .adv-circle .caption p, .advs-box p, .list-blog p {
    font-family: [FONT-1] !important;
}';

$HC_SITE_COLORS = '.dropdown-menu > li > a:before, .navbar-nav > li.dropdown > a:after, .nav-pills > li > a:hover, .fa-li, i.icon, .counter-inverse .icon-box-cell p,
i.square, i.circle, .niche-box-testimonails > h5 span, .timeline small, .comment-list .name span, a.collapse-button:hover,
li.panel-item .fa-li, .advs-box .btn, .advs-box .btn:hover, .social-group i.circle, .icon-list .list-item i,
.adv-img i, .accordion-list .list-group-item > a:hover, .side-menu > li.active > a > i, .navbar-default .navbar-nav > .active > a, .adv-img-full-content p.sub {
    color: [MAIN-COLOR];
}

.posts-list h6:before, .pricing-table .pricing-price, .album-title a:hover, .white-2 .quote-author, .white .icon-list-2 .list-item i, .list-group-item.pricing-price:hover, .advs-box-top-icon a, .advs-box-top-icon a:after, .nav-tabs > li:hover > a, .nav-tabs > li:hover > a i, .nav-tabs > li.active > a, .nav-tabs > li.active > a i, .list-group-item:not(.active):hover > a, .icon-menu .navbar-collapse ul.nav > li > a:hover i, header .btn-search:hover, .nav.ms-minimal > li.active > a, .icon-background.boxed-inverse:not(.bg-color) .i-background, .icon-box-cell > i, .advs-box.boxed a.btn, .advs-box.boxed a i, .dropdown.btn-group .active > a, .bootgrid-header .dropdown-item:hover, .white .box-side-icon-small .icon-box i, .btn-text:hover, .side-menu .active > a, .sidebar-nav a:hover, .sidebar-nav a:focus, .sidebar-nav a:active, .advs-box-top-icon .icon, .advs-box-top-icon.boxed .btn, .adv-img-full-content i.main-icon, .advs-box-multiple.boxed div i, .footer-minimal .footer-title, .advs-box-top-icon.boxed .circle-button, .white .text-color, .text-color, .boxed .circle-button:hover i, .btn-text i, .boxed .circle-button, .tag-row i, .pagination > .active > a, .pagination > li > a:hover, .datepicker-panel > ul > li:hover, .adv-img-button-content .caption i, .social-line .social-group i.circle:hover, .white .icon-box-cell > i.square, .white .icon-box-cell > i.circle {
    color: [MAIN-COLOR] !important;
}

[class*="col-md-"].boxed, .fa-angle-up.scroll-top, .call-action-box, .ul-dots li:before, .flex-control-paging li a.flex-active, .flex-control-paging li a:hover, .progress-bar, .btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default {
    background-color: [MAIN-COLOR] !important;
}

.social-group i.circle, .social-button i.circle, .hamburger-button, .bg-color, .home-fullpage p, .home-fullpage a:hover, .timeline > li:hover > .timeline-badge, ul.side-menu li.active:before, #twosides-menu, .subline-bar, .accordion-list .list-group-item:before, .advs-box-multiple div.circle, .advs-box.boxed .advs-box-content, .advs-box.boxed, .box-social-page, .advs-box-top-icon-img .icon, .btn, .circle-button, header .btn, .navbar-inner .nav:not(.ms-rounded) li a:before, .white .btn, .timeline > li:hover > .timeline-badge {
    background-color: [MAIN-COLOR];
}

    .hamburger-button:hover,.popup-banner.full-width-top, .popup-banner.full-width-bottom, .one-page-menu .hamburger-button.active, .subline-bar li:hover, .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus, .btn:hover, header .btn:hover {
        background-color: [HOVER-COLOR] !important;
    }

div.adv-img-side-content .btn:hover, .nav-pills > li.active > a, .mega-menu .nav-tabs li.active, .list-items .list-item span, .timeline > li > .timeline-badge, div.adv-img-side-content .btn:hover i, .nav.inner.ms-rounded li a:hover, .nav.inner.ms-rounded li.active a, .datepicker-panel > ul > li.picked, .datepicker-panel > ul > li.picked:hover {
    border-color: [MAIN-COLOR] !important;
    color: [MAIN-COLOR] !important;
}

.tab-box > .panel, .tab-box > .panel-box > .panel, .niche-box-team .content-box hr, hr.e, .datepicker-top-left, .datepicker-top-right {
    border-top-color: [MAIN-COLOR] !important;
}

.tab-box.right .panel-box {
    border-right-color: [MAIN-COLOR] !important;
}

.tab-box.left .nav-tabs, .mi-menu .sidebar-nav, .tab-box.left .panel-box {
    border-left-color: [MAIN-COLOR] !important;
}

.accordion-list .list-group-item:hover, .list-items .list-item:hover, .title-modern h2, .tab-box.inverse .panel, .datepicker-top-left:before, .datepicker-top-right:before {
    border-bottom-color: [MAIN-COLOR] !important;
}


.white .quote-author, .white .icon-list .list-item i {
    color: [MAIN-COLOR-3];
}

.white .pagination > li > a:hover, .white .pagination > .active > a, .white.advs-box-blog .tag-row span:after,
.white.niche-box-post .tag-row i, .white.niche-box-post .tag-row span:after {
    color: [MAIN-COLOR] !important;
}

.white .btn:hover, .niche-box-post.boxed .block-infos {
    border-color: [MAIN-COLOR] !important;
}

.white .load-more-maso:hover {
    color: [MAIN-COLOR] !important;
    border-color: [MAIN-COLOR] !important;
}

.header-slider .flex-control-paging li a.flex-active, .header-slider .flex-control-paging li a:hover {
    background-color: [MAIN-COLOR] !important;
}

.half-side.right {
    background: [MAIN-COLOR] !important;
}';


?>
