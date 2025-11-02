<?php
session_start();
if(!isset($_SESSION['userdata'])){
header("location:../OnlineVotingSystem/login.html");
}

?>
<html>
    <head>
        <title>Online voting System</title>
        <link rel="stylesheet" href="dashboard.css">
    </head>
    <body>
        <div id="headerSection">
        <button id="backbtn" >Back</button>
    <button id="logoutbtn">Logout</button>
        <h1>Nepal Election Commission</h1>
        </div>
        <hr>
        <div id="Profile">

        </div>
<div id="Group">

</div>

    </body>
</html>