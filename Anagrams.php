<!DOCTYPE html>
<html lang="en">

<form method="post" action="">
<tr><input type="text" name="name"></input></tr>
<tr><input type="text" name="text"></input></tr>
<tr>
<button type="submit" name="button">Check Anagram</button></tr>
</form>
<?php
if(isset($_POST['name'], $_POST['text']))
{
$p=$_POST['name'];
$u=$_POST['text'];

$words = array("$p", "$u");


isAnagrams($words);

}
function isAnagrams($words) {
  $sorted_word = array_map('sortWord', $words);
  $record = array();
 
  $flag = FALSE;
  foreach ($sorted_word as $key => $value) {
    if ($flag) {
      if (isset($record[$value])) {
        print "True";
      }
      else {
        print "False";
      }
    }
 
    $record[$value] = $key;
    $flag = TRUE;
  }
}


function sortWord($word) {
  $word = strtolower(str_replace(' ', '', $word));
  $letters = str_split($word);
  sort($letters);
  return implode($letters);
}

?>

</html>