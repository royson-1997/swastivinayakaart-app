    <style>
      .col-md-6{
        margin-top: 20px;
      }
      .services .icon-box:hover {
        background: #fefefe;
        border-color: #fefefe;
      }
      .services .icon-box:hover h4 a, .services .icon-box:hover p {
        color: #000;
      }
      .portfolio .portfolio-item {
        height: auto !important;
      }
      .portfolio #portfolio-flters li {
        border-radius: 4px;
        background: #fff;
        padding: 10px 20px;
        margin: 0 15px 15px 0;
        line-height: 20px;
      }
      .portfolio #portfolio-flters li:hover, .portfolio #portfolio-flters li.filter-active {
        color: white;
        background: #ed502e;
      }
    </style>
    <!-- Remove White Space (^\n*) -->
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials services portfolio section-bg mt-5">
      <div class="container mt-3">
        <?php $text_1 = isset($this->data['text_1']) ? $this->data['text_1'] : ''; ?>
        <?php
          $getData = isset($this->data['getData']) ? $this->data['getData'] : array();
          $getData2 = isset($this->data['getData2']) ? $this->data['getData2'] : array();
          $getDocumentType = $this->data['getDocumentType'];
          if (isset($getData) && count($getData) > 0) {
            $getData1 = json_decode(json_encode($getData), true); ?>
        <div class="section-title">
          <h2><?php echo $text_1; ?></h2>
          <?php if($getData1[0]['document_upload_type_no'] != 4 && $getData1[0]['document_upload_type_no'] != 5){ ?>
            <p><?php echo $getDocumentType[$getData1[0]['document_upload_type']]; ?></p>
          <?php } else { ?>
            <p><?php echo $text_1; ?></p>
          <?php } ?>
        </div>
        <div class="testimonials-slider">
          <div class="row pt-0">
            <?php
            $arr = $arr2 = $arr3 = array();
            $yearArr = array(1=>"2010 - 11",2=>"2011 - 12",3=>"2012 - 13",4=>"2013 - 14",5=>"2014 - 15",6=>"2015 - 16",7=>"2016 - 17",8=>"2017 - 18",9=>"2018 - 19",10=>"2019 - 20",11=>"2020 - 21",12=>"2021 - 22",13=>"2022 - 23",14=>"2023 - 24",15=>"2024 - 25",16=>"2025 - 26");
            foreach ($getData as $year) {
              if(!empty($year->document_upload_year) && $year->document_upload_year != 0){
                $arr[] = $year->document_upload_year;
                $arr2[] = $year->document_upload_type;
                $arr3[] = $year->document_upload_type_no;
              }
            }
            $unique_data = array_unique($arr);
            if(count($unique_data) > 0){ ?>
              <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                  <?php foreach ($unique_data as $x => $fil) { ?>
                    <li class="<?php echo ($x == 0) ? 'filter-active' : ''; ?>" data-filter=".filter-<?php echo $fil; ?>" onclick="modifyList('<?php echo $fil; ?>')" ><?php echo $yearArr[$fil]; ?></li>
                  <?php } ?>
                  <li data-filter="*" class="">All</li>
                </ul>
              </div>
            </div>
            <div class="row portfolio-container">

            <?php  foreach ($unique_data as $y => $val) { ?>
                <!-- <h4 class="mt-4"><?php echo $yearArr[$val]; ?></h4> -->
                <?php
                $doc_type = $arr2[0];
                $doc_type_no = $arr3[0];
                $orderBy = 'document_upload_id DESC';
                $whereclause = array('document_upload_year' => $val, 'document_upload_type' => $doc_type, 'document_upload_type_no' => $doc_type_no, 'status' => 1);
                $getYearData = $this->admin_model->getdata('document_upload_data',$whereclause,$orderBy); ?>

                <?php foreach ($getYearData as $yvalue) { ?>
                  <div class="col-lg-6 portfolio-item filter-<?php echo $yvalue->document_upload_year; ?> wow fadeInUp" style="<?php echo ($y != 0) ? 'display: none' : ''; ?>" id="filter-<?php echo $yvalue->document_upload_year; ?>">
                    <div class="testimonial-wrap">
                      <div class="testimonial-item">
                        <img src="https://www.covers.com/images/articles.png" class="testimonial-img" alt="">
                        <div class="row">
                          <div class="col-md-7">
                            <h3><?php echo $yvalue->document_upload_title; ?></h3>
                            <h4><?php echo $yvalue->document_upload_description; ?></h4>
                          </div>
                          <div class="col-lg-5">
                            <a class="btn btn-default" href="<?php echo base_url().$yvalue->document_upload_link; ?>" target="_blank">Download PDF</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } } else {
              foreach ($getData as $value) { ?>
                <div class="col-lg-6">
                  <div class="testimonial-wrap">
                    <div class="testimonial-item">
                      <img src="https://www.covers.com/images/articles.png" class="testimonial-img" alt="">
                      <div class="row">
                        <div class="col-md-7">
                          <h3><?php echo $value->document_upload_title; ?></h3>
                          <h4><?php echo $value->document_upload_description; ?></h4>
                        </div>
                        <div class="col-lg-5">
                          <a class="btn btn-default" href="<?php echo base_url().$value->document_upload_link; ?>" target="_blank">Download PDF</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } } ?>
          </div>
        </div>
        <?php } else { ?>
          <div class="row">
            <div class="col-md-12">
              <div class="icon-box">
                <h4>No Files Found</h4>
                <p>Maybe go back and try again. Or we still working on it. </p>
              </div>
            </div>
          </div>
        <?php } ?>
        <?php if (isset($getData2) && count($getData2) > 0) {
          $getData_2 = json_decode(json_encode($getData2), true);
          if($getData_2[0]['document_upload_type_no'] != 4 && $getData_2[0]['document_upload_type_no'] != 5){
        ?>
        <div class="section-title mt-5">
          <h2><?php echo $text_1; ?></h2>
          <p><?php echo $getDocumentType[$getData_2[0]['document_upload_type']]; ?></p>
        </div>
        <?php } ?>
        <div class="testimonials-slider">
          <div class="row pt-0">
            <?php foreach ($getData2 as $key2 => $value2) { ?>
              <div class="col-lg-6">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="https://www.covers.com/images/articles.png" class="testimonial-img" alt="">
                    <div class="row">
                      <div class="col-md-7">
                        <h3><?php echo $value2->document_upload_title; ?></h3>
                        <h4><?php echo $value2->document_upload_description; ?></h4>
                      </div>
                      <div class="col-lg-5">
                        <a class="btn btn-default" href="<?php echo base_url().$value2->document_upload_link; ?>" target="_blank">Download PDF</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
        <?php } ?>
      </div>
    </section><!-- End Testimonials Section -->
