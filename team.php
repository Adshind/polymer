<?php 
$page_title = "Our Technical Team & Organizational Hierarchy - Polymer Products";
$meta_description = "Meet the technical leadership, polymer scientists, structural design engineers, and quality assurance team at Polymer Products Nashik facility.";
include_once 'partials/header.php'; 
?>

<style>
.team-hero-badge {
    background: var(--theme-subtle);
    border: 1px solid var(--theme-primary);
    color: var(--theme-lighter);
    font-size: 13px;
    letter-spacing: 1px;
}
.team-card-modern {
    background: #ffffff;
    border-radius: 20px;
    border: 1px solid #e2e8f0;
    overflow: hidden;
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
}
.team-card-modern:hover {
    transform: translateY(-8px);
    border-color: var(--theme-primary) !important;
    box-shadow: 0 20px 40px var(--theme-subtle) !important;
}
.team-photo-wrap {
    width: 100%;
    position: relative;
    background: #0f172a;
    overflow: hidden;
}
.team-photo-wrap.large-height {
    height: 290px;
}
.team-photo-wrap.standard-height {
    height: 260px;
}
.team-card-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center 15%;
    transition: transform 0.5s ease;
}
.team-card-modern:hover .team-card-img {
    transform: scale(1.07);
}
.team-photo-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(15, 23, 42, 0.88) 0%, rgba(15, 23, 42, 0.2) 55%, transparent 100%);
    pointer-events: none;
}
.team-role-tag {
    position: absolute;
    bottom: 14px;
    left: 14px;
    z-index: 2;
}
.team-role-tag .badge {
    background: var(--theme-primary);
    color: #ffffff;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 0.3px;
    box-shadow: 0 4px 14px rgba(0, 0, 0, 0.35);
    border: 1px solid rgba(255, 255, 255, 0.2);
}
.team-badge-icon {
    position: absolute;
    top: 14px;
    right: 14px;
    width: 38px;
    height: 38px;
    background: rgba(255, 255, 255, 0.92);
    color: var(--theme-primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 15px;
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
    z-index: 2;
    backdrop-filter: blur(8px);
    transition: all 0.3s ease;
}
.team-card-modern:hover .team-badge-icon {
    background: var(--theme-primary);
    color: #ffffff;
    transform: scale(1.12) rotate(6deg);
}
.shadow-2xs {
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
    transition: all 0.3s ease;
}
.shadow-2xs:hover {
    border-color: var(--theme-primary) !important;
    transform: translateY(-2px);
    box-shadow: 0 6px 16px var(--theme-subtle);
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
                <span class="badge px-3 py-2 mb-3 rounded-pill text-uppercase team-hero-badge">
                    <i class="fa-solid fa-users-gear me-2"></i>Technical Leadership &amp; Engineering Team
                </span>
                <h1 class="text-white fw-bold mb-3"
                    style="font-family: 'Saira-Medium', sans-serif; font-size: clamp(32px, 4.5vw, 50px); letter-spacing: -0.5px; line-height: 1.2;">
                    Our Technical Team <span style="color: var(--theme-light);">&amp; Organization Hierarchy</span>
                </h1>
                <p class="text-light mb-4" style="font-size: 16px; line-height: 1.8; max-width: 740px; color: #cbd5e1 !important;">
                    Our multidisciplinary team of Polymer Scientists, Rubber Technologists, Structural Engineers, Quality Chemists, and dedicated manufacturing technicians driving technical excellence at our Nashik plant.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#leadership-team" class="btn btn-primary rounded-pill px-4 py-2 fw-bold text-uppercase" style="background:var(--theme-primary); border-color:var(--theme-primary); font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-crown me-2"></i>Executive Leadership
                    </a>
                    <a href="#engineering-team" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-users me-2"></i>Engineering &amp; Lab Team
                    </a>
                    <a href="#org-chart" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold text-uppercase" style="font-size:13px; letter-spacing:0.5px;">
                        <i class="fa-solid fa-sitemap me-2"></i>Org Chart
                    </a>
                </div>
            </div>

             
        </div>
    </div>
</section>

<!-- ============================================================
     2. Organizational Hierarchy Flowchart (Org Tree)
     ============================================================ -->
<section class="py-5" id="org-chart" style="background:#ffffff;">
    <div class="container-fluid px-3 px-lg-5 py-4">
        
        <div class="org-chart-tree-wrapper p-4 p-lg-5 mb-5 rounded-4 border shadow-sm wow fadeInUp" data-wow-delay=".2s"
            style="background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%); border-color: #e2e8f0;">
            <div class="text-center mb-4">
                <span class="badge bg-dark text-white px-3 py-1.5 rounded-pill small fw-bold text-uppercase" style="letter-spacing: 1px;">
                    <i class="fa-solid fa-sitemap me-1.5 text-warning"></i> Hierarchy Flow Diagram
                </span>
                <h3 class="fw-bold text-dark mt-2 mb-0" style="font-family:'Saira-Medium', sans-serif; font-size:26px;">
                    Technical Governance Structure
                </h3>
            </div>

            <!-- Level 1: Proprietor / Executive Head -->
            <div class="d-flex justify-content-center mb-4">
                <div class="org-tree-node primary-node p-3 rounded-4 shadow text-center" style="max-width: 360px; width: 100%; background: var(--theme-primary); color: #fff;">
                    <div class="badge bg-white text-primary rounded-pill px-3 py-1 fw-bold text-uppercase mb-1" style="font-size: 11px; letter-spacing: 0.5px;">
                        Proprietor &bull; Founder
                    </div>
                    <h5 class="fw-bold text-white mb-0" style="font-family: 'Saira-Medium', sans-serif; font-size: 20px;">Maruti Pandurang Prabhu</h5>
                    <small class="text-white-50 d-block" style="font-size: 12px;">B.Sc. L.P.R.I. (London) &bull; 48 Yrs Experience</small>
                </div>
            </div>

            <!-- Connecting Stem -->
            <div class="org-stem-down mx-auto" style="width: 2px; height: 28px; background: var(--theme-primary); margin-top: -15px; margin-bottom: 0;"></div>
            <div class="org-horizontal-branch mx-auto d-none d-md-block" style="width: 60%; height: 2px; background: var(--theme-primary);"></div>

            <!-- Level 2: Core Department Incharges -->
            <div class="row g-3 justify-content-center mt-2 mb-4">
                <!-- Lab Incharge -->
                <div class="col-md-5 col-lg-4">
                    <div class="org-tree-node sub-node p-3 rounded-4 bg-white border shadow-sm text-center h-100">
                        <span class="badge rounded-pill px-2.5 py-1 text-uppercase fw-bold mb-1" style="background: #e0f2fe; color: #0284c7; font-size: 11px;">
                            Lab Incharge
                        </span>
                        <h6 class="fw-bold text-dark mb-0" style="font-size: 16px;">Mrs. Anita Maruti Prabhu</h6>
                        <small class="text-muted d-block" style="font-size: 12px;">M.Sc. (Chemistry) &bull; 39 Yrs Testing Experience</small>
                    </div>
                </div>
                <!-- Production Incharge -->
                <div class="col-md-5 col-lg-4">
                    <div class="org-tree-node sub-node p-3 rounded-4 bg-white border shadow-sm text-center h-100">
                        <span class="badge rounded-pill px-2.5 py-1 text-uppercase fw-bold mb-1" style="background: #fef3c7; color: #b45309; font-size: 11px;">
                            Production Incharge
                        </span>
                        <h6 class="fw-bold text-dark mb-0" style="font-size: 16px;">Chetan Maruti Prabhu</h6>
                        <small class="text-muted d-block" style="font-size: 12px;">B.E. (Mech.) &bull; 16 Yrs Design &amp; Production</small>
                    </div>
                </div>
            </div>

            <!-- Level 3: Department Heads & Functional Managers -->
            <div class="row g-3 justify-content-center pt-2">
                <div class="col-6 col-md-3">
                    <div class="p-2.5 bg-white rounded-3 border text-center shadow-2xs h-100">
                        <small class="fw-bold text-primary d-block text-uppercase" style="font-size: 10.5px;">Asst. General Manager</small>
                        <span class="fw-bold text-dark d-block" style="font-size: 13.5px;">Sunil Kotagi</span>
                        <small class="text-muted" style="font-size: 11px;">B.Com</small>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-2.5 bg-white rounded-3 border text-center shadow-2xs h-100">
                        <small class="fw-bold text-primary d-block text-uppercase" style="font-size: 10.5px;">Dy. Manager Design &amp; Testing</small>
                        <span class="fw-bold text-dark d-block" style="font-size: 13.5px;">Tausifkhan Pathan</span>
                        <small class="text-muted" style="font-size: 11px;">B.E. (Mech.) &bull; 12 Yrs Exp.</small>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-2.5 bg-white rounded-3 border text-center shadow-2xs h-100">
                        <small class="fw-bold text-primary d-block text-uppercase" style="font-size: 10.5px;">R&amp;D Head &amp; Quality Mgr</small>
                        <span class="fw-bold text-dark d-block" style="font-size: 13.5px;">Nitin Pandey</span>
                        <small class="text-muted" style="font-size: 11px;">Rubber Technology</small>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-2.5 bg-white rounded-3 border text-center shadow-2xs h-100">
                        <small class="fw-bold text-primary d-block text-uppercase" style="font-size: 10.5px;">Lab Manager</small>
                        <span class="fw-bold text-dark d-block" style="font-size: 13.5px;">Labhesh Bawiskar</span>
                        <small class="text-muted" style="font-size: 11px;">M.Sc. Industrial Chemistry</small>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     3. Executive Leadership & Department Incharges
     ============================================================ -->
<section class="py-5" id="leadership-team" style="background:#f8fafc; border-top:1px solid #e2e8f0; border-bottom:1px solid #e2e8f0;">
    <div class="container-fluid px-3 px-lg-5 py-4">
        
        <div class="d-flex align-items-center mb-4 pb-2 border-bottom">
            <div class="p-2 rounded-circle me-3 d-flex align-items-center justify-content-center"
                style="width: 38px; height: 38px; background: var(--theme-subtle); color: var(--theme-primary);">
                <i class="fa-solid fa-crown fs-6"></i>
            </div>
            <div>
                <h4 class="fw-bold text-dark mb-0" style="font-family: 'Saira-Medium', sans-serif; font-size: 24px;">
                    Proprietor &amp; Department Incharges
                </h4>
                <span class="text-muted small" style="font-size: 13px;">Executive Leadership, Chemical Research &amp; Core Manufacturing Governance</span>
            </div>
        </div>

        <div class="row g-4 justify-content-center">

            <!-- 1. Maruti Pandurang Prabhu - PROPRIETOR -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                <div class="team-card-modern h-100 d-flex flex-column justify-content-between position-relative shadow-sm">
                    <div>
                        <div class="team-photo-wrap large-height position-relative">
                            <img src="assets/pp_data/Page 02/Emp Details/Directors/MPP Sir.jpg" alt="Maruti Pandurang Prabhu - Proprietor" class="team-card-img">
                            <div class="team-photo-overlay"></div>
                            <div class="team-badge-icon" title="Proprietor">
                                <i class="fa-solid fa-crown"></i>
                            </div>
                            <div class="team-role-tag">
                                <span class="badge px-3 py-1.5 rounded-pill">
                                    <i class="fa-solid fa-shield-halved me-1"></i> Proprietor
                                </span>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="d-flex align-items-baseline justify-content-between mb-1">
                                <h4 class="fw-bold text-dark mb-0" style="font-family: 'Saira-Medium', sans-serif; font-size: 21px;">Maruti Pandurang Prabhu</h4>
                            </div>
                            <span class="badge bg-light text-primary border rounded-pill px-2.5 py-1 small fw-bold mb-3 d-inline-block" style="font-size: 11.5px;">
                                <i class="fa-solid fa-graduation-cap me-1"></i> B.Sc. L.P.R.I. (London)
                            </span>
                            <p class="text-secondary small mb-2" style="line-height: 1.7; font-size: 13.5px;">
                                Has <strong>48 years of extensive experience</strong> in conducting chemical composition tests of Elastomer &amp; testing of finished bearings &amp; raw materials. Actively overseeing day-to-day precision production and quality compliance.
                            </p>
                        </div>
                    </div>
                    <div class="px-4 pb-4 pt-2 border-top bg-light bg-opacity-25">
                        <a href="assets/pp_data/Page 02/Emp Details/Directors/MD (MPP Sir).pdf" target="_blank"
                            class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 fw-bold w-100 open-cert-modal d-flex align-items-center justify-content-center gap-2"
                            data-doc-url="assets/pp_data/Page 02/Emp Details/Directors/MD (MPP Sir).pdf"
                            data-doc-title="Maruti Pandurang Prabhu - Proprietor Profile & Credentials"
                            data-doc-type="pdf">
                            <i class="fa-solid fa-award"></i> <span>View Profile &amp; Credentials</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2. Mrs. Anita Maruti Prabhu - LAB INCHARGE -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="team-card-modern h-100 d-flex flex-column justify-content-between position-relative shadow-sm">
                    <div>
                        <div class="team-photo-wrap large-height position-relative">
                            <img src="assets/pp_data/Page 02/Emp Details/Directors/AMP Madam.jpg" alt="Mrs. Anita Maruti Prabhu - Lab Incharge" class="team-card-img">
                            <div class="team-photo-overlay"></div>
                            <div class="team-badge-icon" title="Lab Incharge">
                                <i class="fa-solid fa-flask-vial"></i>
                            </div>
                            <div class="team-role-tag">
                                <span class="badge px-3 py-1.5 rounded-pill">
                                    <i class="fa-solid fa-microscope me-1"></i> Lab Incharge
                                </span>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="d-flex align-items-baseline justify-content-between mb-1">
                                <h4 class="fw-bold text-dark mb-0" style="font-family: 'Saira-Medium', sans-serif; font-size: 21px;">Mrs. Anita Maruti Prabhu</h4>
                            </div>
                            <span class="badge bg-light text-primary border rounded-pill px-2.5 py-1 small fw-bold mb-3 d-inline-block" style="font-size: 11.5px;">
                                <i class="fa-solid fa-graduation-cap me-1"></i> M.Sc. (Chemistry)
                            </span>
                            <p class="text-secondary small mb-2" style="line-height: 1.7; font-size: 13.5px;">
                                Brings <strong>39 years of specialized experience</strong> in rigorous testing of physical properties of elastomeric compounds, chemical composition analysis, and polymer batch certification.
                            </p>
                        </div>
                    </div>
                    <div class="px-4 pb-4 pt-2 border-top bg-light bg-opacity-25">
                        <a href="assets/pp_data/Page 02/Emp Details/Directors/AMP MADAM.pdf" target="_blank"
                            class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 fw-bold w-100 open-cert-modal d-flex align-items-center justify-content-center gap-2"
                            data-doc-url="assets/pp_data/Page 02/Emp Details/Directors/AMP MADAM.pdf"
                            data-doc-title="Mrs. Anita Maruti Prabhu - Lab Incharge Credentials"
                            data-doc-type="pdf">
                            <i class="fa-solid fa-award"></i> <span>View Profile &amp; Credentials</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 3. Chetan Maruti Prabhu - PRODUCTION INCHARGE -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="team-card-modern h-100 d-flex flex-column justify-content-between position-relative shadow-sm">
                    <div>
                        <div class="team-photo-wrap large-height position-relative">
                            <img src="assets/pp_data/Page 02/Emp Details/Directors/CMP Sir.jpg" alt="Chetan Maruti Prabhu - Production Incharge" class="team-card-img">
                            <div class="team-photo-overlay"></div>
                            <div class="team-badge-icon" title="Production Incharge">
                                <i class="fa-solid fa-gears"></i>
                            </div>
                            <div class="team-role-tag">
                                <span class="badge px-3 py-1.5 rounded-pill">
                                    <i class="fa-solid fa-industry me-1"></i> Production Incharge
                                </span>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="d-flex align-items-baseline justify-content-between mb-1">
                                <h4 class="fw-bold text-dark mb-0" style="font-family: 'Saira-Medium', sans-serif; font-size: 21px;">Chetan Maruti Prabhu</h4>
                            </div>
                            <span class="badge bg-light text-primary border rounded-pill px-2.5 py-1 small fw-bold mb-3 d-inline-block" style="font-size: 11.5px;">
                                <i class="fa-solid fa-graduation-cap me-1"></i> B.E. (Mechanical)
                            </span>
                            <p class="text-secondary small mb-2" style="line-height: 1.7; font-size: 13.5px;">
                                Has <strong>16 years of hands-on experience</strong> in structural design engineering, quality control (QC), vulcanization tooling, and plant production management for mega projects.
                            </p>
                        </div>
                    </div>
                    <div class="px-4 pb-4 pt-2 border-top bg-light bg-opacity-25">
                        <a href="assets/pp_data/Page 02/Emp Details/Directors/CMP Sir.pdf" target="_blank"
                            class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 fw-bold w-100 open-cert-modal d-flex align-items-center justify-content-center gap-2"
                            data-doc-url="assets/pp_data/Page 02/Emp Details/Directors/CMP Sir.pdf"
                            data-doc-title="Chetan Maruti Prabhu - Degree & Professional Credentials"
                            data-doc-type="pdf">
                            <i class="fa-solid fa-award"></i> <span>View Profile &amp; Degree</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ============================================================
     4. Engineering, Quality & Operations Personnel
     ============================================================ -->
<section class="py-5" id="engineering-team" style="background:#ffffff;">
    <div class="container-fluid px-3 px-lg-5 py-4">
        
        <div class="d-flex align-items-center mb-4 pb-2 border-bottom">
            <div class="p-2 rounded-circle me-3 d-flex align-items-center justify-content-center"
                style="width: 38px; height: 38px; background: var(--theme-subtle); color: var(--theme-primary);">
                <i class="fa-solid fa-users-gear fs-6"></i>
            </div>
            <div>
                <h4 class="fw-bold text-dark mb-0" style="font-family: 'Saira-Medium', sans-serif; font-size: 24px;">
                    Engineering, Quality Control &amp; Operations Personnel
                </h4>
                <span class="text-muted small" style="font-size: 13px;">Design Verification, Laboratory Testing, Polymer Technology &amp; Commercial Operations</span>
            </div>
        </div>

        <div class="row g-4">

            <!-- 4. Sunil Kotagi - ASST GENERAL MANAGER -->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                <div class="team-card-modern h-100 d-flex flex-column justify-content-between position-relative shadow-sm">
                    <div>
                        <div class="team-photo-wrap standard-height position-relative d-flex align-items-center justify-content-center"
                            style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);">
                            <div class="text-center text-white p-3">
                                <div class="p-3 rounded-circle d-inline-flex align-items-center justify-content-center mb-2 shadow"
                                    style="width: 72px; height: 72px; background: rgba(255,255,255,0.1); border: 2px solid rgba(255,255,255,0.25);">
                                    <i class="fa-solid fa-briefcase fs-2 text-warning"></i>
                                </div>
                                <h6 class="text-white fw-bold mb-0 text-uppercase" style="font-family:'Saira-Medium',sans-serif; letter-spacing: 0.5px;">Management Executive</h6>
                                <small class="text-white-50" style="font-size: 11px;">Corporate Administration &amp; Operations</small>
                            </div>
                            <div class="team-badge-icon" title="Asst. General Manager">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                            <div class="team-role-tag">
                                <span class="badge px-3 py-1.5 rounded-pill">
                                    Asst. General Manager
                                </span>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold text-dark mb-1" style="font-family: 'Saira-Medium', sans-serif; font-size: 20px;">Sunil Kotagi</h5>
                            <span class="badge bg-light text-primary border rounded-pill px-2.5 py-1 small fw-bold mb-3 d-inline-block" style="font-size: 11px;">
                                <i class="fa-solid fa-graduation-cap me-1"></i> B.Com
                            </span>
                            <p class="text-secondary small mb-0" style="line-height: 1.6; font-size: 13px;">
                                Assistant General Manager overseeing corporate operations, material procurement, supply chain coordination, client liaison, and general commercial administration.
                            </p>
                        </div>
                    </div>
                    <div class="p-3 border-top bg-light bg-opacity-25 text-center">
                        <span class="badge bg-primary-subtle text-primary px-3 py-1.5 rounded-pill small fw-semibold" style="font-size: 11px;">
                            <i class="fa-solid fa-circle-check me-1"></i> Senior Administrative Management
                        </span>
                    </div>
                </div>
            </div>

            <!-- 5. Tausifkhan Pathan - DY. MANAGER DESIGN & TESTING -->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="team-card-modern h-100 d-flex flex-column justify-content-between position-relative shadow-sm">
                    <div>
                        <div class="team-photo-wrap standard-height position-relative">
                            <img src="assets/pp_data/Page 02/Emp Details/Pathan sir/PATHAN.jpg" alt="Tausifkhan Pathan - Dy. Manager Design & Testing" class="team-card-img">
                            <div class="team-photo-overlay"></div>
                            <div class="team-badge-icon" title="Design & Testing">
                                <i class="fa-solid fa-compass-drafting"></i>
                            </div>
                            <div class="team-role-tag">
                                <span class="badge px-3 py-1.5 rounded-pill">
                                    Dy. Manager Design &amp; Testing
                                </span>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold text-dark mb-1" style="font-family: 'Saira-Medium', sans-serif; font-size: 20px;">Tausifkhan Pathan</h5>
                            <span class="badge bg-light text-primary border rounded-pill px-2.5 py-1 small fw-bold mb-3 d-inline-block" style="font-size: 11px;">
                                <i class="fa-solid fa-graduation-cap me-1"></i> B.E. (Mechanical)
                            </span>
                            <p class="text-secondary small mb-0" style="line-height: 1.6; font-size: 13px;">
                                Has <strong>12 years of experience</strong> in structural design calculations, finite element modeling, and proof-load testing of finished bridge bearings as per IRC:83 / RDSO.
                            </p>
                        </div>
                    </div>
                    <div class="p-3 border-top bg-light bg-opacity-25">
                        <a href="assets/pp_data/Page 02/Emp Details/Directors/Plastic Rubber Institute.pdf" target="_blank"
                            class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 fw-bold w-100 open-cert-modal d-flex align-items-center justify-content-center gap-2"
                            data-doc-url="assets/pp_data/Page 02/Emp Details/Directors/Plastic Rubber Institute.pdf"
                            data-doc-title="Tausifkhan Pathan - Technical Credentials"
                            data-doc-type="pdf">
                            <i class="fa-solid fa-certificate"></i> <span>View Institute Certificate</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 6. Narendra Khairnar - LAB TECHNICIAN -->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="team-card-modern h-100 d-flex flex-column justify-content-between position-relative shadow-sm">
                    <div>
                        <div class="team-photo-wrap standard-height position-relative d-flex align-items-center justify-content-center"
                            style="background: linear-gradient(135deg, #0e7490 0%, #155e75 100%);">
                            <div class="text-center text-white p-3">
                                <div class="p-3 rounded-circle d-inline-flex align-items-center justify-content-center mb-2 shadow"
                                    style="width: 72px; height: 72px; background: rgba(255,255,255,0.15); border: 2px solid rgba(255,255,255,0.3);">
                                    <i class="fa-solid fa-vial-circle-check fs-2 text-warning"></i>
                                </div>
                                <h6 class="text-white fw-bold mb-0 text-uppercase" style="font-family:'Saira-Medium',sans-serif; letter-spacing: 0.5px;">Rubber Lab Tech</h6>
                                <small class="text-white-50" style="font-size: 11px;">Testing Apparatus &amp; Specimen Prep</small>
                            </div>
                            <div class="team-badge-icon" title="Lab Technician">
                                <i class="fa-solid fa-flask"></i>
                            </div>
                            <div class="team-role-tag">
                                <span class="badge px-3 py-1.5 rounded-pill">
                                    Lab Technician
                                </span>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold text-dark mb-1" style="font-family: 'Saira-Medium', sans-serif; font-size: 20px;">Narendra Khairnar</h5>
                            <span class="badge bg-light text-primary border rounded-pill px-2.5 py-1 small fw-bold mb-3 d-inline-block" style="font-size: 11px;">
                                <i class="fa-solid fa-graduation-cap me-1"></i> ITI (Rubber Technician)
                            </span>
                            <p class="text-secondary small mb-0" style="line-height: 1.6; font-size: 13px;">
                                Skilled technical specialist operating tensile testing machines, rheometers, hardness durometers, aging ovens, and specimen preparations for batch testing.
                            </p>
                        </div>
                    </div>
                    <div class="p-3 border-top bg-light bg-opacity-25 text-center">
                        <span class="badge bg-primary-subtle text-primary px-3 py-1.5 rounded-pill small fw-semibold" style="font-size: 11px;">
                            <i class="fa-solid fa-circle-check me-1"></i> Certified Rubber Technician
                        </span>
                    </div>
                </div>
            </div>

            <!-- 7. Ancy Madhyasth - EXECUTIVE -->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="team-card-modern h-100 d-flex flex-column justify-content-between position-relative shadow-sm">
                    <div>
                        <div class="team-photo-wrap standard-height position-relative">
                            <img src="assets/pp_data/Page 02/Emp Details/Ancy Madam/IMG_20240704_172145.jpg" alt="Ancy Madhyasth - Executive" class="team-card-img">
                            <div class="team-photo-overlay"></div>
                            <div class="team-badge-icon" title="Executive">
                                <i class="fa-solid fa-file-invoice"></i>
                            </div>
                            <div class="team-role-tag">
                                <span class="badge px-3 py-1.5 rounded-pill">
                                    Commercial Executive
                                </span>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold text-dark mb-1" style="font-family: 'Saira-Medium', sans-serif; font-size: 20px;">Ancy Madhyasth</h5>
                            <span class="badge bg-light text-primary border rounded-pill px-2.5 py-1 small fw-bold mb-3 d-inline-block" style="font-size: 11px;">
                                <i class="fa-solid fa-graduation-cap me-1"></i> B.Com
                            </span>
                            <p class="text-secondary small mb-0" style="line-height: 1.6; font-size: 13px;">
                                Executive in charge of commercial billing, tax invoices, GST documentation, client order processing, dispatch compliance, and accounting records.
                            </p>
                        </div>
                    </div>
                    <div class="p-3 border-top bg-light bg-opacity-25">
                        <a href="assets/pp_data/Page 02/Emp Details/Ancy Madam/B.ComIII.pdf" target="_blank"
                            class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 fw-bold w-100 open-cert-modal d-flex align-items-center justify-content-center gap-2"
                            data-doc-url="assets/pp_data/Page 02/Emp Details/Ancy Madam/B.ComIII.pdf"
                            data-doc-title="Ancy Madhyasth - B.Com Degree Certificate"
                            data-doc-type="pdf">
                            <i class="fa-solid fa-graduation-cap"></i> <span>View B.Com Degree</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 8. Nitin Pandey - R&D HEAD & QUALITY MANAGER -->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="team-card-modern h-100 d-flex flex-column justify-content-between position-relative shadow-sm">
                    <div>
                        <div class="team-photo-wrap standard-height position-relative">
                            <img src="assets/pp_data/Page 02/Emp Details/Nitin Pandey/IMG-20260921-WA0011 (1).jpg" alt="Nitin Pandey - R&D Head & Quality Manager" class="team-card-img">
                            <div class="team-photo-overlay"></div>
                            <div class="team-badge-icon" title="R&D Head & Quality Manager">
                                <i class="fa-solid fa-microchip"></i>
                            </div>
                            <div class="team-role-tag">
                                <span class="badge px-3 py-1.5 rounded-pill">
                                    R&amp;D Head &amp; Quality Manager
                                </span>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold text-dark mb-1" style="font-family: 'Saira-Medium', sans-serif; font-size: 20px;">Nitin Pandey</h5>
                            <span class="badge bg-light text-primary border rounded-pill px-2.5 py-1 small fw-bold mb-3 d-inline-block" style="font-size: 11px;">
                                <i class="fa-solid fa-flask-vial me-1"></i> Rubber Technology
                            </span>
                            <p class="text-secondary small mb-0" style="line-height: 1.6; font-size: 13px;">
                                Directing research &amp; development, advanced polymer compounding, vulcanization optimization, internal quality audits, and adherence to IRC:83 / RDSO norms.
                            </p>
                        </div>
                    </div>
                    <div class="p-3 border-top bg-light bg-opacity-25">
                        <a href="assets/pp_data/Page 02/Emp Details/Nitin Pandey/Certificate.pdf" target="_blank"
                            class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 fw-bold w-100 open-cert-modal d-flex align-items-center justify-content-center gap-2"
                            data-doc-url="assets/pp_data/Page 02/Emp Details/Nitin Pandey/Certificate.pdf"
                            data-doc-title="Nitin Pandey - Quality Management Certificate"
                            data-doc-type="pdf">
                            <i class="fa-solid fa-file-circle-check"></i> <span>View QC Certificate</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 9. Labhesh Bawiskar - LAB MANAGER -->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="team-card-modern h-100 d-flex flex-column justify-content-between position-relative shadow-sm">
                    <div>
                        <div class="team-photo-wrap standard-height position-relative overflow-hidden" style="background: linear-gradient(135deg, #0f2027 0%, #203a43 50%, #2c5364 100%);">
                            <img src="assets/pp_data/Page 02/Emp Details/Labhesh/msc degree certificate OF LASBESH BAWISKAR (1).jpg" alt="Labhesh Bawiskar - Lab Manager" class="team-card-img" style="opacity: 0.38; object-fit: cover;">
                            <div class="position-absolute top-50 start-50 translate-middle text-center text-white p-3 w-100" style="z-index: 1;">
                                <div class="p-3 rounded-circle d-inline-flex align-items-center justify-content-center mb-2 shadow"
                                    style="width: 64px; height: 64px; background: rgba(255,255,255,0.15); border: 2px solid rgba(255,255,255,0.3); backdrop-filter: blur(8px);">
                                    <i class="fa-solid fa-flask-vial fs-3 text-warning"></i>
                                </div>
                                <span class="d-block fw-bold small text-uppercase" style="letter-spacing: 1px; font-size: 11px;">M.Sc Industrial Chemistry</span>
                            </div>
                            <div class="team-photo-overlay"></div>
                            <div class="team-badge-icon" title="Lab Manager">
                                <i class="fa-solid fa-flask"></i>
                            </div>
                            <div class="team-role-tag">
                                <span class="badge px-3 py-1.5 rounded-pill">
                                    Lab Manager
                                </span>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold text-dark mb-1" style="font-family: 'Saira-Medium', sans-serif; font-size: 20px;">Labhesh Bawiskar</h5>
                            <span class="badge bg-light text-primary border rounded-pill px-2.5 py-1 small fw-bold mb-3 d-inline-block" style="font-size: 11px;">
                                <i class="fa-solid fa-graduation-cap me-1"></i> M.Sc. in Industrial Chemistry
                            </span>
                            <p class="text-secondary small mb-0" style="line-height: 1.6; font-size: 13px;">
                                Managing full-scale laboratory operations, chemical testing, polymer identification, tensile testing, ash content analysis, and raw material batch inspection.
                            </p>
                        </div>
                    </div>
                    <div class="p-3 border-top bg-light bg-opacity-25">
                        <a href="assets/pp_data/Page 02/Emp Details/Labhesh/msc degree certificate OF LASBESH BAWISKAR (1).jpg" target="_blank"
                            class="btn btn-outline-primary btn-sm rounded-pill px-3 py-2 fw-bold w-100 open-cert-modal d-flex align-items-center justify-content-center gap-2"
                            data-doc-url="assets/pp_data/Page 02/Emp Details/Labhesh/msc degree certificate OF LASBESH BAWISKAR (1).jpg"
                            data-doc-title="Labhesh Bawiskar - M.Sc Degree Certificate"
                            data-doc-type="image">
                            <i class="fa-solid fa-graduation-cap"></i> <span>View M.Sc Degree</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ============================================================
     5. Manufacturing Floor Workforce Capacity (Total 70+ Strength)
     ============================================================ -->
<section class="py-5" style="background:#f8fafc; border-top:1px solid #e2e8f0;">
    <div class="container-fluid px-3 px-lg-5 py-3">
        <div class="p-4 p-lg-5 rounded-4 border shadow-sm wow fadeInUp" data-wow-delay=".2s"
            style="background: linear-gradient(135deg, #0b1f3a 0%, #081426 100%); color: #fff;">
            <div class="row align-items-center g-4">
                <div class="col-lg-4 text-center text-lg-start">
                    <span class="badge px-3 py-1.5 rounded-pill text-uppercase fw-bold mb-2"
                        style="background: var(--theme-subtle); color: var(--theme-primary); font-size: 11px; letter-spacing: 1.5px;">
                        ON-FLOOR TECHNICAL CAPACITY
                    </span>
                    <h3 class="fw-bold text-white text-uppercase mb-2" style="font-family: 'Saira-Medium', sans-serif; font-size: 30px;">
                        Manufacturing Workforce Strength
                    </h3>
                    <p class="text-white-50 small mb-0" style="line-height: 1.7; font-size: 13.5px;">
                        Backed by dedicated factory operators, technicians, and floor assistants ensuring high-volume capacity and uninterrupted project delivery.
                    </p>
                </div>

                <div class="col-lg-8">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="p-3.5 p-4 rounded-4 text-center h-100 border"
                                style="background: rgba(255, 255, 255, 0.06); border-color: rgba(255, 255, 255, 0.12) !important; backdrop-filter: blur(10px);">
                                <div class="p-2.5 rounded-circle d-inline-flex align-items-center justify-content-center mb-2"
                                    style="width: 48px; height: 48px; background: rgba(2, 132, 199, 0.25); color: #38bdf8;">
                                    <i class="fa-solid fa-user-gear fs-5"></i>
                                </div>
                                <h2 class="fw-bold mb-0 text-white" style="font-family: 'Saira-Medium', sans-serif; font-size: 36px; line-height: 1;">25</h2>
                                <h6 class="fw-bold text-white mt-1 mb-1" style="font-size: 14px;">Skilled Labours</h6>
                                <small class="text-white-50 d-block" style="font-size: 11.5px;">Hydraulic press vulcanizing, grit blasting &amp; mold operators</small>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="p-3.5 p-4 rounded-4 text-center h-100 border"
                                style="background: rgba(255, 255, 255, 0.06); border-color: rgba(255, 255, 255, 0.12) !important; backdrop-filter: blur(10px);">
                                <div class="p-2.5 rounded-circle d-inline-flex align-items-center justify-content-center mb-2"
                                    style="width: 48px; height: 48px; background: rgba(234, 179, 8, 0.25); color: #facc15;">
                                    <i class="fa-solid fa-users-line fs-5"></i>
                                </div>
                                <h2 class="fw-bold mb-0 text-white" style="font-family: 'Saira-Medium', sans-serif; font-size: 36px; line-height: 1;">25</h2>
                                <h6 class="fw-bold text-white mt-1 mb-1" style="font-size: 14px;">Semi-Skilled Labours</h6>
                                <small class="text-white-50 d-block" style="font-size: 11.5px;">Elastomer compounding prep, cutting &amp; edge trimming</small>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="p-3.5 p-4 rounded-4 text-center h-100 border"
                                style="background: rgba(255, 255, 255, 0.06); border-color: rgba(255, 255, 255, 0.12) !important; backdrop-filter: blur(10px);">
                                <div class="p-2.5 rounded-circle d-inline-flex align-items-center justify-content-center mb-2"
                                    style="width: 48px; height: 48px; background: rgba(34, 197, 94, 0.25); color: #4ade80;">
                                    <i class="fa-solid fa-hand-holding-hand fs-5"></i>
                                </div>
                                <h2 class="fw-bold mb-0 text-white" style="font-family: 'Saira-Medium', sans-serif; font-size: 36px; line-height: 1;">20</h2>
                                <h6 class="fw-bold text-white mt-1 mb-1" style="font-size: 14px;">Helpers</h6>
                                <small class="text-white-50 d-block" style="font-size: 11.5px;">Material handling, test-rig movement &amp; dispatch packing</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     6. Certificate & Document Viewer Modal Popup
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
                        <small id="certModalSub" class="text-white-50" style="font-size: 12px;">Verified Statutory &amp; Engineering Credential</small>
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

<script>
document.addEventListener('DOMContentLoaded', function () {
    const certModalEl = document.getElementById('certificateModal');
    if (!certModalEl) return;

    const modalTitle = document.getElementById('certificateModalLabel');
    const modalIcon = document.getElementById('certModalIcon');
    const modalIframe = document.getElementById('certModalIframe');
    const modalImgWrap = document.getElementById('certModalImgWrap');
    const modalImage = document.getElementById('certModalImage');
    const modalLoader = document.getElementById('certModalLoader');

    let bsModal = null;
    if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
        bsModal = new bootstrap.Modal(certModalEl);
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

            if (bsModal) {
                bsModal.show();
            } else if (typeof $ !== 'undefined') {
                $(certModalEl).modal('show');
            }
        });
    });

    certModalEl.addEventListener('hidden.bs.modal', function () {
        modalIframe.src = '';
        modalImage.src = '';
        modalLoader.style.display = 'none';
    });
});
</script>

<?php include_once 'partials/footer.php'; ?>
