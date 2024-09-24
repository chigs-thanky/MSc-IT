<html>

<head>
    <title>Task Manager with PHP and MySQL</title>
</head>

<body>
    <h1>Task Manager</h1>
    <a href="index.php"><button>Home</button></a>
    <a href="manage-list.php"><button>Manage List</button></a>
    <h3>Add Lists Page</h3>
    <!-- Form to add lists here -->
    <form action="" method="post">
        <table>
            <tr>
                <td>List Name: </td>
                <td><Input type="text" name="list_name" placeholder="Type list name here" required></td>
            </tr>
            <tr>
                <td>List Description: </td>
                <td><textarea name="list_description" id="" placeholder="Type list description here"
                        required></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Save"></td>
            </tr>
        </table>
    </form>
    <!-- Form to add ends here-->

</body>

</html>

<?php
// Checking whether the form is submitted for not
if (isset($_POST["submit"])) {
    echo "Form submitted successfully";
}
?>