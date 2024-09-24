<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager with PHP ane MySQL</title>
</head>

<body>
    <h1>TASK MANAGER</h1>

    <!-- Menu Starts -->
    <div class="menu">
        <a href="index.php">Home</a>
        <a href="#">To Do</a>
        <a href="#">Doing</a>
        <a href="#">Done</a>
        <a href="manage-list.php">Manage Lists</a>
    </div>
    <!-- Menu Ends -->

    <!-- Task Starts -->
    <div class="task">
        <a href="https://www.google.com" target="_blank"><button>Add Task</button></a>
        <table>
            <tr>
                <th>S No.</th>
                <th>Task Name</th>
                <th>Priority</th>
                <th>Deadline</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td>1.</td>
                <td>Design a website</td>
                <td>Medium</td>
                <td>Sept 23th, 2024</td>
                <td>
                    <a href="#">Update</a>
                    <a href="#">Delete</a>
                </td>
            </tr>
        </table>
    </div>
    <!-- Task Ends -->
</body>

</html>