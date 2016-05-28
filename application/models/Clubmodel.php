<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clubmodel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

 	public function getAllItem()
    {
        $query = $this -> db -> query('SELECT club.*, sport.name as sport  FROM club INNER JOIN sport ON club.sport_id = sport.id');
        return $query->result();
    }

    public function countAllClub()
    {
        $query = $this->db->query("SELECT COUNT(`club`.`id`) as Total FROM `club`");
        return $query->row()->Total;
    }
    //
    //
    // public function getFirstquestion()
    // {
    //     $query = $this -> db -> query('SELECT * FROM question INNER JOIN category ON category.id = question.cid LIMIT 1');
    //     return $query->row();
    // }
    //
    // public function getQuestionByID($id, $lid)
    // {
    //     $query = $this -> db -> query('SELECT `question`.`qid` as QuesID, `question`.`level` as QuesLevel,`question`.`cid` as QuesCat,  `question`.`status` as QuesStatus, `questionlanguage`.`content` as Content, `language`.`id` as LangID, `language`.`code` as LangCode, `language`.`name` as LangName   FROM `question` INNER JOIN `questionlanguage` ON `question`.`qid` = `questionlanguage`.`qid` INNER JOIN `language` ON `language`.`id` = `questionlanguage`.`lid` WHERE `question`.`qid` = ' . $id  . ' AND `language`.`id` = ' . $lid);
    //     return $query->result();
    //
    // }
    //
    // public function isExistItem($id){
    //     $query = $this -> db -> query('SELECT * FROM question WHERE qid = ' . $id);
    //     if($query->num_rows() > 0){
    //         return true;
    //     }
    //     return false;
    // }
    //
    // public function addQuestion($content, $cat, $language, $level, $admin)
    // {
    //     $id = -1;
    //     if($admin == 1){
    //         $st = 1;
    //     } else{
    //         $st = -1;
    //     }
    //     $data = array(
    //            'cid' => $cat,
    //            'level' => $level,
    //            'status' => $st,
    //         );
    //
    //     $query = $this -> db -> insert("question", $data);
    //     if($query){
    //         $id = $this->db->insert_id();
    //         $data = array(
    //            'qid' => $id,
    //            'lid' => $language,
    //            'content' => $content,
    //            'admin' => $admin,
    //         );
    //         $query = $this -> db -> insert("questionlanguage", $data);
    //     }
    //     return $id;
    // }
    //
    // public function editQuestion($id, $cat, $level, $status, $lid, $content)
    // {
    //     $data = array(
    //            'cid' => $cat,
    //            'level' => $level,
    //            'status' => $status,
    //         );
    //     $this->db->where("qid", $id);
    //     if($this->db->update("question", $data)){
    //         $data = array(
    //            'content' => $content
    //         );
    //         $this->db->where("qid", $id);
    //         $this->db->where("lid", $lid);
    //         return $this->db->update("questionlanguage", $data);
    //     } else{
    //         return false;
    //     }
    //
    // }
    //
    // public function totalCountquestion()
    // {
    //     $query = $this->db->query("SELECT COUNT(*) as Total FROM question");
    //     return $query->row()->Total;
    // }
}
