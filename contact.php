<?php
if(isset($_POST['name'])){

    //connection variables
$server = "localhost";
$username = "root";
$password ="";
//to make connection to the database or create a database
$con = mysqli_connect($server, $username, $password);
//check for connection
if(!$con){
    die("conection to this database failed due to " . mysqli_connect_error());

}
// echo "success";

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

$sql = "INSERT INTO `jsonman`.`jsonman` ( `name`, `email`, `message`, `date`) VALUES ( '$name', '$email', '$message', current_timestamp());";
echo $sql;


//execute query
if($con->query($sql)==true){
    echo "successfully inserted";
}
else{
    echo "error: $sql <br> $con->error";
}
$con->close();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trial website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
   
</head>

<body class="img" style=" background-image: url('/bg2.png');
background-size: cover;
background-repeat: no-repeat;">
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:rgb(4, 122, 143) ;">
        <a class="navbar-brand" href="#">jSON-man</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/contact.html" " >Contact</a> 
              </li>
            </ul>
          </div>
    </nav>

    <div class="text">
        <h1 class="main-txt">CONTACT-US</h1>
        <p class="p-txt"> Welcome to JSON-man website here on the website you can GET and POST the JSON request.</p>

    </div>

    <div class="container"> 
            <form action="contact.php"  method="POST">
                <div class="form-group">
                  <label for="formGroupExampleInput" style="font-size: 20px; ;"><b>Name:</b></label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Fullname ">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2" style="font-size: 20px; ;"><b>Email:</b></label>
                  <input type="text"  name="email" class="form-control" id="email" placeholder="Enter your Email">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2" style="font-size: 20px; ;"><b>Message:</b></label>
                    <input type="text"  name="message" class="form-control" id="message" placeholder="Enter your Message" style="height: 100px;">
                  </div>
                  <button type="submit" class="btn btn-primary">submit</button>

              </form>  

    </div>






</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>

</html>







