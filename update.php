


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 ">
  <title>Think Success| User Experience Design Development Agency</title>
  <meta name="description"
    content="Think Success uses research to design and build user-centered digital experiences. Learn why clients choose Think Success for  design and development." />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="style.css">

  <style>

    h1{
      font-size:30px;
      margin-top:200px ;
      margin-left:40px;
      position: absolute;
      color:red;

    }
    </style>

</head>

<body>

  <!-- NAVBAR -->

  <nav class="navbar navbar-expand-lg bg-warning navbar fixed-top ">
    <div class="container-fluid " style="font-size:20px">
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
            <a class="nav-link " href="#">Contact</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <!-- <input class="form-control me-2" type="text" placeholder=" " aria-label="Search"> -->
          <button class="btn btn-outline-success" type="text"> <i class="bi bi-telephone"></i>:9350564435</button>

        </form>
      </div>
    </div>
  </nav>

  <!-- CONTACT -->

  <?php
if(isset($_POST['name'])){

    $ids = $_GET['name'];
    $showquery = "select * from user6 where name={$ids}";
    $showdata = mysqli_query($con,$showquery );
    $arrdata = mysqli_fetch_array( $showdata);




$server = "localhost";
$username = "root";
$password = "";


$con = mysqli_connect($server, $username, $password);

if(!$con){

    die("connection to this database failed due to" .mysqli_connect_error());


}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$message = $_POST['message'];


$sql = "INSERT INTO `test6`.`user6`(`name`, `email`, `password`, `message`)VALUES( '$name', '$email', '$password', '$message')";


if($con->query($sql) == true){
    echo "<h1>Thanks For Join Our Contact Form</h1>";

}
    else{
        echo "ERROR: $sql<br> $con->error";
    } 
$con->close();



}

?>

  <div id="contact">
    <div class="row justify-content-evenly pt-3 pb-5 bg-info">
        <div class="col-md-5 mt-5 mt-5" style=" padding-top: 100px;">
            <h3 class="mb-5">Contact form</h3>
            <form action="contact.php" method="POST">
                <div class="mb-3 ">
                    <label for="Name" class="form-label" name="name">Full name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $arrdata['name'];?>" id="exampleInputEmail1"
                        aria-describedby="emailHelp">

                </div>
                <div class="mb-3 ">
                    <label for="exampleInputEmail1" class="form-label" name="email">email address</label>
                    <input type="email" class="form-control"  name="email"  value="<?php echo $arrdata['email'];?>" id="exampleInputEmail1"
                        aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label" name="password">password</label>
                    <input type="password" class="form-control"  name="password"  value="<?php echo $arrdata['password'];?>" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label" name="message">message</label>
                    <textarea class="form-control" name="message"  value="<?php echo $arrdata['message'];?>" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-danger" name="submit">submit</button>
                <!-- <a href="check form.php" class="btn btn-primary" role="button" data-bs-toggle="button">Check Form</a> -->
                <button class="bg-info" > <a href="check form.php">Chech Form</a></button>
            </form>
        </div>

        <div class="col-md-5 " >
            <img src="deve img.jpg" class="img-fluid" style="padding-top:200px">
           
        </div>
    </div>




    

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>

</html>