<?php
if($h=fopen("books.csv","r")){
  echo "<table border=1><tr><th>Name</th><th>Author</th><th>Price</th></tr>";
  while($d=fgetcsv($h)){
    echo "<tr><td>".$d[0]."</td><td>".$d[1]."</td><td>".$d[2]."</td></tr>";
  }
  echo "</table>";
  fclose($h);
}
?>