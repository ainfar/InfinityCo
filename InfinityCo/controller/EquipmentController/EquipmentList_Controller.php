<?php

require_once '../../model/Equipment_File.php';
/**
 * 
 */
class EquipmentController
{
	public function Allequip($value=''){
		// assign the returned values(array of package object) to variable users
		$equipment = EquipmentInfo::All(); // we use the static method All() that we
							  		// created in package model to retrieve all 
							  		// data for package
		return $equipment;
	}

	public function S_add($value=''){

		// create new package object
		$equipment = new EquipmentInfo();

		// set the attributes of package object
		$equipment->Equipment_Name = $_POST['Equipment_Name'];
		$equipment->Equipment_Description = $_POST['Equipment_Description'];
		$equipment->Equipment_Picture = $_POST['Equipment_Picture'];
		$equipment->Equipment_Price = $_POST['Equipment_Price'];
		$equipment->Equipment_Stock = $_POST['Equipment_Stock'];


		// save new packageinto database
		$equipment->save();

		// set message
		$message="New equipment record succesfully added";
                    echo "<script type='text/javascript'> 
                            alert('$message');
                           window.location.href=('../../view/Manage_Equipment/S_EqHomepage_Interface.php');
                        </script>";
	}

	public function get($Equipment_ID){
		
		// get package object associate with $pkgid
		$equipment = EquipmentInfo::getById($Equipment_ID);

		// return package object with the package details
		return $equipment;
	}

	public function S_update($Equipment_ID){

		// get package data associate with $pkgid
		$findUser = EquipmentInfo::getById($Equipment_ID);

		// update/set the attributes of the package
		$equipment = new EquipmentInfo();

		$equipment->Equipment_ID = $findUser['Equipment_ID'];
		$equipment->Equipment_Name = $_POST['Equipment_Name'];
		$equipment->Equipment_Description = $_POST['Equipment_Description'];
		$equipment->Equipment_Picture = $_POST['Equipment_Picture'];
		$equipment->Equipment_Price = $_POST['Equipment_Price'];
		$equipment->Equipment_Stock = $_POST['Equipment_Stock'];

		// update the packaget data in database
		$equipment->update();

		// set message
		$message="The equipment has been successfully updated";
                    echo "<script type='text/javascript'> 
                            alert('$message');
                           window.location.href=('../../view/Manage_Equipment/S_EqHomepage_Interface.php');
                        </script>";
	}

	public function S_destroy($Equipment_ID){

		// get package data associate with $pkgid
		$findUser = EquipmentInfo::getById($Equipment_ID);

		// update/set the attributes of the packaget
		$equipment = new EquipmentInfo();

		$equipment->Equipment_ID = $findUser['Equipment_ID'];

		// delete the package
		$equipment->delete();

		// set message
		$message="The equipment has been successfully deleted";
                    echo "<script type='text/javascript'> 
                            alert('$message');
                           window.location.href=('../../view/Manage_Equipment/S_EqHomepage_Interface.php');
                        </script>";
	}
    
}
?>
