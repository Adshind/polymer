<?php 
$page_title = "Testing & QA/QC System (NHAI & RDSO) - Polymer Products";
$meta_description = "Quality Assurance Plan (QAP), material testing protocols, 1.5x proof-load verification, and third-party inspection for elastomeric bridge bearings.";
include_once 'partials/header.php'; 
?>

<style>
.testing-hero-badge {
    background: var(--theme-subtle);
    border: 1px solid var(--theme-primary);
    color: var(--theme-lighter);
    font-size: 13px;
    letter-spacing: 1px;
}
.qap-card {
    transition: all 0.35s ease;
    border: 1px solid #e2e8f0;
    background: #ffffff;
}
.qap-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 16px 32px rgba(0, 0, 0, 0.08) !important;
}
.test-spec-table th {
    background: #0f172a;
    color: #ffffff;
    font-weight: 600;
    font-size: 13px;
    letter-spacing: 0.3px;
}
.test-spec-table td {
    font-size: 13px;
}
.lab-card {
    border-radius: 16px;
    overflow: hidden;
    background: #ffffff;
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
}
.lab-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 24px rgba(0,0,0,0.07);
    border-color: var(--theme-primary);
}
.lab-card img {
    height: 180px;
    width: 100%;
    object-fit: cover;
}
</style>

<!-- ============================================================
     1. Modern Hero Banner
     ============================================================ -->
<section class="ht-about-hero position-relative d-flex align-items-center"
    style="background: linear-gradient(135deg, rgba(9, 20, 36, 0.88) 0%, rgba(14, 34, 61, 0.65) 50%, rgba(6, 13, 24, 0.65) 100%), url('assets/img/img/banner/birdge-5.webp') center center / cover no-repeat; padding-top: 175px; padding-bottom: 75px; margin-top: -160px; min-height: 440px;">
    
    <div class="container-fluid px-3 px-lg-5 position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-8 wow fadeInLeft" data-wow-delay=".2s">
                <span class="badge px-3 py-2 mb-3 rounded-pill text-uppercase testing-hero-badge">
                    <i class="fa-solid fa-vial-circle-check me-2"></i>Quality Assurance &amp; Verification
                </span>
                <h1 class="text-white fw-bold mb-3"
                    style="font-family: 'Oswald', 'Saira-Medium', sans-serif; font-size: clamp(32px, 4.5vw, 50px); letter-spacing: -0.5px; line-height: 1.2;">
                    Testing &amp; QA/QC System <span style="color: var(--theme-light);">(NHAI &amp; RDSO)</span>
                </h1>
                <p class="text-light mb-4" style="font-size: 16px; line-height: 1.8; max-width: 740px; color: #cbd5e1 !important;">
                    Comprehensive Quality Assurance Plans (QAP), raw compound laboratory testing, 1.5x proof-load verification, and stage-wise third-party inspection support.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#qap-plans" class="btn btn-primary rounded-pill px-4 py-2 fw-bold text-uppercase" style="background:var(--theme-primary); border-color:var(--theme-primary); font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-clipboard-check me-2"></i>Approved QAP Plans
                    </a>
                    <a href="#test-parameters" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-table-list me-2"></i>Test Parameters
                    </a>
                    <a href="#lab-facilities" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-flask me-2"></i>In-House Lab
                    </a>
                </div>
            </div>

           
        </div>
    </div>
</section>

<!-- ============================================================
     2. Core Quality Assurance Plans (NHAI & RDSO)
     ============================================================ -->
<section class="py-5" id="qap-plans" style="background:#ffffff;">
    <div class="container py-4">
        
        <div class="section-title text-center mb-5">
            <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight:700; font-size:12px; letter-spacing:1px;">
                Quality Assurance Framework
            </span>
            <h2 class="fw-bold text-dark" style="font-family:'Oswald', sans-serif; font-size:32px; letter-spacing:0.5px;">
                Standardized Stage-Wise Quality Control Plans
            </h2>
            <p class="text-muted mx-auto" style="max-width:700px; font-size:15px;">
                Structured quality assurance protocols approved by National Highway authorities and Indian Railways for landmark infrastructure projects.
            </p>
        </div>

        <div class="row g-4 mb-5">
            <!-- NHAI QAP Card -->
            <div class="col-lg-6">
                <div class="p-4 rounded-4 shadow-sm h-100 qap-card position-relative">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge px-3 py-2 fw-bold text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); border: 1px solid var(--theme-primary);">
                            <i class="fa-solid fa-road me-1"></i> Road &amp; Highway Bridges
                        </span>
                        <span class="badge bg-secondary px-2 py-1">IRC:83 (Part II)</span>
                    </div>
                    <h3 class="fw-bold text-dark mb-2" style="font-family:'Oswald', sans-serif; font-size:24px;">NHAI Quality Assurance Plan (QAP)</h3>
                    <p class="text-secondary small mb-3" style="line-height:1.7;">
                        Structured quality control plan approved for National Highway and State PWD bridge projects, detailing stage-wise control points:
                    </p>
                    <ul class="list-unstyled text-muted small mb-4" style="line-height:2.0;">
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>Stage 1:</strong> Raw polymer &amp; chemical compounding verification</li>
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>Stage 2:</strong> Steel plate tensile test, grit blasting &amp; primer bonding check</li>
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>Stage 3:</strong> Curing temperature and pressure recording log</li>
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>Stage 4:</strong> Finished bearing dimensional tolerance check</li>
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>Stage 5:</strong> Shear modulus test (G-value = 0.8 to 1.2 MPa) &amp; Proof Load test</li>
                    </ul>
                    <div class="p-3 bg-light rounded-3 border d-flex flex-wrap align-items-center justify-content-between gap-2 mt-auto">
                        <div>
                            <h6 class="fw-bold text-dark mb-0" style="font-size:14px;">IRC QAP Document Reference</h6>
                            <small class="text-muted">Standard IRC:83 Format</small>
                        </div>
                        <a href="assets/pp_data/Page 01/Credential_Polymer_Products.pdf" target="_blank" class="btn btn-outline-primary btn-sm rounded-pill fw-bold px-3">
                            <i class="fa-solid fa-file-pdf me-1"></i> View QAP Format
                        </a>
                    </div>
                </div>
            </div>

            <!-- RDSO QAP Card -->
            <div class="col-lg-6">
                <div class="p-4 rounded-4 shadow-sm h-100 qap-card position-relative" style="border-top: 4px solid #dc2626 !important;">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge bg-danger-subtle text-danger px-3 py-2 fw-bold text-uppercase border border-danger">
                            <i class="fa-solid fa-train me-1"></i> Railway Bridges &amp; ROBs
                        </span>
                        <span class="badge bg-secondary px-2 py-1">RDSO BS-131</span>
                    </div>
                    <h3 class="fw-bold text-dark mb-2" style="font-family:'Oswald', sans-serif; font-size:24px;">RDSO Railway Quality Plan</h3>
                    <p class="text-secondary small mb-3" style="line-height:1.7;">
                        High-precision testing regime complying with Indian Railways Research Designs and Standards Organisation (RDSO) specifications:
                    </p>
                    <ul class="list-unstyled text-muted small mb-4" style="line-height:2.0;">
                        <li><i class="fa-solid fa-circle-check text-danger me-2"></i><strong>Axle Load Verification:</strong> Designed for 25T &amp; 32.5T heavy freight loads</li>
                        <li><i class="fa-solid fa-circle-check text-danger me-2"></i><strong>Proof Load Test:</strong> 100% bearings subjected to 1.5x design vertical load</li>
                        <li><i class="fa-solid fa-circle-check text-danger me-2"></i><strong>Shear Modulus Test:</strong> Dual-bearing compression-shear test rig</li>
                        <li><i class="fa-solid fa-circle-check text-danger me-2"></i><strong>Adhesion Bond Strength:</strong> Elastomer-to-steel laminate peel test</li>
                        <li><i class="fa-solid fa-circle-check text-danger me-2"></i><strong>Witness Inspection:</strong> Stage-wise inspection by RITES / RDSO officials</li>
                    </ul>
                    <div class="p-3 bg-light rounded-3 border d-flex flex-wrap align-items-center justify-content-between gap-2 mt-auto">
                        <div>
                            <h6 class="fw-bold text-dark mb-0" style="font-size:14px;">RDSO QAP Document Reference</h6>
                            <small class="text-muted">Indian Railways Format</small>
                        </div>
                        <a href="assets/pp_data/Page 01/Credential_Polymer_Products.pdf" target="_blank" class="btn btn-outline-danger btn-sm rounded-pill fw-bold px-3">
                            <i class="fa-solid fa-file-pdf me-1"></i> View Railway QAP
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     3. Routine & Acceptance Test Parameters Table
     ============================================================ -->
<section class="py-5" id="test-parameters" style="background:#f8fafc; border-top:1px solid #e2e8f0; border-bottom:1px solid #e2e8f0;">
    <div class="container py-4">
        <div class="section-title text-center mb-4">
            <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight:700; font-size:12px; letter-spacing:1px;">
                Standard Parameters
            </span>
            <h2 class="fw-bold text-dark" style="font-family:'Oswald', sans-serif; font-size:32px; letter-spacing:0.5px;">
                Routine &amp; Acceptance Test Parameters
            </h2>
            <p class="text-muted mx-auto" style="max-width:700px; font-size:15px;">
                Physical, mechanical, and thermal aging parameters tested according to IS:3400, ASTM, and IRC:83 specifications.
            </p>
        </div>

        <div class="table-responsive bg-white rounded-4 border shadow-sm p-3">
            <table class="table table-hover table-bordered small align-middle mb-0 test-spec-table">
                <thead>
                    <tr>
                        <th style="min-width: 180px;">Test Property</th>
                        <th>Test Method / Code</th>
                        <th>Specified Requirement (Natural Rubber)</th>
                        <th>Specified Requirement (Chloroprene)</th>
                        <th>Sampling Frequency</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-bold text-dark">1. Hardness (Shore A)</td>
                        <td><span class="badge bg-light text-dark border">IS: 3400 (Pt 2) / ASTM D2240</span></td>
                        <td>60 &plusmn; 5 IRHD / Shore A</td>
                        <td>60 &plusmn; 5 IRHD / Shore A</td>
                        <td><span class="badge bg-primary-subtle text-primary fw-semibold">Every Batch / 100% Bearings</span></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-dark">2. Minimum Tensile Strength</td>
                        <td><span class="badge bg-light text-dark border">IS: 3400 (Pt 1) / ASTM D412</span></td>
                        <td>&ge; 17.0 MPa (170 kg/cm&sup2;)</td>
                        <td>&ge; 17.0 MPa (170 kg/cm&sup2;)</td>
                        <td><span class="badge bg-primary-subtle text-primary fw-semibold">Every Compounded Batch</span></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-dark">3. Minimum Elongation at Break</td>
                        <td><span class="badge bg-light text-dark border">IS: 3400 (Pt 1) / ASTM D412</span></td>
                        <td>&ge; 400%</td>
                        <td>&ge; 400%</td>
                        <td><span class="badge bg-primary-subtle text-primary fw-semibold">Every Compounded Batch</span></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-dark">4. Accelerated Ageing (70°C / 72h)</td>
                        <td><span class="badge bg-light text-dark border">IS: 3400 (Pt 4) / ASTM D573</span></td>
                        <td>Tensile: -15% max | Elongation: -30% max</td>
                        <td>Tensile: -15% max | Elongation: -30% max</td>
                        <td><span class="badge bg-secondary-subtle text-secondary fw-semibold">Per Lot / Periodic</span></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-dark">5. Compression Set (24h / 70°C)</td>
                        <td><span class="badge bg-light text-dark border">IS: 3400 (Pt 10) / ASTM D395</span></td>
                        <td>&le; 35% Max</td>
                        <td>&le; 30% Max</td>
                        <td><span class="badge bg-secondary-subtle text-secondary fw-semibold">Per Lot Testing</span></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-dark">6. Ozone Resistance Test</td>
                        <td><span class="badge bg-light text-dark border">IS: 3400 (Pt 20) / ASTM D1149</span></td>
                        <td>No cracks under 20% strain (25 pphm)</td>
                        <td>No cracks under 20% strain (100 pphm)</td>
                        <td><span class="badge bg-secondary-subtle text-secondary fw-semibold">Type Test / Periodic</span></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-dark">7. Shear Modulus (G-Value)</td>
                        <td><span class="badge bg-light text-dark border">IRC:83 (Pt II) Appendix 2</span></td>
                        <td>G = 0.8 to 1.2 MPa (&plusmn; 15% tolerance)</td>
                        <td>G = 0.8 to 1.2 MPa (&plusmn; 15% tolerance)</td>
                        <td><span class="badge bg-success-subtle text-success fw-semibold">Acceptance Test (Pairs)</span></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-dark">8. Compressive Proof Load (1.5x)</td>
                        <td><span class="badge bg-light text-dark border">IRC:83 (Part II) / RDSO</span></td>
                        <td>No cracking, zero splitting, no de-lamination</td>
                        <td>No cracking, zero splitting, no de-lamination</td>
                        <td><span class="badge bg-danger-subtle text-danger fw-semibold">100% of Supplied Bearings</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>

<!-- ============================================================
     4. In-House Testing Laboratory & Equipment
     ============================================================ -->
<section class="py-5" id="lab-facilities" style="background:#ffffff;">
    <div class="container py-4">
        <div class="section-title text-center mb-5">
            <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight:700; font-size:12px; letter-spacing:1px;">
                Laboratory Infrastructure
            </span>
            <h2 class="fw-bold text-dark" style="font-family:'Oswald', sans-serif; font-size:32px; letter-spacing:0.5px;">
                In-House Testing Equipment &amp; Facilities
            </h2>
            <p class="text-muted mx-auto" style="max-width:700px; font-size:15px;">
                Our plant houses calibrated computerized testing machines ensuring complete verification prior to dispatch.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="lab-card shadow-sm h-100">
                    <img src="assets/pp_data/Machine_Images/IMG20260913164426.jpg" alt="Tensile Testing Machine">
                    <div class="p-3">
                        <h6 class="fw-bold text-dark mb-1">Universal Testing Machine (UTM)</h6>
                        <p class="small text-muted mb-0">Electronic UTM with extensometer for tensile strength and elongation at break testing.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="lab-card shadow-sm h-100">
                    <img src="assets/pp_data/Machine_Images/IMG20260913164437.jpg" alt="Thermal Ageing Oven">
                    <div class="p-3">
                        <h6 class="fw-bold text-dark mb-1">Accelerated Thermal Ageing Oven</h6>
                        <p class="small text-muted mb-0">Digital temperature-controlled circulating oven for 70°C / 72-hour thermal stability tests.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="lab-card shadow-sm h-100">
                    <img src="assets/pp_data/Machine_Images/IMG20260913162728.jpg" alt="Proof Load Rig">
                    <div class="p-3">
                        <h6 class="fw-bold text-dark mb-1">Compressive Proof Load Frame</h6>
                        <p class="small text-muted mb-0">High-tonnage hydraulic test rig verifying 1.5x design vertical load without bulging failure.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="lab-card shadow-sm h-100">
                    <img src="assets/pp_data/Machine_Images/IMG20260913162650.jpg" alt="Hardness Durometer">
                    <div class="p-3">
                        <h6 class="fw-bold text-dark mb-1">Durometers &amp; Thickness Gauges</h6>
                        <p class="small text-muted mb-0">Calibrated Shore-A durometers and digital micrometers for stage-wise dimensional control.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Third Party Inspection Support -->
        <div class="mt-5 p-4 rounded-4 border shadow-sm" style="background:#f8fafc;">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h5 class="fw-bold text-dark mb-2" style="font-family:'Oswald', sans-serif; font-size:20px;">
                        <i class="fa-solid fa-users-viewfinder text-primary me-2"></i>Third-Party Witness Inspection Support
                    </h5>
                    <p class="small text-muted mb-0" style="line-height:1.7;">
                        We regularly facilitate third-party inspection agencies including <strong>RITES, DNV, SGS, EIL, TUV, BVQI</strong>, and client engineers for physical sampling, shear modulus testing, and proof-load testing at our Nashik facility.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <a href="assets/pp_data/Page 01/Credential_Polymer_Products.pdf" target="_blank" class="btn btn-primary rounded-pill px-4 py-2 fw-bold text-uppercase" style="background:var(--theme-primary); border-color:var(--theme-primary); font-size:12px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-file-pdf me-2"></i>Download QA Credentials
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include_once 'partials/footer.php'; ?>
