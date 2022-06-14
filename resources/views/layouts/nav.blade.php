<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>WIM MONITORING SYSTEM</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
        <link rel="shortcut icon" href="{{ asset('assets/img/logo_kemenhub.png') }}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->

		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->

	</head>
	<!--end::Head-->
	<!--begin::Body-->

	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled"  style="background-color: rgb(15, 15, 70); ">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					{{-- <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}"> --}}
					<div id="kt_header" class="header">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-grow-1 flex-stack" style="background-image: linear-gradient(to bottom right, #242263, #302e74);">
							<!--begin::Header Logo-->
							<div class="d-flex align-items-center me-5">
								<!--begin::Heaeder menu toggle-->
                                <div class="d-lg-none btn btn-icon btn-active-color-primary w-30px h-30px ms-n2 me-3" id="kt_header_menu_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--end::Heaeder menu toggle-->
                                    <img class="img-fluid" src="{{ asset('assets/img/logo_kemenhub.png') }}" width="60">
                                    <img class="img-fluid" src="{{ asset('assets/img/logo_ditjen_darat.png') }}" width="45">
							</div>
							<!--end::Header Logo-->
                            <div class="d-flex align-items-center me-5">
								<!--begin::Heaeder menu toggle-->
                                    <h1 class="text-light">WIM MONITORING SYSTEM</h1>
							</div>
							<!--end::Header Logo-->
							<!--begin::Topbar-->
							<div class="d-flex align-items-center">
								<!--begin::Topbar-->
								<div class="d-flex align-items-center flex-shrink-0">
									<!--begin::Search-->

									<!--end::Search-->
									<!--begin::User-->

                                    <div class="d-flex align-items-center ms-3 ms-lg-4" id="kt_header_user_menu_toggle">
										<!--begin::Menu- wrapper-->
										<!--begin::User icon(remove this button to use user avatar as menu toggle)-->
										<div class="btn btn-icon btn-color-blue-700 btn-active-color-primary btn-outline btn-outline-secondary w-30px h-30px w-lg-40px h-lg-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
											<!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black" />
													<rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::User icon-->
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content d-flex align-items-center px-3">
													<!--begin::Username-->
													<div class="d-flex flex-column">
														<div class="fw-bolder d-flex align-items-center fs-5">{{ Auth::user()->name }}</div>
													</div>
													<!--end::Username-->
												</div>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a class="menu-link px-5"href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();" style="color: black;"">
                                                 {{ __('Logout') }}
                                             </a>

                                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>

											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
										<!--end::Menu wrapper-->
									</div>

									{{-- <div class="d-flex align-items-center ms-3 ms-lg-4" id="kt_header_user_menu_toggle">
										<!--begin::Menu- wrapper-->
                                        <div aria-labelledby="navbarDropdown" >
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();" style="color: white; background-image: linear-gradient(to bottom right,#242263, #302e74);">
                                                {{ __('Logout') }} - {{ Auth::user()->name }}
                                            </a>


                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
										<!--begin::Menu-->

										<!--end::Menu-->
										<!--end::Menu wrapper-->
									</div> --}}

									<!--begin::Sidebar Toggler-->
									<!--end::Sidebar Toggler-->
								</div>
								<!--end::Topbar-->
							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
						<!--begin::Separator-->
						<div class="separator"></div>
						<!--end::Separator-->
						<!--begin::Container-->
						<div class="header-menu-container container-fluid d-flex flex-stack h-lg-65px " id="kt_header_nav" style="background-image: linear-gradient(to bottom right,#302e74, #242263);">
							<!--begin::Menu wrapper-->
							<div class="header-menu flex-column flex-lg-row" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}" style="background-image: linear-gradient(to bottom right,#302e74, #242263);">
								<!--begin::Menu-->
								<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-100 menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-100 fw-bold my-5 my-lg-0 align-items-stretch flex-grow-1" id="#kt_header_menu" data-kt-menu="true" style="background-image: linear-gradient(to bottom right,#302e74, #242263);">
                                    <div class="menu-item">
                                        <a class="menu-link py-3 {{ 'dashboard' == request()->path() ? 'active' : '' }}" href="{{ url('/dashboard') }}">
                                            <span class="menu-title">Dashboard</span>
                                            <span class="menu-arrow d-lg-none"></span>
                                        </a>
                                    </div>
									<div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
										<span class="menu-link py-3 {{ 'losarang','kulwaru' == request()->path() ? 'active' : '' }}" href="{{ url('losarang','kulwaru') }}">
											<span class="menu-title">Daerah UPPKB</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px" style="background-color: #007ec7;">
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3 {{ 'losarang' == request()->path() ? 'active' : '' }}" href="{{ url('losarang') }}">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Losarang</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3 {{ 'kulwaru' == request()->path() ? 'active' : '' }}" href="{{ url('kulwaru') }} ">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">Kulwaru</span>
                                                    </a>
                                                </div>
                                            </div>
										</div>
									</div>
                                        <div class="menu-item">
                                            <a class="menu-link py-3 {{ 'report' == request()->path() ? 'active' : '' }}" href="{{ url('/report') }} ">
                                                <span class="menu-title">Laporan</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </a>
                                        </div>
                                </div>


							</div>
						</div>
						<!--end::Menu-->
					</div>
					<!--end::Menu wrapper-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Header-->
					<!--begin::Toolbar-->

					{{-- <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
						<!--begin::Container-->
						<div id="kt_toolbar_container" class="container-xxl py-5">
							<!--begin::Row-->

							<!--end::Row-->
						</div>
						<!--end::Container-->
					</div> --}}

					<!--end::Toolbar-->
					<!--begin::Container-->
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-fluid mt-4" style="border-style: none;">
						<!--begin::Post-->
						<div class="content flex-row-fluid" id="kt_content" >
							<!--begin::Row-->
                            @yield('content')
							<!--end::Row-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Container-->
					<!--begin::Footer-->
					<div class="footer d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-bold me-1"><span id="tanggalwaktu"></span> &copy;</span>
								<a href="{{ url('/dashboard') }}" target="_blank" class="text-light text-hover-primary">WIM MONITORING SYSTEM</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<!--end::Menu-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::Drawers-->
		<!--begin::Activities drawer-->

		<!--end::Activities drawer-->
		<!--begin::Chat drawer-->

		<!--end::Chat drawer-->
		<!--begin::Exolore drawer toggle-->

		<!--end::Exolore drawer toggle-->
		<!--begin::Exolore drawer-->

		<!--end::Exolore drawer-->
		<!--end::Drawers-->
		<!--begin::Modals-->
		<!--begin::Modal - Invite Friends-->

		<!--end::Modal - Invite Friend-->
		<!--begin::Modal - Create App-->

		<!--end::Modal - Create App-->
		<!--begin::Modal - Upgrade plan-->
\
		<!--end::Modal - Upgrade plan-->
		<!--end::Modals-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true" style="background-image: linear-gradient(to bottom right, #242263, #302e74);">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--end::Main-->
        <script>var hostUrl = "assets/";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
		<script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{ asset('assets/js/custom/modals/create-app.js') }}"></script>
		<script src="{{ asset('assets/js/custom/modals/upgrade-plan.js') }}"></script>
        <script src="{{ asset('assets/js/custom/apps/projects/list/list.js') }}"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->

        <script>
            "use strict";
                $("#kt_daterangepicker_3").daterangepicker({
                        singleDatePicker: true,
                        showDropdowns: true,
                        minYear: 1901,
                        maxYear: parseInt(moment().format("YYYY"),10)
                    }
                );

                $("#kt_daterangepicker_4").daterangepicker({
                        singleDatePicker: true,
                        showDropdowns: true,
                        minYear: 1901,
                        maxYear: parseInt(moment().format("YYYY"),10)
                    }
                );

                // On document ready
                KTUtil.onDOMContentLoaded(function () {
                    KTDatatablesServerSide.init();
                });

                var dt = new Date();
                document.getElementById("tanggalwaktu").innerHTML = (dt.getFullYear());

                // Element to indecate
                var button = document.querySelector("#kt_button_1");

                // Handle button click event
                button.addEventListener("click", function() {
                    // Activate indicator
                    button.setAttribute("data-kt-indicator", "on");

                    // Disable indicator after 3 seconds
                    setTimeout(function() {
                        button.removeAttribute("data-kt-indicator");
                    }, 10000);
                });

        </script>

	</body>
	<!--end::Body-->
</html>

	</body>
	<!--end::Body-->
</html>
