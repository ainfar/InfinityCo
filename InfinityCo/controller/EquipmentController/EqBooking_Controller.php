<?php

require_once '../../model/Equipment_File.php';/**
 * 
 */
class EqBookingController
{

	//view all equipment booked
	public function AllBook($value=''){
		// assign the returned values(array of package object) to variable users
		$bookequip = EquipmentInfo::AllBooking(); // we use the static method All() that we
							  		// created in package model to retrieve all 
							  		// data for package
		return $bookequip;
	}






	public function AddBooking($value=''){

		// create new booking object
		$bookequip = new EquipmentInfo();

		// set the attributes of booking object
		$bookequip->Book_Equipment_Name = $_POST['Book_Equipment_Name'];
		$bookequip->Book_Equipment_Price = $_POST['Book_Equipment_Price'];
		$bookequip->Comment = $_POST['Comment'];
		
		// save new booking data into database
		$bookequip->AddBooking();


		// set message
		$message="Equipment booked succesfully";
        	echo "<script type='text/javascript'> 
        		alert('$message');
        		window.location.href=('../../view/Manage_Equipment/EO_C_EqBookingList_Interface.php'); </script>";
	}



	public function getByIdBooking($Booking_ID){
		
		// get package object associate with $pkgid
		$bookequip = EquipmentInfo::getByIdBooking($Booking_ID);

		// return package object with the package details
		return $bookequip;
	}

    // customer update on the booking equipment
	public function C_update($Booking_ID){

		// get package data associate with $pkgid
		$findUser = EquipmentInfo::getByIdBooking($Booking_ID);

		// update/set the attributes of the package
		$bookequip = new EquipmentInfo();

		$bookequip->Booking_ID = $_POST['Booking_ID'];
		$bookequip->Book_Equipment_Name = $_POST['Book_Equipment_Name'];
		$bookequip->Book_Equipment_Price = $_POST['Book_Equipment_Price'];
		$bookequip->Comment = $_POST['Comment'];

		// update the packaget data in database
		$bookequip->updateBooking();

		// set message
		$message="The equipment booking  has been successfully updated";
        	echo "<script type='text/javascript'> 
        		alert('$message');
        		window.location.href=('../../view/Manage_Equipment/EO_C_EqBookingList_Interface.php'); </script>";
	}

    // customer delete on the booking equipment
	public function C_destroy($Booking_ID){

		// get package data associate with $pkgid
		$findUser = EquipmentInfo::getByIdBooking($Booking_ID);

		// update/set the attributes of the packaget
		$bookequip = new EquipmentInfo();

		$bookequip->Booking_ID = $findUser['Booking_ID'];

		// delete the package
		$bookequip->deleteBooking();

		// set message
		$message="The equipment booking has been successfully deleted";
                    echo "<script type='text/javascript'> 
                            alert('$message');
                           window.location.href=('../../view/Manage_Equipment/EO_C_EqBookingList_Interface.php');
                        </script>";
	}
    
}
?>
