<!DOCTYPE html>
<html>
    <body>


<div class="container">
  <form action="contact.php">

  <label for="Title">Title:</label>
    <select id="Title" name="Title">
      <option value="Mr">Mr.</option>
      <option value="Mrs">Mrs.</option>
      <option value="Ms">Ms</option>
    </select><br><br>
    
    <label for="fname"> First Name:</label>
    <input type="text" id="fname" name="firstname" placeholder="Your First name.." required><br><br>

    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lastname" placeholder="Your Last name.."><br><br>

    <label for="dob">Birthday:</label>
    <input type="date" id="dob" placeholder="select DOB"><br><br>

    <label for="mobile">Phone No.:</label>
    <input type="tel" id="mobile" name="mobile number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="mobile no.."><br><br>

    <address>
    <label for="email">Email id:</label>
    <input type="text" id="email" name="email id" placeholder="enter your email id"><br><br>
    </address>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="fileupload" id="fileupload">
    <input type="submit" value="upload Image" name="submit"><br><br>
    </form>

    <label for="massage">Massage:</label>
    <textarea maxlength="300" id="text" name="massage" placeholder="max char 300"></textarea><br><br>

    
     <input type="submit" value="Submit">

</form>
</div>
</body>
</html>
