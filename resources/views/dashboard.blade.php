@extends('layout.master')

@section('content')
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="top-block d-flex align-items-center justify-content-between">
                            <h5>Cash</h5>
                            <span class="badge badge-primary">Yearly</span>
                        </div>
                        <h3>Rp<span class="counter">17,000,000</span></h3>
                        <div class="d-flex align-items-center justify-content-between mt-1">
                            <p class="mb-0">Total Cash</p>
                            <span class="text-primary">65%</span>
                        </div>
                        <div class="iq-progress-bar bg-primary-light mt-2">
                            <span class="bg-primary iq-progress progress-1" data-percent="65"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="top-block d-flex align-items-center justify-content-between">
                            <h5>Sales</h5>
                            <span class="badge badge-warning">Monthly</span>
                        </div>
                        <h3>Rp<span class="counter">25,000,000</span></h3>
                        <div class="d-flex align-items-center justify-content-between mt-1">
                            <p class="mb-0">Total Revenue</p>
                            <span class="text-warning">35%</span>
                        </div>
                        <div class="iq-progress-bar bg-warning-light mt-2">
                            <span class="bg-warning iq-progress progress-1" data-percent="35"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="top-block d-flex align-items-center justify-content-between">
                            <h5>Cost</h5>
                            <span class="badge badge-success">Monthly</span>
                        </div>
                        <h3>Rp<span class="counter">20,000,000</span></h3>
                        <div class="d-flex align-items-center justify-content-between mt-1">
                            <p class="mb-0">Total Expenses</p>
                            <span class="text-success">85%</span>
                        </div>
                        <div class="iq-progress-bar bg-success-light mt-2">
                            <span class="bg-success iq-progress progress-1" data-percent="85"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="top-block d-flex align-items-center justify-content-between">
                            <h5>Profit</h5>
                            <span class="badge badge-info">Monthly</span>
                        </div>
                        <h3>Rp<span class="counter">5,000,000</span></h3>
                        <div class="d-flex align-items-center justify-content-between mt-1">
                            <p class="mb-0">Total Profit</p>
                            <span class="text-info">55%</span>
                        </div>
                        <div class="iq-progress-bar bg-info-light mt-2">
                            <span class="bg-info iq-progress progress-1" data-percent="55"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card-transparent card-block card-stretch card-height">
                    <div class="card-body p-0">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Overview Progress</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-inline p-0 mb-0">
                                    <li class="mb-1">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">UX / UI Design</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="iq-progress-bar bg-secondary-light">
                                                        <span class="bg-secondary iq-progress progress-1"
                                                            data-percent="65"></span>
                                                    </div>
                                                    <span class="ml-3">65%</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="iq-media-group text-sm-right">
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle"
                                                            src="<?= url('images/user/05.jpg') ?>"
                                                            alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle"
                                                            src="<?= url('images/user/06.jpg') ?>"
                                                            alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle"
                                                            src="<?= url('images/user/07.jpg') ?>"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-1">
                                        <div class="d-flex align-items-center justify-content-between row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Development</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <div
                                                    class="d-flex align-items-center justify-content-between">
                                                    <div class="iq-progress-bar bg-primary-light">
                                                        <span class="bg-primary iq-progress progress-1"
                                                            data-percent="59"></span>
                                                    </div>
                                                    <span class="ml-3">59%</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="iq-media-group text-sm-right">
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle"
                                                            src="<?= url('images/user/08.jpg') ?>"
                                                            alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle"
                                                            src="<?= url('images/user/09.jpg') ?>"
                                                            alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle"
                                                            src="<?= url('images/user/04.jpg') ?>"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center justify-content-between row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Testing</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <div
                                                    class="d-flex align-items-center justify-content-between">
                                                    <div class="iq-progress-bar bg-warning-light">
                                                        <span class="bg-warning iq-progress progress-1"
                                                            data-percent="78"></span>
                                                    </div>
                                                    <span class="ml-3">78%</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="iq-media-group text-sm-right">
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle"
                                                            src="<?= url('images/user/01.jpg') ?>"
                                                            alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle"
                                                            src="<?= url('images/user/02.jpg') ?>"
                                                            alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle"
                                                            src="<?= url('images/user/03.jpg') ?>"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3">
                                                        <div id="circle-progress-21"
                                                            class="circle-progress-01 circle-progress circle-progress-primary"
                                                            data-min-value="0" data-max-value="100"
                                                            data-value="25" data-type="percent"></div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="mt-3 mt-md-0">
                                                            <h5 class="mb-1">Cloud Service Theme</h5>
                                                            <p class="mb-0">Exclusively for cloud-based/
                                                                Startup theme.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                                <div class="iq-media-group">
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle"
                                                            src="<?= url('images/user/05.jpg') ?>"
                                                            alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle"
                                                            src="<?= url('images/user/06.jpg') ?>"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <a
                                                    class="btn btn-white text-primary link-shadow mt-2">High</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3">
                                                        <div id="circle-progress-22"
                                                            class="circle-progress-01 circle-progress circle-progress-secondary"
                                                            data-min-value="0" data-max-value="100"
                                                            data-value="30" data-type="percent"></div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="mt-3 mt-md-0">
                                                            <h5 class="mb-1">Automotive WordPress</h5>
                                                            <p class="mb-0">Dealership-based business
                                                                WordPress theme.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                                <div class="iq-media-group">
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle"
                                                            src="<?= url('images/user/07.jpg') ?>"
                                                            alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle"
                                                            src="<?= url('images/user/02.jpg') ?>"
                                                            alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle"
                                                            src="<?= url('images/user/04.jpg') ?>"
                                                            alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle"
                                                            src="<?= url('images/user/08.jpg') ?>"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <a
                                                    class="btn btn-white text-secondary link-shadow mt-2">Medium</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3">
                                                        <div id="circle-progress-23"
                                                            class="circle-progress-01 circle-progress circle-progress-warning"
                                                            data-min-value="0" data-max-value="100"
                                                            data-value="15" data-type="percent"></div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="mt-3 mt-md-0">
                                                            <h5 class="mb-1">Online Education</h5>
                                                            <p class="mb-0">Remote students and teachers
                                                                dashboard.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                                <div class="iq-media-group">
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle"
                                                            src="<?= url('images/user/01.jpg') ?>"
                                                            alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle"
                                                            src="<?= url('images/user/02.jpg') ?>"
                                                            alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle"
                                                            src="<?= url('images/user/03.jpg') ?>"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <a class="btn btn-white text-warning link-shadow mt-2">Low</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3">
                                                        <div id="circle-progress-24"
                                                            class="circle-progress-01 circle-progress circle-progress-success"
                                                            data-min-value="0" data-max-value="100"
                                                            data-value="40" data-type="percent"></div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="mt-3 mt-md-0">
                                                            <h5 class="mb-1">Blog/Magazine Theme</h5>
                                                            <p class="mb-0">Launch visually appealing Blog
                                                                theme.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                                <div class="iq-media-group">
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle"
                                                            src="<?= url('images/user/05.jpg') ?>"
                                                            alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle"
                                                            src="<?= url('images/user/06.jpg') ?>"
                                                            alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle"
                                                            src="<?= url('images/user/07.jpg') ?>"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <a
                                                    class="btn btn-white text-success  link-shadow mt-2">High</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="card border-bottom pb-2 shadow-none">
                            <div class="card-body text-center inln-date flet-datepickr">
                                <input type="text" id="inline-date"
                                    class="date-input basicFlatpickr d-none" readonly="readonly">
                            </div>
                        </div>
                        <div class="card card-list">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <svg class="svg-icon text-secondary mr-3" width="24"
                                        height="24" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                        </path>
                                    </svg>
                                    <div class="pl-3 border-left">
                                        <h5 class="mb-1">Direct Development</h5>
                                        <p class="mb-0">Unveling the design system</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-list">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <svg class="svg-icon text-primary mr-3" width="24" height="24"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                        <path
                                            d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                        </path>
                                    </svg>
                                    <div class="pl-3 border-left">
                                        <h5 class="mb-1">action point assigned</h5>
                                        <p class="mb-0">Unveling the design system</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-list">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <svg class="svg-icon text-warning mr-3" width="24" height="24"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                        </path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                    <div class="pl-3 border-left">
                                        <h5 class="mb-1">Private Notes</h5>
                                        <p class="mb-0">Unveling the design system</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-list mb-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <svg class="svg-icon text-success mr-3" width="24" height="24"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                    </svg>
                                    <div class="pl-3 border-left">
                                        <h5 class="mb-1">Support Request</h5>
                                        <p class="mb-0">Unveling the design system</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card-transparent mb-0">
                    <div class="card-header d-flex align-items-center justify-content-between p-0 pb-3">
                        <div class="header-title">
                            <h4 class="card-title">Current Projects</h4>
                        </div>
                        <div class="card-header-toolbar d-flex align-items-center">
                            <div id="top-project-slick-arrow" class="slick-aerrow-block">
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-unstyled row top-projects mb-0">
                            <li class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="mb-3">Hotel Management App UI Kit</h5>
                                        <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02
                                            / 2021</p>
                                        <div class="iq-progress-bar bg-secondary-light mb-4">
                                            <span class="bg-secondary iq-progress progress-1"
                                                data-percent="65"
                                                style="transition: width 2s ease 0s; width: 65%;"></span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="iq-media-group">
                                                <a href="#" class="iq-media">
                                                    <img src="<?= url('images/user/01.jpg') ?>"
                                                        class="img-fluid avatar-40 rounded-circle"
                                                        alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="<?= url('images/user/02.jpg') ?>"
                                                        class="img-fluid avatar-40 rounded-circle"
                                                        alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="<?= url('images/user/03.jpg') ?>"
                                                        class="img-fluid avatar-40 rounded-circle"
                                                        alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="<?= url('images/user/04.jpg') ?>"
                                                        class="img-fluid avatar-40 rounded-circle"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn bg-secondary-light">Design</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="mb-3">General Improvement in pages</h5>
                                        <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02
                                            / 2021</p>
                                        <div class="iq-progress-bar bg-info-light mb-4">
                                            <span class="bg-info iq-progress progress-1" data-percent="65"
                                                style="transition: width 2s ease 0s; width: 65%;"></span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="iq-media-group">
                                                <a href="#" class="iq-media">
                                                    <img src="<?= url('images/user/05.jpg') ?>"
                                                        class="img-fluid avatar-40 rounded-circle"
                                                        alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="<?= url('images/user/06.jpg') ?>"
                                                        class="img-fluid avatar-40 rounded-circle"
                                                        alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="<?= url('images/user/07.jpg') ?>"
                                                        class="img-fluid avatar-40 rounded-circle"
                                                        alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="<?= url('images/user/08.jpg') ?>"
                                                        class="img-fluid avatar-40 rounded-circle"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn bg-info-light">Testing</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="mb-3">Product list view changes</h5>
                                        <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02
                                            / 2021</p>
                                        <div class="iq-progress-bar bg-success-light mb-4">
                                            <span class="bg-success iq-progress progress-1"
                                                data-percent="65"
                                                style="transition: width 2s ease 0s; width: 65%;"></span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="iq-media-group">
                                                <a href="#" class="iq-media">
                                                    <img src="<?= url('images/user/03.jpg') ?>"
                                                        class="img-fluid avatar-40 rounded-circle"
                                                        alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="<?= url('images/user/04.jpg') ?>"
                                                        class="img-fluid avatar-40 rounded-circle"
                                                        alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="<?= url('images/user/05.jpg') ?>"
                                                        class="img-fluid avatar-40 rounded-circle"
                                                        alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="<?= url('images/user/06.jpg') ?>"
                                                        class="img-fluid avatar-40 rounded-circle"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn bg-success-light">SEO</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="mb-3">Add Multiple theme options</h5>
                                        <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02
                                            / 2021</p>
                                        <div class="iq-progress-bar bg-warning-light mb-4">
                                            <span class="bg-warning iq-progress progress-1"
                                                data-percent="65"
                                                style="transition: width 2s ease 0s; width: 65%;"></span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="iq-media-group">
                                                <a href="#" class="iq-media">
                                                    <img src="<?= url('images/user/01.jpg') ?>"
                                                        class="img-fluid avatar-40 rounded-circle"
                                                        alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="<?= url('images/user/02.jpg') ?>"
                                                        class="img-fluid avatar-40 rounded-circle"
                                                        alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="<?= url('images/user/03.jpg') ?>"
                                                        class="img-fluid avatar-40 rounded-circle"
                                                        alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="<?= url('images/user/04.jpg') ?>"
                                                        class="img-fluid avatar-40 rounded-circle"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#"
                                                    class="btn bg-warning-light">Development</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="mb-3">Admin Panel Customization</h5>
                                        <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02
                                            / 2021</p>
                                        <div class="iq-progress-bar bg-primary-light mb-4">
                                            <span class="bg-primary iq-progress progress-1"
                                                data-percent="65"></span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="iq-media-group">
                                                <a href="#" class="iq-media">
                                                    <img src="<?= url('images/user/01.jpg') ?>"
                                                        class="img-fluid avatar-40 rounded-circle"
                                                        alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="<?= url('images/user/02.jpg') ?>"
                                                        class="img-fluid avatar-40 rounded-circle"
                                                        alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="<?= url('images/user/03.jpg') ?>"
                                                        class="img-fluid avatar-40 rounded-circle"
                                                        alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                    <img src="<?= url('images/user/04.jpg') ?>"
                                                        class="img-fluid avatar-40 rounded-circle"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#" class="btn bg-primary-light">Content</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</div>
@endSection