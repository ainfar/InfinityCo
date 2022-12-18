<?php
require_once '../../model/Event_File.php';
/**
 * 
 */
class PackageController
{
	public function View_Package($value=''){
		// assign the returned values(array of package object) to variable users
		$package = EventInfo::View_Package(); // we use the static method View_Package() that we
							  		// created in package model to retrieve all 
							  		// data for package
		return $package;
	}

	public function Add_Package($value=''){

		// create new package object
		$package = new EventInfo();

		// set the attributes of package object
		$package->Package_Name = $_POST['Package_Name'];
		$package->Package_Type = $_POST['Package_Type'];
		$package->Package_Description = $_POST['Package_Description'];
		$package->Package_Price = $_POST['Package_Price'];
	

		// save new package data  database
		$package->Add_Package();

		// set message
		$message="The package has been added";
        	echo "<script type='text/javascript'> 
        		alert('$message');
        		window.location.href=('../../view/ManageEvent/S_View_Package_Page.php'); </script>";
	}

	public function Get_By_Id_Package($Package_ID){
		
		// get package object associate with $Package_ID
		$package = EventInfo::Get_By_Id_Package($Package_ID);

		// return package object with the package details
		return $package;
	}

	public function Update_Package($Package_ID){

		// get package data associate with $Package_ID
		$findUser = EventInfo::Get_By_Id_Package($Package_ID);

		// update/set the attributes of the package
		$package = new EventInfo();

		$package->Package_ID = $findUser['Package_ID'];
		$package->Package_Name = $_POST['Package_Name'];
		$package->Package_Type = $_POST['Package_Type'];
		$package->Package_Description = $_POST['Package_Description'];
		$package->Package_Price = $_POST['Package_Price'];

		// update the packaget data in database
		$package->Update_Package();

		// set message
		$message="The package has been updated";
        	echo "<script type='text/javascript'> 
        		alert('$message');
        		window.location.href=('../../view/ManageEvent/S_View_Package_Page.php'); </script>";
	}

	public function Delete_Package($Package_ID){

		// get package data associate with $Package_ID
		$findUser = EventInfo::Get_By_Id_Package($Package_ID);

		// update/set the attributes of the packaget
		$package = new EventInfo();

		$package->Package_ID = $findUser['Package_ID'];

		// delete the package
		$package->Delete_Package();

		// set message
		
		$message="The package has been successfully deleted";
                    echo "<script type='text/javascript'> 
                            alert('$message');
                           window.location.href=('../../view/ManageEvent/S_View_Package_Page.php');
                        </script>";
	}

}
?>