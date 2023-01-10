with(document.registro){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && Usuarios.value==""){
			ok=false;
			alert("Debe escribir un nombre de usuario");
			Usuarios.focus();
		}
		if(ok && NombreCompleto.value==""){
			ok=false;
			alert("Debe escribir su nombre completo");
			NombreCompleto.focus();
		}
		if(ok && email.value==""){
			ok=false;
			alert("Debe escribir su correo electrónico");
			email.focus();
		}
		if(ok && Clave.value==""){
			ok=false;
			alert("Debe escribir su contraseña");
			Clave.focus();
		}
		if(ok && confirm_password.value==""){
			ok=false;
			alert("Debe confirmar contraseña");
			confirm_password.focus();
		}

		if(ok && Clave.value!= confirm_password.value){
			ok=false;
			alert("Las contraseñas no coinciden");
			confirm_password.focus();
		}
		if(ok && IdPermisos.value==""){
			ok=false;
			alert("Seleccione la gerencia ");
			IdPermisos.focus();
		}


		if(ok){ submit(); }
	}
}
