<?php
   
if(!empty($_POST['website'])) die();


$fullname=$_POST['fullname'];
$email=$_POST['email'];
$date=$_POST['date'];
$telephonNumber=$_POST['telephonNumber'];
$hour=$_POST['hour'];
$hourStart=$_POST['hourStart'];


$conn=new mysqli('localhost', 'rentayacrs_admin1', 'Im-6sMGEFY=b', 'rentayacrs_contactrequest');

if($conn->connect_error){
    die('Connection to database failed!' .$conn->connect_error);
}else{



    $stmt=$conn->prepare("Insert into requests(fullname, email, date, telephonNumber, hour, hourStart) values (?,?,?,?,?,?)");
    $stmt->bind_param("ssssss", $fullname, $email, $date, $telephonNumber, $hour, $hourStart); 
    $stmt->execute();
    
    $stmt->close();
    $conn->close();
    // header("Location: ../index.html");
    include_once 'mail.php'; 
        

}


?>