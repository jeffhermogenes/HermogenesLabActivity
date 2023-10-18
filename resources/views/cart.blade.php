<!DOCTYPE html>
<html>
<head>
    <title>Shoe Store - Cart</title>
    <link rel="stylesheet" type="text/css" href="app.css"> <!-- You can create a separate CSS file for styling -->
</head>
<body>

<h1>Shopping Cart</h1>

<?php
session_start();

if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    
    $_SESSION['cart'][] = [
        'id' => $product_id,
        'name' => $product_name,
        'price' => $product_price,
    ];
}

if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    echo '<table>';
    echo '<tr><th>Name</th><th>Price</th></tr>';
    foreach ($_SESSION['cart'] as $item) {
        echo '<tr>';
        echo '<td>' . $item['name'] . '</td>';
        echo '<td>$' . $item['price'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
    echo '<a href="checkout.php">Proceed to Checkout</a>'; // Link to the checkout page
} else {
    echo '<p>Your cart is empty.</p>';
}

?>

<a href='products'>back to products</a> // routing

</body>
</html>
