<h2>
    <center>
        Register
    </center>
</h2>


<form method= "post" action = "member_insert.php" enctype= "multipart/form-data">
<center>
    Name :
    <input type="text" name="firstname" /> <br/><br/>
    Fullname :
    <input type="text" name="lastname" /> <br/><br/>
    Email :
    <input type="email" name="email" /> <br/><br/>
    Phone Number :
    <input type="text" name="phone" /> <br/><br/>
    
    Address :
    <textarea name="address"> </textarea> <br/><br/>
    Insert Picture:
    <input type="file" name="photo" /> <br/><br/>
    <input type="submit" value="บันทึกข้อมูล" />
<center>
</form>