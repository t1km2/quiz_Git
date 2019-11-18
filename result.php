<?php

require_once('common.php');

$qid = $_GET['qid'];
$answer=$_GET['answer'];

if($question[$qid][1]==$answer){
    echo "正解";
}else{
    echo "不正解";
}
?>