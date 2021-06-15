<?php 
include "nav.php";
include "connection.php";
$sql = "Select * from customers";
$result = $conn->query($sql);
  ?>
<html>
    <head>
        <title>View Customers</title>
        <link rel="stylesheet" href="style.css">
        <style type="text/css">
    </style>
    </head>
    <body>
        <div id="viewcustomer">
            <h1 class="center">Customer Details</h1>
            <table align="center"  class="centertable">
                <thead>
                    <tr>
                        <th><h2>Id</h2></th>
                        <th><h2>Name</h2></th>
                        <th><h2>Email</h2></th>
                        <th><h2>Balance</h2></th>
                        <th><h2>Details</h2></th>
                    </tr>
                </thead>
                <tbody>
<?php
while($rows =mysqli_fetch_assoc($result)){
  $id = $rows["id"];
?>

            <tr>
                <td><?php echo $rows["id"] ?></td>
                <td><?php echo $rows["fullname"] ?></td>
                <td><?php echo $rows["email"] ?></td>
                <td><?php echo $rows["currentbalance"] ?></td>
                <td><a href="viewsinglecustomer.php?customerid=<?php echo $id?>">view</a></td>
                <!-- <td><a href="transaction.php"><button type="button" class="btn">Transact</button></a></td> -->
            </tr>
    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>

<?php include "footer.php";
$conn->close();
?>