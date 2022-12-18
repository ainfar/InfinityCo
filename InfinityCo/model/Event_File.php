<?php
require_once '../../libs/database.php';

class EventInfo
{
    public $table1 = 'event';
    public $Event_ID;
    public $Event_Name;
    public $Event_Description;
    public $Event_Picture;


    public $table2 = 'package';
    public $Package_ID;
    public $Package_Name;
    public $Package_Type;
    public $Package_Description;
    public $Package_Price;

    public $table3 = 'booking_detail';
    public $Booking_ID;
    public $Book_Event_Name;
    public $Book_Package_Name;
    public $Book_Date;
    public $Book_Venue;
    public $Start_Time;
    public $End_Time;
    public $Comment;

    public $table4 = 'manageeventquestions';
    public $Customer_Name;
    public $Customer_Email;
    public $Question_Subject;
    public $Question_Message;


//////////////////////////////////////Event///////////////////////////////////////////////////
    

    /**
    * Static method View_Event()
    * this method will retrieve all event data in database 
    * and will return the data as array of event object
    */
    public static function View_Event()    {

        $query = "SELECT * FROM event";

        try {
            // use static method run() from class DB 
            if ($stmt = DB::run($query)) { // this will run the build query

                // assign all of the data fetch from database to variable data
                // need to add fetchAll for pdo 
                // in order for pdo to retrieve the data from database
                $event = $stmt->fetchAll(PDO::FETCH_ASSOC); 

                // return the array of users filled with event array
                return $event;
            };
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    /**
    * Static method Get_By_Id_Event()
    * this method will retrieve 1 row of data from database
    * based on the Event_ID passed to the method

    * @param int Event_ID
    */

    public static function Get_By_Id_Event($Event_ID){

        $query = "SELECT * FROM event WHERE Event_ID = :Event_ID LIMIT 1";

        $param = [':Event_ID' => $Event_ID]; // the parameter that will be bind by pdo

        try {
            // use static method run() from class DB 
            if ($stmt = DB::Run($query, $param)) { // this will run the build query

                // need to use fetch to retrieve only 1 row of data
                // this will retrieve the row of data
                // that is associated to the passed Event_ID
                $event = $stmt->fetch(PDO::FETCH_ASSOC); 
                                                             
                // return the event object
                return $event;
            };
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function Add_Event(){

        $query = "INSERT INTO event (`Event_Name`, `Event_Description`, `Event_Picture`) VALUES (:Event_Name, :Event_Description, :Event_Picture)";

        $param = [ //the parameter that will be bind by pdo
            ':Event_Name' => $this->Event_Name,
            ':Event_Description' => $this->Event_Description,
            ':Event_Picture' => $this->Event_Picture,
            ];  

        try { 
            // use static method run() from class DB
            if ($stmt = DB::Run($query, $param)) { 

                // we dont use fetch() or fetchAll() here
                // because no data will be return when we
                // perform add operation

                return true;
            };
        } catch (PDOException $e) {
            return $e->getMessage();
        }

    }

    public function Update_Event(){

        $query = "UPDATE `event` SET `Event_Name`=:Event_Name, `Event_Description`=:Event_Description, `Event_Picture`=:Event_Picture WHERE `Event_ID`=:Event_ID";

        $param = [ //the parameter that will be bind by pdo

            ':Event_ID' => $this->Event_ID,
            ':Event_Name' => $this->Event_Name,
            ':Event_Description' => $this->Event_Description,
            ':Event_Picture' => $this->Event_Picture,
            ];  

        try {
            // use static method run() from class DB
            if ($stmt = DB::Run($query, $param)) { 

                // we dont use fetch() or fetchAll() here
                // because no data will be return when we
                // perform update operation                                
                                                   
                return true;
            };
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

     public function Delete_Event(){

        $query = "DELETE FROM `event` WHERE `Event_ID`=:Event_ID";

        $param = [':Event_ID' => $this->Event_ID]; // the parameter that will be bind by pdo

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


////////////////////////////////////////Package////////////////////////////////////////////////

    public static function View_Package()    {

        $query = "SELECT * FROM package";

        try {
            // use static method run() from class DB 
            if ($stmt = DB::run($query)) { // this will run the build query

                // assign all of the data fetch from database to variable data
                // need to add fetchAll for pdo 
                // in order for pdo to retrieve the data from database
                $package = $stmt->fetchAll(PDO::FETCH_ASSOC); 

                // return the array of users filled with package array
                return $package;
            };
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public static function Get_By_Id_Package($Package_ID){

        $query = "SELECT * FROM package WHERE Package_ID = :Package_ID LIMIT 1";

        $param = [':Package_ID' => $Package_ID]; // the parameter that will be bind by pdo

        try {
            // use static method run() from class DB 
            if ($stmt = DB::Run($query, $param)) { // this will run the build query

                // need to use fetch to retrieve only 1 row of data
                // this will retrieve the row of data
                // that is associated to the passed Package_ID
                $package = $stmt->fetch(PDO::FETCH_ASSOC); 
                                                             
                // return the package object
                return $package;
            };
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function Add_Package(){

        $query = "INSERT INTO package (`Package_Name`, `Package_Type`, `Package_Description`,`Package_Price`) VALUES (:Package_Name, :Package_Type, :Package_Description, :Package_Price)";

        $param = [ //the parameter that will be bind by pdo
            ':Package_Name' => $this->Package_Name,
            ':Package_Type' => $this->Package_Type,
            ':Package_Description' => $this->Package_Description,
            ':Package_Price' => $this->Package_Price,
            ];  

        try { 
            // use static method run() from class DB
            if ($stmt = DB::Run($query, $param)) { 

                // we dont use fetch() or fetchAll() here
                // because no data will be return when we
                // perform add operation

                return true;
            };
        } catch (PDOException $e) {
            return $e->getMessage();
        }

    }

    public function Update_Package(){

        $query = "UPDATE `package` SET `Package_Name`=:Package_Name, `Package_Type`=:Package_Type, `Package_Description`=:Package_Description, `Package_Price`=:Package_Price WHERE `Package_ID`=:Package_ID";

        $param = [ //the parameter that will be bind by pdo

            ':Package_ID' => $this->Package_ID,
            ':Package_Name' => $this->Package_Name,
            ':Package_Type' => $this->Package_Type,
            ':Package_Description' => $this->Package_Description,
            ':Package_Price' => $this->Package_Price,
            ];  

        try {
            // use static method run() from class DB
            if ($stmt = DB::Run($query, $param)) { 

                // we dont use fetch() or fetchAll() here
                // because no data will be return when we
                // perform update operation                                
                                                   
                return true;
            };
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

     public function Delete_Package(){

        $query = "DELETE FROM `package` WHERE `Package_ID`=:Package_ID";

        $param = [':Package_ID' => $this->Package_ID]; // the parameter that will be bind by pdo

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



/////////////////////////////////////////Booking////////////////////////////////////////////////////////

    public static function View_Booking()    {

        $query = "SELECT * FROM booking_detail";

        try {
            // use static method run() from class DB 
            if ($stmt = DB::run($query)) { // this will run the build query

                // assign all of the data fetch from database to variable data
                // need to add fetchAll for pdo 
                // in order for pdo to retrieve the data from database
                $booking = $stmt->fetchAll(PDO::FETCH_ASSOC); 

                // return the array of users filled with booking array
                return $booking;
            };
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public static function Get_By_Id_Booking($Booking_ID){

        $query = "SELECT * FROM booking_detail WHERE Booking_ID = :Booking_ID LIMIT 1";

        $param = [':Booking_ID' => $Booking_ID]; // the parameter that will be bind by pdo

        try {
            // use static method run() from class DB 
            if ($stmt = DB::Run($query, $param)) { // this will run the build query

                // need to use fetch to retrieve only 1 row of data
                // this will retrieve the row of data
                // that is associated to the passed Booking_ID
                $booking = $stmt->fetch(PDO::FETCH_ASSOC); 
                                                             
                // return the booking object
                return $booking;
            };
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function Add_Booking(){

        $query = "INSERT INTO booking_detail (`Book_Event_Name`, `Book_Package_Name`,`Book_Date`, `Book_Venue`,`Start_Time`,`End_Time`,`Comment`) VALUES (:Book_Event_Name, :Book_Package_Name, :Book_Date, :Book_Venue, :Start_Time, :End_Time, :Comment)";

        $param = [ //the parameter that will be bind by pdo
            ':Book_Event_Name' => $this->Book_Event_Name,
            ':Book_Package_Name' => $this->Book_Package_Name,
            ':Book_Date' => $this->Book_Date,
            ':Book_Venue' => $this->Book_Venue,
            ':Start_Time' => $this->Start_Time,
            ':End_Time' => $this->End_Time,
            ':Comment' => $this->Comment,
            ];  

        try { 
            // use static method run() from class DB
            if ($stmt = DB::Run($query, $param)) { 

                // we dont use fetch() or fetchAll() here
                // because no data will be return when we
                // perform add operation

                return true;
            };
        } catch (PDOException $e) {
            return $e->getMessage();
        }

    }

    public function Update_Booking(){

        $query = "UPDATE `booking_detail` SET `Book_Event_Name`=:Book_Event_Name, `Book_Package_Name`=:Book_Package_Name, `Book_Date`=:Book_Date, `Book_Venue`=:Book_Venue,`Start_Time`=:Start_Time,`End_Time`=:End_Time,`Comment`=:Comment WHERE `Booking_ID`=:Booking_ID";

        $param = [ //the parameter that will be bind by pdo

            ':Booking_ID' => $this->Booking_ID,
            ':Book_Event_Name' => $this->Book_Event_Name,
            ':Book_Package_Name' => $this->Book_Package_Name,
            ':Book_Date' => $this->Book_Date,
            ':Book_Venue' => $this->Book_Venue,
            ':Start_Time' => $this->Start_Time,
            ':End_Time' => $this->End_Time,
            ':Comment' => $this->Comment,
            ];  

        try {
            // use static method run() from class DB
            if ($stmt = DB::Run($query, $param)) { 

                // we dont use fetch() or fetchAll() here
                // because no data will be return when we
                // perform update operation                                
                                                   
                return true;
            };
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function Delete_Booking(){

        $query = "DELETE FROM `booking_detail` WHERE `Booking_ID`=:Booking_ID";

        $param = [':Booking_ID' => $this->Booking_ID]; // the parameter that will be bind by pdo

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

///////////////////////////////Question//////////////////////////////////////////////

    public static function View_Question()    {

        $query = "SELECT * FROM manageeventquestions";

        try {
            // use static method run() from class DB 
            if ($stmt = DB::run($query)) { // this will run the build query

                // assign all of the data fetch from database to variable data
                // need to add fetchAll for pdo 
                // in order for pdo to retrieve the data from database
                $question = $stmt->fetchAll(PDO::FETCH_ASSOC); 

                // return the array of users filled with question array
                return $question;
            };
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function Add_Question(){

        $query = "INSERT INTO manageeventquestions (`Customer_Name`, `Customer_Email`,`Question_Subject`, `Question_Message`) VALUES (:Customer_Name, :Customer_Email, :Question_Subject, :Question_Message)";

        $param = [ //the parameter that will be bind by pdo
            ':Customer_Name' => $this->Customer_Name,
            ':Customer_Email' => $this->Customer_Email,
            ':Question_Subject' => $this->Question_Subject,
            ':Question_Message' => $this->Question_Message,
            ];  

        try { 
            // use static method run() from class DB
            if ($stmt = DB::Run($query, $param)) { 

                // we dont use fetch() or fetchAll() here
                // because no data will be return when we
                // perform add operation

                return true;
            };
        } catch (PDOException $e) {
            return $e->getMessage();
        }

    }















    }
?>