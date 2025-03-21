<?php
include('../config/db.php');

if (isset($_GET['id'])) {
  $id = mysqli_real_escape_string($conn, $_GET['id']);
  $sql = "DELETE FROM tasks WHERE id = $id";
  mysqli_query($conn, $sql);
  header("Location: ../public/index.php");
}
?>