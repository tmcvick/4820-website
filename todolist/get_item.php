<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Get Student By Id</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container" style="margin-left: 0">
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="../index.html">Home</a></li>
                <li><a href="../student_php/author.php">Student Authoring Tool (demo)</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container" style="margin-left: 0">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <h4>Student Options</h4>
            <ul class="nav nav-pills nav-stacked">
                <li><a href="author.php">See All Items</a></li>
                <li><a href="createitem.html">Create Item</a></li>
                <li><a href="getitembyid.html">See One Item</a></li>
            </ul><br>
        </div>

        <div class="col-sm-9" style="margin-left: 288px; margin-top: 50px;">
            <?php
            include_once "include.php";

            $id = $_REQUEST['id'];

            //Gender: 1 for male, 2 for female, 3 for other
            $sql = "SELECT id, title, priority, due_date, deleted_ind, updated_at FROM Item WHERE id = $id LIMIT 1";

            if($result = mysqli_query($conn, $sql)) {
                if($result->num_rows === 0)
                {
                    echo '<script language="javascript">';
                    echo 'alert("Item Not Found!")';
                    echo '</script>';
                    header("Refresh:0; url=getitembyid.html");
                }
                else {
                    $row = $result->fetch_assoc();
                    echo '<table class="table table-hover table-bordered">';
                    echo '<tr>';
                    echo '<th>Id</th>';
                    echo '<th>Title</th>';
                    echo '<th>Priority</th>';
                    echo '<th>Due Date</th>';
                    echo '<th>Last Updated At</th>';
                    echo '</tr>';
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['title'] . "</td>";
                    echo "<td>" . $row['priority'] . "</td>";
                    echo "<td>" . date( 'm/d/y', strtotime($row['due_date'])) . "</td>";
                    echo "<td>" . $row['updated_at'] . "</td>";
                    echo "<td><form action=\"delete_item.php.php\" method=\"post\"><button name=\"id\" type=\"submit\" value=" . $row['id'] . ">Delete</button></form></td>";
                    echo "</tr>";
                }
            } else {
                echo $conn->error;
            }
            ?>
        </div>
    </div>
</div>


</body>
</html>