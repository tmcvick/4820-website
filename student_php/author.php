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
                    <li><a href="../todolist/author.php">To Do List Authoring Tool</a></li>

                </ul>
            </div>
        </div>
    </div>

    <div class="container" style="margin-left: 0">
        <div class="row content">
            <div class="col-sm-3 sidenav">
                <h4>Student Options</h4>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#">See All Students</a></li>
                    <li><a href="createstudent.html">Create Student</a></li>
                    <li><a href="getstudentbyid.html">See One Student</a></li>
                </ul><br>
            </div>

            <div class="col-sm-9" style="margin-left: 288px; margin-top: 50px;">
                <?php
                include_once "include.php";

                //Gender: 1 for male, 2 for female, 3 for other
                $sql = "SELECT StudentId, Name, Major, AccountCreated, Username, gender FROM Student INNER JOIN Gender on Student.GenderID = Gender.genderID ORDER BY StudentId";

                if($result = mysqli_query($conn, $sql)) {
                    echo '<table class="table table-hover table-bordered">';
                    echo '<tr>';
                    echo '<th>StudentId</th>';
                    echo '<th>Name</th>';
                    echo '<th>Major</th>';
                    echo '<th>Account Created</th>';
                    echo '<th>Username</th>';
                    echo '<th>Gender</th>';
                    echo '</tr>';

                    while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['StudentId'] . "</td>";
                            echo "<td>" . $row['Name'] . "</td>";
                            echo "<td>" . $row['Major'] . "</td>";
                            echo "<td>" . $row['AccountCreated'] . "</td>";
                            echo "<td>" . $row['Username'] . "</td>";
                            echo "<td>" . $row['gender'] . "</td>";
                            echo "<td><form action=\"delete_student.php\" method=\"post\"><button name=\"studentId\" type=\"submit\" value=" . $row['StudentId'] . ">Delete</button></form></td>";

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