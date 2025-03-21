
<?php
include('../config/db.php');
$sql = "SELECT * FROM tasks ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <link rel="stylesheet" href="../assets/style.css"> 
</head>
<body>

<div class="index-container">
    <h2>📋 My Task List</h2>
    
    <!-- Add Task Button -->
    <a href="add-task.php" class="add-task-btn">➕ Add New Task</a>

    <!-- Task List -->
    <ul class="index-ul">
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <li class="index-li">
                <span class="index-span"><?php echo htmlspecialchars($row['task']); ?></span>
                <div>
                    <a class="index-a" href="edit-task.php?id=<?php echo $row['id']; ?>">✏ Edit</a>
                    <a class="index-a" href="delete-task.php?id=<?php echo $row['id']; ?>">❌ Delete</a>
                </div>
            </li>
        <?php endwhile; ?>
    </ul>
</div>

</body>
</html>
