<?php

    //create happend 
    $happend = array();


    //require config.php file to connection
    require("./config.php");

    //check submit button click
        
    if(isset($_POST['submit'])){

        //assign value to varible

        $name    =  $_POST['name'];
        $email   =  $_POST['email'];
        $tel     =  $_POST['tel'];
        $address =  $_POST['address'];
        $masg    =  strip_tags($_POST['textarea']); // To remove HTML / XML Tag


        //check Tel Number characters == 10
        if(strlen($tel) == 10)
        {
            //check all characters are numeric
            if(is_numeric($tel) == 1){

                $result1 = 1;
            }
            else{

                $result1 = 0;
            }
        }
        else{

            $result1 = 0;
        } 

        //check Textarea is Empty Or Not
        if(!empty($masg)){

            $result2 = 1;
        }
        else{

            $result2 = 0;
        }


        //check Tel number is valide or not and textarea is empty or not
        if($result1  == 0 || $result2 == 0 )
        {
            if($result1 == 1 && $result2 == 0)
            {
                $happend[] = "<h2 style='color: #da1111;'>Your Message Was Not Send Message Area Is Empty &nbsp <i class='fa-solid fa-handshake-slash'></i></h2>";
            }
            if($result1 == 0 && $result2 == 1){

                $happend[] = "<h2 style='color: #da1111;'>Your Message Was Not Send Tel Number Is Invalid &nbsp <i class='fa-solid fa-handshake-slash'></i></h2>";
            }
            if($result1 == 0 && $result2 == 0){

                $happend[] = "<h3 style='color: #da1111;'> Your Message Was Not Send Message Area Is Empty &nbsp <i class='fa-solid fa-handshake-slash'></i></h3>";
                $happend[] = "<h3 style='color: #da1111;'>Tel Number Is Invalid &nbsp <i class='fa-solid fa-handshake-slash'></i></h3>";
            }

        }
        else{

            //INSERT Data To Table( Contacy_Us)
            $sql = "INSERT INTO contact_us(name, email, pnum, address, Message) value('$name',  '$email' , '$tel' , '$address' , '$masg')";

            //$result = mysqli_query($con,$sql);
            if ($con->query($sql)) {

                $happend[] =" <h2 style='color: #00b73d;'> Your Message Send Successfully &nbsp <i class='fa-solid fa-handshake'></i> </h2>";
            } 
            else {

                $happend[] = "<h2 style='color: #da1111;'> Your Message Was Not Send &nbsp <i class='fa-solid fa-handshake-slash'></i></h2>";
            }

            $con->close();
            
        }

    

        
        //---------Mail() Function is Not work in localhost---Send email to admin email 
        //receiver's email address 
        $receiver    =  'randyruch5@gmail.com';

        //email subject
        $subject     =  'Health Care Solution.';

        //email body
        $Email_body   =  "Client Name      :  $name\n\n";
        $Email_body  .=  "Client E-mail    :  $email\n\n";
        $Email_body  .=  "Client TEL NO    :  $tel\n\n";
        $Email_body  .=  "Client Address   :  $address\n\n";
        $Email_body  .=  "Client Massage   :  $masg\n\n";

        //email header
        $header = "From: HealthCareSolutions.Web" . "\r\n";

        //pass paramiter to mail function
        //mail($receiver , $subject , $Email_body , $header);


    }



?>
