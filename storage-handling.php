<?php 
$page_title = "Storage, Handling & Installation Guidelines - Polymer Products";
$meta_description = "On-site storage standards, transit packing protocols, and IRC:83 bridge pier installation guidelines for elastomeric bridge bearings.";
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
.guideline-card {
    transition: all 0.3s ease;
    border: 1px solid #e2e8f0;
    background: #ffffff;
}
.guideline-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.07) !important;
}

/* ============================================================
   Custom High-Contrast Accordion Styling
   ============================================================ */
#installAccordion .accordion-item {
    border: 1px solid #e2e8f0 !important;
    border-radius: 12px !important;
    margin-bottom: 14px !important;
    overflow: hidden !important;
    background: #ffffff !important;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.04) !important;
    transition: border-color 0.3s ease;
}

#installAccordion .accordion-header .accordion-button {
    font-family: 'Oswald', 'Saira-Medium', sans-serif !important;
    font-size: 17px !important;
    font-weight: 600 !important;
    padding: 16px 20px !important;
    transition: all 0.3s ease !important;
    box-shadow: none !important;
    text-decoration: none !important;
}

/* When OPEN / ACTIVE (not collapsed) */
#installAccordion .accordion-button:not(.collapsed) {
    background: linear-gradient(135deg, #091a33 0%, #152e52 100%) !important;
    color: #ffffff !important;
    border-bottom: 2px solid var(--theme-primary) !important;
}
#installAccordion .accordion-button:not(.collapsed) .acc-num {
    color: var(--theme-light) !important;
}
#installAccordion .accordion-button:not(.collapsed)::after {
    color: var(--theme-light) !important;
    filter: brightness(0) invert(1) !important;
}

/* When CLOSED / COLLAPSED */
#installAccordion .accordion-button.collapsed {
    background: #f8fafc !important;
    color: #0f172a !important;
    border-bottom: none !important;
}
#installAccordion .accordion-button.collapsed:hover {
    background: #f1f5f9 !important;
    color: var(--theme-primary) !important;
}
#installAccordion .accordion-button.collapsed .acc-num {
    color: var(--theme-primary) !important;
}
#installAccordion .accordion-button.collapsed::after {
    color: #475569 !important;
}

#installAccordion .accordion-body {
    background: #ffffff !important;
    color: #334155 !important;
    font-size: 14.5px !important;
    line-height: 1.8 !important;
    padding: 20px 24px !important;
}
</style>

<!-- ============================================================
     1. Modern Hero Banner
     ============================================================ -->
<section class="ht-about-hero position-relative d-flex align-items-center"
    style="background: linear-gradient(135deg, rgba(9, 20, 36, 0.88) 0%, rgba(14, 34, 61, 0.65) 50%, rgba(6, 13, 24, 0.65) 100%), url('assets/img/img/banner/birdge-13.webp') center center / cover no-repeat; padding-top: 175px; padding-bottom: 75px; margin-top: -160px; min-height: 440px;">
    
    <div class="container-fluid px-3 px-lg-5 position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-8 wow fadeInLeft" data-wow-delay=".2s">
                <span class="badge px-3 py-2 mb-3 rounded-pill text-uppercase storage-hero-badge">
                    <i class="fa-solid fa-screwdriver-wrench me-2"></i>Site Engineering Best Practices
                </span>
                <h1 class="text-white fw-bold mb-3"
                    style="font-family: 'Oswald', 'Saira-Medium', sans-serif; font-size: clamp(32px, 4.5vw, 50px); letter-spacing: -0.5px; line-height: 1.2;">
                    Storage, Handling <span style="color: var(--theme-light);">&amp; Installation Guidelines</span>
                </h1>
                <p class="text-light mb-4" style="font-size: 16px; line-height: 1.8; max-width: 740px; color: #cbd5e1 !important;">
                    Proper storage, careful handling, and correct bridge site installation are essential to preserve the design life and structural performance of elastomeric bearings.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#site-storage" class="btn btn-primary rounded-pill px-4 py-2 fw-bold text-uppercase" style="background:var(--theme-primary); border-color:var(--theme-primary); font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-warehouse me-2"></i>On-Site Storage
                    </a>
                    <a href="#handling-packing" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-truck-ramp-box me-2"></i>Handling &amp; Packaging
                    </a>
                    <a href="#bridge-installation" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-bridge me-2"></i>Installation SOP
                    </a>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0 text-lg-end d-none d-lg-block wow fadeInRight" data-wow-delay=".3s">
                <div class="p-4 rounded-4 text-start text-white shadow-lg border"
                    style="background: rgba(255, 255, 255, 0.06); border-color: rgba(255, 255, 255, 0.15) !important; backdrop-filter: blur(12px);">
                    <div class="d-flex align-items-center mb-3">
                        <div class="p-2 rounded-circle me-3 d-flex align-items-center justify-content-center"
                            style="width: 44px; height: 44px; background: var(--theme-primary); color: #fff;">
                            <i class="fa-solid fa-clipboard-check"></i>
                        </div>
                        <div>
                            <span class="small text-white-50 d-block" style="font-size: 12px;">Installation Standard</span>
                            <h6 class="fw-bold text-white mb-0" style="font-size: 15px;">IRC:83 (Part II)</h6>
                        </div>
                    </div>
                    <ul class="list-unstyled small text-light mb-0" style="line-height:1.8; color:#cbd5e1 !important;">
                        <li><i class="fa-solid fa-check text-success me-2"></i>Flat Wooden Pallet Stacking</li>
                        <li><i class="fa-solid fa-check text-success me-2"></i>Fabric Webbing Slings Only</li>
                        <li><i class="fa-solid fa-check text-success me-2"></i>High-Strength Epoxy Bedding</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     2. Storage Guidelines Section
     ============================================================ -->
<section class="py-5" id="site-storage" style="background:#ffffff;">
    <div class="container py-4">
        
        <div class="row g-5 align-items-center mb-5 pb-4 border-bottom">
            <div class="col-lg-6">
                <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight:700; font-size:12px; letter-spacing:1px;">
                    ON-SITE STORAGE
                </span>
                <h3 class="fw-bold text-dark mb-3" style="font-family:'Oswald', sans-serif; font-size:28px;">1. Storage Requirements at Site</h3>
                <p class="text-secondary" style="line-height:1.8; font-size:15px;">
                    Elastomeric bearings must be stored in a covered, dry, and well-ventilated warehouse environment prior to installation on bridge piers:
                </p>
                <ul class="list-unstyled text-muted small" style="line-height:2.0;">
                    <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>Protection from Sunlight:</strong> Keep away from direct sunlight, UV exposure, and rain to prevent surface oxidation.</li>
                    <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>Flat Stacking:</strong> Bearings must be stacked horizontally flat on level timber pallets. Avoid uneven stacking that causes point loading or warping.</li>
                    <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>Chemical Separation:</strong> Keep clear of oils, greases, diesel, solvents, acids, and welding spatter.</li>
                    <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>Temperature &amp; Ozone:</strong> Store below 40&deg;C and away from high-voltage electrical equipment producing ozone.</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="p-4 bg-light rounded-4 border shadow-sm">
                    <h5 class="fw-bold text-dark mb-3" style="font-size:17px;"><i class="fa-solid fa-warehouse text-primary me-2"></i>Storage Dos &amp; Don'ts</h5>
                    <div class="row g-3 small">
                        <div class="col-sm-6">
                            <div class="p-3 bg-white rounded-3 border border-success h-100">
                                <h6 class="text-success fw-bold mb-2"><i class="fa-solid fa-circle-check me-1"></i> DO:</h6>
                                <p class="text-muted mb-0" style="line-height:1.6;">Store in original protective polyethylene packaging on flat wooden skids until ready for girder placement.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 bg-white rounded-3 border border-danger h-100">
                                <h6 class="text-danger fw-bold mb-2"><i class="fa-solid fa-circle-xmark me-1"></i> DON'T:</h6>
                                <p class="text-muted mb-0" style="line-height:1.6;">Never stack vertically on edge, never drop from heights, and never store directly on damp, unpaved ground.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pallet Stacking Photo -->
                <div class="mt-4 p-3 bg-light rounded-4 border">
                    <img src="assets/pp_data/Machine_Images/IMG20260913164230.jpg" alt="Palletized Storage" class="img-fluid rounded-3 w-100" style="height:210px; object-fit:cover;">
                    <p class="text-center small text-muted mt-2 mb-0">Flat wooden palletized stacking at factory dispatch bay</p>
                </div>
            </div>
        </div>

        <!-- Section 2: Handling & Delivery Flow Chart -->
        <div class="row g-5 align-items-center mb-5 pb-4 border-bottom" id="handling-packing">
            <div class="col-lg-6">
                <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight:700; font-size:12px; letter-spacing:1px;">
                    SAFE LOGISTICS
                </span>
                <h3 class="fw-bold text-dark mb-3" style="font-family:'Oswald', sans-serif; font-size:28px;">2. Handling, Packing &amp; Delivery</h3>
                <p class="text-secondary" style="line-height:1.8; font-size:15px;">
                    All bearings are individually wrapped with heavy-gauge polyethylene film and securely strapped onto sturdy wooden pallets for transit.
                </p>
                <div class="p-4 bg-light rounded-4 border shadow-sm">
                    <h6 class="fw-bold text-dark mb-2" style="font-size:16px;"><i class="fa-solid fa-truck-moving text-primary me-2"></i>Handling Precautions:</h6>
                    <ul class="text-muted small mb-0" style="line-height:2.0;">
                        <li><i class="fa-solid fa-check text-primary me-2"></i>Use fabric webbing slings or pallet forks. <strong>Never use wire ropes or hooks</strong> directly on bearing elastomer edges.</li>
                        <li><i class="fa-solid fa-check text-primary me-2"></i>Avoid dragging bearings over rough concrete surfaces or gravel beds.</li>
                        <li><i class="fa-solid fa-check text-primary me-2"></i>Maintain manufacturer identification tags and lot markings intact until final consultant inspection.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-4 bg-light rounded-4 border shadow-sm text-center mb-3">
                    <div class="d-inline-flex p-3 text-white rounded-circle mb-3" style="background: linear-gradient(135deg, var(--theme-primary) 0%, var(--theme-hover) 100%); box-shadow: 0 4px 12px var(--theme-glow);">
                        <i class="fa-solid fa-box-open fa-2x"></i>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="font-size:18px;">Factory Packaging Protocol</h5>
                    <p class="small text-muted mb-0" style="line-height:1.7;">Every batch is packaged with weather-resistant shrink wrap, corner edge protectors, and complete manufacturer test certificates (MTC) enclosed inside the consignment documentation pouch.</p>
                </div>
                <div class="p-3 bg-light rounded-4 border">
                    <img src="assets/pp_data/Machine_Images/IMG20260913164319.jpg" alt="Shrink Wrapping" class="img-fluid rounded-3 w-100" style="height:210px; object-fit:cover;">
                    <p class="text-center small text-muted mt-2 mb-0">High-gauge shrink wrapping protecting finished bearings during transit</p>
                </div>
            </div>
        </div>

        <!-- Section 3: Installation Procedures -->
        <div class="row g-5 align-items-center" id="bridge-installation">
            <div class="col-lg-6">
                <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight:700; font-size:12px; letter-spacing:1px;">
                    BRIDGE PIER ERECTION
                </span>
                <h3 class="fw-bold text-dark mb-3" style="font-family:'Oswald', sans-serif; font-size:28px;">3. Site Installation Guidelines</h3>
                <p class="text-secondary" style="line-height:1.8; font-size:15px;">
                    Follow IRC:83 (Part II) recommended practices for bridge seat preparation and bearing positioning:
                </p>
                <div class="accordion" id="installAccordion">
                    <div class="accordion-item shadow-sm">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                <span class="acc-num me-2"><i class="fa-solid fa-layer-group me-1"></i> 1.</span> Pedestal Levelling &amp; Bedding Mortar
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#installAccordion">
                            <div class="accordion-body">
                                The concrete pedestal top must be perfectly horizontal, cured, and cleaned. Apply a 5mm to 10mm high-strength epoxy or non-shrink cementitious mortar bed ensuring 100% full contact surface without voids.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item shadow-sm">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                <span class="acc-num me-2"><i class="fa-solid fa-compass-drafting me-1"></i> 2.</span> Alignment &amp; Axis Orientation
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#installAccordion">
                            <div class="accordion-body">
                                Align the bearing centerlines accurately with the pier axis and girder longitudinal axis. Check tilt tolerances (&le; 0.2% slope deviation).
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item shadow-sm">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                <span class="acc-num me-2"><i class="fa-solid fa-arrows-down-to-line me-1"></i> 3.</span> Girder Lowering &amp; Jacking Precautions
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#installAccordion">
                            <div class="accordion-body">
                                Lower precast girders uniformly and smoothly using synchronized jacks to prevent eccentric edge pinch loading. Verify uniform initial seating deflection.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-3 bg-light rounded-4 border shadow-sm">
                    <img src="assets/pp_data/Machine_Images/IMG20260913162505.jpg" alt="Installation Quality Control" class="img-fluid rounded-3 w-100" style="height:320px; object-fit:cover;">
                    <p class="text-center small text-muted mt-2 mb-0">Quality inspection &amp; finished bearing dispatch inspection</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     4. Technical Support & RFQ Banner
     ============================================================ -->
<section class="py-5" style="background: linear-gradient(135deg, #091a33 0%, #061122 100%); color:#cbd5e1; border-top:1px solid rgba(255,255,255,0.1);">
    <div class="container text-center py-3">
        <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: var(--theme-subtle); border: 1px solid var(--theme-primary); color: var(--theme-lighter); font-size:12px; letter-spacing:1px; font-weight:600;">
            Site Installation Assistance
        </span>
        <h3 class="text-white fw-bold mb-2" style="font-family:'Oswald', sans-serif; font-size:28px;">
            Need On-Site Engineering Guidance or Installation Support?
        </h3>
        <p class="text-white-50 mb-4 mx-auto" style="max-width:650px; font-size:15px;">
            Our technical engineers provide guidance for bearing seating calculations, epoxy mortar selection, and synchronized jacking protocols.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="contact.php" class="btn btn-primary rounded-pill px-4 py-2 fw-bold text-uppercase" style="background:var(--theme-primary); border-color:var(--theme-primary); font-size:13px; letter-spacing:0.5px;">
                <i class="fa-solid fa-paper-plane me-2"></i>Contact Technical Support
            </a>
            <a href="assets/pp_data/Page 01/Credential_Polymer_Products.pdf" target="_blank" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                <i class="fa-solid fa-file-pdf me-2"></i>Download Credentials
            </a>
        </div>
    </div>
</section>

<?php include_once 'partials/footer.php'; ?>
