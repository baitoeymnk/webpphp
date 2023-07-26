<link rel = "stylesheet" href = "styles.css" />
<?php
include"connect.php";
$sql= "SELECT * FROM tbl_member  WHERE id='$_GET[id]'"; 
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result) ;
?>

<p id="index1">
    <b><br/> Member Edit </b> 
</p>

<form action="member_update.php?id=<?php echo $row[id]?>" method="post" enctype="multipart/form-data">
    Name: <input type="text" name="firstname" value="<?php echo $row[firstname]; ?>" class = "input"/><br /><br />
    Lastname: <input type="text" name="lastname" value="<?php echo $row[lastname]; ?>" class = "input"/><br /><br />
    Email: <input type="email" name="email" value="<?php echo $row[email]; ?>" class = "input"/><br /><br /><br />
    Password: <input type="password" name="password" value="<?php echo $row[password]; ?>" class = "input"/><br /><br /><br />
    Phone No.:<input type="text" name="phone" value="<?php echo $row[phone]; ?>" class = "input"/><br /><br />
    Address: <textarea name="address" class = "input"> <?php echo $row[address]; ?> </textarea> <br /><br />
    Photo: <input type="file" name="photo" class = "input" /> <?php echo $row[photo]; ?><br /><br />
    <input type="submit" value="update"  class = "button"/>

</form>