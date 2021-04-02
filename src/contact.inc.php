<?php
//  if(isset($_POST['submit'])){
/*    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $subject = $_POST['subject'];
*/
    if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['subject'])){
       
     $mailTo = "temesgen.edomiyas@yahoo.com";
     $headers = "From: ".$_POST['firstname']." ".$_POST['lastname'];
     $text = "Vous avez reçu un message" .$_POST['subject']; 

    $result =  mail($mailTo, $text, $headers);
    var_dump($result);
     echo '<p id="success">Votre message a été envoyé !</p>';
    }
    else{    
        echo '<p id="warning"> Tous les champs doivent être remplis.</p>';
    }
//}
      
?>