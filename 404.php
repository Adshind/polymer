<?php 
$page_title = "Prozen - Business Consulting PHP Template";
include_once 'partials/header.php'; 
?>

<!-- ht breadcrumb area start -->
<section class="ht-breadcrumb-area">
    <div class="container">
        <div class="ht-breadcrumb-heading">
            <h2 class="ht-breadcrumb-title">Error Page</h2>
            <ul class="ht-breadcrumb-list">
                <li><a href="index.php">Home</a></li>
                <li><i class="fa-solid fa-chevron-right"></i></li>
                <li class="active">404</li>
            </ul>
        </div>
    </div>
</section>
<!-- ht breadcrumb area start -->

<!-- ht error page area start -->
<div class="ht-error-page-area section-padding">
    <div class="container">
        <div class="error-content">
            <div class="err-img">
                <img src="assets/img/error/error.svg" alt="not-found">
            </div>
            <p>Sorry, the page you’re looking for doesn’t exist. If you think something is broken, report a porblem
            </p>
            <a href="index.php" class="ht-btn style-2">Bact To Home</a>
        </div>
    </div>
</div>
<!-- ht error page area end -->

<?php include_once 'partials/footer.php'; ?>
