    <style>

      .col-md-6{

        margin-top: 20px;

      }

    </style>



    <?php $text_1 = isset($this->data['text_1']) ? $this->data['text_1'] : ''; ?>

    <?php

    $getData = isset($this->data['getData']) ? $this->data['getData'] : array();

    $getData2 = isset($this->data['getData2']) ? $this->data['getData2'] : array();

    $getData3 = isset($this->data['getData3']) ? $this->data['getData3'] : array();

    $getData4 = isset($this->data['getData4']) ? $this->data['getData4'] : array();

    $getData5 = isset($this->data['getData5']) ? $this->data['getData5'] : array();

    $getData6 = isset($this->data['getData6']) ? $this->data['getData6'] : array();

    $getDocumentType = $this->data['getDocumentType']; ?>

    <section id="portfolio-details" class="portfolio-details section-bg mt-5">

      <div class="container mt-5">



        <div class="section-title">

          <h2>TEAM</h2>

          <p><?php echo $text_1; ?></p>

        </div>



        <div class="row gy-4">



            <?php if (isset($getData) && count($getData) > 0) {

            $getData1 = json_decode(json_encode($getData), true); ?>

            <div class="col-lg-6">

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



            <?php if (isset($getData2) && count($getData2) > 0) {

            $getData_2 = json_decode(json_encode($getData2), true); ?>

            <div class="col-lg-6">

                <div class="portfolio-info">

                  <h3><?php echo $getDocumentType[$getData_2[0]['team_document_type']]; ?></h3>

                  <div class="row">

                    <div class="col-lg-6">

                      <p><strong>Name</strong></p>

                      <ul>

                        <?php foreach ($getData2 as $data_2) { ?>

                        <li><?php echo $data_2->team_director_name; ?></li>

                        <?php } ?>

                      </ul>

                    </div>

                    <div class="col-lg-6">

                      <p><strong>Designation</strong></p>

                      <ul>

                        <?php foreach ($getData2 as $data_2) { ?>

                        <li><?php echo $data_2->team_director_designation; ?></li>

                        <?php } ?>

                      </ul>

                    </div>

                  </div>

                </div>

            </div>

            <?php } ?>



            <?php if (isset($getData3) && count($getData3) > 0) {

            $getData_3 = json_decode(json_encode($getData3), true); ?>

            <div class="col-lg-6">

                <div class="portfolio-info">

                  <h3><?php echo $getDocumentType[$getData_3[0]['team_document_type']]; ?></h3>

                  <div class="row">

                    <div class="col-lg-6">

                      <p><strong>Name</strong></p>

                      <ul>

                        <?php foreach ($getData3 as $data_3) { ?>

                        <li><?php echo $data_3->team_director_name; ?></li>

                        <?php } ?>

                      </ul>

                    </div>

                    <div class="col-lg-6">

                      <p><strong>Designation</strong></p>

                      <ul>

                        <?php foreach ($getData3 as $data_3) { ?>

                        <li><?php echo $data_3->team_director_designation; ?></li>

                        <?php } ?>

                      </ul>

                    </div>

                  </div>

                </div>

            </div>

            <?php } ?>



            <?php if (isset($getData4) && count($getData4) > 0) {

            $getData_4 = json_decode(json_encode($getData4), true); ?>

            <div class="col-lg-6">

                <div class="portfolio-info">

                  <h3><?php echo $getDocumentType[$getData_4[0]['team_document_type']]; ?></h3>

                  <div class="row">

                    <div class="col-lg-6">

                      <p><strong>Name</strong></p>

                      <ul>

                        <?php foreach ($getData4 as $data_4) { ?>

                        <li><?php echo $data_4->team_director_name; ?></li>

                        <?php } ?>

                      </ul>

                    </div>

                    <div class="col-lg-6">

                      <p><strong>Designation</strong></p>

                      <ul>

                        <?php foreach ($getData4 as $data_4) { ?>

                        <li><?php echo $data_4->team_director_designation; ?></li>

                        <?php } ?>

                      </ul>

                    </div>

                  </div>

                </div>

            </div>

            <?php } ?>



            <?php if (isset($getData5) && count($getData5) > 0) {

            $getData_5 = json_decode(json_encode($getData5), true); ?>

            <div class="col-lg-6">

                <div class="portfolio-info">

                  <h3><?php echo $getDocumentType[$getData_5[0]['team_document_type']]; ?></h3>

                  <div class="row">

                    <div class="col-lg-6">

                      <p><strong>Name</strong></p>

                      <ul>

                        <?php foreach ($getData5 as $data_5) { ?>

                        <li><?php echo $data_5->team_director_name; ?></li>

                        <?php } ?>

                      </ul>

                    </div>

                    <div class="col-lg-6">

                      <p><strong>Designation</strong></p>

                      <ul>

                        <?php foreach ($getData5 as $data_5) { ?>

                        <li><?php echo $data_5->team_director_designation; ?></li>

                        <?php } ?>

                      </ul>

                    </div>

                  </div>

                </div>

            </div>

            <?php } ?>



            <?php if (isset($getData6) && count($getData6) > 0) {

            $getData_6 = json_decode(json_encode($getData6), true); ?>

            <div class="col-lg-6">

                <div class="portfolio-info">

                  <h3><?php echo $getDocumentType[$getData_6[0]['team_document_type']]; ?></h3>

                  <div class="row">

                    <div class="col-lg-6">

                      <p><strong>Name</strong></p>

                      <ul>

                        <?php foreach ($getData6 as $data_6) { ?>

                        <li><?php echo $data_6->team_director_name; ?></li>

                        <?php } ?>

                      </ul>

                    </div>

                    <div class="col-lg-6">

                      <p><strong>Designation</strong></p>

                      <ul>

                        <?php foreach ($getData6 as $data_6) { ?>

                        <li><?php echo $data_6->team_director_designation; ?></li>

                        <?php } ?>

                      </ul>

                    </div>

                  </div>

                </div>

            </div>

            <?php } ?>



        </div>



      </div>

    </section>

