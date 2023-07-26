<link  rel = "stylesheet"  href = "styles.css" />
<p id="index1">
    <b><br/> Product Form </b> 
</p>


<div class = "container">
<form method= "post" action = "product_insert.php" enctype= "multipart/form-data">
    Name :
    <input type="text" name="name" class = "input"/> <br/><br/>
    Price :
    <input type="text" name="price" class = "input"/> <br/><br/>
    Stock :
    <input type="text" name="stock" class = "input"/> <br/><br/>
    Description :
    <textarea name="description" class = "input"> </textarea><br/><br/>
    <input type="submit" value="save" class = "button"/>

    </form>
</div>

