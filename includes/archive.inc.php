<?php
    require 'dbh.inc.php';

   session_start();
   $userID = $_SESSION['userId'];


   //moving notes to archive
if(isset($_GET['noteToarchive'])){
    if($_GET['noteToarchive']){
        $note_id=$_GET['noteToarchive'];
        $sql = "SELECT * FROM notes where note_id=$note_id";
        $result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $note_id=$row['note_id'];
        $user_id=$row['user_id'];
        $title=$row['title'];
        $content=$row['content'];
        $sql="INSERT INTO archive VALUES(null,'$note_id','$user_id','$title','$content')";
        $moveToarchive = mysqli_query($conn, $sql);
        $sql="delete from notes where note_id=$note_id";
        $delnote=mysqli_query($conn, $sql);
        if($delnote){
        header("Location: ../archive.php");
    }
     
           
    }
     
    }
}
}
?>