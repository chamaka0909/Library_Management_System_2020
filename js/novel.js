
alert("This page is loaded then press green color button to load the content");



function loadData(Data)
{
	if(Data == "Data1")
	{
	document.getElementById("img1").src ="images/img7.jpg";
   	document.getElementById("img2").src ="images/img8.jpg";
    document.getElementById("img3").src ="images/img9.jpg";
	document.getElementById("img4").src ="images/img10.jpg";
	document.getElementById("tex").innerHTML = "View More Details In Fantasy Novels"; 
	}
	
	 else if(Data == "Data2")
	 {
	document.getElementById("img1").src ="images/img11.jpg";
   	document.getElementById("img2").src ="images/img12.jpg";
    document.getElementById("img3").src ="images/img13.jpg";
	document.getElementById("img4").src ="images/img14.jpg";
	document.getElementById("tex").innerHTML = "View More Details In Children Novels"; 
	}
	
	else if(Data == "Data3")
	{
	document.getElementById("img1").src ="images/img15.jpg";
   	document.getElementById("img2").src ="images/img16.jpg";
    document.getElementById("img3").src ="images/img17.jpg";
	document.getElementById("img4").src ="images/img18.jpg";
	document.getElementById("tex").innerHTML = "View More Details In My Stery And Detective Novels"; 
	}
	
	else 
	{ 
	alert("INVALID");
	}
}