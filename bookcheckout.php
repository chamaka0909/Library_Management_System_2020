<!DOCTYPE html>
<html>

<head>

<link rel ="stylesheet" type ="text/css" href = "styles/home.css"/>
<link rel ="stylesheet" type ="text/css" href = "styles/bookcheckout.css"/>



<title>Novel checkout Page</title>

</head>

<body>

<div >
<header>
<nav>

<ul class ="menu">

<img src ="images/img1.png" class="logo "width ="11%" align ="left" title = "PRIME LIBRARY">
<a href="login12.php"><img src ="images/img2.png" class ="login" height ="10%" width ="8%" align ="right" title = "LOGIN"></a>
<p class ="heder"  style="font-size:50px"> PRIME LIBRARY</p>

<h3>
<li class="menu"><a href="home.html" ></i> Home</a></li>
<li class="menu"><a href ="Membership.html"> New Registration</a></li>
<li class="menu"><a href ="contact.html">Contact Us</a></li>
<li class="menu"><a href ="user.php">User Account</a></li>
</h3>


<div class ="box">

<form>

<input type="text" name ="" placeholder="   Type to Search">
<input class ="btn"type="submit" name ="" value=" search " >

</form>

</div>

</ul>

</nav>
</header>
</div>
</br></br>

<div class ="Checkout"><h1>Book Check Out Form<h1/></div>
<div class ="mane">


<form method="post" action="checkout.php">


<h2 class ="name">User Id</h2>
<input class ="style" type ="text" name ="userId" required><br>

<h2 class ="name">User Name</h2>
<input class ="style" type ="text" name ="userName" required><br>

<h2 class ="name">Book Id</h2>
<input class ="style" type ="text" name ="bookId" required><br>

<h2 class ="name">Email</h2>
<input class ="style" type ="text" name ="email" pattern ="[a-zA-Z0-9._%+-]+@[a-z0-9]+\.[a-z]{2,3}" required><br>

<h2 class ="name" >Phone Number</h2>
<input class ="style" type ="text" name ="pnumber" pattern ="[0-9]{10}"required><br>

<h2 class ="name" >Home Address</h2>
<input class ="style" type ="text" name ="address" required><br>


<h2 class ="name">Book Borrowing</h2>
<select class="option" name ="borrow">
<option disabled ="disabled" selected="selected" required >Chose option</option>
<option value ="7_days">7 days</option>
<option value ="14_days">14 days</option>
<option value ="1_month">1 month</option>

</select>

<h2 id="user">Pay On Delivery Cost</h2><br><br>


<input type ="radio" id ="payment" name= "payment" value = "Credit_card"checked><label class="rad1">Credit or Debit Card</label>
<input type ="radio" id ="payment" name ="payment" value = "Paypal"><label class="rad1">Paypal</label><br><br>
<input type ="radio" id ="payment" name ="payment" value = "Cash"><label class="rad1">Cash</label><br><br><br>

<label class ="name">I understand that I must keep this book in good condition and return it. </label>
<input type ="checkbox" id ="check" name= "check"  required><br><br>

<button type ="submit" name="submit" value ="submit">Checkout</button>
</form>

</div>


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
		
		About the company<br>Prime Library is based in the SriLanka,with its registered office in the National Library.
		
		</p>
 
		<br><br><br>
  
		<p class="footer-company-name">Prime Library &copy; 2020</p> 
		</div>
 
		</footer>
		
		</body>

</html>