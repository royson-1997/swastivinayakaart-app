  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(<?php echo base_url(); ?>front-assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Swasti Vinayaka Art And Heritage Corporation Limited</span></h2>
              <p class="animate__animated animate__fadeInUp">We are engaged in the manufacturing of artifacts consisting of a collection of gemstone sculptures.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>About</h2>
          <p>About Us</p>
        </div>
        <div class="row content">
          <div class="col-lg-6">
            <p>
              Swasti Vinayaka Art & Heritage Corp. is engaged interalia, in the business of manufacturing of Carvings of Precious and semi precious stones, paintings, jewellery, the company also received compensation against property.
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              We focus on long-term investments in blue chip scrips, with a view to well-timed entry and exit. To do this, we employ a strong fundamental analysis, along with an in-house technical analysis model, that aims for performance consistency.
            </p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
    <!-- ======= Team Section ======= -->
    <section id="team" class="team portfolio-details section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Team</h2>
          <p>Check our Team</p>
        </div>
        <div class="row">
          <div class="col-lg-2"></div>
          <?php
            $getData = isset($this->data['getData']) ? $this->data['getData'] : array();
            $getDocumentType = $this->data['getDocumentType']; if (isset($getData) && count($getData) > 0) {
            $getData1 = json_decode(json_encode($getData), true); ?>
            <div class="col-lg-8">
              <div class="portfolio-info">
                <h3><?php echo $getDocumentType[$getData1[0]['team_document_type']]; ?></h3>
                <div class="row">
                  <div class="col-lg-6">
                    <p><strong>Name</strong></p>
                    <ul>
                      <?php foreach ($getData as $data_1) { ?>
                      <li><?php echo $data_1->team_director_name; ?></li>
                      <?php } ?>
                    </ul>
                  </div>
                  <div class="col-lg-6">
                    <p><strong>Designation</strong></p>
                    <ul>
                      <?php foreach ($getData as $data_1) { ?>
                      <li><?php echo $data_1->team_director_designation; ?></li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
          <div class="col-lg-2"></div>
        </div>
      </div>
    </section><!-- End Team Section -->
  </main>
