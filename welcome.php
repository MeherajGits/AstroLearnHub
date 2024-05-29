<?php
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

$conn = new mysqli('localhost','root','','sdp1');
if($conn->connect_error){
    die('connection failed'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into feedback(name,email,feedback)values(?,?,?)");
    $stmt->bind_param("sss",$name,$email,$feedback);
    $stmt->execute();
    echo"Feedback Accepted Thank You!";
    $stmt->close();
    $conn->close();
}
?>