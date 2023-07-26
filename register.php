<link  rel = "stylesheet"  href = "styles.css" />
<p id="index1">
    <b><br/> Register </b> 
</p>

<div class = "container">
<form method= "post" action = "member_insert.php" enctype= "multipart/form-data">

    Name :
    <input type="text" name="firstname" class = "input"/> </br>
    Fullname :
    <input type="text" name="lastname" class = "input" /> </br>
    Email :
    <input type="email" name="email" class = "input"/> </br>
    Password :
    <input type="password" name="password" class = "input"/> </br>


    Phone Number :
    <input type="text" name="phone" class = "input"/> </br>
    
    Address :
    <textarea name="address" class = "input"> </textarea></br>
    Insert Picture:
    <input type="file" name="photo" class = "input"/></br>
    <input type="submit" value="save" class = "button"/>

</form>
</div>

<p id="index8"> 
    <a href= 'mainweb.php'> Back to main menu </a> 
</p>
