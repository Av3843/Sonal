<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
body{
    background-color: whitesmoke;
}
</style>
</head>
  <body>
  <nav class="navbar bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">FAQ Potral</a>
      <div>
<a href="userlogout.php" type="button" class="btn btn-danger">
Logout
</a>
</div>
    </div>
  </nav>

  <h1 class="display-3 text-center">Enter Qutionnaire</h1>
  <center>
    <form action="query.php">
    <div class="container shadow p-3 mb-5 bg-body-tertiary rounded w-75 mt-5">
    <table class="table table-borderless h3 w-50">
        <tr>
            <td>Enter Query</td>
            <td><input type="text" name="query" class="form-control"/></td>
        </tr>
        <tr>
            <td>Enter Query Description</td>
            <td><textarea class="form-control" name="description"></textarea></td>
        </tr>
        <tr>
            <td>Status</td>
            <td><input type="text" name="qstatus" class="form-control" value="Pending" readonly/></td>
        </tr>
        <tr>
            <td colspan="2" class="text-center"><button type="submit" class="btn btn-primary">Submit Query</button></td>
        </tr>
    </table>
    </div>
    </form>
  </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>