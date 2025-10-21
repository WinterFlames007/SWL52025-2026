<!-- <!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 
<body>
 
    <form action="get_request.php" method="GET">
        <laber for="lblusername">Name: </laber><br>
        <input type="text" name="username"><br>
        <laber for="lblemail">Email: </laber><br>
        <input type="text" name="email"><br>
        <input type="submit" value="Submit">
    </form>
 
</html> -->
 
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
 
<?php
session_start();
if ($_SESSION["username"] == "") {
    header("Location:./login.php");
}
else{
    echo"<h1> Set the PHP Session</h1>";
}
$servername = "localhost";
$username = "SWL5";
$password = "test1234";
$dbname = "SWL5";
$conn = new mysqli($servername, $username, $password, $dbname);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
 
include("./db.php");
if (isset($_POST["btnsubmit"])) {
    $first_name = $_POST["txtfname"];
    $last_name = $_POST["txtlname"];
    $email = $_POST["txtemail"];
    $gender = $_POST["btngender"];
    $ninumber = $_POST["txtninumber"];
   
 
    $sql = "INSERT INTO tblEmp (fname,lname,email,gender,ninumber) VALUES
    ('" . $first_name . "','" . $last_name . "','" . $email . "','" . $gender . "','" . $ninumber . "')";
    $result = $conn->query($sql);
    echo "<script>alert('Employee is added to the system')</script>";
}
?>
 
 
 
 
 
 
 
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 
<body>
 
    <center>
        <h1>Employee Registration From</h1>
        <form action="index.php" method="Post">
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="txtfname"></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="txtlname"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="txtemail"></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="btngender" value="Male">Male
                        <input type="radio" name="btngender" value="Female">Female
                        <input type="radio" name="btngender" value="Others">Others
                    </td>
                </tr>
                <tr>
                    <td>NI Number:</td>
                    <td><input type="text" name="txtninumber"></td>
                </tr>
                <tr>
                    <td><input type="Submit" value="Submit" name="btnsubmit"></td>
                </tr>
            </table>
        </form>
    </center>
 
 
 
 
</body>
 
</html>
 
<?php
$sql = "SELECT ID, fname, lname, email, gender, ninumber FROM tblEmp";
$result = $conn->query($sql);
 
?>
 
<table class='table table-dark table-hover'>
 
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>NI Number</th>
        <th>Actions</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
 
            echo "
      <tr>
        <td>" . $row["ID"] . "</td>
        <td>" . $row["fname"] . "</td>
        <td>" . $row["lname"] . "</td>
        <td>" . $row["email"] . "</td>
        <td>" . $row["gender"] . "</td>
        <td>" . $row["ninumber"] . "</td>
        <td>
        <a href='./update.php?eid=" . $row["ID"] . "'/> update <?a>
        <a href='./delete.php?eid=" . $row["ID"] . "'/> delete <?a>
        </td>
      </tr>
            ";
        }
    } else {
        echo "0 results";
 
    }
    $conn->close();
    ?>
 
 
    <html>
 
    <head>
        <title>The first web page</title>
 
    </head>
 
    <body>
        <h1>Hello from NCG</h1>
 
    </body>
 
    </html>