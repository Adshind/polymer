<!DOCTYPE html>
<html lang="en">

<?php $title = 'Product Identification & Traceability System - Polymer Products' ?>
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
        <span class="badge bg-primary px-3 py-2 mb-2 text-uppercase fw-bold">Quality & Traceability</span>
        <h1 class="display-5 fw-bold text-white mb-2">Product Identification & Traceability System</h1>
        <p class="lead text-light mb-0 mx-auto" style="max-width:700px;">A clear identification system ensures that every manufactured bearing can be uniquely traced back to its raw material batches, vulcanization press records, and quality test reports.</p>
    </div>
</div>

<!-- Identification Content -->
<section class="py-5" style="background:#fff;">
    <div class="container py-4">
        
        <div class="row g-5 align-items-center mb-5 pb-4 border-bottom">
            <div class="col-lg-6">
                <span class="badge bg-primary-subtle text-primary px-3 py-2 mb-2 fw-bold">TRACEABILITY PROTOCOL</span>
                <h2 class="fw-bold text-dark mb-3">Permanent Identification & Field Verification</h2>
                <p class="text-secondary" style="line-height:1.8;">
                    Each elastomeric bearing manufactured by <strong>Polymer Products</strong> carries an indelible identification marking on its outer side surface. This allows site engineers, quality auditors, and bridge maintenance inspectors to instantly verify bearing specifications, design loads, and origin.
                </p>
                
                <div class="p-4 bg-light rounded-4 border">
                    <h5 class="fw-bold text-dark mb-3"><i class="fa-solid fa-stamp text-primary me-2"></i>Standard Marking Format</h5>
                    <div class="p-3 bg-white rounded border font-monospace text-dark mb-3" style="font-size:15px; border-left: 4px solid #0b57d0 !important;">
                        <strong>PP / [LENGTH] x [WIDTH] x [THICKNESS] / [LOT NO.] / [MM-YY] / [IRC:83 / RDSO]</strong>
                    </div>
                    <ul class="list-unstyled small text-secondary mb-0" style="line-height:1.9;">
                        <li><i class="fa-solid fa-check text-primary me-2"></i><strong>PP:</strong> Manufacturer Code (Polymer Products)</li>
                        <li><i class="fa-solid fa-check text-primary me-2"></i><strong>Dimensions:</strong> Overall Plan Dimensions & Thickness (e.g., 300x400x52 mm)</li>
                        <li><i class="fa-solid fa-check text-primary me-2"></i><strong>Lot Number:</strong> Unique production and compound batch identifier</li>
                        <li><i class="fa-solid fa-check text-primary me-2"></i><strong>Date of Manufacture:</strong> Month and Year of vulcanization</li>
                        <li><i class="fa-solid fa-check text-primary me-2"></i><strong>Applicable Standard:</strong> IRC:83 Part II or RDSO compliant marking</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-4 bg-light rounded-4 border shadow-sm">
                    <h5 class="fw-bold text-dark mb-3"><i class="fa-solid fa-tag text-primary me-2"></i>Inspection Verification Tag</h5>
                    <div class="card p-3 bg-white border rounded-3 mb-3">
                        <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
                            <span class="fw-bold text-primary">POLYMER PRODUCTS (NASHIK)</span>
                            <span class="badge bg-success">QC PASSED</span>
                        </div>
                        <div class="small text-muted">
                            <p class="mb-1"><strong>Client:</strong> NHAI / Indian Railways / Metro</p>
                            <p class="mb-1"><strong>Project Name:</strong> Bridge / Flyover Structure</p>
                            <p class="mb-1"><strong>Bearing Type:</strong> Laminated Elastomeric (NR/CR)</p>
                            <p class="mb-1"><strong>Proof Load Tested:</strong> Yes (1.5 x Design Load)</p>
                            <p class="mb-0"><strong>Inspector Sign:</strong> Authorized QA/QC Stamp</p>
                        </div>
                    </div>
                    <small class="text-muted">A weather-resistant metallic or synthetic tag is affixed to every pallet dispatch.</small>
                </div>
            </div>
        </div>

        <!-- Identification Flow Chart Sequence -->
        <div class="section-title text-center mb-5">
            <span class="badge bg-primary text-white px-3 py-2 mb-2 text-uppercase fw-bold">Process Architecture</span>
            <h2 class="fw-bold text-dark">Product Identification Flow Chart</h2>
            <p class="text-muted mx-auto" style="max-width:650px;">From raw elastomer batching to site installation inspection documentation.</p>
        </div>

        <div class="row g-4 text-center">
            <div class="col-md-3">
                <div class="p-4 bg-light rounded-4 border h-100">
                    <div class="d-inline-flex p-3 bg-primary text-white rounded-circle mb-3">
                        <i class="fa-solid fa-barcode fa-2x"></i>
                    </div>
                    <h6 class="fw-bold text-dark">1. Batch Inwarding</h6>
                    <p class="small text-muted mb-0">Raw elastomer & steel coils assigned unique internal material batch codes upon inward testing.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-4 bg-light rounded-4 border h-100">
                    <div class="d-inline-flex p-3 bg-primary text-white rounded-circle mb-3">
                        <i class="fa-solid fa-gears fa-2x"></i>
                    </div>
                    <h6 class="fw-bold text-dark">2. Production Lot ID</h6>
                    <p class="small text-muted mb-0">Each mould curing run logged with hydraulic press operator, time, temperature, and lot number.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-4 bg-light rounded-4 border h-100">
                    <div class="d-inline-flex p-3 bg-primary text-white rounded-circle mb-3">
                        <i class="fa-solid fa-stamp fa-2x"></i>
                    </div>
                    <h6 class="fw-bold text-dark">3. Side Marking</h6>
                    <p class="small text-muted mb-0">Indelible marking permanently stamped onto the side protective rubber layer of each bearing.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-4 bg-light rounded-4 border h-100">
                    <div class="d-inline-flex p-3 bg-primary text-white rounded-circle mb-3">
                        <i class="fa-solid fa-file-circle-check fa-2x"></i>
                    </div>
                    <h6 class="fw-bold text-dark">4. Test Certificate (MTC)</h6>
                    <p class="small text-muted mb-0">Manufacturer Test Certificate generated correlating physical test values with the bearing lot numbers.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include './partials/footer.php' ?>
<?php include './partials/script.php' ?>
</body>
</html>
