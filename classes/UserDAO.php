<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserDAO
 *
 * @author alemayehu
 */
require_once '../core/init.php';
require_once '../lib/PHPDebug.php';

class UserDAO {    

    public function __construct(){
        
    }

    public function save($user){
        try{

            $userInsert = DBConnection::getInstance()->insert('tbl_user', array(                
                'user_type'                 => $user->getUserType(),
                'username'                  => $user->getUsername(),
                'user_password'             => $user->getUserPassword(),
                'user_full_name'            => $user->getUserFullName(),
                'user_status'               => $user->getUserStatus(),
                'email'                     => $user->getEmail(),
                'user_last_valid_login'     => $user->getUserLastValidLogin(),
                'user_first_invalid_login'  => $user->getUserFirstInvalidLogin(),
                'user_faild_login_count'    => $user->getUserFailedLoginCount(),
                'user_create_date'          => $user->getUserCreateDate(),
                'modified_by'               => $user->getModifiedBy(),
                'modification_date'         => $user->getModificationDate()
            )); 
            //PHPDebug::printLogText($userInsert, '../lib/debug.txt');            
            if (!DBConnection::getInstance()->insert('tbl_user', $userInsert = array())) {
                throw new Exception('There was a problem saving user.');
            }
            
        } catch (Exception $ex) {
            error_log($ex->__toString());
        }
    }
    
    public static function getUserAccount($username,$email,$password){
        //validate on the server side just in case the javascript is disabled on the client side...
        if(! empty($username) && !empty($email) && ! empty($password)){
            $user = DBConnection::getInstance()->get('tbl_user', $arrayName = array('username', '=' , $username));

            if(!$user->count()){
                echo 'No user';
            }else{
                echo $user->first()->username;
            }             
        }
    }

    /*
        This method is used for login action done on the user....be it admin or member user...        
     */
    public function find($user = null){        
        if($user){
            $field = (is_numeric($user)) ? 'user_id' : 'username';
            $data = DBConnection::getInstance()->get('tbl_user', array($field, '=', $user));

            if($data->count()){
                $this->data = $data->first();
                return $this->data;
            }
        }
        return false;
    }

    /*Did this b/c email adderss is unique to the entity*/
    public function findUsingEmail($user = null){
        $field = 'email';
        $data = DBConnection::getInstance()->get('tbl_user', array($field, '=', $user));

        if($data->count()){
            $this->data = $data->first();
            return $this->data;
        }
    }
    
    public function update($userId, $fields = array()){                
        if(! DBConnection::getInstance()->update('tbl_user', $userId, $fields) ){
            throw new Exception('There was a problem updating user profile.');
        }        
    }
}//end class
