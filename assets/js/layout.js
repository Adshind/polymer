/**
 * Polymer Products - Centralized Header & Footer Component
 * Automatically injects responsive Header, Offcanvas Navigation, and Footer
 * across all pages, with automatic active-page highlighting.
 */

(function () {
    'use strict';

    // Get current filename from URL
    function getCurrentPage() {
        var path = window.location.pathname;
        var page = path.split('/').pop().toLowerCase() || 'index.html';
        if (!page.includes('.html')) {
            page = page ? page + '.html' : 'index.html';
        }
        return page;
    }

    var currentPage = getCurrentPage();

    // Helper to check if link matches current page
    function isActive(pageName) {
        return currentPage === pageName ? ' active' : '';
    }

    // 1. Centralized Header HTML
    var headerHTML = `
    <!-- Top Contact Bar -->
    <div class="ht-top-header" style="background:var(--theme-primary); border-bottom:1px solid rgba(255,255,255,0.15); padding:8px 0;">
        <div class="container-fluid px-3 px-lg-5">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7">
                    <div class="left text-center text-md-start">
                        <p class="mb-0 text-white" style="font-size:13px;">
                            <i class="fa-solid fa-location-dot text-white me-2"></i> Nashik Manufacturing Facility, Maharashtra, India
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <ul class="right list-inline mb-0 text-center text-md-end" style="font-size:13px;">
                        <li class="list-inline-item me-3">
                            <i class="fa-solid fa-phone text-white me-1"></i>
                            <a href="tel:8975766459" class="text-white text-decoration-none">+91 8975766459</a> /
                            <a href="tel:02532350935" class="text-white text-decoration-none">0253 235 0935</a>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa-solid fa-envelope text-white me-1"></i>
                            <a href="mailto:qc@polymerproducts.org" class="text-white text-decoration-none">qc@polymerproducts.org</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Sticky Navigation Bar -->
    <div class="ht-main-header header-1" id="header-sticky">
        <div class="container-fluid px-3 px-lg-5">
            <div class="ht-menu-wrapper d-flex align-items-center justify-content-between py-2">
                <div class="ht-menu-left d-flex align-items-center">
                    <!-- Brand Logo -->
                    <div class="ht-menu-logo me-4 me-xxl-5">
                        <a href="index.html" class="d-flex align-items-center text-decoration-none logo-anim">
                            <img src="assets/img/img/banner/polymer-logo-new.webp" alt="Polymer Products Logo" style="height: 60px; width: auto; object-fit: contain;">
                        </a>
                    </div>
                    <!-- Desktop Navigation Menu -->
                    <div class="ht-menu-main d-none d-xl-block">
                        <nav class="ht-mobile-menu-active">
                            <ul class="d-flex align-items-center mb-0 list-unstyled" style="gap: 0rem;">
                                <li class="${isActive('index.html')}"><a href="index.html" class="fw-semibold nav-link-item">Home</a></li>
                                
                                <li class="has-dropdown ${['about.html'].includes(currentPage) ? ' active' : ''}">
                                    <a href="about.html" class="fw-semibold nav-link-item">
                                        About Us <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="${isActive('about.html')}"><a href="about.html">Company Overview</a></li>
                                        <li><a href="index.html#certifications">Statutory & Quality Approvals</a></li>
                                        <li><a href="about.html#sister-concern">  (Dynamic Prestress)</a></li>
                                        <li><a href="about.html#our-team">Our Technical Team</a></li>
                                        <li><a href="about.html#bearing-types">Bearing Types & Applications</a></li>
                                    </ul>
                                </li>
                                
                                <li class="has-dropdown ${['services.html', 'material-used.html', 'application-codes.html'].includes(currentPage) ? ' active' : ''}">
                                    <a href="services.html" class="fw-semibold nav-link-item">
                                        Products & Specs <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="${isActive('services.html')}"><a href="services.html">Proposed Bearing Types</a></li>
                                        <li class="${isActive('material-used.html')}"><a href="material-used.html">Raw Materials Used</a></li>
                                        <li class="${isActive('application-codes.html')}"><a href="application-codes.html">Application Codes & Standards</a></li>
                                    </ul>
                                </li>
                                
                                <li class="has-dropdown ${['process.html', 'testing.html', 'identification.html'].includes(currentPage) ? ' active' : ''}">
                                    <a href="process.html" class="fw-semibold nav-link-item">
                                        Manufacturing & QC <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="${isActive('process.html')}"><a href="process.html">Detailed Process Flow</a></li>
                                        <li><a href="process.html#machinery">List of Machinery</a></li>
                                        <li class="${isActive('testing.html')}"><a href="testing.html">Testing & QA/QC System (NHAI/RDSO)</a></li>
                                        <li class="${isActive('identification.html')}"><a href="identification.html">Product Identification System</a></li>
                                    </ul>
                                </li>
                                
                                <li class="${isActive('experience.html')}"><a href="experience.html" class="fw-semibold nav-link-item">Experience & Supplies</a></li>
                                <li class="${isActive('storage-handling.html')}"><a href="storage-handling.html" class="fw-semibold nav-link-item">Storage & Installation</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                
                <!-- Action Button & Mobile Toggle -->
                <div class="ht-menu-right d-flex align-items-center">
                    <a href="contact.html" class="header-contact-btn ht-btn-anim d-none d-xl-inline-flex align-items-center">
                        <span class="btn-text">Contact Us</span>
                        <i class="fa-solid fa-arrow-right ms-2 btn-icon"></i>
                    </a>
                    <button class="ht-menu-btn d-xl-none offcanvas-toggle btn border-0 p-2 ms-2"
                        style="border-radius:8px; background:var(--theme-subtle); color:var(--theme-primary);"
                        aria-label="Toggle menu">
                        <i class="fa-solid fa-bars-staggered fa-lg"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Offcanvas Mobile Navigation Drawer -->
    <div class="ht-offcanvas">
        <div class="ht-offcanvas-wrapper">
            <div class="ht-offcanvas-header mb-40 d-flex justify-content-between align-items-center">
                <a href="index.html" class="d-flex align-items-center text-decoration-none">
                    <img src="assets/img/img/banner/polymer-logo-new.webp" alt="Polymer Products" style="height: 48px; width: auto; object-fit: contain;">
                </a>
                <button class="ht-offcanvas-toggle-close btn-close" aria-label="Close menu"></button>
            </div>
            
            <div class="ht-offcanvas-menu mb-40">
                <nav class="mobile-nav">
                    <ul class="list-unstyled">
                        <li class="py-2 border-bottom"><a href="index.html" class="fw-bold text-dark text-decoration-none">Home</a></li>
                        <li class="py-2 border-bottom"><a href="about.html" class="fw-bold text-dark text-decoration-none">About Us & Team</a></li>
                        <li class="py-2 border-bottom"><a href="services.html" class="fw-bold text-dark text-decoration-none">Proposed Bearing Types</a></li>
                        <li class="py-2 border-bottom"><a href="material-used.html" class="fw-bold text-dark text-decoration-none">Raw Materials Used</a></li>
                        <li class="py-2 border-bottom"><a href="process.html" class="fw-bold text-dark text-decoration-none">Manufacturing Process & Machinery</a></li>
                        <li class="py-2 border-bottom"><a href="testing.html" class="fw-bold text-dark text-decoration-none">Testing & QA/QC System</a></li>
                        <li class="py-2 border-bottom"><a href="identification.html" class="fw-bold text-dark text-decoration-none">Product Identification System</a></li>
                        <li class="py-2 border-bottom"><a href="experience.html" class="fw-bold text-dark text-decoration-none">Experience & Supplies (NHAI/Metro/Rail)</a></li>
                        <li class="py-2 border-bottom"><a href="storage-handling.html" class="fw-bold text-dark text-decoration-none">Storage, Handling & Installation</a></li>
                        <li class="py-2 border-bottom"><a href="application-codes.html" class="fw-bold text-dark text-decoration-none">Application Codes & Standards</a></li>
                        <li class="pt-3">
                            <a href="contact.html" class="d-inline-block text-white text-decoration-none fw-bold px-4 py-2"
                                style="background:var(--theme-primary); border-radius:50px;">Contact Us / Request Quote &rarr;</a>
                        </li>
                    </ul>
                </nav>
            </div>
            
            <div class="ht-offcanvas-info mb-40">
                <h4 class="ht-offcanvas__title mb-2" style="font-size:16px; font-weight:700;">Plant Contact Info</h4>
                <p class="mb-1" style="font-size:13px;"><i class="fa-solid fa-location-dot me-2 text-danger"></i>Nashik Facility, Maharashtra</p>
                <p class="mb-1" style="font-size:13px;"><i class="fa-solid fa-phone me-2 text-success"></i><a href="tel:8975766459" class="text-dark">+91 8975766459</a></p>
                <p class="mb-1" style="font-size:13px;"><i class="fa-solid fa-envelope me-2 text-primary"></i><a href="mailto:qc@polymerproducts.org" class="text-dark">qc@polymerproducts.org</a></p>
            </div>
        </div>
    </div>
    <div class="ht-offcanvas-overlay"></div>
    `;

    // 2. Centralized Footer HTML
    var footerHTML = `
    <!-- Ambient Glow Effect -->
    <div class="footer-shape position-absolute" style="top:0; right:0; opacity:0.04; pointer-events:none;">
        <svg width="400" height="400" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="200" cy="200" r="200" fill="var(--theme-primary)" />
        </svg>
    </div>

    <div class="container-fluid px-3 px-lg-5 position-relative" style="z-index: 2;">
        <!-- Top Brand & Group Strip -->
        <div class="footer-brand-strip p-4 mb-5 rounded-4 d-flex flex-wrap align-items-center justify-content-between gap-3"
            style="background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.08); backdrop-filter: blur(8px);">
            <div class="d-flex align-items-center">
                <div class="footer-logo-wrap me-3 p-2 bg-white rounded-3 shadow-sm d-flex align-items-center justify-content-center"
                    style="min-width: 50px;">
                    <img src="assets/img/img/banner/polymer-logo-new.webp" alt="Polymer Products" style="height: 42px; width: auto; object-fit: contain;">
                </div>
                <div>
                    <h4 class="text-white mb-0 fw-bold" style="font-family:'Oswald', sans-serif; letter-spacing: 0.5px; font-size: 22px;">POLYMER PRODUCTS</h4>
                    <p class="mb-0 small" style="color: #94a3b8; font-size: 13px;">Leading Manufacturer of Elastomeric Bridge Bearings &amp; Seismic Solutions</p>
                </div>
            </div>

            <div class="d-flex align-items-center gap-3 flex-wrap">
                <span class="badge px-3 py-2 rounded-pill fw-semibold"
                    style="background: var(--theme-subtle); border: 1px solid var(--theme-glow); color: var(--theme-lighter); font-size: 13px;">
                    <i class="fa-solid fa-building-shield me-2 text-primary"></i>  Dynamic Prestress (I) Pvt. Ltd.
                </span>
                <a href="contact.html" class="btn btn-primary btn-sm rounded-pill px-4 py-2 fw-bold text-uppercase"
                    style="background:var(--theme-primary); border-color:var(--theme-primary); font-size:12px; letter-spacing:0.5px;">
                    Request Technical RFQ <i class="fa-solid fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>

        <!-- Main 4-Column Widget Grid -->
        <div class="footer-widget-wrapper mb-5">
            <div class="row g-4 g-lg-5">
                <!-- Column 1: Company Info & Approvals -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <h5 class="footer-title text-white mb-3 fw-bold text-uppercase"
                        style="font-family:'Oswald', sans-serif; font-size: 18px; letter-spacing: 0.5px;">
                        About The Company
                    </h5>
                    <p style="color: #94a3b8; font-size: 14px; line-height: 1.8;">
                        Polymer Products is an established manufacturing division specialising in high-precision
                        <strong>Elastomeric Bearings</strong> and <strong>Seismic Isolation Pads</strong> for
                        National Highways, Indian Railways, Metro systems, and major flyovers.
                    </p>

                    <div class="d-flex flex-wrap gap-2 mt-3 mb-3">
                        <span class="badge bg-dark border border-secondary text-light px-2 py-1" style="font-size: 11px;">ISO 9001:2027</span>
                        <span class="badge bg-dark border border-secondary text-light px-2 py-1" style="font-size: 11px;">RDSO Approved</span>
                        <span class="badge bg-dark border border-secondary text-light px-2 py-1" style="font-size: 11px;">IRC:83 (Part II)</span>
                        <span class="badge bg-dark border border-secondary text-light px-2 py-1" style="font-size: 11px;">NHAI QAP</span>
                    </div>

                    <div class="mt-2">
                        <a href="http://www.dynamicprestress.org" target="_blank" class="footer-web-link text-decoration-none small d-inline-flex align-items-center" style="color: var(--theme-light);">
                            <i class="fa-solid fa-globe me-2"></i> Group Portal: www.dynamicprestress.org
                        </a>
                    </div>
                </div>

                <!-- Column 2: Products & Solutions -->
                <div class="col-xl-2 col-lg-3 col-md-6">
                    <h5 class="footer-title text-white mb-3 fw-bold text-uppercase"
                        style="font-family:'Oswald', sans-serif; font-size: 18px; letter-spacing: 0.5px;">
                        Core Products
                    </h5>
                    <ul class="list-unstyled footer-links mb-0" style="font-size: 14px; line-height: 2.3;">
                        <li><a href="services.html" class="text-decoration-none footer-link"><i class="fa-solid fa-chevron-right me-2 text-primary" style="font-size: 10px;"></i>Elastomeric Bearings</a></li>
                        <li><a href="services.html" class="text-decoration-none footer-link"><i class="fa-solid fa-chevron-right me-2 text-primary" style="font-size: 10px;"></i>Seismic Damping Pads</a></li>
                        <li><a href="services.html" class="text-decoration-none footer-link"><i class="fa-solid fa-chevron-right me-2 text-primary" style="font-size: 10px;"></i>PTFE Sliding Bearings</a></li>
                        <li><a href="material-used.html" class="text-decoration-none footer-link"><i class="fa-solid fa-chevron-right me-2 text-primary" style="font-size: 10px;"></i>Raw Elastomer (NR/CR)</a></li>
                        <li><a href="application-codes.html" class="text-decoration-none footer-link"><i class="fa-solid fa-chevron-right me-2 text-primary" style="font-size: 10px;"></i>Application Standards</a></li>
                    </ul>
                </div>

                <!-- Column 3: Quality & Process -->
                <div class="col-xl-2 col-lg-2 col-md-6">
                    <h5 class="footer-title text-white mb-3 fw-bold text-uppercase"
                        style="font-family:'Oswald', sans-serif; font-size: 18px; letter-spacing: 0.5px;">
                        Quality &amp; QA
                    </h5>
                    <ul class="list-unstyled footer-links mb-0" style="font-size: 14px; line-height: 2.3;">
                        <li><a href="process.html" class="text-decoration-none footer-link"><i class="fa-solid fa-chevron-right me-2 text-primary" style="font-size: 10px;"></i>Manufacturing SOP</a></li>
                        <li><a href="testing.html" class="text-decoration-none footer-link"><i class="fa-solid fa-chevron-right me-2 text-primary" style="font-size: 10px;"></i>Testing Facilities</a></li>
                        <li><a href="identification.html" class="text-decoration-none footer-link"><i class="fa-solid fa-chevron-right me-2 text-primary" style="font-size: 10px;"></i>Bearing Traceability</a></li>
                        <li><a href="storage-handling.html" class="text-decoration-none footer-link"><i class="fa-solid fa-chevron-right me-2 text-primary" style="font-size: 10px;"></i>Storage &amp; Handling</a></li>
                        <li><a href="experience.html" class="text-decoration-none footer-link"><i class="fa-solid fa-chevron-right me-2 text-primary" style="font-size: 10px;"></i>NHAI &amp; Metro Track</a></li>
                    </ul>
                </div>

                <!-- Column 4: Manufacturing Plant & Contact Coordinates -->
                <div class="col-xl-4 col-lg-3 col-md-6">
                    <h5 class="footer-title text-white mb-3 fw-bold text-uppercase"
                        style="font-family:'Oswald', sans-serif; font-size: 18px; letter-spacing: 0.5px;">
                        Plant &amp; Coordinates
                    </h5>
                    <div class="footer-contact-item d-flex align-items-start mb-3">
                        <div class="contact-icon me-3 mt-1 d-flex align-items-center justify-content-center rounded-circle flex-shrink-0"
                            style="width: 34px; height: 34px; background: var(--theme-subtle); color: var(--theme-light);">
                            <i class="fa-solid fa-location-dot" style="font-size: 14px;"></i>
                        </div>
                        <div style="font-size: 14px; color: #cbd5e1; line-height: 1.6;">
                            <span class="d-block fw-semibold text-white">Manufacturing Plant:</span>
                            Nashik Facility, Maharashtra, India
                        </div>
                    </div>

                    <div class="footer-contact-item d-flex align-items-start mb-3">
                        <div class="contact-icon me-3 mt-1 d-flex align-items-center justify-content-center rounded-circle flex-shrink-0"
                            style="width: 34px; height: 34px; background: var(--theme-subtle); color: var(--theme-light);">
                            <i class="fa-solid fa-phone" style="font-size: 14px;"></i>
                        </div>
                        <div style="font-size: 14px; color: #cbd5e1; line-height: 1.6;">
                            <span class="d-block fw-semibold text-white">Direct Hotlines:</span>
                            <a href="tel:8975766459" class="text-decoration-none text-light me-2 hover-blue">+91 8975766459</a> |
                            <a href="tel:02532350935" class="text-decoration-none text-light ms-1 hover-blue">0253 235 0935</a>
                        </div>
                    </div>

                    <div class="footer-contact-item d-flex align-items-start">
                        <div class="contact-icon me-3 mt-1 d-flex align-items-center justify-content-center rounded-circle flex-shrink-0"
                            style="width: 34px; height: 34px; background: var(--theme-subtle); color: var(--theme-light);">
                            <i class="fa-solid fa-envelope" style="font-size: 14px;"></i>
                        </div>
                        <div style="font-size: 14px; color: #cbd5e1; line-height: 1.6;">
                            <span class="d-block fw-semibold text-white">Technical Inquiries:</span>
                            <a href="mailto:qc@polymerproducts.org" class="text-decoration-none text-light d-block hover-blue">qc@polymerproducts.org</a>
                            <a href="mailto: " class="text-decoration-none text-light d-block hover-blue"> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Copyright & Compliance -->
        <div class="footer-bottom-bar pt-4 pb-2 border-top d-flex flex-wrap align-items-center justify-content-between gap-3"
            style="border-color: rgba(255, 255, 255, 0.08) !important; font-size: 13px; color: #64748b;">
            <p class="mb-0">
                &copy; 2026 <strong class="text-light">Polymer Products</strong> (Dynamic Prestress Group). Engineered in Nashik, Maharashtra.
            </p>
            <div class="d-flex align-items-center gap-4">
                <a href="experience.html" class="text-decoration-none text-muted-link">Track Record</a>
                <a href="process.html" class="text-decoration-none text-muted-link">Testing Standards</a>
                <a href="contact.html" class="text-decoration-none text-muted-link">Contact Desk</a>
            </div>
        </div>
    </div>
    `;

    // Function to render layout components into target containers
    function initLayout() {
        // Render Header
        var headerContainer = document.getElementById('site-header');
        if (headerContainer && headerContainer.innerHTML.trim() === '') {
            headerContainer.innerHTML = headerHTML;
            headerContainer.className = 'ht-header-area header-1';
        }

        // Render Footer
        var footerContainer = document.getElementById('site-footer');
        if (footerContainer && footerContainer.innerHTML.trim() === '') {
            footerContainer.innerHTML = footerHTML;
            footerContainer.className = 'ht-footer-area position-relative fix';
            footerContainer.style.background = 'linear-gradient(180deg, #091a33 0%, #050d1a 100%)';
            footerContainer.style.color = '#cbd5e1';
            footerContainer.style.paddingTop = '60px';
            footerContainer.style.paddingBottom = '25px';
        }

        // Bind interactive event listeners (offcanvas & sticky header)
        bindLayoutEvents();
    }

    function bindLayoutEvents() {
        // Offcanvas open
        document.querySelectorAll('.offcanvas-toggle').forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                var offcanvas = document.querySelector('.ht-offcanvas');
                var overlay = document.querySelector('.ht-offcanvas-overlay');
                if (offcanvas) offcanvas.classList.add('ht-offcanvas-open');
                if (overlay) overlay.classList.add('ht-offcanvas-overlay-open');
            });
        });

        // Offcanvas close
        document.querySelectorAll('.ht-offcanvas-toggle-close, .ht-offcanvas-overlay').forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                var offcanvas = document.querySelector('.ht-offcanvas');
                var overlay = document.querySelector('.ht-offcanvas-overlay');
                if (offcanvas) offcanvas.classList.remove('ht-offcanvas-open');
                if (overlay) overlay.classList.remove('ht-offcanvas-overlay-open');
            });
        });

        // Sticky Header scroll listener
        window.addEventListener('scroll', function () {
            var stickyHeader = document.getElementById('header-sticky');
            if (stickyHeader) {
                if (window.scrollY > 250) {
                    stickyHeader.classList.add('sticky');
                } else {
                    stickyHeader.classList.remove('sticky');
                }
            }
        });
    }

    // Execute when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initLayout);
    } else {
        initLayout();
    }

    // Export for external callers if needed
    window.initPolymerLayout = initLayout;
})();
