<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.2.0
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
  <!--begin::Head-->
  <head>
    <base href="../" />
    <title>
      MBKM - UKRIDA
    </title>
    <meta charset="utf-8" />
    <meta
      name="description"
      content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free."
    />
    <meta
      name="keywords"
      content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta
      property="og:title"
      content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template"
    />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="assets/media/logos/logoukrida.png" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"
    />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link
      href="assets/plugins/custom/datatables/datatables.bundle.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/plugins/custom/vis-timeline/vis-timeline.bundle.css"
      rel="stylesheet"
      type="text/css"
    />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link
      href="assets/plugins/global/plugins.bundle.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <script>
      // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body id="kt_body" class="aside-enabled">
    <!--begin::Theme mode setup on page load-->
    <script>
      var defaultThemeMode = "light";
      var themeMode;
      if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
          themeMode =
            document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
          if (localStorage.getItem("data-bs-theme") !== null) {
            themeMode = localStorage.getItem("data-bs-theme");
          } else {
            themeMode = defaultThemeMode;
          }
        }
        if (themeMode === "system") {
          themeMode = window.matchMedia("(prefers-color-scheme: light)").matches
            ? "light"
            : "dark";
        }
        document.documentElement.setAttribute("data-bs-theme", themeMode);
      }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
      <!--begin::Page-->
      <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <div
          id="kt_aside"
          class="aside"
          data-kt-drawer="true"
          data-kt-drawer-name="aside"
          data-kt-drawer-activate="{default: true, lg: false}"
          data-kt-drawer-overlay="true"
          data-kt-drawer-width="{default:'200px', '300px': '250px'}"
          data-kt-drawer-direction="start"
          data-kt-drawer-toggle="#kt_aside_mobile_toggle"
        >
          <!--begin::Aside Toolbarl-->
          <div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
            <!--begin::Aside user-->
            <!--begin::User-->
            <div
              class="aside-user d-flex align-items-sm-center justify-content-center py-5"
            >
              <!--begin::Symbol-->
              <div class="symbol symbol-50px">
                <img src="assets/media/avatars/300-1.jpg" alt="" />
              </div>
              <!--end::Symbol-->
              <!--begin::Wrapper-->
              <div class="aside-user-info flex-row-fluid flex-wrap ms-5">
                <!--begin::Section-->
                <div class="d-flex">
                  <!--begin::Info-->
                  <div class="flex-grow-1 me-2">
                    <!--begin::Username-->
                    <a
                      href="#"
                      class="text-white text-hover-primary fs-6 fw-bold"
                      >Paul Melone</a
                    >
                    <!--end::Username-->
                    <!--begin::Description-->
                    <span class="text-gray-600 fw-semibold d-block fs-8 mb-1"
                      >Python Dev</span
                    >
                    <!--end::Description-->
                    <!--begin::Label-->
                    <div class="d-flex align-items-center text-success fs-9">
                      <span class="bullet bullet-dot bg-success me-1"></span
                      >online
                    </div>
                    <!--end::Label-->
                  </div>
                  <!--end::Info-->
                  <!--begin::User menu-->
                  <div class="me-n2">
                    <!--begin::Action-->
                    <a
                      href="#"
                      class="btn btn-icon btn-sm btn-active-color-primary mt-n2"
                      data-kt-menu-trigger="click"
                      data-kt-menu-placement="bottom-start"
                      data-kt-menu-overflow="true"
                    >
                      <i class="ki-duotone ki-setting-2 text-muted fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                      </i>
                    </a>
                    <!--begin::User account menu-->
                    <div
                      class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                      data-kt-menu="true"
                    >
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <div
                          class="menu-content d-flex align-items-center px-3"
                        >
                          <!--begin::Avatar-->
                          <div class="symbol symbol-50px me-5">
                            <img
                              alt="Logo"
                              src="assets/media/avatars/300-1.jpg"
                            />
                          </div>
                          <!--end::Avatar-->
                          <!--begin::Username-->
                          <div class="d-flex flex-column">
                            <div class="fw-bold d-flex align-items-center fs-5">
                              Max Smith
                              <span
                                class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2"
                                >Pro</span
                              >
                            </div>
                            <a
                              href="#"
                              class="fw-semibold text-muted text-hover-primary fs-7"
                              >max@kt.com</a
                            >
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
                        <a
                          href="../../demo8/dist/account/overview.html"
                          class="menu-link px-5"
                          >My Profile</a
                        >
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-5">
                        <a
                          href="../../demo8/dist/apps/projects/list.html"
                          class="menu-link px-5"
                        >
                          <span class="menu-text">My Projects</span>
                          <span class="menu-badge">
                            <span
                              class="badge badge-light-danger badge-circle fw-bold fs-7"
                              >3</span
                            >
                          </span>
                        </a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div
                        class="menu-item px-5"
                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                        data-kt-menu-placement="right-start"
                        data-kt-menu-offset="-15px, 0"
                      >
                        <a href="#" class="menu-link px-5">
                          <span class="menu-title">My Subscription</span>
                          <span class="menu-arrow"></span>
                        </a>
                        <!--begin::Menu sub-->
                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a
                              href="../../demo8/dist/account/referrals.html"
                              class="menu-link px-5"
                              >Referrals</a
                            >
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a
                              href="../../demo8/dist/account/billing.html"
                              class="menu-link px-5"
                              >Billing</a
                            >
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a
                              href="../../demo8/dist/account/statements.html"
                              class="menu-link px-5"
                              >Payments</a
                            >
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a
                              href="../../demo8/dist/account/statements.html"
                              class="menu-link d-flex flex-stack px-5"
                              >Statements
                              <span
                                class="ms-2 lh-0"
                                data-bs-toggle="tooltip"
                                title="View your statements"
                              >
                                <i class="ki-duotone ki-information-5 fs-5">
                                  <span class="path1"></span>
                                  <span class="path2"></span>
                                  <span class="path3"></span>
                                </i> </span
                            ></a>
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu separator-->
                          <div class="separator my-2"></div>
                          <!--end::Menu separator-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <div class="menu-content px-3">
                              <label
                                class="form-check form-switch form-check-custom form-check-solid"
                              >
                                <input
                                  class="form-check-input w-30px h-20px"
                                  type="checkbox"
                                  value="1"
                                  checked="checked"
                                  name="notifications"
                                />
                                <span class="form-check-label text-muted fs-7"
                                  >Notifications</span
                                >
                              </label>
                            </div>
                          </div>
                          <!--end::Menu item-->
                        </div>
                        <!--end::Menu sub-->
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-5">
                        <a
                          href="../../demo8/dist/account/statements.html"
                          class="menu-link px-5"
                          >My Statements</a
                        >
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu separator-->
                      <div class="separator my-2"></div>
                      <!--end::Menu separator-->
                      <!--begin::Menu item-->
                      <div
                        class="menu-item px-5"
                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                        data-kt-menu-placement="right-start"
                        data-kt-menu-offset="-15px, 0"
                      >
                        <a href="#" class="menu-link px-5">
                          <span class="menu-title position-relative"
                            >Language
                            <span
                              class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0"
                              >English
                              <img
                                class="w-15px h-15px rounded-1 ms-2"
                                src="assets/media/flags/united-states.svg"
                                alt="" /></span
                          ></span>
                        </a>
                        <!--begin::Menu sub-->
                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a
                              href="../../demo8/dist/account/settings.html"
                              class="menu-link d-flex px-5 active"
                            >
                              <span class="symbol symbol-20px me-4">
                                <img
                                  class="rounded-1"
                                  src="assets/media/flags/united-states.svg"
                                  alt=""
                                /> </span
                              >English</a
                            >
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a
                              href="../../demo8/dist/account/settings.html"
                              class="menu-link d-flex px-5"
                            >
                              <span class="symbol symbol-20px me-4">
                                <img
                                  class="rounded-1"
                                  src="assets/media/flags/spain.svg"
                                  alt=""
                                /> </span
                              >Spanish</a
                            >
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a
                              href="../../demo8/dist/account/settings.html"
                              class="menu-link d-flex px-5"
                            >
                              <span class="symbol symbol-20px me-4">
                                <img
                                  class="rounded-1"
                                  src="assets/media/flags/germany.svg"
                                  alt=""
                                /> </span
                              >German</a
                            >
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a
                              href="../../demo8/dist/account/settings.html"
                              class="menu-link d-flex px-5"
                            >
                              <span class="symbol symbol-20px me-4">
                                <img
                                  class="rounded-1"
                                  src="assets/media/flags/japan.svg"
                                  alt=""
                                /> </span
                              >Japanese</a
                            >
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a
                              href="../../demo8/dist/account/settings.html"
                              class="menu-link d-flex px-5"
                            >
                              <span class="symbol symbol-20px me-4">
                                <img
                                  class="rounded-1"
                                  src="assets/media/flags/france.svg"
                                  alt=""
                                /> </span
                              >French</a
                            >
                          </div>
                          <!--end::Menu item-->
                        </div>
                        <!--end::Menu sub-->
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-5 my-1">
                        <a
                          href="../../demo8/dist/account/settings.html"
                          class="menu-link px-5"
                          >Account Settings</a
                        >
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-5">
                        <a
                          href="../../demo8/dist/authentication/layouts/corporate/sign-in.html"
                          class="menu-link px-5"
                          >Sign Out</a
                        >
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::User account menu-->
                    <!--end::Action-->
                  </div>
                  <!--end::User menu-->
                </div>
                <!--end::Section-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::User-->
            <!--begin::Aside search-->
            <div class="aside-search py-5">
              <!--begin::Search-->
              <div
                id="kt_header_search"
                class="header-search d-flex align-items-center w-100"
                data-kt-search-keypress="true"
                data-kt-search-min-length="2"
                data-kt-search-enter="enter"
                data-kt-search-layout="menu"
                data-kt-search-responsive="false"
                data-kt-menu-trigger="auto"
                data-kt-menu-permanent="true"
                data-kt-menu-placement="bottom-start"
              >
                <!--begin::Tablet and mobile search toggle-->
                <div
                  data-kt-search-element="toggle"
                  class="search-toggle-mobile d-flex d-lg-none align-items-center"
                >
                  <div class="d-flex">
                    <i class="ki-duotone ki-magnifier fs-1">
                      <span class="path1"></span>
                      <span class="path2"></span>
                    </i>
                  </div>
                </div>
                <!--end::Tablet and mobile search toggle-->
                <!--begin::Form-->
                <form
                  data-kt-search-element="form"
                  class="w-100 position-relative"
                  autocomplete="off"
                >
                  <!--begin::Hidden input(Added to disable form autocomplete)-->
                  <input type="hidden" />
                  <!--end::Hidden input-->
                  <!--begin::Icon-->
                  <i
                    class="ki-duotone ki-magnifier fs-2 search-icon position-absolute top-50 translate-middle-y ms-4"
                  >
                    <span class="path1"></span>
                    <span class="path2"></span>
                  </i>
                  <!--end::Icon-->
                  <!--begin::Input-->
                  <input
                    type="text"
                    class="search-input form-control ps-13 fs-7 h-40px"
                    name="search"
                    value=""
                    placeholder="Search"
                    data-kt-search-element="input"
                  />
                  <!--end::Input-->
                  <!--begin::Spinner-->
                  <span
                    class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                    data-kt-search-element="spinner"
                  >
                    <span
                      class="spinner-border h-15px w-15px align-middle text-gray-400"
                    ></span>
                  </span>
                  <!--end::Spinner-->
                  <!--begin::Reset-->
                  <span
                    class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4"
                    data-kt-search-element="clear"
                  >
                    <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
                      <span class="path1"></span>
                      <span class="path2"></span>
                    </i>
                  </span>
                  <!--end::Reset-->
                </form>
                <!--end::Form-->
                <!--begin::Menu-->
                <div
                  data-kt-search-element="content"
                  class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px"
                >
                  <!--begin::Wrapper-->
                  <div data-kt-search-element="wrapper">
                    <!--begin::Recently viewed-->
                    <div data-kt-search-element="results" class="d-none">
                      <!--begin::Items-->
                      <div class="scroll-y mh-200px mh-lg-350px">
                        <!--begin::Category title-->
                        <h3
                          class="fs-5 text-muted m-0 pb-5"
                          data-kt-search-element="category-title"
                        >
                          Users
                        </h3>
                        <!--end::Category title-->
                        <!--begin::Item-->
                        <a
                          href="#"
                          class="d-flex text-dark text-hover-primary align-items-center mb-5"
                        >
                          <!--begin::Symbol-->
                          <div class="symbol symbol-40px me-4">
                            <img src="assets/media/avatars/300-6.jpg" alt="" />
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Title-->
                          <div
                            class="d-flex flex-column justify-content-start fw-semibold"
                          >
                            <span class="fs-6 fw-semibold">Karina Clark</span>
                            <span class="fs-7 fw-semibold text-muted"
                              >Marketing Manager</span
                            >
                          </div>
                          <!--end::Title-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a
                          href="#"
                          class="d-flex text-dark text-hover-primary align-items-center mb-5"
                        >
                          <!--begin::Symbol-->
                          <div class="symbol symbol-40px me-4">
                            <img src="assets/media/avatars/300-2.jpg" alt="" />
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Title-->
                          <div
                            class="d-flex flex-column justify-content-start fw-semibold"
                          >
                            <span class="fs-6 fw-semibold">Olivia Bold</span>
                            <span class="fs-7 fw-semibold text-muted"
                              >Software Engineer</span
                            >
                          </div>
                          <!--end::Title-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a
                          href="#"
                          class="d-flex text-dark text-hover-primary align-items-center mb-5"
                        >
                          <!--begin::Symbol-->
                          <div class="symbol symbol-40px me-4">
                            <img src="assets/media/avatars/300-9.jpg" alt="" />
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Title-->
                          <div
                            class="d-flex flex-column justify-content-start fw-semibold"
                          >
                            <span class="fs-6 fw-semibold">Ana Clark</span>
                            <span class="fs-7 fw-semibold text-muted"
                              >UI/UX Designer</span
                            >
                          </div>
                          <!--end::Title-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a
                          href="#"
                          class="d-flex text-dark text-hover-primary align-items-center mb-5"
                        >
                          <!--begin::Symbol-->
                          <div class="symbol symbol-40px me-4">
                            <img src="assets/media/avatars/300-14.jpg" alt="" />
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Title-->
                          <div
                            class="d-flex flex-column justify-content-start fw-semibold"
                          >
                            <span class="fs-6 fw-semibold">Nick Pitola</span>
                            <span class="fs-7 fw-semibold text-muted"
                              >Art Director</span
                            >
                          </div>
                          <!--end::Title-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a
                          href="#"
                          class="d-flex text-dark text-hover-primary align-items-center mb-5"
                        >
                          <!--begin::Symbol-->
                          <div class="symbol symbol-40px me-4">
                            <img src="assets/media/avatars/300-11.jpg" alt="" />
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Title-->
                          <div
                            class="d-flex flex-column justify-content-start fw-semibold"
                          >
                            <span class="fs-6 fw-semibold">Edward Kulnic</span>
                            <span class="fs-7 fw-semibold text-muted"
                              >System Administrator</span
                            >
                          </div>
                          <!--end::Title-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Category title-->
                        <h3
                          class="fs-5 text-muted m-0 pt-5 pb-5"
                          data-kt-search-element="category-title"
                        >
                          Customers
                        </h3>
                        <!--end::Category title-->
                        <!--begin::Item-->
                        <a
                          href="#"
                          class="d-flex text-dark text-hover-primary align-items-center mb-5"
                        >
                          <!--begin::Symbol-->
                          <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                              <img
                                class="w-20px h-20px"
                                src="assets/media/svg/brand-logos/volicity-9.svg"
                                alt=""
                              />
                            </span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Title-->
                          <div
                            class="d-flex flex-column justify-content-start fw-semibold"
                          >
                            <span class="fs-6 fw-semibold"
                              >Company Rbranding</span
                            >
                            <span class="fs-7 fw-semibold text-muted"
                              >UI Design</span
                            >
                          </div>
                          <!--end::Title-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a
                          href="#"
                          class="d-flex text-dark text-hover-primary align-items-center mb-5"
                        >
                          <!--begin::Symbol-->
                          <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                              <img
                                class="w-20px h-20px"
                                src="assets/media/svg/brand-logos/tvit.svg"
                                alt=""
                              />
                            </span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Title-->
                          <div
                            class="d-flex flex-column justify-content-start fw-semibold"
                          >
                            <span class="fs-6 fw-semibold"
                              >Company Re-branding</span
                            >
                            <span class="fs-7 fw-semibold text-muted"
                              >Web Development</span
                            >
                          </div>
                          <!--end::Title-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a
                          href="#"
                          class="d-flex text-dark text-hover-primary align-items-center mb-5"
                        >
                          <!--begin::Symbol-->
                          <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                              <img
                                class="w-20px h-20px"
                                src="assets/media/svg/misc/infography.svg"
                                alt=""
                              />
                            </span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Title-->
                          <div
                            class="d-flex flex-column justify-content-start fw-semibold"
                          >
                            <span class="fs-6 fw-semibold"
                              >Business Analytics App</span
                            >
                            <span class="fs-7 fw-semibold text-muted"
                              >Administration</span
                            >
                          </div>
                          <!--end::Title-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a
                          href="#"
                          class="d-flex text-dark text-hover-primary align-items-center mb-5"
                        >
                          <!--begin::Symbol-->
                          <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                              <img
                                class="w-20px h-20px"
                                src="assets/media/svg/brand-logos/leaf.svg"
                                alt=""
                              />
                            </span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Title-->
                          <div
                            class="d-flex flex-column justify-content-start fw-semibold"
                          >
                            <span class="fs-6 fw-semibold"
                              >EcoLeaf App Launch</span
                            >
                            <span class="fs-7 fw-semibold text-muted"
                              >Marketing</span
                            >
                          </div>
                          <!--end::Title-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a
                          href="#"
                          class="d-flex text-dark text-hover-primary align-items-center mb-5"
                        >
                          <!--begin::Symbol-->
                          <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                              <img
                                class="w-20px h-20px"
                                src="assets/media/svg/brand-logos/tower.svg"
                                alt=""
                              />
                            </span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Title-->
                          <div
                            class="d-flex flex-column justify-content-start fw-semibold"
                          >
                            <span class="fs-6 fw-semibold"
                              >Tower Group Website</span
                            >
                            <span class="fs-7 fw-semibold text-muted"
                              >Google Adwords</span
                            >
                          </div>
                          <!--end::Title-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Category title-->
                        <h3
                          class="fs-5 text-muted m-0 pt-5 pb-5"
                          data-kt-search-element="category-title"
                        >
                          Projects
                        </h3>
                        <!--end::Category title-->
                        <!--begin::Item-->
                        <a
                          href="#"
                          class="d-flex text-dark text-hover-primary align-items-center mb-5"
                        >
                          <!--begin::Symbol-->
                          <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                              <i
                                class="ki-duotone ki-notepad fs-2 text-primary"
                              >
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                              </i>
                            </span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Title-->
                          <div class="d-flex flex-column">
                            <span class="fs-6 fw-semibold"
                              >Si-Fi Project by AU Themes</span
                            >
                            <span class="fs-7 fw-semibold text-muted"
                              >#45670</span
                            >
                          </div>
                          <!--end::Title-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a
                          href="#"
                          class="d-flex text-dark text-hover-primary align-items-center mb-5"
                        >
                          <!--begin::Symbol-->
                          <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                              <i class="ki-duotone ki-frame fs-2 text-primary">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                              </i>
                            </span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Title-->
                          <div class="d-flex flex-column">
                            <span class="fs-6 fw-semibold"
                              >Shopix Mobile App Planning</span
                            >
                            <span class="fs-7 fw-semibold text-muted"
                              >#45690</span
                            >
                          </div>
                          <!--end::Title-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a
                          href="#"
                          class="d-flex text-dark text-hover-primary align-items-center mb-5"
                        >
                          <!--begin::Symbol-->
                          <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                              <i
                                class="ki-duotone ki-message-text-2 fs-2 text-primary"
                              >
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                              </i>
                            </span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Title-->
                          <div class="d-flex flex-column">
                            <span class="fs-6 fw-semibold"
                              >Finance Monitoring SAAS Discussion</span
                            >
                            <span class="fs-7 fw-semibold text-muted"
                              >#21090</span
                            >
                          </div>
                          <!--end::Title-->
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a
                          href="#"
                          class="d-flex text-dark text-hover-primary align-items-center mb-5"
                        >
                          <!--begin::Symbol-->
                          <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                              <i
                                class="ki-duotone ki-profile-circle fs-2 text-primary"
                              >
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                              </i>
                            </span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Title-->
                          <div class="d-flex flex-column">
                            <span class="fs-6 fw-semibold"
                              >Dashboard Analitics Launch</span
                            >
                            <span class="fs-7 fw-semibold text-muted"
                              >#34560</span
                            >
                          </div>
                          <!--end::Title-->
                        </a>
                        <!--end::Item-->
                      </div>
                      <!--end::Items-->
                    </div>
                    <!--end::Recently viewed-->
                    <!--begin::Recently viewed-->
                    <div class="" data-kt-search-element="main">
                      <!--begin::Heading-->
                      <div class="d-flex flex-stack fw-semibold mb-4">
                        <!--begin::Label-->
                        <span class="text-muted fs-6 me-2"
                          >Recently Searched:</span
                        >
                        <!--end::Label-->
                        <!--begin::Toolbar-->
                        <div class="d-flex" data-kt-search-element="toolbar">
                          <!--begin::Preferences toggle-->
                          <div
                            data-kt-search-element="preferences-show"
                            class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle="
                            title="Show search preferences"
                          >
                            <i class="ki-duotone ki-setting-2 fs-2">
                              <span class="path1"></span>
                              <span class="path2"></span>
                            </i>
                          </div>
                          <!--end::Preferences toggle-->
                          <!--begin::Advanced search toggle-->
                          <div
                            data-kt-search-element="advanced-options-form-show"
                            class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1"
                            data-bs-toggle="tooltip"
                            title="Show more search options"
                          >
                            <i class="ki-duotone ki-down fs-2"></i>
                          </div>
                          <!--end::Advanced search toggle-->
                        </div>
                        <!--end::Toolbar-->
                      </div>
                      <!--end::Heading-->
                      <!--begin::Items-->
                      <div class="scroll-y mh-200px mh-lg-325px">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-5">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                              <i class="ki-duotone ki-laptop fs-2 text-primary">
                                <span class="path1"></span>
                                <span class="path2"></span>
                              </i>
                            </span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Title-->
                          <div class="d-flex flex-column">
                            <a
                              href="#"
                              class="fs-6 text-gray-800 text-hover-primary fw-semibold"
                              >BoomApp by Keenthemes</a
                            >
                            <span class="fs-7 text-muted fw-semibold"
                              >#45789</span
                            >
                          </div>
                          <!--end::Title-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-5">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                              <i
                                class="ki-duotone ki-chart-simple fs-2 text-primary"
                              >
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                              </i>
                            </span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Title-->
                          <div class="d-flex flex-column">
                            <a
                              href="#"
                              class="fs-6 text-gray-800 text-hover-primary fw-semibold"
                              >"Kept API Project Meeting</a
                            >
                            <span class="fs-7 text-muted fw-semibold"
                              >#84050</span
                            >
                          </div>
                          <!--end::Title-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-5">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                              <i class="ki-duotone ki-chart fs-2 text-primary">
                                <span class="path1"></span>
                                <span class="path2"></span>
                              </i>
                            </span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Title-->
                          <div class="d-flex flex-column">
                            <a
                              href="#"
                              class="fs-6 text-gray-800 text-hover-primary fw-semibold"
                              >"KPI Monitoring App Launch</a
                            >
                            <span class="fs-7 text-muted fw-semibold"
                              >#84250</span
                            >
                          </div>
                          <!--end::Title-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-5">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                              <i
                                class="ki-duotone ki-chart-line-down fs-2 text-primary"
                              >
                                <span class="path1"></span>
                                <span class="path2"></span>
                              </i>
                            </span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Title-->
                          <div class="d-flex flex-column">
                            <a
                              href="#"
                              class="fs-6 text-gray-800 text-hover-primary fw-semibold"
                              >Project Reference FAQ</a
                            >
                            <span class="fs-7 text-muted fw-semibold"
                              >#67945</span
                            >
                          </div>
                          <!--end::Title-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-5">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                              <i class="ki-duotone ki-sms fs-2 text-primary">
                                <span class="path1"></span>
                                <span class="path2"></span>
                              </i>
                            </span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Title-->
                          <div class="d-flex flex-column">
                            <a
                              href="#"
                              class="fs-6 text-gray-800 text-hover-primary fw-semibold"
                              >"FitPro App Development</a
                            >
                            <span class="fs-7 text-muted fw-semibold"
                              >#84250</span
                            >
                          </div>
                          <!--end::Title-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-5">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                              <i class="ki-duotone ki-bank fs-2 text-primary">
                                <span class="path1"></span>
                                <span class="path2"></span>
                              </i>
                            </span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Title-->
                          <div class="d-flex flex-column">
                            <a
                              href="#"
                              class="fs-6 text-gray-800 text-hover-primary fw-semibold"
                              >Shopix Mobile App</a
                            >
                            <span class="fs-7 text-muted fw-semibold"
                              >#45690</span
                            >
                          </div>
                          <!--end::Title-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-5">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                              <i
                                class="ki-duotone ki-chart-line-down fs-2 text-primary"
                              >
                                <span class="path1"></span>
                                <span class="path2"></span>
                              </i>
                            </span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Title-->
                          <div class="d-flex flex-column">
                            <a
                              href="#"
                              class="fs-6 text-gray-800 text-hover-primary fw-semibold"
                              >"Landing UI Design" Launch</a
                            >
                            <span class="fs-7 text-muted fw-semibold"
                              >#24005</span
                            >
                          </div>
                          <!--end::Title-->
                        </div>
                        <!--end::Item-->
                      </div>
                      <!--end::Items-->
                    </div>
                    <!--end::Recently viewed-->
                    <!--begin::Empty-->
                    <div
                      data-kt-search-element="empty"
                      class="text-center d-none"
                    >
                      <!--begin::Icon-->
                      <div class="pt-10 pb-10">
                        <i class="ki-duotone ki-search-list fs-4x opacity-50">
                          <span class="path1"></span>
                          <span class="path2"></span>
                          <span class="path3"></span>
                        </i>
                      </div>
                      <!--end::Icon-->
                      <!--begin::Message-->
                      <div class="pb-15 fw-semibold">
                        <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                        <div class="text-muted fs-7">
                          Please try again with a different query
                        </div>
                      </div>
                      <!--end::Message-->
                    </div>
                    <!--end::Empty-->
                  </div>
                  <!--end::Wrapper-->
                  <!--begin::Preferences-->
                  <form
                    data-kt-search-element="advanced-options-form"
                    class="pt-1 d-none"
                  >
                    <!--begin::Heading-->
                    <h3 class="fw-semibold text-dark mb-7">Advanced Search</h3>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="mb-5">
                      <input
                        type="text"
                        class="form-control form-control-sm form-control-solid"
                        placeholder="Contains the word"
                        name="query"
                      />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-5">
                      <!--begin::Radio group-->
                      <div class="nav-group nav-group-fluid">
                        <!--begin::Option-->
                        <label>
                          <input
                            type="radio"
                            class="btn-check"
                            name="type"
                            value="has"
                            checked="checked"
                          />
                          <span
                            class="btn btn-sm btn-color-muted btn-active btn-active-primary"
                            >All</span
                          >
                        </label>
                        <!--end::Option-->
                        <!--begin::Option-->
                        <label>
                          <input
                            type="radio"
                            class="btn-check"
                            name="type"
                            value="users"
                          />
                          <span
                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4"
                            >Users</span
                          >
                        </label>
                        <!--end::Option-->
                        <!--begin::Option-->
                        <label>
                          <input
                            type="radio"
                            class="btn-check"
                            name="type"
                            value="orders"
                          />
                          <span
                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4"
                            >Orders</span
                          >
                        </label>
                        <!--end::Option-->
                        <!--begin::Option-->
                        <label>
                          <input
                            type="radio"
                            class="btn-check"
                            name="type"
                            value="projects"
                          />
                          <span
                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4"
                            >Projects</span
                          >
                        </label>
                        <!--end::Option-->
                      </div>
                      <!--end::Radio group-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-5">
                      <input
                        type="text"
                        name="assignedto"
                        class="form-control form-control-sm form-control-solid"
                        placeholder="Assigned to"
                        value=""
                      />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-5">
                      <input
                        type="text"
                        name="collaborators"
                        class="form-control form-control-sm form-control-solid"
                        placeholder="Collaborators"
                        value=""
                      />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-5">
                      <!--begin::Radio group-->
                      <div class="nav-group nav-group-fluid">
                        <!--begin::Option-->
                        <label>
                          <input
                            type="radio"
                            class="btn-check"
                            name="attachment"
                            value="has"
                            checked="checked"
                          />
                          <span
                            class="btn btn-sm btn-color-muted btn-active btn-active-primary"
                            >Has attachment</span
                          >
                        </label>
                        <!--end::Option-->
                        <!--begin::Option-->
                        <label>
                          <input
                            type="radio"
                            class="btn-check"
                            name="attachment"
                            value="any"
                          />
                          <span
                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4"
                            >Any</span
                          >
                        </label>
                        <!--end::Option-->
                      </div>
                      <!--end::Radio group-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-5">
                      <select
                        name="timezone"
                        aria-label="Select a Timezone"
                        data-control="select2"
                        data-dropdown-parent="#kt_header_search"
                        data-placeholder="date_period"
                        class="form-select form-select-sm form-select-solid"
                      >
                        <option value="next">Within the next</option>
                        <option value="last">Within the last</option>
                        <option value="between">Between</option>
                        <option value="on">On</option>
                      </select>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-8">
                      <!--begin::Col-->
                      <div class="col-6">
                        <input
                          type="number"
                          name="date_number"
                          class="form-control form-control-sm form-control-solid"
                          placeholder="Lenght"
                          value=""
                        />
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-6">
                        <select
                          name="date_typer"
                          aria-label="Select a Timezone"
                          data-control="select2"
                          data-dropdown-parent="#kt_header_search"
                          data-placeholder="Period"
                          class="form-select form-select-sm form-select-solid"
                        >
                          <option value="days">Days</option>
                          <option value="weeks">Weeks</option>
                          <option value="months">Months</option>
                          <option value="years">Years</option>
                        </select>
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="d-flex justify-content-end">
                      <button
                        type="reset"
                        class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                        data-kt-search-element="advanced-options-form-cancel"
                      >
                        Cancel
                      </button>
                      <a
                        href="../../demo8/dist/pages/search/horizontal.html"
                        class="btn btn-sm fw-bold btn-primary"
                        data-kt-search-element="advanced-options-form-search"
                        >Search</a
                      >
                    </div>
                    <!--end::Actions-->
                  </form>
                  <!--end::Preferences-->
                  <!--begin::Preferences-->
                  <form
                    data-kt-search-element="preferences"
                    class="pt-1 d-none"
                  >
                    <!--begin::Heading-->
                    <h3 class="fw-semibold text-dark mb-7">
                      Search Preferences
                    </h3>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="pb-4 border-bottom">
                      <label
                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack"
                      >
                        <span
                          class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2"
                          >Projects</span
                        >
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value="1"
                          checked="checked"
                        />
                      </label>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="py-4 border-bottom">
                      <label
                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack"
                      >
                        <span
                          class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2"
                          >Targets</span
                        >
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value="1"
                          checked="checked"
                        />
                      </label>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="py-4 border-bottom">
                      <label
                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack"
                      >
                        <span
                          class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2"
                          >Affiliate Programs</span
                        >
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value="1"
                        />
                      </label>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="py-4 border-bottom">
                      <label
                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack"
                      >
                        <span
                          class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2"
                          >Referrals</span
                        >
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value="1"
                          checked="checked"
                        />
                      </label>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="py-4 border-bottom">
                      <label
                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack"
                      >
                        <span
                          class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2"
                          >Users</span
                        >
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value="1"
                        />
                      </label>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="d-flex justify-content-end pt-7">
                      <button
                        type="reset"
                        class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                        data-kt-search-element="preferences-dismiss"
                      >
                        Cancel
                      </button>
                      <button
                        type="submit"
                        class="btn btn-sm fw-bold btn-primary"
                      >
                        Save Changes
                      </button>
                    </div>
                    <!--end::Actions-->
                  </form>
                  <!--end::Preferences-->
                </div>
                <!--end::Menu-->
              </div>
              <!--end::Search-->
            </div>
            <!--end::Aside search-->
            <!--end::Aside user-->
          </div>
          <!--end::Aside Toolbarl-->
          <!--begin::Aside menu-->
          <div class="aside-menu flex-column-fluid">
            <!--begin::Aside Menu-->
            <div
              class="hover-scroll-overlay-y mx-3 my-5 my-lg-5"
              id="kt_aside_menu_wrapper"
              data-kt-scroll="true"
              data-kt-scroll-height="auto"
              data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}"
              data-kt-scroll-wrappers="#kt_aside_menu"
              data-kt-scroll-offset="5px"
            >
              <!--begin::Menu-->
              <div
                class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                id="#kt_aside_menu"
                data-kt-menu="true"
              >
                <!--begin:Menu item-->
                <div
                  data-kt-menu-trigger="click"
                  class="menu-item here show menu-accordion"
                >
                  <div class="menu-content">
                    <span class="menu-heading fw-bold text-uppercase fs-7"
                      >Custom</span
                    >
                  </div>
                  <span class="menu-link">
                    <span class="menu-icon">
                      <i class="ki-duotone ki-element-11 fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                      </i>
                    </span>
                    <span class="menu-title">Apps</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <!--end:Menu link-->
                  <!--begin:Menu sub-->
                  <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/dashboards/online-courses.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Users</span>
                        <span class="menu-arrow"></span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/dashboards/online-courses.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Contacts</span>
                        <span class="menu-arrow"></span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/dashboards/online-courses.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Chat</span>
                        <span class="menu-arrow"></span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                  </div>
                  </span>
				   <span class="menu-link">
                    <span class="menu-icon">
                      <i class="ki-duotone ki-scan-barcode">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        <span class="path5"></span>
                        <span class="path6"></span>
                        <span class="path7"></span>
                        <span class="path8"></span>
						          </i>
                    </span>
                    <span class="menu-title">Pages</span>
                    <span class="menu-arrow"></span>
                  </span>
                </div>

                <!--begin:Menu item-->
                <div class="menu-item pt-5">
                  <!--begin:Menu content-->
                  <div class="menu-content">
                    <span class="menu-heading fw-bold text-uppercase fs-7"
                      >Layout</span
                    >
                  </div>
                  <!--end:Menu content-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div
                  data-kt-menu-trigger="click"
                  class="menu-item menu-accordion"
                >
                  <!--begin:Menu link-->
                  <span class="menu-link">
                    <span class="menu-icon">
                      <i class="ki-duotone ki-binance-usd">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                      </i>
                    </span>
                    <span class="menu-title">Subheaders</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <!--end:Menu link-->
                  <!--begin:Menu sub-->
                  <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/pages/user-profile/overview.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Overview</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/pages/user-profile/projects.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Projects</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/pages/user-profile/campaigns.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Campaigns</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/pages/user-profile/documents.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Documents</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/pages/user-profile/followers.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Followers</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/pages/user-profile/activity.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Activity</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                  </div>
                  <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div
                  data-kt-menu-trigger="click"
                  class="menu-item menu-accordion"
                >
                  <!--begin:Menu link-->
                  <span class="menu-link">
                    <span class="menu-icon">
                      <i class="ki-duotone ki-switch">
                        <span class="path1"></span>
                        <span class="path2"></span>
                      </i>
                    </span>
                    <span class="menu-title">General</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <!--end:Menu link-->
                  <!--begin:Menu sub-->
                  <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/account/overview.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Overview</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/account/settings.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Settings</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/account/security.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Security</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/account/activity.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Activity</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/account/billing.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Billing</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/account/statements.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Statements</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/account/referrals.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Referrals</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/account/api-keys.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">API Keys</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/account/logs.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Logs</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                  </div>
                  <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div
                  data-kt-menu-trigger="click"
                  class="menu-item menu-accordion"
                >
                  <!--begin:Menu link-->
                  <span class="menu-link">
                    <span class="menu-icon">
                      <i class="ki-duotone ki-row-vertical                        ">
                        <span class="path1"></span>
                        <span class="path2"></span>
                      </i>
                    </span>
                    <span class="menu-title">Builder</span>
                  </span>
                  <!--end:Menu link-->
                  <!--begin:Menu sub-->

                  <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item pt-5">
                  <!--begin:Menu content-->
                  <div class="menu-content">
                    <span class="menu-heading fw-bold text-uppercase fs-7"
                      >Components</span
                    >
                  </div>
                  <!--end:Menu content-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div
                  data-kt-menu-trigger="click"
                  class="menu-item menu-accordion"
                >
                  <!--begin:Menu link-->
                  <span class="menu-link">
                    <span class="menu-icon">
                      <i class="ki-duotone ki-cube-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                      </i>
                    </span>
                    <span class="menu-title">Base</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <!--end:Menu link-->
                  <!--begin:Menu sub-->
                  <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/apps/projects/list.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">My Projects</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/apps/projects/project.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">View Project</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/apps/projects/targets.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Targets</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/apps/projects/budget.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Budget</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/apps/projects/users.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Users</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/apps/projects/files.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Files</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/apps/projects/activity.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Activity</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/apps/projects/settings.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Settings</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                  </div>
                  <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div
                  data-kt-menu-trigger="click"
                  class="menu-item menu-accordion"
                >
                  <!--begin:Menu link-->
                  <span class="menu-link">
                    <span class="menu-icon">
                      <i class="ki-duotone ki-picture                        ">
                        <span class="path1"></span>
                        <span class="path2"></span>
                      </i>
                    </span>
                    <span class="menu-title">Custom</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <!--end:Menu link-->
                  <!--begin:Menu sub-->
                  <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div
                      data-kt-menu-trigger="click"
                      class="menu-item menu-accordion"
                    >
                      <!--begin:Menu link-->
                      <span class="menu-link">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Catalog</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/ecommerce/catalog/products.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Products</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/ecommerce/catalog/categories.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Categories</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/ecommerce/catalog/add-product.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Add Product</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/ecommerce/catalog/edit-product.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Edit Product</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/ecommerce/catalog/add-category.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Add Category</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/ecommerce/catalog/edit-category.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Edit Category</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div
                      data-kt-menu-trigger="click"
                      class="menu-item menu-accordion"
                    >
                      <!--begin:Menu link-->
                      <span class="menu-link">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Sales</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/ecommerce/sales/listing.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Orders Listing</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/ecommerce/sales/details.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Order Details</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/ecommerce/sales/add-order.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Add Order</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/ecommerce/sales/edit-order.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Edit Order</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div
                      data-kt-menu-trigger="click"
                      class="menu-item menu-accordion"
                    >
                      <!--begin:Menu link-->
                      <span class="menu-link">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Customers</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/ecommerce/customers/listing.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Customer Listing</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/ecommerce/customers/details.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Customer Details</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div
                      data-kt-menu-trigger="click"
                      class="menu-item menu-accordion"
                    >
                      <!--begin:Menu link-->
                      <span class="menu-link">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Reports</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/ecommerce/reports/view.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Products Viewed</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/ecommerce/reports/sales.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Sales</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/ecommerce/reports/returns.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Returns</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/ecommerce/reports/customer-orders.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Customer Orders</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/ecommerce/reports/shipping.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Shipping</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/apps/ecommerce/settings.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Settings</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                  </div>
                  <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div
                  data-kt-menu-trigger="click"
                  class="menu-item menu-accordion"
                >
                  <!--begin:Menu link-->
                  <span class="menu-link">
                    <span class="menu-icon">
                      <i class="ki-duotone ki-satellite">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        <span class="path5"></span>
                        <span class="path6"></span>
                      </i>
                    </span>
                    <span class="menu-title">Extended</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <!--end:Menu link-->
                  <!--begin:Menu sub-->
                  <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/apps/contacts/getting-started.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Getting Started</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/apps/contacts/add-contact.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Add Contact</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/apps/contacts/edit-contact.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Edit Contact</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/apps/contacts/view-contact.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">View Contact</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                  </div>
                  <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div
                  data-kt-menu-trigger="click"
                  class="menu-item menu-accordion"
                >
                  <!--begin:Menu link-->
                  <span class="menu-link">
                    <span class="menu-icon">
                      <i class="ki-duotone ki-disconnect">
                      <span class="path1"></span>
                      <span class="path2"></span>
                      <span class="path3"></span>
                      <span class="path4"></span>
                      <span class="path5"></span>
                      </i>
                    </span>
                    <span class="menu-title">Icons</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <!--end:Menu link-->
                  <!--begin:Menu sub-->
                  <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/apps/support-center/overview.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Overview</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div
                      data-kt-menu-trigger="click"
                      class="menu-item menu-accordion mb-1"
                    >
                      <!--begin:Menu link-->
                      <span class="menu-link">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Tickets</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/support-center/tickets/list.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Tickets List</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/support-center/tickets/view.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">View Ticket</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div
                      data-kt-menu-trigger="click"
                      class="menu-item menu-accordion mb-1"
                    >
                      <!--begin:Menu link-->
                      <span class="menu-link">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Tutorials</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/support-center/tutorials/list.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Tutorials List</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/support-center/tutorials/post.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Tutorial Post</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/apps/support-center/faq.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">FAQ</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/apps/support-center/licenses.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Licenses</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/apps/support-center/contact.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Contact Us</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                  </div>
                  <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div
                  data-kt-menu-trigger="click"
                  class="menu-item menu-accordion"
                >
                  <!--begin:Menu link-->
                  <span class="menu-link">
                    <span class="menu-icon">
                      <i class="ki-duotone ki-element-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                      </i>
                    </span>
                    <span class="menu-title">Portlets</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <!--end:Menu link-->
                  <!--begin:Menu sub-->
                  <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div
                      data-kt-menu-trigger="click"
                      class="menu-item menu-accordion mb-1"
                    >
                      <!--begin:Menu link-->
                      <span class="menu-link">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Users</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/user-management/users/list.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Users List</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/user-management/users/view.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">View User</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div
                      data-kt-menu-trigger="click"
                      class="menu-item menu-accordion"
                    >
                      <!--begin:Menu link-->
                      <span class="menu-link">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Roles</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/user-management/roles/list.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Roles List</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/user-management/roles/view.html"
                          >
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">View Role</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/apps/user-management/permissions.html"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Permissions</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                  </div>
                  <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a
                            class="menu-link"
                            href="../../demo8/dist/apps/invoices/view/invoice-3.html"
                          >
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a
                        class="menu-link"
                        href="../../demo8/dist/apps/invoices/create.html"
                      >
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                  </div>
                  <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div
                  data-kt-menu-trigger="click"
                  class="menu-item menu-accordion"
                >
                  <!--begin:Menu link-->
                  <span class="menu-link">
                    <span class="menu-icon">
                      <i class="ki-duotone ki-switch fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                      </i>
                    </span>
                    <span class="menu-title">File Manager</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div
                  data-kt-menu-trigger="click"
                  class="menu-item menu-accordion"
                >
                  <!--begin:Menu link-->
                  <span class="menu-link">
                    <span class="menu-icon">
                      <i class="ki-duotone ki-sms fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                      </i>

                      <a
                        class="menu-link"
                        href="../../demo8/dist/apps/chat/drawer.html"
                      >
                </div>
                <!--end:Menu item-->
              </div>
              <!--end::Menu-->
            </div>
            <!--end::Aside Menu-->
          </div>
          <!--end::Aside menu-->
          <!--begin::Footer-->
          <div
            class="aside-footer flex-column-auto py-5"
            id="kt_aside_footer"
          ></div>
          <!--end::Footer-->
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
          <!--begin::Header-->
          <div id="kt_header" style="" class="header align-items-stretch">
            <!--begin::Brand-->
            <div class="header-brand bg-white">
              <!--begin::Logo-->
              <a href="../../demo8/dist/index.html">
                <img
                  alt="Logo"
                  src="assets/media/logos/ukridalogo.svg"
                  class="h-25px h-lg-25px"
                />
              </a>
              <!--end::Logo-->
              <!--begin::Aside minimize-->
              <div
                id="kt_aside_toggle"
                class="btn btn-icon w-auto px-0 btn-active-color-primary aside-minimize"
                data-kt-toggle="true"
                data-kt-toggle-state="active"
                data-kt-toggle-target="body"
                data-kt-toggle-name="aside-minimize"
              >
                <i
                  class="ki-outline ki-entrance-right fs-1 me-n1 minimize-default text-primary"
                >
                  <span class="path1"></span>
                  <span class="path2"></span>
                </i>
              </div>
              <!--end::Aside minimize-->
              <!--begin::Aside toggle-->
              <div
                class="d-flex align-items-center d-lg-none me-n2"
                title="Show aside menu"
              >
                <div
                  class="btn btn-icon btn-active-color-primary w-30px h-30px"
                  id="kt_aside_mobile_toggle"
                >
                  <i class="ki-duotone ki-abstract-14 fs-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                  </i>
                </div>
              </div>
              <!--end::Aside toggle-->
            </div>
            <!--end::Brand-->
            <!--begin::Toolbar-->
            <div class="toolbar d-flex align-items-stretch">
              <!--begin::Toolbar container-->
              <div
                class="container-xxl py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between"
              >
                <!--begin::Page title-->
                <div
                  class="page-title d-flex justify-content-center flex-column me-5"
                >
                  <!--begin::Title-->
                  <h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">
                    Dashboard
                  </h1>
                  <!--end::Title-->
                  <!--begin::Breadcrumb-->
                  <ul
                    class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1"
                  >
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                      <i class="ki-solid ki-home"></i>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                      <i class="ki-solid ki-right"></i>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">My Team</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                      <i class="ki-solid ki-right"></i>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Dashboard</li>
                    <!--end::Item-->
                  </ul>
                  <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Action group-->
                <div
                  class="d-flex align-items-stretch overflow-auto pt-3 pt-lg-0"
                ></div>
                <!--end::Action group-->
              </div>
              <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
          </div>
          <!--end::Header-->
          <!--begin::Content-->
          <div
            class="content d-flex flex-column flex-column-fluid"
            id="kt_content"
          >
            <!--begin::Post-->
            <div class="post d-flex flex-column-fluid" id="kt_post">
              <!--begin::Container-->
              <div id="kt_content_container" class="container-xxl">
                <!--begin::Row-->
                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                  <!--begin::Col-->
                  <div class="col-xl-3">
                    <!--begin::Card widget 3-->
                    <div
                      class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100"
                      style="
                        background-color: #f1416c;
                        background-image: url('assets/media/svg/shapes/wave-bg-red.svg');
                      "
                    >
                      <!--begin::Header-->
                      <div class="card-header pt-5 mb-3">
                        <!--begin::Icon-->
                        <div
                          class="d-flex flex-center rounded-circle h-80px w-80px"
                          style="
                            border: 1px dashed rgba(255, 255, 255, 0.4);
                            background-color: #f1416c;
                          "
                        >
                          <i class="ki-solid ki-teacher text-light fs-2qx lh-0"></i>
                        </div>
                        <!--end::Icon-->
                      </div>
                      <!--end::Header-->
                      <!--begin::Card body-->
                      <div class="card-body d-flex align-items-end mb-3">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center">
                          <span class="fs-4hx text-white fw-bold me-6"
                            >123</span
                          >
                          <div class="fw-bold fs-6 text-white">
                            <span class="d-block">Mahasiswa</span>
                            <span class="">mengapply</span>
                          </div>
                        </div>
                        <!--end::Info-->
                      </div>
                      <!--end::Card body-->
                      <!--begin::Card footer-->
                      <div
                        class="card-footer"
                        style="
                          border-top: 1px solid rgba(255, 255, 255, 0.3);
                          background: rgba(0, 0, 0, 0.15);
                        "
                      >
                        <!--begin::Progress-->
                        <div class="fw-bold text-white py-2">
                          <span class="fs-1 d-block">232</span>
                          <span class="opacity-50">Total Mahasiswa</span>
                        </div>
                        <!--end::Progress-->
                      </div>
                      <!--end::Card footer-->
                    </div>
                    <!--end::Card widget 3-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-xl-3">
                    <!--begin::Card widget 3-->
                    <div
                      class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100"
                      style="
                        background-color: #7239ea;
                        background-image: url('assets/media/svg/shapes/wave-bg-purple.svg');
                      "
                    >
                      <!--begin::Header-->
                      <div class="card-header pt-5 mb-3">
                        <!--begin::Icon-->
                        <div
                          class="d-flex flex-center rounded-circle h-80px w-80px"
                          style="
                            border: 1px dashed rgba(255, 255, 255, 0.4);
                            background-color: #7239ea;
                          "
                        >
                          <i class="ki-duotone ki-briefcase text-light fs-2qx lh-0">
                          <span class="path1"></span>
                          <span class="path2"></span>
                          </i>
                        </div>
                        <!--end::Icon-->
                      </div>
                      <!--end::Header-->
                      <!--begin::Card body-->
                      <div class="card-body d-flex align-items-end mb-3">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center">
                          <span class="fs-4hx text-white fw-bold me-6"
                            >427</span
                          >
                          <div class="fw-bold fs-6 text-white">
                            <span class="d-block">Lowongan</span>
                            <span class="">terpublish</span>
                          </div>
                        </div>
                        <!--end::Info-->
                      </div>
                      <!--end::Card body-->
                      <!--begin::Card footer-->
                      <div
                        class="card-footer"
                        style="
                          border-top: 1px solid rgba(255, 255, 255, 0.3);
                          background: rgba(0, 0, 0, 0.15);
                        "
                      >
                        <!--begin::Progress-->
                        <div class="fw-bold text-white py-2">
                          <span class="fs-1 d-block">562</span>
                          <span class="opacity-50">Total Lowongan Terbentuk</span>
                        </div>
                        <!--end::Progress-->
                      </div>
                      <!--end::Card footer-->
                    </div>
                    <!--end::Card widget 3-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-xl-6">
                    <!--begin::Chart widget 36-->
                    <div class="card card-flush overflow-hidden h-lg-100">
                      <!--begin::Header-->
                      <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                          <span class="card-label fw-bold text-dark"
                            >Supply & Demand</span
                          >
                          <span class="text-gray-400 mt-1 fw-semibold fs-6"
                            >Perbandingan Lowongan dan Mahasiswa</span
                          >
                        </h3>
                        <!--end::Title-->
                      </div>
                      <!--end::Header-->
                      <!--begin::Card body-->
                      <div class="card-body d-flex align-items-end p-0">
                        <!--begin::Chart-->
                        <div
                          id="kt_charts_widget_36"
                          class="min-h-auto w-100 ps-4 pe-6"
                          style="height: 300px"
                        ></div>
                        <!--end::Chart-->
                      </div>
                      <!--end::Card body-->
                    </div>
                    <!--end::Chart widget 36-->
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="col-xl">
										<!--begin::Table widget 14-->
										<div class="card card-flush h-md-100">
											<!--begin::Header-->
											<div class="card-header pt-7">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bold text-gray-800">Aktivitas Lamaran</span>
													<span class="text-gray-400 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span>
												</h3>
												<!--end::Title-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-6">
												<!--begin::Table container-->
												<div class="table-responsive">
													<!--begin::Table-->
													<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
														<!--begin::Table head-->
														<thead>
															<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
																<th class="p-0 pb-3 min-w-175px text-start">Mahasiswa</th>
																<th class="p-0 pb-3 min-w-100px text-end">Lowongan dan Perusahaan</th>
																<th class="p-0 pb-3 min-w-100px text-end">Tipe</th>
																<th class="p-0 pb-3 min-w-175px text-end pe-12">Status</th>
																<th class="p-0 pb-3 w-125px text-end pe-7">Tanggal</th>
															</tr>
														</thead>
														<!--end::Table head-->
														<!--begin::Table body-->
														<tbody>
															<tr>
																<td>
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-50px me-3">
																			<img src="assets/media/avatars/300-10.jpg" class="" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
																			<span class="text-gray-400 fw-semibold d-block fs-7">Teknik Informatika</span>
																		</div>
																	</div>
																</td>
																<td class="text-end pe-0">
																	<div class="d-flex justify-content-start flex-column">
																			<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">UI / UX</a>
																			<span class="text-gray-400 fw-semibold d-block fs-7">PT Akar Solusi Inovatif</span>
																		</div>
																</td>
																<td class="text-end pe-0">
																	<!--begin::Label-->
																	<span class="text-gray-800 fw-semibold d-block fs-7">Magang</span>
																	<!--end::Label-->
																</td>
																<td class="text-end pe-12">
																	<span class="badge py-3 px-4 fs-7 badge-primary">Applied</span>
																</td>
																<td class="text-end pe-0">
																	<span class="text-gray-800 fw-semibold d-block fs-">8 Nov, 2023</span>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-50px me-3">
																			<img src="assets/media/avatars/300-4.jpg" class="" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane Cooper</a>
																			<span class="text-gray-400 fw-semibold d-block fs-7">Sistem Informatika</span>
																		</div>
																	</div>
																</td>
																<td class="text-end pe-0">
																	<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Business Analyst</a>
																	<span class="text-gray-400 fw-semibold d-block fs-7">PT Akar Solusi Inovatif</span>
																</td>
																<td class="text-end pe-0">
																	<!--begin::Label-->
																	<span class="text-gray-800 fw-semibold d-block fs-7">Studi Independen</span>
																</td>
																<td class="text-end pe-12">
																	<span class="badge py-3 px-4 fs-7 badge-primary">Applied</span>
																</td>
																<td class="text-end pe-0">
																	<span class="text-gray-800 fw-semibold d-block fs-">8 Nov, 2023</span>
																</td>

															</tr>
															<tr>
																<td>
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-50px me-3">
																			<img src="assets/media/avatars/300-13.jpg" class="" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
																			<span class="text-gray-400 fw-semibold d-block fs-7">Elektro</span>
																		</div>
																	</div>
																</td>
																<td class="text-end pe-0">
																	<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">IOT Internal Program</a>
																	<span class="text-gray-400 fw-semibold d-block fs-7">PT Akar Solusi Inovatif</span>
																</td>
																<td class="text-end pe-0">
																	<!--begin::Label-->
																	<span class="text-gray-800 fw-semibold d-block fs-7">Magang & Studi Independen</span>
																	<!--end::Label-->
																</td>
																<td class="text-end pe-12">
																	<span class="badge py-3 px-4 fs-7 badge-danger">Rejected</span>
																</td>
																<td class="text-end pe-0">
																	<span class="text-gray-800 fw-semibold d-block ">8 Nov, 2023</span>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-50px me-3">
																			<img src="assets/media/avatars/300-12.jpg" class="" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
																			<span class="text-gray-400 fw-semibold d-block fs-7">Management</span>
																		</div>
																	</div>
																</td>
																<td class="text-end pe-0">
																	<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Business Analyst</a>
																	<span class="text-gray-400 fw-semibold d-block fs-7">PT Bank CIMB Niaga TBK</span>
																</td>
																<td class="text-end pe-0">
																	<!--begin::Label-->
																	<span class="text-gray-800 fw-semibold d-block fs-7">Magang</span>

																</td>
																<td class="text-end pe-12">
																	<span class="badge py-3 px-4 fs-7 badge-success">Approved</span>
																</td>
																<td class="text-end pe-0">
																	<span class="text-gray-800 fw-semibold d-block ">8 Nov, 2023</span>
																</td>

															</tr>
															<tr>
																<td>
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-50px me-3">
																			<img src="assets/media/stock/600x600/img-48.jpg" class="" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ralph Edwards</a>
																			<span class="text-gray-400 fw-semibold d-block fs-7">Management</span>
																		</div>
																	</div>
																</td>
																<td class="text-end pe-0">
																	<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Business Analyst</a>
																	<span class="text-gray-400 fw-semibold d-block fs-7">PT Bank Mandiri TBK</span>
																</td>
																<td class="text-end pe-0">
																	<!--begin::Label-->
																	<span class="text-gray-800 fw-semibold d-block fs-7">Magang</span>
																	<!--end::Label-->
																</td>
																<td class="text-end pe-12">
																	<span class="badge py-3 px-4 fs-7 badge-success">Approved</span>
																</td>
																<td class="text-end pe-0">
																	<span class="text-gray-800 fw-semibold d-block ">8 Nov, 2023</span>
																</td>
															</tr>
														</tbody>
														<!--end::Table body-->
													</table>
												</div>
												<!--end::Table-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::Table widget 14-->
									</div>

                <br><br>
                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                  <!--begin::Col-->
                  <div class="col-xl-6">
                    <!--begin::Card widget 19-->
                    <div class="card card-flush h-lg-100">
                      <!--begin::Header-->
                      <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                          <span class="card-label fw-bold text-dark"
                            >Tipe dan Aplikasi Mahasiswa</span
                          >
                          <span class="text-gray-400 mt-1 fw-semibold fs-6"
                            >Jumlah aplikasi mahasiswa terhadap tipe lowongan</span
                          >
                        </h3>
                        <!--end::Title-->
                      </div>
                      <!--end::Header-->
                      <!--begin::Card body-->
                      <div class="card-body d-flex align-items-end pt-6">
                        <!--begin::Row-->
                        <div class="row align-items-center mx-0 w-100">
                          <!--begin::Col-->
                          <div class="col-7 px-0">
                            <!--begin::Labels-->
                            <div
                              class="d-flex flex-column content-justify-center"
                            >
                              <!--begin::Label-->
                              <div
                                class="d-flex fs-6 fw-semibold align-items-center"
                              >
                                <!--begin::Bullet-->
                                <div
                                  class="bullet bg-success me-3"
                                  style="
                                    border-radius: 3px;
                                    width: 12px;
                                    height: 12px;
                                  "
                                ></div>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="fs-5 fw-bold text-gray-600 me-5">
                                  Magang
                                </div>
                                <!--end::Label-->
                                <!--begin::Stats-->
                                <div
                                  class="ms-auto fw-bolder text-gray-700 text-end"
                                >
                                  72.56%
                                </div>
                                <!--end::Stats-->
                              </div>
                              <!--end::Label-->
                              <!--begin::Label-->
                              <div
                                class="d-flex fs-6 fw-semibold align-items-center my-4"
                              >
                                <!--begin::Bullet-->
                                <div
                                  class="bullet bg-primary me-3"
                                  style="
                                    border-radius: 3px;
                                    width: 12px;
                                    height: 12px;
                                  "
                                ></div>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="fs-5 fw-bold text-gray-600 me-5">
                                  Magang dan Studi Independen
                                </div>
                                <!--end::Label-->
                                <!--begin::Stats-->
                                <div
                                  class="ms-auto fw-bolder text-gray-700 text-end"
                                >
                                  29.34%
                                </div>
                                <!--end::Stats-->
                              </div>
                              <!--end::Label-->
                              <!--begin::Label-->
                              <div
                                class="d-flex fs-6 fw-semibold align-items-center"
                              >
                                <!--begin::Bullet-->
                                <div
                                  class="bullet me-3"
                                  style="
                                    border-radius: 3px;
                                    background-color: #e4e6ef;
                                    width: 12px;
                                    height: 12px;
                                  "
                                ></div>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="fs-5 fw-bold text-gray-600 me-5">
                                  Studi Independen
                                </div>
                                <!--end::Label-->
                                <!--begin::Stats-->
                                <div
                                  class="ms-auto fw-bolder text-gray-700 text-end"
                                >
                                  17.83%
                                </div>
                                <!--end::Stats-->
                              </div>
                              <!--end::Label-->
                            </div>
                            <!--end::Labels-->
                          </div>
                          <!--end::Col-->
                          <!--begin::Col-->
                          <div class="col-5 d-flex justify-content-end px-0">
                            <!--begin::Chart-->
                            <div
                              id="kt_card_widget_19_chart"
                              class="min-h-auto h-150px w-150px"
                              data-kt-size="150"
                              data-kt-line="25"
                            ></div>
                            <!--end::Chart-->
                          </div>
                          <!--end::Col-->

                        </div>

                      </div>
                      <!--end::Card body-->
                    </div>
                    <!--end::Card widget 19-->

                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                 <div class="col-xl-6">
                    <!--begin::Card widget 19-->
                    <div class="card card-flush h-lg-100">
                      <!--begin::Header-->
                      <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                          <span class="card-label fw-bold text-dark"
                            >Tingkat Penerimaan Mahasiswa</span
                          >
                          <span class="text-gray-400 mt-1 fw-semibold fs-6"
                            >Jumlah aplikasi mahasiswa terhadap tipe lowongan</span
                          >
                        </h3>
                        <!--end::Title-->
                      </div>
                      <!--end::Header-->
                      <!--begin::Card body-->
                      <div class="card-body d-flex align-items-end pt-6">
                        <!--begin::Row-->
                        <div class="row align-items-center mx-0 w-100">
                          <!--begin::Col-->
                          <div class="col-7 px-0">
                            <!--begin::Labels-->
                            <div
                              class="d-flex flex-column content-justify-center"
                            >
                              <!--begin::Label-->
                              <div
                                class="d-flex fs-6 fw-semibold align-items-center"
                              >
                                <!--begin::Bullet-->
                                <div
                                  class="bullet bg-success me-3"
                                  style="
                                    border-radius: 3px;
                                    width: 12px;
                                    height: 12px;
                                  "
                                ></div>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="fs-5 fw-bold text-gray-600 me-5">
                                  Approved
                                </div>
                                <!--end::Label-->
                                <!--begin::Stats-->
                                <div
                                  class="ms-auto fw-bolder text-gray-700 text-end"
                                >
                                  72.56%
                                </div>
                                <!--end::Stats-->
                              </div>
                              <!--end::Label-->
                              <!--begin::Label-->
                              <div
                                class="d-flex fs-6 fw-semibold align-items-center my-4"
                              >
                                <!--begin::Bullet-->
                                <div
                                  class="bullet bg-primary me-3"
                                  style="
                                    border-radius: 3px;
                                    width: 12px;
                                    height: 12px;
                                  "
                                ></div>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="fs-5 fw-bold text-gray-600 me-5">
                                  Applied
                                </div>
                                <!--end::Label-->
                                <!--begin::Stats-->
                                <div
                                  class="ms-auto fw-bolder text-gray-700 text-end"
                                >
                                  29.34%
                                </div>
                                <!--end::Stats-->
                              </div>
                              <!--end::Label-->
                              <!--begin::Label-->
                              <div
                                class="d-flex fs-6 fw-semibold align-items-center"
                              >
                                <!--begin::Bullet-->
                                <div
                                  class="bullet me-3"
                                  style="
                                    border-radius: 3px;
                                    background-color:#D9214E;
                                    width: 12px;
                                    height: 12px;
                                  "
                                ></div>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="fs-5 fw-bold text-gray-600 me-5">
                                  Rejected
                                </div>
                                <!--end::Label-->
                                <!--begin::Stats-->
                                <div
                                  class="ms-auto fw-bolder text-gray-700 text-end"
                                >
                                  17.83%
                                </div>
                                <!--end::Stats-->
                              </div>
                              <!--end::Label-->
                            </div>
                            <!--end::Labels-->
                          </div>
                          <!--end::Col-->
                          <!--begin::Col-->
                          <div class="col-5 d-flex justify-content-end px-0">
                            <!--begin::Chart-->
                            <div
                              id="kt_card_widget_20_chart"
                              class="min-h-auto h-150px w-150px"
                              data-kt-size="150"
                              data-kt-line="25"
                            >
                            </div>
                            <!--end::Chart-->
                          </div>
                          <!--end::Col-->

                        </div>

                      </div>
                      <!--end::Card body-->
                    </div>
                    <!--end::Card widget 19-->

                  </div>
                      <!--end::Body-->
                    </div>

                  </div>
                  <!--end::Col-->
                </div>
            <!--end::Search-->
          </div>
          <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
      </div>
      <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Users Search-->
    <!--end::Modals-->
    <!--begin::Javascript-->
    <script>
      var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
  </body>
  <!--end::Body-->
</html>
