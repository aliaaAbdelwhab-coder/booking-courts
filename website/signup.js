function validation(){
	var valid = false;
	
	var formLabels = document.getElementsByTagName("label");
	
	var userName = document.regForm.userName.value;
	if(userName == ""){
		formLabels[0].innerHTML ="Name: [Required]";
		formLabels[0].style.color = "red";
		valid = false;
	}
	else if(!isNaN(userName)){
		formLabels[0].innerHTML = "Name: [Text only]";
		formLabels[0].style.color = "red";
		valid = false;
	}
	else {
		formLabels[0].innerHTML = "Name: ";
		formLabels[0].style.color = "black";
		valid = (valid) ? true : false;
	}
	
	var Email = document.regForm.userEmail.value;
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(Email == "")
	{
		formLabels[1].innerHTML = "Email: [Required]";
		formLabels[1].style.color = "red";
		valid = false;
	}
	else if(!re.test(Email))
	{
		formLabels[1].innerHTML = "Email: [Incorrect Email]";
		formLabels[1].style.color = "red";
		valid = false;
	}
	else {
		formLabels[1].innerHTML = "Email: ";
		formLabels[1].style.color = "black";
		valid = (valid) ? true : false;
	}
	
/*	var userMobile = document.regForm.userMobile.value;
	if(isNaN(userMobile){
		formLabels[2].innerHTML = "Mobile: [Numbers only]";
		formLabels[2].style.color = "red";
		valid = false;
	}
	else {
		formLabels[2].innerHTML = "Mobile: ";
		formLabels[2].style.color = "black";
		valid = (valid) ? true : false;
	}*/
	
	var userpassword = document.regForm.userpassword.value;
	if(userpassword == "")
	{
		formLabels[2].innerHTML = "Password: [Required]";
		formLabels[2].style.color = "red";
		valid = false;
	}
	else if(userpassword.length > 8)
	{
		formLabels[2].innerHTML = "Password: ";
		formLabels[2].style.color = "black";
		valid = (valid) ? true : false;
	}
	else {
        formLabels[2].innerHTML = "Password: [Must be > 8]";
		formLabels[2].style.color = "red";	
	}
	
	/*var userConfirmPassword = document.regForm.userConfirmPassword.value;
	if(Confirm Password == ""){
		formLabels[4].innerHTML = "Confirm Password: [Required]";
		formLabels[4].style.color = "red";
		valid = false;
	}
	else if(Confirm Password.length < 8){
		formLabels[4].innerHTML = "Confirm Password: [Must be > 8]";
		formLabels[4].style.color = "red";
		valid = false;
	}
	else {
		formLabels[4].innerHTML = "Confirm Password: ";
		formLabels[4].style.color = "black";
		valid = (valid) ? true : false;
	}
	*/
return valid;
}