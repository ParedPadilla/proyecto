// form.js


// Validar text box para los apellidos
function chkapellido1() {
	var mydata = document.getElementById("apellido1");
	var position = mydata.value.search(/[A-Z][a-z]+/);
	
	if(position != 0) {
		alert("El apellido entrado esta en un formato incorrecto.\nEl formato correcto es una palabra comenzando con mayúscula.");
		mydata.select();
		mydata.focus();		
		return false;
	} else
		return true;
}

function chkapellido2() {
	var mydata = document.getElementById("apellido2");
	var position = mydata.value.search(/[A-Z][a-z]+/);
	
	if(position != 0) {
		alert("El apellido entrado esta en un formato incorrecto.\nEl formato correcto es una palabra comenzando con mayúscula.");
		mydata.select();
		mydata.focus();		
		return false;
	} else
		return true;
}



// Validar text box para el nombre
function chknombre() {
	var mydata = document.getElementById("nombre");
	var position = mydata.value.search(/[A-Z][a-z]+/);
	
	if(position != 0) {
		alert("El nombre entrado esta en un formato incorrecto.\nEl formato correcto es una palabra comenzando con mayúscula.");
		mydata.select();
		mydata.focus();		
		return false;
	} else
		return true;
}

// Validar text box para la inicial
function chkinicial() {
	var mydata = document.getElementById("inicial");
	var position = mydata.value.search(/[A-Z]?/);
	
	if(position != 0) {
		alert("La inicial entrada esta en un formato incorrecto.\nEl formato correcto es una sola letra mayuscula.");
		mydata.select();
		mydata.focus();		
		return false;
	} else
		return true;
}

// Validar text box para el zipcode
function chkzip() {
	var mydata = document.getElementById("zipcode");
	var position = mydata.value.search(/\d{5}/);
	
	if(position != 0) {
		alert("El zipcode entrado esta en un formato incorrecto.\nEl formato correcto es #####.");
		mydata.select();
		mydata.focus();		
		return false;
	} else
		return true;
}

// Validar text box para telefono
function chktel() {
	var mydata = document.getElementById("telefono");
	var position = mydata.value.search(/\d{3}-\d{3}-\d{4}$/);
	
	if(position != 0) {
		alert("El telefono entrado esta en un formato incorrecto.\nEl formato correcto es ###-###-####");
		mydata.select();
		mydata.focus();		
		return false;
	} else
		return true;
}

// Validar text box para correos
function chkcorreo1() {
var mydata = document.getElementById("correo1");
	var position = mydata.value.search(/[a-z]+\.?[a-z]+?[0-9]?*@[a-z]+\.[com|edu]/);
	
	if(position != 0) {
		alert("El correo entrado esta en un formato incorrecto.\nSolo aceptamos dominios .com o .edu.\nIntente de nuevo.");
		mydata.select();
		mydata.focus();		
		return false;
	} else
		return true;
}

function chkcorreo2() {
var mydata = document.getElementById("correo2");
	var position = mydata.value.search(/[a-z]+\.?[a-z]+?[0-9]?*@[a-z]+\.[com|edu]/);
	
	if(position != 0) {
		alert("El correo entrado esta en un formato incorrecto.\nSolo aceptamos dominios .com o .edu.\nIntente de nuevo.");
		mydata.select();
		mydata.focus();		
		return false;
	} else
		return true;
}


// Validar text box para el password
function chkpasswd() {
	var mydata = document.getElementById("passwd1");
	var position = mydata.value.search(/\d{4}/);
	
	if(position != 0) {
		alert("El password entrado esta en un formato incorrecto.");
		mydata.select();
		mydata.focus();		
		return false;
	} else
		return true;
}

// Validar passwords
function chkall() {
	var mydata1, mydata2;
	
	var mydata1 = document.getElementById("passwd1");
	var mydata2 = document.getElementById("passwd2");

	if(mydata1.value != mydata2.value) {
		alert("Los passwords entrados no son iguales.\nIntente de nuevo.");
		mydata1.value = "";
		mydata2.value = "";
		
		mydata.select();
		mydata.focus();		
		return false;
	} else
		return true;
}