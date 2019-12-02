<?php

require_once('common.php');

$qid = isset($_GET['qid'])? $_GET['qid']:-1;
$answer=$_GET['answer'];

$data=getDB('select max(id) as maxid from Question');

if($qid==-1 || !is_numeric($qid) || !((1<=$qid) && ($qid<=$data['maxid']))){
    echo 'エラー: $qid invalid';
    exit(1);
}

$data=getDB('select question from Question where id=?',[$qid]);

if($data['answer']==$answer){
    echo "正解";
}else{
    echo "不正解";
}
?>