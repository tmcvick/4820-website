<?php
/**
 * Created by IntelliJ IDEA.
 * User: timmcvicker
 * Date: 3/12/17
 * Time: 19:40
 */

include_once "include.php";

$sql = "SELECT * FROM Item";
$r = mysqli_query($conn,$sql);
$result = array();
while($row = mysqli_fetch_assoc($r)) {

    array_push($result, array(
            "id" => $row['id'],
            "title" => $row['title'],
            "priority" => $row['priority'],
            "duedate" => $row['due_date'],
            "updated" => $row['updated_at'],
            "deleted" => $row['deleted_ind']
        )
    );
}
echo json_encode(array("result"=>$result));

?>