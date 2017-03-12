<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Author</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <h4>To Do List Options</h4>
            <ul class="nav nav-pills nav-stacked">
                <li><a href="#">See All Items</a></li>
                <li><a href="createitem.html">Create Item</a></li>
                <li><a href="getitembyid.html">See One Item</a></li>
            </ul><br>
        </div>

        <div class="col-sm-9" style="margin-left: 288px; margin-top: 50px;">
            <?php
            include_once "include.php";

            //Gender: 1 for male, 2 for female, 3 for other
            $sql = "SELECT id, title, priority, due_date, deleted_ind, updated_at FROM Item WHERE deleted_ind = 0";

            if($result = mysqli_query($conn, $sql)) {
                echo '<table class="table table-hover table-bordered">';
                echo '<tr>';
                echo '<th>Id</th>';
                echo '<th>Title</th>';
                echo '<th>Priority</th>';
                echo '<th>Due Date</th>';
                echo '<th>Last Updated At</th>';
                echo '</tr>';

                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['title'] . "</td>";
                    echo "<td>" . $row['priority'] . "</td>";
                    echo "<td>" . date( 'm/d/y', strtotime($row['due_date']))  . "</td>";
                    echo "<td>" . $row['updated_at'] . "</td>";
                    echo "<td><form action=\"delete_item.php\" method=\"post\"><button name=\"id\" type=\"submit\" value=" . $row['id'] . ">Delete</button></form></td>";
                    echo "<td>    
                            <form action=\"getforupdate.php\" method=\"post\">
                                <input type=\"hidden\" class=\"form-control\" id=\"title\" name=\"title\" value=" . $row['title'] . ">
                                <input type=\"hidden\" class=\"form-control\" id=\"priority\" name=\"priority\" value=" . $row['priority'] . ">
                                <input type=\"hidden\" class=\"form-control\" id=\"due_date\" name=\"due_date\" value=" . date( 'y-m-d', strtotime($row['due_date'])) . ">
                                <input type=\"hidden\" class=\"form-control\" id=\"id\" name=\"id\" value=" . $row['id'] . ">
                                <button name=\"id\" type=\"submit\">Update</button>
                            </form>
                           </td>";

                    echo "</tr>";
                }
            } else {
                echo $conn->error;
            }
            ?>

        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</body>
</html>