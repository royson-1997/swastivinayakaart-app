<?php
    $getContactData = $this->data['getContactData'];
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file"></i> Contact
            <small>Insert Data</small>
        </h1>
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" <?php if(empty($getContactData[0]->contact_title)){ echo "id='addType'"; } else { echo "onclick='reloadPage();'"; } ?>><i class="fa fa-plus"></i> Add Data</a>
                </div>
            </div>
        </div>
    </section>

    <section class="content" id="addDocTypeSec" style="<?php if(empty($getContactData[0]->contact_title)){ echo "display:none"; } ?>">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Insert Contact Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <form role="form" id="addDocUploadForm" action="<?php echo base_url() ?>admin/contact-document-upload" method="post" role="form" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dtname">Contact Title</label>
                                        <textarea class="form-control" id="contact_title" rows="3" name="contact_title" required><?php echo (!empty($getContactData[0]->contact_title)) ? $getContactData[0]->contact_title : ''; ?></textarea>
                                        <input type="hidden" name="contact_id" value="<?php echo (!empty($getContactData[0]->contact_id)) ? $getContactData[0]->contact_id : ''; ?>">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ddname">Contact Address</label>
                                        <textarea class="form-control" id="contact_address" rows="3" name="contact_address" required><?php echo (!empty($getContactData[0]->contact_address)) ? $getContactData[0]->contact_address : ''; ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dtname">Contact Email ID</label>
                                        <textarea class="form-control" id="contact_email" rows="3" name="contact_email" required><?php echo (!empty($getContactData[0]->contact_email)) ? $getContactData[0]->contact_email : ''; ?></textarea>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ddname">Contact No's</label>
                                        <textarea class="form-control" id="contact_no" rows="3" name="contact_no" required><?php echo (!empty($getContactData[0]->contact_no)) ? $getContactData[0]->contact_no : ''; ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">Contact Type</label>
                                        <select class="form-control" id="contact_type" name="contact_type" required>
                                            <option value="">-- SELECT --</option>
                                            <?php $contact_type = $getContactData[0]->contact_type; ?>
                                            <option value='1' <?php if($contact_type == 1){ echo 'selected'; }else{ echo ''; } ?>>REGISTERED OFFICE</option>
                                            <option value='2' <?php if($contact_type == 2){ echo 'selected'; }else{ echo ''; } ?>>REGISTRARS & TRANSFER AGENTS</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <?php $buttonValue = (!empty($getContactData[0]->contact_title)) ? "Update" : "Submit"; ?>
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
                    <h3 class="box-title">Contact Data List</h3>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Contact Address</th>
                            <th>Contact Type</th>
                            <th>Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; if(isset($contactData) && !empty($contactData)) {
                          foreach($contactData as $record) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $record->contact_title."<br>".$record->contact_address."<br>".$record->contact_email."<br>".$record->contact_no; ?></td>
                            <td><?php if($record->contact_type == 1){ echo "REGISTERED OFFICE"; } else { echo "REGISTRARS & TRANSFER AGENTS"; } ?></td>
                            <td><?php if($record->status == 1){ ?>
                                <label class="label label-success">Active</label>
                            <?php } else { ?>
                                <label class="label label-danger">Deactive</label>
                            <?php } ?></td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-info" href="<?php echo base_url() ?>admin/contact-document-upload/<?php echo $record->contact_id; ?>"><i class="fa fa-pencil"></i></a>
                                <?php if($record->status == 0) { ?>
                                <a class="btn btn-primary btn-sm"
                                    href="<?php echo base_url(); ?>admin/changeStatus/<?php echo $record->contact_id; ?>/contact_id/1/contact_data/contact-document-upload"
                                    onclick="return confirm('Do you really want to Active this Contact Data?')"><i class="fa fa-check"></i> Active</a>
                                <?php } else { ?>
                                <a class="btn btn-danger btn-sm"
                                    href="<?php echo base_url(); ?>admin/changeStatus/<?php echo $record->contact_id; ?>/contact_id/0/contact_data/contact-document-upload"
                                    onclick="return confirm('Do you really want to InActive this Contact Data?')"><i class="fa fa-times"></i> Deactive</a>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php $i++; } } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sr No</th>
                            <th>Contact Address</th>
                            <th>Contact Type</th>
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
        window.location.href = baseURL+'admin/contact-document-upload';
    }
</script>
