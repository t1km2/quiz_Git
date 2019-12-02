<?php
$question=[
    ["S M T W T F S ","曜日"],
    ["朝は四本足、昼は二本足、夜は三本足の生き物ってなーーんだ","人間"],
    ["1+1=?","2"]
];

function getDB($sql,$param=[]){
    $dsn ='mysql:dbname=quizdb;host=localhost';
    $user='senpai';
    $pw  ='indocurry';
    
    $dbh=new PDO($dsn,$user,$pw);
    $sth=$dbh->prepare($sql);
    $sth->execute($param);
    
    return ($sth->fetch(PDO::FETCH_ASSOC));
}
