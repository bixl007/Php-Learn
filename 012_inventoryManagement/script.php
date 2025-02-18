<?php
session_start();

if (!isset($_SESSION['inventory'])) {
    $_SESSION['inventory'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item = $_POST['item'];
    $quantity = $_POST['quantity'] ?? 0;
    $price = $_POST['price'] ?? 0;
    $action = $_POST['action'];

    switch ($action) {
        case 'add':
            $_SESSION['inventory'][$item] = [
                'quantity' => $quantity,
                'price' => $price
            ];
            break;
        case 'update':
            if (isset($_SESSION['inventory'][$item])) {
                $_SESSION['inventory'][$item]['quantity'] = $quantity;
                $_SESSION['inventory'][$item]['price'] = $price;
            }
            break;
        case 'remove':
            unset($_SESSION['inventory'][$item]);
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <h1>Inventory Management</h1>
    </div>
    <div class="form-container">
        <form action="" method="post">
            <div>
                Adding Item
            </div>
            <label for="item">Item:</label>
            <input type="text" name="item" id="item" required>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" required>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" required>
            <input type="hidden" name="action" value="add">
            <button type="submit">Add</button>
        </form>
        <form action="" method="post">
            <div>
                Updating Item
            </div>
            <label for="item">Item:</label>
            <input type="text" name="item" id="item" required>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" required>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" required>
            <input type="hidden" name="action" value="update">
            <button type="submit">Update</button>
        </form>
        <form action="" method="post">
            <div>
                Removing Item
            </div>
            <label for="item">Item:</label>
            <input type="text" name="item" id="item" required>
            <input type="hidden" name="action" value="remove">
            <button type="submit">Remove</button>
        </form>
    </div>
    <div class="inventory-list">
        <h2>Inventory List</h2>
        <ul>
            <?php foreach ($_SESSION['inventory'] as $item => $details): ?>
                <li><?php echo htmlspecialchars($item) . ': ' . htmlspecialchars($details['quantity']) . ' @ $' . htmlspecialchars($details['price']); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>