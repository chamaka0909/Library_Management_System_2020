function loadData(pastp){
	
	if(pastp == "btn1")
	{
		document.getElementById("ppimg1").src="images/sch1.jpg";
		document.getElementById("para1").innerHTML="2015 Grade 5 Scholarship examination paper";
		document.getElementById("link1").innerHTML="Click here to download";
		document.getElementById("ppimg2").src="images/sch2.jpg";
		document.getElementById("para2").innerHTML="2016 Grade 5 Scholarship examination paper";
		document.getElementById("link2").innerHTML="Click here to download";
		document.getElementById("ppimg3").src="images/sch3.jpg";
		document.getElementById("para3").innerHTMl="2017 grade 5 scholarship examination paper ";
		document.getElementById("link3").innerHTML="Click here to download";
		document.getElementById("ppimg4").src="images/sch4.jpg";
		document.getElementById("para4").innerHTMl="2018 grade 5 scholarship examination paper ";
		document.getElementById("link4").innerHTML="Click here to download";
	}	
	else if(pastp == "btn2")
	{
	document.getElementById("ppimg1").src="images/ol1.jpg";
	document.getElementById("para1").innerHTML="2018 ordinary level ICT examination paper";
	document.getElementById("link1").innerHTML="Click here to download";
	document.getElementById("ppimg2").src="images/ol2.jpg";
	document.getElementById("para2").innerHTML="2017 ordinary level ICT examination paper ";
	document.getElementById("link2").innerHTML="Click here to download";
	document.getElementById("ppimg3").src="images/ol3.jpg";
	document.getElementById("para3").innerHTML="2016 ordinary level ICT examination paper";
	document.getElementById("link3").innerHTML="Click here to download";
	document.getElementById("ppimg4").src="images/ol4.jpg";
	document.getElementById("para4").innerHTML="2015 ordinary level ICT examination paper";
	document.getElementById("link4").innerHTML="Click here to download";
	
	}
	
	else if(pastp == "btn3")
	{
		document.getElementById("ppimg1").src="images/al1.jpg";
	document.getElementById("para1").innerHTMLm="2018 Advanced level Combined Maths exam paper with anwsers";
	document.getElementById("link1").innerHTML="click here to download";
	document.getElementById("ppimg2").src="images/al2.jpg";
	document.getElementById("para2").innerHTML="2017 Advanced level Physics exam paper with anwsers";
	document.getElementById("link1").innerHTML="click here to download";
	document.getElementById("ppimg3").src="images/al3.jpg";
	document.getElementById("para3").innerHTML="2016 Advanced level Chemistry exam paper with anwsers";
	document.getElementById("link1").innerHTML="click here to download";
	document.getElementById("ppimg4").src="images/al4.jpg";
	document.getElementById("para4").innerHTML="2015 Advanced level Chemistry exam paper with anwsers";
	document.getElementById("link4").innerHTML="click here to download";
	}
	
	else if(pastp == "btn4")
	{
	document.getElementById("ppimg1").src="images/ue1.jpg";
	document.getElementById("para1").innerHTML="2018 colombo university entrance exam paper with anwsers";
	document.getElementById("link1").innerHTML="click here to download";
	document.getElementById("ppimg2").src="images/ue2.png";
	document.getElementById("para2").innerHTML="2017 colombo university entrance exam paper with anwsers";
	document.getElementById("link2").innerHTML="click here to download";
	document.getElementById("ppimg3").src="images/ue3.jpg";
	document.getElementById("para3").innerHTML="2016 Colombo University entrance exam paper with anwsers";
	document.getElementById("link3").innerHTML="click here to download";
	document.getElementById("ppimg4").src="images/ue4.jpg";
	document.getElementById("para4").innerHTML="2015 Colombo University entrance exam paper with anwsers";
	document.getElementById("link4").innerHTML="click here to download";
	}
	
	else if (pastp == "btn5")
	{
		
	document.getElementById("ppimg1").src="images/pa.jpg";
	document.getElementById("para1").innerHTML="2018 public administration exam paper with anwsers";
	document.getElementById("link1").innerHTML="click here to download";
	document.getElementById("ppimg2").src="images/pa2.png";
	document.getElementById("para2").innerHTML="2017 public administration  exam paper with anwsers";
	document.getElementById("link2").innerHTML="click here to download";
	document.getElementById("ppimg3").src="images/pa3.jpg";
	document.getElementById("para3").innerHTML="2016 public administration  exam paper with anwsers";
	document.getElementById("link3").innerHTML="click here to download";
	document.getElementById("ppimg4").src="images/pa4.jpg";
	document.getElementById("para4").innerHTML="2016 public administration  exam paper with anwsers";
	document.getElementById("link4").innerHTML="click here to download";
	}
	
	else if(pastp== "btn6")
	{
		alert("no other exam papers yet" );
	}
	else 
	{
		alert("invalid");
	}

}