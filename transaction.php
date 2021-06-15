<?php
include "nav.php";

include "connection.php";
if (isset($_POST['submit'])) {

    $sendername = $_POST["sendername"];
    $receivername = $_POST["receivername"];
    $amount = $_POST['amount'];

    $sendersql = "select * from customers where fullname ='$sendername'";
    $senderresult = $conn->query($sendersql);
    $senderdata = $senderresult->fetch_object();
    $senderbalance = $senderdata->currentbalance;

    $receiversql = "select * from customers where fullname = '$receivername'";
    $receiverresult = $conn->query($receiversql);
    $receiverdata = $receiverresult->fetch_object();
    $receiverbalance = $receiverdata->currentbalance;

    date_default_timezone_set('Asia/Kolkata'); 
    $currenttime = date('Y-m-d H:i:s');

    //checking if amount is greater than 0
    if($amount>0){

        
        //checking if the  sender has enough balance 
        if ($senderbalance > $amount) {
            //credit amount from sender balance
            $senderbalance = $senderbalance - $amount;
            
            //debit amount to receiver balance
            $receiverbalance = $receiverbalance + $amount;
            
            //updating the sender and receiver balance in database
            $conn->query("update customers set currentbalance = '$senderbalance' where fullname='$sendername'");
            $conn->query("update customers set currentbalance = '$receiverbalance' where fullname='$receivername'");
            
            echo '<script language="javascript">';
            echo 'alert("Transaction Successfull")';
            echo '</script>';
            
            //make an entry in the database in transaction history table
            $conn->query("insert into transaction_history(sendername, receivername, amount, time) values('$sendername','$receivername','$amount','$currenttime')");
        } else {
            echo "<script>alert('$sendername has not enough balance')</script>";
        }
    }
    else{
        echo "<script>alert('Amount cannot be negative')</script>";
    }
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trasaction</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="transaction">
        <h1 class="center">Transaction Form</h1>
        <form method="POST">
            <table align="center" class="centertable">
                <tr>
                    <td>
                        <h3>Sender's Name
                    </td>
                    <td><input type="text" name="sendername" id="sendername"></td>
                    <!-- <td>
                        <select name="sendername" id="sendername" style="max-width:max-content">
                            <option value="Select name">--select name</option>
                            <?php
                            // $nameresult = $conn->query("select fullname from customers");
                            // while ($rows = mysqli_fetch_assoc($nameresult)) {
                            ?>
                            <option value="<?php //echo $rows["fullname"] ?>"><?php //echo $rows["fullname"] ?></option>
                        <?php // } ?>
                        </select>
                    </td> -->
                </tr>
                <tr>
                    <td>
                        <h3>Receiver's Name
                    </td>
                    <td>
                        <h3><input type="text" name="receivername" id="receivername">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Amount
                    </td>
                    <td>
                        <h3><input type="number" name="amount" id="amount">
                    </td>
                </tr>
                <tr>
                    <td><input class="button2" type="submit" name="submit" id="submit" value="Transfer" colspan="2" /></td>
                    <td><button type="button" class="button2" onclick="window.location.href='viewcustomer.php';">back</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
<?php
$conn->close();
include "footer.php";
?>