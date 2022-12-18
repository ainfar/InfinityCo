<?php

include ($_SERVER["DOCUMENT_ROOT"]."../InfinityCo/model/LoginFile/AccountInfo.php");
/**
 * 
 */
class AccountController
{

    public function view()
    {
        //call static method All from user class
        $acc = new account();
        $user = $acc->validate();


        
         foreach ($user as $tmp) 
            { 
          
        if($tmp['Password'] == $_POST['Password']  &&  $tmp['Username'] == $_POST['Username'] && $_POST['Account_Type']=="Customer" && $tmp['Account_Type']=="Customer")
        {

                    header("Location: http://localhost/InfinityCo/view/ManageSupplier/chome_interface.php");  
                
        }
        else if($tmp['Password'] == $_POST['Password']  &&  $tmp['Username'] == $_POST['Username'] && $_POST['Account_Type']=="Supplier" && $tmp['Account_Type']=="Supplier")
        {

                    header("Location: http://localhost/InfinityCo/view/ManageSupplier/shome_interface.php"); 
            
        }
            else if($tmp['Password'] == $_POST['Password']  &&  $tmp['Username'] == $_POST['Username'] && $_POST['Account_Type']=="EventOrganizer" && $tmp['Account_Type']=="EventOrganizer")
        {

            
                    header("Location:http://localhost/InfinityCo/view/ManageSupplier/eohome_interface.php");
            
        }
        
        else
        {

            $error = "<script type='text/javascript'>alert('the username or password is wrong, do it again')</script>";     

        }
         
        } 

        echo $error;
        return $user;
    }



    public function forget()
    {
        $user1 = new account();
        
        
        $user1->Password = $_POST['Password'];
        $user1->Username = $_POST['Username'];
        
        $user1->update();
        
        //Session::setFlash(['New record succesfully added'], 'success');
    }


    public function add()
    {
        $user1 = new account();
        
        $user1->Username = $_POST['Username'];
        $user1->Password = $_POST['Password'];
        $user1->Name = $_POST['Name'];
        $user1->Email = $_POST['Email'];
        $user1->Address = $_POST['Address'];
        $user1->ContactNo = $_POST['ContactNo'];
        $user1->ICno = $_POST['ICno'];
        $user1->Gender = $_POST['Gender'];
        $user1->Account_Type ="Customer";

        $user1->save();
        echo "<script>window.open('clogin_interface.php','_self')</script>";

        
    }

        public function S_add()
    {
        $user1 = new account();
        
        $user1->Username = $_POST['Username'];
        $user1->Password = $_POST['Password'];
        $user1->Name = $_POST['Name'];
        $user1->Email = $_POST['Email'];
        $user1->Address = $_POST['Address'];
        $user1->ContactNo = $_POST['ContactNo'];
        $user1->ICno = $_POST['ICno'];
        $user1->Gender = $_POST['Gender'];;
        $user1->Account_Type ="Supplier";
        $user1->Company =$_POST['Company'];

        $user1->S_save();
                    echo "<script>window.open('slogin_interface.php','_self')</script>";

        
    }

        public function E_add()
    {
        $user1 = new account();
        
        $user1->Username = $_POST['Username'];
        $user1->Password = $_POST['Password'];
        $user1->Name = $_POST['Name'];
        $user1->Email = $_POST['Email'];
        $user1->Address = $_POST['Address'];
        $user1->ContactNo = $_POST['ContactNo'];
        $user1->ICno = $_POST['ICno'];
        $user1->Gender = $_POST['Gender'];
        $user1->Account_Type ="EventOrganizer";
        $user1->Company =$_POST['Company'];

        $user1->E_save();
                    echo "<script>window.open('eologin_interface.php','_self')</script>";

    }


}





