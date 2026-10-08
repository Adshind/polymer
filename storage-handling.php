<?php 
$page_title = "Handling, Storage, Packing & Delivery Flow Chart - Polymer Products";
$meta_description = "Comprehensive 16-step handling, climate-controlled storage, protective packing, shipment monitoring, and delivery SOP for elastomeric bridge bearings.";
include_once 'partials/header.php'; 
?>

<style>
.storage-hero-badge {
    background: var(--theme-subtle);
    border: 1px solid var(--theme-primary);
    color: var(--theme-lighter);
    font-size: 13px;
    letter-spacing: 1px;
}

/* Flow Chart Component Styles */
.flow-card {
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
    background: #ffffff;
    border-color: #e2e8f0 !important;
}
.flow-card:hover {
    transform: translateY(-5px);
    border-color: var(--theme-primary) !important;
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.08) !important;
}
.step-badge-num {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: linear-gradient(135deg, var(--theme-primary) 0%, var(--theme-hover) 100%);
    color: #ffffff;
    font-weight: 800;
    font-size: 18px;
    font-family: 'Oswald', sans-serif;
    box-shadow: 0 4px 10px var(--theme-glow);
    flex-shrink: 0;
}
.step-icon-circle {
    width: 46px;
    height: 46px;
    border-radius: 50%;
    background: var(--theme-subtle);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.phase-node-card {
    background: #ffffff;
    cursor: pointer;
    transition: all 0.25s ease;
    border-color: #e2e8f0 !important;
}
.phase-node-card:hover,
.phase-node-card.active-phase {
    background: #f0f7ff !important;
    border-color: var(--theme-primary) !important;
    transform: translateY(-3px);
    box-shadow: 0 6px 14px rgba(10, 88, 202, 0.12);
}
.phase-node-card.active-phase .phase-step-badge {
    color: var(--theme-primary) !important;
}
.flow-nav-buttons .btn {
    font-weight: 600;
    font-size: 13px;
    transition: all 0.25s ease;
    border: 1px solid #cbd5e1;
    background: #ffffff;
    color: #334155;
}
.flow-nav-buttons .btn:hover {
    background: var(--theme-primary) !important;
    border-color: var(--theme-primary) !important;
    color: #ffffff !important;
    transform: translateY(-1px);
    box-shadow: 0 4px 12px var(--theme-glow);
}
.flow-nav-buttons .btn.active-btn,
.flow-nav-buttons .btn.btn-primary {
    background: var(--theme-primary) !important;
    border-color: var(--theme-primary) !important;
    color: #ffffff !important;
    box-shadow: 0 4px 12px var(--theme-glow);
}
.storage-hero-showcase {
    perspective: 1000px;
}
.storage-hero-img-box {
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border: 1px solid rgba(255, 255, 255, 0.22);
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
}
.storage-hero-img-box:hover {
    transform: translateY(-5px);
    border-color: rgba(147, 197, 253, 0.45) !important;
    box-shadow: 0 25px 55px rgba(2, 132, 199, 0.28) !important;
}
.storage-hero-img-box img {
    transition: transform 0.45s ease;
    filter: drop-shadow(0 15px 25px rgba(0,0,0,0.45));
}
.storage-hero-img-box:hover img {
    transform: scale(1.04);
}
</style>

<!-- ============================================================
     1. Modern Hero Banner
     ============================================================ -->
<section class="ht-about-hero position-relative d-flex align-items-center"
    style="background: linear-gradient(135deg, rgba(9, 20, 36, 0.70) 0%, rgba(14, 34, 61, 0.52) 50%, rgba(6, 13, 24, 0.65) 100%), url('assets/img/img/banner/Storage-handling-banner-1.webp') center center / cover no-repeat; padding-top: 175px; padding-bottom: 75px; margin-top: -160px; min-height: 480px;">
    
    <div class="container-fluid px-3 px-lg-5 position-relative" style="z-index: 2;">
        <div class="row align-items-center justify-content-between g-4">
            
            <!-- Left Column: Content -->
            <div class="col-lg-7 wow fadeInLeft" data-wow-delay=".2s">
                <span class="badge px-3 py-2 mb-3 rounded-pill text-uppercase storage-hero-badge" style="color: var(--theme-lighter);">
                    <i class="fa-solid fa-diagram-project me-2 " ></i>Quality &amp; Logistics Standard Operating Procedure
                </span>
                <h1 class="text-white fw-bold mb-3"
                    style="font-family: 'Oswald', 'Saira-Medium', sans-serif; font-size: clamp(30px, 4.2vw, 50px); letter-spacing: -0.5px; line-height: 1.2;">
                    Handling, Storage, Packing <span style="color: var(--theme-light);">&amp; Delivery Flow Chart</span>
                </h1>
                <p class="text-light mb-4" style="font-size: 16px; line-height: 1.8; max-width: 760px; color: #ecececff !important;">
                    A rigorous 16-step standard operating procedure governing elastomeric bridge bearings across their entire supply chain lifecycle: from post-production handling, preliminary inspection, climate-controlled storage, to order verification, protective packaging, live-tracked transit, on-site customer inspection, and lifetime after-sales support.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#installation-methodology" class="btn btn-primary rounded-pill px-4 py-2 fw-bold text-uppercase" style="background:var(--theme-primary); border-color:var(--theme-primary); font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-file-pdf me-2"></i>Installation Manual
                    </a>
                    <a href="#flowchart-section" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-route me-2"></i>16-Step Flow Chart
                    </a>
                </div>
            </div>

            <!-- Right Column: Installation Showcase Image & Breadcrumb -->
            <div class="col-lg-5 text-center text-lg-end wow fadeInRight" data-wow-delay=".3s">
                <nav aria-label="breadcrumb" class="mb-3 d-none d-lg-block">
                    <ol class="breadcrumb justify-content-lg-end mb-0 bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none"><i class="fa-solid fa-house me-1"></i>Home</a></li>
                        <li class="breadcrumb-item active text-white fw-semibold" aria-current="page">Storage &amp; Handling</li>
                    </ol>
                </nav>

                <div class="storage-hero-showcase d-inline-block text-center">
                    <div class="storage-hero-img-box p-3 p-md-4 rounded-4 position-relative">
                        <img src="assets/img/img/banner/Storage-handling-2.webp" alt="Bridge Bearing Installation & Storage SOP - Polymer Products" class="img-fluid"
                            style="max-height: 340px; width: auto; object-fit: contain;">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============================================================
     2. Installation & Maintenance Methodology (Page 09 Document)
     ============================================================ -->
<section class="py-5 bg-white border-bottom" id="installation-methodology">
    <div class="container py-3">
        <div class="p-4 p-lg-5 rounded-4 border shadow-sm" style="background: linear-gradient(135deg, #ffffff 0%, #f0f7ff 100%);">
            <!-- Header & Action Row -->
            <div class="row align-items-center justify-content-between g-4 mb-4 pb-3 border-bottom">
                <div class="col-lg-8">
                    <span class="badge px-3 py-1.5 mb-2 rounded-pill text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight:700; font-size:12px; letter-spacing:1px;">
                        <i class="fa-solid fa-file-pdf me-1"></i> Technical Manual 
                    </span>
                    <h2 class="fw-bold text-dark mb-2" style="font-family:'Oswald', sans-serif; font-size:clamp(24px, 3vw, 34px); letter-spacing:-0.5px;">
                      Storage, Handling & Installation 

                    </h2>
                    <p class="text-secondary mb-0" style="font-size: 15px; line-height: 1.8;">
                       Proper storage, careful handling and correct installation are essential to maintain the condition and performance of Elastomeric Bearings.

                    </p>
                    <p class="text-secondary mb-0" style="font-size: 15px; line-height: 1.8;">
                        The guidelines below cover the recommended practices for storing, handling, transporting and installing the bearings as specified for the product.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="d-flex flex-wrap gap-2 justify-content-lg-end">
                        <button type="button" class="btn btn-primary rounded-pill px-4 py-2.5 fw-bold shadow-sm open-storage-doc-modal d-inline-flex align-items-center gap-2"
                            style="background: var(--theme-primary); border-color: var(--theme-primary); font-size: 13.5px;"
                            data-doc-url="assets/pp_data/Page 09/ELASTOMERIC-BEARING-INSTALLATION-AND-MAINTENANCE-METHODOLOGY.pdf"
                            data-doc-title="Elastomeric Bearing Installation and Maintenance Methodology">
                            <i class="fa-solid fa-file-pdf"></i> <span>View Methodology Manual</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- 4 Key Technical Highlights in 4 columns -->
            <div class="row g-3">
                <div class="col-md-6 col-lg-3">
                    <div class="p-3 bg-white rounded-3 border h-100 shadow-xs">
                        <div class="d-flex align-items-center mb-1">
                            <i class="fa-solid fa-ruler-combined text-primary me-2"></i>
                            <strong class="text-dark small">Pedestal Leveling</strong>
                        </div>
                        <small class="text-muted d-block" style="line-height: 1.5;">Leveling tolerance within &plusmn;1mm with non-shrink epoxy bedding mortar.</small>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-3 bg-white rounded-3 border h-100 shadow-xs">
                        <div class="d-flex align-items-center mb-1">
                            <i class="fa-solid fa-arrows-up-down text-primary me-2"></i>
                            <strong class="text-dark small">Synchronized Jacking</strong>
                        </div>
                        <small class="text-muted d-block" style="line-height: 1.5;">Even girder load transfer preventing edge crushing and eccentric rotation.</small>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-3 bg-white rounded-3 border h-100 shadow-xs">
                        <div class="d-flex align-items-center mb-1">
                            <i class="fa-solid fa-magnifying-glass-chart text-primary me-2"></i>
                            <strong class="text-dark small">Annual In-Service Inspection</strong>
                        </div>
                        <small class="text-muted d-block" style="line-height: 1.5;">Checklist for elastomer shear strain, bulging, weathering, and grease condition.</small>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-3 bg-white rounded-3 border h-100 shadow-xs">
                        <div class="d-flex align-items-center mb-1">
                            <i class="fa-solid fa-file-circle-check text-primary me-2"></i>
                            <strong class="text-dark small">Authority Approval</strong>
                        </div>
                        <small class="text-muted d-block" style="line-height: 1.5;">Standard methodology accepted across NHAI, Rail, Metro, and State PWD projects.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     3. MASTER FLOW CHART SECTION: 16-STEP PROCESS PIPELINE
     ============================================================ -->
<section class="py-5 bg-light position-relative" id="flowchart-section" style="background-color: #f0f7ff !important;">
    <div class="container py-3">
        
        <!-- Section Title & Intro -->
        <div class="text-center mb-5">
            <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight:700; font-size:12px; letter-spacing:1px;">
                Complete Process Flow Chart
            </span>
            <h2 class="fw-bold text-dark mb-3" style="font-family:'Oswald', sans-serif; font-size:clamp(28px, 3.5vw, 40px); letter-spacing:-0.5px;">
                Handling, Storage, Packing &amp; Delivery Flow Chart
            </h2>
            <p class="text-muted mx-auto" style="max-width: 820px; font-size: 15.5px; line-height: 1.8;">
                Every stage from post-vulcanization handling to site acceptance adheres strictly to ISO 9001:2027 and IRC:83 (Part II) standards for complete material traceability and zero-defect transit.
            </p>
        </div>

        <!-- High-Level Interactive Stepper Map (6 Lifecycle Phases) -->
        <div class="flow-pipeline-wrapper p-4 bg-white rounded-4 border shadow-sm mb-5">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3 pb-2 border-bottom">
                <h5 class="fw-bold text-dark mb-0" style="font-family:'Oswald', sans-serif; font-size:18px;">
                    <i class="fa-solid fa-timeline text-primary me-2"></i>6-Phase Lifecycle Overview
                </h5>
                <span class="badge bg-primary-subtle text-primary fw-semibold px-3 py-1 rounded-pill">
                    16 Step-by-Step SOP Protocols
                </span>
            </div>

            <div class="row g-3 text-center">
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="phase-node-card p-3 rounded-3 border h-100 active-phase" onclick="filterFlowPhase('phase-1', this)">
                        <div class="phase-icon mb-2">
                            <i class="fa-solid fa-microscope fa-lg text-primary"></i>
                        </div>
                        <div class="phase-step-badge small fw-bold text-primary mb-1">Phase 1</div>
                        <h6 class="fw-bold text-dark mb-1" style="font-size:13.5px;">Post-Production &amp; Sorting</h6>
                        <span class="badge bg-light text-secondary small">Steps 1 - 3</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="phase-node-card p-3 rounded-3 border h-100" onclick="filterFlowPhase('phase-2', this)">
                        <div class="phase-icon mb-2">
                            <i class="fa-solid fa-warehouse fa-lg text-primary"></i>
                        </div>
                        <div class="phase-step-badge small fw-bold text-primary mb-1">Phase 2</div>
                        <h6 class="fw-bold text-dark mb-1" style="font-size:13.5px;">Storage &amp; Inventory</h6>
                        <span class="badge bg-light text-secondary small">Step 4 (A &amp; B)</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="phase-node-card p-3 rounded-3 border h-100" onclick="filterFlowPhase('phase-3', this)">
                        <div class="phase-icon mb-2">
                            <i class="fa-solid fa-list-check fa-lg text-primary"></i>
                        </div>
                        <div class="phase-step-badge small fw-bold text-primary mb-1">Phase 3</div>
                        <h6 class="fw-bold text-dark mb-1" style="font-size:13.5px;">Picking &amp; Final QC</h6>
                        <span class="badge bg-light text-secondary small">Steps 5 - 7</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="phase-node-card p-3 rounded-3 border h-100" onclick="filterFlowPhase('phase-4', this)">
                        <div class="phase-icon mb-2">
                            <i class="fa-solid fa-box-open fa-lg text-primary"></i>
                        </div>
                        <div class="phase-step-badge small fw-bold text-primary mb-1">Phase 4</div>
                        <h6 class="fw-bold text-dark mb-1" style="font-size:13.5px;">Packing &amp; Docs</h6>
                        <span class="badge bg-light text-secondary small">Steps 8 - 10</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="phase-node-card p-3 rounded-3 border h-100" onclick="filterFlowPhase('phase-5', this)">
                        <div class="phase-icon mb-2">
                            <i class="fa-solid fa-truck-fast fa-lg text-primary"></i>
                        </div>
                        <div class="phase-step-badge small fw-bold text-primary mb-1">Phase 5</div>
                        <h6 class="fw-bold text-dark mb-1" style="font-size:13.5px;">Transit &amp; Tracking</h6>
                        <span class="badge bg-light text-secondary small">Steps 11 - 13</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="phase-node-card p-3 rounded-3 border h-100" onclick="filterFlowPhase('phase-6', this)">
                        <div class="phase-icon mb-2">
                            <i class="fa-solid fa-handshake-angle fa-lg text-primary"></i>
                        </div>
                        <div class="phase-step-badge small fw-bold text-primary mb-1">Phase 6</div>
                        <h6 class="fw-bold text-dark mb-1" style="font-size:13.5px;">Receiving &amp; After-Sales</h6>
                        <span class="badge bg-light text-secondary small">Steps 14 - 16</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Interactive Filters & Search Bar -->
        <div class="row align-items-center justify-content-between mb-4 g-3">
            <div class="col-lg-8">
                <div class="d-flex flex-wrap gap-2 flow-nav-buttons" id="flowNavButtons">
                    <button class="btn btn-sm btn-primary rounded-pill px-3 py-2 active-btn" onclick="filterFlowPhase('all', this)">
                        <i class="fa-solid fa-network-wired me-1"></i> All 16 Steps
                    </button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill px-3 py-2" onclick="filterFlowPhase('phase-1', this)">
                        1. Post-Production
                    </button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill px-3 py-2" onclick="filterFlowPhase('phase-2', this)">
                        2. Storage &amp; Inventory
                    </button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill px-3 py-2" onclick="filterFlowPhase('phase-3', this)">
                        3. Picking &amp; QC
                    </button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill px-3 py-2" onclick="filterFlowPhase('phase-4', this)">
                        4. Packing &amp; Docs
                    </button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill px-3 py-2" onclick="filterFlowPhase('phase-5', this)">
                        5. Transit &amp; Delivery
                    </button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill px-3 py-2" onclick="filterFlowPhase('phase-6', this)">
                        6. Client Handover
                    </button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0"><i class="fa-solid fa-search text-muted"></i></span>
                    <input type="text" id="flowSearchInput" class="form-control bg-white border-start-0" placeholder="Search steps (e.g. UV, MTC, Tracking, Storage)..." onkeyup="searchFlowSteps()">
                </div>
            </div>
        </div>

        <!-- FLOW CHART CARDS CONTAINER (16 STEPS) -->
        <div class="row g-4" id="flowCardsContainer">

            <!-- STEP 01 -->
            <div class="col-lg-6 flow-step-item" data-phase="phase-1" data-keywords="post production handling cooling deflashing demoulding flash trimming">
                <div class="card h-100 border rounded-4 shadow-sm flow-card p-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <span class="step-badge-num">01</span>
                            <div>
                                <span class="badge bg-primary-subtle text-primary text-uppercase px-2 py-1 small fw-bold">Phase 1 &bull; Post-Production</span>
                                <h4 class="fw-bold text-dark mb-0 mt-1" style="font-family:'Oswald', sans-serif; font-size:20px;">
                                    Post-Production Handling
                                </h4>
                            </div>
                        </div>
                        <div class="step-icon-circle">
                            <i class="fa-solid fa-hands-holding-circle text-primary fa-xl"></i>
                        </div>
                    </div>
                    <p class="text-secondary small mb-3" style="line-height:1.7;">
                        Careful de-moulding and safe transfer immediately after hydraulic vulcanization under temperature-controlled cooling protocols to avoid thermal distortion and mechanical stress.
                    </p>
                    <div class="bg-light p-3 rounded-3 border mb-3">
                        <h6 class="fw-bold text-dark small mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i>Key SOP Protocols:</h6>
                        <ul class="list-unstyled text-muted small mb-0" style="line-height:1.8;">
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Controlled cooling in gradual curing transition bay.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Pneumatic deflashing &amp; flash trimming without scoring outer elastomer.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Handling with cushioned soft-padded carts to prevent edge impact.</li>
                        </ul>
                    </div>
                    <div class="mt-auto d-flex justify-content-between align-items-center pt-2 border-top">
                        <span class="small text-muted"><i class="fa-solid fa-industry me-1"></i> Finishing Shopfloor</span>
                        <button class="btn btn-link btn-sm text-primary p-0 text-decoration-none fw-bold" onclick="showStepModal(1)">
                            View Full SOP <i class="fa-solid fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- STEP 02 -->
            <div class="col-lg-6 flow-step-item" data-phase="phase-1" data-keywords="inspection quality hardness durometer shore visual dimensions vernier caliper">
                <div class="card h-100 border rounded-4 shadow-sm flow-card p-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <span class="step-badge-num">02</span>
                            <div>
                                <span class="badge bg-primary-subtle text-primary text-uppercase px-2 py-1 small fw-bold">Phase 1 &bull; Post-Production</span>
                                <h4 class="fw-bold text-dark mb-0 mt-1" style="font-family:'Oswald', sans-serif; font-size:20px;">
                                    Inspection
                                </h4>
                            </div>
                        </div>
                        <div class="step-icon-circle">
                            <i class="fa-solid fa-magnifying-glass-arrow-right text-primary fa-xl"></i>
                        </div>
                    </div>
                    <p class="text-secondary small mb-3" style="line-height:1.7;">
                        In-line verification of cured bearings for dimensional compliance, surface finish, Shore-A hardness, and structural bonding before moving to inventory.
                    </p>
                    <div class="bg-light p-3 rounded-3 border mb-3">
                        <h6 class="fw-bold text-dark small mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i>Key SOP Protocols:</h6>
                        <ul class="list-unstyled text-muted small mb-0" style="line-height:1.8;">
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Durometer hardness check (60 &plusmn; 5 Shore A / IRHD per IS:3400).</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Digital vernier validation of plan length, width, and total bearing height.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Visual check for zero blistering, foreign voids, or steel edge exposure.</li>
                        </ul>
                    </div>
                    <div class="mt-auto d-flex justify-content-between align-items-center pt-2 border-top">
                        <span class="small text-muted"><i class="fa-solid fa-microscope me-1"></i> QA In-Process Team</span>
                        <button class="btn btn-link btn-sm text-primary p-0 text-decoration-none fw-bold" onclick="showStepModal(2)">
                            View Full SOP <i class="fa-solid fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- STEP 03 -->
            <div class="col-lg-6 flow-step-item" data-phase="phase-1" data-keywords="sorting categorization project pier batch marking labeling barcode stamp">
                <div class="card h-100 border rounded-4 shadow-sm flow-card p-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <span class="step-badge-num">03</span>
                            <div>
                                <span class="badge bg-primary-subtle text-primary text-uppercase px-2 py-1 small fw-bold">Phase 1 &bull; Post-Production</span>
                                <h4 class="fw-bold text-dark mb-0 mt-1" style="font-family:'Oswald', sans-serif; font-size:20px;">
                                    Sorting
                                </h4>
                            </div>
                        </div>
                        <div class="step-icon-circle">
                            <i class="fa-solid fa-layer-group text-primary fa-xl"></i>
                        </div>
                    </div>
                    <p class="text-secondary small mb-3" style="line-height:1.7;">
                        Bearings are organized by project specifications, bridge pier design load, customer purchase orders, and distinct manufacturer heat/cure batch numbers.
                    </p>
                    <div class="bg-light p-3 rounded-3 border mb-3">
                        <h6 class="fw-bold text-dark small mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i>Key SOP Protocols:</h6>
                        <ul class="list-unstyled text-muted small mb-0" style="line-height:1.8;">
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Indelible side stamping (Manufacturer, Size, Lot No., Standard Code).</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Project grouping (NHAI, Rail/Metro, State PWD, Overseas export).</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>ERP digital barcode label generation for live stock allocation.</li>
                        </ul>
                    </div>
                    <div class="mt-auto d-flex justify-content-between align-items-center pt-2 border-top">
                        <span class="small text-muted"><i class="fa-solid fa-barcode me-1"></i> Warehouse Marshalling</span>
                        <button class="btn btn-link btn-sm text-primary p-0 text-decoration-none fw-bold" onclick="showStepModal(3)">
                            View Full SOP <i class="fa-solid fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- STEP 04 (Dual Section: Storage Conditions & Inventory) -->
            <div class="col-lg-6 flow-step-item" data-phase="phase-2" data-keywords="storage temperature humidity uv protection inventory management tracking fifo warehouse pallet racking">
                <div class="card h-100 border rounded-4 shadow-sm flow-card p-4" style="background: linear-gradient(180deg, #ffffff 0%, #fdfdfd 100%);">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <span class="step-badge-num">04</span>
                            <div>
                                <span class="badge bg-success-subtle text-success text-uppercase px-2 py-1 small fw-bold">Phase 2 &bull; Storage &amp; Inventory</span>
                                <h4 class="fw-bold text-dark mb-0 mt-1" style="font-family:'Oswald', sans-serif; font-size:20px;">
                                    Storage
                                </h4>
                            </div>
                        </div>
                        <div class="step-icon-circle">
                            <i class="fa-solid fa-warehouse text-primary fa-xl"></i>
                        </div>
                    </div>
                    <p class="text-secondary small mb-3" style="line-height:1.7;">
                        Dual-control management ensuring ambient environmental preservation of elastomers and digital real-time tracking of finished stock.
                    </p>
                    
                    <!-- Sub-point A & B Pills -->
                    <div class="row g-2 mb-3">
                        <div class="col-12">
                            <div class="p-2 px-3 bg-light rounded-3 border">
                                <h6 class="fw-bold text-dark small mb-1"><i class="fa-solid fa-sun-plant-wilt text-warning me-2"></i>Storage Conditions (Temp., Humidity, UV Protection):</h6>
                                <p class="text-muted small mb-0" style="line-height:1.6;">
                                    Store &lt;40&deg;C, protected from direct UV/sunlight, rain, ozone equipment, oils, acids, and solvents. Stored flat on wooden pallets.
                                </p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-2 px-3 bg-light rounded-3 border">
                                <h6 class="fw-bold text-dark small mb-1"><i class="fa-solid fa-boxes-stacked text-primary me-2"></i>Inventory Management (Tracking):</h6>
                                <p class="text-muted small mb-0" style="line-height:1.6;">
                                    Real-time ERP barcoding, bin location mapping, FIFO dispatch scheduling, and 100% batch traceability.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-auto d-flex justify-content-between align-items-center pt-2 border-top">
                        <span class="small text-muted"><i class="fa-solid fa-cubes me-1"></i> Central Warehouse</span>
                        <button class="btn btn-link btn-sm text-primary p-0 text-decoration-none fw-bold" onclick="showStepModal(4)">
                            View Full SOP <i class="fa-solid fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- STEP 05 -->
            <div class="col-lg-6 flow-step-item" data-phase="phase-3" data-keywords="order picking dispatch schedule retrieval pallet forklift staging pick list">
                <div class="card h-100 border rounded-4 shadow-sm flow-card p-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <span class="step-badge-num">05</span>
                            <div>
                                <span class="badge bg-info-subtle text-info-emphasis text-uppercase px-2 py-1 small fw-bold">Phase 3 &bull; Picking &amp; Final QC</span>
                                <h4 class="fw-bold text-dark mb-0 mt-1" style="font-family:'Oswald', sans-serif; font-size:20px;">
                                    Order Picking
                                </h4>
                            </div>
                        </div>
                        <div class="step-icon-circle">
                            <i class="fa-solid fa-dolly text-primary fa-xl"></i>
                        </div>
                    </div>
                    <p class="text-secondary small mb-3" style="line-height:1.7;">
                        Automated generation of Pick-Lists synced with client delivery schedules, retrieving exact pallet lots from rack bays using certified material handling equipment.
                    </p>
                    <div class="bg-light p-3 rounded-3 border mb-3">
                        <h6 class="fw-bold text-dark small mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i>Key SOP Protocols:</h6>
                        <ul class="list-unstyled text-muted small mb-0" style="line-height:1.8;">
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Automated ERP Pick-Slip authorization against approved sales orders.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Pallet retrieval with soft webbing slings or rubber-guarded forklift tines.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Pre-staging in temperature-controlled pre-dispatch marshalling bay.</li>
                        </ul>
                    </div>
                    <div class="mt-auto d-flex justify-content-between align-items-center pt-2 border-top">
                        <span class="small text-muted"><i class="fa-solid fa-dolly-flatbed me-1"></i> Dispatch Handling Desk</span>
                        <button class="btn btn-link btn-sm text-primary p-0 text-decoration-none fw-bold" onclick="showStepModal(5)">
                            View Full SOP <i class="fa-solid fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- STEP 06 -->
            <div class="col-lg-6 flow-step-item" data-phase="phase-3" data-keywords="verification of order purchase order po drawing dimensions pier match schedule reconciliation">
                <div class="card h-100 border rounded-4 shadow-sm flow-card p-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <span class="step-badge-num">06</span>
                            <div>
                                <span class="badge bg-info-subtle text-info-emphasis text-uppercase px-2 py-1 small fw-bold">Phase 3 &bull; Picking &amp; Final QC</span>
                                <h4 class="fw-bold text-dark mb-0 mt-1" style="font-family:'Oswald', sans-serif; font-size:20px;">
                                    Verification of Order
                                </h4>
                            </div>
                        </div>
                        <div class="step-icon-circle">
                            <i class="fa-solid fa-clipboard-check text-primary fa-xl"></i>
                        </div>
                    </div>
                    <p class="text-secondary small mb-3" style="line-height:1.7;">
                        Dual-stage audit reconciling picked physical bearings against client purchase orders, approved structural drawings, and pier load schedules.
                    </p>
                    <div class="bg-light p-3 rounded-3 border mb-3">
                        <h6 class="fw-bold text-dark small mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i>Key SOP Protocols:</h6>
                        <ul class="list-unstyled text-muted small mb-0" style="line-height:1.8;">
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Verification of plan dimensions, internal laminate layers, and rubber grade.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Cross-referencing client drawing revision and consultant approval stamp.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Quantity tally &amp; spares count reconciliation.</li>
                        </ul>
                    </div>
                    <div class="mt-auto d-flex justify-content-between align-items-center pt-2 border-top">
                        <span class="small text-muted"><i class="fa-solid fa-file-circle-check me-1"></i> Order Management Team</span>
                        <button class="btn btn-link btn-sm text-primary p-0 text-decoration-none fw-bold" onclick="showStepModal(6)">
                            View Full SOP <i class="fa-solid fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- STEP 07 -->
            <div class="col-lg-6 flow-step-item" data-phase="phase-3" data-keywords="quality check final qc acceptance proof load tpi third party mtc release">
                <div class="card h-100 border rounded-4 shadow-sm flow-card p-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <span class="step-badge-num">07</span>
                            <div>
                                <span class="badge bg-info-subtle text-info-emphasis text-uppercase px-2 py-1 small fw-bold">Phase 3 &bull; Picking &amp; Final QC</span>
                                <h4 class="fw-bold text-dark mb-0 mt-1" style="font-family:'Oswald', sans-serif; font-size:20px;">
                                    Quality Check (Final)
                                </h4>
                            </div>
                        </div>
                        <div class="step-icon-circle">
                            <i class="fa-solid fa-stamp text-primary fa-xl"></i>
                        </div>
                    </div>
                    <p class="text-secondary small mb-3" style="line-height:1.7;">
                        100% pre-dispatch quality verification by certified QA inspectors and third-party inspection (TPI) agencies to guarantee zero field failure.
                    </p>
                    <div class="bg-light p-3 rounded-3 border mb-3">
                        <h6 class="fw-bold text-dark small mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i>Key SOP Protocols:</h6>
                        <ul class="list-unstyled text-muted small mb-0" style="line-height:1.8;">
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Proof load verification test (1.5x vertical load test report verification).</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>100% visual inspection of side rubber coverage (&ge;4mm) &amp; top covers.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Formal QA Dispatch Clearance sign-off and QC green-tagging.</li>
                        </ul>
                    </div>
                    <div class="mt-auto d-flex justify-content-between align-items-center pt-2 border-top">
                        <span class="small text-muted"><i class="fa-solid fa-certificate me-1"></i> QA/QC &amp; TPI Inspection Bay</span>
                        <button class="btn btn-link btn-sm text-primary p-0 text-decoration-none fw-bold" onclick="showStepModal(7)">
                            View Full SOP <i class="fa-solid fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- STEP 08 -->
            <div class="col-lg-6 flow-step-item" data-phase="phase-4" data-keywords="packing packaging shrink wrap polyethylene pallet strapping edge protection ispm-15">
                <div class="card h-100 border rounded-4 shadow-sm flow-card p-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <span class="step-badge-num">08</span>
                            <div>
                                <span class="badge bg-warning-subtle text-warning-emphasis text-uppercase px-2 py-1 small fw-bold">Phase 4 &bull; Packing &amp; Docs</span>
                                <h4 class="fw-bold text-dark mb-0 mt-1" style="font-family:'Oswald', sans-serif; font-size:20px;">
                                    Packing
                                </h4>
                            </div>
                        </div>
                        <div class="step-icon-circle">
                            <i class="fa-solid fa-box-open text-primary fa-xl"></i>
                        </div>
                    </div>
                    <p class="text-secondary small mb-3" style="line-height:1.7;">
                        Robust multi-layer protective packaging engineered to safeguard bearings against weather, moisture, puncture, and transit vibration.
                    </p>
                    <div class="bg-light p-3 rounded-3 border mb-3">
                        <h6 class="fw-bold text-dark small mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i>Key SOP Protocols:</h6>
                        <ul class="list-unstyled text-muted small mb-0" style="line-height:1.8;">
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Heavy-gauge (&ge;250 micron) UV-treated polyethylene shrink film wrapping.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Heavy-duty corner edge protectors and cushioning spacers.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>ISPM-15 treated wooden pallets with high-tensile polyester strapping.</li>
                        </ul>
                    </div>
                    <div class="mt-auto d-flex justify-content-between align-items-center pt-2 border-top">
                        <span class="small text-muted"><i class="fa-solid fa-boxes-packing me-1"></i> Packaging Line</span>
                        <button class="btn btn-link btn-sm text-primary p-0 text-decoration-none fw-bold" onclick="showStepModal(8)">
                            View Full SOP <i class="fa-solid fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- STEP 09 -->
            <div class="col-lg-6 flow-step-item" data-phase="phase-4" data-keywords="documentation shipment preparation mtc test certificate e-way bill invoice challan pouch">
                <div class="card h-100 border rounded-4 shadow-sm flow-card p-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <span class="step-badge-num">09</span>
                            <div>
                                <span class="badge bg-warning-subtle text-warning-emphasis text-uppercase px-2 py-1 small fw-bold">Phase 4 &bull; Packing &amp; Docs</span>
                                <h4 class="fw-bold text-dark mb-0 mt-1" style="font-family:'Oswald', sans-serif; font-size:20px;">
                                    Documentation &amp; Shipment Preparation
                                </h4>
                            </div>
                        </div>
                        <div class="step-icon-circle">
                            <i class="fa-solid fa-file-shield text-primary fa-xl"></i>
                        </div>
                    </div>
                    <p class="text-secondary small mb-3" style="line-height:1.7;">
                        Compilation and secure attachment of all statutory, engineering, and quality documentation enclosed in waterproof consignment pouches.
                    </p>
                    <div class="bg-light p-3 rounded-3 border mb-3">
                        <h6 class="fw-bold text-dark small mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i>Key SOP Protocols:</h6>
                        <ul class="list-unstyled text-muted small mb-0" style="line-height:1.8;">
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Manufacturer Test Certificate (MTC per EN 10204 3.1) &amp; Lab Test Reports.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Delivery Challan, Tax Invoice, Transit Insurance &amp; GST E-Way Bill.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>IRC:83 On-Site Installation SOP &amp; Warranty Certificate enclosed.</li>
                        </ul>
                    </div>
                    <div class="mt-auto d-flex justify-content-between align-items-center pt-2 border-top">
                        <span class="small text-muted"><i class="fa-solid fa-folder-closed me-1"></i> Logistics Documentation Desk</span>
                        <button class="btn btn-link btn-sm text-primary p-0 text-decoration-none fw-bold" onclick="showStepModal(9)">
                            View Full SOP <i class="fa-solid fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- STEP 10 -->
            <div class="col-lg-6 flow-step-item" data-phase="phase-4" data-keywords="loading shipment crane forklift sling lashing weight distribution vehicle securing">
                <div class="card h-100 border rounded-4 shadow-sm flow-card p-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <span class="step-badge-num">10</span>
                            <div>
                                <span class="badge bg-warning-subtle text-warning-emphasis text-uppercase px-2 py-1 small fw-bold">Phase 4 &bull; Packing &amp; Docs</span>
                                <h4 class="fw-bold text-dark mb-0 mt-1" style="font-family:'Oswald', sans-serif; font-size:20px;">
                                    Loading of Shipment
                                </h4>
                            </div>
                        </div>
                        <div class="step-icon-circle">
                            <i class="fa-solid fa-truck-ramp-box text-primary fa-xl"></i>
                        </div>
                    </div>
                    <p class="text-secondary small mb-3" style="line-height:1.7;">
                        Safe, balanced mechanical loading onto designated transport vehicles utilizing certified fabric webbing slings and crane/forklift protocols.
                    </p>
                    <div class="bg-light p-3 rounded-3 border mb-3">
                        <h6 class="fw-bold text-dark small mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i>Key SOP Protocols:</h6>
                        <ul class="list-unstyled text-muted small mb-0" style="line-height:1.8;">
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Zero direct steel hook or wire rope contact on elastomer surfaces.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Axle weight balancing to prevent transit shifting and rollover hazard.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Heavy-duty ratchet tie-down lashing over corner load-distributors.</li>
                        </ul>
                    </div>
                    <div class="mt-auto d-flex justify-content-between align-items-center pt-2 border-top">
                        <span class="small text-muted"><i class="fa-solid fa-truck-loading me-1"></i> Factory Loading Bay</span>
                        <button class="btn btn-link btn-sm text-primary p-0 text-decoration-none fw-bold" onclick="showStepModal(10)">
                            View Full SOP <i class="fa-solid fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- STEP 11 -->
            <div class="col-lg-6 flow-step-item" data-phase="phase-5" data-keywords="transportation delivery logistics freight container covered truck transit direct">
                <div class="card h-100 border rounded-4 shadow-sm flow-card p-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <span class="step-badge-num">11</span>
                            <div>
                                <span class="badge bg-primary-subtle text-primary text-uppercase px-2 py-1 small fw-bold">Phase 5 &bull; Transit &amp; Delivery</span>
                                <h4 class="fw-bold text-dark mb-0 mt-1" style="font-family:'Oswald', sans-serif; font-size:20px;">
                                    Transportation &amp; Delivery
                                </h4>
                            </div>
                        </div>
                        <div class="step-icon-circle">
                            <i class="fa-solid fa-truck-fast text-primary fa-xl"></i>
                        </div>
                    </div>
                    <p class="text-secondary small mb-3" style="line-height:1.7;">
                        Safe road freight via covered, weatherproof containerized trucks and shock-insulated vehicles dispatched directly from Nashik facility to project sites.
                    </p>
                    <div class="bg-light p-3 rounded-3 border mb-3">
                        <h6 class="fw-bold text-dark small mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i>Key SOP Protocols:</h6>
                        <ul class="list-unstyled text-muted small mb-0" style="line-height:1.8;">
                            <li><i class="fa-solid fa-check text-primary me-2"></i>100% waterproof tarpaulin or hard-container transit protection.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Anti-vibration pallet base dampeners for long-haul national transport.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Dedicated direct logistics avoiding intermediate transshipment hubs.</li>
                        </ul>
                    </div>
                    <div class="mt-auto d-flex justify-content-between align-items-center pt-2 border-top">
                        <span class="small text-muted"><i class="fa-solid fa-road me-1"></i> Fleet Logistics Division</span>
                        <button class="btn btn-link btn-sm text-primary p-0 text-decoration-none fw-bold" onclick="showStepModal(11)">
                            View Full SOP <i class="fa-solid fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- STEP 12 -->
            <div class="col-lg-6 flow-step-item" data-phase="phase-5" data-keywords="tracking shipment monitoring gps telematics live eta location updates">
                <div class="card h-100 border rounded-4 shadow-sm flow-card p-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <span class="step-badge-num">12</span>
                            <div>
                                <span class="badge bg-primary-subtle text-primary text-uppercase px-2 py-1 small fw-bold">Phase 5 &bull; Transit &amp; Delivery</span>
                                <h4 class="fw-bold text-dark mb-0 mt-1" style="font-family:'Oswald', sans-serif; font-size:20px;">
                                    Tracking (Shipment Monitoring)
                                </h4>
                            </div>
                        </div>
                        <div class="step-icon-circle">
                            <i class="fa-solid fa-location-crosshairs text-primary fa-xl"></i>
                        </div>
                    </div>
                    <p class="text-secondary small mb-3" style="line-height:1.7;">
                        24/7 telematics and GPS tracking providing transparent milestone alerts, route visibility, and accurate Estimated Time of Arrival (ETA) to the site team.
                    </p>
                    <div class="bg-light p-3 rounded-3 border mb-3">
                        <h6 class="fw-bold text-dark small mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i>Key SOP Protocols:</h6>
                        <ul class="list-unstyled text-muted small mb-0" style="line-height:1.8;">
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Real-time GPS vehicle tracking with live geographical location link.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Proactive SMS &amp; Email milestone notifications sent to project engineers.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Dedicated 24/7 logistics helpline for transit inquiries.</li>
                        </ul>
                    </div>
                    <div class="mt-auto d-flex justify-content-between align-items-center pt-2 border-top">
                        <span class="small text-muted"><i class="fa-solid fa-satellite me-1"></i> Supply Chain Telematics</span>
                        <button class="btn btn-link btn-sm text-primary p-0 text-decoration-none fw-bold" onclick="showStepModal(12)">
                            View Full SOP <i class="fa-solid fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- STEP 13 -->
            <div class="col-lg-6 flow-step-item" data-phase="phase-5" data-keywords="final delivery customer site arrival unloading pier yard staging handover">
                <div class="card h-100 border rounded-4 shadow-sm flow-card p-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <span class="step-badge-num">13</span>
                            <div>
                                <span class="badge bg-primary-subtle text-primary text-uppercase px-2 py-1 small fw-bold">Phase 5 &bull; Transit &amp; Delivery</span>
                                <h4 class="fw-bold text-dark mb-0 mt-1" style="font-family:'Oswald', sans-serif; font-size:20px;">
                                    Final Delivery to Customer
                                </h4>
                            </div>
                        </div>
                        <div class="step-icon-circle">
                            <i class="fa-solid fa-map-location-dot text-primary fa-xl"></i>
                        </div>
                    </div>
                    <p class="text-secondary small mb-3" style="line-height:1.7;">
                        Safe vehicle arrival at the client's bridge construction site, highway casting yard, or precast yard with coordinated unloading supervision.
                    </p>
                    <div class="bg-light p-3 rounded-3 border mb-3">
                        <h6 class="fw-bold text-dark small mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i>Key SOP Protocols:</h6>
                        <ul class="list-unstyled text-muted small mb-0" style="line-height:1.8;">
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Arrival reporting and gate clearance at site staging zone.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Unloading with crane spreader beams or site forklift on timber skids.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Physical count matching with driver delivery challan.</li>
                        </ul>
                    </div>
                    <div class="mt-auto d-flex justify-content-between align-items-center pt-2 border-top">
                        <span class="small text-muted"><i class="fa-solid fa-location-dot me-1"></i> Client Site Staging Area</span>
                        <button class="btn btn-link btn-sm text-primary p-0 text-decoration-none fw-bold" onclick="showStepModal(13)">
                            View Full SOP <i class="fa-solid fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- STEP 14 -->
            <div class="col-lg-6 flow-step-item" data-phase="phase-6" data-keywords="receiving inspection customer client resident engineer consultant joint inspection mtc verification">
                <div class="card h-100 border rounded-4 shadow-sm flow-card p-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <span class="step-badge-num">14</span>
                            <div>
                                <span class="badge bg-danger-subtle text-danger text-uppercase px-2 py-1 small fw-bold">Phase 6 &bull; Receiving &amp; After-Sales</span>
                                <h4 class="fw-bold text-dark mb-0 mt-1" style="font-family:'Oswald', sans-serif; font-size:20px;">
                                    Receiving &amp; Inspection by Customer
                                </h4>
                            </div>
                        </div>
                        <div class="step-icon-circle">
                            <i class="fa-solid fa-user-check text-primary fa-xl"></i>
                        </div>
                    </div>
                    <p class="text-secondary small mb-3" style="line-height:1.7;">
                        Joint on-site receipt inspection by client resident engineer, EPC contractor QA personnel, and consultant representatives against MTC parameters.
                    </p>
                    <div class="bg-light p-3 rounded-3 border mb-3">
                        <h6 class="fw-bold text-dark small mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i>Key SOP Protocols:</h6>
                        <ul class="list-unstyled text-muted small mb-0" style="line-height:1.8;">
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Intact shrink-wrap seal and tamper-proof tag verification.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Bearing serial number matching against MTC and dispatch manifest.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Visual check for zero damage occurred during long-distance transit.</li>
                        </ul>
                    </div>
                    <div class="mt-auto d-flex justify-content-between align-items-center pt-2 border-top">
                        <span class="small text-muted"><i class="fa-solid fa-user-shield me-1"></i> Client Site QA &amp; Consultant</span>
                        <button class="btn btn-link btn-sm text-primary p-0 text-decoration-none fw-bold" onclick="showStepModal(14)">
                            View Full SOP <i class="fa-solid fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- STEP 15 -->
            <div class="col-lg-6 flow-step-item" data-phase="phase-6" data-keywords="receiving confirmation grn goods receipt note signed acknowledgment custody handover">
                <div class="card h-100 border rounded-4 shadow-sm flow-card p-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <span class="step-badge-num">15</span>
                            <div>
                                <span class="badge bg-danger-subtle text-danger text-uppercase px-2 py-1 small fw-bold">Phase 6 &bull; Receiving &amp; After-Sales</span>
                                <h4 class="fw-bold text-dark mb-0 mt-1" style="font-family:'Oswald', sans-serif; font-size:20px;">
                                    Receiving Confirmation
                                </h4>
                            </div>
                        </div>
                        <div class="step-icon-circle">
                            <i class="fa-solid fa-file-signature text-primary fa-xl"></i>
                        </div>
                    </div>
                    <p class="text-secondary small mb-3" style="line-height:1.7;">
                        Formal client sign-off on the Goods Received Note (GRN) and Delivery Challan confirming acceptance of consignment and transfer of custody.
                    </p>
                    <div class="bg-light p-3 rounded-3 border mb-3">
                        <h6 class="fw-bold text-dark small mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i>Key SOP Protocols:</h6>
                        <ul class="list-unstyled text-muted small mb-0" style="line-height:1.8;">
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Executed GRN endorsement with authorized site seal and sign.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Physical handover of official test certificate dossier &amp; SOP booklet.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Digital logging into ERP for warranty activation.</li>
                        </ul>
                    </div>
                    <div class="mt-auto d-flex justify-content-between align-items-center pt-2 border-top">
                        <span class="small text-muted"><i class="fa-solid fa-clipboard-check me-1"></i> Site In-Charge / PP Logistics</span>
                        <button class="btn btn-link btn-sm text-primary p-0 text-decoration-none fw-bold" onclick="showStepModal(15)">
                            View Full SOP <i class="fa-solid fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- STEP 16 -->
            <div class="col-lg-6 flow-step-item" data-phase="phase-6" data-keywords="after-sales support returns claims engineering assistance warranty replacement lifetime support">
                <div class="card h-100 border rounded-4 shadow-sm flow-card p-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <span class="step-badge-num">16</span>
                            <div>
                                <span class="badge bg-danger-subtle text-danger text-uppercase px-2 py-1 small fw-bold">Phase 6 &bull; Receiving &amp; After-Sales</span>
                                <h4 class="fw-bold text-dark mb-0 mt-1" style="font-family:'Oswald', sans-serif; font-size:20px;">
                                    After-Sales Support (Returns/Claims)
                                </h4>
                            </div>
                        </div>
                        <div class="step-icon-circle">
                            <i class="fa-solid fa-headset text-primary fa-xl"></i>
                        </div>
                    </div>
                    <p class="text-secondary small mb-3" style="line-height:1.7;">
                        Comprehensive technical engineering assistance during bridge installation, expedited claims/returns protocol, and lifetime product support.
                    </p>
                    <div class="bg-light p-3 rounded-3 border mb-3">
                        <h6 class="fw-bold text-dark small mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i>Key SOP Protocols:</h6>
                        <ul class="list-unstyled text-muted small mb-0" style="line-height:1.8;">
                            <li><i class="fa-solid fa-check text-primary me-2"></i>On-site / remote engineering guidance for pedestal mortar &amp; jacking.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Rapid claims handling &amp; prioritized replacement warranty in 48-72h.</li>
                            <li><i class="fa-solid fa-check text-primary me-2"></i>Periodic post-installation health check advisory &amp; lifetime records.</li>
                        </ul>
                    </div>
                    <div class="mt-auto d-flex justify-content-between align-items-center pt-2 border-top">
                        <span class="small text-muted"><i class="fa-solid fa-hand-holding-heart me-1"></i> Technical Services Division</span>
                        <button class="btn btn-link btn-sm text-primary p-0 text-decoration-none fw-bold" onclick="showStepModal(16)">
                            View Full SOP <i class="fa-solid fa-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div> <!-- /#flowCardsContainer -->

        <!-- Flowchart Quick Summary Alert Box -->
        <div class="mt-5 p-4 rounded-4 text-white shadow" style="background: linear-gradient(135deg, #091a33 0%, #152e52 100%); border-left: 6px solid var(--theme-primary);">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-3 mb-lg-0">
                    <h5 class="fw-bold text-white mb-2" style="font-family:'Oswald', sans-serif; font-size:20px;">
                        <i class="fa-solid fa-shield-halved text-white  me-2"></i>100% Quality &amp; Transit Traceability Guarantee
                    </h5>
                    <p class="text-light small mb-0" style="line-height:1.7; color:#cbd5e1 !important;">
                        Every single elastomeric bearing shipped from Polymer Products is backed by individual serial-number traceability, accredited raw material MTC test reports, and compliance with IRC:83 (Part II), RDSO, and ISO 9001:2027 standards.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="contact.php" class="btn btn-primary rounded-pill px-4 py-2 fw-bold text-uppercase" style="background:var(--theme-primary); border-color:var(--theme-primary); font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-envelope-open-text me-2"></i>Inquire About Logistics
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     INTERACTIVE STEP DETAILS MODAL (Bootstrap 5)
     ============================================================ -->
<div class="modal fade" id="flowStepModal" tabindex="-1" aria-labelledby="flowStepModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-4 border-0 shadow">
            <div class="modal-header text-white p-4" style="background: linear-gradient(135deg, #091a33 0%, #152e52 100%); border-top-left-radius: calc(1rem - 1px); border-top-right-radius: calc(1rem - 1px);">
                <div class="d-flex align-items-center gap-3">
                    <span class="badge bg-primary text-white fs-6 px-3 py-2 rounded-pill" id="modalStepNum">Step 01</span>
                    <h5 class="modal-title fw-bold mb-0 text-white" id="modalStepTitle" style="font-family:'Oswald', sans-serif; font-size:22px;">Step Title</h5>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4" id="modalStepBody">
                <!-- Dynamic Content injected by JS -->
            </div>
            <div class="modal-footer bg-light p-3 border-top d-flex justify-content-between">
                <div class="small text-muted" id="modalStepStandards">
                    <i class="fa-solid fa-book-bookmark text-primary me-1"></i> Standards: IRC:83 (Part II) | ISO 9001:2027
                </div>
                <button type="button" class="btn btn-secondary btn-sm rounded-pill px-4" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================
     4. Technical Support & RFQ Banner
     ============================================================ -->
<section class="py-5" style="background: var(--theme-primary); color:#cbd5e1; border-top:1px solid rgba(255,255,255,0.1);">
    <div class="container text-center py-3">
        <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: white; border: 1px solid var(--theme-primary); color: var(--theme-primary); font-size:12px; letter-spacing:1px; font-weight:600;">
            Site Installation &amp; Logistics Assistance
        </span> 
        <h3 class="text-light fw-bold mb-2" style="font-family:'Oswald', sans-serif; font-size:28px;">
            Need Assistance with Bearing Delivery or On-Site Handover?
        </h3>
        <p class="text-light mb-4 mx-auto" style="max-width:650px; font-size:15px;">
            Our technical engineers and logistics managers coordinate vehicle dispatch schedules, site unloading protocols, and MTC test documentation for smooth contractor handover.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="contact.php" class="btn   rounded-pill px-4 py-2 fw-bold text-uppercase" style="background:var(--theme-primary); border-color:var(--theme-primary); font-size:13px; letter-spacing:0.5px; background-color: #ffffffff; color:#3691bf">
                <i class="fa-solid fa-paper-plane me-2"></i>Contact Technical Support
            </a>
            <!-- <a href="assets/pp_data/Page 01/Credential_Polymer_Products.pdf" target="_blank" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                <i class="fa-solid fa-file-pdf me-2"></i>Download Credentials
            </a> -->
        </div>
    </div>
</section>

<!-- ============================================================
     FLOW CHART JAVASCRIPT LOGIC & MODAL DATA
     ============================================================ -->
<script>
// Complete SOP Dataset for all 16 Steps
const flowStepsData = {
    1: {
        num: "Step 01",
        title: "Post-Production Handling",
        phase: "Phase 1: Post-Production & Sorting",
        dept: "Vulcanization & Finishing Shopfloor",
        standards: "IRC:83 (Part II), ISO 9001:2027",
        desc: "Immediate post-cure processing ensuring the elastomeric bearing cools down uniformly without inducing residual thermal stresses or geometric warpage.",
        protocols: [
            "De-moulding executed with non-damaging brass/composite tools right after hydraulic pressure release.",
            "Bearings allowed to stabilize on heat-resistant cooling racks in ambient 25°C - 30°C holding zone.",
            "Flash trimming using precision pneumatic knives to create a seamless outer protective cover (≥4mm side cover thickness).",
            "Transport from press bay to in-process QA area via soft rubber-padded rolling trolleys."
        ],
        documents: "Curing Temperature Log, Shift Production Sheet, Operator Tag."
    },
    2: {
        num: "Step 02",
        title: "Inspection",
        phase: "Phase 1: Post-Production & Sorting",
        dept: "QA In-Process Department",
        standards: "IS:3400 (Part 2), ASTM D2240, IRC:83",
        desc: "Comprehensive physical and dimensional validation of every individual bearing to catch raw variances before warehouse stacking.",
        protocols: [
            "Hardness Testing: Calibrated Shore-A durometer verification ensuring 60 ± 5 IRHD/Shore-A across 5 sample points.",
            "Dimensional Profiling: Calibrated digital vernier caliper check for plan length, width, and overall height (tolerance within ±3mm / ±1%).",
            "Surface Examination: 100% optical inspection for absence of flow cracks, blisters, entrapped air pockets, or exposed steel edges.",
            "Steel Plate Parallelism: Verifying top and bottom surface planarity using dial indicator."
        ],
        documents: "In-Process QA Log, Hardness Test Sheet, Dimensional Variance Log."
    },
    3: {
        num: "Step 03",
        title: "Sorting",
        phase: "Phase 1: Post-Production & Sorting",
        dept: "Warehouse Marshalling & Sorting Desk",
        standards: "RDSO Specification, MORTH Cl. 2005",
        desc: "Grouping, tagging, and physical segregation of approved bearings according to client contract, pier design, and manufacturing lot.",
        protocols: [
            "Permanent Indelible Marking: Stamping manufacturer name (PP), bearing dimensions (L x W x H), lot code, and standard reference onto side cover rubber.",
            "Contract Segregation: Separation into project-specific dispatch channels (e.g. NHAI Highways, High Speed Rail, Metro Viaducts).",
            "Lot Batching: Grouping bearings cast from the same rubber masterbatch to ensure uniform elasticity and deflection performance.",
            "ERP Barcode Generation: Affixing weather-resistant barcode labels linking to raw material test records."
        ],
        documents: "Lot Master Registry, Material Allocation Voucher, Barcode Tag."
    },
    4: {
        num: "Step 04",
        title: "Storage",
        phase: "Phase 2: Storage & Inventory Control",
        dept: "Central Finished Goods Warehouse",
        standards: "BS 5400, EN 1337-3, IRC:83 (Part II)",
        desc: "State-of-the-art climate-controlled warehouse preservation ensuring elastomer durability coupled with computerized inventory management.",
        protocols: [
            "Storage Conditions: Warehouse maintained under 40°C, zero direct sunlight/UV exposure with UV-blocking roof coatings.",
            "Chemical Segregation: Strict minimum 15-meter separation from solvents, fuels, lubricants, acids, and ozone-emitting electrical motors.",
            "Flat Pallet Stacking: Bearings stacked horizontally flat on heavy timber skids up to a maximum of 4-5 layers to prevent creep or deformation.",
            "Inventory Management: Live ERP tracking of bin/rack locations, barcode scanning, and FIFO (First-In First-Out) dispatch scheduling."
        ],
        documents: "Warehouse Climate Log, Inventory Bin Card, ERP Stock Registry."
    },
    5: {
        num: "Step 05",
        title: "Order Picking",
        phase: "Phase 3: Order Picking & Final QC",
        dept: "Dispatch Operations & Picking Crew",
        standards: "ISO 9001:2027 Cl. 8.5",
        desc: "Systematic retrieval of earmarked bearings from warehouse storage bins in strict accordance with the client's approved dispatch schedule.",
        protocols: [
            "Automated Pick-Slip generated from verified sales order requisition.",
            "Safe pallet retrieval using padded forklift forks or heavy fabric webbing slings to prevent edge scuffing.",
            "Transfer of picked pallets to the designated climate-controlled Dispatch Marshalling Bay.",
            "Verification of pallet barcode matching the active delivery schedule."
        ],
        documents: "ERP Pick-Slip, Goods Transfer Order, Material Requisition Form."
    },
    6: {
        num: "Step 06",
        title: "Verification of Order",
        phase: "Phase 3: Order Picking & Final QC",
        dept: "Order Management & QA Dispatch Auditor",
        standards: "IRC:83 (Part II), Client Technical Specifications",
        desc: "Three-way document and physical reconciliation checking picked stock against client purchase orders and approved structural engineering drawings.",
        protocols: [
            "Technical Parameter Check: Verifying bearing size, elastomer type (Chloroprene / Natural Rubber), and internal steel plate thicknesses against structural drawings.",
            "Pier & Abutment Tagging: Ensuring bearings tagged for specific pier numbers (P1, P2, Abutment A1) are segregated accordingly.",
            "Schedule & Quantity Audit: Exact piece count tally including contractually specified spare bearings.",
            "Pre-shipment cross-check with sales engineering team."
        ],
        documents: "Client PO, Approved GAD (General Arrangement Drawing), Dispatch Reconciliation Sheet."
    },
    7: {
        num: "Step 07",
        title: "Quality Check (Final)",
        phase: "Phase 3: Order Picking & Final QC",
        dept: "Senior QA Management & Third-Party Inspection (TPI)",
        standards: "IRC:83 (Part II) Cl. 917, RDSO B-10011, ISO 9001",
        desc: "100% final pre-dispatch quality clearance conducted by internal quality auditors and third-party agencies (e.g. RITES, DNV, SGS, EIL).",
        protocols: [
            "Proof Load Verification: Verification of 1.5x design vertical proof load test records on computerized test rig.",
            "Visual Outer Coverage: Final examination of outer protective elastomer layer for pristine, defect-free surface finish.",
            "Dimensional Tolerances: Re-measuring plan dimensions and total thickness against allowable tolerances.",
            "Final QA Clearance: Affixing green QA 'PASSED FOR DISPATCH' holographic stamp on package."
        ],
        documents: "Manufacturer Test Certificate (MTC), TPI Inspection Release Note, Proof Load Test Log."
    },
    8: {
        num: "Step 08",
        title: "Packing",
        phase: "Phase 4: Packing & Docs",
        dept: "Packaging & Packing Crew",
        standards: "ISPM-15, ASTM D3951 Standard Practice for Packaging",
        desc: "Engineered heavy-duty transit packaging protecting bearings from physical vibration, weather, moisture, and road hazards.",
        protocols: [
            "Heavy-Gauge Shrink Wrap: Multi-layer wrapping with ≥250 micron UV-resistant polyethylene stretch film.",
            "Corner Protectors: Reinforced composite edge guards placed along all top and bottom bearing edges.",
            "Wooden Pallet Base: Sturdy ISPM-15 heat-treated timber pallets with anti-slip timber battens.",
            "High-Tensile Strapping: Cross-tensioned polyester / steel strapping securing the package immovably to the pallet."
        ],
        documents: "Packing Checklist, Pallet Identification Label, ISPM-15 Certificate."
    },
    9: {
        num: "Step 09",
        title: "Documentation & Shipment Preparation",
        phase: "Phase 4: Packing & Docs",
        dept: "Logistics Documentation & Accounts",
        standards: "GST E-Way Rules, EN 10204 Type 3.1 Certification",
        desc: "Compilation of complete statutory, technical, and commercial documentation enclosed in waterproof transparent pouches on the consignment.",
        protocols: [
            "Original Manufacturer Test Certificate (MTC Type 3.1) with raw rubber compounding & steel plate mill certificates.",
            "Tax Invoice, Delivery Challan, and active GST E-Way Bill with QR code.",
            "Comprehensive IRC:83 On-Site Storage & Installation Instruction Manual.",
            "Transit Marine & Cargo Insurance Certificate and Manufacturer Warranty Document."
        ],
        documents: "MTC Dossier, Tax Invoice, Delivery Challan, E-Way Bill, Warranty Card."
    },
    10: {
        num: "Step 10",
        title: "Loading of Shipment",
        phase: "Phase 4: Packing & Docs",
        dept: "Factory Loading Bay Supervisor",
        standards: "Motor Vehicles Act, Safe Cargo Handling SOP",
        desc: "Safe, balanced mechanical loading onto designated transport vehicles utilizing soft webbing slings and certified crane/forklift protocols.",
        protocols: [
            "Fabric Slings Only: Strict ban on direct steel chains or wire hooks contacting bearing elastomer or packaging.",
            "Axle Weight Distribution: Balancing heavy palletized loads evenly across truck bed to prevent transit shifting.",
            "Heavy-Duty Ratchet Lashing: Securing pallet units to truck chassis with high-capacity ratchets over edge load spreaders.",
            "Pre-departure truck body inspection for water-tightness and clean floor."
        ],
        documents: "Vehicle Loading Manifest, Gate Pass, Driver Acknowledgment."
    },
    11: {
        num: "Step 11",
        title: "Transportation & Delivery",
        phase: "Phase 5: Transit & Delivery",
        dept: "Supply Chain & Fleet Logistics Division",
        standards: "CMVR Transit Guidelines, Goods Transport SOP",
        desc: "Secure road transit via approved, covered containerized vehicles or waterproof tarpaulin-sealed trucks dispatched directly from Nashik.",
        protocols: [
            "All-Weather Protection: Hard container or triple-layer waterproof heavy tarpaulin sealing against rain, dust, and solar heat.",
            "Anti-Vibration Dampening: Heavy rubberized damping mats positioned underneath timber pallet bases.",
            "Direct Logistics: Direct routing from factory to project site avoiding transshipment depot handling.",
            "Trained Drivers: Experienced freight operators briefed on handling sensitive elastomeric engineering goods."
        ],
        documents: "Lorry Receipt (LR / Bilty), Transit Insurance Copy, Consignment Note."
    },
    12: {
        num: "Step 12",
        title: "Tracking (Shipment Monitoring)",
        phase: "Phase 5: Transit & Delivery",
        dept: "Supply Chain Telematics Desk",
        standards: "Digital Logistics SOP",
        desc: "Continuous 24/7 telematics and GPS tracking providing transparent milestone alerts, route visibility, and accurate ETA to site engineers.",
        protocols: [
            "Live GPS Tracking: Real-time satellite vehicle tracking with digital milestone updates.",
            "Proactive ETA Notifications: SMS and Email notifications dispatched to client resident engineers at key transit checkpoints.",
            "Geofenced Arrival Alerts: Automatic notifications generated upon vehicle entry within 50 km of destination.",
            "24/7 Logistics Helpline: Direct coordination between transporter, driver, and site receiving team."
        ],
        documents: "Live GPS Tracking Link, Transit Status Log, ETA Broadcast Sheet."
    },
    13: {
        num: "Step 13",
        title: "Final Delivery to Customer",
        phase: "Phase 5: Transit & Delivery",
        dept: "Logistics Driver & Client Site Receiving Desk",
        standards: "Site Safety Protocol",
        desc: "Timely arrival and safe gate-entry at the client's bridge construction site, highway casting yard, or precast facility.",
        protocols: [
            "Gate Security Clearance: Presentation of E-Way Bill, Delivery Challan, and driver credentials at project security.",
            "Safe Positioning: Vehicle positioned at designated level unloading yard near bridge pier staging area.",
            "Unloading Supervision: Utilizing site crane with spreader beams or heavy forklift without rough handling.",
            "Delivery Challan physical count check before vehicle release."
        ],
        documents: "Gate Entry Slip, Site Security Pass, Unloading Verification Log."
    },
    14: {
        num: "Step 14",
        title: "Receiving & Inspection by Customer",
        phase: "Phase 6: Receiving & After-Sales",
        dept: "Client Site Resident Engineer & EPC QA Team",
        standards: "IRC:83 (Part II), MORTH Cl. 2005",
        desc: "Joint on-site receipt inspection conducted by the client resident engineer, EPC contractor QA personnel, and consultant representatives.",
        protocols: [
            "Packaging Integrity: Verifying intact shrink-wrap seals and absence of transit moisture or puncture damage.",
            "Identification Verification: Cross-verifying bearing serial markings against accompanying Manufacturer Test Certificate (MTC).",
            "Physical Audit: Visual inspection of top and bottom contact surfaces and elastomeric side coverage.",
            "Joint inspection sign-off between transporter representative and site engineer."
        ],
        documents: "Joint Site Inspection Report, Packaging Integrity Record, Material Inward Checklist."
    },
    15: {
        num: "Step 15",
        title: "Receiving Confirmation",
        phase: "Phase 6: Receiving & After-Sales",
        dept: "Site In-Charge & Polymer Products Logistics",
        standards: "Commercial Handover Protocol",
        desc: "Formal client sign-off on Goods Received Note (GRN) and Delivery Challan confirming acceptance of consignment and transfer of custody.",
        protocols: [
            "GRN Endorsement: Executing client's official Goods Received Note (GRN) with seal and authorized signature.",
            "Dossier Handover: Delivering complete hard-copy MTC folder, installation manual, and warranty documentation to site office.",
            "Digital Handover Log: Transmitting signed delivery confirmation copy to Polymer Products central ERP to initiate warranty period.",
            "Archive of signed delivery proof in customer contract repository."
        ],
        documents: "Signed Goods Received Note (GRN), Endorsed Delivery Challan, Warranty Activation Slip."
    },
    16: {
        num: "Step 16",
        title: "After-Sales Support (Returns/Claims)",
        phase: "Phase 6: Receiving & After-Sales",
        dept: "Technical Engineering Services & QA Desk",
        standards: "Polymer Products Customer Care & Warranty Charter",
        desc: "Comprehensive engineering guidance during bridge installation, expedited claims resolution, and lifetime product support.",
        protocols: [
            "Site Engineering Guidance: On-site or remote engineering support for pedestal leveling, epoxy bedding mortar, and synchronized jacking.",
            "Rapid Claims Resolution: In the unlikely event of transit discrepancy, claims are logged and processed within 24 hours.",
            "Expedited Replacement: Guaranteed expedited replacement manufactured and shipped within 48 to 72 hours.",
            "Periodic Health Checks: Technical advisory for annual bridge bearing maintenance and deflection monitoring."
        ],
        documents: "Customer Feedback Form, Technical Support Ticket, Warranty Support Certificate."
    }
};

// Filter by Phase
function filterFlowPhase(phase, btnElement) {
    // Update button states
    const buttons = document.querySelectorAll('#flowNavButtons button');
    buttons.forEach(b => {
        b.classList.remove('btn-primary', 'active-btn');
        b.classList.add('btn-outline-secondary');
    });
    if (btnElement) {
        btnElement.classList.remove('btn-outline-secondary');
        btnElement.classList.add('btn-primary', 'active-btn');
    }

    // Update Phase Node Cards
    const phaseCards = document.querySelectorAll('.phase-node-card');
    phaseCards.forEach(c => c.classList.remove('active-phase'));
    if (phase !== 'all') {
        const matchingCard = document.querySelector(`.phase-node-card[onclick*="${phase}"]`);
        if (matchingCard) matchingCard.classList.add('active-phase');
    }

    // Filter cards
    const items = document.querySelectorAll('.flow-step-item');
    items.forEach(item => {
        if (phase === 'all' || item.getAttribute('data-phase') === phase) {
            item.style.display = 'block';
            item.classList.add('animate__animated', 'animate__fadeIn');
        } else {
            item.style.display = 'none';
        }
    });
}

// Instant Keyword Search
function searchFlowSteps() {
    const input = document.getElementById('flowSearchInput').value.toLowerCase().trim();
    const items = document.querySelectorAll('.flow-step-item');

    items.forEach(item => {
        const text = item.innerText.toLowerCase();
        const keywords = item.getAttribute('data-keywords') || '';
        if (input === '' || text.includes(input) || keywords.includes(input)) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}

// Show Step Modal Details
function showStepModal(stepNumber) {
    const data = flowStepsData[stepNumber];
    if (!data) return;

    document.getElementById('modalStepNum').innerText = data.num;
    document.getElementById('modalStepTitle').innerText = data.title;
    document.getElementById('modalStepStandards').innerHTML = `<i class="fa-solid fa-book-bookmark text-primary me-1"></i> <strong>Standards:</strong> ${data.standards}`;

    let protocolsHtml = data.protocols.map(p => `<li class="mb-2"><i class="fa-solid fa-circle-check text-primary me-2"></i>${p}</li>`).join('');

    const contentHtml = `
        <div class="mb-3">
            <span class="badge bg-primary-subtle text-primary fw-bold text-uppercase px-3 py-1 mb-2">${data.phase}</span>
            <p class="text-secondary" style="font-size:15px; line-height:1.7;">${data.desc}</p>
        </div>

        <div class="p-3 bg-light rounded-3 border mb-3">
            <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-clipboard-list text-primary me-2"></i>Standard Operating Procedures (SOP Checklist):</h6>
            <ul class="list-unstyled text-muted small mb-0" style="line-height:1.8;">
                ${protocolsHtml}
            </ul>
        </div>

        <div class="row g-3">
            <div class="col-sm-6">
                <div class="p-3 bg-white rounded-3 border h-100">
                    <span class="small text-muted d-block mb-1"><i class="fa-solid fa-building-user text-primary me-1"></i> Responsible Division</span>
                    <strong class="text-dark small">${data.dept}</strong>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="p-3 bg-white rounded-3 border h-100">
                    <span class="small text-muted d-block mb-1"><i class="fa-solid fa-file-lines text-primary me-1"></i> Associated Records</span>
                    <strong class="text-dark small">${data.documents}</strong>
                </div>
            </div>
        </div>
    `;

    document.getElementById('modalStepBody').innerHTML = contentHtml;

    // Show Bootstrap 5 Modal
    const myModal = new bootstrap.Modal(document.getElementById('flowStepModal'));
    myModal.show();
}

// Storage / Installation PDF Document Viewer Modal Logic
document.addEventListener('DOMContentLoaded', function () {
    const docModalEl = document.getElementById('storageDocModal');
    if (!docModalEl) return;

    const modalDialog = docModalEl.querySelector('.modal-dialog');
    const modalTitle = document.getElementById('storageDocModalLabel');
    const modalIframe = document.getElementById('storageDocModalIframe');
    const modalLoader = document.getElementById('storageDocModalLoader');
    const fullscreenBtn = document.getElementById('storageDocModalFullscreenBtn');
    const fullscreenText = document.getElementById('storageDocModalFullscreenText');

    function getModalInstance() {
        if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
            return bootstrap.Modal.getOrCreateInstance(docModalEl);
        }
        return null;
    }

    function resetFullscreen() {
        if (modalDialog) {
            modalDialog.classList.remove('modal-fullscreen');
            modalDialog.classList.add('modal-xl');
        }
        if (fullscreenBtn) {
            fullscreenBtn.innerHTML = '<i class="fa-solid fa-expand"></i> <span id="storageDocModalFullscreenText">Fullscreen</span>';
        }
        if (modalIframe) {
            modalIframe.style.height = '75vh';
        }
    }

    function toggleFullscreen() {
        if (!modalDialog) return;
        const isFull = modalDialog.classList.toggle('modal-fullscreen');
        if (isFull) {
            modalDialog.classList.remove('modal-xl');
            if (fullscreenBtn) {
                fullscreenBtn.innerHTML = '<i class="fa-solid fa-compress"></i> <span id="storageDocModalFullscreenText">Exit Fullscreen</span>';
            }
            if (modalIframe) {
                modalIframe.style.height = 'calc(100vh - 130px)';
            }
        } else {
            modalDialog.classList.add('modal-xl');
            if (fullscreenBtn) {
                fullscreenBtn.innerHTML = '<i class="fa-solid fa-expand"></i> <span id="storageDocModalFullscreenText">Fullscreen</span>';
            }
            if (modalIframe) {
                modalIframe.style.height = '75vh';
            }
        }
    }

    if (fullscreenBtn) {
        fullscreenBtn.addEventListener('click', function (e) {
            e.preventDefault();
            toggleFullscreen();
        });
    }

    function unlockPageScroll() {
        resetFullscreen();
        if (modalIframe) {
            modalIframe.src = '';
            modalIframe.style.display = 'none';
        }
        if (modalLoader) modalLoader.style.display = 'none';

        document.body.classList.remove('modal-open');
        document.body.style.removeProperty('overflow');
        document.body.style.removeProperty('overflow-y');
        document.body.style.removeProperty('padding-right');
        document.documentElement.style.removeProperty('overflow');
        document.documentElement.style.removeProperty('overflow-y');

        document.querySelectorAll('.modal-backdrop').forEach(function (backdrop) {
            backdrop.remove();
        });
    }

    docModalEl.addEventListener('hidden.bs.modal', unlockPageScroll);

    document.querySelectorAll('.open-storage-doc-modal').forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();

            const url = this.getAttribute('data-doc-url');
            const title = this.getAttribute('data-doc-title') || 'Installation & Maintenance Methodology';

            if (!url) return;

            resetFullscreen();

            if (modalTitle) modalTitle.textContent = title;
            if (modalLoader) modalLoader.style.display = 'block';
            if (modalIframe) {
                modalIframe.style.display = 'none';
                modalIframe.src = '';
            }

            const cleanUrl = url.split('#')[0];
            const pdfViewerUrl = cleanUrl + '#toolbar=0&navpanes=0&scrollbar=1&view=FitH';

            if (modalIframe) {
                modalIframe.onload = function () {
                    if (modalLoader) modalLoader.style.display = 'none';
                    modalIframe.style.display = 'block';
                };
                modalIframe.src = pdfViewerUrl;
            }

            setTimeout(function () {
                if (modalLoader) modalLoader.style.display = 'none';
                if (modalIframe) modalIframe.style.display = 'block';
            }, 600);

            const bsModal = getModalInstance();
            if (bsModal) {
                bsModal.show();
            } else if (typeof $ !== 'undefined') {
                $(docModalEl).modal('show');
            }
        });
    });
});
</script>

<!-- ============================================================
     STORAGE / INSTALLATION PDF DOCUMENT VIEWER MODAL
     ============================================================ -->
<div class="modal fade" id="storageDocModal" tabindex="-1" aria-labelledby="storageDocModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="modal-header bg-dark text-white border-0 py-3 px-4 d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle p-2 d-flex align-items-center justify-content-center text-white" style="background: var(--theme-primary); width: 40px; height: 40px;">
                        <i class="fa-solid fa-file-pdf fs-6"></i>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold text-white mb-0" id="storageDocModalLabel" style="font-family: 'Oswald', sans-serif; letter-spacing: 0.5px;">
                            Installation and Maintenance Methodology
                        </h5>
                        <small class="text-light text-opacity-75" style="font-size: 12px;">Official Technical Manual &bull; IRC:83 (Part II) &bull; RDSO &bull; MoRTH Clause 2005</small>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <button type="button" id="storageDocModalFullscreenBtn" class="btn btn-sm btn-outline-light rounded-pill px-3 py-1 d-inline-flex align-items-center gap-1.5" title="Toggle Fullscreen View">
                        <i class="fa-solid fa-expand"></i> <span id="storageDocModalFullscreenText">Fullscreen</span>
                    </button>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            
            <div class="modal-body p-0 position-relative" style="background: #0f172a; min-height: 540px;">
                <div id="storageDocModalLoader" class="position-absolute top-50 start-50 translate-middle text-center py-5">
                    <div class="spinner-border text-primary mb-2" role="status" style="width: 3rem; height: 3rem;">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p class="text-white-50 small mb-0">Loading document preview...</p>
                </div>

                <iframe id="storageDocModalIframe" src="" style="width: 100%; height: 75vh; border: none; display: none; background: #fff;" allowfullscreen></iframe>
            </div>

            <div class="modal-footer bg-light px-4 py-2.5 border-top d-flex justify-content-between align-items-center">
                <span class="text-muted small">
                    <i class="fa-solid fa-shield-check text-success me-1"></i> Verified Technical SOP &bull; Polymer Products, Nashik
                </span>
                <button type="button" class="btn btn-secondary btn-sm rounded-pill px-4" data-bs-dismiss="modal">Close Document</button>
            </div>
        </div>
    </div>
</div>

<?php include_once 'partials/footer.php'; ?>
