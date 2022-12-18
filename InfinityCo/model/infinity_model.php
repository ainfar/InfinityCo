<?php




//----------------------Manage Payment, Dont alter----------------------------------------------------------------------------------------------
/**
 * 
 */
class mode
{


	//mysqli连接数据库
	public function mysql(){
		// Create connection
		$conn =mysqli_connect("localhost","root", "", "infinity");
		// Check connection
		if ($conn->connect_error){
		    die("Connection failed: " . $conn->connect_error);
		}else{
			return $conn;
		}
	}
	public function customer_cart_view_del($Booking_ID){
		//调用连接执行sql语句
		  $q=mysqli_query( $this->mysql(),"delete bookequipment,booking_detail from bookequipment join booking_detail on bookequipment.Booking_ID=booking_detail.Booking_ID where booking_detail.Booking_ID=$Booking_ID");
		  //打印结果
		if($q){
			return "删除成功";
		}else{
			return "删除失败";
		}
	}
public function cardit_card(){

	$sql="select * from cart";
	$q=mysqli_query($this->mysql(),$sql);
	if($q==null){
		return $q;
	}
$q=mysqli_fetch_assoc($q);
$Booking_ID=$q['Booking_ID'];
$Event_Name=$q['Event_Name'];
$Package=$q['Package'];
$Payment_Date=date('Y-m-d');
$Equipment_Name=$q['Equipment_Name'];
$Equipment_Quantity=$q['Equipment_Quantity'];
$Equipment_Price=$q['Equipment_Price'];
$Total_Price=$q['Total_Price'];
$Receipt_Number=$q['Booking_ID'];




// die;
$sql= "INSERT INTO paymenthistory (Booking_ID,Event_Name,Package,Payment_Date,Equipment_Name,Equipment_Quantity,Equipment_Price,Total_Price,Receipt_Number) VALUES ($Booking_ID,$Event_Name,$Package,$Payment_Date,$Equipment_Name,$Equipment_Quantity,$Equipment_Price,$Total_Price,$Receipt_Number)";
		$q=mysqli_query($this->mysql(),$sql);

	return $q;


}
	}