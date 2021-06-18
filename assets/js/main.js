document.addEventListener("DOMContentLoaded", function() {

    document.getElementById('textarea').onkeyup = function () {
    document.getElementById('count').innerHTML = "Caracteres restantes: " + (500 - this.value.length);
    };
});

function listarTweets(){

    if(document.getElementById('mensajes_container')){

        fetch("../controller/listarTweets.php ",{
        
        }).then(response => response.text()).then(response =>{
            console.log(response);  
    
            mensajes_container.innerHTML = response;    
        })
    }else{
        console.log("no se encontro contenedor");
    }
   
}

listarTweets();


if(document.getElementById('enviar')){
    enviar.addEventListener('click', ()=>{

        fetch("../controller/agregarTweet.php",{
            method: "POST",
            body: new FormData(frm)
        }).then(response => response.text()).then(response => {
            if(response == "ok"){
                console.log(response);
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Registrado con exito',
                    showConfirmButton: false,
                    timer: 1500
                  })    
                  frm.reset();
                  document.getElementById('count').innerHTML = '';
                  listarTweets();
    
            }else{
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Error al registra ',
                    showConfirmButton: false,
                    timer: 1500
                  })
                 
            }
        }); 
    
    });
       
}else{
    console.log("no se encontro el boton enviar");
}


if(document.getElementById('actualizar')){
    
    actualizar.addEventListener('click', ()=>{

        
        fetch("../controller/editarTweet.php",{
            method: "POST",
            body: new FormData(frm)
        }).then(response => response.text()).then(response => {
            console.log(response);
            if(response == "ok"){
                console.log(response);
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Actualizado con exito',
                    showConfirmButton: false,
                    timer: 5000
                  })
                  window.location.href = "../view/index.php";    
                  document.getElementById('textarea').value = '';
                  document.getElementById('count').innerHTML = '';
    
            }else{
                Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: 'Error al actualizar',
                    showConfirmButton: false,
                    timer: 1500
                  })
                 
            }
        }); 
    
    });
}

function eliminar(id){

        let data = {
            id: id
        }
        fetch("../controller/eliminarTweet.php",{
            method: "POST",
            body: JSON.stringify(data),

        }).then(response => response.text()).then(response => {
            console.log(response);
            if(response == "ok"){
              
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Eliminado con exito',
                    showConfirmButton: false,
                    timer: 1500
                  })
                  
                listarTweets();

                  
    
            }else{
                Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: 'Error al eliminar',
                    showConfirmButton: false,
                    timer: 1500
                  })
                 
            }
        }); 
    
}