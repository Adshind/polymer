<?php 
$page_title = "Statutory Registrations, Quality Certifications & Approvals - Polymer Products";
$meta_description = "Official statutory certificates, GST, PAN, UDYAM MSME, Factory License, MPCB Pollution Consent, ISO 9001:2027, RDSO Approval, and NHAI Client Approval Letters.";
include_once 'partials/header.php'; 

// Array of all Statutory & Quality Certificates
$certifications = [
    // 1. Statutory & Industrial Registrations
    [
        "num" => "01",
        "title" => "GST Registration Certificate",
        "cat" => "statutory",
        "cat_label" => "Statutory Tax Registration",
        "desc" => "Registered manufacturing enterprise under Government of India Goods & Services Tax (GST) Act with verified GSTIN.",
        "icon" => "fa-file-invoice-dollar",
        "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/GST_CERTIFICATE-1.pdf",
        "type" => "pdf",
        "badge" => "Govt. of India",
        "color" => "#0284c7"
    ],
    [
        "num" => "02",
        "title" => "PAN & Tax Registration Record",
        "cat" => "statutory",
        "cat_label" => "Income Tax Department",
        "desc" => "Permanent Account Number statutory tax registration issued by Income Tax Department, Government of India.",
        "icon" => "fa-id-card",
        "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/PP DETAILS/MPP NEW PAN.pdf",
        "type" => "pdf",
        "badge" => "Statutory Record",
        "color" => "#0284c7"
    ],
    [
        "num" => "03",
        "title" => "UDYAM MSME Enterprise Certificate",
        "cat" => "statutory",
        "cat_label" => "Ministry of MSME",
        "desc" => "Official Udyam Registration accredited under Ministry of Micro, Small and Medium Enterprises, Government of India.",
        "icon" => "fa-building-flag",
        "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/UDAYAM CERTIFICATE.pdf",
        "type" => "pdf",
        "badge" => "MSME Certified",
        "color" => "#0284c7"
    ],
    [
        "num" => "04",
        "title" => "Directorate of Safety Factory Plan",
        "cat" => "factory",
        "cat_label" => "Industrial Safety & Health",
        "desc" => "Directorate of Industrial Safety & Health approved factory layout, machinery setup & manufacturing plant safety compliance.",
        "icon" => "fa-industry",
        "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/PP DETAILS/PLAN APPROVAL CERTIFICATE.pdf",
        "type" => "pdf",
        "badge" => "DISH Approved",
        "color" => "#0d9488"
    ],
    [
        "num" => "05",
        "title" => "Plant Model & Infrastructure Plan",
        "cat" => "factory",
        "cat_label" => "Manufacturing Architecture",
        "desc" => "Detailed civil and structural model layout of Nashik manufacturing floor, press bays, laboratory, and dispatch zones.",
        "icon" => "fa-compass-drafting",
        "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/PP DETAILS/POLYMER MODEL PLAN.pdf",
        "type" => "pdf",
        "badge" => "Plant Layout",
        "color" => "#0d9488"
    ],
    [
        "num" => "06",
        "title" => "Factory Building Stability Certificate",
        "cat" => "factory",
        "cat_label" => "Structural Safety",
        "desc" => "Chartered Structural Engineer certified factory building structural stability for heavy hydraulic vulcanizing press lines.",
        "icon" => "fa-shield-halved",
        "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/PP DETAILS/STABILITY CERTIFICATE.pdf",
        "type" => "pdf",
        "badge" => "Stability Certified",
        "color" => "#0d9488"
    ],
    [
        "num" => "07",
        "title" => "Pollution Control Consent (MPCB)",
        "cat" => "factory",
        "cat_label" => "Environmental Board",
        "desc" => "Maharashtra Pollution Control Board (MPCB) environmental consent & green manufacturing standards compliance.",
        "icon" => "fa-leaf",
        "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/PP DETAILS/MPCB POLLUTION CERTIFICATE.pdf",
        "type" => "pdf",
        "badge" => "MPCB Approved",
        "color" => "#16a34a"
    ],
    [
        "num" => "08",
        "title" => "ISO 9001:2027 Quality Certificate",
        "cat" => "quality",
        "cat_label" => "Quality Management System",
        "desc" => "International Quality Management System certification for precision manufacture and testing of elastomeric bridge bearings.",
        "icon" => "fa-award",
        "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/ISO CERTIFICATE 2027.png",
        "type" => "image",
        "badge" => "ISO 9001:2027",
        "color" => "#ea580c"
    ],
    [
        "num" => "09",
        "title" => "RDSO Indian Railways Technical Approval",
        "cat" => "quality",
        "cat_label" => "Indian Railways Standards",
        "desc" => "Research Designs and Standards Organisation (RDSO) technical approval conforming to RDSO BS-131 standard for railway bridges.",
        "icon" => "fa-train",
        "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/NEW_RDSO.pdf",
        "type" => "pdf",
        "badge" => "RDSO BS-131",
        "color" => "#dc2626"
    ],
    [
        "num" => "10",
        "title" => "Company Credential & NHAI QAP",
        "cat" => "quality",
        "cat_label" => "Highway & Bridge QAP",
        "desc" => "Comprehensive Quality Assurance Plan (QAP) conforming to IRC:83 (Part II) approved by NHAI, Metro, and Major Infrastructure clients.",
        "icon" => "fa-file-shield",
        "doc" => "assets/pp_data/Page 01/Credential_Polymer_Products.pdf",
        "type" => "pdf",
        "badge" => "IRC:83 (Pt II)",
        "color" => "#2563eb"
    ],
    [
        "num" => "11",
        "title" => "Dynamic Prestress Sister Concern Letter",
        "cat" => "quality",
        "cat_label" => "Corporate Synergy",
        "desc" => "Official corporate relationship and manufacturing division credential letter backed by Dynamic Prestress (I) Pvt. Ltd.",
        "icon" => "fa-handshake",
        "doc" => "assets/pp_data/Page 02/sister cons latter - 2026.pdf",
        "type" => "pdf",
        "badge" => "Group Credential",
        "color" => "#4f46e5"
    ]
];

// Client Approval Letters
$client_approvals = [
    [
        "client" => "Ashoka Buildcon Ltd.",
        "project" => "4/6 Lane National Highway Bridge Expansion & ROB Packages",
        "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/NH APPROVED LETTERS/LETTER/ashoka-3.pdf",
        "icon" => "fa-road",
        "badge" => "NHAI EPC Project"
    ],
    [
        "client" => "GHV (India) Pvt. Ltd.",
        "project" => "National Highway Expressway Bridge Packages with Consultant QC",
        "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/NH APPROVED LETTERS/LETTERS/GHV  3.10.23.pdf",
        "icon" => "fa-bridge-water",
        "badge" => "Expressway Package"
    ],
    [
        "client" => "HG Infra Engineering Ltd.",
        "project" => "Major Expressways, Elevated Corridors & River Bridge Bearing Supplies",
        "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/NH APPROVED LETTERS/LETTERS/HG INFRA - AP.pdf",
        "icon" => "fa-road",
        "badge" => "Highway Viaduct"
    ],
    [
        "client" => "Mumbai Metro Line 4 (MML4)",
        "project" => "Elevated Transit Viaduct Pier Bearings & Station Corridor Vibration Pads",
        "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/NH APPROVED LETTERS/LETTERS/MILAN MML4-MUMBAI METRO.pdf",
        "icon" => "fa-train-subway",
        "badge" => "Metro Rail Transit"
    ],
    [
        "client" => "Rajnandini Infrastructure",
        "project" => "State Highway Bridges, River Crossings & PWD Flyover Contracts",
        "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/NH APPROVED LETTERS/LETTERS/RAJNANDINI.pdf",
        "icon" => "fa-bridge",
        "badge" => "PWD Highway"
    ],
    [
        "client" => "Shivalaya Construction Co.",
        "project" => "Highway Grade Separators, Vehicular Underpasses (VUP) & Major Flyovers",
        "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/NH APPROVED LETTERS/LETTERS/SHIVALAYA LETTER.pdf",
        "icon" => "fa-city",
        "badge" => "Flyover Corridor"
    ],
    [
        "client" => "Bharat Construction",
        "project" => "Highway Bridges, River Overpass Superstructures & Bearing Approvals",
        "doc" => "assets/pp_data/Page 01/POLYMER DETAILS/NH APPROVED LETTERS/BHARAT CONST.pdf",
        "icon" => "fa-building",
        "badge" => "Bridge Infrastructure"
    ]
];
?>

<style>
.cert-hero-badge {
    background: var(--theme-subtle);
    border: 1px solid var(--theme-primary);
    color: var(--theme-lighter);
    font-size: 13px;
    letter-spacing: 1px;
}
.cert-card {
    transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
    border: 1px solid #e2e8f0;
    background: #ffffff;
    border-radius: 18px;
    overflow: hidden;
}
.cert-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 32px rgba(0, 0, 0, 0.08) !important;
    border-color: var(--theme-primary) !important;
}
.cert-icon-wrap {
    width: 62px;
    height: 62px;
    border-radius: 16px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    transition: transform 0.3s ease;
}
.cert-card:hover .cert-icon-wrap {
    transform: scale(1.1) rotate(5deg);
}
.cert-filter-btn {
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
.cert-filter-btn:hover,
.cert-filter-btn.active {
    background: var(--theme-primary);
    border-color: var(--theme-primary);
    color: #ffffff;
    box-shadow: 0 4px 12px var(--theme-glow);
}
.approval-card {
    border-radius: 16px;
    background: #ffffff;
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
}
.approval-card:hover {
    transform: translateY(-4px);
    border-color: var(--theme-primary) !important;
    box-shadow: 0 12px 24px rgba(0,0,0,0.06);
}
</style>

<!-- ============================================================
     1. Modern Hero Banner
     ============================================================ -->
<section class="ht-about-hero position-relative d-flex align-items-center"
    style="background: linear-gradient(135deg, rgba(9, 20, 36, 0.88) 0%, rgba(14, 34, 61, 0.65) 50%, rgba(6, 13, 24, 0.65) 100%), url('assets/img/img/banner/birdge-10.webp') center center / cover no-repeat; padding-top: 175px; padding-bottom: 75px; margin-top: -160px; min-height: 440px;">
    
    <div class="container-fluid px-3 px-lg-5 position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-8 wow fadeInLeft" data-wow-delay=".2s">
                <span class="badge px-3 py-2 mb-3 rounded-pill text-uppercase cert-hero-badge">
                    <i class="fa-solid fa-shield-halved me-2"></i>Statutory Compliance &amp; Quality Approvals
                </span>
                <h1 class="text-white fw-bold mb-3"
                    style="font-family: 'Saira-Medium', sans-serif; font-size: clamp(32px, 4.5vw, 50px); letter-spacing: -0.5px; line-height: 1.2;">
                    Statutory Registrations <span style="color: var(--theme-light);">&amp; Technical Certifications</span>
                </h1>
                <p class="text-light mb-4" style="font-size: 16px; line-height: 1.8; max-width: 740px; color: #cbd5e1 !important;">
                    Our comprehensive statutory registrations, industrial licenses, ISO 9001:2027 accreditation, RDSO railway approval, and certified client letters for national infrastructure bidding.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#statutory-certs" class="btn btn-primary rounded-pill px-4 py-2 fw-bold text-uppercase" style="background:var(--theme-primary); border-color:var(--theme-primary); font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-certificate me-2"></i>Statutory Certificates
                    </a>
                    <a href="#client-approvals" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-handshake me-2"></i>NHAI Client Approvals
                    </a>
                </div>
            </div>

          
        </div>
    </div>
</section>

<!-- ============================================================
     2. Statutory & Quality Certifications Grid
     ============================================================ -->
<section class="py-5" id="statutory-certs" style="background:#ffffff;">
    <div class="container-fluid px-3 px-lg-5 py-4">
        
        <div class="section-title text-center mb-4">
            <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight:700; font-size:12px; letter-spacing:1px;">
                Regulatory Hierarchy
            </span>
            <h2 class="fw-bold text-dark" style="font-family:'Saira-Medium', sans-serif; font-size:32px; letter-spacing:0.5px;">
                Certifications, Registrations &amp; Approvals Sequence
            </h2>
            <p class="text-muted mx-auto" style="max-width:750px; font-size:15px;">
                Click any certificate to view or verify the official PDF/Image document directly in high resolution.
            </p>
        </div>

        <!-- Filter Tabs -->
        <div class="d-flex flex-wrap justify-content-center gap-2 mb-5" id="cert-filters">
            <button class="cert-filter-btn active" data-filter="all">All Certificates (11)</button>
            <button class="cert-filter-btn" data-filter="statutory">Statutory &amp; Tax</button>
            <button class="cert-filter-btn" data-filter="factory">Factory &amp; Safety</button>
            <button class="cert-filter-btn" data-filter="quality">Quality &amp; Standards</button>
        </div>

        <!-- Certificate Cards -->
        <div class="row g-4" id="cert-grid">
            <?php foreach ($certifications as $cert): ?>
            <div class="col-xl-3 col-lg-4 col-md-6 cert-item" data-category="<?php echo $cert['cat']; ?>">
                <div class="cert-card p-4 shadow-sm h-100 d-flex flex-column justify-content-between position-relative">
                    <span class="position-absolute top-0 end-0 m-3 badge rounded-pill fw-bold" style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 11px;">
                        #<?php echo $cert['num']; ?>
                    </span>

                    <div>
                        <div class="cert-icon-wrap mb-3" style="background: var(--theme-subtle); color: var(--theme-primary);">
                            <i class="fa-solid <?php echo $cert['icon']; ?>"></i>
                        </div>
                        <span class="badge bg-light text-muted border px-2 py-1 small mb-2 d-inline-block" style="font-size: 10.5px;">
                            <?php echo $cert['cat_label']; ?>
                        </span>
                        <h5 class="fw-bold text-dark mb-2" style="font-family:'Saira-Medium', sans-serif; font-size: 17px; line-height: 1.3;">
                            <?php echo htmlspecialchars($cert['title']); ?>
                        </h5>
                        <p class="small text-muted mb-4" style="line-height: 1.6; font-size: 12.5px;">
                            <?php echo htmlspecialchars($cert['desc']); ?>
                        </p>
                    </div>

                    <div class="pt-3 border-top d-flex align-items-center justify-content-between">
                        <span class="badge bg-secondary-subtle text-secondary small" style="font-size: 10.5px;">
                            <?php echo $cert['badge']; ?>
                        </span>
                        <a href="<?php echo $cert['doc']; ?>" class="btn btn-outline-primary btn-sm rounded-pill fw-bold px-3 open-cert-modal"
                            data-doc-url="<?php echo $cert['doc']; ?>"
                            data-doc-title="<?php echo htmlspecialchars($cert['title']); ?>"
                            data-doc-type="<?php echo $cert['type']; ?>"
                            style="font-size: 12px;">
                            <i class="fa-solid <?php echo ($cert['type'] === 'image' ? 'fa-image' : 'fa-file-pdf'); ?> me-1"></i> View Document
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- ============================================================
     3. NHAI & Client Approval Letters
     ============================================================ -->
<section class="py-5" id="client-approvals" style="background:#f8fafc; border-top:1px solid #e2e8f0; border-bottom:1px solid #e2e8f0;">
    <div class="container-fluid px-3 px-lg-5 py-4">
        
        <div class="section-title text-center mb-5">
            <span class="badge px-3 py-2 mb-2 rounded-pill text-uppercase" style="background: var(--theme-subtle); color: var(--theme-primary); font-weight:700; font-size:12px; letter-spacing:1px;">
                Proven Credentials
            </span>
            <h2 class="fw-bold text-dark" style="font-family:'Saira-Medium', sans-serif; font-size:32px; letter-spacing:0.5px;">
                NHAI &amp; Major Project Client Approval Letters
            </h2>
            <p class="text-muted mx-auto" style="max-width:700px; font-size:15px;">
                Verified acceptance and approval letters issued by leading EPC infrastructure contractors, Metro authorities, and National Highway project engineers.
            </p>
        </div>

        <div class="row g-3">
            <?php foreach ($client_approvals as $app): ?>
            <div class="col-lg-4 col-md-6">
                <div class="p-4 approval-card shadow-sm h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="badge bg-primary-subtle text-primary rounded-pill px-2.5 py-1 small fw-semibold" style="font-size: 11px;">
                                <i class="fa-solid <?php echo $app['icon']; ?> me-1"></i> <?php echo $app['badge']; ?>
                            </span>
                            <i class="fa-solid fa-circle-check text-success"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-1" style="font-family:'Saira-Medium', sans-serif; font-size: 16.5px;">
                            <?php echo htmlspecialchars($app['client']); ?>
                        </h5>
                        <p class="small text-muted mb-3" style="line-height: 1.6; font-size: 12.5px;">
                            <?php echo htmlspecialchars($app['project']); ?>
                        </p>
                    </div>
                    <div class="pt-2 border-top">
                        <a href="<?php echo $app['doc']; ?>" class="btn btn-outline-primary btn-sm rounded-pill w-100 fw-bold open-cert-modal"
                            data-doc-url="<?php echo $app['doc']; ?>"
                            data-doc-title="<?php echo htmlspecialchars($app['client']) . ' - Approval Letter'; ?>"
                            data-doc-type="pdf"
                            style="font-size: 12px;">
                            <i class="fa-solid fa-file-pdf me-1"></i> View Approval Letter
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- ============================================================
     4. Certificate Modal Viewer
     ============================================================ -->
<div class="modal fade" id="certificateModal" tabindex="-1" aria-labelledby="certificateModalLabel" aria-hidden="true" style="z-index: 10500;">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="modal-header text-white px-4 py-3" style="background: var(--theme-primary);">
                <div class="d-flex align-items-center">
                    <div class="modal-icon-wrap me-3 p-2 bg-white bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                        <i id="certModalIcon" class="fa-solid fa-file-pdf text-white fs-5"></i>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold text-white mb-0" id="certificateModalLabel">Document Viewer</h5>
                        <small id="certModalSub" class="text-white-50" style="font-size: 12px;">Verified Statutory &amp; Quality Credential</small>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <button type="button" class="btn-close btn-close-white ms-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>

            <div class="modal-body p-0 position-relative" style="background: #0f172a; min-height: 520px;">
                <div id="certModalLoader" class="position-absolute top-50 start-50 translate-middle text-center py-5">
                    <div class="spinner-border text-primary mb-2" role="status" style="width: 3rem; height: 3rem;">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p class="text-white-50 small mb-0">Loading document preview...</p>
                </div>

                <iframe id="certModalIframe" src="" style="width: 100%; height: 75vh; border: none; display: none; background: #fff;" allowfullscreen></iframe>

                <div id="certModalImgWrap" class="p-2 p-md-3" style="display: none; height: 75vh; min-height: 520px; overflow-y: auto; background: #0f172a; align-items: center; justify-content: center;">
                    <img id="certModalImage" src="" alt="Certificate Image" style="max-height: 72vh; max-width: 95%; width: auto; height: auto; object-fit: contain; box-shadow: 0 10px 30px rgba(0,0,0,0.5); border-radius: 8px; background: #fff; margin: auto; display: block;">
                </div>
            </div>

            <div class="modal-footer bg-white px-4 py-3 border-top d-flex justify-content-between align-items-center">
                <span class="text-muted small">
                    <i class="fa-solid fa-shield-check text-success me-1"></i> Official Certified Document &bull; Polymer Products
                </span>
                <button type="button" class="btn btn-dark btn-sm rounded-pill px-4 fw-bold" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Page Specific JS for Filters & Modal -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    // 1. Filter tabs
    const filterButtons = document.querySelectorAll('.cert-filter-btn');
    const certItems = document.querySelectorAll('.cert-item');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            filterButtons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const filterValue = this.getAttribute('data-filter');

            certItems.forEach(item => {
                if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // 2. Modal Handler
    const certModalEl = document.getElementById('certificateModal');
    if (!certModalEl) return;

    const modalTitle = document.getElementById('certificateModalLabel');
    const modalIcon = document.getElementById('certModalIcon');
    const modalIframe = document.getElementById('certModalIframe');
    const modalImgWrap = document.getElementById('certModalImgWrap');
    const modalImage = document.getElementById('certModalImage');
    const modalLoader = document.getElementById('certModalLoader');

    function getModalInstance() {
        if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
            return bootstrap.Modal.getOrCreateInstance(certModalEl);
        }
        return null;
    }

    function unlockPageScroll() {
        modalIframe.src = '';
        modalImage.src = '';
        modalLoader.style.display = 'none';
        modalIframe.style.display = 'none';
        modalImgWrap.style.display = 'none';

        // Forcibly clear body & html lock styles
        document.body.classList.remove('modal-open');
        document.body.style.removeProperty('overflow');
        document.body.style.removeProperty('overflow-y');
        document.body.style.removeProperty('padding-right');
        document.documentElement.style.removeProperty('overflow');
        document.documentElement.style.removeProperty('overflow-y');

        // Remove any orphaned backdrops
        document.querySelectorAll('.modal-backdrop').forEach(function (backdrop) {
            backdrop.remove();
        });
    }

    document.querySelectorAll('.open-cert-modal').forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();

            const url = this.getAttribute('data-doc-url') || this.getAttribute('href');
            const title = this.getAttribute('data-doc-title') || 'Certificate & Approval Document';
            const type = this.getAttribute('data-doc-type') || (url.toLowerCase().match(/\.(png|jpg|jpeg|webp)$/) ? 'image' : 'pdf');

            if (!url) return;

            modalTitle.textContent = title;
            modalLoader.style.display = 'block';
            modalIframe.style.display = 'none';
            modalImgWrap.style.display = 'none';
            modalIframe.src = '';
            modalImage.src = '';

            if (type === 'image') {
                modalIcon.className = 'fa-solid fa-image text-white fs-5';
                modalImage.onload = function () {
                    modalLoader.style.display = 'none';
                    modalImgWrap.style.display = 'flex';
                };
                modalImage.onerror = function () {
                    modalLoader.style.display = 'none';
                    modalImgWrap.innerHTML = '<div class="p-4 text-center text-white"><i class="fa-solid fa-triangle-exclamation fa-2x mb-2 text-warning"></i><p>Unable to preview image directly.</p></div>';
                    modalImgWrap.style.display = 'flex';
                };
                modalImage.src = url;
            } else {
                modalIcon.className = 'fa-solid fa-file-pdf text-white fs-5';
                const cleanUrl = url.split('#')[0];
                const pdfViewerUrl = cleanUrl + '#toolbar=0&navpanes=0&scrollbar=0';

                modalIframe.onload = function () {
                    modalLoader.style.display = 'none';
                    modalIframe.style.display = 'block';
                };
                modalIframe.src = pdfViewerUrl;
                setTimeout(function () {
                    modalLoader.style.display = 'none';
                    modalIframe.style.display = 'block';
                }, 600);
            }

            const bsModal = getModalInstance();
            if (bsModal) {
                bsModal.show();
            } else if (typeof $ !== 'undefined') {
                $(certModalEl).modal('show');
            }
        });
    });

    // Close buttons directly
    certModalEl.querySelectorAll('[data-bs-dismiss="modal"], [data-dismiss="modal"], .btn-close').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const bsModal = getModalInstance();
            if (bsModal) {
                bsModal.hide();
            } else if (typeof $ !== 'undefined') {
                $(certModalEl).modal('hide');
            }
            setTimeout(unlockPageScroll, 100);
        });
    });

    certModalEl.addEventListener('hidden.bs.modal', unlockPageScroll);
    certModalEl.addEventListener('hide.bs.modal', function () {
        setTimeout(unlockPageScroll, 150);
    });
});
</script>

<?php include_once 'partials/footer.php'; ?>
