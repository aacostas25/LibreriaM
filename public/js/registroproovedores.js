const nombre = document.getElementById("nombre");
const apellido = document.getElementById("apellido");
const celular = document.getElementById("celular"); //sabe que es todo el formulario
const nit = document.getElementById("nit");


const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y numeros
	apellido: /^[a-zA-ZÀ-ÿ\s]{1,100}$/, // Letras y espacios, pueden llevar acentos.
    celular: /^[0-9]{1,40}$/, // Numeros.
    nit: /^[0-9]{1,40}$/, // Numeros.
}

const validarFormulario = (e) => {
    switch (e.target.name){
        case "nombre":
            validarCampo(expresiones.nombre, e.target, 'nombre');
            console.log("nombre");
        break;
        case "apellido":
            validarCampo(expresiones.apellido, e.target, 'apellido');
            console.log("apellido");
        break;
        case "celular":
            validarCampo(expresiones.celular, e.target, 'celular');
        break;
        case "nit":
          validarCampo(expresiones.nit, e.target, 'nit');
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



function vacios(){
    if (nombre.value.length == 0|| apellido.value.length ==0 ||celular.length == 0){
            alert("Debes diligenciar todos los campos.")
            document.getElementById("boton").disabled = true;
    } else {
        alert("Formulario enviado con exito.")
    }
}
