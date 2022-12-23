<!--Add Php-->
<?php

require("./ContactUsPHP.php");

session_start();

//check session is set or Not
if(isset($_SESSION['fname'])){

    $PUT = $_SESSION['fname'];

}else{

    $PUT = "Log In";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Add Title -->
    <title>Contact Us</title>

    <!--Add Fav Icon -->
    <link rel="shortcut icon" href="./Images-ContactUs/L-logo.png">

    <!--Add StyleSheet 1 Normal-->
    <link rel="stylesheet" href="./StyleSheet-ContactUs/ContactUS.css">

    <!--Add StyleSheet 2 MobRes-->
    <link rel="stylesheet" href="./StyleSheet-ContactUs/ContactUS-MObRes.css">

    <!--Add Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;900&family=Noto+Sans+SC:wght@100;300;400;500;700;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200&family=Oswald:wght@200;300;400;500;600;700&family=Permanent+Marker&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--Add FontAwsom kit-->
    <script src="https://kit.fontawesome.com/92800ec90a.js" crossorigin="anonymous"></script>


</head>

<body>

    <!--Strat Navigation -->
    <nav id="navigation">

        <!--First nav-->

        <div class="first-nav" id="first-nav">

            <!--Logo-->
            <div class="Logo">

                <img src="./Images-ContactUs/test.png" alt="Logo.png">

            </div>

            <!-- Button -->
            <div class="log-button">

                
                <?php 
                
                echo "<a id='hidebutton' href='../LOGIN/index.php' class='Login button'>$PUT</a>";
                if(!($PUT == "Log In")){

                    echo "<a class='LogOut-button'  href='../user page/index.php'> <i class='fa-sharp fa-solid fa-user-check'></i></a>";
                    echo "<a class='LogOut-button' href='./LogOUT.php'><i class='fa-solid fa-right-from-bracket'></i></a>";
                    
                
                }
                else{
                    echo "<a href='' class='Admin button'>Admin</a>";
                }
                ?>  
                
            </div>

        </div>

        <!--Second nav-->

        <div class="second-nav" id="second-nav">

        <button id="menu-button"><i class="fa-solid fa-bars"></i></button>

            <div class="menu" id="menu">

                <ul>

                    <div class="dropmenu">

                        <button class="dwonbut">Explore Plans <i class="fa-solid fa-caret-down"></i></button>

                        <div class="dropmenu-cont">

                            <a href="">Individual Health Insurance</a>
                            <a href="">Family Health Insurance</a>
                            <a href="">Critical Illness Insurance</a>
                            <a href="">Senior Citizen Health Insurance</a>
                            <a href="">Personal Accident Insurance</a>

                        </div>

                    </div>
                    <li><a href="">Careers</a></li>
                    <li><a href="">FAQs</a></li>
                    <li><a href="../About us/index-About.php">About Us</a></li>
                    <li><a href="../Contact us/index.php">Contact Us</a></li>

                </ul>

            </div>

            <div class="search" onclick="searchBox()">

                <i class="fa-solid fa-magnifying-glass"></i>

                <p>Search</p>

            </div>

        </div>

        <!--Search Box -->

        <div class="search-Box" id="search-Box">

            <div id="area-search">

                <form>

                    <input type="search" name="search" placeholder="To search start typing.. ">
                    <input type="submit" name="submit" value="Search">

                </form>

                <button onclick="CloseBox()"><i class="fa-solid fa-xmark"></i></button>

            </div>

        </div>

    </nav>

    <!--  End First Nnavigation section  --->

    <!--  start first section  --->

    <section id="First-sec">

        <div class="page-path">

            <a href="../LOGIN/home.php">Home</a>
            <i class="fa-solid fa-angle-right"></i>
            <a href="#">Contact Us</a>

        </div>

        <hr>

        <div class="Contact-Form">

            <h1>Contact Us</h1>

            <!--After send massage-->

            <div class="massage-send">
                <?php

                foreach($happend as $value){

                    echo "$value"."\n";
                }
                ?>
            </div>

            <!--form-->

            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                <label for="fname"> Your Name <span><i class="fa-sharp fa-solid fa-star-of-life"></i></span></label><br>
                <input type="text" name="name" value="" required><br>

                <label for="email"> Your Email <span><i class="fa-sharp fa-solid fa-star-of-life"></i></span></label><br>
                <input type="email" name="email" value="" required><br>

                <label for="tel"> Your Phone Number <span><i class="fa-sharp fa-solid fa-star-of-life"></i></span></label><br>
                <input type="tel" name="tel" value="" require><br>

                <label for="address">Your Address </label><br>
                <input type="text" name="address" value=""><br>

                <label type=""> Your Message <span><i class="fa-sharp fa-solid fa-star-of-life"></i></span></label><br>
                <textarea name="textarea" require></textarea>

                <input type="submit" name="submit" value="SEND">

            </form>

        </div>

    </section>

    <!--  End first section  --->

    <hr>

    <!---Start Second Section -->
    <section id="second-sec">

        <div class="detail-col">

            <div class="block-1">

                <h1>ADDRESS</h1>
                <p>SLIIT Malabe Campus, New Kandy Rd,<br> Malabe 10115 SLIIT Malabe Campus, New Kandy Rd, Malabe 10115</p>

            </div>

            <div class="block-1">
                <h1>TELEPHONE</h1>
                <P>0117 544 801</P>
                <P>0117 544 801</P>

            </div>

            <div class="block-1">
                <h1>E-MAIL</h1>
                <P>INFORMATION.SLIIT.LK</P>

            </div>

        </div>

        <div class="detail-img">

            <img src="./Images-ContactUs/undraw_delivery_re_f50b.svg" alt="map.png">

        </div>


    </section>

    <hr>

    <!--End Second section -->

    <!--Start theard section -->
    <section id="third-sec">

        <div class="follow-logo">

            <img src="./Images-ContactUs/logo1.png" alt="Logo.png">

            <div class="follow-icon">

                <img src="./Images-ContactUs/social icons/facebook.png " alt="facebook.png">
                <img src="./Images-ContactUs/social icons/twitter.png " alt="twitter.png">
                <img src="./Images-ContactUs/social icons/instagram.png " alt="instagram.png">
                <img src="./Images-ContactUs/social icons/googleplus.png " alt="googleplus.png">

            </div>

        </div>

    </section>


    <!--End Thired Section -->
    <section id="futter">

        <div class="futter-menu">

            <ul>

                <li><a href="">Term of Use</a></li>
                <li><a href="">Carrees</a></li>
                <li><a href="">FAQs</a></li>
                <li><a href="">Contact US</a></li>

            </ul>

        </div>

        <div class="futter-detail">
            <p>© 2022 Health Care solutions.Designed and maintained by API (pvt) Ltd</p>
        </div>

    </section>

    <!--Start Futtore section -->




    <!--Add script JS-->
    <script src="./Script-ContactUs/ContactUs.js"></script>



</body>

</html>