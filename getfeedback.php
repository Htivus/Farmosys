
<?php
        include("dbconnection.php");
        $name = null;
        $phone = null;
        $subject = null;
        $message = null;

        if(!isset($_POST['feedback']))
            $feedback=null;
        else
            $feedback=$_POST['feedback'];
        

        $message_sql=mysqli_query($conn,"SELECT * FROM `feedback`");
        while($row = mysqli_fetch_assoc($message_sql))
        {
        $name=  $row['name'];
        $phone = $row['phone'];
        $subject = $row['subject'];
        $message = $row['message'];
        }
        echo"<html>
        <head>
            <style>
                .feed{
                    text-align: center;
                    left: 30vw;
                    width: 640px; 
                    font-family: 'Lexend Deca', sans-serif; 
                    color: #2E475D;
                }
                </style>
                </head>
                <body>
        <p class='feed'><h4>$name</h4><br/>$phone<br>$subject<br/>$message</p><br/></br>
        </body>
        </html>";
        
        
        ?>
       