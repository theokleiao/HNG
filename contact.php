<?php
    if(isset($_POST['submit']))
    {$fname = $_POST['fname'];$lname = $_POST['lname']; $subject = 
        $_POST['subject']; $email = 
        $_POST['email']; $message = 
        $_POST['message']; echo "First name - $fname
        <br> 
        Last Name - lname - $lname <br>
        Email - $email <br>
        Subject - $subject <br>
        Message - $message
        <br>";
    }
    ?>
