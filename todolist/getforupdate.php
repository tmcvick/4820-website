<?php
    $id = $_REQUEST['id'];
    $title = $_REQUEST['title'];
    $priority = $_REQUEST['priority'];
    $duedate = $_REQUEST['due_date'];

echo '<script language="javascript">';
echo 'alert("'. $title . '")';
echo '</script>';
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Student</title>

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
            <h4>Item Options</h4>
            <ul class="nav nav-pills nav-stacked">
                <li><a href="author.php">See All Items</a></li>
                <li><a href="createitem.html">Create Item</a></li>
                <li><a href="getitembyid.html">See One Item</a></li>
            </ul><br>
        </div>

        <div class="col-sm-9" style="margin-left: 288px; margin-top: 50px;">
            <form class="form-horizontal" action="update_item.php" method="post">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="id">Id:</label>
                    <div class="col-sm-10">
                        <input readonly type="number" class="form-control" id="id" name="id" value="<?php $_REQUEST['id'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="title">Title:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="title" value="<?php $_REQUEST['title'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="priority">Priority:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="priority" name="priority" value="<?php $_REQUEST['priority'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="duedate">Due Date:</label>
                    <div class="col-sm-10">
                        <input type="date" min="2017-03-13" class="form-control" id="duedate" name="duedate" value="<?php $_REQUEST['due_date'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>