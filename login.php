<?php
error_reporting(0);
    // require_once "./includes/config.inc.php";
    // $loginURL = $gClient->createAuthUrl();
    require "header.php";
?>
<style>
        body{
            overflow: hidden;
        }
        .google{
            display: flex;
            align-items: center;
            color: gray;
            vertical-align: center;
            padding: 10px 13px;
            margin: 8px 0;
            cursor: pointer;
            border-bottom: 1px solid #e0e0e0;
            border-left: 1px solid #eeeeee;
            border-right: 1px solid #eeeeee;
        }
        .google:hover{
            background: #eee;
        }
        .google-text{
            font-size: 16px;
            padding-left: 10px;
        }
        @media screen and (max-width: 991.98px) {

            .imagebox{
                display:none;
            }
            .input-field{
                width:200px;
            }
        }
</style>
<body class="bg-color">
    
    <main class=" bg-color h-min-100">
        <div class="d-flex section">
            <div class="imagebox mt-lg">
                <div class="container">
                    <svg id="bc52c4b0-5495-47d6-8fbf-e718e11a33f1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="803" height="617" viewBox="0 0 803 617"><title>mobile login</title><polygon points="184.898 427 247.069 329.231 107.835 240.694 35.931 353.769 151.095 427 184.898 427" fill="#f0f0f0"/><path d="M471.5,599h-154V568h154Zm-152-2h150V570h-150Z" transform="translate(-198.5 -141.5)" fill="#3f3d56"/><circle cx="254" cy="442" r="10" fill="#28ab87"/><circle cx="226" cy="442" r="10" fill="#28ab87"/><circle cx="198" cy="442" r="10" fill="#28ab87"/><circle cx="170" cy="442" r="10" fill="#28ab87"/><circle cx="142" cy="442" r="10" fill="#28ab87"/><path d="M654.5,254.5v-76h38v-37h-186v186h159V309.31439A25.81441,25.81441,0,0,1,691.31445,283.5H692.5v-29Z" transform="translate(-198.5 -141.5)" fill="#f0f0f0"/><rect x="538" y="480" width="124" height="26" fill="#28ab87"/><rect x="507" y="352" width="182" height="24" fill="#f0f0f0"/><rect y="615" width="778" height="2" fill="#3f3d56"/><path d="M918.68555,758.5H691.31445A26.84532,26.84532,0,0,1,664.5,731.68555V309.31445A26.845,26.845,0,0,1,691.31445,282.5h227.3711A26.845,26.845,0,0,1,945.5,309.31445v422.3711A26.84532,26.84532,0,0,1,918.68555,758.5Zm-227.3711-474A24.84271,24.84271,0,0,0,666.5,309.31445v422.3711A24.84271,24.84271,0,0,0,691.31445,756.5h227.3711A24.84271,24.84271,0,0,0,943.5,731.68555V309.31445A24.84271,24.84271,0,0,0,918.68555,284.5Z" transform="translate(-198.5 -141.5)" fill="#3f3d56"/><path d="M778,302.5a6,6,0,1,1,6-6A6.00657,6.00657,0,0,1,778,302.5Zm0-10a4,4,0,1,0,4,4A4.00427,4.00427,0,0,0,778,292.5Z" transform="translate(-198.5 -141.5)" fill="#3f3d56"/><rect x="594.5" y="154" width="44" height="2" fill="#3f3d56"/><path d="M927.5,311.5v80a80.00357,80.00357,0,0,1-80-80Z" transform="translate(-198.5 -141.5)" fill="#28ab87"/><path d="M928.5,731.5h-247v-421h247Zm-245-2h243v-417h-243Z" transform="translate(-198.5 -141.5)" fill="#3f3d56"/><circle cx="671" cy="218" r="27" opacity="0.1"/><circle cx="667" cy="221" r="27" fill="#28ab87"/><rect x="494" y="186" width="38" height="14" fill="#3f3d56"/><rect x="515" y="319" width="38" height="14" fill="#3f3d56"/><path d="M897.5,512.5h-184v-26h184Zm-182-2h180v-22h-180Z" transform="translate(-198.5 -141.5)" fill="#3f3d56"/><rect x="507" y="428" width="182" height="24" fill="#f0f0f0"/><rect x="515" y="395" width="38" height="14" fill="#3f3d56"/><path d="M897.5,588.5h-184v-26h184Zm-182-2h180v-22h-180Z" transform="translate(-198.5 -141.5)" fill="#3f3d56"/><path d="M868.5,641.5h-126v-28h126Zm-124-2h122v-24h-122Z" transform="translate(-198.5 -141.5)" fill="#3f3d56"/><path d="M892.5,502.5a10.00094,10.00094,0,0,1-17.71,6.37l-.01-.01a9.99931,9.99931,0,1,1,17.43-8.73.00979.00979,0,0,0,.01.01A10.22724,10.22724,0,0,1,892.5,502.5Z" transform="translate(-198.5 -141.5)" fill="#28ab87"/><path d="M892.5,502.5a10.00094,10.00094,0,0,1-17.71,6.37l-.01-.01a10.22763,10.22763,0,0,1-.28-2.36,10.00094,10.00094,0,0,1,17.71-6.37.00979.00979,0,0,0,.01.01A10.22724,10.22724,0,0,1,892.5,502.5Z" transform="translate(-198.5 -141.5)" opacity="0.1"/><circle cx="688" cy="367" r="10" fill="#28ab87"/><path d="M892.5,578.5a10.00094,10.00094,0,0,1-17.71,6.37l-.01-.01a9.99931,9.99931,0,1,1,17.43-8.73.00979.00979,0,0,0,.01.01A10.22724,10.22724,0,0,1,892.5,578.5Z" transform="translate(-198.5 -141.5)" fill="#28ab87"/><path d="M892.5,578.5a10.00094,10.00094,0,0,1-17.71,6.37l-.01-.01a10.22763,10.22763,0,0,1-.28-2.36,10.00094,10.00094,0,0,1,17.71-6.37.00979.00979,0,0,0,.01.01A10.22724,10.22724,0,0,1,892.5,578.5Z" transform="translate(-198.5 -141.5)" opacity="0.1"/><circle cx="688" cy="443" r="10" fill="#28ab87"/><rect x="468" y="48" width="52" height="52" fill="#f0f0f0"/><path d="M869.5,227.5a12,12,0,1,1,12-12A12.01343,12.01343,0,0,1,869.5,227.5Zm0-22a10,10,0,1,0,10,10A10.01146,10.01146,0,0,0,869.5,205.5Z" transform="translate(-198.5 -141.5)" fill="#3f3d56"/><path d="M605.5,394.5h-26v-26h26Zm-24-2h22v-22h-22Z" transform="translate(-198.5 -141.5)" fill="#3f3d56"/><path d="M1001.5,588.5h-26v-26h26Zm-24-2h22v-22h-22Z" transform="translate(-198.5 -141.5)" fill="#3f3d56"/><path d="M488.50263,414.16645l4.4618,2.40312,15.18222,8.18251,24.51011,13.20583,14.2838-26.50149a21.52495,21.52495,0,0,0-8.74393-29.189,28.59037,28.59037,0,0,0-33.38144,4.5292l-.00749.00749a28.62268,28.62268,0,0,0-5.37511,7.07455Z" transform="translate(-198.5 -141.5)" fill="#2f2e41"/><polygon points="356.9 542.937 353.906 575.876 342.676 577.373 335.19 539.942 356.9 542.937" fill="#ffb8b8"/><path d="M538.18164,718.87346s14.22395-7.48629,17.21847-1.49726c0,0-2.24589,17.9671,6.73766,20.213s12.72669,17.96709,0,19.46435-20.96161-2.99451-25.45339-2.99451,0-15.72121,0-15.72121Z" transform="translate(-198.5 -141.5)" fill="#2f2e41"/><polygon points="266.316 542.937 269.311 575.876 280.54 577.373 288.026 539.942 266.316 542.937" fill="#ffb8b8"/><path d="M482.03446,718.87346s-14.224-7.48629-17.21846-1.49726c0,0,2.24588,17.9671-6.73767,20.213s-12.72669,17.96709,0,19.46435S479.04,754.059,483.53172,754.059s0-15.72121,0-15.72121Z" transform="translate(-198.5 -141.5)" fill="#2f2e41"/><circle cx="327.70358" cy="259.20612" r="19.46436" fill="#ffb8b8"/><path d="M464.06737,438.8862,479.78858,463.591l18.71572-1.49726,30.69379,2.24589s2.89719-5.79438,5.26289-11.43158a44.28506,44.28506,0,0,0,2.972-8.78141c.74863-5.2404-9.73218-10.4808-9.73218-10.4808s-.41178-.07489-1.10046-.23957c-.9133-.21709-2.32082-.57646-3.86295-1.10051-3.48114-1.1828-7.666-3.18912-8.51191-6.14621-1.49726-5.24041,9.73218-12.7267,9.73218-12.7267l-13.47532-12.72669s-11.97057,16.627-26.50889,20.41508a23.155,23.155,0,0,1-2.56044.524c-.04487.00749-.08224.015-.12721.02248C465.56462,423.91362,464.06737,438.8862,464.06737,438.8862Z" transform="translate(-198.5 -141.5)" fill="#ffb8b8"/><path d="M472.30229,432.14854l-8.23492,6.73766s-6.73767,32.19105-4.49178,41.1746-.74863,17.21846-.74863,18.71572S452.0893,556.421,452.0893,556.421s-13.47532,29.94516.74863,26.95064,8.98355-32.93967,8.98355-32.93967l17.21847-52.404V453.85878Z" transform="translate(-198.5 -141.5)" fill="#ffb8b8"/><path d="M531.444,438.13757l5.989,4.49177,2.99452,62.88484,22.45887,53.90129s16.46984,26.202,5.989,26.95065S551.657,559.41547,551.657,559.41547l-20.213-51.6554-2.99452-50.15814Z" transform="translate(-198.5 -141.5)" fill="#ffb8b8"/><path d="M494.01253,442.62934s14.97258,10.48081,38.92871,6.73767c0,0,6.73766,13.47532,2.99451,20.96161s4.49178,25.45339,5.989,27.69927,18.71572,48.66089,24.70475,98.819,22.45888,84.59508,8.23492,89.08685-43.42048,9.73218-46.415,5.24041-7.48629-116.03751-7.48629-116.03751l-8.23492,42.67186s11.22944,72.617,2.99452,74.11427-59.89032-2.99451-58.39307-11.97806,16.46984-56.14718,16.46984-56.14718-.74863-94.32726,14.224-112.29435c0,0,5.989-9.73218-2.24589-22.45888s-7.48629-32.93967-7.48629-32.93967S484.28035,456.10467,494.01253,442.62934Z" transform="translate(-198.5 -141.5)" fill="#2f2e41"/><polygon points="282.913 280.145 295.513 307.867 298.507 306.37 285.473 279.621 282.913 280.145" fill="#2f2e41"/><path d="M522.73742,432.30572l9.45519,20.80443,2.26837-.20214-.77111-3.541-7.0895-15.96078C525.68707,433.18914,524.27955,432.82977,522.73742,432.30572Z" transform="translate(-198.5 -141.5)" fill="#2f2e41"/><path d="M492.96443,416.56957a12.323,12.323,0,0,0,22.60865,2.201c-9.47017-12.38235-1.34757-20.16057,14.0368-26.04483a12.31224,12.31224,0,0,0-1.32509-13.655,28.687,28.687,0,0,0-23.4696,7.72586l-.00749.00749L493.87783,407.077A12.26371,12.26371,0,0,0,492.96443,416.56957Z" transform="translate(-198.5 -141.5)" fill="#2f2e41"/><ellipse cx="316.09983" cy="261.45201" rx="2.6202" ry="4.49177" fill="#ffb8b8"/><path d="M522.408,395.6229l22.50383,10.19632,4.125-9.10331a21.56313,21.56313,0,0,0-4.34208-9.08087l-15.48909-7.01465Z" transform="translate(-198.5 -141.5)" fill="#2f2e41"/><circle cx="378" cy="445" r="10" fill="#28ab87"/><circle cx="56.95651" cy="507.91124" r="6.53537" fill="#ff6584"/><rect x="87.9751" y="541.97266" width="2" height="74.41113" fill="#3f3d56"/><circle cx="88.97529" cy="541.97239" r="10.52282" fill="#3f3d56"/><path d="M287.47529,729.33366s-1.50326-32.33193-32.32009-28.57378" transform="translate(-198.5 -141.5)" fill="#3f3d56"/></svg>                
                </div>
            </div>
            <div class=" container ">
                <div style="">
                    <h1 style="font-size:30px;" class="mt-lg text-center mb-1">Login</h1>
                    <div class="text-center container">
                        <div class="container">
                            <div class="container">
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="container text-center">
                            <?php
                                if (isset($_GET["error"])){
                                    if($_GET["error"] == "emptyfields"){
                                        echo'<p class="pt-1" style="font-size:12px; color:red">Please fill in all the details. </p>';
                                    }
                                    if($_GET["error"] == "nouser"){
                                        echo"<p class='pt-1' style='font-size:12px; color:red'>No user exists!</p>";
                                    }
                                    if($_GET["error"] == "wrongpassword"){
                                        echo"<p class='pt-1' style='font-size:12px; color:red'>Wrong password!</p>";
                                    }
                                }
                                if(isset($_GET['pass'])){
                                    if($_GET['pass'] == 'googlelogin'){
                                        echo"<p class='pt-1' style='font-size:12px; color:red'>Please login with google!</p>";
                                    }
                                }
                                if(isset($_GET["login"])){
                                    if($_GET["login"] == 'notlogin'){
                                        echo"<p class='pt-1' style='font-size:12px; color:red'>Please login first</p>";
                                    }
                                }
                            ?>
                            <div>
                                <form action="includes/login.inc.php" method="post">
                                    <input class="input-field" type="text" name="mailuid" placeholder="Username/E-mail..."><br>
                                    <input class="input-field" type="password" name="pwd" placeholder="Password..."><br>
                                    <div class="container">
                                        <div class="container">
                                            <div class="text-right m-1"><a href="forget-pwd.php" class=" text-deco-none forgetpass" >Forget Password?</a></div>
                                        </div>
                                    </div>
                                    <div class="text-center my-1"> <button type='submit' style="width:150px; font-size:20px;background:#28AB87" class="btn button-field text-deco-none" name='login-submit'>Login</button></div>
                                    <div class="container">
                                        <div class="container">
                                            <div class="container">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>