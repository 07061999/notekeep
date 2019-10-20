<?php
error_reporting(0);
require"../includes/dbh.inc.php";
require"../functions/functions.php";
if(isset($_POST['uploadroom'])){
     $file = $_FILES['file'];
     //print_r($file);
     $fileName = $_FILES['file']['name'];
     $fileTmpName = $_FILES['file']['tmp_name'];
     //print_r($fileTmpName);

     $folder = "roomupload/".$fileName;
     move_uploaded_file($fileTmpName, $folder);

     $roomType = $_POST['roomtype'];
     $type = $_POST['type'];
     $roomTitle = $_POST['roomtitle'];
     $description = $_POST['description'];
     $roomAddress = $_POST['roomaddress'];
     $price = $_POST['price'];
     
     // print $roomType;
     // print $roomAddress;
     // print $roomTitle;
     // print $description;
     // print $price;
     // print $type;

     $userID = $_SESSION['userId'];
     //echo $userID;

     if(empty($roomType) || empty($type) || empty($roomTitle) || empty($description) || empty($roomAddress) || empty($price)){
          header("LOCATION: addroom.php?error=emptyfield");
     }
     else{
          $inser = "INSERT INTO room VALUES(NULL, '$userID', '$folder', '$roomType', '$roomTitle', '$roomAddress', '$type','$price','$description')";
          $query = mysqli_query($conn, $inser);
          if($query){
               header("LOCATION: addroom.php?data=success");
          }
          else{
               header("LOCATION: addroom.php?data=unsuccess");
          }
     }
}
?>

<!DOCTYPE html>
<html class="no-js">
     <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <title></title>
          <meta name="description" content="">
          <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
          <link rel="stylesheet" href="../style.css">
          <link rel="stylesheet" href="../customstyle.css">
     </head>
     <body>
     <!-- Navbar Starts -->
          <div style="position:sticky;top:0px;z-index:1;height:8%;" class="d-flex flex-col w-100 white shadow-sm">
               <div class="d-flex jcsb">
                    <div class="d-flex flex-row">
                         <div>
                              <a href="../indexcopy.php"><img class="img1" src="../img/cpu.png" alt=""></a>
                         </div>
                         <div class="hamburger">
                              <div class="line"></div>
                              <div class="line"></div>
                              <div class="line"></div>
                         </div>
                         <div class="menu">
                              <ul class="ls-none active current-item">
                                   <li class="p-1"><a class="pl-1 text-deco-none text-black nav" href="../index.php">Home</a></li>
                                   <li class="p-1"><a class="pl-1 text-deco-none text-black nav" href="../about.php">About</a></li>
                                   <li class="p-1"><a class="pl-1 text-deco-none text-black nav" href="../contact.php">Contact</a></li>
                              </ul>
                         </div>
                         <div>
                              <a class="toggle-nav" href="#">&#9776;</a>
                         </div>
                    </div>
                    <div class="mt-1">
                         <?php
                              if(isset($_SESSION['userId'])){
                                   echo'<form action="includes/logout.inc.php" method="post">
                                   <div class="d-flex jcfe">     
                                   <div style="font-size:30px; padding:0 15px;" class="text-black"><a class="text-black" href="myAccount.php?acc"><div class="mx-1" ><i class="fas fa-user-circle"></i></div></a></div>
                                   <div style="margin:10px 0;"><a class="text-deco-none signup-button-field mr-2 text-black pr-1" href="../includes/logout.inc.php" name="logout-submit">Logout</a></div>
                                   </div>
                                   </form>';
                                   }
                                   else{
                                   echo'
                                   <div class="container d-flex flex-row jcfe">
                                        <div ><a class="text-deco-none signup-button-field mr-2 text-black pr-1" href="../signup.php">Signup</a></div>
                                        <div><a class="text-deco-none text-black pr-1 mr-2 nav loginphp" href="../login.php">Login</a></div>
                                   </div>
                                   ';
                                   }
                         ?>
                    </div>
               </div>
          </div>
     <!-- Navbar Ends -->
          
          <div class="mt-2"></div>
                    <div class="container text-left">
                         <div class=" container white p-2 b-rad-2 shadow-md">
                              <h3 class="text-center">Upload ROOM Details</h3>
                              <?php
                                   if(isset($_GET['data'])){
                                        if($_GET['data'] == "success"){
                                             echo"<p style='color:green; font-size:12px;'>Upload successfull!</p>";
                                        }
                                        else{
                                             echo"<p style='color:red; font-size:12px;'>Upload unsuccessfull!</p>";
                                        }
                                   }
                                   if(isset($_GET['error'])){
                                        if($_GET['error'] == "emptyfield"){
                                             echo"<p style='color:red; font-size:12px;'>Please do fill all required details</p>";
                                        }
                                   }
                              ?>
                              <div class="pt-2">
                                   <form method="POST" enctype="multipart/form-data">
                                        <table>
                                             <tr>
                                                  <th><b>Choose a file:</b></th>
                                                  <th>
                                                  <input type="hidden" name="size" value="1000000">
                                                  <div class="p-1">
                                                       <input class="chse_file" type="file" name="file">
                                                  </div>
                                             </th>
                                             </tr>
                                             <tr>
                                                  <th><b>ROOM Type : </b></th>
                                                  <th>
                                                       <select name="roomtype" id="">
                                                        <option value="0">Select a option</option>
                                                        <option value="1">1BHK</option>
                                                        <option value="2">2BHK</option>
                                                        <option value="3">3BHK</option>
                                                       </select>
                                                  </th>
                                             </tr>
                                             <tr>
                                                  <th><b>ROOM Type : </b></th>
                                                  <th>
                                                       <select name="type" id="">
                                                        <option value="0">Select a option</option>
                                                        <option value="full">Fully Furnished</option>
                                                        <option value="no">Unfurnished</option>
                                                        
                                                        <option value="semi">Semi-furnished</option>
                                                       </select>
                                                  </th>
                                             </tr>
                                             <tr>
                                                  <th><b>Room Title:</b></th>
                                                  <th>
                                                       <input class="input-field-l" type="text" name="roomtitle" placeholder="Enter Room title...">
                                                  </th>
                                             </tr>
                                             <tr>
                                                  <th><b>Room Address:</b></th>
                                                  <th>
                                                       <input class="input-field-l" type="text" name="roomaddress" placeholder="Enter Room address...">
                                                  </th>
                                             </tr>
                                             <tr>
                                                  <th><b>ROOM description:</b></th>
                                                  <th class="pl-1">
                                                       <textarea rows="20" cols="50" class="input-field-l" name="description" placeholder="Enter the description..."></textarea>
                                                  </th>
                                             </tr>
                                             <tr>
                                                  <th>Enter Price:</th>
                                                  <th><input class="input-field-l" type="number" name="price" placeholder="Enter Price..."></th>
                                             </tr>
                                        </table>
                                        <div class="text-center mt-1">
                                             <input class="btn button-field text-deco-none" type="submit" name="uploadroom" value="Upload">
                                        </div>
                                   </form>
                              </div>
                         </div>
                    </div>
     </body>
</html> 
<?php
     require"../footer.php";
?>