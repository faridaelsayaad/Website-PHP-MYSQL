
<?php
include_once "db.php";

$password=$_REQUEST["query"];


// Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    echo '<font color=red> Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
}else{
    echo '<font color=black>Strong password.';
}

?>
</font>