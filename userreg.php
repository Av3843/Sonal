<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <?php
        $uname=$_POST['uname'];
        $ucontact=$_POST['ucontact'];
        $uemail=$_POST['uemail'];
        $upan=$_POST['upan'];
        $ucompany=$_POST['ucompany'];
        $uex=$_POST['uex'];
        $ustatus=$_POST['ustatus'];
        $upass=$_POST['upass'];
        $skill=array();

        foreach($_POST['check_list'] as $check)
        {
            array_push($skill,"$check");
        }
        $skills = implode(',', $skill);
        $con=mysqli_connect('localhost','root','','faq');
        $q="insert into user values('$uname',$ucontact,'$uemail','$upan','$ucompany','$uex','$skills','$ustatus','$upass')";
        $ch=mysqli_query($con,$q);
          echo"
    <script>
alert('Registered Succesfully');
window.location='index.php';
    </script>
    
    ";


?>
    </body>
</html>