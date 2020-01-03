<?php
  $user_name="root";
  $password="";
  $database="bus_ticketing db";
  $server="127.0.0.1";

 $db_handle=mysql_connect($server,$user_name,$password);
  $db_found=mysql_select_db($database,$db_handle);
?>

<?PHP
if(isset<($_POST['Save']));
{
$Booking_id=$_POST['booking_id'];  
$Depart=$_POST['depart'];
$Destination=($_POST['dest']);
$Date=($_POST['date_of_travel']);
$Capacity=($_POST['seats']);



include("openDB.php");

if($db_found)
{
    $SQL="INSERT INTO booking (booking_id,depart,dest,date_of_travel,seats) VALUES ('$booking_id''$depart','$dest','$date_of_travel','$seats')";
    $result=mysql_query($SQL);
      mysql_close($db_handle);

}
else {
    print"Database NOT Found";
    mysql_close($db_handle);
}

}
?>
