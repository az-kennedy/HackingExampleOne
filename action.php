#<?php
#if ($a > $b) {
#    echo "a is bigger than b";
#} elseif ($a == $b) {
#    echo "a is equal to b";
#} else {
#    echo "a is smaller than b";
#}
#?>

<?php
if (($_POST['username']) == "User1" && ($_POST['password']) == "Password1") {
  echo "Success!  You hacked the website, nice job!"
  echo "The next exercise is located at: URLHERE"
} else {
  echo "Wrong Username and Password. Try again"
}
?>