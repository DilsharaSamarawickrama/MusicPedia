function validate()
{
	var n, mail, cat, pw1, pw2, msg;

	n=document.getElementById("name").innerHTML;
	mail=document.getElementById("email").innerHTML;
	cat=document.getElementById("type").innerHTML;
	pw1=document.getElementById("pwd1").innerHTML;
	pw2=document.getElementById("pwd2").innerHTML;

	if (n== || mail== || pw1== || pw2==) 
	{
		msg="Please fill all the fields!";
	}
	else if (cat=="Select Category:") 
	{
		msg="Please select your category!";
	}
	else if (pw1!=pw2) 
	{
		msg="Passwords are not matching, Try again!";
	}
	else
	{
		msg="Account Created Successfully!";
	}

	alert(msg);
}