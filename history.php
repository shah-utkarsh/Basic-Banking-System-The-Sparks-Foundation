<?php 
include "nav.php";
include "connection.php";

$sql = "Select * from transaction_history";
$result = $conn->query($sql);
?>

<html>
    <head>
        <title>Transaction History</title>
        <link rel="stylesheet" href="style.css">
    </style>
    </head>
    <body>
        <div id="history">
        <h1 class="center">Transaction History</h1>
            <table align="center"  class="centertable">
                <thead>
                    <tr>
                        <th><h2>Transaction ID</h2></th>
                        <th><h2>Sender's Name</h2></th>
                        <th><h2>Receiver's Name</h2></th>
                        <th><h2>Amount</h2></th>
                        <th><h2>Date and Time</h2></th>
                    </tr>
                </thead>
                <tbody>
<?php
while($rows =mysqli_fetch_assoc($result)){
  $id = $rows["id"];
?>

            <tr>
                <td><?php echo $rows["id"] ?></td>
                <td><?php echo $rows["sendername"] ?></td>
                <td><?php echo $rows["receivername"] ?></td>
                <td><?php echo $rows["amount"] ?></td>
                <td><?php echo $rows["time"] ?></td>
                <!-- <td><a href="transaction.php"><button type="button" class="btn">Transact</button></a></td> -->
            </tr>
    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>




<?php 
include "footer.php";
$conn->close();
?>