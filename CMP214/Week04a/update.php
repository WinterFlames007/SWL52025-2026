<?php
include("./db.php");
$sql = "SELECT ID, fname, lname, email, gender, ninumber FROM tblEmp where ID = '".$_GET["eid"]."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if (isset($_POST["btnsubmit"])) {
    $ID = $_POST["txtID"];
    $first_name = $_POST["txtfname"];
    $last_name = $_POST["txtlname"];
    $email = $_POST["txtemail"];
    $gender = $_POST["btngender"];
    $ninumber = $_POST["txtninumber"];
   
 
    $sql = "UPDATE tblEmp SET fname = '".$first_name."', lname = '".$last_name."',
    email = '".$email."', gender = '".$gender."',
    ninumber = '".$ninumber."' where ID = '".$ID."';";
    $result = $conn->query($sql);
    echo "<script>alert('Employee is added to the system')</script>";
    header("Location: ./index.php");
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
        <h1>Update The Employee Form</h1>
        <form action="update.php" method="Post">
            <table>
            <td><input type="hidden" value="<?php echo $row["ID"]?>" name="txtID"></td>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" value="<?php echo $row["fname"]?>" name="txtfname"></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" value="<?php echo $row["lname"]?>" name="txtlname"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" value="<?php echo $row["email"]?>" name="txtemail"></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <?php
                        if ($row["gender"] == "Male"){
                            echo "<input type = 'radio' name = 'btngender' value = 'Male' checked>Male";
                            echo "<input type = 'radio' name = 'btngender' value = 'Female' >Female";
                            echo "<input type = 'radio' name = 'btngender' value = 'Other' >Other";
                        }
                        else if ($row["gender"] == "Female"){
                            echo "<input type = 'radio' name = 'btngender' value = 'Male' >Male";
                            echo "<input type = 'radio' name = 'btngender' value = 'Female' checked>Female";
                            echo "<input type = 'radio' name = 'btngender' value = 'Other' >Other";
                        }
                        else if ($row["gender"] == "Other"){
                            echo "<input type = 'radio' name = 'btngender' value = 'Male' >Male";
                            echo "<input type = 'radio' name = 'btngender' value = 'Female' >Female";
                            echo "<input type = 'radio' name = 'btngender' value = 'Other' checked>Other";
                        }
 
                        ?>
                        <!-- <input type="radio" name="btngender" value="Male">Male
                        <input type="radio" name="btngender" value="Female">Female
                        <input type="radio" name="btngender" value="Others">Others -->
                    </td>
                </tr>
                <tr>
                    <td>NI Number:</td>
                    <td><input type="text" value="<?php echo $row["ninumber"]?>" name="txtninumber"></td>
                </tr>
                <tr>
                    <td><input type="Submit" value="Submit" name="btnsubmit"></td>
                </tr>
            </table>
        </form>
    </center>
 
 
 
 
</body>
 
</html>