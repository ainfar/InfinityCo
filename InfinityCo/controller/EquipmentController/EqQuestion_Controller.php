<?php
require_once '../../model/Equipment_File.php';
/**
 * 
 */
class EqQuestionController
{
	public function AllQues($value=''){
		// assign the returned values(array of package object) to variable users
		$manageequipmentquestions = EquipmentInfo::AllQuestion(); // we use the static method All() that we
							  		// created in package model to retrieve all 
							  		// data for package
		return $manageequipmentquestions;
	}

	public function addques($value=''){

		// create new package object
		$manageequipmentquestions = new EquipmentInfo();

		// set the attributes of package object
		$manageequipmentquestions->Email = $_POST['Email'];
		$manageequipmentquestions->Subject = $_POST['Subject'];
		$manageequipmentquestions->Message = $_POST['Message'];

		// save new packageinto database
		$manageequipmentquestions->saveQuestion();

		// set message
		$message="The question has been added";
        	echo "<script type='text/javascript'> 
        		alert('$message');
        		window.location.href=('../../view/Manage_Equipment/EO_C_EqHomepage_Interface.php'); </script>";
	}

}

?>