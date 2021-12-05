<!DOCTYPE html>
<html>

<head>

<link rel ="stylesheet" type ="text/css" href = "styles/novel.css"/>
<link rel ="stylesheet" type ="text/css" href = "styles/home.css"/>
<script src  = "js/novel.js"></script>
<title>Novel Page</title>

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


<h1 class ="title">NOVEL</h1>

<div class "buttons">

<button class="button1" type="button" id ="Data1" onclick ="loadData('Data1')" ><b>Fantasy Novels</b> </button>
<button class="button1" type="button" id ="Data2" onclick ="loadData('Data2')"><b>Children Novels</b></button>
<button class="button1" type="button" id ="Data3" onclick ="loadData('Data3')" ><b>My Stery And Detective Stories</b></button>

</div>

<img id ="img1" src="" alt =" ">
<img id ="img2" src="" alt =" ">
<img id ="img3" src="" alt =" ">
<img id ="img4" src="" alt =" ">

<br><br><br>


<table border="2px" class ="tdesign" >
<tr>

<th class="tb"> Novel Names</th><th class="tb">Author</th><th class="tb">Book Id</th><th class="tb">Download Now</th>

</tr>

<tr class="tb">
<td class="al">Storms of fate & fury</td>
<td>Ian Moody  </td>
<td>pb6523     </td>
<td><a href="download.php?file=files/book"><img src ="images/Download.png" width = "50%"></a> </td>
</tr>

<tr class="tb">
<td class="al">The way between the worlds</td>
<td>Ian Moody </td>
<td>pb2256 </td>
<td><a href="download.php?file=files/test1"><img src ="images/Download.png" width = "50%"></a> </td>
</tr>

<tr class="tb">
<td class="al">Dark is the moon</td>
<td>Ian Moody </td>
<td>pb5599 </td>
<td><a href="download.php?file=files/test2"><img src ="images/Download.png" width = "50%"></a> </td>
</tr>

<tr class="tb">
<td class="al">The clements of the crown</td>
<td>Kayl Moody </td>
<td>pb5566 </td>
<td><a href="download.php?file=files/test3"><img src ="images/Download.png" width = "50%"></td>
</tr>

<tr class="tb">
<td class="al">Charlotte's web </td>
<td>Stuart little </td>
<td>pb8541 </td>
<td><a href="download.php?file=files/book"><img src ="images/Download.png" width = "50%"></a> </td>
</tr>

<tr class="tb">
<td class="al">Harry potter</td>
<td>J.K Rowling </td>
<td>pb3295 </td>
<td><a href="download.php?file=files/book"><img src ="images/Download.png" width = "50%"></a> </td>
</tr>

<tr class="tb">
<td class="al">The boxcar childern</td>
<td>Chanier warner </td>
<td>pb2358 </td>
<td><a href="download.php?file=files/book"><img src ="images/Download.png" width = "50%"></a> </td>
</tr>



</table>
<br><br><br><br><br><br>

<a  href="bookcheckout.php" class="text1" >Borrow Now</a> 


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