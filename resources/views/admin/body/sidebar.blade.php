<div class="app-sidebar-menu">
    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <div class="logo-box">
                <a href="/dashboard" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('backend//images/logo-sm.png')}}" alt="" height="22">
                                </span>
                    <span class="logo-lg">
                                    <img src="{{asset('backend//images/logo-light.png')}}" alt="" height="24">
                                </span>
                </a>
                <a href="/dashboard" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('backend//images/logo-sm.png')}}" alt="" height="22">
                                </span>
                    <span class="logo-lg">
                                    <img src="{{asset('backend//images/logo-dark.png')}}" alt="" height="24">
                                </span>
                </a>
            </div>

            <ul id="side-menu">

                <li class="menu-title">Menu</li>

                <li>
                    <a href="#sidebarDashboards" data-bs-toggle="collapse">
                        <i data-feather="home"></i>
                        <span> Dashboard </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarDashboards">
                        <ul class="nav-second-level">
                            <li>
                                <a href="/dashboard" class="tp-link">Analytical</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">E-commerce</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- <li>
                    <a href="/dashboard" target="_blank">
                        <i data-feather="globe"></i>
                        <span> Landing </span>
                    </a>
                </li> -->

                <li class="menu-title">Pages</li>

                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i data-feather="users"></i>
                        <span> Authentication </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="/dashboard" class="tp-link">Log In</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Register</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Recover Password</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Lock Screen</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Confirm Mail</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Email Verification</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Logout</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarError" data-bs-toggle="collapse">
                        <i data-feather="alert-octagon"></i>
                        <span> Error Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarError">
                        <ul class="nav-second-level">
                            <li>
                                <a href="/dashboard" class="tp-link">Error 404</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Error 500</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Error 503</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Error 429</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Offline Page</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarExpages" data-bs-toggle="collapse">
                        <i data-feather="file-text"></i>
                        <span> Utility </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarExpages">
                        <ul class="nav-second-level">
                            <li>
                                <a href="/dashboard" class="tp-link">Starter</a>
                            </li>
                            <li>
                                <a href="{{route('admin.profile')}}" class="tp-link">Profile</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Pricing</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Timeline</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Invoice</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">FAQs</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Gallery</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Maintenance</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Coming Soon</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="/dashboard" class="tp-link">
                        <i data-feather="calendar"></i>
                        <span> Calendar </span>
                    </a>
                </li>

                <li class="menu-title mt-2">General</li>

                <li>
                    <a href="#sidebarBaseui" data-bs-toggle="collapse">
                        <i data-feather="package"></i>
                        <span> Components </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarBaseui">
                        <ul class="nav-second-level">
                            <li>
                                <a href="/dashboard" class="tp-link">Accordions</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Alerts</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Badges</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Breadcrumb</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Buttons</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Cards</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Collapse</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Dropdowns</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Embed Video</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Grid</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Images</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">List Group</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Modals</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Placeholders</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Pagination</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Popovers</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Progress</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Scrollspy</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Spinners</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Tabs</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Tooltips</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Typography</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="/dashboard" class="tp-link">
                        <i data-feather="aperture"></i>
                        <span> Widgets </span>
                    </a>
                </li>

                <li>
                    <a href="#sidebarAdvancedUI" data-bs-toggle="collapse">
                        <i data-feather="cpu"></i>
                        <span> Extended UI </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAdvancedUI">
                        <ul class="nav-second-level">
                            <li>
                                <a href="/dashboard" class="tp-link">Carousel</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Notifications</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Offcanvas</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Range Slider</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarIcons" data-bs-toggle="collapse">
                        <i data-feather="award"></i>
                        <span> Icons </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarIcons">
                        <ul class="nav-second-level">
                            <li>
                                <a href="/dashboard" class="tp-link">Feather Icons</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Material Design Icons</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarForms" data-bs-toggle="collapse">
                        <i data-feather="briefcase"></i>
                        <span> Forms </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarForms">
                        <ul class="nav-second-level">
                            <li>
                                <a href="/dashboard" class="tp-link">General Elements</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Validation</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Quilljs Editor</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Picker</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarTables" data-bs-toggle="collapse">
                        <i data-feather="table"></i>
                        <span> Tables </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTables">
                        <ul class="nav-second-level">
                            <li>
                                <a href="/dashboard" class="tp-link">Basic Tables</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Data Tables</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarCharts" data-bs-toggle="collapse">
                        <i data-feather="pie-chart"></i>
                        <span> Apex Charts </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCharts">
                        <ul class="nav-second-level">
                            <li>
                                <a href='/dashboard'>Line</a>
                            </li>
                            <li>
                                <a href='/dashboard'>Area</a>
                            </li>
                            <li>
                                <a href='/dashboard'>Column</a>
                            </li>
                            <li>
                                <a href='/dashboard'>Bar</a>
                            </li>
                            <li>
                                <a href='/dashboard'>Mixed</a>
                            </li>
                            <li>
                                <a href='/dashboard'>Timeline</a>
                            </li>
                            <li>
                                <a href='/dashboard'>Range Area</a>
                            </li>
                            <li>
                                <a href='/dashboard'>Funnel</a>
                            </li>
                            <li>
                                <a href='/dashboard'>Candlestick</a>
                            </li>
                            <li>
                                <a href='/dashboard'>Boxplot</a>
                            </li>
                            <li>
                                <a href='/dashboard'>Bubble</a>
                            </li>
                            <li>
                                <a href='/dashboard'>Scatter</a>
                            </li>
                            <li>
                                <a href='/dashboard'>Heatmap</a>
                            </li>
                            <li>
                                <a href='/dashboard'>Treemap</a>
                            </li>
                            <li>
                                <a href='/dashboard'>Pie</a>
                            </li>
                            <li>
                                <a href='/dashboard'>Radialbar</a>
                            </li>
                            <li>
                                <a href='/dashboard'>Radar</a>
                            </li>
                            <li>
                                <a href='/dashboard'>Polar</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarMaps" data-bs-toggle="collapse">
                        <i data-feather="map"></i>
                        <span> Maps </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarMaps">
                        <ul class="nav-second-level">
                            <li>
                                <a href="/dashboard" class="tp-link">Google Maps</a>
                            </li>
                            <li>
                                <a href="/dashboard" class="tp-link">Vector Maps</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
</div>
