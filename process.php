<?php 
$page_title = "Manufacturing Process, Machinery & Plant Gallery - Polymer Products";
$meta_description = "Step-by-step manufacturing process, advanced plant machinery, and comprehensive photo gallery of Polymer Products elastomeric bridge bearings facility in Nashik.";
include_once 'partials/header.php'; 

// Array of all 49 plant and process images with metadata
$process_images = [
    ["file" => "IMG20260913162027.webp", "title" => "Hydraulic Vulcanizing Press", "cat" => "presses", "desc" => "Multi-daylight hydraulic vulcanizing press with digital PLC temperature controls."],
    ["file" => "IMG20260913162055.webp", "title" => "High-Pressure Compression Moulding", "cat" => "presses", "desc" => "Heavy-duty hydraulic clamping for complete elastomeric cross-linking."],
    ["file" => "IMG20260913162127.webp", "title" => "Two-Roll Rubber Mixing Mill", "cat" => "compounding", "desc" => "Water-cooled open mixing mill for precision polymer compounding."],
    // ["file" => "IMG20260913162252.webp", "title" => "Masterbatch Compounding & Sheeting", "cat" => "compounding", "desc" => "Homogeneous dispersion of carbon black, zinc oxide, and curing agents."],
    ["file" => "IMG20260913162306.webp", "title" => "Hydraulic Pressure Control Panel", "cat" => "presses", "desc" => "Digital pressure and cycle timer instrumentation on main press line."],
    // ["file" => "IMG20260913162317.webp", "title" => "Steel Plate Shearing Station", "cat" => "steel", "desc" => "Precision guillotine shearing of IS:2062 internal steel laminates."],
    // ["file" => "IMG20260913162338.webp", "title" => "Grit Shot-Blasting Chamber", "cat" => "steel", "desc" => "Enclosed grit blasting achieving Sa 2.5 profile for maximum bond."],
    // ["file" => "IMG20260913162350.webp", "title" => "Chemlok Primer Adhesive Coating", "cat" => "steel", "desc" => "Uniform double-coat application of high-strength elastomer bonding agents."],
    // ["file" => "IMG20260913162353.webp", "title" => "Mould Assembly & Stacking", "cat" => "assembly", "desc" => "Alternating stacking of primed steel laminates and rubber pre-forms."],
    // ["file" => "IMG20260913162357.webp", "title" => "Multi-Layer Stacking Alignment", "cat" => "assembly", "desc" => "Precise registration spacers ensuring uniform internal elastomer layers."],
    // ["file" => "IMG20260913162405.webp", "title" => "Mould Cavity Preparation", "cat" => "assembly", "desc" => "CNC-machined heavy steel moulds checked for dimensional accuracy."],
    ["file" => "IMG20260913162430.webp", "title" => "Hydraulic Curing Temperature Log", "cat" => "presses", "desc" => "Multi-zone platen heating maintained at 150°C ± 5°C throughout cure."],
    ["file" => "IMG20260913162505.webp", "title" => "Finished Bearings Quality Inspection", "cat" => "qa", "desc" => "Visual examination of outer protective rubber layer and edge geometry."],
    ["file" => "IMG20260913162534.webp", "title" => "Side Rubber Thickness Verification", "cat" => "qa", "desc" => "Verification of ≥4mm side cover and ≥2.5mm outer cover thickness."],
    ["file" => "IMG20260913162555.webp", "title" => "De-moulding & Flash Trimming", "cat" => "finished", "desc" => "Careful de-moulding and pneumatic flash trimming of cured bearings."],
    ["file" => "IMG20260913162650.webp", "title" => "Shore-A Hardness Testing", "cat" => "qa", "desc" => "Calibrated durometer testing ensuring 60 ± 5 Shore A / IRHD compliance."],
    ["file" => "IMG20260913162657.webp", "title" => "Digital Dimensional Inspection", "cat" => "qa", "desc" => "High-precision digital vernier checks on plan dimensions and overall height."],
    ["file" => "IMG20260913162712.webp", "title" => "Proof Load Testing Rig (1.5x)", "cat" => "qa", "desc" => "Compressive proof load verification under computerized hydraulic test frame."],
    ["file" => "IMG20260913162728.webp", "title" => "Compressive Load Verification Frame", "cat" => "qa", "desc" => "In-house compression testing verifying zero de-lamination and crack resistance."],
    ["file" => "IMG20260913162739.webp", "title" => "Computerized QC Test Console", "cat" => "qa", "desc" => "Real-time load vs deflection data acquisition for MTC test records."],
    ["file" => "IMG20260913162811.webp", "title" => "Heavy-Duty Compression Platen", "cat" => "qa", "desc" => "Precision-ground hardened steel platen for uniform vertical load distribution."],
    ["file" => "IMG20260913163037.webp", "title" => "Raw Polymer Material Bay", "cat" => "compounding", "desc" => "Certified natural rubber (RSS-1) and chloroprene polymer storage."],
    // ["file" => "IMG20260913163042.webp", "title" => "Chemical Additives Compounding", "cat" => "compounding", "desc" => "Micro-ingredient weighing and anti-ozonant formulation station."],
    // ["file" => "IMG20260913163049.webp", "title" => "Compound Mastication & Blending", "cat" => "compounding", "desc" => "Two-roll mastication ensuring high elasticity and zero batch variance."],
    // ["file" => "IMG20260913163136.webp", "title" => "Heavy Two-Roll Calendering", "cat" => "compounding", "desc" => "Conversion of raw masterbatch into dense, porosity-free rubber sheets."],
    // ["file" => "IMG20260913163227.webp", "title" => "Continuous Rubber Sheeting", "cat" => "compounding", "desc" => "Controlled cooling and release liner application on calendered sheets."],
    // ["file" => "IMG20260913163232.webp", "title" => "Sheet Thickness Gauge Monitoring", "cat" => "compounding", "desc" => "Continuous micrometer checks on pre-form elastomer sheet thickness."],
    // ["file" => "IMG20260913163238.webp", "title" => "Pre-Form Cutting & Sizing Table", "cat" => "assembly", "desc" => "Accurate cutting of elastomer sheets matched to mould cavity dimensions."],
    ["file" => "IMG20260913163313.webp", "title" => "Steel Plate Inward Storage (IS:2062)", "cat" => "steel", "desc" => "Structural mild steel plate stock with test certificate verification."],
    ["file" => "IMG20260913163333.webp", "title" => "Plate Shearing & Edge Radiusing", "cat" => "steel", "desc" => "Edge rounding (R ≥ 2mm) to prevent stress concentration and rubber cutting."],
    ["file" => "IMG20260913163346.webp", "title" => "Shot-Blasted Steel Laminates (Sa 2.5)", "cat" => "steel", "desc" => "Clean, rust-free steel laminates with rough anchor profile for bonding."],
    ["file" => "IMG20260913163353.webp", "title" => "Adhesive Primer Application", "cat" => "steel", "desc" => "Environmental humidity-controlled adhesive dipping and oven drying."],
    ["file" => "IMG20260913163459.webp", "title" => "High-Tonnage Vulcanization Press Line", "cat" => "presses", "desc" => "Main vulcanizing press battery in full production operation."],
    ["file" => "IMG20260913163801.webp", "title" => "Automated Curing Timer & Temp Control", "cat" => "presses", "desc" => "Automated cycle management ensuring complete core vulcanization."],
    ["file" => "IMG20260913163838.webp", "title" => "Hydraulic Ram Clamping Cycle", "cat" => "presses", "desc" => "High clamping tonnage eliminating flash and air entrapment."],
    ["file" => "IMG20260913163917.webp", "title" => "Hot Bearing De-Moulding", "cat" => "finished", "desc" => "Immediate demoulding following verified hydraulic curing cycle."],
    ["file" => "IMG20260913163937.webp", "title" => "Edge Finishing & Flash Cleaning", "cat" => "finished", "desc" => "Smoothing outer protective surfaces for clean aesthetic finish."],
    ["file" => "IMG20260913163947.webp", "title" => "Indelible Marking & Lot Stamping", "cat" => "qa", "desc" => "Permanent side stamping of lot number, dimensions, and standard codes."],
    ["file" => "IMG20260913164115.webp", "title" => "Finished Elastomeric Bearings Stock", "cat" => "finished", "desc" => "Ready-to-dispatch IRC:83 / RDSO bridge bearings with lot labels."],
    ["file" => "IMG20260913164134.webp", "title" => "QA/QC Final Acceptance Bay", "cat" => "qa", "desc" => "Stage-5 final inspection bay for client witness and third-party QA."],
    ["file" => "IMG20260913164230.webp", "title" => "Palletized Bearing Stacking", "cat" => "finished", "desc" => "Flat stacking on sturdy wooden pallets preventing edge distortion."],
    ["file" => "IMG20260913164319.webp", "title" => "Polyethylene Shrink Wrapping", "cat" => "finished", "desc" => "Heavy duty weather-proof wrap protecting against UV and moisture."],
    ["file" => "IMG20260913164338.webp", "title" => "Finished Goods Dispatch Yard", "cat" => "finished", "desc" => "Strapped consignments organized with MTC document pouches."],
    ["file" => "IMG20260913164426.webp", "title" => "Tensile Testing Machine (UTM)", "cat" => "qa", "desc" => "Calibrated UTM for tensile strength (≥17 MPa) & elongation (≥400%)."],
    ["file" => "IMG20260913164437.webp", "title" => "Accelerated Thermal Ageing Oven", "cat" => "qa", "desc" => "Digital air-circulated oven for 70°C / 72h heat resistance verification."],
    ["file" => "IMG20260913164454.webp", "title" => "Compression Set & Lab Apparatus", "cat" => "qa", "desc" => "Standardized testing fixtures complying with IS:3400 test methods."],
    ["file" => "IMG20260913164521.webp", "title" => "Chemical Batch Formulation Logs", "cat" => "compounding", "desc" => "Documented batch weighing records ensuring 100% material traceability."],
    ["file" => "IMG20260913164548.webp", "title" => "Precision CNC Mould Inventory", "cat" => "assembly", "desc" => "50+ sets of CNC steel moulds covering all standard IRC & RDSO sizes."],
    ["file" => "IMG20260913164602.webp", "title" => "Nashik Manufacturing Facility Floor", "cat" => "presses", "desc" => "Complete panoramic view of the Nashik production and curing shopfloor."]
];
?>

<style>
/* Custom Scoped Styles for Process & Gallery Page */
.process-hero-badge {
    background: var(--theme-subtle);
    border: 1px solid var(--theme-primary);
    color: var(--theme-lighter);
    font-size: 13px;
    letter-spacing: 1px;
}
.process-hero-showcase {
    perspective: 1000px;
}
.process-hero-img-box {
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border: 1px solid rgba(255, 255, 255, 0.22);
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
}
.process-hero-img-box:hover {
    transform: translateY(-5px);
    border-color: rgba(147, 197, 253, 0.45) !important;
    box-shadow: 0 25px 55px rgba(2, 132, 199, 0.28) !important;
}
.process-hero-img-box img {
    transition: transform 0.45s ease;
    filter: drop-shadow(0 15px 25px rgba(0,0,0,0.45));
}
.process-hero-img-box:hover img {
    transform: scale(1.04);
}
.process-step-card {
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    border: 1px solid #e2e8f0;
    background: #ffffff;
}
.process-step-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 30px rgba(0, 0, 0, 0.08) !important;
    border-color: var(--theme-primary);
}
.step-num-badge {
    background: linear-gradient(135deg, var(--theme-primary) 0%, var(--theme-hover) 100%);
    box-shadow: 0 4px 10px var(--theme-glow);
}
.gallery-filter-btn {
    padding: 8px 18px;
    font-size: 13px;
    font-weight: 600;
    border-radius: 50rem;
    border: 1px solid #e2e8f0;
    background: #ffffff;
    color: #475569;
    transition: all 0.25s ease;
    cursor: pointer;
}
.gallery-filter-btn:hover,
.gallery-filter-btn.active {
    background: var(--theme-primary);
    border-color: var(--theme-primary);
    color: #ffffff;
    box-shadow: 0 4px 12px var(--theme-glow);
}
.plant-gallery-card {
    position: relative;
    overflow: hidden;
    border-radius: 14px;
    background: #0f172a;
    transition: all 0.35s ease;
}
.plant-gallery-card img {
    transition: transform 0.5s ease;
    width: 100%;
    height: 230px;
    object-fit: cover;
}
.plant-gallery-card:hover img {
    transform: scale(1.08);
}
.plant-gallery-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(15, 23, 42, 0.1) 0%, rgba(15, 23, 42, 0.85) 75%, rgba(15, 23, 42, 0.95) 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 16px;
}
.plant-gallery-card:hover .plant-gallery-overlay {
    opacity: 1;
}
.gallery-zoom-btn {
    position: absolute;
    top: 14px;
    right: 14px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: var(--theme-primary);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 12px var(--theme-glow);
    transition: transform 0.2s ease;
    text-decoration: none;
}
.gallery-zoom-btn:hover {
    transform: scale(1.15);
    color: #fff;
}
.swiper-process-container {
    padding-bottom: 50px;
}
.swiper-process-slide {
    border-radius: 18px;
    overflow: hidden;
    background: #0b192c;
    box-shadow: 0 12px 35px rgba(0, 0, 0, 0.12);
}
.swiper-process-slide img {
    height: 360px;
    width: 100%;
    object-fit: cover;
}
.swiper-button-next-custom,
.swiper-button-prev-custom {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: #ffffff;
    color: var(--theme-primary);
    box-shadow: 0 4px 14px rgba(0, 0, 0, 0.15);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s ease;
    z-index: 10;
}
.swiper-button-next-custom:hover,
.swiper-button-prev-custom:hover {
    background: var(--theme-primary);
    color: #ffffff;
    border: 1px solid #fff;
    box-shadow: 0 4px 16px var(--theme-glow);
}

/* Magnific Popup Custom Lightbox & Navigation Arrows */
.mfp-bg {
    background: rgba(9, 20, 36, 0.94) !important;
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
}
.mfp-arrow {
    width: 54px !important;
    height: 54px !important;
    background: rgba(255, 255, 255, 0.18) !important;
    backdrop-filter: blur(10px) !important;
    -webkit-backdrop-filter: blur(10px) !important;
    border-radius: 50% !important;
    top: 50% !important;
    transform: translateY(-50%) !important;
    margin: 0 20px !important;
    opacity: 0.9 !important;
    transition: all 0.25s cubic-bezier(0.165, 0.84, 0.44, 1) !important;
    border: 1.5px solid rgba(255, 255, 255, 0.35) !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    cursor: pointer !important;
    outline: none !important;
}
.mfp-arrow:hover {
    background: var(--theme-primary) !important;
    border-color: #ffffff !important;
    opacity: 1 !important;
    transform: translateY(-50%) scale(1.12) !important;
    box-shadow: 0 8px 24px var(--theme-glow) !important;
}
.mfp-arrow:before, .mfp-arrow:after {
    border: none !important;
    margin: 0 !important;
    position: static !important;
    display: inline-block !important;
}
.mfp-arrow-left:after {
    content: '\f053' !important;
    font-family: 'Font Awesome 6 Free' !important;
    font-weight: 900 !important;
    color: #ffffff !important;
    font-size: 18px !important;
}
.mfp-arrow-right:after {
    content: '\f054' !important;
    font-family: 'Font Awesome 6 Free' !important;
    font-weight: 900 !important;
    color: #ffffff !important;
    font-size: 18px !important;
}
.mfp-close {
    width: 44px !important;
    height: 44px !important;
    line-height: 44px !important;
    background: rgba(255, 255, 255, 0.15) !important;
    border-radius: 50% !important;
    top: 18px !important;
    right: 20px !important;
    color: #ffffff !important;
    font-size: 26px !important;
    transition: all 0.2s ease !important;
    cursor: pointer !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    padding: 0 !important;
}
.mfp-close:hover {
    background: #ef4444 !important;
    color: #ffffff !important;
    transform: rotate(90deg) scale(1.1);
}
.mfp-counter {
    color: #e2e8f0 !important;
    font-size: 13px !important;
    font-weight: 600 !important;
    padding: 6px 14px !important;
    background: rgba(0, 0, 0, 0.5) !important;
    border-radius: 20px !important;
    top: 18px !important;
    left: 20px !important;
    right: auto !important;
    border: 1px solid rgba(255, 255, 255, 0.15);
}
.mfp-title {
    color: #ffffff !important;
    font-size: 14px !important;
    font-weight: 600 !important;
    padding: 10px 16px !important;
    background: rgba(15, 23, 42, 0.9) !important;
    border-radius: 8px !important;
    margin-top: 10px !important;
    border: 1px solid rgba(255, 255, 255, 0.12);
}
.mfp-figure figure {
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6);
    border-radius: 12px;
    overflow: hidden;
}
.mfp-img {
    border-radius: 8px !important;
}
</style>

<!-- ============================================================
     1. Modern Hero Banner
     ============================================================ -->
<section class="ht-about-hero position-relative d-flex align-items-center"
    style="background: linear-gradient(135deg, rgba(9, 20, 36, 0.88) 0%, rgba(14, 34, 61, 0.65) 50%, rgba(6, 13, 24, 0.65) 100%), url('assets/img/img/banner/process.webp') center center / cover no-repeat; padding-top: 175px; padding-bottom: 75px; margin-top: -160px; min-height: 480px;">
    
    <div class="container-fluid px-3 px-lg-5 position-relative" style="z-index: 2;">
        <div class="row align-items-center justify-content-between g-4">
            
            <!-- Left Column: Content -->
            <div class="col-lg-7 wow fadeInLeft" data-wow-delay=".2s">
                <span class="badge px-3 py-2 mb-3 rounded-pill text-uppercase process-hero-badge">
                    <i class="fa-solid fa-industry me-2"></i>Nashik Plant Operations &amp; Machinery
                </span>
                <h1 class="text-white fw-bold mb-3"
                    style="font-family: 'Oswald', 'Saira-Medium', sans-serif; font-size: clamp(32px, 4.5vw, 50px); letter-spacing: -0.5px; line-height: 1.2;">
                    Detailed Manufacturing Process <span style="color: var(--theme-light);">&amp; Machinery Gallery</span>
                </h1>
                <p class="text-light mb-4" style="font-size: 16px; line-height: 1.8; max-width: 740px; color: #cbd5e1 !important;">
                    Our manufacturing operations follow a systematic 9-step sequence from raw polymer compounding to high-pressure hydraulic curing, CNC moulding, and computerized QA/QC proof-load testing.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#process-sequence" class="btn btn-primary rounded-pill px-4 py-2 fw-bold text-uppercase" style="background:var(--theme-primary); border-color:var(--theme-primary); font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-gears me-2"></i>9-Step Process
                    </a>
                    <a href="#plant-slider" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-images me-2"></i>Interactive Slider
                    </a>
                    <!-- <a href="#full-gallery" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-photo-film me-2"></i>49+ Plant Photos
                    </a> -->
                </div>
            </div>

            <!-- Right Column: Process Showcase Image & Breadcrumb -->
            <div class="col-lg-5 text-center text-lg-end wow fadeInRight" data-wow-delay=".3s">
                <nav aria-label="breadcrumb" class="mb-3 d-none d-lg-block">
                    <ol class="breadcrumb justify-content-lg-end mb-0 bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none"><i class="fa-solid fa-house me-1"></i>Home</a></li>
                        <li class="breadcrumb-item active text-white fw-semibold" aria-current="page">Manufacturing Process</li>
                    </ol>
                </nav>

                <div class="process-hero-showcase d-inline-block text-center">
                    <div class="process-hero-img-box p-3 p-md-4 rounded-4 position-relative">
                        <img src="assets/img/img/banner/process-right.png" alt="Manufacturing Process & Machinery - Polymer Products" class="img-fluid"
                            style="max-height: 300px; width: auto; object-fit: contain;">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============================================================
     2. Step-by-Step Manufacturing Process Flow
     ============================================================ -->
<section class="py-5" id="process-sequence" style="background:#ffffff;">
    <div class="container py-4">
        <div class="section-title text-center mb-5">
            <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight:700; font-size:12px; letter-spacing:1px;">
                Standard Operating Procedure (SOP)
            </span>
            <h2 class="fw-bold text-dark" style="font-family:'Oswald', sans-serif; font-size:32px; letter-spacing:0.5px;">
                 Manufacturing Workflow
            </h2>
            <p class="text-muted mx-auto" style="max-width:700px; font-size:15px;">
               Explore the step-by-step manufacturing workflow followed for our bearing products, from material preparation and processing to final inspection. The workflow highlights the key stages involved in maintaining consistent quality, precision, and product reliability. 

            </p>
        </div>

        <div class="row g-4">
            <!-- Step 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded-4 shadow-sm h-100 position-relative process-step-card">
                    <span class="position-absolute top-0 end-0 text-white fw-bold px-3 py-1 rounded-bottom-start rounded-top-end step-num-badge" style="font-size:12px;">Step 01</span>
                    <div class="mb-3 d-inline-flex p-3 rounded-circle" style="background: var(--theme-subtle); color: var(--theme-primary);">
                        <i class="fa-solid fa-boxes-stacked fa-2x"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:17px;">Raw Material Inspection &amp; Testing</h5>
                    <p class="small text-muted mb-0" style="line-height:1.7;">
                        Incoming inspection of raw Natural Rubber (NR) / Chloroprene (CR), carbon blacks, zinc oxide, vulcanizing agents, and mild steel plates (IS:2062). NABL test certificate verification.
                    </p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded-4 shadow-sm h-100 position-relative process-step-card">
                    <span class="position-absolute top-0 end-0 text-white fw-bold px-3 py-1 rounded-bottom-start rounded-top-end step-num-badge" style="font-size:12px;">Step 02</span>
                    <div class="mb-3 d-inline-flex p-3 rounded-circle" style="background: var(--theme-subtle); color: var(--theme-primary);">
                        <i class="fa-solid fa-mortar-pestle fa-2x"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:17px;">Compounding &amp; Two-Roll Mixing</h5>
                    <p class="small text-muted mb-0" style="line-height:1.7;">
                        Precision weighing of chemicals and masterbatch mixing on heavy duty Two-Roll Open Mixing Mills to achieve homogeneous dispersion, uniform rheology, and batch-to-batch consistency.
                    </p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded-4 shadow-sm h-100 position-relative process-step-card">
                    <span class="position-absolute top-0 end-0 text-white fw-bold px-3 py-1 rounded-bottom-start rounded-top-end step-num-badge" style="font-size:12px;">Step 03</span>
                    <div class="mb-3 d-inline-flex p-3 rounded-circle" style="background: var(--theme-subtle); color: var(--theme-primary);">
                        <i class="fa-solid fa-sheet-plastic fa-2x"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:17px;">Calendering &amp; Pre-Form Sheeting</h5>
                    <p class="small text-muted mb-0" style="line-height:1.7;">
                        Conversion of mixed rubber compound into continuous sheets of exact specified thickness with zero porosity and controlled dimensional tolerances using multi-roll calenders.
                    </p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded-4 shadow-sm h-100 position-relative process-step-card">
                    <span class="position-absolute top-0 end-0 text-white fw-bold px-3 py-1 rounded-bottom-start rounded-top-end step-num-badge" style="font-size:12px;">Step 04</span>
                    <div class="mb-3 d-inline-flex p-3 rounded-circle" style="background: var(--theme-subtle); color: var(--theme-primary);">
                        <i class="fa-solid fa-shield-halved fa-2x"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:17px;">Steel Plate Shot-Blasting &amp; Priming</h5>
                    <p class="small text-muted mb-0" style="line-height:1.7;">
                        Steel laminates are sheared, edges radiused (R &ge; 2mm), grit shot-blasted to Sa 2.5 finish to remove scale/rust, chemically degreased, and coated with Chemlok adhesive bonding agents.
                    </p>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded-4 shadow-sm h-100 position-relative process-step-card">
                    <span class="position-absolute top-0 end-0 text-white fw-bold px-3 py-1 rounded-bottom-start rounded-top-end step-num-badge" style="font-size:12px;">Step 05</span>
                    <div class="mb-3 d-inline-flex p-3 rounded-circle" style="background: var(--theme-subtle); color: var(--theme-primary);">
                        <i class="fa-solid fa-cubes-stacked fa-2x"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:17px;">Assembly &amp; Mould Loading</h5>
                    <p class="small text-muted mb-0" style="line-height:1.7;">
                        Systematic alternating stacking of primed steel laminates and un-vulcanized elastomer sheets inside heavy CNC-machined steel moulds with precise registration spacers.
                    </p>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded-4 shadow-sm h-100 position-relative process-step-card">
                    <span class="position-absolute top-0 end-0 text-white fw-bold px-3 py-1 rounded-bottom-start rounded-top-end step-num-badge" style="font-size:12px;">Step 06</span>
                    <div class="mb-3 d-inline-flex p-3 rounded-circle" style="background: var(--theme-subtle); color: var(--theme-primary);">
                        <i class="fa-solid fa-temperature-arrow-up fa-2x"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:17px;">High-Pressure Hydraulic Vulcanization</h5>
                    <p class="small text-muted mb-0" style="line-height:1.7;">
                        Curing under high hydraulic clamping pressure (over 1000 kN) and controlled temperature (145&deg;C - 160&deg;C) for pre-programmed cure cycle times to ensure total molecular cross-linking and permanent bond.
                    </p>
                </div>
            </div>

            <!-- Step 7 -->
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded-4 shadow-sm h-100 position-relative process-step-card">
                    <span class="position-absolute top-0 end-0 text-white fw-bold px-3 py-1 rounded-bottom-start rounded-top-end step-num-badge" style="font-size:12px;">Step 07</span>
                    <div class="mb-3 d-inline-flex p-3 rounded-circle" style="background: var(--theme-subtle); color: var(--theme-primary);">
                        <i class="fa-solid fa-scissors fa-2x"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:17px;">De-Moulding, Trimming &amp; Finishing</h5>
                    <p class="small text-muted mb-0" style="line-height:1.7;">
                        Careful extraction of vulcanized bearings, flash trimming, edge smoothing, inspection of outer protective rubber layer (&ge; 4mm side / 2.5mm top-bottom), and initial visual check.
                    </p>
                </div>
            </div>

            <!-- Step 8 -->
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded-4 shadow-sm h-100 position-relative process-step-card">
                    <span class="position-absolute top-0 end-0 text-white fw-bold px-3 py-1 rounded-bottom-start rounded-top-end step-num-badge" style="font-size:12px;">Step 08</span>
                    <div class="mb-3 d-inline-flex p-3 rounded-circle" style="background: var(--theme-subtle); color: var(--theme-primary);">
                        <i class="fa-solid fa-stamp fa-2x"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:17px;">Marking &amp; Lot Identification</h5>
                    <p class="small text-muted mb-0" style="line-height:1.7;">
                        Hot-embossing / stenciling of unique lot number, bearing type, dimensions, manufacturer code, and production date onto each bearing for permanent field traceability.
                    </p>
                </div>
            </div>

            <!-- Step 9 -->
            <div class="col-lg-4 col-md-6">
                <div class="p-4 rounded-4 shadow-sm h-100 position-relative process-step-card">
                    <span class="position-absolute top-0 end-0 text-white fw-bold px-3 py-1 rounded-bottom-start rounded-top-end step-num-badge" style="font-size:12px;">Step 09</span>
                    <div class="mb-3 d-inline-flex p-3 rounded-circle" style="background: var(--theme-subtle); color: var(--theme-primary);">
                        <i class="fa-solid fa-circle-check fa-2x"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:17px;">QA/QC Proof Load &amp; Lab Testing</h5>
                    <p class="small text-muted mb-0" style="line-height:1.7;">
                        Proof load compressive stiffness testing, shear modulus determination, dimension verification, witness inspection by client engineers, and generation of manufacturer test certificate (MTC).
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     3. Interactive Process & Machinery Swiper Slider
     ============================================================ -->
<section class="py-5 position-relative" id="plant-slider" style="background: var(--theme-primary); color:#fff;">
    <div class="container py-4">
        <div class="d-flex flex-wrap justify-content-between align-items-end mb-4 gap-3">
            <div>
                <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: #ffffffff; border: 1px solid var(--theme-primary); color: var(--theme-primary); font-size:12px; letter-spacing:1px; font-weight:600;">
                    Live Plant Operations
                </span>
                <h2 class="text-white fw-bold mb-0" style="font-family:'Oswald', sans-serif; font-size:32px; letter-spacing:0.5px;">
                    Interactive Plant Machinery &amp; Operations Slider
                </h2>
                <p class="text-white mb-0 small mt-1" style="max-width:650px;">
                    Swipe through live high-resolution images of our Nashik manufacturing line, testing frames, and curing presses.
                </p>
            </div>
            <!-- Custom Swiper Navigation Controls -->
            <div class="d-flex align-items-center gap-2">
                <button type="button" class="swiper-button-prev-custom" id="procPrevBtn" aria-label="Previous Slide">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button type="button" class="swiper-button-next-custom" id="procNextBtn" aria-label="Next Slide">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <!-- Swiper Carousel Container -->
        <div class="swiper processSwiper">
            <div class="swiper-wrapper">
                <?php 
                // Featured selection of highlights for slider
                $featured_slider_indices = [0, 1, 2, 3, 5, 6, 7, 8, 12, 17, 18, 19, 24, 30, 32, 37, 40, 43, 44, 48];
                foreach ($featured_slider_indices as $idx):
                    if (isset($process_images[$idx])):
                        $img = $process_images[$idx];
                ?>
                <div class="swiper-slide">
                    <div class="swiper-process-slide position-relative">
                        <a href="assets/pp_data/Machine_Images/webp/<?php echo $img['file']; ?>" class="popup-image d-block text-decoration-none" title="<?php echo htmlspecialchars($img['title']) . ' - ' . htmlspecialchars($img['desc']); ?>">
                            <img src="assets/pp_data/Machine_Images/webp/<?php echo $img['file']; ?>" alt="<?php echo htmlspecialchars($img['title']); ?>" loading="lazy" style="cursor: pointer;">
                            <div class="p-3 position-absolute bottom-0 start-0 end-0" style="background: linear-gradient(180deg, transparent 0%, rgba(9, 20, 36, 0.95) 80%); pointer-events: none;">
                                <span class="badge bg-primary px-2 py-1 mb-1 small text-uppercase" style="font-size:10px;"><?php echo strtoupper($img['cat']); ?></span>
                                <h6 class="text-white fw-bold mb-1" style="font-size:15px;"><?php echo htmlspecialchars($img['title']); ?></h6>
                                <p class="text-white-50 small mb-0" style="font-size:12px; line-height:1.4;"><?php echo htmlspecialchars($img['desc']); ?></p>
                            </div>
                            <span class="gallery-zoom-btn" title="View in Popup">
                                <i class="fa-solid fa-expand"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <?php 
                    endif;
                endforeach; 
                ?>
            </div>
            <div class="swiper-pagination mt-4 text-center" style="position:relative;"></div>
        </div>
    </div>
</section>

<!-- ============================================================
     4. Comprehensive 49-Photo Plant & Process Gallery Grid
     ============================================================ -->
<!-- <section class="py-5" id="full-gallery" style="background:#f8fafc; border-top:1px solid #e2e8f0; border-bottom:1px solid #e2e8f0;">
    <div class="container py-4">
        <div class="section-title text-center mb-4">
            <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight:700; font-size:12px; letter-spacing:1px;">
                Complete Photographic Record
            </span>
            <h2 class="fw-bold text-dark" style="font-family:'Oswald', sans-serif; font-size:32px; letter-spacing:0.5px;">
                Complete Plant Machinery &amp; Operations Gallery (49 Photos)
            </h2>
            <p class="text-muted mx-auto" style="max-width:700px; font-size:15px;">
                Explore all verified images of our plant machinery, testing laboratory, mould inventory, and finished stock. Click any image to view in high-resolution lightbox.
            </p>
        </div>

        
        <div class="d-flex flex-wrap justify-content-center gap-2 mb-4 pb-2" id="gallery-filters">
            <button class="gallery-filter-btn active" data-filter="all">All Photos (49)</button>
            <button class="gallery-filter-btn" data-filter="presses">Hydraulic Presses</button>
            <button class="gallery-filter-btn" data-filter="compounding">Compounding &amp; Mixing</button>
            <button class="gallery-filter-btn" data-filter="steel">Steel Prep &amp; Priming</button>
            <button class="gallery-filter-btn" data-filter="assembly">Moulds &amp; Assembly</button>
            <button class="gallery-filter-btn" data-filter="qa">QA/QC &amp; Proof Testing</button>
            <button class="gallery-filter-btn" data-filter="finished">Finished Stock &amp; Dispatch</button>
        </div>

   
        <div class="row g-3" id="gallery-grid">
            <?php foreach ($process_images as $i => $img): ?>
            <div class="col-xl-3 col-lg-4 col-md-6 gallery-item" data-category="<?php echo $img['cat']; ?>">
                <div class="plant-gallery-card shadow-sm h-100">
                    <img src="assets/pp_data/Machine_Images/<?php echo $img['file']; ?>" alt="<?php echo htmlspecialchars($img['title']); ?>" loading="lazy">
                    <div class="plant-gallery-overlay">
                        <span class="badge bg-primary px-2 py-1 mb-1 align-self-start text-uppercase" style="font-size:10px;">
                            #<?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?> &bull; <?php echo strtoupper($img['cat']); ?>
                        </span>
                        <h6 class="text-white fw-bold mb-1" style="font-size:14px; line-height:1.3;"><?php echo htmlspecialchars($img['title']); ?></h6>
                        <small class="text-white-50 d-block" style="font-size:11.5px; line-height:1.4;"><?php echo htmlspecialchars($img['desc']); ?></small>
                    </div>
                    <a href="assets/pp_data/Machine_Images/<?php echo $img['file']; ?>" class="gallery-zoom-btn popup-image" title="<?php echo htmlspecialchars($img['title']) . ' - ' . htmlspecialchars($img['desc']); ?>">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section> -->

<!-- ============================================================
     5. Plant Machinery List & Technical Specifications Table
     ============================================================ -->
<section class="py-5" id="machinery" style="background:#ffffff;">
    <div class="container py-4">
        <div class="section-title text-center mb-5">
            <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight:700; font-size:12px; letter-spacing:1px;">
                Plant Infrastructure
            </span>
            <h2 class="fw-bold text-dark" style="font-family:'Oswald', sans-serif; font-size:32px; letter-spacing:0.5px;">
                List of Plant Machinery &amp; In-House Facilities
            </h2>
            <p class="text-muted mx-auto" style="max-width:700px; font-size:15px;">
                Our Nashik facility is equipped with heavy industrial rubber processing machinery, hydraulic curing presses, grit-blasting stations, and precision testing equipment.
            </p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-lg-3 col-md-6">
                <div class="p-3 bg-light rounded-4 shadow-sm border h-100 text-center">
                    <a href="assets/pp_data/Machine_Images/webp/IMG20260913162027.webp" class="popup-image d-block mb-3 overflow-hidden rounded-3" title="Hydraulic Vulcanizing Press - High tonnage multi-daylight heated hydraulic presses with PLC digital temperature controls.">
                        <img src="assets/pp_data/Machine_Images/webp/IMG20260913162027.webp" alt="Hydraulic Press" class="img-fluid" style="height:170px; width:100%; object-fit:cover; transition: transform 0.3s ease; cursor: pointer;">
                    </a>
                    <h6 class="fw-bold text-dark mb-1">Hydraulic Vulcanizing Press</h6>
                    <small class="text-muted">High tonnage multi-daylight heated hydraulic presses with PLC digital temperature controls.</small>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="p-3 bg-light rounded-4 shadow-sm border h-100 text-center">
                    <a href="assets/pp_data/Machine_Images/webp/IMG20260913162127.webp" class="popup-image d-block mb-3 overflow-hidden rounded-3" title="Two-Roll Rubber Mixing Mill - Heavy-duty water-cooled open mixing mill for compound mastication.">
                        <img src="assets/pp_data/Machine_Images/webp/IMG20260913162127.webp" alt="Two-Roll Mixing Mill" class="img-fluid" style="height:170px; width:100%; object-fit:cover; transition: transform 0.3s ease; cursor: pointer;">
                    </a>
                    <h6 class="fw-bold text-dark mb-1">Two-Roll Rubber Mixing Mill</h6>
                    <small class="text-muted">Heavy-duty water-cooled open mixing mill for compound mastication and additive homogenization.</small>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="p-3 bg-light rounded-4 shadow-sm border h-100 text-center">
                    <a href="assets/pp_data/Machine_Images/webp/IMG20260913162317.webp" class="popup-image d-block mb-3 overflow-hidden rounded-3" title="Plate Shearing & Shot Blasting - Steel plate guillotine shearing and enclosed grit shot-blasting chamber.">
                        <img src="assets/pp_data/Machine_Images/webp/IMG20260913162317.webp" alt="Steel Preparation" class="img-fluid" style="height:170px; width:100%; object-fit:cover; transition: transform 0.3s ease; cursor: pointer;">
                    </a>
                    <h6 class="fw-bold text-dark mb-1">Plate Shearing &amp; Shot Blasting</h6>
                    <small class="text-muted">Steel plate guillotine shearing, edge radiusing grinders, and enclosed grit shot-blasting chamber.</small>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="p-3 bg-light rounded-4 shadow-sm border h-100 text-center">
                    <a href="assets/pp_data/Machine_Images/webp/IMG20260913162728.webp" class="popup-image d-block mb-3 overflow-hidden rounded-3" title="In-House Proof Load Testing Rig - Computerized compressive load test frame calibrated for up to 1.5x design load verification.">
                        <img src="assets/pp_data/Machine_Images/webp/IMG20260913162728.webp" alt="Testing Equipment" class="img-fluid" style="height:170px; width:100%; object-fit:cover; transition: transform 0.3s ease; cursor: pointer;">
                    </a>
                    <h6 class="fw-bold text-dark mb-1">In-House Proof Load Testing Rig</h6>
                    <small class="text-muted">Computerized compressive load test frame calibrated for up to 1.5x design load verification.</small>
                </div>
            </div>
        </div>

        <!-- Machineries Table -->
        <div class="p-4 bg-light rounded-4 border shadow-sm">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
                <h5 class="fw-bold text-dark mb-0" style="font-family:'Oswald', sans-serif; font-size:20px;">
                    <i class="fa-solid fa-list-ol text-primary me-2"></i>Complete Summary of Plant Machineries
                </h5>
                <span class="badge bg-dark text-light px-3 py-2 rounded-pill small">Nashik Facility Machinery Register</span>
            </div>
            <div class="table-responsive bg-white rounded-3 border">
                <table class="table table-bordered table-striped small align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th style="width:70px;">Sr. No.</th>
                            <th>Machine Description</th>
                            <th>Quantity</th>
                            <th>Capacity / Specifications</th>
                            <th>Application &amp; Function</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-bold text-center">1</td>
                            <td class="fw-semibold">Multi-Platen Hydraulic Vulcanizing Presses</td>
                            <td><span class="badge bg-primary">4 Units</span></td>
                            <td>Up to 1200 Metric Tonnes with Digital PLC</td>
                            <td>Vulcanization &amp; Curing of Elastomeric Bearings</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-center">2</td>
                            <td class="fw-semibold">Two-Roll Open Rubber Mixing Mills</td>
                            <td><span class="badge bg-primary">2 Units</span></td>
                            <td>16" x 42" &amp; 14" x 36" Water Cooled</td>
                            <td>Elastomer Compounding &amp; Sheeting</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-center">3</td>
                            <td class="fw-semibold">Enclosed Grit Shot Blasting Unit</td>
                            <td><span class="badge bg-primary">1 Unit</span></td>
                            <td>Sa 2.5 Standard Surface Anchor Profile</td>
                            <td>Steel Laminate Scale Removal &amp; Surface Prep</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-center">4</td>
                            <td class="fw-semibold">Hydraulic Guillotine Shearing Machine</td>
                            <td><span class="badge bg-primary">2 Units</span></td>
                            <td>Cuts up to 12mm thick IS:2062 Mild Steel Plates</td>
                            <td>Steel Laminate Precision Sizing</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-center">5</td>
                            <td class="fw-semibold">Precision CNC Bearing Moulds</td>
                            <td><span class="badge bg-primary">50+ Sets</span></td>
                            <td>All Standard IRC / RDSO Geometries</td>
                            <td>Moulding &amp; Dimensional Control</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-center">6</td>
                            <td class="fw-semibold">Tensile Testing Machine (UTM)</td>
                            <td><span class="badge bg-primary">1 Unit</span></td>
                            <td>Calibrated Electronic UTM with Extensometer</td>
                            <td>Tensile Strength (&ge;17 MPa) &amp; Elongation (&ge;400%)</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-center">7</td>
                            <td class="fw-semibold">Accelerated Thermal Ageing Oven</td>
                            <td><span class="badge bg-primary">1 Unit</span></td>
                            <td>Air-circulated Digital Oven (up to 200°C)</td>
                            <td>70°C / 72h Thermal Ageing Resistance Tests</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-center">8</td>
                            <td class="fw-semibold">Shore-A Hardness Durometers &amp; Thickness Gauges</td>
                            <td><span class="badge bg-primary">Multiple</span></td>
                            <td>Calibrated with Master Test Blocks</td>
                            <td>Routine QC &amp; Stage-Wise Inspection</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     6. Technical QA & Inquiry CTA
     ============================================================ -->
<section class="py-5" style="background: var(--theme-primary); color:#cbd5e1; border-top:1px solid rgba(255,255,255,0.1);">
    <div class="container text-center py-3">
        <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: white; border: 1px solid var(--theme-primary); color: var(--theme-primary); font-size:12px; letter-spacing:1px; font-weight:600;">
            Plant Visit &amp; Witness Inspection 
        </span>
        <h3 class="text-white fw-bold mb-2" style="font-family:'Oswald', sans-serif; font-size:28px;">
            Schedule Factory Inspection or Request Detailed QAP Documents
        </h3>
        <p class="text-white mb-4 mx-auto" style="max-width:650px; font-size:15px;">
            We welcome third-party inspection agencies (RITES, DNV, EIL, SGS, TUV) and client engineers for stage-wise witness testing at our Nashik plant.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="testing.php" class="btn   rounded-pill px-4 py-2 fw-bold text-uppercase" style="background:var(--theme-primary); border-color:var(--theme-primary); color:#3691bf; background-color: white; font-size:13px; letter-spacing:0.5px;">
                <i class="fa-solid fa-vial-circle-check me-2"></i>Testing &amp; QA/QC System
            </a>
            <a href="contact.php" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                <i class="fa-solid fa-paper-plane me-2"></i>Contact Plant Operations
            </a>
        </div>
    </div>
</section>

<!-- Page Specific JS for Swiper Slider, Gallery Filtering & Magnific Popup -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    // 1. Initialize Swiper Slider for Process Highlights
    if (typeof Swiper !== 'undefined') {
        const procSwiper = new Swiper('.processSwiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '#procNextBtn',
                prevEl: '#procPrevBtn',
            },
            breakpoints: {
                576: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 24,
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 24,
                }
            }
        });
    }

    // 2. Filter tabs for 49 Photos Gallery
    const filterButtons = document.querySelectorAll('.gallery-filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            filterButtons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const filterValue = this.getAttribute('data-filter');

            galleryItems.forEach(item => {
                if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // 3. Initialize Magnific Popup with Gallery Next/Prev Navigation
    if (window.jQuery && typeof jQuery.fn.magnificPopup !== 'undefined') {
        // Swiper Gallery Popup with Next/Previous Navigation
        jQuery('.processSwiper').magnificPopup({
            delegate: '.swiper-slide:not(.swiper-slide-duplicate) a.popup-image',
            type: 'image',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
                tPrev: 'Previous Image (Left arrow)',
                tNext: 'Next Image (Right arrow)',
                tCounter: '<span class="mfp-counter">%curr% of %total%</span>'
            },
            image: {
                tError: '<a href="%url%">The image</a> could not be loaded.',
                titleSrc: function(item) {
                    return item.el.attr('title') || '';
                }
            },
            mainClass: 'mfp-fade',
            removalDelay: 300,
            closeOnContentClick: false,
            midClick: true
        });

        // Handle clicks on Swiper looped duplicate slides seamlessly
        jQuery(document).on('click', '.processSwiper .swiper-slide-duplicate a.popup-image', function(e) {
            e.preventDefault();
            var targetHref = jQuery(this).attr('href');
            var originalLinks = jQuery('.processSwiper .swiper-slide:not(.swiper-slide-duplicate) a.popup-image');
            var matchIdx = 0;
            originalLinks.each(function(index) {
                if (jQuery(this).attr('href') === targetHref) {
                    matchIdx = index;
                    return false;
                }
            });
            jQuery('.processSwiper').magnificPopup('open', matchIdx);
        });

        // Machinery Cards Popup Gallery with Next/Previous Navigation
        jQuery('#machinery .row').magnificPopup({
            delegate: 'a.popup-image',
            type: 'image',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
                tPrev: 'Previous Image (Left arrow)',
                tNext: 'Next Image (Right arrow)',
                tCounter: '<span class="mfp-counter">%curr% of %total%</span>'
            },
            image: {
                titleSrc: function(item) {
                    return item.el.attr('title') || '';
                }
            },
            mainClass: 'mfp-fade',
            removalDelay: 300
        });
    }
});
</script>

<?php include_once 'partials/footer.php'; ?>
