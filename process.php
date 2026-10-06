<?php 
$page_title = "Manufacturing Process, Machinery & Plant Gallery - Polymer Products";
$meta_description = "Step-by-step manufacturing process, advanced plant machinery, and comprehensive photo gallery of Polymer Products elastomeric bridge bearings facility in Nashik.";
include_once 'partials/header.php'; 

// Array of all 49 plant and process images with metadata
$process_images = [
    ["file" => "IMG20260913162027.jpg", "title" => "Hydraulic Vulcanizing Press", "cat" => "presses", "desc" => "Multi-daylight hydraulic vulcanizing press with digital PLC temperature controls."],
    ["file" => "IMG20260913162055.jpg", "title" => "High-Pressure Compression Moulding", "cat" => "presses", "desc" => "Heavy-duty hydraulic clamping for complete elastomeric cross-linking."],
    ["file" => "IMG20260913162127.jpg", "title" => "Two-Roll Rubber Mixing Mill", "cat" => "compounding", "desc" => "Water-cooled open mixing mill for precision polymer compounding."],
    ["file" => "IMG20260913162252.jpg", "title" => "Masterbatch Compounding & Sheeting", "cat" => "compounding", "desc" => "Homogeneous dispersion of carbon black, zinc oxide, and curing agents."],
    ["file" => "IMG20260913162306.jpg", "title" => "Hydraulic Pressure Control Panel", "cat" => "presses", "desc" => "Digital pressure and cycle timer instrumentation on main press line."],
    // ["file" => "IMG20260913162317.jpg", "title" => "Steel Plate Shearing Station", "cat" => "steel", "desc" => "Precision guillotine shearing of IS:2062 internal steel laminates."],
    // ["file" => "IMG20260913162338.jpg", "title" => "Grit Shot-Blasting Chamber", "cat" => "steel", "desc" => "Enclosed grit blasting achieving Sa 2.5 profile for maximum bond."],
    // ["file" => "IMG20260913162350.jpg", "title" => "Chemlok Primer Adhesive Coating", "cat" => "steel", "desc" => "Uniform double-coat application of high-strength elastomer bonding agents."],
    // ["file" => "IMG20260913162353.jpg", "title" => "Mould Assembly & Stacking", "cat" => "assembly", "desc" => "Alternating stacking of primed steel laminates and rubber pre-forms."],
    ["file" => "IMG20260913162357.jpg", "title" => "Multi-Layer Stacking Alignment", "cat" => "assembly", "desc" => "Precise registration spacers ensuring uniform internal elastomer layers."],
    // ["file" => "IMG20260913162405.jpg", "title" => "Mould Cavity Preparation", "cat" => "assembly", "desc" => "CNC-machined heavy steel moulds checked for dimensional accuracy."],
    ["file" => "IMG20260913162430.jpg", "title" => "Hydraulic Curing Temperature Log", "cat" => "presses", "desc" => "Multi-zone platen heating maintained at 150°C ± 5°C throughout cure."],
    ["file" => "IMG20260913162505.jpg", "title" => "Finished Bearings Quality Inspection", "cat" => "qa", "desc" => "Visual examination of outer protective rubber layer and edge geometry."],
    ["file" => "IMG20260913162534.jpg", "title" => "Side Rubber Thickness Verification", "cat" => "qa", "desc" => "Verification of ≥4mm side cover and ≥2.5mm outer cover thickness."],
    ["file" => "IMG20260913162555.jpg", "title" => "De-moulding & Flash Trimming", "cat" => "finished", "desc" => "Careful de-moulding and pneumatic flash trimming of cured bearings."],
    ["file" => "IMG20260913162650.jpg", "title" => "Shore-A Hardness Testing", "cat" => "qa", "desc" => "Calibrated durometer testing ensuring 60 ± 5 Shore A / IRHD compliance."],
    ["file" => "IMG20260913162657.jpg", "title" => "Digital Dimensional Inspection", "cat" => "qa", "desc" => "High-precision digital vernier checks on plan dimensions and overall height."],
    ["file" => "IMG20260913162712.jpg", "title" => "Proof Load Testing Rig (1.5x)", "cat" => "qa", "desc" => "Compressive proof load verification under computerized hydraulic test frame."],
    ["file" => "IMG20260913162728.jpg", "title" => "Compressive Load Verification Frame", "cat" => "qa", "desc" => "In-house compression testing verifying zero de-lamination and crack resistance."],
    ["file" => "IMG20260913162739.jpg", "title" => "Computerized QC Test Console", "cat" => "qa", "desc" => "Real-time load vs deflection data acquisition for MTC test records."],
    ["file" => "IMG20260913162811.jpg", "title" => "Heavy-Duty Compression Platen", "cat" => "qa", "desc" => "Precision-ground hardened steel platen for uniform vertical load distribution."],
    ["file" => "IMG20260913163037.jpg", "title" => "Raw Polymer Material Bay", "cat" => "compounding", "desc" => "Certified natural rubber (RSS-1) and chloroprene polymer storage."],
    // ["file" => "IMG20260913163042.jpg", "title" => "Chemical Additives Compounding", "cat" => "compounding", "desc" => "Micro-ingredient weighing and anti-ozonant formulation station."],
    // ["file" => "IMG20260913163049.jpg", "title" => "Compound Mastication & Blending", "cat" => "compounding", "desc" => "Two-roll mastication ensuring high elasticity and zero batch variance."],
    // ["file" => "IMG20260913163136.jpg", "title" => "Heavy Two-Roll Calendering", "cat" => "compounding", "desc" => "Conversion of raw masterbatch into dense, porosity-free rubber sheets."],
    // ["file" => "IMG20260913163227.jpg", "title" => "Continuous Rubber Sheeting", "cat" => "compounding", "desc" => "Controlled cooling and release liner application on calendered sheets."],
    // ["file" => "IMG20260913163232.jpg", "title" => "Sheet Thickness Gauge Monitoring", "cat" => "compounding", "desc" => "Continuous micrometer checks on pre-form elastomer sheet thickness."],
    // ["file" => "IMG20260913163238.jpg", "title" => "Pre-Form Cutting & Sizing Table", "cat" => "assembly", "desc" => "Accurate cutting of elastomer sheets matched to mould cavity dimensions."],
    ["file" => "IMG20260913163313.jpg", "title" => "Steel Plate Inward Storage (IS:2062)", "cat" => "steel", "desc" => "Structural mild steel plate stock with test certificate verification."],
    ["file" => "IMG20260913163333.jpg", "title" => "Plate Shearing & Edge Radiusing", "cat" => "steel", "desc" => "Edge rounding (R ≥ 2mm) to prevent stress concentration and rubber cutting."],
    ["file" => "IMG20260913163346.jpg", "title" => "Shot-Blasted Steel Laminates (Sa 2.5)", "cat" => "steel", "desc" => "Clean, rust-free steel laminates with rough anchor profile for bonding."],
    ["file" => "IMG20260913163353.jpg", "title" => "Adhesive Primer Application", "cat" => "steel", "desc" => "Environmental humidity-controlled adhesive dipping and oven drying."],
    ["file" => "IMG20260913163459.jpg", "title" => "High-Tonnage Vulcanization Press Line", "cat" => "presses", "desc" => "Main vulcanizing press battery in full production operation."],
    ["file" => "IMG20260913163801.jpg", "title" => "Automated Curing Timer & Temp Control", "cat" => "presses", "desc" => "Automated cycle management ensuring complete core vulcanization."],
    ["file" => "IMG20260913163838.jpg", "title" => "Hydraulic Ram Clamping Cycle", "cat" => "presses", "desc" => "High clamping tonnage eliminating flash and air entrapment."],
    ["file" => "IMG20260913163917.jpg", "title" => "Hot Bearing De-Moulding", "cat" => "finished", "desc" => "Immediate demoulding following verified hydraulic curing cycle."],
    ["file" => "IMG20260913163937.jpg", "title" => "Edge Finishing & Flash Cleaning", "cat" => "finished", "desc" => "Smoothing outer protective surfaces for clean aesthetic finish."],
    ["file" => "IMG20260913163947.jpg", "title" => "Indelible Marking & Lot Stamping", "cat" => "qa", "desc" => "Permanent side stamping of lot number, dimensions, and standard codes."],
    ["file" => "IMG20260913164115.jpg", "title" => "Finished Elastomeric Bearings Stock", "cat" => "finished", "desc" => "Ready-to-dispatch IRC:83 / RDSO bridge bearings with lot labels."],
    ["file" => "IMG20260913164134.jpg", "title" => "QA/QC Final Acceptance Bay", "cat" => "qa", "desc" => "Stage-5 final inspection bay for client witness and third-party QA."],
    ["file" => "IMG20260913164230.jpg", "title" => "Palletized Bearing Stacking", "cat" => "finished", "desc" => "Flat stacking on sturdy wooden pallets preventing edge distortion."],
    ["file" => "IMG20260913164319.jpg", "title" => "Polyethylene Shrink Wrapping", "cat" => "finished", "desc" => "Heavy duty weather-proof wrap protecting against UV and moisture."],
    ["file" => "IMG20260913164338.jpg", "title" => "Finished Goods Dispatch Yard", "cat" => "finished", "desc" => "Strapped consignments organized with MTC document pouches."],
    ["file" => "IMG20260913164426.jpg", "title" => "Tensile Testing Machine (UTM)", "cat" => "qa", "desc" => "Calibrated UTM for tensile strength (≥17 MPa) & elongation (≥400%)."],
    ["file" => "IMG20260913164437.jpg", "title" => "Accelerated Thermal Ageing Oven", "cat" => "qa", "desc" => "Digital air-circulated oven for 70°C / 72h heat resistance verification."],
    ["file" => "IMG20260913164454.jpg", "title" => "Compression Set & Lab Apparatus", "cat" => "qa", "desc" => "Standardized testing fixtures complying with IS:3400 test methods."],
    ["file" => "IMG20260913164521.jpg", "title" => "Chemical Batch Formulation Logs", "cat" => "compounding", "desc" => "Documented batch weighing records ensuring 100% material traceability."],
    ["file" => "IMG20260913164548.jpg", "title" => "Precision CNC Mould Inventory", "cat" => "assembly", "desc" => "50+ sets of CNC steel moulds covering all standard IRC & RDSO sizes."],
    ["file" => "IMG20260913164602.jpg", "title" => "Nashik Manufacturing Facility Floor", "cat" => "presses", "desc" => "Complete panoramic view of the Nashik production and curing shopfloor."]
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
    box-shadow: 0 4px 16px var(--theme-glow);
}
</style>

<!-- ============================================================
     1. Modern Hero Banner
     ============================================================ -->
<section class="ht-about-hero position-relative d-flex align-items-center"
    style="background: linear-gradient(135deg, rgba(9, 20, 36, 0.88) 0%, rgba(14, 34, 61, 0.65) 50%, rgba(6, 13, 24, 0.65) 100%), url('assets/img/img/banner/birdge-3.webp') center center / cover no-repeat; padding-top: 175px; padding-bottom: 75px; margin-top: -160px; min-height: 440px;">
    
    <div class="container-fluid px-3 px-lg-5 position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-8 wow fadeInLeft" data-wow-delay=".2s">
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
                 Manufacturing Process Flow
            </h2>
            <p class="text-muted mx-auto" style="max-width:700px; font-size:15px;">
                Every batch is manufactured under strict stage-wise quality inspections to ensure full compliance with IRC:83 (Part II), RDSO BS-131, and MoRTH specifications.
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
<section class="py-5 position-relative" id="plant-slider" style="background:#091424; color:#fff;">
    <div class="container py-4">
        <div class="d-flex flex-wrap justify-content-between align-items-end mb-4 gap-3">
            <div>
                <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: var(--theme-subtle); border: 1px solid var(--theme-primary); color: var(--theme-lighter); font-size:12px; letter-spacing:1px; font-weight:600;">
                    Live Plant Operations
                </span>
                <h2 class="text-white fw-bold mb-0" style="font-family:'Oswald', sans-serif; font-size:32px; letter-spacing:0.5px;">
                    Interactive Plant Machinery &amp; Operations Slider
                </h2>
                <p class="text-white-50 mb-0 small mt-1" style="max-width:650px;">
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
                        <img src="assets/pp_data/Machine_Images/<?php echo $img['file']; ?>" alt="<?php echo htmlspecialchars($img['title']); ?>" loading="lazy">
                        <div class="p-3 position-absolute bottom-0 start-0 end-0" style="background: linear-gradient(180deg, transparent 0%, rgba(9, 20, 36, 0.95) 80%);">
                            <span class="badge bg-primary px-2 py-1 mb-1 small text-uppercase" style="font-size:10px;"><?php echo strtoupper($img['cat']); ?></span>
                            <h6 class="text-white fw-bold mb-1" style="font-size:15px;"><?php echo htmlspecialchars($img['title']); ?></h6>
                            <p class="text-white-50 small mb-0" style="font-size:12px; line-height:1.4;"><?php echo htmlspecialchars($img['desc']); ?></p>
                        </div>
                        <a href="assets/pp_data/Machine_Images/<?php echo $img['file']; ?>" class="gallery-zoom-btn popup-image" title="<?php echo htmlspecialchars($img['title']); ?>">
                            <i class="fa-solid fa-expand"></i>
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
                    <img src="assets/pp_data/Machine_Images/IMG20260913162027.jpg" alt="Hydraulic Press" class="img-fluid rounded-3 mb-3" style="height:170px; width:100%; object-fit:cover;">
                    <h6 class="fw-bold text-dark mb-1">Hydraulic Vulcanizing Press</h6>
                    <small class="text-muted">High tonnage multi-daylight heated hydraulic presses with PLC digital temperature controls.</small>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="p-3 bg-light rounded-4 shadow-sm border h-100 text-center">
                    <img src="assets/pp_data/Machine_Images/IMG20260913162127.jpg" alt="Two-Roll Mixing Mill" class="img-fluid rounded-3 mb-3" style="height:170px; width:100%; object-fit:cover;">
                    <h6 class="fw-bold text-dark mb-1">Two-Roll Rubber Mixing Mill</h6>
                    <small class="text-muted">Heavy-duty water-cooled open mixing mill for compound mastication and additive homogenization.</small>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="p-3 bg-light rounded-4 shadow-sm border h-100 text-center">
                    <img src="assets/pp_data/Machine_Images/IMG20260913162317.jpg" alt="Steel Preparation" class="img-fluid rounded-3 mb-3" style="height:170px; width:100%; object-fit:cover;">
                    <h6 class="fw-bold text-dark mb-1">Plate Shearing &amp; Shot Blasting</h6>
                    <small class="text-muted">Steel plate guillotine shearing, edge radiusing grinders, and enclosed grit shot-blasting chamber.</small>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="p-3 bg-light rounded-4 shadow-sm border h-100 text-center">
                    <img src="assets/pp_data/Machine_Images/IMG20260913162728.jpg" alt="Testing Equipment" class="img-fluid rounded-3 mb-3" style="height:170px; width:100%; object-fit:cover;">
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
<section class="py-5" style="background: linear-gradient(135deg, #091a33 0%, #061122 100%); color:#cbd5e1; border-top:1px solid rgba(255,255,255,0.1);">
    <div class="container text-center py-3">
        <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: var(--theme-subtle); border: 1px solid var(--theme-primary); color: var(--theme-lighter); font-size:12px; letter-spacing:1px; font-weight:600;">
            Plant Visit &amp; Witness Inspection
        </span>
        <h3 class="text-white fw-bold mb-2" style="font-family:'Oswald', sans-serif; font-size:28px;">
            Schedule Factory Inspection or Request Detailed QAP Documents
        </h3>
        <p class="text-white-50 mb-4 mx-auto" style="max-width:650px; font-size:15px;">
            We welcome third-party inspection agencies (RITES, DNV, EIL, SGS, TUV) and client engineers for stage-wise witness testing at our Nashik plant.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="testing.php" class="btn btn-primary rounded-pill px-4 py-2 fw-bold text-uppercase" style="background:var(--theme-primary); border-color:var(--theme-primary); font-size:13px; letter-spacing:0.5px;">
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

    // 3. Initialize Magnific Popup for zoom if jQuery is loaded
    if (window.jQuery && typeof jQuery.fn.magnificPopup !== 'undefined') {
        jQuery('.popup-image').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true,
                duration: 300
            }
        });
    }
});
</script>

<?php include_once 'partials/footer.php'; ?>
