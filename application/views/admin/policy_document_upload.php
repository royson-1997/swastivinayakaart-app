<?php
    // $getDocumentType = $this->data['getDocumentType'];
    $getDocumentUploadData = $this->data['getDocumentUploadData'];
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file"></i> Company Policies
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

                    <form role="form" id="addDocUploadForm" action="<?php echo base_url() ?>admin/policy-document-upload" method="post" role="form" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dtname">Document Title</label>
                                        <input type="text" class="form-control" id="document_upload_title" name="document_upload_title" maxlength="100" value="<?php echo (!empty($getDocumentUploadData[0]->document_upload_title)) ? $getDocumentUploadData[0]->document_upload_title : ''; ?>" required>
                                        <input type="hidden" name="document_upload_id" value="<?php echo (!empty($getDocumentUploadData[0]->document_upload_id)) ? $getDocumentUploadData[0]->document_upload_id : ''; ?>">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ddname">Document Description</label>
                                        <input type="text" class="form-control" id="document_upload_description" name="document_upload_description" maxlength="200" value="<?php echo (!empty($getDocumentUploadData[0]->document_upload_description)) ? $getDocumentUploadData[0]->document_upload_description : ''; ?>" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">Upload Document </label><span>(Excpet PDF only)</span>
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
                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">Document Type</label>
                                        <select class="form-control" id="document_upload_type" name="document_upload_type" required>
                                            <option value="">-- SELECT --</option>
                                            <?php
                                            $document_upload_type = $getDocumentUploadData[0]->document_upload_type;
                                            foreach ($getDocumentType as $keys => $docType) { ?>
                                                <option value="<?php echo $keys; ?>" <?php if($keys == $document_upload_type){ echo 'selected'; }else{ echo ''; } ?>><?php echo $docType; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                </div> -->
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
                            <!-- <th>Document Type</th> -->
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
                            <!-- <td><?php echo $getDocumentType[$record->document_upload_type]; ?></td> -->
                            <td><?php if($record->status == 1){ ?>
                                <label class="label label-success">Active</label>
                            <?php } else { ?>
                                <label class="label label-danger">Deactive</label>
                            <?php } ?></td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-info" href="<?php echo base_url() ?>admin/policy-document-upload/<?php echo $record->document_upload_id; ?>"><i class="fa fa-pencil"></i></a>
                                <?php if($record->status == 0) { ?>
                                <a class="btn btn-primary btn-sm"
                                    href="<?php echo base_url(); ?>admin/changeStatus/<?php echo $record->document_upload_id; ?>/document_upload_id/1/document_upload_data/policy-document-upload"
                                    onclick="return confirm('Do you really want to Active this Document Data?')"><i
                                        class="fa fa-check"></i> Active</a>
                                <?php } else { ?>
                                <a class="btn btn-danger btn-sm"
                                    href="<?php echo base_url(); ?>admin/changeStatus/<?php echo $record->document_upload_id; ?>/document_upload_id/0/document_upload_data/policy-document-upload"
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
                            <!-- <th>Document Type</th> -->
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
        window.location.href = baseURL+'admin/policy-document-upload';
    }
</script>
