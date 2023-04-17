
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, inital-scale=1.0">
  <title>HP-AOPA</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
</head>
<body>

<?php

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

   // $mysql = array();

   // $mysql['firstname'] = mysql_real_escape_string($clean['title','firstname', 'lastname', ]);

    $sql = "SELECT * FROM clients";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table id='last'>";
        echo "<tr><th>ID</th><th>Name</th><th>Company</th><th>Position</th><th>Department</th><th>Email</th><th>Time</th><th>Uploaded File</th></tr>";
        //output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["title"]."".$row["firstname"]."".$row["lastname"]."</td><td>".$row["company"]."</td><td>".$row["position"]."</td><td>".$row["department"]."</td><td>".$row["email"]."</td><td>".$row["daytime"]."</td><td>".$row["fileupload"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
?>


<button class="btn btn-primary margin-top" type="button">Export Excel</button>

<script src="js/jquery.min.js"></script>
<script type="application/javascript" src="js/jquery.tableToExcel.js"></script>
<script>
//call jquery plugin to export excel file
  $('button').click(function () {
        $('table').tblToExcel();
    });
   
</script>
</body>
</html>