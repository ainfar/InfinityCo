<?php
require_once '../../libs/start.php';
/**
 * 
 */
class EquipmentInfo
{
    public $table1 = 'equipment';

    public $Equipment_ID;
    public $Equipment_Name;
    public $Equipment_Description;
    public $Equipment_Picture;
    public $Equipment_Price;
    public $Equipment_Stock;

    public $table2 = 'bookequipment';
    public $Booking_ID;
    public $Book_Equipment_Name;
    public $Book_Equipment_Price;
    public $Comment;

    public $table3 = 'manageequipmentquestions';

    public $Question_ID;
    public $Email;
    public $Subject;
    public $Message;


    /**
    * Static method All()
    * this method will retrieve all package data in database 
    * and will return the data as array of package object
    */

    public static function All()    {

        $query = "SELECT * FROM equipment";

        try {
            // use static method run() from class DB 
            if ($stmt = DB::run($query)) { // this will run the build query

                // assign all of the data fetch from database to variable data
                // need to add fetchAll for pdo 
                // in order for pdo to retrieve the data from database
                $equipment = $stmt->fetchAll(PDO::FETCH_ASSOC); 

                // return the array of users filled with package array
                return $equipment;
            };
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    /**
    * Static method getById()
    * this method will retrieve 1 row of data from database
    * based on the pkgid passed to the method

    * @param int pkgid
    */

    // view the offered equipment based on equipment id
    public static function getById($Equipment_ID){

        $query = "SELECT * FROM equipment WHERE Equipment_ID = :Equipment_ID LIMIT 1";

        $param = [':Equipment_ID' => $Equipment_ID]; // the parameter that will be bind by pdo

        try {
            // use static method run() from class DB 
            if ($stmt = DB::Run($query, $param)) { // this will run the build query

                // need to use fetch to retrieve only 1 row of data
                // this will retrieve the row of data
                // that is associated to the passed pkgid
                $equipment = $stmt->fetch(PDO::FETCH_ASSOC); 
                                                             
                // return the package object
                return $equipment;
            };
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    //supplier add new equipment to the list
    public function save(){

        $query = "INSERT INTO equipment (`Equipment_Name`, `Equipment_Description`, `Equipment_Picture`, `Equipment_Price`, `Equipment_Stock`) VALUES (:Equipment_Name, :Equipment_Description, :Equipment_Picture, :Equipment_Price, :Equipment_Stock)";

        $param = [ //the parameter that will be bind by pdo
            ':Equipment_Name' => $this->Equipment_Name,
            ':Equipment_Description' => $this->Equipment_Description,
            ':Equipment_Picture' => $this->Equipment_Picture,
            ':Equipment_Price' => $this->Equipment_Price,
            ':Equipment_Stock' => $this->Equipment_Stock,
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

    //supplier update the added equipment
    public function update(){

        $query = "UPDATE `equipment` SET `Equipment_Name`=:Equipment_Name, `Equipment_Description`=:Equipment_Description, `Equipment_Picture`=:Equipment_Picture, `Equipment_Price`=:Equipment_Price, `Equipment_Stock`=:Equipment_Stock WHERE `Equipment_ID`=:Equipment_ID";

        $param = [ //the parameter that will be bind by pdo

            ':Equipment_ID' => $this->Equipment_ID,
            ':Equipment_Name' => $this->Equipment_Name,
            ':Equipment_Description' => $this->Equipment_Description,
            ':Equipment_Picture' => $this->Equipment_Picture,
            ':Equipment_Price' => $this->Equipment_Price,
            ':Equipment_Stock' => $this->Equipment_Stock,
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

    //supplier delete the added equipment
    public function delete(){

        $query = "DELETE FROM equipment WHERE Equipment_ID=:Equipment_ID";

        $param = [':Equipment_ID' => $this->Equipment_ID]; // the parameter that will be bind by pdo

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














    // view all booking list
    public static function AllBooking()    {

        $query = "SELECT * FROM bookequipment";

        try {
            // use static method run() from class DB 
            if ($stmt = DB::run($query)) { // this will run the build query

                // assign all of the data fetch from database to variable data
                // need to add fetchAll for pdo 
                // in order for pdo to retrieve the data from database
                $bookequip = $stmt->fetchAll(PDO::FETCH_ASSOC); 

                // return the array of users filled with package array
                return $bookequip;
            };
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public static function getByIdBooking($Booking_ID){

        $query = "SELECT * FROM bookequipment WHERE Booking_ID = :Booking_ID LIMIT 1";

        $param = [':Booking_ID' => $Booking_ID]; // the parameter that will be bind by pdo

        try {
            // use static method run() from class DB 
            if ($stmt = DB::Run($query, $param)) { // this will run the build query

                // need to use fetch to retrieve only 1 row of data
                // this will retrieve the row of data
                // that is associated to the passed pkgid
                $bookequip = $stmt->fetch(PDO::FETCH_ASSOC); 
                                                             
                // return the package object
                return $bookequip;
            };
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function AddBooking(){

        $query = "INSERT INTO bookequipment (`Book_Equipment_Name`, `Book_Equipment_Price`, `Comment`) VALUES (:Book_Equipment_Name, :Book_Equipment_Price, :Comment)";

        $param = [ //the parameter that will be bind by pdo
            ':Book_Equipment_Name' => $this->Book_Equipment_Name,
            ':Book_Equipment_Price' => $this->Book_Equipment_Price,
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

    public function updateBooking(){

        $query = "UPDATE `bookequipment` SET `Book_Equipment_Name` =:Book_Equipment_Name,`Book_Equipment_Price`=:Book_Equipment_Price,`Comment`=:Comment WHERE `Booking_ID`=:Booking_ID";

        $param = [ //the parameter that will be bind by pdo

            ':Booking_ID' => $this->Booking_ID,
            ':Book_Equipment_Name' => $this->Book_Equipment_Name,
            ':Book_Equipment_Price' => $this->Book_Equipment_Price,
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

    public function deleteBooking(){

        $query = "DELETE FROM `bookequipment` WHERE `Booking_ID`=:Booking_ID";

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



















    //supplier view all question
    public static function AllQuestion()    {

        $query = "SELECT * FROM manageequipmentquestions";

        try {
            // use static method run() from class DB 
            if ($stmt = DB::run($query)) { // this will run the build query

                // assign all of the data fetch from database to variable data
                // need to add fetchAll for pdo 
                // in order for pdo to retrieve the data from database
                $manageequipmentquestions = $stmt->fetchAll(PDO::FETCH_ASSOC); 

                // return the array of users filled with package array
                return $manageequipmentquestions;
            };
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }


    //event organizer or customer save question
    public function saveQuestion(){

        $query = "INSERT INTO manageequipmentquestions (`Email`,`Subject`, `Message`) VALUES (:Email, :Subject, :Message)";

        $param = [ //the parameter that will be bind by pdo
            ':Email' => $this->Email,
            ':Subject' => $this->Subject,
            ':Message' => $this->Message,
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
}
?>



