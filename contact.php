<?php 
$page_title = "Contact Us & RFQ - Polymer Products";
include_once 'partials/header.php'; 
?>

<div class="py-5" style="background: linear-gradient(135deg, #0b192c 0%, #1e3e62 100%); color:#fff;">
        <div class="container py-4 text-center">
            <span class="badge bg-primary px-3 py-2 mb-2 text-uppercase fw-bold">Get In Touch</span>
            <h1 class="display-5 fw-bold text-white mb-2">Contact Us & Request A Quote</h1>
            <p class="lead text-light mb-0 mx-auto" style="max-width:700px;">Reach out to our engineering and quality
                control team at Nashik for technical consultations, bearing designs, and project pricing.</p>
        </div>
    </div>

    <!-- Contact Info & Form Section -->
    <section class="py-5" style="background:#fff;">
        <div class="container py-4">
            <div class="row g-5">

                <!-- Contact Info Cards -->
                <div class="col-lg-5">
                    <div class="section-title mb-4">
                        <span class="badge bg-primary-subtle text-primary px-3 py-2 mb-2 font-monospace fw-bold">PLANT &
                            OFFICES</span>
                        <h3 class="fw-bold text-dark">Polymer Products</h3>
                        <p class="text-muted small">Specialized division of Dynamic Prestress (I) Pvt. Ltd.</p>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="p-3 bg-primary text-white rounded-circle me-3"
                            style="width:50px; height:50px; display:flex; align-items:center; justify-content:center;">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-1">Manufacturing Plant:</h6>
                            <p class="small text-muted mb-0">Polymer Products Manufacturing Facility, Nashik,
                                Maharashtra, India.</p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="p-3 bg-success text-white rounded-circle me-3"
                            style="width:50px; height:50px; display:flex; align-items:center; justify-content:center;">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-1">Telephone & Mobile:</h6>
                            <p class="small text-muted mb-0">
                                Mobile: <a href="tel:8975766459" class="text-dark fw-bold">+91 8975766459</a><br>
                                Office / Plant: <a href="tel:02532350935" class="text-dark fw-bold">0253 235 0935</a>
                            </p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="p-3 bg-info text-white rounded-circle me-3"
                            style="width:50px; height:50px; display:flex; align-items:center; justify-content:center;">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-1">Email Inquiries:</h6>
                            <p class="small text-muted mb-0">
                                QA/QC Dept: <a href="mailto:qc@polymerproducts.org"
                                    class="text-primary">qc@polymerproducts.org</a><br>
                                Plant Direct: <a href="mailto: " class="text-primary"> </a>
                            </p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="p-3 bg-dark text-white rounded-circle me-3"
                            style="width:50px; height:50px; display:flex; align-items:center; justify-content:center;">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-1">Group Website:</h6>
                            <p class="small text-muted mb-0">
                                <a href="http://www.dynamicprestress.org" target="_blank"
                                    class="text-primary fw-bold">www.dynamicprestress.org</a>
                            </p>
                        </div>
                    </div>

                    <div class="card p-3 bg-light border rounded-3 mt-4">
                        <h6 class="fw-bold text-dark mb-1"><i class="fa-solid fa-clock text-primary me-2"></i>Plant
                            Working Hours</h6>
                        <p class="small text-muted mb-0">Monday to Saturday: 9:00 AM – 6:30 PM (IST)</p>
                    </div>
                </div>

                <!-- RFQ / Contact Form -->
                <div class="col-lg-7">
                    <div class="p-4 p-lg-5 bg-light rounded-4 border shadow-sm">
                        <h3 class="fw-bold text-dark mb-2">Request Technical Quotation / Inquiry</h3>
                        <p class="small text-muted mb-4">Fill out the bearing requirements below, and our engineering
                            team will respond with a formal quotation and technical data sheet.</p>

                        <form action="#" method="POST"
                            onsubmit="event.preventDefault(); alert('Thank you for contacting Polymer Products. Our technical team will reach out promptly.');">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-dark">Your Name *</label>
                                    <input type="text" class="form-control" placeholder="Enter Full Name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-dark">Company / Organization *</label>
                                    <input type="text" class="form-control" placeholder="Contractor / Consultant Name"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-dark">Phone / Mobile No. *</label>
                                    <input type="tel" class="form-control" placeholder="+91 XXXXX XXXXX" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-dark">Email Address *</label>
                                    <input type="email" class="form-control" placeholder="email@company.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-dark">Project Sector</label>
                                    <select class="form-select">
                                        <option>NHAI / Highway Bridge</option>
                                        <option>Indian Railways / ROB</option>
                                        <option>Metro Rail Viaduct</option>
                                        <option>State PWD / Flyover</option>
                                        <option>Industrial / Heavy Civil</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-dark">Product Type Needed</label>
                                    <select class="form-select">
                                        <option>Laminated Elastomeric Bearing (IRC:83)</option>
                                        <option>Seismic Isolation Pad</option>
                                        <option>PTFE Sliding Bearing</option>
                                        <option>Railway Bridge Bearing (RDSO)</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label small fw-bold text-dark">Bearing Size / Design Load /
                                        Inquiry Details</label>
                                    <textarea class="form-control" rows="4"
                                        placeholder="Please specify plan dimensions (LxW), thickness, vertical load (kN), rotation/shear requirements, or quantity..."></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit"
                                        class="btn btn-primary btn-lg rounded-pill px-5 fw-bold w-100">
                                        <i class="fa-solid fa-paper-plane me-2"></i> Submit Inquiry / Request RFQ
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php include_once 'partials/footer.php'; ?>
