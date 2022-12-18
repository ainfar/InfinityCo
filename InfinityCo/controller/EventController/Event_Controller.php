<?php
require_once '../../model/Event_File.php';
/**
 * 
 */
class EventController
{
	public function View_Event($value=''){
		// assign the returned values(array of event object) to variable users
		$event = EventInfo::View_Event(); // we use the static method View_Event() that we
							  		// created in event model to retrieve all 
							  		// data for event
		return $event;
	}

	public function Add_Event($value=''){

		// create new event object
		$event = new EventInfo();

		// set the attributes of event object
		$event->Event_Name = $_POST['Event_Name'];
		$event->Event_Description = $_POST['Event_Description'];
		$event->Event_Picture = $_POST['Event_Picture'];

		// save new event data into database
		$event->Add_Event();

		// set message
		$message="The event has been added";
        	echo "<script type='text/javascript'> 
        		alert('$message');
        		window.location.href=('../../view/ManageEvent/S_View_Event_Page.php'); </script>";
	}

	public function Get_By_Id_Event($Event_ID){
		
		// get event object associate with $Event_ID
		$event = EventInfo::Get_By_Id_Event($Event_ID);

		// return event object with the event details
		return $event;
	}

	public function Update_Event($Event_ID){

		// get event data associate with $Event_ID
		$findUser = EventInfo::Get_By_Id_Event($Event_ID);

		// update/set the attributes of the event
		$event = new EventInfo();

		$event->Event_ID = $findUser['Event_ID'];
		$event->Event_Name = $_POST['Event_Name'];
		$event->Event_Description = $_POST['Event_Description'];
		$event->Event_Picture = $_POST['Event_Picture'];

		// update the event data in database
		$event->Update_Event();

		// set message
		$message="The event has been updated";
        	echo "<script type='text/javascript'> 
        		alert('$message');
        		window.location.href=('../../view/ManageEvent/S_View_Event_Page.php'); </script>";
	}

	public function Delete_Event($Event_ID){

		// get event data associate with $Event_ID
		$findUser = EventInfo::Get_By_Id_Event($Event_ID);

		// update/set the attributes of the event
		$event = new EventInfo();

		$event->Event_ID = $findUser['Event_ID'];

		// delete the event
		$event->Delete_Event();

		// set message
		
		$message="The event has been successfully deleted";
                    echo "<script type='text/javascript'> 
                            alert('$message');
                           window.location.href=('../../view/ManageEvent/S_View_Event_Page.php');
                        </script>";
	}
}
?>