<?php 
session_start();
if (!isset($_SESSION['inventory'])) {
    $_SESSION['inventory'] = [];
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item = $_POST['item'];
    $quantity = $_POST['quantity'] ?? 0;
    $price = $_POST['price'] ?? 0;
    $action = $_POST['action'];

    switch($action) {
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
        case 'delete':
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
    <title>Document</title>
</head>

<body>
    <h1>Inventory</h1>
    <div>
        <form action="" method="post">
            <div>Add item</div>
            <input type="text" name="item" id="item" placeholder="Item Name" required>
            <input type="number" name="quantity" id="quantity" placeholder="Quantity" required>
            <input type="number" name="price" id="price" placeholder="price" required>
            <input type="hidden" name="action" value="add">
            <button type="submit">Add</button>
        </form>
        <form action="" method="post">
            <div>Update item</div>
            <input type="text" name="item" id="item" placeholder="Item Name" required>
            <input type="number" name="quantity" id="quantity" placeholder="Quantity" required>
            <input type="hidden" name="action" value="update">
            <button type="submit">Update</button>
        </form>
        <form action="" method="post">
            <div>Delete Item</div>
            <input type="text" name="item" id="item" placeholder="Item Name" required>
            <input type="hidden" name="action" value="delete">
            <button type="submit">Delete</button>
        </form>
    </div>
    <div>
        <h2>Inventory</h2>
        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['inventory'] as $item => $details) : ?>
                    <tr>
                        <td><?= $item ?></td>
                        <td><?= $details['quantity'] ?></td>
                        <td><?= $details['price'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>