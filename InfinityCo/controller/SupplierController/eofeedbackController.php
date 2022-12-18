<?php

include ($_SERVER["DOCUMENT_ROOT"]."../InfinityCo/model/SupplierFile/eofeedbackInfo.php");

class eofeedbackController {

	//add details

   public function feedback()
    {
       
       $feedback = new eofeedbackInfo();
       
       $feedback->feedback = $_POST['feedback'];
                
       $feedback->datefeedback = $_POST['datefeedback'];
	   
	   $feedback->Comments = $_POST['Comments'];
	   
	   $feedback->Rate = $_POST['Rate'];
       
       
       $feedback->feedback();
       
       $message="Your feedback has been send";
                    echo "<SCRIPT type='text/javascript'> 
                            alert('$message');
                            window.location.href=('../ManageSupplier/eofeedback_interface.php');
                        </SCRIPT>";
       }
	   
	   public function index($value=''){
		// assign the returned values(array object) to variable users
		$feedback = eofeedbackInfo::All(); // we use the static method All() that we
							  		// created  model to retrieve all 
							  		// data 
					
									
		return $feedback;
	}
	   
      
               
    }
?>