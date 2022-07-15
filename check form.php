




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Think Success | User Experience Design Development Agency</title>
    <meta name="description"
    content="Think Success uses research to design and build user-centered digital experiences. Learn why clients choose Think Success for  design and development." />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="style.css">
       
  </head>
  <body >

   <!-- NAVBAR -->

   <nav class="navbar navbar-expand-lg bg-warning navbar fixed-top ">
    <div class="container-fluid  " style="font-size:20px ">
      <a class="navbar-brand text-primary" style="font-size:40px;border-radius: 20px;" href="#"><img src="logo3.jpg"
          style="width: 200px;height: 100px; border-radius:50%"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link  " aria-current="page" href="project 2.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="about.html">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="services.html">Services</a>
          </li>

          </li>
          <li class="nav-item">
            <a class="nav-link " href="http://localhost/htdocs/contact.php#">Contact</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <!-- <input class="form-control me-2" type="text" placeholder=" " aria-label="Search"> -->
          <button class="btn btn-outline-success" type="text"> <i class="bi bi-telephone"></i>:9350564435</button>

        </form>
      </div>
    </div>
  </nav>
  
 

  <!-- NAV END -->
 <div >
      <h1 style="margin-top: 150px; margin-left:20px" > These Persion are Watching my website</h1>
  <table class="table bg-info">
      
  <thead>
    <tr>
      <th >Name</th>
      <th >Email</th>
      <th >Password</th>
      <th >Message</th>
      <th colspan="2">Operation</th>

    </tr>
  </thead>
  <tbody>

  <?php

$server = "localhost";
$username = "root";
$password = "";
$db ="test6";

$con = mysqli_connect($server, $username, $password, $db);

if($con){
    echo "";
}
else{
    echo "no successful";
}
$selectquery = "select * from user6 ";
$query = mysqli_query($con,$selectquery );
$nums = mysqli_num_rows($query);

while($res = mysqli_fetch_array($query)){
    ?>
  <!-- scope="row" -->
    <tr>
    <td ><?php echo $res['Name'];?></td>
    <td><?php echo $res['Email'];?></td>
    <td><?php echo $res['Password'];?></td>
    <td><?php echo $res['Message'];?></td>
    <td> <a href="update.php?Name= <?php echo $res['Name'];?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE!"><i class="bi bi-pencil-square"></i></a></td>
    <td><i class="bi bi-trash"></i></td>
  </tr>

  <?php
}
?>

 
  
  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
  </body>
</html>