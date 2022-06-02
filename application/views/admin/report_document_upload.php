<?php
    $getDocumentType = $this->data['getDocumentType'];
    $getDocumentUploadData = $this->data['getDocumentUploadData'];
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file"></i> Reports
            <small>Upload Document</small>
        </h1>
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" <?php if(empty($getDocumentUploadData[0]->document_upload_title)){ echo "id='addType'"; } else { echo "onclick='reloadPage();'"; } ?>><i class="fa fa-plus"></i> Add Document</a>
                </div>
            </div>
        </div>
    </section>

    <section class="content" id="addDocTypeSec" style="<?php if(empty($getDocumentUploadData[0]->document_upload_title)){ echo "display:none"; } ?>">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Upload Document Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <form role="form" id="addDocUploadForm" action="<?php echo base_url() ?>admin/report-document-upload" method="post" role="form" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dtname">Document Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="document_upload_title" name="document_upload_title" maxlength="100" value="<?php echo (!empty($getDocumentUploadData[0]->document_upload_title)) ? $getDocumentUploadData[0]->document_upload_title : ''; ?>" required>
                                        <input type="hidden" name="document_upload_id" value="<?php echo (!empty($getDocumentUploadData[0]->document_upload_id)) ? $getDocumentUploadData[0]->document_upload_id : ''; ?>">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ddname">Document Description <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="document_upload_description" name="document_upload_description" maxlength="200" value="<?php echo (!empty($getDocumentUploadData[0]->document_upload_description)) ? $getDocumentUploadData[0]->document_upload_description : ''; ?>" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">Upload Document <span class="text-danger">*</span></label><span>(Excpet PDF only)</span>
                                        <?php if(isset($getDocumentUploadData[0]->document_upload_link) && !empty($getDocumentUploadData[0]->document_upload_link) > 0){ ?>
                                            <input type="file" class="form-control" id="document_upload_link" name="document_upload_link" accept="application/pdf">
                                            <input type="hidden" name="get_document_upload_link" value="<?php echo (!empty($getDocumentUploadData[0]->document_upload_link)) ? $getDocumentUploadData[0]->document_upload_link : ''; ?>">
                                            <ul class="list-group">
                                              <li class="list-group-item active"><?php echo $getDocumentUploadData[0]->document_upload_link; ?></li>
                                            </ul>
                                        <?php }else{ ?>
                                            <input type="file" class="form-control" id="document_upload_link" name="document_upload_link" accept="application/pdf" required>
                                        <?php } ?>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">Document Type <span class="text-danger">*</span></label>
                                        <select class="form-control" id="document_upload_type" name="document_upload_type" required>
                                            <option value="">-- SELECT --</option>
                                            <?php
                                            $document_upload_type = $getDocumentUploadData[0]->document_upload_type;
                                            foreach ($getDocumentType as $keys => $docType) { ?>
                                                <option value="<?php echo $keys; ?>" <?php if($keys == $document_upload_type){ echo 'selected'; }else{ echo ''; } ?>><?php echo $docType; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <?php $document_upload_year = isset($getDocumentUploadData[0]->document_upload_year) ? $getDocumentUploadData[0]->document_upload_year : ''; ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">Document Year</label>
                                        <select class="form-control" id="document_upload_year" name="document_upload_year">
                                            <option value="">-- SELECT --</option>
                                            <option <?php if($document_upload_year == 1){ echo 'selected'; }else{ echo ''; } ?> value="1">2010 - 11</option>
                                            <option <?php if($document_upload_year == 2){ echo 'selected'; }else{ echo ''; } ?> value="2">2011 - 12</option>
                                            <option <?php if($document_upload_year == 3){ echo 'selected'; }else{ echo ''; } ?> value="3">2012 - 13</option>
                                            <option <?php if($document_upload_year == 4){ echo 'selected'; }else{ echo ''; } ?> value="4">2013 - 14</option>
                                            <option <?php if($document_upload_year == 5){ echo 'selected'; }else{ echo ''; } ?> value="5">2014 - 15</option>
                                            <option <?php if($document_upload_year == 6){ echo 'selected'; }else{ echo ''; } ?> value="6">2015 - 16</option>
                                            <option <?php if($document_upload_year == 7){ echo 'selected'; }else{ echo ''; } ?> value="7">2016 - 17</option>
                                            <option <?php if($document_upload_year == 8){ echo 'selected'; }else{ echo ''; } ?> value="8">2017 - 18</option>
                                            <option <?php if($document_upload_year == 9){ echo 'selected'; }else{ echo ''; } ?> value="9">2018 - 19</option>
                                            <option <?php if($document_upload_year == 10){ echo 'selected'; }else{ echo ''; } ?> value="10">2019 - 20</option>
                                            <option <?php if($document_upload_year == 11){ echo 'selected'; }else{ echo ''; } ?> value="11">2020 - 21</option>
                                            <option <?php if($document_upload_year == 12){ echo 'selected'; }else{ echo ''; } ?> value="12">2021 - 22</option>
                                            <option <?php if($document_upload_year == 13){ echo 'selected'; }else{ echo ''; } ?> value="13">2022 - 23</option>
                                            <option <?php if($document_upload_year == 14){ echo 'selected'; }else{ echo ''; } ?> value="14">2023 - 24</option>
                                            <option <?php if($document_upload_year == 15){ echo 'selected'; }else{ echo ''; } ?> value="15">2024 - 25</option>
                                            <option <?php if($document_upload_year == 16){ echo 'selected'; }else{ echo ''; } ?> value="16">2025 - 26</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <?php $buttonValue = (!empty($getDocumentUploadData[0]->document_upload_title)) ? "Update" : "Submit"; ?>
                            <input type="submit" class="btn btn-primary" value="<?php echo $buttonValue; ?>" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="content">

        <div class="row">
            <div class="col-xs-12">
              <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">Document Type List</h3>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Document Title</th>
                            <th>Document Description</th>
                            <th>Document Type</th>
                            <th>Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; if(isset($documentUploadData) && !empty($documentUploadData)) {
                          foreach($documentUploadData as $record) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $record->document_upload_title; ?></td>
                            <td><?php echo $record->document_upload_description; ?></td>
                            <td><?php echo $getDocumentType[$record->document_upload_type]; ?></td>
                            <td><?php if($record->status == 1){ ?>
                                <label class="label label-success">Active</label>
                            <?php } else { ?>
                                <label class="label label-danger">Deactive</label>
                            <?php } ?></td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-info" href="<?php echo base_url() ?>admin/report-document-upload/<?php echo $record->document_upload_id; ?>"><i class="fa fa-pencil"></i></a>
                                <?php if($record->status == 0) { ?>
                                <a class="btn btn-primary btn-sm"
                                    href="<?php echo base_url(); ?>admin/changeStatus/<?php echo $record->document_upload_id; ?>/document_upload_id/1/document_upload_data/report-document-upload"
                                    onclick="return confirm('Do you really want to Active this Document Data?')"><i
                                        class="fa fa-check"></i> Active</a>
                                <?php } else { ?>
                                <a class="btn btn-danger btn-sm"
                                    href="<?php echo base_url(); ?>admin/changeStatus/<?php echo $record->document_upload_id; ?>/document_upload_id/0/document_upload_data/report-document-upload"
                                    onclick="return confirm('Do you really want to InActive this Document Data?')"><i
                                        class="fa fa-times"></i> Deactive</a>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php $i++; } } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sr No</th>
                            <th>Document Title</th>
                            <th>Document Description</th>
                            <th>Document Type</th>
                            <th>Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </tfoot>
                  </table>

                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){

        jQuery("#addType").click(function () {
            jQuery("#addDocTypeSec").toggle();
        });

        jQuery('#example').DataTable();

    });
    function reloadPage(){
        window.location.href = baseURL+'admin/report-document-upload';
    }
</script>
