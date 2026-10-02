<?php 
$page_title = "Product Identification & Traceability System - Polymer Products";
$meta_description = "Traceability protocols, indelible lot marking format, inspection tags, and MTC documentation for elastomeric bridge bearings.";
include_once 'partials/header.php'; 
?>

<style>
.ident-hero-badge {
    background: var(--theme-subtle);
    border: 1px solid var(--theme-primary);
    color: var(--theme-lighter);
    font-size: 13px;
    letter-spacing: 1px;
}
.trace-flow-card {
    transition: all 0.35s ease;
    border: 1px solid #e2e8f0;
    background: #ffffff;
}
.trace-flow-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 30px rgba(0, 0, 0, 0.08) !important;
    border-color: var(--theme-primary);
}
.marking-box {
    background: #0f172a;
    color: #38bdf8;
    border-left: 4px solid var(--theme-primary) !important;
    font-family: 'Courier New', Courier, monospace;
    letter-spacing: 1px;
}
.qc-tag-card {
    border: 2px dashed #94a3b8;
    background: #f8fafc;
}
</style>

<!-- ============================================================
     1. Modern Hero Banner
     ============================================================ -->
<section class="ht-about-hero position-relative d-flex align-items-center"
    style="background: linear-gradient(135deg, rgba(9, 20, 36, 0.88) 0%, rgba(14, 34, 61, 0.65) 50%, rgba(6, 13, 24, 0.65) 100%), url('assets/img/img/banner/birdge-4.webp') center center / cover no-repeat; padding-top: 175px; padding-bottom: 75px; margin-top: -160px; min-height: 440px;">
    
    <div class="container-fluid px-3 px-lg-5 position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-8 wow fadeInLeft" data-wow-delay=".2s">
                <span class="badge px-3 py-2 mb-3 rounded-pill text-uppercase ident-hero-badge">
                    <i class="fa-solid fa-stamp me-2"></i>Full Field Traceability
                </span>
                <h1 class="text-white fw-bold mb-3"
                    style="font-family: 'Oswald', 'Saira-Medium', sans-serif; font-size: clamp(32px, 4.5vw, 50px); letter-spacing: -0.5px; line-height: 1.2;">
                    Product Identification <span style="color: var(--theme-light);">&amp; Traceability System</span>
                </h1>
                <p class="text-light mb-4" style="font-size: 16px; line-height: 1.8; max-width: 740px; color: #cbd5e1 !important;">
                    A robust identification system ensures that every bearing can be uniquely traced back to its raw material batches, vulcanization press records, and quality test reports.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#marking-standard" class="btn btn-primary rounded-pill px-4 py-2 fw-bold text-uppercase" style="background:var(--theme-primary); border-color:var(--theme-primary); font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-barcode me-2"></i>Marking Format
                    </a>
                    <a href="#traceability-flow" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-diagram-project me-2"></i>4-Stage Flowchart
                    </a>
                </div>
            </div>

           
        </div>
    </div>
</section>

<!-- ============================================================
     2. Marking Protocol & Inspection Tag Mockup
     ============================================================ -->
<section class="py-5" id="marking-standard" style="background:#ffffff;">
    <div class="container py-4">
        
        <div class="row g-5 align-items-center mb-5 pb-4 border-bottom">
            <div class="col-lg-6">
                <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight:700; font-size:12px; letter-spacing:1px;">
                    TRACEABILITY PROTOCOL
                </span>
                <h2 class="fw-bold text-dark mb-3" style="font-family:'Oswald', sans-serif; font-size:30px;">Permanent Identification &amp; Field Verification</h2>
                <p class="text-secondary" style="line-height:1.8; font-size:15px;">
                    Each elastomeric bearing manufactured by <strong>Polymer Products</strong> carries an indelible identification marking on its outer side surface. This allows site engineers, quality auditors, and bridge maintenance inspectors to instantly verify bearing specifications, design loads, and origin.
                </p>
                
                <div class="p-4 bg-light rounded-4 border shadow-sm mt-4">
                    <h5 class="fw-bold text-dark mb-3" style="font-size:17px;"><i class="fa-solid fa-stamp text-primary me-2"></i>Standard Marking Format</h5>
                    <div class="p-3 rounded-3 marking-box mb-3 font-monospace">
                        <strong class="d-block" style="font-size:15px;">PP / [LENGTH] x [WIDTH] x [THICKNESS] / [LOT NO.] / [MM-YY] / [IRC:83 / RDSO]</strong>
                    </div>
                    <ul class="list-unstyled small text-secondary mb-0" style="line-height:2.0;">
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>PP:</strong> Manufacturer Code (Polymer Products)</li>
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>Dimensions:</strong> Overall Plan Dimensions &amp; Thickness (e.g., 300x400x52 mm)</li>
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>Lot Number:</strong> Unique production and compound batch identifier</li>
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>Date of Manufacture:</strong> Month and Year of vulcanization</li>
                        <li><i class="fa-solid fa-circle-check text-primary me-2"></i><strong>Applicable Standard:</strong> IRC:83 Part II or RDSO compliant marking</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="p-4 bg-light rounded-4 border shadow-sm">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-bold text-dark mb-0" style="font-size:17px;"><i class="fa-solid fa-tag text-primary me-2"></i>Inspection Verification Tag</h5>
                        <span class="badge bg-success px-3 py-1 rounded-pill">QC PASSED</span>
                    </div>
                    <div class="card p-3 bg-white border rounded-3 mb-3 qc-tag-card">
                        <div class="d-flex justify-content-between border-bottom pb-2 mb-3">
                            <span class="fw-bold text-primary" style="letter-spacing:0.5px;">POLYMER PRODUCTS (NASHIK)</span>
                            <span class="badge bg-primary text-white">ISO 9001:2027</span>
                        </div>
                        <div class="small text-muted" style="line-height:1.8;">
                            <p class="mb-1"><strong>Client / Authority:</strong> NHAI / Indian Railways / State PWD</p>
                            <p class="mb-1"><strong>Project Name:</strong> National Highway Bridge / Metro Flyover</p>
                            <p class="mb-1"><strong>Bearing Type:</strong> Laminated Elastomeric (NR / Chloroprene CR)</p>
                            <p class="mb-1"><strong>Proof Load Tested:</strong> Yes (1.5 &times; Design Vertical Load Verified)</p>
                            <p class="mb-0"><strong>Inspector Sign / Stamp:</strong> Authorized Plant QA/QC Verification</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center text-muted small">
                        <i class="fa-solid fa-circle-info text-primary me-2"></i>
                        A weather-resistant metallic or synthetic tag is affixed to every pallet dispatch and consignment pouch.
                    </div>
                </div>

                <!-- Real Image of Marking in Plant -->
                <div class="mt-4 p-3 bg-light rounded-4 border">
                    <img src="assets/pp_data/Machine_Images/IMG20260913163947.jpg" alt="Indelible Side Marking" class="img-fluid rounded-3 w-100" style="height:220px; object-fit:cover;">
                    <p class="text-center small text-muted mt-2 mb-0">Plant operator applying indelible hot-embossed lot markings on cured bearings</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     3. 4-Stage Product Identification Flow Chart
     ============================================================ -->
<section class="py-5" id="traceability-flow" style="background:#f8fafc; border-bottom:1px solid #e2e8f0;">
    <div class="container py-4">
        
        <div class="section-title text-center mb-5">
            <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight:700; font-size:12px; letter-spacing:1px;">
                Process Architecture
            </span>
            <h2 class="fw-bold text-dark" style="font-family:'Oswald', sans-serif; font-size:32px; letter-spacing:0.5px;">
                Product Identification Flow Chart
            </h2>
            <p class="text-muted mx-auto" style="max-width:650px; font-size:15px;">
                From raw elastomer batching to site installation inspection documentation.
            </p>
        </div>

        <div class="row g-4 text-center">
            <div class="col-md-3">
                <div class="p-4 rounded-4 shadow-sm h-100 trace-flow-card">
                    <div class="d-inline-flex p-3 text-white rounded-circle mb-3" style="background: linear-gradient(135deg, var(--theme-primary) 0%, var(--theme-hover) 100%); box-shadow: 0 4px 12px var(--theme-glow);">
                        <i class="fa-solid fa-barcode fa-2x"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-2" style="font-size:16px;">1. Batch Inwarding</h6>
                    <p class="small text-muted mb-0" style="line-height:1.6;">
                        Raw elastomer &amp; steel coils assigned unique internal material batch codes upon inward testing.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-4 rounded-4 shadow-sm h-100 trace-flow-card">
                    <div class="d-inline-flex p-3 text-white rounded-circle mb-3" style="background: linear-gradient(135deg, var(--theme-primary) 0%, var(--theme-hover) 100%); box-shadow: 0 4px 12px var(--theme-glow);">
                        <i class="fa-solid fa-gears fa-2x"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-2" style="font-size:16px;">2. Production Lot ID</h6>
                    <p class="small text-muted mb-0" style="line-height:1.6;">
                        Each mould curing run logged with hydraulic press operator, time, temperature, and lot number.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-4 rounded-4 shadow-sm h-100 trace-flow-card">
                    <div class="d-inline-flex p-3 text-white rounded-circle mb-3" style="background: linear-gradient(135deg, var(--theme-primary) 0%, var(--theme-hover) 100%); box-shadow: 0 4px 12px var(--theme-glow);">
                        <i class="fa-solid fa-stamp fa-2x"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-2" style="font-size:16px;">3. Side Marking</h6>
                    <p class="small text-muted mb-0" style="line-height:1.6;">
                        Indelible marking permanently stamped onto the side protective rubber layer of each bearing.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-4 rounded-4 shadow-sm h-100 trace-flow-card">
                    <div class="d-inline-flex p-3 text-white rounded-circle mb-3" style="background: linear-gradient(135deg, var(--theme-primary) 0%, var(--theme-hover) 100%); box-shadow: 0 4px 12px var(--theme-glow);">
                        <i class="fa-solid fa-file-circle-check fa-2x"></i>
                    </div>
                    <h6 class="fw-bold text-dark mb-2" style="font-size:16px;">4. Test Certificate (MTC)</h6>
                    <p class="small text-muted mb-0" style="line-height:1.6;">
                        Manufacturer Test Certificate generated correlating physical test values with the bearing lot numbers.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include_once 'partials/footer.php'; ?>
