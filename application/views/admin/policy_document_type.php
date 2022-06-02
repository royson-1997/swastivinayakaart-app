<?php $getDocumentTypeData = $this->data['getDocumentTypeData']; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file"></i> Company Policies
            <small>Document Type</small>
        </h1>
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" <?php if(empty($getDocumentTypeData[0]->document_type)){ echo "id='addType'"; } else { echo "onclick='reloadPage();'"; } ?>><i class="fa fa-plus"></i> Add Type</a>
                </div>
            </div>
        </div>
    </section>

    <section class="content" id="addDocTypeSec" style="<?php if(empty($getDocumentTypeData[0]->document_type)){ echo "display:none"; } ?>">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Document Type Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <form role="form" id="addDocTypeForm" action="<?php echo base_url() ?>admin/policy-document-type" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">Document Type</label>
                                        <input type="text" class="form-control required" id="document_type" name="document_type" maxlength="100" value="<?php echo (!empty($getDocumentTypeData[0]->document_type)) ? $getDocumentTypeData[0]->document_type : ''; ?>" placeholder="Enter Document Type">
                                        <input type="hidden" name="document_type_id" value="<?php echo (!empty($getDocumentTypeData[0]->document_type_id)) ? $getDocumentTypeData[0]->document_type_id : ''; ?>">
                                    </div>

                                </div>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <?php $buttonValue = (!empty($getDocumentTypeData[0]->document_type)) ? "Update" : "Submit"; ?>
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
                            <th>Document Type</th>
                            <th>Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; if(isset($documentTypeData) && !empty($documentTypeData)) {
                          foreach($documentTypeData as $record) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $record->document_type; ?></td>
                            <td><?php if($record->status == 1){ ?>
                                <label class="label label-success">Active</label>
                            <?php } else { ?>
                                <label class="label label-danger">Deactive</label>
                            <?php } ?></td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-info" href="<?php echo base_url() ?>admin/policy-document-type/<?php echo $record->document_type_id; ?>"><i class="fa fa-pencil"></i></a>
                                <?php if($record->status == 0) { ?>
                                <a class="btn btn-primary btn-sm"
                                    href="<?php echo base_url(); ?>admin/changeStatus/<?php echo $record->document_type_id; ?>/document_type_id/1/document_type_data/policy-document-type"
                                    onclick="return confirm('Do you really want to Active this Document Type?')"><i
                                        class="fa fa-check"></i> Active</a>
                                <?php } else { ?>
                                <a class="btn btn-danger btn-sm"
                                    href="<?php echo base_url(); ?>admin/changeStatus/<?php echo $record->document_type_id; ?>/document_type_id/0/document_type_data/policy-document-type"
                                    onclick="return confirm('Do you really want to InActive this Document Type?')"><i
                                        class="fa fa-times"></i> Deactive</a>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php $i++; } } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sr No</th>
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
        window.location.href = baseURL+'admin/policy-document-type';
    }
</script>
