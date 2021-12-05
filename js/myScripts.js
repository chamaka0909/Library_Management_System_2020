function checkpass(){
 if(document.getElementById("pass").value != document.getElementById("repass").value ){
	 alert("Password Not Match!");
	 return false;
 }
	 else {
		 alert("Congratulations!");
		 return true;
	 }
 }
 
function enableBut(){
	 if(document.getElementById("check1").checked){
		 document.getElementById("submit1").disabled =false;
	 }
	 
	 else{
		document.getElementById("submit1").disabled =true; 
	 }
}


 
 

function loadData(name){
	if(name=="button1"){
		document.getElementById("img1").src="images/i/i17.svg";	
		document.getElementById('para1').innerHTML ="NewsPapers" ;
 		document.getElementById("img2").src="images/i/i18.svg";	
		document.getElementById('para2').innerHTML ="Journals" ;
		document.getElementById("img3").src="images/i/i19.svg";	
		document.getElementById('para3').innerHTML ="Article" ;		
	}
	else if(name=="button2"){
		document.getElementById("img1").src="images/i/i20.svg";
 		document.getElementById('para1').innerHTML ="O/L Papers" ;
 		document.getElementById("img2").src="images/i/i21.svg";	
		document.getElementById('para2').innerHTML ="A/L Papers" ;
		document.getElementById("img3").src="images/i/i26.svg";	
		document.getElementById('para3').innerHTML ="Primary" ;			
	}
	else if(name=="button3"){
		document.getElementById("img1").src="images/i/i23.svg";
		document.getElementById('para1').innerHTML ="Romance" ;
 		document.getElementById("img2").src="images/i/i24.svg";	
		document.getElementById('para2').innerHTML ="Fantacy" ;
		document.getElementById("img3").src="images/i/i25.svg";	
		document.getElementById('para3').innerHTML ="Mysteries" ;			
		
	}
 
	else{
		alert("Invalid");
	}
}






 
 
 