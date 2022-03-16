<?php

if (($_POST['username']) == "User1" && ($_POST['password']) == "Password1!") {
  echo "Success!  You hacked the website, nice job! \r\n \r\n";
  echo "<br>";
  echo "<br>";
  echo "The next exercise is located at this URL: [https://webapp-ndclhackingexercisestwo.azurewebsites.net] \r\n \r\n";
  echo "<br>";
  echo "<br>";
  echo "Hint: Use SQL Injection";
} else {
  echo "Wrong username and password. Try again";
}
?>