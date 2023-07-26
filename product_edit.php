<link rel = "stylesheet" href = "styles.css" />
<?php
include"connect.php";
$sql= "SELECT * FROM tbl_product  WHERE id='$_GET[id]'"; 
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result) ;
?>

<p id="index1">
    <b><br/> Product Edit </b> 
</p>

<form action="product_update.php?id=<?php echo $row[id]?>" method="post" enctype="multipart/form-data">
    Name: <input type="text" name="name" value="<?php echo $row[name]; ?>" class = "input"/><br /><br />
    Prize: <input type="int" name="price" value="<?php echo $row[price]; ?>" class = "input"/><br /><br />
    Stock: <input type="int" name="stock" value="<?php echo $row[stock]; ?>" class = "input"/><br /><br />
    Description: <input type="text" name="description" value="<?php echo $row[description]; ?>" class = "input"/><br /><br />
    Photo: <input type="file" name="photo" class = "input" /> <?php echo $row[photo]; ?><br /><br />
    <img src="./images/<?php echo $row[photo] ?>" width="200px" /></br>
    <input type="submit" value="update" class = "button"/>

</form>
