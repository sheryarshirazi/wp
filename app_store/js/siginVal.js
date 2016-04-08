function validate(){
	var name=document.loginForm.uname.value;
	var pass=document.loginForm.upass.value;
	
	alert(name);
	alert(pass);
	
	if(name==""){
		document.loginForm.uname.style.backgroundColor="#FD8080";
		alert('user name could not be empty');
	}else{
		document.loginForm.uname.style.backgroundColor="#fff";	
	}
	
	if(pass==""){
		document.loginForm.upass.style.backgroundColor="#FD8080";
		alert('password could not be empty');
	}else{
		document.loginForm.upass.style.backgroundColor="#fff";	
	}
	
}