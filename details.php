<?php
     include('./functions/functions.php');
     require"./includes/dbh.inc.php";
?>
<?php
     if(isset($_GET['room_det'])){
          if(isset($_GET['room_det'])){
               $roomID = $_GET['room_det'];
          }
          $selQuery = "SELECT * FROM room WHERE roomID='$roomID'";
          $runQuery = mysqli_query($conn, $selQuery);
          $row = mysqli_fetch_array($runQuery);
          $image = $row['roomImage'];
          $roomType = $row['roomType'];
          $roomTitle = $row['roomTitle'];
          $Price = $row['Price'];   
          // echo $Price;    
          $description = $row['description'];$type = $row['type'];
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
     }
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="js/jquery.exzoom.css" >
     <link rel="shortcut icon" type="image/png" href="img/favicon.png" >
     <title>Computer-Store | Details</title>
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="./customstyle.css">
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
        <style>
             .max-width-50{
               width: 400px;
             }
        </style>
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
                                                        <a href="index.php?showroom=2">
                                                            <div class="d-flex flex-col">
                                                                <img width="200" src="./img/1BHK.jpg" alt="1bhk">
                                                                <p class="text-center">1BHK</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div style="background:#e0e0e0" class="m-1" >
                                                        <a href="index.php?showroom=1">
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
                                <li class="p-1"><a class="pl-1 text-deco-none text-black nav" href="about.php">About</a></li>
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
     <div class="container acc-container">
          <div class="w-min-100">
               <div style=" height:45px; font-size:18px;" class="py-sm pl-2 my-1 b-rad-2 shadow-sm white text-left"><a style="color:#28AB87;" class="text-deco-none" href="./index.php">Home</a> > Details > <a href="" style="color:#28AB87;" class="text-deco-none"><?php if(isset($_GET['part_det'])){ echo $compName ;} ?></a><a href="./builds/completed_build.php" style="color:#28AB87;" class="text-deco-none"><?php if(isset($_GET['pc_det']) || isset($_GET['addpc_cart'])){ echo "Completed Builds" ;} ?></a>   > <?php echo $partTitle;  ?></div>
          </div>
          <div class=" acc-container">
                    <div style="width:100%" class="d-flex flex-row md-d-flex md-flex-col">
                         <div class="d-flex mb-1 jcc">
                              <div style="max-width:100%;" class="text-left">
                                   <div class="exzoom" id="exzoom">
                                        <div class="exzoom_img_box">
                                             <ul class='exzoom_img_ul'>
                                                  <li><img class="max-width-50" src="./account/<?php echo $image ; ?>" alt=""></li>
                                             </ul>
                                        </div>
                                   </div>
                              </div>
                              
                         </div>
                         <div style="width:50%" class="white shadow-md">
                              <div class=" white pt-1">
                                   <h3 class=""><b><?php echo $roomTitle; ?></b></h3>
                              </div>
                              <div class="mx-1 pb-1" style="font-size:18px;">
                                   <p><?php if(isset($_GET['room_det'])){ echo "
                                        <div class='text-left p-2'>$description</div>
                                        <div class='text-left pl-2 pb-1'>Type:$type</div>
                                        <div class='text-left pl-2'>Room Type:$roomType BHK</div>
                                        "; }?></p>
                                   
                              </div>

                              
                         </div>
                         <div style="width:100%" class="white shadow-md">
                              <div class=" white pt-1">
                                   <h3 class=""><b><?php echo $roomTitle; ?></b></h3>
                              </div>
                              <div class="mx-1 pb-1" style="font-size:18px;">
                                   <p><?php if(isset($_GET['room_det'])){ echo "
                                        <div style='color:gray;font-size:20px;' class='p-sm'><b>MRP: &#8377;$Price</b></div>
                                        <div style='color:gray;font-size:20px;' class=' p-sm'>You Save:<strike>"?><?php echo $Price/2; ?><?php echo"</strike></div>
                                        <div>
                                        <div class='mt-lg'><a style='background:#28AB87'  class='button-field text-deco-none shadow-md' href='index.php?add_cart={$partID}'>Rent Now</a></div></div>
                                        "; }?></p>
                                   
                              </div>

                              
                         </div>
                         
                                        
                    </div>
               <div style="" class="white mt-1 p-1 b-rad-1 shadow-sm">
                        <b> Products You may also like</b>
               </div>
               <div class="mt-1">
                    <div class="d-flex flex-wrap jcsa">
                                    <?php
                                        if(isset($_GET['room_det'])){
                                             $query = "SELECT * FROM room ORDER BY RAND() LIMIT 0,4";
                                             $check = mysqli_query($conn, $query);
                                             while ($row = mysqli_fetch_assoc($check)) {  
                                                  $partID = $row['roomID'];
                                                  echo "
                                                       <div style='width:220px;' class='shadow-md white b-rad-2 card-hover'>
                                                            <a style='color:#28AB87' class='text-deco-none' href='details.php?room_det=".$partID."'>
                                                            <div class='single-img'>
                                                                 <img class='img2 mt-1' src='account/".$row['roomImage']."'/>
                                                            </div>
                                                            <div style='font-size:20px;' class='text-center'>
                                                                 <h4 class='m-1'>{$row['roomTitle']}</h4></a><br>
                                                                 <div class='text-primary'>
                                                                      <div class='m-1 text-black'><b>&#8377;{$row['Price']}/-</b></div>
                                                                 </div>
                                                                 <div class='mx-sm'>
                                                                 <div class='mb-3 mt-2 md-mt-2 d-flex jcsa md-flex-col'>
                                                                      <div class='md-mb-2'><a style='background:#28AB87' class='button-field text-deco-none shadow-md' href='details.php?room_det={$partID}'>Details</a></div>
                                                                      <div><a style='background:#28AB87'  class='button-field text-deco-none shadow-md' href='index.php?add_cart={$partID}'>Rent Now</a></div>
                                                                 </div>
                                                                 </div>
                                                       </div>
                                                       </div>
                                                  ";
                                             }
                                        }
                                    ?>
                    
               </div>
               </div>
          </div>
     </div>
     <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
     <script src="js/jquery.exzoom.js"></script>
     <script>
               $(function(){

                    $("#exzoom").exzoom({
                    "autoPlay":true,
                    "navWidth": 60,
                    "navHeight": 60,
                    "navItemNum": 5,
                    "navItemMargin": 7,
                    "navBorder": 1,
                    "autoPlayTimeout": 2000

                    });

          });
     </script>
<?php
     require"footer.php";
?>