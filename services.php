<?php 
$page_title = "Proposed Bearing Types & Applications - Polymer Products";
$meta_description = "Engineered Elastomeric Bridge Bearings including Type A Plain Pads, Type B Laminated Bearings, Type C Thicker End Laminates, Type F Positive Anchorage, and PTFE Sliding Bearings conforming to IRC:83 (Part II) 2018 and MoRTH Section 2000.";
include_once 'partials/header.php'; 
?>

<style>
.services-hero-badge {
    background: var(--theme-subtle);
    border: 1px solid var(--theme-primary);
    color: var(--theme-lighter);
    font-size: 13px;
    letter-spacing: 1.5px;
}
.product-item-card {
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    border: 1px solid #e2e8f0;
    background: #ffffff;
    border-radius: 20px;
    overflow: hidden;
}
.product-item-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(2, 132, 199, 0.10) !important;
    border-color: var(--theme-primary) !important;
}
.product-img-wrapper {
    background: linear-gradient(145deg, #f8fafc 0%, #edf2f7 100%);
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 340px;
    transition: all 0.35s ease;
}
.product-item-card:hover .product-img-wrapper {
    border-color: rgba(2, 132, 199, 0.35);
    background: linear-gradient(145deg, #f0f9ff 0%, #e0f2fe 100%);
}
.product-img-zoom {
    transition: transform 0.4s ease;
    max-height: 290px;
    width: auto;
    max-width: 100%;
    object-fit: contain;
    filter: drop-shadow(0 10px 18px rgba(0, 0, 0, 0.08));
}
.product-item-card:hover .product-img-zoom {
    transform: scale(1.04);
}
.spec-box {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 14px 16px;
    transition: all 0.25s ease;
}
.spec-box:hover {
    background: #ffffff;
    border-color: var(--theme-primary);
    box-shadow: 0 4px 12px rgba(0,0,0,0.04);
}
</style>

<!-- ============================================================
     1. Modern Hero Banner
     ============================================================ -->
<section class="ht-services-hero position-relative d-flex align-items-center"
    style="background: linear-gradient(135deg, rgba(9, 20, 36, 0.92) 0%, rgba(14, 34, 61, 0.76) 50%, rgba(6, 13, 24, 0.88) 100%), url('assets/img/img/banner/birdge-8.webp') center center / cover no-repeat; padding-top: 175px; padding-bottom: 75px; margin-top: -160px; min-height: 460px;">
    
    <div class="container-fluid px-3 px-lg-5 position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-8 wow fadeInLeft" data-wow-delay=".2s">
                <span class="badge px-3 py-2 mb-3 rounded-pill text-uppercase fw-bold services-hero-badge">
                    <i class="fa-solid fa-layer-group me-2"></i>IRC:83-2018 (Part-II) Approved Products
                </span>
                <h1 class="text-white fw-bold mb-3"
                    style="font-family: 'Oswald', 'Saira-Medium', sans-serif; font-size: clamp(34px, 4.5vw, 54px); line-height: 1.2; letter-spacing: -0.5px;">
                    Proposed Bearing Types <span style="color: #93c5fd;">&amp; Applications</span>
                </h1>
                <p class="text-light mb-4" style="font-size: 16px; line-height: 1.8; max-width: 740px; color: #cbd5e1 !important;">
                    Engineered elastomeric bridge bearings precision-manufactured to transfer high vertical loads, accommodate longitudinal &amp; transverse movements, and permit angular rotations across highway, railway, and metro infrastructure.
                </p>
                <div class="d-flex flex-wrap gap-2 pt-1">
                    <span class="badge bg-dark bg-opacity-75 border border-secondary text-light px-3 py-2 rounded-pill small">
                        <i class="fa-solid fa-check text-info me-1"></i> Type A Plain Pads
                    </span>
                    <span class="badge bg-dark bg-opacity-75 border border-secondary text-light px-3 py-2 rounded-pill small">
                        <i class="fa-solid fa-check text-info me-1"></i> Type B Laminated
                    </span>
                    <span class="badge bg-dark bg-opacity-75 border border-secondary text-light px-3 py-2 rounded-pill small">
                        <i class="fa-solid fa-check text-info me-1"></i> Type C Thicker End
                    </span>
                    <span class="badge bg-dark bg-opacity-75 border border-secondary text-light px-3 py-2 rounded-pill small">
                        <i class="fa-solid fa-check text-info me-1"></i> Type F Positive Anchor
                    </span>
                    <span class="badge bg-dark bg-opacity-75 border border-secondary text-light px-3 py-2 rounded-pill small">
                        <i class="fa-solid fa-check text-info me-1"></i> PTFE Sliding
                    </span>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0 text-lg-end d-none d-lg-block wow fadeInRight" data-wow-delay=".3s">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-lg-end mb-0 bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none"><i class="fa-solid fa-house me-1"></i>Home</a></li>
                        <li class="breadcrumb-item active text-white fw-semibold" aria-current="page">Products &amp; Bearings</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     2. Product Portfolio Range Section
     ============================================================ -->
<section class="py-5" style="background: #f8fafc;">
    <div class="container-fluid px-3 px-lg-5 py-3">

        <!-- Section Header -->
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".1s">
            <span class="badge px-3 py-1.5 rounded-pill font-monospace fw-bold text-uppercase mb-2"
                style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                Manufacturing Portfolio
            </span>
            <h2 class="fw-bold text-dark text-uppercase" style="font-family: 'Oswald', sans-serif; font-size: clamp(28px, 3.5vw, 38px);">
                Precision Elastomeric Bridge Bearings
            </h2>
            <p class="text-muted mx-auto mb-0" style="max-width: 740px; font-size: 15px; line-height: 1.7;">
                All bearings are designed and manufactured strictly per <strong>IRC:83-2018 (Part-II)</strong>, <strong>MoRTH Section 2000</strong>, and <strong>UIC 772-2R</strong> with raw polymers of Natural Rubber (NR) or Chloroprene Rubber (CR) and IS: 2062 internal steel laminates.
            </p>
        </div>

        <!-- ============================================================
             Product 01: Type A Plain Pad / Strip Bearings
             ============================================================ -->
        <div class="card border-0 rounded-4 shadow-sm mb-5 overflow-hidden product-item-card wow fadeInUp" data-wow-delay=".15s">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 p-4 p-md-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge rounded-pill px-3 py-1.5 fw-bold text-uppercase"
                            style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                            Type A
                        </span>
                        <span class="badge bg-light text-secondary rounded-pill px-3 py-1.5 border small fw-semibold">
                            <i class="fa-solid fa-certificate text-primary me-1"></i> Solid Elastomer
                        </span>
                    </div>

                    <h3 class="fw-bold text-dark mb-3" style="font-family: 'Oswald', sans-serif; font-size: 26px;">
                        Type A: Plain Pad / Strip Bearings
                    </h3>
                    
                    <p class="text-secondary mb-4" style="font-size: 14.5px; line-height: 1.8;">
                        Plain pad and strip bearings are solid unreinforced elastomeric bearings without internal steel reinforcing plates. They are engineered for simple support conditions where moderate vertical loads, rotation, and limited translational movements need to be accommodated. For seismic applications, the bearing and its associated structural connections are designed according to the required seismic force-transfer arrangement.
                    </p>

                    <!-- Technical Specs Chips -->
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="spec-box h-100">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="fa-solid fa-code me-2" style="color: var(--theme-primary);"></i>
                                    <h6 class="fw-bold mb-0" style="font-size: 13.5px; color: var(--theme-primary);">Design Standard</h6>
                                </div>
                                <small class="text-muted d-block" style="font-size: 12.5px;">IRC:83-2018 (Part-II), MoRTH Sec 2000</small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="spec-box h-100">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="fa-solid fa-layer-group me-2" style="color: var(--theme-primary);"></i>
                                    <h6 class="fw-bold mb-0" style="font-size: 13.5px; color: var(--theme-primary);">Polymer Grade</h6>
                                </div>
                                <small class="text-muted d-block" style="font-size: 12.5px;">High-grade Natural Rubber (NR) / CR</small>
                            </div>
                        </div>
                    </div>

                    <!-- Applications List -->
                    <h6 class="fw-bold text-dark mb-2" style="font-size: 13.5px; text-transform: uppercase; letter-spacing: 0.5px;">
                        Typical Applications:
                    </h6>
                    <ul class="list-unstyled mb-4 text-secondary" style="font-size: 14px; line-height: 1.9;">
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Bridge and flyover simple span supports</span>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Strip bearing applications over continuous support lines &amp; precast slabs</span>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Locations requiring accommodation of rotation and limited translational movement</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Structures where separate structural connections are provided for seismic force transfer</span>
                        </li>
                    </ul>

                    <a href="contact.php" class="btn btn-primary rounded-pill px-4 py-2.5 fw-bold shadow-sm d-inline-flex align-items-center gap-2"
                        style="background: var(--theme-primary); border-color: var(--theme-primary); font-size: 13.5px;">
                        <span>Request Inquiry for Type A</span>
                        <i class="fa-solid fa-arrow-right" style="font-size: 12px;"></i>
                    </a>
                </div>

                <div class="col-lg-6 p-4 p-lg-5">
                    <div class="product-img-wrapper shadow-sm">
                        <img src="assets/pp_data/Page%2002/Bearing%20types/TYPE-A-PAD.png" alt="Type A Plain Pad Bearing - Polymer Products"
                            class="img-fluid product-img-zoom">
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================
             Product 02: Type B Laminated Bearings
             ============================================================ -->
        <div class="card border-0 rounded-4 shadow-sm mb-5 overflow-hidden product-item-card wow fadeInUp" data-wow-delay=".2s">
            <div class="row g-0 align-items-center flex-lg-row-reverse">
                <div class="col-lg-6 p-4 p-md-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge rounded-pill px-3 py-1.5 fw-bold text-uppercase"
                            style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                            Type B
                        </span>
                        <span class="badge bg-light text-secondary rounded-pill px-3 py-1.5 border small fw-semibold">
                            <i class="fa-solid fa-shield-halved text-primary me-1"></i> Steel Reinforced
                        </span>
                    </div>

                    <h3 class="fw-bold text-dark mb-3" style="font-family: 'Oswald', sans-serif; font-size: 26px;">
                        Type B: Laminated Elastomeric Bearings
                    </h3>
                    
                    <p class="text-secondary mb-4" style="font-size: 14.5px; line-height: 1.8;">
                        Laminated bearings consist of alternating layers of elastomer and internal high-tensile mild steel plates (IS: 2062 / IS: 1079) bonded together during vulcanisation under precise heat and pressure. The embedded steel laminates restrain the lateral bulging of the elastomer, allowing the bearing to support heavy vertical loads while safely accommodating rotation and multidirectional horizontal movement.
                    </p>

                    <!-- Technical Specs Chips -->
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="spec-box h-100">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="fa-solid fa-shield-halved me-2" style="color: var(--theme-primary);"></i>
                                    <h6 class="fw-bold mb-0" style="font-size: 13.5px; color: var(--theme-primary);">Steel Laminates</h6>
                                </div>
                                <small class="text-muted d-block" style="font-size: 12.5px;">IS: 2062 / IS: 1079 Yield &ge; 250 MPa</small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="spec-box h-100">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="fa-solid fa-cubes me-2" style="color: var(--theme-primary);"></i>
                                    <h6 class="fw-bold mb-0" style="font-size: 13.5px; color: var(--theme-primary);">Standard Use</h6>
                                </div>
                                <small class="text-muted d-block" style="font-size: 12.5px;">Universal Highway &amp; Railway Bearings</small>
                            </div>
                        </div>
                    </div>

                    <!-- Applications List -->
                    <h6 class="fw-bold text-dark mb-2" style="font-size: 13.5px; text-transform: uppercase; letter-spacing: 0.5px;">
                        Typical Applications:
                    </h6>
                    <ul class="list-unstyled mb-4 text-secondary" style="font-size: 14px; line-height: 1.9;">
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>National Highway (NHAI) and State PWD road bridges</span>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Railway bridges and Railway Over Bridges (ROBs)</span>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Flyovers, elevated corridors, and metro transit viaducts</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Bridge supports subjected to vertical loads, rotation, and horizontal movement</span>
                        </li>
                    </ul>

                    <a href="contact.php" class="btn btn-primary rounded-pill px-4 py-2.5 fw-bold shadow-sm d-inline-flex align-items-center gap-2"
                        style="background: var(--theme-primary); border-color: var(--theme-primary); font-size: 13.5px;">
                        <span>Request Inquiry for Type B</span>
                        <i class="fa-solid fa-arrow-right" style="font-size: 12px;"></i>
                    </a>
                </div>

                <div class="col-lg-6 p-4 p-lg-5">
                    <div class="product-img-wrapper shadow-sm">
                        <img src="assets/pp_data/Page%2002/Bearing%20types/Elastomeric-Bridge%20TYPE%20B.jpg" alt="Type B Laminated Elastomeric Bearing - Polymer Products"
                            class="img-fluid product-img-zoom">
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================
             Product 03: Type C Laminated with Thicker End Laminates
             ============================================================ -->
        <div class="card border-0 rounded-4 shadow-sm mb-5 overflow-hidden product-item-card wow fadeInUp" data-wow-delay=".25s">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 p-4 p-md-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge rounded-pill px-3 py-1.5 fw-bold text-uppercase"
                            style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                            Type C
                        </span>
                        <span class="badge bg-light text-secondary rounded-pill px-3 py-1.5 border small fw-semibold">
                            <i class="fa-solid fa-compress text-primary me-1"></i> Enhanced Stability
                        </span>
                    </div>

                    <h3 class="fw-bold text-dark mb-3" style="font-family: 'Oswald', sans-serif; font-size: 26px;">
                        Type C: Laminated Bearings with Thicker End Laminates
                    </h3>
                    
                    <p class="text-secondary mb-4" style="font-size: 14.5px; line-height: 1.8;">
                        Type C bearings incorporate thicker outer end laminates on one side or both sides of the bearing. This engineered arrangement provides improved load distribution, enhanced rotation characteristics, and prevents back-lifting of the bearing edges under high horizontal shear displacement.
                    </p>

                    <!-- Technical Specs Chips -->
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="spec-box h-100">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="fa-solid fa-arrows-spin me-2" style="color: var(--theme-primary);"></i>
                                    <h6 class="fw-bold mb-0" style="font-size: 13.5px; color: var(--theme-primary);">Rotation Stability</h6>
                                </div>
                                <small class="text-muted d-block" style="font-size: 12.5px;">Prevents back-lifting under heavy shear</small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="spec-box h-100">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="fa-solid fa-weight-scale me-2" style="color: var(--theme-primary);"></i>
                                    <h6 class="fw-bold mb-0" style="font-size: 13.5px; color: var(--theme-primary);">Load Transfer</h6>
                                </div>
                                <small class="text-muted d-block" style="font-size: 12.5px;">Optimized stress distribution on plinth</small>
                            </div>
                        </div>
                    </div>

                    <!-- Applications List -->
                    <h6 class="fw-bold text-dark mb-2" style="font-size: 13.5px; text-transform: uppercase; letter-spacing: 0.5px;">
                        Typical Applications:
                    </h6>
                    <ul class="list-unstyled mb-4 text-secondary" style="font-size: 14px; line-height: 1.9;">
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Bridge supports requiring improved stress and load distribution</span>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Applications where higher rotational capacity and angular stability are required</span>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Support conditions where bearing stability under shear is an important consideration</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Bridge and infrastructure applications where back-lifting under shear must be avoided</span>
                        </li>
                    </ul>

                    <a href="contact.php" class="btn btn-primary rounded-pill px-4 py-2.5 fw-bold shadow-sm d-inline-flex align-items-center gap-2"
                        style="background: var(--theme-primary); border-color: var(--theme-primary); font-size: 13.5px;">
                        <span>Request Inquiry for Type C</span>
                        <i class="fa-solid fa-arrow-right" style="font-size: 12px;"></i>
                    </a>
                </div>

                <div class="col-lg-6 p-4 p-lg-5">
                    <div class="product-img-wrapper shadow-sm">
                        <img src="assets/pp_data/Page%2002/Bearing%20types/Type%20B%20%26%20C.jpg" alt="Type C Laminated Bearing with Thicker End Laminates - Polymer Products"
                            class="img-fluid product-img-zoom">
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================
             Product 04: Type F Bearings with Positive Anchorage
             ============================================================ -->
        <div class="card border-0 rounded-4 shadow-sm mb-5 overflow-hidden product-item-card wow fadeInUp" data-wow-delay=".3s">
            <div class="row g-0 align-items-center flex-lg-row-reverse">
                <div class="col-lg-6 p-4 p-md-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge rounded-pill px-3 py-1.5 fw-bold text-uppercase"
                            style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                            Type F
                        </span>
                        <span class="badge bg-light text-secondary rounded-pill px-3 py-1.5 border small fw-semibold">
                            <i class="fa-solid fa-anchor text-primary me-1"></i> Positive Anchorage
                        </span>
                    </div>

                    <h3 class="fw-bold text-dark mb-3" style="font-family: 'Oswald', sans-serif; font-size: 26px;">
                        Type F: Bearings with Positive Anchorage
                    </h3>
                    
                    <p class="text-secondary mb-4" style="font-size: 14.5px; line-height: 1.8;">
                        Type F bearings incorporate positive mechanical anchorage through dedicated outer steel anchor plates and suitable internal fastening arrangements. This provides positive location and horizontal restraint to prevent bearing walking, while the separate outer plate arrangement facilitates easy inspection and future bearing replacement.
                    </p>

                    <!-- Technical Specs Chips -->
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="spec-box h-100">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="fa-solid fa-anchor me-2" style="color: var(--theme-primary);"></i>
                                    <h6 class="fw-bold mb-0" style="font-size: 13.5px; color: var(--theme-primary);">Mechanical Lock</h6>
                                </div>
                                <small class="text-muted d-block" style="font-size: 12.5px;">Positive restraint against displacement</small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="spec-box h-100">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="fa-solid fa-screwdriver-wrench me-2" style="color: var(--theme-primary);"></i>
                                    <h6 class="fw-bold mb-0" style="font-size: 13.5px; color: var(--theme-primary);">Maintainability</h6>
                                </div>
                                <small class="text-muted d-block" style="font-size: 12.5px;">Facilitates straightforward replacement</small>
                            </div>
                        </div>
                    </div>

                    <!-- Applications List -->
                    <h6 class="fw-bold text-dark mb-2" style="font-size: 13.5px; text-transform: uppercase; letter-spacing: 0.5px;">
                        Typical Applications:
                    </h6>
                    <ul class="list-unstyled mb-4 text-secondary" style="font-size: 14px; line-height: 1.9;">
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Bridge and viaduct supports requiring positive mechanical anchorage</span>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Locations where positive positioning and restraint of the bearing are required</span>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Structures requiring a secure mechanical connection between bearing and pier cap</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Special support conditions requiring defined anchorage and seismic restraint</span>
                        </li>
                    </ul>

                    <a href="contact.php" class="btn btn-primary rounded-pill px-4 py-2.5 fw-bold shadow-sm d-inline-flex align-items-center gap-2"
                        style="background: var(--theme-primary); border-color: var(--theme-primary); font-size: 13.5px;">
                        <span>Request Inquiry for Type F</span>
                        <i class="fa-solid fa-arrow-right" style="font-size: 12px;"></i>
                    </a>
                </div>

                <div class="col-lg-6 p-4 p-lg-5">
                    <div class="product-img-wrapper shadow-sm">
                        <img src="assets/pp_data/Page%2002/Bearing%20types/TYPE%20F.png" alt="Type F Bearing with Positive Anchorage - Polymer Products"
                            class="img-fluid product-img-zoom">
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================
             Product 05: PTFE Sliding Elastomeric Bearings
             ============================================================ -->
        <div class="card border-0 rounded-4 shadow-sm mb-4 overflow-hidden product-item-card wow fadeInUp" data-wow-delay=".35s">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 p-4 p-md-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge rounded-pill px-3 py-1.5 fw-bold text-uppercase"
                            style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1px;">
                            Sliding Series
                        </span>
                        <span class="badge bg-light text-secondary rounded-pill px-3 py-1.5 border small fw-semibold">
                            <i class="fa-solid fa-gauge-simple-high text-primary me-1"></i> Low Friction PTFE
                        </span>
                    </div>

                    <h3 class="fw-bold text-dark mb-3" style="font-family: 'Oswald', sans-serif; font-size: 26px;">
                        PTFE Sliding Elastomeric Bearings
                    </h3>
                    
                    <p class="text-secondary mb-4" style="font-size: 14.5px; line-height: 1.8;">
                        Combines the rotational flexibility of a laminated elastomeric bearing with an integrated dimpled virgin Polytetrafluoroethylene (PTFE) sliding surface against a mirror-polished austenitic stainless steel sheet. Accommodates very large longitudinal and transverse thermal expansion movements with minimal frictional resistance (&le; 0.03).
                    </p>

                    <!-- Technical Specs Chips -->
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="spec-box h-100">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="fa-solid fa-gauge-high me-2" style="color: var(--theme-primary);"></i>
                                    <h6 class="fw-bold mb-0" style="font-size: 13.5px; color: var(--theme-primary);">Friction Coeff.</h6>
                                </div>
                                <small class="text-muted d-block" style="font-size: 12.5px;">&mu; &le; 0.03 with dimpled PTFE &amp; SS</small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="spec-box h-100">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="fa-solid fa-arrows-left-right me-2" style="color: var(--theme-primary);"></i>
                                    <h6 class="fw-bold mb-0" style="font-size: 13.5px; color: var(--theme-primary);">Movement Range</h6>
                                </div>
                                <small class="text-muted d-block" style="font-size: 12.5px;">Large long-span thermal expansions</small>
                            </div>
                        </div>
                    </div>

                    <!-- Applications List -->
                    <h6 class="fw-bold text-dark mb-2" style="font-size: 13.5px; text-transform: uppercase; letter-spacing: 0.5px;">
                        Typical Applications:
                    </h6>
                    <ul class="list-unstyled mb-4 text-secondary" style="font-size: 14px; line-height: 1.9;">
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Long-span continuous prestressed box girder bridges</span>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Curved highway viaducts and thermal expansion joints</span>
                        </li>
                        <li class="d-flex align-items-start mb-1">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Steel arch bridges, truss spans, and cable-stayed approach bridges</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="fa-solid fa-circle-check me-2 mt-1" style="color: var(--theme-primary);"></i>
                            <span>Heavy industrial gantry structures and pipeline bridge crossings</span>
                        </li>
                    </ul>

                    <a href="contact.php" class="btn btn-primary rounded-pill px-4 py-2.5 fw-bold shadow-sm d-inline-flex align-items-center gap-2"
                        style="background: var(--theme-primary); border-color: var(--theme-primary); font-size: 13.5px;">
                        <span>Request Inquiry for PTFE Bearings</span>
                        <i class="fa-solid fa-arrow-right" style="font-size: 12px;"></i>
                    </a>
                </div>

                <div class="col-lg-6 p-4 p-lg-5">
                    <div class="product-img-wrapper shadow-sm">
                        <img src="assets/img/img/banner/Elastomeric-Bridge.png" alt="PTFE Sliding Elastomeric Bearing - Polymer Products"
                            class="img-fluid product-img-zoom">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     3. Engineering Consultation & Inquiry Banner
     ============================================================ -->
<section class="py-5 text-white position-relative"
    style="background: linear-gradient(135deg, rgba(8, 20, 38, 0.94) 0%, rgba(10, 25, 47, 0.82) 50%, rgba(5, 12, 24, 0.92) 100%), url('assets/img/img/banner/birdge-10.webp') center center / cover no-repeat; padding: 75px 0;">
    <div class="container-fluid px-3 px-lg-5 py-3 text-center">
        <span class="badge px-3 py-2 mb-3 rounded-pill text-uppercase fw-bold"
            style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 12px; letter-spacing: 1.5px;">
            Custom Engineering &amp; Sizing
        </span>
        <h2 class="fw-bold text-white text-uppercase mx-auto mb-3"
            style="font-family: 'Saira-Medium', sans-serif; font-size: clamp(26px, 3.5vw, 38px); letter-spacing: 0.5px; max-width: 780px;">
            Require Custom Sized Bearings for Your Project?
        </h2>
        <p class="mx-auto mb-4" style="max-width: 680px; color: #e2e8f0; font-size: 15px; line-height: 1.8;">
            We manufacture custom bearing dimensions, vertical load ratings up to 10,000+ kN, and elastomer layer configurations conforming to your project's approved GAD and structural bridge design drawings.
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="contact.php" class="btn btn-primary rounded-pill px-5 py-3 fw-bold shadow text-uppercase"
                style="font-size: 13px; letter-spacing: 0.5px; background: var(--theme-primary); border-color: var(--theme-primary);">
                Send Bearing Schedule / Drawings <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
            <!-- <a href="tel:8975766459" class="btn btn-outline-light rounded-pill px-4 py-3 fw-bold"
                style="font-size: 13px; letter-spacing: 0.5px; backdrop-filter: blur(4px);">
                <i class="fa-solid fa-phone me-2"></i> Call: 8975766459
            </a> -->
        </div>
    </div>
</section>

<?php include_once 'partials/footer.php'; ?>
