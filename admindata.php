<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
</head>
<body>
    <table class="table">
        <tr>
            <th>Username</th>
            <th>Contact</th>
            <th>Email</th>
            <th>PAN</th>
            <th>Company Name</th>
            <th>Experience</th>
            <th>Skills</th>
            <th>Status</th>
        </tr>
    <?php
     $con=mysqli_connect('localhost','root','','faq');
     $q2="select * from user";
$ch2=mysqli_query($con,$q2);
while($row = mysqli_fetch_array($ch2))
{

    ?>
    <tr>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['pan'] ;?></td>
                <td><?php echo $row['company_name'] ;?></td>
                <td><?php echo $row['experience'] ;?></td>
                <td><?php echo $row['skills'] ;?></td>
                <td><?php echo $row['status'] ;?> </td>
            </tr>
    <?php
}
?>


</table>
<h1 class="text-center">All Questionnaire</h1>
<table class="table">
        <tr>
            <th>Username</th>
            <th>Query</th>
            <th>description</th>
            <th>Status</th>
        </tr>
    <?php
     $con=mysqli_connect('localhost','root','','faq');
     $q3="select * from questions";
$ch3=mysqli_query($con,$q3);
while($row = mysqli_fetch_array($ch3))
{

    ?>
    <tr>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['question']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['status'] ;?></td>
               </tr>
    <?php
}
?>


</table>
<h1 class="text-center">Update status of Users</h1>
<form method="POST" action="statususer.php">
<table class="table table-borderless">
    <tr>
        <td><input type="text" name="mail" class="form-control" placeholder="Enter mail of user"/></td>
        <td><div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Pending" checked>
  <label class="form-check-label" for="flexRadioDefault1">
    Pending
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Approved">
  <label class="form-check-label" for="flexRadioDefault2">
    Approved
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="Inactive">
  <label class="form-check-label" for="flexRadioDefault2">
    Inactive
  </label>
</div></td>
    </tr>
    <tr>
        <td colspan="2" class="text-center"><button type="submit" class="btn btn-warning" id="userupdate">Update</button></td>
    </tr>

</table>
</form>
<h1 class="text-center">Update status of Questions</h1>
<form method="POST" action="statusquery.php">
<table class="table table-borderless">
    <tr>
        <td><input type="text" name="usern" class="form-control" placeholder="Enter username of user"/></td>
        <td><div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault4" value="Pending" checked>
  <label class="form-check-label" for="flexRadioDefault1">
    Pending
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault2" value="Approved" id="flexRadioDefault5" >
  <label class="form-check-label" for="flexRadioDefault2">
    Approved
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault2" value="Rejected" id="flexRadioDefault6" >
  <label class="form-check-label" for="flexRadioDefault2">
    Rejected
  </label>
</div></td>
    </tr>
    <tr>
        <td colspan="2" class="text-center"><button type="submit" class="btn btn-warning">Update</button></td>
    </tr>

</table>
</form>
</body>
</html>