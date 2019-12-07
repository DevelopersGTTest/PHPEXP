console.log('hola')

var mostrar = function(elemento){
    elemento.style.display = 'block'
}

var ocultar = function(elemento){
    elemento.style.display = 'none'
}

var toggle = function (elemento) {

	if (window.getComputedStyle(elemento).display === 'none') {
		mostrar(elemento)
		return;
	}
    ocultar(elemento)
}

document.addEventListener("click", function(event){
    if (!event.target.classList.contains('toggle')) return;

	event.preventDefault();

	var content = document.querySelector(event.target.hash);
	if (!content) return;
	//logstage
	toggle(content);
}, false)

