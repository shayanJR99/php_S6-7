<?php
$fname=$_POST['fname']; // گرفتن داده از فرم
$lname=$_POST['lname'];

$target="uploads/".basename($_FILES["image"]["name"]); 

move_uploaded_file($_FILES["image"]["tmp_name"],$target); // آپلود عکس

echo "First Name: $fname <br>";
echo "Last Name: $lname <br>";
echo "<img src='$target' width='150'>";
?>

<?php 
    $allowed=['jpg','jpeg','png','gif'];

    $ext=strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
    
    if(!in_array($ext,$allowed)) die("Invalid file type.");
?>