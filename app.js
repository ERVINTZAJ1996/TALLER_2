var formulario = document.getElementoById("formulario");

formulario.addEventListener("submit", function(e){
	e.preventDefault();
	console.log("me diste un click")

	var datos = new FormData(formulario);

	console.log(datos)
	console.log(datos.get("codigo"))
	console.log(datos.get("nombre"))
	console.log(datos.get("appellido"))
	console.log(datos.get("telefono"))
	console.log(datos.get("email"))
	console.log(datos.get("genero"))
	console.log(datos.get("edad"))

	fetch("post.php",{
		method: "POST",
		body: datos
	})
	.then(res => res.js())
	.then(data =>{
		console.log(data)
	})
})