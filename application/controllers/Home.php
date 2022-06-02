<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');

        $contactClause = array('status' => 1);
        $contactOrderBy = 'contact_id ASC';
        $this->data['contactDetails'] = $this->admin_model->getdata('contact_data', $contactClause, $contactOrderBy);

        $this->data['getDocumentType'] = $this->admin_model->get_dropdown_value('document_type_data','document_type_id','document_type','status = 1');
        $this->data['getReportDocumentType'] = $this->admin_model->get_dropdown_value('document_type_data','document_type_id','document_type','document_type_no = 1 AND status = 1');
    }

    public function index() {

        $this->data['title'] = "Swasti Vinayaka Art - Home";
        $this->data['description'] = "";
        $this->data['keywords'] = "";

        $orderBy = 'team_id  DESC';
        $whereclause = array('team_document_type' => 6, 'team_document_no' => 2, 'status' => 1);
        $this->data['getData'] = $this->admin_model->getdata('team_data',$whereclause,$orderBy);

        $this->data['subview'] = 'website/homepage.php';
        $this->load->view('website/layout', $this->data);
    }

    public function annualReport() {

        $this->data['title'] = "Swasti Vinayaka Art - Annual Report";
        $this->data['description'] = "";
        $this->data['keywords'] = "";

        $this->data['text_1'] = "Reports";

        $orderBy = 'document_upload_id DESC';
        $whereclause = array('document_upload_type' => 1, 'document_upload_type_no' => 1, 'status' => 1);
        $this->data['getData'] = $this->admin_model->getdata('document_upload_data',$whereclause,$orderBy);

        $this->data['subview'] = 'website/report-view.php';
        $this->load->view('website/layout', $this->data);

    }

    public function quarterlyFinancialResults() {

        $this->data['title'] = "Swasti Vinayaka Art - Quarterly Financial Results";
        $this->data['description'] = "";
        $this->data['keywords'] = "";

        $this->data['text_1'] = "Reports";

        $orderBy = 'document_upload_id DESC';
        $whereclause = array('document_upload_type' => 2, 'document_upload_type_no' => 1, 'status' => 1);
        $this->data['getData'] = $this->admin_model->getdata('document_upload_data',$whereclause,$orderBy);

        $this->data['subview'] = 'website/report-view.php';
        $this->load->view('website/layout', $this->data);

    }

    public function shareholdingPattern() {

        $this->data['title'] = "Swasti Vinayaka Art - Shareholding Pattern";
        $this->data['description'] = "";
        $this->data['keywords'] = "";

        $this->data['text_1'] = "Reports";

        $orderBy = 'document_upload_id DESC';
        $whereclause = array('document_upload_type' => 3, 'document_upload_type_no' => 1, 'status' => 1);
        $this->data['getData'] = $this->admin_model->getdata('document_upload_data',$whereclause,$orderBy);

        $this->data['subview'] = 'website/report-view.php';
        $this->load->view('website/layout', $this->data);

    }

    public function unclaimedDivided() {

        $this->data['title'] = "Swasti Vinayaka Art - Unclaimed Dividend Transfer to Investor Education and Protection Fund (IEPF)";
        $this->data['description'] = "";
        $this->data['keywords'] = "";

        $this->data['text_1'] = "Reports";

        $orderBy = 'document_upload_id DESC';
        $whereclause = array('document_upload_type' => 4, 'document_upload_type_no' => 1, 'status' => 1);
        $this->data['getData'] = $this->admin_model->getdata('document_upload_data',$whereclause,$orderBy);

        $this->data['subview'] = 'website/report-view.php';
        $this->load->view('website/layout', $this->data);

    }

    public function declarationOfEvotingResults() {

        $this->data['title'] = "Swasti Vinayaka Art - Declaration of E_Voting Results";
        $this->data['description'] = "";
        $this->data['keywords'] = "";

        $this->data['text_1'] = "Reports";

        $orderBy = 'document_upload_id DESC';
        $whereclause = array('document_upload_type' => 5, 'document_upload_type_no' => 1, 'status' => 1);
        $this->data['getData'] = $this->admin_model->getdata('document_upload_data',$whereclause,$orderBy);

        $this->data['subview'] = 'website/report-view.php';
        $this->load->view('website/layout', $this->data);

    }

    public function unclaimedShares() {

        $this->data['title'] = "Swasti Vinayaka Art - Unclaimed Shares Transfer to Investor Education and Protection Fund (IEPF)";
        $this->data['description'] = "";
        $this->data['keywords'] = "";

        $this->data['text_1'] = "Reports";

        $orderBy = 'document_upload_id DESC';
        $whereclause = array('document_upload_type' => 14, 'document_upload_type_no' => 1, 'status' => 1);
        $this->data['getData'] = $this->admin_model->getdata('document_upload_data',$whereclause,$orderBy);

        $this->data['subview'] = 'website/report-view.php';
        $this->load->view('website/layout', $this->data);

    }

    public function managementTeam() {

        $this->data['title'] = "Swasti Vinayaka Art - Management Team";
        $this->data['description'] = "";
        $this->data['keywords'] = "";

        $this->data['text_1'] = "Management Team";

        $orderBy = 'team_id  DESC';
        $whereclause = array('team_document_type' => 6, 'team_document_no' => 2, 'status' => 1);
        $this->data['getData'] = $this->admin_model->getdata('team_data',$whereclause,$orderBy);

        $whereclause2 = array('team_document_type' => 7, 'team_document_no' => 2, 'status' => 1);
        $this->data['getData2'] = $this->admin_model->getdata('team_data',$whereclause2,$orderBy);

        $whereclause3 = array('team_document_type' => 8, 'team_document_no' => 2, 'status' => 1);
        $this->data['getData3'] = $this->admin_model->getdata('team_data',$whereclause3,$orderBy);

        $whereclause4 = array('team_document_type' => 9, 'team_document_no' => 2, 'status' => 1);
        $this->data['getData4'] = $this->admin_model->getdata('team_data',$whereclause4,$orderBy);

        $whereclause5 = array('team_document_type' => 10, 'team_document_no' => 2, 'status' => 1);
        $this->data['getData5'] = $this->admin_model->getdata('team_data',$whereclause5,$orderBy);

        $whereclause6 = array('team_document_type' => 11, 'team_document_no' => 2, 'status' => 1);
        $this->data['getData6'] = $this->admin_model->getdata('team_data',$whereclause6,$orderBy);


        $this->data['subview'] = 'website/team-view.php';
        $this->load->view('website/layout', $this->data);

    }

    public function announcements() {

        $this->data['title'] = "Swasti Vinayaka Art - Announcements";
        $this->data['description'] = "";
        $this->data['keywords'] = "";

        $this->data['text_1'] = "Announcements";

        $orderBy = 'document_upload_id DESC';

        $whereclause = array('document_upload_type' => 12, 'document_upload_type_no' => 3, 'status' => 1);
        $this->data['getData'] = $this->admin_model->getdata('document_upload_data',$whereclause,$orderBy);

        $whereclause2 = array('document_upload_type' => 13, 'document_upload_type_no' => 3, 'status' => 1);
        $this->data['getData2'] = $this->admin_model->getdata('document_upload_data',$whereclause2,$orderBy);

        $this->data['subview'] = 'website/report-view.php';
        $this->load->view('website/layout', $this->data);

    }

    public function companyPolicy() {

        $this->data['title'] = "Swasti Vinayaka Art - Company Policy";
        $this->data['description'] = "";
        $this->data['keywords'] = "";

        $this->data['text_1'] = "Company Policy";

        $orderBy = 'document_upload_id DESC';
        $whereclause = array('document_upload_type' => 1, 'document_upload_type_no' => 4, 'status' => 1);
        $this->data['getData'] = $this->admin_model->getdata('document_upload_data',$whereclause,$orderBy);

        $this->data['subview'] = 'website/report-view.php';
        $this->load->view('website/layout', $this->data);

    }

    public function download() {

        $this->data['title'] = "Swasti Vinayaka Art - Download";
        $this->data['description'] = "";
        $this->data['keywords'] = "";

        $this->data['text_1'] = "Download";

        $orderBy = 'document_upload_id DESC';
        $whereclause = array('document_upload_type' => 1, 'document_upload_type_no' => 5, 'status' => 1);
        $this->data['getData'] = $this->admin_model->getdata('document_upload_data',$whereclause,$orderBy);

        $this->data['subview'] = 'website/report-view.php';
        $this->load->view('website/layout', $this->data);

    }


}

?>
