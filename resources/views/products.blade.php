<!DOCTYPE html>
<html>
<head>
    <title>Shoe Store - Products</title>
    <link rel="stylesheet" type="text/css" href="app.css"> <!-- You can create a separate CSS file for styling -->
</head>
<body>

<h1>Welcome to Our Shoe Store</h1>
<h2>Products</h2>

<?php
// Sample product data
$products = [
    [
        'name' => 'Men\'s Running Shoes',
        'price' => 89.99,
        'image' => 'mens-running-shoes.jpg',
    ],
    [
        'name' => 'Women\'s Sneakers',
        'price' => 79.99,
        'image' => 'womens-sneakers.jpg',
    ],
    
];


foreach ($products as $product) {
    echo '<div class="product">';
    echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
    echo '<h3>' . $product['name'] . '</h3>';
    echo '<p>Price: $' . $product['price'] . '</p>';
    echo '<a href="cart">Add to Cart</a>'; 
    
    echo '</div>';
}
?>

</body>
</html>