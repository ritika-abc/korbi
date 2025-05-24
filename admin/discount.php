<?php
session_start();
include "site_connection.php";

// Ensure user is logged in as admin
// if (!isset($_SESSION['admin'])) {
//     header("Location: login.php");
//     exit();
// }

// Fetch discount rules from the database
$discount_query = "SELECT * FROM discounts WHERE status = 1";
$result = mysqli_query($con, $discount_query);

if (isset($_POST['submit'])) {
    // Handle new discount rule creation
    if (isset($_POST['min_items']) && isset($_POST['discount_percentage'])) {
        $min_items = (int)$_POST['min_items'];
        $discount_percentage = (int)$_POST['discount_percentage'];

        $insert_query = "INSERT INTO discounts (min_items, discount_percentage) 
                         VALUES ($min_items, $discount_percentage)";
        mysqli_query($con, $insert_query);
    }
}
?>

<h2>Manage Discounts</h2>
<form action="" method="POST">
    <label for="min_items">Min Items:</label>
    <input type="number" name="min_items" required>
    <label for="discount_percentage">Discount Percentage:</label>
    <input type="number" name="discount_percentage" required>
    <button type="submit" name="submit">Add Discount</button>
</form>

<h3>Existing Discount Rules</h3>
<table>
    <tr>
        <th>Min Items</th>
        <th>Discount Percentage</th>
        <th>Status</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $row['min_items']; ?></td>
            <td><?php echo $row['discount_percentage']; ?>%</td>
            <td>
                <a href="disable_discount.php?id=<?php echo $row['id']; ?>">Disable</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
