<!DOCTYPE HTML>
<html>
<!--<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>HP-AOPA</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>-->
<body>
<?php 
  if(isset($_POST["title"])) {
  echo  $_POST["title"]; }
  else echo "NA" ?><br/><br/>
  Your First Name:<?php echo  $_POST["first-name"]; ?><br/><br/>
  Your Last Name:<?php echo  $_POST["last-name"]; ?><br/><br/>
  Company:<?php echo  $_POST["company"];?><br/><br/>
  Position:<?php echo  $_POST["position"]; ?><br/><br/>
  Department:<?php echo  $_POST["department"]; ?><br/><br/>
  Email:<?php echo  $_POST["email"]; ?><br/><br/>
  Time1:<?php 
  if(isset($_POST["selection1"])) 
    echo  $_POST["selection1"]; 
  else 
    echo "NA"; ?>
  <br/><br/>
  Time2:<?php 
  if(isset($_POST["selection2"])) 
    echo  $_POST["selection2"]; 
  else echo "NA" ?><br/><br/>
  Time3:<?php 
  if(isset($_POST["selection3"]) )
    echo  $_POST["selection3"]; 
  else echo "NA" ?><br/><br/>
  Upload File:<?php 
    //upload
    if (isset($_FILES['file-upload'])) {
      $dir = 'upload/';
      $file = $dir.$_FILES['file-upload']['name'];
    
      $tmp_name = $_FILES['file-upload']['tmp_name'];
      move_uploaded_file($tmp_name, $file);
    }
    // Allow only image file formats
    $imageFileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));

    if($imageFileType != "jpg" && $imageFileType != "png") {
    echo "Sorry, only JPG and PNG files are allowed.";
    }else {
      echo "<a href=#>.$file.</a>";
    }
      
  ?>
/*  <?php
$firstname = $_POST["first-name"];

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hp-aopa";
    
    // Create connection
    $conn = new mysqli($host, $username, $password, $dbname);
   
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    else {
    $sql = "INSERT INTO clients (firstname)
    values ('$firstname')";
     if ($conn->query($sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }
   
    
    $conn->close();
?>*/
<!--<main>
  <div class="content padding-bottom">
    <div class="container">
      <header>
        <div class="masthead col-lg-12">
          <div class="hp-logo col-lg-4 margin-top">
            <img src="images/logo.jpg" alt="HP-Logo">
            <img class="elogo" src="images/evok3d.jpg" alt="Evok3d-Logo"> 
          </div>
          <img id="masthead" src="images/masthead-hand.jpg" alt="Reinvent how you develop product">  
          <div class="hp-para col-lg-4 margin-top">
            <p class="title">Reinvent how you
              develop product.</p>
            <p  class="body">And how you manufacture in this <br/> 
              new digital age faster and with more 
              compelling economics.<br/> <br/> <span>hp.com/go/3DPrint</span>
            </p>
          </div>
          <p class="copy">©Copyright 2018 HP Development Company LP.<br/>
            Data courtesy of Invent Medical.</p>  
        </div>
      </header>
      <div class="confirm">
        <div class="col-lg-12 margin-top padding-top" align="center">
          <img src="images/calendar-confirmed.png" alt="Calendar Confirmed">   
          <p>Thank you, your booking is confirmed.<br/>
          A confirmation email has been sent to you.</p> 
          <h2>Thursday, 4th October @ 14:00</h2>
          <span>AOPA Congress 2018</span><br/>
          <span>Booth #10</span><br/>
          <span>The Star Gold Coast,</span><br/>
          <span>1 Casino Dr, Broadbeach QLD 4218</span>        
        </div>
        <div class="col-lg-12 margin-top margin-bottom" align="center">
          <button class="btn btn-download" type="download" id="download">Download To YOUR CALENDAR</button>
        </div>
      </div>
    </div>
  </div>
</main>-->
</body>
</html>
