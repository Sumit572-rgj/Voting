<?php
session_start();
include("connect.php");


$mobile=$_POST['mobile'];
$password=$_POST['password'];
$role=$_POST['role'];

$check=mysqli_query($connect,"SELECT * FROM user WHERE mobile='$mobile' AND password='$password' AND role='$role' ");


if(mysqli_num_rows($check)>0){

    $userdata=mysqli_fetch_array($check);
    $Candidates=mysqli_query($connect, "SELECT * FROM user  WHERE role=2");
    $Candidatesdata=mysqli_fetch_all($Candidates,MYSQLI_ASSOC);

    $_SESSION['userdata']=$userdata;
    $_SESSION['Candidatesdata']=$Candidatesdata;

   echo '
    <script>
    window.location="../OnlineVotingSystem/dashboard.php";
    </script>
    ';


}
else{
     echo '
    <script>
    alert("Invalid Credentials!");
    window.location="../OnlineVotingSystem/login.html";
    </script>
    ';

}
?>