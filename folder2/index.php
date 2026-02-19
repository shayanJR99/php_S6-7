<?php

$books=[
    ['Name'=>'Book One','Author'=>'Author One','Price'=>12000],
    ['Name'=>'Book Two','Author'=>'Author Two','Price'=>15000],
    ['Name'=>'Book Three','Author'=>'Author Three','Price'=>20000]
  ];
  
  $fp=fopen('books.csv','w'); // ساختن فایل CSV
  foreach($books as $b) fputcsv($fp,$b); // نوشتن هر کتاب
  fclose($fp);
  echo "Saved.";

?>