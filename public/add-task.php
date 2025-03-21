    <!-- php script -->
<?php
    include('../config/db.php');

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $task = mysqli_real_escape_string($conn, $_POST['task']);

        $sql = "INSERT INTO tasks (task) VALUES ('$task')";
        if(mysqli_query($conn, $sql) ){
            header("Location: ../public/index.php");
        }else{
            echo "Error: " . mysqli_error($conn);
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task Form</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body class="add-task-body">


    <div class="add-task-container">
        <h2 class="add-task-h2">Add Your Task</h2>
        <form action="add-task.php" class="add_task_form" method="POST">
            <input type="text" name="task" placeholder="Enter a task..." class="add-task-input" require>
            <button type="submit" class="add-task-button">
                Add Task
            </button>
        </form>
        <p class="add-task-message">
            Add your tasks here.
        </p>
    </div>

    <script>
    const inputField = document.querySelector("input[name='task']");
    const submitButton = document.querySelector("button");
    const form = document.querySelector("form");
    const taskMessage = document.querySelector(".add-task-message");

    // Show message on page load
    setTimeout(() => {
        taskMessage.style.display = "block";
    }, 500);

    // Input field focus effect
    inputField.addEventListener("focus", function() {
        this.style.borderColor = "#4CAF50";
        this.style.background = "#fff";
    });

    inputField.addEventListener("blur", function() {
        this.style.borderColor = "#ddd";
        this.style.background = "#f9f9f9";
    });

    // Button hover effect
    submitButton.addEventListener("mouseenter", function() {
        this.style.transform = "scale(1.1)";
        this.style.boxShadow = "0 5px 15px rgba(0, 0, 0, 0.4)";
    });

    submitButton.addEventListener("mouseleave", function() {
        this.style.transform = "scale(1)";
        this.style.boxShadow = "0 3px 10px rgba(0, 0, 0, 0.3)";
    });
    </script>
</body>
</html>