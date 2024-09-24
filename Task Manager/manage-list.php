<html>

<head>
    <title>Task Manager with PHP and MySQL</title>
</head>

<body>
    <h1>Task Manager</h1>
    <a href="index.php"><button>Home</button></a>
    <h3>Manage Lists Page</h3>
    <!-- table to display list -->
    <div class="all-lists">
        <a href="add-list.php"><button>Add List</button></a>
        <table>
            <tr>
                <th>S No.</th>
                <th>List Name</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td>1.</td>
                <td>To Do</td>
                <td>
                    <a href="#">Update</a>
                    <a href="#">Delete</a>
                </td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Doing</td>
                <td>
                    <a href="#">Update</a>
                    <a href="#">Delete</a>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>