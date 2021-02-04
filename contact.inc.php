<?php
    if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $subject = $_POST['subject'];

    if(empty($fname)  || empty($lname) || empty($subject)){
       header("Location: index.php?error");
    }
    else{    
     $mailTo = "temesgen.edomiyas@yahoo.com";
     $headers = "From: ".$fname.$lname;
     $text = "You have received a message " .$subject;

     echo "You're message have been sent"; 

     mail($mailTo, $text, $headers);
     header("Location: index.php?mailsend");
    }
}
      
?>