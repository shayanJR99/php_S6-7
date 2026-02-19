<?php
if(isset($_FILES['txtfile'])){
  $lines=file($_FILES['txtfile']['tmp_name'],FILE_IGNORE_NEW_LINES);
  echo "<table border=1>";
  foreach($lines as $l) echo "<tr><td>".$l."</td></tr>";
  echo "</table>";
}
?>