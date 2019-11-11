
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
        <div>
                        <?php
                                if (isset($_GET["empty"])){
                                    if($_GET["empty"] == "title"){
                                        echo'<p class="pt-1" style="font-size:12px; color:red">Please give title </p>';
                                    }
                                    if($_GET["empty"] == "content"){
                                        echo"<p class='pt-1' style='font-size:12px; color:red'>please add notes</p>";
                                    }
                                  
                                }
                                if(isset($_GET["addnotes"])){
                                    if($_GET["addnotes"]=="success"){
                                        echo"<p class='pt-1' style='font-size:12px; color:red'>notes added successfully</p>";


                                    }
                                }
                               
                        ?>
            <form action="includes/addnotes.inc.php" method="post">
                                    <input  style='text-align:center; font-size: 20px' class="input-field " type="text" name="title" placeholder="title"><br>
                                    <textarea class='textarea' name='content' placeholder="Notes....."></textarea>
                                    <div class="container">
                                    </div>
                                    <div class="text-center my-1"> <button type='submit' style="width:150px; font-size:20px;background:#28AB87" class="btn button-field text-deco-none" name='add-notes'>Add Notes</button></div>
                                    <div class="container">
                                        <div class="container">
                                            <div class="container">
                                            </div>
                                        </div>
                                    </div>
            </form>
        </div>
        <div class="d-flex flex-wrap jcc">
                <?php
                    $select = "SELECT * FROM notes where user_id=$userID";
                    $query = mysqli_query($conn, $select);
                    while($row = mysqli_fetch_array($query)){
        
                        $title=$row['title'];
                        $content=$row['content'];
                        $note_id=$row['note_id'];

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
                                            
                                            <span>
                                            <a href="includes/archive.inc.php?noteToarchive=<?php echo $note_id?>">move to archive</a>
                                            <a href="includes/addnotes.inc.php?delete=<?php echo $note_id?>">delete</a> 
                                            </span>
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
        
