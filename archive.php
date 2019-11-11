
<?php
    require "./includes/dbh.inc.php";
    require 'header.php';
    session_start();
    $userID = $_SESSION['userId'];

?>

        <style>
            .textarea {
                width: 100%;
                height: 150px;
                padding: 12px 20px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                background-color: #f8f8f8;
                font-size: 16px; 
                resize: none;
             }
        </style>
    
    <body>
        <div class="d-flex flex-wrap jcc">
                <?php
                    $select = "SELECT * FROM archive where user_id=$userID";
                    $query = mysqli_query($conn, $select);
                    while($row = mysqli_fetch_array($query)){
        
                        $title=$row['title'];
                        $content=$row['content'];
                        $note_id=$row['note_id'];
                        $archive_id=$row['archive_id'];

                ?>
                    <div style='border:1px solid #D8D8D8;width:80%' class='d-flex flex-col mt-1 white p-sm b-rad-1 shadow-sm'>
                        <div style='' class='d-flex jcsb md-flex md-flex-col white'> 
                            <div class='text-center'>
                                    <div class="d-flex md-d-flex md-flex-col">
                                        
                                        <div class="d-flex flex-col md-d-flex md-flex-row m-1 jcsa">
                                            <div>
                                                <?php echo $row['title'] ?>
                                            </div>
                                            <div>
                                                <?php echo $content ?>
                                            </div>
                                            <a href="includes/addnotes.inc.php?archiveTonote=<?php echo $archive_id?>">move to notes</a>
                                        </div>
                                    </div>
                                
                                <div>
                                </div>

                            </div>
                        </div>  
                    </div>
                <?php } ?> 
            </div> 
            <body>
        