<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <?php include 'CSS/style.php' ?>
     <?php include 'links/links.php' ?>
    </head>
    <body>
      
      <?php 
      
      include 'dbcon.php';
      
      if(isset($_POST['submit'])){
        $Title = mysqli_real_escape_string($con, $_POST['Title']);
        $fname = mysqli_real_escape_string($con, $_POST['fname']);
        $lname = mysqli_real_escape_string($con, $_POST['lname']);
        $dob = mysqli_real_escape_string($con, $_POST['dob']);
        $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $massage = mysqli_real_escape_string($con, $_POST['massage']);
        $fileupload = mysqli_real_escape_string($con, $_POST['fileupload']);
        
        $email = "SELECT * FROM contacT where email='$email'";
        $query = mysqli_query($con,$emailquery);
        
        $emailquery = mysqli_num_rows($query);
        
        if($emailcount>0){
          
          echo"This email already exists please enter new one";
        
        }else{
          
          if($mobile>0){
            
            $insertquery = "INSERT INTO dk5 (Title, fname, lname, dob, mobile, email, massage, fileupload) values('$Title','$fname','$lname','$dob','$mobile','$email','$massage','$fileupload')";
            $iquery = mysqli_query($con, $insertquery);
            
            if($con){
              ?>
              
              <script>
              alert("Connection Successful");
              </script>
              
              <?php
              }else{
                ?>
                
                <script>
                alert("No Connection");
                </script>
                
                <?php
                        }
                        echo "This mobile no. is already used";
                        ?>
                        }
                      }
                    } 




<div class="container">
  <form action="contact.php">

  <label for="Title">Title:</label>
    <select id="Title" name="Title">
      <option value="Mr">Mr.</option>
      <option value="Mrs">Mrs.</option>
      <option value="Ms">Ms</option>
    </select><br><br>
    
    <label for="fname"> First Name:</label>
    <input type="text" id="fname" name="firstname" placeholder="Your First name.."><br><br>

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