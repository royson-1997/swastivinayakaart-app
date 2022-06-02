<?php
    $getDocumentType = $this->data['getDocumentType'];
    $getTeamData = $this->data['getTeamData'];
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file"></i> Management Team
            <small>Insert Data</small>
        </h1>
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" <?php if(empty($getTeamData[0]->team_director_name)){ echo "id='addType'"; } else { echo "onclick='reloadPage();'"; } ?>><i class="fa fa-plus"></i> Add Data</a>
                </div>
            </div>
        </div>
    </section>

    <section class="content" id="addDocTypeSec" style="<?php if(empty($getTeamData[0]->team_director_name)){ echo "display:none"; } ?>">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Insert Team Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <form role="form" id="addDocUploadForm" action="<?php echo base_url() ?>admin/team-document-upload" method="post" role="form" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dtname">Team Director Name</label>
                                        <input type="text" class="form-control" id="team_director_name" name="team_director_name" maxlength="100" value="<?php echo (!empty($getTeamData[0]->team_director_name)) ? $getTeamData[0]->team_director_name : ''; ?>" required>
                                        <input type="hidden" name="team_id" value="<?php echo (!empty($getTeamData[0]->team_id)) ? $getTeamData[0]->team_id : ''; ?>">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ddname">Team Director Designation</label>
                                        <input type="text" class="form-control" id="team_director_designation" name="team_director_designation" maxlength="100" value="<?php echo (!empty($getTeamData[0]->team_director_designation)) ? $getTeamData[0]->team_director_designation : ''; ?>" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">Document Type</label>
                                        <select class="form-control" id="team_document_type" name="team_document_type" required>
                                            <option value="">-- SELECT --</option>
                                            <?php
                                            $team_document_type = $getTeamData[0]->team_document_type;
                                            foreach ($getDocumentType as $keys => $docType) { ?>
                                                <option value="<?php echo $keys; ?>" <?php if($keys == $team_document_type){ echo 'selected'; }else{ echo ''; } ?>><?php echo $docType; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <?php $buttonValue = (!empty($getTeamData[0]->team_director_name)) ? "Update" : "Submit"; ?>
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
                    <h3 class="box-title">Team Data List</h3>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Director Name</th>
                            <th>Director Designation</th>
                            <th>Document Type</th>
                            <th>Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; if(isset($teamData) && !empty($teamData)) {
                          foreach($teamData as $record) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $record->team_director_name; ?></td>
                            <td><?php echo $record->team_director_designation; ?></td>
                            <td><?php echo $getDocumentType[$record->team_document_type]; ?></td>
                            <td><?php if($record->status == 1){ ?>
                                <label class="label label-success">Active</label>
                            <?php } else { ?>
                                <label class="label label-danger">Deactive</label>
                            <?php } ?></td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-info" href="<?php echo base_url() ?>admin/team-document-upload/<?php echo $record->team_id; ?>"><i class="fa fa-pencil"></i></a>
                                <?php if($record->status == 0) { ?>
                                <a class="btn btn-primary btn-sm"
                                    href="<?php echo base_url(); ?>admin/changeStatus/<?php echo $record->team_id; ?>/team_id/1/team_data/team-document-upload"
                                    onclick="return confirm('Do you really want to Active this Team Data?')"><i class="fa fa-check"></i> Active</a>
                                <?php } else { ?>
                                <a class="btn btn-danger btn-sm"
                                    href="<?php echo base_url(); ?>admin/changeStatus/<?php echo $record->team_id; ?>/team_id/0/team_data/team-document-upload"
                                    onclick="return confirm('Do you really want to InActive this Team Data?')"><i class="fa fa-times"></i> Deactive</a>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php $i++; } } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sr No</th>
                            <th>Director Name</th>
                            <th>Director Designation</th>
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
        window.location.href = baseURL+'admin/team-document-upload';
    }
</script>
