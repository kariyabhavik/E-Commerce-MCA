<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $username = $_SESSION['username'];
    $get_user = "select * from `user_table` where username='$username'";
    $result = mysqli_query($con, $get_user);
    $row_fetch = mysqli_fetch_assoc($result);
    $user_id = $row_fetch['user_id'];
    echo $user_id;
    ?>
<h3 class="text-success"> All my Orders </h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
    <tr>
        <th>Sr no.</th>
        <th>Amount Due</th>
        <th>Total Products</th>
        <th>Invoice Number</th>
        <th>Date</th>
        <th>Complete/incomplete</th>
        <th>status</th>
    </tr>
    </thead>
    <tbody class="bg-secondary text-light">
        <?php
        $get_order_details = "select * from `user_orders` where user_id=$user_id";
        $result_orders = mysqli_query($con, $get_order_details);
        $number = 1;
        while ($row_orders = mysqli_fetch_assoc($result_orders)) {
            $oid = $row_orders['order_id'];
            $amount_due = $row_orders['amount_due'];
            $amount_due = $row_orders['amount_due'];
            $total_products = $row_orders['total_products'];
            $invoice_number = $row_orders['invoice_number'];
            $order_status = $row_orders['order_status'];
            if ($order_status == 'pending') {
                $order_status = "Incomplete";
            }else {
                $order_status = "Complete";
            }
            $order_date = $row_orders['order_date'];
            echo "        <tr>
            <th>$number</th>
            <th>$amount_due</th>
            <th>$total_products</th>
            <th>$invoice_number</th>
            <th>$order_date</th>
            <th>$order_status</th>
            <th><a href='conform_payment.php' class='text-light'>Conform </a></th>
            </tr>";
            $number++;
        }
        ?>
    </tbody>
</table>
</body>
</html>