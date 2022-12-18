<?php

include ($_SERVER["DOCUMENT_ROOT"]."../InfinityCo/libs/database.php");
/**
 * 
 */
class progressInfo
{
	public $table = 'details';
	
	public $value,$testing,$datetesting,$timetesting,$venue;
        
        public function testing()
	{
		$query="INSERT INTO details (testing,datetesting,timetesting,venue) VALUES (:testing,:datetesting,:timetesting,:venue)";
                $param=[ ':testing' => $this->testing, ':datetesting' => $this->datetesting, ':timetesting' => $this->timetesting, ':venue' => $this->venue ];
                $stmt = DB::RUN($query, $param);
               
	}
	
	
	public static function All()	{

		$query = "SELECT * FROM details";

		try {
			// use static method run() from class DB 
	    	if ($stmt = DB::run($query)) { // this will run the build query

	    		// assign all of the data fetch from database to variable data
	    		// need to add fetchAll for pdo 
				// in order for pdo to retrieve the data from database
				$testing = $stmt->fetchAll(PDO::FETCH_ASSOC); 

				// return the array of users filled with equipment array
				return $testing;
			};
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}
        
        
}
?>
