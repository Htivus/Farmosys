<?php
        include("dbconnection.php");
        $id = null;
        $loc = null;
        $det = null;

        if(!isset($_POST['application']))
            $feedback=null;
        else
            $feedback=$_POST['application'];
        

        $message_sql=mysqli_query($conn,"SELECT * FROM `application`");
        while($row = mysqli_fetch_assoc($message_sql))
        {
        $id = $row['id'];
        $loc = $row['location'];
        $det = $row['details'];
        }
        echo"<p>$row<h3>Entry id  $id Details</h3><h4>$loc</h4>
        $det</p></br>";
        
        
        ?>