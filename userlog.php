<?php
 session_start();
?>
<html>
    <head>
        <title>LOGIN</title>
    </head>
    <body>
        <?php
        $pass=$_GET['userpass'];
        $mail=$_GET['useremail'];
        $con=mysqli_connect('localhost','root','','faq');
$q="select * from user where email='$mail'";
$ch=mysqli_query($con,$q);
$row = mysqli_fetch_array($ch);
if ($row['email'] == $mail && $row['password'] == $pass && $row['status']!="Pending") {
   
    $_SESSION['user']=$row['username'];
    $_SESSION['email']=$row['email'];
    echo "

<script>
alert('login succesfully');
window.location='user.php';
</script>
";

} else {
    echo "
    <script>
    alert('login unsuccesfull');
    window.location='index.php';
    </script>
    ";
}


?>
    </body>
</html>