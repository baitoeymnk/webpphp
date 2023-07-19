

<link  rel = "stylesheet"  href = "styles.css" />
<p id="index1">
    <b><br/> Register </b> 
</p>


<form method= "post" action = "member_insert.php" enctype= "multipart/form-data">
<center>
    Name :
    <input type="text" name="firstname" class = "input"/> <br/><br/>
    Fullname :
    <input type="text" name="lastname" class = "input" /> <br/><br/>
    Email :
    <input type="email" name="email" class = "input"/> <br/><br/>
    Phone Number :
    <input type="text" name="phone" class = "input"/> <br/><br/>
    
    Address :
    <textarea name="address" class = "input"> </textarea> <br/><br/>
    Insert Picture:
    <input type="file" name="photo" class = "input"/> <br/><br/>
    <input type="submit" value="save" class = "button"/>
<center>
</form>


