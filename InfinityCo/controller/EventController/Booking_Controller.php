<?php
require_once '../../model/Event_File.php';
/**
 * 
 */
class BookingController
{
	public function View_Booking($value=''){
		// assign the returned values(array of booking object) to variable users
		$booking = EventInfo::View_Booking(); // we use the static method View_Booking() that we
							  		// created in booking model to retrieve all 
							  		// data for booking
		return $booking;
	}

	public function Add_Booking($value=''){

		// create new booking object
		$booking = new EventInfo();

		// set the attributes of booking object
		$booking->Book_Event_Name = $_POST['Book_Event_Name'];
		$booking->Book_Package_Name = $_POST['Book_Package_Name'];
		$booking->Book_Date = $_POST['Book_Date'];
		$booking->Book_Venue = $_POST['Book_Venue'];
		$booking->Start_Time = $_POST['Start_Time'];
		$booking->End_Time = $_POST['End_Time'];
		$booking->Comment = $_POST['Comment'];
		
		// save new booking data into database
		$booking->Add_Booking();

		// set message
		$message="The booking has been added";
        	echo "<script type='text/javascript'> 
        		alert('$message');
        		window.location.href=('../../view/ManageEvent/Booking_List_Page.php'); </script>";
	}

	public function Get_By_Id_Booking($Booking_ID){
		
		// get booking object associate with $Booking_ID
		$booking = EventInfo::Get_By_Id_Booking($Booking_ID);

		// return package object with the booking details
		return $booking;
	}

	public function Update_Booking($Booking_ID){

		// get booking data associate with $Booking_ID
		$findUser = EventInfo::Get_By_Id_Booking($Booking_ID);

		// update/set the attributes of the booking
		$booking = new EventInfo();

		$booking->Booking_ID = $findUser['Booking_ID'];
		$booking->Book_Event_Name = $_POST['Book_Event_Name'];
		$booking->Book_Package_Name = $_POST['Book_Package_Name'];
		$booking->Book_Date = $_POST['Book_Date'];
		$booking->Book_Venue = $_POST['Book_Venue'];
		$booking->Start_Time = $_POST['Start_Time'];
		$booking->End_Time = $_POST['End_Time'];
		$booking->Comment = $_POST['Comment'];
		

		// update the booking data in database
		$booking->Update_Booking();

		// set message
		$message="The booking has been updated";
        	echo "<script type='text/javascript'> 
        		alert('$message');
        		window.location.href=('../../view/ManageEvent/Booking_List_Page.php'); </script>";
	}

	public function Delete_Booking($Booking_ID){

		// get booking data associate with $Booking_ID
		$findUser = EventInfo::Get_By_Id_Booking($Booking_ID);

		// update/set the attributes of the booking
		$booking = new EventInfo();

		$booking->Booking_ID = $findUser['Booking_ID'];

		// delete the booking
		$booking->Delete_Booking();

		// set message
		
		$message="The booking has been successfully deleted";
                    echo "<script type='text/javascript'> 
                            alert('$message');
                           window.location.href=('../../view/ManageEvent/Booking_List_Page.php');
                        </script>";
	}

}
?>