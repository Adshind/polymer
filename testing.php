<!DOCTYPE html>
<html lang="en">

<?php $title = 'Testing & QA/QC System - Polymer Products' ?>
<?php include './partials/head.php' ?>

<body class="body-color">
<?php include './partials/preloader.php' ?>
<?php include './partials/mouse-cursor.php' ?>
<?php include './partials/scroll-up.php' ?>
<?php include './partials/header.php' ?>
<?php include './partials/offcanvas.php' ?>

<!-- Page Header -->
<div class="py-5" style="background: linear-gradient(135deg, #0b192c 0%, #1e3e62 100%); color:#fff;">
    <div class="container py-4 text-center">
        <span class="badge bg-primary px-3 py-2 mb-2 text-uppercase fw-bold">Quality Assurance</span>
        <h1 class="display-5 fw-bold text-white mb-2">Testing & QA/QC System (NHAI & RDSO)</h1>
        <p class="lead text-light mb-0 mx-auto" style="max-width:700px;">Comprehensive Quality Assurance Plan (QAP), material testing protocols, proof-load verification, and third-party inspection support.</p>
    </div>
</div>

<!-- Testing Overview -->
<section class="py-5" style="background:#fff;">
    <div class="container py-4">
        
        <div class="row g-4 mb-5">
            <!-- NHAI QAP Card -->
            <div class="col-lg-6">
                <div class="p-4 bg-light rounded-4 border shadow-sm h-100">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge bg-primary px-3 py-2 fw-bold text-uppercase">Road & Highway Bridges</span>
                        <span class="badge bg-secondary">IRC:83 (Part II)</span>
                    </div>
                    <h3 class="fw-bold text-dark mb-2">NHAI Quality Assurance Plan (QAP)</h3>
                    <p class="text-secondary small mb-3">
                        Structured quality control plan approved for National Highway and State PWD bridge projects, detailing stage-wise control points:
                    </p>
                    <ul class="text-muted small mb-4" style="line-height:1.9;">
                        <li><i class="fa-solid fa-check text-primary me-2"></i><strong>Stage 1:</strong> Raw polymer & chemical compounding verification</li>
                        <li><i class="fa-solid fa-check text-primary me-2"></i><strong>Stage 2:</strong> Steel plate tensile test, grit blasting & primer bonding check</li>
                        <li><i class="fa-solid fa-check text-primary me-2"></i><strong>Stage 3:</strong> Curing temperature and pressure recording log</li>
                        <li><i class="fa-solid fa-check text-primary me-2"></i><strong>Stage 4:</strong> Finished bearing dimensional tolerance check</li>
                        <li><i class="fa-solid fa-check text-primary me-2"></i><strong>Stage 5:</strong> Shear modulus test (G-value = 0.8 to 1.2 MPa) & Proof Load test</li>
                    </ul>
                    <div class="p-3 bg-white rounded border d-flex align-items-center justify-content-between">
                        <div>
                            <h6 class="fw-bold text-dark mb-0">IRC QAP Document Reference</h6>
                            <small class="text-muted">Standard IRC:83 Format</small>
                        </div>
                        <a href="assets/pp_data/Page 01/Credential_Polymer_Products.pdf" target="_blank" class="btn btn-outline-primary btn-sm rounded-pill fw-bold">
                            <i class="fa-solid fa-file-pdf me-1"></i> View QAP Format
                        </a>
                    </div>
                </div>
            </div>

            <!-- RDSO QAP Card -->
            <div class="col-lg-6">
                <div class="p-4 bg-light rounded-4 border shadow-sm h-100">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge bg-danger px-3 py-2 fw-bold text-uppercase">Railway Bridges & ROBs</span>
                        <span class="badge bg-secondary">RDSO BS-131</span>
                    </div>
                    <h3 class="fw-bold text-dark mb-2">RDSO Railway Quality Plan</h3>
                    <p class="text-secondary small mb-3">
                        High-precision testing regime complying with Indian Railways Research Designs and Standards Organisation (RDSO) specifications:
                    </p>
                    <ul class="text-muted small mb-4" style="line-height:1.9;">
                        <li><i class="fa-solid fa-check text-danger me-2"></i><strong>Axle Load Verification:</strong> Designed for 25T & 32.5T heavy freight loads</li>
                        <li><i class="fa-solid fa-check text-danger me-2"></i><strong>Proof Load Test:</strong> 100% bearings subjected to 1.5x design vertical load</li>
                        <li><i class="fa-solid fa-check text-danger me-2"></i><strong>Shear Modulus Test:</strong> Dual-bearing compression-shear test rig</li>
                        <li><i class="fa-solid fa-check text-danger me-2"></i><strong>Adhesion Bond Strength:</strong> Elastomer-to-steel laminate peel test</li>
                        <li><i class="fa-solid fa-check text-danger me-2"></i><strong>Witness Inspection:</strong> Stage-wise inspection by RITES / RDSO officials</li>
                    </ul>
                    <div class="p-3 bg-white rounded border d-flex align-items-center justify-content-between">
                        <div>
                            <h6 class="fw-bold text-dark mb-0">RDSO QAP Document Reference</h6>
                            <small class="text-muted">Indian Railways Format</small>
                        </div>
                        <a href="assets/pp_data/Page 01/Credential_Polymer_Products.pdf" target="_blank" class="btn btn-outline-danger btn-sm rounded-pill fw-bold">
                            <i class="fa-solid fa-file-pdf me-1"></i> View Railway QAP
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testing Parameters Table -->
        <div class="section-title text-center mb-4 pt-3">
            <span class="badge bg-primary text-white px-3 py-2 mb-2 text-uppercase fw-bold">Standard Parameters</span>
            <h2 class="fw-bold text-dark">Routine & Acceptance Test Parameters</h2>
        </div>

        <div class="table-responsive bg-white rounded-4 border shadow-sm p-3">
            <table class="table table-hover table-bordered small align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Test Property</th>
                        <th>Test Method / Code</th>
                        <th>Specified Requirement (Natural Rubber)</th>
                        <th>Specified Requirement (Chloroprene)</th>
                        <th>Sampling Frequency</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-bold">1. Hardness (Shore A)</td>
                        <td>IS: 3400 (Part 2) / ASTM D2240</td>
                        <td>60 &plusmn; 5 IRHD / Shore A</td>
                        <td>60 &plusmn; 5 IRHD / Shore A</td>
                        <td>Every Batch / 100% Bearings</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">2. Minimum Tensile Strength</td>
                        <td>IS: 3400 (Part 1) / ASTM D412</td>
                        <td>&ge; 17.0 MPa (170 kg/cm&sup2;)</td>
                        <td>&ge; 17.0 MPa (170 kg/cm&sup2;)</td>
                        <td>Every Compounded Batch</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">3. Minimum Elongation at Break</td>
                        <td>IS: 3400 (Part 1) / ASTM D412</td>
                        <td>&ge; 400%</td>
                        <td>&ge; 400%</td>
                        <td>Every Compounded Batch</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">4. Accelerated Ageing (70°C / 72h)</td>
                        <td>IS: 3400 (Part 4) / ASTM D573</td>
                        <td>Tensile: -15% max | Elongation: -30% max</td>
                        <td>Tensile: -15% max | Elongation: -30% max</td>
                        <td>Per Lot / Periodic</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">5. Compression Set (24h / 70°C)</td>
                        <td>IS: 3400 (Part 10) / ASTM D395</td>
                        <td>&le; 35% Max</td>
                        <td>&le; 30% Max</td>
                        <td>Per Lot Testing</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">6. Ozone Resistance Test</td>
                        <td>IS: 3400 (Part 20) / ASTM D1149</td>
                        <td>No cracks under 20% strain (25 pphm)</td>
                        <td>No cracks under 20% strain (100 pphm)</td>
                        <td>Type Test / Periodic</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">7. Shear Modulus (G-Value)</td>
                        <td>IRC:83 (Part II) Appendix 2</td>
                        <td>G = 0.8 to 1.2 MPa (&plusmn; 15% tolerance)</td>
                        <td>G = 0.8 to 1.2 MPa (&plusmn; 15% tolerance)</td>
                        <td>Acceptance Test (Pairs)</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">8. Compressive Proof Load (1.5x)</td>
                        <td>IRC:83 (Part II) / RDSO</td>
                        <td>No cracking, zero splitting, no de-lamination</td>
                        <td>No cracking, zero splitting, no de-lamination</td>
                        <td>100% of Supplied Bearings</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>

<?php include './partials/footer.php' ?>
<?php include './partials/script.php' ?>
</body>
</html>
