<?php
$user=$_POST['usern'];
$status=$_POST["flexRadioDefault2"];
 $con=mysqli_connect('localhost','root','','faq');
 $q2="update questions set status='$status' where username='$user'";
$ch2=mysqli_query($con,$q2);
echo"
<script>
window.location='admin.php';
    </script>
";


?>