function pegarValue(){
    var value = $('#exc').val();
    alert(value);
 
    $.ajax({
   type: 'post',
   url: "exclusao.php",
   data: { 'variavel': value },
   dataType  : html,
})
  .done(function( msg ) {
       // resposta do servidor
       alert( msg );
});
var url = "exclusao.php";
$(location).attr('href',url);
}

function cancelar(){
    var url = "listaalt.php";
    $(location).attr('href',url);
}

/*

function conf1(cont){
    /*var usuario1 = document.getElementById('usuario1').checked;
    var usuario2 = document.getElementById('usuario2').checked;*/
/*
    for (var i =0; i < cont; i++ ){
        if (document.formulario1.cod1[i].checked){
            var c = confirm("Deseja realmente excluir esse usuário?");
            if (c){
                window.location = "../excluir/excluir.php";
                exit();
            }else {
                window.location = "../excluir/exc.php";
                exit();
            }     
        }
    }
    alert('Escolha um usuario!');
    
} 
*/

function conf2(cont){
    /*var usuario1 = document.getElementById('usuario1').checked;
    var usuario2 = document.getElementById('usuario2').checked;*/
    for (var i =0; i < cont; i++ ){
        if (document.formulario2.cod[i].checked){
            var c = confirm("Deseja realmente excluir esse usuário?");
            if (c){
                window.location = "../excluir/excluir.php";
                exit();
            }else {
                window.location = "../excluir/exc.php";
                exit();
            }     
        }
    }
    alert('Escolha um usuario!');
    
    
    /*
    if ((usuario1)||(usuario2)){
        var c = confirm("Deseja realmente excluir esse usuário?");
        if (c){
            window.location = "../excluir/excluir.php";
        }else {
            window.location = "../excluir/exc.php";
        }     
    }else{
        alert('Escolha um usuario!');
    }
    
 */   
}





