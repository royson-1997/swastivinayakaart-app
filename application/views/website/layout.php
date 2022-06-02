<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $this->data['title']; ?></title>
  <meta content="<?php echo $this->data['description']; ?>" name="description">
  <meta content="<?php echo $this->data['keywords']; ?>" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>front-assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>front-assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>front-assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>front-assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>front-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>front-assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>front-assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>front-assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>front-assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>front-assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>front-assets/css/style.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <style>
    .portfolio-details .portfolio-info ul li {
      margin-top: 22px !important;
      height: 30px;
    }
  </style>
</head>

<body>

  <?php $requestURL = $_SERVER['REQUEST_URI']; ?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo"><a href="index.html">Multi</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="<?php echo base_url(); ?>" class="logo"><img src="<?php echo base_url(); ?>front-assets/img/swastivinayakaart-logo.png" alt="" class="img-fluid"></a>


      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="<?php if($requestURL == '/ashirwadcapital/'){ echo '#hero'; }else{ echo base_url(); } ?>">Home</a></li>
          <li class="dropdown"><a href="#"><span>Reports</span> <i class="bi bi-chevron-down"></i></a>
          <?php $reportData = $this->data['getReportDocumentType']; ?>
            <ul>
              <li><a href="<?php echo base_url(); ?>annual-report"><?php echo $reportData[1]; ?></a></li>
              <li><a href="<?php echo base_url(); ?>financial-results"><?php echo $reportData[2]; ?></a></li>
              <li><a href="<?php echo base_url(); ?>shareholding-pattern"><?php echo $reportData[3]; ?></a></li>
              <li><a href="<?php echo base_url(); ?>unclaimed-divided"><?php echo $reportData[4]; ?></a></li>
              <li><a href="<?php echo base_url(); ?>declaration-of-evoting-results"><?php echo $reportData[5]; ?></a></li>
              <li><a href="<?php echo base_url(); ?>unclaimed-shares"><?php echo $reportData[14]; ?></a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="<?php echo base_url(); ?>team">Team</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url(); ?>announcements">Announcements</a></li>
          <li><a class="nav-link scrollto " href="<?php echo base_url(); ?>policy">Policy</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url(); ?>download">Download</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <?php $this->load->view($subview); ?>

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>

      <div class="row">

        <?php $contactDetails = $this->data['contactDetails'];
          foreach ($contactDetails as $con => $contact) { ?>
        <div class="col-lg-12">

          <div class="row">
            <h4 class="mb-4"><?php if($contact->contact_type == 1){ echo "REGISTERED OFFICE"; } else { echo "REGISTRARS & TRANSFER AGENTS"; } ?></h4>
            <div class="col-md-12">
              <div class="info-box">
                <div class="row">
                  <div class="col-md-4">
                    <i class="bx bx-map"></i>
                    <h3>Our Location</h3>
                    <p><?php echo $contact->contact_title."<br>".$contact->contact_address; ?></p>
                  </div>
                  <div class="col-md-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email / FAX</h3>
                    <p><?php echo $contact->contact_email; ?></p>
                  </div>
                  <div class="col-md-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <p><?php echo $contact->contact_no; ?></p>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>
        <?php } ?>

      </div>

    </div>
  </section>
  <!-- End Contact Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Swasti Vinayaka Art</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>front-assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?php echo base_url(); ?>front-assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url(); ?>front-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>front-assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url(); ?>front-assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>front-assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>front-assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>front-assets/js/main.js"></script>

  <script>
  function modifyList(obj){
    $('.filter-'+obj).css('display', 'block');
  }
  </script>

</body>
</html>
