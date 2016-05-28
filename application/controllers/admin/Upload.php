<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

    }

    public function doUpload(){
     
        $sourcePath = $_FILES['file']['tmp_name'];       
        
        $dirpath = getcwd();
        var_dump($dirpath);

        $targetPath = $dirpath."/assets/app_images/admin/avatar/".$_FILES['file']['name'];
        move_uploaded_file($sourcePath,$targetPath) ;    // Moving 
        $data = array(
                    'status' => true,
                    'msg'=> $targetPath,
                    'fileName' => $_FILES['file']['name']
                        );
        echo json_encode($data);
       // header('Location: '. $dirpath . "/admin/profile");   
    }

    
    
}