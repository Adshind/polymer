<?php
/**
 * Polymer Products - Dynamic Header Component
 * Common Header with active nav detection & SEO metadata support
 */
if (!isset($page_title) || empty($page_title)) {
    $page_title = "Polymer Products - Leading Manufacturer of Elastomeric Bridge Bearings & Seismic Solutions";
}
if (!isset($meta_description) || empty($meta_description)) {
    $meta_description = "Manufacturer and supplier of Elastomeric Bearings and Seismic Pads for bridges, highways, Indian Railways, and Metro infrastructure. ISO 9001:2027 & RDSO Approved. Manufacturing Unit: H-32, M.I.D.C. Satpur, Nashik-422007 Maharashtra, India. Established in 1978.";
}
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Polymer Products">
    <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    
    <!-- Google Fonts: Saira, Saira Semi Condensed & Oswald -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Saira+Semi+Condensed:wght@400;500;600;700&family=Saira:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Favicon img -->
    <link rel="shortcut icon" href="assets/img/img/banner/favicon.ico">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--<< Theme Switcher CSS >>-->
    <link rel="stylesheet" href="assets/css/theme-switcher.css">
    <!--<< Layout.css >>-->
    <link rel="stylesheet" href="assets/css/layout.css">
</head>

<body class="body-color">
    <!-- Preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div><!-- Preloader area end -->

    <!-- Mouse Cursor -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    
    <!-- Scroll Up Start -->
    <button id="back-top" class="back-to-top">
        <i class="fa-solid fa-arrow-up"></i>
    </button><!-- Scroll Up End -->

    <!-- Header Start -->
    <header class="ht-header-area header-1">
        <!-- ht-top-header area start -->
        <div class="ht-top-header"
            style="background:var(--theme-primary); border-bottom:1px solid rgba(255,255,255,0.15); padding:8px 0;">
            <div class="container-fluid px-3 ">
                <div class="row align-items-center g-2">
                    <div class="col-lg-6 col-md-6 text-center text-md-start">
                        <p class="mb-0 text-white small" style="font-size:13px; font-family:'Saira-Medium', sans-serif;">
                            <i class="fa-solid fa-location-dot text-white me-2"></i>H-32, M.I.D.C. SATPUR, NASHIK-422007 Maharashtra, India
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 text-center text-md-end">
                        <ul class="right list-inline mb-0 small" style="font-size:13px; font-family:'Saira-Medium', sans-serif;">
                            <!-- <li class="list-inline-item me-3">
                                <i class="fa-solid fa-phone text-white me-1"></i>
                                <a href="tel:8975766459" class="text-white text-decoration-none fw-semibold">+91 8975766459</a>
                                <span class="d-none d-sm-inline"> / <a href="tel:02532350935" class="text-white text-decoration-none">0253 235 0935</a></span>
                            </li> -->
                            <li class="list-inline-item d-none d-sm-inline-block">
                                <i class="fa-solid fa-envelope text-white me-1"></i>
                                <a href="mailto:sales@polymerproducts.org" class="text-white text-decoration-none">sales@polymerproducts.org</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- ht-main-header area start -->
        <div class="ht-main-header header-1" id="header-sticky">
            <div class="container-fluid px-3 ">
                <div class="ht-menu-wrapper d-flex align-items-center justify-content-between py-2">
                    <!-- Brand Logo -->
                    <div class="ht-menu-left d-flex align-items-center">
                        <div class="ht-menu-logo">
                            <a href="index.php" class="d-flex align-items-center text-decoration-none logo-anim">
                                <img src="assets/img/img/banner/polymer-logo-3.png" alt="Polymer Products"
                                    class="header-logo-img"
                                    style="height: 65px; width: auto; object-fit: contain;">
                            </a>
                        </div>
                    </div>

                    <!-- Right Side: Navigation Menu + CTA Button & Mobile Hamburger -->
                    <div class="ht-menu-right d-flex align-items-center gap-3 gap-xxl-4 ms-auto">
                        <!-- Desktop Navigation Menu -->
                        <div class="ht-menu-main d-none d-xl-block">
                            <nav class="ht-mobile-menu-active">
                                <ul class="d-flex align-items-center mb-0 list-unstyled" style="gap: 0rem;">
                                    <li class="<?php echo ($current_page == 'index.php' || $current_page == '' || $current_page == 'index.html') ? 'active' : ''; ?>">
                                        <a href="index.php" class="fw-semibold nav-link-item">Home</a>
                                    </li>
                                    
                                    <li class="has-dropdown <?php echo in_array($current_page, ['about.php', 'about.html']) ? 'active' : ''; ?>">
                                        <a href="about.php" class="fw-semibold nav-link-item">
                                            About Us <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="about.php">Company Overview</a></li>
                                            <li><a href="certifications.php">Statutory & Quality Approvals</a></li>
                                             
                                            <!-- <li><a href="team.php">Our Technical Team</a></li> -->
                                            <li><a href="about.php#bearing-types">Bearing Types & Applications</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li class="has-dropdown <?php echo in_array($current_page, ['services.php', 'services.html', 'material-used.php', 'material-used.html', 'application-codes.php', 'application-codes.html']) ? 'active' : ''; ?>">
                                        <a href="services.php" class="fw-semibold nav-link-item">
                                            Products & Specs <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="services.php">Proposed Bearing Types</a></li>
                                            <li><a href="material-used.php">Raw Materials Used</a></li>
                                            <li><a href="application-codes.php">Application Codes & Standards</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li class="has-dropdown <?php echo in_array($current_page, ['process.php', 'process.html', 'testing.php', 'testing.html', 'identification.php', 'identification.html']) ? 'active' : ''; ?>">
                                        <a href="process.php" class="fw-semibold nav-link-item">
                                            Manufacturing & QC <i class="fa-solid fa-chevron-down dropdown-icon"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="process.php">Detailed Process Flow</a></li>
                                            <li><a href="process.php#machinery">List of Machinery</a></li>
                                            <li><a href="testing.php">Testing & QA/QC System (NHAI/RDSO)</a></li>
                                            <li><a href="identification.php">Product Identification System</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li class="<?php echo in_array($current_page, ['experience.php', 'experience.html']) ? 'active' : ''; ?>">
                                        <a href="experience.php" class="fw-semibold nav-link-item">Experience & Supplies</a>
                                    </li>
                                    
                                    <li class="<?php echo in_array($current_page, ['storage-handling.php', 'storage-handling.html']) ? 'active' : ''; ?>">
                                        <a href="storage-handling.php" class="fw-semibold nav-link-item">Storage & Installation</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <!-- Desktop CTA -->
                        <a href="contact.php"
                            class="header-contact-btn ht-btn-anim d-none d-xl-inline-flex align-items-center text-uppercase"
                            style="font-family: 'Saira-Medium', sans-serif !important; letter-spacing: 0.5px; font-weight: 600;">
                            <span class="btn-text">Contact Us</span>
                            <svg class="btn-icon ms-2" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: inline-block; vertical-align: middle;">
                                <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>

                        

                        <!-- Mobile Hamburger Toggle -->
                        <button class="ht-menu-btn d-xl-none offcanvas-toggle btn border-0 p-2 d-flex align-items-center justify-content-center"
                            style="width: 42px; height: 42px; border-radius: 10px; background: var(--theme-subtle); color: var(--theme-primary);"
                            aria-label="Toggle Navigation Menu">
                            <i class="fa-solid fa-bars-staggered fa-lg"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Offcanvas Navigation Drawer (Mobile & Tablet) -->
    <div class="ht-offcanvas">
        <div class="ht-offcanvas-wrapper">
            <!-- Offcanvas Header -->
            <div class="ht-offcanvas-header mb-4 pb-3 border-bottom d-flex justify-content-between align-items-center">
                <a href="index.php" class="d-flex align-items-center text-decoration-none">
                    <img src="assets/img/img/banner/polymer-logo-new.webp" alt="Polymer Products"
                        style="height: 46px; width: auto; object-fit: contain;">
                </a>
                <button type="button" class="ht-offcanvas-toggle-close btn btn-light rounded-circle p-2 d-flex align-items-center justify-content-center"
                    style="width: 36px; height: 36px;" aria-label="Close Navigation">
                    <i class="fa-solid fa-xmark text-dark fs-5"></i>
                </button>
            </div>

            <!-- Offcanvas Navigation Links (Cloned dynamically by main.js with fallback) -->
            <div class="ht-offcanvas-menu mb-4">
                <nav class="mobile-nav">
                    <ul class="list-unstyled mb-0">
                        <li><a href="index.php">Home</a></li>
                        <li class="has-dropdown">
                            <a href="about.php">About Us</a>
                            <ul class="sub-menu">
                                <li><a href="about.php">Company Overview</a></li>
                                <li><a href="certifications.php">Statutory &amp; Quality Approvals</a></li>
                                <li><a href="about.php#sister-concern">Sister Concern (Dynamic Prestress)</a></li>
                                <li><a href="team.php">Our Technical Team</a></li>
                                <li><a href="about.php#bearing-types">Bearing Types &amp; Applications</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="services.php">Products & Specs</a>
                            <ul class="sub-menu">
                                <li><a href="services.php">Proposed Bearing Types</a></li>
                                <li><a href="material-used.php">Raw Materials Used</a></li>
                                <li><a href="application-codes.php">Application Codes & Standards</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="process.php">Manufacturing & QC</a>
                            <ul class="sub-menu">
                                <li><a href="process.php">Detailed Process Flow</a></li>
                                <li><a href="process.php#machinery">List of Machinery</a></li>
                                <li><a href="testing.php">Testing & QA/QC System (NHAI/RDSO)</a></li>
                                <li><a href="identification.php">Product Identification System</a></li>
                            </ul>
                        </li>
                        <li><a href="experience.php">Experience & Supplies</a></li>
                        <li><a href="storage-handling.php">Storage & Installation</a></li>
                        <li><a href="application-codes.php">Application Standards</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Offcanvas Direct CTA Button -->
            <div class="mb-4">
                <a href="contact.php"
                    class="btn btn-primary w-100 py-3 rounded-pill text-white fw-bold text-uppercase d-flex align-items-center justify-content-center shadow-sm"
                    style="background: var(--theme-primary); border-color: var(--theme-primary); font-family: 'Saira-Medium', sans-serif !important; font-size: 14px; letter-spacing: 0.5px;">
                    <i class="fa-solid fa-paper-plane me-2"></i> Request Technical RFQ
                </a>
            </div>

            <!-- Offcanvas Plant Quick Contact Info -->
            <div class="ht-offcanvas-info p-3 rounded-3" style="background: #f8fafc; border: 1px solid #e2e8f0;">
                <h6 class="fw-bold text-dark mb-1" style="font-family: 'Saira-Medium', sans-serif; font-size: 14px;">
                    <i class="fa-solid fa-industry text-primary me-2"></i>Manufacturing Unit
                </h6>
                <p class="small text-muted mb-2" style="font-size: 12.5px; line-height: 1.5;">
                    <strong>H-32, M.I.D.C. SATPUR</strong><br>
                    NASHIK-422007 Maharashtra, India<br>
                    <span class="text-dark fw-semibold">Year of Establishment: 1978</span>
                </p>
                <div class="d-flex flex-column gap-1 small" style="font-size: 12.5px;">
                    <div>
                        <i class="fa-solid fa-phone text-success me-2"></i>
                        <a href="tel:8975766459" class="text-dark fw-bold text-decoration-none">+91 8975766459</a>
                    </div>
                    <div>
                        <i class="fa-solid fa-envelope text-primary me-2"></i>
                        <a href="mailto:sales@polymerproducts.org" class="text-muted text-decoration-none">sales@polymerproducts.org</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ht-offcanvas-overlay"></div>