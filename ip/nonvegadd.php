welcome

<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $product = $_POST["product"];
    $quantity = $_POST["quantity"];

    // Create a new MySQLi connection
    $conn = new mysqli("localhost","root", "", "oredr_management");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $stmt = $conn->prepare("INSERT INTO order_details (name, email, product, quantity) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $name, $email, $product, $quantity);

    // Execute the statement
    if ($stmt->execute()) { 
        echo '<h1>Order Details Submitted Successfully!</h1>
              <a href="index.php" class="btn btn-success">Go to Home</a>';
    } else { 
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();

?>
