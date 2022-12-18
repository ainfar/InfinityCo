<?php

include ($_SERVER["DOCUMENT_ROOT"]."../InfinityCo/libs/database.php");

/**
* Model class for feedback
*/
class feedbackInfo{

	public $table = 'feedbacks';

	public $feedbackid;
	public $feedback;
	public $datefeedback;
	public $Comments;
	public $Rate;

	/**
	* Static method All()
	* this method will retrieve all feedback data in database 
	* and will return the data as array of feedback object
	*/
	public static function All()	{

		$query = "SELECT * FROM feedbacks";

		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::run($query)) { // this will run the build query

	    		// assign all of the data fetch from database to variable data
	    		// need to add fetchAll for pdo 
				// in order for pdo to retrieve the data from database
				$feedback = $stmt->fetchAll(PDO::FETCH_ASSOC); 

				// return the array of users filled with feedback array
				return $feedback;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	public static function getById($feedbackid){

		$query = "SELECT * FROM feedbacks WHERE feedbackid= :feedbackid LIMIT 1";

		$param = [':feedbackid' => $feedbackid]; // the parameter that will be bind by pdo

		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::Run($query, $param)) { // this will run the build query

				// need to use fetch to retrieve only 1 row of data
				// this will retrieve the row of data
				// that is associated to the passed feedbackid
				$feedback = $stmt->fetch(PDO::FETCH_ASSOC); 
													    	 
				// return the feedback object
				return $feedback;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}	

	public function delete(){

		$query = "DELETE FROM $this->table WHERE feedbackid=:feedbackid";

		$param = [':feedbackid' => $this->feedbackid]; // the parameter that will be bind by pdo

		try {
			// use static method run() from class D
			if ($stmt = DB::Run($query, $param)) { 
				
				// we dont use fetch() or fetchAll() here
				// because no data will be return when we
				// perform delete operation
				                                   
				return true;
			}
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}
}
?>