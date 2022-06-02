<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Admin extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->isLoggedIn();
    }

    public function index() { }

    public function changeStatus($id,$colName='',$status,$tableName='',$function=''){

        $where_clause = array($colName => $id);
        $update_data = array('status' => $status);
        $this->admin_model->update($tableName,$update_data,$where_clause);
        redirect('admin/'.$function.'', 'refresh');

    }


    public function reportDocumentType($document_type_id = '') {

        if($this->isAdmin() == TRUE) {
            $this->loadThis();
        } else {

            $this->global['pageTitle'] = 'Swasti Vinayaka Art - Reports';

            $this->data['header'] = "Reports";

            $getwhereClause = array('document_type_id' => $document_type_id, 'document_type_no' => 1);
            $this->data['getDocumentTypeData'] = $this->admin_model->getdata('document_type_data',$getwhereClause);

            $whereclause = array('document_type_no' => 1);
            $this->data['documentTypeData'] = $this->admin_model->getdata('document_type_data',$whereclause);

            $document_type = $this->input->post("document_type");
            if (isset($document_type) && !empty($document_type)) {

                $document_type_no = 1;
                $create_date = date("d-m-Y h:i:sa");
                $modify_date = date("d-m-Y h:i:sa");
                $status = 1;

                $document_type_id = $this->input->post("document_type_id");

                $updateData = array("document_type" => $this->input->post("document_type"),
                                    "document_type_no" => $document_type_no,
                                    'modify_date' => $modify_date,
                                    "status" => $status );

                $insertData = array("document_type" => $this->input->post("document_type"),
                                    "document_type_no" => $document_type_no,
                                    "create_date" => $create_date,
                                    'modify_date' => $modify_date,
                                    "status" => $status );

                if (isset($document_type_id) && !empty($document_type_id)) {

                    $where_clause = array('document_type_id'=>$document_type_id);
                    $this->admin_model->update('document_type_data',$updateData,$where_clause);
                    redirect(base_url('admin/report-document-type'));

                } else {

                    $this->admin_model->insert('document_type_data',$insertData);
                    redirect(base_url('admin/report-document-type'));

                }

            }

            $this->load->view('includes/header', $this->global);
            $this->load->view("admin/report_document_type", $this->data);
            $this->load->view('includes/footer', $this->global);

        }

    }

    public function teamDocumentType($document_type_id = '') {

        if($this->isAdmin() == TRUE) {
            $this->loadThis();
        } else {

            $this->global['pageTitle'] = 'Swasti Vinayaka Art - Management Team';

            $this->data['header'] = "Management Team";

            $getwhereClause = array('document_type_id' => $document_type_id, 'document_type_no' => 2);
            $this->data['getDocumentTypeData'] = $this->admin_model->getdata('document_type_data',$getwhereClause);

            $whereclause = array('document_type_no' => 2);
            $this->data['documentTypeData'] = $this->admin_model->getdata('document_type_data',$whereclause);

            $document_type = $this->input->post("document_type");
            if (isset($document_type) && !empty($document_type)) {

                $document_type_no = 2;
                $create_date = date("d-m-Y h:i:sa");
                $modify_date = date("d-m-Y h:i:sa");
                $status = 1;

                $document_type_id = $this->input->post("document_type_id");

                $updateData = array("document_type" => $this->input->post("document_type"),
                                    "document_type_no" => $document_type_no,
                                    'modify_date' => $modify_date,
                                    "status" => $status );

                $insertData = array("document_type" => $this->input->post("document_type"),
                                    "document_type_no" => $document_type_no,
                                    "create_date" => $create_date,
                                    'modify_date' => $modify_date,
                                    "status" => $status );

                if (isset($document_type_id) && !empty($document_type_id)) {

                    $where_clause = array('document_type_id'=>$document_type_id);
                    $this->admin_model->update('document_type_data',$updateData,$where_clause);
                    redirect(base_url('admin/team-document-type'));

                } else {

                    $this->admin_model->insert('document_type_data',$insertData);
                    redirect(base_url('admin/team-document-type'));

                }

            }

            $this->load->view('includes/header', $this->global);
            $this->load->view("admin/team_document_type", $this->data);
            $this->load->view('includes/footer', $this->global);

        }

    }

    public function announcementsDocumentType($document_type_id = '') {

        if($this->isAdmin() == TRUE) {
            $this->loadThis();
        } else {

            $this->global['pageTitle'] = 'Swasti Vinayaka Art - Announcements';

            $this->data['header'] = "Announcements";

            $getwhereClause = array('document_type_id' => $document_type_id, 'document_type_no' => 3);
            $this->data['getDocumentTypeData'] = $this->admin_model->getdata('document_type_data',$getwhereClause);

            $whereclause = array('document_type_no' => 3);
            $this->data['documentTypeData'] = $this->admin_model->getdata('document_type_data',$whereclause);

            $document_type = $this->input->post("document_type");
            if (isset($document_type) && !empty($document_type)) {

                $document_type_no = 3;
                $create_date = date("d-m-Y h:i:sa");
                $modify_date = date("d-m-Y h:i:sa");
                $status = 1;

                $document_type_id = $this->input->post("document_type_id");

                $updateData = array("document_type" => $this->input->post("document_type"),
                                    "document_type_no" => $document_type_no,
                                    'modify_date' => $modify_date,
                                    "status" => $status );

                $insertData = array("document_type" => $this->input->post("document_type"),
                                    "document_type_no" => $document_type_no,
                                    "create_date" => $create_date,
                                    'modify_date' => $modify_date,
                                    "status" => $status );

                if (isset($document_type_id) && !empty($document_type_id)) {

                    $where_clause = array('document_type_id'=>$document_type_id);
                    $this->admin_model->update('document_type_data',$updateData,$where_clause);
                    redirect(base_url('admin/announcements-document-type'));

                } else {

                    $this->admin_model->insert('document_type_data',$insertData);
                    redirect(base_url('admin/announcements-document-type'));

                }

            }

            $this->load->view('includes/header', $this->global);
            $this->load->view("admin/announcements_document_type", $this->data);
            $this->load->view('includes/footer', $this->global);

        }

    }

    public function policyDocumentType($document_type_id = '') {

        if($this->isAdmin() == TRUE) {
            $this->loadThis();
        } else {

            $this->global['pageTitle'] = 'Swasti Vinayaka Art - Company Policies';

            $this->data['header'] = "Company Policies";

            $getwhereClause = array('document_type_id' => $document_type_id, 'document_type_no' => 4);
            $this->data['getDocumentTypeData'] = $this->admin_model->getdata('document_type_data',$getwhereClause);

            $whereclause = array('document_type_no' => 4);
            $this->data['documentTypeData'] = $this->admin_model->getdata('document_type_data',$whereclause);

            $document_type = $this->input->post("document_type");
            if (isset($document_type) && !empty($document_type)) {

                $document_type_no = 4;
                $create_date = date("d-m-Y h:i:sa");
                $modify_date = date("d-m-Y h:i:sa");
                $status = 1;

                $document_type_id = $this->input->post("document_type_id");

                $updateData = array("document_type" => $this->input->post("document_type"),
                                    "document_type_no" => $document_type_no,
                                    'modify_date' => $modify_date,
                                    "status" => $status );

                $insertData = array("document_type" => $this->input->post("document_type"),
                                    "document_type_no" => $document_type_no,
                                    "create_date" => $create_date,
                                    'modify_date' => $modify_date,
                                    "status" => $status );

                if (isset($document_type_id) && !empty($document_type_id)) {

                    $where_clause = array('document_type_id'=>$document_type_id);
                    $this->admin_model->update('document_type_data',$updateData,$where_clause);
                    redirect(base_url('admin/policy-document-type'));

                } else {

                    $this->admin_model->insert('document_type_data',$insertData);
                    redirect(base_url('admin/policy-document-type'));

                }

            }

            $this->load->view('includes/header', $this->global);
            $this->load->view("admin/policy_document_type", $this->data);
            $this->load->view('includes/footer', $this->global);

        }

    }

    public function downloadDocumentType($document_type_id = '') {

        if($this->isAdmin() == TRUE) {
            $this->loadThis();
        } else {

            $this->global['pageTitle'] = 'Swasti Vinayaka Art - Download';

            $this->data['header'] = "Download";

            $getwhereClause = array('document_type_id' => $document_type_id, 'document_type_no' => 5);
            $this->data['getDocumentTypeData'] = $this->admin_model->getdata('document_type_data',$getwhereClause);

            $whereclause = array('document_type_no' => 5);
            $this->data['documentTypeData'] = $this->admin_model->getdata('document_type_data',$whereclause);

            $document_type = $this->input->post("document_type");
            if (isset($document_type) && !empty($document_type)) {

                $document_type_no = 5;
                $create_date = date("d-m-Y h:i:sa");
                $modify_date = date("d-m-Y h:i:sa");
                $status = 1;

                $document_type_id = $this->input->post("document_type_id");

                $updateData = array("document_type" => $this->input->post("document_type"),
                                    "document_type_no" => $document_type_no,
                                    'modify_date' => $modify_date,
                                    "status" => $status );

                $insertData = array("document_type" => $this->input->post("document_type"),
                                    "document_type_no" => $document_type_no,
                                    "create_date" => $create_date,
                                    'modify_date' => $modify_date,
                                    "status" => $status );

                if (isset($document_type_id) && !empty($document_type_id)) {

                    $where_clause = array('document_type_id'=>$document_type_id);
                    $this->admin_model->update('document_type_data',$updateData,$where_clause);
                    redirect(base_url('admin/download-document-type'));

                } else {

                    $this->admin_model->insert('document_type_data',$insertData);
                    redirect(base_url('admin/download-document-type'));

                }

            }

            $this->load->view('includes/header', $this->global);
            $this->load->view("admin/download_document_type", $this->data);
            $this->load->view('includes/footer', $this->global);

        }

    }

    public function reportDocumentUpload($document_upload_id = ''){

        if($this->isAdmin() == TRUE) {
            $this->loadThis();
        } else {

            $this->global['pageTitle'] = 'Swasti Vinayaka Art - Reports';

            $this->data['header'] = "Reports";

            $this->data['getDocumentType'] = $this->admin_model->get_dropdown_value('document_type_data','document_type_id','document_type','document_type_no = 1 AND status = 1');

            $whereclause = array('document_upload_type_no' => 1);
            $this->data['documentUploadData'] = $this->admin_model->getdata('document_upload_data',$whereclause);

            $getwhereClause = array('document_upload_id' => $document_upload_id, 'document_upload_type_no' => 1);
            $this->data['getDocumentUploadData'] = $this->admin_model->getdata('document_upload_data',$getwhereClause);

            $document_upload_title = $this->input->post("document_upload_title");
            if (isset($document_upload_title) && !empty($document_upload_title)) {

                $document_upload_type_no = 1;
                $document_upload_type = $this->input->post("document_upload_type");
                $create_date = date("d-m-Y h:i:sa");
                $modify_date = date("d-m-Y h:i:sa");
                $status = 1;

                $document_upload_link = $_FILES['document_upload_link'];
                if (isset($document_upload_link) && !empty($document_upload_link)) {

                    $target_dir = "uploads/";
                    $file_name = $document_upload_link['name'];
                    $file_type = $document_upload_link['type'];
                    $file_tmp = $document_upload_link['tmp_name'];
                    $file_size = $document_upload_link['size'];

                    $target_file = $target_dir.$document_upload_type_no.'/'.$document_upload_type.'/';
                    $target_file_name = $target_file.$file_name;

                    if (!file_exists($target_file)) {
                        mkdir($target_file, 0777, true);
                    }

                    if (!file_exists($target_file_name)) {
                        move_uploaded_file($file_tmp,$target_file_name);
                    }

                    $document_upload_id = $this->input->post("document_upload_id");
                    $get_document_upload_link = $this->input->post("get_document_upload_link");
                    $linkArray = explode('/',$get_document_upload_link);
                    $upload_file_name = end($linkArray);

                    if ( !empty($document_upload_id) && (file_exists($get_document_upload_link) || !file_exists($target_file_name)) ) {
                        if (isset($file_name) && !empty($file_name)) {
                            $upload_file_name = $file_name;
                        }
                        $target_file_name = $target_file.$upload_file_name;
                    }

                    $updateData = array(
                        "document_upload_title" => $this->input->post("document_upload_title"),
                        "document_upload_description" => $this->input->post("document_upload_description"),
                        "document_upload_link" => $target_file_name,
                        "document_upload_type" => $document_upload_type,
                        "document_upload_type_no" => $document_upload_type_no,
                        "document_upload_year" => $this->input->post("document_upload_year"),
                        'modify_date' => $modify_date,
                        "status" => $status );

                    $insertData = array(
                        "document_upload_title" => $this->input->post("document_upload_title"),
                        "document_upload_description" => $this->input->post("document_upload_description"),
                        "document_upload_link" => $target_file_name,
                        "document_upload_type" => $document_upload_type,
                        "document_upload_type_no" => $document_upload_type_no,
                        "document_upload_year" => $this->input->post("document_upload_year"),
                        "create_date" => $create_date,
                        'modify_date' => $modify_date,
                        "status" => $status );

                    if (isset($document_upload_id) && !empty($document_upload_id)) {

                        $where_clause = array('document_upload_id'=>$document_upload_id);
                        $this->admin_model->update('document_upload_data',$updateData,$where_clause);
                        redirect(base_url('admin/report-document-upload'));

                    } else {

                        $this->admin_model->insert('document_upload_data',$insertData);
                        redirect(base_url('admin/report-document-upload'));

                    }
                }

            }

            $this->load->view('includes/header', $this->global);
            $this->load->view("admin/report_document_upload", $this->data);
            $this->load->view('includes/footer', $this->global);

        }
    }

    public function announcementsDocumentUpload($document_upload_id = ''){

        if($this->isAdmin() == TRUE) {
            $this->loadThis();
        } else {

            $this->global['pageTitle'] = 'Swasti Vinayaka Art - Announcements';

            $this->data['header'] = "Announcements";

            $this->data['getDocumentType'] = $this->admin_model->get_dropdown_value('document_type_data','document_type_id','document_type','document_type_no = 3 AND status = 1');

            $whereclause = array('document_upload_type_no' => 3);
            $this->data['documentUploadData'] = $this->admin_model->getdata('document_upload_data',$whereclause);

            $getwhereClause = array('document_upload_id' => $document_upload_id, 'document_upload_type_no' => 3);
            $this->data['getDocumentUploadData'] = $this->admin_model->getdata('document_upload_data',$getwhereClause);

            $document_upload_title = $this->input->post("document_upload_title");
            if (isset($document_upload_title) && !empty($document_upload_title)) {

                $document_upload_type_no = 3;
                $document_upload_type = $this->input->post("document_upload_type");
                $create_date = date("d-m-Y h:i:sa");
                $modify_date = date("d-m-Y h:i:sa");
                $status = 1;

                $document_upload_link = $_FILES['document_upload_link'];
                if (isset($document_upload_link) && !empty($document_upload_link)) {

                    $target_dir = "uploads/";
                    $file_name = $document_upload_link['name'];
                    $file_type = $document_upload_link['type'];
                    $file_tmp = $document_upload_link['tmp_name'];
                    $file_size = $document_upload_link['size'];

                    $target_file = $target_dir.$document_upload_type_no.'/'.$document_upload_type.'/';
                    $target_file_name = $target_file.$file_name;

                    if (!file_exists($target_file)) {
                        mkdir($target_file, 0777, true);
                    }

                    if (!file_exists($target_file_name)) {
                        move_uploaded_file($file_tmp,$target_file_name);
                    }

                    $document_upload_id = $this->input->post("document_upload_id");
                    $get_document_upload_link = $this->input->post("get_document_upload_link");
                    $linkArray = explode('/',$get_document_upload_link);
                    $upload_file_name = end($linkArray);

                    if ( !empty($document_upload_id) && (file_exists($get_document_upload_link) || !file_exists($target_file_name)) ) {
                        if (isset($file_name) && !empty($file_name)) {
                            $upload_file_name = $file_name;
                        }
                        $target_file_name = $target_file.$upload_file_name;
                    }

                    $updateData = array(
                        "document_upload_title" => $this->input->post("document_upload_title"),
                        "document_upload_description" => $this->input->post("document_upload_description"),
                        "document_upload_link" => $target_file_name,
                        "document_upload_type" => $document_upload_type,
                        "document_upload_type_no" => $document_upload_type_no,
                        "document_upload_year" => $this->input->post("document_upload_year"),
                        'modify_date' => $modify_date,
                        "status" => $status );

                    $insertData = array(
                        "document_upload_title" => $this->input->post("document_upload_title"),
                        "document_upload_description" => $this->input->post("document_upload_description"),
                        "document_upload_link" => $target_file_name,
                        "document_upload_type" => $document_upload_type,
                        "document_upload_type_no" => $document_upload_type_no,
                        "document_upload_year" => $this->input->post("document_upload_year"),
                        "create_date" => $create_date,
                        'modify_date' => $modify_date,
                        "status" => $status );

                    if (isset($document_upload_id) && !empty($document_upload_id)) {

                        $where_clause = array('document_upload_id'=>$document_upload_id);
                        $this->admin_model->update('document_upload_data',$updateData,$where_clause);
                        redirect(base_url('admin/announcements-document-upload'));

                    } else {

                        $this->admin_model->insert('document_upload_data',$insertData);
                        redirect(base_url('admin/announcements-document-upload'));

                    }
                }

            }

            $this->load->view('includes/header', $this->global);
            $this->load->view("admin/announcements_document_upload", $this->data);
            $this->load->view('includes/footer', $this->global);

        }
    }

    public function policyDocumentUpload($document_upload_id = ''){

        if($this->isAdmin() == TRUE) {
            $this->loadThis();
        } else {

            $this->global['pageTitle'] = 'Swasti Vinayaka Art - Company Policies';

            $this->data['header'] = "Company Policies";

            // $this->data['getDocumentType'] = $this->admin_model->get_dropdown_value('document_type_data','document_type_id','document_type','document_type_no = 4 AND status = 1');

            $whereclause = array('document_upload_type_no' => 4);
            $this->data['documentUploadData'] = $this->admin_model->getdata('document_upload_data',$whereclause);

            $getwhereClause = array('document_upload_id' => $document_upload_id, 'document_upload_type_no' => 4);
            $this->data['getDocumentUploadData'] = $this->admin_model->getdata('document_upload_data',$getwhereClause);

            $document_upload_title = $this->input->post("document_upload_title");
            if (isset($document_upload_title) && !empty($document_upload_title)) {

                $document_upload_type_no = 4;
                // $document_upload_type = $this->input->post("document_upload_type");
                $document_upload_type = 1;
                $create_date = date("d-m-Y h:i:sa");
                $modify_date = date("d-m-Y h:i:sa");
                $status = 1;

                $document_upload_link = $_FILES['document_upload_link'];
                if (isset($document_upload_link) && !empty($document_upload_link)) {

                    $target_dir = "uploads/";
                    $file_name = $document_upload_link['name'];
                    $file_type = $document_upload_link['type'];
                    $file_tmp = $document_upload_link['tmp_name'];
                    $file_size = $document_upload_link['size'];

                    $target_file = $target_dir.$document_upload_type_no.'/'.$document_upload_type.'/';
                    $target_file_name = $target_file.$file_name;

                    if (!file_exists($target_file)) {
                        mkdir($target_file, 0777, true);
                    }

                    if (!file_exists($target_file_name)) {
                        move_uploaded_file($file_tmp,$target_file_name);
                    }

                    $document_upload_id = $this->input->post("document_upload_id");
                    $get_document_upload_link = $this->input->post("get_document_upload_link");
                    $linkArray = explode('/',$get_document_upload_link);
                    $upload_file_name = end($linkArray);

                    if ( !empty($document_upload_id) && (file_exists($get_document_upload_link) || !file_exists($target_file_name)) ) {
                        if (isset($file_name) && !empty($file_name)) {
                            $upload_file_name = $file_name;
                        }
                        $target_file_name = $target_file.$upload_file_name;
                    }

                    $updateData = array(
                        "document_upload_title" => $this->input->post("document_upload_title"),
                        "document_upload_description" => $this->input->post("document_upload_description"),
                        "document_upload_link" => $target_file_name,
                        "document_upload_type" => $document_upload_type,
                        "document_upload_type_no" => $document_upload_type_no,
                        'modify_date' => $modify_date,
                        "status" => $status );

                    $insertData = array(
                        "document_upload_title" => $this->input->post("document_upload_title"),
                        "document_upload_description" => $this->input->post("document_upload_description"),
                        "document_upload_link" => $target_file_name,
                        "document_upload_type" => $document_upload_type,
                        "document_upload_type_no" => $document_upload_type_no,
                        "create_date" => $create_date,
                        'modify_date' => $modify_date,
                        "status" => $status );

                    if (isset($document_upload_id) && !empty($document_upload_id)) {

                        $where_clause = array('document_upload_id'=>$document_upload_id);
                        $this->admin_model->update('document_upload_data',$updateData,$where_clause);
                        redirect(base_url('admin/policy-document-upload'));

                    } else {

                        $this->admin_model->insert('document_upload_data',$insertData);
                        redirect(base_url('admin/policy-document-upload'));

                    }
                }

            }

            $this->load->view('includes/header', $this->global);
            $this->load->view("admin/policy_document_upload", $this->data);
            $this->load->view('includes/footer', $this->global);

        }
    }

    public function downloadDocumentUpload($document_upload_id = ''){

        if($this->isAdmin() == TRUE) {
            $this->loadThis();
        } else {

            $this->global['pageTitle'] = 'Swasti Vinayaka Art - Download';

            $this->data['header'] = "Download";

            // $this->data['getDocumentType'] = $this->admin_model->get_dropdown_value('document_type_data','document_type_id','document_type','document_type_no = 5 AND status = 1');

            $whereclause = array('document_upload_type_no' => 5);
            $this->data['documentUploadData'] = $this->admin_model->getdata('document_upload_data',$whereclause);

            $getwhereClause = array('document_upload_id' => $document_upload_id, 'document_upload_type_no' => 5);
            $this->data['getDocumentUploadData'] = $this->admin_model->getdata('document_upload_data',$getwhereClause);

            $document_upload_title = $this->input->post("document_upload_title");
            if (isset($document_upload_title) && !empty($document_upload_title)) {

                $document_upload_type_no = 5;
                // $document_upload_type = $this->input->post("document_upload_type");
                $document_upload_type = 1;
                $create_date = date("d-m-Y h:i:sa");
                $modify_date = date("d-m-Y h:i:sa");
                $status = 1;

                $document_upload_link = $_FILES['document_upload_link'];
                if (isset($document_upload_link) && !empty($document_upload_link)) {

                    $target_dir = "uploads/";
                    $file_name = $document_upload_link['name'];
                    $file_type = $document_upload_link['type'];
                    $file_tmp = $document_upload_link['tmp_name'];
                    $file_size = $document_upload_link['size'];

                    $target_file = $target_dir.$document_upload_type_no.'/'.$document_upload_type.'/';
                    $target_file_name = $target_file.$file_name;

                    if (!file_exists($target_file)) {
                        mkdir($target_file, 0777, true);
                    }

                    if (!file_exists($target_file_name)) {
                        move_uploaded_file($file_tmp,$target_file_name);
                    }

                    $document_upload_id = $this->input->post("document_upload_id");
                    $get_document_upload_link = $this->input->post("get_document_upload_link");
                    $linkArray = explode('/',$get_document_upload_link);
                    $upload_file_name = end($linkArray);

                    if ( !empty($document_upload_id) && (file_exists($get_document_upload_link) || !file_exists($target_file_name)) ) {
                        if (isset($file_name) && !empty($file_name)) {
                            $upload_file_name = $file_name;
                        }
                        $target_file_name = $target_file.$upload_file_name;
                    }

                    $updateData = array(
                        "document_upload_title" => $this->input->post("document_upload_title"),
                        "document_upload_description" => $this->input->post("document_upload_description"),
                        "document_upload_link" => $target_file_name,
                        "document_upload_type" => $document_upload_type,
                        "document_upload_type_no" => $document_upload_type_no,
                        'modify_date' => $modify_date,
                        "status" => $status );

                    $insertData = array(
                        "document_upload_title" => $this->input->post("document_upload_title"),
                        "document_upload_description" => $this->input->post("document_upload_description"),
                        "document_upload_link" => $target_file_name,
                        "document_upload_type" => $document_upload_type,
                        "document_upload_type_no" => $document_upload_type_no,
                        "create_date" => $create_date,
                        'modify_date' => $modify_date,
                        "status" => $status );

                    if (isset($document_upload_id) && !empty($document_upload_id)) {

                        $where_clause = array('document_upload_id'=>$document_upload_id);
                        $this->admin_model->update('document_upload_data',$updateData,$where_clause);
                        redirect(base_url('admin/download-document-upload'));

                    } else {

                        $this->admin_model->insert('document_upload_data',$insertData);
                        redirect(base_url('admin/download-document-upload'));

                    }
                }

            }

            $this->load->view('includes/header', $this->global);
            $this->load->view("admin/download_document_upload", $this->data);
            $this->load->view('includes/footer', $this->global);

        }
    }

    public function teamDocumentUpload($team_id = '') {

        if($this->isAdmin() == TRUE) {
            $this->loadThis();
        } else {

            $this->global['pageTitle'] = 'Swasti Vinayaka Art - Management Team';

            $this->data['header'] = "Management Team";

            $getwhereClause = array('team_id' => $team_id, 'team_document_no' => 2);
            $this->data['getTeamData'] = $this->admin_model->getdata('team_data',$getwhereClause);

            $whereclause = array('team_document_no' => 2);
            $this->data['teamData'] = $this->admin_model->getdata('team_data',$whereclause);

            $this->data['getDocumentType'] = $this->admin_model->get_dropdown_value('document_type_data','document_type_id','document_type','document_type_no = 2 AND status = 1');

            $team_director_name = $this->input->post("team_director_name");
            if (isset($team_director_name) && !empty($team_director_name)) {

                $team_document_no = 2;
                $create_date = date("d-m-Y h:i:sa");
                $modify_date = date("d-m-Y h:i:sa");
                $status = 1;

                $team_id = $this->input->post("team_id");

                $updateData = array("team_director_name" => $this->input->post("team_director_name"),
                            "team_director_designation" => $this->input->post("team_director_designation"),
                            "team_document_type" => $this->input->post("team_document_type"),
                            "team_document_no" => $team_document_no,
                            'modify_date' => $modify_date,
                            "status" => $status );

                $insertData = array("team_director_name" => $this->input->post("team_director_name"),
                            "team_director_designation" => $this->input->post("team_director_designation"),
                            "team_document_type" => $this->input->post("team_document_type"),
                            "team_document_no" => $team_document_no,
                            "create_date" => $create_date,
                            'modify_date' => $modify_date,
                            "status" => $status );

                if (isset($team_id) && !empty($team_id)) {

                    $where_clause = array('team_id'=>$team_id);
                    $this->admin_model->update('team_data',$updateData,$where_clause);
                    redirect(base_url('admin/team-document-upload'));

                } else {

                    $this->admin_model->insert('team_data',$insertData);
                    redirect(base_url('admin/team-document-upload'));

                }

            }

            $this->load->view('includes/header', $this->global);
            $this->load->view("admin/team_document_upload", $this->data);
            $this->load->view('includes/footer', $this->global);

        }

    }

    public function contactDocumentUpload($contact_id = '') {

        if($this->isAdmin() == TRUE) {
            $this->loadThis();
        } else {

            $this->global['pageTitle'] = 'Swasti Vinayaka Art - Contact';

            $this->data['header'] = "Contact";

            $getwhereClause = array('contact_id' => $contact_id);
            $this->data['getContactData'] = $this->admin_model->getdata('contact_data',$getwhereClause);

            $this->data['contactData'] = $this->admin_model->getdata('contact_data');

            $contact_title = $this->input->post("contact_title");
            if (isset($contact_title) && !empty($contact_title)) {

                $create_date = date("d-m-Y h:i:sa");
                $modify_date = date("d-m-Y h:i:sa");
                $status = 1;

                $contact_id = $this->input->post("contact_id");

                $updateData = array("contact_title" => $this->input->post("contact_title"),
                                    "contact_address" => $this->input->post("contact_address"),
                                    "contact_email" => $this->input->post("contact_email"),
                                    "contact_no" => $this->input->post("contact_no"),
                                    "contact_type" => $this->input->post("contact_type"),
                                    'modify_date' => $modify_date,
                                    "status" => $status );

                $insertData = array("contact_title" => $this->input->post("contact_title"),
                                    "contact_address" => $this->input->post("contact_address"),
                                    "contact_email" => $this->input->post("contact_email"),
                                    "contact_no" => $this->input->post("contact_no"),
                                    "contact_type" => $this->input->post("contact_type"),
                                    "create_date" => $create_date,
                                    'modify_date' => $modify_date,
                                    "status" => $status );

                if (isset($contact_id) && !empty($contact_id)) {

                    $where_clause = array('contact_id'=>$contact_id);
                    $this->admin_model->update('contact_data',$updateData,$where_clause);
                    redirect(base_url('admin/contact-document-upload'));

                } else {

                    $this->admin_model->insert('contact_data',$insertData);
                    redirect(base_url('admin/contact-document-upload'));

                }

            }

            $this->load->view('includes/header', $this->global);
            $this->load->view("admin/contact_document_upload", $this->data);
            $this->load->view('includes/footer', $this->global);

        }

    }

}

?>
