<link  rel = "stylesheet"  href = "styles.css" />
<p id="index1">
    <b><br/> </b> 
</p>

<p id="index2">
<?php
include "connect.php";

$filename = $_FILES["photo"]["name"];
$tempname = $_FILES["photo"]["tmp_name"];
$folder = "./images/" . $filename;

$sql = "INSERT INTO tbl_member (firstname, lastname, email,password, phone, photo, address)
VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]', '$_POST[password]','$_POST[phone]', '$filename', '$_POST[address]')";
 
if (mysqli_query($conn, $sql)) {
    if (copy($tempname, $folder)){
    echo "Done Uploaded "; 
  } else {
    echo "Cannot Download Photo";
  }

  echo "New record created successfully";
  header("location: member_show.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
</p>


<p id="index8"> <a href= 'mainweb.php'> Back to Menu </a> 
    
    </p>


