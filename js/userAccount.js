function loadData(name){
	if(name=="button1"){
		document.getElementById("img1").src="images/member.png";
		document.getElementById("para1").innerHTML="member id<br>member name<br>registered date<br>member validation details";
	}else if(name=="button2"){
		document.getElementById("img1").src="images/books.jpg";
		document.getElementById("para1").innerHTML="number of borrowed books<br>dates of borrowed books<br>details of borrowed book list<br>reports of borrowed books";
	
	}
	else if(name=="button3"){
		document.getElementById("img1").src="images/return.jpg";
		document.getElementById("para1").innerHTML="list of returned books<br>novels<br>fiction<br>science<br>return dates<br>check-in details";
	}
	else if(name=="button4"){
		document.getElementById("img1").src="images/overdue.jpg";
		document.getElementById("para1").innerHTML="number of overdue books<br>total fine for overdue books<br>cancel reservations due to overdue<br>";
		
	}
	else if(name=="button5"){
		document.getElementById("img1").src="images/viewe.jpg";
		document.getElementById("para1").innerHTML="details of   recently viewed books<br>report of viewed books details<br>update reports";
		
	}
	else if(name=="button6"){
		document.getElementById("img1").src="images/transaction.png";
		document.getElementById("para1").innerHTML="details of transaction history<br>payment bills<br>receive payment history<br>transaction issues";
		
	}
	 
    else{
     alert("invalid");	
    }

}
function checkpassword(){
	  if(document.getElementById("pawrd").value != document.getElementById("rpawrd").value)
	  {
		  alert("password mismatched!");
	     return false;
}
else {
	alert("password is matching!");
	return true;
}
}
function enablebutton(){
if(document.getElementById("policy").checked){
	document.getElementById("btn1").disabled = false;
}
else{
	document.getElementById("btn1").disabled = true;
}
}	
