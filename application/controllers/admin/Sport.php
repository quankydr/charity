<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sport extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('sportmodel','',TRUE);
    }

    public function index()
    {
    	$this->data['all_sport'] = $this->sportmodel->getAllItem();
    	$this->data['page_title'] = 'Sport Management';
    	$this->data['page_js'] = 'sport';
      $this->render('admin/sport/sport_view');
    }

    public function doAdd()
    {
        try{
                $name = $_POST['name'];

                $insertID =  $this->sportmodel->addItem( $name);
                if($insertID != -1){

                    $status = true;
                    $msg = "Successfully added item";
                } else{
                    $status = false;
                    $msg = "An error occured! Please try again";
                }
            } catch(Exception $e){
                $status = false;
                $msg = "Item ID is not a number";
            }
        $dt = array('status' => $status,
                    'msg' => $msg,
                    'insertedID'  => $insertID);
        echo json_encode($dt);
    }

    public function edit($id)
    {
        if(!$this->sportmodel->isExistItem($id)){
            $this->render('admin/404');
        }else{
            $item = $this->sportmodel->getItemByID($id);
            $this->data['page_title'] = 'Sport Management - Edit Item';
            $this->data['page_js'] = 'sport';
            $this->data['item'] = $item;
            $this->render('admin/sport/sport_edit');
        }
    }

    public function doEdit($id){
        if(!isset($id) || $id == ''){
            $status = false;
            $msg = "No selected item";
        } else{
            try{
                $itemid = intval($id);
                if(!$this->sportmodel->isExistItem($itemid)){
                    $status = false;
                     $msg = "Invalid item";
                }else{
                    $name = $_POST['name'];
                    $stt = $_POST['status'];
                    $status = $this->sportmodel->editItem($itemid, $name, $stt);
                    if($status){
                        $msg = "Successfully edited item";
                    } else{
                        $msg = "An error occured! Please try again";
                    }
                }
            } catch(Exception $e){
                $status = false;
                $msg = "Item ID is not a number";
            }

        }


        $dt = array('status' => $status,
                    'msg' => $msg );
        echo json_encode($dt);
    }
}
