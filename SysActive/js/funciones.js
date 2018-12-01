//Todo Ajax

console.log('Hola dice LORD HACKOBO ');

function agregarPost(titulo, descripcion, id_categoria, id_usuario){

    values = `titulo ${titulo} descripcion ${descripcion} 
        id_categoria ${id_categoria} id_usuario ${id_usuario}`
    
    console.log(values)    
    /*$.ajax({
        type: "POST",
        url: '../includes/savepost.php',
        data: values,
        success: function(res){
            if(res == 1){
                console.log('todo se inserto bien')
            }else{
                console.log('No se inserto nada')
            }
        }
    })*/    

}