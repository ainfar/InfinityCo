<?php

include ($_SERVER["DOCUMENT_ROOT"]."../InfinityCo/libs/database.php");
/**
 * 
 */
class eofeedbackInfo
{
	public $table = 'feedbacks';
	
	public $value,$feedback,$datefeedback,$Comments,$Rate;
        
        public function feedback()
	{
		$query="INSERT INTO feedbacks (feedback,datefeedback,Comments,Rate) VALUES (:feedback,:datefeedback,:Comments,:Rate)";
                $param=[ ':feedback' => $this->feedback, ':datefeedback' => $this->datefeedback, ':Comments' => $this->Comments, ':Rate' => $this->Rate ];
                $stmt = DB::RUN($query, $param);
               
	}
	
	
	public static function All()	{

		$query = "SELECT * FROM feedbacks";

		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::run($query)) { // this will run the build query

	    		// assign all of the data fetch from database to variable data
	    		// need to add fetchAll for pdo 
				// in order for pdo to retrieve the data from database
				$feedback = $stmt->fetchAll(PDO::FETCH_ASSOC); 

				// return the array of users filled with equipment array
				return $feedback;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}
        
        
}
?>
