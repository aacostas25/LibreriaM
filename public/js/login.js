const nombre = document.getElementById("nombre");
const apellido = document.getElementById("apellido");
const formulario = document.getElementById("formulario"); //sabe que es todo el formulario
const email = document.getElementById("mail");
const siboton = document.getElementById("flexRadioDefault1");
const inputs = document.querySelectorAll('#formulario input');
const usuario = document.getElementById("usuario");

const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[#?!@$^&]).{8,11}$/, // 8 a 11 digitos.
}


//Validación del correo electronico
email.addEventListener("input", function (event) {
    let boton = document.getElementById("boton");
    boton.disabled = false;
    emailval = email.value;
    correo = emailval.trim();
    if (email.validity.typeMismatch || correo.length == 0) {
        email.setCustomValidity("Se espera una dirección de correo electronico");
        email.style.borderColor='red';
        document.getElementById("boton").disabled = true;
    } else {
        email.setCustomValidity("");
        email.style.borderColor='green';
    }
}); 


function otro() {
    let respuesta = document.getElementById("respuesta");
    let registro = document.getElementById("radio1");
    if (registro.checked){
        respuesta.innerHTML = `
    <label>Esta a el día siempre con las últimas novedades.</label>`;
    } else {
        respuesta.innerHTML = `` //es necesario ponerlo asi para que pueda devolverme
        //respuesta.style.display = "none"; //asi no deja devolverme a el si
    }  
}

const validarFormulario = (e) => {
    switch (e.target.name){
        case "nombre":
            validarCampo(expresiones.nombre, e.target, 'nombre');

        break;
        case "usuario":
            validarCampo(expresiones.usuario, e.target, 'usuario');
        break;
        case "apellido":
            validarCampo(expresiones.apellido, e.target, 'apellido');
        break;
        case "password":
			validarCampo(expresiones.password, e.target, 'password');
			validarPassword2();
        break;
        case "password2":
            validarCampo(expresiones.password, e.target, 'password2');
			validarPassword2();
        break;
    }
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
        document.getElementById(`${campo}`).style.borderColor="green";
	} else {
        document.getElementById(`${campo}`).style.borderColor="red";
	}
}

inputs.forEach((input) => {
    input.addEventListener('keyup',validarFormulario); //levantan la tecla
    input.addEventListener('blur',validarFormulario); 

});


formulario.addEventListener('submit', (e) =>{
     e.preventDefault(); //evitar que la url cambie
     
})

const validarPassword2 = () => {
	const inputPassword1 = document.getElementById('password');
	const inputPassword2 = document.getElementById('password2');

	if(inputPassword1.value !== inputPassword2.value){
		document.getElementById('password').style.borderColor='red';
        document.getElementById('password2').style.borderColor='red';
		document.querySelector(`#grupo-password2 .formulario__input-error`).classList.add('formulario__input-error-activo');
	} else {
		document.getElementById('password').style.borderColor="green";
		document.getElementById('password2').style.borderColor='green';
		document.querySelector(`#grupo-password2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
	}
}


function vacios(){
    if (nombre.value.length == 0|| apellido.value.length ==0 ||correo.length == 0
        || inputPassword1.value.length ==0 || inputPassword2.value.length ==0){
            alert("Debes diligenciar todos los campos.")
            document.getElementById("boton").disabled = true;
    } else {
        alert("Formulario enviado con exito.")
    }
}
