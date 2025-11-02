<?php
include("connect.php");

$name = $_POST['name'];
$mobile = $_POST['number'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$role = $_POST['role'];

if ($password == $cpassword) {
    move_uploaded_file($tmp_name, "../uploads/$image");
    $insert = mysqli_query($connect, "INSERT INTO user (name, mobile, password, photo, role, status, votes) VALUES ('$name', '$mobile', '$password', '$image', '$role', 0, 0)");
    
    if ($insert) {
        echo '
        <script>
        alert("Registration Successful!");
        window.location="../OnlineVotingSystem/login.html";
        </script>
        ';
    } else {
        echo '
        <script>
        alert("Some error occurred!");
        window.location="../Registration.html";
        </script>
        ';
    }
} else {
    echo '
    <script>
    alert("Password and Confirm Password do not match!");
    window.location="../OnlineVotingSystem/Registration.html";
    </script>
    ';
}
?>