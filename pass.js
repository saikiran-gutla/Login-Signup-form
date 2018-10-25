// JavaScript Document
 function redirect()
    {
   window.location="login.html" 
    }
function redirecthome()
    {
   window.location="task.html" 
    }
function verify()
{
	//var msg= document.getElementById('msg').value;
    var fname = document.forms["myform"]["fname"].value;
    var lname = document.forms["myform"]["lname"].value;
    var mobile = document.forms["myform"]["mobile"].value;
    var email = document.forms["myform"]["email"].value;
    var pass = document.forms["myform"]["pass"].value;
    var cpass = document.forms["myform"]["cpass"].value;
	if(pass!=cpass)
		{
			document.write("Passwords Mismatch "<a href="task.html">Register" again");
			
		}
	else
		{
			alert("Registered succesfully click ok to go to login page");
		}
	
}
