<?php

if (($_POST['username']) == "User1" && ($_POST['password']) == "Password1!") {
  echo "Success!  You hacked the website, nice job!";
  echo "<br>";
  echo "<br>";
  echo "The next exercise is located at this URL: [https://webapp-ndclhackingexercisestwo.azurewebsites.net]";
  echo "<br>";
} else {
  echo "Wrong username and password. Try again";
  echo "<br>";
  echo "<br>";
  echo "Hint: Look around the website, the Username and Password are there!  You'll need both to pass this challenge";
}
?>