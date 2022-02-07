<?php
@$username = $_GET['login'];
@$password = $_GET['password'];
if(empty($username) || empty($password)) {
exit('Empty login or password');
}
else {echo "OK:$username";}

?>