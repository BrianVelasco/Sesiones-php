/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function (){
   
    $("#frmSesion").submit(function (evt){
        evt.preventDefault();
       // $("#divAjax").html("<img src='images/ajax-loader.gif'>");
        $.ajax({
            url:"verificar.php",
            type: "POST",
            data: $("#frmSesion").serialize(),
            beforeSend: function (){
                    $("#divres").html("<img src='images/ajax-loader.gif'>");
            },
            success: function(datos) {
                if(datos==='1'){
                    location = "menu.php";
                }
                else{
                    $("#divres").html(datos);
                }
            }
        });
    });
    
});

