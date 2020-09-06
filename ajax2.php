<?php

ini_set('display_errors',1);
$id = $_POST['kyouka'];

// データベース接続

$host = 'localhost';
$dbname = 'syllabus';
$dbuser = 'root';
$dbpass = 'root';

try {
$dbh = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8mb4", $dbuser,$dbpass, array(PDO::ATTR_EMULATE_PREPARES => false));
} catch (PDOException $e) {
 var_dump($e->getMessage());
 exit;
}
// データ取得
$sql = "SELECT id, gakubu, kyouka, kyoushi, place, tani FROM info WHERE kyouka = ?";
$stmt = ($dbh->prepare($sql));
$stmt->execute(array($id));



//あらかじめ配列を生成しておき、while文で回します。
$syllabus = array();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
 $syllabus[]=array(
  'id' =>$row['id'],
  'gakubu'=>$row['gakubu'],
  'kyouka'=>$row['kyouka'],
  'kyoushi'=>$row['kyoushi'],
  'place'=>$row['place'],
  'tani'=>$row['tani']


 );
}

//jsonとして出力
header('Content-type: application/json');
echo json_encode($syllabus,JSON_UNESCAPED_UNICODE);