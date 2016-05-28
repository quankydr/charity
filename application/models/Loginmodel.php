<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Loginmodel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function doUserLogin($username, $password)
    {
        $query = $this -> db -> query("SELECT * FROM Customers WHERE Cus_Account = '" . $username . "' AND Cus_Password = '" .  $password . "'") ;
        if($query->num_rows() > 0){
            $info = $query->row();
            if($info->Cus_Status == 1 || $info->Cus_Status == 2){
                $newdata = array(
                   'userid'    => $info->Cus_ID,
                   'username'  => $info->Cus_Account,
                   'firstname' => $info->Cus_FirstName,
                   'userstatus'=> $info->Cus_Status,
                   'logged_in' => TRUE
               );

                $this->session->set_userdata($newdata);
                if($info->Cus_Status == 1){
                    return 7;
                } else{
                    return 8;
                }
            } else{
                return 4;
            }
        } else{
            return 3;
        }
    }

    public function doAdminLogin($username, $password){
        //SELECT * FROM admin INNER JOIN role ON admin.Role_ID = role.Role_ID WHERE Ad_Account = '" . $username ."' AND Ad_Account = '" . $username ."'
        $query = $this -> db -> query("SELECT * FROM admin WHERE username = '" . $username . "' AND password = MD5('" . $password . "')") ;
        $temp = $query->row();
        if($query->num_rows() > 0){
            $info = $query->row();
            $newdata = array(
               'adminName'    => $info->fullname,
               'adminID'  => $info->uid,
               'adminAccount' => $info->username,
               'logged_in' => TRUE
           );

            $this->session->set_userdata($newdata);

            return true;

        } else{
            return false;
        }
    }

    public function doUserSignUp($username, $password, $firstname){
      $id = -1;
      $query = $this->db->query("INSERT INTO `SuperMarket`.`customers` (`Cus_FirstName`, `Cus_Status`, `Cus_Account`, `Cus_Password`) VALUES ('". $firstname ."', '2', '" . $username ."', '" . $password ."');");
      if($query){
            $id = $this->db->insert_id();
        }
        return $id;
    }







}
