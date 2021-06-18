
    function mostrarPass() {
        const pass_input = document.getElementById("pass");
        if (pass_input.type === "password") {
          pass_input.type = "text";
        } else {
          pass_input.type = "password";
        }
       
    }
    

document.addEventListener("DOMContentLoaded", function () {
  

    
        if(document.getElementById("registrar-btn")){
        document.getElementById("registrar-btn").addEventListener("click", async ()=>{
    
            let frmRegis = document.getElementById("frmRegis");
            try {   
                
        
                let response = await fetch("../controller/crearCuenta.php",{
                    method: "POST",
                    body: new FormData(frmRegis)
                });
        
                let data = await response.text();
            
                console.log(data);
                if(data === "ok"){
                 
                   window.location.href = "../view/login.php";
                    document.getElementById("vist_Previa").classList.add("d-none");
                    frmImg.reset();
                    listar();
        
        
                }else{
                }
        
            } catch (error) {
                
            }
        });

        }
     
    

        if(document.getElementById("login-btn")){
            document.getElementById("login-btn").addEventListener("click", async ()=>{
    
                let frmLogin = document.getElementById("frmLogin");
                try {
            
                    let response = await fetch("../controller/loginCuenta.php",{
                        method: "POST",
                        body: new FormData(frmLogin)
                    });
            
                    let data = await response.text();
                
                    console.log(data);
                    if(data === "ok"){
            
                       // alert("elpepe");
                        window.location.href = "../view/index.php";
                        // document.getElementById("vist_Previa").classList.add("d-none");
                        // frmImg.reset();
                        // listar();
            
            
                    }else{
                    }
            
                } catch (error) {
                    
                }
            });    
        }
     

});






