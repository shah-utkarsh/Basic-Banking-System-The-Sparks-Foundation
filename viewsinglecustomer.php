<?php
include "nav.php";

include "connection.php";

$id = $_GET['customerid'];
$sql = "select * from customers where id='$id'";

$result = $conn->query($sql);
$row = $result->fetch_object();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="outer-box">
        <h1 style="margin-bottom: 30px;"> Details </h1>
            <table border="1" align="center">
                <tr>
                    <td><h3>ID</h3></td>
                    <td><h3><?php echo $row->id?></h3></td>
                </tr>
                <tr>
                    <td><h3>Name</h3></td>
                    <td><h3><?php echo $row->fullname?></h3></td>
                </tr>
                <tr>
                    <td><h3>Email Id</h3></td>
                    <td><h3><?php echo $row->email?></h3></td>
                </tr>
                <tr>
                    <td><h3>Balance</h3></td>
                    <td><h3><?php echo $row->currentbalance?></h3></td>
                </tr>

            </table>
            <a href="viewcustomer.php"><button type="button" class="button">back</button></a>
    </div>
</body>
</html>

<?php include "footer.php";
$conn->close();
?>