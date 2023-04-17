
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, inital-scale=1.0">
  <title>HP-AOPA</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <style>
        body {
            margin: 40px 40px;
            height: 600px;
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>

<?php
$title = $_POST["title"];
$firstname = $_POST["first-name"];
$lastname = $_POST["last-name"];
$company = $_POST["company"];
$position = $_POST["position"];
$department = $_POST["department"];
$email = $_POST["email"];

$daytime ='';     //firstly declare empty ''
if((isset($_POST["selection1"]))&&($_POST["selection1"]!='')) // if have select1 and select1 is not empty
$daytime = '4th Oct 2018 '.$_POST["selection1"]; 

if((isset($_POST["selection2"]))&&($_POST["selection2"]!='')) 
$daytime = '5th Oct 2018 '.$_POST["selection2"]; 

if((isset($_POST["selection3"]))&&($_POST["selection3"]!='')) 
$daytime = '6th Oct 2018 '.$_POST["selection3"]; 

if (isset($_FILES['fileupload'])) {
    $dir = 'upload/';
    $time = time();
    $file = $dir.$time.'-'.$_FILES['fileupload']['name'];   //time() is to cover from duplicate image file(now                                                             time is different)
    $tmp_name = $_FILES['fileupload']['tmp_name'];
    move_uploaded_file($tmp_name, $file);
  }
  // Allow only image file formats
  $imageFileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));

  if($imageFileType != "jpg" && $imageFileType != "png") {
  echo "Sorry, only JPG and PNG files are allowed.";
  }else {
   // echo "<a href=#>.$file.</a>";
  }

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
    $sql = "INSERT INTO clients (title, firstname, lastname, company, position, department, email, daytime, fileupload)
    values ('$title', '$firstname', '$lastname', '$company', '$position', '$department', '$email', '$daytime', '$file')";

   if ($conn->query($sql) === TRUE) {
      echo "New record created successfully.";
    } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>

<div class="row padding-top">
<a href="show.php" target="_blank" class="btn btn-primary">Show Table</a>
</div>
</body>
</html>