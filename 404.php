<!DOCTYPE html>
<html lang="en">

<?php $title = 'Prozen - Business Consulting PHP Template' ?>
<?php include './partials/head.php' ?>

<body class="body-color">
<!-- Preloader area start -->
<?php include './partials/preloader.php' ?>
<!-- Preloader area end -->

<!-- Back To Top Start -->
<?php include './partials/mouse-cursor.php' ?>

<!-- Back To Top Start -->
<?php include './partials/scroll-up.php' ?>
<!-- Back To Top End -->

<!-- Header Start -->
<?php include './partials/header.php' ?>
<!-- Header End -->

<!-- offcanvas for navigation start -->
<?php include './partials/offcanvas.php' ?>
<!-- offcanvas for navigation end -->

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

<!-- footer start -->
<?php include './partials/footer.php' ?>
<!-- footer end -->

<!-- all js files -->
<?php include './partials/script.php'?>

</body>
</html>