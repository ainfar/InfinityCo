<?php
require_once '../../model/Event_File.php';
/**
 * 
 */
class QuestionController
{
	public function View_Question($value=''){
		// assign the returned values(array of question object) to variable users
		$question = EventInfo::View_Question(); // we use the static method View_Question() that we
							  		// created in question model to retrieve all 
							  		// data for question
		return $question;
	}

	public function Add_Question($value=''){

		// create new question object
		$question = new EventInfo();

		// set the attributes of question object
		$question->Customer_ID = $_POST['Customer_Name'];
		$question->Customer_Email = $_POST['Customer_Email'];
		$question->Question_Subject = $_POST['Question_Subject'];
		$question->Question_Message = $_POST['Question_Message'];

		// save new question data into database
		$question->Add_Question();

		// set message
		$message="The question has been added";
        	echo "<script type='text/javascript'> 
        		alert('$message');
        		window.location.href=('../../view/ManageEvent/View_Package_Page.php'); </script>";
	}

}
?>