<?php
$mail=$_POST['mail'];
$status=$_POST["flexRadioDefault"];
 $con=mysqli_connect('localhost','root','','faq');
 $q2="update user set status='$status' where email='$mail'";
$ch2=mysqli_query($con,$q2);
echo"
<script>
window.location='admin.php';
    </script>
";


?>