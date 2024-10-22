<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cardName = htmlspecialchars($_POST['cardName']);
    $cardNumber = htmlspecialchars($_POST['cardNumber']);
    $expiryDate = htmlspecialchars($_POST['expiryDate']);
    $cvv = htmlspecialchars($_POST['cvv']);
    $billingAddress = htmlspecialchars($_POST['billingAddress']);
    echo "<h2>Payment Received!</h2>";
    echo "<p>Cardholder Name: $cardName</p>";
    echo "<p>Card Number: $cardNumber</p>";
    echo "<p>Expiry Date: $expiryDate</p>";
    echo "<p>CVV: $cvv</p>";
    echo "<p>Billing Address: $billingAddress</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #e9ecef; 
            padding: 20px;
        }
        .form-container {
            background: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container mt-5 form-container">
        <h2>Payment Details</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="cardName">Cardholder Name</label>
                <input type="text" class="form-control" id="cardName" name="cardName" required>
            </div>
            <div class="form-group">
                <label for="cardNumber">Card Number</label>
                <input type="text" class="form-control" id="cardNumber" name="cardNumber" required>
            </div>
            <div class="form-group">
                <label for="expiryDate">Expiry Date (MM/YY)</label>
                <input type="text" class="form-control" id="expiryDate" name="expiryDate" placeholder="MM/YY" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" class="form-control" id="cvv" name="cvv" required>
            </div>
            <div class="form-group">
                <label for="billingAddress">Billing Address</label>
                <input type="text" class="form-control" id="billingAddress" name="billingAddress" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit Payment</button>
        </form>
    </div>
</body>
</html>
