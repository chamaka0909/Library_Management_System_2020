<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="styles/login.css">
<link rel="stylesheet" type="text/css" href="styles/header.css">
<link rel="stylesheet" type="text/css" href="styles/footer.css">
</head>
<div >
<header>
<nav>

<ul class ="menu">

<img src ="images/img1.png" class="logo "width ="11%" align ="left" title = "PRIME LIBRARY">
<a href="#"><img src ="images/img2.png" class ="login" height ="10%" width ="8%" align ="right" title = "LOGIN"></a>
<p class ="heder"  style="font-size:50px"> PRIME LIBRARY</p>

<h3>
<li class="menu"><a href="home.html" ></i> Home</a></li>
<li class="menu"><a href ="Membership.html"> New Registration</a></li>
<li class="menu"><a href ="contact.html">Contact Us</a></li>
<li class="menu"><a href ="user.php">User Account</a></li>
</h3>

<div class ="box">



</div>

</ul>

</nav>
</header>
</div>
<body>
<center>
<form action="login.php" method="POST">
<fieldset class="f1"><center>
  <div class="d1">
     <h1>User Login</h1>   
  </div>
  <br> 
  <div class="loginbox">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required><br><br>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br><br>

    <button type="submit">Sign In</button><br><br>
    <label>
      <input type="checkbox" checked="checked" name="remember">Remember me
    </label><br><br>
  </div>

  <div class="signbox" style="background-color:#f1f1f1">
    <span class="password"><a href="onlineassistance.html">Forgot Password?</a><span> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    <span class="sign up"><a href="membership.html">Sign Up</a></span>
  </div>
  </form>
  </div>
  </center>
</fieldset>  
</form></center>
</body>
<footer class="footer-distributed">
 
		<div class="footer-left"> 
		<h3>Prime<span>Library</span></h3> 
		<p class="footer-links">
		
		<a href="#" >Follow Us On :-</a><br>	
		<a href="#" class="footer-company-about">Facebook</a></br>	
		<a href="#" class="footer-company-about">Instagram</a><br>	
		<a href="#" class="footer-company-about">Twitter</a><br>	
		<a href="#" class="footer-company-about">Google Plus</a><br>
		</p> 
		
		<a href="#" ><img class="media" src ="images/f1.png"  ></a>
		<a href="#" ><img class="media" src ="images/f2.png"  ></a>
		<a href="#" ><img class="media" src ="images/f3.png"  ></a>
		<a href="#" ><img class="media" src ="images/f4.png"  ></a>
		
		
		
		</div>
 
 
		<div class="footer-center">
		<br><br>

		
		<p class="footer-company-about">
	
		<a href="#" style="color:white;">Online Assistant</a></br>
	
		<a href="#" style="color:white;">Our Services</a><br>
	
		<a href="#" style="color:white;">Payments :-</a><br>
		
		<a href="#" ><img  class ="pay" src ="images/pay.png" ></a>
	
		</p><br><br>
		<div>
		<p style="color:white;" class="footer-company-about">21 Galle Road, Colombo 5, SriLanka</p>
		</div>
 
		<div>
		<i></i>
		<p style="color:white;" class="footer-company-about">011-3456789</p>
		</div>
 
		<div>
		<p class="footer-company-about" style="color:white;><a href="prime@gmail.com">contact@primelibrary.com</a></p>
		</div>		
		
 

		</div>
 
		<div class="footer-right">
        <br><br>

		
		<p style="color:white;" class="footer-company-about">
		About the company<br>
	Prime Library is based in the SriLanka,with its registered office in the National Library.
		</p>
 
		<br><br><br>
 
 
		<p class="footer-company-name">Prime Library &copy; 2020</p> 
		</div>
 
		</footer>
</body>
</html>