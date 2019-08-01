function verificaAdmin(){
    senha =  document.getElementById('senha');
    email =  document.getElementById('email');
    
    if(senha == "teste123" && email == "teste123@gmail.com"){
        window.open("pageAdministrador.blade.php");
    } 
}