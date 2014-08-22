<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Member
 *
 * @author mneway
 */
class Member {
    private $memberId;
    private $firstName;
    private $lastName;
    private $organization;
    private $description;
    private $userId;
    private $modifiedBy;
    private $modificationDate;
    
    function __construct() {
        
    }
    
    public function getMemberId() {
        return $this->memberId;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getOrganization() {
        return $this->organization;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getModifiedBy() {
        return $this->modifiedBy;
    }

    public function getModificationDate() {
        return $this->modificationDate;
    }

    public function setMemberId($memberId) {
        $this->memberId = $memberId;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function setOrganization($organization) {
        $this->organization = $organization;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function setModifiedBy($modifiedBy) {
        $this->modifiedBy = $modifiedBy;
    }

    public function setModificationDate($modificationDate) {
        $this->modificationDate = $modificationDate;
    }

    public function save($member){
        $memberDao = new MemberDAO();
        $memberDao->save($member);
    }
    
    public function update($member){
        $memberDao = new MemberDAO();
        //now build the array represting the php object...
        $fields = array(
            'first_name' => $member->getFirstName(),
            'last_name' => $member->getLastName(),
            'organization' => $member->getOrganization(),
            'description' => $member->getDescription(),
            'user_id' => $member->getUserId(),
            'modified_by' => $member->getModifiedBy(),
            'modification_date' => $member->getModificationDate()
        );
        $memberDao->update($member->getMemberId(), $fields);
    }
    
    public function delete($member){
        $memberDao = new MemberDAO();
        $memberDao->delete($member);
    } 
    
    public function getMemberUsingMemberId($memberId){
        $memberDao = new MemberDAO();
        $fetchedMember = $memberDao->find($memberId);
        return $fetchedMember;
    }
    
    public function getAllMembers(){
        $memberDao = new MemberDAO();
        $fetchedMembers = $memberDao->findAllMembers();
        return $fetchedMembers;
    }

}//end class
