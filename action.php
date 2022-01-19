<?php

if (($_POST['username']) == "User1" && ($_POST['password']) == "Password1!") {
  echo "Success!  You hacked the website, nice job!";
  echo "The next exercise is located at: URLHERE";
} else {
  echo "Wrong username and password. Try again";
}
?>