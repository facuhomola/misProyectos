function validar(){
    let validPhone = /^\+?\d{2}(\s\d{3}){2}\s\d{4}$/;
    var nombre = document.form.nombre.value;
    var dni = document.form.dni.value;
    var edad = document.form.edad.value;
    var telefono = document.form.telefono.value;
    var fecha = document.form.fecha.value;
    //var comentario = document.form.comentario.value;
    if( nombre == "" || dni == "" || edad == "" || telefono == "" ){
        alert("Debe completar los campos solicitados");
    }else{
        if( nombre.length < 3 ){
            alert("Debe ingresar un nombre válido");
        }else{
            if( dni.length < 8 || dni.length > 8 ){
                alert("El dni debe tener 8 digitos");
            }else{
                if( edad < 18 || edad > 99 ){
                    alert("Debe ingresar una edad válida");
                }else{
                    if (validPhone.test(telefono) ) {
                        alert("Ingrese un teléfono válido")
                    }else{
                        if (fecha == false) {
                            alert("Seleccione una fecha")
                        }else{
                            document.form.submit();
                        }
                    }
                }
            }
        }
    }
   
}

/*
function validarEmail(valor){
	re=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
	if(!re.exec(valor)){
		return true;
	}
	else{
        return false;
    }
}
*/