<?php
error_reporting(7);
include 'mysqli.php';
$model = new orangemysqli();
$sql = "select * from users";
$model->query($sql);
$results = $model->results();
print_r($results);
?>