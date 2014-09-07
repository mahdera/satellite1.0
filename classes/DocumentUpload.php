<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DocumentUpload
 *
 * @author alemayehu
 */
class DocumentUpload {
    
        private $documentUploadId;
        private $title;
        private $preparedBy;
        private $forCategory;
        private $documentPath;
        private $description;
        private $uploadDate;
        private $modifiedBy;
        private $modificationDate;
            
        function __construct() {            
            
        }
        
        public function getDocumentUploadId() {
            return $this->documentUploadId;
        }

        public function getTitle() {
            return $this->title;
        }

        public function getPreparedBy() {
            return $this->preparedBy;
        }

        public function getForCategory() {
            return $this->forCategory;
        }

        public function getDocumentPath() {
            return $this->documentPath;
        }

        public function getDescription() {
            return $this->description;
        }

        public function getUploadDate() {
            return $this->uploadDate;
        }

        public function getModifiedBy() {
            return $this->modifiedBy;
        }

        public function getModificationDate() {
            return $this->modificationDate;
        }

        public function setDocumentUploadId($documentUploadId) {
            $this->documentUploadId = $documentUploadId;
        }

        public function setTitle($title) {
            $this->title = $title;
        }

        public function setPreparedBy($preparedBy) {
            $this->preparedBy = $preparedBy;
        }

        public function setForCategory($forCategory) {
            $this->forCategory = $forCategory;
        }

        public function setDocumentPath($documentPath) {
            $this->documentPath = $documentPath;
        }

        public function setDescription($description) {
            $this->description = $description;
        }

        public function setUploadDate($uploadDate) {
            $this->uploadDate = $uploadDate;
        }

        public function setModifiedBy($modifiedBy) {
            $this->modifiedBy = $modifiedBy;
        }

        public function setModificationDate($modificationDate) {
            $this->modificationDate = $modificationDate;
        }

        
        public function save(){
            try{
                $documentUploadInsert = DBConnection::getInstance()->insert('tbl_document_upload', array(
                    'title'                    => $this->getImagePath(),
                    'prepared_by'                     => $this->getFileName(),
                    'for_category'                   => $this->getUploadDate(),
                    'document_path'                 => $this->getDocumentPath(),
                    'description'                   => $this->getDescription(),
                    'upload_date'                   => $this->getUploadDate(),
                    'modified_by'                   => $this->getModifiedBy(),
                    'modification_date'             => $this->getModificationDate()                    
                    )
                );   
                if(! DBConnection::getInstance()->insert('tbl_document_upload', $documentUploadInsert) ){
                    throw new Exception('There was a problem uploading a document.');
                }           
            } catch (Exception $ex) {
                error_log($ex->__toString());
            }
        }
        
        public function update(){
            
        }
        
        public function delete(){
            
        }
        
        public function getDocumentUpload(){
            
        }
        
        public function getAllDocumentUploads(){
            
        }
    
}//end class
