<!DOCTYPE html>
<head>
    <title>RegForm</title>

    <link rel="stylesheet" href="css/styles.css">
    <script src="javascript/uploader.js" async></script>

    
    
</head>

<body>
    
    
    <div class="container">
 





<form 
name="login"  
id="login" 
action="process_form.php" 
method="POST" 
enctype="multipart/form-data">
    
    <header> 
        
        <!-- MENU BUTTON -->
        
        <div id="menu" onclick="showMenu();"> &#8801;
        </div>



        <div id="menu-container">
            <ul>
                <li>Homepage</li>
                <li>Login</li>
                <li>Forum</li>
                <li>Tutorials</li>
                <li>About Us</li>
            </ul>
        </div>
        
    </header>

<img src="pix.jpg" width="130px" height="130px" id=""> <br>

<input type="file" name="avatar" id="file">


<div>
    <input id="username"  name="user" type="text" placeholder="Enter your fullname" />
    
    <div id="errorMsg" class="errorMsg"> &#9746; </div>
</div>

<div>
    <input id="email" type="email" placeholder="email address" />
    
    <div id="errorMsg" class="errorMsg"> &#9746; Sorry! Username already used </div>
</div>

<input type="date"> <br>

<div class="gender">
    <label>Gender</label>
    <input type="radio" name="sex" checked>Male
    <input type="radio" name="sex" >Female
</div>

<select>
    <option>Where are you from?</option>
    <option disabled>Nigeria</option>
    <option>Ghana</option>
    <option >Dubai</option>
    <option>China</option>
    <option>Cameron</option>
    <option selected>USA</option>
    <option>Iraq</option>
    <option>Canada</option>
    <option>Russia</option>
    <option>South Africa</option>
</select>

<br>

<div class="terms">
    <input type="checkbox" checked id="agreement"> I agree to the 
    <a href="facebook.com/terms">Terms</a>    
</div>

<input type="submit" value="REGISTER">

</form>



<br>
<br>
<br>
<br>
<br>

</div>


<script>
    


</script>



<script src="javascript/validation.js" ></script>

</body>







