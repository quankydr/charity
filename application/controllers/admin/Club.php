<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Club extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('clubmodel','',TRUE);
        $this->load->model('sportmodel','',TRUE);
    }



    public function index()
    {
    	$this->data['all_club'] = $this->clubmodel->getAllItem();
        $this->data['all_sport'] = $this->sportmodel->getAllItem();
    	$this->data['page_title'] = 'Club Management';
    	$this->data['page_js'] = 'club';
        $this->render('admin/club/club_view');
    }

    public function doAdd()
    {
        try{
                $content = $_POST['name'];
                $cat = $_POST['category'];
                $language = $_POST['language'];
                $level = $_POST['level'];
                $admin = $this->session->userdata('adminID');
                $rightAnswer = $_POST['answer'];
                $answer1 = $_POST['answer1'];
                $answer2 = $_POST['answer2'];
                $answer3 = $_POST['answer3'];
                $insertID =  $this->questionmodel->addQuestion($content, $cat, $language, $level, $admin);
                $this->answermodel->addAnswer($rightAnswer, $insertID, $language, true, $admin);
                $this->answermodel->addAnswer($answer1, $insertID, $language, false, $admin);
                $this->answermodel->addAnswer($answer2, $insertID, $language, false, $admin);
                $this->answermodel->addAnswer($answer3, $insertID, $language, false, $admin);
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
        $lid = $this->uri->segment(5, 1);
        if(!$this->questionmodel->isExistItem($id)){
            $this->render('admin/404');
        } else if (!$this->languagemodel->isExistItem($lid)){
            $this->render('admin/404');
        } else{
            $question = $this->questionmodel->getquestionByID($id, $lid);
            $language = $this->languagemodel->getLanguageByID($lid);
            $answers = $this->answermodel->getAnswersOfQuestion($id, $lid);
            if(count($question) > 0){

            } else{
                $admin = $this->session->userdata('adminID');
                $this->questionmodel->addQuestionLanguage($id, $lid, '', '', $admin);
                $question = $this->questionmodel->getquestionByID($id, $lid);
            }
            ;
            $this->data['all_category'] = $this->categorymodel->getAllAvailableCategory();
            $this->data['all_level'] = $this->levelmodel->getAllLevel();
            $this->data['all_answer'] = $answers;
            $this->data['page_title'] = 'Question Management - Edit question';
            $this->data['page_js'] = 'question';
            $this->data['item'] = $question[0];
            $this->render('admin/question/question_edit');
        }
    }

    public function doEdit($id){
        if(!isset($id) || $id == ''){
            $status = false;
            $msg = "No selected item";
        } else{
            try{
                $qid = intval($id);
                $name = $_POST['name'];
                $stt = $_POST['status'];
                $cat = $_POST['category'];
                $level = $_POST['level'];
                $answer = $_POST['answer'];
                $status = $this->questionmodel->editQuestion($qid, $cat, $level, $stt, '1', $name);
                if($status){
                    $this->answermodel->resetAllAnswerOfQuestion($qid);
                    $this->answermodel->setRightAnswerForQuestion($qid, $answer);
                }
                if($status){
                    $msg = "Successfully edited item";
                } else{
                    $msg = "An error occured! Please try again";
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
