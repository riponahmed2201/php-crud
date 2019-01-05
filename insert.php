
<?php
include'conn.php';

if(isset($_POST['done'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $q = "INSERT INTO `firstcrudtable`( `username`, `password`) VALUES ('$username',' $password')";
    $query = mysqli_query($conn,$q);

   /*  if($q==true)
    {
        $message = 'Success';
    }
    else
    {
        echo ''.mysql_error();
    }
    */
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
      
   <!--
      <a class="close" data-dismiss="alert"><i class="icon-remove"></i></a>
      <strong><?php echo $message; ?></strong>

   -->
     



</div>
  <div class="col-lg-6 m-auto">

  
     <form method="POST" >
       <br><br> <br><br> <div class="card">
         
         <div class="card-header bg-dark">
         <h1 class="text-white text-center">Insert Operation</h1>
         </div><br>
         <label for="">Username:</label>
         <input type="text" name="username" placeholder="Enter your username..." class="form-control"Required><br>

         <label for="">Password:</label>
         <input type="password" name="password" placeholder="Enter your password..." class="form-control" Required><br>
         
         <button class="btn btn-success" type="submit" name="done">Submit</button><br>
         </div>
     </form>
  
  
  
  </div>
   


















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>