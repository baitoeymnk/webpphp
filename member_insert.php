<link  rel = "stylesheet"  href = "styles.css" />
<p id="index1">
    <b><br/> </b> 
</p>

<p id="index2">
<?php
include "connect.php";

$sql = "INSERT INTO tbl_member (firstname, lastname, email, phone, photo, address)
VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]', '$_POST[phone]', '$_POST[photo]', '$_POST[address]')";
 
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
</p>


<p id="index8"> <a href= 'mainweb.php'> Back to Menu </a> 
    
    </p>


