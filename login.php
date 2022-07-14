<?php
$a=$_POST['username'];
$b=$_POST['pwd'];

if($a=='Admin' and $b=='admin@123'){
    header("location:https://www.github.com/vinu132-kali.github.io/knowmoreaboutme.github.io/welcome.html");
}
else{
    echo 'Error :(';
}

?>
