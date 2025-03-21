<?php
    include('../config/db.php');

    // Fetch existing task
    if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM tasks WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $task = mysqli_fetch_assoc($result);
    }

    // Update task
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_task = mysqli_real_escape_string($conn, $_POST['task']);
    $sql = "UPDATE tasks SET task = '$new_task' WHERE id = $id";
    mysqli_query($conn, $sql);
    header("Location: ../public/index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="edit-container">
    <h2>✏ Edit Task</h2>
    <form method="POST" class="edit-form">
        <input type="text" name="task" value="<?php echo htmlspecialchars($task['task']); ?>" placeholder="Enter updated task..." required>
        <button type="submit">✅ Update</button>
    </form>
</div>

</body>
</html>
