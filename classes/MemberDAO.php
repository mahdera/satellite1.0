<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MemberDAO
 *
 * @author mneway
 */
require_once '../lib/PHPDebug.php';

class MemberDAO {

    public function __construct() {
        
    }

    public function save($member) {
        try {
            //var_dump($member);
            $memberInsert = DBConnection::getInstance()->insert('tbl_member', array(
                'first_name' => $member->getFirstName(),
                'last_name' => $member->getLastName(),
                'organization' => $member->getOrganization(),
                'description' => $member->getDescription(),
                'user_id' => $member->getUserId(),
                'member_category' => $member->getMemberCategory(),
                'modified_by' => $member->getModifiedBy(),
                'modification_date' => $member->getModificationDate()
            ));
            //echo $memberInsert;
            //var_dump($memberInsert);
            //PHPDebug::printLogText($memberInsert, '../lib/debug.txt');
            if (!DBConnection::getInstance()->insert('tbl_member', $memberInsert = array())) {
                throw new Exception('There was a problem saving Member.');
            }
            
        } catch (Exception $ex) {
            error_log($ex->__toString());
        }
    }

    public function delete($fields = array()) {
        if (!DBConnection::getInstance()->delete('tbl_member', $fields)) {
            throw new Exception('There was a problem deleting member.');
        }
    }

    public function update($memberId, $fields = array()) {
        if (!DBConnection::getInstance()->update('tbl_member', $memberId, $fields)) {
            throw new Exception('There was a problem updating member.');
        }
    }

    /*
      This method is used for login action done on the user....be it admin or member user...
     */

    public function find($member = null) {
        if ($member) {
            $field = (is_numeric($member)) ? 'member_id' : 'user_id';
            $data = DBConnection::getInstance()->get('tbl_member', array($field, '=', $member));

            if ($data->count()) {
                $this->data = $data->first();
                return $this->data;
            }
        }
        return false;
    }

    public function findAllMembers() {
        $data = DBConnection::getInstance()->get('tbl_member', array('member_id', '>', 0));
        return $data;
    }

}//end class
