<?php
class CenterBoxContentDAO{
	public function __construct(){
	}
	
	public function save($centerBoxContent){
		try{
			
			$centerBoxContentInsert = DBConnection::getInstance()->insert('tbl_center_box_content', array(
					'title'                  => $centerBoxContent->getTitle(),
					'content'                => $centerBoxContent->getContent(),
					'post_date'              => $centerBoxContent->getPostDate(),
					'modified_by'            => $centerBoxContent->getModifiedBy(),
					'modification_date'      => $centerBoxContent->getModificationDate()					
			));
	
			if(! DBConnection::getInstance()->insert('tbl_center_box_content', $centerBoxContentInsert = array()) ){
				throw new Exception('There was a problem saving center box content.');
			}
		} catch (Exception $ex) {
			error_log($ex->__toString());
		}
	}
	
		
	public function delete($fields = array()){
		if(! DBConnection::getInstance()->delete('tbl_center_box_content', $fields) ){
			throw new Exception('There was a problem deleting center box content.');
		}
	}
	
	public function update($centerBoxContentId, $fields = array()){
		if(! DBConnection::getInstance()->update('tbl_center_box_content', $centerBoxContentId, $fields) ){
			throw new Exception('There was a problem updating center box content.');
		}
	}
	
	public function find($centerBoxContent = null){
		if($centerBoxContent){
			$field = (is_numeric($centerBoxContent)) ? 'center_box_content_id' : 'title';
			$data = DBConnection::getInstance()->get('tbl_center_box_content', array($field, '=', $centerBoxContent));
	
			if($data->count()){
				$this->data = $data->first();
				return $this->data;
			}
		}
		return false;
	}
	
	public function getOnlySelectedRecords($tableName, $howManyRecords, $orderColumn, $sortOrder){
		$action = "SELECT * ";
		$resultSet = DBConnection::getInstance()->doThisQuery($action, $tableName, $howManyRecords, $orderColumn, $sortOrder);
		//var_dump($resultSet);
		if($resultSet->count()){
			$this->data = $resultSet->first();
			return $this->data;
		}
	}
	
	public function findAllCenterBoxContents(){
		$data = DBConnection::getInstance()->get('tbl_center_box_content', array('center_box_content_id', '>', 0));
		return $data;
	}
}//end class

?>