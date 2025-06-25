<?php
include "connection.php";

$search = mysqli_real_escape_string($conn, $_POST['query']);

$sql = "SELECT * FROM `order` 
        WHERE user_name LIKE '%$search%' 
        OR country LIKE '%$search%' 
        OR city LIKE '%$search%' 
        OR mobile LIKE '%$search%' 
        ORDER BY id DESC LIMIT 50";

$result = mysqli_query($conn, $sql);

$output = '';
if (mysqli_num_rows($result) > 0) {
  $serial = 1;
  $output .= '<table class="table table-bordered"><thead>
    <tr>
      <th>S. No</th>
      <th>Order Date</th>
      <th>Client Name</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Country</th>
      <th>City & Pincode</th>
      <th>Number</th>
      <th>Payment</th>
      <th>Order Status</th>
      <th>Details</th>
    </tr>
  </thead><tbody>';
  
  while ($row = mysqli_fetch_assoc($result)) {
    $output .= '<tr>
      <td>' . $serial++ . '</td>
      <td>' . $row['created_at'] . '</td>
      <td>' . ucfirst($row['user_name']) . '</td>
      <td>₹' . $row['price'] . '</td>
      <td>' . $row['quantity'] . '</td>
      <td>' . $row['country'] . '</td>
      <td>' . ucfirst($row['city']) . '-' . $row['zip'] . '</td>
      <td>' . $row['mobile'] . '</td>
      <td>' . ucfirst($row['status']) . '</td>
      <td>' . 
        (($row['oredr_status'] == 'Cancelled-By-Supplier') ? "<span class='btn btn-warning'>{$row['oredr_status']}</span>" : 
         ($row['oredr_status'] == 'Delivered' ? "<span class='btn btn-success'>{$row['oredr_status']}</span>" : 
         "<span class='btn btn-danger'>{$row['oredr_status']}</span>")) .
      '</td>
      <td><a href="order-detail.php?id=' . $row['id'] . '" class="btn btn-primary">Details</a></td>
    </tr>';
  }

  $output .= '</tbody></table>';
} else {
  $output = "<h5 class='text-danger'>No results found.</h5>";
}

echo $output;
