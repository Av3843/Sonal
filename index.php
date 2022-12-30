<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQ Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(document).ready(function(){
    $("#admin_login").click(function(){
        // alert("hii");
        var user=$("#auser").val();
        var pass=$("#apass").val();
     
        if(user=="admin" && pass=="1234")
        {
            $(location).prop('href', 'admin.php')
        }
        else
        {
            $(location).prop('href', 'index.php')
        }
       
    })

    $("#user_login").click(function(){
        // alert("hii");
        var user=$("#auser").val();
        var pass=$("#apass").val();
     
        if(user=="admin" && pass=="1234")
        {
            $(location).prop('href', 'admin.php')
        }
        else
        {
            $(location).prop('href', 'index.php')
        }
       
    })

})



</script>


<style>
body{
    background-color:whitesmoke;
}


</style>
</head>
  <body>
  <nav class="navbar bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">FAQ Potral</a>
      <div>
      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Admin Login
</button>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
 User Login Login
</button>
</div>
    </div>
  </nav>


<!-- Modal ADMIN -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Admin Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-borderless h3">
            <tr>
                <td>Enter Username</td>
                <td><input type="text" class="form-control" id="auser"></td>
            </tr>
            <tr>
                <td>Enter Password</td>
                <td><input type="password" class="form-control" id="apass" ></td>
            </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="admin_login">Login</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal USER -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
  <form action="userlog.php">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel2">User Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <table class="table table-borderless h3">
            <tr>
                <td>Enter Email</td>
                <td><input type="text" class="form-control" name="useremail"></td>
            </tr>
            <tr>
                <td>Enter Password</td>
                <td><input type="password" class="form-control" name="userpass" ></td>
            </tr>
        </table>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="user_login">Login</button>
      </div>
    </div>
    </form>
  </div>
</div>
  <h1 class="display-3 text-center">USER REGISTRATION</h1>

  <center>
    <form method="POST" action="userreg.php">
    <div class="container shadow p-3 mb-5 bg-body-tertiary rounded">
  <table class="table table-borderless w-50 h3">
<tr>
    <td>User Name</td>
    <td><input type="text" name="uname" class="form-control"/></td>
</tr>
<tr>
    <td>User Contact</td>
    <td><input type="text" name="ucontact" class="form-control"/></td>
</tr>
<tr>
    <td>User Email</td>
    <td><input type="mail" name="uemail" class="form-control"/></td>
</tr>
<tr>
    <td>User PAN</td>
    <td><input type="text" name="upan" class="form-control"/></td>
</tr>
<tr>
    <td>Enter Company Name</td>
    <td><input type="text" name="ucompany" class="form-control"/></td>
</tr>
<tr>
    <td>Total Experience(in Years)</td>
    <td><input type="text" name="uex" class="form-control"/></td>
</tr>
<tr>
    <td>Enter Technical Skills</td>
    <td>
      <?php
         $con=mysqli_connect('localhost','root','','faq');
         $q="select * from skills";
         $ch=mysqli_query($con,$q);
         while($row = mysqli_fetch_array($ch))
         {
?>

    <div class="input-group mb-3">
  <div class="input-group-text">
    <input class="form-check-input mt-0" name="check_list[]" type="checkbox" value="<?php echo $row['skillname']; ?>" aria-label="Checkbox for following text input">
  </div>
  
  <input type="text" class="form-control"  value="<?php echo $row['skillname']; ?>" aria-label="Text input with checkbox">
</div>
<?php
         }

         ?>

</td>
</tr>
<tr>
    <td>Status</td>
    <td><input type="text" name="ustatus" class="form-control" value="Pending" readonly/></td>
</tr>
<tr>
    <td>Password</td>
    <td><input type="password" name="upass" class="form-control" /></td>
</tr>
<tr >
    <td colspan="2" class="text-center" ><input type="submit" class="btn btn-primary" value="Register"></td>
</tr>
  </table>
  </div>
  </form>
  </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>