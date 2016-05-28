<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sportmodel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function getAllItem()
    {
        $query = $this -> db -> query('SELECT * from sport');
        return $query->result();
    }
    //
    // public function getAllAvailableCategory()
    // {
    // 	$query = $this -> db -> query('SELECT `category`.`id` as CatID, `category`.`status` as CatStatus, `categorylanguage`.`name` as CatName, `categorylanguage`.`description` as CatDesc, `language`.`id` as LangID, `language`.`code` as LangCode, `language`.`name` as LangName   FROM `category` INNER JOIN `categorylanguage` ON `category`.`id` = `categorylanguage`.`cid` INNER JOIN `language` ON `language`.`id` = `categorylanguage`.`lid` WHERE `language`.`id` = 1 AND `category`.`status` = 1 ');
    //     return $query->result();
    // }
    //
    //
    public function getFirstItem()
    {
        $query = $this -> db -> query('SELECT * FROM sport LIMIT 1');
        return $query->row();
    }

    public function getItemByID($id)
    {
        $query = $this -> db -> query('SELECT * FROM sport WHERE id= ' . $id);
        return $query->row();
    }
    //
    public function isExistItem($id){
        $query = $this -> db -> query('SELECT * FROM sport WHERE id = ' . $id);
        if($query->num_rows() > 0){
            return true;
        }
        return false;
    }
    //
    //
    //
    //
    //
    public function editItem($id, $name, $status)
    {
        $data = array(
               'status' => $status,
               'name' => $name
            );
        $this->db->where('id', $id);
        return $this->db->update("sport", $data);
    }
    //
    // public function addCategoryLanguage($cid, $lid, $name, $des, $admin){
    //     $data = array(
    //            'cid' => $cid,
    //            'lid' => $lid,
    //            'name' => $name,
    //            'description' => $des,
    //            'admin' => $admin
    //         );
    //
    //     $query = $this -> db -> insert("categorylanguage", $data);
    //     return $query;
    // }
    //
    public function addItem($name)
    {
        $id = -1;
        $data = array(
           'name' => $name,
        );
        $query = $this -> db -> insert("sport", $data);
        if($query){
          $id = $this->db->insert_id();
        }

        return $id;

    }
    //
    // public function totalCountCategory()
    // {
    //     $query = $this->db->query("SELECT COUNT(*) as Total FROM category");
    //     return $query->row()->Total;
    // }
}
