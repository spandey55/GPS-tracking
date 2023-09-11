<?php
session_start();
include 'database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // get the customer ID and the new status
      $customer_id = $_POST['customer_id'];
      $new_status = $_POST['new_status'];

      // update the customer status
      $sql = "UPDATE customers SET status = $new_status WHERE id = $customer_id";
      $result = mysqli_query($conn, $sql);

      // check if the query was successful
      if($result) {
            if ($new_status == 1) {
                  echo "Customer status enabled successfully";
            } else {
                  echo "Customer status disabled successfully";
            }
      } else {
            echo "Error updating customer status: " . mysqli_error($conn);
            exit();
      }
}


?>
