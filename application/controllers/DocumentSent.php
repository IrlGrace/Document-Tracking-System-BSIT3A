 <?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class DocumentSent extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('filesModel','files');
        $this->load->model('documentsModel','Files');
        $this->load->model('usersModel','User');
        $this->load->model('forwardRouteModel','Route');
        if(!isset($_SESSION['username']))
        {
            redirect().'Dts/index';
        }
    }    

    public function viewSent()
    {
        $condition = null;
        $documents = $this->Route->read($condition);
        $data['documents']=$documents;

        $data['title'] = "Document Tracking System - Dashboard";

        $user = $this->session->userdata('username');
        $condition = array('username' => $user);
        $userdata = $this->User->read($condition);
        $data['userdata'] = $userdata;
        
        $this->load->view('include/header',$data);
        if($_SESSION['username'] == "admin")
        {    
            $this->load->view('profileAdmin');
        }else
        {
            $this->load->view('profile');
        }
            $this->load->view('viewSentDoc');          
    }

    public function viewSentMess($routeId)
    {
        $data['title'] = "Document Tracking System - Dashboard";

        $user = $this->session->userdata('username');
        $condition = array('username' => $user);
        $userdata = $this->User->read($condition);
        $data['userdata'] = $userdata;

        $condition = null;
        $users = $this->User->read($condition);
        $data['users'] = $users;

        $condition = array('routeId' => $routeId);
        $documents = $this->Route->read($condition);
        $data['documents']=$documents;
        $data['userdata'] = $userdata;

        $this->load->view('include/header',$data);  
        if($_SESSION['username'] == "admin"){    
            $this->load->view('profileAdmin');
        }else{
            $this->load->view('profile');
        }
        $this->load->view('viewSentMess');        
    }

    public function removeSentMess($trackcode){
        $condition = Array('trackcode' => $trackcode);
        $data = array('sentDelete' => TRUE);
        $this->Files->deleteToSent($data,$condition);
        echo '<script language="javascript">';
        echo 'alert("Successfully removed")';
        echo '</script>';
        redirect(base_url('DocumentSent/viewSent'));
    }

}?>