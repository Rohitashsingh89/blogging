<?php
      
    // When the submit button is clicked
    if (isset($_POST['submit'])) {
      
        // Creating variables and 
        // storing values in it
        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $msg = $_POST['Message'];
  
        echo "<h1><i> Good Morning, $name $email $msg </i></h1>";
    }
?>
