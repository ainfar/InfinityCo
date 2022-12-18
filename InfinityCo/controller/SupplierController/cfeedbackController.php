<?php

include ($_SERVER["DOCUMENT_ROOT"]."../InfinityCo/model/SupplierFile/cfeedbackInfo.php");

class cfeedbackController {

	//add details

   public function feedback()
    {
       
       $feedback = new cfeedbackInfo();
       
       $feedback->feedback = $_POST['feedback'];
                
       $feedback->datefeedback = $_POST['datefeedback'];
	   
	   $feedback->Comments = $_POST['Comments'];
	   
	   $feedback->Rate = $_POST['Rate'];
       
       
       $feedback->feedback();
       
       $message="Your feedback has been send";
                    echo "<SCRIPT type='text/javascript'> 
                            alert('$message');
                            window.location.href=('../ManageSupplier/cfeedback_interface.php');
                        </SCRIPT>";
       }
	   
	   public function index($value=''){
		// assign the returned values(array object) to variable users
		$feedback = cfeedbackInfo::All(); // we use the static method All() that we
							  		// created  model to retrieve all 
							  		// data 
					
									
		return $feedback;
	}
	   
      
               
    }
?>