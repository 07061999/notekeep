<?php
require 'dbh.inc.php';
   session_start();
   $userID = $_SESSION['userId'];

if(isset($_POST['add-notes'])){
    require 'dbh.inc.php';

    $title = $_POST['title'];
    $content = $_POST['content'];
    if(empty($userID)){
        header("Location: ../login.php");
     
        exit();
    }elseif(empty($title)){
        header("Location:../notes.php?empty=title");
    }elseif(empty($content)){
        header("Location:../notes.php?empty=content");
    }
    
else{
    $sql = "INSERT INTO notes VALUES (NULL ,null, '$userID', '$title', '$content')";
    $check = mysqli_query($conn, $sql);
    if($check){
        header("Location: ../notes.php?addnotes=success");
    }
}
}
if(isset($_GET['archiveTonote'])){
  if($_GET['archiveTonote']){
    
    $archive_id=$_GET['archiveTonote'];
    $select = "SELECT * FROM archive where archive_id=$archive_id ";
    $query = mysqli_query($conn, $select);
    while($row = mysqli_fetch_assoc($query)){
        $archive_id=$row['archive_id'];
        $note_id=$row['note_id'];
        $user_id=$row['user_id'];
        $title=$row['title'];
        $content=$row['content'];
        echo $content;
        $sql="INSERT INTO notes VALUES('$note_id','$archive_id','$user_id','$title','$content')";
        $moveToarchive = mysqli_query($conn, $sql);
        $sql="delete from archive where archive_id=$archive_id";
        $delnote=mysqli_query($conn, $sql);
        if($delnote){
        header("Location: ../notes.php");
    }      

    }

 
}
}

if(isset($_GET['delete'])){
    if($_GET['delete']){
      $note_id=$_GET['delete'];
      echo $note_id;          $sql="delete from notes where note_id=$note_id";
          $delnote=mysqli_query($conn, $sql);
          if($delnote){
          header("Location: ../notes.php");
      }         
  }
  }
?>