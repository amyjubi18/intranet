with(document.login){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && Usuarios.value==""){
			ok=false;
			alert("Debe escribir un nombre de usuario");
			Usuarios.focus();
		}
		if(ok && Clave.value==""){
			ok=false;
			alert("Debe escribir su contraseña");
			Clave.focus();
		}
		if(ok){ submit(); }
	}
}
