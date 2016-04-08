
	
function validate(){
	var fname=document.register.ufName.value;
	var lname=document.register.ulName.value;
	var uname=document.register.nUserName.value;
	var pass1=document.register.nUserPass1.value;
	var pass2=document.register.nUserPass2.value;
	var gender=document.register.nUserGender.value;
	var email=document.register.nUserEmail.value;
	var dob=document.register.nUserDOB.value;
	
	
	
	
	if(fname==""||lname==""||uname=="" || pass1=="" || pass2=="" || gender==""|| email=="" || dob==""){
		alert('no field could be empty');
	}//if
	else{
		//checkBox();
	}//else
	
}//validate()


function fncheck(){
	var fname=document.register.ufName.value;
	
}



function emailCheck(){
		var email=document.register.nUserEmail.value;
		var Epattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
		if(Epattern.test(email)){
			document.register.nUserEmail.style.backgroundColor="#fff";
		}
		else{
			alert('email should like this sheryarshirazi@gmail.com');
			document.register.nUserEmail.style.backgroundColor="#FD8080";
		}
}//emailCheck()	

function passCheck(){
	//alert('password check called');
	var pass1=document.register.nUserPass1.value;
	var pass2=document.register.nUserPass2.value;
	//alert(pass1);
	//alert(pass2);
	if(pass1=='' && pass2==''){
		alert('password could not be empty');
		document.getElementById('nUserPass2').style.backgroundColor="#FD8080";
	}
	else if(pass1==pass2){
			alert("password matched");
			document.getElementById('nUserPass2').style.backgroundColor="#fff";
	}//if 
		else{
			alert('password not matched');
			document.getElementById('nUserPass2').style.backgroundColor="#FD8080";
	}//else
}//passChec()	

function namecheck(){
	var name=document.register.nUserName.value;
	if(name==""){
			//alert('name called');
			var input = document.register.nUserName;
			input.placeholder = "please enter your name";
			document.register.nUserName.style.backgroundColor="#FD8080";
		}
	else{
		document.register.nUserName.style.backgroundColor="#fff";
	}		
}//namecheck()


function gcheck(){
	var gender=document.register.nUserGender.value;
	var input = document.register.nUserGender;
	if(gender==""){
			//alert('gender called');
			input.placeholder = "please enter F or f";
			document.register.nUserGender.style.backgroundColor="#FD8080";
	}else if(gender!='female' && gender!='Female' && gender!='male' && gender!='Male'){
		alert("gender is not male and female");
		document.register.nUserGender.style.backgroundColor="#FD8080";
	}
	else{
		document.register.nUserGender.style.backgroundColor="#fff";
	}		
}//gcheck()

function checkBox(){
	//alert('checkbox');
	var termBool=document.register.terms.checked;//return boolen for term checkbox check or not

		if(!termBool){
			alert('terms did not checked');
			}	
		}//checBox()

function dobCheck(){
	//alert("dob");
	var dob=document.register.nUserDOB.value;
	var input = document.register.nUserDOB;
	//alert(dob);
	if(dob==""){
			//alert('dob called');
			input.placeholder = "enter date of birth";
			document.register.nUserDOB.style.backgroundColor="#FD8080";
	}
	else{
		document.register.nUserDOB.style.backgroundColor="#fff";
	}		
}//gcheck()