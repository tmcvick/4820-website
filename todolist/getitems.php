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

$res = mysqli_fetch_array($r);

$result = array();

array_push($result,array(
        "id"=>$res['id'],
        "title"=>$res['title'],
        "priority"=>$res['priority'],
        "duedate"=>$res['due_date'],
        "updated"=>$res['updated_at'],
        "deleted"=>$res['deleted_ind']
    )
);

echo json_encode(array("result"=>$result));

?>