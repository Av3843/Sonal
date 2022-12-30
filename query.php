<?php
 session_start();
?>
<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <?php
        $query=$_GET['query'];
        $description=$_GET['description'];
        $qstatus=$_GET['qstatus'];
        $user= $_SESSION['user'];
        $con=mysqli_connect('localhost','root','','faq');
        $q="insert into questions values('$query','$description','$qstatus','$user')";
        $ch=mysqli_query($con,$q);
          echo"
    <script>
alert('Query Submitted Succesfully');
window.location='user.php';
    </script>
    
    ";


?>
    </body>
</html>