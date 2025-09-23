<?php
echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB' crossorigin='anonymous'>";
echo "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js' integrity='sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI' crossorigin='anonymous'></script>";
$servername = "localhost";
$username = "test01";
$password = "testing123";
$dbname = "test01";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully</br>";
$sql = "SELECT id, name, email FROM tblUser";
$result = $conn->query($sql);
?>


<table class='table table-dark table-hover'>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
  </tr>
<?php


  
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
     
        echo " 
        <tr>
        <td>". $row["id"]."</td>
        <td>". $row["name"]."</td>
        <td>". $row["email"]."</td>
        </tr>
                ";
     
       // echo "id: " . $row["id"]. " Name: " . $row["name"]. " Email: " . $row["email"]. "</br>"; //+
   }
} else {
   echo "0 results";
}
$conn->close();
?>

  


<?php​
class User {​
public $name;​
public $email;​
function __construct($name, $email) {​
$this->name = $name;​
$this->email = $email;​
}​
function display() {​
echo "Name: $this->name, Email: $this->email";​
}​
}​
$user = new User("John", "john@example.com");​
$user->display();​
?>  
  


  
