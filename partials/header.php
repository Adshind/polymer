<?php
/**
 * Polymer Products - Dynamic Header Component
 * Common Header with active nav detection & SEO metadata support
 */
if (!isset($page_title) || empty($page_title)) {
    $page_title = "Polymer Products - Leading Manufacturer of Elastomeric Bridge Bearings & Seismic Solutions";
}
if (!isset($meta_description) || empty($meta_description)) {
    $meta_description = "Manufacturer and supplier of Elastomeric Bearings and Seismic Pads for bridges, highways, Indian Railways, and Metro infrastructure. ISO 9001:2027 & RDSO Approved in Nashik, Maharashtra.";
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
    
    <!-- Favicon img -->
    <link rel="shortcut icon" href="assets/img/favicon.svg">
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
            <div class="container-fluid px-3 px-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <div class="left text-center text-md-start">
                            <p class="mb-0 text-white" style="font-size:13px;">
                                <i class="fa-solid fa-location-dot text-white me-2"></i> Nashik Manufacturing Facility,
                                Maharashtra, India
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
                                <a href="mailto:qc@polymerproducts.org"
                                    class="text-white text-decoration-none">qc@polymerproducts.org</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- ht-main-header area start -->
        <div class="ht-main-header header-1" id="header-sticky">
            <div class="container-fluid px-3 px-lg-5">
                <div class="ht-menu-wrapper d-flex align-items-center justify-content-between py-2">
                    <div class="ht-menu-left d-flex align-items-center">
                        <div class="ht-menu-logo me-4 me-xxl-5">
                            <a href="index.php" class="d-flex align-items-center text-decoration-none logo-anim">
                                <img src="assets/img/img/banner/polymer-logo-new.webp" alt="Polymer Products"
                                    style="height: 60px; width: auto; object-fit: contain;">
                            </a>
                        </div>
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
                                            <li><a href="index.php#certifications">Statutory & Quality Approvals</a></li>
                                            <li><a href="about.php#sister-concern"> (Dynamic Prestress)</a></li>
                                            <li><a href="about.php#our-team">Our Technical Team</a></li>
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
                    </div>
                    <div class="ht-menu-right d-flex align-items-center">
                        <a href="contact.php"
                            class="header-contact-btn ht-btn-anim d-none d-xl-inline-flex align-items-center">
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
    </header>

    <!-- Offcanvas Navigation -->
    <div class="ht-offcanvas">
        <div class="ht-offcanvas-wrapper">
            <div class="ht-offcanvas-header mb-40 d-flex justify-content-between align-items-center">
                <a href="index.php" class="d-flex align-items-center text-decoration-none">
                    <img src="assets/img/img/banner/polymer-logo-new.webp" alt="Polymer Products"
                        style="height: 48px; width: auto; object-fit: contain;">
                </a>
                <button class="ht-offcanvas-toggle-close btn-close"></button>
            </div>
            <div class="ht-offcanvas-menu mb-40">
                <nav class="mobile-nav">
                    <ul class="list-unstyled">
                        <li class="py-2 border-bottom"><a href="index.php"
                                class="fw-bold text-dark text-decoration-none">Home</a></li>
                        <li class="py-2 border-bottom"><a href="about.php"
                                class="fw-bold text-dark text-decoration-none">About Us & Team</a></li>
                        <li class="py-2 border-bottom"><a href="services.php"
                                class="fw-bold text-dark text-decoration-none">Proposed Bearing Types</a></li>
                        <li class="py-2 border-bottom"><a href="material-used.php"
                                class="fw-bold text-dark text-decoration-none">Raw Materials Used</a></li>
                        <li class="py-2 border-bottom"><a href="process.php"
                                class="fw-bold text-dark text-decoration-none">Manufacturing Process & Machinery</a></li>
                        <li class="py-2 border-bottom"><a href="testing.php"
                                class="fw-bold text-dark text-decoration-none">Testing & QA/QC System</a></li>
                        <li class="py-2 border-bottom"><a href="identification.php"
                                class="fw-bold text-dark text-decoration-none">Product Identification System</a></li>
                        <li class="py-2 border-bottom"><a href="experience.php"
                                class="fw-bold text-dark text-decoration-none">Experience & Supplies (NHAI/Metro/Rail)</a></li>
                        <li class="py-2 border-bottom"><a href="storage-handling.php"
                                class="fw-bold text-dark text-decoration-none">Storage, Handling & Installation</a></li>
                        <li class="py-2 border-bottom"><a href="application-codes.php"
                                class="fw-bold text-dark text-decoration-none">Application Codes & Standards</a></li>
                        <li class="pt-3"><a href="contact.php"
                                class="d-inline-block text-white text-decoration-none fw-bold px-4 py-2"
                                style="background:var(--theme-primary); border-radius:50px;">Contact Us / Request Quote &rarr;</a></li>
                    </ul>
                </nav>
            </div>
            <div class="ht-offcanvas-info mb-40">
                <h4 class="ht-offcanvas__title mb-2" style="font-size:16px; font-weight:700;">Plant Contact Info</h4>
                <p class="mb-1" style="font-size:13px;"><i class="fa-solid fa-location-dot me-2 text-danger"></i>Nashik Facility, Maharashtra</p>
                <p class="mb-1" style="font-size:13px;"><i class="fa-solid fa-phone me-2 text-success"></i><a
                        href="tel:8975766459" class="text-dark">+91 8975766459</a></p>
                <p class="mb-1" style="font-size:13px;"><i class="fa-solid fa-envelope me-2 text-primary"></i><a
                        href="mailto:qc@polymerproducts.org" class="text-dark">qc@polymerproducts.org</a></p>
            </div>
        </div>
    </div>
    <div class="ht-offcanvas-overlay"></div>