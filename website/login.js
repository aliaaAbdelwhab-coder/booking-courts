function validation(){
	var valid = true;
	
	var formLabels = document.getElementsByTagName("labels");
	
	var Email = document.regForm.userEmail.value;
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(Email == ""){
		formLabels[0].innerHTML = "Email: [Required]";
		formLabels[0].style.color = "red";
		valid = false;
	}
	else if(!re.test(Email)){
		formLabels[0].innerHTML = "Email: [Incorrect Email]";
		formLabels[0].style.color = "red";
		valid = false;
	}
	else {
		formLabels[0].innerHTML = "Email: ";
		formLabels[0].style.color = "black";
		valid = (valid) ? true : false;
	}
	
	var userpassword = document.regForm.userpassword.value;
	if(userpassword == "")
	{
		formLabels[1].innerHTML = "Password: [Required]";
		formLabels[1].style.color = "red";
		valid = false;
	}
	else if(userpassword.length > 8)
	{
		formLabels[1].innerHTML = "Password: ";
		formLabels[1].style.color = "black";
		valid = (valid) ? true : false;
	}
	else {
        formLabels[1].innerHTML = "Password: [Must be > 8]";
		formLabels[1].style.color = "red";	
	}
	return valid;
}