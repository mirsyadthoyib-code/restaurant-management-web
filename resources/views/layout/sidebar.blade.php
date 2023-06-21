<div class="iq-sidebar  sidebar-default ">
    <div class="iq-sidebar-logo d-flex align-items-center">
        <a href="/" class="header-logo">
            <img src="<?= url('images/logo.png') ?>" alt="logo">
            <h3 class="logo-title light-logo">Kitchen</h3>
        </a>
        <div class="iq-menu-bt-sidebar ml-0">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="<?= ($title == 'dashboard') ? 'active' : '' ?>">
                    <a href="/dashboard" class="svg-icon">
                        <i class="ri-dashboard-line" style="font-size: 1.6em"></i>
                        <span class="ml-4">Dashboards</span>
                    </a>
                </li>
                <li class="<?= ($title == 'shopping') ? 'active' : '' ?>">
                    <a href="/shopping" class="svg-icon">
                        <i class="ri-shopping-cart-2-line" style="font-size: 1.6em"></i>
                        <span class="ml-4">Shopping</span>
                    </a>
                </li>
                <li class="<?= ($title == 'production') ? 'active' : '' ?>">
                    <a href="/production" class="svg-icon">
                        <i class="ri-leaf-line" style="font-size: 1.6em"></i>
                        <span class="ml-4">Production</span>
                    </a>
                </li>
                <li class="<?= ($title == 'selling') ? 'active' : '' ?>">
                    <a href="/selling" class="svg-icon">
                        <i class="ri-money-dollar-box-line" style="font-size: 1.6em"></i>
                        <span class="ml-4">Selling</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div id="sidebar-bottom" class="position-relative sidebar-bottom">
            <div class="card border-none mb-0 shadow-none">
                <div class="card-body p-0">
                    <div class="sidebarbottom-content">
                        <h5 class="mb-3">Task Performed</h5>
                        <div id="circle-progress-6"
                            class="sidebar-circle circle-progress circle-progress-primary mb-4" data-min-value="0"
                            data-max-value="100" data-value="55" data-type="percent">
                        </div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" id="customRadio6" name="customRadio-1"
                                class="custom-control-input" checked="">
                            <label class="custom-control-label" for="customRadio6">Performed task</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio7" name="customRadio-1"
                                class="custom-control-input">
                            <label class="custom-control-label" for="customRadio7">Incomplete Task</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-5 pb-2"></div>
    </div>
</div>
