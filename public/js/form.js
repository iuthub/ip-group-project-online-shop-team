window.onload=function(){
  const form = document.getElementById('form');
const username = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
const phoneNumber = document.getElementById('phoneNumber');
const postalCode = document.getElementById('postalCode');
const birthDate = document.getElementById('birthdate');
const city = document.getElementById('cityName');
const passport = document.getElementById('Passport');

form.addEventListener('submit', e => {
	e.preventDefault();
	checkInputs();

});


function checkInputs() {
	// trim to remove the whitespaces
	const usernameValue = username.value.trim();
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();
	const password2Value = password2.value.trim();
	const phoneNumberValue = phoneNumber.value.trim();
	const birthDateValue = birthdate.value.trim();
	const postalCodeValue = postalCode.value.trim();
	const cityValue = city.value.trim();
	const passportValue = passport.value.trim();
	let flag = 0;

	
	if(usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank');
	} 
	else if (!isUsername(usernameValue)){
		setErrorFor(username,'Username must contain at least 5 alphanumeric characters')
	}
	else {
		setSuccessFor(username);
		flag = flag+1;
	}
	
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email);
		flag = flag+1;
	}
	
	if(passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
	} 

	else {
		setSuccessFor(password);
		flag = flag+1;
	}
	
	if(password2Value === '') {
		setErrorFor(password2, 'Password2 cannot be blank');
	} else if(passwordValue !== password2Value) {
		setErrorFor(password2, 'Passwords does not match');
	} else{
		setSuccessFor(password2);
		flag = flag+1;
	}




if(phoneNumberValue === '') {
		setErrorFor(phoneNumber, 'Phone Number cannot be blank');
	} 
	else if (!isPhoneNumber(phoneNumberValue)) {
		setErrorFor(phonenumber, 'Not a valid phone number');
}
	else {
		setSuccessFor(phoneNumber);
		flag = flag+1;
	}
	if(postalCodeValue === '') {
		setErrorFor(postalCode, 'Postal Code cannot be blank');
	} 
		else if (!isPostalCode(postalCodeValue)) {
		setErrorFor(postalCode, 'Not a valid postalcode');

     }

	else {
		setSuccessFor(postalCode);
		flag = flag+1;
	}
	
	if(birthDateValue === '') {
		setErrorFor(birthDate, 'Birth Date  cannot be blank');
		flag = flag+1;
	} 
		else if (!isbirthDate(birthDateValue)) {
		setErrorFor(birthDate, 'Not a valid birth date');
     }
	else {
		setSuccessFor(birthDate);
		flag = flag+1;
	}
	if(cityValue === '') {
		setErrorFor(city, 'City cannot be blank');
	} 
		else if (!isCity(cityValue)) {
		setErrorFor(city, 'Not a valid city');
}

	else {
		setSuccessFor(city);
		flag = flag+1;
	}
	if(passportValue === '') {
		setErrorFor(passport, 'Passport cannot be blank');
	} 
		else if (!isPassport(passportValue)) {
		setErrorFor(passport, 'Not a valid passport number');
}

	else {
		setSuccessFor(passport);
		flag = flag+1;

	}
	if(flag == 9){
		form.submit();
	}
}


function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
function isUsername(username) {
	return /^[a-zA-Z0-9]{5,}$/.test(username);
}
function isPassword(password) {
	return /^(?=.*?[a-zA-Z0-9])(?=.*?[#?!@$%^&*-]).{5,}$/.test(password);
}
function isPhoneNumber(phonenumber) {
	return /^[+]{1}[9]{2}[8]{1}[-][9]{1}[0-9]{1}[-][0-9]{7}$/.test(phonenumber);
}
function isbirthDate(birthdate) {
	return /^^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19\d{2}|20[0-1]{1}[0-9]{1})$$/.test(birthdate);
}
function isPostalCode(postalcode) {
	return /^[0-9]{7}$/.test(postalcode);
}
function isCity(city) {
	return /^[a-zA-Z]{2,}$/.test(city);
}
function isPassport(passport) {
	return /^[A]{1}(A|B){1}[0-9]{7}$/.test(passport);
}

}
