<?php
include ($_SERVER["DOCUMENT_ROOT"]."../InfinityCo/model/SupplierFile/feedbackInfo.php");
/**
* 
*/
class feedbackController{

	public function index($value=''){
		// assign the returned values(array of feedback object) to variable users
		$feedback = feedbackInfo::All(); // we use the static method All() that we
							  		// created in feedback model to retrieve all 
							  		// data for feedback
		return $feedback;
	}

	public function get($feedbackid){
		
		// get feedback object associate with $feedbackid
		$feedback = EqInfo::getById($feedbackid);

		// return feedback object with the feedbackt details
		return $feedback;
	}

	public function destroy($feedbackid){

		// get feedback data associate with $feedbackid
		$findUser = feedbackInfo::getById($feedbackid);

		// update/set the attributes of the feedback
		$feedback = new feedbackInfo();

		$feedback->feedbackid = $findUser['feedbackid'];

		// delete the feedback
		$feedback->delete();

		// set message
		$message="The record has been successfully deleted";
                    echo "<script type='text/javascript'> 
                            alert('$message');
                            window.location.href=('../ManageSupplier/sfeedback_interface.php');
                        </script>";
	}

	public function redirect($url){
        header('Location: '.$url);
        exit();
    }
}

?>