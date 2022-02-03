<?php

include 'connect.php';

$topic = $_POST['topic'];
$content = $_POST['content'];
$writher = $_POST['writher'];
$id_post = '';

$sql = "INSERT INTO post (topic, content, writher, timeStamps, statusPost ) 
        VALUES ( :topic, :content, :writher, :datetime, 0)";
$stmt = $conn -> prepare($sql);
$params = array(
    'topic' => $topic,
    'content' => $content,
    'writher' => $writher,
    'datetime' => date("Y-m-d h:i:s")
);
$stmt -> execute($params);

$sqlID = "SELECT id_post FROM post ORDER BY id_post DESC LIMIT 1";

foreach($conn->query($sqlID) as $row){
    $id_post = $row['id_post'];
}

foreach($_FILES['image']['tmp_name'] as $key => $value){


    $file_names = $_FILES['image']['name'];
    $new_name = rand(0,microtime(true)).'-'.$file_names[$key];

    if(move_uploaded_file($_FILES['image']['tmp_name'][$key], "images/".$new_name)){
        $sqlPic = "INSERT INTO picture ( img, id_post ) 
                VALUES ( :image, $id_post)";
        $stmtPic = $conn -> prepare($sqlPic); 
        $paramsPic = array(
            'image' => $new_name,
        );
        $stmtPic -> execute($paramsPic);
        
    }
}
header("Location:ithelp.php");
?>