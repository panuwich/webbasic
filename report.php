
<html>
<head>

<!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<!-- jQuery library -->
<script src="js/jquery.min.js"></script>
<!-- Popper JS -->
<script src="js/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script> 
</head>
<body>
<div class="container" >
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Set Charset
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



echo "<table   class='table table-striped'> 
    <thread>
        <tr>
            <th style='width: 10%'>ID</th>
            <th style='width: 30%'>Name</th>
            <th style='width: 30%'>Email</th>
            <th style='width: 10%'>Age</th>
            <th style='width: 10%'>Gender</th>
            <th style='width: 10%'>Type</th>

         </tr>    
    </thread>";
    $sql = "SELECT * from userprofile2";
    $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)) {
            echo    "<tr>
                <td>".$row["ID"]."</td>
                <td>".$row["username"]."</td>
                <td>".$row["useremail"]."</td>
                <td>".$row["userage"]."</td>
                <td>".$row["usergender"]."</td>
                <td>".$row["type"]."</td>
              </tr>";


        }
        echo "</table>";
       mysqli_close($conn);


    ?>
</div>

</body>
</html>

