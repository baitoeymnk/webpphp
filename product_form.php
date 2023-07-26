<link  rel = "stylesheet"  href = "styles.css" />
<p id="index1">
    <b><br/> Product Form </b> 
</p>


<div class = "container">
<form method= "post" action = "product_insert.php" enctype= "multipart/form-data">
    Name :
    <input type="text" name="name" class = "input"/> <br/><br/>
    Price :
    <input type="text" name="price" class = "input"/> 
    Stock :
    <input type="text" name="stock" class = "input"/> 
    Description :
    <textarea name="description" class = "input"> </textarea>
    Insert Picture:
    <input type="file" name="photo" class = "input"/>

    <input type="submit" value="save" class = "button"/>
    
    </form>
</div>

