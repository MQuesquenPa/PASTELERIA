const validarCorreo =()=>{
    let valor=$('#txtEmail').val();
    let regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
    if(valor==""){
      $("#spanEmailLogin").text("No puedes dejar vacio este Campo");
      $("#spanEmailLogin").show(); 
      $("#txtEmail").css('border-color','red'); 
      return false;
    }else if(!regex.test(valor.trim())){
      $("#spanEmailLogin").text("Debes escribir un Correo Valido");
      $("#spanEmailLogin").show();
      $("#txtEmail").css('border-color','red'); 
      return false;
    }else{
      $("#spanEmailLogin").hide();
      $("#txtEmail").css('border-color','green'); 
      return true;
    }
}

const validarPassword=()=>{
    let valor=$('#txtPassword').val();
    if(valor==""){
    $("#spanPassowrdLogin").text("No puedes dejar vacio este Campo") ;
    $("#spanPassowrdLogin").show();
    $("#txtPassword").css('border-color','red'); 
    return false;
    }else{
    $("#spanPassowrdLogin").hide();
    $("#txtPassword").css('border-color','green'); 
    return true;
    }
}

const validarRepeatPassword=()=>{
    let valor=$('#txtPasswordRepeat').val();
    let valorPassword=$('#txtPassword').val();
    if(valor==""){
    $("#spanPassowrdRepeatLogin").text("No puedes dejar vacio este Campo");
    $("#spanPassowrdRepeatLogin").show();
    $("#txtPasswordRepeat").css('border-color','red'); 
    return false;
    }else if(valor!=valorPassword){
    $("#spanPassowrdRepeatLogin").text("Las Contraseñas deben ser iguales");
    $("#spanPassowrdRepeatLogin").show();
    $("#txtPasswordRepeat").css('border-color','red'); 
    return false;  
    }else{
    $("#spanPassowrdRepeatLogin").hide();
    $("#txtPasswordRepeat").css('border-color','green'); 
    return true;
    }
}
const DOMINIO="http://localhost/Pasteleria/";
const IniciarSesion=()=>{
    if(validarCorreo()==false || validarPassword()==false || validarRepeatPassword()==false){
      Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Sigue las Indicaciones no seas Pendejo',
        showConfirmButton: false,
        timer: 2500
      })
    }else{
        
        window.location.href = DOMINIO+"Views/Panel/";
    }
    }

