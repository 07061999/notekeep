<?php
    require "./includes/dbh.inc.php";
    include('./functions/functions.php');
    session_start();
    $userID = $_SESSION['userId'];
    // print($userID);
    
 
 
    if(isset($_GET['delaccount'])){
        $deleteaccount = "DELETE FROM users WHERE isUsers='$userID';";
        $check = mysqli_query($conn, $deleteaccount);

        $deleteorder = "DELETE FROM orders WHERE userID='$userID';";
        $checkorder = mysqli_query($conn, $deleteorder);

        $deletecart = "DELETE FROM cart WHERE userID='$userID'";
        $checkcart = mysqli_query($conn, $deletecart);

        $deletesb = "DELETE FROM sborders WHERE userID='$userID'";
        $checksb = mysqli_query($conn, $deletesb);

        $deletesbpc = "DELETE FROM sbpc WHERE userID='$userID'";
        $checksbpc = mysqli_query($conn, $deletesbpc);
        if($check and $checkorder and $checkcart and $checksb and $checksbpc){
            header("LOCATION: includes/logout.inc.php");
        }
        else{
            header("LOCATION: ./index.php");
        }
    }
?>
<!DOCTYPE html>
 <html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Room-Rent</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png" >
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="./customstyle.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script>
            jQuery(document).ready(function() {
            jQuery('.toggle-nav').click(function(e) {
                jQuery(this).toggleClass('active');
                jQuery('.menu ul').toggleClass('active');

                e.preventDefault();
            });
            });
            function showHide(){
                var click = document.getElementById("dropdown-content");
                if(click.style.display === "none"){
                    click.style.display = "block";
                }
                else{
                    click.style.display = "none";
                }
                
            }
            function currentDiv(n) {
                showDivs(slideIndex = n);
            }
        </script>
    </head>
    <body>
        <!-- Navbar -->
            <div style="position:sticky;top:0px;z-index:1;height:8%;" class="d-flex flex-col w-100 white shadow-sm">
                <div class="d-flex  jcsb">
                    <div class="d-flex flex-row">
                        <div>
                            <a href="indexcopy.php"><img class="img1" src="img/cpu.png" alt=""></a>
                        </div>
                        <div class="hamburger">
                            <div class="line"></div>
                            <div class="line"></div>
                            <div class="line"></div>
                        </div>
                        <div class="menu">
                            <ul class="ls-none active current-item">
                                <li class="p-1"><a class="pl-1 text-deco-none text-black nav" href="index.php?home">Home</a></li>
                                <li class="p-1">
                                    <div class="dropdown">
                                        <a style="cursor:pointer" class="pl-1 text-deco-none text-black nav" onclick="showHide()">Catergories</a>
                                        <div style="display:none;" id="dropdown-content" class="dropdown-content shadow-sm text-center mr-2">
                                                <div class="d-flex flex-wrap p-sm">
                                                    <div style="background:#e0e0e0;" class="m-1" >
                                                        <a href="index.php?showroom=1">
                                                            <div class="d-flex flex-col">
                                                                <img width="200" src="./img/1BHK.jpg" alt="1bhk">
                                                                <p class="text-center">1BHK</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div style="background:#e0e0e0" class="m-1" >
                                                        <a href="index.php?showroom=2">
                                                            <div class="d-flex flex-col">
                                                                <img width="200" src="./img/2BHK.jpg" alt="2BHk">
                                                                <p class="text-center">2BHK</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div style="background:#e0e0e0" class="m-1" >
                                                        <a href="index.php?showroom=3">
                                                            <div class="d-flex flex-col">
                                                                <img width="200" src="./img/3BHK.jpg" alt="3BHK">
                                                                <p class="text-center">3BHK</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    </div>
                                </li>
                                <li class="p-1"><a class="pl-1 text-deco-none text-black nav" href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                        <div>
                            <a class="toggle-nav" href="#">&#9776;</a>
                        </div>
                    </div>
                    <div class="mt-sm">
                        <?php
                            loginORnot();
                        ?>
                    </div>
                </div>
            
                <div style=" background:gray">
                    <?php
                        $userName = $_SESSION['userUid'];
                        if($_SESSION['userId']){
                            echo'
                                <div class="p-sm '?><?php if(isset($_GET["close"])){echo "close";} echo'">
                                    <div style="">
                                        <div class="container d-flex flex-row jcc">
                                            <div style="background:#28AB87" class="text-white p-sm b-rad-2">
                                                Welcome! &nbsp; '?><?php echo $userName; echo'
                                            </div>
                                            '?>
                                            <?php
                                            if ($count == 0){
                                                echo'
                                                            <div class="text-white m-sm">Fill ur Bucket'?><?php echo $userName; echo'  ! Many offers are on!! </div>
                                                            <div class=" ml-2">
                                                                <a href="index.php?close">
                                                                    <button class="" style="padding:6px;color:#28AB87;" name="close">&#10006;</button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                ';
                                            }
                                            else{
                                                echo'
                                                <div class="text-white m-sm">
                                                    '?><?php cartcount(); echo' Items in your cart
                                                </div>
                                                <div style="border:1px solid white; height:20px; margin:10px;"></div>
                                                <div class="text-white my-sm">
                                                    Total Price: &#8377; '?><?php echo $grandTotal; echo'
                                                </div>
                                                <div class=" ml-2">
                                                    <a href="index.php?close">
                                                        <button class="" style="padding:6px;color:#28AB87;" name="close">&#10006;</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ';
                            }
                        }
                    ?>
                </div>
            </div>
        <!-- Navbar -->
        
        <!-- Content -->
            <?php
                if(isset($_GET['showroom'])){
                    $roomType = $_GET['showroom'];
                    // echo $roomID;
                    $select = "SELECT * FROM room WHERE roomType='$roomType'";
                    $query = mysqli_query($conn, $select);
                    while($row = mysqli_fetch_array($query)){
                        $image = $row['roomImage'];
                        $roomType = $row['roomType'];
                        $roomTitle = $row['roomTitle'];
                        $type = $row['type'];
                        if($type == "full"){
                            $type = "Fully Furnished";
                        }
                        elseif($type == "semi"){
                            $type = "Semi Furnished";
                        }
                        else{
                            $type = "NO Furnished";
                        }
                        $roomID = $row['roomID'];

                ?>
                    <div style='border:1px solid #D8D8D8' class='d-flex flex-col mx-sm mt-1 white p-sm b-rad-1 shadow-sm'>
                        <div style='width:1400px' class='d-flex jcsb'> 
                            <div class='text-center'>
                                <a style='color:#28AB87' class='text-deco-none transparent' href='details.php?room_det=<?php echo $roomID ?>'>
                                    <div class="d-flex">
                                        <div class='single-img'>
                                            <img width='200' height='200' src='account/<?php echo $image; ?>'/>
                                        </div>
                                        <div class="d-flex flex-col m-1 jcsa">
                                            <div>
                                                <?php echo $row['roomTitle'] ?>
                                            </div>
                                            <div>
                                                <?php echo $roomType; ?>BHK
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class='text-center d-flex flex-col  jcsb' >
                                <div>
                                    <div class='m-1 text-black text-left'><b>&#8377;<?php echo $row['Price']; ?>/-</b></div>
                                    <p style='color:gray;' class=''><?php echo $row['roomAddress'] ?></p>
                                </div>
                                <div>
                                    <p style="color:gray"><?php echo $type;   ?></p>
                                </div>
                            </div>
                            <div class='mt-4'>
                                <div style='vertical-align:middle' class='d-flex jcfe'>
                                    <div class='md-mb-2'><a style='background:#28AB87' class='button-field text-deco-none shadow-sm' href='details.php?room_det={$row["roomID"]}'>Rent Now</a></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                <?php } ?> 
                    <?php
                }
                else{
            ?>
            <div class="d-flex flex-wrap jcc responsive-container">
                <?php
                    $select = "SELECT * FROM room ORDER BY RAND()";
                    $query = mysqli_query($conn, $select);
                    while($row = mysqli_fetch_array($query)){
                        $image = $row['roomImage'];
                        $roomType = $row['roomType'];
                        $roomTitle = $row['roomTitle'];
                        $type = $row['type'];
                        if($type == "full"){
                            $type = "Fully Furnished";
                        }
                        elseif($type == "semi"){
                            $type = "Semi Furnished";
                        }
                        else{
                            $type = "NO Furnished";
                        }
                        $roomID = $row['roomID'];

                ?>
                    <div style='border:1px solid #D8D8D8' class='d-flex flex-col mx-sm mt-1 white p-sm b-rad-1 shadow-sm'>
                        <div style='width:1400px' class='d-flex jcsb'> 
                            <div class='text-center'>
                                <a style='color:#28AB87' class='text-deco-none transparent' href='details.php?room_det=<?php echo $roomID ?>'>
                                    <div class="d-flex">
                                        <div class='single-img'>
                                            <img width='200' height='200' src='account/<?php echo $image; ?>'/>
                                        </div>
                                        <div class="d-flex flex-col m-1 jcsa">
                                            <div>
                                                <?php echo $row['roomTitle'] ?>
                                            </div>
                                            <div>
                                                <?php echo $roomType; ?>BHK
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class='text-center d-flex flex-col  jcsb' >
                                <div>
                                    <div class='m-1 text-black text-left'><b>&#8377;<?php echo $row['Price']; ?>/-</b></div>
                                    <p style='color:gray;' class=''><?php echo $row['roomAddress'] ?></p>
                                </div>
                                <div>
                                    <p style="color:gray"><?php echo $type;   ?></p>
                                </div>
                            </div>
                            <div class='mt-4'>
                                <div style='vertical-align:middle' class='d-flex jcfe'>
                                    <div class='md-mb-2'><a style='background:#28AB87' class='button-field text-deco-none shadow-sm' href='details.php?room_det={$row["roomID"]}'>Rent Now</a></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                <?php } ?> 
            </div>
            <?php 
                }
            ?>
            
        <!-- Content -->
        
<?php
    require "footer.php";
?>

