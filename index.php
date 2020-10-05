<?php

$email = $_REQUEST['name'];

if(empty($email)){

    echo "Please enter your email id";
}
else{
    mail("ruhinaz09@gmail.com", "Green Planet Message", "$email" );
    echo "<script type= 'text/javascript'>
    alert('Thank you. We'll update you soon');
    window.history.log(-1);
    </script>"
}
?>