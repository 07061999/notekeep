<?php
error_reporting(0);
include('../includes/dbh.inc.php');
session_start();

//begin getRealIpUser ///

function getRealIpUser(){
     switch(true){
          case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
          case(!empty($_SERVER['HTTP_CLIENT_IP'])): return $_SERVER['HTTP_CLIENT_IP'];
          case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])): return $_SERVER['HTTP_X_FORWARDED_FOR'];

          default: return $_SERVER['REMOTE_ADDR'];
     }
}

function loginORnot(){
     if(isset($_SESSION['userId'])){
          echo'<form action="includes/logout.inc.php" method="post">
          <div class="d-flex jcfe">
          <div style="font-size:30px; padding:0 15px;" class="text-black"><a class="text-black" href="account/myAccount.php?acc"><div class="mx-1" ><i class="fas fa-user-circle"></i></div></a></div>
          <div style="margin-top:10px;"><a class="text-deco-none signup-button-field mr-2 text-black pr-1" href="includes/logout.inc.php" name="logout-submit">Logout</a></div>
          </div>
          </form>';
      }
      else{
          echo'
          <div class="container d-flex flex-row jcfe">
              <div style="margin-top:10px;"><a class="text-deco-none signup-button-field mr-2 text-black pr-1" href="signup.php">Signup</a></div>
              <div style="margin-top:10px;"><a class="text-deco-none text-black pr-1 mr-2 nav loginphp" href="login.php">Login</a></div>
          </div>
          ';
      }
}


?>